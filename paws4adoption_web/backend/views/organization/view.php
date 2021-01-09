<?php

use common\models\Organization;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Organization */

$this->title = 'Detalhes da Organização';
\yii\web\YiiAsset::register($this);
?>
<div class="organization-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Voltar', ['index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'nif',
            'email:email',
            'phone',
            ['attribute' => 'statusHtml', 'format' => 'html'],
            'address_id',
            'address.street',
            'address.door_number',
            'address.floor',
            'address.postal_code',
            'address.street_code',
            'address.city',
            'address.district.name',
            'founder.fullName'
        ],
    ]) ?>

</div>
