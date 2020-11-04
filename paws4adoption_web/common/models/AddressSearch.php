<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Address;

/**
 * AddressSearch represents the model behind the search form of `common\models\Address`.
 */
class AddressSearch extends Address
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'door_number', 'floor', 'postal_code', 'street_code', 'district_id'], 'integer'],
            [['street', 'city'], 'safe'],
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
        $query = Address::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'door_number' => $this->door_number,
            'floor' => $this->floor,
            'postal_code' => $this->postal_code,
            'street_code' => $this->street_code,
            'district_id' => $this->district_id,
        ]);

        $query->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'city', $this->city]);

        return $dataProvider;
    }
}
