<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контактная информация компании \"ВеронаМарми\", адрес офиса, схема проезда, время работы");
$APPLICATION->SetPageProperty("description", "Контактная информация");
$APPLICATION->SetTitle("Контакты");
?><div class="container--fluid">
 <br>
	<h2>Схема прохода к павильону А32 в ТЦ «Элитстрой»</h2>
	<div align="center">
		<img width="90%" alt="схема прохода" src="/upload/medialibrary/c67/schema.jpg">
	</div>
	<br>
</div>
<div class="map-wrapper">
	<div class="container--fluid map-wrapper__info-container">
		<div class="map-wrapper__contacts-info">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/includes-area/contacts/contacts-info.php"
	)
);?>
		</div>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(0=>"ZOOM",1=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.684316436821106;s:10:\"yandex_lon\";d:37.41277127343481;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.412814033377;s:3:\"LAT\";d:55.684078446002;s:4:\"TEXT\";s:23:\"Главный офис\";}}}",
		"MAP_HEIGHT" => "580",
		"MAP_ID" => "MAP_CONTACTS",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_DBLCLICK_ZOOM",1=>"ENABLE_DRAGGING",)
	)
);?>
</div>

<div class="container--fluid">
	<div class="h3" style="text-align: left">
		 Обратная связь
	</div>
	 <?$APPLICATION->IncludeComponent(
	"pixelplus:feedback",
	"site-form",
	Array(
		"ADDDATA_IN_INFOBLOCK" => "Y",
		"ADDDATA_IN_INFOBLOCK_NAME" => "#NAME# - #FULL_TIME#",
		"ADD_NA" => "N",
		"ADD_PLACEHOLDER" => "Y",
		"AJAX_VARIBLE" => "",
		"BASE_IBLOCK_ID" => array(0=>"2",1=>"3",),
		"BASE_ID" => $_REQUEST["ID"],
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "site-form",
		"EVENT_MESSAGE_ID" => array(0=>"11",1=>"",),
		"EVENT_NAME" => "PIXELPLUS_FEEDBACK",
		"FIELDS_LIST" => array(0=>"NAME",1=>"PHONE",2=>"EMAIL",3=>"MESSAGE",4=>"",),
		"FIELDS_LIST_REQUIRED" => array(0=>"NAME",1=>"PHONE",2=>"",),
		"FIELDS_PREFIX" => "FEEDBACK",
		"FORM_CSS_CLASS" => "site-form--two-column",
		"FORM_DESCRIPTION" => "",
		"FORM_NAME" => "",
		"IBLOCK_ID" => "5",
		"PARAM_FOR_PT" => array(),
		"PREVIEW_TEXT_FIELDS" => "MESSAGE",
		"PX_AJAX" => "N",
		"SECTION_ID" => "55",
		"SHOW_ERROR_LIST" => "N",
		"USE_BASE" => "N",
		"USE_CAPTCHA" => "Y",
		"USE_CSS_FILE" => "Y",
		"USE_JS_FILE" => "N",
		"WRITE_TO_DETAIL_TEXT" => "N",
		"YM_COUNTER_ID" => "8100544",
		"YM_GOAL_ID_SUBMIT" => "JS-FORM",
		"YM_GOAL_ID_SUCCESS" => "JS-FORM-USPESHNO"
	)
);?>
<br>
<div class="table-price">
	<div class="table-price__container">
		<table class="table-price__table">
<thead>
<tr>
<td colspan="3" style="text-align: center">Территория обслуживания</td>
</tr>
</thead>
<tbody>
<tr>
<td style="width: 33.33%; text-align: center"><a href="/balashikha/">Балашиха</a></td>
<td style="width: 33.33%; text-align: center"><a href="/zvenigorod/">Звенигород</a></td>
<td style="width: 33.33%; text-align: center"><a href="/krasnogorsk/">Красногорск</a></td>
</tr>
<tr>
<td style="width: 33.33%; text-align: center"><a href="/istra/">Истра</a></td>
<td style="width: 33.33%; text-align: center"> </td>
<td style="width: 33.33%; text-align: center"> </td>
</tr>
</tbody>
</table>
</div>
</div>

</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>