<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
  <?$APPLICATION->ShowHead(false)?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?
  CUtil::InitJSCore();

  use \Bitrix\Main\Page\Asset;
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libs/normalize/normalize.css');
  Asset::getInstance()->addCss('https://fonts.googleapis.com/css?family=Noto+Serif:400,700&subset=cyrillic');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libs/slick/slick.css');

  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/jquery/jquery-3.4.1.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/slick/slick.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/maskedinput/jquery.maskedinput.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/script.js');

  Asset::getInstance()->addString('<link rel="shortcut icon" href="'.SITE_TEMPLATE_PATH.'/favicon.ico" type="image/x-icon">');
  Asset::getInstance()->addString('<link rel="icon" href="'.SITE_TEMPLATE_PATH.'/favicon.ico" type="image/x-icon">');
  ?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="page-wrapper">
	<div class="topline">
		<div class="topline__inner container--fluid">
			<div class="topline__address1">
        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH."/includes-area/address1.php",
            "EDIT_TEMPLATE" => ""
        ),
            false
        );?>
			</div>
			<div class="topline__address2">
        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH."/includes-area/address2.php",
            "EDIT_TEMPLATE" => ""
        ),
            false
        );?>
			</div>
			<div class="topline__time-work">
        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH."/includes-area/time-work.php",
            "EDIT_TEMPLATE" => ""
        ),
            false
        );?>
			</div>
		</div>
	</div>
	<header class="page-header container--fluid">
		<button class="page-header__button-mobile-search" data-mobile-button="search">
			<svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-search"></use></svg>
		</button>
		<div class="page-header__logo">
      <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH."/includes-area/logo.php",
          "EDIT_TEMPLATE" => ""
      ),
          false
      );?>
		</div>
		<button class="page-header__button-mobile-phone" data-mobile-button="contacts">
			<svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-phone"></use></svg>
		</button>
		<div class="page-header__slogan">
      <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH."/includes-area/slogan.php",
          "EDIT_TEMPLATE" => ""
      ),
          false
      );?>
		</div>
		<div class="page-header__search" data-mobile-block="search">
			<button class="page-header__close-mobile" data-mobile-button="search"></button>
      <?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"header-search", 
	array(
		"PAGE" => "#SITE_DIR#rezultatyi-poiska/index.php",
		"USE_SUGGEST" => "N",
		"COMPONENT_TEMPLATE" => "header-search"
	),
	false
);?>
		</div>
		<div class="page-header__callback">
      <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH."/includes-area/callback-button-header.php",
          "EDIT_TEMPLATE" => ""
      ),
          false
      );?>
		</div>
		<div class="page-header__contacts" data-mobile-block="contacts">
			<button class="page-header__close-mobile" data-mobile-button="contacts"></button>
			<div class="page-header__phone">
        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH."/includes-area/phone1.php",
            "EDIT_TEMPLATE" => ""
        ),
            false
        );?>
			</div>
			<div class="page-header__phone">
        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH."/includes-area/phone2.php",
            "EDIT_TEMPLATE" => ""
        ),
            false
        );?>
			</div>
			<div class="psge-header__email">
        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH."/includes-area/email.php",
            "EDIT_TEMPLATE" => ""
        ),
            false
        );?>
			</div>
		</div>
	</header>
	<nav class="page-nav">
		<div class="main-menu-burger">
      <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH."/includes-area/burger-menu.php",
          "EDIT_TEMPLATE" => ""
      ),
          false
      );?>
		</div>
		<div class="main-menu">
			<button class="main-menu__close-mobile js-main-menu-burger__button"></button>
			<div class="container--fluid">
          <?$APPLICATION->IncludeComponent(
              "bitrix:menu",
              "main-menu",
              array(
                  "ALLOW_MULTI_SELECT" => "Y",
                  "CHILD_MENU_TYPE" => "left",
                  "DELAY" => "N",
                  "MAX_LEVEL" => "3",
                  "MENU_CACHE_GET_VARS" => array(
                  ),
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_TYPE" => "Y",
                  "MENU_CACHE_USE_GROUPS" => "N",
                  "MENU_THEME" => "site",
                  "ROOT_MENU_TYPE" => "top",
                  "USE_EXT" => "Y",
                  "COMPONENT_TEMPLATE" => "main-menu"
              ),
              false
          );?>
			</div>
		</div>
	</nav>
  <?if($APPLICATION->GetCurPage() == SITE_DIR){?>
	  <?$APPLICATION->IncludeComponent("bitrix:news.list", "main-slider", Array(
	      "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	      "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	      "AJAX_MODE" => "N",	// Включить режим AJAX
	      "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	      "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	      "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	      "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	      "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	      "CACHE_GROUPS" => "N",	// Учитывать права доступа
	      "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	      "CACHE_TYPE" => "A",	// Тип кеширования
	      "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
	      "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	      "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
	      "DISPLAY_DATE" => "N",	// Выводить дату элемента
	      "DISPLAY_NAME" => "N",	// Выводить название элемента
	      "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
	      "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
	      "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	      "FIELD_CODE" => array(	// Поля
	          0 => "",
	          1 => "",
	      ),
	      "FILTER_NAME" => "",	// Фильтр
	      "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
	      "IBLOCK_ID" => "1",	// Код информационного блока
	      "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
	      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
	      "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
	      "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	      "NEWS_COUNT" => "20",	// Количество новостей на странице
	      "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
	      "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	      "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	      "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
	      "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
	      "PAGER_TITLE" => "Новости",	// Название категорий
	      "PARENT_SECTION" => "",	// ID раздела
	      "PARENT_SECTION_CODE" => "",	// Код раздела
	      "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
	      "PROPERTY_CODE" => array(	// Свойства
	          0 => "PREFIX",
	          1 => "",
	      ),
	      "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
	      "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
	      "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
	      "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
	      "SET_STATUS_404" => "N",	// Устанавливать статус 404
	      "SET_TITLE" => "N",	// Устанавливать заголовок страницы
	      "SHOW_404" => "N",	// Показ специальной страницы
	      "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
	      "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
	      "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
	      "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	      "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	  ),
	      false
	  );?>
	<? } ?>
	<div class="page-content<? if($APPLICATION->GetCurPage() != SITE_DIR && (!$APPLICATION->GetProperty("full-width") && $APPLICATION->GetProperty("full-width") != "N")) { ?> container--fluid<? } ?><?=$APPLICATION->ShowViewContent("pageContentClass")?>">
		<main class="page-content__inner">
      <?if($APPLICATION->GetCurPage() != SITE_DIR){?>
	      <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		"COMPONENT_TEMPLATE" => ""
	),
	false
);?>
				<h1><?=$APPLICATION->ShowTitle(false)?></h1>
			<? } ?>
