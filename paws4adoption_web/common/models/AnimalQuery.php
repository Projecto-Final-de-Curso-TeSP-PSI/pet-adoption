<?php


namespace common\models;


use yii\db\ActiveQuery;

class AnimalQuery extends ActiveQuery
{
    //###########  ADOPTION ANIMAL   ###########
    public function isAdoptionAnimal(){

        return $this
            ->joinWith('adoptionAnimal aa ')
            ->andWhere(['is not', 'ma.id', null]);
    }

    public function isOnFat($status = true){
        return $this->andOnCondition(['is:_on_fat' => $status]);
    }

    public function isAdopted($status = true){
        return $status ? $this->andWhere(['is not', 'aa.id', null]) : $this->andWhere(['is', 'aa.id', null]);
    }

    //###########  MISSING ANIMAL   ###########
    public function isMissingAnimal(){

        return $this
            ->joinWith('missingAnimal ma')
            ->andWhere(['is not', 'ma.id', null]);
    }

    public function isStillMissing($status = true){
        return $this->andOnCondition(['is_missing' => $status]);
    }

    //###########  FOUND ANIMAL   ###########
    public function isFoundAnimal(){
        return
            $this
            ->joinWith('foundAnimal fa')
            ->andWhere(['is not', 'fa.id', null]);
    }

    public function isStillOnStreet($status = true){
        return $this
            ->andWhere(['fa.is_active' => $status]);
    }

}