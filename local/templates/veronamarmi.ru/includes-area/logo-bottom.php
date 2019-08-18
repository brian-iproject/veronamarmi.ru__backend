<? if ($APPLICATION->GetCurPage() == SITE_DIR) { ?>
  <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-bottom.png" alt="" class="page-footer__logo-image">
<? } else { ?>
  <a href="<?=SITE_DIR?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo-bottom.png" alt="" class="page-footer__logo-image"></a>
<? } ?>