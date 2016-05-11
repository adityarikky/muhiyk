<?php
use yii\helpers\Html;
use app\models\Post;
use app\models\Tutorial;
use app\models\User;
use sjaakp\gcharts\PieChart;
use sjaakp\gcharts\ColumnChart;
use app\models\Chart;
use yii\data\ActiveDataProvider;
use scotthuangzl\googlechart\GoogleChart;
use app\models\JumlahPost;
use app\models\JumlahTutorial;

/* @var $this yii\web\View */
$this->title = 'Welcome to Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="page-title">
                    <h3><?= Html::encode($this->title) ?></h3>
                    <div class="page-breadcrumb">
                        
                    </div>
                </div>
<div class="user-index">
<?php
    $post=post::findBySql("SELECT * FROM post where status = 'publish'");
    $tutorial=tutorial::findBySql("SELECT * FROM tutorial");
    $user=user::findBySql("SELECT * FROM user");
    $count_post = $post->count();
    $count_tutorial = $tutorial->count();
    $count_user = $user->count();

    $total_pembelajaran = $count_post + $count_tutorial;
  


?>

<div id="main-wrapper">
                
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo $count_post; ?></p>
                                        <span class="info-box-title">Total Tulisan</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-book-open"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo $count_tutorial;?></p>
                                        <span class="info-box-title">Total Tutorial Animasi</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-social-youtube"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-3 col-md-12">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p><?php echo $count_user; ?></p>
                                        <span class="info-box-title">Total Pengguna Aktif</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-users"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo $total_pembelajaran;?></p>
                                        <span class="info-box-title">Total Referensi Pembelajaran</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class=" icon-folder-alt"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
<div class="row">
<div class="col-lg-6 col-md-12">
<?php
        $dataPost = new ActiveDataProvider([
        'query' => JumlahPost::find(),
        'pagination' => false
    ]);
?>
<?= PieChart::widget([
    'height' => '400px',
    'dataProvider' => $dataPost,
    'columns' => [
        'name:string',
        'count'
    ],
    'options' => [
        'title' => 'Total semua tulisan berdasarkan kategori'
    ],
]) ?>
<?php
    $dataPostByid = new ActiveDataProvider([
            'query' => app\models\JumlahPostByid::find(),
            'pagination' => false
        ]);
?>
<?= ColumnChart::widget([
    'height' => '400px',
    'dataProvider' => $dataPostByid,
    'columns' => [
        'username:string',  // first column: domain
        'count',          // second column: data
        
    ],
    'options' => [
        'title' => 'total tulisan berdasarkan user',
    ],
]) ?>
</div>
<div class="col-lg-6 col-md-12">
<?php
                 $dataTutorial = new ActiveDataProvider([
        'query' => JumlahTutorial::find(),
        'pagination' => false
    ]);
?>
<?= PieChart::widget([
    'height' => '400px',
    'dataProvider' => $dataTutorial,
    'columns' => [
        'nama:string',
        'count'
    ],
    'options' => [
        'title' => 'Total semua animasi berdasarkan kategori'
    ],
]) ?>
<?php
    $dataTutorialByid = new ActiveDataProvider([
            'query' => app\models\JumlahTutorialByid::find(),
            'pagination' => false
        ]);
?>
<?= ColumnChart::widget([
    'height' => '400px',
    'dataProvider' => $dataTutorialByid,
    'columns' => [
        'username:string',  // first column: domain
        'count',          // second column: data
        
    ],
    'options' => [
        'title' => 'Tutal animasi berdasarkan user',
    ],
]) ?>
</div>
</div>

<!-- hay -->




