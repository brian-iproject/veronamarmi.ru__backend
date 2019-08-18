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
<? if ($arResult['SECTION']['~UF_TOP_DESCRIPTION']) { ?>
	<div class="products__top-text important-text">
	    <?=$arResult['SECTION']['~UF_TOP_DESCRIPTION']?>
	</div>
<? } ?>
<div class="products-sections">
  <?
  foreach ($arResult['SECTIONS'] as $arSection) {
      $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
      $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
      ?>
    <div class="products-sections__item" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
	    <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="products-sections__link">
		    <? if ($arSection["PX_PICTURE"]["SRC"]) { ?>
		      <span class="products-sections__image"><img src="<?=$arSection["PX_PICTURE"]["SRC"]?>" alt="<?=$arSection["PICTURE"]["ALT"]?>"></span>
		    <? } ?>
        <?=$arSection["NAME"]?>
	    </a>
    </div>
  <? } ?>
</div>