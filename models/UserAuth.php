<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_auth".
 *
 * @property string $item_name
 * @property string $username
 * @property string $realname
 * @property string $telepon
 */
class UserAuth extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_auth';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name', 'username', 'telepon'], 'required'],
            [['item_name'], 'string', 'max' => 64],
            [['username', 'realname', 'telepon'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_name' => 'Item Name',
            'username' => 'Username',
            'realname' => 'Realname',
            'telepon' => 'Telepon',
        ];
    }
}
