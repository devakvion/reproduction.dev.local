$(document).ready(function () {
    /***********************************************
     Vars
     ***********************************************/
    var svgHeader = $('.wr-svg-header svg');
    var svgContent = $('.wr-svg-article svg');
    pathPrepareCssAll(svgHeader);
    pathPrepareCssAll(svgContent);
    setTimeout(function () {
        startAnimationSvgHeader(svgHeader);

    }, 100);

    /***********************************************
     Set Pin
     ***********************************************/
    var controllerPin = new ScrollMagic.Controller();

    var scenePin = new ScrollMagic.Scene({triggerElement: "#main-article", triggerHook: 0.16})
        .setPin("#pin1")
        .setClassToggle("#pin1", "active")
       // .addIndicators()
        .addTo(controllerPin);

    var duration = scenePin.duration();

    scenePin.duration(300);

    var durationValueCache;
    function getDuration () {
        return durationValueCache;
    }
    function updateDuration (e) {
        durationValueCache = $('#wr-col-article').innerHeight() - $('#pin1').innerHeight();
    }
    $(window).on("resize", updateDuration);
    $(window).triggerHandler("resize");

    $(window).on('resizeEnd', function () {
        setTimeout(function () {
            scenePin.duration(getDuration);
            $(window).trigger('resize');
        },200);
    });

    /***********************************************
     Animation SVG
     ***********************************************/
    var controllerProblem = new ScrollMagic.Controller();

    // build scene
    new ScrollMagic.Scene({triggerElement: ".wr-svg-article", reverse: false, triggerHook: 0.65})
        .addTo(controllerProblem)
       // .setClassToggle(".wr-svg-article", "active")
        //  .addIndicators() // add indicators (requires plugin)
        .on("start", function (e) {
            startAnimationSvg(svgContent);
            $('.wr-svg-article').addClass('active');
        });

});