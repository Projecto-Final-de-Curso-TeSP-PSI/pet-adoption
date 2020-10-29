<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adoption_animals".
 *
 * @property int $adoption_animal_id
 * @property bool|null $is_on_fat
 * @property int $organization_id
 * @property int $associated_user_id
 *
 * @property Animals $adoptionAnimal
 * @property AssociatedUsers $associatedUser
 * @property Organizations $organization
 */
class AdoptionAnimal extends \yii\db\ActiveRecord
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
            [['adoption_animal_id', 'organization_id', 'associated_user_id'], 'required'],
            [['adoption_animal_id', 'organization_id', 'associated_user_id'], 'integer'],
            [['is_on_fat'], 'boolean'],
            [['adoption_animal_id'], 'unique'],
            [['adoption_animal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Animals::className(), 'targetAttribute' => ['adoption_animal_id' => 'animal_id']],
            [['associated_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => AssociatedUsers::className(), 'targetAttribute' => ['associated_user_id' => 'associated_users_id']],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organizations::className(), 'targetAttribute' => ['organization_id' => 'organizationId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adoption_animal_id' => 'Adoption Animal ID',
            'is_on_fat' => 'Is On Fat',
            'organization_id' => 'Organization ID',
            'associated_user_id' => 'Associated user ID',
        ];
    }

    /**
     * Gets query for [[AdoptionAnimal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionAnimal()
    {
        return $this->hasOne(Animals::className(), ['animal_id' => 'adoption_animal_id']);
    }

    /**
     * Gets query for [[AssociatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssociatedUser()
    {
        return $this->hasOne(AssociatedUsers::className(), ['associated_users_id' => 'associated_user_id']);
    }

    /**
     * Gets query for [[Organization]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(Organizations::className(), ['organizationId' => 'organization_id']);
    }
}
