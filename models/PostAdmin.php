<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

/**
 * PostSearch represents the model behind the search form about `app\models\Post`.
 */
class PostAdmin extends Post
{
    /**
     * @inheritdoc
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'category_id', 'status', 'create_time', 'update_time', 'user_id'], 'integer'],
            [['title','globalSearch', 'content'], 'safe'],
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
        $query = Post::find();

         $query->joinWith('category')->joinWith('user');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->orFilterWhere(['like', 'title', $this->globalSearch])
        ->orFilterWhere(['like', 'category.name', $this->globalSearch])
            ->orFilterWhere(['like', 'user.realname', $this->globalSearch])
            ->orFilterWhere(['like', 'post.status', $this->globalSearch])
            ->orFilterWhere(['like', 'user_id', $this->globalSearch ]);

        return $dataProvider;
    }
}
