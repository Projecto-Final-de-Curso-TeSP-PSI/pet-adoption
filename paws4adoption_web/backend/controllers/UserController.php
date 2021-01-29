<?php

namespace backend\controllers;

use backend\modules\api\models\Address;
use common\classes\RoleManager;
use Yii;
use common\models\User;
use backend\models\UserSearch;
use yii\filters\AccessControl;
use yii\rbac\Role;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
                        'actions' => ['index', 'view', 'update', 'block', 'set-unset-admin'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Updates an existing User model.
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
                throw new \Exception("Error");

            $address = Address::findOne($model->address_id);
            if(!$address->load($post) || !$address->save())
                throw new \Exception("Error");

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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Block the user that is received by parameter
     * @param $id
     * @return \yii\web\Response
     */
    public function actionBlock($id){
        $user = User::findOne($id);
        if($user != null){

            if($user->status == User::STATUS_ACTIVE || $user->status == USER::STATUS_BLOCKED){

                if($user->status == User::STATUS_ACTIVE){
                    $user->status = User::STATUS_BLOCKED;
                } else {
                    if($user->status == USER::STATUS_BLOCKED)
                        $user->status = User::STATUS_ACTIVE;
                }

                if($user->save()){
                    Yii::$app->session->setFlash('Success', "User atualizador com sucesso");
                    return $this->redirect(['user/index']);
                }
            }

        }
        Yii::$app->session->setFlash('Error', "Erro ao atualizar user");
        return $this->redirect(['user/index']);
    }

    /**
     * Set's or unsets an user with Admin permissions
     * @param $user_id
     * @return \yii\web\Response
     */
    public function actionSetUnsetAdmin($user_id){

        $user = User::findOne($user_id);
        if($user != null){

            $userHasAdminRole = RoleManager::userHasRole(RoleManager::ADMIN_ROLE, $user_id);

            if($userHasAdminRole){
                if(RoleManager::revokeRole(RoleManager::ADMIN_ROLE, $user_id))
                    Yii::$app->session->setFlash('Success', "Permissão de utilizador Admin removida com sucesso");
                else
                    Yii::$app->session->setFlash('Error', "Erro ao remover permissão Admin");
            } else{
                if(RoleManager::addRole(RoleManager::ADMIN_ROLE, $user_id))
                    Yii::$app->session->setFlash('Success', "Permissão de utilizador Admin adicionada com sucesso");
                else
                    Yii::$app->session->setFlash('Error', "Erro ao adiciona permissão Admin");
            }

        }

        return $this->redirect(['user/index']);
    }
}
