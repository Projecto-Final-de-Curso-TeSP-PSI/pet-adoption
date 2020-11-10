<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class UiComponentController extends Controller
{
    /**
     * Displays alerts.
     *
     * @return string
     */
    public function actionAlerts()
    {
        return $this->render('alerts');
    }

    /**
     * Displays badges page.
     *
     * @return string
     */
    public function actionBadges()
    {
        return $this->render('badges');
    }

    /**
     * Displays buttons page.
     *
     * @return string
     */
    public function actionButtons()
    {
        return $this->render('buttons');
    }

    /**
     * Displays cards page.
     *
     * @return string
     */
    public function actionCards()
    {
        return $this->render('cards');
    }

    /**
     * Displays dropdowns page.
     *
     * @return string
     */
    public function actionDropdowns()
    {
        return $this->render('dropdowns');
    }

    /**
     * Displays forms page.
     *
     * @return string
     */
    public function actionForms()
    {
        return $this->render('forms');
    }

    /**
     * Displays list-groups page.
     *
     * @return string
     */
    public function actionListGroups()
    {
        return $this->render('list-groups');
    }

    /**
     * Displays modals page.
     *
     * @return string
     */
    public function actionModals()
    {
        return $this->render('modals');
    }

    /**
     * Displays progress-bars page.
     *
     * @return string
     */
    public function actionProgressBars()
    {
        return $this->render('progress-bars');
    }

    /**
     * Displays tables page.
     *
     * @return string
     */
    public function actionTables()
    {
        return $this->render('tables');
    }

    /**
     * Displays tabs page.
     *
     * @return string
     */
    public function actionTabs()
    {
        return $this->render('tabs');
    }


}
