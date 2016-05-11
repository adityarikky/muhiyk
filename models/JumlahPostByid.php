<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jumlah_post_byid".
 *
 * @property string $username
 * @property string $count
 */
class JumlahPostByid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jumlah_post_byid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['count'], 'integer'],
            [['username'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'count' => 'Count',
        ];
    }
}
