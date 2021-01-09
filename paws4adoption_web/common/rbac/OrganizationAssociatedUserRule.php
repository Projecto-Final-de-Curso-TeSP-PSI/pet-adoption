<?php

namespace common\rbac;

use common\classes\RoleManager;
use common\models\AdoptionAnimal;
use common\models\AssociatedUser;
use common\models\MissingAnimal;
use Yii;
use yii\rbac\Item;
use yii\web\BadRequestHttpException;
use yii\web\ForbiddenHttpException;

class OrganizationAssociatedUserRule extends \yii\rbac\Rule
{

    public $name = 'isOrganizationAssociatedUser';

    /**
     * @inheritDoc
     */
    public function execute($user, $item, $params)
    {

        //If the parameter passed is a organization, check if the user is associated to that organization
        if (isset($params['organization_id'])) {
            return $params['organization_id'] == AssociatedUser::findOne($user)->organization_id;
        }

        if (isset($params['animal_id'])){
            return AdoptionAnimal::findOne($params['animal_id'])->organization_id == AssociatedUser::findOne($user)->organization_id;
        }

        //If parameter passed is associate_id, check if the logged user is associated to the same organization as the user sent in the parameter
        if (isset($params['associate_id'])) {

            //If logged user has no associated user relation
            $loggedUser = AssociatedUser::findOne($user);
            if($loggedUser == null){
                if(RoleManager::userHasRole(RoleManager::ADMIN_ROLE, Yii::$app->user->id))
                    throw new ForbiddenHttpException('You dont have any organization associated to you');
                else
                    return false;
            }

            //If the associated user to remove does not exist
            $associated_user = AssociatedUser::findOne($params['associate_id']);
            if($associated_user == null)
                throw new BadRequestHttpException("Wrong remove request");


            return  $loggedUser->organization_id ==  $associated_user->organization_id;
        }

        //more params can be added to the rule

        return false;
    }
}