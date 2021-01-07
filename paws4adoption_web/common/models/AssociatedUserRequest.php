<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "associated_user_requests".
 *
 * @property int $id
 * @property int $candidate_id
 * @property int $organization_id
 * @property string $motivation
 * @property int $status
 *
 * @property User $candidate
 * @property Organization $organization
 */
class AssociatedUserRequest extends \yii\db\ActiveRecord
{
    const PENDING_REQUEST = 0;
    const TREATED = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'associated_user_requests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['candidate_id', 'organization_id', 'motivation'], 'required'],
            [['candidate_id', 'organization_id', 'status'], 'integer'],
            [['motivation'], 'string', 'max' => 100],
            [['candidate_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['candidate_id' => 'id']],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'candidate_id' => 'Candidato',
            'organization_id' => 'Organização',
            'motivation' => 'Motivação',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Candidate]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCandidate()
    {
        return $this->hasOne(User::className(), ['id' => 'candidate_id']);
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
}
