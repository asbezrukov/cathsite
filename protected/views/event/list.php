<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
//echo "<pre>";
//print_r($arResult);

?>  

    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Главная</a></h6>
                    <h6><span class="page-active">Все события</span></h6>
                    <div class="grid-or-list">
                        <ul>
                            <li><a href="events-grid.html"><i class="fa fa-th"></i></a></li>
                            <li><a href="events-list.html"><i class="fa fa-list"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row"> 
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row"> 
                    <div class="col-md-12">
                        <?php 
                            $this->widget('zii.widgets.CListView', array (
                                'dataProvider'=>$arResult['dataProvider'],
                                'itemView'=>'_view',
                                'enablePagination'=>false,
                                'summaryText'=>''
                                ));
                        ?>
                    </div>    
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn"> 
                            <?php 
                                $this->widget('CLinkPager', array (
                                    'header'=>'',
                                    'firstPageLabel'=>'<<',
                                    'prevPageLabel'=>'<',
                                    'nextPageLabel'=>'>',
                                    'lastPageLabel'=>'>>',
                                    'pages'=>$arResult['pages']
                                    ));
                            ?>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Предстоящие события</h4>
                    </div> <!-- /.widget-main-title -->
                    <div class="widget-inner">
                    <?php     
                        foreach ($arResult['recently'] as $node) {
                            $temp=$node->getAttributes();  ?>
                        
                        <div class="event-small-list clearfix">
                            <div class="calendar-small">
                                <span class="s-month">Jan</span>
                                <span class="s-date">24</span>
                            </div>
                            <div class="event-small-details">
                                <h5 class="event-small-title"><a href="event-single.html"><?php echo $temp['name_event']; ?></a></h5>
                                <div class="event-small-body"><p class="event-small-meta small-text"><?php echo $temp['hold_date'].' '.$temp['text_description']; ?></p></div>
                            </div>
                        </div>
                        <?}           
                    ?>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Фотогалерея</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg" title="Gallery Tittle One">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg" title="Gallery Tittle Two">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->
