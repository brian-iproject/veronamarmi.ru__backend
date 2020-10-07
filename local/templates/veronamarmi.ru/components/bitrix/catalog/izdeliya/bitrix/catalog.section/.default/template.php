<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogTopComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */
$this->setFrameMode(true);
?>
<? if (count($arResult['ITEMS'])) { ?>
	<div class="h2"><?=$arResult['~UF_HEADING_PRODUCTS']?$arResult['~UF_HEADING_PRODUCTS']:'Примеры наших работ'?></div>
	<div class="products-list">
		<?
		foreach ($arResult['ITEMS'] as $arItem) {
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			<div class="products-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="products-list__item-inner">
					<? if ($arItem['PX_PREVIEW_PICTURE']['SRC']) { ?>
						<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="products-list__link"><img src="<?=$arItem['PX_PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" class="products-list__image"></a>
					<? } ?>
					<div class="products-list__caption">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="products-list__title"><?=$arItem['NAME']?></a>
							<? if ($arItem['DISPLAY_PROPERTIES']['OBJECT']['DISPLAY_VALUE']) { ?>
								<span class="products-list__object">(<?=$arItem['DISPLAY_PROPERTIES']['OBJECT']['DISPLAY_VALUE']?>)</span>
							<? } ?>
						<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="site-button products-list__order">Заказать</a>
					</div>
				</div>
			</div>
		<? } ?>
	</div>
<? } ?>

<? if ($arResult["SEO"]["PAGE_NUM"] <= 1) { ?>
		<? if ($arResult['UF_TOP_DESCRIPTION']) { ?>
	      <? $this->SetViewTarget('top-text'); ?>
					<div class="products__top-text important-text">
				      <?=$arResult['~UF_TOP_DESCRIPTION']?>
					</div>
		    <? $this->EndViewTarget('top-text'); ?>
		<? } ?>
		<? if ($arResult['DESCRIPTION']) { ?>
		    <? $this->SetViewTarget('bottom-text'); ?>
					<div class="products__bottom-text">
				      <?=$arResult['DESCRIPTION']?>
					</div>
		    <? $this->EndViewTarget('bottom-text'); ?>
		<? } ?>
<? } ?>

<? if ($arResult["PAGE_BANNER"]) { ?>
	<? $this->SetViewTarget('banner'); ?>
		<div class="products-slide">
			<div class="products-slide__info">
				<? if ($arResult["PAGE_BANNER"]["PROPERTY_H1_VALUE"]) { ?>
					<h1 class="products-slide__title"><?=$arResult["PAGE_BANNER"]["~PROPERTY_H1_VALUE"]["TEXT"]?></h1>
				<? } else { ?>
					<h1 class="products-slide__title"><?=$arResult["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]?></h1>
				<? } ?>
				<div class="products-slide__icons">
					<div class="products-slide__icons-item">
						<div class="products-slide__icons-image">
							<svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M25.0053 24.6043C20.5015 24.6043 16.8374 28.293 16.8374 32.827C16.8374 37.361 20.5015 41.0497 25.0053 41.0497C29.5091 41.0497 33.1733 37.361 33.1733 32.827C33.1733 28.293 29.5091 24.6043 25.0053 24.6043ZM25.0053 38.702C21.7874 38.702 19.1695 36.0664 19.1695 32.827C19.1695 29.5876 21.7875 26.952 25.0053 26.952C28.2231 26.952 30.8412 29.5875 30.8412 32.827C30.8412 36.0665 28.2232 38.702 25.0053 38.702Z" fill="white"/>
								<path d="M25.0054 20.9161C18.4814 20.9161 13.1738 26.2593 13.1738 32.827C13.1738 39.3947 18.4814 44.7379 25.0054 44.7379C31.5293 44.7379 36.8369 39.3947 36.8369 32.827C36.8369 26.2593 31.5293 20.9161 25.0054 20.9161ZM25.0054 42.3901C19.7673 42.3901 15.5059 38.1002 15.5059 32.827C15.5059 27.5538 19.7675 23.2639 25.0054 23.2639C30.2433 23.2639 34.5048 27.5538 34.5048 32.827C34.5048 38.1002 30.2434 42.3901 25.0054 42.3901Z" fill="white"/>
								<path d="M56.834 13.9364H54.235C53.9669 13.082 53.6256 12.253 53.2145 11.4576L55.053 9.60682C55.5084 9.14836 55.5084 8.40517 55.053 7.94671L50.1064 2.96689C49.651 2.50843 48.9127 2.50843 48.4573 2.96689L46.6184 4.81795C45.8276 4.40384 45.0046 4.06029 44.1577 3.79069V1.17387C44.1577 0.525502 43.6357 0 42.9916 0H35.9953C35.3513 0 34.8293 0.525502 34.8293 1.17387V3.79043C33.9818 4.06016 33.1585 4.40371 32.3672 4.81795L30.5284 2.96689C30.073 2.50843 29.3347 2.50843 28.8793 2.96689L24.2233 7.65415H21.5548C20.9108 7.65415 20.3888 8.17966 20.3888 8.82802V11.9508C19.7967 12.0829 19.2104 12.2403 18.6337 12.4224L17.0837 9.71964C16.929 9.45004 16.6743 9.25323 16.3756 9.17275C16.077 9.09227 15.7587 9.1344 15.4907 9.29001L9.51445 12.7632C9.24665 12.919 9.05114 13.1754 8.9712 13.476C8.89113 13.7768 8.93311 14.0971 9.08768 14.3669L10.641 17.0752C10.1958 17.487 9.76749 17.9182 9.35846 18.3664L6.66812 16.8026C6.40019 16.6469 6.08212 16.6049 5.78322 16.6854C5.48458 16.766 5.22987 16.9627 5.07517 17.2323L1.62483 23.2486C1.30287 23.8101 1.49397 24.528 2.0516 24.8521L4.73637 26.4126C4.55563 26.9931 4.39912 27.5835 4.26787 28.1795H1.16605C0.522002 28.1795 0 28.705 0 29.3534V36.3005C0 36.9489 0.522002 37.4744 1.16605 37.4744H4.26787C4.39912 38.0704 4.55563 38.6608 4.73637 39.2413L2.0516 40.8016C1.7838 40.9574 1.58829 41.2138 1.50835 41.5144C1.42828 41.8152 1.47026 42.1355 1.62483 42.4053L5.07517 48.4216C5.39726 48.9831 6.11049 49.1754 6.668 48.8512L9.35833 47.2877C9.76723 47.7357 10.1957 48.167 10.6409 48.5788L9.08755 51.2872C8.93298 51.5568 8.89101 51.8772 8.97107 52.178C9.05114 52.4786 9.24652 52.7351 9.51432 52.8908L15.4906 56.3643C16.0482 56.6884 16.7615 56.4961 17.0834 55.9346L18.6334 53.2319C19.2102 53.4139 19.7964 53.5715 20.3885 53.7035V56.8261C20.3885 57.4745 20.9105 58 21.5546 58H28.4554C29.0994 58 29.6214 57.4745 29.6214 56.8261V53.7035C30.2135 53.5714 30.7999 53.4138 31.3766 53.2319L32.9265 55.9346C33.2488 56.4961 33.9619 56.6884 34.5194 56.3643L40.4956 52.8908C40.7634 52.7351 40.9589 52.4786 41.0389 52.178C41.119 51.8772 41.077 51.5568 40.9224 51.2872L39.3691 48.5788C39.8143 48.167 40.2427 47.7357 40.6516 47.2877L43.342 48.8512C43.8999 49.1755 44.613 48.983 44.9348 48.4216L48.3851 42.4053C48.5398 42.1357 48.5817 41.8152 48.5016 41.5144C48.4215 41.2138 48.2262 40.9574 47.9584 40.8016L45.2736 39.2413C45.4543 38.6608 45.6108 38.0704 45.7421 37.4744H48.8446C49.4886 37.4744 50.0106 36.9489 50.0106 36.3005V34.3825C50.0438 34.3558 50.076 34.3275 50.1064 34.297L55.053 29.3158C55.5083 28.8574 55.5083 28.1142 55.0529 27.6559L53.2147 25.8052C53.6254 25.0109 53.9665 24.1822 54.2348 23.3273H56.834C57.478 23.3273 58 22.8018 58 22.1534V15.1102C58 14.4619 57.4779 13.9364 56.834 13.9364ZM47.6785 35.1266H44.7845C44.2173 35.1266 43.7323 35.5375 43.6356 36.1C43.4434 37.2165 43.1514 38.3175 42.7676 39.3726C42.5728 39.9084 42.7887 40.5076 43.2795 40.7929L45.783 42.248L43.4986 46.2312L40.9898 44.773C40.4993 44.4881 39.8761 44.599 39.5125 45.0362C38.7933 45.9013 37.9928 46.7072 37.1331 47.4315C36.6987 47.7975 36.5885 48.4249 36.8717 48.9187L38.3202 51.4443L34.3635 53.7439L32.9181 51.2238C32.6346 50.7296 32.0393 50.5123 31.5073 50.7084C30.4592 51.0948 29.3654 51.3888 28.2566 51.5821C27.6978 51.6796 27.2896 52.1677 27.2896 52.7387V55.6521H22.7209V52.7387C22.7209 52.1677 22.3128 51.6795 21.7538 51.5821C20.6451 51.3888 19.5513 51.0948 18.5031 50.7084C17.9709 50.5123 17.3757 50.7297 17.0924 51.2238L15.647 53.7439L11.6903 51.4443L13.1388 48.9187C13.422 48.4249 13.3118 47.7975 12.8773 47.4315C12.0176 46.7071 11.2171 45.9013 10.498 45.0362C10.1343 44.5988 9.51122 44.4878 9.0207 44.773L6.51187 46.2312L4.22758 42.2481L6.73096 40.793C7.22174 40.5076 7.43772 39.9084 7.24286 39.3728C6.8591 38.3176 6.56707 37.2165 6.37506 36.1003C6.27815 35.5377 5.79333 35.1268 5.22611 35.1268H2.3321V30.5274H5.22611C5.79333 30.5274 6.27828 30.1165 6.37506 29.5539C6.56707 28.4375 6.8591 27.3366 7.24286 26.2814C7.43772 25.7457 7.22174 25.1464 6.73096 24.8611L4.22745 23.4061L6.51187 19.4229L9.0207 20.8811C9.51134 21.1662 10.1343 21.0551 10.498 20.6179C11.2175 19.7524 12.018 18.9465 12.8773 18.2225C13.3118 17.8565 13.422 17.2291 13.1388 16.7353L11.6903 14.2097L15.647 11.91L17.0924 14.4301C17.3757 14.9242 17.9707 15.1416 18.5031 14.9456C19.5514 14.5592 20.6452 14.2653 21.754 14.0718C22.3128 13.9744 22.7209 13.4862 22.7209 12.9152V10.0018H27.2896V12.9152C27.2896 13.4862 27.6977 13.9744 28.2565 14.0718C29.3654 14.2653 30.4592 14.5592 31.5073 14.9456C32.0393 15.1417 32.6348 14.9243 32.9181 14.4303L34.3635 11.9101L38.3202 14.2098L36.8717 16.7355C36.5885 17.2293 36.6988 17.8566 37.1331 18.2226C37.9926 18.9468 38.7932 19.7527 39.5125 20.618C39.8761 21.0553 40.4993 21.166 40.9898 20.8812L43.4987 19.423L45.783 23.4062L43.2795 24.8613C42.7887 25.1466 42.5728 25.7458 42.7676 26.2815C43.1514 27.3366 43.4434 28.4376 43.6356 29.5541C43.7323 30.1167 44.2173 30.5275 44.7845 30.5275H47.6785V35.1266ZM55.6679 20.9797H53.3539C52.8195 20.9797 52.3536 21.3454 52.2231 21.8671C51.9114 23.114 51.4214 24.3042 50.7665 25.4045C50.4917 25.8664 50.5641 26.4572 50.9423 26.8378L52.5796 28.486L50.0106 31.0729V29.3535C50.0106 28.7052 49.4886 28.1797 48.8446 28.1797H45.7426C45.6114 27.5836 45.4549 26.9933 45.2741 26.4127L47.9589 24.8523C48.2267 24.6965 48.4222 24.4401 48.5021 24.1395C48.5822 23.8388 48.5402 23.5184 48.3857 23.2488L44.9353 17.2324C44.6132 16.6709 43.9001 16.4788 43.3425 16.8028L40.6522 18.3665C40.2433 17.9183 39.8148 17.487 39.3696 17.0754L40.9229 14.367C41.0775 14.0974 41.1195 13.7769 41.0394 13.4762C40.9593 13.1755 40.764 12.9191 40.4962 12.7634L34.5199 9.28974C34.2521 9.13401 33.9339 9.09188 33.635 9.17249C33.3363 9.25309 33.0816 9.44978 32.9269 9.71938L31.3769 12.4222C30.8002 12.2401 30.2138 12.0826 29.6218 11.9505V8.82789C29.6218 8.17953 29.0998 7.65402 28.4558 7.65402H27.5215L29.704 5.45693L31.3411 7.10504C31.7189 7.48551 32.3049 7.55855 32.7636 7.28282C33.863 6.62154 35.046 6.12799 36.2797 5.81574C36.7981 5.68453 37.1615 5.21537 37.1615 4.67722V2.34774H41.8257V4.67722C41.8257 5.21524 42.189 5.68427 42.7072 5.81561C43.9404 6.12799 45.123 6.62167 46.2222 7.28282C46.6809 7.55868 47.2672 7.48551 47.6447 7.10504L49.2818 5.45693L52.5794 8.77663L50.9423 10.4247C50.5644 10.8052 50.4917 11.3958 50.7662 11.8575C51.4219 12.9606 51.9121 14.1511 52.223 15.3963C52.3533 15.9182 52.8194 16.2841 53.3539 16.2841H55.6679V20.9797Z" fill="white"/>
							</svg>
						</div>
						<div class="products-slide__icons-info">
							<div class="products-slide__icons-title">Полный цикл работ</div>
							<div class="products-slide__icons-desc">от замеров и производства до монтажа</div>
						</div>
					</div>
					<div class="products-slide__icons-item">
						<div class="products-slide__icons-image">
							<svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M44.3928 17.8753L45.2008 17.0732L45.8369 17.7047C46.083 17.9489 46.4054 18.071 46.728 18.071C47.0503 18.071 47.373 17.9489 47.619 17.7048C48.1111 17.2163 48.1111 16.4245 47.619 15.936L44.5061 12.8462C44.0139 12.3577 43.2161 12.3577 42.724 12.8461C42.2319 13.3345 42.2319 14.1263 42.724 14.6149L43.4189 15.3045L42.5096 16.2069C39.5714 13.88 36.0357 12.2674 32.1708 11.6352V9.50888H34.4512C35.7379 9.50888 36.7847 8.46985 36.7847 7.19276V4.31612C36.7845 3.03903 35.7376 2 34.4509 2H22.549C21.2622 2 20.2154 3.03903 20.2154 4.31612V7.19276C20.2154 8.46985 21.2622 9.50888 22.549 9.50888H24.8294V11.6353C14.1628 13.38 6 22.5951 6 33.6682C6 45.9821 16.0935 56 28.5001 56C40.9066 56 51 45.9821 51 33.6682C50.9999 27.5066 48.4725 21.9198 44.3928 17.8753ZM22.7356 4.50133H34.2643V7.00755H22.7356V4.50133ZM27.3495 9.50888H29.6506V11.3654C29.2694 11.3463 28.8859 11.3365 28.5001 11.3365C28.1142 11.3365 27.7307 11.3463 27.3495 11.3654V9.50888ZM28.5001 53.4987C17.4831 53.4987 8.52017 44.6027 8.52017 33.6682C8.52017 22.7337 17.4831 13.8378 28.5001 13.8378C39.5169 13.8378 48.4798 22.7337 48.4798 33.6682C48.4797 44.6027 39.5168 53.4987 28.5001 53.4987Z" fill="white"/>
								<path d="M43.0276 32.4176C42.3316 32.4176 41.7675 32.9775 41.7675 33.6682C41.7675 40.9292 35.8158 46.8364 28.5 46.8364C21.1843 46.8364 15.2326 40.9292 15.2326 33.6682C15.2326 26.9342 20.3522 21.3655 26.931 20.5926L25.5141 21.9988C25.022 22.4872 25.022 23.279 25.5141 23.7675C25.7602 24.0118 26.0827 24.1338 26.4051 24.1338C26.7275 24.1338 27.0502 24.0117 27.2962 23.7675L30.703 20.3863C30.9392 20.1517 31.072 19.8336 31.072 19.5019C31.072 19.1702 30.9392 18.8521 30.703 18.6175L27.3549 15.2947C26.8627 14.8063 26.0649 14.8063 25.5728 15.2948C25.0807 15.7832 25.0807 16.5751 25.5728 17.0634L26.6268 18.1095C18.8012 19.032 12.7124 25.6571 12.7124 33.6682C12.7124 42.3085 19.7947 49.3378 28.5 49.3378C37.2054 49.3378 44.2877 42.3085 44.2877 33.6682C44.2877 32.9775 43.7235 32.4176 43.0276 32.4176Z" fill="white"/>
								<path d="M28.5 29.3473C26.0995 29.3473 24.1466 31.2857 24.1466 33.6682C24.1466 36.0508 26.0995 37.9891 28.5 37.9891C30.9004 37.9891 32.8533 36.0508 32.8533 33.6682C32.8533 33.0787 32.7334 32.5164 32.5171 32.0039L40.4991 24.3048C40.9982 23.8234 41.0096 23.0316 40.5245 22.5362C40.0393 22.0408 39.2415 22.0296 38.7427 22.511L30.9062 30.0696C30.2165 29.6137 29.3891 29.3473 28.5 29.3473ZM28.5 35.4879C27.4891 35.4879 26.6668 34.6716 26.6668 33.6684C26.6668 32.665 27.4892 31.8487 28.5 31.8487C29.5109 31.8487 30.3332 32.665 30.3332 33.6684C30.3332 34.6716 29.5108 35.4879 28.5 35.4879Z" fill="white"/>
							</svg>
						</div>
						<div class="products-slide__icons-info">
							<div class="products-slide__icons-title">Короткие сроки</div>
							<div class="products-slide__icons-desc">– от 7 до 14 рабочих дней</div>
						</div>
					</div>
					<div class="products-slide__icons-item">
						<div class="products-slide__icons-image">
							<svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M46.3964 19.6674C45.4415 18.7444 44.5396 17.8725 44.0182 16.9774C43.4662 16.0297 43.1377 14.7795 42.7899 13.4558C42.1743 11.1132 41.5378 8.69082 39.5033 7.5216C37.8649 6.57997 35.928 6.87022 33.9871 7.35211L34.2372 4.86822C34.3108 4.13616 34.068 3.40358 33.5713 2.8582C33.0745 2.31271 32.3647 2 31.6243 2H26.3759C25.6354 2 24.9257 2.31271 24.4287 2.8582C23.9319 3.40368 23.6892 4.13627 23.7628 4.86822L24.0129 7.35211C22.0722 6.87022 20.1353 6.57997 18.4967 7.5216C16.4623 8.69092 15.8257 11.1132 15.2101 13.4558C14.8622 14.7795 14.5337 16.0297 13.9818 16.9774C13.4604 17.8726 12.5584 18.7444 11.6036 19.6675C9.91438 21.3002 8 23.1507 8 25.5894C8 28.0282 9.91448 29.8787 11.6036 31.5115C12.5585 32.4344 13.4604 33.3063 13.9818 34.2014C14.5338 35.1491 14.8623 36.3993 15.2101 37.723C15.5307 38.9435 15.8577 40.1853 16.3846 41.2607L11.9215 52.2839C11.8046 52.5726 11.8554 52.9014 12.0537 53.1421C12.2521 53.3828 12.5666 53.497 12.8745 53.4403L16.7657 52.7225L18.3364 55.5583C18.4878 55.8317 18.7767 55.9999 19.0882 55.9999C19.1055 55.9999 19.1228 55.9995 19.1401 55.9983C19.4711 55.9784 19.761 55.7709 19.8847 55.4654L24.6648 43.659C24.8325 43.6147 25.0002 43.5699 25.1674 43.5251C26.4752 43.1747 27.8277 42.8125 29.0001 42.8125C30.1724 42.8125 31.5248 43.1748 32.8327 43.5251C33 43.5699 33.1675 43.6146 33.3352 43.659L38.1154 55.4655C38.2392 55.771 38.529 55.9786 38.86 55.9984C38.8774 55.9995 38.8947 56 38.9119 56C39.2233 56 39.5123 55.8319 39.6637 55.5584L41.2344 52.7226L45.1256 53.4404C45.4336 53.4972 45.7481 53.3829 45.9464 53.1422C46.1447 52.9014 46.1953 52.5726 46.0786 52.284L41.6152 41.2608C42.1422 40.1854 42.4689 38.9436 42.7897 37.7231C43.1376 36.3994 43.4661 35.1492 44.018 34.2016C44.5394 33.3063 45.4414 32.4345 46.3962 31.5115C48.0856 29.8786 50 28.0282 50 25.5894C50 23.1507 48.0855 21.3001 46.3964 19.6674ZM25.7013 4.00253C25.876 3.81089 26.1155 3.70522 26.3757 3.70522H31.6241C31.8843 3.70522 32.1238 3.81079 32.2985 4.00253C32.4731 4.19417 32.5551 4.44149 32.5291 4.69873L32.215 7.81775C31.1052 8.10853 29.9886 8.36629 28.9999 8.36629C28.0113 8.36629 26.8947 8.10853 25.7848 7.81775L25.4707 4.69862C25.4449 4.44149 25.5267 4.19417 25.7013 4.00253ZM18.9676 53.1605L17.9707 51.3605C17.7923 51.0384 17.4264 50.8663 17.0619 50.9333L14.0971 51.4804L17.5552 42.9393C17.8318 43.2117 18.1427 43.4537 18.4967 43.6572C19.2818 44.1084 20.1354 44.277 21.0252 44.277C21.5484 44.277 22.0844 44.2182 22.6261 44.125L18.9676 53.1605ZM43.9029 51.4804L40.9381 50.9333C40.5739 50.8662 40.2078 51.0384 40.0294 51.3605L39.0325 53.1605L35.3743 44.1249C36.837 44.3765 38.2567 44.3737 39.5036 43.657C39.8576 43.4536 40.1685 43.2114 40.4451 42.9391L43.9029 51.4804ZM45.1995 30.2891C44.203 31.2523 43.1728 32.2483 42.5325 33.3475C41.8642 34.4949 41.4906 35.9171 41.1292 37.2922C40.5782 39.3884 40.058 41.3684 38.6438 42.1812C37.2974 42.9549 35.3458 42.4322 33.2796 41.8787C31.8637 41.4994 30.3998 41.1073 29.0001 41.1073C27.6003 41.1073 26.1364 41.4994 24.7205 41.8787C22.6543 42.4322 20.7028 42.9549 19.3563 42.1812C17.9421 41.3685 17.4217 39.3884 16.8709 37.2923C16.5095 35.9171 16.1359 34.495 15.4676 33.3475C14.8275 32.2484 13.7971 31.2523 12.8006 30.2893C11.2147 28.7563 9.71668 27.3082 9.71668 25.5895C9.71668 23.8708 11.2148 22.4228 12.8006 20.8898C13.7971 19.9266 14.8273 18.9307 15.4676 17.8315C16.1359 16.6841 16.5095 15.2618 16.8709 13.8867C17.4219 11.7905 17.9421 9.81058 19.3563 8.99773C19.8445 8.71719 20.4121 8.60708 21.0359 8.60708C22.1328 8.60708 23.4034 8.94742 24.7205 9.30022C26.1364 9.67948 27.6003 10.0716 29.0001 10.0716C30.3998 10.0716 31.8637 9.67948 33.2796 9.30032C35.3458 8.74693 37.2976 8.22423 38.6438 8.99784C40.058 9.81058 40.5784 11.7906 41.1292 13.8867C41.4906 15.2619 41.8642 16.6841 42.5325 17.8316C43.1727 18.9307 44.203 19.9267 45.1995 20.8897C46.7855 22.4227 48.2834 23.8708 48.2834 25.5895C48.2834 27.3081 46.7853 28.7561 45.1995 30.2891Z" fill="white" stroke="white" stroke-width="0.6"/>
								<path d="M38.6742 14.7481C38.3337 14.4479 37.8171 14.4614 37.4951 14.7812C37.1435 15.1305 37.1674 15.6988 37.5392 16.0268C40.2838 18.4479 41.9833 22.0137 41.8693 25.9632C41.6753 32.6829 36.1971 38.1499 29.4335 38.3718C21.998 38.6156 15.8958 32.5594 16.1319 25.1751C16.345 18.511 21.7561 13.0841 28.4624 12.8109C30.3073 12.7357 32.0712 13.0494 33.6792 13.675C33.9965 13.7985 34.3568 13.7286 34.5977 13.4893L34.6106 13.4764C35.0419 13.0481 34.8936 12.3173 34.3261 12.0954C32.5578 11.404 30.6222 11.0457 28.5976 11.1001C20.9446 11.3061 14.4851 17.8385 14.4094 25.4434C14.3275 33.6661 21.1751 40.3507 29.4947 40.0759C37.1217 39.8241 43.3125 33.6876 43.5821 26.1116C43.7428 21.5945 41.81 17.5122 38.6742 14.7481Z" fill="white" stroke="white" stroke-width="0.6"/>
								<path d="M29.0001 14.5052C22.8475 14.5052 17.842 19.4775 17.842 25.5894C17.842 26.0603 18.2264 26.442 18.7003 26.442C19.1744 26.442 19.5586 26.0602 19.5586 25.5894C19.5586 20.4179 23.794 16.2105 29 16.2105C29.4741 16.2105 29.8583 15.8287 29.8583 15.3579C29.8584 14.887 29.4741 14.5052 29.0001 14.5052Z" fill="white" stroke="white" stroke-width="0.6"/>
								<path d="M39.2996 24.7368C38.8255 24.7368 38.4413 25.1186 38.4413 25.5894C38.4413 30.7611 34.2059 34.9683 28.9999 34.9683C28.5258 34.9683 28.1416 35.3501 28.1416 35.8209C28.1416 36.2918 28.5259 36.6735 28.9999 36.6735C35.1525 36.6735 40.158 31.7012 40.158 25.5893C40.1579 25.1186 39.7736 24.7368 39.2996 24.7368Z" fill="white" stroke="white" stroke-width="0.6"/>
							</svg>
						</div>
						<div class="products-slide__icons-info">
							<div class="products-slide__icons-title">Гарантия от 1 года</div>
							<div class="products-slide__icons-desc">Постгарантийное обслуживание</div>
						</div>
					</div>
				</div>
			</div>
			<div class="products-slide__inner">
				<picture class="products-slide__image">
		      <? if ($arResult["PAGE_BANNER"]["IMAGE_768"]) { ?>
						<source srcset="<?=$arResult["PAGE_BANNER"]["IMAGE_768"]?>" media="(max-width: 767px)">
		      <? } ?>
		      <? if ($arResult["PAGE_BANNER"]["IMAGE_1200"]) { ?>
						<source srcset="<?=$arResult["PAGE_BANNER"]["IMAGE_1200"]?>" media="(max-width: 1199px)">
		      <? } ?>
		      <? if ($arResult["PAGE_BANNER"]["IMAGE_1920"]) { ?>
						<img src="<?=$arResult["PAGE_BANNER"]["IMAGE_1920"]?>" alt="">
		      <? } ?>
				</picture>
			</div>
		</div>
	<? $this->EndViewTarget('banner'); ?>
<? } ?>

<? if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
    <?=$arResult["NAV_STRING"]?>
<? } ?>