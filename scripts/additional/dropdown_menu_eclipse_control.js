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
            };
        });
});