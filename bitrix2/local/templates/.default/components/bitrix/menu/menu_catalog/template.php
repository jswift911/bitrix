<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>


    <div class="navigation">
        <div>
            <label class="mobile_menu" for="mobile_menu">
                <span>Menu</span>
            </label>
            <input id="mobile_menu" type="checkbox">
            <ul class="nav">
                <?php $previousLevel = 0; foreach($arResult as $arItem):?>

                <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                    <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
                <?endif?>


                <?php if ($arItem["IS_PARENT"]):?>

                <?php if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="dropdown1<?php if ($arItem["SELECTED"]) echo ' active';?>">
                    <a<?php if ($arItem["SELECTED"]) echo ' class="active"';?> href="<?=$arItem["LINK"]?>">
                        <?=$arItem["TEXT"]?>
                    </a>
                    <ul class="dropdown2">
                        <?php else: ?>
                            <li<?php if ($arItem["SELECTED"]) echo ' class="active"';?>>
                                <a href="<?=$arItem["LINK"]?>" class="parent">
                                    <?=$arItem["TEXT"]?>
                                </a>
                            </li>>
                        <?php endif; ?>

                        <?php else: ?>

                            <?php if ($arItem["DEPTH_LEVEL"] == 1):?>
                                <li<?php if ($arItem["SELECTED"]) echo ' class="active"';?>>
                                    <a href="<?=$arItem["LINK"]?>">
                                        <?=$arItem["TEXT"]?>
                                    </a>
                                </li>
                            <?else:?>
                                <li<?php if ($arItem["SELECTED"]) echo ' class="active"';?>>
                                    <a href="<?=$arItem["LINK"]?>">
                                        <?=$arItem["TEXT"]?>
                                    </a>
                                </li>
                            <?endif?>

                        <?php endif; ?>

                        <?php $previousLevel = $arItem["DEPTH_LEVEL"];?>
                        <?php endforeach; ?>
                        <?if ($previousLevel > 1)://close last item tags?>
                            <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
                        <?endif?>
                    </ul>
        </div>
    </div>

<?endif?>