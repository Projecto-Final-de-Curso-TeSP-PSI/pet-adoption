<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Animal;

/**
 * AnimalSearch represents the model behind the search form of `common\models\Animal`.
 */
class AnimalSearch extends Animal
{
    public $parent_nature_id;
    public $natureCat_id;
    public $natureDog_id;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nature_id', 'fur_length_id', 'fur_color_id', 'size_id'], 'integer'],
            [['chipId', 'createdAt', 'description', 'sex', 'name'], 'safe'],
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
        $query = Animal::find();

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
            'createdAt' => $this->createdAt,
            'nature_id' => $this->nature_id,
            'fur_length_id' => $this->fur_length_id,
            'fur_color_id' => $this->fur_color_id,
            'size_id' => $this->size_id,
        ]);

        $query->andFilterWhere(['like', 'chipId', $this->chipId])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
