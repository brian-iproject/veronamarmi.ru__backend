<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach($arResult["ITEMS"] as &$arItem) {
    if (!empty($arItem['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE'])) {
        $arItem['PX_PROPERTIES']["MORE_PHOTO"] = array();
        foreach ($arItem['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE'] as $keyFile => $arFile) {
            $arItem['PX_PROPERTIES']["MORE_PHOTO"][$keyFile]['ORIGINAL'] = $arFile;
            $arResized = CFile::ResizeImageGet(
                $arFile,
                Array('width' => 377, 'height' => 238),
                BX_RESIZE_IMAGE_EXACT,
                true,
                false
            );
            $arItem['PX_PROPERTIES']["MORE_PHOTO"][$keyFile]['RESIZED'] = array_change_key_case($arResized, CASE_UPPER);
            unset($arResized);
        }
    }
}