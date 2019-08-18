<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (!empty($arResult)) {
		global $APPLICATION;
		$curdir = $APPLICATION->GetCurDir();
		$page = $APPLICATION->GetCurPage();
		if ($page != $curdir) $curdir = $page;
?>
<div class="main-menu">
	<ul class="main-menu__list main-menu__list--lvl1">
<?
		$previousLevel = 0;
		foreach($arResult as $arItem) {
				if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) {
						echo str_repeat("</ul></div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
				}
				?>
        <? if ($arItem["DEPTH_LEVEL"] <= $previousLevel) { ?>
		      <li class="main-menu__item-sep main-menu__item-sep--lvl<?=$arItem["DEPTH_LEVEL"]?>"></li>
		    <? } ?>
				<?if ($arItem["IS_PARENT"]):?>
						<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <? if ($arItem["SELECTED"] && $curdir==$arItem["LINK"]) { ?>
                <li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--parent main-menu__item--selected">
									<span class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__link--selected"><?=$arItem["TEXT"]?></span> <button class="main-menu__dropdown js-main-menu__dropdown"><span></span></button>
									<div class="main-menu__list-wrapper main-menu__list-wrapper--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
										<ul class="main-menu__list main-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
          	    <? } elseif ($arItem["SELECTED"]) { ?>
								<li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--parent main-menu__item--selected">
									<a href="<?=$arItem["LINK"]?>" class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__link--selected"><?=$arItem["TEXT"]?></a> <button class="main-menu__dropdown js-main-menu__dropdown"><span></span></button>
									<div class="main-menu__list-wrapper main-menu__list-wrapper--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
										<ul class="main-menu__list main-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
                <? } else { ?>
	              <li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--parent">
									<a href="<?=$arItem["LINK"]?>" class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?>"><?=$arItem["TEXT"]?></a> <button class="main-menu__dropdown js-main-menu__dropdown"><span></span></button>
									<div class="main-menu__list-wrapper main-menu__list-wrapper--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
										<ul class="main-menu__list main-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
          	    <? } ?>
						<?else:?>
        	      <? if ($arItem["SELECTED"] && $curdir==$arItem["LINK"]) { ?>
                <li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--parent main-menu__item--selected">
									<span class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__link--selected"><?=$arItem["TEXT"]?></span>
									<div class="main-menu__list-wrapper main-menu__list-wrapper--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
										<ul class="main-menu__list main-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
          	    <? } elseif ($arItem["SELECTED"]) { ?>
                <li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--parent main-menu__item--selected">
									<a href="<?=$arItem["LINK"]?>" class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__link--selected"><?=$arItem["TEXT"]?></a>
									<div class="main-menu__list-wrapper main-menu__list-wrapper--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
										<ul class="main-menu__list main-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
                <? } else { ?>
								<li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--parent">
									<a href="<?=$arItem["LINK"]?>" class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?>"><?=$arItem["TEXT"]?></a>
									<div class="main-menu__list-wrapper main-menu__list-wrapper--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
										<ul class="main-menu__list main-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
          	    <? } ?>
						<?endif?>
				<?else:?>
						<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <? if ($arItem["SELECTED"] && $curdir==$arItem["LINK"]) { ?>
								<li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--selected">
									<span class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__link--selected"><?=$arItem["TEXT"]?></span>
								</li>
                <? } else if ($arItem["SELECTED"]) { ?>
								<li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--selected">
									<a href="<?=$arItem["LINK"]?>" class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__link--selected"><?=$arItem["TEXT"]?></a>
								</li>
                <? } else { ?>
                <li class="main-menu__item main-menu__item--lvl1">
	                <a href="<?=$arItem["LINK"]?>" class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?>"><?=$arItem["TEXT"]?></a>
                </li>
                <? } ?>
						<?else:?>
                <? if ($arItem["SELECTED"] && $curdir==$arItem["LINK"]) { ?>
								<li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--selected">
									<span class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__link--selected"><?=$arItem["TEXT"]?></span>
								</li>
                <? } else if ($arItem["SELECTED"]) { ?>
                <li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__item--selected">
	                <a href="<?=$arItem["LINK"]?>" class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> main-menu__link--selected"><?=$arItem["TEXT"]?></a>
                </li>
                <? } else { ?>
                <li class="main-menu__item main-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?>">
	                <a href="<?=$arItem["LINK"]?>" class="main-menu__link main-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?>"><?=$arItem["TEXT"]?></a>
                </li>
                <? } ?>
						<?endif?>
				<?endif?>
				<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
		<? } ?>

		<?if ($previousLevel > 1)://close last item tags?>
			<?=str_repeat("</ul></div></li>", ($previousLevel-1) );?>
		<?endif?>
	</ul>
</div>
<? } ?>