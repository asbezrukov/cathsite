<div class="list-event-item">
    <div class="box-content-inner clearfix">
        <div class="list-event-thumb">
            <a href="/event/single/<?=$data['id_event']?>">
                <?php if ($data->getImageUrl()==false) { ?>
                    <img src="http://placehold.it/360x220">
                <?php }	else { ?>
                    <img src="<? echo $data->getImageUrl('list'); ?>">
                <?php } ?>
            </a>
        </div>
        <div class="list-event-header">
            <span class="event-date small-text"><i class="fa fa-calendar-o"></i><?php echo date_format(new DateTime($data->hold_date),"d M Y"); ?></span>
            <div class="view-details"><a href="/event/single/<?=$data['id_event']?>" class="lightBtn">Подробнее</a></div>
        </div>
        <h5 class="event-title"><a href="/event/single/<?=$data['id_event']?>"> <?php echo CHtml::encode($data->name_event); ?> </a></h5>
        <div class="event-body"><p><?php echo CHtml::encode($data->text_description); ?></p></div>
    </div> <!-- /.box-content-inner -->
</div> <!-- /.list-event-item -->