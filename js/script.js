$( document ).ready(function() {
    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
        }
    });
    $('.contentEnter h1').animateCss('bounceInUp');
    $('.contentEnter h2').animateCss('bounceInRight');
    $('.contentEnter hr').animateCss('bounceInLeft');
    $('.contentEnter a').fadeTo("slow",1);
});


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

function displayPopup(successOrError,message){
    if(successOrError === 'success'){
        $('#newsletterSuccess').fadeIn( "slow").delay(4000).fadeOut();
    }else if(successOrError === 'exist'){
        $('#newsletterExist').fadeIn( "slow").delay(4000).fadeOut();
    }else if(successOrError === 'error'){
        $('#newsletterError').fadeIn( "slow").delay(4000).fadeOut();
    }
}
