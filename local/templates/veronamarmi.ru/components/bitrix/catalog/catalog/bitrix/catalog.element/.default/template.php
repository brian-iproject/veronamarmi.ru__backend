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
if ($USER->IsAdmin()) {
	//debugmessage($arResult);
}
?>
<div class="catalog-detail">
	<div class="catalog-detail__row">
		<div class="catalog-detail__images">
			<div class="catalog-detail__main-image">
				<? if ($arResult['DISPLAY_PROPERTIES']['LABEL']['DISPLAY_VALUE']) { ?>
					<div class="catalog-detail__stickers catalog-detail__stickers--<?=$arResult['DISPLAY_PROPERTIES']['LABEL']['VALUE_XML_ID']?>"><?=$arResult['DISPLAY_PROPERTIES']['LABEL']['DISPLAY_VALUE']?></div>
				<? } ?>
				<? if ($arResult['DETAIL_PICTURE']) { ?>
					<a href="<?=$arResult['DETAIL_PICTURE']['SRC']?>" class="catalog-detail__image-item" data-fancybox="catalog-detail">
						<img src="<?=$arResult['PX_DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>">
					</a>
				<? } ?>
			</div>
			<div class="catalog-detail__more-images">
				<? if ($arResult['PROPERTIES']['MORE_PHOTO']) { ?>
					<? foreach ($arResult['PX_PROPERTIES']['MORE_PHOTO'] as $arImage) { ?>
						<a href="<?=$arImage['ORIGINAL']['SRC']?>" class="catalog-detail__image-item" data-fancybox="catalog-detail"><img src="<?=$arImage['RESIZED']['SRC']?>" alt="<?=$arImage['ORIGINAL']['DESCRPTION']?>"></a>
					<? } ?>
				<? } ?>
			</div>
		</div>
		<div class="catalog-detail__info">
			<div class="h4">Характеристики</div>
			<dl class="catalog-detail__specifications">
        <?foreach ($arResult['DISPLAY_PROPERTIES'] as $prop):?>
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
			<div class="catalog-detail__price">
				<div class="catalog-detail__price-text">Цена:</div>
        <? if (!empty($arResult['PX_PRICES'])) { ?>
					от <?=$arResult['PX_PRICES']['BASE']['VALUE_PRINT']?> <?=$arResult['PX_PRICES']['BASE']['SYMBOL']?>
          <? if ($arResult['PX_PRICES']['RUB']) { ?>
						<span class="catalog-list__price-postfix">
							(<?=$arResult['PX_PRICES']['RUB']['VALUE_PRINT']?> <?=$arResult['PX_PRICES']['RUB']['SYMBOL']?>)
						</span>
          <? } ?>
					<span class="catalog-list__price-postfix">за м<sup>2</sup></span>
        <? } else { ?>
					<? if ($arResult['PROPERTIES']['PRICE']['VALUE']) { ?>
						от <?=$arResult['PROPERTIES']['PRICE']['VALUE']?> $ <span class="catalog-detail__price-postfix">за м<sup>2</sup> (в руб. — по курсу)</span>
					<? } else { ?>
						по запросу
					<? } ?>
				<? } ?>
			</div>
			<div class="catalog-detail__order">
				<span class="site-button" data-form="order-stone-detail" data-item="<?=$arResult['IBLOCK_ID']?>/<?=$arResult['ID']?>" onclick="ym(8100544, 'reachGoal', 'JS-ZAKAZ-KAMNI'); return true;">Заказать</span>
			</div>
			<div class="catalog-detail__payments">
				<div class="h4">Способы оплаты</div>
          <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => "/includes-area/payments-list.php",
              "EDIT_TEMPLATE" => ""
          ),
              $component
          );?>
			</div>
		</div>
	</div>
	<div class="catalog-detail__row">
		<div class="catalog-detail__tabs">
			<? if ($arResult['DETAIL_TEXT']) { ?>
				<input type="radio" id="description" name="tabs" class="catalog-detail__tabs-radio" checked="">
				<label for="description" class="catalog-detail__tabs-item">Описание</label>
				<div class="catalog-detail__tabs-body">
					<?=$arResult['DETAIL_TEXT']?>
				</div>
			<? } ?>

			<input type="radio" id="delivery" name="tabs" class="catalog-detail__tabs-radio"<? if (!$arResult['DETAIL_TEXT']) { ?> checked=""<? } ?>>
			<label for="delivery" class="catalog-detail__tabs-item">Доставка</label>
			<div class="catalog-detail__tabs-body">
          <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => "/includes-area/delivery.php",
              "EDIT_TEMPLATE" => ""
          ),
              $component
          );?>
			</div>
		</div>
	</div>
</div>