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
<div class="products-list">
	<?
	foreach ($arResult['ITEMS'] as $arItem) {
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div class="products-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="products-list__item-inner">
        <? if ($arItem['PX_PREVIEW_PICTURE']['SRC']) { ?>
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="products-list__link"><img src="<?=$arItem['PX_PREVIEW_PICTURE']['SRC']?>" alt="" class="products-list__image"></a>
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