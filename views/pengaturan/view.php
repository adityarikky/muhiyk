<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pengaturan */

//$this->title = $model->id;
$this->title = 'Setting';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pengaturans'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengaturan-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1>Setting</h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    
    <!--     <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
     -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'top_bar_status',
            'welcome_status',
            'alamat',
            'kodepos',
            'telp',
            'email:email',
            'deskripsi',
            'facebook',
            'twitter',
            'google_plus',
            'linked_in',
            'skype',
        ],
    ]) ?>

</div>
