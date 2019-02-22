$(document).ready(function () {
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

});