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