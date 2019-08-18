<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$GLOBALS['CATALOG_STONES_SECTION_ID'] = $arResult['UF_VARIANTS_STONES'];
$GLOBALS['CATALOG_STONES_ELEMET_ID'] = $arResult['UF_VARIANTS_STONES_E'];
$GLOBALS['CATALOG_PAGE_NUM'] = $arResult["SEO"]["PAGE_NUM"];

if ($arResult["SEO"]["PAGE_NUM"] > 1) {
    $APPLICATION->SetPageProperty("title", $arResult["SEO"]["TITLE"] . " — страница № " . $arResult["SEO"]["PAGE_NUM"]);
    $APPLICATION->SetPageProperty("canonical", "https://".SITE_SERVER_NAME.$arResult["SEO"]["SECTION_PAGE_URL"]);
} else if ($arResult["SEO"]["PAGE_NUM"] != $arResult["SEO"]["PAGEN"]) {
    $APPLICATION->SetPageProperty("canonical", "https://".SITE_SERVER_NAME.$arResult["SEO"]["SECTION_PAGE_URL"]);
} else {
    $APPLICATION->SetPageProperty("title", $arResult["SEO"]["TITLE"]);
}