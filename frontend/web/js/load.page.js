(function ($) {
    $('#spinner').fadeIn(950);
    setTimeout(function () {
        $('#spinner').fadeOut(800);
    }, 1700);
    setTimeout(function () {
        $('#page-preloader').addClass('hide');
    }, 1400);
    setTimeout(function(){
     $('#page-preloader').delay(600).fadeOut('slow');
     }, 3200);
})(jQuery);
