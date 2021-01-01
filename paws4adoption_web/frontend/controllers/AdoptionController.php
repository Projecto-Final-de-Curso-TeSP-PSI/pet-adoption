<?php

namespace frontend\controllers;

use common\models\AdoptionAnimal;
use common\models\User;
use frontend\models\AdoptionRequestForm;
use Yii;
use common\models\Adoption;
use common\models\AdoptionSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdoptionController implements the CRUD actions for Adoption model.
 */
class AdoptionController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['submit-adoption-request', 'sumbit-fat-request'],
                'rules' => [
                    [
                        'actions' => ['submit-adoption-request', 'submit-fat-request'],
                        'allow' => true,
                        'roles' => ['@']
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
     * Lists all Adoption models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AdoptionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Adoption model.
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
     * Creates a new Adoption model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Adoption();
        $model->scenario = 'fat';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }


        $loggedUser_id = \Yii::$app->user->id;
        $model->adopter_id = $loggedUser_id;
        $model->adopted_animal_id = 1;

        return $this->render('create', [
            'model' => $model,
            'title' => 'Formulário submissão de pedido de acolhimento temporário (FAT)'
        ]);


    }

    /**
     * Updates an existing Adoption model.
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
     * Deletes an existing Adoption model.
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
     * Finds the Adoption model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Adoption the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Adoption::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSubmitAdoptionRequest(){
        $model = new Adoption();
        $model->scenario = 'adoption';
        $title = 'Formalização de proposta de adoção';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        $model->adopter_id = \Yii::$app->user->id;
        $model->adopted_animal_id = 1;

        return $this->render('create', [
            'model' => $model,
            'title' => $title
        ]);
    }

    public function actionSubmitFatRequest(){
        $model = new Adoption();
        $model->scenario = 'fat';
        $title = 'Formalização de proposta de acolhimento temporário';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        $model->adopter_id = \Yii::$app->user->id;
        $model->adopted_animal_id = 1;

        return $this->render('create', [
            'model' => $model,
            'title' => $title
        ]);
    }

    public static function getAdoptionRequestsByAnimal($id){
        return count(Adoption::find()
            ->where(['adopted_animal_id' => $id, 'adoption_date' => null])
            ->all());
    }
}
