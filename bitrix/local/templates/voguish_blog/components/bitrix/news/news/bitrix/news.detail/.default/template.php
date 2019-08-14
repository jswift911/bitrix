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
<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" class="img-responsive" alt="<?=$arResult['DETAIL_PICTURE']['ALT'];?>">

<?=$arResult['DETAIL_TEXT'];?>
<div class="fancy-container">
<?php if (!empty($arResult['PROPERTIES']['GALLERY']['VALUE'])) :?>
<?php foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $photo) :?>
        <a class="fancybox" rel="group" href="<?= CFile::GetPath($photo); ?>"><img src="<?= CFile::GetPath($photo); ?>" alt="" width="200px"></a>
<?php endforeach;?>
<?php endif;?>
</div>

<div class="artical-links">
    <ul>
        <li><small> </small><span><?=$arResult['DISPLAY_ACTIVE_FROM'];?></span></li>
        <li><a href="#"><small class="admin"> </small><span><?=$arResult['PROPERTIES']['AUTHOR']['VALUE'];?></span></a></li>
        <li><a href="#"><small class="no"> </small><span><?=$arResult['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE'] ? $arResult['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE'] : 'No comments'?></span></a></li>
        <li><a href="#"><small class="posts"> </small><span>View posts: <?=$arResult['SHOW_COUNTER'] ? $arResult['SHOW_COUNTER'] : 0;?></span></a></li>
        <li><a href="<?=$arResult['DETAIL_PAGE_URL'];?>"><small class="link"> </small><span>permalink</span></a></li>
    </ul>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>