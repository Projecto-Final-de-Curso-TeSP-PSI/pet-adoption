<?php


namespace common\fixtures;


use yii\test\ActiveFixture;

class AnimalFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Animal';
    public $depends = [
        'common\fixtures\NatureFixture',
        'common\fixtures\FurColorFixture',
        'common\fixtures\FurLengthFixture',
        'common\fixtures\SizeFixture',
    ];
}