$(document).ready(function () {

    var flag1 = false;
    var flag2 = false;
    $('#conf_dropdown_button1').click(function () {
        if (!flag1) {
            $('#drpdn_el_1').addClass('dropdown_elements_active');
            flag1 = true;
            $('#drpdn_el_1').removeClass('fadeOutRight');
            $('#drpdn_el_1').addClass('fadeInLeft');
        } else {
            $('#drpdn_el_1').removeClass('dropdown_elements_active');
            flag1 = false;
            $('#drpdn_el_1').removeClass('fadeInLeft');
            $('#drpdn_el_1').addClass('fadeOutRight');
        }
    });
    $('#conf_dropdown_button2').click(function () {
        if (!flag2) {
            $('#drpdn_el_2').addClass('dropdown_elements_active');
            flag2 = true;
            $('#drpdn_el_2').removeClass('fadeOutRight');
            $('#drpdn_el_2').addClass('fadeInLeft');
        } else {
            $('#drpdn_el_2').removeClass('dropdown_elements_active');
            flag2 = false;
            $('#drpdn_el_2').removeClass('fadeInLeft');
            $('#drpdn_el_2').addClass('fadeOutRight');
        }
    });
});