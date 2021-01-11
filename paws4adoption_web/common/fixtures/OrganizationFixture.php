<?php


namespace common\fixtures;


use yii\test\ActiveFixture;

class OrganizationFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Organization';
    public $depends = [
        'common\fixtures\AddressFixture',
        'common\fixtures\UserFixture'
    ];
}