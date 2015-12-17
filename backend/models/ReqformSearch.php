<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Reqform;

/**
 * ReqformSearch represents the model behind the search form about `common\models\Reqform`.
 */
class ReqformSearch extends Reqform
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type'], 'integer'],
            [['title', 'content', 'user', 'userdepart', 'createtime', 'begindate', 'enddate', 'handledepart', 'state'], 'safe'],
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
        $query = Reqform::find();

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
            'type' => $this->type,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'userdepart', $this->userdepart])
            ->andFilterWhere(['like', 'createtime', $this->createtime])
            ->andFilterWhere(['like', 'begindate', $this->begindate])
            ->andFilterWhere(['like', 'enddate', $this->enddate])
            ->andFilterWhere(['like', 'handledepart', $this->handledepart])
            ->andFilterWhere(['like', 'state', $this->state]);

        return $dataProvider;
    }
}
