<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
$arResult['FIELD_PARAMS'] = Array(
	"NAME"=>Array(
		"TYPE"=>"TEXT",
		"PLACEHOLDER"=>"Имя Фамилия"
	),
	"TO_CHECKBOX"=>Array(
		"TYPE"=>"CHECKBOX",
		"MULTIPLY"=>false,
		"VALUES"=>Array(
			1=>Array(
				"ID"=>1,
				"NAME"=>"Центральный офис",
				"EMAIL"=>"project@xxx.ru"
			),
			2=>Array(
				"ID"=>2,
				"NAME"=>"Интернет-магазин",
				"EMAIL"=>"project@yyy.ru"
			)
		)
	),
	"TO"=>Array(
		"TYPE"=>"SELECT",
		//"MULTIPLY"=>true,
		"VALUES"=>Array(
			1=>Array(
				"ID"=>1,
				"NAME"=>"Центральный офис",
				"EMAIL"=>"project@xxx.ru"
			),
			2=>Array(
				"ID"=>2,
				"NAME"=>"Интернет-магазин",
				"EMAIL"=>"project@yyy.ru"
			)
		)
	),
	"AVATAR"=>Array(
		"TYPE"=>"FILE",
		"MULTIPLY"=>true,
		"EXTENSIONS"=>"jpg,png,gif",
		"MAX_CNT"=>100, //Макимальное количество файлов (0 - без ограничений)
		"MAX_SIZE_ONE" => 512000, //512000 = 500Кб Максимальный размер одного файла (0 - без ограничений)
	),
	"MESSAGE"=>Array(
		"TYPE"=>"TEXTAREA",
		"PLACEHOLDER"=>"Сообщение"
	),
	"EMAIL"=>Array(
		"TYPE"=>"EMAIL",
		"PLACEHOLDER"=>"manager@pixelplus.ru"
	),
);
?>