<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
    return "";

$strReturn = '<div class="dreamcrub clearfix"><ul class="breadcrumbs">';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
    $strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div class="bx-breadcrumb">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    $nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
    $child = ($index > 0? ' ' : '');
    $arrow = ($index > 0? '&nbsp;<i class="fa fa-angle-right"></i>&nbsp;' : '');

    if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
    {
        if(!$index) $title = '<i class="fa fa-home"></i>';
        $strReturn .= '
			<li>
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'">
					<span>'.$title.'</span>
				</a>
			</li>';
    }
    else
    {
        $strReturn .= '
			<li>
				'.$arrow.'
				<span class="red">'.$title.'</span>
			</li>';
    }
}

$strReturn .= '</ul></div>';

return $strReturn;
