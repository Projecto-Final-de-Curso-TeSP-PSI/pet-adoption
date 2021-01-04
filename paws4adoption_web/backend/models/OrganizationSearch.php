<?php

namespace backend\models;

use backend\modules\api\models\Address;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Organization;

/**
 * OrganizationSearch represents the model behind the search form of `common\models\Organization`.
 * @property Address $address
 */
class OrganizationSearch extends Organization
{
    public $city;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'address_id', 'status'], 'integer'],
            [['name', 'nif', 'email', 'phone', 'city'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Organization::find();

        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'attributes' => [
                'id',
                'city' => [
                    'asc' => ['address.city' => SORT_ASC],
                    'desc' => ['address.city' => SORT_DESC],
                    'label' => 'Cidade'
                ],
            ],
        ]);


        if (!($this->load($params) && $this->validate())) {
            $query->joinWith(['address']);
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nif', $this->nif])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'city', $this->city]);
        $query->joinWith(['address' => function($q){
            $q->where('address.city LIKE "%' . $this->city . '%"');
        }]);

        return $dataProvider;
    }
}
