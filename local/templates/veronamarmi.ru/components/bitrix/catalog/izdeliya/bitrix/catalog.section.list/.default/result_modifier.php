<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['SECTIONS'] as &$arSection) {
    $arResized = CFile::ResizeImageGet(
        $arSection["PICTURE"],
        Array('width' => 360, 'height' => 183),
        BX_RESIZE_IMAGE_EXACT,
        true,
        false
    );
    $arSection['PX_PICTURE'] = array_change_key_case($arResized, CASE_UPPER);
    unset($arResized);
}