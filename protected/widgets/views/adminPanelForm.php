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
        .admin-panel-body a {
            color: #8ab5d6;
            display: block;
            padding: 7px 30px;
            border-bottom: 1px solid #00569d;
        }
            .admin-panel-body a.active {
                color: #fecd0b;
            }
            .admin-panel-body a:hover {
                background-color: #00569d;
                text-decoration: none;
            }
    .admin-panel-outer {
        border-top: 1px solid #00569d;
    }
    .admin-panel-hidden .admin-panel-outer {
        overflow: hidden;
        white-space: nowrap;
        -ms-white-space: nowrap;
        width: 5px;
    }
    .admin-panel-hidden .admin-panel-lock {
        display: block;
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
    .admin-panel-actions {
        display: none;
        text-align: right;
        position: absolute;
        right: 0;
        bottom: -20px;
    }
    .admin-panel-actions.admin-panel-actions-opened {
        display: block;
    }
        .admin-panel-actions a {
            padding-top: 5px;
        }
    .admin-panel-lock {
        display: none;
        position: absolute;
        background-color: #004884;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }
</style>
<script>
    $(document).ready(function() {
        var hideTimer;

        var isHide = getCookie('is-hide-ap');
        console.log(isHide)
        if (isHide == '0' || isHide == undefined) {
            show_panel();
        } else {
            hide_panel();
        }

        $('.admin-panel').hover(function() {
            var elem = $(this);
            if (isHidden()) {
                hideTimer = window.setTimeout(function() {
                    show_panel();
                    show_actions();
                }, 500 );
            } else {
                show_actions();
            }
        }, function() {
            hide_actions();
            window.clearTimeout(hideTimer);
        });
    });

    function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }


    function isHidden() {
        var isHide = $('.admin-panel').hasClass('admin-panel-hidden');
        return isHide;
    }
    function show_panel() {
        var elem = $('.admin-panel');
        document.cookie = 'is-hide-ap=0;path=/';
        elem.removeClass('admin-panel-hidden');
    }

    function hide_panel() {
        var elem = $('.admin-panel');
        document.cookie = 'is-hide-ap=1;path=/';
        elem.addClass('admin-panel-hidden');
    }
    function show_actions() {
        var elem = $('.admin-panel-actions');
        elem.addClass('admin-panel-actions-opened');
    }
    function hide_actions() {
        var elem = $('.admin-panel-actions');
        elem.removeClass('admin-panel-actions-opened');
    }
</script>

<div class="admin-panel admin-panel-fixed-left">
    <div class="admin-panel-outer">
        <div class="admin-panel-body">
            <p class="title">Редактировать:</p>
            <?php foreach($arResult as $arItem) { ?>
                <a class="<?php if ($arItem['active']) echo 'active'; ?>" href="<?php echo $arItem['url'] ?>"><?php echo $arItem['name'] ?></a>
            <?php } ?>
        </div>
        <div class="admin-panel-actions">
            <a id="admin-panel-hide" href="#" onclick="hide_panel(); return false;">&laquo;Скрыть</a>
        </div>
    </div>
    <div class="admin-panel-lock">
    </div>
</div>