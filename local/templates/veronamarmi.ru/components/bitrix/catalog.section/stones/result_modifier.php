<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;
Loader::includeModule("highloadblock");

$hlbl = 3;
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$rsData = $entity_data_class::getList(array(
    "select" => array("*"),
    "order" => array(),
    "filter" => array()
));

while($arData = $rsData->Fetch()){
    $arResult['PX_CURRENCY'][$arData['UF_XML_ID']] = $arData;
}

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
        if (strpos($arItem['NAME'], $arResult['PATH'][0]['NAME']) === false && !$arItem['PROPERTIES']['HIDE_PREFIX_NAME']['VALUE']) {
            $arItem['NAME'] = $arResult['PATH'][0]['NAME'] . ' ' . $arItem['NAME'];
        }

        $arItem['PROPERTIES']['SECTION_STONE_TYPE']['VALUE'] = $arResult['PATH'][0]['NAME'];
    } else {
        $resSect = CIBlockElement::GetElementGroups($arItem['ID'], true, ['ID', 'NAME']);
        while($arResSect = $resSect->Fetch())
            $arItem['SECTION']['PATH'][] = $arResSect;

        if (strpos($arItem['NAME'], $arItem['SECTION']['PATH'][0]['NAME']) === false && !$arItem['PROPERTIES']['HIDE_PREFIX_NAME']['VALUE']) {
            $arItem['NAME'] = $arItem['SECTION']['PATH'][0]['NAME'] . ' ' . $arItem['NAME'];
        }

        $arItem['PROPERTIES']['SECTION_STONE_TYPE']['VALUE'] = $arItem['SECTION']['PATH'][0]['NAME'];
    }

    if ($arItem['DISPLAY_PROPERTIES']['CURRENCY']['VALUE'] && $arItem['PROPERTIES']['PRICE']['VALUE']) {
        $arItem['PX_PRICES'] = [
            'BASE' => [
                'CURRENCY' => $arItem['DISPLAY_PROPERTIES']['CURRENCY']['VALUE'],
                'VALUE' => $arItem['PROPERTIES']['PRICE']['VALUE'],
                'VALUE_PRINT' => number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ' ),
                'SYMBOL' => $arResult['PX_CURRENCY'][$arItem['DISPLAY_PROPERTIES']['CURRENCY']['VALUE']]['UF_SYMBOL']
            ]
        ];
        if ($arItem['PX_PRICES']['BASE']['CURRENCY'] != 'RUB') {
            $arItem['PX_PRICES']['RUB'] = [
                'CURRENCY' => $arResult['PX_CURRENCY']['RUB']['UF_XML_ID'],
                'VALUE' => $arItem['PX_PRICES']['BASE']['VALUE'] * $arResult['PX_CURRENCY'][$arItem['DISPLAY_PROPERTIES']['CURRENCY']['VALUE']]['UF_VALUE'],
                'VALUE_PRINT' => number_format($arItem['PX_PRICES']['BASE']['VALUE'] * $arResult['PX_CURRENCY'][$arItem['DISPLAY_PROPERTIES']['CURRENCY']['VALUE']]['UF_VALUE'], 0, '.', ' ' ),
                'SYMBOL' => $arResult['PX_CURRENCY']['RUB']['UF_SYMBOL']
            ];
        }
    }
}
unset($arResult['PATH']);