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
                                    <h2><a href="/?r=event/list">Предстоящие события</a></h2>
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
                        <h4 class="informatory-widget-title"> <a href="/?r=event/list" class="none"> События </a> </h4>
                        <u>
                            <ul class="list-links">
                                <?php 
                                for ($i = 0; $i < count($arResult['events']['recently']); ++$i) { 
                                    $node = $arResult['events']['recently'][$i];
                                    ?>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="?r=event/single&id=<?=$node->id_event?>"> 
                                                <div class="col-md-2"> 
                                                    <? $node->getImageUrl(); ?> 
                                                </div> 
                                                <div class="col-md-10"> 
                                                    <a href="?r=event/single&id=<?=$node->id_event?>">
                                                        <?php echo $node->name_event; ?>
                                                    </a> 
                                                    <br/> <time> <?php echo date_format(new DateTime($node->hold_date),"d-m-Y"); ?> </time> 
                                                </div> 
                                            </a>
                                        </div> 
                                        <? if ($i!=(count($arResult['events']['recently'])-1)) {
                                         echo '<hr>'; } else { }?>
                                    </div> 
                                </li>
                                <?}?>
                            </ul>
                        </u>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="informatory-widget">
                        <h4 class="informatory-widget-title">Преподаватели</h4>
                        <u>
                            <ul class="list-links">
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="http://www.imkn.ru/KIB/shirokikh"> 
                                                <div class="col-md-2"> 
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fancybox_loading.gif" alt="Пример"> 
                                                </div> 
                                                <div class="col-md-10"> Широких А.В. </div> 
                                            </a>
                                        </div> 
                                        <hr>
                                    </div> 
                                </li>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a                      href="http://www.imkn.ru/KIB/Nissenbaum/SitePages/%D0%94%D0%BE%D0%BC%D0%B0%D1%88%D0%BD%D1%8F%D1%8F.aspx"> 
                                                <div class="col-md-2"> 
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fancybox_loading.gif" alt="Пример"> 
                                                </div> 
                                                <div class="col-md-10"> Ниссенбаум О.В. </div> 
                                            </a>
                                        </div> 
                                        <hr> 
                                    </div> 
                                </li>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="http://www.imkn.ru/KIB/Olennikov/SitePages/%D0%94%D0%BE%D0%BC%D0%B0%D1%88%D0%BD%D1%8F%D1%8F.aspx"> 
                                                <div class="col-md-2"> 
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fancybox_loading.gif" alt="Пример"> 
                                                </div> 
                                                <div class="col-md-10"> Оленников Е.А. </div> 
                                            </a> 
                                        </div>
                                    </div> 
                                </li>
                            </ul>
                        </u>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div>
    </div>

   