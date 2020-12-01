<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admin_users".
 *
 * @property int $id
 *
 * @property User $id0
 */
class AdminUser extends \common\models\User
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
            [['id'], 'required'],
            [['id'], 'integer'],
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
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
