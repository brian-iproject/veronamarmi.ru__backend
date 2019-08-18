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
        <? if ($arItem['DISPLAY_PROPERTIES']['LABEL']['DISPLAY_VALUE']) { ?>
					<div class="catalog-list__stickers catalog-list__stickers--<?=$arItem['DISPLAY_PROPERTIES']['LABEL']['VALUE_XML_ID']?>"><?=$arItem['DISPLAY_PROPERTIES']['LABEL']['DISPLAY_VALUE']?></div>
        <? } ?>
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
							<div class="catalog-list__price-text">Цена:</div>
              <? if ($arItem['PROPERTIES']['PRICE']['VALUE']) { ?>
								от <?=$arItem['PROPERTIES']['PRICE']['VALUE']?> $ <span class="catalog-list__price-postfix">за м<sup>2</sup> (в руб. — по курсу)</span>
              <? } else { ?>
								по запросу
              <? } ?>
					</div>
					<div class="catalog-list__order">
						<span class="site-button" data-form="order-stone-list" data-item="<?=$arItem['IBLOCK_ID']?>/<?=$arItem['ID']?>" onclick="ym(8100544, 'reachGoal', 'JS-ZAKAZ-KAMNI-KAT'); return true;">Заказать</span>
					</div>
				</div>
			</div>
		</div>
	<? } ?>
</div>
<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
    <?=$arResult["NAV_STRING"]?>
<? } ?>
