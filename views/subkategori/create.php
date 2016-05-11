<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Subkategori */

$this->title = Yii::t('app', 'Create Subkategori');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subkategoris'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subkategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
