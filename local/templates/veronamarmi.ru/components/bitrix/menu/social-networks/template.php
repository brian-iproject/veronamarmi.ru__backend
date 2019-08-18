<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="social-networks">
	<ul class="social-networks__list">
<? foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
		<li class="social-networks__item">
			<a href="<?=$arItem["LINK"]?>" target="_blank"><svg class="svg-icon social-networks__icon social-networks__icon--<?=$arItem["TEXT"]?>"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-<?=$arItem["TEXT"]?>"></use></svg></a>
		</li>
<?endforeach?>
	</ul>
</div>
<?endif?>