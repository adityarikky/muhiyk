<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $model app\models\Tutorial */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Tutorial', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<!-- ======= Banner ======= -->
        <section class="p0 container-fluid banner about_banner">
            <div class="about_banner_opacity">
                <div class="container">
                    <div class="banner_info_about">
                        <h1><?php echo $model->judul;?></h1>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="">tutorial animasi</a></li>

                        </ul>
                    </div> <!-- End Banner Info -->
                </div> <!-- End Container -->
            </div> <!-- End Banner_opacity -->
        </section> <!-- End Banner -->
<!-- ================= /Banner ================ -->

<!-- ================== Blog Container ========== -->
        <section class="blog-container two-side-background single-blog-page faqs_sec"> <!-- faqs_sec use for style right side content -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 white-left left-content ptb-80">
                        <!-- .single-blog-post -->
                        <div class="single-blog-post single-page-content anim-5-all">
                            <!-- .img-holder -->
                            <div class="img-holder">
                                <img src="images/blog/14.jpg" alt="">                       
                            </div><!-- /.img-holder -->
                            <div class="tutorial-view">
                                <input type="hidden" value="<?= $model->id ?>" id="id_tuts" />
                                <h1><?= Html::encode($this->title) ?></h1>

                                <?= DetailView::widget([
                                    'model' => $model,
                                    'attributes' => [
                                        'judul',
                                        'subkategori.nama',
                                        'views',
                                        'downloads',
                                        //'share',
                                        //'like'
                                        
                                    ],
                                ]) ?>
                                <div class="form-group">
                                    <a id="download" target="_blank" href="<?=$model->file?>"><button class="btn btn-success"><i class="glyphicon glyphicon-cloud-download"></i> Download</button></a>
                                </div>
    
                            </div>
                            <div class="content">
                             
                                <p><?php echo $model->deskripsi; ?></p>
                            
                            </div>
                            
                            <!-- .author-box -->

                            <!-- .author-box -->

                            <div class="comment-box">
                                
                                <!-- .comment-holder -->
                                                                    
                                    <div class="form-group">
                                        <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-hashtags="gamatutor">Tweet</a>
                                    </div>
                                    <div id="disqus_thread"></div>
                                    <?php

                                    $this->registerJs("
                                            jQuery(document).ready(function() {
                                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                                                
                                                var disqus_config = function () {
                                                    this.page.url = '".Url::current()."';  // Replace PAGE_URL with your page's canonical URL variable
                                                    this.page.identifier = 'download_gae'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                                };
                                                
                                                (function() {  // DON'T EDIT BELOW THIS LINE
                                                    var d = document, s = d.createElement('script');
                                                    
                                                    s.src = '//gamatutorid.disqus.com/embed.js';
                                                    
                                                    s.setAttribute('data-timestamp', +new Date());
                                                    (d.head || d.body).appendChild(s);
                                                })();

                                                $('#download').click(function(){
                                                    $.get( '".Url::toRoute('site/counterdownload')."', function( data ) {
                                                        console.log('success')
                                                    });
                                                })
                                            });
                                            ",View::POS_END);
                                    ?>


                            </div>
                            
                        </div><!-- /.single-blog-post -->
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 pull-left left_side pdr5"> <!--for this page-(Right Side) -->
                        <h4>Categories</h4>
                         <!-- side kategori -->
                                <?php 
                                $kosong = '';              
                                $items=[];  
                                foreach($subkategori as $category){
                                    $items[]=['label' => $category->nama , 'url' => \Yii::$app->urlManager->createUrl(['tutorial/search', 'search' => $kosong ,'subkategori_id' => $category->id])];
                                    
                                }
                                echo Nav::widget([
                                    'items' => $items,
                                ]);
                            ?>

                    </div> <!-- End left side -->
                </div>
            </div>
        </section>
<!-- ================== /Blog Container ========== -->




