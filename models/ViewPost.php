<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "view_post".
 *
 * @property string $nama
 * @property string $jumlah
 */
class ViewPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'view_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['jumlah'], 'integer'],
            [['nama'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'jumlah' => 'Jumlah',
        ];
    }
}
