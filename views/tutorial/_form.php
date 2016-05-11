<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Subkategori;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Tutorial */
/* @var $form yii\widgets\ActiveForm */
?>

        <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
        
        <div class="row">
            <div class="col-md-8">
                <?= $form->field($model, 'judul')->textInput(['maxlength' => 250]) ?>
                
            </div>
            <div class="col-md-2">
                 <?= $form->field($model, 'subkategori_id')->dropDownList(
            ArrayHelper::map(app\models\Subkategori::find()->all(),'id','nama'),
            ['prompt'=>'Pilih Kategori']
            ) ?>

            </div>
            <div class="col-md-2">
        
            <?= $form->field($model, 'status')->dropDownList(
                    ArrayHelper::map(app\models\Status::find()->all(),'name','name'),
                    ['prompt'=>'Pilih Status']
                    ) ?>
            </div>

        </div>



        <?= $form->field($model, 'file')->fileInput(['accept' => '.zip']) ?>



        <?php 
            if(!empty($model->file)) {
                echo Html::activeHiddenInput($model,'file',['value'=>$model->file]);
                echo '<div class="form-group"><a class="btn btn-success" href="'.$model->file.'">Download File Sekarang</a></div>';
            }
        ?>

        

       

    <?= $form->field($model, 'deskripsi')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]); ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

