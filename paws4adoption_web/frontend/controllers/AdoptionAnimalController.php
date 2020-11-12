<?php

namespace frontend\controllers;

use backend\models\AdoptionAnimalForm;
use common\models\Animal;
use common\models\AnimalAdoptionSearch;
use common\models\AnimalSearch;
use common\models\Nature;
use common\models\Organization;
use common\models\OrganizationSearch;
use common\models\Size;
use Yii;
use common\models\AdoptionAnimal;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdoptionAnimalController implements the CRUD actions for AdoptionAnimal model.
 */
class AdoptionAnimalController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AdoptionAnimal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $animalAdoptionSearchModel = new AnimalAdoptionSearch();
        $animalSearchModel = new AnimalSearch();
        $organizationSearchModel = new OrganizationSearch();
        $animalAdoptionDataProvider = $animalAdoptionSearchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'animalAdoptionSearchModel' => $animalAdoptionSearchModel,
            'animalSearchModel' => $animalSearchModel,
            'organizationSearchModel' => $organizationSearchModel,
            'dataProvider' => $animalAdoptionDataProvider,

            'nature' => ArrayHelper::map(Nature::find()->where(['parent_nature_id' => null ])->all(), 'id', 'name'),
            'natureCat' => ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 1 ])->all(), 'id', 'name'),
            'natureDog' => ArrayHelper::map(Nature::find()->where(['parent_nature_id' =>  2 ])->all(), 'id', 'name'),
            'size' => ArrayHelper::map(Size::find()->all(), 'id', 'size'),
            'organization' => ArrayHelper::map(Organization::find()->all(), 'id', 'name')
        ]);

    }


    /**
     * Displays AnimalsList page.
     *
     * @return mixed
     */
    public function actionListAnimals()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Animal::find()->orderBy('id DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        //var_dump($dataProvider->getModels());

        return $this->render('listAnimals', ['dataProvider' => $dataProvider]);
    }


    /**
     * Displays a single AdoptionAnimal model.
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
     * Creates a new AdoptionAnimal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AdoptionAnimalForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AdoptionAnimal model.
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
     * Deletes an existing AdoptionAnimal model.
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
     * Finds the AdoptionAnimal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AdoptionAnimal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AdoptionAnimal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
