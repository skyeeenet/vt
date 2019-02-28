//run_preloader();

$(document).ready(function () {
    slick_news_control();
    slick_news_content_control();
    slick_technologies_control();
    slick_thebest_control();
    slick_foreign_practice();
    slick_conf_control();
    slick_history_control();
    slick_enrhistory_control();
    slick_sertification_documents();
    burger_menu_control();
    dropdown_menu_eclipse_control();
    download_control();
    conf_dropdown_control();
    popper_control();
});

function run_preloader() {
    function checkCurrent() {
        var currentFile = unescape(window.location.href);
        if (currentFile.substring(currentFile.lastIndexOf('/') + 1, currentFile.length) == 'index.html') {
            return true;
        }
        return false;
    }

    var preloader_container = document.createElement('div');
    $(preloader_container).addClass('preloader');
    path = checkCurrent() ? 'images/preloader.gif' : '../images/preloader.gif';
    preloader_container.innerHTML = '<img src="' + path + '" alt="preloader">';

    document.body.insertAdjacentElement("afterbegin", preloader_container);
    $(preloader_container).css({
        'display': 'flex',
        'flex-direction': 'column',
        'align-items': 'center',
        'justify-content': 'center',
        'position': 'fixed',
        'left': '0',
        'top': '0',
        'right': '0',
        'bottom': '0',
        'background': '#18233e',
        'z-index': '100'
    });

    $(window).on('load', function () {
        var $preloader = $('div.preloader');
        $preloader.delay(2000).fadeOut('slow');
    }).delay(5000).queue(function () {
        preloader_container.parentNode.removeChild(preloader_container);
    });
}

function slick_news_control() {
    $('.slck').slick({
        dots: true,
        dotsClass: 'dotsSlck',
        arrows: false,
        infinite: false,
        autoplay: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });
}
function slick_news_content_control() {
    var backgrounds_cards = [
        "images/1.jpg",
        "images/1.jpg",
        "images/1.jpg"
    ];
    var cards = $('.card');
    for (var i = 0; i < cards.length; i++) {
        $(cards[i]).css({ "background": "url(" + backgrounds_cards[i] + ")", "background-size": "cover" });
    }
}
function slick_technologies_control() {
    $('.technologies').slick({
        slidesToShow: 4,
        arrows: false,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}
function burger_menu_control() {
    var btn = $('#btn-show');
    var dropdown = $('#dropdown-menu');
    var flag = true;

    btn.click(function () {

        if (flag) {
            dropdown.slideDown();

        } else {

            dropdown.slideUp();
        }
        flag = !flag;
    });

    $('.menu-btn').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('menu-btn-active');
    });
}
function dropdown_menu_eclipse_control() {
    var check = false;

    /* 2 */
    $(function () {
        $('#dropdown-menu-clickable2').click(function (event) {
            event.preventDefault();
            check = true;
            //hide main menu
            $('#dropdown-menu').removeClass('fadeInDown');
            $('#dropdown-menu').addClass('fadeOutUp');
            //show sub menu
            $('#dropdown-menu-eclipse2').removeClass('fadeOutDown');
            $('#dropdown-menu-eclipse2').addClass('fadeInUp');
            $('#dropdown-menu-eclipse2').css('z-index', '10');
        });
    });
    $(function () {
        $('.navbar').hover(null,
            function (event) {
                event.preventDefault();
                if (check === true) {
                    //show main menu
                    $('#dropdown-menu').removeClass('fadeOutUp');
                    $('#dropdown-menu').addClass('fadeInDown');
                    //hide sub menu
                    $('#dropdown-menu-eclipse2').removeClass('fadeInUp');
                    $('#dropdown-menu-eclipse2').addClass('fadeOutDown');
                    $('#dropdown-menu-eclipse2').css('z-index', '-10');
                };
            });
    });

    /* 3 */
    $(function () {
        $('#dropdown-menu-clickable3').click(function (event) {
            event.preventDefault();
            check = true;
            //hide main menu
            $('#dropdown-menu').removeClass('fadeInDown');
            $('#dropdown-menu').addClass('fadeOutUp');
            //show sub menu
            $('#dropdown-menu-eclipse3').removeClass('fadeOutDown');
            $('#dropdown-menu-eclipse3').addClass('fadeInUp');
            $('#dropdown-menu-eclipse3').css('z-index', '10');
        });
    });
    $(function () {
        $('.navbar').hover(null,
            function (event) {
                event.preventDefault();
                if (check === true) {
                    //show main menu
                    $('#dropdown-menu').removeClass('fadeOutUp');
                    $('#dropdown-menu').addClass('fadeInDown');
                    //hide sub menu
                    $('#dropdown-menu-eclipse3').removeClass('fadeInUp');
                    $('#dropdown-menu-eclipse3').addClass('fadeOutDown');
                    $('#dropdown-menu-eclipse3').css('z-index', '-10');
                };
            });
    });

    /* 4 */
    $(function () {
        $('#dropdown-menu-clickable4').click(function (event) {
            event.preventDefault();
            check = true;
            //hide main menu
            $('#dropdown-menu').removeClass('fadeInDown');
            $('#dropdown-menu').addClass('fadeOutUp');
            //show sub menu
            $('#dropdown-menu-eclipse4').removeClass('fadeOutDown');
            $('#dropdown-menu-eclipse4').addClass('fadeInUp');
            $('#dropdown-menu-eclipse4').css('z-index', '10');
        });
    });
    $(function () {
        $('.navbar').hover(null,
            function (event) {
                event.preventDefault();
                if (check === true) {
                    //show main menu
                    $('#dropdown-menu').removeClass('fadeOutUp');
                    $('#dropdown-menu').addClass('fadeInDown');
                    //hide sub menu
                    $('#dropdown-menu-eclipse4').removeClass('fadeInUp');
                    $('#dropdown-menu-eclipse4').addClass('fadeOutDown');
                    $('#dropdown-menu-eclipse4').css('z-index', '-10');
                };
            });
    });

    /* 5 */
    $(function () {
        $('#dropdown-menu-clickable5').click(function (event) {
            event.preventDefault();
            check = true;
            //hide main menu
            $('#dropdown-menu').removeClass('fadeInDown');
            $('#dropdown-menu').addClass('fadeOutUp');
            //show sub menu
            $('#dropdown-menu-eclipse5').removeClass('fadeOutDown');
            $('#dropdown-menu-eclipse5').addClass('fadeInUp');
            $('#dropdown-menu-eclipse5').css('z-index', '10');
        });
    });
    $(function () {
        $('.navbar').hover(null,
            function (event) {
                event.preventDefault();
                if (check === true) {
                    //show main menu
                    $('#dropdown-menu').removeClass('fadeOutUp');
                    $('#dropdown-menu').addClass('fadeInDown');
                    //hide sub menu
                    $('#dropdown-menu-eclipse5').removeClass('fadeInUp');
                    $('#dropdown-menu-eclipse5').addClass('fadeOutDown');
                    $('#dropdown-menu-eclipse5').css('z-index', '-10');
                };
            });
    });
}
function slick_thebest_control() {
    $('#thebest').slick({
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    centerMode: false
                }
            }
        ]
    });
}
function slick_foreign_practice() {
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
}
function download_control() {
    $(function () {
        $('.plane-link').click(function (event) {
            event.preventDefault();
            $('.downloadBlock').css('display', 'flex');
            $('.downloadBlock').addClass('fadeInLeft').delay(1000).queue(function () {
                $(this).removeClass('fadeInLeft').delay(15000).queue(function () {
                    $(this).addClass('fadeOutRight').delay(600).queue(function () {
                        $(this).css('display', 'none');
                        $(this).removeClass('fadeOutRight');
                    }).dequeue();
                }).dequeue();
            });
        });
    });
}
function slick_conf_control() {
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
}
function conf_dropdown_control() {
    function controlDropdown(dropdownElement, flag, rotating) {
        if (!flag) {
            flag = true;
            $(dropdownElement).slideDown(600);
            $(rotating).css({ 'transform': 'rotate(180deg)' });
        } else {
            flag = false;
            $(dropdownElement).slideUp(600);
            $(rotating).css({ 'transform': 'rotate(0deg)' });
        }
        return flag;
    }

    var flag1 = false,
        flag2 = false;

    if ($(window).width() <= '992' ? true : false) {
        $('#conf_dropdown_button1').click(function (event) {
            event.preventDefault();
            rotating = $('#conf_dropdown_button1>a>img');
            flag1 = controlDropdown('#drpdn_el_1', flag1, rotating);
        });
    }
    else {
        $('#conf_dropdown_button1>a').click(function (event) {
            event.preventDefault();
            rotating = $('#conf_dropdown_button1>a>img');
            flag1 = controlDropdown('#drpdn_el_1', flag1, rotating);
        });
    };

    if ($(window).width() <= '992' ? true : false) {
        $('#conf_dropdown_button2').click(function (event) {
            event.preventDefault();
            rotating = $('#conf_dropdown_button2>a>img');
            flag2 = controlDropdown('#drpdn_el_2', flag2, rotating);
        });
    }
    else {
        $('#conf_dropdown_button2>a').click(function (event) {
            event.preventDefault();
            rotating = $('#conf_dropdown_button2>a>img');
            flag2 = controlDropdown('#drpdn_el_2', flag2, rotating);
        });
    };
}
function popper_control() {
    var email = $('#email_click'),
        phone = $('#phone_click'),
        facebook = $('#facebook_click');

    var email_popup = $('#email_popup'),
        phone_popup = $('#phone_popup'),
        facebook_popup = $('#facebook_popup');

    email_popup.hide();
    phone_popup.hide();
    facebook_popup.hide();

    $(document).on('click', function (event) {
        var target = $(event.target);
        if (target.is(email) || target.is(email_popup)) {
            event.preventDefault();
            email_popup.show();
            var popper = new Popper(email, email_popup, {
                placement: 'bottom',
                modifiers: {
                    offset: {
                        enabled: true,
                        offset: '0,15'
                    }
                }
            });
        } else {
            email_popup.hide();
        };
        if (target.is(phone) || target.is(phone_popup)) {
            event.preventDefault();
            phone_popup.show();
            var popper = new Popper(phone, phone_popup, {
                placement: 'bottom',
                modifiers: {
                    offset: {
                        enabled: true,
                        offset: '0,15'
                    }
                }
            });
        } else {
            phone_popup.hide();
        };
        if (target.is(facebook) || target.is(facebook_popup)) {
            event.preventDefault();
            facebook_popup.show();
            var popper = new Popper(facebook, facebook_popup, {
                placement: 'bottom',
                modifiers: {
                    offset: {
                        enabled: true,
                        offset: '0,15'
                    }
                }
            });
        } else {
            facebook_popup.hide();
        };
    });
}
function slick_history_control() {
    $('.history_slick').slick({
        arrows: false,
        autoplay: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
}
function slick_enrhistory_control() {
    $('.enr_history').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
}
function slick_sertification_documents() {
    $('.documents-slick').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 1500,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
}