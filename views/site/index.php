<?php
/* @var $this yii\web\View */
$this->title = 'Home';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\controller\TutorialController;
use yii\widgets\LinkPager;
use yii\grid\GridView;
use yii\widgets\ListView;
use kartik\widgets\Typeahead;

$data = $dataAutoComplete;
Html::csrfMetaTags()
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
    $(function ($) {
        
        $("#auto").autocomplete({
            source : 'server.php',
        });
    }); 
</script>

<!-- ======= revolution slider section ======= -->
    <section class="rev_slider_wrapper me-fin-banner">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
                <li data-transition="fade">
                    <img src="images/slides/1.jpg"  alt="">
                    <div class="tp-caption sfb tp-resizeme banner-h1" 
                        data-x="center" 
                        data-y="top" data-voffset="290" 
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;" 
                        data-transform_in="o:0" 
                        data-transform_out="o:0" 
                        data-start="500">
                        
                        
                            <h1><a target="_blank" id="buat" style="color: #F5F5FC; background-color: #72c02c;" href="https://github.com/gamatutor/gamatutor/blob/master/setup.exe">&nbspBUAT&nbsp</a> DAN PELAJARI <span class="color-green">HAL</span> BARU</h1>
                            <?php
                                    $form=ActiveForm::begin([
                                        'method'    =>  'get',
                                        'action'    =>  Url::toRoute('tutorial/search'),
                                    ]);



                                ?>
                        <div class="row m-b-lg">
                            <div class="col-md-10">     
                               <?php echo Typeahead::widget([
                                    'name' => 'search',
                                    'id' => 'auto',
                                    'class' => 'form-control',
                                    
                                    'options' => ['placeholder' => 'Cari Tutorial Animasi ...'],
                                    'pluginOptions' => ['highlight'=>true],
                                    'dataset' => [
                                        [
                                            'local' => $data,
                                            'limit' => 10
                                        ]
                                    ]
                                ]); 
                                ?>                 
                                <!-- <input type="text" name="search" id="auto" class="form-control" placeholder=""> -->
                                <input type="hidden" name="kategori_id">
                                <input type="hidden" name="subkategori_id">
                                <!-- <input type="hidden" name="_csrf" value="ZEZ6Y0xrY3ARGS42fTwhMQgkDgF6BCEGEx4SMXQMBR4CPy0iPCIwNQ=="> -->
                                
                            </div>

                            <span class="col-md-2">
                                    <button class="btn-u btn-u-lg" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                            <?php
                                    ActiveForm::end();
                                ?>
                        
                    </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="images/slides/1.jpg"  alt="">
                    <div class="tp-caption sfb tp-resizeme banner-h1" 
                        data-x="left" data-hoffset="380" 
                        data-y="top" data-voffset="290" 
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;" 
                        data-transform_in="o:0" 
                        data-transform_out="o:0" 
                        data-start="500">
                        Temukan Tutorial <br>Yang Menginspirasi
                    </div>
                    <div class="tp-caption sfb tp-resizeme banner-border" 
                        data-x="left" data-hoffset="380" 
                        data-y="top" data-voffset="400" 
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;" 
                        data-transform_in="o:0" 
                        data-transform_out="o:0" 
                        data-start="800">
                        <span></span>
                    </div>
                    <div class="tp-caption sfb tp-resizeme banner-text" 
                        data-x="left" data-hoffset="380" 
                        data-y="top" data-voffset="435" 
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;" 
                        data-transform_in="o:0" 
                        data-transform_out="o:0" 
                        data-start="1100">
                        <p>Masih binggung bagaimana cara membuat tutorial animasi<br>Klik button dibawah untuk panduannya!</p>
                    </div>
                    <div class="tp-caption sfb tp-resizeme " 
                        data-x="left" data-hoffset="380" 
                        data-y="top" data-voffset="510" 
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;" 
                        data-transform_in="o:0" 
                        data-transform_out="o:0" 
                        data-start="1400">
                        <a class="banner-button" href="../web/index.php?r=site%2Fdownload">Tutorial GAE <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
<!-- ======= /revolution slider section ======= -->
 
<!-- ======= Welcome section ======= -->
        <section class="welcome_sec">
            <div class="container">
                <div class="row welcome_heading">
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                        <h2>Welcome <br>MUHI Yogyakarta</h2>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                        <p>Mungkin saja anda mengalami kesulitan saat belajar, tapi anda akan menerima kemudahan setelah anda memahami dan menerapkan apa yang anda telah pelajari tadi.</p>
                    </div>
                </div> <!-- End Row -->
                 <div class="row welcome welcome_details">
                    <div class="col-lg-6 col-md-12 right_row">
                        <div class="welcome_item">
                    
                        <?php               
                            foreach($posts as $post){
                               // echo '<div class="row welcome welcome_details">';
                                //echo '<div class="col-lg-6 col-md-12 bottom_row">';
                                    //echo '<div class="welcome_item">';
                                echo '<div class="welcome_item">';
                                        echo '<img src="images/1.png" alt="images">';
                                            echo '<div class="welcome_info">';
                                                echo '<h3><a href="'.\Yii::$app->urlManager->createUrl(['site/post-single', 'id' => $post->id]).'"> '.$post->title.' </a></h3>';
                                                echo '<p>'.substr($post->content,0,220).'...</p>';
                                            echo '</div>';
                                        echo '</div>';
                                    //echo '</div>';
                                //echo '</div>';
                                    
                               
                            }
                            ?>               
                        </div>



                        </div>

                        <div class="col-lg-6 col-md-12 right_row">
                        <div class="welcome_item">
                    
                        <?php               
                            foreach($postss as $post){
                               // echo '<div class="row welcome welcome_details">';
                                //echo '<div class="col-lg-6 col-md-12 bottom_row">';
                                    //echo '<div class="welcome_item">';
                                echo '<div class="welcome_item">';
                                        echo '<img src="images/1.png" alt="images">';
                                            echo '<div class="welcome_info">';
                                                echo '<h3><a href="'.\Yii::$app->urlManager->createUrl(['site/post-single', 'id' => $post->id]).'"> '.$post->title.' </a></h3>';
                                                echo '<p>'.substr($post->content,0,220).'...</p>';
                                            echo '</div>';
                                        echo '</div>';
                                    //echo '</div>';
                                //echo '</div>';
                                    
                               
                            }
                            ?>               
                        </div>



                        </div>
                       

                </div>
            </div> <!-- End container -->
        </section> <!-- End welcome_sec -->
<!-- ======= /Welcome section ======= -->



</div>
<div class="container">
    <!-- Top Categories -->
    <div class="headline"><h2>Kategori Utama</h2></div>  
    <div class="row category margin-bottom-20">
        <!-- Info Blocks -->
        <?php foreach ($subkategori as $key => $value): ?>
        <div class="col-md-4 col-sm-6">
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="<?= $value['icon'] ?>"></i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="<?php echo Url::toRoute('tutorial/search').'&search=&subkategori_id='.$value['id'] ?>"> <?= $value['nama'] ?></a></h3>
                        <p><?= $value['deskripsi'] ?></p>
                    </div>
                </div>
        </div>    
        <?php endforeach; ?>

        <!-- End Info Blocks -->

        <!-- Info Blocks -->
        <div class="col-md-4 col-sm-6 md-margin-bottom-40">
            
        </div>
        <!-- End Info Blocks -->
        
        <!-- Begin Section-Block -->
        <!-- <div class="col-md-4 col-sm-12"> -->
            <!-- <div class="section-block"> -->
                <!-- <div class="text-center">
                    <i class="rounded icon-custom icon-sm icon-bg-darker line-icon icon-graph"></i>
                    <h2>Popular Search</h2>  
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis. <a href="#">View more</a></p>
                </div>    --> 
                
                <!-- </br> -->
                
                <!-- Progress Bar -->
                <!-- <h3 class="heading-xs no-top-space">Web Design <span class="pull-right">88%</span></h3>
                <div class="progress progress-u progress-xxs">
                    <div style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar" class="progress-bar progress-bar-u">
                    </div>
                </div> -->

                <!-- <h3 class="heading-xs no-top-space">PHP/WordPress <span class="pull-right">76%</span></h3>
                <div class="progress progress-u progress-xxs">
                    <div style="width: 76%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="76" role="progressbar" class="progress-bar progress-bar-u">
                    </div>
                </div> -->

                <!-- <h3 class="heading-xs no-top-space">HTML/CSS <span class="pull-right">97%</span></h3>
                <div class="progress progress-u progress-xxs">
                    <div style="width: 97%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="97" role="progressbar" class="progress-bar progress-bar-u">
                    </div>
                </div> -->
                <!-- End Progress Bar -->

                <!-- <div class="clearfix"></div> -->

                <!-- <div class="section-block-info">
                    <ul class="list-inline tags-v1">
                        <li><a href="#">#HTML5</a></li>
                        <li><a href="#">#Bootstrap</a></li>
                        <li><a href="#">#Blog and Portfolio</a></li>
                        <li><a href="#">#Responsive</a></li>
                        <li><a href="#">#Unify</a></li>
                        <li><a href="#">#JavaScript</a></li>
                    </ul>                            
                </div> -->
            <!-- </div> -->
        <!-- </div> -->
        <!-- End Section-Block -->    
    </div>    
    <!-- End Top Categories -->
</div><!--/container-->     
<!--=== End Content ===-->

<!--=== Container Part ===-->
    <div class="bg-grey">

        <div class="container content-md">
            <div class="headline"><h2>Tutorial Animasi</h2></div> 
            <?php \yii\widgets\Pjax::begin(); ?>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_tutorialTerakhir',
                // 'pager'=>[
                //     'cssFile'=>'http://localhost/gama/assets/web/css/site.css',
                //     'class'=>'html'],
            ]); ?>
            <?php \yii\widgets\Pjax::end(); ?>
            <?php echo "<link href=\"".Url::base().'/css/site.css'."\" />"; ?>
        </div>
        <!-- <iframe src="" style="display:none" name="helperFrame"/> -->        
    </div>



<?php
$this->registerCssFile('@web/unify/plugins/line-icons/line-icons.css',['depends'=>'app\assets\AppAsset']);
$this->registerCssFile('@web/unify/plugins/font-awesome/css/font-awesome.min.css',['depends'=>'app\assets\AppAsset']);
$this->registerCssFile('@web/unify/plugins/owl-carousel/owl-carousel/owl.carousel.css',['depends'=>'app\assets\AppAsset']);
$this->registerCssFile('@web/unify/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css',['depends'=>'app\assets\AppAsset']);
$this->registerCssFile('@web/unify/css/pages/page_search.css',['depends'=>'app\assets\AppAsset']);

