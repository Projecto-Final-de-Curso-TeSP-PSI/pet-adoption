<?php
namespace backend\controllers;

use common\models\User;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
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
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['admin'],
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
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $post = Yii::$app->request->post();
        $model = new LoginForm();
        $model->load($post);

        //Get username from the post
        $username = ArrayHelper::getValue($post, 'LoginForm.username' );

        if($username == null)
            return $this->render('login', ['model' => $model]);

        //Get user by username | if not found go back to login
        $user = User::findByUsername($username);

        if($user == null){
            $model->password = '';
            Yii::$app->session->setFlash('Error', "Username ou password inválidos");
            return $this->render('login', ['model' => $model]);
        }

        //Get user role by user id
        $auth = Yii::$app->getAuthManager();
        $userRole = $auth->getRolesByUser($user->id);

        //If user has admin role
        if(isset($userRole['admin'])){

            //If user makes login
            if($model->login())
                return $this->goBack();
            else {
                    $model->password = '';
                    Yii::$app->session->setFlash('Error', "Username ou password inválidos");
                    return $this->render('login', ['model' => $model]);
                    //return $this->redirect(['login']);
                }
        } else {
            $model->password = '';
            Yii::$app->session->setFlash('Error', "Acesso exclusivo para administradores");
            return $this->render('login', ['model' => $model]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
