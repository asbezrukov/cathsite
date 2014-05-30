<div class="container">
    <div class="page-title clearfix">
        <div class="row">
            <div class="col-md-12">
                <h6><a href="/">Главная</a></h6>
                <h6><span>Редактирование</span></h6>
                <div class="grid-or-list">
                    <ul>
                        <li><a href="/page/index" title="Добавить"><img src="/images/add.png"></a></li>
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
                            <?php foreach($arResult as $arItem) { 
                                $cat = '';
                                switch ($arItem->category) {
                                    case 'stud':
                                        $cat = 'Студентам';
                                        break;
                                    case 'cath':
                                        $cat = 'Кафедра';
                                        break;
                                    case 'event':
                                        $cat = 'События';
                                        break;
                                    case 'contact':
                                        $cat = 'Контакты';
                                        break;
                                }
                                ?>
                                <dt>
                                    <a class="fa fa-times pull-right" href="/page/delete/<? echo $arItem->p_name?>"></a>
                                    <a class="fa fa-pencil pull-right" href="/page/update/<? echo $arItem->p_name?>"></a>
                                    <span class="level"><?php echo $arItem->idPage ?></span>
                                        <?php if (!empty($arItem->title)) { ?>
                                        <table class="pageTable">
                                            <tr>
                                                <td class="pageTdCat"><?php echo $cat; ?></td>
                                                <td class="pageTdTitle"><a href="/page/<?=$arItem->p_name ?>"><?php echo $arItem->title; ?></a></td>
                                            </tr>
                                        </table>
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
