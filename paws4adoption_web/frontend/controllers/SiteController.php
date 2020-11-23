<?php
namespace frontend\controllers;

use common\models\AdoptionAnimal;
use common\models\FoundAnimal;
use common\models\MissingAnimal;
use common\models\MissingAnimalSearch;
use common\models\User;
use frontend\models\ProfileForm;
use common\models\Animal;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get', 'post'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $loggedUserId = Yii::$app->user->id;
            $loggedUser = User::findIdentity($loggedUserId);
            if($loggedUser->address_id == null){
                return $this->actionProfile();
            }
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login_plab', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionHelp()
    {
        return $this->render('help');
    }
    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionFaq()
    {
        return $this->render('faq');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProviderAdoptionAnimal = new ActiveDataProvider([
            'query' => AdoptionAnimal::find()->orderBy('id DESC')->limit(3),
            'pagination' => false,
        ]);
        $dataProviderMissingAnimal = new ActiveDataProvider([
            'query' => MissingAnimal::find()->orderBy('id DESC')->limit(3),
            'pagination' => false,
        ]);
        $dataProviderFoundAnimal = new ActiveDataProvider([
        'query' => FoundAnimal::find()->orderBy('id DESC')->limit(3),
        'pagination' => false,
    ]);

        return $this->render('index', [
            'dataProviderAdoptionAnimal' => $dataProviderAdoptionAnimal,
            'dataProviderMissingAnimal' => $dataProviderMissingAnimal,
            'dataProviderFoundAnimal' => $dataProviderFoundAnimal,
        ]);
    }

    /**
     * Displays My List Animals Publish.
     *
     * @return mixed
     */
    public function actionMyListAnimals(){
        $dataProviderMissingAnimal = new ActiveDataProvider([
            'query' => MissingAnimal::find()->orderBy('id DESC')->limit(3),
            'pagination' => false,
        ]);
        $dataProviderFoundAnimal = new ActiveDataProvider([
            'query' => FoundAnimal::find()->orderBy('id DESC')->limit(3),
            'pagination' => false,
        ]);

        return $this->render('myListAnimals', [

            'dataProviderMissingAnimal' => $dataProviderMissingAnimal,
            'dataProviderFoundAnimal' => $dataProviderFoundAnimal,
        ]);

        //User de teste
        /*$user = User::findOne(1);

        $searchModel = new MissingAnimalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $missingAnimals = MissingAnimal::find()->all();*/

        /*$query = MissingAnimal::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_ASC,
                ]
            ],
        ]);*/




       /* return $this->render('myListAnimals', [
            'title' => $title,
            'user' => $user,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);*/

    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Obrigado pelo seu registo. Agora pode fazer login.');
            return $this->goHome();
        }

        return $this->render('signup_plab', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionProfile()
    {
        $loggedUserId = Yii::$app->user->id;
        $loggedUser = User::findIdentity($loggedUserId);

        $userProfile = new ProfileForm();
        $userProfile->firstName = $loggedUser->firstName;
        $userProfile->lastName = $loggedUser->lastName;
        $userProfile->nif = $loggedUser->nif;
        $userProfile->phone = $loggedUser->phone;
        $userProfile->email = $loggedUser->email;

        $userProfile->street = isset($loggedUser->address->street) ? $loggedUser->address->street : null;
        $userProfile->door_number = isset($loggedUser->address->door_number) ? $loggedUser->address->door_number : null;
        $userProfile->floor = isset($loggedUser->address->floor) ? $loggedUser->address->floor : null;
        $userProfile->postal_code = isset($loggedUser->address->postal_code) ? $loggedUser->address->postal_code : null;
        $userProfile->street_code = isset($loggedUser->address->street_code) ? $loggedUser->address->street_code : null;
        $userProfile->city = isset($loggedUser->address->city) ? $loggedUser->address->city : null;
        $userProfile->district_id = isset($loggedUser->address->district_id) ? $loggedUser->address->district_id : null;

        if($userProfile->load(Yii::$app->request->post()) && $userProfile->save()){
            Yii::$app->session->setFlash('success', 'Os seus dados foram gravados com sucesso.');
            return $this->goHome();
        }
        
        return $this->render('profile-settings_plab', [
            'model' => $userProfile,
        ]);
    }


}
