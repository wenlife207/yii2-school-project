<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Notice;

/**
 * NoticeSearch represents the model behind the search form about `common\models\notice`.
 */
class NoticeSearch extends notice
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'begindate', 'enddate', 'publishdate'], 'integer'],
            [['title', 'publisher', 'importance', 'content', 'category'], 'safe'],
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
        $query = notice::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'begindate' => $this->begindate,
            'enddate' => $this->enddate,
            'publishdate' => $this->publishdate,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'publisher', $this->publisher])
            ->andFilterWhere(['like', 'importance', $this->importance])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}
