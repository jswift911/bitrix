<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <?php

    use Bitrix\Main\Page\Asset;
    $APPLICATION->ShowHead();

    ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/bootstrap.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/form.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/nav.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/hover_pack.js.css");

    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.easydropdown.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/scripts.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/sweetalert.js");


    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
    Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic\' rel=\'stylesheet\' type=\'text/css\'>");
    ?>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>

</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<!-- header-section-starts -->
<div class="c-header" id="home">
    <div class="top-header">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/logo.png" alt="" /></a>
            </div>
            <div class="header-top-right">
                <!-- start search-->
                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        <form>
                            <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                        </form>
                    </div>
                </div>
                <!-- search-scripts -->
                <script src="<?=DEFAULT_TEMPLATE_PATH?>/js/classie.js"></script>
                <script src="<?=DEFAULT_TEMPLATE_PATH?>/js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!-- //search-scripts -->

                <a href="/personal/cart/"><i class="cart"></i></a>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_catalog", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "2",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
                "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "COMPONENT_TEMPLATE" => "horizontal_multilevel"
            ),
                false
            );?>
        </div>
    </div>
</div>
<!-- start Dresses-page -->
<!-- content-section-starts -->
<div class="container">
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>