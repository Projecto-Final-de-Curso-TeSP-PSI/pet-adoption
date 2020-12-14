<?php

namespace frontend\controllers;

use common\models\Address;
use common\models\Animal;
use common\models\AnimalSearch;
use common\models\FurColor;
use common\models\FurLength;
use common\models\Nature;
use common\models\Photo;
use common\models\Size;
use Yii;
use common\models\FoundAnimal;
use common\models\FoundAnimalSearch;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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

            'nature' => ArrayHelper::map(Nature::find()->where(['parent_nature_id' => null])->all(), 'id', 'name'),
            'natureCat' => ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 1])->all(), 'id', 'name'),
            'natureDog' => ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 2])->all(), 'id', 'name'),
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
        $addressModel = new Address(['scenario' => Address::SCENARIO_FOUND_ANIMAL]);
        $animalModel = new Animal();
        $foundAnimalModel = new FoundAnimal();
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
                $file = UploadedFile::getInstance($animalPhotoModel, 'imgPath');
                $animalPhotoModel->imgPath = 'images/animal/' . $animalModel->name . '_' . $animalModel->id . '.' . $file->extension;
                $animalPhotoModel->id_animal = $animalModel->id;
                $animalPhotoModel->caption = $animalModel->nature->name . " - " . $animalModel->name;
                $file->saveAs('@frontend/web/images/animal/' . $animalModel->name . '_' . $animalModel->id . '.' . $file->extension);
                if ($animalPhotoModel->save()) {
                    $addressModel->load($formData);
                    if ($addressModel->save()) {
                        $foundAnimalModel->load($formData);
                        $foundAnimalModel->id = $animalModel->id;
                        $foundAnimalModel->is_active = true;
                        $foundAnimalModel->priority = "Por classificar";
                        $foundAnimalModel->user_id = Yii::$app->user->id;
                        $foundAnimalModel->location = $addressModel->id;

                        if ($foundAnimalModel->save()) {
                            return $this->redirect(['site/my-list-animals']);
                        }
                    }

                }

            }
        }

        return $this->render('create', [
            'addressModel' => $addressModel,
            'animalModel' => $animalModel,
            'foundAnimalModel' => $foundAnimalModel,
            'animalPhotoModel' => $animalPhotoModel,
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
     * Updates an existing FoundAnimal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $animalModel = $model->animal;
        $addressid = $model->location;
        $addressModel = Address::findOne(['id' => $addressid]);


        $natureList = ArrayHelper::map(Nature::find()->where(['parent_nature_id' => null])->all(), 'id', 'name');
        $sex = Animal::getSex();
        $priority = FoundAnimal::getPriority();
        $natureCat = ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 1])->all(), 'id', 'name');
        $natureDog = ArrayHelper::map(Nature::find()->where(['parent_nature_id' => 2])->all(), 'id', 'name');
        $fulLength = ArrayHelper::map(FurLength::find()->all(), 'id', 'fur_length');
        $fulColor = ArrayHelper::map(FurColor::find()->all(), 'id', 'fur_color');
        $size = ArrayHelper::map(Size::find()->all(), 'id', 'size');

        if (Yii::$app->request->post()) {
            $formData = Yii::$app->request->post();
            var_dump($formData);

            if ($animalModel->load($formData) && $animalModel->save()) {
                $addressModel->load($formData);
                if ($addressModel->save()) {

                    $model->load($formData);
                    if ($model->save()) {
                        return $this->redirect(['site/my-list-animals']);
                    }
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
            'addressModel' => $addressModel,
            'animalModel' => $animalModel,
            'natureList' => $natureList,
            'natureCat' => $natureCat,
            'natureDog' => $natureDog,
            'fulLength' => $fulLength,
            'fulColor' => $fulColor,
            'size' => $size,
            'sex' => $sex,
            'priority' => $priority]);

    }

    /**
     * Deletes an existing FoundAnimal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionDelete($id)
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
    protected
    function findModel($id)
    {
        if (($model = FoundAnimal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
