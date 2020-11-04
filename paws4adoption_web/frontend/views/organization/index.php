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


$this->title = 'Organizations';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="organization-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-offset-10">
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
    'toggleButton' => ['label' => 'click me'],
    'id'=>'modalFilter',
    'size'=>'modal-md',
]);?>

<div class='modalContent yii-modal'>

    <?php echo $this->render('_search', [
        'model' => $searchModel,
        'dataProvider' => $dataProvider,
        'districts' => $districts,
        'organizations' => $organizations
    ]);
    ?>



</div>

<?php Modal::end(); ?>

</div>
