<? if ($APPLICATION->GetCurPage() == SITE_DIR) { ?>
  <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="" class="page-header__logo-image">
<? } else { ?>
  <a href="<?=SITE_DIR?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="" class="page-header__logo-image"></a>
<? } ?>