<?php if (count($arResult) > 0) { 
    $singleUrl = '';
    $updateUrl = '';
    $deleteUrl = '';
    $createUrl = '';
    $keyField = '';
    switch ($modelType) {
        case 'page':
            $singleUrl = '/page/';
            $updateUrl = '/page/update/';
            $deleteUrl = '/page/delete/';
            $createUrl = '/page/index';
            $keyField = 'p_name';
            break;
        case 'event':
            $singleUrl = '/event/single/';
            $updateUrl = '/'.$modelType.'/update/';
            $deleteUrl = '/'.$modelType.'/delete/';
            $createUrl = '/'.$modelType.'/create';
            $keyField = $idField;
            break;
        default:
            $singleUrl = '/'.$modelType.'/detail/';
            $updateUrl = '/'.$modelType.'/update/';
            $deleteUrl = '/'.$modelType.'/delete/';
            $createUrl = '/'.$modelType.'/create';
            $keyField = $idField;
            break;
    }
    ?>
<div class="container">
    <div class="page-title clearfix">
        <div class="row">
            <div class="col-md-12">
                <h6><a href="/">Главная</a></h6>
                <h6><span>Редактирование</span></h6>
                <div class="grid-or-list">
                    <ul>
                        <li><a href="<?=$createUrl?>" title="Добавить"><img src="/images/add.png"></a></li>
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
                        <dl class="course-list" role="tablist">
                            <?php foreach($arResult as $arItem) { ?>
                                <dt>
                                    <a class="fa fa-times pull-right" href="<?=$deleteUrl.$arItem[$keyField] ?>"></a>
                                    <a class="fa fa-pencil pull-right" href="<?=$updateUrl.$arItem[$keyField] ?>"></a>
                                    <span class="level"><?php echo $arItem[$idField]; ?></span>
                                    <?php if (!empty($arItem[$nameField])) { ?>
                                        <a href="<?=$singleUrl.$arItem[$keyField] ?>"><?php echo $arItem[$nameField]; ?></a>
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