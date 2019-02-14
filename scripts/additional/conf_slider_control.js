$(document).ready(function () {
    $('.conf_slider').slick({
        dots: false,
        arrows: false,
        infinite: false,
        autoplay: true,
        speed: 1500,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});