<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "adoption_animals".
 *
 * @property int $id
 * @property bool|null $is_on_fat
 * @property int $organization_id
 * @property int $associated_user_id
 *
 * @property Animal $animal
 * @property AssociatedUser $associatedUser
 * @property Organization $organization
 * @property Adoption $adoption
 */
class AdoptionAnimal extends \common\models\Animal
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adoption_animals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'organization_id', 'associated_user_id'], 'required'],
            [['id', 'organization_id', 'associated_user_id'], 'integer'],
            [['is_on_fat'], 'boolean'],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['id' => 'id']],
            [['associated_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => AssociatedUser::className(), 'targetAttribute' => ['associated_user_id' => 'id']],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        $parentAttributeLabels = parent::attributeLabels();
        $childAttributeLabels = [
            'id' => 'ID',
            'is_on_fat' => 'Em Família de Acolhimento Temporário',
            'organization_id' => 'Organization ID',
            'associated_user_id' => 'Associated User ID',
        ];
        return array_merge($parentAttributeLabels, $childAttributeLabels);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimal()
    {
        return $this->hasOne(Animal::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[AssociatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssociatedUser()
    {
        return $this->hasOne(AssociatedUser::className(), ['id' => 'associated_user_id']);
    }

    /**
     * Gets query for [[Organization]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'organization_id']);
    }

    /**
     * Gets query for [[Adoption]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoption()
    {
        return $this->hasOne(Adoption::className(), ['adopted_animal_id' => 'id']);
    }

    public static function getAllAddressesIds(){
        return self::find()
            ->innerJoinWith('organization')
            ->select('address_id')
            ->column();
    }
}
