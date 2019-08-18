jQuery(document).ready(function(){
	jQuery("#feedback input[type=file]").each(function(){
		var bmulti = false;
		if (jQuery(this).attr("multiple") == "multiple") {
			bmulti = true
		}
		jQuery(this).filestyle({
			multiple: bmulti,
			width : 200
		});
		
	});
	
	jQuery(".style-select").coreUISelect({
		jScrollPane : { }
	});
	
	jQuery("#feedback input[type=radio], #feedback input[type=checkbox]").pxFancy();
	
	jQuery("[name$=PHONE]").maskInput("+7 (999) 999-99-99");
});