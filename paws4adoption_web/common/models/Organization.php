<?php

namespace common\models;

use ReflectionClass;
use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "organizations".
 *
 * @property int $id
 * @property string $name
 * @property string $nif
 * @property string $email
 * @property string $phone
 * @property int $address_id
 * @property int $founder_id
 * @property int $status
 *
 * @property AdoptionAnimal[] $adoptionAnimals
 * @property Address $address
 * @property User $founder
 */
class Organization extends \yii\db\ActiveRecord
{
    const STATUS_APPROVAL_PENDING = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    const SCENARIO_CREATE_ORGANIZATION = 'createorganization';
    const SCENARIO_UPDATE_ORGANIZATION = 'updateorganization';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organizations';
    }

    /**
     * @param bool $active the state ot the organization
     * @param $except
     * @return array
     */
    public static function getSpinnerOptions($active = true, $user_id = -1)
    {
        $user = AssociatedUser::findOne($user_id);
        $organization_id = -1;

        if($user != null)
            $organization_id = $user->organization_id;

        return ArrayHelper::map(self::find()
            ->isActive($active)
            ->except($organization_id)
            ->all(),
            'id', 'name');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'nif', 'email', 'phone', 'address_id', 'founder_id'], 'required'],
            [['address_id', 'founder_id', 'status'], 'integer'],
            [['name', 'email'], 'string', 'max' => 64],
            [['nif', 'phone'], 'string', 'max' => 9],
            [['nif'], 'unique'],
            [['address_id'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address_id' => 'id']],
            [['founder_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['founder_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nome da organização',
            'nif' => 'Nif',
            'email' => 'Email',
            'phone' => 'Telefone',
            'address_id' => 'Address ID',
            'status' => 'Estado',
            'address' => 'Morada',
            'founder_id' => 'Founder id',
            'founder' => 'Fundador',
            'city' => 'Cidade'
        ];
    }

    /**
     * Gets query for [[AdoptionAnimals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdoptionAnimals()
    {
        return $this->hasMany(AdoptionAnimal::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Address]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAddress()
    {
        return $this->hasOne(Address::className(), ['id' => 'address_id']);
    }

    /**
     * Gets query for [[AssociatedUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssociatedUsers(){
        return $this->hasMany(AssociatedUser::className(), ['id' => 'organization_id']);
    }

    /**
     * Gets query for [[Founder]].
     * @return \yii\db\ActiveQuery
     */
    public function  getFounder(){
        return $this->hasOne(User::className(), ['id' => 'founder_id']);
    }

    /**
     * Gets an array with all address id
     * @return array
     */
    public static function getAllAddressesIds(){
        return self::find()
            ->select('address_id')
            ->distinct()
            ->column();
    }

    public static function getOrganizationsWithAdoptionAnimals(){
        return self::find()
            ->where(['in', 'id', (
                new Query())->select('organization_id')
                ->from('adoption_animals')
                ->where(['not in', 'id', (
                    new Query())->select('adopted_animal_id')
                    ->from('adoptions')])])->all();
    }
    /**
     * Overrides static method find, and sets that OrganizationQuery.php add's querying methods
     * @return OrganizationQuery|\yii\db\ActiveQuery
     */

    /**
     * Get's the city of the organization
     * @return string|null
     */
    public function getCity(){
        return $this->address->city;
    }

    /**
     * Get's an array of all the status ot the organization, according with teh actor that is accessing
     * @return array
     */
    public static function getStatuses($actor){
        $result = null;
        switch($actor){
            case 'user':
                $result  = [
                    ['id' => self::STATUS_ACTIVE, 'name' => 'Ativo'],
                    ['id' => self::STATUS_INACTIVE, 'name' => 'Inativo'],
                ];
                break;
            case 'admin':
                $result  = [
                    ['id' => self::STATUS_APPROVAL_PENDING, 'name' => 'Pendente Aprovação'],
                    ['id' => self::STATUS_ACTIVE, 'name' => 'Ativo'],
                    ['id' => self::STATUS_INACTIVE, 'name' => 'Inativo'],
                ];
                break;
            default:
                $result = [];
        }

        return ArrayHelper::map($result, 'id', 'name');
    }

    /**
     * Override to the ActiveRecord find() static function,
     * and states that OrganizationQuery class will be the class who will define the find() method
     * @return OrganizationQuery|\yii\db\ActiveQuery
     */
    public static function find(){
        return new OrganizationQuery(get_called_class());
    }

}
