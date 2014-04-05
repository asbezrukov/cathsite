    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Главная</a></h6>
                    <h6><a href="/?r=event/list">Все события</a></h6>
                    <h6><span class="page-active">Public and Patient Involvement in Health Research</span></h6>
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
                        <div class="event-container clearfix">
                            <div class="left-event-content">
                                <img src="http://placehold.it/225x240" alt="">
                            </div> <!-- /.left-event-content -->
                            <div class="right-event-content">
                                <h2 class="event-title"><?php echo CHtml::encode($arResult['data']->name_event); ?></h2> 
                                <span class="event-time"><?php echo CHtml::encode($arResult['data']->hold_date); ?></span>
                                <p><?php echo CHtml::encode($arResult['data']->text_description); ?></p>
                                <div class="google-map-canvas" id="map-canvas" style="height: 210px;"></div>
                            </div> <!-- /.right-event-content -->
                        </div> <!-- /.event-container -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                 <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Предстоящие события</h4>
                    </div> <!-- /.widget-main-title -->
                     <div class="widget-inner">
                         <?php foreach ($arResult['recently'] as $node) { ?>
                             <?php //$temp=$node->getAttributes(); ?>

                             <div class="event-small-list clearfix">
                                 <div class="calendar-small">
                                     <span class="s-month">Jan</span>
                                     <span class="s-date">24</span>
                                 </div>
                                 <div class="event-small-details">
                                     <h5 class="event-small-title">
                                         <a href="?r=event/single&id=<?=$node->id_event?>">
                                             <?php echo $node->name_event; ?>
                                         </a>
                                     </h5>
                                     <div class="event-small-body">
                                         <p class="event-small-meta small-text">
                                             <?php echo $node->hold_date.' '.$node->text_description; ?>
                                         </p>
                                     </div>
                                 </div>
                             </div>

                         <?php } ?>
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