<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MissingAnimal;

/**
 * AnimalMissingSearch represents the model behind the search form of `common\models\MissingAnimal`.
 */
class AnimalMissingSearch extends MissingAnimal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'owner_id'], 'integer'],
            [['missing_date'], 'safe'],
            [['is_missing'], 'boolean'],
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
        $query = MissingAnimal::find();

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
            'missing_date' => $this->missing_date,
            'is_missing' => $this->is_missing,
            'owner_id' => $this->owner_id,
        ]);

        return $dataProvider;
    }
}
