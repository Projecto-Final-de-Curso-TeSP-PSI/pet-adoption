<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "associated_users".
 *
 * @property int $id
 * @property bool $isActive
 * @property int $organization_id
 *
 * @property AdoptionAnimal[] $adoptionAnimals
 * @property User $user
 */
class AssociatedUser extends ActiveRecord //extends \common\models\User
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'associated_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'organization_id'], 'required'],
            [['id', 'organization_id'], 'integer'],
            [['isActive'], 'boolean'],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isActive' => 'Is Active',
            'organization_id' => 'Organization ID',
        ];
    }

    /**
     * Gets query for [[AdoptionAnimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionAnimals()
    {
        return $this->hasMany(AdoptionAnimal::className(), ['associated_user_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }

    /**
     * Get's the organization id for the user
     * @param integer $id The user id to het the organization from
     * @return mixed
     */
    public static function getOrgIdByUserId($id){
        return self::find()->where(['id' => $id])->select(['organization_id'])->column()[0];
    }
}
