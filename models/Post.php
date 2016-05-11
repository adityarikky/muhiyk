<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $category_id
 * @property integer $status
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $user_id
 *
 * @property Komentar $komentar
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'category_id', 'status'], 'required'],
            [['content', 'status'], 'string'],
            [['category_id', 'create_time', 'update_time', 'user_id'], 'integer'],
            [['title'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'category_id' => 'Category ID',
            'status' => 'Status',
            //'create_time' => 'Create Time',
            //'update_time' => 'Update Time',
            'user_id' => 'User ID',
            // 'id' => Yii::t('app', 'ID'),
            // 'title' => Yii::t('app', 'Title'),
            // 'content' => Yii::t('app', 'Content'),
            // 'category_id' => Yii::t('app', 'Category ID'),
            // 'status' => Yii::t('app', 'Status'),
            // 'create_time' => Yii::t('app', 'Create Time'),
            // 'update_time' => Yii::t('app', 'Update Time'),
            // 'user_id' => Yii::t('app', 'User ID'),
        
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKomentar()
    {
        return $this->hasMany(Komentar::className(), ['post_id' => 'id']);
    }



   /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => \yii\behaviors\TimestampBehavior::className(),
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => ['create_time', 'update_time'],
                    \yii\db\ActiveRecord::EVENT_BEFORE_UPDATE => 'update_time',
                ],
            ],
            'autouserid' => [
                'class' => \yii\behaviors\BlameableBehavior::className(),
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => ['user_id'],
                ],
            ],          
        ];
    }
}
