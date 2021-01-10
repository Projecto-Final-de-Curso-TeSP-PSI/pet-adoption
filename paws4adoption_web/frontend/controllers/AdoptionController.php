<?php

namespace frontend\controllers;

use Cassandra\Date;
use common\models\Address;
use common\models\AdoptionAnimal;
use common\models\Animal;
use common\models\AssociatedUser;
use common\models\User;
use frontend\models\AdoptionRequestForm;
use Yii;
use common\models\Adoption;
use common\models\AdoptionSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
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
                'only' => ['create', 'success'],
                'rules' => [
                    [
                        'actions' => ['create', 'success'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
//                    [
//                        'actions' => ['delete', 'accept-adoption-request'],
//                        'allow' => true,
//                        'roles' => ['manageAdoptionAnimal'],
//                        'roleParams' => ['animal_id' => Yii::$app->request->get('animal_id')]
//                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

//    /**
//     * Lists all Adoption models.
//     * @return mixed
//     */
//    public function actionIndex()
//    {
//        $searchModel = new AdoptionSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }

    /**
     * Success page.
     * @return mixed
     */
    public function actionSuccess()
    {
        return $this->render('success');
    }

//    /**
//     * Displays a single Adoption model.
//     * @param integer $id
//     * @return mixed
//     * @throws NotFoundHttpException if the model cannot be found
//     */
//    public function actionView($id)
//    {
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
//    }

    /**
     * Creates a new Adoption model.
     * If creation is successful, the browser will be redirected to the 'AdoptionAnimal/index' page.
     * @return mixed
     */
    public function actionCreate($id, $type)
    {
        $model = new Adoption();
        $adopterId = Yii::$app->user->id;
        $adopter = User::findOne(['id' => $adopterId]);
        $model->adopter_id = $adopterId;
        $model->adopted_animal_id = $id;
        $model->type = $type;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect('success');
        }

        if ($type == 'fat') {
            $model->scenario = 'fat';

            return $this->render('create', [
                'adoptionModel' => $model,
                'title' => 'Formulário submissão de pedido de acolhimento temporário (FAT)',
                'adopter' => $adopter,
            ]);
        } else {
            $model->scenario = 'adoption';
            return $this->render('create', [
                'adoptionModel' => $model,
                'title' => 'Formulário submissão de pedido de adoção',
                'adopter' => $adopter,
            ]);
        }
    }

//    /**
//     * Updates an existing Adoption model.
//     * If update is successful, the browser will be redirected to the 'view' page.
//     * @param integer $id
//     * @return mixed
//     * @throws NotFoundHttpException if the model cannot be found
//     */
//    public function actionUpdate($id)
//    {
//        $model = $this->findModel($id);
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
//        return $this->render('update', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Deletes an existing Adoption model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $animal_id)
    {
        $loggedUserId = Yii::$app->user->id;
        $loggedAssociatedUser = AssociatedUser::findOne($loggedUserId);

        if ($loggedAssociatedUser == null){
            throw new ForbiddenHttpException(
                'Não está associado a nenhuma organização, pelo que não tem acesso à página que está a tentar aceder.');
        } elseif ($loggedAssociatedUser->organization_id != AdoptionAnimal::findOne($animal_id)->organization_id){
            throw new ForbiddenHttpException(
                'Este animal não pertence à sua organização.'
            );
        }

        $this->findModel($id)->delete();

        $count = count(self::getAdoptionRequestsByAnimal($animal_id));

        if ($count > 0){
            return $this->redirect(['adoption-animal/view?id='.$animal_id]);
        }

        return $this->redirect(['adoption-animal/my-org-adoption-animals']);
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

    /**
     *
     * @param $id
     * @return array|\yii\db\ActiveRecord[] all the adoption requests made to that animal
     */
    public static function getAdoptionRequestsByAnimal($id)
    {
        return Adoption::find()
            ->where(['adopted_animal_id' => $id, 'adoption_date' => null])
            ->all();
    }

    /**
     * @param $id
     * @param $animal_id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionAcceptAdoptionRequest($id, $animal_id){

        $loggedUserId = Yii::$app->user->id;
        $loggedAssociatedUser = AssociatedUser::findOne($loggedUserId);

        if ($loggedAssociatedUser == null){
            throw new ForbiddenHttpException(
                'Não está associado a nenhuma organização, pelo que não tem acesso à página que está a tentar aceder.');
        } elseif ($loggedAssociatedUser->organization_id != AdoptionAnimal::findOne($animal_id)->organization_id){
            throw new ForbiddenHttpException(
                'Este animal não pertence à sua organização.'
            );
        }

        $adoptedAnimal = $this->findModel($id);
        $adoptedAnimal->adoption_date = date("Y-m-d");
        $adoptedAnimal->save();

        $rejectedAdoptionRequests = self::getAdoptionRequestsByAnimal($animal_id);

        foreach ($rejectedAdoptionRequests as $rejectedAdoptionRequest){
            $rejectedAdoptionRequest->delete();
        }

        return $this->redirect(['adoption-animal/my-org-adoption-animals']);
    }
}
