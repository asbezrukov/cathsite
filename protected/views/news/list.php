<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Главная</a></h6>
                    <h6><span class="/news/list">Все новости</span></h6>
                    <div class="grid-or-list">
                        <ul>
                            <li><a href="/news/create" title="Добавить"><img src="/images/add.png"></a></li>
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
                    <?php 
                        $this->widget('zii.widgets.CListView', array (
                            'dataProvider'=>$arResult['dataProvider'],
                            'itemView'=>'_view',
                            'enablePagination'=>false,
                            'summaryText'=>''
                            ));
                    ?>
                </div>
                    
                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">
                
                <div class="widget-main">
                    <div class="widget-inner">
                        <div class="search-form-widget">
                            <form name="search_form" method="get" action="#" class="search_form">
                                <input type="text" name="s" placeholder="Type and click enter to search..." title="Type and click enter to search..." class="field_search">
                            </form>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Категории</h4>
                    </div>
                    <div class="widget-inner">
                     <?php     
                        foreach ($arResult['category'] as $node) {?>
                        <h5 class="event-small-title"><a href="/news/category/"><?php echo $node->nc_name; ?></a></h5>
                    <?}?>    
                    </div> <!-- /.widget-inner --> 
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->