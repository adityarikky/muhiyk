<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'User Setting';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
     <?php if (Yii::$app->session->hasFlash('success')){ ?>

    <div class="alert alert-success">
       <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>

    <?php } ?>

     <?php if (Yii::$app->session->hasFlash('error')){ ?>

    <div class="alert alert-danger">
       	<?php echo Yii::$app->session->getFlash('error'); ?>
    </div>

    <?php } ?>
  

    <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Personal Info</a></li>
                                            <li role="presentation"><a href="#tab2" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Change Password</a></li>
                                        </ul>
                          
                                    
                                        <div class="progress progress-sm m-t-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                            </div>
                                        </div>
                                        <form id="wizardForm">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                      <?php $form = ActiveForm::begin(['id' => 'setting-form','options' => ['enctype'=>'multipart/form-data']]); ?>
                                                                        <div class="col-md-6">
                                                                           
                                                                                <?= $form->field($user, 'username') ?>
                                                                                <?= $form->field($user, 'realname') ?>
                                                                                <?= $form->field($user, 'email') ?>
                                                                                <?= $form->field($user, 'telepon') ?>
                                                                                <?= $form->field($user, 'link_website') ?>
                                                                                
                                                                                 <?php echo $form->field($user, 'show_full_profile')->checkboxList(['1' => 'Yes']); ?>

                                                                                
                                                                                <div class="form-group">
                                                                                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                                                                </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-md-8 col-md-offset-2">
                                                                                    <?php 
                                                                                        if($user->foto == ""){
                                                                                            echo Html::img('@web/image/no-image.png', ['class' => 'pull-left img-responsive']); 
                                                                                        }else{
                                                                                            echo Html::img('@web/uploads/profilepic/'.$user->foto, ['class' => 'pull-left img-responsive']); 
                                                                                        }
                                                                                    ?>

                                                                                </div>
                                                                            </div>
                                                                            
                                                                                    <br><br>
                                                                                    <?= $form->field($user, 'foto')->fileInput(); ?>
 
                                                                                </div>
                                                                                 <?php ActiveForm::end(); ?>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                      


                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            
                                                        </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2">
                                                    <div class="row">
                                                        <h1>Change Your Password</h1>
                                                        <div class="col-md-8">
                                                             <?php $form = ActiveForm::begin(['id' => 'password-form']); ?>
                                                            <div class="form-group">
                                                                <label class="control-label">Old Password</label>
                                                                <input type="password" id="oldPassword" class="form-control" name="oldPassword">

                                                                <p class="help-block help-block-error"></p>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label">New Password</label>
                                                                <input type="password" id="password" class="form-control" name="password">

                                                                <p class="help-block help-block-error"></p>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label">New Password Confirmation</label>
                                                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation">

                                                                <p class="help-block help-block-error"></p>
                                                            </div>
                                                            <input type="submit" class="btn btn-primary" value="Ubah">
                                                        <?php ActiveForm::end(); ?>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>Info : <br>Pengantian password dapat dilakukan apabila anda memasukan password lama anda dan pastikan kedua password baru tersebut sama. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

 
</div>
