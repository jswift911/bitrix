<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>

    <div class="head-nav">
        <span class="menu"> </span>
        <ul class="cl-effect-1">
            <?php foreach ($arResult as $arItem): ?>
                <?php if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue; ?>
                <?php if ($arItem["SELECTED"]): ?>
                    <li class="active"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?php else: ?>
                    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
            <!--            <li><a href="about.html">About Us</a></li>-->
            <!--            <li><a href="services.html">Services</a></li>-->
            <!--            <li><a href="blog.html">Blog</a></li>-->
            <!--            <li><a href="404.html">Shortcodes</a></li>-->
            <!--            <li><a href="login.html">Login</a></li>-->
            <!--            <li><a href="contact.html">Contact</a></li>-->
            <div class="clearfix"></div>
        </ul>
    </div>
<? endif ?>