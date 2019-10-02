<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

if ($arResult['DISPLAY_PROPERTIES']['CURRENCY']['VALUE']) {
    $arResult['PX_PRICES'] = [
        'BASE' => [
            'CURRENCY' => $arResult['DISPLAY_PROPERTIES']['CURRENCY']['VALUE'],
            'VALUE' => $arResult['PROPERTIES']['PRICE']['VALUE'],
            'VALUE_PRINT' => number_format($arResult['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ' ),
            'SYMBOL' => $arResult['PX_CURRENCY'][$arResult['DISPLAY_PROPERTIES']['CURRENCY']['VALUE']]['UF_SYMBOL']
        ]
    ];
    if ($arResult['PX_PRICES']['BASE']['CURRENCY'] != 'RUB') {
        $arResult['PX_PRICES']['RUB'] = [
            'CURRENCY' => $arResult['PX_CURRENCY']['RUB']['UF_XML_ID'],
            'VALUE' => $arResult['PX_PRICES']['BASE']['VALUE'] * $arResult['PX_CURRENCY'][$arResult['DISPLAY_PROPERTIES']['CURRENCY']['VALUE']]['UF_VALUE'],
            'VALUE_PRINT' => number_format($arResult['PX_PRICES']['BASE']['VALUE'] * $arResult['PX_CURRENCY'][$arResult['DISPLAY_PROPERTIES']['CURRENCY']['VALUE']]['UF_VALUE'], 0, '.', ' ' ),
            'SYMBOL' => $arResult['PX_CURRENCY']['RUB']['UF_SYMBOL']
        ];
    }
}

if ($arResult["DETAIL_PICTURE"]) {
    $arResized = CFile::ResizeImageGet(
        $arResult["DETAIL_PICTURE"],
        Array('width' => 767, 'height' => 607),
        BX_RESIZE_IMAGE_EXACT,
        true,
        false
    );
    $arResult['PX_DETAIL_PICTURE'] = array_change_key_case($arResized, CASE_UPPER);
    unset($arResized);
}
if (!empty($arResult['MORE_PHOTO'])) {
	$arResult['PX_PROPERTIES']["MORE_PHOTO"] = array();
	foreach ($arResult['MORE_PHOTO'] as $keyFile => $arFile) {
		$arResult['PX_PROPERTIES']["MORE_PHOTO"][$keyFile]['ORIGINAL'] = $arFile;
		$arResized = CFile::ResizeImageGet(
			$arFile,
			Array('width' => 90, 'height' => 70),
            BX_RESIZE_IMAGE_EXACT,
			true,
			false
		);
		$arResult['PX_PROPERTIES']["MORE_PHOTO"][$keyFile]['RESIZED'] = array_change_key_case($arResized, CASE_UPPER);
		unset($arResized);
	}
}

$pageTitle = $arResult['NAME'];
if (strpos($arResult['NAME'], $arResult['SECTION']['PATH'][0]['NAME']) === false && !$arResult['PROPERTIES']['HIDE_PREFIX_NAME']['VALUE']) {
    $pageTitle = $arResult['SECTION']['PATH'][0]['NAME'] . ' ' . $arResult['NAME'];
}
if ($arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"]) {
    $pageTitle = $arResult["IPROPERTY_VALUES"]["SECTION_META_TITLE"];
}
$arResult["SEO"]["PAGE_TITLE"] = $pageTitle;
$this->__component->SetResultCacheKeys(Array("SEO"));