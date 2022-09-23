<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

global $APPLICATION;
$APPLICATION->SetPageProperty("title", "Условия доставки при покупке в «Стронг Инструмент» город #REGION_NAME#");
$APPLICATION->SetPageProperty("keywords", "инструмент оптом #REGION_NAME#, купить ручной инструмент оптом, инструмент цена, расходные материалы #REGION_NAME#;");
$APPLICATION->SetPageProperty("description", "Условия доставки. «Стронг Инструмент» город #REGION_NAME# – крупнейшее производственное предприятие, специализирующееся на изготовлении и оптовой реализации алмазного, ручного и расходного инструмента. Используемые расходные материалы и техника отличаются безупречным качеством, так как мы используем профессиональные европейские оборудования. Это дает возможность изготавливать и продавать действительно надежную продукцию, которая отвечает не только высоким техническим характеристикам, но и удовлетворяет текущие запросы потребителей.");
$APPLICATION->SetTitle("Условия доставки");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "delevery_list",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0=>"",1=>"",),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "62",
        "IBLOCK_TYPE" => "delivery",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(0=>"",1=>"",),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>
<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
        "AREA_FILE_SHOW" => "page",
        "AREA_FILE_SUFFIX" => "inc",
        "AREA_FILE_RECURSIVE" => "Y",
        "EDIT_TEMPLATE" => "/ajax/standard.php"
    )
);?>


 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>