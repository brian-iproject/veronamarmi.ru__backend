<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? if (!empty($arResult)) {
	global $APPLICATION;
	$curdir = $APPLICATION->GetCurDir();
	$page = $APPLICATION->GetCurPage();
	if ($page != $curdir) $curdir = $page;
?>
<div class="filter-menu">
	<ul class="filter-menu__list">
		<? foreach($arResult as $key => $arItem) {
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
		?>
			<? if ($key > 0) { ?>
				<li class="filter-menu__item-sep"></li>
			<? } ?>
		  <? if ($arItem["SELECTED"] && $curdir==$arItem["LINK"]) { ?>
				<li class="filter-menu__item"><span class="filter-menu__link filter-menu__link--selected"><?=$arItem["TEXT"]?></span></li>
			<? } else if ($arItem["SELECTED"]) { ?>
				<li class="filter-menu__item"><a href="<?=$arItem["LINK"]?>" class="filter-menu__link filter-menu__link--selected"><?=$arItem["TEXT"]?></a></li>
			<? } else { ?>
				<li class="filter-menu__item"><a href="<?=$arItem["LINK"]?>" class="filter-menu__link"><?=$arItem["TEXT"]?></a></li>
			<? } ?>
		<? } ?>
	</ul>
</div>
<? } ?>