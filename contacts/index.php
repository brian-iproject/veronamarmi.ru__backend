<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контактная информация компании \"ВеронаМарми\", адрес офиса, схема проезда, время работы");
$APPLICATION->SetPageProperty("description", "Контактная информация");
$APPLICATION->SetTitle("Контакты");
?>
<div class="map-wrapper">
	<div class="container--fluid map-wrapper__info-container">
		<div class="map-wrapper__contacts-info">
      <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => "/includes-area/contacts/contacts-info.php",
          "EDIT_TEMPLATE" => ""
      ),
          false
      );?>
		</div>
	</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.75775311310436;s:10:\"yandex_lon\";d:37.635319364418024;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.635415923942546;s:3:\"LAT\";d:55.75783629947719;s:4:\"TEXT\";s:23:\"Главный офис\";}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "580",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "MAP_CONTACTS",
		"API_KEY" => ""
	),
	false
);?>
</div>
<div class="container--fluid">
  <div class="h3" style="text-align: left">Обратная связь</div>
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
			0 => "11",
			1 => "",
		),
		"EVENT_NAME" => "PIXELPLUS_FEEDBACK",
		"FIELDS_LIST" => array(
			0 => "NAME",
			1 => "PHONE",
			2 => "EMAIL",
			3 => "MESSAGE",
			4 => "",
		),
		"FIELDS_LIST_REQUIRED" => array(
			0 => "NAME",
			1 => "PHONE",
			2 => "",
		),
		"FIELDS_PREFIX" => "FEEDBACK",
		"FORM_NAME" => "",
		"PARAM_FOR_PT" => array(
		),
		"PX_AJAX" => "N",
		"SHOW_ERROR_LIST" => "N",
		"USE_BASE" => "N",
		"USE_CAPTCHA" => "Y",
		"USE_CSS_FILE" => "Y",
		"USE_JS_FILE" => "N",
		"COMPONENT_TEMPLATE" => "site-form",
		"IBLOCK_ID" => "5",
		"ADDDATA_IN_INFOBLOCK_NAME" => "#NAME# - #FULL_TIME#",
		"SECTION_ID" => "55",
		"ADD_NA" => "N",
		"PREVIEW_TEXT_FIELDS" => "MESSAGE",
		"WRITE_TO_DETAIL_TEXT" => "N",
		"FORM_DESCRIPTION" => "",
		"BASE_IBLOCK_ID" => array(
			0 => "2",
			1 => "3",
		),
		"BASE_ID" => $_REQUEST["ID"],
		"FORM_CSS_CLASS" => "site-form--two-column",
		"YM_COUNTER_ID" => "8100544",
		"YM_GOAL_ID_SUBMIT" => "JS-FORM",
		"YM_GOAL_ID_SUCCESS" => "JS-FORM-USPESHNO"
	),
	false
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>