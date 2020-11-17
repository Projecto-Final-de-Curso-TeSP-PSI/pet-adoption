<?php

use common\models\Organization;
use common\models\Address;
use frontend\assets\AppAsset;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Associações';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>

<div class="organization-index">

    <div class="container">
        <div class="row">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

        <div>
            <div class="divTitleButtonFilter">
                <?= Html::button('Filtrar', [
                    'class' => 'btn btn-success',
                    'id' => 'btnFilter',
                    'data-toggle'=> 'modal',
                    'data-target'=> '#modalFilter',
                ]) ?>
            </div>
        </div>

        <div>
            <?= ListView::widget([
                'id' => 'lvOrganizations',
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'layout' => "{pager}\n{items}",
                'itemView' => '_organization'
            ]) ?>
        </div>

    </div>

</div>

<!-- Modal do filtro -->
<?= Yii::$app->view->renderFile('@frontend/views/components/_modal.php',
    ['title' => 'Filtro Organizações',
        'content' => $this->render('_search', ['districts' => $districts]),
        'submitText' => 'Filtrar',
        'closeText' => 'Fechar'
    ]); ?>






