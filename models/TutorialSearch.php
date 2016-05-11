<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tutorial;
/**
 * TutorialSearch represents the model behind the search form about `app\models\Tutorial`.
 */
class TutorialSearch extends Tutorial
{
    /**
     * @inheritdoc
     */
    public $kategori;
     public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'subkategori_id','user_id'], 'integer'],
            [['judul', 'file', 'created', 'modified','kategori','globalSearch'], 'safe'],
         
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
        $query = Tutorial::find();
         
        $query->joinWith('subkategori')->joinWith('user');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['kategori'] = [
        
        'asc' => ['subkategori.nama' => SORT_ASC],
        'desc' => ['subkategori.nama' => SORT_DESC]
        ];


        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
       
        // $query->orFilterWhere(['like', 'judul', $this->globalSearch])
        //     ->orFilterWhere(['like', 'user.realname', $this->globalSearch])
        //     ->orFilterWhere(['like', 'file', $this->globalSearch])
        //     ->orFilterWhere(['like', 'tutorial.status', $this->globalSearch])
        //     ->orFilterWhere(['like', 'subkategori.nama', $this->globalSearch]);

        
        // $query->andFilterWhere(['like', 'judul', $this->judul])
        //     ->andFilterWhere(['like', 'subkategori.nama', $this->kategori])
        //     ->andFilterWhere(['like', 'file', $this->file]);
            
         $query->orFilterWhere(['like', 'judul', $this->globalSearch])
            ->orFilterWhere(['like', 'user.realname', $this->globalSearch])
            ->orFilterWhere(['like', 'file', $this->globalSearch])
            ->orFilterWhere(['like', 'tutorial.status', $this->globalSearch])
            ->orFilterWhere(['like', 'subkategori.nama', $this->globalSearch])           
            ->andFilterWhere([
            
            'user_id' => $this->user_id,
            
        ]);

        return $dataProvider;
    }
}

