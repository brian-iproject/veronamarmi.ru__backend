<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
foreach ($arResult['ITEMS'] as &$arItem) {
    $arResized = CFile::ResizeImageGet(
        $arItem["PREVIEW_PICTURE"],
        Array('width' => 280, 'height' => 390),
        BX_RESIZE_IMAGE_EXACT,
        true,
        false
    );
    $arItem['PX_PREVIEW_PICTURE'] = array_change_key_case($arResized, CASE_UPPER);
    unset($arResized);
}