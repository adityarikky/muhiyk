<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengaturan".
 *
 * @property integer $id
 * @property string $top_bar_status
 * @property string $welcome_status
 * @property string $alamat
 * @property string $kodepos
 * @property string $telp
 * @property string $email
 * @property string $deskripsi
 * @property string $facebook
 * @property string $twitter
 * @property string $google_plus
 * @property string $linked_in
 * @property string $skype
 */
class Pengaturan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengaturan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'top_bar_status', 'welcome_status', 'alamat', 'kodepos', 'telp', 'email', 'deskripsi', 'facebook', 'twitter', 'google_plus', 'linked_in', 'skype'], 'required'],
            [['id'], 'integer'],
            [['top_bar_status', 'welcome_status', 'alamat', 'kodepos', 'telp', 'email', 'deskripsi', 'facebook', 'twitter', 'google_plus', 'linked_in', 'skype'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'top_bar_status' => 'Top Bar Status',
            'welcome_status' => 'Welcome Status',
            'alamat' => 'Alamat',
            'kodepos' => 'Kodepos',
            'telp' => 'Telp',
            'email' => 'Email',
            'deskripsi' => 'Deskripsi',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'google_plus' => 'Google Plus',
            'linked_in' => 'Linked In',
            'skype' => 'Skype',
        ];
    }
}
