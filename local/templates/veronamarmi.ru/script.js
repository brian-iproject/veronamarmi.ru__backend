var ajax = new XMLHttpRequest();
ajax.open("GET", "/local/templates/veronamarmi.ru/images/icons.svg", true);
ajax.send();
ajax.onload = function(e) {
    var svgDiv = document.createElement("div");
    svgDiv.style.display = "none";
    svgDiv.innerHTML = ajax.responseText;
    document.body.insertBefore(svgDiv, document.body.childNodes[0]);
};
$(function(){
    $(document).on('click','[data-mobile-button]', function() {
        $('[data-mobile-block='+$(this).attr('data-mobile-button')+']').toggleClass('active');
        $('body').toggleClass('body--noscroll');
    });

    $("[name*=PHONE]").maskInput("+7 (999) 999-99-99");

    $('[data-form]').fancybox({
        baseClass: 'site-form-popup',
        beforeLoad: function() {
            var itemID = this.src[0].dataset.item,
                formCODE = this.src[0].dataset.form,
                reqString;

            reqString = formCODE+'.php';

            if (itemID)
                reqString += '?ID=' + itemID;
            this.type = 'ajax';
            this.src = '/local/templates/veronamarmi.ru/ajax/' + reqString;
        },
        afterShow: function() {
            $("[name*=PHONE]").maskInput("+7 (999) 999-99-99");
        }
    });

    $(document).on("submit", ".fancybox-inner form", function() {
        $.ajax({
            type	: "POST",
            cache	: false,
            url		: $(this)[0].action,
            data	: $(this).serializeArray(),
            success	: function(data) {
                $.fancybox.close();
                $.fancybox.open(data, {
                    type: 'ajax',
                    baseClass: 'site-form-popup',
                    afterShow: function() {
                        $("[name*=PHONE]").maskInput("+7 (999) 999-99-99");
                    }
                });
            }
        });
        return false;
    });

    $("[data-ex-href]").each(function(){
        var jthis = $(this),
            jhtml = jthis.html(),
            str_tag = "";
        jQuery.each(jthis[0].attributes, function(index, item) {
            str_tag += ' '+item.name.replace('data-ex-', '')+'="'+item.value+'"';
        });
        jthis.replaceWith('<a'+ str_tag + '>' + jhtml + '</a>');
    });

    $(window).scroll(function(){
        pxScrollTop();
    });
    pxScrollTop();

    $(".scrollTop").click(function() {
        $("html:not(:animated), body:not(:animated)").animate({ scrollTop: 0}, 500 );
        return false;
    });

    function init (ymaps) {
        window.GLOBAL_arMapObjects['MAP_CONTACTS'].behaviors.disable("drag");
    }
});



function pxScrollTop() {
    ($(window).scrollTop() > 300) ? $(".scrollTop").fadeIn(600) : $(".scrollTop").hide();
}