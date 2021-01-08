<?php

namespace common\models;

use common\models\Organization;
use yii\db\ActiveQuery;

class OrganizationQuery extends ActiveQuery
{
    public function isActive($status = true){

        return $status ?
            $this->andOnCondition(['status' => Organization::STATUS_ACTIVE])
            :
            $this->andOnCondition(['!=', 'status', Organization::STATUS_ACTIVE]);
    }

    public function except($id){
        return $this->andOnCondition(['!=', 'id', $id]);
    }

    public function isAprovalPending(){
        return $this->andOnCondition(['status' => Organization::STATUS_APPROVAL_PENDING]);
    }

    public function isNotApprovalPendind(){
        return $this->andOnCondition(['!=', 'status', Organization::STATUS_APPROVAL_PENDING]);
    }

}