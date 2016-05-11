<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
    <div class="col-md-6">
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        
    </div>
    <div class="col-md-4">
        
    <?= $form->field($model, 'category_id')->dropDownList(
            ArrayHelper::map(app\models\Category::find()->all(),'id','name'),
            ['prompt'=>'Pilih Kategori']
            ) ?>
    </div>
    <div class="col-md-2">
        
    <?= $form->field($model, 'status')->dropDownList(
            ArrayHelper::map(app\models\Status::find()->all(),'name','name'),
            ['prompt'=>'Pilih Status']
            ) ?>
    </div>

   <!--  <?= $form->field($model, 'foto')->textarea(['rows' => 6]) ?>
 -->
</div>

    <?= $form->field($model, 'content')->widget(CKEditor::className(),[
            'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
            ]); ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
