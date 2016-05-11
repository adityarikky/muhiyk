<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Create Post';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

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
