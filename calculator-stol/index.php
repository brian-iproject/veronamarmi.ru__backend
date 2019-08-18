<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Калькулятор столешницы из гранита онлайн, агломерата (кварцевого), расчет столешниц из мрамора в Москве: рассчитать");
$APPLICATION->SetPageProperty("description", "✔️ Вы можете воспользоваться калькулятором столешницы из натурального камня на нашем сайте и рассчитать стоимость выполнения работ. Наши консультанты помогут вам с вопросами");
$APPLICATION->SetTitle("Калькулятор столешницы");
?>
	<div class="calculator-tabs">
		<span class="calculator-tabs__item calculator-tabs__item--selected">Калькулятор столешницы</span>
		<a href="/calculator-pod/" class="calculator-tabs__item">Калькулятор подоконника</a>
	</div>
	#CALCULATOR_STOL#
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>