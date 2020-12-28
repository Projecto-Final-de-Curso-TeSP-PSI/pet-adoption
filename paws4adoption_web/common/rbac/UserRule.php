<?php


namespace common\rbac;



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

        //If the parameter passed is a id, check if it matches with the id of the authenticated user
        if (isset($params['id'])) {
            return $params['id'] == $user;
        }

        //More params can be added to the rule

        return false;
    }
}