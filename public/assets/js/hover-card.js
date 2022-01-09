$(document).ready(function () {
    $('.card').hover(function () {
       $(this).addClass('border-primary border-2');
    }, function () {
       $(this).removeClass('border-primary border-2');
    });
});

