<?php

namespace frontend\controllers;

use backend\models\AdoptionAnimalForm;
use common\models\Adoption;
use common\models\Animal;
use common\models\AnimalAdoptionSearch;
use common\models\AnimalSearch;
use common\models\AssociatedUser;
use common\models\FurColor;
use common\models\FurLength;
use common\models\Nature;
use common\models\Organization;
use common\models\OrganizationSearch;
use common\models\Photo;
use common\models\Size;
use common\models\User;
use phpDocumentor\Reflection\Types\This;
use Yii;
use common\models\AdoptionAnimal;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

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
                'only' => ['create', 'view', 'update', 'delete', /*'my-org-adoption-animals'*/],
                'rules' => [
                    [
                        'actions' => ['create'],
                        'allow' => true,
                        'roles' => ['createAdoptionAnimal']
                    ],
                    [
                        'actions' => ['view','update', 'delete'],
                        'allow' => true,
                        'roles' => ['manageAdoptionAnimal'],
                        'roleParams' => ['animal_id' => Yii::$app->request->get('id')]
                    ],
                    /*[
                        'actions' => ['my-org-adoption-animals'],
                        'allow' => true,
                        'roles' => ['manageAdoptionAnimal'],
                        'roleParams' => ['organization_id' => $this->getOrgId()]
                    ]*/
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
//            $animalAdoptionDataProvider = $animalAdoptionSearchModel->search(Yii::$app->request->queryParams);

            if (Yii::$app->request->get() != null){

                $query = $this->queryBuilder(Yii::$app->request->get());

                $animalAdoptionDataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                        'pageSize' => 10,
                    ]
                ]);
            } else {
                $query = AdoptionAnimal::find()
                    ->joinWith(['adoption', 'animal'])
                    ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);

                $animalAdoptionDataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => false
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


//    /**
//     * Displays AnimalsList page.
//     *
//     * @return mixed
//     */
//    public function actionListAnimals()
//    {
//        $dataProvider = new ActiveDataProvider([
//            'query' => Animal::find()->orderBy('id DESC'),
//            'pagination' => [
//                'pageSize' => 10,
//            ],
//        ]);
//        //var_dump($dataProvider->getModels());
//
//        return $this->render('listAnimals', ['dataProvider' => $dataProvider]);
//    }


    /**
     * Displays a single AdoptionAnimal model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be Adoption
     */
    public function actionView($id)
    {
        $query = Adoption::find()
            ->where(['adopted_animal_id' => $id, 'adoption_date' => null]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false,
        ]);

        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new AdoptionAnimal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $animalModel = new Animal(['scenario' => Animal::SCENARIO_MISSING_ANIMAL]);
        $adoptionAnimalModel = new AdoptionAnimal();
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

                $loggedUserId = Yii::$app->user->id;
                $loggedAssociatedUser = AssociatedUser::findOne($loggedUserId);

                $adoptionAnimalModel->load($formData);
                $adoptionAnimalModel->id = $animalModel->id;
                $adoptionAnimalModel->is_on_fat = false;
                $adoptionAnimalModel->organization_id = $loggedAssociatedUser->organization_id;
                $adoptionAnimalModel->associated_user_id = $loggedUserId;
                if ($adoptionAnimalModel->save()) {
                    return $this->redirect(['site/my-org-adoption-animals']);
                }
            }
        }

        return $this->render('create', [
            'animalModel' => $animalModel,
            'adoptionAnimalModel' => $adoptionAnimalModel,
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
     * Updates an existing AdoptionAnimal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be Adoption
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
                    return $this->redirect(['site/my-org-adoption-animals']);
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
//Todo: corrigir a query para não mostrar animais já adotados
        $parent_nature_id = $params['AnimalSearch']['parent_nature_id'];
        $natureCat_id = $params['AnimalSearch']['natureCat_id'];
        $natureDog_id = $params['AnimalSearch']['natureDog_id'];
        $size = $params['AnimalSearch']['size'];
        $organization = $params['AnimalSearch']['organization'];

        if ($parent_nature_id !== "" && $natureCat_id !== "" && $size !== "" && $organization !== ""){
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['in', 'nature_id', $naturesIds])
                ->andWhere(['nature_id' => $natureCat_id, 'size_id' => $size, 'organization_id' => $organization])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "" && $size !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['in', 'nature_id', $naturesIds])
                ->andWhere(['nature_id' => $natureDog_id, 'size_id' => $size, 'organization_id' => $organization])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureCat_id !== "" && $size !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['in', 'nature_id', $naturesIds])
                ->andWhere(['nature_id' => $natureCat_id, 'size_id' => $size])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "" && $size !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->where(['in', 'nature_id', $naturesIds])
                ->where(['nature_id' => $natureDog_id, 'size_id' => $size])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureCat_id !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andwhere(['in', 'nature_id', $naturesIds])
                ->andwhere(['nature_id' => $natureCat_id, 'organization_id' => $organization])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['in', 'nature_id', $naturesIds])
                ->andWhere(['nature_id' => $natureDog_id, 'organization_id' => $organization])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureCat_id !== "") {

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['nature_id' => $natureCat_id])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $natureDog_id !== "") {

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['nature_id' => $natureDog_id])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $size !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['in', 'nature_id', $naturesIds])
                ->andWhere(['size_id' => $size, 'organization_id' => $organization])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $size !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['in', 'nature_id', $naturesIds])
                ->andWhere(['size_id' => $size])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "" && $organization !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['in', 'nature_id', $naturesIds])
                ->andWhere(['organization_id' => $organization])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($parent_nature_id !== "") {
            $naturesIds = Nature::getChildsIdsByParentId($parent_nature_id);

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['in', 'nature_id', $naturesIds])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($natureCat_id !== "") {

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['nature_id' => $natureCat_id])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($natureDog_id !== "") {

            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['nature_id' => $natureDog_id])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($size !== "" && $organization !== "") {
            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['size_id' => $size, 'organization_id' => $organization])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($size !== "") {
            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['size_id' => $size])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;

        } elseif ($organization !== ""){
            $query = AdoptionAnimal::find()
                ->joinWith(['animal', 'adoption'])
                ->andWhere(['organization_id' => $organization])
                ->andWhere(['is', 'adoption_date', null])->orderBy(['createdAt' => SORT_DESC]);
            return $query;
        }
    }

    /**
     * Returns to the view a list of all adoption animals in the organization where the user is associated
     * @return string
     */
    public function actionMyOrgAdoptionAnimals(){
        $loggedUserId = Yii::$app->user->id;
        $loggedAssociatedUser = AssociatedUser::findOne($loggedUserId);

        if ($loggedAssociatedUser == null){
            throw new ForbiddenHttpException(
                'Não está associado a nenhuma organização, pelo que não tem acesso à página que está a tentar aceder.');
        }

        $organizationId = $loggedAssociatedUser->organization_id;

        $searchAdoptionAnimalModel = new AnimalAdoptionSearch();

        $query = AdoptionAnimal::find()
            ->andWhere(['organization_id' => $organizationId])
            ->joinWith('adoption')
            ->andWhere(['is', 'adoption_date', null]);

//        $queryResult = $query->all();

        $dataProviderAdoptionAnimal = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false,
        ]);

        return $this->render('myOrgAdoptionAnimalsList', [
            'searchAdoptionAnimalModel' => $searchAdoptionAnimalModel,
            'dataProviderAdoptionAnimal' => $dataProviderAdoptionAnimal,
        ]);

    }
}
