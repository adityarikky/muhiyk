<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengaturan */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Pengaturan',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pengaturans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pengaturan-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1>Update Pengaturan</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
