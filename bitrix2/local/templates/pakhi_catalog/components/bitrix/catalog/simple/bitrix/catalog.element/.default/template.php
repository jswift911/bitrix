<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
//debug($arResult);
?>
<script>
    let path = '<?=$arResult['ORIGINAL_PARAMETERS']['SECTION_CODE']?>/';
</script>
<link rel="stylesheet" href="<?=DEFAULT_TEMPLATE_PATH;?>/css/etalage.css">
<script src="<?=DEFAULT_TEMPLATE_PATH;?>/js/jquery.etalage.min.js"></script>
<script>
    jQuery(document).ready(function($){

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,
            source_image_width: 800,
            source_image_height: 1000,
            show_hint: true,
            click_callback: function(image_anchor, instance_id){
                alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
            }
        });

    });
</script>

<div class="row">
    <div class="col-md-4">
        <ul id="etalage">
            <!--ДЕТАЛЬНАЯ КАРТИНКА-->
            <li>
                <img class="etalage_thumb_image img-responsive" src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="<?=$arResult['NAME'];?>"/>
                <img class="etalage_source_image img-responsive" src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="<?=$arResult['NAME'];?>"/>
            </li>
            <!--ДЕТАЛЬНАЯ КАРТИНКА-->

            <!--Доп. картинки-->
            <?php if (!empty($arResult['MORE_PHOTO'])) :?>
            <?php foreach ($arResult['MORE_PHOTO'] as $photo):?>
                    <li>
                        <img class="etalage_thumb_image img-responsive" src="<?=$photo['SRC'];?>" alt=""/>
                        <img class="etalage_source_image img-responsive" src="<?=$photo['SRC'];?>" alt=""/>
                    </li>
            <?php endforeach;?>
            <?php endif;?>
            <!--Доп. картинки-->
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-8">
        <div class="loader">
            <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/loader.gif" alt="">
        </div>
        <h3><?=$arResult['NAME'];?></h3>
        <div class="price">
            <?php if(is_array($arResult["OFFERS"]) && !empty($arResult["OFFERS"])):?>
                <?php $props = []; ?>
                <?foreach($arResult["OFFERS"] as $arOffer):?>
                    <?foreach($arOffer["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                        <?
                        $props[$pid]['name'] = $arProperty["NAME"];
                        $props[$pid]['props'][$arProperty["VALUE"]]['id'] = $arOffer["ID"];
                        $props[$pid]['props'][$arProperty["VALUE"]]['value'] = $arProperty["DISPLAY_VALUE"];
                        ?>
                    <?endforeach?>


                    <?foreach($arOffer["PRICES"] as $code=>$arPrice):?>
                        <?if($arPrice["CAN_ACCESS"]):?>
                            <?php
                            $props[$pid]['props'][$arProperty['VALUE']]['price'] = $arPrice["PRINT_DISCOUNT_VALUE"];
                            ?>
                        <?endif;?>
                    <?endforeach;?>


                <?endforeach;?>

                <?php foreach($props as $id => $prop): ?>

                    <?php
                    foreach($prop['props'] as $k => $v){
                        $colors[] = $v['value'];
                    }

                    if (!CModule::IncludeModule('highloadblock')) //ПОДКЛЮЧАЕМ МОДУЛЬ
                        continue;
                    $ID = 1; //СЮДА ID ВАШЕГО HL ИНФОБЛОКА
                    $hldata = Bitrix\Highloadblock\HighloadBlockTable::getById($ID)->fetch();
                    $hlentity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata);
                    $hlDataClass = $hldata['NAME'].'Table';

                    //СОЗДАЕМ МАССИВ ФИЛЬТРА, В НЕМ УКАЗЫВАЕМ ЛОГИКУ ОТБОРА И (обязательно, иначе будет ИЛИ и отфильтрует только один цвет)
                    $arFilter = Array(
                        Array(
                            "LOGIC"=>"AND",
                            Array(
                                "UF_NAME"=> $colors //НАШ МАССИВ С ЦВЕТАМИ
                            )
                        )
                    );
                    $result = $hlDataClass::getList(array(
                        'select' => array('UF_FILE','UF_NAME','UF_DESCRIPTION','UF_XML_ID'), //НАМ НУЖНЫ ТОЛЬКО НАЗВАНИЕ И КАРТИНКА
                        //'order' => array('UF_NAME' =>'ASC'),
                        'filter' => $arFilter //ПРИМЕНЯМ СОЗДАННЫЙ ВЫШЕ ФИЛЬТР
                    ));
                    while($res = $result->fetch())
                    {

                        $img_path = CFile::GetPath($res["UF_FILE"]); //ПОЛУЧАЕМ ПУСТЬ К КАРТИНКЕ
                        $props['COLOR']['props'][$res["UF_XML_ID"]]['img'] = '<img src="'.$img_path.'"/>';
                        $props['COLOR']['props'][$res["UF_XML_ID"]]['code'] = $res["UF_DESCRIPTION"];
                    }
                    ?>
                <?php endforeach; ?>
                <span class="price-value">
            <?php foreach($props['COLOR']['props'] as $color): ?>
                <?= $color['price'] ?> (<?= $color['value'] ?>)
                <?php break; endforeach; ?>
        </span>
                <!--    COLORS    -->
                <p><b><?= $props['COLOR']['name'] ?></b></p>
                <ul class="color-props clearfix">
                    <?php $i = 0; foreach($props['COLOR']['props'] as $id => $color): ?>
                        <li data-id="<?= $color['id'] ?>" data-value="<?= $color['value'] ?>" data-price="<?= $color['price'] ?>"<?php if(!$i) echo ' class="active-prop"' ?>>
                            <div style="background-color: <?= $color['code'] ?>;"></div>
                        </li>
                        <?php
                        if(!$i){
                            $id_offer = $color['id'];
                        }
                        ?>
                        <?php $i++; endforeach; ?>
                </ul>
                <!--    COLORS    -->

                <form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" class="add2cart">
                    <div class="input-group col-xs-3">
                        <input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" class="form-control" id="QUANTITY<?= $arElement['ID'] ?>">
                        <input type="hidden" name="action" value="ADD2BASKET">
                        <input type="hidden" name="ajax_basket" value="Y">
                        <input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?= $id_offer ?>" class="id-offer">
                        <span class="input-group-btn">
                    <button name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" class="btn btn-default" type="submit"><?echo GetMessage("CATALOG_ADD_TO_BASKET")?></button>
                </span>
                    </div>
                </form>

            <?php else: ?>
                <?foreach($arResult["PRICES"] as $code=>$arPrice):?>
                    <?if($arPrice["CAN_ACCESS"]):?>
                        <?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
                            <s><?=$arPrice["PRINT_VALUE"]?></s> <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
                        <?else:?>
                            <?=$arPrice["PRINT_VALUE"]?>
                        <?endif;?>
                    <?endif;?>
                <?endforeach;?>

                <?if($arResult["CAN_BUY"]):?>
                    <div class="buy">
                    <form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" class="add2cart">
                        <div class="input-group col-xs-3">
                            <input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" class="form-control" id="QUANTITY<?= $arResult['ID'] ?>">
                            <input type="hidden" name="action" value="ADD2BASKET">
                            <input type="hidden" name="ajax_basket" value="Y">
                            <input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arResult["ID"]?>">
                            <span class="input-group-btn">
                    <button name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" class="btn btn-default" type="submit"><?echo GetMessage("CATALOG_ADD_TO_BASKET")?></button>
                </span>
                        </div>
                    </form>
                <?elseif((count($arResult["PRICES"]) > 0) || is_array($arResult["PRICE_MATRIX"])):?>
                    <?=GetMessage("CATALOG_NOT_AVAILABLE")?>
                <?endif?>
                </div>

            <?php endif; ?>
        </div>

        <hr/>

        <?php foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
            <p><b><?=$arProperty["NAME"]?>:</b> <?php
                if(is_array($arProperty["DISPLAY_VALUE"])):
                    echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
                elseif($pid=="MANUAL"):
                    ?><a href="<?=$arProperty["VALUE"]?>"><?=GetMessage("CATALOG_DOWNLOAD")?></a><?
                else:
                    echo $arProperty["DISPLAY_VALUE"];?>
                <?php endif?>
            </p>
        <?endforeach?>

    </div>

    <div class="col-md-12">
        <div class="single-bottom1">
            <h6>Описание</h6>
            <p><?=$arResult['DETAIL_TEXT'];?></p>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.recommended.products", 
	".default", 
	array(
		"ACTION_VARIABLE" => "action_crp",
		"ADDITIONAL_PICT_PROP_4" => "MORE_PHOTO",
		"ADDITIONAL_PICT_PROP_5" => "",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"CODE" => $_REQUEST["PRODUCT_CODE"],
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "",
		"ELEMENT_SORT_FIELD" => "SORT",
		"ELEMENT_SORT_FIELD2" => "ID",
		"ELEMENT_SORT_ORDER" => "ASC",
		"ELEMENT_SORT_ORDER2" => "DESC",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "catalog",
		"ID" => $arResult["ID"],
		"LABEL_PROP_4" => "-",
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"OFFERS_PROPERTY_LINK" => "RECOMMEND",
		"PAGE_ELEMENT_COUNT" => "30",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_LINK" => "RELATED",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_NAME" => "Y",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_PRODUCTS_4" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    </div>
</div>