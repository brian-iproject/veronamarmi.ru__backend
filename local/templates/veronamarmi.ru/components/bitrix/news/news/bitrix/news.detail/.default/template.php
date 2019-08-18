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
$this->addExternalJS("https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js");
$this->addExternalJS("https://yastatic.net/share2/share.js");
?>
<div class="news-detail">
	<?=$arResult['DETAIL_TEXT']?>
</div>

<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,viber,whatsapp,telegram" style="margin-top: 15px"></div>