<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pdf_post".
 *
 * @property string $name
 * @property string $category
 * @property string $status
 * @property string $realname
 * @property string $nis
 * @property string $email
 * @property string $telepon
 */
class PdfPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pdf_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category', 'status', 'nis', 'email', 'telepon'], 'required'],
            [['name'], 'string', 'max' => 128],
            [['category', 'realname', 'email', 'telepon'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 11],
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
        ];
    }
}
