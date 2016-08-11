<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Feedback;

/**
 * FeedbackSearch represents the model behind the search form about `frontend\models\Feedback`.
 */
class FeedbackSearch extends Feedback
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['feedback_time', 'feedback_name', 'feedback_description', 'feedback_photo'], 'safe'],
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
        $query = Feedback::find();

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
            'feedback_time' => $this->feedback_time,
        ]);

        $query->andFilterWhere(['like', 'feedback_name', $this->feedback_name])
            ->andFilterWhere(['like', 'feedback_description', $this->feedback_description])
            ->andFilterWhere(['like', 'feedback_photo', $this->feedback_photo]);

        return $dataProvider;
    }
}
