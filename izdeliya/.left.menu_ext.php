<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"custom:menu.sections",
	"", 
	array(
		"IS_SEF" => "Y",
		"ID" => "",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "2",
		"DEPTH_LEVEL" => "1",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"SEF_BASE_URL" => "/izdeliya/",
		"SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);