<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if ($arResult["SEO"]["PAGE_NUM"] > 1) {
    $APPLICATION->SetPageProperty("title", $arResult["SEO"]["TITLE"] . " — страница № " . $arResult["SEO"]["PAGE_NUM"]);
    $APPLICATION->SetPageProperty("canonical", "https://".SITE_SERVER_NAME.$arResult["SEO"]["SECTION_PAGE_URL"]);
} else if ($arResult["SEO"]["PAGE_NUM"] != $arResult["SEO"]["PAGEN"]) {
    $APPLICATION->SetPageProperty("canonical", "https://".SITE_SERVER_NAME.$arResult["SEO"]["SECTION_PAGE_URL"]);
} else {
    $APPLICATION->SetPageProperty("title", $arResult["SEO"]["TITLE"]);
}