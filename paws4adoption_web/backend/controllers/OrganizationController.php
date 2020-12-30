<?php

namespace backend\controllers;

use backend\modules\api\models\Address;
use backend\modules\api\models\User;
use common\models\AssociatedUser;
use Facebook\WebDriver\Exception\ElementClickInterceptedException;
use Yii;
use common\models\Organization;
use backend\models\OrganizationSearch;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\filters\AccessControl;
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
                'rules' => [
                    [
                        'actions' => [
                            'index',
                            'view',
                            'update',
                            'approval-pending',
                            'approve-organization',
                            'reprove-organization',
                            'block'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Organization models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrganizationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Organization::find()->isNotApprovalPendind();

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


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays all pending approval organizations
     * @return string
     */
    public function actionApprovalPending()
    {
        $searchModel = new OrganizationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Organization::find()->isAprovalPending();

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

        return $this->render('approval-pending', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
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
     * Updates an existing Organization model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();

        try{
            $post = Yii::$app->request->post();
            if (!$model->load($post) || !$model->save())
                throw new Exception("Erro");

            $address = Address::findOne($model->address_id);
            if(!$address->load($post) || !$address->save())
                throw new Exception("Erro");

            $transaction->commit();
            return $this->redirect(['view', 'id' => $model->id]);

        } catch(\Exception $e){
            $transaction->rollBack();
            return $this->render('update', [
                'model' => $model,
            ]);
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
     * Method that changes the organization state to INACTIVE
     * @param $id
     * @return \yii\web\Response
     */
    public function  actionBlock($id){
        $organization = Organization::findOne($id);

        if($organization != null){

            if($organization->status == Organization::ACTIVE)
                $organization->status = Organization::INACTIVE;
            else
                $organization->status = Organization::ACTIVE;

            if($organization->save()){
                //Yii::$app->session->setFlash('Success', "Associação atualizada com sucesso");
                return $this->redirect(['organization/index']);
            }
            //Yii::$app->session->setFlash('Error', "Erro ao atualizar associação");
            return $this->redirect(['organization/index']);
        }

    }

    /**
     * Accepts an organization
     * @param $id
     * @return \yii\web\Response
     */
    public function actionApproveOrganization($id){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();

        try{
            $organization = Organization::findOne($id);
            if($organization != null){
                $organization->status = Organization::ACTIVE;
                if(!$organization->save()){
                    throw new Exception("Error on saving new organization status");
                }

                //Set associatedUser role to the founder user
                $founder_id = $organization->founder->id;
                $auth = Yii::$app->getAuthManager();

                //Check if founder has user role
                $isUser = false;
                $founderRoles = $auth->getRolesByUser($founder_id);
                foreach ($founderRoles as $role){
                    if($role->name == 'user'){
                        $isUser = true;
                    }
                }

                //If founder as user role, then revokes that role, and assigns associatedUserRole
                if($isUser){

                    $userRole = $auth->getRole('user');
                    $auth->revoke($userRole, $founder_id);

                    $associatedUserRole = $auth->getRole('associatedUser');
                    $auth->assign($associatedUserRole, $founder_id);

                }

                //Set user as Associated User
                $newAssociatedUser = new AssociatedUser();
                $newAssociatedUser->id = $founder_id;
                $newAssociatedUser->isActive = true;
                $newAssociatedUser->organization_id = $organization->id;

                $save = $newAssociatedUser->save();
                if(!$save){
                    $transaction->rollBack();
                    throw new Exception("Error on saving new organization status");
                }

            }

            $transaction->commit();
        } catch(\Exception $e){
            $transaction->rollBack();
            Yii::$app->session->setFlash('Error', "Erro ao atualizar associação");
            return $this->redirect(['organization/approval-pending']);
        }

        return $this->redirect(['organization/index']);
    }

    /**
     * Method that deletes an organization register request
     * @param $id
     * @return \yii\web\Response
     * @throws \Throwable
     */
    public function actionReproveOrganization($id){
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();

        try{
            $reprovedOrganization = Organization::findOne($id);
            if($reprovedOrganization == null)
                throw new Exception();

            $address = Address::findOne($reprovedOrganization->address_id);
            if($address == null)
                throw new Exception();

            $reprovedOrganization->delete();
            $address->delete();

            $transaction->commit();
        } catch(\Exception $e){
            $transaction->rollBack();
            Yii::$app->session->setFlash('Error', "Erro ao apagar a associação!");
            return $this->redirect(['organization/approval-pending']);
        }

        Yii::$app->session->setFlash('Success', "Oragnização eliminada com sucesso!");
        return $this->redirect(['organization/approval-pending']);
    }
}
