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
                                    <h2><a href="/news/list" class="none">Последние новости</a></h2>
                                    <p>Самая актуальная новость...</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://placehold.it/770x400" alt="Slide 1"/>
                                <div class="slider-caption">
                                    <h2><a href="/event/list">Предстоящие события</a></h2>
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
                <div>
                    <div class="main-slideshow">
                        <div class="flexslider">
                            <ul class="slides">
                                <?php 
                                if (count($arResult['classifieds']) != 0) {
                                for ($i = 0; $i < count($arResult['classifieds']); ++$i) { 
                                    $node = $arResult['classifieds'][$i];
                                    ?>
                                    
                                    <li>
                                        <a href="/classifieds/detail/<?=$node->id_classifieds?>" class="none">
                                            <img src="http://placehold.it/350x390" alt="Slide 1"/>
                                        </a>
                                        <div class="slider-caption">
                                            <h2><a href="/classifieds/detail/<?=$node->id_classifieds?>" class="none"><?php echo $node->header; ?></a></h2>
                                            <!--<p><?php //echo $node->text; ?></p>-->
                                        </div>
                                    </li>
                                    
                                <?}} else {?>
                                    <li>
                                        <img src="http://placehold.it/350x390" alt="Slide 1"/>
                                        <div class="slider-caption">
                                            <h2><a href="#" class="none">Актуальных объявлений пока что нет</a></h2>
                                            <!--<p>Следите за новостями</p>-->
                                        </div>
                                    </li>
                                <?}?>
                            </ul> <!-- /.slides -->
                        </div>
                    <?php /*$this->widget('ext.carouFredSel.ECarouFredSel', array(
                            'id' => 'carousel',
                            'target' => '#foo',
                            'config' => array(
                                'items' => 6,
                                'scroll' => array(
                                    'items' => 1,
                                    'easing' => 'swing',
                                    'duration' => 800,                      
                                    'pauseDuration' => 1500,    
                                    'pauseOnHover' => false,
                                    'fx' => 'crossfade',
                                ),
                            ),
                        ));*/?>
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
                        <h4 class="informatory-widget-title"><a href="/news/list" class="none">НОВОСТИ</a></h4>
                        <u>
                            <ul class="list-links">
                                <?php 
                                for ($i = 0; $i < count($arResult['news']['recently']); ++$i) { 
                                    $node = $arResult['news']['recently'][$i];
                                    ?>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="/news/detail/<?=$node->id_news?>"> 
                                                <div class="col-md-2"> 
												<?php if ($node->getImageUrl()==false) { ?>
													<img src="http://placehold.it/65x65">
												<?php }	else { ?>
													<img src="<? echo $node->getImageUrl('main'); ?>">
												<?php } ?>												   
                                                </div> 
                                                <div class="col-md-10"> 
                                                    <a href="/news/detail/<?=$node->id_news?>">
                                                        <?php echo $node->header; ?>
                                                    </a> 
                                                    <br/> <time> <?php echo date_format(new DateTime($node->date_publication),"d-m-Y"); ?> </time> 
                                                </div> 
                                            </a>
                                        </div> 
                                        <? if ($i!=(count($arResult['news']['recently'])-1)) {
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
                        <h4 class="informatory-widget-title"> <a href="/event/list" class="none"> События </a> </h4>
                        <u>
                            <ul class="list-links">
                                <?php 
                                for ($i = 0; $i < count($arResult['events']['recently']); ++$i) { 
                                    $node = $arResult['events']['recently'][$i];
                                    ?>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="/event/single/<?=$node->id_event?>"> 
                                                <div class="col-md-2"> 
                                                <?php if ($node->getImageUrl()==false) { ?>
                                                    <img src="http://placehold.it/65x65">
                                                <?php } else { ?>
                                                    <img src="<? echo $node->getImageUrl('main'); ?>">
                                                <?php } ?>                                                 
                                                </div> 
                                                <div class="col-md-10"> 
                                                    <a href="/event/single/<?=$node->id_event?>">
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
                        <h4 class="informatory-widget-title"><a href="/staff/list" class="none">Преподаватели</a></h4>
                        <u>
                            <ul class="list-links">
                                <?php 
                                for ($i = 0; $i < count($arResult['random_employees']); ++$i) { 
                                    $node = $arResult['random_employees'][$i];
                                    ?>
                                <li> 
                                    <div class="row"> 
                                        <div class="informatory_list"> 
                                            <a href="/staff/detail/<?=$node->id?>"> 
                                                <div class="col-md-2"> 
                                                    <img src="<? echo $node->getImageUrl(); ?>" alt=""> 
                                                </div> 
                                                <div class="col-md-10"> 
                                                    <a href="/staff/detail/<?=$node->id?>">
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

   