<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jumlah_tutorial".
 *
 * @property string $nama
 * @property string $count
 */
class JumlahTutorial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jumlah_tutorial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['count'], 'integer'],
            [['nama'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'count' => 'Count',
        ];
    }
}
