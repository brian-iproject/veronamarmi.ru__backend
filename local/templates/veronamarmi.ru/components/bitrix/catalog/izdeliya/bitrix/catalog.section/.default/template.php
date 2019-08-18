<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogTopComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */
$this->setFrameMode(true);
?>
<? if (count($arResult['ITEMS'])) { ?>
	<h2>Выполненные нами объекты</h2>
	<div class="products-list">
		<?
		foreach ($arResult['ITEMS'] as $arItem) {
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			<div class="products-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="products-list__item-inner">
					<? if ($arItem['PX_PREVIEW_PICTURE']['SRC']) { ?>
						<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="products-list__link"><img src="<?=$arItem['PX_PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" class="products-list__image"></a>
					<? } ?>
					<div class="products-list__caption">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="products-list__title"><?=$arItem['NAME']?></a>
							<? if ($arItem['DISPLAY_PROPERTIES']['OBJECT']['DISPLAY_VALUE']) { ?>
								<span class="products-list__object">(<?=$arItem['DISPLAY_PROPERTIES']['OBJECT']['DISPLAY_VALUE']?>)</span>
							<? } ?>
						<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="site-button products-list__order">Заказать</a>
					</div>
				</div>
			</div>
		<? } ?>
	</div>
<? } ?>
<? if ($arResult["SEO"]["PAGE_NUM"] <= 1) { ?>
		<? if ($arResult['UF_TOP_DESCRIPTION']) { ?>
	      <? $this->SetViewTarget('top-text'); ?>
					<div class="products__top-text important-text">
				      <?=$arResult['~UF_TOP_DESCRIPTION']?>
					</div>
		    <? $this->EndViewTarget('top-text'); ?>
		<? } ?>
		<? if ($arResult['DESCRIPTION']) { ?>
		    <? $this->SetViewTarget('bottom-text'); ?>
					<div class="products__bottom-text">
				      <?=$arResult['DESCRIPTION']?>
					</div>
		    <? $this->EndViewTarget('bottom-text'); ?>
		<? } ?>
<? } ?>

<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
    <?=$arResult["NAV_STRING"]?>
<? } ?>