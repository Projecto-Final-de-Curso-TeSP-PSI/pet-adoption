<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Adoption;

/**
 * AdoptionSearch represents the model behind the search form of `common\models\Adoption`.
 */
class AdoptionSearch extends Adoption
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'adopted_animal_id', 'adopter_id'], 'integer'],
            [['motivation', 'adoption_date'], 'safe'],
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
        $query = Adoption::find();

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
            'adoption_date' => $this->adoption_date,
            'adopted_animal_id' => $this->adopted_animal_id,
            'adopter_id' => $this->adopter_id,
        ]);

        $query->andFilterWhere(['like', 'motivation', $this->motivation]);

        return $dataProvider;
    }
}
