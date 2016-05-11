<?php

namespace app\controllers;
use yii\helpers\ArrayHelper;
use Yii;
use app\models\Kategori;
use app\models\Subkategori;
use app\models\Tutorial;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\ContactForm;
use app\models\TutorialSearch;
use app\models\User;
use app\models\Post;
use app\models\Category;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\web\BadRequestHttpException;
use app\models\AuthItem;
use app\models\Chart;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        
        $this->layout = 'homepage-';
		$searchModel = new TutorialSearch();
        
        $subkategori = Subkategori::find()->all();

        // clistview
        $dataProvider = new ActiveDataProvider(['query' => Tutorial::find()->joinWith('user')->where(['tutorial.status' => 'publish'])->orderBy(['created'=>SORT_DESC]), 'pagination' => ['pageSize'=>3]]);
        $data = Tutorial::find()->select("judul")->where(['status' => 'publish'])->all();


        $dataAutoComplete = [];



        $query=post::findBySql("SELECT * FROM post where status = 'publish'");

        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
        ]);

         $posts = post::find()
                    ->where(['status' => 'publish'])
                    ->orderBy('id DESC')
                    ->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
        $postss = post::find()
                    ->where(['status' => 'publish'])
                    ->orderBy('id ASC')
                    ->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
        
        $count=$query->count();

        $categories = category::find()
                    ->orderBy('name ASC')
                    ->all();


               
            
        foreach($data as $row){
            array_push($dataAutoComplete,$row->judul);
        }

        return $this->render('index',[
            'subkategori'=>$subkategori,
            'searchModel'=>$searchModel,
			'kategoris'		=> Kategori::find()->all(),
            'dataProvider' => $dataProvider,
            'dataAutoComplete' => $dataAutoComplete,
            'posts' => $posts,
            'postss' => $postss,
                'categories' => $categories,
                'count'         => $count,
                'pagination'    => $pagination,
        ]);



    



    }

    public function actionLogin()
    {
        
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
           // $this->layout = 'adminpage';
            //return $this->render('dashboard');
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionCounterdownload(){
        return "Something";
    }


    public function actionSignup()
    {

        $model = new SignupForm();
        $authItems = AuthItem::find()->where(['type' => 1])->all();

        if ($model->load(Yii::$app->request->post())) {

            if ($user = $model->signup()) {
                $foto = UploadedFile::getInstance($model, 'foto');
                if($foto){
                    $post["foto"] = $user->id.'.'.$foto->extension;
                    $user->updateProfilePic($post);
                    $foto->saveAs('uploads/profilepic/' . $user->id.'.'.$foto->extension);
                }
               
               
                if (Yii::$app->getUser()->login($user)) {
                	 \Yii::$app->session->set('user.id',$user->id);
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
            'authItems' => $authItems,
        ]);
    }      

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionContact()
    {
        $this->layout = 'homepage';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            // Yii::$app->mailer
            // ->compose('email', ['model' => $model])
            // ->setTo(Yii::$app->params['adminEmail'])
            // ->send();
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
         $this->layout = 'homepage';
        return $this->render('about');
    }
	
    public function actionKeluar()
    {
        return $this->render('logout-');
    }

    public function actionBlog()
    {

        $this->layout = 'homepage';
        $query=post::findBySql("SELECT * FROM post where status = 'publish'");

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

         $posts = post::find()
                    ->where(['status' => 'publish'])
                    ->orderBy('id DESC')
                    ->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
        
        $count=$query->count();

        $categories = category::find()
                    ->orderBy('name ASC')
                    ->all();
                    
        return $this->render('blog', [
                'posts' => $posts,
                'categories' => $categories,
                'count'         => $count,
                'pagination'    => $pagination,
            ]);
    }

    public function actionDashboard()
    {
        $this->layout = 'adminpage';
             
 
    return $this->render('dashboard');
    }
    public function actionDownload()
    {
         $this->layout = 'homepage';
        return $this->render('download');
    }

     public function actionHelp()
    {
         $this->layout = 'homepage';
        return $this->render('help');
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->user_id = Yii::$app->session->get('user.id');
            $model->file_upload = UploadedFile::getInstance($model,'file');
            $model->file_upload->saveAs('uploads/images/images_'.$model->id.'.'.$model->file_upload->extension);
            $model->file = 'uploads/images/images_'.$model->id.'.'.$model->file_upload->extension;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }

    }

    public function actionManual()
    {
        return $this->render('manual');
    }

    /**
     * [ActionSetting Function: used for user setting] 
     */
    public function actionSetting(){
        $this->layout = 'adminpage';
        // $user_id = Yii::$app->user->identity->id;
        // $user = User::find()->where('id = :id', [':id' => $user_id])->one();
        // if (Yii::$app->request->post()) {


            
        // if(isset(Yii::$app->request->post()["User"])){
        //     $post = Yii::$app->request->post()["User"];
            
        //     if($post["show_full_profile"] != ""){
        //         $post["show_full_profile"] = $post["show_full_profile"][0];
        //     }
            
        //     $user->updateSetting($post);
        //     $foto = UploadedFile::getInstance($user, 'foto');

        //         if($foto){
        //             $post["foto"] = $user->id.'.'.$foto->extension;
        //             $user->updateProfilePic($post);
        //             $foto->saveAs('uploads/profilepic/' . $user->id.'.'.$foto->extension);
        //         }
        //     Yii::$app->session->setFlash('success',"Sukses Mengubah Setting");
        //     return $this->refresh();
        // }else if(isset(Yii::$app->request->post()["oldPassword"])){
        //     $post = Yii::$app->request->post();
            
        //     if($user->changePassword($post)){
        //         Yii::$app->session->setFlash('success',"Sukses Mengubah Password");
        //     }else{
        //         Yii::$app->session->setFlash('error',"Gagal Mengubah Password");
        //     }
            
        //     return $this->refresh();
        // }
            
        // }else{
            
        //     return $this->render("setting", [
        //             'user' => $user
        //         ]);
        // }

         $user_id = Yii::$app->user->identity->id;
        $user = User::find()->where('id = :id', [':id' => $user_id])->one();
        if (Yii::$app->request->post()) {


            
        if(isset(Yii::$app->request->post()["User"])){
            $post = Yii::$app->request->post()["User"];
            
            if($post["show_full_profile"] != ""){
                $post["show_full_profile"] = $post["show_full_profile"][0];
            }
            
            $user->updateSetting($post);
            $foto = UploadedFile::getInstance($user, 'foto');

                if($foto){
                    $post["foto"] = $user->id.'.'.$foto->extension;
                    $user->updateProfilePic($post);
                    $foto->saveAs('uploads/profilepic/' . $user->id.'.'.$foto->extension);
                }
            Yii::$app->session->setFlash('success',"Sukses Mengubah Setting");
            return $this->refresh();
        }else if(isset(Yii::$app->request->post()["oldPassword"])){
            $post = Yii::$app->request->post();
            
            if($user->changePassword($post)){
                Yii::$app->session->setFlash('success',"Sukses Mengubah Password");
            }else{
                Yii::$app->session->setFlash('error',"Gagal Mengubah Password");
            }
            
            return $this->refresh();
        }
            
        }else{
            
            return $this->render("setting", [
                    'user' => $user
                ]);
        }
        
    }

    /**
     *  user profile view
     */
    public function actionProfile(){

        $user = User::find()->where('username = :username', [':username' => $_GET["username"]])->one();
        if($user){
            return $this->render("profile", [
                    'user' => $user
                ]);
        }else{
             Yii::$app->session->setFlash('error',"Username Tidak Ditemukan");
             return redirect(["index"]);
        }

    }

    public function actionReset()
        {
            
            if(isset($_POST['oldpassword'],$_POST['newpassword']))
            {   
                
                if($model->validatePassword($_POST['oldpassword']))
                {
                    $dua=$_POST['newpassword'];
                                    $model->saltPassword=$model->generateSalt();
                    $model->password=md5($model->saltPassword.$dua);
                    
                    $model->save(false);
                        $this->redirect(array('view','id'=>$model->id));    
                    
                }
            }
            return $this->render('reset');

            //$this->render('reset',array(
              //  'model'=>$model,
            //));
        }
    
    public function actionLupapass()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
            return $this->goHome();
        }

        return $this->render('lupapass', [
            'model' => $model,
        ]);
    }

    public function actionResetpass($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->renderPartial('resetpass', [
            'model' => $model,
        ]);
    }

    public function actionPostCategory($id)
    {
        $this->layout = 'homepage';
        
        $query=post::findBySql("SELECT * FROM post WHERE category_id = $id AND status = 'publish'");

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);

        $posts =post::find()
                    ->where(['status' => 'publish', 'category_id' => $id])
                    ->orderBy('id DESC')
                    ->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
        
        $count = $query->count();

        //menampilkan widget
        $categories = category::find()
                    ->orderBy('name ASC')
                    ->all();        

        return $this->render('postCategory', [
            'posts' => $posts,
            'categories' => $categories,
            'pagination'    => $pagination,
            'count' => $count,
        ]);
    }
    
    public function actionPostSingle($id)
    {

       $this->layout = 'homepage';
        $post = \app\models\Post::find()
                    ->where(['status' => 'publish', 'id' => $id])
                    ->one();        
        
        $categories = \app\models\Category::find()
                    ->orderBy('name ASC')
                    ->all();
        
       
        return $this->render('postSingle', [
            'post' => $post,
            'categories' => $categories,
            
            
        ]);
    }


  
}
