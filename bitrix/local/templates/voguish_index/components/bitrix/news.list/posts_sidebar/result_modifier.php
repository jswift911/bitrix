<?php
//debug($arResult);
foreach ($arResult['ITEMS'] as &$item) {
    $item['PREVIEW_TEXT'] = mbCutString($item['PREVIEW_TEXT'], 50, '');
}
unset($item);