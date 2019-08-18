<?
define("STOP_STATISTICS", true);
define("PUBLIC_AJAX_MODE", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?
$arIDs = explode('/', $_REQUEST["ID"]);
$APPLICATION->IncludeComponent(
    "pixelplus:feedback",
    "site-form",
    array(
        "ADDDATA_IN_INFOBLOCK" => "Y",
        "ADD_PLACEHOLDER" => "Y",
        "AJAX_VARIBLE" => "",
        "CACHE_TIME" => "0",
        "CACHE_TYPE" => "A",
        "EVENT_MESSAGE_ID" => array(
            0 => "10",
            1 => "",
        ),
        "EVENT_NAME" => "PIXELPLUS_FEEDBACK",
        "FIELDS_LIST" => array(
            0 => "NAME",
            1 => "PHONE",
            2 => "",
        ),
        "FIELDS_LIST_REQUIRED" => array(
            0 => "NAME",
            1 => "PHONE",
            2 => "",
        ),
        "FIELDS_PREFIX" => "ORDER",
        "FORM_NAME" => "Отправить заявку",
        "PARAM_FOR_PT" => array(
            0 => "ID"
        ),
        "PX_AJAX" => "N",
        "SHOW_ERROR_LIST" => "N",
        "USE_BASE" => "Y",
        "USE_CAPTCHA" => "N",
        "USE_CSS_FILE" => "Y",
        "USE_JS_FILE" => "N",
        "COMPONENT_TEMPLATE" => "site-form",
        "IBLOCK_ID" => "6",
        "ADDDATA_IN_INFOBLOCK_NAME" => "Заказ #ID#",
        "SECTION_ID" => " ",
        "ADD_NA" => "N",
        "PREVIEW_TEXT_FIELDS" => "",
        "WRITE_TO_DETAIL_TEXT" => "N",
        "FORM_DESCRIPTION" => "Оставьте заявку и наш менеджер свяжется с вами в ближайшее время!",
        "BASE_IBLOCK_ID" => $arIDs[0],
        "BASE_ID" => $arIDs[1],
        "YM_COUNTER_ID" => "8100544",
        "YM_GOAL_ID_SUBMIT" => "",
        "YM_GOAL_ID_SUCCESS" => "JS-ZAKAZ-KAMNI-USPESHNO"
    ),
    false
);?>
<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>