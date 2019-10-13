<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$GLOBALS["menuFilter"] = array("UF_HIDE_FROM_MENU" => 0);
$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"custom:menu.sections",
	"", 
	array(
		"IS_SEF" => "Y",
		"ID" => "",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "2",
		"DEPTH_LEVEL" => "2",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"SEF_BASE_URL" => "/izdeliya/",
		"SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
        "FILTER_NAME" => "menuFilter"
	),
	false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);