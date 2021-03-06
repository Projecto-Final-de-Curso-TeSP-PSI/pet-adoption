<?php

namespace frontend\controllers;

use common\classes\RoleManager;
use common\models\Address;
use common\models\AdoptionAnimal;
use common\models\Animal;
use common\models\AnimalAdoptionSearch;
use common\models\AssociatedUser;
use common\models\AnimalSearch;
use common\models\District;
use common\models\FoundAnimal;
use common\models\FoundAnimalSearch;
use common\models\MissingAnimal;
use common\models\Nature;
use common\models\Photo;
use common\models\Size;
use common\models\User;
use common\models\UserSearch;
use Yii;
use common\models\Organization;
use common\models\OrganizationSearch;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use function Sodium\add;

/**
 * OrganizationController implements the CRUD actions for Organization model.
 */
class OrganizationController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'update', 'delete', 'associate-manage', 'associate-remove'],
                'rules' => [
                    [
                        'actions' => ['associate-manage'],
                        'allow' => true,
                        'roles' => ['associatedUser'],
                    ],
                    [
                        'actions' => ['associate-remove'],
                        'allow' => true,
                        'roles' => ['manageOrganization'],
                        'roleParams' => ['associate_id' => Yii::$app->request->get('id')],
                    ],

                    [
                        'actions' => ['create'],
                        'allow' => true,
                        'roles' => ['createOrganizationRequest'],
                    ],
                    [
                        'actions' => ['update', 'delete'],
                        'allow' => true,
                        'roles' => ['manageOrganization'],
                        'roleParams' => ['organization_id' => Yii::$app->request->get('id')],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Organization models.
     * @return mixed
     * @throws \Exception
     */
    public function actionIndex()
    {
        try {

            $searchModel = new OrganizationSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            $query = Organization::find()->isActive(true);

            $request = Yii::$app->request;

            if ($request->post() != null) {

                $requestDistrictId = ArrayHelper::getValue($request->post(), 'District.id');
                if ($requestDistrictId == "all") {
                    $query = Organization::find()
                        ->isActive(true);
                } else {
                    $query = Organization::find()
                        ->isActive(true)
                        ->innerJoinWith('address')
                        ->where(['in', 'district_id', $requestDistrictId]);
                }

            }

            //custom data provider
            $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 10,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'name' => SORT_ASC,
                    ]
                ],
            ]);

            //Generate list with all districs that have organizations
            $districts = District::withOrganizations();

            //Add generic option to the dropdown list
            array_push($districts, ['id' => 'all', 'name' => 'Todas as associações']);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'districts' => $districts,
            ]);
        } catch (Exception $e) {
            //Throw exception case anything fails
            throw $e;
        }
    }

    /**
     * Displays a single Organization model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionRescue()
    {

        $loggedUserId = Yii::$app->user->id;
        $loggedAssociatedUser = AssociatedUser::findOne($loggedUserId);

        $organizationName = Organization::findOne(['id' => $loggedAssociatedUser->organization_id]);

        if ($loggedAssociatedUser == null) {
            throw new ForbiddenHttpException(
                'Não está associado a nenhuma organização, pelo que não tem acesso à página que está a tentar aceder.');
        }

        $organizationId = $loggedAssociatedUser->organization_id;
        $organization = Organization::findOne($organizationId);
        $orgDistrict = $organization->address->district_id;

        $addresses = Address::find()->where(['district_id' => $orgDistrict])->select('id');
        $foundAnimalsModel = FoundAnimal::find()->where(['location_id' => $addresses, 'is_active' => 1]);


        $dataProviderFoundAnimal = new ActiveDataProvider([
            'query' => $foundAnimalsModel,
            'pagination' => false,
        ]);

        return $this->render('rescue', [
            'dataProviderFoundAnimal' => $dataProviderFoundAnimal,
            'organizationName' => $organizationName
        ]);
    }

    public function actionDetailsRescue($id)
    {
        $loggedUserId = Yii::$app->user->id;
        $loggedAssociatedUser = AssociatedUser::findOne($loggedUserId);

        $organizationName = Organization::findOne(['id' => $loggedAssociatedUser->organization_id]);

        if ($loggedAssociatedUser == null) {
            throw new ForbiddenHttpException(
                'Não está associado a nenhuma organização, pelo que não tem acesso à página que está a tentar aceder.');
        }

        $organizationId = $loggedAssociatedUser->organization_id;
        $organization = Organization::findOne($organizationId);
        $orgDistrict = $organization->address->district_id;

        $foundAnimal = FoundAnimal::findOne(['id' => $id]);
        if ($foundAnimal->location->district_id == $orgDistrict) {
            $photo = Photo::findOne(['id_animal' => $foundAnimal->animal->id]);

            return $this->render('detailsAnimalRescue', [
                'foundAnimal' => $foundAnimal,
                'photo' => $photo,
                'organizationName' => $organizationName
            ]);
        }

        throw new ForbiddenHttpException(
            'Este animal não está localizado no seu distrito.');

    }

    public function actionAcceptRescue($id)
    {
        try {
            $loggedUserId = Yii::$app->user->id;
            $loggedAssociatedUser = AssociatedUser::findOne($loggedUserId);

            if ($loggedAssociatedUser == null) {
                throw new ForbiddenHttpException(
                    'Não está associado a nenhuma organização, pelo que não tem acesso à página que está a tentar aceder.');
            }

            $organizationId = $loggedAssociatedUser->organization_id;
            $organization = Organization::findOne($organizationId);
            $orgDistrict = $organization->address->district_id;

            $foundAnimal = FoundAnimal::findOne(['id' => $id]);


            if ($foundAnimal->location->district_id == $orgDistrict) {
                $adoptionAnimal = new AdoptionAnimal();
                $adoptionAnimal->id = $id;
                $adoptionAnimal->is_on_fat = 0;
                $adoptionAnimal->associated_user_id = $loggedUserId;
                $adoptionAnimal->organization_id = $organizationId;
                $animal = Animal::findOne($id);
                $animal->createdAt = date("Y-m-d H:m:s");

                if ($adoptionAnimal->save() && $animal->save()) {
                    $foundAnimal->is_active = 0;
                    $foundAnimal->save();

                    Yii::$app->session->setFlash('Success', 'O animal foi adicionado à lista de animais para adoção da sua associação.');
                    return $this->redirect('rescue');
                }
            }

        } catch (Exception $e) {
            Yii::$app->session->setFlash('Error', 'Erro ao tentar concluir o resgate.');
        }

        throw new ForbiddenHttpException(
            'Este animal não está localizado no seu distrito.');



    }

    /**
     * Creates a new Organization model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('associatedUser')){
            Yii::$app->session->setFlash('Error', 'Um utilizador apenas pode estar registado numa associação!');
            return $this->redirect(['site/index']);
        }

        $organization = new Organization();
        $address = new Address(['scenario' => Address::SCENARIO_ADDRESS]);

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {

            if (Yii::$app->request->post()) {
                $post = Yii::$app->request->post();

                if ($address->load($post) && $address->save()) {
                    $organization->load($post);
                    $organization->address_id = $address->id;
                    $organization->founder_id = Yii::$app->user->id;

                    if ($organization->save()) {

                        $transaction->commit();
                        Yii::$app->session->setFlash('Success', "Associação submetida com sucesso.");
                        return $this->redirect(['site/index']);
                    } else {

                        $transaction->rollBack();
                        Yii::$app->session->setFlash('Error', "Erro ao submeter associação.");
                        return $this->render('create', [
                            'newOrganization' => $organization,
                            'newAddress' => $address,
                        ]);
                    }
                } else {

                    $transaction->rollBack();
                    Yii::$app->session->setFlash('Error', "Erro ao submeter associação.");
                    return $this->render('create', [
                        'newOrganization' => $organization,
                        'newAddress' => $address
                    ]);
                }
            }

            return $this->render('create', [
                'organization' => $organization,
                'address' => $address,
            ]);

        } catch (\Exception $e) {

            $transaction->rollBack();
            return $this->redirect('site/index');
        }
    }

    /**
     * Updates an existing Organization model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        //$res = Yii::$app->user->can('manageOrganization', ['organization_id' => $id]);
        $organization = $this->findModel($id);

        $address = Address::findOne($organization->id);

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {

            if (Yii::$app->request->post()) {
                $post = Yii::$app->request->post();

                if ($address->load($post) && $address->save()) {
                    $organization->load($post);

                    if ($organization->save()) {

                        $transaction->commit();
                        Yii::$app->session->setFlash('Success', "Organização salva com sucesso.");
                        return $this->redirect('../site/index');
                    } else {

                        $transaction->rollBack();

                        Yii::$app->session->setFlash('error', "Erro ao salvar organização.");
                        return $this->render('update', [
                            'organization' => $organization,
                            'address' => $address,
                        ]);
                    }
                } else {

                    $transaction->rollBack();

                    Yii::$app->session->setFlash('error', "Erro salvar organização.");
                    return $this->render('update', [
                        'organization' => $organization,
                        'address' => $address,
                    ]);
                }

            }

            return $this->render('update', [
                'organization' => $organization,
                'address' => $address,
            ]);

        } catch (\Exception $e) {
            $transaction->rollBack();
            return $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            return $this->redirect(['site/index', /*'id' => $newOrganization->id,*/ 'error_message' => $e->getMessage()]);
        }
    }

    /**
     * Deletes an existing Organization model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {

        $organization = $this->findModel($id);
        $organization->status = Organization::STATUS_INACTIVE;

        if ($organization->save()) {
            Yii::$app->session->setFlash('Success', "Organização eliminada com sucesso.");
            return $this->redirect(['site/index']);
        } else {
            Yii::$app->session->setFlash('Error', "Erro ao eliminar organização.");
            return $this->redirect(['site/index']);
        }

    }

    /**
     * Finds the Organization model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Organization the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Organization::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Action thar render the associate-manage view
     * @param $id
     * @return string
     */
    public function actionAssociateManage()
    {

        //Verify if user has associatedUser relation, therefore also as an organization assigned
        $user = AssociatedUser::findOne(Yii::$app->user->id);

        $organizationName = Organization::findOne(['id' => $user->organization_id]);
        if ($user == null)
            throw new ForbiddenHttpException("Não está associado a nenhuma organização");

        $searchModel = new UserSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        //Query's all users of the same organization of the logged user
        $query = User::find()
            ->andOnCondition(['status' => User::STATUS_ACTIVE])
            ->joinWith('associatedUser')
            ->andWhere(['organization_id' => $user->organization_id])
            ->andWhere(['isActive' => true]);

        //custom data provider
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'firstName' => SORT_ASC,
                ]
            ],
        ]);

        return $this->render('associate-manage', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'organizationName' => $organizationName
        ]);
    }

    /**
     * Action that removes an user from one association, and also remove the associatedUser
     * @param $id
     * @return \yii\web\Response
     * @throws ForbiddenHttpException
     */
    public function actionAssociateRemove($id)
    {

        //If user to remove doesn't have a associatedUser descendency
        $associatedUser = AssociatedUser::findOne($id);
        if ($associatedUser == null)
            throw new BadRequestHttpException("Whrong remove request");

        if (RoleManager::revokeRole(RoleManager::ASSOCIATED_USER_ROLE, $id)) {
            Yii::$app->session->setFlash('Success', "Utilizador removido com sucesso!");
        } else {
            Yii::$app->session->setFlash('Error', "Erro ao remover user da associação!");
        }

        return $this->redirect(['organization/associate-manage']);
    }

}
