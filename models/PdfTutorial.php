<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pdf_tutorial".
 *
 * @property string $name
 * @property string $category
 * @property string $status
 * @property string $realname
 * @property string $nis
 * @property string $email
 * @property string $telepon
 * @property integer $user_id
 */
class PdfTutorial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pdf_tutorial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'nis', 'email', 'telepon'], 'required'],
            [['user_id'], 'integer'],
            [['name', 'category'], 'string', 'max' => 250],
            [['status'], 'string', 'max' => 15],
            [['realname', 'email', 'telepon'], 'string', 'max' => 255],
            [['nis'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'category' => 'Category',
            'status' => 'Status',
            'realname' => 'Realname',
            'nis' => 'Nis',
            'email' => 'Email',
            'telepon' => 'Telepon',
            'user_id' => 'User ID',
        ];
    }
}
