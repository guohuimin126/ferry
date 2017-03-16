<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BdPerson;

/**
 * BdPersonSearch represents the model behind the search form about `app\models\BdPerson`.
 */
class BdPersonSearch extends BdPerson
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_id', 'sex', 'u_id'], 'integer'],
            [['true_name', 'id_card', 'now_tel', 'now_home', 'star_time', 'end_time', 'experience', 'highest_ed', 'graduate_sg', 'graduate_time', 'specialty'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = BdPerson::find();

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
            'p_id' => $this->p_id,
            'sex' => $this->sex,
            'star_time' => $this->star_time,
            'end_time' => $this->end_time,
            'graduate_time' => $this->graduate_time,
            'u_id' => $this->u_id,
        ]);

        $query->andFilterWhere(['like', 'true_name', $this->true_name])
            ->andFilterWhere(['like', 'id_card', $this->id_card])
            ->andFilterWhere(['like', 'now_tel', $this->now_tel])
            ->andFilterWhere(['like', 'now_home', $this->now_home])
            ->andFilterWhere(['like', 'experience', $this->experience])
            ->andFilterWhere(['like', 'highest_ed', $this->highest_ed])
            ->andFilterWhere(['like', 'graduate_sg', $this->graduate_sg])
            ->andFilterWhere(['like', 'specialty', $this->specialty]);

        return $dataProvider;
    }
}
