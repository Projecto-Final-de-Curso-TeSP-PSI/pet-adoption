<?php

use \yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mainContent">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_animal',
        'viewParams' => [
            'fullView' => true,
            'context' => 'main-page',
        ],
        'layout' => "{pager}\n{items}",
    ])
    ?>
</div>

<?php


