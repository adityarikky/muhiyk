<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset'; 

?>
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <div class="form-group">
    <label class="control-label" for="old_password">Old Password</label>
    	<input type='password' class='form-control' name='old_password' />

    </div>
	
	<div class="form-group">
	<label class="control-label" for="new_password">New Password</label>
		<input type='password' class='form-control' name='new_password' />

	</div>
	 <div class="form-group">
            <?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
        </div>
	
	<div class="form-group">
        <?php ActiveForm::end(); ?>
	</div>
