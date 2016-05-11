<?php

//use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Html;
use dosamigos\tableexport\ButtonTableExport;


/* @var $this yii\web\View */
/* @var $searchModel app\models\StatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Statuses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Status'), ['create'], ['class' => 'btn btn-success']) ?>
        <?php echo Html::a('PRINT', ['/status/pdf'], [
    'class'=>'btn btn-danger', 
    'target'=>'_blank', 
    'data-toggle'=>'tooltip', 
    'title'=>'Will open the generated PDF file in a new window'
]);
?>
    </p>







<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
    ['class' => '\yii\grid\SerialColumn'],
    
    'name',
    
    ['class' => '\yii\grid\ActionColumn'],
]
]);
?>




</div>
