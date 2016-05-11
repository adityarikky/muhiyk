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
   <div class="page-title">
                    <h3><?= Html::encode($this->title) ?></h3>
                    <div class="page-breadcrumb">
                        
                    </div>
                </div>
<br>
<br>
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
  

    <div class="row">
      <?php $form = ActiveForm::begin(['id' => 'setting-form','options' => ['enctype'=>'multipart/form-data']]); ?>
        <div class="col-md-6">
                <?= $form->field($user, 'nis')->textInput(['maxlength' => true]) ?>
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
            <?= $form->field($user, 'foto')->fileInput(); ?>
        </div>
       <?php ActiveForm::end(); ?>


    </div>

    <div class="row">
    <div class="page-title">
                    <h3>Change Your Password</h3>
                    <div class="page-breadcrumb">
                        
                    </div>
                </div>
<br>
<br>
        
        <div class="col-md-6">
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

    </div>

 
</div>
