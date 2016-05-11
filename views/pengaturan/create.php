<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pengaturan */

$this->title = Yii::t('app', 'Create Pengaturan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pengaturans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengaturan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
