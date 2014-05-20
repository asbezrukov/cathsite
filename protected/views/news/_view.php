<div class="col-md-6 col-sm-6">
    <div class="blog-grid-item">
        <div class="blog-grid-thumb">
            <a href="/news/category/" class="cat-blog"><?php echo CHtml::encode($data->category->nc_name); ?></a>
            <a href="/news/detail/<?=$data['id_news']?>">
                <?php if ($data->getImageUrl()==false) { ?>
					<img src="http://placehold.it/360x220">
				<?php }	else { ?>
					<img src="<? echo $data->getImageUrl('list'); ?>">
				<?php } ?>
            </a>
        </div>
        <div class="box-content-inner">
            <h4 class="blog-grid-title"><a href="/news/detail/<?=$data['id_news']?>"><?php echo CHtml::encode($data->header); ?></a></h4>
            <p class="blog-grid-meta small-text"><span><a href="/news/detail/<?=$data['id_news']?>"><?php echo CHtml::encode($data->date_publication); ?></a></span></p>
        </div> <!-- /.box-content-inner -->
    </div> <!-- /.blog-grid-item -->
</div> <!-- /.col-md-6 -->