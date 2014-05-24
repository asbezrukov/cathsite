<style>
    .admin-panel {
        z-index: 100;
        color: #dddddd;
        background-color: #004884;
    }
        .admin-panel a {
            color: #8ab5d6;
            display: block;
            padding: 7px 30px;
            border-bottom: 1px solid #00569d;
        }
            .admin-panel a:hover {
                background-color: #00569d;
                text-decoration: none;
            }
    .admin-panel-body {
        border-top: 1px solid #00569d;
    }
    [class*=admin-panel-fixed-] {
        position: fixed;
    }
    .admin-panel-fixed-left {
        top: 200px;
        left: 0;
        border-right: 4px solid #fecd0b;
    }
    .admin-panel-fixed-right {
        top: 200px;
        right: 0;
        border-left: 4px solid #fecd0b;
    }
</style>

<div class="admin-panel admin-panel-fixed-left">
    <div class="admin-panel-body">
        <?php foreach($arResult as $arItem) { ?>
            <a href="<?php echo $arItem['url'] ?>"><?php echo $arItem['name'] ?></a>
        <?php } ?>
    </div>
</div>