<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

use Bitrix\Highloadblock\HighloadBlockTable; ?>

<div class="row">
    <div class="col-md-3">
        <?php $APPLICATION->ShowViewContent('aside_filter'); ?>
    </div>
    <div class="col-md-9">
        <div class="row products">

            <div class="col-md-12">
                <div class="mens-toolbar">
                    <div class="sort">
                        <div class="sort-by">
                            Сортировать по цене:
                            <a href="<?=$APPLICATION->GetCurPageParam('sort=price&order=desc', ['sort','order'])?>">
                                <i class="fa fa-arrow-circle-down"></i>
                            </a> |
                            <a href="<?=$APPLICATION->GetCurPageParam('sort=price&order=asc', ['sort','order'])?>">
                                <i class="fa fa-arrow-circle-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pager">
                        Выводить по :
                        <a href="<?=$APPLICATION->GetCurPageParam
                        ('pagelimit=1', ['pagelimit'])?>">1</a> |
                        <a href="<?=$APPLICATION->GetCurPageParam
                        ('pagelimit=3', ['pagelimit'])?>">3</a> |
                        <a href="<?=$APPLICATION->GetCurPageParam
                        ('pagelimit=6', ['pagelimit'])?>">6</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <? foreach ($arResult["ITEMS"] as $cell => $arElement): ?>
                <?
                $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
                ?>

                <?php
                if (empty($arElement["PREVIEW_PICTURE"])) {
                    $arElement["PREVIEW_PICTURE"] = [
                        'SRC' => $this->GetFolder() . '/images/line-empty2.png',
                    ];
                }
                ?>

                <div class="col-sm-4">
                    <div class="item-product" id="<?= $this->GetEditAreaId($arElement['ID']); ?>">
                       <div class="loader">
                           <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/loader.gif" alt="">
                       </div>
                        <div class="view1 view-fifth1">
                            <div class="top_box">
                                <h3 class="m_1"><?= $arElement["NAME"] ?></h3>
                                <p class="m_2">Lorem ipsum</p>
                                <a href="<?= $arElement["DETAIL_PAGE_URL"] ?>">
                                    <div class="grid_img">
                                        <div class="css3"><img src="<?= $arElement["PREVIEW_PICTURE"]["SRC"] ?>"
                                                               alt="<?= $arElement["NAME"] ?>"></div>
                                        <div class="mask1">
                                            <div class="info">Quick View</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="price">
                                    <?php if(is_array($arElement["OFFERS"]) && !empty($arElement["OFFERS"])): ?>
                                        <?php $props = []; ?>
                                        <?foreach($arElement["OFFERS"] as $arOffer): ?>

                                            <?foreach($arOffer["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                                                <?php
                                                $props[$pid]['name'] = $arProperty["NAME"];
                                                $props[$pid]['props'][$arProperty['VALUE']]['id'] = $arOffer['ID'];
                                                $props[$pid]['props'][$arProperty['VALUE']]['value'] = $arProperty['DISPLAY_VALUE'];
                                                ?>

                                            <?endforeach?>

                                            <?foreach($arOffer["PRICES"] as $code=>$arPrice):?>
                                                <?if($arPrice["CAN_ACCESS"]):?>
                                                    <?php
                                                    $props[$pid]['props'][$arProperty['VALUE']]['price'] = $arPrice['PRINT_DISCOUNT_VALUE'];
                                                    ?>
                                                <?endif;?>
                                            <?endforeach;?>



                                        <?endforeach;?>

<!-- получаем доп. данные из справочника цветов -->
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
        $img_path = CFile::GetPath($res["UF_FILE"]); //ПОЛУЧАЕМ ПУТЬ К КАРТИНКЕ
        $props['COLOR']['props'][$res["UF_XML_ID"]]['img'] = '<img src="'.$img_path.'"/>';
        $props['COLOR']['props'][$res["UF_XML_ID"]]['code'] = $res["UF_DESCRIPTION"];
    }
    ?>
<?php endforeach; ?>
<!-- получаем доп. данные из справочника цветов -->

<span class="price-value">
    <?php foreach ($props['COLOR']['props'] as $color) :?>
    <?=$color['price']?> (<?=$color['value']?>)
    <?php break; endforeach;?>
</span>
<!--COLOR-->
<p><b><?=$props['COLOR']['NAME']?></b></p>
<ul class="color-props clearfix">
    <?php $i=0; foreach ($props['COLOR']['props'] as $id => $color) :?>
    <li data-id="<?=$color['id'];?>" data-value="<?=$color['value'];?>" data-price="<?=$color['price'];?>"
        <?php if (!$i){
            echo 'class="active-prop"';
        }?>>
        <div style="background-color: <?=$color['code']?>;"></div>
    </li>
        <?php if (!$i){
            $id_offer = $color['id'];
        }?>
    <?php $i++; endforeach;?>
</ul>
<!--COLOR-->

<form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" class="add2cart">
<div class="input-group">
<span class="input-group-btn">
<a class="btn btn-default" onclick="if (BX('QUANTITY<?= $arElement['ID'] ?>').value &gt; 1) BX('QUANTITY<?= $arElement['ID'] ?>').value--;">-</a>
</span>
<input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" class="form-control" id="QUANTITY<?= $arElement['ID'] ?>">
<span class="input-group-btn input-group-btn2">
<a class="btn btn-default" onclick="BX('QUANTITY<?= $arElement['ID'] ?>').value++;">+</a>
</span>

<input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="ADD2BASKET">
<input type="hidden" name="ajax_basket" value="Y">
<input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?= $id_offer ?>" class="id-offer">
<span class="input-group-btn">
<button name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" class="btn btn-default" type="submit"><?echo GetMessage("CATALOG_ADD")?></button>
</span>
</div>
</form>

                                    <?php else: ?>
                                        <?foreach($arElement["PRICES"] as $code=>$arPrice):?>
                                            <?if($arPrice["CAN_ACCESS"]):?>
                                                <?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
                                                    <s><?=$arPrice["PRINT_VALUE"]?></s> <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
                                                <?else:?>
                                                    <?=$arPrice["PRINT_VALUE"]?>
                                                <?endif;?>
                                            <?endif;?>
                                        <?endforeach;?>

                                        <?if($arElement["CAN_BUY"]):?>
                                            <div class="buy">
                                            <form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" class="add2cart">
                                                <div class="input-group">
<span class="input-group-btn">
<a class="btn btn-default" onclick="if (BX('QUANTITY<?= $arElement['ID'] ?>').value &gt; 1) BX('QUANTITY<?= $arElement['ID'] ?>').value--;">-</a>
</span>
                                                    <input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" class="form-control" id="QUANTITY<?= $arElement['ID'] ?>">
                                                    <span class="input-group-btn input-group-btn2">
<a class="btn btn-default" onclick="BX('QUANTITY<?= $arElement['ID'] ?>').value++;">+</a>
</span>

                                                    <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="ADD2BASKET">
                                                    <input type="hidden" name="ajax_basket" value="Y">
                                                    <input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arElement["ID"]?>">
                                                    <span class="input-group-btn">
<button name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" class="btn btn-default" type="submit"><?echo GetMessage("CATALOG_ADD")?></button>
</span>
                                                </div>
                                            </form>
                                        <?elseif((count($arResult["PRICES"]) > 0) || is_array($arElement["PRICE_MATRIX"])):?>
                                            <?=GetMessage("CATALOG_NOT_AVAILABLE")?>
                                        <?endif?>
                                        </div>

                                    <?php endif; ?>
                                </div>
                </div>
        </div>

                        <div class="clear"></div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
<?php //debug($props['COLOR']);?>
        <?=$arResult['NAV_STRING'];?>

    </div>
</div>
