<div class="list-event-item">
    <div class="box-content-inner clearfix">
        <h5 class="event-title"><a href="?r=classifieds/detail&id=<?=$data->id_classifieds?>"><?php echo CHtml::encode($data->header); ?></a></h5>
        <p><?php echo CHtml::encode($arResult['data']->important)?></p>
        <p><?php echo CHtml::encode($arResult['data']->date_publication)?></p>
        <p><?php echo CHtml::encode($arResult['data']->text)?></p>
    </div> <!-- /.box-content-inner -->
</div> <!-- /.list-event-item -->
