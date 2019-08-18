<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
foreach ($arResult['SECTION']['PATH'] as $arSection) {
    $APPLICATION->AddChainItem($arSection['NAME'], $arSection['SECTION_PAGE_URL']);
}