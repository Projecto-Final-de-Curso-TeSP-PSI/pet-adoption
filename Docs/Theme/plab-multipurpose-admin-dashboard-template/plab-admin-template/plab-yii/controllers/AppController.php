<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class AppController extends Controller
{
    /**
     * Displays Inbox app.
     *
     * @return string
     */
    public function actionInbox()
    {
        return $this->render('inbox');
    }

    /**
     * Displays Chat app.
     *
     * @return string
     */
    public function actionChat()
    {
        return $this->render('chat');
    }

    /**
     * Displays Todo app.
     *
     * @return string
     */
    public function actionTodos()
    {
        return $this->render('todos');
    }
    /**
     * Displays Notes app.
     *
     * @return string
     */
    public function actionNotes()
    {
        return $this->render('notes');
    }

    /**
     * Displays Calendar app.
     *
     * @return string
     */
    public function actionCalendar()
    {
        return $this->render('calendar');
    }

}
