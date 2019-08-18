<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
	"GROUPS" => array(
		"FIELDS_LIST_GROUP" => array(
			"NAME" => getMessage('FIELDS_LIST_GROUP')
		),
		"ADDDATA_IN_INFOBLOCK"=> array(
			"NAME" => getMessage('ADDDATA_IN_INFOBLOCK')
		),
		"ADDDATA_IN_WEBFORM"=> array(
			"NAME" => getMessage('ADDDATA_IN_WEBFORM')
		),
		"USE_BASE"=> array(
			"NAME" => getMessage('USE_BASE')
		),
	),
	"PARAMETERS" => array(
		"FIELDS_PREFIX" => array(
			"PARENT" => "BASE",
			"NAME" => getMessage('FIELDS_PREFIX'),
			"TYPE" => "STRING",
		),
		"USE_CAPTCHA" => array(
			"PARENT" => "BASE",
			"NAME" => getMessage('USE_CAPTCHA'),
			"TYPE" => "CHECKBOX",
		),	  
		"EVENT_NAME" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("MFP_EVENT_NAME"),
			"TYPE"=>"STRING",
		),
		"EVENT_MESSAGE_ID" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("MFP_EMAIL_TEMPLATES"),
			"TYPE"=>"STRING",
			"MULTIPLE"=>"Y"
		),
		"PARAM_FOR_PT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("PARAM_FOR_PT"),
			"TYPE"=>"STRING",
			"MULTIPLE"=>"Y"
		),
		"CACHE_TIME"=>Array(),
		"AJAX_VARIBLE"=>Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("AJAX_VARIBLE"),
			"TYPE"=>"STRING",
			"MULTIPLE"=>"N"
		),
		"USE_CSS_FILE"=>Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("USE_CSS_FILE"),
			"TYPE"=>"CHECKBOX",
		),
		"USE_JS_FILE"=>Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("USE_JS_FILE"),
			"TYPE"=>"CHECKBOX",
		),
		"ADD_PLACEHOLDER"=>Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("ADD_PLACEHOLDER"),
			"TYPE"=>"CHECKBOX",
		),
		"PX_AJAX"=>Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("PX_AJAX"),
			"TYPE"=>"CHECKBOX",
		),
   )
);

if ($arCurrentValues['FIELDS_LIST']) {
	foreach ($arCurrentValues['FIELDS_LIST'] as $value) {
		if (trim($value) != "") {
			if ($arFieldsList[$value]) {
				$arReqFieldsList[$value] = $arFieldsList[$value];
			} else {
				$arReqFieldsList[$value] = $value;
			}
		}
	}

	$arComponentParameters['PARAMETERS']["FIELDS_LIST_REQUIRED"] = array(
		"PARENT" => "FIELDS_LIST_GROUP",
		"NAME" => getMessage('FIELDS_LIST_REQUIRED'),
		"TYPE" => "LIST",
		"VALUES" => $arReqFieldsList,
		"REFRESH" => "Y",
		"ADDITIONAL_VALUES"=>"Y",
		"MULTIPLE"=>"Y"
	);
}

if(CModule::IncludeModule("iblock")) {
	$rsIBlock = CIBlock::GetList(Array("sort" => "asc"), Array("ACTIVE"=>"Y"));
	while($arr=$rsIBlock->Fetch())
		$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];

	$arComponentParameters['PARAMETERS']["ADDDATA_IN_INFOBLOCK"] = array(
		"PARENT" => "ADDDATA_IN_INFOBLOCK",
		"NAME" => getMessage('ADDDATA_IN_INFOBLOCK'),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "N",
		"REFRESH" => "Y"
	);
	
	$arComponentParameters['PARAMETERS']["USE_BASE"] = array(
		"PARENT" => "USE_BASE",
		"NAME" => getMessage('USE_BASE'),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "N",
		"REFRESH" => "Y"
	);
	
	
	
	if ($arCurrentValues['ADDDATA_IN_INFOBLOCK'] == "Y") {
		$arComponentParameters['PARAMETERS']["IBLOCK_ID"] = array(
			"PARENT" => "ADDDATA_IN_INFOBLOCK",
			"NAME" => getMessage('IBLOCK_ID'),
			"TYPE" => "LIST",
			"VALUES" => $arIBlock,
			"REFRESH" => "Y"
		);
		$arComponentParameters['PARAMETERS']["ADDDATA_IN_INFOBLOCK_NAME"] = array(
			"PARENT" => "ADDDATA_IN_INFOBLOCK",
			"NAME" => getMessage('ADDDATA_IN_INFOBLOCK_NAME'),
			"TYPE" => "STRING"
		);
		
		if (!$arCurrentValues['IBLOCK_ID']) {
			list($arCurrentValues['IBLOCK_ID'],$val) = each($arIBlock);
			reset($arIBlock);
		}
		if ($arCurrentValues['IBLOCK_ID'] > 0) {
			$arSectionList = Array(" "=>"-");
			$res = CIBlockSection::GetList(
				array("left_margin"=>"asc"),
				array(
					"ACTIVE"=>"Y",
					"IBLOCK_ID"=>$arCurrentValues["IBLOCK_ID"],
				),
				false,
				array("ID", "NAME", "DEPTH_LEVEL")
			);
			$arResult["SECTION_LIST"] = array();
			while ($arSection = $res->GetNext()) {
				$arSection["NAME"] = str_repeat(" . ", $arSection["DEPTH_LEVEL"]).$arSection["NAME"];
				$arSectionList[$arSection["ID"]] = $arSection["NAME"]." [".$arSection["ID"]."]";
			}
			
			$arComponentParameters['PARAMETERS']["SECTION_ID"] = array(
				"PARENT" => "ADDDATA_IN_INFOBLOCK",
				"NAME" => getMessage('SECTION_ID'),
				"TYPE" => "LIST",
				"VALUES" => $arSectionList,
				"REFRESH" => "N",
				"ADDITIONAL_VALUES"=>"Y"
			);
		}
		$arComponentParameters['PARAMETERS']["ADD_NA"] = array(
			"PARENT" => "ADDDATA_IN_INFOBLOCK",
			"NAME" => getMessage('ADD_NA'),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"REFRESH" => "N"
		);
        $arComponentParameters['PARAMETERS']["PREVIEW_TEXT_FIELDS"] = array(
			"PARENT" => "ADDDATA_IN_INFOBLOCK",
			"NAME" => GetMessage("PREVIEW_TEXT_FIELDS"),
			"TYPE"=>"STRING",
		);
        $arComponentParameters['PARAMETERS']["WRITE_TO_DETAIL_TEXT"] = array(
			"PARENT" => "ADDDATA_IN_INFOBLOCK",
			"NAME" => GetMessage("WRITE_TO_DETAIL_TEXT"),
			"TYPE"=>"CHECKBOX",
			"DEFAULT" => "N",
		);
		
	}	
	
	if ($arCurrentValues['USE_BASE'] == "Y") {
		$arComponentParameters['PARAMETERS']["BASE_IBLOCK_ID"] = array(
			"PARENT" => "USE_BASE",
			"NAME" => getMessage('BASE_IBLOCK_ID'),
			"TYPE" => "LIST",
			"VALUES" => $arIBlock,
			"REFRESH" => "Y"
		);
		$arComponentParameters['PARAMETERS']["BASE_ID"] = array(
			"PARENT" => "USE_BASE",
			"NAME" => getMessage('BASE_ID'),
			"TYPE" => "STRING"
		);
	}
}



if(CModule::IncludeModule("form")) {
	$arComponentParameters['PARAMETERS']["ADDDATA_IN_WEBFORM"] = array(
		"PARENT" => "ADDDATA_IN_WEBFORM",
		"NAME" => getMessage('ADDDATA_IN_WEBFORM'),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "N",
		"REFRESH" => "Y"
	);
	
	if ($arCurrentValues['ADDDATA_IN_WEBFORM'] == "Y") {
		$arForms = Array();
		$arFilter = Array(
			
		);
		
		$res = CForm::GetList($by="id", $order="asc",$arFilter);
		while ($arRes = $res->GetNext()) {
			$arForms[$arRes["ID"]] = "[".$arRes["ID"]."] ".$arRes["NAME"];
		}
		
		$arComponentParameters['PARAMETERS']["WEBFORM_ID"] = array(
			"PARENT" => "ADDDATA_IN_WEBFORM",
			"NAME" => getMessage('WEBFORM_ID'),
			"TYPE" => "LIST",
			"VALUES" => $arForms,
			"REFRESH" => "Y"
		);
	}
}
?>