<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (!empty($arResult)) {
		global $APPLICATION;
		$curdir = $APPLICATION->GetCurDir();
		$page = $APPLICATION->GetCurPage();
		if ($page != $curdir) $curdir = $page;
?>
<div class="footer-menu">
	<ul class="footer-menu__list footer-menu__list--lvl1">
<?
		$previousLevel = 0;
		foreach($arResult as $arItem) {
				if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) {
						echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
				}
				?>
				<?if ($arItem["IS_PARENT"]):?>
						<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <? if ($arItem["SELECTED"] && $curdir==$arItem["LINK"]) { ?>
                <li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--parent footer-menu__item--selected">
									<span class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__link--selected"><?=$arItem["TEXT"]?></span>
										<ul class="footer-menu__list footer-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
          	    <? } elseif ($arItem["SELECTED"]) { ?>
								<li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--parent footer-menu__item--selected">
									<a href="<?=$arItem["LINK"]?>" class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__link--selected"><?=$arItem["TEXT"]?></a>
										<ul class="footer-menu__list footer-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
                <? } else { ?>
	              <li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--parent">
									<a href="<?=$arItem["LINK"]?>" class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?>"><?=$arItem["TEXT"]?></a>
										<ul class="footer-menu__list footer-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
          	    <? } ?>
						<?else:?>
        	      <? if ($arItem["SELECTED"] && $curdir==$arItem["LINK"]) { ?>
                <li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--parent footer-menu__item--selected">
									<span class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__link--selected"><?=$arItem["TEXT"]?></span>
										<ul class="footer-menu__list footer-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
          	    <? } elseif ($arItem["SELECTED"]) { ?>
                <li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--parent footer-menu__item--selected">
									<a href="<?=$arItem["LINK"]?>" class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__link--selected"><?=$arItem["TEXT"]?></a>
										<ul class="footer-menu__list footer-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
                <? } else { ?>
								<li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--parent">
										<a href="<?=$arItem["LINK"]?>" class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?>"><?=$arItem["TEXT"]?></a>
											<ul class="footer-menu__list footer-menu__list--lvl<?=$arItem["DEPTH_LEVEL"]+1?>">
          	    <? } ?>
						<?endif?>
				<?else:?>
						<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <? if ($arItem["SELECTED"] && $curdir==$arItem["LINK"]) { ?>
								<li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--selected">
									<span class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__link--selected"><?=$arItem["TEXT"]?></span>
								</li>
                <? } else if ($arItem["SELECTED"]) { ?>
								<li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--selected">
									<a href="<?=$arItem["LINK"]?>" class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__link--selected"><?=$arItem["TEXT"]?></a>
								</li>
                <? } else { ?>
                <li class="footer-menu__item footer-menu__item--lvl1">
	                <a href="<?=$arItem["LINK"]?>" class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?>"><?=$arItem["TEXT"]?></a>
                </li>
                <? } ?>
						<?else:?>
                <? if ($arItem["SELECTED"] && $curdir==$arItem["LINK"]) { ?>
								<li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--selected">
									<span class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__link--selected"><?=$arItem["TEXT"]?></span>
								</li>
                <? } else if ($arItem["SELECTED"]) { ?>
                <li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__item--selected">
	                <a href="<?=$arItem["LINK"]?>" class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?> footer-menu__link--selected"><?=$arItem["TEXT"]?></a>
                </li>
                <? } else { ?>
                <li class="footer-menu__item footer-menu__item--lvl<?=$arItem["DEPTH_LEVEL"]?>">
	                <a href="<?=$arItem["LINK"]?>" class="footer-menu__link footer-menu__link--lvl<?=$arItem["DEPTH_LEVEL"]?>"><?=$arItem["TEXT"]?></a>
                </li>
                <? } ?>
						<?endif?>
				<?endif?>
				<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
		<? } ?>

		<?if ($previousLevel > 1)://close last item tags?>
			<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
		<?endif?>
	</ul>
</div>
<? } ?>