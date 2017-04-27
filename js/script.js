/***************** RESIZE NAVBAR *****************/
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('nav li a').addClass('shrink-text');
        $('.navbar-brand').addClass('shrink-brand');
    } else {
        $('nav li a').removeClass('shrink-text');
        $('.navbar-brand').removeClass('shrink-brand');
    }
});