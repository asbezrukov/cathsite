<div class="container">
    <div class="page-title clearfix">
        <div class="row">
            <div class="col-md-12">
                <h6><a href="/">Главная</a></h6>
                <h6><span>Редактирование</span></h6>
                <div class="grid-or-list">
                    <ul>
                        <li><a href="/event/create" title="Добавить"><img src="/images/add.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="widget-main">
				<div class="widget-inner">

                    <?php if (count($arResult) > 0) { ?>

                        <dl class="course-list" role="tablist">
                            <?php foreach($arResult as $arItem) { ?>
                                <dt>
                                    <a class="fa fa-times pull-right" href="/event/delete/<? echo $arItem->id_event?>"></a>
                                    <a class="fa fa-pencil pull-right" href="/event/update/<? echo $arItem->id_event?>"></a>
                                    <span class="level"><?php echo $arItem->id_event ?></span>
                                        <?php if (!empty($arItem->name_event)) { ?>
                                        <a href="/event/single/<?=$arItem->id_event ?>"><?php echo $arItem->name_event; ?></a>
                                        <?php } else { ?>
                                    <span>-</span>
                                    <?php } ?>
                                </dt>
                            <?php } ?>
                        </dl>

                    <?php } else { ?>
                        <p class="course-list-error">Елементы не найдены</p>
                    <?php } ?>

                </div> <!-- widget-inner -->
            </div> <!-- /.widget-main -->
        </div> <!-- /.col-md-12 -->
    </div>
</div>
