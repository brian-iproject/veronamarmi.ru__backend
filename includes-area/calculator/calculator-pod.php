<link rel="stylesheet" href="/calculators/calculator.css" />
<script type="text/javascript" src="/calculators/calculator.js"></script>
<script type="text/javascript" src="/calculators/fancyBox/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="/calculators/fancyBox/jquery.fancybox.css">

<div class="calculator">
	<div class="ajax_errors" style="disblay:none;  color: #91032e!important;"></div>
	<form action="/" method="POST" id="ajax_form">
		<input type="hidden" name="dirs" value="Калькулятор подоконника">
		<fieldset>
			<article>
				<header><strong>Шаг</strong><span>1</span>Выберите форму подоконника</header>
				<ul class="checks_forms hover_block">
					<li>
						<div onclick="getCalcSizesPodokon('10')">
							<input type="radio" name="fld[calc_forms]" class="customRadio4" id="check1" value="1">
							<label for="check1">1</label>
						</div>
						<a href="#" onclick="return false;">
							<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/3aa6d0ddbda248c227592e128e9aa2a3.jpg" alt="" title=""></span>
							<img style="top: 0px;" src="/calculators/img/4e959fbd651ebc0d7357160d4ffd4ecd.JPG" alt="" title="">
						</a>
					</li>
					<li>
						<div onclick="getCalcSizesPodokon('11')">
							<input type="radio" name="fld[calc_forms]" class="customRadio4" id="check2" value="2">
							<label for="check2">2</label>
						</div>
						<a href="#" onclick="return false;">
							<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/40ea24bec48eb96f8096da4fe539fcf1.jpg" alt="" title=""></span>
							<img style="top: 0px;" src="/calculators/img/4f50084805cb6250753040c5ca17fa5e.png" alt="" title="">
						</a>
					</li>
					<li>
						<div onclick="getCalcSizesPodokon('12')">
							<input type="radio" name="fld[calc_forms]" class="customRadio4" id="check3" value="3">
							<label for="check3">3</label>
						</div>
						<a href="#" onclick="return false;">
							<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/252b60352c7015cd9843dca61f7da05a.jpg" alt="" title=""></span>
							<img style="top: 0px;" src="/calculators/img/ce6b498ef1763a638223cc73e50824b6.JPG" alt="" title="">
						</a>
					</li>
				</ul>
				<div class="c"></div>
			</article>
			<span id="calcSizesLoad" style="display: none;"><img src="/calculators/img/loadingAnimation.gif"></span>
			<div id="calcSizes">
				<div class="ajax_load"></div>
				<div class="calcHidden" style="display:none;">
					<article>
						<header><strong>Шаг</strong><span>3</span>Выберите тип профиля для кромки</header>
						<span style="display: none;" id="typeKromkiLoad"><img src="/calculators/img/loadingAnimation.gif"></span>
						<a href="#" onclick="jQuery('.kromka').removeAttr('checked'); return false;" title="очистить">очистить</a>
						<ul class="checks_forms hover_block">
							<li>
								<div>
									<input class="customRadio2 kromka" type="radio" name="fld[TorProfilKromka]" value="1" id="profilkromka1">
									<label for="profilkromka1">1</label>
								</div>
								<a href="#" onclick="return false;">
									<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/63f7513db98baeb46ac2f2654654ffa7.jpg" alt="" title=""></span>
									<img style="top: 0px;" src="/calculators/img/4cd331397f8701553cca576a85192100.jpg" alt="" title="">
								</a>
							</li>
							<li>
								<div>
									<input class="customRadio2 kromka" type="radio" name="fld[TorProfilKromka]" value="2" id="profilkromka2">
									<label for="profilkromka2">2</label>
								</div>
								<a href="#" onclick="return false;">
									<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/cb149ecf405722fc0edb16543ac76e50.jpg" alt="" title=""></span>
									<img style="top: 0px;" src="/calculators/img/05df2a755edc25fd3c6494da29a12c56.jpg" alt="" title="">
								</a>
							</li>
							<li>
								<div>
									<input class="customRadio2 kromka" type="radio" name="fld[TorProfilKromka]" value="3" id="profilkromka3">
									<label for="profilkromka3">3</label>
								</div>
								<a href="#" onclick="return false;">
									<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/643128210ad7286e07c5a3caa4469e1e.jpg" alt="" title=""></span>
									<img style="top: 0px;" src="/calculators/img/1a10c4f56bba035636543f11087403e6.jpg" alt="" title="">
								</a>
							</li>
							<li>
								<div>
									<input class="customRadio2 kromka" type="radio" name="fld[TorProfilKromka]" value="4" id="profilkromka4">
									<label for="profilkromka4">4</label>
								</div>
								<a href="#" onclick="return false;">
									<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/df5e8ea442235008f6bda3ac5e614070.jpg" alt="" title=""></span>
									<img style="top: 0px;" src="/calculators/img/858d77998a6b372924aec6f5b5e935b6.jpg" alt="" title="">
								</a>
							</li>
							<li>
								<div>
									<input class="customRadio2 kromka" type="radio" name="fld[TorProfilKromka]" value="5" id="profilkromka5">
									<label for="profilkromka5">5</label>
								</div>
								<a href="#" onclick="return false;">
									<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/6b68276ebfc3269ee203914dae60d979.jpg" alt="" title=""></span>
									<img style="top: 0px;" src="/calculators/img/def87d8cf3939da3c75a53e1a71c1bfa.jpg" alt="" title="">
								</a>
							</li>
							<li>
								<div>
									<input class="customRadio2 kromka" type="radio" name="fld[TorProfilKromka]" value="6" id="profilkromka6">
									<label for="profilkromka6">6</label>
								</div>
								<a href="#" onclick="return false;">
									<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/16ad745af24cddebc93208c6e407536c.jpg" alt="" title=""></span>
									<img style="top: 0px;" src="/calculators/img/15181ffcd3f51f34530682845bff29e5.jpg" alt="" title="">
								</a>
							</li>
							<li>
								<div>
									<input class="customRadio2 kromka" type="radio" name="fld[TorProfilKromka]" value="7" id="profilkromka7">
									<label for="profilkromka7">7</label>
								</div>
								<a href="#" onclick="return false;">
									<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/2e413b84c0c305c531090a5343760866.jpg" alt="" title=""></span>
									<img style="top: 0px;" src="/calculators/img/684573117cc23745747ecdc40f027555.jpg" alt="" title="">
								</a>
							</li>
							<li>
								<div>
									<input class="customRadio2 kromka" type="radio" name="fld[TorProfilKromka]" value="8" id="profilkromka8">
									<label for="profilkromka8">8</label>
								</div>
								<a href="#" onclick="return false;">
									<span class="renderedImage" style="overflow: hidden;"><img style="top: 0px;" src="/calculators/img/de2f676164ca4bf383689565c9017a45.jpg" alt="" title=""></span>
									<img style="top: 0px;" src="/calculators/img/4392f66ea7a3c1a48421fc5a9456db3d.jpg" alt="" title="">
								</a>
							</li>
						</ul>
						<div class="c"></div>
					</article>
					<article>
						<header><strong>Шаг</strong><span>4</span>Выберите тип подоконника</header>
						<ul class="checks">
							<li style="height: 35px;">
								<label>
									<input type="radio" value="1" name="fld[type_windowsill]" class="customRadio4"> внешний</label>
							</li>
							<li style="height: 35px;">
								<label>
									<input type="radio" value="2" name="fld[type_windowsill]" class="customRadio4"> внутренний</label>
							</li>
						</ul>
					</article>
					<article>
						<header><strong>Шаг</strong><span>5</span>Выберите породу камня *</header>
						<ul class="samples9">
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#allStone').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#allStoneLi a').addClass('active'); setcookie('link_calc_stol', 'allStone', '', '/'); return false;"><span class="img"><img src="/calculators/img/sample1.jpg" width="116" height="122" alt=" "><span class="cover"></span></span> <span class="text">Все</span> </a></li>
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#marble').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#marbleLi a').addClass('active'); setcookie('link_calc_stol', 'marble', '', '/'); return false;"><span class="img"><img src="/calculators/img/09dcd699c0735710026e19fd4313ebd3_115.jpg" alt="Мрамор"><span class="cover"></span></span> <span class="text">Мрамор</span> </a></li>
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#granite').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#graniteLi a').addClass('active'); setcookie('link_calc_stol', 'granite', '', '/'); return false;"><span class="img"><img src="/calculators/img/b5bebd18f2740abca22595f62b168c0b_115.jpg" alt="Гранит"><span class="cover"></span></span> <span class="text">Гранит</span> </a></li>
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#oniks').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#oniksLi a').addClass('active'); setcookie('link_calc_stol', 'oniks', '', '/'); return false;"><span class="img"><img src="/calculators/img/87fb6e9646014d0fbbe7a8540ea1a33b_115.jpg" alt="Оникс"><span class="cover"></span></span> <span class="text">Оникс</span> </a></li>
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#travertin').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#travertinLi a').addClass('active'); setcookie('link_calc_stol', 'travertin', '', '/'); return false;"><span class="img"><img src="/calculators/img/11a2a9897cccd682be9f3e70eb1e50e7_115.jpg" alt="Травертин"><span class="cover"></span></span> <span class="text">Травертин</span> </a></li>
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#izvestnyak').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#izvestnyakLi a').addClass('active'); setcookie('link_calc_stol', 'izvestnyak', '', '/'); return false;"><span class="img"><img src="/calculators/img/6a78b2b807ecbdf067c26f66a6c7601e_115.jpg" alt="Известняк"><span class="cover"></span></span> <span class="text">Известняк</span> </a></li>
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#peschanik').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#peschanikLi a').addClass('active'); setcookie('link_calc_stol', 'peschanik', '', '/'); return false;"><span class="img"><img src="/calculators/img/fd4c57a6bf777646c3d31532728318f3_115.jpg" alt="Песчаник"><span class="cover"></span></span> <span class="text">Песчаник</span> </a></li>
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#bazalt').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#bazaltLi a').addClass('active'); setcookie('link_calc_stol', 'bazalt', '', '/'); return false;"><span class="img"><img src="/calculators/img/c321a5fbc412dd9b830bd1ce1645a52d_115.jpg" alt="базальт"><span class="cover"></span></span> <span class="text">Базальт</span> </a></li>
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#slate').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#slateLi a').addClass('active'); setcookie('link_calc_stol', 'slate', '', '/'); return false;"><span class="img"><img src="/calculators/img/d77dc43dcae3d963faabb4cc1efb45ae_115.jpg" alt="сланец"><span class="cover"></span></span> <span class="text">Сланец</span> </a></li>
							<li><a class="" href="#stones" onclick="jQuery('.samples2').hide(); jQuery('#exclusive').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery('#exclusiveLi a').addClass('active'); setcookie('link_calc_stol', 'exclusive', '', '/'); return false;"><span class="img"><img src="/calculators/img/5ba7f73a8a481ff12caf50be54719779_115.jpg" alt="Эксклюзив"><span class="cover"></span></span> <span class="text">Эксклюзив</span> </a></li>
						</ul>
						<ul class="samples9" id="stoneResBox" style="display: none;  border-top: 1px solid #ddcab6;">
							<li>
								<a class="" href="#stones">
									<span class="img"><span class="cover"></span></span> <span class="text" id="selStoneResName">Выберите породу камня</span>
								</a>
							</li>
						</ul>
						<div id="stones" style="display: none;">
							<div>
								<ul class="tab-menu2">
									<li id="allStoneLi"><a onclick="jQuery('.samples2').hide(); jQuery('#allStone').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'allStone', '', '/'); return false;" class="active">Все</a></li>
									<li id="marbleLi"><a onclick="jQuery('.samples2').hide(); jQuery('#marble').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'marble', '', '/'); return false;">Мрамор</a></li>
									<li id="graniteLi"><a onclick="jQuery('.samples2').hide(); jQuery('#granite').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'granite', '', '/'); return false;">Гранит</a></li>
									<li id="oniksLi"><a onclick="jQuery('.samples2').hide(); jQuery('#oniks').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'oniks', '', '/'); return false;">Оникс</a></li>
									<li id="travertinLi"><a onclick="jQuery('.samples2').hide(); jQuery('#travertin').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'travertin', '', '/'); return false;">Травертин</a></li>
									<li id="izvestnyakLi"><a onclick="jQuery('.samples2').hide(); jQuery('#izvestnyak').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'izvestnyak', '', '/'); return false;">Известняк</a></li>
									<li id="peschanikLi"><a onclick="jQuery('.samples2').hide(); jQuery('#peschanik').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'peschanik', '', '/'); return false;">Песчаник</a></li>
									<li id="bazaltLi"><a onclick="jQuery('.samples2').hide(); jQuery('#bazalt').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'bazalt', '', '/'); return false;">Базальт</a></li>
									<li id="slateLi"><a onclick="jQuery('.samples2').hide(); jQuery('#slate').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'slate', '', '/'); return false;">Сланец</a></li>
									<li id="exclusiveLi"><a onclick="jQuery('.samples2').hide(); jQuery('#exclusive').show(); jQuery('.tab-menu2 a').removeClass('active'); jQuery(this).addClass('active'); setcookie('link_calc_stol', 'exclusive', '', '/'); return false;">Эксклюзив</a></li>
								</ul>
								<ul class="samples2" id="allStone">
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_667').html('<input type=hidden name=fld[goodField] value=667>'); jQuery('#selStoneRes').attr('src', '/calculators/img/5ed1157fef30ecd645414a70e6b7c0ab_183.jpg'); jQuery('#selStoneResName').html('Крема Марфил Премиум'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5ed1157fef30ecd645414a70e6b7c0ab_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Крема Марфил Премиум</span></a>
										<span class="goodField" id="goodField_667"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_9').html('<input type=hidden name=fld[goodField] value=9>'); jQuery('#selStoneRes').attr('src', '/calculators/img/c227b7a4a3b9a61b33a968a08cb22d6f_183.jpg'); jQuery('#selStoneResName').html('Крема Марфил'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c227b7a4a3b9a61b33a968a08cb22d6f_183.jpg" alt="Мрамор Крема Марфил (Crema Marfil)"><span class="cover"></span></span> <span class="text">Крема Марфил</span></a>
										<span class="goodField" id="goodField_9"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_668').html('<input type=hidden name=fld[goodField] value=668>'); jQuery('#selStoneRes').attr('src', '/calculators/img/44d68f4e9498bc464eba5cf060127042_183.jpg'); jQuery('#selStoneResName').html('Крема Марфил Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/44d68f4e9498bc464eba5cf060127042_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Крема Марфил Экстра</span></a>
										<span class="goodField" id="goodField_668"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_607').html('<input type=hidden name=fld[goodField] value=607>'); jQuery('#selStoneRes').attr('src', '/calculators/img/39136da7bc1d863238a79829cc0283a7_183.jpg'); jQuery('#selStoneResName').html('Крема Нова Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/39136da7bc1d863238a79829cc0283a7_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Крема Нова Экстра</span></a>
										<span class="goodField" id="goodField_607"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_21').html('<input type=hidden name=fld[goodField] value=21>'); jQuery('#selStoneRes').attr('src', '/calculators/img/3b269a1fce31889c9d58971c68be4e9c_183.jpg'); jQuery('#selStoneResName').html('Крема Валенсия'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/3b269a1fce31889c9d58971c68be4e9c_183.jpg" alt="Мрамор Крема Валенсия (Crema Valencia)"><span class="cover"></span></span> <span class="text">Крема Валенсия</span></a>
										<span class="goodField" id="goodField_21"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_380').html('<input type=hidden name=fld[goodField] value=380>'); jQuery('#selStoneRes').attr('src', '/calculators/img/d666a2fb18595b7f6dd54e6d87a5856f_183.jpg'); jQuery('#selStoneResName').html('Азул Ноче'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d666a2fb18595b7f6dd54e6d87a5856f_183.jpg" alt="Гранит Азул Ноче (Azul Noche)"><span class="cover"></span></span> <span class="text">Азул Ноче</span></a>
										<span class="goodField" id="goodField_380"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_566').html('<input type=hidden name=fld[goodField] value=566>'); jQuery('#selStoneRes').attr('src', '/calculators/img/5c72cda7fb032d30b0457cf7ebd4487a_183.jpg'); jQuery('#selStoneResName').html('Абсолют Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5c72cda7fb032d30b0457cf7ebd4487a_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Абсолют Блэк</span></a>
										<span class="goodField" id="goodField_566"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_556').html('<input type=hidden name=fld[goodField] value=556>'); jQuery('#selStoneRes').attr('src', '/calculators/img/dffa82b8266d35b3b5b450b95c2b523f_183.jpg'); jQuery('#selStoneResName').html('Алабастрино Рустик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/dffa82b8266d35b3b5b450b95c2b523f_183.jpg" alt="ALABASTRINO-RUSTIC (V.C.)"><span class="cover"></span></span> <span class="text">Алабастрино Рустик</span></a>
										<span class="goodField" id="goodField_556"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_93').html('<input type=hidden name=fld[goodField] value=93>'); jQuery('#selStoneRes').attr('src', '/calculators/img/14618f31c95d17b8b7ce171bd04c3bb7_183.jpg'); jQuery('#selStoneResName').html('Мока Крем'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/14618f31c95d17b8b7ce171bd04c3bb7_183.jpg" alt="Мрамор Мока Крим Известняк (Moka Cream Limestone)"><span class="cover"></span></span> <span class="text">Мока Крем</span></a>
										<span class="goodField" id="goodField_93"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_237').html('<input type=hidden name=fld[goodField] value=237>'); jQuery('#selStoneRes').attr('src', '/calculators/img/8df2eabd02701275c1f45adadba3ca9e_183.jpg'); jQuery('#selStoneResName').html('Бейн Брук Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8df2eabd02701275c1f45adadba3ca9e_183.jpg" alt="Гранит Бейнбрук Браун (Bainbrook Brown / G664)"><span class="cover"></span></span> <span class="text">Бейн Брук Браун</span></a>
										<span class="goodField" id="goodField_237"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_623').html('<input type=hidden name=fld[goodField] value=623>'); jQuery('#selStoneRes').attr('src', '/calculators/img/ee016f6988a378beae492a36d66d5582_183.jpg'); jQuery('#selStoneResName').html('Патара'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/ee016f6988a378beae492a36d66d5582_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Патара</span></a>
										<span class="goodField" id="goodField_623"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_227').html('<input type=hidden name=fld[goodField] value=227>'); jQuery('#selStoneRes').attr('src', '/calculators/img/03396383848f6ab8d7d018a38cd864f7_183.jpg'); jQuery('#selStoneResName').html('Белла Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/03396383848f6ab8d7d018a38cd864f7_183.jpg" alt="Гранит Белла (Роял) Вайт (Bella White / G603)"><span class="cover"></span></span> <span class="text">Белла Уайт</span></a>
										<span class="goodField" id="goodField_227"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_649').html('<input type=hidden name=fld[goodField] value=649>'); jQuery('#selStoneRes').attr('src', '/calculators/img/5b130ed3140727bff8e75ddf357f7b64_183.jpg'); jQuery('#selStoneResName').html('Симена'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5b130ed3140727bff8e75ddf357f7b64_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Симена</span></a>
										<span class="goodField" id="goodField_649"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_229').html('<input type=hidden name=fld[goodField] value=229>'); jQuery('#selStoneRes').attr('src', '/calculators/img/bb69f10ce288be4b867ad406d06bfc1f_183.jpg'); jQuery('#selStoneResName').html('Бери Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/bb69f10ce288be4b867ad406d06bfc1f_183.jpg" alt="Берри Блэк (Berry Black / G684)"><span class="cover"></span></span> <span class="text">Бери Блэк</span></a>
										<span class="goodField" id="goodField_229"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_573').html('<input type=hidden name=fld[goodField] value=573>'); jQuery('#selStoneRes').attr('src', '/calculators/img/e3f23165229eed7bee0130e19cdadf3b_183.jpg'); jQuery('#selStoneResName').html('Бланко Перла'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/e3f23165229eed7bee0130e19cdadf3b_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бланко Перла</span></a>
										<span class="goodField" id="goodField_573"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_557').html('<input type=hidden name=fld[goodField] value=557>'); jQuery('#selStoneRes').attr('src', '/calculators/img/c8b5363ec2fb3de2f423806d251a6261_183.jpg'); jQuery('#selStoneResName').html('Классик Лайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c8b5363ec2fb3de2f423806d251a6261_183.jpg" alt="Travertin classico light"><span class="cover"></span></span> <span class="text">Классик Лайт</span></a>
										<span class="goodField" id="goodField_557"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_658').html('<input type=hidden name=fld[goodField] value=658>'); jQuery('#selStoneRes').attr('src', '/calculators/img/53206018bdc5e7afee798d143b1225d7_183.jpg'); jQuery('#selStoneResName').html('Фосил Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/53206018bdc5e7afee798d143b1225d7_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Фосил Браун</span></a>
										<span class="goodField" id="goodField_658"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_234').html('<input type=hidden name=fld[goodField] value=234>'); jQuery('#selStoneRes').attr('src', '/calculators/img/a369e3afa26e2aa15c37037e08241520_183.jpg'); jQuery('#selStoneResName').html('Блэк Гэлакси'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/a369e3afa26e2aa15c37037e08241520_183.jpg" alt=" Блэк Гэлакси (Star Galaxy Black)"><span class="cover"></span></span> <span class="text">Блэк Гэлакси</span></a>
										<span class="goodField" id="goodField_234"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_625').html('<input type=hidden name=fld[goodField] value=625>'); jQuery('#selStoneRes').attr('src', '/calculators/img/7dc2c9c7ed2e910acafee18cbc53d0d8_183.jpg'); jQuery('#selStoneResName').html('Персиан Ред'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/7dc2c9c7ed2e910acafee18cbc53d0d8_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Персиан Ред</span></a>
										<span class="goodField" id="goodField_625"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_162').html('<input type=hidden name=fld[goodField] value=162>'); jQuery('#selStoneRes').attr('src', '/calculators/img/bd7e55b75d4cd663f43888ef12c97b5a_183.jpg'); jQuery('#selStoneResName').html('Юрский Беж'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/bd7e55b75d4cd663f43888ef12c97b5a_183.jpg" alt="Мрамор Джура Бьеже / Голд Лименстоун (Jura Biege / Gold Limestone)"><span class="cover"></span></span> <span class="text">Юрский Беж</span></a>
										<span class="goodField" id="goodField_162"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_238').html('<input type=hidden name=fld[goodField] value=238>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b4d780a255f01d07e0a3118fccc44d44_183.jpg'); jQuery('#selStoneResName').html('Блю Перл'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b4d780a255f01d07e0a3118fccc44d44_183.jpg" alt="Гранит Блю Перл GT (Blue Pearl GT)"><span class="cover"></span></span> <span class="text">Блю Перл</span></a>
										<span class="goodField" id="goodField_238"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_129').html('<input type=hidden name=fld[goodField] value=129>'); jQuery('#selStoneRes').attr('src', '/calculators/img/8fdb7aaaedaa65bdaf90311b1d2a0a8b_183.jpg'); jQuery('#selStoneResName').html('Юрский Серый'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8fdb7aaaedaa65bdaf90311b1d2a0a8b_183.jpg" alt="Мрамор Джура Грей / Блу Лименстоун (Jura Grey / Blue Limestone)"><span class="cover"></span></span> <span class="text">Юрский Серый</span></a>
										<span class="goodField" id="goodField_129"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_236').html('<input type=hidden name=fld[goodField] value=236>'); jQuery('#selStoneRes').attr('src', '/calculators/img/f45959a553dd5321f3f809857194ee37_183.jpg'); jQuery('#selStoneResName').html('Браун Антик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f45959a553dd5321f3f809857194ee37_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Браун Антик</span></a>
										<span class="goodField" id="goodField_236"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_584').html('<input type=hidden name=fld[goodField] value=584>'); jQuery('#selStoneRes').attr('src', '/calculators/img/d8cc122d53c3ed504cec6493ce50cc9d_183.png'); jQuery('#selStoneResName').html('Верде Бахия'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d8cc122d53c3ed504cec6493ce50cc9d_183.png" alt=""><span class="cover"></span></span> <span class="text">Верде Бахия</span></a>
										<span class="goodField" id="goodField_584"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_590').html('<input type=hidden name=fld[goodField] value=590>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b60fbb784dbd72f9637980a992b91ce0_183.jpg'); jQuery('#selStoneResName').html('Голден Тиа'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b60fbb784dbd72f9637980a992b91ce0_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Голден Тиа</span></a>
										<span class="goodField" id="goodField_590"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_595').html('<input type=hidden name=fld[goodField] value=595>'); jQuery('#selStoneRes').attr('src', '/calculators/img/e40680565916f115af51572899ed7b07_183.jpg'); jQuery('#selStoneResName').html('Джало Венециано'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/e40680565916f115af51572899ed7b07_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Джало Венециано</span></a>
										<span class="goodField" id="goodField_595"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_241').html('<input type=hidden name=fld[goodField] value=241>'); jQuery('#selStoneRes').attr('src', '/calculators/img/60237475cbcb1f5c2a6beabadba58906_183.jpg'); jQuery('#selStoneResName').html('Джало Венециано Фиорито'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/60237475cbcb1f5c2a6beabadba58906_183.jpg" alt="Гранит Джалло Венециано Фьёрито (Giallo Veneziano Fiorito)"><span class="cover"></span></span> <span class="text">Джало Венециано Фиорито</span></a>
										<span class="goodField" id="goodField_241"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_249').html('<input type=hidden name=fld[goodField] value=249>'); jQuery('#selStoneRes').attr('src', '/calculators/img/e46895859f0e975151643b6f46de8235_183.jpg'); jQuery('#selStoneResName').html('Джало Наполеоне'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/e46895859f0e975151643b6f46de8235_183.jpg" alt="Гранит Джалло Наполеоне (Giallo Napoleone)"><span class="cover"></span></span> <span class="text">Джало Наполеоне</span></a>
										<span class="goodField" id="goodField_249"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_240').html('<input type=hidden name=fld[goodField] value=240>'); jQuery('#selStoneRes').attr('src', '/calculators/img/c3bd28b063401a40afe4ae9fae259016_183.jpg'); jQuery('#selStoneResName').html('Джало Сицилия'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c3bd28b063401a40afe4ae9fae259016_183.jpg" alt="Гранит Джалло Сицилия (Giallo Cecilia)"><span class="cover"></span></span> <span class="text">Джало Сицилия</span></a>
										<span class="goodField" id="goodField_240"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_598').html('<input type=hidden name=fld[goodField] value=598>'); jQuery('#selStoneRes').attr('src', '/calculators/img/9e8b309ab1abd6f0d3ae6f89185b94e0_183.jpg'); jQuery('#selStoneResName').html('Империал Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/9e8b309ab1abd6f0d3ae6f89185b94e0_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Империал Голд</span></a>
										<span class="goodField" id="goodField_598"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_551').html('<input type=hidden name=fld[goodField] value=551>'); jQuery('#selStoneRes').attr('src', '/calculators/img/f555441317f0fe5792b41f5026b8b2e6_183.jpg'); jQuery('#selStoneResName').html('Жельтау'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f555441317f0fe5792b41f5026b8b2e6_183.jpg" alt="Жельтау"><span class="cover"></span></span> <span class="text">Жельтау</span></a>
										<span class="goodField" id="goodField_551"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_242').html('<input type=hidden name=fld[goodField] value=242>'); jQuery('#selStoneRes').attr('src', '/calculators/img/6d98ed41b054d3810061bfdf37483cb1_183.jpg'); jQuery('#selStoneResName').html('Капустинский'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/6d98ed41b054d3810061bfdf37483cb1_183.jpg" alt="Гранит Капустинский (Rosso Santiago / Koral)"><span class="cover"></span></span> <span class="text">Капустинский</span></a>
										<span class="goodField" id="goodField_242"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_409').html('<input type=hidden name=fld[goodField] value=409>'); jQuery('#selStoneRes').attr('src', '/calculators/img/1995e1f97e4c01cc7d004253a6d4200a_183.jpg'); jQuery('#selStoneResName').html('Кашмир Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/1995e1f97e4c01cc7d004253a6d4200a_183.jpg" alt="Гранит Кашимир Голд А (Kashmir Gold A)"><span class="cover"></span></span> <span class="text">Кашмир Голд</span></a>
										<span class="goodField" id="goodField_409"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_244').html('<input type=hidden name=fld[goodField] value=244>'); jQuery('#selStoneRes').attr('src', '/calculators/img/6e7349aa3ae126a1df88bb022ee8c924_183.jpg'); jQuery('#selStoneResName').html('Мадура Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/6e7349aa3ae126a1df88bb022ee8c924_183.jpg" alt="Гранит Мадура Голд (Madura Gold)"><span class="cover"></span></span> <span class="text">Мадура Голд</span></a>
										<span class="goodField" id="goodField_244"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_613').html('<input type=hidden name=fld[goodField] value=613>'); jQuery('#selStoneRes').attr('src', '/calculators/img/75ff83439f55a24b0e1b95ae804f5549_183.jpg'); jQuery('#selStoneResName').html('Мансуровский'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/75ff83439f55a24b0e1b95ae804f5549_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Мансуровский</span></a>
										<span class="goodField" id="goodField_613"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_258').html('<input type=hidden name=fld[goodField] value=258>'); jQuery('#selStoneRes').attr('src', '/calculators/img/dc7b042ca3115aad5292ee395ffb82fa_183.jpg'); jQuery('#selStoneResName').html('Междуреченский'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/dc7b042ca3115aad5292ee395ffb82fa_183.jpg" alt="Гранит Междуреченский (Flower of Ukraine)"><span class="cover"></span></span> <span class="text">Междуреченский</span></a>
										<span class="goodField" id="goodField_258"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_619').html('<input type=hidden name=fld[goodField] value=619>'); jQuery('#selStoneRes').attr('src', '/calculators/img/a7f35efefea5bcbfaea394fcd20c76ac_183.jpg'); jQuery('#selStoneResName').html('Монголия Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/a7f35efefea5bcbfaea394fcd20c76ac_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Монголия Блэк</span></a>
										<span class="goodField" id="goodField_619"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_231').html('<input type=hidden name=fld[goodField] value=231>'); jQuery('#selStoneRes').attr('src', '/calculators/img/5388b5314e163972a02ec1a51a58eb8c_183.jpg'); jQuery('#selStoneResName').html('Мэпл Ред'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5388b5314e163972a02ec1a51a58eb8c_183.jpg" alt="Гранит Мапл Рэд (Maple Red / G562)"><span class="cover"></span></span> <span class="text">Мэпл Ред</span></a>
										<span class="goodField" id="goodField_231"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_233').html('<input type=hidden name=fld[goodField] value=233>'); jQuery('#selStoneRes').attr('src', '/calculators/img/57ce1bf969eb740b90b604ff279d60be_183.jpg'); jQuery('#selStoneResName').html('Нью Империал Ред'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/57ce1bf969eb740b90b604ff279d60be_183.jpg" alt="Гранит Нью Империал Рэд (New Imperial Red)"><span class="cover"></span></span> <span class="text">Нью Империал Ред</span></a>
										<span class="goodField" id="goodField_233"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_230').html('<input type=hidden name=fld[goodField] value=230>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b92c6aa170cc3daa35b9f66a15b7f458_183.jpg'); jQuery('#selStoneResName').html('Паданг Дарк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b92c6aa170cc3daa35b9f66a15b7f458_183.jpg" alt="Гранит Паданг Дарк (Padang Dark / G654)"><span class="cover"></span></span> <span class="text">Паданг Дарк</span></a>
										<span class="goodField" id="goodField_230"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_358').html('<input type=hidden name=fld[goodField] value=358>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b4948cdfd6aad5fe1d38272e5d6c6f17_183.jpg'); jQuery('#selStoneResName').html('Парадизо Баш'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b4948cdfd6aad5fe1d38272e5d6c6f17_183.jpg" alt="Гранит Парадизо Беш / Лайт (Paradiso Bash / Light)"><span class="cover"></span></span> <span class="text">Парадизо Баш</span></a>
										<span class="goodField" id="goodField_358"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_629').html('<input type=hidden name=fld[goodField] value=629>'); jQuery('#selStoneRes').attr('src', '/calculators/img/039787f00663be9e8860ac4596151430_183.jpg'); jQuery('#selStoneResName').html('Порфидо Виола'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/039787f00663be9e8860ac4596151430_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Порфидо Виола</span></a>
										<span class="goodField" id="goodField_629"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_288').html('<input type=hidden name=fld[goodField] value=288>'); jQuery('#selStoneRes').attr('src', '/calculators/img/981d4f2771ce0c3c464ffe8a71e078b7_183.jpg'); jQuery('#selStoneResName').html('Покостовский'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/981d4f2771ce0c3c464ffe8a71e078b7_183.jpg" alt="Гранит Покостовский (Grey Ukraine)"><span class="cover"></span></span> <span class="text">Покостовский</span></a>
										<span class="goodField" id="goodField_288"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_634').html('<input type=hidden name=fld[goodField] value=634>'); jQuery('#selStoneRes').attr('src', '/calculators/img/89c7e591ecff94ccb34bb9f419af5555_183.jpg'); jQuery('#selStoneResName').html('Ривер Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/89c7e591ecff94ccb34bb9f419af5555_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Ривер Уайт</span></a>
										<span class="goodField" id="goodField_634"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_635').html('<input type=hidden name=fld[goodField] value=635>'); jQuery('#selStoneRes').attr('src', '/calculators/img/14e961fa786d93c58e6f46ab95b69697_183.jpg'); jQuery('#selStoneResName').html('Роза Порино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/14e961fa786d93c58e6f46ab95b69697_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Роза Порино</span></a>
										<span class="goodField" id="goodField_635"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_232').html('<input type=hidden name=fld[goodField] value=232>'); jQuery('#selStoneRes').attr('src', '/calculators/img/ddd607e7396d3646fd682bfd5e316b1c_183.jpg'); jQuery('#selStoneResName').html('Ресмо Рэд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/ddd607e7396d3646fd682bfd5e316b1c_183.jpg" alt="Гранит Ресмо Рэд (Resmo Red)"><span class="cover"></span></span> <span class="text">Ресмо Рэд</span></a>
										<span class="goodField" id="goodField_232"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_228').html('<input type=hidden name=fld[goodField] value=228>'); jQuery('#selStoneRes').attr('src', '/calculators/img/86964adf1c4f8cebbe010aabeebd202d_183.jpg'); jQuery('#selStoneResName').html('Сансет Голд Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/86964adf1c4f8cebbe010aabeebd202d_183.jpg" alt="G681A"><span class="cover"></span></span> <span class="text">Сансет Голд Экстра</span></a>
										<span class="goodField" id="goodField_228"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_300').html('<input type=hidden name=fld[goodField] value=300>'); jQuery('#selStoneRes').attr('src', '/calculators/img/12aa85d38bf0998f171ed9276ec1c219_183.jpg'); jQuery('#selStoneResName').html('Тайгер Скин Еллоу'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/12aa85d38bf0998f171ed9276ec1c219_183.jpg" alt="Гранит Тайгер Скин Еллоу (Tiger Skin Yellow / G628)"><span class="cover"></span></span> <span class="text">Тайгер Скин Еллоу</span></a>
										<span class="goodField" id="goodField_300"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_256').html('<input type=hidden name=fld[goodField] value=256>'); jQuery('#selStoneRes').attr('src', '/calculators/img/9b7e1fb76f56c7ca09d45bf5f93dbeab_183.jpg'); jQuery('#selStoneResName').html('Тан Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/9b7e1fb76f56c7ca09d45bf5f93dbeab_183.jpg" alt="Гранит Тан Браун (Tan Brown)"><span class="cover"></span></span> <span class="text">Тан Браун</span></a>
										<span class="goodField" id="goodField_256"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_350').html('<input type=hidden name=fld[goodField] value=350>'); jQuery('#selStoneRes').attr('src', '/calculators/img/f8de8de02a4b72ddd924115355459a43_183.jpg'); jQuery('#selStoneResName').html('Тропик Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f8de8de02a4b72ddd924115355459a43_183.jpg" alt="Гранит Тропик Браун (Tropic Brown)"><span class="cover"></span></span> <span class="text">Тропик Браун</span></a>
										<span class="goodField" id="goodField_350"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_656').html('<input type=hidden name=fld[goodField] value=656>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b548cdee59b26d8350a4eb1b35968699_183.jpg'); jQuery('#selStoneResName').html('Уайт Гэлакси'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b548cdee59b26d8350a4eb1b35968699_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Уайт Гэлакси</span></a>
										<span class="goodField" id="goodField_656"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_659').html('<input type=hidden name=fld[goodField] value=659>'); jQuery('#selStoneRes').attr('src', '/calculators/img/14317d331378b01749d9cd87988a6b3b_183.jpg'); jQuery('#selStoneResName').html('Хебей Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/14317d331378b01749d9cd87988a6b3b_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Хебей Блэк</span></a>
										<span class="goodField" id="goodField_659"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_247').html('<input type=hidden name=fld[goodField] value=247>'); jQuery('#selStoneRes').attr('src', '/calculators/img/71326fcbd7c866ee19f4bd3a15aca541_183.jpg'); jQuery('#selStoneResName').html('Чайна Грин'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/71326fcbd7c866ee19f4bd3a15aca541_183.jpg" alt="Гранит Чайна Грин (China Green / G674)"><span class="cover"></span></span> <span class="text">Чайна Грин</span></a>
										<span class="goodField" id="goodField_247"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_672').html('<input type=hidden name=fld[goodField] value=672>'); jQuery('#selStoneRes').attr('src', '/calculators/img/fafa93449ef80e3ff25079962355385c_183.jpg'); jQuery('#selStoneResName').html('Чайна Тропикал Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/fafa93449ef80e3ff25079962355385c_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Чайна Тропикал Браун</span></a>
										<span class="goodField" id="goodField_672"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_663').html('<input type=hidden name=fld[goodField] value=663>'); jQuery('#selStoneRes').attr('src', '/calculators/img/8555a120500061ce6e539e59b4bcba6e_183.jpg'); jQuery('#selStoneResName').html('Шивакаши Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8555a120500061ce6e539e59b4bcba6e_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Шивакаши Голд</span></a>
										<span class="goodField" id="goodField_663"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_235').html('<input type=hidden name=fld[goodField] value=235>'); jQuery('#selStoneRes').attr('src', '/calculators/img/3ed840e56ec50d7bf94905616a9c0b74_183.jpg'); jQuery('#selStoneResName').html('Шанкси Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/3ed840e56ec50d7bf94905616a9c0b74_183.jpg" alt="Шанкси Блэк (Shanxi Black)"><span class="cover"></span></span> <span class="text">Шанкси Блэк</span></a>
										<span class="goodField" id="goodField_235"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_19').html('<input type=hidden name=fld[goodField] value=19>'); jQuery('#selStoneRes').attr('src', '/calculators/img/92889a6fa2a741a1367e3ee4d513b14f_183.jpg'); jQuery('#selStoneResName').html('Лотус Кинг'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/92889a6fa2a741a1367e3ee4d513b14f_183.jpg" alt="Лотус Кинг (Lotus King)"><span class="cover"></span></span> <span class="text">Лотус Кинг</span></a>
										<span class="goodField" id="goodField_19"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_560').html('<input type=hidden name=fld[goodField] value=560>'); jQuery('#selStoneRes').attr('src', '/calculators/img/9b7ca6cadb9da518a29f522ab9faa7c0_183.jpg'); jQuery('#selStoneResName').html('Австралиан Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/9b7ca6cadb9da518a29f522ab9faa7c0_183.jpg" alt="Мрамор Австралиан Уайт"><span class="cover"></span></span> <span class="text">Австралиан Уайт</span></a>
										<span class="goodField" id="goodField_560"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_622').html('<input type=hidden name=fld[goodField] value=622>'); jQuery('#selStoneRes').attr('src', '/calculators/img/a97c4c31de278a317f88844ced314a4d_183.jpg'); jQuery('#selStoneResName').html('Неро Маркино Чайна'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/a97c4c31de278a317f88844ced314a4d_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Неро Маркино Чайна</span></a>
										<span class="goodField" id="goodField_622"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_13').html('<input type=hidden name=fld[goodField] value=13>'); jQuery('#selStoneRes').attr('src', '/calculators/img/28e86281ea90491c68030644791405b7_183.jpg'); jQuery('#selStoneResName').html('Неро Маркино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/28e86281ea90491c68030644791405b7_183.jpg" alt="Мрамор Неро Маркина (Nero Marquina)"><span class="cover"></span></span> <span class="text">Неро Маркино</span></a>
										<span class="goodField" id="goodField_13"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_581').html('<input type=hidden name=fld[goodField] value=581>'); jQuery('#selStoneRes').attr('src', '/calculators/img/f702d2ca247a0dd0c4fd28c6d672fd89_183.jpg'); jQuery('#selStoneResName').html('Бьянко Перлино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f702d2ca247a0dd0c4fd28c6d672fd89_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бьянко Перлино</span></a>
										<span class="goodField" id="goodField_581"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_617').html('<input type=hidden name=fld[goodField] value=617>'); jQuery('#selStoneRes').attr('src', '/calculators/img/9c69eacc806301f989241400c88ca6e3_183.jpg'); jQuery('#selStoneResName').html('Микеланджело'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/9c69eacc806301f989241400c88ca6e3_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Микеланджело</span></a>
										<span class="goodField" id="goodField_617"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_588').html('<input type=hidden name=fld[goodField] value=588>'); jQuery('#selStoneRes').attr('src', '/calculators/img/36cdd5a70a71d7645cad0eb488d9dfd3_183.jpg'); jQuery('#selStoneResName').html('Гватемала'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/36cdd5a70a71d7645cad0eb488d9dfd3_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Гватемала</span></a>
										<span class="goodField" id="goodField_588"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_47').html('<input type=hidden name=fld[goodField] value=47>'); jQuery('#selStoneRes').attr('src', '/calculators/img/572387fb141dc1ab2696c8e84ad730d0_183.jpg'); jQuery('#selStoneResName').html('Бречия Оничата Дамаската'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/572387fb141dc1ab2696c8e84ad730d0_183.jpg" alt="Мрамор Бречча Дамаската (Breccia Damaskata)"><span class="cover"></span></span> <span class="text">Бречия Оничата Дамаската</span></a>
										<span class="goodField" id="goodField_47"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_577').html('<input type=hidden name=fld[goodField] value=577>'); jQuery('#selStoneRes').attr('src', '/calculators/img/701ff84f182d0647bd37a7b97bcb1101_183.jpg'); jQuery('#selStoneResName').html('Бречия Оничата'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/701ff84f182d0647bd37a7b97bcb1101_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бречия Оничата</span></a>
										<span class="goodField" id="goodField_577"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_315').html('<input type=hidden name=fld[goodField] value=315>'); jQuery('#selStoneRes').attr('src', '/calculators/img/8557c76ee66506fcb3863f4d87d20a8c_183.jpg'); jQuery('#selStoneResName').html('Империал Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8557c76ee66506fcb3863f4d87d20a8c_183.jpg" alt="Гранит Империал Вайт (Imperial White)"><span class="cover"></span></span> <span class="text">Империал Уайт</span></a>
										<span class="goodField" id="goodField_315"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_125').html('<input type=hidden name=fld[goodField] value=125>'); jQuery('#selStoneRes').attr('src', '/calculators/img/20a8dbf8915d22108f557d3afb720d23_183.jpg'); jQuery('#selStoneResName').html('Палиссандро Нуволато Блю'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/20a8dbf8915d22108f557d3afb720d23_183.jpg" alt="Мрамор Палисандро Нуволато (Palissandro Nuvolato)"><span class="cover"></span></span> <span class="text">Палиссандро Нуволато Блю</span></a>
										<span class="goodField" id="goodField_125"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_648').html('<input type=hidden name=fld[goodField] value=648>'); jQuery('#selStoneRes').attr('src', '/calculators/img/d6b80e5948640410cca45149b5496d4c_183.jpg'); jQuery('#selStoneResName').html('Сильвия Медиум'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d6b80e5948640410cca45149b5496d4c_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Сильвия Медиум</span></a>
										<span class="goodField" id="goodField_648"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_10').html('<input type=hidden name=fld[goodField] value=10>'); jQuery('#selStoneRes').attr('src', '/calculators/img/932b5d7facede9de2690c76269e88482_183.jpg'); jQuery('#selStoneResName').html('Сильвия Оро'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/932b5d7facede9de2690c76269e88482_183.jpg" alt="Сильвия оро"><span class="cover"></span></span> <span class="text">Сильвия Оро</span></a>
										<span class="goodField" id="goodField_10"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_2').html('<input type=hidden name=fld[goodField] value=2>'); jQuery('#selStoneRes').attr('src', '/calculators/img/80d47f3a3ca490b2da00adecd5958631_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/80d47f3a3ca490b2da00adecd5958631_183.jpg" alt="Мрамор Дайна Реале (Брекча Сарда)  Daino Reale (Breccia Sarda)"><span class="cover"></span></span> <span class="text">Дайна Реале</span></a>
										<span class="goodField" id="goodField_2"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_554').html('<input type=hidden name=fld[goodField] value=554>'); jQuery('#selStoneRes').attr('src', '/calculators/img/3b89a4689640074c01dbbc5a31f64762_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале Нуволато'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/3b89a4689640074c01dbbc5a31f64762_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Дайна Реале Нуволато</span></a>
										<span class="goodField" id="goodField_554"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_552').html('<input type=hidden name=fld[goodField] value=552>'); jQuery('#selStoneRes').attr('src', '/calculators/img/a1920f7f74e55124eda305c3172d1432_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале Венато Диагонале'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/a1920f7f74e55124eda305c3172d1432_183.jpg" alt="daino diagonale"><span class="cover"></span></span> <span class="text">Дайна Реале Венато Диагонале</span></a>
										<span class="goodField" id="goodField_552"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_670').html('<input type=hidden name=fld[goodField] value=670>'); jQuery('#selStoneRes').attr('src', '/calculators/img/cdd9926ad3d2694429bf0e4504042a21_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале Перлато'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/cdd9926ad3d2694429bf0e4504042a21_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Дайна Реале Перлато</span></a>
										<span class="goodField" id="goodField_670"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_671').html('<input type=hidden name=fld[goodField] value=671>'); jQuery('#selStoneRes').attr('src', '/calculators/img/c172d22dc98911f1bd862c0cd836b989_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале Венато'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c172d22dc98911f1bd862c0cd836b989_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Дайна Реале Венато</span></a>
										<span class="goodField" id="goodField_671"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_564').html('<input type=hidden name=fld[goodField] value=564>'); jQuery('#selStoneRes').attr('src', '/calculators/img/d07b92881648d47bd3cd73ed376adaa6_183.jpg'); jQuery('#selStoneResName').html('Венге Антик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d07b92881648d47bd3cd73ed376adaa6_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Венге Антик</span></a>
										<span class="goodField" id="goodField_564"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_565').html('<input type=hidden name=fld[goodField] value=565>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b63d7d5b5c2e75e1d920cd5f331b81ce_183.jpg'); jQuery('#selStoneResName').html('Грей Вуд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b63d7d5b5c2e75e1d920cd5f331b81ce_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Грей Вуд</span></a>
										<span class="goodField" id="goodField_565"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_16').html('<input type=hidden name=fld[goodField] value=16>'); jQuery('#selStoneRes').attr('src', '/calculators/img/c6ea3aa7a95b0aa63753ba2c347097b2_183.jpg'); jQuery('#selStoneResName').html('Роза Португало Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c6ea3aa7a95b0aa63753ba2c347097b2_183.jpg" alt="Мрамор Роза Португало Аврора (Rosa Portogallo Aurora)"><span class="cover"></span></span> <span class="text">Роза Португало Экстра</span></a>
										<span class="goodField" id="goodField_16"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_636').html('<input type=hidden name=fld[goodField] value=636>'); jQuery('#selStoneRes').attr('src', '/calculators/img/8a84d53aa2aaec49e95c5a64620a80ee_183.jpg'); jQuery('#selStoneResName').html('Роза Португало'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8a84d53aa2aaec49e95c5a64620a80ee_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Роза Португало</span></a>
										<span class="goodField" id="goodField_636"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_26').html('<input type=hidden name=fld[goodField] value=26>'); jQuery('#selStoneRes').attr('src', '/calculators/img/8377ca9f71e8482dcf848d7a465d4ed5_183.jpg'); jQuery('#selStoneResName').html('Роза Спринг'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8377ca9f71e8482dcf848d7a465d4ed5_183.jpg" alt="Мрамор Роза Спринг (Rosa Spring)"><span class="cover"></span></span> <span class="text">Роза Спринг</span></a>
										<span class="goodField" id="goodField_26"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_146').html('<input type=hidden name=fld[goodField] value=146>'); jQuery('#selStoneRes').attr('src', '/calculators/img/456b83f30bf0d6efbea9476aa5de91a4_183.jpg'); jQuery('#selStoneResName').html('Азул Сиело'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/456b83f30bf0d6efbea9476aa5de91a4_183.jpg" alt="Мрамор Азул Силео"><span class="cover"></span></span> <span class="text">Азул Сиело</span></a>
										<span class="goodField" id="goodField_146"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_645').html('<input type=hidden name=fld[goodField] value=645>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b85263061bd1e10f7241922d90c2e8e7_183.jpg'); jQuery('#selStoneResName').html('Сивек'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b85263061bd1e10f7241922d90c2e8e7_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Сивек</span></a>
										<span class="goodField" id="goodField_645"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_610').html('<input type=hidden name=fld[goodField] value=610>'); jQuery('#selStoneRes').attr('src', '/calculators/img/4ad672388998dea6eb941c974b3812a4_183.jpg'); jQuery('#selStoneResName').html('Лигурио'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/4ad672388998dea6eb941c974b3812a4_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Лигурио</span></a>
										<span class="goodField" id="goodField_610"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_605').html('<input type=hidden name=fld[goodField] value=605>'); jQuery('#selStoneRes').attr('src', '/calculators/img/d9b7511f5e1dca3bd570761c1f4b5ce4_183.jpg'); jQuery('#selStoneResName').html('Клауди Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d9b7511f5e1dca3bd570761c1f4b5ce4_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Клауди Экстра</span></a>
										<span class="goodField" id="goodField_605"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_20').html('<input type=hidden name=fld[goodField] value=20>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b19a782677a0a136df388f9787303954_183.jpg'); jQuery('#selStoneResName').html('Медовый'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b19a782677a0a136df388f9787303954_183.jpg" alt="Оникс Медовый (Onice Honey Miele)"><span class="cover"></span></span> <span class="text">Медовый</span></a>
										<span class="goodField" id="goodField_20"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_28').html('<input type=hidden name=fld[goodField] value=28>'); jQuery('#selStoneRes').attr('src', '/calculators/img/732cea37becb2730bdee7cc9904c7e44_183.jpg'); jQuery('#selStoneResName').html('Россо Верона Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/732cea37becb2730bdee7cc9904c7e44_183.jpg" alt="Мрамор Россо Верона Азиаджо (Rosso Verona Asiago)"><span class="cover"></span></span> <span class="text">Россо Верона Экстра</span></a>
										<span class="goodField" id="goodField_28"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_14').html('<input type=hidden name=fld[goodField] value=14>'); jQuery('#selStoneRes').attr('src', '/calculators/img/25d32216b11ee06b62fab12c3d8da1f4_183.jpg'); jQuery('#selStoneResName').html('Россо Леванто'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/25d32216b11ee06b62fab12c3d8da1f4_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Россо Леванто</span></a>
										<span class="goodField" id="goodField_14"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_15').html('<input type=hidden name=fld[goodField] value=15>'); jQuery('#selStoneRes').attr('src', '/calculators/img/4bfa7d60debbbdff3a980a55a7d35cb4_183.jpg'); jQuery('#selStoneResName').html('Волакас'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/4bfa7d60debbbdff3a980a55a7d35cb4_183.jpg" alt="Мрамор Волакас Вайт (Volacas White)"><span class="cover"></span></span> <span class="text">Волакас</span></a>
										<span class="goodField" id="goodField_15"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_558').html('<input type=hidden name=fld[goodField] value=558>'); jQuery('#selStoneRes').attr('src', '/calculators/img/13509c6685aeaee8071d615a8d07b702_183.jpg'); jQuery('#selStoneResName').html('Капучино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/13509c6685aeaee8071d615a8d07b702_183.jpg" alt="Cappuccino"><span class="cover"></span></span> <span class="text">Капучино</span></a>
										<span class="goodField" id="goodField_558"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_17').html('<input type=hidden name=fld[goodField] value=17>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b1c30d42fdf06acbe05c97293cc73ecf_183.jpg'); jQuery('#selStoneResName').html('Ботичино Семиклассик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b1c30d42fdf06acbe05c97293cc73ecf_183.jpg" alt="Мрамор Боттичино Семиклассико (Botticino Semiclassico)"><span class="cover"></span></span> <span class="text">Ботичино Семиклассик</span></a>
										<span class="goodField" id="goodField_17"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_569').html('<input type=hidden name=fld[goodField] value=569>'); jQuery('#selStoneRes').attr('src', '/calculators/img/1911d0d719ea9086897cf144262fc8b2_183.jpg'); jQuery('#selStoneResName').html('Бедасар (Форест) Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/1911d0d719ea9086897cf144262fc8b2_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бедасар (Форест) Браун</span></a>
										<span class="goodField" id="goodField_569"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_571').html('<input type=hidden name=fld[goodField] value=571>'); jQuery('#selStoneRes').attr('src', '/calculators/img/2ef2c9d4403b4a62dfb4cd7ee9baab82_183.jpg'); jQuery('#selStoneResName').html('Бедасар (Форест) Грин'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/2ef2c9d4403b4a62dfb4cd7ee9baab82_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бедасар (Форест) Грин</span></a>
										<span class="goodField" id="goodField_571"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_570').html('<input type=hidden name=fld[goodField] value=570>'); jQuery('#selStoneRes').attr('src', '/calculators/img/4898ad495a85ab96cc3a665310f18827_183.jpg'); jQuery('#selStoneResName').html('Бедасар (Форест) Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/4898ad495a85ab96cc3a665310f18827_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бедасар (Форест) Голд</span></a>
										<span class="goodField" id="goodField_570"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_36').html('<input type=hidden name=fld[goodField] value=36>'); jQuery('#selStoneRes').attr('src', '/calculators/img/2402f7232b36116e94e2b2ee7bc18b60_183.jpg'); jQuery('#selStoneResName').html('Ботичино Классик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/2402f7232b36116e94e2b2ee7bc18b60_183.jpg" alt="Мрамор Боттичино Классико (Botticino Classiko)"><span class="cover"></span></span> <span class="text">Ботичино Классик</span></a>
										<span class="goodField" id="goodField_36"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_27').html('<input type=hidden name=fld[goodField] value=27>'); jQuery('#selStoneRes').attr('src', '/calculators/img/5cba55804499eabd12477137d44b8931_183.jpg'); jQuery('#selStoneResName').html('Имперадор Лайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5cba55804499eabd12477137d44b8931_183.jpg" alt="Мрамор Имперадор Лайт (Emperador Light)"><span class="cover"></span></span> <span class="text">Имперадор Лайт</span></a>
										<span class="goodField" id="goodField_27"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_1').html('<input type=hidden name=fld[goodField] value=1>'); jQuery('#selStoneRes').attr('src', '/calculators/img/d56554dd8160fa9cd23dfbdcc6eda8de_183.jpg'); jQuery('#selStoneResName').html('Имперадор Дарк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d56554dd8160fa9cd23dfbdcc6eda8de_183.jpg" alt="Мрамор Имперадор Дарк (Emperador Dark)"><span class="cover"></span></span> <span class="text">Имперадор Дарк</span></a>
										<span class="goodField" id="goodField_1"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_669').html('<input type=hidden name=fld[goodField] value=669>'); jQuery('#selStoneRes').attr('src', '/calculators/img/52b7af2d0690c065046fdc4a04b319c9_183.jpg'); jQuery('#selStoneResName').html('Имперадор Дарк Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/52b7af2d0690c065046fdc4a04b319c9_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Имперадор Дарк Экстра</span></a>
										<span class="goodField" id="goodField_669"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_37').html('<input type=hidden name=fld[goodField] value=37>'); jQuery('#selStoneRes').attr('src', '/calculators/img/bf0b547e510bbea792f9718c05520d2a_183.jpg'); jQuery('#selStoneResName').html('Бьянко Каррара Джойа'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/bf0b547e510bbea792f9718c05520d2a_183.jpg" alt="Мрамор Бьянко Карарра (Bianko Kararra Giodia)"><span class="cover"></span></span> <span class="text">Бьянко Каррара Джойа</span></a>
										<span class="goodField" id="goodField_37"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_30').html('<input type=hidden name=fld[goodField] value=30>'); jQuery('#selStoneRes').attr('src', '/calculators/img/72e5c7eb326fc5e7ff146890311d8fa2_183.jpg'); jQuery('#selStoneResName').html('Голден Спайдер'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/72e5c7eb326fc5e7ff146890311d8fa2_183.jpg" alt="Мрамор Голден Спайдер (Golden Spider)"><span class="cover"></span></span> <span class="text">Голден Спайдер</span></a>
										<span class="goodField" id="goodField_30"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_579').html('<input type=hidden name=fld[goodField] value=579>'); jQuery('#selStoneRes').attr('src', '/calculators/img/ce27a4bfd776ddbc9d803d340fdc32ed_183.jpg'); jQuery('#selStoneResName').html('Бьянка Каррара С'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/ce27a4bfd776ddbc9d803d340fdc32ed_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бьянка Каррара С</span></a>
										<span class="goodField" id="goodField_579"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_592').html('<input type=hidden name=fld[goodField] value=592>'); jQuery('#selStoneRes').attr('src', '/calculators/img/b4b5ce3c3a6f2452fb06513b5df7a3da_183.jpg'); jQuery('#selStoneResName').html('Грей Бардиджильо'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b4b5ce3c3a6f2452fb06513b5df7a3da_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Грей Бардиджильо</span></a>
										<span class="goodField" id="goodField_592"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_624').html('<input type=hidden name=fld[goodField] value=624>'); jQuery('#selStoneRes').attr('src', '/calculators/img/63f46c58d0f837ca26beb54451598b86_183.jpg'); jQuery('#selStoneResName').html('Перлино Розато'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/63f46c58d0f837ca26beb54451598b86_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Перлино Розато</span></a>
										<span class="goodField" id="goodField_624"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_639').html('<input type=hidden name=fld[goodField] value=639>'); jQuery('#selStoneRes').attr('src', '/calculators/img/df7b8b7fa9fe45f6aaf0b7ad8c97d279_183.jpg'); jQuery('#selStoneResName').html('Мугла Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/df7b8b7fa9fe45f6aaf0b7ad8c97d279_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Мугла Уайт</span></a>
										<span class="goodField" id="goodField_639"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_11').html('<input type=hidden name=fld[goodField] value=11>'); jQuery('#selStoneRes').attr('src', '/calculators/img/f512d72d5b62be39be4a0126f9ab9e2a_183.jpg'); jQuery('#selStoneResName').html('Грин Тинос'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f512d72d5b62be39be4a0126f9ab9e2a_183.jpg" alt="Мрамор Грин Тинос (Green Tinos)"><span class="cover"></span></span> <span class="text">Грин Тинос</span></a>
										<span class="goodField" id="goodField_11"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_559').html('<input type=hidden name=fld[goodField] value=559>'); jQuery('#selStoneRes').attr('src', '/calculators/img/97ddb225971ef3001f85d46453e7c35e_183.jpg'); jQuery('#selStoneResName').html('Базальтино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/97ddb225971ef3001f85d46453e7c35e_183.jpg" alt="Базальтино"><span class="cover"></span></span> <span class="text">Базальтино</span></a>
										<span class="goodField" id="goodField_559"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_39').html('<input type=hidden name=fld[goodField] value=39>'); jQuery('#selStoneRes').attr('src', '/calculators/img/58f3166b14b7bfc5641b17d5d99e0654_183.jpg'); jQuery('#selStoneResName').html('Галала Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/58f3166b14b7bfc5641b17d5d99e0654_183.jpg" alt="Мрамор Галала Экстра"><span class="cover"></span></span> <span class="text">Галала Экстра</span></a>
										<span class="goodField" id="goodField_39"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_43').html('<input type=hidden name=fld[goodField] value=43>'); jQuery('#selStoneRes').attr('src', '/calculators/img/82e986f9d1559af149d2f686a6a378a8_183.jpg'); jQuery('#selStoneResName').html('Тик Вуд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/82e986f9d1559af149d2f686a6a378a8_183.jpg" alt="Мрамор Тик Вуд (Teak Wood)"><span class="cover"></span></span> <span class="text">Тик Вуд</span></a>
										<span class="goodField" id="goodField_43"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_338').html('<input type=hidden name=fld[goodField] value=338>'); jQuery('#selStoneRes').attr('src', '/calculators/img/ff1bcb266fc1ae834bc59ae190d8d16e_183.jpg'); jQuery('#selStoneResName').html('Айвори Браун Классик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/ff1bcb266fc1ae834bc59ae190d8d16e_183.jpg" alt="Гранит Айвори Браун Классик (Ivory Brown Classic / Shivakashi)"><span class="cover"></span></span> <span class="text">Айвори Браун Классик</span></a>
										<span class="goodField" id="goodField_338"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_574').html('<input type=hidden name=fld[goodField] value=574>'); jQuery('#selStoneRes').attr('src', '/calculators/img/77c72bc27a6cf89998d3d38e5e67d5d6_183.jpg'); jQuery('#selStoneResName').html('Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/77c72bc27a6cf89998d3d38e5e67d5d6_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Блэк</span></a>
										<span class="goodField" id="goodField_574"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_591').html('<input type=hidden name=fld[goodField] value=591>'); jQuery('#selStoneRes').attr('src', '/calculators/img/14a9bb369dd9346ce34dcd86a1ea255a_183.jpg'); jQuery('#selStoneResName').html('Графит'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/14a9bb369dd9346ce34dcd86a1ea255a_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Графит</span></a>
										<span class="goodField" id="goodField_591"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_612').html('<input type=hidden name=fld[goodField] value=612>'); jQuery('#selStoneRes').attr('src', '/calculators/img/'); jQuery('#selStoneResName').html('Лука Де Луна'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><span class="cover"></span></span> <span class="text">Лука Де Луна</span></a>
										<span class="goodField" id="goodField_612"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_633').html('<input type=hidden name=fld[goodField] value=633>'); jQuery('#selStoneRes').attr('src', '/calculators/img/7c2cb69acd4d6c1756125ecb072b5d67_183.jpg'); jQuery('#selStoneResName').html('Рейнбоу'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/7c2cb69acd4d6c1756125ecb072b5d67_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Рейнбоу</span></a>
										<span class="goodField" id="goodField_633"></span>
									</li>
								</ul>
								<ul class="samples2 calcStone" id="marble">
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_667').html('<input type=hidden name=fld[goodField] value=667 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/5ed1157fef30ecd645414a70e6b7c0ab_183.jpg'); jQuery('#selStoneResName').html('Крема Марфил Премиум'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5ed1157fef30ecd645414a70e6b7c0ab_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Крема Марфил Премиум</span></a>
										<span class="goodField" id="goodField_667"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_9').html('<input type=hidden name=fld[goodField] value=9 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/c227b7a4a3b9a61b33a968a08cb22d6f_183.jpg'); jQuery('#selStoneResName').html('Крема Марфил'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c227b7a4a3b9a61b33a968a08cb22d6f_183.jpg" alt="Мрамор Крема Марфил (Crema Marfil)"><span class="cover"></span></span> <span class="text">Крема Марфил</span></a>
										<span class="goodField" id="goodField_9"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_668').html('<input type=hidden name=fld[goodField] value=668 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/44d68f4e9498bc464eba5cf060127042_183.jpg'); jQuery('#selStoneResName').html('Крема Марфил Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/44d68f4e9498bc464eba5cf060127042_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Крема Марфил Экстра</span></a>
										<span class="goodField" id="goodField_668"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_607').html('<input type=hidden name=fld[goodField] value=607 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/39136da7bc1d863238a79829cc0283a7_183.jpg'); jQuery('#selStoneResName').html('Крема Нова Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/39136da7bc1d863238a79829cc0283a7_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Крема Нова Экстра</span></a>
										<span class="goodField" id="goodField_607"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_21').html('<input type=hidden name=fld[goodField] value=21 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/3b269a1fce31889c9d58971c68be4e9c_183.jpg'); jQuery('#selStoneResName').html('Крема Валенсия'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/3b269a1fce31889c9d58971c68be4e9c_183.jpg" alt="Мрамор Крема Валенсия (Crema Valencia)"><span class="cover"></span></span> <span class="text">Крема Валенсия</span></a>
										<span class="goodField" id="goodField_21"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_19').html('<input type=hidden name=fld[goodField] value=19 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/92889a6fa2a741a1367e3ee4d513b14f_183.jpg'); jQuery('#selStoneResName').html('Лотус Кинг'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/92889a6fa2a741a1367e3ee4d513b14f_183.jpg" alt="Лотус Кинг (Lotus King)"><span class="cover"></span></span> <span class="text">Лотус Кинг</span></a>
										<span class="goodField" id="goodField_19"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_560').html('<input type=hidden name=fld[goodField] value=560 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/9b7ca6cadb9da518a29f522ab9faa7c0_183.jpg'); jQuery('#selStoneResName').html('Австралиан Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/9b7ca6cadb9da518a29f522ab9faa7c0_183.jpg" alt="Мрамор Австралиан Уайт"><span class="cover"></span></span> <span class="text">Австралиан Уайт</span></a>
										<span class="goodField" id="goodField_560"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_622').html('<input type=hidden name=fld[goodField] value=622 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/a97c4c31de278a317f88844ced314a4d_183.jpg'); jQuery('#selStoneResName').html('Неро Маркино Чайна'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/a97c4c31de278a317f88844ced314a4d_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Неро Маркино Чайна</span></a>
										<span class="goodField" id="goodField_622"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_13').html('<input type=hidden name=fld[goodField] value=13 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/28e86281ea90491c68030644791405b7_183.jpg'); jQuery('#selStoneResName').html('Неро Маркино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/28e86281ea90491c68030644791405b7_183.jpg" alt="Мрамор Неро Маркина (Nero Marquina)"><span class="cover"></span></span> <span class="text">Неро Маркино</span></a>
										<span class="goodField" id="goodField_13"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_581').html('<input type=hidden name=fld[goodField] value=581 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/f702d2ca247a0dd0c4fd28c6d672fd89_183.jpg'); jQuery('#selStoneResName').html('Бьянко Перлино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f702d2ca247a0dd0c4fd28c6d672fd89_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бьянко Перлино</span></a>
										<span class="goodField" id="goodField_581"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_617').html('<input type=hidden name=fld[goodField] value=617 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/9c69eacc806301f989241400c88ca6e3_183.jpg'); jQuery('#selStoneResName').html('Микеланджело'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/9c69eacc806301f989241400c88ca6e3_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Микеланджело</span></a>
										<span class="goodField" id="goodField_617"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_588').html('<input type=hidden name=fld[goodField] value=588 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/36cdd5a70a71d7645cad0eb488d9dfd3_183.jpg'); jQuery('#selStoneResName').html('Гватемала'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/36cdd5a70a71d7645cad0eb488d9dfd3_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Гватемала</span></a>
										<span class="goodField" id="goodField_588"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_47').html('<input type=hidden name=fld[goodField] value=47 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/572387fb141dc1ab2696c8e84ad730d0_183.jpg'); jQuery('#selStoneResName').html('Бречия Оничата Дамаската'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/572387fb141dc1ab2696c8e84ad730d0_183.jpg" alt="Мрамор Бречча Дамаската (Breccia Damaskata)"><span class="cover"></span></span> <span class="text">Бречия Оничата Дамаската</span></a>
										<span class="goodField" id="goodField_47"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_577').html('<input type=hidden name=fld[goodField] value=577 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/701ff84f182d0647bd37a7b97bcb1101_183.jpg'); jQuery('#selStoneResName').html('Бречия Оничата'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/701ff84f182d0647bd37a7b97bcb1101_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бречия Оничата</span></a>
										<span class="goodField" id="goodField_577"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_315').html('<input type=hidden name=fld[goodField] value=315 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/8557c76ee66506fcb3863f4d87d20a8c_183.jpg'); jQuery('#selStoneResName').html('Империал Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8557c76ee66506fcb3863f4d87d20a8c_183.jpg" alt="Гранит Империал Вайт (Imperial White)"><span class="cover"></span></span> <span class="text">Империал Уайт</span></a>
										<span class="goodField" id="goodField_315"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_125').html('<input type=hidden name=fld[goodField] value=125 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/20a8dbf8915d22108f557d3afb720d23_183.jpg'); jQuery('#selStoneResName').html('Палиссандро Нуволато Блю'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/20a8dbf8915d22108f557d3afb720d23_183.jpg" alt="Мрамор Палисандро Нуволато (Palissandro Nuvolato)"><span class="cover"></span></span> <span class="text">Палиссандро Нуволато Блю</span></a>
										<span class="goodField" id="goodField_125"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_648').html('<input type=hidden name=fld[goodField] value=648 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/d6b80e5948640410cca45149b5496d4c_183.jpg'); jQuery('#selStoneResName').html('Сильвия Медиум'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d6b80e5948640410cca45149b5496d4c_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Сильвия Медиум</span></a>
										<span class="goodField" id="goodField_648"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_10').html('<input type=hidden name=fld[goodField] value=10 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/932b5d7facede9de2690c76269e88482_183.jpg'); jQuery('#selStoneResName').html('Сильвия Оро'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/932b5d7facede9de2690c76269e88482_183.jpg" alt="Сильвия оро"><span class="cover"></span></span> <span class="text">Сильвия Оро</span></a>
										<span class="goodField" id="goodField_10"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_2').html('<input type=hidden name=fld[goodField] value=2 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/80d47f3a3ca490b2da00adecd5958631_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/80d47f3a3ca490b2da00adecd5958631_183.jpg" alt="Мрамор Дайна Реале (Брекча Сарда)  Daino Reale (Breccia Sarda)"><span class="cover"></span></span> <span class="text">Дайна Реале</span></a>
										<span class="goodField" id="goodField_2"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_554').html('<input type=hidden name=fld[goodField] value=554 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/3b89a4689640074c01dbbc5a31f64762_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале Нуволато'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/3b89a4689640074c01dbbc5a31f64762_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Дайна Реале Нуволато</span></a>
										<span class="goodField" id="goodField_554"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_552').html('<input type=hidden name=fld[goodField] value=552 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/a1920f7f74e55124eda305c3172d1432_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале Венато Диагонале'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/a1920f7f74e55124eda305c3172d1432_183.jpg" alt="daino diagonale"><span class="cover"></span></span> <span class="text">Дайна Реале Венато Диагонале</span></a>
										<span class="goodField" id="goodField_552"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_670').html('<input type=hidden name=fld[goodField] value=670 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/cdd9926ad3d2694429bf0e4504042a21_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале Перлато'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/cdd9926ad3d2694429bf0e4504042a21_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Дайна Реале Перлато</span></a>
										<span class="goodField" id="goodField_670"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_671').html('<input type=hidden name=fld[goodField] value=671 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/c172d22dc98911f1bd862c0cd836b989_183.jpg'); jQuery('#selStoneResName').html('Дайна Реале Венато'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c172d22dc98911f1bd862c0cd836b989_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Дайна Реале Венато</span></a>
										<span class="goodField" id="goodField_671"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_565').html('<input type=hidden name=fld[goodField] value=565 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b63d7d5b5c2e75e1d920cd5f331b81ce_183.jpg'); jQuery('#selStoneResName').html('Грей Вуд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b63d7d5b5c2e75e1d920cd5f331b81ce_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Грей Вуд</span></a>
										<span class="goodField" id="goodField_565"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_16').html('<input type=hidden name=fld[goodField] value=16 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/c6ea3aa7a95b0aa63753ba2c347097b2_183.jpg'); jQuery('#selStoneResName').html('Роза Португало Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c6ea3aa7a95b0aa63753ba2c347097b2_183.jpg" alt="Мрамор Роза Португало Аврора (Rosa Portogallo Aurora)"><span class="cover"></span></span> <span class="text">Роза Португало Экстра</span></a>
										<span class="goodField" id="goodField_16"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_636').html('<input type=hidden name=fld[goodField] value=636 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/8a84d53aa2aaec49e95c5a64620a80ee_183.jpg'); jQuery('#selStoneResName').html('Роза Португало'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8a84d53aa2aaec49e95c5a64620a80ee_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Роза Португало</span></a>
										<span class="goodField" id="goodField_636"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_26').html('<input type=hidden name=fld[goodField] value=26 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/8377ca9f71e8482dcf848d7a465d4ed5_183.jpg'); jQuery('#selStoneResName').html('Роза Спринг'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8377ca9f71e8482dcf848d7a465d4ed5_183.jpg" alt="Мрамор Роза Спринг (Rosa Spring)"><span class="cover"></span></span> <span class="text">Роза Спринг</span></a>
										<span class="goodField" id="goodField_26"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_146').html('<input type=hidden name=fld[goodField] value=146 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/456b83f30bf0d6efbea9476aa5de91a4_183.jpg'); jQuery('#selStoneResName').html('Азул Сиело'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/456b83f30bf0d6efbea9476aa5de91a4_183.jpg" alt="Мрамор Азул Силео"><span class="cover"></span></span> <span class="text">Азул Сиело</span></a>
										<span class="goodField" id="goodField_146"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_645').html('<input type=hidden name=fld[goodField] value=645 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b85263061bd1e10f7241922d90c2e8e7_183.jpg'); jQuery('#selStoneResName').html('Сивек'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b85263061bd1e10f7241922d90c2e8e7_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Сивек</span></a>
										<span class="goodField" id="goodField_645"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_610').html('<input type=hidden name=fld[goodField] value=610 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/4ad672388998dea6eb941c974b3812a4_183.jpg'); jQuery('#selStoneResName').html('Лигурио'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/4ad672388998dea6eb941c974b3812a4_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Лигурио</span></a>
										<span class="goodField" id="goodField_610"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_28').html('<input type=hidden name=fld[goodField] value=28 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/732cea37becb2730bdee7cc9904c7e44_183.jpg'); jQuery('#selStoneResName').html('Россо Верона Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/732cea37becb2730bdee7cc9904c7e44_183.jpg" alt="Мрамор Россо Верона Азиаджо (Rosso Verona Asiago)"><span class="cover"></span></span> <span class="text">Россо Верона Экстра</span></a>
										<span class="goodField" id="goodField_28"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_14').html('<input type=hidden name=fld[goodField] value=14 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/25d32216b11ee06b62fab12c3d8da1f4_183.jpg'); jQuery('#selStoneResName').html('Россо Леванто'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/25d32216b11ee06b62fab12c3d8da1f4_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Россо Леванто</span></a>
										<span class="goodField" id="goodField_14"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_15').html('<input type=hidden name=fld[goodField] value=15 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/4bfa7d60debbbdff3a980a55a7d35cb4_183.jpg'); jQuery('#selStoneResName').html('Волакас'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/4bfa7d60debbbdff3a980a55a7d35cb4_183.jpg" alt="Мрамор Волакас Вайт (Volacas White)"><span class="cover"></span></span> <span class="text">Волакас</span></a>
										<span class="goodField" id="goodField_15"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_558').html('<input type=hidden name=fld[goodField] value=558 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/13509c6685aeaee8071d615a8d07b702_183.jpg'); jQuery('#selStoneResName').html('Капучино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/13509c6685aeaee8071d615a8d07b702_183.jpg" alt="Cappuccino"><span class="cover"></span></span> <span class="text">Капучино</span></a>
										<span class="goodField" id="goodField_558"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_17').html('<input type=hidden name=fld[goodField] value=17 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b1c30d42fdf06acbe05c97293cc73ecf_183.jpg'); jQuery('#selStoneResName').html('Ботичино Семиклассик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b1c30d42fdf06acbe05c97293cc73ecf_183.jpg" alt="Мрамор Боттичино Семиклассико (Botticino Semiclassico)"><span class="cover"></span></span> <span class="text">Ботичино Семиклассик</span></a>
										<span class="goodField" id="goodField_17"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_569').html('<input type=hidden name=fld[goodField] value=569 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/1911d0d719ea9086897cf144262fc8b2_183.jpg'); jQuery('#selStoneResName').html('Бедасар (Форест) Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/1911d0d719ea9086897cf144262fc8b2_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бедасар (Форест) Браун</span></a>
										<span class="goodField" id="goodField_569"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_571').html('<input type=hidden name=fld[goodField] value=571 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/2ef2c9d4403b4a62dfb4cd7ee9baab82_183.jpg'); jQuery('#selStoneResName').html('Бедасар (Форест) Грин'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/2ef2c9d4403b4a62dfb4cd7ee9baab82_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бедасар (Форест) Грин</span></a>
										<span class="goodField" id="goodField_571"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_570').html('<input type=hidden name=fld[goodField] value=570 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/4898ad495a85ab96cc3a665310f18827_183.jpg'); jQuery('#selStoneResName').html('Бедасар (Форест) Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/4898ad495a85ab96cc3a665310f18827_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бедасар (Форест) Голд</span></a>
										<span class="goodField" id="goodField_570"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_36').html('<input type=hidden name=fld[goodField] value=36 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/2402f7232b36116e94e2b2ee7bc18b60_183.jpg'); jQuery('#selStoneResName').html('Ботичино Классик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/2402f7232b36116e94e2b2ee7bc18b60_183.jpg" alt="Мрамор Боттичино Классико (Botticino Classiko)"><span class="cover"></span></span> <span class="text">Ботичино Классик</span></a>
										<span class="goodField" id="goodField_36"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_27').html('<input type=hidden name=fld[goodField] value=27 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/5cba55804499eabd12477137d44b8931_183.jpg'); jQuery('#selStoneResName').html('Имперадор Лайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5cba55804499eabd12477137d44b8931_183.jpg" alt="Мрамор Имперадор Лайт (Emperador Light)"><span class="cover"></span></span> <span class="text">Имперадор Лайт</span></a>
										<span class="goodField" id="goodField_27"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_1').html('<input type=hidden name=fld[goodField] value=1 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/d56554dd8160fa9cd23dfbdcc6eda8de_183.jpg'); jQuery('#selStoneResName').html('Имперадор Дарк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d56554dd8160fa9cd23dfbdcc6eda8de_183.jpg" alt="Мрамор Имперадор Дарк (Emperador Dark)"><span class="cover"></span></span> <span class="text">Имперадор Дарк</span></a>
										<span class="goodField" id="goodField_1"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_669').html('<input type=hidden name=fld[goodField] value=669 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/52b7af2d0690c065046fdc4a04b319c9_183.jpg'); jQuery('#selStoneResName').html('Имперадор Дарк Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/52b7af2d0690c065046fdc4a04b319c9_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Имперадор Дарк Экстра</span></a>
										<span class="goodField" id="goodField_669"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_37').html('<input type=hidden name=fld[goodField] value=37 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/bf0b547e510bbea792f9718c05520d2a_183.jpg'); jQuery('#selStoneResName').html('Бьянко Каррара Джойа'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/bf0b547e510bbea792f9718c05520d2a_183.jpg" alt="Мрамор Бьянко Карарра (Bianko Kararra Giodia)"><span class="cover"></span></span> <span class="text">Бьянко Каррара Джойа</span></a>
										<span class="goodField" id="goodField_37"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_30').html('<input type=hidden name=fld[goodField] value=30 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/72e5c7eb326fc5e7ff146890311d8fa2_183.jpg'); jQuery('#selStoneResName').html('Голден Спайдер'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/72e5c7eb326fc5e7ff146890311d8fa2_183.jpg" alt="Мрамор Голден Спайдер (Golden Spider)"><span class="cover"></span></span> <span class="text">Голден Спайдер</span></a>
										<span class="goodField" id="goodField_30"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_579').html('<input type=hidden name=fld[goodField] value=579 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/ce27a4bfd776ddbc9d803d340fdc32ed_183.jpg'); jQuery('#selStoneResName').html('Бьянка Каррара С'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/ce27a4bfd776ddbc9d803d340fdc32ed_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бьянка Каррара С</span></a>
										<span class="goodField" id="goodField_579"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_592').html('<input type=hidden name=fld[goodField] value=592 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b4b5ce3c3a6f2452fb06513b5df7a3da_183.jpg'); jQuery('#selStoneResName').html('Грей Бардиджильо'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b4b5ce3c3a6f2452fb06513b5df7a3da_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Грей Бардиджильо</span></a>
										<span class="goodField" id="goodField_592"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_624').html('<input type=hidden name=fld[goodField] value=624 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/63f46c58d0f837ca26beb54451598b86_183.jpg'); jQuery('#selStoneResName').html('Перлино Розато'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/63f46c58d0f837ca26beb54451598b86_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Перлино Розато</span></a>
										<span class="goodField" id="goodField_624"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_639').html('<input type=hidden name=fld[goodField] value=639 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/df7b8b7fa9fe45f6aaf0b7ad8c97d279_183.jpg'); jQuery('#selStoneResName').html('Мугла Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/df7b8b7fa9fe45f6aaf0b7ad8c97d279_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Мугла Уайт</span></a>
										<span class="goodField" id="goodField_639"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_11').html('<input type=hidden name=fld[goodField] value=11 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/f512d72d5b62be39be4a0126f9ab9e2a_183.jpg'); jQuery('#selStoneResName').html('Грин Тинос'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f512d72d5b62be39be4a0126f9ab9e2a_183.jpg" alt="Мрамор Грин Тинос (Green Tinos)"><span class="cover"></span></span> <span class="text">Грин Тинос</span></a>
										<span class="goodField" id="goodField_11"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_39').html('<input type=hidden name=fld[goodField] value=39 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/58f3166b14b7bfc5641b17d5d99e0654_183.jpg'); jQuery('#selStoneResName').html('Галала Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/58f3166b14b7bfc5641b17d5d99e0654_183.jpg" alt="Мрамор Галала Экстра"><span class="cover"></span></span> <span class="text">Галала Экстра</span></a>
										<span class="goodField" id="goodField_39"></span>
									</li>
								</ul>
								<ul class="samples2 calcStone" id="granite">
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_380').html('<input type=hidden name=fld[goodField] value=380 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/d666a2fb18595b7f6dd54e6d87a5856f_183.jpg'); jQuery('#selStoneResName').html('Азул Ноче'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d666a2fb18595b7f6dd54e6d87a5856f_183.jpg" alt="Гранит Азул Ноче (Azul Noche)"><span class="cover"></span></span> <span class="text">Азул Ноче</span></a>
										<span class="goodField" id="goodField_380"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_566').html('<input type=hidden name=fld[goodField] value=566 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/5c72cda7fb032d30b0457cf7ebd4487a_183.jpg'); jQuery('#selStoneResName').html('Абсолют Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5c72cda7fb032d30b0457cf7ebd4487a_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Абсолют Блэк</span></a>
										<span class="goodField" id="goodField_566"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_237').html('<input type=hidden name=fld[goodField] value=237 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/8df2eabd02701275c1f45adadba3ca9e_183.jpg'); jQuery('#selStoneResName').html('Бейн Брук Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8df2eabd02701275c1f45adadba3ca9e_183.jpg" alt="Гранит Бейнбрук Браун (Bainbrook Brown / G664)"><span class="cover"></span></span> <span class="text">Бейн Брук Браун</span></a>
										<span class="goodField" id="goodField_237"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_227').html('<input type=hidden name=fld[goodField] value=227 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/03396383848f6ab8d7d018a38cd864f7_183.jpg'); jQuery('#selStoneResName').html('Белла Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/03396383848f6ab8d7d018a38cd864f7_183.jpg" alt="Гранит Белла (Роял) Вайт (Bella White / G603)"><span class="cover"></span></span> <span class="text">Белла Уайт</span></a>
										<span class="goodField" id="goodField_227"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_573').html('<input type=hidden name=fld[goodField] value=573 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/e3f23165229eed7bee0130e19cdadf3b_183.jpg'); jQuery('#selStoneResName').html('Бланко Перла'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/e3f23165229eed7bee0130e19cdadf3b_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Бланко Перла</span></a>
										<span class="goodField" id="goodField_573"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_234').html('<input type=hidden name=fld[goodField] value=234 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/a369e3afa26e2aa15c37037e08241520_183.jpg'); jQuery('#selStoneResName').html('Блэк Гэлакси'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/a369e3afa26e2aa15c37037e08241520_183.jpg" alt=" Блэк Гэлакси (Star Galaxy Black)"><span class="cover"></span></span> <span class="text">Блэк Гэлакси</span></a>
										<span class="goodField" id="goodField_234"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_238').html('<input type=hidden name=fld[goodField] value=238 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b4d780a255f01d07e0a3118fccc44d44_183.jpg'); jQuery('#selStoneResName').html('Блю Перл'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b4d780a255f01d07e0a3118fccc44d44_183.jpg" alt="Гранит Блю Перл GT (Blue Pearl GT)"><span class="cover"></span></span> <span class="text">Блю Перл</span></a>
										<span class="goodField" id="goodField_238"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_236').html('<input type=hidden name=fld[goodField] value=236 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/f45959a553dd5321f3f809857194ee37_183.jpg'); jQuery('#selStoneResName').html('Браун Антик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f45959a553dd5321f3f809857194ee37_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Браун Антик</span></a>
										<span class="goodField" id="goodField_236"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_584').html('<input type=hidden name=fld[goodField] value=584 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/d8cc122d53c3ed504cec6493ce50cc9d_183.png'); jQuery('#selStoneResName').html('Верде Бахия'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d8cc122d53c3ed504cec6493ce50cc9d_183.png" alt=""><span class="cover"></span></span> <span class="text">Верде Бахия</span></a>
										<span class="goodField" id="goodField_584"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_590').html('<input type=hidden name=fld[goodField] value=590 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b60fbb784dbd72f9637980a992b91ce0_183.jpg'); jQuery('#selStoneResName').html('Голден Тиа'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b60fbb784dbd72f9637980a992b91ce0_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Голден Тиа</span></a>
										<span class="goodField" id="goodField_590"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_595').html('<input type=hidden name=fld[goodField] value=595 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/e40680565916f115af51572899ed7b07_183.jpg'); jQuery('#selStoneResName').html('Джало Венециано'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/e40680565916f115af51572899ed7b07_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Джало Венециано</span></a>
										<span class="goodField" id="goodField_595"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_241').html('<input type=hidden name=fld[goodField] value=241 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/60237475cbcb1f5c2a6beabadba58906_183.jpg'); jQuery('#selStoneResName').html('Джало Венециано Фиорито'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/60237475cbcb1f5c2a6beabadba58906_183.jpg" alt="Гранит Джалло Венециано Фьёрито (Giallo Veneziano Fiorito)"><span class="cover"></span></span> <span class="text">Джало Венециано Фиорито</span></a>
										<span class="goodField" id="goodField_241"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_249').html('<input type=hidden name=fld[goodField] value=249 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/e46895859f0e975151643b6f46de8235_183.jpg'); jQuery('#selStoneResName').html('Джало Наполеоне'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/e46895859f0e975151643b6f46de8235_183.jpg" alt="Гранит Джалло Наполеоне (Giallo Napoleone)"><span class="cover"></span></span> <span class="text">Джало Наполеоне</span></a>
										<span class="goodField" id="goodField_249"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_240').html('<input type=hidden name=fld[goodField] value=240 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/c3bd28b063401a40afe4ae9fae259016_183.jpg'); jQuery('#selStoneResName').html('Джало Сицилия'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c3bd28b063401a40afe4ae9fae259016_183.jpg" alt="Гранит Джалло Сицилия (Giallo Cecilia)"><span class="cover"></span></span> <span class="text">Джало Сицилия</span></a>
										<span class="goodField" id="goodField_240"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_598').html('<input type=hidden name=fld[goodField] value=598 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/9e8b309ab1abd6f0d3ae6f89185b94e0_183.jpg'); jQuery('#selStoneResName').html('Империал Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/9e8b309ab1abd6f0d3ae6f89185b94e0_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Империал Голд</span></a>
										<span class="goodField" id="goodField_598"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_551').html('<input type=hidden name=fld[goodField] value=551 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/f555441317f0fe5792b41f5026b8b2e6_183.jpg'); jQuery('#selStoneResName').html('Жельтау'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f555441317f0fe5792b41f5026b8b2e6_183.jpg" alt="Жельтау"><span class="cover"></span></span> <span class="text">Жельтау</span></a>
										<span class="goodField" id="goodField_551"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_242').html('<input type=hidden name=fld[goodField] value=242 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/6d98ed41b054d3810061bfdf37483cb1_183.jpg'); jQuery('#selStoneResName').html('Капустинский'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/6d98ed41b054d3810061bfdf37483cb1_183.jpg" alt="Гранит Капустинский (Rosso Santiago / Koral)"><span class="cover"></span></span> <span class="text">Капустинский</span></a>
										<span class="goodField" id="goodField_242"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_409').html('<input type=hidden name=fld[goodField] value=409 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/1995e1f97e4c01cc7d004253a6d4200a_183.jpg'); jQuery('#selStoneResName').html('Кашмир Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/1995e1f97e4c01cc7d004253a6d4200a_183.jpg" alt="Гранит Кашимир Голд А (Kashmir Gold A)"><span class="cover"></span></span> <span class="text">Кашмир Голд</span></a>
										<span class="goodField" id="goodField_409"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_244').html('<input type=hidden name=fld[goodField] value=244 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/6e7349aa3ae126a1df88bb022ee8c924_183.jpg'); jQuery('#selStoneResName').html('Мадура Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/6e7349aa3ae126a1df88bb022ee8c924_183.jpg" alt="Гранит Мадура Голд (Madura Gold)"><span class="cover"></span></span> <span class="text">Мадура Голд</span></a>
										<span class="goodField" id="goodField_244"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_613').html('<input type=hidden name=fld[goodField] value=613 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/75ff83439f55a24b0e1b95ae804f5549_183.jpg'); jQuery('#selStoneResName').html('Мансуровский'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/75ff83439f55a24b0e1b95ae804f5549_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Мансуровский</span></a>
										<span class="goodField" id="goodField_613"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_258').html('<input type=hidden name=fld[goodField] value=258 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/dc7b042ca3115aad5292ee395ffb82fa_183.jpg'); jQuery('#selStoneResName').html('Междуреченский'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/dc7b042ca3115aad5292ee395ffb82fa_183.jpg" alt="Гранит Междуреченский (Flower of Ukraine)"><span class="cover"></span></span> <span class="text">Междуреченский</span></a>
										<span class="goodField" id="goodField_258"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_619').html('<input type=hidden name=fld[goodField] value=619 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/a7f35efefea5bcbfaea394fcd20c76ac_183.jpg'); jQuery('#selStoneResName').html('Монголия Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/a7f35efefea5bcbfaea394fcd20c76ac_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Монголия Блэк</span></a>
										<span class="goodField" id="goodField_619"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_231').html('<input type=hidden name=fld[goodField] value=231 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/5388b5314e163972a02ec1a51a58eb8c_183.jpg'); jQuery('#selStoneResName').html('Мэпл Ред'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5388b5314e163972a02ec1a51a58eb8c_183.jpg" alt="Гранит Мапл Рэд (Maple Red / G562)"><span class="cover"></span></span> <span class="text">Мэпл Ред</span></a>
										<span class="goodField" id="goodField_231"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_233').html('<input type=hidden name=fld[goodField] value=233 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/57ce1bf969eb740b90b604ff279d60be_183.jpg'); jQuery('#selStoneResName').html('Нью Империал Ред'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/57ce1bf969eb740b90b604ff279d60be_183.jpg" alt="Гранит Нью Империал Рэд (New Imperial Red)"><span class="cover"></span></span> <span class="text">Нью Империал Ред</span></a>
										<span class="goodField" id="goodField_233"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_230').html('<input type=hidden name=fld[goodField] value=230 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b92c6aa170cc3daa35b9f66a15b7f458_183.jpg'); jQuery('#selStoneResName').html('Паданг Дарк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b92c6aa170cc3daa35b9f66a15b7f458_183.jpg" alt="Гранит Паданг Дарк (Padang Dark / G654)"><span class="cover"></span></span> <span class="text">Паданг Дарк</span></a>
										<span class="goodField" id="goodField_230"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_358').html('<input type=hidden name=fld[goodField] value=358 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b4948cdfd6aad5fe1d38272e5d6c6f17_183.jpg'); jQuery('#selStoneResName').html('Парадизо Баш'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b4948cdfd6aad5fe1d38272e5d6c6f17_183.jpg" alt="Гранит Парадизо Беш / Лайт (Paradiso Bash / Light)"><span class="cover"></span></span> <span class="text">Парадизо Баш</span></a>
										<span class="goodField" id="goodField_358"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_629').html('<input type=hidden name=fld[goodField] value=629 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/039787f00663be9e8860ac4596151430_183.jpg'); jQuery('#selStoneResName').html('Порфидо Виола'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/039787f00663be9e8860ac4596151430_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Порфидо Виола</span></a>
										<span class="goodField" id="goodField_629"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_288').html('<input type=hidden name=fld[goodField] value=288 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/981d4f2771ce0c3c464ffe8a71e078b7_183.jpg'); jQuery('#selStoneResName').html('Покостовский'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/981d4f2771ce0c3c464ffe8a71e078b7_183.jpg" alt="Гранит Покостовский (Grey Ukraine)"><span class="cover"></span></span> <span class="text">Покостовский</span></a>
										<span class="goodField" id="goodField_288"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_634').html('<input type=hidden name=fld[goodField] value=634 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/89c7e591ecff94ccb34bb9f419af5555_183.jpg'); jQuery('#selStoneResName').html('Ривер Уайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/89c7e591ecff94ccb34bb9f419af5555_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Ривер Уайт</span></a>
										<span class="goodField" id="goodField_634"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_635').html('<input type=hidden name=fld[goodField] value=635 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/14e961fa786d93c58e6f46ab95b69697_183.jpg'); jQuery('#selStoneResName').html('Роза Порино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/14e961fa786d93c58e6f46ab95b69697_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Роза Порино</span></a>
										<span class="goodField" id="goodField_635"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_232').html('<input type=hidden name=fld[goodField] value=232 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/ddd607e7396d3646fd682bfd5e316b1c_183.jpg'); jQuery('#selStoneResName').html('Ресмо Рэд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/ddd607e7396d3646fd682bfd5e316b1c_183.jpg" alt="Гранит Ресмо Рэд (Resmo Red)"><span class="cover"></span></span> <span class="text">Ресмо Рэд</span></a>
										<span class="goodField" id="goodField_232"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_228').html('<input type=hidden name=fld[goodField] value=228 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/86964adf1c4f8cebbe010aabeebd202d_183.jpg'); jQuery('#selStoneResName').html('Сансет Голд Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/86964adf1c4f8cebbe010aabeebd202d_183.jpg" alt="G681A"><span class="cover"></span></span> <span class="text">Сансет Голд Экстра</span></a>
										<span class="goodField" id="goodField_228"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_300').html('<input type=hidden name=fld[goodField] value=300 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/12aa85d38bf0998f171ed9276ec1c219_183.jpg'); jQuery('#selStoneResName').html('Тайгер Скин Еллоу'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/12aa85d38bf0998f171ed9276ec1c219_183.jpg" alt="Гранит Тайгер Скин Еллоу (Tiger Skin Yellow / G628)"><span class="cover"></span></span> <span class="text">Тайгер Скин Еллоу</span></a>
										<span class="goodField" id="goodField_300"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_256').html('<input type=hidden name=fld[goodField] value=256 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/9b7e1fb76f56c7ca09d45bf5f93dbeab_183.jpg'); jQuery('#selStoneResName').html('Тан Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/9b7e1fb76f56c7ca09d45bf5f93dbeab_183.jpg" alt="Гранит Тан Браун (Tan Brown)"><span class="cover"></span></span> <span class="text">Тан Браун</span></a>
										<span class="goodField" id="goodField_256"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_350').html('<input type=hidden name=fld[goodField] value=350 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/f8de8de02a4b72ddd924115355459a43_183.jpg'); jQuery('#selStoneResName').html('Тропик Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/f8de8de02a4b72ddd924115355459a43_183.jpg" alt="Гранит Тропик Браун (Tropic Brown)"><span class="cover"></span></span> <span class="text">Тропик Браун</span></a>
										<span class="goodField" id="goodField_350"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_656').html('<input type=hidden name=fld[goodField] value=656 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b548cdee59b26d8350a4eb1b35968699_183.jpg'); jQuery('#selStoneResName').html('Уайт Гэлакси'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b548cdee59b26d8350a4eb1b35968699_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Уайт Гэлакси</span></a>
										<span class="goodField" id="goodField_656"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_659').html('<input type=hidden name=fld[goodField] value=659 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/14317d331378b01749d9cd87988a6b3b_183.jpg'); jQuery('#selStoneResName').html('Хебей Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/14317d331378b01749d9cd87988a6b3b_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Хебей Блэк</span></a>
										<span class="goodField" id="goodField_659"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_247').html('<input type=hidden name=fld[goodField] value=247 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/71326fcbd7c866ee19f4bd3a15aca541_183.jpg'); jQuery('#selStoneResName').html('Чайна Грин'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/71326fcbd7c866ee19f4bd3a15aca541_183.jpg" alt="Гранит Чайна Грин (China Green / G674)"><span class="cover"></span></span> <span class="text">Чайна Грин</span></a>
										<span class="goodField" id="goodField_247"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_672').html('<input type=hidden name=fld[goodField] value=672 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/fafa93449ef80e3ff25079962355385c_183.jpg'); jQuery('#selStoneResName').html('Чайна Тропикал Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/fafa93449ef80e3ff25079962355385c_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Чайна Тропикал Браун</span></a>
										<span class="goodField" id="goodField_672"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_663').html('<input type=hidden name=fld[goodField] value=663 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/8555a120500061ce6e539e59b4bcba6e_183.jpg'); jQuery('#selStoneResName').html('Шивакаши Голд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8555a120500061ce6e539e59b4bcba6e_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Шивакаши Голд</span></a>
										<span class="goodField" id="goodField_663"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_235').html('<input type=hidden name=fld[goodField] value=235 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/3ed840e56ec50d7bf94905616a9c0b74_183.jpg'); jQuery('#selStoneResName').html('Шанкси Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/3ed840e56ec50d7bf94905616a9c0b74_183.jpg" alt="Шанкси Блэк (Shanxi Black)"><span class="cover"></span></span> <span class="text">Шанкси Блэк</span></a>
										<span class="goodField" id="goodField_235"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_338').html('<input type=hidden name=fld[goodField] value=338 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/ff1bcb266fc1ae834bc59ae190d8d16e_183.jpg'); jQuery('#selStoneResName').html('Айвори Браун Классик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/ff1bcb266fc1ae834bc59ae190d8d16e_183.jpg" alt="Гранит Айвори Браун Классик (Ivory Brown Classic / Shivakashi)"><span class="cover"></span></span> <span class="text">Айвори Браун Классик</span></a>
										<span class="goodField" id="goodField_338"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_612').html('<input type=hidden name=fld[goodField] value=612 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/'); jQuery('#selStoneResName').html('Лука Де Луна'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><span class="cover"></span></span> <span class="text">Лука Де Луна</span></a>
										<span class="goodField" id="goodField_612"></span>
									</li>
								</ul>
								<ul class="samples2 calcStone" id="oniks">
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_605').html('<input type=hidden name=fld[goodField] value=605 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/d9b7511f5e1dca3bd570761c1f4b5ce4_183.jpg'); jQuery('#selStoneResName').html('Клауди Экстра'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d9b7511f5e1dca3bd570761c1f4b5ce4_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Клауди Экстра</span></a>
										<span class="goodField" id="goodField_605"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_20').html('<input type=hidden name=fld[goodField] value=20 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/b19a782677a0a136df388f9787303954_183.jpg'); jQuery('#selStoneResName').html('Медовый'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/b19a782677a0a136df388f9787303954_183.jpg" alt="Оникс Медовый (Onice Honey Miele)"><span class="cover"></span></span> <span class="text">Медовый</span></a>
										<span class="goodField" id="goodField_20"></span>
									</li>
								</ul>
								<ul class="samples2 calcStone" id="travertin">
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_556').html('<input type=hidden name=fld[goodField] value=556 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/dffa82b8266d35b3b5b450b95c2b523f_183.jpg'); jQuery('#selStoneResName').html('Алабастрино Рустик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/dffa82b8266d35b3b5b450b95c2b523f_183.jpg" alt="ALABASTRINO-RUSTIC (V.C.)"><span class="cover"></span></span> <span class="text">Алабастрино Рустик</span></a>
										<span class="goodField" id="goodField_556"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_557').html('<input type=hidden name=fld[goodField] value=557 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/c8b5363ec2fb3de2f423806d251a6261_183.jpg'); jQuery('#selStoneResName').html('Классик Лайт'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/c8b5363ec2fb3de2f423806d251a6261_183.jpg" alt="Travertin classico light"><span class="cover"></span></span> <span class="text">Классик Лайт</span></a>
										<span class="goodField" id="goodField_557"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_625').html('<input type=hidden name=fld[goodField] value=625 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/7dc2c9c7ed2e910acafee18cbc53d0d8_183.jpg'); jQuery('#selStoneResName').html('Персиан Ред'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/7dc2c9c7ed2e910acafee18cbc53d0d8_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Персиан Ред</span></a>
										<span class="goodField" id="goodField_625"></span>
									</li>
								</ul>
								<ul class="samples2 calcStone" id="izvestnyak">
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_93').html('<input type=hidden name=fld[goodField] value=93 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/14618f31c95d17b8b7ce171bd04c3bb7_183.jpg'); jQuery('#selStoneResName').html('Мока Крем'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/14618f31c95d17b8b7ce171bd04c3bb7_183.jpg" alt="Мрамор Мока Крим Известняк (Moka Cream Limestone)"><span class="cover"></span></span> <span class="text">Мока Крем</span></a>
										<span class="goodField" id="goodField_93"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_623').html('<input type=hidden name=fld[goodField] value=623 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/ee016f6988a378beae492a36d66d5582_183.jpg'); jQuery('#selStoneResName').html('Патара'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/ee016f6988a378beae492a36d66d5582_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Патара</span></a>
										<span class="goodField" id="goodField_623"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_649').html('<input type=hidden name=fld[goodField] value=649 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/5b130ed3140727bff8e75ddf357f7b64_183.jpg'); jQuery('#selStoneResName').html('Симена'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/5b130ed3140727bff8e75ddf357f7b64_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Симена</span></a>
										<span class="goodField" id="goodField_649"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_658').html('<input type=hidden name=fld[goodField] value=658 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/53206018bdc5e7afee798d143b1225d7_183.jpg'); jQuery('#selStoneResName').html('Фосил Браун'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/53206018bdc5e7afee798d143b1225d7_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Фосил Браун</span></a>
										<span class="goodField" id="goodField_658"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_162').html('<input type=hidden name=fld[goodField] value=162 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/bd7e55b75d4cd663f43888ef12c97b5a_183.jpg'); jQuery('#selStoneResName').html('Юрский Беж'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/bd7e55b75d4cd663f43888ef12c97b5a_183.jpg" alt="Мрамор Джура Бьеже / Голд Лименстоун (Jura Biege / Gold Limestone)"><span class="cover"></span></span> <span class="text">Юрский Беж</span></a>
										<span class="goodField" id="goodField_162"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_129').html('<input type=hidden name=fld[goodField] value=129 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/8fdb7aaaedaa65bdaf90311b1d2a0a8b_183.jpg'); jQuery('#selStoneResName').html('Юрский Серый'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/8fdb7aaaedaa65bdaf90311b1d2a0a8b_183.jpg" alt="Мрамор Джура Грей / Блу Лименстоун (Jura Grey / Blue Limestone)"><span class="cover"></span></span> <span class="text">Юрский Серый</span></a>
										<span class="goodField" id="goodField_129"></span>
									</li>
								</ul>
								<ul class="samples2 calcStone" id="peschanik">
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_564').html('<input type=hidden name=fld[goodField] value=564 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/d07b92881648d47bd3cd73ed376adaa6_183.jpg'); jQuery('#selStoneResName').html('Венге Антик'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/d07b92881648d47bd3cd73ed376adaa6_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Венге Антик</span></a>
										<span class="goodField" id="goodField_564"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_43').html('<input type=hidden name=fld[goodField] value=43 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/82e986f9d1559af149d2f686a6a378a8_183.jpg'); jQuery('#selStoneResName').html('Тик Вуд'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/82e986f9d1559af149d2f686a6a378a8_183.jpg" alt="Мрамор Тик Вуд (Teak Wood)"><span class="cover"></span></span> <span class="text">Тик Вуд</span></a>
										<span class="goodField" id="goodField_43"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_633').html('<input type=hidden name=fld[goodField] value=633 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/7c2cb69acd4d6c1756125ecb072b5d67_183.jpg'); jQuery('#selStoneResName').html('Рейнбоу'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/7c2cb69acd4d6c1756125ecb072b5d67_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Рейнбоу</span></a>
										<span class="goodField" id="goodField_633"></span>
									</li>
								</ul>
								<ul class="samples2 calcStone" id="bazalt">
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_229').html('<input type=hidden name=fld[goodField] value=229 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/bb69f10ce288be4b867ad406d06bfc1f_183.jpg'); jQuery('#selStoneResName').html('Бери Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/bb69f10ce288be4b867ad406d06bfc1f_183.jpg" alt="Берри Блэк (Berry Black / G684)"><span class="cover"></span></span> <span class="text">Бери Блэк</span></a>
										<span class="goodField" id="goodField_229"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_559').html('<input type=hidden name=fld[goodField] value=559 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/97ddb225971ef3001f85d46453e7c35e_183.jpg'); jQuery('#selStoneResName').html('Базальтино'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/97ddb225971ef3001f85d46453e7c35e_183.jpg" alt="Базальтино"><span class="cover"></span></span> <span class="text">Базальтино</span></a>
										<span class="goodField" id="goodField_559"></span>
									</li>
								</ul>
								<ul class="samples2 calcStone" id="slate">
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_574').html('<input type=hidden name=fld[goodField] value=574 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/77c72bc27a6cf89998d3d38e5e67d5d6_183.jpg'); jQuery('#selStoneResName').html('Блэк'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/77c72bc27a6cf89998d3d38e5e67d5d6_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Блэк</span></a>
										<span class="goodField" id="goodField_574"></span>
									</li>
									<li onclick="jQuery('.samples2 li').removeClass('active'); jQuery(this).addClass('active'); jQuery('.goodField').html(''); jQuery('#goodField_591').html('<input type=hidden name=fld[goodField] value=591 >'); jQuery('#selStoneRes').attr('src', '/calculators/img/14a9bb369dd9346ce34dcd86a1ea255a_183.jpg'); jQuery('#selStoneResName').html('Графит'); jQuery('#stoneResBox').show(); return false;">
										<a><span class="img"><img src="/calculators/img/14a9bb369dd9346ce34dcd86a1ea255a_183.jpg" alt=""><span class="cover"></span></span> <span class="text">Графит</span></a>
										<span class="goodField" id="goodField_591"></span>
									</li>
								</ul>
							</div>
						</div>
					</article>
					<article>
						<header><strong>Шаг</strong><span>6</span> Дополнительные опции</header>
						<ul class="checks2">
							<li>
								<input class="calcCheckbox" type="checkbox" name="fld[drunk]" value="1"> Пропил под капельник
							</li>
							<li>
								<input class="calcCheckbox" type="checkbox" name="fld[zamer]" value="1"> Замер
							</li>
							<li>
								<input class="calcCheckbox" type="checkbox" name="fld[montage]" value="1"> Монтаж
							</li>
							<li>
								<input class="calcCheckbox" type="checkbox" name="fld[deliver]" value="1"> Доставка
							</li>
						</ul>
					</article>
					<article>
						<header><strong>Шаг</strong><span>7</span> Контактные данные</header>
						<div class="size" style="padding-left:0;">
							<table>
								<tbody>
								<tr>
									<td class="value" style="width: 552px;">
										<strong style="width:80px;text-align:left;color:#5d5454;">Имя*</strong>
										<div style="width:200px;" class="input">
											<input style="width:222px;" type="text" name="fld[name]" value="">
										</div>
									</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td class="value" style="width: 552px;">
										<strong style="width:80px;text-align:left;color:#5d5454;">Email*</strong>
										<input class="radio-contact1" style="float:left;margin: 5px 5px 0 5px;" type="radio" checked="">
										<div style="width:177px;" class="input">
											<input class="field_email" style="width:177px;" type="text" name="fld[email]" value="">
										</div>
									</td>
									<td class="value" style="width: 552px;">
										<strong style="width:80px;text-align:left;color:#5d5454;">Телефон*</strong>
										<input class="radio-contact2" style="float:left;margin: 5px 5px 0 0;" type="radio">
										<div style="width:153px;background:#e9e7e2" class="input">
											<input class="field_phone" style="width:152px;" type="text" name="fld[phone]" value="" disabled="">
										</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</article>
					<hr style="border-top: 1px solid #ddcab6;">
					<div id="resultCalc">
						<input value="Отправить" type="submit" name="calc_stol_submit">
					</div>
					<div class="submit_ok"></div>
					<!-- end .submit-->
				</div>
			</div>
		</fieldset>
	</form>
</div>