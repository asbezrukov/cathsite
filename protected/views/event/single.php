    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Главная</a></h6>
                    <h6><a href="/event/list">Все события</a></h6>
                    <h6><span class="page-active"><?php echo CHtml::encode($arResult['data']->name_event); ?></span></h6>
                    <div class="grid-or-list">
                        <ul>
                            <li><a href="/event/update/<?=$arResult['data']['id_event']?>" title="Редактировать"><img src="/images/edit.png"></a></li>
                            <li><a href="/event/delete/<?=$arResult['data']['id_event']?>" title="Удалить"><img src="/images/delete.png"></a></li>
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
                        <div class="event-container clearfix">
                            <div class="left-event-content">
                                <?php $url = $arResult['data']->getImageUrl();?>
                                <?php if(!empty($url)) { ?>
                                    <img src="<?php echo $arResult['data']->getImageUrl('detail')?>" alt="">
                                <?php } else { ?>
                                    <img src="http://placehold.it/225x240" alt="">
                                <?php } ?>
                            </div> <!-- /.left-event-content -->
                            <div class="right-event-content">
                                <h2 class="event-title"><?php echo CHtml::encode($arResult['data']->name_event); ?></h2> 
                                <span class="event-time"><?php echo date_format(new DateTime($arResult['data']->hold_date),"d-m-Y")?></span>
                                <p><?php echo CHtml::encode($arResult['data']->text_description); ?></p>
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

                            <div class="event-small-list clearfix">
                                 <div class="calendar-small">
                                     <span class="s-month"><?php echo date_format(new DateTime($node->hold_date),"M"); ?></span>
                                     <span class="s-date"><?php echo date_format(new DateTime($node->hold_date),"d"); ?></span>
                                 </div>
                                 <div class="event-small-details">
                                     <h5 class="event-small-title">
                                         <a href="/event/single/<?=$node->id_event?>">
                                             <?php echo $node->name_event; ?>
                                         </a>
                                     </h5>
                                     <div class="event-small-body">
                                         <p class="event-small-meta small-text">
                                             <?php echo $node->text_description; ?>
                                         </p>
                                     </div>
                                 </div>
                            </div>

                         <?php } ?>
                     </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Категории</h4>
                    </div>
                    <div class="widget-inner">
                        <?php     
                            foreach ($arResult['category'] as $node) {?> 
                            <h5 class="event-small-title"><a href="/event/category/"><?php echo $node->ec_name; ?></a></h5>
                        <?}?> 
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->