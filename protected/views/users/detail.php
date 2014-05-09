<!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Главная</a></h6>
                    <h6><a href="/users/list">Сотрудники</a></h6>
                    <h6><span class="page-active"><?php echo CHtml::encode($arResult['data']->username); ?></span></h6>
					<div class="grid-or-list">
                        <ul>
                            <li><a href="/users/update/<?=$arResult['data']['idUsers']?>" title="Редактировать"><img src="/images/edit.png"></a></li>
                            <li><a href="/users/delete/<?=$arResult['data']['idUsers']?>" title="Удалить"><img src="/images/delete.png"></a></li>
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
                            <div class="right-event-content">
                                <h2 class="event-title"><?php echo CHtml::encode($arResult['data']->username); ?></h2>
                                <p><?php echo CHtml::encode($arResult['data']->employee).'  '.CHtml::encode($arResult['data']->student); ?></p>
                            </div> <!-- /.right-event-content -->
                        </div>
                        </div> <!-- /.event-container -->
                     
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">                
            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->
