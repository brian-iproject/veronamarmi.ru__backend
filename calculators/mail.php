<?
if($_POST){ //Проверка отправилось ли наше поля name и не пустые ли они

$errors = true;

foreach ($_POST['fld']['calcGab'] as $key => $arForm) {
if($_POST['fld']['calcGab'][$key]['obligatory'] == 1 && $_POST['fld']['calcGab'][$key]['y'] == ''){
$errors = false;
echo 'Впишите размер в миллиметрах в поле '.$key.'<br>'; 
} 
}
if(!isset($_POST['fld']['TorProfilKromka'])){
$errors = false; 
echo 'Выберите профиль кромки<br>'; 
}

if(!isset($_POST['fld']['goodField'])){
$errors = false; 
echo 'Выберите породу камня<br>'; 
}

if($_POST['fld']['name'] == ''){
$errors = false;
echo 'Введите Имя<br>'; 
}
if($_POST['fld']['heightBortik'] == '' && isset($_POST['fld']['heightBortik']) && isset($_POST['fld']['TorProfilBortik']) != ''){
$errors = false;
echo 'Введите высоту пристеночного бортика<br>'; 
}
if($_POST['fld']['email'] == '' && isset($_POST['fld']['email'])){

if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['fld']['email'])){
$errors = false;
echo 'Неправильно введен Email<br>'; 
}
}
if($_POST['fld']['phone'] == '' && isset($_POST['fld']['phone'])){
$errors = false;
echo 'Неправильно введен Телефон<br>'; 

}


if($errors){
if($_POST['fld']['calc_forms']) $message = '<b>Форма столешницы</b>: '.$_POST['fld']['calc_forms'].'<br>';
foreach ($_POST['fld']['calcGab'] as $key => $arForm) {
if($_POST['fld']['calcGab'][$key]['y'] != '') $message .= '<b>Сторона '.$key.'</b>: '.$_POST['fld']['calcGab'][$key]['y'].'mm<br>';
if($_POST['fld']['calcGab'][$key]['cromka'] == 1) $message .= '<b>Кромка стороны '.$key.'</b>: '.$_POST['fld']['calcGab'][$key]['cromka'].'<br>';
if($_POST['fld']['calcGab'][$key]['bortik'] == 1) $message .= '<b>Бортик стороны '.$key.'</b>: '.$_POST['fld']['calcGab'][$key]['bortik'].'<br>';
}

if(isset($_POST['fld']['TorProfilKromka'])) $message .= '<b>Тип профиля для кромки</b>: '.$_POST['fld']['TorProfilKromka'].'<br>';
if(isset($_POST['fld']['TorProfilBortik'])) $message .= '<b>Тип профиля для бортика</b>: '.$_POST['fld']['TorProfilBortik'].'<br>';
if($_POST['fld']['heightBortik'] != '') $message .= '<b>Высота пристеночного бортика</b>: '.$_POST['fld']['heightBortik'].'mm<br>';
if(isset($_POST['fld']['goodField'])) $message .= '<b>Порода камня</b>: '.$_POST['fld']['goodField'].iconv("utf-8", "utf-8",$_POST['fld']['goodField2']).'<br>';

if(isset($_POST['fld']['type_windowsill'])) $message .= '<b>Тип подоконника</b>: '.$_POST['fld']['type_windowsill'].'<br>';

if($_POST['fld']['drunk'] == 1) $message .= '<b>Пропил под капельник </b>: '.$_POST['fld']['drunk'].'<br>';
if($_POST['fld']['zamer'] == 1) $message .= '<b>Замер </b>: '.$_POST['fld']['zamer'].'<br>';
if($_POST['fld']['montage'] == 1) $message .= '<b>Монтаж </b>: '.$_POST['fld']['montage'].'<br>';
if($_POST['fld']['deliver'] == 1) $message .= '<b>Доставка </b>: '.$_POST['fld']['deliver'].'<br>';
if($_POST['fld']['rakovin'] != '') $message .= '<b>Количество раковин</b>: '.$_POST['fld']['rakovin'].'<br>';
if($_POST['fld']['panel'] != '') $message .= '<b>Количество варочных панелей</b>: '.$_POST['fld']['panel'].'<br>';

if(isset($_POST['fld']['name']) && ($_POST['fld']['name'] != '')) $message .= '<b>Имя</b>: '.iconv("utf-8", "utf-8",$_POST['fld']['name']).'<br>';
if(isset($_POST['fld']['email']) && ($_POST['fld']['email'] != '')) $message .= '<b>E-mail</b>: '.$_POST['fld']['email'].'<br>';
if(isset($_POST['fld']['phone']) && ($_POST['fld']['phone'] != '')) $message .= '<b>Телефон</b>: '.$_POST['fld']['phone'].'<br>';


$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";

/* дополнительные шапки */
$headers .= "From:".iconv("utf-8", "windows-1251",$_POST['dirs'])." <calc@veronamarmi.ru>\r\n";
$headers .= "Cc: calc@veronamarmi.ru\r\n";
$headers .= "Bcc: calc@veronamarmi.ru\r\n";
mail("veronamarmi@yandex.ru",$_POST['fld']['name'], $message, $headers); //Отправка письма с помощью функции mail
}
}
?>