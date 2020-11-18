<?php

use frontend\assets\AppAsset;
use yii\widgets\ListView;

AppAsset::register($this);

$this->title = 'Os meus animais perdidos';
?>

<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <?=
            ListView::widget(
                [
                    'dataProvider' => $dataProvider,
                    'itemOptions' => ['class' => 'col-xl-4 col-lg-4 col-sm-6'],
                    'itemView' => '../components/_itemListAnimal',
                    'options' => [
                        'class' => 'row'
                    ],
                    'layout' => "{pager}\n{items}",
                ]
            );
        ?>
    </div>
</div>


