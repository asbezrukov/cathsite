<div class="list-event-item">
    <div class="box-content-inner clearfix">
        <div class="list-event-thumb">
            <a href="/staff/detail/<?=$data['id']?>">
			<?php if ($data->getImageUrl()==false) { ?>
					<img src="http://placehold.it/170x">
				<?php }	else { ?>
					<img src="<? echo $data->getImageUrl('list'); ?>" alt="">
				<?php } ?>
            </a>
        </div>
        <h5 class="event-title"><a href="/staff/detail/<?=$data['id']?>"><?php echo CHtml::encode($data->surname).' '.CHtml::encode($data->name).' '.CHtml::encode($data->patronymic); ?></a></h5>
        <p><?php echo CHtml::encode($data->rank).'  '.CHtml::encode($data->degree).'  '.CHtml::encode($data->position); ?></p><br>
        <p><?php echo CHtml::encode($data->consult_time);?></p>
    </div> <!-- /.box-content-inner -->
</div> <!-- /.list-event-item -->
