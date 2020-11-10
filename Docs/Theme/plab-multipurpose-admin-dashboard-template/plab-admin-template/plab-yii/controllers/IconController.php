<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class IconController extends Controller
{
    /**
     * Displays feather-icons dashboard.
     *
     * @return string
     */
    public function actionFeatherIcons()
    {
        return $this->render('feather-icons');
    }

    /**
     * Displays line-icons.
     *
     * @return string
     */
    public function actionLineIcons()
    {
        return $this->render('line-icons');
    }

    /**
     * Displays icofont-icons.
     *
     * @return string
     */
    public function actionIcofontIcons()
    {
        return $this->render('icofont-icons');
    }
}
