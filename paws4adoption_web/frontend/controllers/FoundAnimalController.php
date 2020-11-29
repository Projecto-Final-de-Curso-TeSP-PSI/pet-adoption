<?php

namespace frontend\controllers;

use common\models\AnimalSearch;
use common\models\Nature;
use common\models\Size;
use Yii;
use common\models\FoundAnimal;
use common\models\FoundAnimalSearch;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FoundAnimalController implements the CRUD actions for FoundAnimal model.
 */
class FoundAnimalController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all FoundAnimal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $animalFoundSearchModel = new FoundAnimalSearch();
        $animalSearchModel = new AnimalSearch();
        $animalFoundDataProvider = $animalFoundSearchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'animalFoundSearchModel' => $animalFoundSearchModel,
            'animalSearchModel' => $animalSearchModel,
            'dataProvider' => $animalFoundDataProvider,

            'nature' => ArrayHelper::map(Nature::find()->where(['parent_nature_id' => null ])->all(), 'id', 'name'),
            'natureCat' => ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 1 ])->all(), 'id', 'name'),
            'natureDog' => ArrayHelper::map(Nature::find()->where(['parent_nature_id' =>  2 ])->all(), 'id', 'name'),
            'size' => ArrayHelper::map(Size::find()->all(), 'id', 'size')
        ]);
    }

    /**
     * Displays a single FoundAnimal model.
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
     * Creates a new FoundAnimal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FoundAnimal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FoundAnimal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FoundAnimal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FoundAnimal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FoundAnimal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FoundAnimal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
