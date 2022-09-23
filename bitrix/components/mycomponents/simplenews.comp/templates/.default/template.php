<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
//echo "<pre>";
//print_r($arResult);
//die();

?>
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $arButtons = CIBlock::GetPanelButtons(
                $arParams["IBLOCK_ID"],
                $arItem["ID"], 
                0,
                array("SECTION_BUTTONS"=>false, "SESSID"=>false)
            );
            $arItem["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
            $arItem["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];


            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

            $path = CFile::GetPath($arItem["PREVIEW_PICTURE"])
            ?>
            <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background: url(<?=$path?>) no-repeat center">
                <div class="banner_title_text">
                    <h2><?=$arItem["NAME"]?></h2>
                    <p>
                        <?=$arItem["PREVIEW_TEXT"] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="swiper-pagination"></div>
</div>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>