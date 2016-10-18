$(document).ready(function() {
    var buttonFixed = $("body");
    $(window).scroll(function() {

        $.fn.scrollBottom = function() {
            return $(document).height() - this.scrollTop() - this.height();
        };

        var scrollTop = $(window).scrollTop();

        if (scrollTop >= 400 ) {
            buttonFixed.addClass("button-fixed-profile");
        } else {
            buttonFixed.removeClass("button-fixed-profile");
        }

        if ($(window).scrollBottom() <= 400){
            buttonFixed.addClass("button-fixed-profile-out");
        } else {
            buttonFixed.removeClass("button-fixed-profile-out");
        }


    });
    $('.button-scroll__top').click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});
