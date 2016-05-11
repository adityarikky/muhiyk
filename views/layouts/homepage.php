<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\MainAsset;

/* @var $this \yii\web\View */
/* @var $content string */

MainAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href="css/mainroot.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" media="screen">


        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500italic,500,700,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,300,300italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

        <!-- Stroke Gap Icon -->
        <link rel="stylesheet" href="fonts/stroke-gap/style.css">

        <!-- owl-carousel css -->
        <link rel="stylesheet" href="css/frontpage/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        
        <!-- Custom Css -->
        <link rel="stylesheet" type="text/css" href="css/frontpage/custom/style.css">
        <link rel="stylesheet" type="text/css" href="css/frontpage/responsive/responsive.css">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->


</head>
<body class="home">

<?php $this->beginBody() ?>

        <!-- =======Header ======= -->
        <header>
            <div class="container-fluid top_header">
                <div class="container">
                    <p class="float_left">Belajar dan Mencoba, why not!</p>
                    <div class="float_right">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            
                        </ul>
                    </div>
                </div> <!-- end container -->
            </div><!-- end top_header -->
            <div class="bottom_header top-bar-gradient">
                <div class="container clear_fix">
                    <div class="float_left logo">
                        <a href="../web/index.php?r=site%2Findex">
                            <img src="images/logo_front.png" weight="10px" alt="LOGO">
                        </a>
                    </div>
                    <div class="float_right address">
                        <div class="top-info">
                            <div class="icon-box">
                                <span class=" icon icon-Pointer"></span>                            
                            </div>
                            <div class="content-box">
                                <p>Jl. Gotongroyong II, Petinggen <br>Karangwaru, Tegalrejo<span>Yogyakarta, Indonesia</span></p>
                            </div>
                        </div>
                        <div class="top-info">
                            <div class="icon-box">
                                <span class="separator icon icon-Phone2"></span>                            
                            </div>
                            <div class="content-box">
                                <p>Kode Pos 55241 <br><span>Telp: +62274-563739</span></p>
                            </div>
                        </div>
                        <!-- <div class="top-info">
                            <div class="icon-box">
                                <span class="separator icon icon-Timer"></span>
                            </div>
                            <div class="content-box">
                                <p>Mon - Sat 9.00 - 19.00 <br><span>Sunday Closed</span></p>
                            </div>
                        </div> -->
                    </div>
                </div> <!-- end container -->
            </div> <!-- end bottom_header -->
        </header> <!-- end header -->
<!-- ======= /Header ======= -->

<!-- ======= mainmenu-area section ======= -->
        <section class="mainmenu-area stricky">
            <div class="container">
                <nav class="clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header clearfix">
                      <button type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-th fa-2x"></span>
                      </button>
                    </div>
                    <div class="nav_main_list custom-scroll-bar pull-left" id="bs-example-navbar-collapse-1">
                        

                        <ul class="nav navbar-nav" id="hover_slip">
<?php

           

                echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'Blog', 'url' => ['/site/blog']],
                    ['label' => 'Tutorial', 'url' => ['/tutorial/cari']],
                    ['label' => 'Download', 'url' => ['/site/download']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    //['label' => 'Help', 'url' => ['/site/help']],
                    ['label' => 'Contact', 'url' => ['/site/contact']]
                    
                   
                        ]
                    ]);

        
     
        ?>

                             
                    
</ul>
</div>
    <div class="nav_main_list custom-scroll-bar pull-left" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="hover_slip">
        <li class="arrow_down"><a href="">More</a>
                                <div class="sub-menu">
                                    <ul>
                                        <li><a href="">Service</a></li>
                                        <li><a href="">FAQ</a></li>
                                        <li><a href="">Help</a></li>
                                        <li><a href="">Feedback</a></li>
                                        <li><a href="">........</a></li>
                                    </ul>
                                </div>
                            </li>
</ul>
    </div>

                    <div class="find-advisor nav_main_list custom-scroll-bar pull-right">
                       

                        <?php

                            echo Nav::widget([
                                        'options' => ['class' => 'advisor'],
                                        'items' => [
                                            
                                            Yii::$app->user->isGuest ?
                                                ['label' => 'Masuk','url' => ['/site/login']] :
                                                
                                               ['label' => 'go to dashboard','url' => ['/site/dashboard']]
                                               ]
                                            ]);
                        ?>

                       
                    </div>



                </nav> <!-- End Nav -->
            </div> <!-- End Container -->
        </section>
<!-- ======= /mainmenu-area section ======= -->


            
        
    </div>

<?= $content ?>


<!-- ============ free consultation ================ -->
        <section class="container-fluid consultation">
            <div class="container">
                <p>Belum Punya Akun? Daftar  dan Coba Sekarang!</p>
                <a class="pull-right" href="../web/index.php?r=site%2Fsignup">Daftar <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

<!-- ============= Footer ================ -->
        <footer>
            <div class="top_footer container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 part1">
                            <a href=""><img src="images/logo_front.png" alt="Logo"></a>
                            <p>Sekolah Menengah Atas Muhammadiyah 1 Yogyakarta atau yang biasa dikenal dengan nama SMA MUHI adalah salah satu sekolah swasta milik persyarikatan Muhammadiyah yang berada di Provinsi D.I. Yogyakarta.</p>
                            
                            <p><i class="fa fa-phone"></i>&nbsp;&nbsp; +62274-563739</p>
                            <p>contact@mail.com</p>
                            <ul class="p0">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 part2">
                            <h5>Our Services</h5>
                            <ul class="p0">
                                <li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;text</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;text</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;text</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;text</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;text</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 part3">
                            <h5>Twitter Feeds</h5>
                            <!-- <div class="twitter"></div> -->                         
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-12 part4">
                            <h5>Flickr Widget</h5>
                            <div class="gallery">
                                <img src="images/f-1.jpg" alt="image">
                                <img src="images/f-2.jpg" alt="image">
                                <img src="images/f-3.jpg" alt="image">
                                <img src="images/f-4.jpg" alt="image">
                                <img src="images/f-5.jpg" alt="image">
                                <img src="images/f-6.jpg" alt="image">
                            </div>
                        </div>
                    </div> <!-- End row -->
                </div>
            </div> <!-- End top_footer -->
            <div class="bottom_footer container-fluid">
                <div class="container">
                    <p class="float_left">Copyright &copy; <a href="http://buatwebsitemu.com">buatwebsitemu.com</a> <?= date('Y') ?>. All rights reserved. </p>
                    <p class="float_right">base core : <a href="http://gamatutor.id">gamatutor.id</a></p>
                </div>
            </div> <!-- End bottom_footer -->
        </footer>
<!-- ============= /Footer =============== -->



    <!-- <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Make Meaning <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer> -->

<?php $this->endBody() ?>


        <!-- j Query -->
        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
        <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script src="js/revolution-slider/jquery.themepunch.tools.min.js"></script> <!-- Revolution Slider Tools -->
        <script src="js/revolution-slider/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
        <script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.video.min.js"></script>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>

        <!-- owl-carousel -->
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script src="js/owl-custom.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>

        <!-- Custom & Vendor js -->
        <script type="text/javascript" src="js/custom.js"></script>

        <!-- Custom & Vendor js -->
        <script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
        <script src="js/gmap.js"></script> <!-- gmap JS -->
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
        


</body>
</html>
<?php $this->endPage() ?>
