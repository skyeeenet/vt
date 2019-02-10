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