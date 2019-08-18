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
<div class="product-detail">
	<div class="product-detail__row">
		<div class="product-detail__images">
			<div class="product-detail__main-image">
				<? if ($arResult['DETAIL_PICTURE']) { ?>
					<a href="<?=$arResult['DETAIL_PICTURE']['SRC']?>" class="product-detail__image-item" data-fancybox="product-detail">
						<img src="<?=$arResult['PX_DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>">
					</a>
				<? } ?>
			</div>
			<div class="product-detail__more-images">
				<? if ($arResult['PROPERTIES']['MORE_PHOTO']) { ?>
					<? foreach ($arResult['PX_PROPERTIES']['MORE_PHOTO'] as $arImage) { ?>
						<a href="<?=$arImage['ORIGINAL']['SRC']?>" class="product-detail__image-item" data-fancybox="product-detail"><img src="<?=$arImage['RESIZED']['SRC']?>" alt="<?=$arImage['ORIGINAL']['DESCRPTION']?>"></a>
					<? } ?>
				<? } ?>
			</div>
		</div>
		<div class="product-detail__info">
      <? if ($arResult['PROPERTIES']['SPECIFICATIONS']['VALUE']) { ?>
				<div class="h4">Характеристики</div>
				<dl class="product-detail__specifications">
					<? foreach ($arResult['PROPERTIES']['SPECIFICATIONS']['VALUE'] as $key => $value) { ?>
            <dt><span><?=$arResult['PROPERTIES']['SPECIFICATIONS']['DESCRIPTION'][$key]?></span></dt>
						<dd><span><?=$value?></span></dd>
					<? } ?>
				</dl>
			<? } ?>
			<div class="catalog-detail__order">
				<span class="site-button" data-form="order-portfolio-detail" data-item="<?=$arResult['IBLOCK_ID']?>/<?=$arResult['ID']?>" onclick="ym(8100544, 'reachGoal', 'JS-ZAKAZ-IZDELIYA'); return true;">Заказать</span>
			</div>
			<div class="product-detail__payments">
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
	<div class="product-detail__row">
		<div class="product-detail__tabs">
			<? if ($arResult['DETAIL_TEXT']) { ?>
				<input type="radio" id="description" name="tabs" class="product-detail__tabs-radio" checked="">
				<label for="description" class="product-detail__tabs-item">Описание</label>
				<div class="product-detail__tabs-body">
					<?=$arResult['DETAIL_TEXT']?>
				</div>
			<? } ?>

			<input type="radio" id="delivery" name="tabs" class="product-detail__tabs-radio"<? if (!$arResult['DETAIL_TEXT']) { ?> checked=""<? } ?>>
			<label for="delivery" class="product-detail__tabs-item">Доставка</label>
			<div class="product-detail__tabs-body">
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