jQuery(document).ready(function() {
	var write_letter = jQuery("form#write_letter");
	write_letter.find("input[type='file']").filestyle({
		image: "/img/skrepka.png",
		imagedel:"/img/delfile.png",
		imageheight : 20,
		imagewidth : 36,
		width : 156,
		multiple: false
	});
	
	jQuery("#write_letter_sbm").click(function() {
		write_letter.ajaxSubmit({
			success: function(responseText, statusText, xhr, $form) {				
				responseText = eval(responseText);
				if (typeof responseText == "object") {
					jQuery(".err").removeClass('visible');
					for (err in responseText["ERROR_FIELDS"]) {
						jQuery("input[name='"+responseText["ERROR_FIELDS"][err]+"']").parents('td').children('.err').addClass('visible');
					}
					if (responseText.SUCCESS == "Y") {
						LM_FancyResult({
							"body":responseText.SUCCESS_TEXT,
							open: true
						});
					}
				}
				//jQuery.fancybox(responseText);
				//LM_ReloadNice();
			}
		}); 
	});
});