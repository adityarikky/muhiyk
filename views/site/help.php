<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Help';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-help">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       Download Tutorial Cara Menggunakan Gama Animation Engine (GAE), dibawah ini :
       <br/><br/>
    <a target="_blank" id="download" href="manual.pdf"><button class="btn btn-success"><i class="glyphicon glyphicon-cloud-download"></i> Download</button></a> 
    <a target="_blank" id="download" href="index.php?r=site%2Fmanual"><button class="btn btn-success"><i class="fa fa-book"></i> Baca Sekarang</button></a>
	<br/><br/><br/>
    </p>

    <p>
       Video Tutorial Cara Menggunakan Gama Animation Engine (GAE), dibawah ini :
       <br/><br/>
    <a target="_blank" href="https://www.youtube.com/watch?v=T9euV_PW3Oo">Perkenalan Menu GAE</a> 
      <br/>
    <a target="_blank" href="https://www.youtube.com/watch?v=9d8gfGinOQI">Cara Membuat Animasi Tutorial</a> 
      <br/>
    <a target="_blank" href="https://www.youtube.com/watch?v=vtl78uBB1Q8">Daftar sebagai Member Baru</a> 
      <br/>
    <a target="_blank" href="https://www.youtube.com/watch?v=rhRaUAPJlIY">Upload Tutorial</a> 
      <br/>
    <a target="_blank" href="https://www.youtube.com/watch?v=ow8L0nziFZQ">Download Tutorial</a> 
    </p>

</div>
<?php
$this->registerCssFile('@web/unify/plugins/font-awesome/css/font-awesome.min.css',['depends'=>'app\assets\AppAsset']);