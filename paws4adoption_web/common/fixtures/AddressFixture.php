<?php


namespace common\fixtures;


use yii\test\ActiveFixture;

class AddressFixture extends ActiveFixture
{
    public $modelClass = 'common\models\address';
    public $depends = ['common\fixtures\DistrictFixture'];
}