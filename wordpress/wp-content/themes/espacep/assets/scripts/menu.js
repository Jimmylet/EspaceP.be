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
