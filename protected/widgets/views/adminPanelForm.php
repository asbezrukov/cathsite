<style>
    .admin-panel {
        z-index: 100;
        color: #dddddd;
        background-color: #004884;
    }
        .admin-panel p.title {
            padding: 7px;
            text-align: center;
            margin-bottom: 5px;
            text-transform: uppercase;
            font-family: "Helvetica Neue", Helvetica-, Arial, sans-serif;
            font-size: 12px;
            font-weight: bold;
        }
        .admin-panel a {
            color: #8ab5d6;
            display: block;
            padding: 7px 30px;
            border-bottom: 1px solid #00569d;
        }
            .admin-panel a.active {
                color: #fecd0b;
            }
            .admin-panel a:hover {
                background-color: #00569d;
                text-decoration: none;
            }
    .admin-panel-hidden .admin-panel-body {
        overflow: hidden;
        white-space: nowrap;
        width: 5px;
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
<script>
    $(document).ready(function() {
        $('.admin-panel').hover(function() {
            var elem = $(this);
            if (elem.hasClass('admin-panel-hidden')) {
                show_panel();
            }
        }, function() {
        });
    })
    function show_panel() {
        var elem = $('.admin-panel');
        elem.removeClass('admin-panel-hidden');
    }

    function hide_panel() {
        var elem = $('.admin-panel');
        elem.addClass('admin-panel-hidden');
    }
</script>

<div class="admin-panel admin-panel-fixed-left">
    <div class="admin-panel-body">
        <p class="title">Редактировать:</p>
        <?php foreach($arResult as $arItem) { ?>
            <a class="<?php if ($arItem['active']) echo 'active'; ?>" href="<?php echo $arItem['url'] ?>"><?php echo $arItem['name'] ?></a>
        <?php } ?>
        <!--<a id="admin-panel-hide" href="#" onclick="hide_panel(); return false;">Скрыть</a>-->
    </div>
</div>