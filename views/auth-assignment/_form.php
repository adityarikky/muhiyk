<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\AuthAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-assignment-form">

    <?php $form = ActiveForm::begin(); ?>
<!-- 
    <?= $form->field($model, 'item_name')->textInput(['maxlength' => true]) ?> -->

      <?= $form->field($model, 'item_name')->dropDownList(
            ArrayHelper::map(app\models\AuthItem::find()->all(),'name','name'),
            ['prompt'=>'Pilih Role']
            ) ?>

<!-- 
    <?= $form->field($model, 'user_id')->textInput() ?>
 -->
     <?= $form->field($model, 'user_id')->dropDownList(
            ArrayHelper::map(app\models\User::find()->all(),'id','username'),
            ['prompt'=>'Pilih User']
            ) ?>

<!--     <?= $form->field($model, 'created_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
