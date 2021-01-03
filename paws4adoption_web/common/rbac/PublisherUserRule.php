<?php


namespace common\rbac;



use common\models\AssociatedUser;
use common\models\FoundAnimal;
use common\models\MissingAnimal;
use yii\rbac\Item;

class PublisherUserRule extends \yii\rbac\Rule
{

    public $name = 'isPublisherUser';

    /**
     * @inheritDoc
     */
    public function execute($user, $item, $params)
    {
            //If the parameter passed is a adoptionAnimal, check if it as been published by the User
            if($params['animal_type'] == 'missingAnimal'){

                $missingAnimal = MissingAnimal::findOne($params['animal_id']);

                if($missingAnimal !== null){
                    return $missingAnimal->owner_id == $user;
                }
            }

            //If the parameter passed is a foundAnimal, check if it as been published by the User
            if ($params['animal_type'] == 'foundAnimal') {

                $foundAnimal = FoundAnimal::findOne($params['animal_id']);

                if($foundAnimal !== null){
                    return $foundAnimal->user_id == $user;
                }
            }


        //More params can be added to the rule

        return false;
    }
}