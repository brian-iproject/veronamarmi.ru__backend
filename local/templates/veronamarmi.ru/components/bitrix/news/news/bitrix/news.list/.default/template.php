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
<div class="news-list">
<? foreach($arResult["ITEMS"] as $arItem) { ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="news-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="news-list__image"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PX_PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"></a></div>
		<div class="news-list__info">
			<div class="news-list__name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
			<!--noindex--><?=$arItem["PREVIEW_TEXT"]?><!--/noindex-->
		</div>
	</div>
<? } ?>
</div>
<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
    <?=$arResult["NAV_STRING"]?>
<? } ?>