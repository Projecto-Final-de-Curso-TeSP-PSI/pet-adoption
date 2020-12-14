<?php

namespace common\rbac;

use common\models\AssociatedUser;
use yii\rbac\Item;

class OrganizationAssociatedUserRule extends \yii\rbac\Rule
{

    public $name = 'isOrganizationAssociatedUser';

    /**
     * @inheritDoc
     */
    public function execute($user, $item, $params)
    {
        //If the parameter passed is a adoptionAnimal, check if the user associated to that organization
        if (isset($params['adoptionAnimal'])) {
            return $params['adoptionAnimal']->organization_id == AssociatedUser::findOne($user)->organization_id;
        }

        //If the parameter passed is a adoption, check if the user is associated to that organization
        if (isset($params['adoption'])) {
            return $params['adoption']->adoptionAnimal->organization_id == AssociatedUser::findOne($user)->organization_id;
        }

        //If the parameter passed is a organization, check if the user is associated to that organization
        if (isset($params['organization'])) {
            return $params['organization']->id == AssociatedUser::findOne($user)->organization_id;
        }

        //more params can be added to the rule

        return false;
    }
}