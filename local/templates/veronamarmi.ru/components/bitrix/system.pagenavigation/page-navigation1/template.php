<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}
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

<div class="page-navigation">
    <ul class="page-navigation__list">
<?

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

if($arResult["bDescPageNumbering"] === true):
	$bFirst = true;
	if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
		if($arResult["bSavePage"]):
?>

            <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("NAV_PREV")?></a></li>
<?
		else:
			if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("NAV_PREV")?></a></li>
<?
			else:
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("NAV_PREV")?></a></li>
<?
			endif;
		endif;
		
		if ($arResult["nStartPage"] < $arResult["NavPageCount"]):
			$bFirst = false;
			if($arResult["bSavePage"]):
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>">1</a></li>
<?
			else:
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a></li>
<?
			endif;
			if ($arResult["nStartPage"] < ($arResult["NavPageCount"] - 1)):
/*?>
			<span class="modern-page-dots">...</span>
<?*/
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=intVal($arResult["nStartPage"] + ($arResult["NavPageCount"] - $arResult["nStartPage"]) / 2)?>">...</a></li>
<?
			endif;
		endif;
	endif;
	do
	{
		$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;
		
		if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
?>
			<li class="page-navigation__item"><span class="<?=($bFirst ? "page-navigation__link " : "")?>modern-page-current"><?=$NavRecordGroupPrint?></span></li>
<?
		elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):
?>
            <li class="page-navigation__item"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="page-navigation__link")?>"><?=$NavRecordGroupPrint?></a></li>
<?
		else:
?>
        <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"<?
            ?> class="<?=($bFirst ? "page-navigation__link" : "")?>"><?=$NavRecordGroupPrint?></a></li>
<?
		endif;
		
		$arResult["nStartPage"]--;
		$bFirst = false;
	} while($arResult["nStartPage"] >= $arResult["nEndPage"]);
	
	if ($arResult["NavPageNomer"] > 1):
		if ($arResult["nEndPage"] > 1):
			if ($arResult["nEndPage"] > 2):
/*?>
		<span class="modern-page-dots">...</span>
<?*/
?>
                <li class="page-navigation__item"><a class="modern-page-dots" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nEndPage"] / 2)?>">...</a></li>
<?
			endif;
?>
            <li class="page-navigation__item"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=$arResult["NavPageCount"]?></a></li>
<?
		endif;
	
?>
        <li class="page-navigation__item"><a class="modern-page-next"href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("NAV_NEXT")?></a></li>
<?
	endif;

else:
	$bFirst = true;

	if ($arResult["NavPageNomer"] > 1):
		if($arResult["bSavePage"]):
?>
            <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("NAV_PREV")?></a></li>
<?
		else:
			if ($arResult["NavPageNomer"] > 2):
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("NAV_PREV")?></a></li>
<?
			else:
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("NAV_PREV")?></a></li>
<?
			endif;

		endif;

		if ($arResult["nStartPage"] > 1):
			$bFirst = false;
			if($arResult["bSavePage"]):
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">1</a></li>
<?
			else:
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a></li>
<?
			endif;
			if ($arResult["nStartPage"] > 2):
/*?>
			<span class="modern-page-dots">...</span>
<?*/
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nStartPage"] / 2)?>">...</a></li>
<?
			endif;
		endif;
	endif;

	do
	{
		if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
?>
			<li class="page-navigation__item"><span class="page-navigation__link page-navigation__link--selected"><?=$arResult["nStartPage"]?></span></li>
<?
		elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
?>
            <li class="page-navigation__item"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="page-navigation__link"><?=$arResult["nStartPage"]?></a></li>
<?
		else:
?>
        <li class="page-navigation__item"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"<?
            ?> class="page-navigation__link"><?=$arResult["nStartPage"]?></a></li>
<?
		endif;
		$arResult["nStartPage"]++;
		$bFirst = false;
	} while($arResult["nStartPage"] <= $arResult["nEndPage"]);

	if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
		if ($arResult["nEndPage"] < $arResult["NavPageCount"]):
			if ($arResult["nEndPage"] < ($arResult["NavPageCount"] - 1)):
/*?>
		<span class="modern-page-dots">...</span>
<?*/
?>
                <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nEndPage"] + ($arResult["NavPageCount"] - $arResult["nEndPage"]) / 2)?>">...</a></li>
<?
			endif;
?>
            <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a></li>
<?
		endif;
?>
        <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("NAV_NEXT")?></a></li>
<?
	endif;
endif;

if ($arResult["bShowAll"]):
	if ($arResult["NavShowAll"]):
?>
        <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0"><?=GetMessage("NAV_PAGED")?></a></li>
<?
	else:
?>
        <li class="page-navigation__item"><a class="page-navigation__link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1"><?=GetMessage("NAV_ALL")?></a></li>
<?
	endif;
endif
?>
    </ul>
</div>