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
<div class="catalog-list">
	<?
	foreach ($arResult['ITEMS'] as $arItem) {
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div class="catalog-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="catalog-list__item-inner">
				<? if ($arItem['PX_PREVIEW_PICTURE']['SRC']) { ?>
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="catalog-list__image"><img src="<?=$arItem['PX_PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>"></a>
				<? } ?>
				<div class="catalog-list__caption">
					<div class="catalog-list__name"><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></div>
					<dl class="catalog-list__specifications">
            <?foreach ($arItem['DISPLAY_PROPERTIES'] as $prop):?>
              <? if(strpos($prop['CODE'],'SPECIFICATION_') !== false && $prop['VALUE']):?>
								<dt><span><?=$prop['NAME'];?></span></dt>
								<dd><span>
	              <?=(is_array($prop['DISPLAY_VALUE'])
	                  ? implode(', ', $prop['DISPLAY_VALUE'])
	                  : $prop['DISPLAY_VALUE'])?>
	              </span></dd>
              <? endif;?>
            <?endforeach;?>
					</dl>
					<div class="catalog-list__price">
              <? if ($arItem['PROPERTIES']['PRICE']['VALUE']) { ?>
								от <?=$arItem['PROPERTIES']['PRICE']['VALUE']?> $
              <? } else { ?>
								по запросу
              <? } ?>
					</div>
					<div class="catalog-list__order">
						<span class="site-button" data-form="order" data-item="<?=$arItem['IBLOCK_ID']?>/<?=$arItem['ID']?>">Заказать</span>
					</div>
				</div>
			</div>
		</div>
	<? } ?>
</div>
<? if ($arResult['UF_TOP_DESCRIPTION']) { ?>
  <? $this->SetViewTarget('top-text'); ?>
		<div class="catalog__top-text important-text">
	      <?=$arResult['~UF_TOP_DESCRIPTION']?>
		</div>
  <? $this->EndViewTarget('top-text'); ?>
<? } ?>
<? if ($arResult['DESCRIPTION']) { ?>
  <? $this->SetViewTarget('bottom-text'); ?>
		<div class="catalog__bottom-text">
		  <?=$arResult['DESCRIPTION']?>
		</div>
  <? $this->EndViewTarget('bottom-text'); ?>
<? } ?>
<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
    <?=$arResult["NAV_STRING"]?>
<? } ?>
