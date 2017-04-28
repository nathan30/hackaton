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

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});

setTimeout(($('.newsletter h2').animateCss('bounceInRight')),80);
