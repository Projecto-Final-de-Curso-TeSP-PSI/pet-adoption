<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin_users".
 *
 * @property int $adminUserId
 */
class AdminUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adminUserId'], 'required'],
            [['adminUserId'], 'integer'],
            [['adminUserId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adminUserId' => 'Admin User ID',
        ];
    }
}
