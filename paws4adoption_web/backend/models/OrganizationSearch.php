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
    public $statusHtml;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'address_id', 'status'], 'integer'],
            [['name', 'nif', 'email', 'phone', 'statusHtml', 'city'], 'safe'],
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
                'name' => [
                    'asc' => ['address.city' => SORT_ASC],
                    'desc' => ['address.city' => SORT_DESC],
                    'label' => 'Cidade'
                ],
                'city' => [
                    'asc' => ['city' => SORT_ASC],
                    'desc' => ['city' => SORT_DESC],
                    'label' => 'Cidade'
                ],
                'status' => [
                    'asc' => ['status' => SORT_ASC],
                    'desc' => ['Status' => SORT_DESC],
                    'label' => 'Estado'
                ],

            ],
        ]);


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
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'city', $this->city]);

        return $dataProvider;
    }
}
