<?php /* @var $this Controller */ 

//$cathPages = new PagesModel;
//$cathPages=PagesModel::model()->findAll(array('condition'=>'category = "cath"'));
//$studPages=PagesModel::model()->findAll(array('condition'=>'category = "stud"'));

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>ИМиКН</title>
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
                <li><a href="/">Главная</a></li>
                <li><a href="/event/list">События</a>
                    <ul>
                        <li><a href="#">Событие_1</a></li>
                        <li><a href="#">Событие_2</a></li>
                        <li><a href="#">Событие_3</a></li>
                    </ul>
                </li>
                <li><a href="#">Кафедра</a>
                    <ul>
						<? //Yii::app()->user->checkAccess('pageReader') { ?>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/index/cath">Добавить страницу...</a></li>
						<? //} ?>
						
						<?php
						
						//foreach($cathPages as $page) {
						//	echo '<li><a href="'.Yii::app()->request->baseUrl.'/page/show/'.$page->p_name.'">'.$page->title.'</a></li>';
						//}
						
						?>
                    </ul>
                </li>
                <li><a href="#">Студентам</a>
                    <ul>
                        <? //Yii::app()->user->checkAccess('pageReader') { ?>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/index/stud">Добавить страницу...</a></li>
						<? //} ?>
						
						<?php
						
						//foreach($studPages as $page) {
						//	echo '<li><a href="'.Yii::app()->request->baseUrl.'/page/show/'.$page->p_name.'">'.$page->title.'</a></li>';
						//}
						
						?>
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
                        <!---logo-imkn-->
                        <a href="http://imkn.ru/" title="ИМиКН" rel="nofollow">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_IMKN.png" alt="ИМиКН">
                        </a> 
                    </div><!-- /.logo.left -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="logo"> 
                        <!---logo-utmn-->
                        <a href="http://www.utmn.ru/" title="ТюмГу" rel="nofollow">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_TGU.png" alt="ТюмГу">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 header-right">
                    <p><i class="fa fa-phone"></i> +7 (3452) 123-123 (доп. 123)</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:email@utmn.ru">email@utmn.ru</a></p>
                    <p>
                        <?php if (!Yii::app()->user->isGuest) { ?>
                            <span class="textA"> Здравствуйте, <? echo (Yii::app()->user->name);  ?>!  </span>
                            <a class="login" href="/site/logout">Выход</a>
                        <?php } else { ?>
                            <a class="login" href="/site/login">Вход</a>
                        <?php } ?>
                    </p>
                </div><!-- /.header-right -->
            </div>
        </div> <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                        <ul class="main-menu sf-menu">
                            <li class="active"><a href="/">Главная</a></li>
                            <li><a href="/event/list">События</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Событие_1</a></li>
                                    <li><a href="#">Событие_2</a></li>
                                    <li><a href="#">Событие_3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Кафедра</a>
                                <ul class="sub-menu">
                        			<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/index/cath">Добавить страницу...</a></li>
									<?php
						
									//foreach($cathPages as $page) {
									//	echo '<li><a href="'.Yii::app()->request->baseUrl.'/page/show/'.$page->p_name.'">'.$page->title.'</a></li>';
									//}
									
									?>	
                                </ul>
                            </li>
                            <li><a href="#">Студентам</a>
                                <ul class="sub-menu">
                                    <? //Yii::app()->user->checkAccess('pageReader') { ?>
			                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/page/index/stud">Добавить страницу...</a></li>
									<? //} ?>
									
									<?php
									
									//foreach($studPages as $page) {
									//	echo '<li><a href="'.Yii::app()->request->baseUrl.'/page/show/'.$page->p_name.'">'.$page->title.'</a></li>';
									//}
									
									?>
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

    <!---CONTENT-->
        <div id="content">
            <?php echo $content; ?>
        </div>
    <!---endCONTENT-->

    <!-- begin The Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Контакты</h4>
                        <p>Адрес:<br><br>625002, Тюмень<br>ул. Перекопская, 15а<br><br>Контакты<br><li>+7 3452 123 123</li><li>email@utmn.ru</li></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Избранное</h4>
						<u><ul class="list-links">
                            <li><a href="#"><b>Вход для студентов и преподавателей</b></a></li>
                            <li><a href="#">История кафедры</a></li>
                            <li><a href="#">Список преподавателей кафедры</a></li>
                            <li><a href="#">Дисциплины кафедры</a></li>
                            <li><a href="#">Истории выпускников</a></li>
                        </ul></u>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Студентам</h4>
                        <u><ul class="list-links">
                            <li><a href="#">Темы курсовых работ</a></li>
                            <li><a href="#">Правила оформления работ</a></li>
                            <li><a href="#">Написать письмо заведующему кафедры</a></li>
                            <li><a href="#"><font color=red>Курсовые работы</font></a></li>
                            <li><a href="#"><font color=red>Отчёты по практике</font></a></li>
                            <li><a href="#"><font color=red>Дисциплины</font></a></li>
                        </ul></u>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Полезные ссылки</h4>
                        <u><ul class="list-links">
                            <li><a href="http://www.utmn.ru/" rel="nofollow">Сайт университета</a></li>
                            <li><a href="http://www.imkn.ru/" rel="nofollow">Сайт ИМиКН</a></li>
                            <li><a href="http://www.utmn.ru/sec/985" rel="nofollow">Расписание занятий</a></li>
                            <li><a href="http://www.tmnlib.ru/jirbis/" rel="nofollow">Библиотека ТюмГУ</a></li>
                            <li><a href="#">Каталог научных статей</a></li></u>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
						<h4 class="footer-widget-title">Социальные сети</h4>
                        <u><ul class="list-links">
                            <li><a href="http://vk.com/club172205" rel="nofollow">Группа ИМиКН в VK</a></li>
                            <li><a href="#" rel="nofollow">Страница ИМиКН в FB</a></li>
                            <li><a href="http://vk.com/imenit_aktiv" rel="nofollow">Cтудактив в VK</a></li>
                            <li><a href="#" rel="nofollow">Студактив в Twitter</a></li></u>
                        </ul>  
                    </div>
                </div>
            </div> <!-- /.row -->

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-9">
                        <p class="small-text">2014.<u>Тюменский государственный университет</u></a></p>
                    </div> <!-- /.col-md-9 -->
                    <div class="col-md-3">
                        <p class="small-text"><u>Институт Математики и Компьютерных наук</u></a></p>
                    </div> <!-- /.col-md-3 -->
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->


    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>

</body>
</html>