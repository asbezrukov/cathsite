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
                    <h6><a href="/">Главная</a></h6>
                    <h6><span class="?r=event/list">Все события</span></h6>
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
                              ?>
                        
                        <div class="event-small-list clearfix">
                             <div class="calendar-small">
                                 <span class="s-month"><?php echo date_format(new DateTime($node->hold_date),"M"); ?></span>
                                 <span class="s-date"><?php echo date_format(new DateTime($node->hold_date),"d"); ?></span>
                             </div>
                             <div class="event-small-details">
                                 <h5 class="event-small-title">
                                     <a href="?r=event/single&id=<?=$node->id_event?>">
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
                        <?}           
                    ?>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Категории</h4>
                    </div>
                    <div class="widget-inner">
                     <?php     
                        foreach ($arResult['category'] as $node) {?>
                        <h5 class="event-small-title"><a href="?r=event/category$id="><?php echo $node->ec_name; ?></a></h5>                           
                    <?}?>    
                    </div> <!-- /.widget-inner --> 
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->
