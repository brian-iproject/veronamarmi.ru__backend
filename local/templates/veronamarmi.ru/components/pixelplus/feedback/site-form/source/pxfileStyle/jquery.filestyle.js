/*
 * Style File - jQuery plugin for styling file input elements
 *  
 * Copyright (c) 2012-2014 PixelPlus
 *
 */

(function($) {
    
    $.fn.filestyle = function(options) {
                
        /* TODO: This should not override CSS. */
        var settings = {
            width : 250,
			buttonadd: {
				image: "/js/pxfileStyle/images/addfile.png",
				width: 15,
				height: 16
			},
			buttondel: {
				image: "/js/pxfileStyle/images/delfile.png",
				width: 10,
				height: 13
			},
			label: {
				length: 25
			}
		};
                
        if(options) {
            $.extend(settings, options);
        };
		
		if (settings.label.length < 4) {
			settings.label.length = 4;
		}
                        
        return this.each(function() {            
            var jthis = jQuery(this);
			var myclone = jthis.clone();
			var wrapper = $("<div>")
				.addClass("filestyle_wr")
				.addClass(jthis.attr("class"));
				
			var fileinput = $("<span>")
				.addClass("fileinput")
				.css({
				"width": settings.buttonadd.width + "px",
				"height": settings.buttonadd.height + "px",
				"background-image": "url(" + settings.buttonadd.image + ")"
			});
                            
			var filename = $('<span>')
				.addClass("filename")
				.addClass("addmessage")
				.css({
				"width": settings.width + "px",
				"height": settings.buttonadd.height + "px",
				"line-height": settings.buttonadd.height + "px"
			}).html(jthis.attr("data-message"));
							 
							 
			var delfile = $('<span>')
				.addClass("delfile")
				.css({
				"width": settings.buttondel.width + "px",
				"height": settings.buttondel.height + "px",
				"background-image": "url(" + settings.buttondel.image + ")"
			});
			
			var delfile_wr = $('<span>')
				.addClass("delfile_wr")
				.css({
				"width": settings.buttondel.width + "px",
				"height": settings.buttondel.height + "px"
			});
			
			jthis.wrap(wrapper);
            jthis.before(filename);
			jthis.after(delfile);
			delfile.wrap(delfile_wr);
            jthis.wrap(fileinput);

            jthis.css({
				"position": "relative",
				"height": settings.buttonadd.height + "px",
				"width": settings.width + "px",
				"display": "inline",
				"cursor": "pointer",
				"opacity": "0.0",
				"filter": "alpha(opacity=0)"
			});

            /*if (jQuery.support.boxModel) {
                if (/Win/.test(navigator.platform)) {
                    jthis.css("margin-left", "-150px");                    
                } else {
                    jthis.css("margin-left", "-168px");                    
                };
            } else {
                jthis.css("margin-left", settings.buttonadd.width - settings.width + "px");                
            };*/
			
			jthis.css("margin-left", settings.buttonadd.width - settings.width + "px");
			
			filename.click(function(){
			  jQuery(this).parent().find(jthis).trigger('click');
			});

			delfile.click(function(){
				if (typeof settings.multiple != "undefined" && settings.multiple === true) {
					var parent = jQuery(this).parent().parent();
					parent.remove();
				} else {
					var parent = jQuery(this).closest(".filestyle_wr");
					parent.replaceWith(myclone);
					myclone.filestyle(options);
					/*var parent = jQuery(this).parent();
					console.log(parent);
					parent.html("");
					parent.append(myclone);
					myclone.filestyle(options);*/
				}
			});
			
            jthis.bind("change", function() {
				var fname = jthis.val();
				var arFname = fname.split('\\');
				var fname = arFname[arFname.length-1];				
				if (fname.length > settings.label.length) {
					fname = "..."+fname.substr(-(settings.label.length-3));					
				}
				
                filename.html(fname).removeClass("addmessage");
				delfile.css({"display": "inline-block"});
				if (typeof settings.multiple != "undefined" && settings.multiple === true) {
					
					
					var parent = jQuery(this).parents(".fileinput:eq(0)").parent();
					if (parent.parent().find("input[type=file]:last").val() != "") {
						//var parentclone = parent.clone(true);
						//parentclone.insertBefore(parent);	 
						var parentclone = parent.clone(); 
						parentclone.html("");
						parentclone.append(myclone);
						parent.after(parentclone);
						myclone.filestyle(options);
					}
				}
            });
        });
    };
})(jQuery);