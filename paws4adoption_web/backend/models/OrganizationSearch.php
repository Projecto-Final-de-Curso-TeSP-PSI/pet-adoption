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
    public $address;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'address_id', 'status'], 'integer'],
            [['name', 'nif', 'email', 'phone', 'address'], 'safe'],
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

        //TODO: comentar
        $query->joinWith(['address as address']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['address.city'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['address.city' => SORT_ASC],
            'desc' => ['address.city' => SORT_DESC],
        ];

        //$this->load($params);

//        if (!$this->validate()) {
//            // uncomment the following line if you do not want to return any records when validation fails
//            // $query->where('0=1');
//            return $dataProvider;
//        }

        if (!($this->load($params) && $this->validate())) {
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
            ->andFilterWhere(['like', 'phone', $this->phone]);

        $query->andFilterWhere(['like', 'address.city', $this->getAttribute('address.city')]);

        return $dataProvider;
    }
}
