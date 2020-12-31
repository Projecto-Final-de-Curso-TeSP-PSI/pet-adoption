<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NatureSearch */
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
                'id' => 'parentGridView',
                'dataProvider' => $parentDataProvider,
                'filterModel' => $searchModel,

                'rowOptions' => function($model,$index,$key){
                    return ['id' => $model['id'],
                        'onclick' =>
                        '
//                              var pjaxContainer = $(this).attr(\'pjax-container\');
//                        
//                              $.get(
//                                  "'.Url::toRoute('refresh-subspecies').'", { id:' . $model['id'].' } 
//                              ).done(function( data ) {
//                                  $.pjax.reload({container:\'#idofyourpjaxwidget\'});
//                              } 
//                        );
                        '
                    ];
                },
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'name',
                    ['class' => 'yii\grid\ActionColumn'],
                    [
                        'class' => 'yii\grid\RadioButtonColumn',
                        'radioOptions' => function($model, $keys, $index, $column){
                            return [
                                'onchange' => "var selectedKey = $keys;"
                            ];
                        },
                    ]

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
                    'id' => 'childGridView',
                    'dataProvider' => $childDataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'name',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>

            <?php \yii\widgets\Pjax::end(); ?>

        </div>
    </div>

</div>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>




</div>
