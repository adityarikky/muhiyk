<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;


/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

   

<div class="page-title">
                    <h3><?= Html::encode($this->title) ?></h3>
                    <div class="page-breadcrumb">
                        
                    </div>
                </div>
<br>
<br>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
         <?php echo Html::a('PRINT', ['/post/pdf'], [
    'class'=>'btn btn-danger', 
    'target'=>'_blank', 
    'data-toggle'=>'tooltip', 
    'title'=>'Will open the generated PDF file in a new window'
]);
?>
    </p>
   
<?php

    $gridColoum = [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'content:ntext',
            //'category_id',
            
            // 'create_time:datetime',
            // 'update_time:datetime',
            // 'user_id',
            [
            
            'attribute' => 'user',
            'value' => 'user.realname',
            
            ],[
            
            'attribute' => 'kategori',
            'value' => 'category.name',
            
            ],
            
             [
                'class' => 'kartik\grid\EditableColumn',
                'header' => 'Status',
                'attribute' => 'status',
            ],
            //'status',
            
            ['class' => 'yii\grid\ActionColumn'],
            ]
    ?>

    <?= ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColoum
        ]);
    ?>

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
        'columns' => $gridColoum    ]); ?>
   
</div>
