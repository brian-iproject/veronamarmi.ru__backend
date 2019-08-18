<?
define("STOP_STATISTICS", true);
define("PUBLIC_AJAX_MODE", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?$APPLICATION->IncludeComponent(
    "pixelplus:feedback",
    "site-form",
    array(
        "ADDDATA_IN_INFOBLOCK" => "Y",
        "ADD_PLACEHOLDER" => "Y",
        "AJAX_VARIBLE" => "",
        "CACHE_TIME" => "0",
        "CACHE_TYPE" => "A",
        "EVENT_MESSAGE_ID" => array(
            0 => "9"
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
        "FIELDS_PREFIX" => "CALLBACK_",
        "FORM_NAME" => "Заказать звонок!",
        "FORM_DESCRIPTION" => "Оставьте заявку и наш специалист свяжется с вами в ближайшее время!",
        "PARAM_FOR_PT" => array(
        ),
        "PX_AJAX" => "N",
        "SHOW_ERROR_LIST" => "N",
        "USE_BASE" => "N",
        "USE_CAPTCHA" => "N",
        "USE_CSS_FILE" => "Y",
        "USE_JS_FILE" => "N",
        "COMPONENT_TEMPLATE" => "site-form",
        "IBLOCK_ID" => "5",
        "ADDDATA_IN_INFOBLOCK_NAME" => "#NAME# - #FULL_TIME#",
        "SECTION_ID" => "54",
        "ADD_NA" => "N",
        "PREVIEW_TEXT_FIELDS" => "",
        "WRITE_TO_DETAIL_TEXT" => "N",
        "YM_COUNTER_ID" => "8100544",
        "YM_GOAL_ID_SUBMIT" => "JS-ZVONOK-SHAPKA",
        "YM_GOAL_ID_SUCCESS" => "JS-ZVONOK-SHAPKA-USPESHNO"
    ),
    false
);?>
<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>