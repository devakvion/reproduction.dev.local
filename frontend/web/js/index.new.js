$(document).ready(function () {
    /***********************************************
     Fotorama
     ***********************************************/
    pathPrepareCssAll($(".svg-slider-category"));
    var foto = $('.fotorama');
    foto.on('fotorama:ready', function (e, fotorama) {

        var womenSvg = $("#women-svg");
        startAnimationSvgHeader(womenSvg);
    });
    foto.on('fotorama:load', function (e, fotorama) {


        pathPrepareCssAll($(".svg-slider-category"));
    });
    foto.on('fotorama:show', function (e, fotorama) {
        if (fotorama.activeFrame.id == 'women-block') {
            var womenSvg = $("#women-svg");
            startAnimationSvgHeader(womenSvg);

        }
        if (fotorama.activeFrame.id == 'men-block') {
            var menSvg = $("#men-svg");
            startAnimationSvgHeader(menSvg);

        }
        if (fotorama.activeFrame.id == 'oldHealth-block') {
            var oldSvg = $("#old-svg");
            startAnimationSvgHeader(oldSvg);
        }
        if (fotorama.activeFrame.id == 'couples-block') {
            var couplesSvg = $("#couples-svg");
            startAnimationSvgHeader(couplesSvg);
        }
        if (fotorama.activeFrame.id == 'specialist-block') {
            var articleSvg = $("#article-svg");
            startAnimationSvgHeader(articleSvg);
        }

    });

    /***********************************************
     Fotorama Set
     ***********************************************/
    $(window).on("resize", function () {

    }).trigger('resize');
    $(window).on('resizeEnd', function () {
        if ($(document).width() < 768) {
            setArrowsHex(true);
        } else {
            setArrowsHex(false);
        }
    });
    function setArrowsHex(k) {
        var fotoramaMain = $('.fotorama').fotorama();
        var fotorama1 = fotoramaMain.data('fotorama');
        if (k) {
            fotorama1.setOptions({
                arrows: false,
                transition: 'slide',
                nav: false
            });
        } else {
            fotorama1.setOptions({
                arrows: true,
                transition: 'crossfade',
                nav: 'dots'
            });
        }
    }

});



