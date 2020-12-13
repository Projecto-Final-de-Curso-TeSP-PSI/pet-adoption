<?php


namespace console\rbac;



use common\models\AssociatedUser;
use yii\rbac\Item;

class UserRule extends \yii\rbac\Rule
{

    public $name = 'isUser';

    /**
     * @inheritDoc
     */
    public function execute($user, $item, $params)
    {

        //If the parameter passed is a foundAnimal, check if it as been published by the User
        if (isset($params['user'])) {
            return $params['user']->id == $user;
        }

        //More params can be added to the rule

        return false;
    }
}