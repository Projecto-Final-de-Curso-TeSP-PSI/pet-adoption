<?php

namespace frontend\controllers;

use common\models\Address;
use common\models\Animal;
use common\models\AnimalSearch;
use common\models\FoundAnimal;
use common\models\FurColor;
use common\models\FurLength;
use common\models\MissingAnimalSearch;
use common\models\Nature;
use common\models\Photo;
use common\models\Size;
use common\models\User;
use Yii;
use common\models\MissingAnimal;
use common\models\AnimalMissingSearch;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MissingAnimalController implements the CRUD actions for MissingAnimal model.
 */
class MissingAnimalController extends Controller
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
                        'roles' => ['createMissingAnimal'],
                    ],
                    [
                        'actions' => ['update', 'delete'],
                        'allow' => true,
                        'roles' => ['manageMissingAnimal'],
                        'roleParams' => ['animal_type' => 'missingAnimal', 'animal_id' => Yii::$app->request->get('id')],
                    ],
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
     * Lists all MissingAnimal models.
     * @return mixed
     */
    public function actionIndex()
    {
        try {
            $animalMissingSearchModel = new AnimalMissingSearch();
            $animalSearchModel = new AnimalSearch();

            $params = Yii::$app->request->get();
            if(array_key_exists('AnimalSearch', $params)){
                $query = $this->queryBuilder(Yii::$app->request->get());

                $animalMissingDataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                        'pageSize' => 9,
                    ]
                ]);
            } else {
                $query = MissingAnimal::find()->where(['is_missing' => 1]);
                $animalMissingDataProvider = new ActiveDataProvider([
                    'query' =>  $query,
                    'pagination' => [
                        'pageSize' => 9,
                    ]
                ]);
            }
        } catch (\Exception $exception) {
            // TODO: LIDAR COM A EXCEPÇÃO. O que acontece se for lançada uma excepção?
            throw $exception;
        }

        return $this->render('index', [
            'animalMissingSearchModel' => $animalMissingSearchModel,
            'animalSearchModel' => $animalSearchModel,
            'dataProvider' => $animalMissingDataProvider,
            'nature' => Nature::getParentNatureIds(),
            'natureCat' => Nature::getExistingNatureCat(),
            'natureDog' => Nature::getExistingNatureDog(),
            'size' => Size::getData(),
        ]);
    }

    /**
     * Displays a single MissingAnimal model.
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
     * Creates a new MissingAnimal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $animalModel = new Animal(['scenario' => Animal::SCENARIO_MISSING_ANIMAL]);
        $missingAnimalModel = new MissingAnimal();
        $animalPhotoModel = new Photo();
        $natureList = ArrayHelper::map(Nature::find()->where(['parent_nature_id' => null])->all(), 'id', 'name');
        $sex = Animal::getSex();
        $natureCat = ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 1])->all(), 'id', 'name');
        $natureDog = ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 2])->all(), 'id', 'name');
        $fulLength = ArrayHelper::map(FurLength::find()->all(), 'id', 'fur_length');
        $fulColor = ArrayHelper::map(FurColor::find()->all(), 'id', 'fur_color');
        $size = ArrayHelper::map(Size::find()->all(), 'id', 'size');

        if (Yii::$app->request->post()) {
            $formData = Yii::$app->request->post();

            if ($animalModel->load($formData) && $animalModel->save()) {
                if (UploadedFile::getInstance($animalPhotoModel, 'imgPath') != null) {
                    $file = UploadedFile::getInstance($animalPhotoModel, 'imgPath');
                    $animalPhotoModel->name = $animalModel->name . '_' . $animalModel->id;
                    $animalPhotoModel->extension = $file->extension;
                    $animalPhotoModel->id_animal = $animalModel->id;
                    $animalPhotoModel->caption = $animalModel->nature->name . " - " . $animalModel->name;
                    $file->saveAs('images/animal/' . $animalModel->name . '_' . $animalModel->id . '.' . $file->extension);
                    $animalPhotoModel->save();
                }
                $missingAnimalModel->load($formData);
                $missingAnimalModel->id = $animalModel->id;
                $missingAnimalModel->is_missing = true;
                $missingAnimalModel->owner_id = Yii::$app->user->id;
                if ($missingAnimalModel->save()) {
                    return $this->redirect(['site/my-list-animals']);
                }


            }
        }

        return $this->render('create', [
            'animalModel' => $animalModel,
            'missingAnimalModel' => $missingAnimalModel,
            'animalPhotoModel' => $animalPhotoModel,
            'natureList' => $natureList,
            'natureCat' => $natureCat,
            'natureDog' => $natureDog,
            'fulLength' => $fulLength,
            'fulColor' => $fulColor,
            'size' => $size,
            'sex' => $sex
        ]);
    }

    /**
     * Updates an existing MissingAnimal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $animalModel = $model->animal;
        $newAnimalPhotoModel = new Photo();

        $natureList = ArrayHelper::map(Nature::find()->where(['parent_nature_id' => null])->all(), 'id', 'name');
        $sex = Animal::getSex();
        $natureCat = ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 1])->all(), 'id', 'name');
        $natureDog = ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 2])->all(), 'id', 'name');
        $fulLength = ArrayHelper::map(FurLength::find()->all(), 'id', 'fur_length');
        $fulColor = ArrayHelper::map(FurColor::find()->all(), 'id', 'fur_color');
        $size = ArrayHelper::map(Size::find()->all(), 'id', 'size');

        if (Yii::$app->request->post()) {
            $formData = Yii::$app->request->post();

            if ($animalModel->load($formData) && $animalModel->save()) {
                $model->load($formData);
                $file = UploadedFile::getInstance($newAnimalPhotoModel, 'imgPath');
                $currentAnimalPhoto = Photo::findOne(['id_animal' => $id]);
                if ($file != null) {
                    $newAnimalPhotoModel->name = $animalModel->name . '_' . $animalModel->id;
                    $newAnimalPhotoModel->extension = $file->extension;
                    $newAnimalPhotoModel->id_animal = $animalModel->id;
                    $newAnimalPhotoModel->caption = $animalModel->nature->name . " - " . $animalModel->name;
                    if ($currentAnimalPhoto != null) {
                        unlink(Yii::$app->basePath . '\web\images\animal\\' . $currentAnimalPhoto->name . '.' . $currentAnimalPhoto->extension);
                        $currentAnimalPhoto->delete();
                    }
                    $file->saveAs('images/animal/' . $animalModel->name . '_' . $animalModel->id . '.' . $file->extension);
                    //$animalModel->delete();
                    $newAnimalPhotoModel->save();
                }
                if ($model->save()) {
                    return $this->redirect(['site/my-list-animals']);
                }
            }
        }


        return $this->render('update', [
            'model' => $model,
            'animalModel' => $animalModel,
            'newAnimalPhotoModel' => $newAnimalPhotoModel,
            'natureList' => $natureList,
            'natureCat' => $natureCat,
            'natureDog' => $natureDog,
            'fulLength' => $fulLength,
            'fulColor' => $fulColor,
            'size' => $size,
            'sex' => $sex,
        ]);
    }

    /**
     * Deletes an existing MissingAnimal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['site/my-list-animals']);
    }

    /**
     * Finds the MissingAnimal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MissingAnimal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected
    function findModel($id)
    {
        if (($model = MissingAnimal::findOne($id)) !== null) {
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

        if ($parent_nature_id !== "" && $natureCat_id !== "" && $size !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = MissingAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->where(['nature_id' => $natureCat_id, 'size_id' => $size]);

            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "" && $size !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = MissingAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds])
                ->where(['nature_id' => $natureDog_id, 'size_id' => $size]);

            return $query;

        } elseif ($parent_nature_id !== "" && $natureCat_id !== "") {

            $query = MissingAnimal::find()
                ->innerJoinWith('animal')
                ->where(['nature_id' => $natureCat_id]);

            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "") {

            $query = MissingAnimal::find()
                ->innerJoinWith('animal')
                ->where(['nature_id' => $natureDog_id]);

            return $query;

        } elseif ($parent_nature_id !== "" && $size !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = MissingAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds, 'size_id' => $size]);

            return $query;

        } elseif ($parent_nature_id !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = MissingAnimal::find()
                ->innerJoinWith('animal')
                ->where(['in', 'nature_id', $naturesIds]);

            return $query;

        } elseif ($natureCat_id !== "") {

            $query = MissingAnimal::find()
                ->innerJoinWith('animal')
                ->where(['nature_id' => $natureCat_id]);

            return $query;

        } elseif ($natureDog_id !== "") {

            $query = MissingAnimal::find()
                ->innerJoinWith('animal')
                ->where(['nature_id' => $natureDog_id]);

            return $query;

        } elseif ($size !== "") {
            $query = MissingAnimal::find()
                ->innerJoinWith('animal')
                ->where(['size_id' => $size]);

            return $query;
        }
    }
}
