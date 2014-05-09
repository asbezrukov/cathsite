<div class="list-event-item">
    <div class="box-content-inner clearfix">
        <div class="list-event-thumb">
            <a href="/staff/detail/<?=$data['id']?>">
                <img src="<?php echo $data->getImageUrl(); ?>" alt="">
            </a>
        </div>
        <h5 class="event-title"><a href="/staff/detail/<?=$data['id']?>"><?php echo CHtml::encode($data->surname).' '.CHtml::encode($data->name).' '.CHtml::encode($data->patronymic); ?></a></h5>
        <p><?php echo CHtml::encode($data->rank).'  '.CHtml::encode($data->degree).'  '.CHtml::encode($data->position); ?></p><br>
        <p><?php echo CHtml::encode($data->consult_time);?></p>
    </div> <!-- /.box-content-inner -->
</div> <!-- /.list-event-item -->
