<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AdminAsset::register($this);
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
        
        <!-- Title -->
        
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="css/adminpage/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="css/adminpage/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="css/adminpage/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/adminpage/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="css/adminpage/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/> 
        <link href="css/adminpage/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>  
        <link href="css/adminpage/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>  
        <link href="css/adminpage/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/adminpage/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/> 
        <link href="css/adminpage/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="css/adminpage/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>  
        <link href="css/adminpage/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>  
        <!-- <link href="css/adminpage/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/> -->    
            

        <!-- Theme Styles -->
        <link href="css/adminpage/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/adminpage/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="css/adminpage/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="css/adminpage/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="css/adminpage/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    
</head>
<body class="page-header-fixed">

<?php $this->beginBody() ?>
    
    <div class="overlay"></div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
            <div class="slimscroll">
                <a href="javascript:void(0);" class="showRight2"><img src="images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
            </div>
        </nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Hi There!
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Hi! How are you?
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Fine! do you like my project?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Yes, It's clean and creative, good job!
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Thanks, I tried!
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Good luck with your sales!
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
        </nav>
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="images/avatar1.png" width="52" alt="tes Green"/><span>David Green</span></div>
                <div class="profile-menu-list">
                    <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
                    <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                    <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                    <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
        </div>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="../../web/index.php?r=site" class="logo-text"><span>MUH 1 YK</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>        
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                <li>
                                    <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                                </li>
                                <li>        
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Horizontal bar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Hover Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Boxed Layout 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>    
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 4 new  messages !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">3 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">8 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="images/avatar3.png" alt=""></div>
                                                        <p class="msg-name">Christopher Palmer</p>
                                                        <p class="msg-text">See you soon !</p>
                                                        <p class="msg-time">56 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="images/avatar5.png" alt=""></div>
                                                        <p class="msg-name">Nick Doe</p>
                                                        <p class="msg-text">Nice to meet you</p>
                                                        <p class="msg-time">2 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">5 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">9 hours ago</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 3 pending tasks !</p></li>
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                        <p class="task-details">New user registered.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24min ago</span>
                                                        <p class="task-details">Database error.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                                        <p class="task-details">Reached 24k likes</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name"> <?php echo Yii::$app->user->identity->username ; ?><i class="fa fa-angle-down"></i></span>
                                        <?php
                                            $user_id = Yii::$app->user->identity->id;
                                            $user = app\models\User::find()->where('id = :id', [':id' => $user_id])->one(); 
                                            if($user->foto == ""){
                                                echo Html::img('@web/image/no-image.png', ['class' => 'img-circle avatar' ,'width'=>'40' ,'heigh'=>'40']); 
                                            }else{
                                                echo Html::img('@web/uploads/profilepic/'.$user->foto, ['class' => 'img-circle avatar' ,'width'=>'40' ,'heigh'=>'40']); 
                                            }
                                        ?>
                                        
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="../web/index.php?r=tutorial%2Fsearch&search=&kategori_id=&subkategori_id="><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../web/index.php?r=tutorial%2Fsearch&search=&kategori_id=&subkategori_id=" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                                        <i class="fa fa-comments"></i>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div>
            <!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">

                                <?php

                                    if($user->foto == ""){
                                        echo Html::img('@web/image/no-image.png', ['class' => 'img-circle img-responsive']); 
                                    }else{
                                        echo Html::img('@web/uploads/profilepic/'.$user->foto, ['class' => 'img-circle img-responsive']); 
                                    }
                                ?>

                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php 
                                    
                                            
                                             echo Yii::$app->user->identity->username ;
                               
                        ?>
                                    <br><small>Art Director</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        
                        <li><a href="../web/index.php?r=site%2Fdashboard" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        
                         <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>Post</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="../web/index.php?r=post">View Post</a></li>
                                <li><a href="../web/index.php?r=post%2Fcreate">Create Post</a></li>
                            </ul>
                        </li>

                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon glyphicon-list-alt"></span><p>Category Post</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="../web/index.php?r=post">View Category</a></li>
                                <li><a href="../web/index.php?r=post%2Fcreate">Create Category</a></li>
                            </ul>
                        </li>


                         <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-film"></span><p>Video Animation</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="../web/index.php?r=tutorial">View Animation</a></li>
                                <li><a href="../web/index.php?r=tutorial%2Fcreate">Create Animation</a></li>
                            </ul>
                        </li>

                       
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>User</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="../web/index.php?r=user">View User</a></li>
                                <li><a href="../web/index.php?r=user%2Fcreate">Create User</a></li>
                            </ul>
                        </li>
                        
                         <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-wrench"></span><p>Setting</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="../web/index.php?r=user">View User</a></li>
                                <li><a href="../web/index.php?r=user%2Fcreate">Create User</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="../web/index.php?r=site%2Fsetting" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-cog"></span><p>My Profile</p></a></li>

                        <li><a href="../web/index.php?r=tutorial%2Fsearch&search=&kategori_id=&subkategori_id=" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-off"></span><p>Log Out</p></a></li>
                       
                       <!--  <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-flash"></span><p>Levels</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="droplink"><a href="#"><p>Level 1.1</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="droplink"><a href="#"><p>Level 2.1</p><span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Level 3.1</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Level 2.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Level 1.2</a></li>
                            </ul>
                        </li> -->


                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                
                <div id="main-wrapper">
                    
                    <?= $content ?>

                    <div class="row">

                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s"><?= date('Y') ?> &copy; <a href="http://buatwebsitemu.com" type="blank">www.buatwebsitemu.com.</a></p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
<?php $this->endBody() ?>

 <!-- Javascripts -->
        <script src="css/adminpage/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="css/adminpage/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="css/adminpage/plugins/pace-master/pace.min.js"></script>
        <script src="css/adminpage/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="css/adminpage/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="css/adminpage/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="css/adminpage/plugins/switchery/switchery.min.js"></script>
        <script src="css/adminpage/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="css/adminpage/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="css/adminpage/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="css/adminpage/plugins/waves/waves.min.js"></script>
        <script src="css/adminpage/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="css/adminpage/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="css/adminpage/plugins/jquery-counterup/jquery.counterup.min.js"></script>
        <script src="css/adminpage/plugins/toastr/toastr.min.js"></script>
        <script src="css/adminpage/plugins/flot/jquery.flot.min.js"></script>
        <script src="css/adminpage/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="css/adminpage/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="css/adminpage/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="css/adminpage/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="css/adminpage/plugins/curvedlines/curvedLines.js"></script>
        <script src="css/adminpage/plugins/metrojs/MetroJs.min.js"></script>

        <script src="js/modern.min.js"></script>
        <script src="js/pages/dashboard.js"></script>
</body>
</html>
<?php $this->endPage() ?>