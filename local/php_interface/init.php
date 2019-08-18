<?
require_once dirname(__FILE__)."/include/pixelplus/dump.php";

use \Bitrix\Main\Loader;
use \Bitrix\Main\EventManager;

Loader::registerAutoLoadClasses(null, array(
    "CProjectHandlers"=>"/local/php_interface/include/pixelplus/classes/projecthandlers.php",
    //"CProjectFunct"=>"/local/php_interface/include/pixelplus/classes/projectfunct.php",
));

$eventManager = EventManager::getInstance();
$eventManager->addEventHandler(
    "main",
    "OnEndBufferContent",
    array("CProjectHandlers", "OnEndBufferContentHandler")
);
$eventManager->addEventHandler(
    "main",
    "OnBeforeProlog",
    array("CProjectHandlers", "OnPrologHandler")
);