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
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);
?>
<div class="catalog">
  <?$APPLICATION->ShowViewContent('top-text')?>
	<div class="catalog__columns">
		<div class="catalog__aside">
			<button class="catalog__mobile-button" data-mobile-button="filter">
				<svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-filter"></use></svg> Фильтр
			</button>
			<div class="catalog__filter" data-mobile-block="filter">
				<button class="catalog__filter__close-mobile" data-mobile-button="filter"></button>
				<?
				if (!isset($arParams['FILTER_VIEW_MODE']) || (string)$arParams['FILTER_VIEW_MODE'] == '')
					$arParams['FILTER_VIEW_MODE'] = 'VERTICAL';
				$arParams['USE_FILTER'] = (isset($arParams['USE_FILTER']) && $arParams['USE_FILTER'] == 'Y' ? 'Y' : 'N');

				$isVerticalFilter = ('Y' == $arParams['USE_FILTER'] && $arParams["FILTER_VIEW_MODE"] == "VERTICAL");
				$isSidebar = ($arParams["SIDEBAR_SECTION_SHOW"] == "Y" && isset($arParams["SIDEBAR_PATH"]) && !empty($arParams["SIDEBAR_PATH"]));
				$isFilter = ($arParams['USE_FILTER'] == 'Y');

				if ($isFilter)
				{
					$arFilter = array(
						"IBLOCK_ID" => $arParams["IBLOCK_ID"],
						"ACTIVE" => "Y",
						"GLOBAL_ACTIVE" => "Y",
					);
					if (0 < intval($arResult["VARIABLES"]["SECTION_ID"]))
						$arFilter["ID"] = $arResult["VARIABLES"]["SECTION_ID"];
					elseif ('' != $arResult["VARIABLES"]["SECTION_CODE"])
						$arFilter["=CODE"] = $arResult["VARIABLES"]["SECTION_CODE"];

					$obCache = new CPHPCache();
					if ($obCache->InitCache(36000, serialize($arFilter), "/iblock/catalog"))
					{
						$arCurSection = $obCache->GetVars();
					}
					elseif ($obCache->StartDataCache())
					{
						$arCurSection = array();
						if (Loader::includeModule("iblock"))
						{
							$dbRes = CIBlockSection::GetList(array(), $arFilter, false, array("ID"));

							if(defined("BX_COMP_MANAGED_CACHE"))
							{
								global $CACHE_MANAGER;
								$CACHE_MANAGER->StartTagCache("/iblock/catalog");

								if ($arCurSection = $dbRes->Fetch())
									$CACHE_MANAGER->RegisterTag("iblock_id_".$arParams["IBLOCK_ID"]);

								$CACHE_MANAGER->EndTagCache();
							}
							else
							{
								if(!$arCurSection = $dbRes->Fetch())
									$arCurSection = array();
							}
						}
						$obCache->EndDataCache($arCurSection);
					}
					if (!isset($arCurSection))
						$arCurSection = array();
				}
				?>
	      <?$APPLICATION->IncludeComponent("bitrix:menu", "filter-menu", Array(
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
							0 => "",
						),
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
						"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
						"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					),
					false
				);?>
				<?/*$APPLICATION->IncludeComponent(
			    "bitrix:catalog.section.list",
			    "",
			    array(
			        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
			        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
			        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
			        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
			        "CACHE_TIME" => $arParams["CACHE_TIME"],
			        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			        "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
			        "TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
			        "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
			        "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
			        "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
			        "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
			        "ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
			    ),
			    $component,
			    array("HIDE_ICONS" => "Y")
				);*/?>

				<?$APPLICATION->IncludeComponent(
			    "bitrix:catalog.smart.filter",
			    "",
			    array(
			        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
			        "SECTION_ID" => $arCurSection['ID'],
			        "FILTER_NAME" => $arParams["FILTER_NAME"],
			        "PRICE_CODE" => $arParams["~PRICE_CODE"],
			        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
			        "CACHE_TIME" => $arParams["CACHE_TIME"],
			        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			        "SAVE_IN_SESSION" => "N",
			        "FILTER_VIEW_MODE" => $arParams["FILTER_VIEW_MODE"],
			        "XML_EXPORT" => "N",
			        "SECTION_TITLE" => "NAME",
			        "SECTION_DESCRIPTION" => "DESCRIPTION",
			        'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
			        "TEMPLATE_THEME" => "yellow",
			        'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
			        'CURRENCY_ID' => $arParams['CURRENCY_ID'],
			        "SEF_MODE" => $arParams["SEF_MODE"],
			        "SEF_RULE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["smart_filter"],
			        "SMART_FILTER_PATH" => $arResult["VARIABLES"]["SMART_FILTER_PATH"],
			        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
			        "INSTANT_RELOAD" => $arParams["INSTANT_RELOAD"],
			    ),
			    $component,
			    array('HIDE_ICONS' => 'Y')
				);?>
			</div>
		</div>
		<div class="catalog__content">
      <?
      $sectionId = $arResult["VARIABLES"]["SECTION_ID"];
      if($arResult["VARIABLES"]["SECTION_ID"]){
          $section = CIBlockSection::GetList(
              array("SORT"=>"ASC"),
              array(
                  "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                  'ID' => $arResult["VARIABLES"]["SECTION_ID"]
              ),
              false,
              array()
          )->fetch();
          if (($section['RIGHT_MARGIN'] - $section['LEFT_MARGIN']) > 1) {
              $sectionId = $arResult["VARIABLES"]["SECTION_ID"];
              $bSubsections = 'Y';
          } else {
              $sectionId = $section['IBLOCK_SECTION_ID'];
              $bSubsections = 'N';
          }
      }
      ?>
      <?
      $GLOBALS["tagsFilter"] = array(
          "!UF_IS_TAG" => 0,
          "IBLOCK_ID" => 3
      );
      $APPLICATION->IncludeComponent(
          "bitrix:catalog.section.list",
          "tags",
          array(
              "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
              "IBLOCK_ID" => $arParams["IBLOCK_ID"],
              "SECTION_ID" => $sectionId,
              "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
              "CACHE_TYPE" => $arParams["CACHE_TYPE"],
              "CACHE_TIME" => $arParams["CACHE_TIME"],
              "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
              "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
              "TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
              "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
              "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
              "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
              "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
              "ADD_SECTIONS_CHAIN" => 'N',
              "FILTER_NAME" => "tagsFilter"
          ),
          $component,
          array("HIDE_ICONS" => "Y")
      );?>
        <?
        if ($_REQUEST["by"]) {
            $by = $_SESSION["PX_SORT_BY"][$arParams["SECTION_ID"]] = $_REQUEST["by"];
        } elseif ($_SESSION["PX_SORT_BY"][$arParams["SECTION_ID"]]) {
            $by = $_SESSION["PX_SORT_BY"][$arParams["SECTION_ID"]];
        } else {
            $by = $arParams["ELEMENT_SORT_FIELD"];
        }

        if ($_REQUEST["order"]) {
            $order = $_SESSION["PX_SORT_ORDER"][$arParams["SECTION_ID"]] = $_REQUEST["order"];
        } elseif ($_SESSION["PX_SORT_ORDER"][$arParams["SECTION_ID"]]) {
            $order = $_SESSION["PX_SORT_ORDER"][$arParams["SECTION_ID"]];
        } else {
            $order = $arParams["ELEMENT_SORT_ORDER"];
        }

        $arResult["SORT_LIST"] = Array(
            "SHOWS"=>Array(
                "NAME"=>"По популярности",
                "BY"=>"SHOWS",
                "DEF_ORDER"=>"desc,nulls"
            ),
            "PROPERTY_PRICE"=>Array(
                "NAME"=>"По стоимости",
                "BY"=>"PROPERTY_PRICE",
                "DEF_ORDER"=>"asc,nulls"
            )
        );
        foreach ($arResult["SORT_LIST"] as &$arSort) {
            if ($arSort["BY"] == $by) {

                $arSort["SELECTED"] = true;
                $arSort["CURRENT_ORDER"] = $order;
                $newOrder = "asc,nulls";
                if ($order == "asc,nulls") {
                    $newOrder = "desc,nulls";
                }
            } else {
                $newOrder = $arSort["DEF_ORDER"];
            }
            $lnk = "by"."=".$arSort["BY"]."&"."order"."=".$newOrder;

            $arSort["LINK"] = $APPLICATION->GetCurPageParam($lnk,Array("by","order"));
            unset($arSort);
        }
        ?>

			<div class="catalog-sorter">
				<div class="catalog-sorter__head">Сортировать по:</div>
        <? foreach ($arResult["SORT_LIST"] as $arValue) { ?>
					<div class="catalog-sorter__item">
						<? if ($arValue["SELECTED"]){ ?>
							<span data-ex-href="<?=$arValue["LINK"]?>" class="catalog-sorter__link catalog-sorter__link--active catalog-sorter__link--<?=str_replace(',nulls', '', $arValue["CURRENT_ORDER"])?>"><?=$arValue["NAME"]?></span>
			      <?} else {?>
							<span data-ex-href="<?=$arValue["LINK"]?>" class="catalog-sorter__link catalog-sorter__link--<?=str_replace(',nulls', '', $arValue["DEF_ORDER"])?>"><?=$arValue["NAME"]?></span>
			      <?}?>
					</div>
        <? } ?>
			</div>
		  <? $intSectionID = $APPLICATION->IncludeComponent(
		      "bitrix:catalog.section",
		      "",
		      array(
		          "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		          "IBLOCK_ID" => $arParams["IBLOCK_ID"],
              "ELEMENT_SORT_FIELD" => $by,
              "ELEMENT_SORT_ORDER" => $order,
		          "ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
		          "ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
		          "PROPERTY_CODE" => (isset($arParams["LIST_PROPERTY_CODE"]) ? $arParams["LIST_PROPERTY_CODE"] : []),
		          "PROPERTY_CODE_MOBILE" => $arParams["LIST_PROPERTY_CODE_MOBILE"],
		          "META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
		          "META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
		          "BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
		          "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		          "INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
		          "BASKET_URL" => $arParams["BASKET_URL"],
		          "ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
		          "PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
		          "SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
		          "PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
		          "PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
		          "FILTER_NAME" => $arParams["FILTER_NAME"],
		          "CACHE_TYPE" => $arParams["CACHE_TYPE"],
		          "CACHE_TIME" => $arParams["CACHE_TIME"],
		          "CACHE_FILTER" => $arParams["CACHE_FILTER"],
		          "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		          "SET_TITLE" => $arParams["SET_TITLE"],
		          "MESSAGE_404" => $arParams["~MESSAGE_404"],
		          "SET_STATUS_404" => $arParams["SET_STATUS_404"],
		          "SHOW_404" => $arParams["SHOW_404"],
		          "FILE_404" => $arParams["FILE_404"],
		          "DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
		          "PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
		          "LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
		          "PRICE_CODE" => $arParams["~PRICE_CODE"],
		          "USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
		          "SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],

		          "PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
		          "USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
		          "ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
		          "PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
		          "PRODUCT_PROPERTIES" => (isset($arParams["PRODUCT_PROPERTIES"]) ? $arParams["PRODUCT_PROPERTIES"] : []),

		          "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
		          "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
		          "PAGER_TITLE" => $arParams["PAGER_TITLE"],
		          "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
		          "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		          "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
		          "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		          "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		          "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
		          "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		          "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		          "LAZY_LOAD" => $arParams["LAZY_LOAD"],
		          "MESS_BTN_LAZY_LOAD" => $arParams["~MESS_BTN_LAZY_LOAD"],
		          "LOAD_ON_SCROLL" => $arParams["LOAD_ON_SCROLL"],

		          "OFFERS_CART_PROPERTIES" => (isset($arParams["OFFERS_CART_PROPERTIES"]) ? $arParams["OFFERS_CART_PROPERTIES"] : []),
		          "OFFERS_FIELD_CODE" => $arParams["LIST_OFFERS_FIELD_CODE"],
		          "OFFERS_PROPERTY_CODE" => (isset($arParams["LIST_OFFERS_PROPERTY_CODE"]) ? $arParams["LIST_OFFERS_PROPERTY_CODE"] : []),
		          "OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
		          "OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
		          "OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
		          "OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
		          "OFFERS_LIMIT" => (isset($arParams["LIST_OFFERS_LIMIT"]) ? $arParams["LIST_OFFERS_LIMIT"] : 0),

		          "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		          "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		          "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		          "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
		          "USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
		          'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
		          'CURRENCY_ID' => $arParams['CURRENCY_ID'],
		          'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
		          'HIDE_NOT_AVAILABLE_OFFERS' => $arParams["HIDE_NOT_AVAILABLE_OFFERS"],

		          'LABEL_PROP' => $arParams['LABEL_PROP'],
		          'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
		          'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
		          'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
		          'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
		          'PRODUCT_BLOCKS_ORDER' => $arParams['LIST_PRODUCT_BLOCKS_ORDER'],
		          'PRODUCT_ROW_VARIANTS' => $arParams['LIST_PRODUCT_ROW_VARIANTS'],
		          'ENLARGE_PRODUCT' => $arParams['LIST_ENLARGE_PRODUCT'],
		          'ENLARGE_PROP' => isset($arParams['LIST_ENLARGE_PROP']) ? $arParams['LIST_ENLARGE_PROP'] : '',
		          'SHOW_SLIDER' => $arParams['LIST_SHOW_SLIDER'],
		          'SLIDER_INTERVAL' => isset($arParams['LIST_SLIDER_INTERVAL']) ? $arParams['LIST_SLIDER_INTERVAL'] : '',
		          'SLIDER_PROGRESS' => isset($arParams['LIST_SLIDER_PROGRESS']) ? $arParams['LIST_SLIDER_PROGRESS'] : '',

		          'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
		          'OFFER_TREE_PROPS' => (isset($arParams['OFFER_TREE_PROPS']) ? $arParams['OFFER_TREE_PROPS'] : []),
		          'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
		          'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
		          'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
		          'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
		          'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
		          'MESS_SHOW_MAX_QUANTITY' => (isset($arParams['~MESS_SHOW_MAX_QUANTITY']) ? $arParams['~MESS_SHOW_MAX_QUANTITY'] : ''),
		          'RELATIVE_QUANTITY_FACTOR' => (isset($arParams['RELATIVE_QUANTITY_FACTOR']) ? $arParams['RELATIVE_QUANTITY_FACTOR'] : ''),
		          'MESS_RELATIVE_QUANTITY_MANY' => (isset($arParams['~MESS_RELATIVE_QUANTITY_MANY']) ? $arParams['~MESS_RELATIVE_QUANTITY_MANY'] : ''),
		          'MESS_RELATIVE_QUANTITY_FEW' => (isset($arParams['~MESS_RELATIVE_QUANTITY_FEW']) ? $arParams['~MESS_RELATIVE_QUANTITY_FEW'] : ''),
		          'MESS_BTN_BUY' => (isset($arParams['~MESS_BTN_BUY']) ? $arParams['~MESS_BTN_BUY'] : ''),
		          'MESS_BTN_ADD_TO_BASKET' => (isset($arParams['~MESS_BTN_ADD_TO_BASKET']) ? $arParams['~MESS_BTN_ADD_TO_BASKET'] : ''),
		          'MESS_BTN_SUBSCRIBE' => (isset($arParams['~MESS_BTN_SUBSCRIBE']) ? $arParams['~MESS_BTN_SUBSCRIBE'] : ''),
		          'MESS_BTN_DETAIL' => (isset($arParams['~MESS_BTN_DETAIL']) ? $arParams['~MESS_BTN_DETAIL'] : ''),
		          'MESS_NOT_AVAILABLE' => (isset($arParams['~MESS_NOT_AVAILABLE']) ? $arParams['~MESS_NOT_AVAILABLE'] : ''),
		          'MESS_BTN_COMPARE' => (isset($arParams['~MESS_BTN_COMPARE']) ? $arParams['~MESS_BTN_COMPARE'] : ''),

		          'USE_ENHANCED_ECOMMERCE' => (isset($arParams['USE_ENHANCED_ECOMMERCE']) ? $arParams['USE_ENHANCED_ECOMMERCE'] : ''),
		          'DATA_LAYER_NAME' => (isset($arParams['DATA_LAYER_NAME']) ? $arParams['DATA_LAYER_NAME'] : ''),
		          'BRAND_PROPERTY' => (isset($arParams['BRAND_PROPERTY']) ? $arParams['BRAND_PROPERTY'] : ''),

		          'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
		          "ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : ''),
		          'ADD_TO_BASKET_ACTION' => $basketAction,
		          'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
		          'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare'],
		          'COMPARE_NAME' => $arParams['COMPARE_NAME'],
		          'USE_COMPARE_LIST' => 'Y',
		          'BACKGROUND_IMAGE' => (isset($arParams['SECTION_BACKGROUND_IMAGE']) ? $arParams['SECTION_BACKGROUND_IMAGE'] : ''),
		          'COMPATIBLE_MODE' => (isset($arParams['COMPATIBLE_MODE']) ? $arParams['COMPATIBLE_MODE'] : ''),
		          'DISABLE_INIT_JS_IN_COMPONENT' => (isset($arParams['DISABLE_INIT_JS_IN_COMPONENT']) ? $arParams['DISABLE_INIT_JS_IN_COMPONENT'] : ''),

              "SECTION_USER_FIELDS" => array("UF_TOP_DESCRIPTION",""),

              "SET_BROWSER_TITLE" => "N",
		      ),
		      $component
		  );
		  $GLOBALS['CATALOG_CURRENT_SECTION_ID'] = $intSectionID;
		  ?>
		</div>
	</div>
  <?$APPLICATION->ShowViewContent('bottom-text')?>
</div>