<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PengaturanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pengaturans');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengaturan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Pengaturan'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'top_bar_status',
            'welcome_status',
            'alamat',
            'kodepos',
            // 'telp',
            // 'email:email',
            // 'deskripsi',
            // 'facebook',
            // 'twitter',
            // 'google_plus',
            // 'linked_in',
            // 'skype',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
