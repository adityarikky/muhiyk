<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tutorial */

$this->title = 'Update Tutorial: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tutorial', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tutorial-update">

    <div class="page-title">
                    <h3><?= Html::encode($this->title) ?></h3>
                    <div class="page-breadcrumb">
                        
                    </div>
                </div>
<br>
<br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
