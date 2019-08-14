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
<div class="banner">
    <div class="header-slider">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <?php foreach ($arResult['ITEMS'] as $arItem):;?>
                    <li>
                        <img src="<?=$arItem['DETAIL_PICTURE']['SRC'];?>" class="img-responsive"
                             alt="<?=$arItem['DETAIL_PICTURE']['ALT'];?>">
                        <div class="caption">
                            <h3><?=$arItem['NAME'];?></h3>
                            <p><?=$arItem['DETAIL_TEXT'];?></p>
                        </div>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>