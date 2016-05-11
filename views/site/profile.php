<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Profil '.strtoupper($user->username);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
  
  

    <div class="row">
      <?php $form = ActiveForm::begin(['id' => 'setting-form','options' => ['enctype'=>'multipart/form-data']]); ?>
        <div class="col-md-6">
           
            <div class="form-group">
                <label class="control-label">Username</label>
                <h4><?= $user->username ?></h4>

            </div>

            <div class="form-group">
                <label class="control-label">realname</label>
                <h4><?= $user->realname ?></h4>

            </div>
            <?php if($user->show_full_profile == 1){ ?>
            <div class="form-group">
                <label class="control-label">email</label>
                <h4><?= $user->email ?></h4>

            </div>

            <div class="form-group">
                <label class="control-label">telepon</label>
                <h4><?= $user->telepon ?></h4>

            </div>
            <?php  }?>
            <div class="form-group">
                <label class="control-label">link_website</label>
                <h4><?= $user->link_website ?></h4>

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
        	
        </div>
       


    </div>

    

 
</div>
