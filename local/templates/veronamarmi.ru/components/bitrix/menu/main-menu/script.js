$(function(){
    $(document).on('click','.js-main-menu-burger__button', function() {
        $('.main-menu').toggleClass('main-menu--mobile-active');
        $('body').toggleClass('body--noscroll');
    });

    $(document).on('click','.js-main-menu__dropdown', function() {
        $(this).siblings('.main-menu__list-wrapper').toggle();
        $(this).toggleClass('active');
    });
});