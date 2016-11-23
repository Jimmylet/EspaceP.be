jQuery(document).ready(function($) {
    var MqL = 900;

    var faqsSections = $('.guideclient__section__group'),
        faqTrigger = $('.guideclient__section__trigger'),
        faqsContainer = $('.guideclient__section'),
        faqsCategoriesContainer = $('.guideclient__categories'),
        faqsCategories = faqsCategoriesContainer.find('.guideclient__categories__link'),
        closeFaqsContainer = $('.cd-close-panel');

    // Selectionner une section
    faqsCategories.on('click', function(event){
        event.preventDefault();
        var selectedHref = $(this).attr('href'),
            target= $(selectedHref);
            $('body,html').animate({ 'scrollTop': target.offset().top - 19}, 200);
    });

    //close faq lateral panel - mobile only
    $('body').bind('click touchstart', function(event){
        if( $(event.target).is('body.cd-overlay') || $(event.target).is('.cd-close-panel')) {
            closePanel(event);
        }
    });
    faqsContainer.on('swiperight', function(event){
        closePanel(event);
    });

    //show faq content clicking on faqTrigger
    faqTrigger.on('click', function(event){
        event.preventDefault();
        $(this).next('.guideclient__section__content').slideToggle(200).end().parent('li').toggleClass('content-visible');

    });

    //update category sidebar while scrolling
    $(window).on('scroll', function(){
        if ( $(window).width() > MqL ) {
            (!window.requestAnimationFrame) ? updateCategory() : window.requestAnimationFrame(updateCategory);
        }
    });

    $(window).on('resize', function(){
        if($(window).width() <= MqL) {
            faqsCategoriesContainer.removeClass('is-fixed').css({
                '-moz-transform': 'translateY(0)',
                '-webkit-transform': 'translateY(0)',
                '-ms-transform': 'translateY(0)',
                '-o-transform': 'translateY(0)',
                'transform': 'translateY(0)',
            });
        }
        if( faqsCategoriesContainer.hasClass('is-fixed') ) {
            faqsCategoriesContainer.css({
                'left': faqsContainer.offset().left,
            });
        }
    });

    function closePanel(e) {
        e.preventDefault();
        faqsContainer.removeClass('slide-in').find('li').show();
        closeFaqsContainer.removeClass('move-left');
        $('body').removeClass('cd-overlay');
    }

    function updateCategory(){
        updateCategoryPosition();
        updateSelectedCategory();
    }

    function updateCategoryPosition() {
        var top = $('.guideclient__wrap').offset().top,
            height = jQuery('.guideclient__wrap').height() - jQuery('.guideclient__categories').height(),
            margin = 20;
        if( top - margin <= $(window).scrollTop() && top - margin + height > $(window).scrollTop() ) {
            var leftValue = faqsCategoriesContainer.offset().left,
                widthValue = faqsCategoriesContainer.width();
            faqsCategoriesContainer.addClass('is-fixed').css({
                'left': leftValue,
                'top': margin,
                '-moz-transform': 'translateZ(0)',
                '-webkit-transform': 'translateZ(0)',
                '-ms-transform': 'translateZ(0)',
                '-o-transform': 'translateZ(0)',
                'transform': 'translateZ(0)',
            });
        } else if( top - margin + height <= $(window).scrollTop()) {
            var delta = top - margin + height - $(window).scrollTop();
            faqsCategoriesContainer.css({
                '-moz-transform': 'translateZ(0) translateY('+delta+'px)',
                '-webkit-transform': 'translateZ(0) translateY('+delta+'px)',
                '-ms-transform': 'translateZ(0) translateY('+delta+'px)',
                '-o-transform': 'translateZ(0) translateY('+delta+'px)',
                'transform': 'translateZ(0) translateY('+delta+'px)',
            });
        } else {
            faqsCategoriesContainer.removeClass('is-fixed').css({
                'left': 10,
                'top': 0,
            });
        }
    }

    function updateSelectedCategory() {
        faqsSections.each(function(){
            var actual = $(this),
                margin = parseInt($('.guideclient__section__title').eq(1).css('marginTop').replace('px', '')),
                activeCategory = $('.guideclient__categories .guideclient__categories__link[href="#'+actual.attr('id')+'"]'),
                topSection = (activeCategory.parent('.guideclient__categories__item').is(':first-child')) ? 0 : Math.round(actual.offset().top);

            if ( ( topSection - 20 <= $(window).scrollTop() ) && ( Math.round(actual.offset().top) + actual.height() + margin - 20 > $(window).scrollTop() ) ) {
                activeCategory.addClass('selected');
            }else {
                activeCategory.removeClass('selected');
            }
        });
    }
});
