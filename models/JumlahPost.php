<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jumlah_post".
 *
 * @property string $name
 * @property string $count
 * @property integer $user_id
 */
class JumlahPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jumlah_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'user_id'], 'required'],
            [['count', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'count' => 'Count',
            'user_id' => 'User ID',
        ];
    }
}
