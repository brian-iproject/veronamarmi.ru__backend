<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

$arParams['FIELDS_PREFIX'] = ToUpper($arParams['FIELDS_PREFIX']);
$arParams["USE_CSS_FILE"] = $arParams["USE_CSS_FILE"] == "Y";
$arParams["USE_JS_FILE"] = $arParams["USE_JS_FILE"] == "Y";

if ($arParams['ADDDATA_IN_INFOBLOCK'] == "Y") {
	$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);
	if ($arParams["IBLOCK_ID"] <= 0) {
		$arParams['ADDDATA_IN_INFOBLOCK'] = "N";
	} else {
		if (!$arParams["ADDDATA_IN_INFOBLOCK_NAME"]) {
			$arParams["ADDDATA_IN_INFOBLOCK_NAME"] = ConvertTimeStamp();
		}
	}
}
if ($arParams['ADDDATA_IN_WEBFORM'] == "Y") {
	$arParams["WEBFORM_ID"] = intval($arParams["WEBFORM_ID"]);
	if ($arParams["WEBFORM_ID"] <= 0) {
		$arParams['ADDDATA_IN_WEBFORM'] = "N";
	}
}

$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if(is_array($arParams["EVENT_MESSAGE_ID"]) && count($arParams["EVENT_MESSAGE_ID"]) > 0) {
	$arEventMessageID = Array();
	foreach($arParams["EVENT_MESSAGE_ID"] as $v) {
		$v = intval($v);
		if($v > 0) {
			$arEventMessageID[] = $v;
		}
	}
	$arParams["EVENT_MESSAGE_ID"] = $arEventMessageID;
}

if ($arParams['USE_BASE'] == "Y") {
	$arParams["BASE_IBLOCK_ID"] = intval($arParams["BASE_IBLOCK_ID"]);
	$arParams["BASE_ID"] = intval($arParams["BASE_ID"]);

	if ($arParams["BASE_ID"] > 0 && CModule::IncludeModule("iblock")) {
		$el = new CIBlockElement;
		$arFilter = Array(
			"ACTIVE"=>"Y",
			"ID"=>$arParams["BASE_ID"]
		);
		if ($arParams["BASE_IBLOCK_ID"] > 0) {
			$arFilter["IBLOCK_ID"] = $arParams["BASE_IBLOCK_ID"];
		}
		$arSelect = Array(
			"ID","NAME","IBLOCK_ID","IBLOCK_SECTION_ID","CODE",
			"DETAIL_PAGE_URL"
		);
		$res = $el->GetList(Array(),$arFilter,false,false,$arSelect);
		if ($arRes = $res->GetNextElement()) {
			$arResult["ELEMENT"] = $arRes->GetFields();
			$arResult["ELEMENT"]["PROPERTIES"] = $arRes->GetProperties();
		}
	}
	if (!$arResult["ELEMENT"]) {
		if ($_REQUEST[$arParams["AJAX_VARIBLE"]] == "Y") {
			$APPLICATION->RestartBuffer();
			
			$arReturn = Array(
				"ERROR_TEXT_ARRAY"=>Array(GetMessage('EL_NF')),
				"ERROR_TEXT"=>GetMessage('EL_NF')
			);			
			echo "responseTextEx=".CUtil::PhpToJsObject($arReturn).";";
			die();
		} else {
			ShowError(getMessage("EL_NF"));
			return;
		}
	}
}

foreach ($arParams["PARAM_FOR_PT"] as $forpt) {
	$key = trim($forpt);
	if ($key && $_REQUEST[$key]) {
		$arResult["PARAM_FOR_PT"][$forpt] = CUtil::ConvertToLangCharset(htmlspecialcharsbx(urldecode($_REQUEST[$key])));
	}
}

if ($this->InitComponentTemplate($templatePage)) {
	$template = &$this->GetTemplate();
	$templateFolder = $template->GetFolder();
	//__IncludeLang($_SERVER["DOCUMENT_ROOT"].$templateFolder."/lang/".LANGUAGE_ID."/template.php");
	__IncludeLang($_SERVER["DOCUMENT_ROOT"].$templateFolder."/lang/".LANGUAGE_ID."/.parameters.php");
	//Параметры полей
	include($_SERVER['DOCUMENT_ROOT'].$templateFolder."/pxparams.php");
}
foreach ($arParams['FIELDS_LIST'] as $key=>$field) {
	$field = trim($field);
	if (strlen($field) > 0) {
		$fieldname = $arParams['FIELDS_PREFIX']."_".$field;
		// Начальные параметры
		$arResult['VIRTUAL_FIELDS'][$fieldname] = Array(
			"NAME"=>getMessage("PX_OF_".$field),
			"FIELD_NAME"=>$fieldname,
			"IS_REQUIRED"=>"N",
			"WITHOUT_PREFIX"=>$field,
			"PARAMS"=>Array(
				"TYPE"=>"TEXT",
				"MULTIPLY"=>false
			)
		);
		
		//Обязательность полей
		if (in_array($field,$arParams['FIELDS_LIST_REQUIRED'])) {
			$arResult['VIRTUAL_FIELDS'][$fieldname]['IS_REQUIRED'] = "Y";
		}
		
		//Кодировка
		if (!defined('BX_UTF')) {
			if (!is_array($_REQUEST[$fieldname])) {
				$_REQUEST[$fieldname] = CUtil::ConvertToLangCharset($_REQUEST[$fieldname]);
			} else {
				foreach ($_REQUEST[$fieldname] as $reqk=>$reqf) {
					$_REQUEST[$fieldname][$reqk] = CUtil::ConvertToLangCharset($reqf);
				}
			}
		}
		
		//Параметры из конфигурационного файла
		$bisfile = false; $bismulty = false;
		if (array_key_exists($field,$arResult['FIELD_PARAMS'])) {
			$bisfile = $arResult['FIELD_PARAMS'][$field]['TYPE'] === "FILE";
			$bismulty = $arResult['FIELD_PARAMS'][$field]['MULTIPLY'] === true;
			
			$arResult['VIRTUAL_FIELDS'][$fieldname]['PARAMS'] = $arResult['FIELD_PARAMS'][$field];
		}
		
		if ($bisfile === false) {
			//Значения, переданные в запросе
			if ($bismulty === false) {
				if (strlen($_REQUEST[$fieldname]) > 0) {
					$arResult['VIRTUAL_FIELDS'][$fieldname]['VALUE'] = htmlspecialcharsEx($_REQUEST[$fieldname]);
					$arResult['VIRTUAL_FIELDS'][$fieldname]['~VALUE'] = $_REQUEST[$fieldname];
				}
			} else {
				foreach ($_REQUEST[$fieldname] as $key=>$value) {
					if (strlen($value) > 0) {
						$arResult['VIRTUAL_FIELDS'][$fieldname]['VALUE'][] = htmlspecialcharsEx($value);
						$arResult['VIRTUAL_FIELDS'][$fieldname]['~VALUE'][] = $value;
					}
				}
			}
		} else {
			//Расширения для файлов задавать обязательно, иначе небезопасно
			$arParamFields = &$arResult['VIRTUAL_FIELDS'][$fieldname]['PARAMS'];
			if (!$arParamFields['EXTENSIONS']) {
				$arParamFields['EXTENSIONS'] = "jpg,pgn,gif";
			}
			$arParamFields['MAX_SIZE_ONE'] = intval($arParamFields['MAX_SIZE_ONE']);
			$arParamFields['MAX_SIZE_ONE_FORMATTED'] = CFile::FormatSize($arParamFields['MAX_SIZE_ONE']);
			
		
			if ($bismulty === false) {
				if (strlen($_FILES[$fieldname]['name']) > 0) {					
					$_FILES[$fieldname]['name_formatted'] = htmlSpecialCharsEx($_FILES[$fieldname]['name']);
					$arResult['VIRTUAL_FIELDS'][$fieldname]['VALUE'] = $_FILES[$fieldname];
				}
			} else {
				foreach ($_FILES[$fieldname]['name'] as $key=>$value) {
					if (strlen($value) > 0) {
						$arResult['VIRTUAL_FIELDS'][$fieldname]['VALUE'][] = Array(
							"name" => $value,
							"size" => $_FILES[$fieldname]['size'][$key],
							"tmp_name" => $_FILES[$fieldname]['tmp_name'][$key],
							"type" => $_FILES[$fieldname]['type'][$key],
							"error" => $_FILES[$fieldname]['error'][$key],
							"name_formatted" => htmlSpecialCharsEx($value)
						);
					}
				}
			}
			unset($arParamFields);
		}
	}
}

if ($arParams['USE_CAPTCHA'] == "Y") {
	$arResult['CAPTCHA'] = Array(
		"NAME_WORD"=>$arParams['FIELDS_PREFIX']."_"."CAPTCHA_WORD",
		"NAME_SID"=>$arParams['FIELDS_PREFIX']."_"."CAPTCHA_SID",
	);
	$arResult['CAPTCHA']['VALUE_WORD'] = $_REQUEST[$arResult['CAPTCHA']['NAME_WORD']];
	$arResult['CAPTCHA']['VALUE_SID'] = $_REQUEST[$arResult['CAPTCHA']['NAME_SID']];
}


$arResult['ERROR'] = false;
$arResult['SEND_BUTTON_NAME'] = $arParams['FIELDS_PREFIX']."_"."SEND_REVIEW";

if ($_REQUEST[$arResult['SEND_BUTTON_NAME']] == "Y") {
	foreach ($arResult['VIRTUAL_FIELDS'] as $key=>&$arValue) {
		$bhasvalue = ($arValue['PARAMS']['TYPE'] === "FILE" && count($arValue['VALUE']) > 0) ||
			($arValue['PARAMS']['MULTIPLY'] === true && count($arValue['VALUE']) > 0) ||
			($arValue['PARAMS']['MULTIPLY'] !== true && strlen($arValue['VALUE']) > 0);
			
		if ($bhasvalue === true) {
			switch ($arValue['PARAMS']['TYPE']) {
				case "EMAIL":
					//TODO: no multiply check
					if (!check_email($arValue['VALUE'])) {
						$arValue['ERROR'] = "NC";
						$arResult['ERROR'] = true;
						$arValue['ERROR_TEXT'] = $arResult['ERROR_TEXT_ARRAY'][] = getMessage('ERROR_FIELD_NC',Array("#FIELD#"=>$arValue['NAME']));
						continue;
					} else {
						$arValue['TEXT_VALUE'] = $arValue['VALUE'];
					}
				break;
				case "SELECT":
				case "CHECKBOX":					
					$berror = false;
					if ($arValue['PARAMS']['MULTIPLY'] === true) {
						foreach ($arValue['VALUE'] as $value) {
							if (array_key_exists($value,$arValue['PARAMS']['VALUES'])) {
								$arValue['PARAMS']['VALUES'][$value]['SELECTED'] = "Y";
								$arValue['TEXT_VALUE'][] = $arValue['PARAMS']['VALUES'][$value]['NAME'];							
								
							} else {
								$arResult['ERROR'] = true;
								$berror = true;
							}
						}						
					} else {
						if (array_key_exists($arValue['VALUE'],$arValue['PARAMS']['VALUES'])) {
							$arValue['PARAMS']['VALUES'][$arValue['VALUE']]['SELECTED'] = "Y";
							$arValue['TEXT_VALUE'] = $arValue['PARAMS']['VALUES'][$arValue['VALUE']]['NAME'];
						} else {							
							$arResult['ERROR'] = true;
							$berror = true;
						}
					}					
					
					if ($berror === true) {
						$arValue['ERROR'] = "NC";
						$arValue['ERROR_TEXT'] = $arResult['ERROR_TEXT_ARRAY'][] = getMessage('ERROR_FIELD_NC',Array("#FIELD#"=>$arValue['NAME']));
						continue;
					}
				break;
				case "FILE":					
					$truefiles = 0;
					$bfileerror = false;
					
					if ($arValue['PARAMS']['MULTIPLY'] === true) {
						foreach ($arValue['VALUE'] as $arFile) {
							if ($arFile['error'] > 0) {
								$bfileerror = true;
								$arResult['ERROR'] = true;
								$arValue['ERROR_TEXT'] = $arResult['ERROR_TEXT_ARRAY'][] = getMessage('ERROR_FILE_UPLOAD',Array("#FIELD#"=>$arFile['name_formatted']));
							} else {
								$res = CFile::CheckFile($arFile, $arValue['PARAMS']['MAX_SIZE_ONE'], "", $arValue['PARAMS']['EXTENSIONS']);
								if (strlen($res) > 0) {
									$bfileerror = true;
									$arResult['ERROR'] = true;
									$arValue['ERROR_TEXT'] = $arResult['ERROR_TEXT_ARRAY'][] = $arFile['name_formatted'].": ".$res;
								} else {
									$truefiles++;
								}
							}
						}
					} else {
						$arFile = $arValue['VALUE'];
						if ($arFile['error'] > 0) {
							$bfileerror = true;
							$arResult['ERROR'] = true;
							$arValue['ERROR_TEXT'] = $arResult['ERROR_TEXT_ARRAY'][] = getMessage('ERROR_FILE_UPLOAD',Array("#FIELD#"=>$arFile['name_formatted']));
						} else {
							$res = CFile::CheckFile($arFile, $arValue['PARAMS']['MAX_SIZE_ONE'], "", $arValue['PARAMS']['EXTENSIONS']);
							if (strlen($res) > 0) {
								$bfileerror = true;
								$arResult['ERROR'] = true;
								$arValue['ERROR_TEXT'] = $arResult['ERROR_TEXT_ARRAY'][] = $arFile['name_formatted'].": ".$res;
							} else {									
								$truefiles++;
							}							
						}
					}
					if ($bfileerror === false) {
						if ($truefiles > 0) {
							if ($truefiles > $arValue['PARAMS']['MAX_CNT']) {
								$arResult['ERROR'] = true;
								$arValue['ERROR_TEXT'] = $arResult['ERROR_TEXT_ARRAY'][] = getMessage('ERROR_FILE_COUNT',Array("#MAX_CNT#"=>$arValue['PARAMS']['MAX_CNT']));
							}
						} elseif ($arValue['IS_REQUIRED'] == "Y") {
							$arValue['ERROR'] = "NC";
							$arResult['ERROR'] = true;
							$arValue['ERROR_TEXT'] = $arResult['ERROR_TEXT_ARRAY'][] = getMessage('ERROR_FIELD_NC',Array("#FIELD#"=>$arValue['NAME']));
						}
					} else {
						$arValue['ERROR'] = "NC";
					}
					break;
				default:
				if ($arValue['PARAMS']['MULTIPLY'] === true) {
					foreach ($arValue['VALUE'] as $value) {
						$arValue['TEXT_VALUE'][] = $value;
					}
				} else {
					$arValue['TEXT_VALUE'] = $arValue['VALUE'];
				}
			}
			
			if (is_array($arValue['TEXT_VALUE'])) {
				$arValue['TEXT_VALUE'] = implode(", ",$arValue['TEXT_VALUE']);
			}
		} else {
			if ($arValue['IS_REQUIRED'] == "Y") {
				$arValue['ERROR'] = "R";
				$arResult['ERROR'] = true;
				$arValue['ERROR_TEXT'] = $arResult['ERROR_TEXT_ARRAY'][] = getMessage('ERROR_FIELD_R',Array("#FIELD#"=>$arValue['NAME']));
			}
		}
	}
	unset($arValue);
	if ($arParams['USE_CAPTCHA'] == "Y") {
		if (!$APPLICATION->CaptchaCheckCode($arResult['CAPTCHA']['VALUE_WORD'],$arResult['CAPTCHA']['VALUE_SID'])) {
			$arResult['ERROR'] = true;
			$arResult['CAPTCHA']['ERROR'] = "C";
			$arResult['ERROR_NF_TEXT_ARRAY'][] = getMessage('CAPTCHA_ERROR'); //getMessage('ERROR_FIELD_NC',Array("#FIELD#"=>"CAPTCHA"));
			$arResult['ERROR_TEXT_ARRAY'][] = getMessage('CAPTCHA_ERROR'); //getMessage('ERROR_FIELD_NC',Array("#FIELD#"=>"CAPTCHA"));
		}
	}
	if (!$arResult['ERROR']) {
		
		$arFilesFields = Array();
		$arResult['POST_FIELDS']['INFO_TEXT'] = '';
		foreach ($arResult['VIRTUAL_FIELDS'] as $fieldname=>$arFieldParams) {
			if (!$arValue['ERROR']) {
				if ($arFieldParams['TEXT_VALUE']) {
					if (array_key_exists("VALUES",$arFieldParams["PARAMS"]) && $arFieldParams['PARAMS']['MULTIPLY'] !== true) {
						$arTmp = $arFieldParams["PARAMS"]["VALUES"][$arFieldParams["VALUE"]];
						if ($arTmp["EMAIL"]) {
							$arResult['POST_FIELDS'][$arFieldParams['WITHOUT_PREFIX']."_EMAIL"] = $arTmp["EMAIL"];
						}
					}
					
					$arResult['POST_FIELDS'][$arFieldParams['WITHOUT_PREFIX']] = $arFieldParams['TEXT_VALUE'];
					$arResult['POST_FIELDS']['INFO_TEXT'] .= "<b>".$arFieldParams['NAME']."</b>:"." ".$arFieldParams['TEXT_VALUE']."<br>";
				} elseif ($arFieldParams['PARAMS']['TYPE'] == "FILE" && is_array($arFieldParams['VALUE'])) {
					$arFilesFields[$arFieldParams['WITHOUT_PREFIX']] = $arFieldParams['VALUE'];
				}
			}
		}
		
		//Доп. параметры запроса
		foreach ($arResult["PARAM_FOR_PT"] as $forpt=>$fotptval) {
			$arResult['POST_FIELDS'][$forpt] = $fotptval;
			$arResult['POST_FIELDS']['INFO_TEXT'] .= "<b>".$forpt."</b>:"." ".$fotptval."<br>";
		}
		
		//Данные о комментируемом элементе
		if (is_array($arResult["ELEMENT"])) {
			foreach (Array("ID","IBLOCK_ID","DETAIL_PAGE_URL","NAME") as $pid) {
				$pidex = "LE_F_".$pid;
				$arResult['POST_FIELDS'][$pidex] = $arResult["ELEMENT"][$pid];
			}
		}
		
		if ($arParams['ADDDATA_IN_WEBFORM'] == "Y" && $arParams['WEBFORM_ID'] > 0 && CModule::IncludeModule('form')) {
			$arWBAdd = Array();
			if (CForm::GetDataByID(
			 $arParams['WEBFORM_ID'],
			 $arForm,
			 $arQuestionsList,
			 $arAnswersList,
			 $dropdown,
			 $arMultiselect
			)) {		
				foreach ($arAnswersList as $qcode=>$arAnswers) {
					$arInd = $arAnswers[0];
					
					$identefication = "form_".$arInd['FIELD_TYPE']."_".$arInd['ID'];
					if ($arInd["FIELD_TYPE"] != "file" && $arInd["FIELD_TYPE"] != "image") {
						if ($arResult['POST_FIELDS'][$qcode]) {
							$arWBAdd[$identefication] = $arResult['POST_FIELDS'][$qcode];
						}
					} else {
						foreach ($arFilesFields[$qcode] as $num => $arFile) {
							if ($arAnswersList[$qcode][$num]['ID']) {
								$arWBAdd["form_".$arInd["FIELD_TYPE"]."_".$arAnswersList[$qcode][$num]['ID']] = $arFile;
							}
						}
					}
				}
				
				$RESULT_ID = CFormResult::Add(
					$arParams['WEBFORM_ID'],
					$arWBAdd		
				);
				if ($RESULT_ID) {
					CFormResult::Mail($RESULT_ID,false);
					$arResult['SUCCESS'] = "Y";
				} else {
					global $strError;
					$arResult['ERROR'] = true;
					$arResult['ERROR_TEXT_ARRAY'][] = $strError;
					$arResult['ERROR_NF_TEXT_ARRAY'][] = $strError;
				}
			} 
		}
		
		
		$bsendmessage = true;
		if ($arParams['ADDDATA_IN_INFOBLOCK'] == "Y" && $arParams['IBLOCK_ID'] > 0 && CModule::IncludeModule('iblock')) {
			$arFields = Array(
				"IBLOCK_ID"=>$arParams['IBLOCK_ID'],
				"DATE_ACTIVE_FROM"=>ConvertTimeStamp()
			);
			
			if ($arParams['WRITE_TO_DETAIL_TEXT'] == 'Y') {
				$arFields['DETAIL_TEXT'] = $arResult['POST_FIELDS']['INFO_TEXT'];
				$arFields['DETAIL_TEXT_TYPE'] = "html";	
			}
			
			if ($arParams['PREVIEW_TEXT_FIELDS']) {
				$arFields['PREVIEW_TEXT'] = $arResult['POST_FIELDS'][ToUpper($arParams['PREVIEW_TEXT_FIELDS'])];
				$arFields['PREVIEW_TEXT_TYPE'] = "text";	
			}
			
			$arFields['NAME'] = $arParams["ADDDATA_IN_INFOBLOCK_NAME"];
			$arFields['NAME'] = str_replace(
				Array("#SHORT_TIME#","#FULL_TIME#"),
				Array(ConvertTimeStamp(false),ConvertTimeStamp(false,"FULL")),
				$arFields['NAME']
			);
			
			foreach ($arResult['POST_FIELDS'] as $key=>$value) {
				$arFields['NAME'] = str_replace("#".$key."#",$value,$arFields['NAME']);
				$arFields['PROPERTY_VALUES'][$key] = $value;
			}
			
			if (count($arFilesFields) > 0) {
				foreach ($arFilesFields as $fkey=>$arFile) {
					$arFields['PROPERTY_VALUES'][$fkey] = $arFile;
				}
			}
						
			if ($arParams["ADD_NA"] == "Y") {
				$arFields["ACTIVE"] = "N";
			}
			if ($arParams["SECTION_ID"] > 0) {
				$arFields["IBLOCK_SECTION_ID"] = $arParams["SECTION_ID"];
			}
			
			$el = new CIBlockElement;
			
			$events = GetModuleEvents("main", "OnPixelPlusFeedbackComponentIBEAdd");
				while($arEvent = $events->Fetch())
					ExecuteModuleEventEx($arEvent, Array($arParams, &$arResult, &$arFields));
			
			if (!$arResult['ERROR']) {
				$ID = $el->Add($arFields,false,false,true);
				
				if ($ID > 0) {
					$arResult["POST_FIELDS"]['NEW_ID'] = $ID;
					
					if (count($arFilesFields) > 0) {
						$arFilter = Array(
							"=IBLOCK_ID"=>$arFields['IBLOCK_ID'],
							"=ID"=>$ID
						);
						
						$res = $el->GetList(Array(),$arFilter);
						if ($arRes = $res->GetNextElement()) {
							$arElement = $arRes->GetFields();
							$arElement['PROPERTIES'] = $arRes->GetProperties();
						}
						
						/*
						if ($arElement['PREVIEW_PICTURE'] > 0) {
							$arFile = CFile::GetFileArray($arElement['PREVIEW_PICTURE']);
							$link = '<a href="http://'.SITE_SERVER_NAME.$arFile['SRC'].'">'.$arFile['ORIGINAL_NAME'].'</a>';
							$arResult['POST_FIELDS']['AVATAR'] = $link;
						}
						*/
						
						foreach ($arElement['PROPERTIES'] as $arProp) {
							//TODO: multiply
							if (array_key_exists($arProp['CODE'],$arFilesFields) && $arProp['VALUE']) {
							
								if (!is_array($arProp['VALUE'])) {
									$arFile = CFile::GetFileArray($arProp['VALUE']);
									if (is_array($arFile)) {
										$arFieldParams = $arResult['VIRTUAL_FIELDS'][$arParams['FIELDS_PREFIX']."_".$arProp['CODE']];
										$link = '<a href="http://'.SITE_SERVER_NAME.$arFile['SRC'].'">'.$arFile['ORIGINAL_NAME'].'</a>';
										$arResult['POST_FIELDS'][$arProp['CODE']] = $link;
										//$arResult['POST_FIELDS']['INFO_TEXT'] .= "<b>".$arFieldParams['NAME']."</b>:"." ".$link."<br>";
									}
								} else {						
									$arResult['POST_FIELDS'][$arProp['CODE']] = Array();
									foreach ($arProp['VALUE'] as $key=>$fid) {
										$arFile = CFile::GetFileArray($fid);
										$arFieldParams = $arResult['VIRTUAL_FIELDS'][$arParams['FIELDS_PREFIX']."_".$arProp['CODE']];
										$link = '<a href="http://'.SITE_SERVER_NAME.$arFile['SRC'].'">'.$arFile['ORIGINAL_NAME'].'</a>';
										$arLinks[] = $link;
										$arResult['POST_FIELDS'][$arProp['CODE']][] = $link;									
									}
																	
									//$arResult['POST_FIELDS']['INFO_TEXT'] .= "<b>".$arFieldParams['NAME']."</b>:"." ".implode("<br>",$arLinks)."<br>";
									$arResult['POST_FIELDS'][$arProp['CODE']] = implode("<br>",$arResult['POST_FIELDS'][$arProp['CODE']]);
								}
							}
						}
					}
				} else {
					$arResult['ERROR_TEXT_ARRAY'][] = $el->LAST_ERROR;
					$arResult['ERROR_NF_TEXT_ARRAY'][] = $el->LAST_ERROR;
					$bsendmessage = false;
				}
			} else {
				$bsendmessage = false;
			}
		}
		
		if ($bsendmessage) {
			if (strlen($arParams["EVENT_NAME"]) > 0) {
				$events = GetModuleEvents("main", "OnPixelPlusFeedbackComponentMail");
				while($arEvent = $events->Fetch())
					ExecuteModuleEventEx($arEvent, Array($arParams, &$arResult));
					
				$event = new CEvent;
				if(is_array($arParams["EVENT_MESSAGE_ID"]) && count($arParams["EVENT_MESSAGE_ID"]) > 0) {
					foreach($arParams["EVENT_MESSAGE_ID"] as $v) {
						$event->Send($arParams["EVENT_NAME"], SITE_ID, $arResult['POST_FIELDS'], "N", IntVal($v));
					}
				} else {
					$event->Send($arParams["EVENT_NAME"], SITE_ID, $arResult['POST_FIELDS']);
				}
			}
			$arResult['SUCCESS'] = "Y";
		}
	}
}

//Если форма не отправлена или отправлена и возникла ошибка
if ($arParams['USE_CAPTCHA'] == "Y" && ($arResult['ERROR'] || $_REQUEST[$arResult['SEND_BUTTON_NAME']] != "Y")) {
	$arResult['CAPTCHA']['SID'] = $APPLICATION->CaptchaGetCode();
}

if ($_REQUEST[$arParams["AJAX_VARIBLE"]] == "Y") {
	$APPLICATION->RestartBuffer();
	
	$arReturn = Array(
		"ERROR_TEXT_ARRAY"=>$arResult['ERROR_TEXT_ARRAY'],
		"SUCCESS"=>$arResult['SUCCESS'],
		"SUCCESS_TEXT" => getMessage('OK_THANKS'),
		"ID"=>$ID
	);
	
	if ($arResult['ERROR']) {
		foreach ($arResult['VIRTUAL_FIELDS'] as $key=>&$arValue) {
			if ($arValue['ERROR']) {
				$arReturn['ERROR_FIELDS'][] = $key;
			}
		}
	}
	
	if (is_array($arResult['ERROR_TEXT_ARRAY'])) {
		$arReturn['ERROR_TEXT'] = implode("<br>",$arResult['ERROR_TEXT_ARRAY']);
	}
	
	echo "responseTextEx=".CUtil::PhpToJsObject($arReturn).";";
	die();
}

$this->ShowComponentTemplate();
if($this->__component_epilog)
	$this->includeComponentEpilog($this->__component_epilog);
?>