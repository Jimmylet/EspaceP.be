$(document).ready(function() {
    var buttonFixed = $("body");
    $(window).scroll(function() {

        $.fn.scrollBottom = function() {
            return $(document).height() - this.scrollTop() - this.height();
        };

        var scrollTop = $(window).scrollTop();

        if (scrollTop >= 1000 ) {
            buttonFixed.addClass("button-fixed-manifeste");
        } else {
            buttonFixed.removeClass("button-fixed-manifeste");
        }

        if ($(window).scrollBottom() <= 500){
            buttonFixed.removeClass("button-fixed-manifeste");
        }


        });
    $('.manifeste-button__top').click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
    $('.manifeste-button__signez').click(function() {
        $('html, body').animate({scrollTop: $("#signez").offset().top
        }, 800);
        return false;
    });
});


(function($){

    var $window = $(window)

    $('#menu__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--menu');
    });

    $(window).on('resize', function () {
        if ($window.width() > 787 ){
            $('body').removeClass('with--menu');
        }
    })

})(jQuery);

(function($){
    $('body').removeClass('no-js');
})(jQuery);

(function($){
    $('.choose-plan__buy--normal').click(function (e) {
        e.preventDefault();
        $('body').toggleClass('payementnormal--clicked');
    });

    $('.choose-plan__buy--soutien').click(function (e) {
        e.preventDefault();
        $('body').toggleClass('payementsoutien--clicked');
    });

    $('.clickplan__exit').click(function (e) {
        e.preventDefault();
        $('body').removeClass('payementnormal--clicked');
        $('body').removeClass('payementsoutien--clicked');
    });
})(jQuery);
(function () {
    "use strict";

    console.log("Hello, number 4");

})();