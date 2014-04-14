<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>  
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-slideshow">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="http://placehold.it/770x400" alt="Slide 1"/>
                                <div class="slider-caption">
                                    <h2><a href="blog-single.html">Последние новости</a></h2>
                                    <p>Самая актуальная новость...</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://placehold.it/770x400" alt="Slide 1"/>
                                <div class="slider-caption">
                                    <h2><a href="blog-single.html">Предстоящие события</a></h2>
                                    <p>защита работ...</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://placehold.it/770x400" alt="Slide 1"/>
                                <div class="slider-caption">
                                    <h2><a href="blog-single.html">Преподаватели кафедры</a></h2>
                                    <p>заведующий кафедры...</p>
                                </div>
                            </li>
                        </ul> <!-- /.slides -->
                    </div> <!-- /.flexslider -->
                </div> <!-- /.main-slideshow -->
            </div> <!-- /.col-md-12 -->
            
            <div class="col-md-4">
                <div class="ads">
                        <div class="ads-title"> Объявление </div>
                        <div class="ads-body">
                              <p >Объявляется конкурс на самый необычный код этой страницы</p>
                              <p>Что бы еще тут сделать?</p>
                        </div>
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->
        </div>
    </div>


    <div class="container">
        <div class="informatory_container"> 
            <div class="row">
                <div class="col-md-4">
                    <div class="informatory-widget">
                        <h4 class="informatory-widget-title">НОВОСТИ</h4>
                        <u>
                            <ul class="list-links">
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="#"> 
                                                <div class="col-md-2"> 
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fancybox_loading.gif" alt="Пример"> 
                                                </div> 
                                                <div class="col-md-10"> В Тюмени эпидемия!!!  <br/> <time> 23.03.2014 </time> </div> 
                                            </a>
                                        </div> 
                                        <hr>
                                    </div> 
                                </li>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="#"> 
                                                <div class="col-md-2"> 
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fancybox_loading.gif" alt="Пример"> 
                                                </div> 
                                                <div class="col-md-10"> Студ весна<br/> <time>23.03.2014</time> </div> 
                                            </a>
                                        </div> 
                                        <hr> 
                                    </div> 
                                </li>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="#"> 
                                                <div class="col-md-2"> 
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fancybox_loading.gif" alt="Пример"> 
                                                </div> 
                                                <div class="col-md-10"> Прощаем студентам долги <br/> <time>23.03.2014</time> </div> 
                                            </a> 
                                        </div>
                                    </div> 
                                </li>
                            </ul>
                        </u>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="informatory-widget">
                        <h4 class="informatory-widget-title">События</h4>
                        <u>
                            <ul class="list-links">
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="#"> 
                                                <div class="col-md-2"> 
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fancybox_loading.gif" alt="Пример"> 
                                                </div> 
                                                <div class="col-md-10"> Олимпиада по информатике <br/> <time> 23.03.2014 </time> </div> 
                                            </a>
                                        </div> 
                                        <hr>
                                    </div> 
                                </li>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="#"> 
                                                <div class="col-md-2"> 
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fancybox_loading.gif" alt="Пример"> 
                                                </div> 
                                                <div class="col-md-10">1 апреля - выходной)))  </div> 
                                            </a>
                                        </div> 
                                        <hr> 
                                    </div> 
                                </li>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="http://www.utmn.ru/news/9924"> 
                                                <div class="col-md-2"> 
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fancybox_loading.gif" alt="Пример"> 
                                                </div> 
                                                <div class="col-md-10"> ИННОВАЦИОННЫЕ ТЕХНОЛОГИИ В ОБРАЗОВАНИИ </div> 
                                            </a> 
                                        </div>
                                    </div> 
                                </li>
                            </ul>
                        </u>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="informatory-widget">
                        <h4 class="informatory-widget-title"><a href="/?r=staff/list" class="none">Преподаватели</a></h4>
                        <u>
                            <ul class="list-links">
                                <?php 
                                for ($i = 0; $i < count($arResult['random_employees']); ++$i) { 
                                    $node = $arResult['random_employees'][$i];
                                    ?>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="?r=staff/detail&id=<?=$node->id?>"> 
                                                <div class="col-md-2"> 
                                                    <img src="<? $node->getImageUrl(); ?>" alt=""> 
                                                </div> 
                                                <div class="col-md-10"> 
                                                    <a href="?r=staff/detail&id=<?=$node->id?>">
                                                        <?php echo $node->surname.' '.$node->name.' '.$node->patronymic; ?>
                                                    </a> 
                                                    <br/> <time> <?php echo $node->rank.' '.$node->degree; ?> </time> 
                                                </div> 
                                            </a>
                                        </div> 
                                        <? if ($i!=(count($arResult['random_employees'])-1)) {
                                         echo '<hr>'; } else { }?>
                                    </div> 
                                </li>
                                <?}?>
                            </ul>
                        </u>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div>
    </div>

   