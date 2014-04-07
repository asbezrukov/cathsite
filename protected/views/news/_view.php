<div class="col-md-6 col-sm-6">
    <div class="blog-grid-item">
        <div class="blog-grid-thumb">
            <a href="?r=news/detail&id=<?=$data['id_news']?>" class="cat-blog"><?php echo CHtml::encode($data->category->nc_name); ?></a>
            <a href="?r=news/detail&id=<?=$data['id_news']?>">
                <img src="http://placehold.it/360x220" alt="">
            </a>
        </div>
        <div class="box-content-inner">
            <h4 class="blog-grid-title"><a href="?r=news/detail&id=<?=$data['id_news']?>"><?php echo CHtml::encode($data->header); ?></a></h4>
            <p class="blog-grid-meta small-text"><span><a href="?r=news/detail&id=<?=$data['id_news']?>"><?php echo CHtml::encode($data->date_publication); ?></a></span></p>
        </div> <!-- /.box-content-inner -->
    </div> <!-- /.blog-grid-item -->
</div> <!-- /.col-md-6 -->