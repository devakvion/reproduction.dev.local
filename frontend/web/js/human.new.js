$(document).ready(function () {
    /***********************************************
     Vars
     ***********************************************/
    var arrSvgGr = $('.human-svg svg .w-end-m .w-org,.human-svg svg .m-end-w .m-org');
    var arrSvgGrW = $('.human-svg svg .w-end-m .w-org');
    var arrSvgGrM = $('.human-svg svg .m-end-w .m-org');

    /***********************************************
     List Problem
     ***********************************************/
    function findProblemBtn() {
        var listProblem = $(".list-problem-link");

        listProblem.hover(function () {
            var arr = $(this).data('drugs').split(',');
            var arr2 = $(this).data('problem').split(',');
            var item = $(this).data('human');
            getProduct(arr);
            getSvgHover(arr2, item);
        }, function () {
            $('.figure-durgs').removeClass('active');
            getSvgHover();
        });
    }

    findProblemBtn();

    /***********************************************
     Product
     ***********************************************/
    function getProduct(arr) {
        $('.figure-durgs').each(function (index, elem) {
            $(elem).addClass('active');
            for (var i = 0; i < arr.length; i++) {
                if ($(elem).data('name-drugs') === arr[i]) {
                    $(elem).removeClass('active');


                }
            }
        });
    }

    /***********************************************
     SVG
     ***********************************************/
    function getSvgHover(arr, str) {
        if (arr) {
            if (str == 'w') {
                arrSvgGrW.each(function (index, elem) {
                    var strClass = ($(elem).attr('class')) ? $(elem).attr('class') : '';
                    for (var i = 0; i < arr.length; i++) {
                        if (strClass.indexOf(arr[i]) !== -1) {
                            $(elem).attr("class", strClass + ' active');


                        }
                    }

                });
            } else if (str == 'm') {
                arrSvgGrM.each(function (index, elem) {
                    var strClass = ($(elem).attr('class')) ? $(elem).attr('class') : '';
                    for (var i = 0; i < arr.length; i++) {
                        if (strClass.indexOf(arr[i]) !== -1) {
                            $(elem).attr("class", strClass + ' active');


                        }
                    }

                });
            } else {
                arrSvgGr.each(function (index, elem) {
                    var strClass = ($(elem).attr('class')) ? $(elem).attr('class') : '';
                    for (var i = 0; i < arr.length; i++) {
                        if (strClass.indexOf(arr[i]) !== -1) {
                            $(elem).attr("class", strClass + ' active');


                        }
                    }

                });
            }

        } else {
            arrSvgGr.each(function (index, elem) {
                var strClass = ($(elem).attr('class')) ? $(elem).attr('class') : '';
                $(elem).attr("class", strClass.replace('active', ''));

            });
        }

    }

    function getNameOrganSvg(obg) {
        var name = $(obg).attr('class');
        var org = name.substr(name.indexOf(" ") + 1);
        getNameOrgansSVG(org);
    }

    function hoverM() {
        $('.m-org').hover(function () {
            getNameOrganSvg($(this));
            $(this).addClass('active');
        }, function () {
            $(this).removeClass('active');
            getNameOrgansSVG(false);
        });
    }

    hoverM();

    function hoverW() {
        $('.w-org').hover(function () {
            getNameOrganSvg($(this));
            $(this).addClass('active');
        }, function () {
            $(this).removeClass('active');
            getNameOrgansSVG(false);
        });
    }

    hoverW();

    /***********************************************
     Name Organ
     ***********************************************/
    function getNameOrgansSVG(str) {
        var insertTeg = $(".show-organs-name");
        if (str) {
            insertTeg.html('<span class="problem-show-txt"><span class="item-show-txt position-relative">' + str + '</span></span>');
        } else {
            insertTeg.html('');
        }

    }


    var controllerIndex = new ScrollMagic.Controller();
    $('.human-svg').each(function (index, elem) {
        new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 0.8,
            reverse: false
        })
            .on('start', function () {
                $(elem).addClass('active');
                var el = $(this);
               // console.log(el);
                startAnimationSvg($('.human-svg.active'));
            })
            // .addIndicators()
            .addTo(controllerIndex);
    });

    /***********************************************
     Click Label
     ***********************************************/
    $('.click-label').on('click', function (el) {
        pathPrepareCss();
        var obj = $(this).data('for');
        $('.tabs > div').removeClass('active');
        $('.' + obj).addClass('active');
        setTimeout(function () {
            startAnimationSvg($('.' + obj + ' svg'));
        }, 300);
    });
    /***********************************************
    Index
    ***********************************************/
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
