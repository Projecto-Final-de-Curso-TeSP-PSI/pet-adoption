<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ChartController extends Controller
{
    /**
     * Displays line-chart.
     *
     * @return string
     */
    public function actionLineChart()
    {
        return $this->render('apex/line-chart');
    }

    /**
     * Displays area-chart.
     *
     * @return string
     */
    public function actionAreaChart()
    {
        return $this->render('apex/area-chart');
    }

    /**
     * Displays column-chart.
     *
     * @return string
     */
    public function actionColumnChart()
    {
        return $this->render('apex/column-chart');
    }

    /**
     * Displays bar-chart.
     *
     * @return string
     */
    public function actionBarChart()
    {
        return $this->render('apex/bar-chart');
    }

    /**
     * Displays mixed-chart.
     *
     * @return string
     */
    public function actionMixedChart()
    {
        return $this->render('apex/mixed-chart');
    }

    /**
     * Displays pie-donuts-chart.
     *
     * @return string
     */
    public function actionPieDonutsChart()
    {
        return $this->render('apex/pie-donuts-chart');
    }
}
