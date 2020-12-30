<?php

namespace frontend\controllers;

use common\models\Address;
use common\models\Animal;
use common\models\District;
use common\models\MissingAnimal;
use Yii;
use common\models\Organization;
use common\models\OrganizationSearch;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
                'only' => ['create', 'update', 'delete'],
                'rules' => [
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
                ]
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

            if( $request->post() != null) {

                $requestDistrictId = ArrayHelper::getValue($request->post(), 'District.id' );
                if($requestDistrictId == "all") {
                    $query = Organization::find()->isActive(true);
                } else {
                    $query = Organization::find()->isActive(true)
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
        }
        catch(Exception $e){
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

    /**
     * Creates a new Organization model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $organization = new Organization();
        $address = new Address(['scenario' => Address::SCENARIO_ADDRESS]);

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {

            if (Yii::$app->request->post()) {
                $post = Yii::$app->request->post();

                if($address->load($post) && $address->save()){
                    $organization->load($post);
                    $organization->address_id = $address->id;
                    $organization->founder_id = Yii::$app->user->id;

                    if($organization->save()){

                        $transaction->commit();
                        Yii::$app->session->setFlash('Success', "Associação criada com sucesso.");
                        return $this->redirect(['site/index']);
                    } else{

                        $transaction->rollBack();
                        Yii::$app->session->setFlash('Error', "Erro ao criar associação.");
                        return $this->render('create', [
                            'newOrganization' => $organization,
                            'newAddress' => $address,
                        ]);
                    }
                } else{

                    $transaction->rollBack();
                    Yii::$app->session->setFlash('Error', "Erro ao criar associação.");
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

                if($address->load($post) && $address->save()){
                    $organization->load($post);

                    if($organization->save()){

                        $transaction->commit();
                        Yii::$app->session->setFlash('Success', "Organização salva com sucesso.");
                        return $this->redirect('../site/index');
                    } else{

                        $transaction->rollBack();

                        Yii::$app->session->setFlash('error', "Erro ao salvar organização.");
                        return $this->render('update', [
                            'organization' => $organization,
                            'address' => $address,
                        ]);
                    }
                } else{

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
        $organization->status = Organization::INACTIVE;

        if($organization->save()){
            Yii::$app->session->setFlash('Success', "Organização eliminada com sucesso.");
            return $this->redirect(['site/index']);
        }
        else{
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
     * @param $id
     * @return string
     */
    public function actionOrganizationFilter1($id){

        $districts = District::findOne($id);

        $cities = Address::find()->where(['in', 'district_id', $id])->all();

        $addressIds = $cities->find()->select('id')->all();
        $organizations = Organization::find()->where(['in', 'address_id', $addressIds])->all();

        return $this->render('index', [
            'filter1' => $districts,
            'filter2' => $cities,
            'filter3' => $organizations
        ]);
    }
}
