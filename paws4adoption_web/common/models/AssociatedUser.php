<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "associated_users".
 *
 * @property int $associated_users_id
 * @property bool $isActive
 * @property int $organization_id
 */
class AssociatedUser extends \yii\db\ActiveRecord
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
            [['associated_users_id', 'organization_id'], 'required'],
            [['associated_users_id', 'organization_id'], 'integer'],
            [['isActive'], 'boolean'],
            [['associated_users_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'associated_users_id' => 'Associated Users ID',
            'isActive' => 'Is Active',
            'organization_id' => 'Organization ID',
        ];
    }
}
