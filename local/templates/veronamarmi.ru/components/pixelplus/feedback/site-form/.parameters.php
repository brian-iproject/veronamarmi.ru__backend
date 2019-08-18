<?
$arFieldsList = Array(
	"NAME"=>"",
	"PHONE"=>"",
	"EMAIL"=>"",	
	"MESSAGE"=>""
);
foreach ($arFieldsList as $key=>&$field) {
	$field = "[".$key."] ".getMessage("PX_OF_".$key);
}
unset($key,$field);
$arTemplateParameters =  Array(
	"FORM_NAME" => array(
		"PARENT" => "BASE",
		"NAME" => getMessage('FORM_NAME'),
		"TYPE" => "STRING",
	),
    "FORM_DESCRIPTION" => array(
        "PARENT" => "BASE",
        "NAME" => getMessage('FORM_DESCRIPTION'),
        "TYPE" => "STRING",
    ),
    "FORM_CSS_CLASS" => array(
        "PARENT" => "BASE",
        "NAME" => getMessage('FORM_CSS_CLASS'),
        "TYPE" => "STRING",
    ),
	"SHOW_ERROR_LIST" => array(
		"PARENT" => "BASE",
		"NAME" => getMessage('SHOW_ERROR_LIST'),
		"TYPE" => "CHECKBOX",
	),
	"FIELDS_LIST" => array(
		"PARENT" => "FIELDS_LIST_GROUP",
		"NAME" => getMessage('FIELDS_LIST'),
		"TYPE" => "LIST",
		"VALUES" => $arFieldsList,
		"REFRESH" => "Y",
		"MULTIPLE"=>"Y",
		"ADDITIONAL_VALUES"=>"Y"
    ),
    "YM_COUNTER_ID" => array(
        "PARENT" => "BASE",
        "NAME" => getMessage('YM_COUNTER_ID'),
        "TYPE" => "STRING",
    ),
    "YM_GOAL_ID_SUBMIT" => array(
        "PARENT" => "BASE",
        "NAME" => getMessage('YM_GOAL_ID_SUBMIT'),
        "TYPE" => "STRING",
    ),
    "YM_GOAL_ID_SUCCESS" => array(
        "PARENT" => "BASE",
        "NAME" => getMessage('YM_GOAL_ID_SUCCESS'),
        "TYPE" => "STRING",
    )
);
?>