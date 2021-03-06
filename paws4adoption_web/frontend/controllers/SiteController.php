<?php
namespace frontend\controllers;

use common\models\AdoptionAnimal;
use common\models\AnimalAdoptionSearch;
use common\models\AnimalSearch;
use common\models\AssociatedUser;
use common\models\FoundAnimal;
use common\models\MissingAnimal;
use common\models\MissingAnimalSearch;
use common\models\Photo;
use common\models\User;
use frontend\models\ProfileForm;
use common\models\Animal;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\data\ActiveDataProvider;
use yii\db\Query;
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
                'only' => ['logout', 'signup', 'login', 'profile', 'my-list-animals'],
                'rules' => [
                    [
                        'actions' => ['signup', 'login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'profile', 'my-list-animals'],
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
            if($loggedUser !== null && $loggedUser->address_id == null){
                return $this->redirect(['site/profile']);
            }
            if ($loggedUser === null){
                Yii::$app->session->setFlash('Error', 'Confirme o email de validação que lhe foi enviado para poder fazer login.');
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
                Yii::$app->session->setFlash('Success', 'Obrigada pelo contacto. Logo que possível iremos responder.');
            } else {
                Yii::$app->session->setFlash('Error', 'Houve um erro a enviar o seu email.');
            }

            return $this->redirect(['site/contact']);
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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProviderAdoptionAnimal = new ActiveDataProvider([
            'query' => AdoptionAnimal::find()
                ->joinWith('adoption')
                ->where(['is', 'adoption_date', null])
                ->orderBy('id DESC')->limit(3),
            'pagination' => false,
        ]);
        $dataProviderMissingAnimal = new ActiveDataProvider([
            'query' => MissingAnimal::find()->where(['is_missing' => 1])->orderBy('id DESC')->limit(3),
            'pagination' => false,
        ]);
        $dataProviderFoundAnimal = new ActiveDataProvider([
        'query' => FoundAnimal::find()->where(['is_active' => 1])->orderBy('id DESC')->limit(3),
        'pagination' => false,
        ]);

        $dataProviderPhoto = new ActiveDataProvider([
            'query' => Photo::find(),
            'pagination' => false,
        ]);

        return $this->render('index', [
            'dataProviderAdoptionAnimal' => $dataProviderAdoptionAnimal,
            'dataProviderMissingAnimal' => $dataProviderMissingAnimal,
            'dataProviderFoundAnimal' => $dataProviderFoundAnimal,
            'dataProviderPhoto' => $dataProviderPhoto
        ]);
    }

    /**
     * Displays My List of Animals Published.
     *
     * @return mixed
     */
    public function actionMyListAnimals(){
        $id = Yii::$app->user->getId();

        $dataProviderMissingAnimal = new ActiveDataProvider([
            'query' => MissingAnimal::find()->where(['owner_id' => $id, 'is_missing' => 1]),
            'pagination' => false,
        ]);

        $dataProviderFoundAnimal = new ActiveDataProvider([
            'query' => FoundAnimal::find()->where(['user_id' => $id, 'is_active' => 1]),
            'pagination' => false,
        ]);

        return $this->render('myListAnimals', [
            'dataProviderMissingAnimal' => $dataProviderMissingAnimal,
            'dataProviderFoundAnimal' => $dataProviderFoundAnimal,
        ]);
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
                Yii::$app->session->setFlash('Success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('Error', 'Sorry, we are unable to verify your account with provided token.');
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
                Yii::$app->session->setFlash('Success', 'Verifique o seu email.');
                return $this->redirect(['site/login']);
            }
            Yii::$app->session->setFlash('Error', 'Não foi possivel enviar uma nova verificação.');
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
