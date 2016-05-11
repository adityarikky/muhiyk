<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>
<head>
    <script src="css/adminpage/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="css/adminpage/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>   
</head>

    <body class="page-login">
        
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <div class="form-area">
                                    
                                    <p class="text-center m-t-md">Please login into your account.</p>
                                        <?php $form = ActiveForm::begin([
                                            'id' => 'login-form',
                                        ]); ?>

                                        <div class="form-area">
                                            <div class="group">
                                                <?= $form->field($model, 'username') ?>
                                            </div>
                                            
                                            <div class="group">
                                                <?= $form->field($model, 'password')->passwordInput() ?>
                                            </div>
                                
                                            <?= Html::submitButton('Login', ['class' => 'btn btn-warning btn-block', 'name' => 'login-button']) ?>
                            
                                            <a href="index.php?r=site%2Flupapass" class="display-block text-center m-t-md text-sm">Lupa Password?</a>
                                            <p class="text-center m-t-xs text-sm">Belum Punya Akun?</p>
                                            <a href="index.php?r=site%2Fsignup" class="btn btn-success btn-block m-t-md">Daftar</a>
                                            
                                        </div>

                                </div>
                            </div>
                        </div><!-- Row -->
                    </div><!-- Main Wrapper -->
                </div><!-- Page Inner -->
            </div>
        

        <!-- Javascripts -->
        <script src="css/adminpage/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="css/adminpage/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="css/adminpage/plugins/pace-master/pace.min.js"></script>
        <script src="css/adminpage/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="css/adminpage/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="css/adminpage/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="css/adminpage/plugins/switchery/switchery.min.js"></script>
        <script src="css/adminpage/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="css/adminpage/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="css/adminpage/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="css/adminpage/plugins/waves/waves.min.js"></script>
        <script src="css/adminpage/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="css/adminpage/js/modern.min.js"></script>

    </body>
