<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Калькулятор для подоконников из мрамора и камня, расчет стоимости подоконников в Москве онлайн");
$APPLICATION->SetPageProperty("description", "Рассчитать стоимость подоконника теперь можно онлайн прямо на нашем сайте. Заполните нашу новую удобную форму и уже в тот же день наши сотруднику пришлют вам расчетную смету.");
$APPLICATION->SetTitle("Калькулятор подоконника");
?><div class="calculator-tabs">
 <a href="/calculator-stol/" class="calculator-tabs__item">Калькулятор столешницы</a> <span class="calculator-tabs__item calculator-tabs__item--selected">Калькулятор подоконника</span>
</div>
	#CALCULATOR_POD#<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>