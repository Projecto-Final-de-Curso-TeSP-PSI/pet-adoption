<?php

namespace backend\controllers;

use Yii;
use common\models\Nature;
use backend\models\NatureSearch;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NatureController implements the CRUD actions for Nature model.
 */
class NatureController extends Controller
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
                        'actions' => ['index', 'create-specie', 'create-sub-specie', 'refresh-subspecies', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
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
     * Lists all Nature models.
     * @return mixed
     */
    public function actionIndex()
    {
        $parentSearchModel = new NatureSearch();
        $childSearchModel = new NatureSearch();
        $parentDataProvider = $parentSearchModel->search(Yii::$app->request->queryParams);
        $childDataProvider = $childSearchModel->search(Yii::$app->request->queryParams);



        $parentDataProvider = new ActiveDataProvider([
            'query' => Nature::find()->where(['is', 'parent_nature_id', null]),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [

                ]
            ],
        ]);

        $childDataProvider = new ActiveDataProvider([
            'query' => Nature::find()->where(['is not', 'parent_nature_id', null]),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [

                ]
            ],
        ]);

        return $this->render('index', [
            'parentSearchModel' => $parentSearchModel,
            'childSearchModel' => $childSearchModel,
            'parentDataProvider' => $parentDataProvider,
            'childDataProvider' => $childDataProvider,
        ]);
    }

    /**
     * Creates a new Nature model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateSpecie()
    {
        $model = new Nature(['scenario' => Nature::SCENARIO_SPECIE]);

        $post = Yii::$app->request->post();

        if($post != null){
            $model->load($post);
            $model->parent_nature_id = null;

            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create-specie', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Nature model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateSubSpecie()
    {
        $model = new Nature(['scenario' => Nature::SCENARIO_SUB_SPECIE]);

        $post = Yii::$app->request->post();

        if($post != null){
            if($model->load($post) &&$model->save()){
                return $this->redirect(['index']);
            }
        }

        return $this->render('create-sub-specie', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Nature model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $scenario)
    {
        $model = $this->findModel($id);
        $model->scenario = $scenario;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Nature model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        try{
            $this->findModel($id)->delete();
        } catch(\Exception $e){
            Yii::$app->session->setFlash('Error', "Não é possível apagar este elemento");
            return $this->redirect(['index']);
        } catch (\Throwable $e) {
            Yii::$app->session->setFlash('Error', "Não é possível apagar este elemento");
            return $this->redirect(['index']);
        }
        return $this->redirect(['index']);
    }

    /**
     * Refreshs the subspecie table acording with the selected specie
     * @param $id
     * @return string
     */
    public function actionRefreshSubspecies($id){
        $searchModel = new NatureSearch();


        $query = Nature::find()->where(['nature_parent_id' => $id]);

        $childDataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'name' => SORT_ASC,
                ]
            ],
        ]);

        return $this->renderPartial('pjax-container', [
            'searchModel' => $searchModel,
            'dataProvider' => $childDataProvider,
        ]);

    }

    /**
     * Finds the Nature model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Nature the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Nature::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
