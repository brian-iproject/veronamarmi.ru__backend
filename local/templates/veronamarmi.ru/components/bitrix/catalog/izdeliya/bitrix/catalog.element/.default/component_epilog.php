<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
foreach ($arResult['SECTION']['PATH'] as $arSection) {
    $APPLICATION->AddChainItem($arSection['NAME'], $arSection['SECTION_PAGE_URL']);
}
$APPLICATION->AddChainItem($arResult['NAME']);

$GLOBALS['CATALOG_CURRENT_SECTION_ID'] = $arResult['IBLOCK_SECTION_ID'];