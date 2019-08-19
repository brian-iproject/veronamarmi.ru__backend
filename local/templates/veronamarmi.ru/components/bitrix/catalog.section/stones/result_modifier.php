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

    /*
     * Цепочку навигации вызываем для этого компонента только для получения названия раздела,
     * После использования удаляем, чтобы не выводилось в цепочке навигации.
    */
    if ($arResult['PATH'][0]['NAME']) {
        if (strpos($arItem['NAME'], $arResult['ROOT_SECTION_NAME']) === false && !$arItem['PROPERTIES']['HIDE_PREFIX_NAME']['VALUE']) {
            $arItem['NAME'] = $arResult['PATH'][0]['NAME'] . ' ' . $arItem['NAME'];
        }
    }
}
unset($arResult['PATH']);