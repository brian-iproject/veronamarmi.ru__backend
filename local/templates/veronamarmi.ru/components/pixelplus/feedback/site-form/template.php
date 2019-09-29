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
<div class="site-form<?=$arParams["FORM_CSS_CLASS"]?' '.$arParams["FORM_CSS_CLASS"]:''?>">
	<? if (count($arResult["ERROR_TEXT_ARRAY"]) && $arParams["SHOW_ERROR_LIST"] == "Y") { ?>
	<div class="site-form__error-list">
    <? foreach ($arResult["ERROR_TEXT_ARRAY"] as $error) { ?>
    <p><?=$error;?></p>
    <? } ?>
	</div>
	<? } ?>

	<? if ($arResult["SUCCESS"] != "Y") { ?>
		<? if ($arResult["VIRTUAL_FIELDS"]) { ?>
			<form method="post" enctype="multipart/form-data" action="<?=$APPLICATION->GetCurPage()?>"<? if ($arParams["YM_COUNTER_ID"] && $arParams["YM_GOAL_ID_SUBMIT"]) { ?> onsubmit="ym(<?=$arParams["YM_COUNTER_ID"]?>, 'reachGoal', '<?=$arParams["YM_GOAL_ID_SUBMIT"]?>'); return true;"<? } ?>>
				<div class="site-form__inner">
          <? if ($arParams["FORM_NAME"]) { ?>
						<div class="h1"><?=$arParams["FORM_NAME"]?></div>
          <? } ?>
          <? if ($arParams["FORM_DESCRIPTION"]) { ?>
						<p><?=$arParams["FORM_DESCRIPTION"]?></p>
          <? } ?>
					<? foreach ($arResult['VIRTUAL_FIELDS'] as $fieldname=>$arFieldParams) {
						if ($arParams["ADD_PLACEHOLDER"] == "Y" && in_array($arFieldParams["PARAMS"]["TYPE"],Array("TEXT","TEXTAREA","EMAIL"))) {
							if ($arFieldParams["ERROR"]) {
								$arFieldParams["PARAMS"]["PLACEHOLDER"] = "Поле «".$arFieldParams['NAME']."» должно быть заполнено";
							} else {
								$arFieldParams["PARAMS"]["PLACEHOLDER"] = $arFieldParams["PARAMS"]["PLACEHOLDER"]?$arFieldParams["PARAMS"]["PLACEHOLDER"]:$arFieldParams["NAME"];
							}
	            $strFieldPlaceholder = ' placeholder="'.$arFieldParams["PARAMS"]["PLACEHOLDER"].'"';
						}

						$strFieldClass = ' class="site-form__field-'.ToLower($arFieldParams["PARAMS"]["TYPE"]);
						if ($arFieldParams["ERROR"]) {
	              $strFieldClass = $strFieldClass . ' site-form__field-'.ToLower($arFieldParams["PARAMS"]["TYPE"]).'--error site-form__field-error"';
	          } else {
	              $strFieldClass = $strFieldClass . '"';
						}

						$strField = $strFieldClass.$strFieldPlaceholder;
						?>
					<div class="site-form__item site-form__item--<?=ToLower(str_replace($arParams['FIELDS_PREFIX'].'_', '', $fieldname))?>">
						<? /* <span class="site-form__item-name"><?=$arFieldParams["NAME"]?>:<? if ($arFieldParams["IS_REQUIRED"]== "Y") { ?><span class="site-form__star-required">*</span><? } ?></span> */?>

						<? if ($arFieldParams["PARAMS"]["TYPE"] == "TEXTAREA") { ?>
							<textarea name="<?=$fieldname?>"<?=$strField?>><?=$arFieldParams["VALUE"]?></textarea>

			      <? } elseif ($arFieldParams["PARAMS"]["TYPE"] == "EMAIL") { ?>
	            <input type="email" name="<?=$fieldname?>" value="<?=$arFieldParams["VALUE"]?>"<?=$strField?>>

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
								<p class=""site-form__error-list">Поле должно быть заполнено.</div>
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
								<label<?=$strField?>><input type="<?=$tagname?>" name="<?=$fieldname_t?>" data-exname="<?=$exname?>" value="<?=$key?>"<? if ($arValue["SELECTED"] == "Y") { ?> checked<? } ?>> <?=$arValue["NAME"]?></label> <? if ($last > $i) { ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? } ?>
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
							<select name="<?=$fieldname_t?>"<? if ($arFieldParams["PARAMS"]["MULTIPLY"] == "Y") {?> multiple="multiple"<? } ?><?=$strField?>>
								<? if ($arFieldParams["PARAMS"]["MULTIPLY"] != "Y") { ?>
								<option value=""<? if($bnotselected) { ?> selected="selected"<? } ?>>Выбрать</option>
								<? } ?>
								<? foreach ($arFieldParams["PARAMS"]["VALUES"] as $key=>$arValue) { ?>
								<option value="<?=$key?>"<? if ($arValue["SELECTED"] == "Y") { ?> selected="selected"<? } ?>><?=$arValue["NAME"]?></option>
								<?}?>
							</select>

						<? } elseif ($arFieldParams["PARAMS"]["TYPE"] == "FILE") { ?>
							<div<?=$strField?>>
								<?
								$fieldname_t = $fieldname;
								if ($arFieldParams["PARAMS"]["MULTIPLY"] == "Y") {
									$fieldname_t = $fieldname."[]";
								}

								if ($arFieldParams["ERROR"]) {
									echo '<p class="site-form__error-list">Поле должно быть заполнено.</p>';
								}
								?>
								<input type="file" name="<?=$fieldname_t?>"<? if ($arFieldParams["PARAMS"]["MULTIPLY"]) { ?> multiple<? } ?>>
								<div class="site-form__file-params">
									<? if ($arFieldParams["PARAMS"]["MAX_SIZE_ONE"] > 0) { ?>
										<div>Максимальный размер файла - <?=$arFieldParams["PARAMS"]["MAX_SIZE_ONE_FORMATTED"]?></div>
									<? } ?>
									<? if ($arFieldParams["PARAMS"]["MAX_CNT"] > 0 && $arFieldParams["PARAMS"]["MULTIPLY"] === true) { ?>
										<div>Максимальное количество файлов - <?=$arFieldParams["PARAMS"]["MAX_CNT"]?></div>
									<? } ?>
	              </div>
							</div>

						<? } else { ?>
							<input type="text" name="<?=$fieldname?>" value="<?=$arFieldParams["VALUE"]?>"<?=$strField?>>
						<? } ?>
	        </div>
					<? } ?>
					<? if ($arParams["USE_CAPTCHA"] == "Y") { ?>
						<div class="site-form__item site-form__item--captcha">
							<p>
								Защита от автоматического заполнения. <br> Введите текст, указанный на картинке <span class="starrequired">*</span>
                <? if ($arResult["CAPTCHA"]["ERROR"] == "C") { ?><br><span class="error_list">Неверно введены символы</span><? } ?>
							</p>
							<div class="site-form__captcha-image">
								<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA"]["SID"]?>" width="180" height="40" alt="">
							</div>
							<input type="text" name="<?=$arResult["CAPTCHA"]["NAME_WORD"]?>" value="" class="site-form__field-text<? if ($arResult["CAPTCHA"]["ERROR"] == "C") { ?> error<? } ?>">
							<input type="hidden" name="<?=$arResult["CAPTCHA"]["NAME_SID"]?>" value="<?=$arResult["CAPTCHA"]["SID"]?>">
						</div>
					<? } ?>
					<? foreach ($arResult["PARAM_FOR_PT"] as $forpt=>$fotptval) { ?>
						<input type="hidden" name="<?=$forpt?>" value="<?=$fotptval?>">
					<? } ?>
					<div class="site-form__item site-form__item--privacy-policy">
						<input type="checkbox" required checked> Согласен с обработкой моих персональных данных<br>в соответствии с <a href="/privacy-policy/" target="_blank">политикой конфиденциальности</a>
					</div>
			    <div class="site-form__item  site-form__item--button">
			        <input type="hidden" name="<?=$arResult["SEND_BUTTON_NAME"]?>" value="Y">
			        <input type="submit" class="site-button site-form__button">
			    </div>
		    </div>
			</form>
		<? } ?>
	<? } else { ?>
		<p class="site-form__send-ok">Спасибо! Ваше сообщение отправлено.</p>
    <? if ($arParams["YM_COUNTER_ID"] && $arParams["YM_GOAL_ID_SUCCESS"]) { ?>
			<script type="text/javascript">
          ym(<?=$arParams["YM_COUNTER_ID"]?>, 'reachGoal', '<?=$arParams["YM_GOAL_ID_SUCCESS"]?>');
			</script>
		<? } ?>
	<? } ?>
</div>
<? if ($arParams["PX_AJAX"] == "Y") {
	die();
}?>