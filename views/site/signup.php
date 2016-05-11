<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">
<div class="site-signup">
    
    <div class="row">
        <?php $form = ActiveForm::begin(['id' => 'form-signup','options' => ['enctype'=>'multipart/form-data']]); ?>
        
        <div class="page-inner">
<div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Daftar</a></li>
                                            <li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Syarat dan Ketentuan</a></li>
                                        </ul>
                          
                                    
                                        <div class="progress progress-sm m-t-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                            </div>
                                        </div>
                                        <form id="wizardForm">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                <?= $form->field($model, 'nis') ?>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <?= $form->field($model, 'username') ?>
                                                                </div>
                                                                <div class="form-group  col-md-6">
                                                                     <?= $form->field($model, 'realname') ?>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                
                                                                    <?= $form->field($model, 'email') ?>
                                                                    <?= $form->field($model, 'password')->passwordInput() ?>
                                                                    <?= $form->field($model, 'telepon') ?>
                                                                    <?= $form->field($model, 'link_website') ?>
                                                                    <?php
                                                                                $authItems = ArrayHelper::map($authItems,'name','name');
                                                                            ?>
                                                                            <?= $form->field($model,'permissions')->dropDownList($authItems,
                                                                                ['prompt'=>'Pilih Permissions']); ?>
                                                                   
                                                                    <?php echo $form->field($model, 'show_full_profile')->checkboxList(['1' => 'Yes']); ?>   
                                                                
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3>Pernyataan</h3>
                                                            <p>Dengan ini saya menyatakan bahwa : </p>
                                                            <p>1. Saya mengisi data dengan identitas yang sebenarnya tanpa paksaan dari pihak manapun</p>
                                                            <p>2. Saya akan menghormati dan memenuhi segala peraturan yang berlaku</p>
                                                            <p>3. Saya akan bertanggung jawab terhadap apa yang saya upload pada situs ini, dan apabila melanggar saya siap untuk mendapatkan saksi atau pidana sesuai dengan peraturan menurut undang undang yang berlaku</p>
                                                            <br>
                                                            <p>Dengan menekan tombol daftar saya setuju dengan pernyataan diatas</p>
                                                            
                                                            <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                                                            <br>
                                                            <br>
                                                            <a href="index.php?r=site%2Flogin" class="btn btn-warrning">Back  </a>
                                                          </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-pane fade" id="tab4">
                                                    <h2 class="no-s">Coming Soon</h2>
                                                    <div class="alert alert-info m-t-sm m-b-lg" role="alert">
                                                    :)
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div>
            </div>
            
        
        <?php ActiveForm::end(); ?>
    </div>
</div>
</div>



