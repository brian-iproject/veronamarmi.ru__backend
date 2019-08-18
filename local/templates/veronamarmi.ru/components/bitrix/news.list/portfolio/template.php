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
<div class="portfolio-list">
<? foreach($arResult["ITEMS"] as $arItem) { ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="portfolio-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="h3 portfolio-list__name"><?=$arItem['NAME']?></div>
		<div class="portfolio-list__more-photo">
      <? if ($arItem['PROPERTIES']['MORE_PHOTO']) { ?>
        <? foreach ($arItem['PX_PROPERTIES']['MORE_PHOTO'] as $arImage) { ?>
					<div class="portfolio-list__photo-item"><a href="<?=$arImage['ORIGINAL']['SRC']?>" data-fancybox="catalog-detail"><img src="<?=$arImage['RESIZED']['SRC']?>" alt="<?=$arImage['ORIGINAL']['DESCRPTION']?>"></a></div>
        <? } ?>
      <? } ?>
		</div>
	</div>
<? } ?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>