<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->createFrame()->begin("Загрузка навигации");
?>

<?if($arResult["NavPageCount"] > 1):?>
	<div class="page-nav-ajax">
    <?if ($arResult["NavPageNomer"]+1 <= $arResult["nEndPage"]):?>
      <?
      $plus = $arResult["NavPageNomer"]+1;
      $url = $arResult["sUrlPathParams"] . "PAGEN_".$arResult["NavNum"]."=".$plus;
      ?>
			<div class="page-nav-ajax__load-more site-button site-button--light js-load-more" data-url="<?=$url?>">
				Показать ещё
			</div>
    <?else:?>
			<? /* <div class="load-more site-button site-button--light" style="margin: 0 auto">
				Загружено все
			</div> */ ?>
    <?endif?>
	</div>
<?endif?>