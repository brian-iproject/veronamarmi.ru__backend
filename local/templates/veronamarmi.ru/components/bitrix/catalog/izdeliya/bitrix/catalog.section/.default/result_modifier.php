<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
foreach ($arResult['ITEMS'] as &$arItem) {
    $arResized = CFile::ResizeImageGet(
        $arItem["DETAIL_PICTURE"],
        Array('width' => 469, 'height' => 647),
        BX_RESIZE_IMAGE_EXACT,
        true,
        false
    );
    $arItem['PX_PREVIEW_PICTURE'] = array_change_key_case($arResized, CASE_UPPER);
    unset($arResized);
}
if ($arResult["ID"] > 0) {
    $title = $arResult["NAME"];
    if ($arResult["IPROPERTY_VALUES"]["SECTION_META_TITLE"]) {
        $title = $arResult["IPROPERTY_VALUES"]["SECTION_META_TITLE"];
    }
} else {
    $title = $APPLICATION->GetPageProperty("title");
}

if ($arResult["UF_PAGE_BANNER"]) {
    $arSelect = ["ID", "NAME", "PROPERTY_ICONS", "PROPERTY_IMAGE_768", "PROPERTY_IMAGE_1200", "PROPERTY_IMAGE_1920", "PROPERTY_H1"];
    $arFilter = ["IBLOCK_ID" => 17, "ID" => $arResult["UF_PAGE_BANNER"]];
    $res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
    if ($arResult["PAGE_BANNER"] = $res->GetNext()) {

        $arResult["PAGE_BANNER"]["IMAGE_768"] = CFile::GetPath($arResult["PAGE_BANNER"]["PROPERTY_IMAGE_768_VALUE"]);
        $arResult["PAGE_BANNER"]["IMAGE_1200"] = CFile::GetPath($arResult["PAGE_BANNER"]["PROPERTY_IMAGE_1200_VALUE"]);
        $arResult["PAGE_BANNER"]["IMAGE_1920"] = CFile::GetPath($arResult["PAGE_BANNER"]["PROPERTY_IMAGE_1920_VALUE"]);

    }
    $arResult["HIDE_H1"] = "Y";
}

$arResult["SEO"]["TITLE"] = $title;
$arResult["SEO"]["SECTION_PAGE_URL"] = $arResult["SECTION_PAGE_URL"];
$arResult["SEO"]["PAGE_NUM"] = $arResult["NAV_RESULT"]->NavPageNomer;
$arResult["SEO"]["PAGEN"] = $arResult["NAV_RESULT"]->PAGEN;

$this->__component->SetResultCacheKeys(Array("UF_VARIANTS_STONES", "UF_VARIANTS_STONES_E", "UF_CALL2ACTION_TITLE", "UF_FAQ", "SEO", "HIDE_H1"));