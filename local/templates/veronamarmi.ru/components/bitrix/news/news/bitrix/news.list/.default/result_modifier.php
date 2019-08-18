<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult['ITEMS'] as &$arItem) {
    if ($arItem["PREVIEW_PICTURE"]) {
        $arResized = CFile::ResizeImageGet(
            $arItem["PREVIEW_PICTURE"],
            Array('width' => 400, 'height' => 400),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true,
            Array(
                "name" => "sharpen",
                "precision" => 0
            ),
            false,
            50
        );
        foreach ($arResized as $key => $value) {
            $arItem["PX_PREVIEW_PICTURE"][strtoupper($key)] = $value;
        }
    }
}

$arResult["SEO"]["TITLE"] = $APPLICATION->GetPageProperty("title");
$arResult["SEO"]["SECTION_PAGE_URL"] = $APPLICATION->GetCurPage();
$arResult["SEO"]["PAGE_NUM"] = $arResult["NAV_RESULT"]->NavPageNomer;
$arResult["SEO"]["PAGEN"] = $arResult["NAV_RESULT"]->PAGEN;

$this->__component->SetResultCacheKeys(Array("SEO"));