<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class PageController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionSearch()
    {
        return $this->render('search');
    }

    /**
     * Displays invoice page.
     *
     * @return string
     */
    public function actionInvoice()
    {
        return $this->render('invoice');
    }

    /**
     * Displays users-card page.
     *
     * @return string
     */
    public function actionUsersCard()
    {
        return $this->render('users-card');
    }

    /**
     * Displays notifications page.
     *
     * @return string
     */
    public function actionNotifications()
    {
        return $this->render('notifications');
    }

    /**
     * Displays timeline page.
     *
     * @return string
     */
    public function actionTimeline()
    {
        return $this->render('timeline');
    }

    /**
     * Displays gallery page.
     *
     * @return string
     */
    public function actionGallery()
    {
        return $this->render('gallery');
    }

    /**
     * Displays faq page.
     *
     * @return string
     */
    public function actionFaq()
    {
        return $this->render('faq');
    }

    /**
     * Displays pricing page.
     *
     * @return string
     */
    public function actionPricing()
    {
        return $this->render('pricing');
    }

    /**
     * Displays profile page.
     *
     * @return string
     */
    public function actionProfile()
    {
        return $this->render('profile');
    }

    /**
     * Displays profile-settings page.
     *
     * @return string
     */
    public function actionProfileSettings()
    {
        return $this->render('profile-settings');
    }

    /**
     * Displays error-404 page.
     *
     * @return string
     */
    public function actionError404()
    {
        return $this->render('error-404');
    }


}
