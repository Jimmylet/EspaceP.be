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

