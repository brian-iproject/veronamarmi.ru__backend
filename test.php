<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
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
		"USE_CAPTCHA" => "N",
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
		"YM_GOAL_ID_BUTTON_CLICK" => "JS-FORM",
		"YM_GOAL_ID_SUCCESS" => "JS-FORM-USPESHNO"
	),
	false
);?>


<div class="profiles-list">
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/1a4/1.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/480/2.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/44a/3.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/348/4.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/3fb/5.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/e2f/6.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/59e/7.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/286/8.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/582/a.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/fa6/b.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/b39/c.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/40b/d.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/316/e.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/0a3/f.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/d4b/g.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/970/k.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/95f/l.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/32c/m.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/d38/n.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/459/o.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/9f4/p.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/e87/r.jpeg" alt="">
		</div>
	</div>
	<div class="profiles-list__item">
		<div class="profiles-list__item-inner">
			<img src="/upload/medialibrary/06b/z.jpeg" alt="">
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>