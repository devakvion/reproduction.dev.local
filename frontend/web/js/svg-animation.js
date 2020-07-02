/***********************************************
 Animate SVG Slider
 ***********************************************/
// Animate Path SVG Slider
function animateThis(e) {
    var obj = Snap(e),
        path1 = 0,
        path2 = 0,
        path3 = 0,
        path4 = 0,
        path0 = 0,
        length1,
        length2,
        length3,
        length4;
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
        arrArticle = [
            "M0,63a63,63 0 1,0 126,0a63,63 0 1,0 -126,0",
            "M34.87 30.712c-1.98 0-3.604 2.103-3.604 4.625V93.61c0 2.555 1.625 4.624 3.605 4.624H92.54v-.03h.1c.026 0 .052 0 .076-.032.026 0 .05 0 .078-.034 1.65-.387 2.944-2.262 2.944-4.528V51.766c0-2.522-1.65-4.625-3.63-4.625h-2.994V35.338c0-2.522-1.65-4.625-3.63-4.625h-50.61zm0 1.844h50.61c1.22 0 2.21 1.228 2.21 2.78v12.58c-.026.065-.026.098 0 .162v43.01c0 2.522.533 4.203 1.267 5.336H34.87c-1.218 0-2.182-1.26-2.182-2.814V35.337c0-1.553.964-2.78 2.183-2.78zm14.85 6.112c-.357.065-.636.486-.636.937V55.03c0 .487.33.906.71.906h20.788c.356 0 .712-.42.712-.906V39.605c0-.485-.357-.937-.712-.937H49.72zm.785 1.842h19.342v13.615H50.505V40.51zm38.606 8.473h2.996c1.218 0 2.207 1.23 2.207 2.782V93.61c0 1.553-.99 2.813-2.207 2.813H91.8c-.304-.03-.633-.128-1.014-.356-.812-.518-1.675-1.616-1.675-4.98V48.983zm-39.265 14.91c-.38.03-.686.516-.66 1 .05.487.433.875.787.842h20.433c.38 0 .71-.452.71-.937 0-.486-.33-.905-.71-.905H49.845zM38.373 71.88c-.355.065-.66.55-.635 1.003.052.484.432.87.812.808h17.54c.38.032.735-.42.735-.906 0-.484-.355-.905-.736-.905H38.372zm25.763 0c-.38.063-.686.548-.635 1.003.025.484.406.87.787.808h17.538c.38.032.736-.42.736-.906 0-.484-.355-.905-.735-.905H64.136zm-25.763 7.987c-.355.066-.66.55-.635 1.002.052.486.432.873.812.807h17.54c.38.034.735-.418.735-.905 0-.484-.355-.905-.736-.905H38.372zm25.763 0c-.38.066-.686.55-.635 1.002.026.486.407.873.788.807h17.538c.38.034.736-.418.736-.905 0-.484-.356-.905-.736-.905h-17.69zm-25.763 7.988c-.355.063-.66.517-.635 1 .052.486.432.875.812.81h17.54c.38.03.735-.42.735-.905 0-.487-.355-.905-.736-.905H38.372zm25.763 0c-.38.063-.686.517-.635 1 .026.486.407.875.788.81h17.538c.38.03.736-.42.736-.905 0-.487-.356-.905-.736-.905h-17.69z"
        ];
    obj.attr({
        "opacity": 1
    });
    delSvgPath(obj);
    var setT = setTimeout(function () {
        startSvgAnimationTop(obj, e);
    }, 1300);

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
            case '#old-svg':
                path0 = obj.path(arrOld[0]).attr({class: "none-stroke"});
                path1 = obj.path(arrOld[1]);
                path2 = obj.path(arrOld[2]);
                path3 = obj.path(arrOld[3]);
                break;
            case '#article-svg':
                path0 = obj.path(arrArticle[0]).attr({class: "none-stroke"});
                path1 = obj.path(arrArticle[1]);
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
        }).stop().animate({"stroke-dashoffset": 0}, 1400, mina.easeinout, function () {

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
    }

    function delSvgPath(obj) {
        clearTimeout(setT);
        obj.selectAll('path').remove();


    }

}

$('.fotorama0').on('fotorama:show', function (e, fotorama) {

    //Animations TXT Slider
    var animationPhone = fotorama.activeFrame.$stageFrame.find(".reproduction-phone-help");
    //Helps
    /*animationPhone.addClass('active');
     animationPhone.removeClass('active');
     clearTimeout();*/
    if (fotorama.activeFrame.id == 'women-block') {
        var womenSvg = "#women-svg";
        animateThis(womenSvg);
    }
    if (fotorama.activeFrame.id == 'men-block') {
        var menSvg = "#men-svg";
        animateThis(menSvg);
        // callForKeyboard.stop();
    }
    if (fotorama.activeFrame.id == 'oldHealth-block') {
        var oldSvg = "#old-svg";
        animateThis(oldSvg);
    }
    if (fotorama.activeFrame.id == 'couples-block') {
        var couplesSvg = "#couples-svg";
        animateThis(couplesSvg);
    }

});

