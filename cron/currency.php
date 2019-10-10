<?
$_SERVER["DOCUMENT_ROOT"] = "/home/mramorland/veronamarmi.ru/docs";
define("STOP_STATISTICS", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/classes/general/xml.php');

global $USER;
global $APPLICATION;
$arResult = array();

use Bitrix\Main\Loader;
Loader::includeModule("highloadblock");
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

$hlbl = 3; // Указываем ID нашего highloadblock блока к которому будет делать запросы.
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$rsData = $entity_data_class::getList(array(
    "select" => array("*"),
    "order" => array(),
    "filter" => array()  // Задаем параметры фильтра выборки
));

while($arData = $rsData->Fetch()) {
    $arResult['CURRENCIES'][$arData['UF_XML_ID']] = $arData;
}

$strQueryText = QueryGetData(
    "www.cbr.ru",
    '443',
    "/scripts/XML_daily.asp",
    false,
    $error_number,
    $error_text,
    "GET",
    "ssl://"
);

$xml = new SimpleXMLElement($strQueryText);

foreach ($xml->Valute as $currency) {

    $currency = get_object_vars($currency);
    $arResult['CBRF_CURRENCIES'][$currency['CharCode']] = $currency;
}

file_put_contents("/home/mramorland/veronamarmi.ru/docs/currency.txt", print_r($arResult['CBRF_CURRENCIES'], true), FILE_APPEND);

foreach ($arResult['CBRF_CURRENCIES'] as $currencyCode => $currency) {
    if (!in_array($currency['CharCode'], array('USD', 'EUR')))
        continue;
    $data = array(
        "UF_VALUE"=> str_replace(',', '.', $currency['Value'])/$currency['Nominal'],
        "UF_NAME"=> $currency['Name'],
        "UF_XML_ID"=> $currency['CharCode']
    );
    if ($arResult['CURRENCIES'][$currencyCode]) {
        $result = $entity_data_class::update($arResult['CURRENCIES'][$currencyCode]['ID'], $data);
    } else {
        $result = $entity_data_class::add($data);
    }
}
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>