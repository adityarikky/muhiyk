<?php
use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title =  $post->title;
?>
<div class="site-index">

				<?php
				
				echo $this->render('formComment', [
					'model' => null,
				]);
				?>                
           

<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1><?php echo $post->title; ?></h1>
						<ul>
							<li><a href="">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li><a href="">Blog</a></li>

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
							<div class="post-meta">
								<div class="date-holder">
									<?php echo '<span>'.date('j',$post->create_time).'</span> '.date('F',$post->create_time).''; ?>
								</div>
								<div class="title-holder">
									<h2 class="title"> <?php echo $post->title; ?></h2>
									<ul>
										<li><a href="#">Posted By: <?php echo $post->user->username; ?></a></li>
										<li><a href="#">Time Create: <?php echo date('F j, Y, g:i a',$post->create_time); ?></a></li>
										<li><a href="#"> Categories: <?php echo $post->category->name; ?></a></li>
									</ul>
								</div>
							</div>
							<div class="content">
								<p><?php echo $post->content; ?></p>
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
						<?php				
							$items=[];	
							foreach($categories as $category){
								$items[]=['label' => $category->name , 'url' => \Yii::$app->urlManager->createUrl(['site/post-category', 'id' => $category->id])];
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









</div>
