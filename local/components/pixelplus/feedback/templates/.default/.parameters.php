<?
$arFieldsList = Array(
	"NAME"=>"",
	"PHONE"=>"",
	"EMAIL"=>"",	
	"MESSAGE"=>"",
	"TO"=>"",
	"TO_CHECKBOX"=>"",
	"AVATAR"=>""
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
    )
);
?>