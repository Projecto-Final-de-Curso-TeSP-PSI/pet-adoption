<?php


namespace console\rbac;



use common\models\AssociatedUser;
use yii\rbac\Item;

class PublisherUserRule extends \yii\rbac\Rule
{

    public $name = 'isPublisherUser';

    /**
     * @inheritDoc
     */
    public function execute($user, $item, $params)
    {

//        var_dump($item);
//        die;

        //If the parameter passed is a adoptionAnimal, check if it as been published by the User
        if (isset($params['missingAnimal'])) {
            return $params['missingAnimal']->owner_id == $user;
        }

        //If the parameter passed is a foundAnimal, check if it as been published by the User
        if (isset($params['foundAnimal'])) {
            return $params['foundAnimal']->user_id == $user;
        }

        //More params can be added to the rule

        return false;
    }
}