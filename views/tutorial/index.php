<?php
 
use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TutorialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tutorial Anda';
$this->params['breadcrumbs'][] = $this->title;
?>

   

<div class="page-title">
                    <h3><?= Html::encode($this->title) ?></h3>
                    <div class="page-breadcrumb">
                        
                    </div>
                </div>
<br>
<br>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>


<br>
<br>
<br>

    <p>
        <?= Html::a('Upload Tutorial', ['create'], ['class' => 'btn btn-success']) ?>
         <?php echo Html::a('PRINT', ['/tutorial/pdf'], [
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
        'rowOptions'=>function($model){
                if($model->status == 'publish'){
                    return ['class'=>'success'];
                }elseif ($model->status == 'draf') {
                     return ['class'=>'danger'];
                }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn','header' => "No"],

            'judul',
            
             [
            
            'attribute' => 'user',
            'value' => 'user.realname',
            
            ],
            'file:ntext',
            [
            
            'attribute' => 'kategori',
            'value' => 'subkategori.nama',
            
            ],
           'status',
            // 'created',
            // 'modified',

            ['class' => 'yii\grid\ActionColumn','header' => "&nbsp;"],
        ],
    ]); ?>
