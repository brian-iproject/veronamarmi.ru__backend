jQuery(document).ready(function($) { // вся магия после загрузки страницы
    //main
    $('ul.hover_block li').hover(function() {
        $(this).find('img').animate({
            top: '165px'
        }, {
            queue: false,
            duration: 500
        });
    }, function() {
        $(this).find('img').animate({
            top: '0px'
        }, {
            queue: false,
            duration: 500
        });
    });

    $('span.cover').on('click', function() {
        $("a.fancybox-close").click();
    });

    $(".samples9 a").fancybox({
        maxWidth: 746,
    });

    // $("input.field_phone").mask('+7 (000) 000-00-00');

    $("input.radio-contact1").on('click', function() {
        $("input.radio-contact2").removeAttr('checked');
        $("input.field_phone").attr("disabled", true);
        $("input.field_phone").parents('.input').css("background", "#e9e7e2");
        $("input.field_email").removeAttr("disabled");
        $("input.field_email").parents('.input').css("background", "#fff");
    });

    $("input.radio-contact2").on('click', function() {
        $("input.radio-contact1").removeAttr('checked');
        $("input.field_email").attr("disabled", true);
        $("input.field_email").parents('.input').css("background", "#e9e7e2");
        $("input.field_phone").removeAttr("disabled");
        $("input.field_phone").parents('.input').css("background", "#fff");
    });

    $('ul.tab-menu2 li').on('click', function() {
        var $id = $(this).attr('id');
        var $lengthId = $id.length;
        var $id = $id.slice(0, $lengthId - 2);
        var $height = $('ul.samples2#' + $id).height();
        var $fancyboxHeight = $('.fancybox-overlay').height();
        $('.fancybox-inner').css({
            "height": $height + 91,
            "max-height": $fancyboxHeight - 100
        });
    });

    $('ul.checks_forms.hover_block a, ul.checks_forms.hover_block a').on('click', function() {
        $(this).parent('li').children('div').click();
        $(this).parent('li').children('div').children('input').attr('checked', true);
    });

    $('ul.checks_forms_2.hover_block a, ul.checks_forms.hover_block a').on('click', function() {
        $(this).parent('li').children('div').click();
        $(this).parent('li').children('div').children('input').attr('checked', true);
    });

    $('#stones ul.samples2 li').on('click', function() {
        var $thisInputVal = $(this).children().children('input').val();
        var $thisInputText = $(this).children().children('.text').text();
        var $thisInputHtml = $(this).children('.goodField').html();
        $(this).children('.goodField').html($thisInputHtml + '<input type="hidden" name="fld[goodField2]" value="(' + $thisInputText + ')">');
    });

    /////
    $("#ajax_form").submit(function(event) { // перехватываем все при событии отправки
        event.preventDefault();
        var form = $(this); // запишем форму, чтобы потом не было проблем с this
        var error = false; // предварительно ошибок нет
        if (!error) { // если ошибки нет
            var data = form.serializeArray(); // подготавливаем данные
            console.log(data);
            $.ajax({ // инициализируем ajax запрос
                type: 'POST', // отправляем в POST формате, можно GET
                url: '/calculators/mail.php', // путь до обработчика, у нас он лежит в той же папке
                data: data, // данные для отправк
                success: function(result) { // событие после удачного обращения к серверу и получения ответа
                    if (result != "") {
                        $('.ajax_errors').html(result).css("display", "block");
                        $('html, body').animate({
                            scrollTop: $(".ajax_errors").offset().top - 200
                        }, 2000);
                    } else {
                        $('.ajax_errors').css("display", "none");
                        $('.submit_ok').html("<div>Cпасибо! Ваше сообщение отправлено.</div>").css('display', 'block');
                    }
                }
            });
        }
    });

    var getCalcSizes = function (id) {
        $("#calcSizesLoad").show();
        $.ajax({
            type: "POST",
            url: "/calculators/get_calcform_stol.php",
            data: 'FORM_ID=' + id,
            success: function(result) {
                $('#calcSizes .ajax_load').html(result);
                $('.calcHidden').css('display', 'block');
                $("#calcSizesLoad").hide();
            }
        });
    }

    var getCalcSizesPodokon = function (id) {
        $("#calcSizesLoad").show();
        $.ajax({
            type: "POST",
            url: "/calculators/get_calcform_pod.php",
            data: 'FORM_ID=' + id,
            success: function(result) {
                $('#calcSizes .ajax_load').html(result);
                $('.calcHidden').css('display', 'block');
                $("#calcSizesLoad").hide();
            }
        });
    }

    var enable_cb = function() {
        if (this.checked) {
            $("input.field_email").removeAttr("disabled");
            $("input.field_email").parents('.input').css("background", "#fff");
        } else {
            $("input.field_phone").attr("disabled", true);
            $("input.field_phone").parents('.input').css("background", "#e9e7e2");
        }
    }

    window.getCalcSizes = getCalcSizes;
    window.getCalcSizesPodokon = getCalcSizesPodokon;
    window.enable_cb = enable_cb;
});
/////
function setcookie(name, value, expires, path, domain, secure) { // Send a cookie
    expires instanceof Date ? expires = expires.toGMTString() : typeof(expires) == 'number' && (expires = (new Date(+(new Date) + expires * 1e3)).toGMTString());
    var r = [name + "=" + escape(value)],
        s, i;
    for (i in s = {
            expires: expires,
            path: path,
            domain: domain
        }) {
        s[i] && r.push(i + "=" + s[i]);
    }
    return secure && r.push("secure"), document.cookie = r.join(";"), true;
}