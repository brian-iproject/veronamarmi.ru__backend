<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
		</main>
		<? if ($APPLICATION->GetProperty("show-aside") && $APPLICATION->GetProperty("show-aside") != "N") { ?>
			<? ob_start(); ?> page-content--two-column<?
				$pageContentClass = ob_get_contents();
			ob_end_clean();

			$APPLICATION->AddViewContent("pageContentClass",$pageContentClass);
			?>
		<aside class="page-content__aside">

		</aside>
		<? } ?>
	</div>
	<footer class="page-footer">
		<div class="page-footer__inner container--fluid">
			<div class="page-footer__company">
				<div class="page-footer__logo">
	        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	            "AREA_FILE_SHOW" => "file",
	            "PATH" => SITE_TEMPLATE_PATH."/includes-area/logo-bottom.php",
	            "EDIT_TEMPLATE" => ""
	        ),
	            false
	        );?>
				</div>
				<div class="page-footer__slogan">
	        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	            "AREA_FILE_SHOW" => "file",
	            "PATH" => SITE_TEMPLATE_PATH."/includes-area/slogan.php",
	            "EDIT_TEMPLATE" => ""
	        ),
	            false
	        );?>
				</div>
				<div class="page-footer__social-networks">
					<div class="page-footer__social-networks-heading">Мы в социальных сетях:</div>
          <?$APPLICATION->IncludeComponent(
              "bitrix:menu",
              "social-networks",
              array(
                  "COMPONENT_TEMPLATE" => "social-networks",
                  "ROOT_MENU_TYPE" => "socialnetworks",
                  "MENU_CACHE_TYPE" => "N",
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_USE_GROUPS" => "N",
                  "MENU_CACHE_GET_VARS" => array(
                  ),
                  "MAX_LEVEL" => "1",
                  "CHILD_MENU_TYPE" => "left",
                  "USE_EXT" => "N",
                  "DELAY" => "N",
                  "ALLOW_MULTI_SELECT" => "N"
              ),
              false
          );?>
				</div>
			</div>
			<div class="page-footer__footer-menu">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"footer-menu",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "2",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "N",
						"ROOT_MENU_TYPE" => "products",
						"USE_EXT" => "Y",
						"COMPONENT_TEMPLATE" => "footer-menu"
					),
					false
				);?>
			</div>
			<div class="page-footer__contacts">
				<div class="page-footer__phone-email">
					<div class="page-footer__phone">
	          <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	              "AREA_FILE_SHOW" => "file",
	              "PATH" => SITE_TEMPLATE_PATH."/includes-area/phone1.php",
	              "EDIT_TEMPLATE" => ""
	          ),
	              false
	          );?>
					</div>
					<div class="page-footer__phone">
	          <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	              "AREA_FILE_SHOW" => "file",
	              "PATH" => SITE_TEMPLATE_PATH."/includes-area/phone2.php",
	              "EDIT_TEMPLATE" => ""
	          ),
	              false
	          );?>
					</div>
					<div class="psge-footer__email">
	          <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	              "AREA_FILE_SHOW" => "file",
	              "PATH" => SITE_TEMPLATE_PATH."/includes-area/email.php",
	              "EDIT_TEMPLATE" => ""
	          ),
	              false
	          );?>
					</div>
				</div>
				<div class="page-footer__callback">
	        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	            "AREA_FILE_SHOW" => "file",
	            "PATH" => SITE_TEMPLATE_PATH."/includes-area/callback-button-footer.php",
	            "EDIT_TEMPLATE" => ""
	        ),
	            false
	        );?>
				</div>
				<div class="page-footer__price">
	        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	            "AREA_FILE_SHOW" => "file",
	            "PATH" => SITE_TEMPLATE_PATH."/includes-area/price.php",
	            "EDIT_TEMPLATE" => ""
	        ),
	            false
	        );?>
				</div>
			</div>
		</div>
	</footer>
	<div class="bottomline">
		<div class="bottomline__inner container--fluid">
			<div class="bottomline__address1">
	      <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	          "AREA_FILE_SHOW" => "file",
	          "PATH" => SITE_TEMPLATE_PATH."/includes-area/address1.php",
	          "EDIT_TEMPLATE" => ""
	      ),
	          false
	      );?>
			</div>
			<div class="bottomline__address2">
	      <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	          "AREA_FILE_SHOW" => "file",
	          "PATH" => SITE_TEMPLATE_PATH."/includes-area/address2.php",
	          "EDIT_TEMPLATE" => ""
	      ),
	          false
	      );?>
			</div>
			<div class="bottomline__time-work">
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
</div>
<div class="scrollTop">
	<svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon-scroll-top"></use></svg>
	<div>Наверх</div>
</div>
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
    "AREA_FILE_SHOW" => "file",
    "PATH" => SITE_TEMPLATE_PATH."/includes-area/counters.php",
    "EDIT_TEMPLATE" => ""
),
    false
);?>
</body>
</html>