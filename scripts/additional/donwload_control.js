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