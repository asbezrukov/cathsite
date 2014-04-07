    <div class="list-event-item">
        <div class="box-content-inner clearfix">
            <div class="list-event-thumb">
                <a href="?r=employee/detail&id=<?=$data['id']?>">
                    <img src="http://placehold.it/170x150" alt="">
                </a>
            </div>
            <h5 class="event-title"><a href="?r=employee/detail&id=<?=$data['id']?>"><?php echo CHtml::encode($data->surname).' '.CHtml::encode($data->name).' '.CHtml::encode($data->patron); ?></a></h5>
            <p><?php echo CHtml::encode($data->rank).'  '.CHtml::encode($data->degree).'  '.CHtml::encode($data->position); ?></p><br>
            <p><?php echo CHtml::encode($data->consult_time);?></p>
        </div> <!-- /.box-content-inner -->
    </div> <!-- /.list-event-item -->
