<?php

class news extends CBitrixComponent
{
    public function executeComponent()
    {

        if (!CModule::IncludeModule('iblock')) {
            ShowError('Модуль «Информационные блоки» не установлен');
            return;
        }

        $arSelect = array("*");
        $arFilter = array("IBLOCK_ID" => $this->arParams["IBLOCK_ID"], "ACTIVE" => "Y");

        $res = CIBlockElement::GetList(array("SORT" => "DESC"), $arFilter, false, array(), $arSelect);

        $arrItem = [];

        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arrItem[] = $arFields;
        }
 
        $this->arResult["ITEMS"] = $arrItem;


        $this->IncludeComponentTemplate();
    }
}