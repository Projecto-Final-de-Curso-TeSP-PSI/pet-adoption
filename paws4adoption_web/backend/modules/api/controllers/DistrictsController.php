<?php

namespace backend\modules\api\controllers;

use common\models\District;
use common\models\Organization;
use common\models\User;
use Symfony\Component\Finder\Tests\Iterator\DateRangeFilterIteratorTest;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;

/**
 * Default controller for the `api` module
 */
class DistrictsController extends ActiveController
{
    public $modelClass = 'common\models\District';
}
