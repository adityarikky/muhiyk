 <?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

$this->title = 'Request password reset';
//$this->params['breadcrumbs'][] = $this->title;
?>

<body class="page-forgot">

    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
                    <div class="login-box">
                    <div class="form-area">
                    <h2><?= Html::encode($this->title) ?></h2>
                        <p>Please fill out your email. A link to reset password will be sent there.</p>
                        <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
              

                        <div class="form-area">
                            <div class="group">
                                <?= $form->field($model, 'email') ?>
                            </div>

                                <?= Html::submitButton('Send', ['class' => 'btn btn-primary btn-block']) ?>
                                <a href="index.php?r=site%2Flogin" class="btn btn-default btn-block m-t-md">Back</a>
                            
                        </div>

                        </div>
                     </div>
                </div>
             </div><!-- Row -->
        </div><!-- Main Wrapper -->
    </div><!-- Page Inner -->
    </body>
        