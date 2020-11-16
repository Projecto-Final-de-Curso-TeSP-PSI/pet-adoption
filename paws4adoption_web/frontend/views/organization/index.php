<?php

use common\models\Organization;
use common\models\Address;
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
?>


<div class="organization-search">


</div>

<div id="test-div">
</div>

<div class="organization-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-offset-2">
                <?= Html::button('Filtrar', [
                    'class' => 'btn btn-success',
                    'id' => 'btnFilter',
                    'data-toggle'=> 'modal',
                    'data-target'=> '#modalFilter',
                ]) ?>
            </div>
        </div>
        <div class="row">
            <?= ListView::widget([
                'id' => 'lvOrganizations',
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => '_organization'
            ]) ?>
        </div>
    </div>

</div>

<?php Modal::begin([
    'header' => 'Filtrar Associações',
    'id'=>'modalFilter',
    'size'=>'modal-md',
]);?>

<div class='modalContent yii-modal'>

    <?php echo $this->render('_search', [
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,

        'districts' => $districts,

    ]);
    ?>

</div>

<?php Modal::end(); ?>

</div>
