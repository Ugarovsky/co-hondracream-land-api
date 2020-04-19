
$(document).ready(function () {

    var _currentDate = new Date();
    var count = 80; // sdfasfsf
    var _toDate = new Date(_currentDate.getFullYear(), _currentDate.getMonth(), _currentDate.getDate(), _currentDate.getHours(), _currentDate.getMinutes() + count, 1);

    $('.timer').countdown({
        until: _toDate,
        format: 'HMS',
        compact: true,
        layout: $('.timer').html()

    }).removeClass('hidden');

    $('.scroll_toform').click(function () {
        $("html, body").animate({scrollTop: $("#order_form").offset().top - 300}, 1000);
        return false;
    });

});
