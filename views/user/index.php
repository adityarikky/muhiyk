<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-title">
                    <h3><?= Html::encode($this->title) ?></h3>
                    <div class="page-breadcrumb">
                        
                    </div>
                </div>
<div class="user-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <br>
    <br>
       <!--  <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nis',
            'username',
            'realname',
            //'auth_key',
            //'password_hash',
            // 'password_reset_token',
             'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'link_website',
            // 'foto:ntext',
             'telepon',
            // 'show_full_profile',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
