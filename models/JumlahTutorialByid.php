<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jumlah_tutorial_byid".
 *
 * @property string $username
 * @property string $count
 */
class JumlahTutorialByid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jumlah_tutorial_byid';
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
