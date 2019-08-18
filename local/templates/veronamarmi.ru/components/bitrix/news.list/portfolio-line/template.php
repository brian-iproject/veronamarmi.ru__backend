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
<div class="portfolio-line">
	<div class="portfolio-line__inner js-portfolio-line">
<? foreach($arResult["ITEMS"] as $arItem) { ?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
		<div class="portfolio-line__item">
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="portfolio-line__link">
				<? if ($arItem['PX_PREVIEW_PICTURE']['SRC']) { ?>
					<img src="<?=$arItem['PX_PREVIEW_PICTURE']['SRC']?>" alt="" class="portfolio-line__image">
				<? } ?>
				<span class="portfolio-line__caption">
					<span class="portfolio-line__title"><?=$arItem['NAME']?></span>
					<? if ($arItem['PROPERTIES']['OBJECT']['VALUE']) { ?>
						<span class="portfolio-line__object">(<?=$arItem['PROPERTIES']['OBJECT']['VALUE']?>)</span>
					<? } ?>
				</span>
			</a>
		</div>
<? } ?>
	</div>
</div>