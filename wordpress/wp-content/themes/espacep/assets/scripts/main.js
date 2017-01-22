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
