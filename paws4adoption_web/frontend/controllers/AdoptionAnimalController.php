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
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotAdoptionHttpException;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

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
            'access' => [
                'class' => AccessControl::class,
                'only' => ['create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['create'],
                        'allow' => true,
                        'roles' => ['createAdoptionAnimal']
                    ],
                    [
                        'actions' => ['update', 'delete'],
                        'allow' => true,
                        'roles' => ['manageAdoptionAnimal'],
                        'roleParams' => ['organization_id' => Yii::$app->request->get('id')]
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
     * Lists all AdoptionAnimal models.
     * @return mixed
     */
    public function actionIndex()
    {
        try {
            $animalAdoptionSearchModel = new AnimalAdoptionSearch();
            $animalSearchModel = new AnimalSearch();
            $organizationSearchModel = new OrganizationSearch();
            $animalAdoptionDataProvider = $animalAdoptionSearchModel->search(Yii::$app->request->queryParams);

            if (Yii::$app->request->get() != null){

                $query = $this->queryBuilder(Yii::$app->request->get());

                $animalAdoptionDataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                        'pageSize' => 10,
                    ]
                ]);
            }
        } catch (\Exception $e){
            throw $e;
        }

        return $this->render('index', [
            'animalAdoptionSearchModel' => $animalAdoptionSearchModel,
            'animalSearchModel' => $animalSearchModel,
            'organizationSearchModel' => $organizationSearchModel,
            'dataProvider' => $animalAdoptionDataProvider,

            'nature' => Nature::getParentNatureIds(),
            'natureCat' => Nature::getExistingNatureCat(),
            'natureDog' => Nature::getExistingNatureDog(),
            'size' => Size::getData(),
            'organization' => Organization::getOrganizationsWithAdoptionAnimals()
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
     * @throws NotFoundHttpException if the model cannot be Adoption
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
     * @throws NotFoundHttpException if the model cannot be Adoption
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
     * @throws NotFoundHttpException if the model cannot be Adoption
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AdoptionAnimal model based on its primary key value.
     * If the model is not Adoption, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AdoptionAnimal the loaded model
     * @throws NotFoundHttpException if the model cannot be Adoption
     */
    protected function findModel($id)
    {
        if (($model = AdoptionAnimal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    private function queryBuilder($params)
    {

        $parent_nature_id = $params['AnimalSearch']['parent_nature_id'];
        $natureCat_id = $params['AnimalSearch']['natureCat_id'];
        $natureDog_id = $params['AnimalSearch']['natureDog_id'];
        $size = $params['AnimalSearch']['size'];
        $organization = $params['AnimalSearch']['organization'];

        if ($parent_nature_id !== "" && $natureCat_id !== "" && $size !== "" && $organization !== ""){
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->where(['nature_id' => $natureCat_id, 'size_id' => $size, 'organization_id' => $organization]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "" && $size !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->where(['nature_id' => $natureDog_id, 'size_id' => $size, 'organization_id' => $organization]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureCat_id !== "" && $size !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->where(['nature_id' => $natureCat_id, 'size_id' => $size]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "" && $size !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->where(['nature_id' => $natureDog_id, 'size_id' => $size]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureCat_id !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->where(['nature_id' => $natureCat_id, 'organization_id' => $organization]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->where(['nature_id' => $natureDog_id, 'organization_id' => $organization]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureCat_id !== "") {

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['nature_id' => $natureCat_id]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "") {

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['nature_id' => $natureDog_id]);
            return $query;

        } elseif ($parent_nature_id !== "" && $size !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->andWhere(['size_id' => $size, 'organization_id' => $organization]);
            return $query;

        } elseif ($parent_nature_id !== "" && $size !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->andWhere(['size_id' => $size]);
            return $query;

        } elseif ($parent_nature_id !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->andWhere(['organization_id' => $organization]);
            return $query;

        } elseif ($parent_nature_id !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds]);
            return $query;

        } elseif ($size !== "" && $organization !== "") {
            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['size_id' => $size, 'organization_id' => $organization]);
            return $query;

        } elseif ($size !== "") {
            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['size_id' => $size]);
            return $query;

        } elseif ($organization !== ""){
            $query = AdoptionAnimal::find()
                ->innerJoinWith('animal')
                ->where(['organization_id' => $organization]);
            return $query;
        }
    }
}
