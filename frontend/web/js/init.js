/*Response.create([
 {
 prop: "width"  // "width" "device-width" "height" "device-height" or "device-pixel-ratio"
 , prefix: "min-width- r src"  // the prefix(es) for your data attributes (aliases are optional)
 , breakpoints: [0, 320, 480, 640, 768] // min breakpoints (defaults for width/device-width)
 , lazy: true // optional param - data attr contents lazyload rather than whole page at once
 },
 {
 prop: "device-pixel-ratio"
 , breakpoints: [1, 1.5, 2]
 }
 ]);*/

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
 Touch
 ***********************************************/

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
/***********************************************
 Animate SVG
 ***********************************************/
// Animate Path SVG Slider
function animateThis(e) {
    var obj = Snap(e),
        path1 = 0,
        path2 = 0,
        path3 = 0,
        path4 = 0,
        path5 = 0,
        path0 = 0,
        length1,
        length2,
        length3,
        length4,
        length5;
    var arrWomen = [
            "M61 121c33.137 0 60-26.863 60-60S94.137 1 61 1 1 27.863 1 61s26.863 60 60 60z",
            "M60.55 76.503c14.637 0 26.503-11.72 26.503-26.18 0-14.456-11.866-26.178-26.502-26.178-14.635 0-26.502 11.72-26.502 26.18 0 14.457 11.866 26.178 26.503 26.178zm1.295-.058v24.744-24.745zM49.665 87.39H74.71 49.665z",
            "M60.785 116.57C29.975 116.57 5 91.594 5 60.785 5 29.975 29.976 5 60.785 5c30.81 0 55.785 24.976 55.785 55.785 0 30.81-24.976 55.785-55.785 55.785z"
        ],
        arrMen = [
            "M61 121c33.137 0 60-26.863 60-60S94.137 1 61 1 1 27.863 1 61s26.863 60 60 60z",
            "M61.324 116.784c30.63 0 55.46-24.83 55.46-55.46 0-30.63-24.83-55.46-55.46-55.46-30.63 0-55.46 24.83-55.46 55.46 0 30.63 24.83 55.46 55.46 55.46z",
            "M54.816 95.892c14.386 0 26.047-11.66 26.047-26.046 0-14.385-11.66-26.047-26.047-26.047-14.386 0-26.047 11.66-26.047 26.046 0 14.385 11.66 26.046 26.046 26.046z",
            "M73.036 51.627l19.292-19.295m-11.79 0h11.79v11.792"
        ],
        arrCouples = [
            "M61 121c33.137 0 60-26.863 60-60S94.137 1 61 1 1 27.863 1 61s26.863 60 60 60z",
            "M50.228 84.34c13.95 0 25.26-11.308 25.26-25.258s-11.31-25.257-25.26-25.257c-13.95 0-25.26 11.308-25.26 25.257 0 13.95 11.31 25.258 25.26 25.258z",
            "M67.896 41.416l18.707-18.71m-11.43 0h11.43V34.14",
            "M66.478 90.494c11.025 0 19.964-8.83 19.964-19.72 0-10.89-8.938-19.72-19.964-19.72-11.025 0-19.964 8.83-19.964 19.72 0 10.89 8.94 19.72 19.964 19.72zm.975-.54v18.637-18.637zm-9.176 8.244h18.867-18.866z",
            "M60.785 116.246c30.63 0 55.46-24.83 55.46-55.46 0-30.63-24.83-55.462-55.46-55.462-30.63 0-55.46 24.83-55.46 55.46 0 30.63 24.83 55.462 55.46 55.462z"
        ],
        arrOld = [
            "M61 121c33.137 0 60-26.863 60-60S94.137 1 61 1 1 27.863 1 61s26.863 60 60 60z",
            "M57.948 68.574h8.54l2.42-5.738v15.33l5.02-21.26-.133 16.08 3-7.658H87.39",
            "M97.685 65.536l-36.628 36.64-36.628-36.64c-6.768-6.77-6.768-17.952 0-24.72 3.235-3.238 7.648-5.15 12.355-5.15 4.707 0 9.12 1.764 12.356 5.15l10.15 10.15-7.06 7.212c-.44.44-.44 1.325 0 1.765.294.294.59.294.883.294.294 0 .588-.146.882-.294l7.943-7.945L72.97 40.963c3.237-3.238 7.65-5.152 12.357-5.152 4.707 0 9.12 1.767 12.356 5.153 6.914 6.62 6.914 17.803 0 24.572h.002z",
            "M60.785 116.57c30.81 0 55.785-24.976 55.785-55.785C116.57 29.975 91.594 5 60.785 5 29.975 5 5 29.976 5 60.785c0 30.81 24.976 55.785 55.785 55.785z"
        ],
        arrDrugs = [
            "M0.8999999999999986,61.2a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M0.8999999999999986,61.2a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M48.1 99.4l-.4-.1c-8.9-3-13.7-12.7-10.6-21.5l14.6-43c3-8.9 12.7-13.7 21.5-10.6l.4.1c8.9 3 13.7 12.7 10.6 21.5l-14.6 43c-2.9 8.8-12.6 13.6-21.5 10.6zm-3.9-42.5l32.6 10.3-32.6-10.3zM48 62s-4.6 14.7-5.9 19.1c-1.3 4.4 1.5 10.8 6.6 13.1"

        ],
        arrDrugs2 = [
            "M90.9 49.1l.9-4.2 4.2.9 3.7-17.5-59.2-12.7-3.8 17.5 4.2.9-.9 4.2-4.2-.9-12.3 57.6 59.3 12.7L95.1 50zM42.9 36.5l5.3 1.1M53.1 38.7l5.4 1.1M63.3 40.9l5.4 1.1M73.6 43l5.3 1.2M83.8 45.2l5.4 1.2",
            "M90.9 49.1l.9-4.2 4.2.9 3.7-17.5-59.2-12.7-3.8 17.5 4.2.9-.9 4.2-4.2-.9-12.3 57.6 59.3 12.7L95.1 50zM42.9 36.5l5.3 1.1M53.1 38.7l5.4 1.1M63.3 40.9l5.4 1.1M73.6 43l5.3 1.2M83.8 45.2l5.4 1.2",
            "M51.77 28.72l32.072 6.866-12.62 58.96-32.072-6.864z",
            "M0.6000000000000014,61.6a61,61 0 1,0 122,0a61,61 0 1,0 -122,0"

        ],
        arrRev = [
            "M0.6000000000000014,61.6a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M0.6000000000000014,61.6a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M46.896 40.804c-.053-2.213 1.693-4.006 3.904-4.006h46.686c2.208 0 4 1.795 4 4.006V71.07c0 2.213-1.792 4.006-4.005 4.006H88.61v9.486l-8.976-8.976-27.928-.446c-2.206-.035-4.037-1.86-4.09-4.07l-.718-30.266zM56.986 48.332h35.04M56.986 55.332h35.04M56.986 63.332h35.04",
            "M39.62 49.982H27.844c-2.21 0-4 1.79-4 4.01v30.114c0 2.214 1.79 4.095 3.996 4.2l8.974.43v9.72l8.478-9.544h25.813c1.658 0 3.002-1.35 3.002-2.998V81.27"
        ],
        arrFaq = [
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M64.04 96.922v7.816M32.522 48.092c0-15.055 12.684-27.302 28.275-27.302 15.592 0 28.277 12.248 28.277 27.302 0 7.36-2.94 14.218-8.282 19.375l-9.91 9.57c-4.413 4.26-6.842 9.922-6.84 15.947m-4.92 0v.002"
        ],
        arrPurchase = [
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M93.654 97.21H28.532c-.585 0-1.143-.238-1.546-.662-.403-.423-.615-.993-.586-1.577l2.663-53.812c.056-1.137.994-2.03 2.132-2.03H89.65c1.12 0 2.047.864 2.13 1.978l3.966 53.543c.028.137.042.28.042.426 0 1.18-.955 2.135-2.134 2.135z",
            "M47.138 52.556c0 1.466-1.19 2.657-2.655 2.657-1.47 0-2.662-1.192-2.662-2.657 0-1.47 1.193-2.66 2.663-2.66 1.464 0 2.655 1.192 2.655 2.66zM80.347 52.556c0 1.466-1.19 2.657-2.652 2.657-1.473 0-2.663-1.192-2.663-2.657 0-1.47 1.19-2.66 2.663-2.66 1.462 0 2.652 1.192 2.652 2.66zM61.08 21.762H61.09m18.73 14.472c0-10.334-8.404-18.74-18.73-18.74H61.08c-10.327 0-18.73 8.406-18.73 18.74"
        ],
        arrContact = [
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M30.464 33.635c0-4.21 3.426-7.635 7.635-7.635h46.843c4.21 0 7.635 3.426 7.635 7.635v57.977c0 4.21-3.426 7.635-7.635 7.635H38.1c-4.21 0-7.636-3.426-7.636-7.635m5.41-48.718H23.018M35.875 55.7H23.017m12.858 13.81H23.017m0 12.846h12.858m9.148-3.17c.073.5.503.87 1.008.87h32.524c.505 0 .934-.37 1.008-.87.05-.35 1.192-8.652-3.126-13.64-2.063-2.383-4.998-3.59-8.722-3.59-.27 0-.497.132-.683.314l-.025-.027c-.018.018-1.8 1.7-4.71 1.7s-4.694-1.682-4.708-1.696l-.026.027c-.186-.184-.415-.32-.686-.32-3.724 0-6.66 1.21-8.722 3.592-4.32 4.99-3.18 13.29-3.13 13.64zm17.27-13.21c1.198 0 2.224-.23 3.096-.533l-3.097 6.414-3.098-6.415c.873.305 1.9.535 3.098.535zm9.508-15.22c0-5.243-4.264-9.507-9.506-9.507s-9.51 4.264-9.51 9.506c0 5.243 4.268 9.51 9.51 9.51s9.507-4.267 9.507-9.51z"

        ],
        arrError = [
            "M1,62a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M1,62a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M24,57.5a34.5,34.5 0 1,0 69,0a34.5,34.5 0 1,0 -69,0",
            "M80.35 83.95l16.903 16.962",
            "M86.866 48.984c-3.196-9.76-11.096-17.39-21.022-20.208",
            "M48.15 49.45l19.584 19.584m.748-19.94L49.594 69.35"

        ],
        arrNews = [
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M62.413 78.806H27.175c-.705 0-1.175-.47-1.175-1.174V44.86c0-.704.47-1.174 1.175-1.174h35.238c.704 0 1.174.47 1.174 1.174v32.772c0 .705-.47 1.174-1.174 1.174zM73.22 43.803h26.31M73.22 60.013h26.31M73.22 76.105h26.31M27.175 93.02h55.088M99.53 31H27.175"
        ],
        arrSearch = [
            "M1,62a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M1,62a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M24,57.5a34.5,34.5 0 1,0 69,0a34.5,34.5 0 1,0 -69,0",
            "M79 83.57l17.578 19.194",
            "M85.475 48.822c-3.175-9.7-11.027-17.282-20.89-20.082"
        ],
        arrArticle = [
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M0,61a61,61 0 1,0 122,0a61,61 0 1,0 -122,0",
            "M33.716 26C31.676 26 30 28.168 30 30.768v60.08c0 2.635 1.675 4.77 3.716 4.77H93.174v-.033h.102c.027 0 .053 0 .078-.032.027 0 .053 0 .08-.035 1.7-.4 3.036-2.333 3.036-4.668V47.707c0-2.6-1.702-4.768-3.742-4.768H89.64V30.767c0-2.6-1.7-4.768-3.74-4.768H33.715zm55.75 19.64h2.415c.984 0 1.782 1.237 1.782 2.798v42.08c0 1.563-.8 2.83-1.78 2.83h-.247c-.246-.032-.51-.13-.818-.36-.655-.52-1.35-1.624-1.35-5.006v-42.34zM37.004 84.45H56.42v-.256H36.874v.257h.13zm0-5.142H56.42v-.257H36.874v.258h.13zm0-5.144H56.42v-.257H36.874v.257h.13zm0-5.143H56.42v-.256H36.874v.257h.13zm12.858-7.97h19.416v-.258H49.732v.257h.13zm13.116 23.4H82.395v-.256H62.847v.257h.13zm0-5.142H82.395v-.257H62.847v.258h.13zm0-5.144H82.395v-.257H62.847v.257h.13zm0-5.143H82.395v-.256H62.847v.257h.13zM49.025 34.204c-.366.067-.655.5-.655.966v15.903c0 .5.34.934.733.934h21.432c.368 0 .734-.433.734-.934V35.17c0-.5-.368-.967-.735-.967H49.025z"
        ];

    obj.attr({
        "opacity": 1
    });
    delSvgPath(obj);
    var setT = setTimeout(function () {
        startSvgAnimationTop(obj, e);
    }, 1100);

    function startSvgAnimationTop(obj, e) {
        switch (e) {
            case '#women-svg':
                path0 = obj.path(arrWomen[0]).attr({class: "none-stroke"});
                path1 = obj.path(arrWomen[1]);
                path2 = obj.path(arrWomen[2]);
                break;
            case '#men-svg':
                path0 = obj.path(arrMen[0]).attr({class: "none-stroke"});
                path1 = obj.path(arrMen[1]);
                path2 = obj.path(arrMen[2]);
                path3 = obj.path(arrMen[3]);
                break;
            case '#couples-svg':
                path0 = obj.path(arrCouples[0]).attr({class: "none-stroke"});
                path1 = obj.path(arrCouples[1]);
                path2 = obj.path(arrCouples[2]);
                path3 = obj.path(arrCouples[3]);
                path4 = obj.path(arrCouples[4]);
                break;
            case '#drugs-svg':
                path0 = obj.path(arrDrugs[0]).attr({class: "none-drugs-str"});
                path1 = obj.path(arrDrugs[1]);
                path2 = obj.path(arrDrugs[2]);
                path3 = obj.path(arrDrugs[3]);
                path4 = obj.path(arrDrugs[4]);
                path5 = obj.path(arrDrugs[5]);
                break;
            case '#drugs-svg2':
                path0 = obj.path(arrDrugs2[0]).attr({class: "none-drugs-str"});
                path1 = obj.path(arrDrugs2[1]);
                path2 = obj.path(arrDrugs2[2]);
                path3 = obj.path(arrDrugs2[3]);
                break;
            case '#old-svg':
                path0 = obj.path(arrOld[0]).attr({class: "none-stroke"});
                path1 = obj.path(arrOld[1]);
                path2 = obj.path(arrOld[2]);
                path3 = obj.path(arrOld[3]);
                break;
            case '#review-svg':
                path0 = obj.path(arrRev[0]).attr({class: "none-drugs-str"});
                path1 = obj.path(arrRev[1]);
                path2 = obj.path(arrRev[2]);
                path3 = obj.path(arrRev[3]);
                break;
            case '#faq-svg':
                path0 = obj.path(arrFaq[0]).attr({class: "none-drugs-str"});
                path1 = obj.path(arrFaq[1]);
                path2 = obj.path(arrFaq[2]);
                break;
            case '#purchase-svg':
                path0 = obj.path(arrPurchase[0]).attr({class: "none-drugs-str"});
                path1 = obj.path(arrPurchase[1]);
                path2 = obj.path(arrPurchase[2]);
                path3 = obj.path(arrPurchase[3]);
                break;
            case '#contact-svg':
                path0 = obj.path(arrContact[0]).attr({class: "none-drugs-str"});
                path1 = obj.path(arrContact[1]);
                path2 = obj.path(arrContact[2]);
                break;
            case '#error-svg':
                path0 = obj.path(arrError[0]).attr({class: "none-drugs-str"});
                path1 = obj.path(arrError[1]);
                path2 = obj.path(arrError[2]);
                path3 = obj.path(arrError[3]);
                path4 = obj.path(arrError[4]);
                path5 = obj.path(arrError[5]);
                break;
            case '#search-svg':
                path0 = obj.path(arrSearch[0]).attr({class: "none-drugs-str"});
                path1 = obj.path(arrSearch[1]);
                path2 = obj.path(arrSearch[2]);
                path3 = obj.path(arrSearch[3]);
                break;
            case '#news-svg':
                path0 = obj.path(arrNews[0]).attr({class: "none-drugs-str"});
                path1 = obj.path(arrNews[1]);
                path2 = obj.path(arrNews[2]);
                break;
            case '#article-svg':
                path0 = obj.path(arrArticle[0]).attr({class: "none-stroke"});
                path1 = obj.path(arrArticle[1]);
                path2 = obj.path(arrArticle[2]);
                // path2 = obj.path(arrOld[2]);
                // path3 = obj.path(arrOld[3]);
                break;
            default:
                path0 = obj.path(arrWomen[0]).attr({class: "none-stroke"});
                path1 = obj.path(arrWomen[1]);
                path2 = obj.path(arrWomen[2]);
                console.log('Я таких значений не знаю Switch');
        }
        length1 = path1.getTotalLength();
        length2 = path2.getTotalLength();
        path1.attr({
            "stroke-dasharray": length1 + " " + length1,
            "stroke-dashoffset": length1
        }).stop().animate({"stroke-dashoffset": 0}, 1700, mina.easeinout, function () {

        });
        path2.attr({
            "stroke-dasharray": length2 + " " + length2,
            "stroke-dashoffset": length2
        }).stop().animate({"stroke-dashoffset": 0}, 1400, mina.easeinout);
        if (path3 !== 0) {
            length3 = path3.getTotalLength();
            path3.attr({
                "stroke-dasharray": length3 + " " + length3,
                "stroke-dashoffset": length3
            }).stop().animate({"stroke-dashoffset": 0}, 1500, mina.linear);
        }
        if (path4 !== 0) {
            length4 = path4.getTotalLength();

            path4.attr({
                "stroke-dasharray": length4 + " " + length4,
                "stroke-dashoffset": length4
            }).stop().animate({"stroke-dashoffset": 0}, 1400, mina.linear);
        }
        if (path5 !== 0) {
            length5 = path5.getTotalLength();

            path5.attr({
                "stroke-dasharray": length5 + " " + length5,
                "stroke-dashoffset": length5
            }).stop().animate({"stroke-dashoffset": 0}, 1400, mina.linear);
        }
    }

    function delSvgPath(obj) {
        clearTimeout(setT);
        obj.selectAll('path').remove();


    }

}
/***********************************************
 Down & Keyboard Content Help
 ***********************************************/
function downContentHelp(i) {
    var i = parseInt(i);
    var downI = $('.reproduction-down-lite.down');
    var obj = $(downI[i]);
    var wrObj = $('#wr-down-content');
    wrObj.fadeIn(800);
    obj.addClass('active');
    if (i == 3) {
        downI.removeClass('active');
    }
    if (i == 4) {
        downI.removeClass('active');
        wrObj.fadeOut(800);
    }
}
function keyboardContentHelp(i) {
    var i = parseInt(i);
    var keyboardAll = $('.keyboard-svg-2');
    var keyboardObj = $('.wr-keyboard');
    keyboardObj.fadeIn(700);
    $(keyboardAll[i]).attr("class", "keyboard-svg-2 active");
    if (i == 3) {
        $(keyboardAll).attr("class", "keyboard-svg-2");
    }
    if (i == 4) {
        $(keyboardAll).attr("class", "keyboard-svg-2");
        keyboardObj.fadeOut(700);
    }
}
// OBJ Down Help
var callForEachDown = {
    start: function (fn, args, ms) {
        var that = this, n = 0;
        setTimeout(
            function caller() {
                fn(args[n++]);
                if (n >= args.length) n = 0;
                if (that.okFlag) {
                    var setT = setTimeout(caller, ms);
                } else {
                    clearTimeout(setT);
                    fn(4);
                }
            },
            ms)
    },
    stop: function () {
        this.okFlag = false;
    },
    okFlag: true

};
//OBJ Keyboard
var callForKeyboard = {
    start: function (fn, args, ms) {
        var that = this, n = 0;
        setTimeout(
            function callerKeyboard() {
                fn(args[n++]);
                if (n >= args.length) n = 0;
                if (that.okFlag) {
                    var setcallerKeyboard = setTimeout(callerKeyboard, ms);
                } else {
                    clearTimeout(setcallerKeyboard);
                    fn(4);
                }
            },
            ms)
    },
    stop: function () {
        this.okFlag = false;
    },
    okFlag: true
};

/***********************************************
 Scroll Page
 ***********************************************/
var scrollHelpFh = {
    isRunning: false,
    scroll: window.addEventListener("scroll", function () {
        if (Response.scrollY() > 200 && !this.isRunning) {
            this.isRunning = true;
           // this.stop();
            callForEachDown.stop();
            callForKeyboard.stop();
        }
    })
};
scrollHelpFh.scroll;
/***********************************************
 Response.resize & Response.ready
 ***********************************************/
$(window).on("resize", function () {
    alignVerticalAll();

    if (Response.viewportW() < 1022) {
        alignVertical();
    } else {
        alignVertical(true);
    }
}).trigger('resize');
$(window).ready(function () {
    if (Response.viewportW() < 1022) {
        alignVertical();
    } else {
        setTimeout(function () {
            alignVertical(true);
        }, 100);
    }
});

/***********************************************
 Close Old
 ***********************************************/
$('#close-old').click(function () {
    $('#outdated').fadeOut(600);
    // setTimeout()
});
//Scroll
$(document).ready(function(){
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
});
/***********************************************
 Cookie
 ***********************************************/
(function() {
    var openclose;

    openclose = function() {
        return $(".open-close-button").click(function() {
            setTimeout(function () {
                $$cookieDisclaimer.classList.remove('is-active');
            },200);
            return $(this).toggleClass("open");

        });
    };

    jQuery(document).ready(function($) {
        return openclose();
    });

}).call(this);

var $$cookieDisclaimer = document.querySelector('.js-cookie-disclaimer');

if (!localStorage.getItem('cookieDisclaimer6')) {
    setTimeout(function () {
        $$cookieDisclaimer.classList.add('is-active');
    },4000);

}

$$cookieDisclaimer.querySelector('#coocie-ok').addEventListener('click', function () {
    localStorage.setItem('cookieDisclaimer6', true);
    $$cookieDisclaimer.classList.remove('is-active');
});