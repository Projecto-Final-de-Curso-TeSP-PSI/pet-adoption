<?php

namespace frontend\controllers;

use common\models\Address;
use common\models\District;
use Couchbase\SearchQuery;
use Dotenv\Repository\AdapterRepository;
use Yii;
use common\models\Organization;
use common\models\OrganizationSearch;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrganizationController implements the CRUD actions for Organization model.
 */
class OrganizationController extends Controller
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
     * Lists all Organization models.
     * @return mixed
     */
    public function actionIndex()
    {
        try {
            $searchModel = new OrganizationSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            if( Yii::$app->request->post() != null) {

                $post = Yii::$app->request->post();
                $id = $post['District']['id'];


                $organizationsIds = Yii::$app->db
                    ->createCommand('
                    SELECT o.id
                    FROM organizations o
                        JOIN address a ON a.id = o.address_id 
                        JOIN districts d ON d.id = a.district_id
                    WHERE d.id = ' . $id
                    )->queryColumn();



                $query = Organization::find()->where(['in', 'id', $organizationsIds]);

                $dataProvider = new ActiveDataProvider([
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
            }

            $districtIds = Yii::$app->db
                ->createCommand('SELECT DISTINCT d.id
                FROM organizations o
                JOIN address a ON a.id = o.address_id 
                JOIN districts d ON d.id = a.district_id')
                ->queryColumn();
            $districts = District::find()->where(['in', 'id', $districtIds])->all();

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,

                'districts' => $districts,
            ]);
        }
        catch(Exception $e){

        }
    }

    /**
     * Displays a single Organization model.
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
     * Creates a new Organization model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Organization();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->organizationId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Organization model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->organizationId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Organization model.
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
     * Finds the Organization model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Organization the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Organization::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionOrganizationFilter1($id){

        $districts = District::findOne($id);

        $cities = Address::find()->where(['in', 'district_id', $id])->all();

        $addressIds = $cities->find()->select('id')->all();
        $organizations = Organization::find()->where(['in', 'address_id', $addressIds])->all();

        return $this->render('index', [
            'filter1' => $districts,
            'filter2' => $cities,
            'filter3' => $organizations
        ]);
    }
}
