<?php

namespace common\rbac;

use common\models\AdoptionAnimal;
use common\models\AssociatedUser;
use common\models\MissingAnimal;
use yii\rbac\Item;

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

        //more params can be added to the rule

        return false;
    }
}