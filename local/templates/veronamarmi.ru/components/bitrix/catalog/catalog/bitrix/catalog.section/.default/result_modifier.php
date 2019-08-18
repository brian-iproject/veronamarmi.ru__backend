<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
foreach ($arResult['ITEMS'] as &$arItem) {
    $arResized = CFile::ResizeImageGet(
        $arItem["PREVIEW_PICTURE"],
        Array('width' => 432, 'height' => 253),
        BX_RESIZE_IMAGE_EXACT,
        true,
        false
    );
    $arItem['PX_PREVIEW_PICTURE'] = array_change_key_case($arResized, CASE_UPPER);
    unset($arResized);

    if (strpos($arItem['NAME'], $arResult['PATH'][0]['NAME']) === false && !$arItem['PROPERTIES']['HIDE_PREFIX_NAME']['VALUE']) {
        $arItem['NAME'] = $arResult['PATH'][0]['NAME'] . ' ' . $arItem['NAME'];
    }
}

$title = $arResult["NAME"];
if ($arResult["IPROPERTY_VALUES"]["SECTION_META_TITLE"]) {
    $title = $arResult["IPROPERTY_VALUES"]["SECTION_META_TITLE"];
}
$arResult["SEO"]["TITLE"] = $title;
$arResult["SEO"]["SECTION_PAGE_URL"] = $arResult["SECTION_PAGE_URL"];
$arResult["SEO"]["PAGE_NUM"] = $arResult["NAV_RESULT"]->NavPageNomer;
$arResult["SEO"]["PAGEN"] = $arResult["NAV_RESULT"]->PAGEN;

$this->__component->SetResultCacheKeys(Array("SEO"));