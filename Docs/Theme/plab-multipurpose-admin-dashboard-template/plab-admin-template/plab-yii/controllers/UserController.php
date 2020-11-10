<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class UserController extends Controller
{
    /**
     * Displays signup dashboard.
     *
     * @return string
     */
    public function actionSignup()
    {
        return $this->render('signup');
    }

    /**
     * Displays login.
     *
     * @return string
     */
    public function actionLogin()
    {
        return $this->render('login');
    }

    /**
     * Displays forgot-password.
     *
     * @return string
     */
    public function actionForgotPassword()
    {
        return $this->render('forgot-password');
    }
}
