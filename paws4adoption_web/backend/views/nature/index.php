<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $parentSearchModel backend\models\NatureSearch */
/* @var $childSearchModel backend\models\NatureSearch */
/* @var $parentDataProvider yii\data\ActiveDataProvider */
/* @var $childDataProvider yii\data\ActiveDataProvider */

?>
<div class="nature-index">



    <div class="row">

        <div class="col-sm-6">
            <h1><?= 'Espécies' ?></h1>
            <p>
                <?= Html::a('Criar Espécie', ['create-specie'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'id' => 'speciesGridView',
                'dataProvider' => $parentDataProvider,
                'filterModel' => $parentSearchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'Espécie' => 'name',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{update} {delete}',
                        'urlCreator' => function ($action, $model, $key, $index) {
                            if ($action === 'update') {
                                $url = 'update?id=' . $key . '&scenario=' . \common\models\Nature::SCENARIO_SPECIE;
                                return $url;
                            }
                            if ($action === 'delete') {
                                $url = Url::to('delete?id=' . $key);
                                return $url;
                            }
                        },
                    ],
                ],
            ]); ?>
        </div>

        <div class="col-sm-6">
            <h1><?= 'Subespécies' ?></h1>
            <p>
                <?= Html::a('Criar Sub-Espécie', Url::to(['create-sub-specie', 'specieId' => 1]), ['class' => 'btn btn-success']) ?>
            </p>

            <?php \yii\widgets\Pjax::begin(['id' => 'pjax-container'] ); ?>
                <?= GridView::widget([
                    'id' => 'subspeciesGridView',
                    'dataProvider' => $childDataProvider,
                    'filterModel' => $childSearchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'Espécie' => 'name',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{update} {delete}',
                            'urlCreator' => function ($action, $model, $key, $index) {
                                if ($action === 'update') {
                                    $url = 'update?id=' . $key . '&scenario=' . \common\models\Nature::SCENARIO_SUB_SPECIE;
                                    return $url;
                                }
                                if ($action === 'delete') {
                                    $url = Url::to('delete?id=' . $key);
                                    return $url;
                                }
                            },
                        ],
                    ],
                ]); ?>
            <?php \yii\widgets\Pjax::end(); ?>

        </div>
    </div>

</div>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>




</div>
