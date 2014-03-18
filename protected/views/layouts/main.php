<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Universe - College Education Responsive Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="College Education Responsive Template">
    <meta name="author" content="Esmet">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
    <!-- CSS Bootstrap & Custom -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" media="screen">

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.css" rel="stylesheet" media="screen">
        
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/favicon.ico">
    
    <!--FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>

    <!-- JavaScripts -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                <li><a href="index.html">Главная</a></li>
                <li><a href="#">События</a>
                    <ul>
                        <li><a href="#">Событие_1</a></li>
                        <li><a href="#">Событие_2</a></li>
                        <li><a href="#">Событие_3</a></li>
                    </ul>
                </li>
                <li><a href="#">Кафедра</a>
                    <ul>
                        <li><a href="#">ИБ</a></li>
                        <li><a href="#">ПО</a></li>
                    </ul>
                </li>
                <li><a href="#">Студентам</a>
                    <ul>
                        <li><a href="#">Студентам_1</a></li>
                        <li><a href="#">Студентам_2</a></li>
                        <li><a href="#">Студентам_3</a></li>
                    </ul>
                </li>
                <li><a href="#">Контакты</a></li>
            </ul> <!-- /.main_menu -->
            <div class="search-form">
                <form name="search_form" method="get" action="#" class="search_form">
                    <input type="text" name="s" placeholder="Поиск по сайту..." title="Поиск по сату..." class="field_search">
                </form>
            </div>
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->


    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo left">
                        <!----logo-imkn---->
                        <a href="index.html" title="Universe" rel="home">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="Universe">
                        </a> 
                    </div><!-- /.logo.left -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="logo"> 
                        <!----logo-utmn---->
                        <a href="index.html" title="Universe" rel="home">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="Universe">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 header-right">
                    <p><i class="fa fa-phone"></i> +7 (3452) 123-123 (доп. 123)</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:email@utmn.ru">email@utmn.ru</a></p>
                </div><!-- /.header-right -->
            </div>
        </div> <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                        <ul class="main-menu sf-menu">
                            <li class="active"><a href="index.html">Главная</a></li>
                            <li><a href="#">События</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Событие_1</a></li>
                                    <li><a href="#">Событие_2</a></li>
                                    <li><a href="#">Событие_3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Кафедра</a>
                                <ul class="sub-menu">
                                   <li><a href="#">ИБ</a></li>
                                   <li><a href="#">ПО</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Студентам</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Студентам_1</a></li>
                                    <li><a href="#">Студентам_2</a></li>
                                    <li><a href="#">Студентам_3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Контакты</a></li>
                        </ul> <!-- /.main-menu -->

                        <div class="search-form">
                            <form name="search_form" method="get" action="#" class="search_form">
                                <input type="text" name="s" placeholder="Поиск по сайту..." title="Поиск по сату..." class="field_search"> <button class="btn btn-primary"> Поиск </button>
                            </form>
                        </div>
                </nav> <!-- /.main-navigation -->
            </div> <!-- /.container -->
        </div> <!-- /.nav-bar-main -->

    </header> <!-- /.site-header -->

    <!---------------CONTENT-------------------->
        <div id="content">
            <?php echo $content; ?>
        </div>
    <!--------------endCONTENT------------------>

    <!-- begin The Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <p>The simple contact form below comes packed within this theme. <br><br>Mailing address:<br>877 Filbert Street<br> Chester, PA 19013</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Favourites</h4>
                        <ul class="list-links">
                            <li><a href="#">A to Z Index</a></li>
                            <li><a href="#">Admissions</a></li>
                            <li><a href="#">Bookstore</a></li>
                            <li><a href="#">Catalog / Classes</a></li>
                            <li><a href="#">Dining</a></li>
                            <li><a href="#">Financial Aid</a></li>
                            <li><a href="#">Graduation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Resources For</h4>
                        <ul class="list-links">
                            <li><a href="#">Future Students</a></li>
                            <li><a href="#">Current Students</a></li>
                            <li><a href="#">Faculty/Staff</a></li>
                            <li><a href="#">International</a></li>
                            <li><a href="#">Postdocs</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Study</h4>
                        <ul class="list-links">
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Apply Now</a></li>
                            <li><a href="#">Scholarships</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">International student enquiries</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <ul class="footer-media-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-apple"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.row -->

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-5">
                        <p class="small-text">&copy; Copyright 2014. Universe designed by <a href="#">Esmeth</a></p>
                    </div> <!-- /.col-md-5 -->
                    <div class="col-md-7">
                        <ul class="footer-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="events-list.html">Events</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div> <!-- /.col-md-7 -->
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->


    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>

</body>
</html>