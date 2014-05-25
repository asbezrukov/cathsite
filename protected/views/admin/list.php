<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="widget-main">
                <div class="widget-inner">

                    <?php if (count($arResult) > 0) { ?>

                        <dl class="course-list" role="tablist">
                            <?php foreach($arResult as $arItem) { ?>
                                <dt>
                                    <a class="fa fa-times pull-right" href="#"></a>
                                    <a class="fa fa-pencil pull-right" href="#"></a>
                                    <span class="level"><?php echo $arItem[$idField]; ?></span>
                                    <?php if (!empty($arItem[$nameField])) { ?>
                                        <a href="#"><?php echo $arItem[$nameField]; ?></a>
                                    <?php } else { ?>
                                        <p>-</p>
                                    <?php } ?>
                                </dt>
                            <?php } ?>
                        </dl>

                    <?php } else { ?>
                        <p class="course-list-error">Елементы не найдены</p>
                    <?php } ?>
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->
        </div> <!-- /.col-md-12 -->
    </div>
</div>