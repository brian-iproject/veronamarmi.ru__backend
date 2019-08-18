<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use \Bitrix\Main\IO\File;
foreach($arResult["ITEMS"] as &$arItem) {
    if (!empty($arItem["PROPERTIES"]["ICON"]["VALUE"])) {
        $arItem["PROPERTIES"]["ICON"]["HTML"] = File::getFileContents($_SERVER["DOCUMENT_ROOT"] . CFile::GetPath($arItem["PROPERTIES"]["ICON"]["VALUE"]));
    }
}