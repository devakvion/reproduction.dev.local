/***********************************************
 Init Controller Parallax end Header Title
 ***********************************************/
/*var controllerParallax = new ScrollMagic.Controller({
 globalSceneOptions: {
 triggerHook: "onEnter",
 duration: "190%"
 }
 });*/
var controllerOpacityHeader = new ScrollMagic.Controller();
var tweenOpacity = TweenMax.to(".header-title", 0.5, {opacity: 0});
new ScrollMagic.Scene({triggerElement: "#parallax", duration: 300, triggerHook: 0, offset: 80})
    .setTween(tweenOpacity)
    .addTo(controllerOpacityHeader);

/*new ScrollMagic.Scene({triggerElement: "#parallax"})
 .setTween(".parallax-img", {y: "80%", ease: Linear.easeNone})
 .addTo(controllerParallax);*/
/***********************************************
 Scroll Test Lesson
 ***********************************************/
var controllerScrollLesson = new ScrollMagic.Controller();

controllerScrollLesson.scrollTo(function (newpos) {
    TweenMax.to(window, 1.5, {scrollTo: {y: newpos}});
});
$('#lesson-test').click(function (e) {
    e.preventDefault();
    controllerScrollLesson.scrollTo('#contact');
});
/***********************************************
 Scroll Top
 ***********************************************/
var controllerScrollTopIndex = new ScrollMagic.Controller();
controllerScrollTopIndex.scrollTo(function (newpos) {
    TweenMax.to(window, 1.5, {scrollTo: {y: newpos}});
});
$('#scroll-top-site').click(function (e) {
    console.log(1);
    e.preventDefault();
    controllerScrollTopIndex.scrollTo('body');
});

new ScrollMagic.Scene({triggerElement: "#working"})
    .setClassToggle("#scroll-top-site", "active")
    .addTo(controllerScrollTopIndex);
/***********************************************
 Scroll To Price
 ***********************************************/
var controllerScrollPrice = new ScrollMagic.Controller();

controllerScrollPrice.scrollTo(function (newpos) {
    TweenMax.to(window, 1, {scrollTo: {y: newpos}});
});
$('#price-lessons').click(function (e) {
    console.log(1);
    e.preventDefault();
    controllerScrollPrice.scrollTo('#price-lesson-list');
});
/***********************************************
 Menu Scroll Bottom
 ***********************************************/
var controllerMenuBottom = new ScrollMagic.Controller();
controllerMenuBottom.scrollTo(function (newpos) {
    TweenMax.to(window, 1.5, {scrollTo: {y: newpos}});
});

$(document).on("click", ".link-menu-bottom", function (e) {
    var id = $(this).attr("href");
    if ($(id).length > 0) {
        e.preventDefault();

        // trigger scroll
        controllerMenuBottom.scrollTo(id);

        // if supported by the browser we can even update the URL.
        if (window.history && window.history.pushState) {
            history.pushState("", document.title, id);
        }
    }
});
/***********************************************
 Masonry
 ***********************************************/
jQuery(window).load(function () {
    var $grid = $('.grid');
    $grid.masonry({
        // options
        itemSelector: '.grid-item'
        //columnWidth: 200
    });
});
/***********************************************
 Menu Scroll Top
 ***********************************************/
jQuery(window).load(function () {
    var controllerMenu = new ScrollMagic.Controller();

// Scroll
    controllerMenu.scrollTo(function (newpos) {
        TweenMax.to(window, 2, {scrollTo: {y: newpos}});
    });

//  bind scroll to anchor links
    $(document).on("click", ".link-menu", function (e) {
        var id = $(this).attr("href");
        if ($(id).length > 0) {
            e.preventDefault();

            // trigger scroll
            controllerMenu.scrollTo(id);

            // if supported by the browser we can even update the URL.
            if (window.history && window.history.pushState) {
                history.pushState("", document.title, id);
            }
        }
    });
    //console.log($('#about').innerHeight() + 'px');
    var scene1 = new ScrollMagic.Scene({triggerElement: "#training"})
        .setClassToggle("#link-training", "active")
        .addTo(controllerMenu);
    var scene2 = new ScrollMagic.Scene({triggerElement: "#about"})
        .setClassToggle("#link-about", "active")
        .addTo(controllerMenu);
    var scene3 = new ScrollMagic.Scene({triggerElement: "#working"})
        .setClassToggle("#link-working", "active")
        .addTo(controllerMenu);

    var scene4 = new ScrollMagic.Scene({triggerElement: "#handiwork"})
        .setClassToggle("#link-hobby", "active")
        .addTo(controllerMenu);
    var scene5 = new ScrollMagic.Scene({triggerElement: "#contact"})
        .setClassToggle("#link-contact", "active")
        .addTo(controllerMenu);
    var scene6 = new ScrollMagic.Scene({triggerElement: "#comments"})
        .setClassToggle("#link-comments", "active")
        .addTo(controllerMenu);


    $(window).on("resize", function () {
        var arr = [scene1, scene2, scene3, scene4, scene5, scene6];
        getHeightSection(arr);

    }).trigger('resize');
    $(window).triggerHandler("resize");
    function getHeightSection(arr) {
        for (var i = 0; i < arr.length; i++) {
            var pos = arr[i].triggerElement().offsetHeight;
            arr[i].duration(pos);
        }
    }
});
/***********************************************
 Menu Background end Color Burger
 ***********************************************/
var controllerBackgroundMenu = new ScrollMagic.Controller();
new ScrollMagic.Scene({triggerElement: "#training", triggerHook: 0, offset: -30})
    .setClassToggle("#navigation", "active")
    .addTo(controllerBackgroundMenu);

new ScrollMagic.Scene({triggerElement: "#training", triggerHook: 0})
    .setClassToggle(".burger", "active")
    .addTo(controllerBackgroundMenu);

/***********************************************
 Form Contact
 ***********************************************/
(function ($) {
    function floatLabel(inputType) {
        $(inputType).each(function () {
            var $this = $(this);
            // on focus add cladd active to label
            $this.focus(function () {
                $this.prev().addClass("active");
            });
            //on blur check field and remove class if needed
            $this.blur(function () {
                if ($this.val() === '' || $this.val() === 'blank') {
                    $this.prev().removeClass();
                }
            });
        });
    }

    // just add a class of "floatLabel to the input field!"
    floatLabel(".floatLabel");
})(jQuery);
function showResponse(data) {
    $("#output").fadeIn(500).html(data);
    $('#contact-form').trigger('reset');
    setTimeout(function () {
        $("#output").fadeOut(500)
    }, 3500);

}
function closeError() {
    $("#output").fadeOut(300);

}
/***********************************************
 Google Maps
 ***********************************************/
google.maps.event.addDomListener(window, 'load', init);
function init() {
    var myLatlng = new google.maps.LatLng(40.641948, -8.653593);
    var mapOptions = {
        scrollwheel: false,
        zoom: 15,
        center: myLatlng,
        // disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [
            {
                "featureType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "gamma": 1
                    }
                ]
            }
        ]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    //logo
    var image = '/img/dashbord/map.png';
    var myLatLng = new google.maps.LatLng(40.641948, -8.653593);
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Алена Алексенко',
        icon: image
    });
}
/***********************************************
 VerticalAlign
 ***********************************************/
function alignVertical() {
    $('.align-vertical').each(function () {
        var that = $(this);
        var height = that.height();
        var parentHeight = that.parent().height();
        var padAmount = (parentHeight / 2) - (height / 2);
        that.css('padding-top', padAmount);
    });
}
function alignVerticalNormal() {
    $('.align-vertical').each(function () {
        var that = $(this);
        that.css('padding-top','0');
    });
}
$(window).on("resize", function () {
    if (document.body.clientWidth >= 768) {
        alignVertical();
    }else{
        alignVerticalNormal();
    }
}).trigger('resize');

/*jQuery(window).load(function () {
 alignVertical();
 });*/
/***********************************************
 Link Site PB Hover Img
 ***********************************************/
function linkImgOnmouseover(e) {
    var elemLink = e.parents('.wr-card').find('.hover-img-bg-pb img');
    TweenMax.to(elemLink, 0.5, {scale: 1.03});
}
function linkImgOnmouseout(e) {
    var elemLink = e.parents('.wr-card').find('.hover-img-bg-pb img');
    TweenMax.to(elemLink, 0.3, {scale: 1});
}

/*function imgMasonryOnmouseover(e) {
 var elemLink = e.parents('.wr-grid-item').find('img');
 TweenMax.to(elemLink, 0.5, {scale: 1.03});
 }
 function imgMasonryOnmouseout(e) {
 var elemLink = e.parents('.wr-grid-item').find('img');
 TweenMax.to(elemLink, 0.3, {scale: 1});
 }*/
/***********************************************
 Animation Section
 ***********************************************/
var controllerAnimationTraining = new ScrollMagic.Controller();
// build scene
//var tween = TweenMax.to("#title-sec1", 0.5, {opacity: 1, scale: 1}); , offset: -30
/*Training*/
new ScrollMagic.Scene({triggerElement: "#training", triggerHook: 1, reverse: false})
    .setClassToggle("#title-sec1", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#training", triggerHook: 1, reverse: false})
    .setClassToggle("#anim-1", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#training", triggerHook: 0.5, reverse: false})
    .setClassToggle(".training-bg-img", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#price-lesson-list", triggerHook: 1, reverse: false})
    .setClassToggle("#price-lesson-list", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#about", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#title-sec2", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-2", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-2", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-3", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-3", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-4", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-4", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-5", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-5", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#note", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#note", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#working", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#title-sec3", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-6", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-6", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#comments", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#title-sec6", "active")
    .addTo(controllerAnimationTraining);


new ScrollMagic.Scene({triggerElement: "#handiwork", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#title-sec4", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-7", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-7", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#wr-masonry", triggerHook: 0.5, offset: -200, reverse: false})
    .setClassToggle(".grid-item", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#contact", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#title-sec5", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-8", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-8", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-9", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-9", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-10", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-10", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-11", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-11", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-12", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-12", "active")
    .addTo(controllerAnimationTraining);
new ScrollMagic.Scene({triggerElement: "#anim-13", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-13", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-14", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-14", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: ".comments-note", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle(".comments-note", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#anim-15", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#anim-15", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#jewelry", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#jewelry", "active")
    .addTo(controllerAnimationTraining);

new ScrollMagic.Scene({triggerElement: "#contact-col", triggerHook: 1, offset: 80, reverse: false})
    .setClassToggle("#contact-col", "active")
    .addTo(controllerAnimationTraining);
/***********************************************
 ToolTip
 ***********************************************/
$('.tooltip').tooltipster({
    animation: 'fade',
    delay: 200,
    theme: 'tooltipster-default',
    touchDevices: false,
    trigger: 'hover',
    position: 'bottom'
});

/***********************************************
 Menu Open
 ***********************************************/
/*(function () {
 var wrapperSiteContent =$('#wrapper-site-content');
 var menuMain = $("#navigation-mobile");
 var openBtnTop = $(".nav-icon");
 openBtnTop.on('click', function () {
 $(this).toggleClass("open");
 menuMain.toggleClass("open");
 wrapperSiteContent.toggleClass("open");
 });
 }.call(this));*/
function openMenuMobile() {
    var wrapperSiteContent = $('#wrapper-site-content');
    var menuMain = $("#navigation-mobile");
    var openBtnTop = $(".nav-icon");
    openBtnTop.toggleClass("open");
    menuMain.toggleClass("open");
    wrapperSiteContent.toggleClass("open");

}
$('.link-mobile').click(function () {
    //console.log(1);
    openMenuMobile();
});
/***********************************************
 Height Comment
 ***********************************************/


$(window).on("resize", function () {
    var commentHeight = $('.text:last').innerHeight();
    var commentsLastP = $('.attribution').innerHeight();
    var sum = commentsLastP + commentHeight + 7;
    $("style.append").remove();
    $("body").append('<style class="append">.comments:before{bottom:' + sum + 'px;}</style>');

});
//$("body").append('<style class="append">.comments:before{bottom:'+ commentHeight+'px;}</style>');
/***********************************************
 Error Page
 ***********************************************/


