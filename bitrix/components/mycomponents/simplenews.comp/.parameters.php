<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();


if (!CModule::IncludeModule('iblock')) {
    return;
}


$arIBlockType = CIBlockParameters::GetIBlockTypes();


$arInfoBlocks = array();
$arFilter = array('ACTIVE' => 'Y');

if (!empty($arCurrentValues['IBLOCK_TYPE'])) {
    $arFilter['TYPE'] = $arCurrentValues['IBLOCK_TYPE'];
}
$rsIBlock = CIBlock::GetList(
    array('SORT' => 'ASC'),
    $arFilter
);
while($iblock = $rsIBlock->Fetch()) {
    $arInfoBlocks[$iblock['ID']] = '['.$iblock['ID'].'] '.$iblock['NAME'];
}


$arComponentParameters = array(
    'PARAMETERS' => array(

        'IBLOCK_TYPE' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Выберите тип инфоблока',
            'TYPE' => 'LIST',
            'VALUES' => $arIBlockType,
            'REFRESH' => 'Y',
        ),

        'IBLOCK_ID' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Выберите инфоблок',
            'TYPE' => 'LIST',
            'VALUES' => $arInfoBlocks,
        ),

        'ELEMENT_COUNT' => array(
            'PARENT' => 'BASE',
            'NAME' => 'Количество  элементов в странице',
            'TYPE' => 'STRING',
            'DEFAULT' => '4',
        ),

        'ELEMENT_URL' => array(
            'PARENT' => 'URL_TEMPLATES',
            'NAME' => 'URL, ведущий на страницу с содержимым элемента',
            'TYPE' => 'STRING',
            'DEFAULT' => '/simplenews.comp/?ID=#ELEMENT_ID#/'
        ),


        'CACHE_TIME'  =>  array(
            'DEFAULT'=>3600
        ),
    ),
);