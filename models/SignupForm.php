<?php
namespace app\models;

use app\models\AuthAssignment;
use app\models\User;
use yii\base\Model;
use Yii;


/**
 * Signup form
 */
class SignupForm extends Model
{
    public $nis;
    public $username;
    public $email;
    public $password;
    public $realname;
    public $telepon;
    public $link_website;
    public $show_full_profile;
    public $foto;
    public $permissions;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['realname', 'required'],
            ['permissions', 'required'],
             ['nis', 'required'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
             [['telepon'], 'required'],
             [['link_website'], 'string'],
             [['show_full_profile'], 'default'],
            [['foto'],'required','on' => 'create'],
            [['foto'],'file','extensions'=>'jpg, jpeg, png', 'maxSize'=>1024 * 1024 * 1],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->nis = $this->nis;
            $user->username = $this->username;
            $user->email = $this->email;
            $user->realname = $this->realname;
            $user->telepon = $this->telepon;
            $user->link_website = $this->link_website;

            if($this->show_full_profile != ""){
                $user->show_full_profile = $this->show_full_profile[0];
            }else{
                $user->show_full_profile = 0;
            }
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->save();
            
            
            // if ($user->save()) {
            //     return $user;
            // }

            $permissionList = $_POST['SignupForm']['permissions'];
            // print_r($permissionList);
            // die();
               // foreach ($permissionList as $value) {
                    $newPermission = new AuthAssignment;
                    $newPermission->user_id = $user->id;
                    $newPermission->item_name = $permissionList;
                    $newPermission->save();
                //}

                return $user;
            

        }

        return null;
    }
}
