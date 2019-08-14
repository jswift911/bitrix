<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="blo-top">
    <?php foreach ($arResult['ITEMS'] as $arItem):; ?>

        <?php
        $file = CFile::ResizeImageGet(
            $arItem['PREVIEW_PICTURE'],
            ["width" => 100, "height" => 100],
            BX_RESIZE_IMAGE_EXACT,
            true
        );
        $arItem['PREVIEW_PICTURE']['SRC'] = $file['src'];
        ?>


        <div class="blog-grids" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="blog-grid-left">
                <a href="<?= $arItem['DETAIL_PAGE_URL'];?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" class="img-responsive" alt=""></a>
            </div>
            <div class="blog-grid-right">
                <h4><a href="<?= $arItem['DETAIL_PAGE_URL'];?>"><?= $arItem['NAME'];?></a></h4>
                <p><?= $arItem['PREVIEW_TEXT'];?></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    <?php endforeach; ?>
</div>