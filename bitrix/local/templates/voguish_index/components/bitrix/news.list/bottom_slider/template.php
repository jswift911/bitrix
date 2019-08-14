<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//debug($arResult);
?>

<div class="fle-xsel">
    <ul id="flexiselDemo3">
        <?php foreach ($arResult['ITEMS'] as $arItem) :;?>
        <li>
            <a href="#">
                <div class="banner-1">
                    <img src="<?=$arItem['DETAIL_PICTURE']['SRC'];?>" class="img-responsive"
                         alt="<?=$arItem['DETAIL_PICTURE']['ALT'];?>">
                </div>
            </a>
        </li>
        <?php endforeach;?>
    </ul>

    <script type="text/javascript">
        $(window).load(function() {

            $("#flexiselDemo3").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 2
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <?php
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.flexisel.js");
    ?>
    <div class="clearfix"> </div>
</div>
