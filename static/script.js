/*var ajax = new XMLHttpRequest();
ajax.open("GET", "images/icons.svg", true);
ajax.send();
ajax.onload = function(e) {
    var svgDiv = document.createElement("div");
    svgDiv.style.display = "none";
    svgDiv.innerHTML = ajax.responseText;
    document.body.insertBefore(svgDiv, document.body.childNodes[0]);
};
*/
$(function(){
    $(document).on('click','[data-mobile-button]', function() {
        $('[data-mobile-block='+$(this).attr('data-mobile-button')+']').toggleClass($(this).attr('data-mobile-class'));
        $('body').toggleClass('body--noscroll');

      //  alert(1111);
    });
});