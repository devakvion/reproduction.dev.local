$(document).ready(function () {
    var fotoramaDiv = $('.fotorama').fotorama();
    var fotorama = fotoramaDiv.data('fotorama');
    $('.video-play').click(function () {
        if (!$(this).hasClass('active')) {
            fotorama.playVideo();
            $(this).addClass('active');
        } else {
            fotorama.stopVideo();
            $(this).removeClass('active');
        }
    });
});