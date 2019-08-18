<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<? if ($arParams["PX_AJAX"] == "Y") { 
	$APPLICATION->RestartBuffer();
}?>
<? if ($arParams["USE_CSS_FILE"] && file_exists($_SERVER["DOCUMENT_ROOT"].$templateFolder."/style.css")) { ?>
	<style>
    <? include($_SERVER["DOCUMENT_ROOT"].$templateFolder."/style.css"); ?>
    </style>
<? } ?>
<? if ($arParams["USE_JS_FILE"] && file_exists($_SERVER["DOCUMENT_ROOT"].$templateFolder."/script.js")) {
	$jsfile = CUtil::GetAdditionalFileURL($templateFolder."/script.js");
?>
	<script type="text/javaScript" src="<?=$jsfile?>"></script>
<? } ?>

<div class="feedbackform_wr">

<? if ($arParams["FORM_NAME"]) { ?>
	<div class="h1"><?=$arParams["FORM_NAME"]?></div>
<? } ?>

<? if (count($arResult["ERROR_TEXT_ARRAY"]) && $arParams["SHOW_ERROR_LIST"] == "Y") { ?>
<div class="error_list">
    <? foreach ($arResult["ERROR_TEXT_ARRAY"] as $error) { ?>
    <div><?=$error;?></div>
    <? } ?>
</div>
<? } ?>

<? if ($arResult["SUCCESS"] != "Y") { ?>
<? if ($arResult["VIRTUAL_FIELDS"]) { ?>
<form method="post" id="feedback" enctype="multipart/form-data" action="<?=$APPLICATION->GetCurPage()?>">
	<? foreach ($arResult['VIRTUAL_FIELDS'] as $fieldname=>$arFieldParams) {
		if ($arParams["ADD_PLACEHOLDER"] == "Y" && in_array($arFieldParams["PARAMS"]["TYPE"],Array("TEXT","TEXTAREA","EMAIL"))) {
			if ($arFieldParams["ERROR"]) {
				$arFieldParams["PARAMS"]["PLACEHOLDER"] = "Поле «".$arFieldParams['NAME']."» должно быть заполнено";
			} else {
				$arFieldParams["PARAMS"]["PLACEHOLDER"] = $arFieldParams["PARAMS"]["PLACEHOLDER"]?$arFieldParams["PARAMS"]["PLACEHOLDER"]:$arFieldParams["NAME"];
			}
		}	
	?>
		<div class="label">
		<span class="fieldname"><?=$arFieldParams["NAME"]?>:<? if ($arFieldParams["IS_REQUIRED"]== "Y") { ?><span class="starrequired">*</span><? } ?></span>
        
		<? if ($arFieldParams["PARAMS"]["TYPE"] == "TEXTAREA") { ?>
			<textarea name="<?=$fieldname?>"<? if ($arFieldParams["ERROR"]) { ?> class="error"<? } ?><? if ($arParams["ADD_PLACEHOLDER"] == "Y") { ?> placeholder="<?=$arFieldParams["PARAMS"]["PLACEHOLDER"]?>"<? } ?>><?=$arFieldParams["VALUE"]?></textarea>
            
     	<? } elseif ($arFieldParams["PARAMS"]["TYPE"] == "EMAIL") { ?>
            <input type="email" name="<?=$fieldname?>" value="<?=$arFieldParams["VALUE"]?>"<? if ($arFieldParams["ERROR"]) { ?> class="error"<? } ?><? if ($arParams["ADD_PLACEHOLDER"] == "Y") { ?> placeholder="<?=$arFieldParams["PARAMS"]["PLACEHOLDER"]?>"<? } ?>>
            
		<? } elseif ($arFieldParams["PARAMS"]["TYPE"] == "CHECKBOX") {
			$tagname = "radio";
			$fieldname_t = $fieldname;
				
			if ($arFieldParams["PARAMS"]["MULTIPLY"] == "Y") {
				$tagname = "checkbox";
				$fieldname_t = $fieldname."[]";				
			}
			$last = count($arFieldParams["PARAMS"]["VALUES"]);
			$i = 0;
			
			if ($arFieldParams["ERROR"]) {
				?>
				<div class="error_list">Поле должно быть заполнено.</div>
				<?
			}
			
			foreach ($arFieldParams["PARAMS"]["VALUES"] as $key=>$arValue) {
				$i++;
				if ($arFieldParams["PARAMS"]["MULTIPLY"] == "Y") {
					$exname = $fieldname.$i;
				} else {
					$exname = $fieldname;
				}
				?>
				<label<? if ($arFieldParams["ERROR"]) { ?> class="error"<? } ?>><input type="<?=$tagname?>" name="<?=$fieldname_t?>" data-exname="<?=$exname?>" value="<?=$key?>"<? if ($arValue["SELECTED"] == "Y") { ?> checked<? } ?>> <?=$arValue["NAME"]?></label> <? if ($last > $i) { ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? } ?>
			<? } ?>
            
		<? } elseif ($arFieldParams["PARAMS"]["TYPE"] == "SELECT") {
			$fieldname_t = $fieldname;
			if ($arFieldParams["PARAMS"]["MULTIPLY"] == "Y") {				
				$fieldname_t = $fieldname."[]";				
			}
			$bnotselected = true;
			foreach ($arFieldParams["PARAMS"]["VALUES"] as $key=>$arValue) {
				if ($arValue["SELECTED"] == "Y") {
					$bnotselected = false;
					break;
				}
			}
			?>
			<select name="<?=$fieldname_t?>"<? if ($arFieldParams["PARAMS"]["MULTIPLY"] == "Y") {?> multiple="multiple"<? } ?> class="style-select<? if ($arFieldParams["ERROR"]) { ?> error<? } ?>">
				<? if ($arFieldParams["PARAMS"]["MULTIPLY"] != "Y") { ?>
				<option value=""<? if($bnotselected) { ?> selected="selected"<? } ?>>Выбрать</option>
				<? } ?>
				<? foreach ($arFieldParams["PARAMS"]["VALUES"] as $key=>$arValue) { ?>
				<option value="<?=$key?>"<? if ($arValue["SELECTED"] == "Y") { ?> selected="selected"<? } ?>><?=$arValue["NAME"]?></option>
				<?}?>				
			</select>
            
		<? } elseif ($arFieldParams["PARAMS"]["TYPE"] == "FILE") { ?>
			<div>
				<?
				$fieldname_t = $fieldname;
				if ($arFieldParams["PARAMS"]["MULTIPLY"] == "Y") {	
					$fieldname_t = $fieldname."[]";				
				}
				
				if ($arFieldParams["ERROR"]) {
					echo '<div class="error_list">Поле должно быть заполнено.</div>';
				}
				?>
				<input type="file" name="<?=$fieldname_t?>"<? if ($arFieldParams["PARAMS"]["MULTIPLY"]) { ?> multiple<? } ?> class="filephoto_1" data-message="Прикрепить файл">
				<div class="file_params">
				<? if ($arFieldParams["PARAMS"]["MAX_SIZE_ONE"] > 0) { ?>
					<div>Максимальный размер файла - <?=$arFieldParams["PARAMS"]["MAX_SIZE_ONE_FORMATTED"]?></div>
				<? } ?>
				<? if ($arFieldParams["PARAMS"]["MAX_CNT"] > 0 && $arFieldParams["PARAMS"]["MULTIPLY"] === true) { ?>
					<div>Максимальное количество файлов - <?=$arFieldParams["PARAMS"]["MAX_CNT"]?></div>
				<? } ?>
                </div>
			</div>
            
		<? } else { ?>			
			<input type="text" name="<?=$fieldname?>" value="<?=$arFieldParams["VALUE"]?>"<? if ($arFieldParams['ERROR']) { ?> class="error"<? } ?><? if ($arParams["ADD_PLACEHOLDER"] == "Y") { ?> placeholder="<?=$arFieldParams["PARAMS"]["PLACEHOLDER"]?>"<? } ?>>
		<? } ?>
        </div>
	<? } ?>
	<? if ($arParams["USE_CAPTCHA"] == "Y") { ?>
		<div class="label">
			<span class="fieldname">Защита от автоматического заполнения. <br> Введите текст, указанный на картинке <span class="starrequired">*</span></span>
            <? if ($arResult["CAPTCHA"]["ERROR"] == "C") { ?><span class="error_list">Неверно введены символы</span><? } ?>
			<input type="text" name="<?=$arResult["CAPTCHA"]["NAME_WORD"]?>" size="30" maxlength="50" value="" class="inputtextcap<? if ($arResult["CAPTCHA"]["ERROR"] == "C") { ?> error<? } ?>">
            <br>
			<input type="hidden" name="<?=$arResult["CAPTCHA"]["NAME_SID"]?>" value="<?=$arResult["CAPTCHA"]["SID"]?>">
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA"]["SID"]?>" width="180" height="40" alt="">
		</div>
	<? } ?>
	<? foreach ($arResult["PARAM_FOR_PT"] as $forpt=>$fotptval) { ?>
		<input type="hidden" name="<?=$forpt?>" value="<?=$fotptval?>">
	<? } ?>
    <div class="label">
        <input type="hidden" name="<?=$arResult["SEND_BUTTON_NAME"]?>" value="Y">
        <input type="submit">
    </div>
</form>
<? } ?>
<? } else { ?>
	<div class="send_ok">Спасибо! Ваше сообщение отправлено.</div>
<? } ?>
</div>
<? if ($arParams["PX_AJAX"] == "Y") { 
	die();
}?>