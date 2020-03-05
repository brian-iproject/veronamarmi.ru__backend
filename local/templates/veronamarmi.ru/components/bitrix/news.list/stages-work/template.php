<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="stages-work">
	<?foreach($arResult["ITEMS"] as $arItem){?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="stages-work__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="stages-work__icon"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["ICON"]["FILE_VALUE"]['SRC']?>" alt=""></div>
			<div class="stages-work__info">
				<div class="stages-work__name"><?=$arItem['NAME']?></div>
				<div class="stages-work__text"><?=$arItem['PREVIEW_TEXT']?></div>
			</div>
		</div>
	<?}?>
</div>
