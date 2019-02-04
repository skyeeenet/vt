$('.foreign_practice').slick({
    dots: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: true,
    prevArrow: '<button class="prev"><i class="fas fa-angle-right"></i></button>',
    nextArrow: '<button class="next"><i class="fas fa-angle-left"></i></button>',
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});