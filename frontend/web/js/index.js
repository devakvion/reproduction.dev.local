/***********************************************
 Fotorama
 ***********************************************/
$('.fotorama').on('fotorama:show', function (e, fotorama) {
    if (fotorama.activeFrame.id == 'women-block') {
        var womenSvg = "#women-svg";
        animateThis(womenSvg);

    }
    if (fotorama.activeFrame.id == 'men-block') {
        var menSvg = "#men-svg";
        animateThis(menSvg);
        callForKeyboard.stop();
    }
    if (fotorama.activeFrame.id == 'oldHealth-block') {
        var oldSvg = "#old-svg";
        animateThis(oldSvg);
    }
    if (fotorama.activeFrame.id == 'couples-block') {
        var couplesSvg = "#couples-svg";
        animateThis(couplesSvg);
    }
    if (fotorama.activeFrame.id == 'specialist-block') {
        var articleSvg = "#article-svg";
        animateThis(articleSvg);
    }

});

/***********************************************
 On Load
 ***********************************************/
window.onload = function () {
   setTimeout(function () {
        //Переместить в desktop
        callForEachDown.start(downContentHelp, [0, 1, 2, 3], 500);
        callForKeyboard.start(keyboardContentHelp, [0, 1, 2, 3], 1000);

    }, 800);
};
/***********************************************
 Fotorama Set
 ***********************************************/
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
/***********************************************
 Scroll
 ***********************************************/
$( document ).ready(function() {
    initIndex();
    var isRunningMain = false;
    window.onscroll = function () {
        var touchFirst = $('#human-view-mobile .reproduction-tach_help');
        var touchSec = $('.reproduction-touch2');
        Response.inViewport(touchSec[0]) ? $(touchSec[0]).addClass('animatedHelp') : " ";
        Response.inViewport(touchFirst[0], -100) ? $(touchFirst[0]).addClass('active') : " ";
        Response.inViewport(touchSec[1]) ? $(touchSec[1]).addClass('animatedHelp') : " ";
        Response.inViewport(touchFirst[1], -100) ? $(touchFirst[1]).addClass('active') : " ";
        Response.inViewport(touchSec[2]) ? $(touchSec[2]).addClass('animatedHelp') : " ";
        Response.inViewport(touchFirst[2], -100) ? $(touchFirst[2]).addClass('active') : " ";
        Response.inViewport(touchSec[3]) ? $(touchSec[3]).addClass('animatedHelp') : " ";
        Response.inViewport(touchFirst[3], -100) ? $(touchFirst[3]).addClass('active') : " ";
        if (Response.inViewport($('#human-section'), -350) && !isRunningMain) {
            isRunningMain = true;
            startIndexHumanPage();
        }
    };
});

function initIndex() {
    if (Response.deviceW() < 768 ) {
        setArrowsHex(true);
        initFotoramaMobile();
    }
    if (Response.deviceW() >= 768) {
        setArrowsHex();
    }

}
//initIndex();
Response.crossover(function () {
    if (Response.viewportW() < 767) {
        setArrowsHex(true);
        deleteAllObjectIndex();
        initFotoramaMobile();
      }
    if ((Response.viewportW() >= 768) && (Response.viewportW() < 1022)) {
        setArrowsHex();
        startIndexHumanPage();
         }
}, "width");
/***********************************************
 Set
 ***********************************************/
function initFotoramaMobile() {
    $('#fotorama1').fotorama();
    $('#fotorama2').fotorama();
    $('#fotorama3').fotorama();
    $('#fotorama4').fotorama();
    $('#fotorama5').fotorama();

}
/***********************************************
 Delete Svg
 ***********************************************/
function deleteAllObjectIndex() {
    var human = Snap("#human-svg");
    var allP = human.selectAll('path');
    var allC = human.selectAll('circle');
    var allI = human.selectAll('image');
    allP.remove();
    allC.remove();
    allI.remove();
}




