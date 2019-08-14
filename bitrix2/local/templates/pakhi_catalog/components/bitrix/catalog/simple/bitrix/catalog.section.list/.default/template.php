<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="row">
    <div class="col-md-12">
        <div class="cats-list clearfix">
            <?
            $TOP_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"];
            $CURRENT_DEPTH = $TOP_DEPTH;

            foreach($arResult["SECTIONS"] as $arSection):
            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));

            /* IMAGE */
            if (empty($arSection['PICTURE'])) {
                $arSection['PICTURE']['SRC'] = $this->GetFolder() . '/images/line-empty.png';
            }
            /* IMAGE */

            if($CURRENT_DEPTH < $arSection["DEPTH_LEVEL"])
                echo "\n",str_repeat("\t", $arSection["DEPTH_LEVEL"]-$TOP_DEPTH),"<ul>";
            elseif($CURRENT_DEPTH == $arSection["DEPTH_LEVEL"])
                echo "</li>";
            else
            {
                while($CURRENT_DEPTH > $arSection["DEPTH_LEVEL"])
                {
                    echo "</li>";
                    echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</ul>","\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH-1);
                    $CURRENT_DEPTH--;
                }
                echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</li>";
            }

            echo "\n",str_repeat("\t", $arSection["DEPTH_LEVEL"]-$TOP_DEPTH);
            ?>
            <li id="<?=$this->GetEditAreaId($arSection['ID']);?>">

                <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="img" style="background-image: url('<?=$arSection['PICTURE']['SRC'];?>')"></a>
                <h2>
                    <a href="<?=$arSection["SECTION_PAGE_URL"]?>">
                        <?=$arSection["NAME"]?>
                        <?php if ($arParams['COUNT_ELEMENTS']) :?>
                            (<?=$arSection["ELEMENT_CNT"]?>)
                        <?php endif;?>
                    </a>
                </h2>



                <?
                $CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];
                endforeach;
                while($CURRENT_DEPTH > $TOP_DEPTH)
                {
                    echo "</li>";
                    echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</ul>","\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH-1);
                    $CURRENT_DEPTH--;
                }
                ?>
        </div>
    </div>
</div>


