<?php

namespace frontend\controllers;

use common\classes\RoleManager;
use common\models\AssociatedUser;
use common\models\Organization;
use common\models\User;
use Exception;
use Yii;
use common\models\AssociatedUserRequest;
use common\models\AssociatedUserRequestSearch;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssociatedUserRequestController implements the CRUD actions for AssociatedUserRequest model.
 */
class AssociatedUserRequestController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['create', 'update', 'delete', 'approve', 'reprove'],
                'rules' => [
                    [
                        'actions' => ['create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['approve', 'reprove'],
                        'allow' => true,
                        'roles' => ['associatedUser'],
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
     * Lists all AssociatedUserRequest models.
     * @return mixed
     */
    public function actionIndex()
    {
        //Verify if user has associatedUser relation, therefore also as an organization assigned
        $user = AssociatedUser::findOne(Yii::$app->user->id);
        if($user == null)
            throw new ForbiddenHttpException("Não está associado a nenhuma organização");


        if(!Yii::$app->user->can('manageOwnOrg', ['associated_user_id' => Yii::$app->user->id]))




        $query = AssociatedUserRequest::find()->where(
            [
                'status' => AssociatedUserRequest::PENDING_REQUEST,
                'organization_id' => $user->organization_id
            ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new AssociatedUserRequest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AssociatedUserRequest();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('Success', "Pedido de voluntariado registado");
            return $this->redirect(['site/index']);
        } else{
            $model->candidate_id = Yii::$app->user->id;
            return $this->render('create', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Finds the AssociatedUserRequest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AssociatedUserRequest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AssociatedUserRequest::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Accepts an new user to an organization, and add's also associated user role
     * @param $id
     * @return \yii\web\Response
     * @throws ForbiddenHttpException
     */
    public function actionApprove($id){

        //Verify if user has associatedUser relation, therefore also as an organization assigned
        $user = AssociatedUser::findOne(Yii::$app->user->id);
        if($user == null)
            throw new ForbiddenHttpException("Não está associado a nenhuma organização");

        //If user can't manage own organization
        $associatedUserRequest = AssociatedUserRequest::findOne($id);
        if($associatedUserRequest == null)
            throw new BadRequestHttpException("Whrong candidate approval request");

        if(!Yii::$app->user->can('manageOwnOrgOrganization', ['organization_id' => $associatedUserRequest->organization_id])){
            throw new ForbiddenHttpException();
        }

        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();

        try{
            if($associatedUserRequest != null){
                $associatedUserRequest->status = AssociatedUserRequest::TREATED;

                if(!$associatedUserRequest->save()){
                    throw new Exception("Error on saving new associated user");
                }

                if(!RoleManager::addRole(RoleManager::ASSOCIATED_USER_ROLE, $associatedUserRequest->candidate_id, $associatedUserRequest->organization_id)){
                    throw new Exception("Error on saving new associated user");
                }

            }

            $transaction->commit();
        } catch(\Exception $e){
            $transaction->rollBack();
            Yii::$app->session->setFlash('Error', "Erro ao adicionar novo associado");
            return $this->redirect('index');
        }
        Yii::$app->session->setFlash('Success', "Associado adicionado com sucesso");
        return $this->redirect('index');
    }

    /**
     * Reproves an new user to an organization, simply deletes the line from the associatedUserRequest table
     * @param $id
     * @return \yii\web\Response
     * @throws ForbiddenHttpException
     */
    public function actionReprove($id){

        //Verify if loggeduser has associatedUser relation, therefore also as an organization assigned
        $loggedUser = AssociatedUser::findOne(Yii::$app->user->id);
        if($loggedUser == null)
            throw new ForbiddenHttpException("Não está associado a nenhuma organização");

        //If user can't manage own organization
        if(!Yii::$app->user->can('manageOrganization', ['organization_id' => $loggedUser->id])){
            throw new ForbiddenHttpException();
        }

        $associatedUserRequest = AssociatedUserRequest::findOne($id);
        if($associatedUserRequest == null){
            Yii::$app->session->setFlash('Error', "Erro na repovação de pedido de voluntariado, contate o webmaster");
            return $this->redirect('index');
        }

        try {
            if($associatedUserRequest->delete()){
                Yii::$app->session->setFlash('Success', "Pedido de voluntariado removido com sucesso!");
            }
            else{
                Yii::$app->session->setFlash('Error', "Erro ao remover pedido de voluntariado!");
            }
        } catch(Exception $e){
            Yii::$app->session->setFlash('Error', "Erro ao apagar o pedido de voluntariado");
        } catch (\Throwable $e){
            Yii::$app->session->setFlash('Error', "Erro ao apagar o pedido de voluntariado");
        }

        return $this->redirect(['index']);

    }

}
