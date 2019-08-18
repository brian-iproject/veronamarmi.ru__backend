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
$arResult["SEO"]["TITLE"] = $title;
$arResult["SEO"]["SECTION_PAGE_URL"] = $arResult["SECTION_PAGE_URL"];
$arResult["SEO"]["PAGE_NUM"] = $arResult["NAV_RESULT"]->NavPageNomer;
$arResult["SEO"]["PAGEN"] = $arResult["NAV_RESULT"]->PAGEN;

$this->__component->SetResultCacheKeys(Array("UF_VARIANTS_STONES", "UF_VARIANTS_STONES_E", "SEO"));