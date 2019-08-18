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
<? if (count($arResult['SECTIONS'])) { ?>
<div class="tags">
	<div class="tags__heading">Выбрать по тегу:</div>
	<ul class="tags__list">
	  <? foreach ($arResult['SECTIONS'] as $arSection) {
	      $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
	      $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	      ?>
		  <li class="tags__item" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
        <? if ($APPLICATION->GetCurPage() == $arSection['SECTION_PAGE_URL']) { ?>
		      <span href="<?=$arSection["SECTION_PAGE_URL"]?>" class="tags__link tags__link--selected"><?=$arSection["NAME"]?></span>
				<? } else { ?>
		      <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="tags__link"><?=$arSection["NAME"]?></a>
				<? } ?>
	    </li>
	  <? } ?>
	</ul>
</div>
<? } ?>