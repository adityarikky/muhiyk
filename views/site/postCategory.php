<?php
use yii\bootstrap\Nav;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
$this->title = 'Category';
?>
<div class="site-index">

    



<!-- ======= Banner ======= -->
        <section class="p0 container-fluid banner about_banner">
            <div class="about_banner_opacity">
                <div class="container">
                    <div class="banner_info_about">
                        <?php $judul[0]=null; foreach($posts as $post){ $judul[0] = $post->category->name; } echo '<h1>Category : '.$judul[0].'</h1>'; ?>
                        <ul>
                            <li><a href="../web/index.php?r=site%2Findex">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li> <a href="../web/index.php?r=site%2Fblog">Blogs</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><?php echo $judul[0]; ?></li>>
                        </ul>
                    </div> <!-- End Banner Info -->
                </div> <!-- End Container -->
            </div> <!-- End Banner_opacity -->
        </section> <!-- End Banner -->
<!-- ================= /Banner ================ -->
<!-- =============== blog container ============== -->
        <article class="blog-container faqs_sec"> <!-- faqs_sec use for style side content -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right white-right right-side ptb-13">
                       <P>Menemukan sebanyak <?= $count ?> tulisan dari category : <?php echo $judul[0]; ?></P>
                        <!-- .single-blog-post -->
                        <div class="single-blog-post anim-5-all">
                           

                            <?php
				$first=true;
				foreach($posts as $post){
					if($first){
						
						$first=false;
					}
                    echo '<div>';
                   

                            echo '<div class="post-meta">';
                                echo '<div class="date-holder">';
                                    echo '<span>'.date('j',$post->create_time).'</span> '.date('F',$post->create_time).'';
                                echo '</div>';
                                echo '<div class="title-holder">';
                                    echo '<h2 class="title">'.$post->title.'</h2>';
                                    echo '<ul>';
                                        echo '<li><a href="#">Posted By: '.$post->user->username.' </a></li>';
                                    echo '</ul>';
                                echo '</div>';
                            echo '</div>';
                            

                            echo '<div class="content">';
                                echo '<p>'.substr($post->content,0,300).'...</p>';
                                echo '<a href="'.\Yii::$app->urlManager->createUrl(['site/post-single', 'id' => $post->id]).'" class="read-more">Read More <i class="fa fa-angle-right"></i></a>';
                            echo '</div>';


                    echo '</div>';
                }
                ?>              
               

                            
                        
                    </div> <!-- End right-side -->
                     <?= LinkPager::widget(['pagination' => $pagination]) ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 pull-left left_side pbt-86"> <!-- Left Side -->
                        <!-- <h4>Search</h4>
                        <form action="#">
                            <input type="text" placeholder="Enter Search Keywords">
                            <button type="submit"><span class="icon icon-Search"></span></button>
                        </form>
                        <h4>About Us</h4>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia numquam eius modi.</p>
                         -->
                         <h4>Categories</h4>
                            <?php               
                                $items=[];  
                                foreach($categories as $category){
                                    $items[]=['label' => $category->name , 'url' => \Yii::$app->urlManager->createUrl(['site/post-category', 'id' => $category->id])];
                                }
                                echo Nav::widget([
                                    'items' => $items,
                                ]);
                            ?>                
                        <!-- <h4>Popular Posts</h4>
                        <ul class="p0 post_item">
                            <li>AUG 12,2015<a href="">Making Cents Investments in Start-ups become profitable for Companies ...</a></li>
                            <li>AUG 12,2015<a href="">Making Cents Investments in Start-ups become profitable for Companies ...</a></li>
                            <li>AUG 12,2015<a href="" class="bottom_item">Making Cents Investments in Start-ups become profitable for Companies ...</a></li>
                        </ul>
                        <h4>Meet Our Advisior</h4>
                        <a class="img_holder" href=""><img src="images/service/11.jpg" alt="image"></a>
                        <h5><a href="">Merry Michale</a></h5>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem</p>
                        <h4>Tags Clouds</h4>
                        <ul class="p0 clouds">
                            <li><a href="">financial investiment</a></li>
                            <li><a href="">Taxes</a></li>
                            <li><a href="">Account & Profit</a></li>
                            <li><a href="">Insurances</a></li>
                            <li><a href="">Real news</a></li>
                            <li><a href="">OUr advisors</a></li>
                        </ul> -->
                    </div> <!-- End left side -->
                </div> <!-- End row -->
            </div>
        </article>

<!-- =============== /blog container ============== -->

<!-- ============ free consultation ================ -->
        <section class="container-fluid consultation">
            <div class="container">
                <p>If you have any querry for related investment  ... We are available</p>
                <a href="">Contact us <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

</div>
