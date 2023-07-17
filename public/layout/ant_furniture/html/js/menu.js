if ($(window).width() > 1100) {


    var menu_limit = "7";
    if (isNaN(menu_limit)) {
        menu_limit = 12;
    } else {
        menu_limit = 6;
    }
} else {


    var menu_limit = "7";
    if (isNaN(menu_limit)) {
        menu_limit = 9;
    } else {
        menu_limit = 6;
    }
}
var sidebar_length = $('.menu-item-count').length;
if (sidebar_length > (menu_limit + 1)) {
    $('.nav-cate:not(.site-nav-mobile) > ul').each(function () {
        $('.menu-item-count', this).eq(menu_limit).nextAll().hide().addClass('toggleable');
        $(this).append('<li class="more"><h3><a><label>Xem thêm ... </label></a></h3></li>');
    });
    $('.nav-cate > ul').on('click', '.more', function () {
        if ($(this).hasClass('less')) {
            $(this).html('<h3><a><label>Xem thêm ...</label></a></h3>').removeClass('less');
        } else {
            $(this).html('<h3><a><label>Thu gọn ... </label></a></h3>').addClass('less');
            ;
        }
        $(this).siblings('li.toggleable').slideToggle({
            complete: function () {
                var divHeight = $('#menu2017').height();
                $('.subcate.gd-menu').css('min-height', divHeight + 'px');
            }
        });
    });
}