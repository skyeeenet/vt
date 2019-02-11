$(window).on('load', function () {
    var $preloader = $('.preloader'),
        $animation = $preloader.find('.preloaderAnimation');
    $animation.fadeOut();
    $preloader.delay(2000).fadeOut('slow');
});