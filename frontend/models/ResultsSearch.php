<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Results;

/**
 * ResultsSearch represents the model behind the search form of `frontend\models\Results`.
 */
class ResultsSearch extends Results
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resultsId', 'studentId', 'teacherId', 'subjectId', 'examId'], 'integer'],
            [['totalMarks'], 'safe'],
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
        $query = Results::find();

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
            'resultsId' => $this->resultsId,
            'studentId' => $this->studentId,
            'teacherId' => $this->teacherId,
            'subjectId' => $this->subjectId,
            'examId' => $this->examId,
        ]);

        $query->andFilterWhere(['like', 'totalMarks', $this->totalMarks]);

        return $dataProvider;
    }
}
