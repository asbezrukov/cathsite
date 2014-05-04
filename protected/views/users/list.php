<?php
    $this->pageTitle=Yii::app()->name;
?> 
<!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Главная</a></h6>
                    <h6><span class="page-active">Сотрудники</span></h6>
                </div>
				<div class="grid-or-list">
                    <ul>
                        <li><a href="?r=users/create&mid=users" title="Добавить"><img src="/images/add.png"></a></li>
                    </ul>
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
                    </div> <!-- /.col-md-12 -->
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
            
        </div> <!-- /.row -->
    </div> <!-- /.container -->