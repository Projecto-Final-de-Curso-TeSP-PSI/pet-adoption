<?php

namespace common\models;

use yii\db\ActiveQuery;

class OrganizationQuery extends ActiveQuery
{
    public function isActive($status = true){
        return $status ?
            $this->andOnCondition(['status' => Organization::ACTIVE])
            : $this->andOnCondition(['!=', 'status', Organization::ACTIVE]);
    }

    public function isAprovalPending(){
        return $this->andOnCondition(['status' => Organization::APPROVAL_PENDING]);
    }

}