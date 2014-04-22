<!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Главная</a></h6>
                    <h6><a href="/?r=staff/list">Преподаватели</a></h6>
                    <h6><span class="page-active"><?php echo CHtml::encode($arResult['data']->surname).' '.CHtml::encode($arResult['data']->name).' '.CHtml::encode($arResult['data']->patronymic); ?></span></h6>
					<div class="grid-or-list">
                        <ul>
                            <li><a href="?r=staff/update&mid=employee&id=<?=$arResult['data']['id']?>" title="Редактировать"><img src="/images/edit.png"></a></li>
                            <li><a href="?r=staff/delete&mid=employee&id=<?=$arResult['data']['id']?>" title="Удалить"><img src="/images/delete.png"></a></li>
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
                                <img src="<?php echo $arResult['data']->getImageUrl(); ?>" alt="">
                            </div> <!-- /.left-event-content -->
                            <div class="right-event-content">
                                <h2 class="event-title"><?php echo CHtml::encode($arResult['data']->surname).' '.CHtml::encode($arResult['data']->name).' '.CHtml::encode($arResult['data']->patronymic); ?></h2> 
                                <p><?php echo CHtml::encode($arResult['data']->rank).'  '.CHtml::encode($arResult['data']->degree).'  '.CHtml::encode($arResult['data']->position); ?></p>
                                <p><?php echo CHtml::encode($arResult['data']->consult_time);?></p>
                                 
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
