<div class="list-event-item">
    <div class="box-content-inner clearfix">
        <div class="list-event-thumb">
            <a href="event-single.html">
                <img src="http://placehold.it/170x150" alt="">
            </a>
        </div>
        <div class="list-event-header">
            <span class="event-date small-text"><i class="fa fa-calendar-o"></i><?php echo CHtml::encode($data->hold_date); ?></span>
            <div class="view-details"><a href="event-single.html" class="lightBtn">Подробнее</a></div>
        </div>
        <h5 class="event-title"><a href="event-single.html"> <?php echo CHtml::encode($data->name_event); ?> </a></h5>
        <div class="event-body"><p><?php echo CHtml::encode($data->text_description); ?></p></div>
    </div> <!-- /.box-content-inner -->
</div> <!-- /.list-event-item -->