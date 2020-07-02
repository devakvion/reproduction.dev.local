$(document).ready(function () {
    /***********************************************
     Search Menu Top Click & Hover
     ***********************************************/
    $(function () {
        var closeSearch = $('.btn-times');
        var wrDropdown = $('#wr-dropdown-search');
        var searchFocus = $('#search-focus');
        var bgContainer = $('#wrapper-content-bg');
        bgContainer.click(function () {
        });
        closeSearch.hover(
            function () {
                $('.close-search i').transition({rotate: '90deg', x: 0, y: 0});
            },
            function () {
                $('.close-search i').transition({rotate: '-90deg', x: 0, y: 0});
            });
        closeSearch.click(function (e) {
            $('.close-search i').transition({scale: [0.3, 0.3]}, 300, 'ease');
            setTimeout(function () {
                hasClassOpen($('#open-search'));
                $('.close-search i').transition({scale: [1, 1]}, 500, 'ease');
                bgContainer.removeClass('open-menu');
            }, 100)

        });
        $(document).on("click", "#open-search", function (e) {
            e.preventDefault();
            hasClassOpen($(this));
        });

        function hasClassOpen(e) {
            if (e.hasClass('active')) {
                $("style.append-hover").remove();
                wrDropdown.css({
                    opacity: 0,
                    height: 0
                });
                e.removeClass('active');
                bgContainer.removeClass('open-menu');
                searchFocus.blur();

            } else {
                $("body").append('<style class="append-hover">.item-link-menu.not-before-li::before{ background-color: transparent;}</style>');
                e.addClass('active');
                wrDropdown.css({
                    opacity: 1,
                    height: 'auto'
                });
                bgContainer.addClass('open-menu');
                searchFocus.focus();
            }
        }

    });
    /***********************************************
     Mobile Navigation
     ***********************************************/
    new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger-menu-mobile'), {
        type: 'cover'
    });

    /***********************************************
     VerticalAlign
     ***********************************************/
    function alignVertical(e) {
        $('.align-vertical').each(function () {
            var that = $(this);
            var height = that.height();
            var parentHeight = that.parent().height();
            var padAmount = (parentHeight / 2) - (height / 2);
            if (e) {
                that.css('padding-top', padAmount);
            } else {
                that.css('padding-top', 0);
            }
        });

    }

    function alignVerticalAll() {
        $('.align-vertical-all').each(function () {
            var that = $(this);
            var height = that.height();
            var parentHeight = that.parent().height();
            var padAmount = (parentHeight / 2) - (height / 2);
            that.css('padding-top', padAmount);

        });

    }
    alignVerticalAll();
    /***********************************************
     Animate section
     ***********************************************/
    var controllerAnimatSection = new ScrollMagic.Controller();

    $(".block-animate").each(function (index, elem) {
        new ScrollMagic.Scene({
            triggerElement: elem,
            triggerHook: 0.85,
            reverse: false
        }).on('start', function () {
             $(elem).addClass('visible');


        }).addTo(controllerAnimatSection);
    });


    /***********************************************
     Close Old
     ***********************************************/
    $('#close-old').click(function () {
        $('#outdated').fadeOut(600);
        // setTimeout()
    });
//Scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 700) {
            //$('#wr-scroller').fadeIn();
            $('#wr-scroller').addClass('active');
        } else {
            // $('#wr-scroller').fadeOut();
            $('#wr-scroller').removeClass('active');
        }
    });
    $('#scroller').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    /***********************************************
     Resize
     ***********************************************/
    /***********************************************
     Response.resize & Response.ready
     ***********************************************/
 /*   $(window).on("resize", function () {

    }).trigger('resize');*/
    $(window).on('resizeStart', function () {
    });
    $(window).on('resizeEnd', function () {

       // alignVerticalAll();

        if ($(document).width() < 1022) {
            alignVertical();
        } else {
            alignVertical(true);
        }
    });
    (function () {
        var THRESHOLD = 450;
        var timeoutId;
        var resizing = false;
        var win = $(window);

        win.on('resize', function () {
            var timeout = function () {
                clearTimeout(timeoutId);

                timeoutId = setTimeout(function () {
                    resizing = false;
                    win.trigger('resizeEnd');


                }, THRESHOLD);
            };

            if (!resizing) {
                resizing = true;
                win.trigger('resizeStart');

            }

            timeout();
        });
    }());
});

/***********************************************
 Animation SVG
 ***********************************************/
function pathPrepareCss() {
    $(".human-svg svg").each(function (index, elem) {
        var arrAllPath = $(elem).find('path');
        for (var i = 0; i < arrAllPath.length; i++) {
            $(arrAllPath[i]).css("stroke-dasharray", getSvgPath(arrAllPath[i]));
            $(arrAllPath[i]).css("stroke-dashoffset", getSvgPath(arrAllPath[i]));
        }
    });
}
function pathPrepareCssAll(obj) {
   obj.each(function (index, elem) {
        var arrAllPath = $(elem).find('path');
        for (var i = 0; i < arrAllPath.length; i++) {
            $(arrAllPath[i]).css("stroke-dasharray", getSvgPath(arrAllPath[i]));
            $(arrAllPath[i]).css("stroke-dashoffset", getSvgPath(arrAllPath[i]));
        }
    });
}
//pathPrepareCssAll();
pathPrepareCss();

function getSvgPath(el) {
    return el.getTotalLength();
}

function startAnimationSvg(el) {
    var arrPath = $(el).find('path');
    for (var i = 0; i < arrPath.length; i++) {
        new TimelineMax()
            .add(TweenMax.to(arrPath[i], 1, {
                strokeDashoffset: 0, ease: Linear.easeNone, onComplete: function () {

                }
            }));
    }
}
function startAnimationSvgHeader(el) {
    var arrPath = $(el).find('path');
    for (var i = 0; i < arrPath.length; i++) {
        new TimelineMax()
            .add(TweenMax.to(arrPath[i], 1.5, {
                strokeDashoffset: 0, ease: Linear.easeNone,delay:1.5, onComplete: function () {

                }
            }));
    }
}
/***********************************************
 Menu Hover
 ***********************************************/
function hoverMenuTop() {
    var bgContainer = $('#wrapper-content-bg');
    if (bgContainer.hasClass('open-menu')) {
        bgContainer.removeClass('open-menu');
    } else {
        bgContainer.addClass('open-menu');
    }
}
/***********************************************
 Hover Before Menu Search end Open
 ***********************************************/
function hideBeforeMenuSearch(e) {
    $("style.append-hover").remove();
    $("body").append('<style class="append-hover">.item-link-menu.not-before-li::before{ background-color: transparent;}</style>');

}

function showBeforeMenuSearch() {
    $("style.append-hover").remove();
}
/***********************************************
 Cookie
 ***********************************************/
(function () {
    var openclose;

    openclose = function () {
        return $(".open-close-button").click(function () {
            setTimeout(function () {
                $$cookieDisclaimer.classList.remove('is-active');
            }, 200);
            return $(this).toggleClass("open");

        });
    };

    jQuery(document).ready(function ($) {
        return openclose();
    });

}).call(this);

var $$cookieDisclaimer = document.querySelector('.js-cookie-disclaimer');

if (!localStorage.getItem('cookieDisclaimer6')) {
    setTimeout(function () {
        $$cookieDisclaimer.classList.add('is-active');
    }, 4000);

}

$$cookieDisclaimer.querySelector('#coocie-ok').addEventListener('click', function () {
    localStorage.setItem('cookieDisclaimer6', true);
    $$cookieDisclaimer.classList.remove('is-active');
});