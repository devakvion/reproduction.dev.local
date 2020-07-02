function itemHumanStart(obj, path, old, item, str) {
    var path = path;
    var obj = Snap(obj);
    var insertImg = obj.select('#point-main');
    //Woman
    if (item) {
        if (str == 'woman') {
            var group = obj.selectAll("#women-problem-gr .item-group");
        } else {
            var group = obj.selectAll("#men-problem-gr .item-group");
        }
    } else {
        var group = obj.selectAll("#menEndWomen-problem-gr .item-group");
    }
    //Old
    if (old) {
        var group = obj.selectAll("#old-problem-gr .item-group");
    }
    var allScaleItem = obj.selectAll(".item-organ");
    if (item) {
        var elementTransformScale = "s1.15 1.15";
    } else {
        var elementTransformScale = "s1.04 1.04";
    }

    //img
    var imgSelect;
    var retina = window.devicePixelRatio > 1 ? true : false;
    if (!retina) {
        if (item) {
            if (str == 'woman') {
                imgSelect = "/img/woman-header/woman.png";
            } else {
                imgSelect = "/img/man-img-problem/men.png";
            }
        } else {
            imgSelect = "/img/menWoman-img-problem/people.png";
        }
    } else {
        if (item) {
            if (str == 'woman') {
                imgSelect = "/img/woman-header/woman@2x.png";
            } else {
                imgSelect = "/img/man-img-problem/men@2x.png";
            }
        } else {
            imgSelect = "/img/menWoman-img-problem/people@2x.png";
        }
    }
    if (!retina) {
        var filterBlur = obj.filter(Snap.filter.blur(10, 10));
    } else {
        var filterBlur = obj.filter(Snap.filter.blur(12, 12));
    }
    //Woman
    if (item) {
        if (str == 'woman'){
            obj.paper.image(imgSelect, 196.6, 1.6, 245.5, 495).attr({
                "opacity": 0
            }).insertBefore(insertImg).stop().animate({opacity: 0.9}, 1000, mina.easeinout);
        }else{
            obj.paper.image(imgSelect, 177.8, 1.6, 283.1, 495).attr({
                "opacity": 0
            }).insertBefore(insertImg).stop().animate({opacity: 0.9}, 1000, mina.easeinout);
        }
    } else {
        obj.paper.image(imgSelect, 151.5, 1.6, 335.6, 495).attr({
            "opacity": 0
        }).insertBefore(insertImg).stop().animate({opacity: 0.9}, 1000, mina.easeinout);
    }
    //Animation Start
    getProblemAll(path);
    function getProblemAll(path) {
        var listOrgan = path;
        for (var key in listOrgan) {
            //Animate Organ Item Path
            for (var s in listOrgan[key]['organPath']) {
                var selectOrgan = obj.select(listOrgan[key]['insertOrgan']);
                var pathOrgan = obj.path(listOrgan[key]['organPath'][s]).prependTo(selectOrgan);
                var lengthOrgan = pathOrgan.getTotalLength();
                pathOrgan.attr({
                    // class: listOrgan[key]['category'] + "-stroke",
                    class: "human-stroke-organ",
                    "stroke-dasharray": lengthOrgan + " " + lengthOrgan,
                    "stroke-dashoffset": lengthOrgan
                }).stop().animate({"stroke-dashoffset": 0}, randomInteger(800, 1800), mina.linear);
            }

            //Animate Organ Item Main
            for (var m in listOrgan[key]['organMain']) {
                var pathOrganM = obj.path(listOrgan[key]['organMain'][m]).appendTo(selectOrgan);
                var lengthOrganM = pathOrganM.getTotalLength();

                pathOrganM.attr({
                    //class: listOrgan[key]['category'] + "-active",
                    class: "human-active-organ " + listOrgan[key]['category'],
                    "stroke-dasharray": lengthOrganM + " " + lengthOrganM,
                    "stroke-dashoffset": lengthOrganM
                }).stop().animate({"stroke-dashoffset": 0}, randomInteger(900, 1500), mina.linear);
            }

            //Animate Organ Item Circle
            for (var w in listOrgan[key]['organCircle']) {
                var pathOrganC = obj.path(listOrgan[key]['organCircle'][w]).appendTo(selectOrgan);
                var lengthOrganC = pathOrganC.getTotalLength();
                //Clone background
                pathOrganC.clone().attr({class: "human-fill-organ-bac"}).prependTo(selectOrgan);
                pathOrganC.attr({
                    class: "human-fill-organ",
                    "stroke-dasharray": lengthOrganC + " " + lengthOrganC,
                    "stroke-dashoffset": lengthOrganC
                }).stop().animate({"stroke-dashoffset": 0}, randomInteger(900, 1500), mina.linear);
            }

            //Insert
            var insertWomen = obj.select(listOrgan[key]['insert']);
            //Path
            var path = listOrgan[key]['path'];
            path = obj.path(path).prependTo(insertWomen);
            var length = path.getTotalLength();
            path.attr({
                //class: listOrgan[key]['category'] + "-stroke-item",
                class: "human-stroke-item",
                "stroke-dasharray": length + " " + length,
                "stroke-dashoffset": length
            }).stop().animate({"stroke-dashoffset": 0}, randomInteger(900, 1700), mina.linear);

            //Point
            var clonePoint = obj.circle(listOrgan[key]['circleSmall'][0], listOrgan[key]['circleSmall'][1], 0).attr({
                class: "human-item-circle"
            }).appendTo(insertWomen).stop().animate({r: listOrgan[key]['circleSmall'][2]}, 1000, mina.linear);

            //Circle wrapper Point
            /*if (listOrgan[key]['name'] == "pituitary") {
             filterBlur = obj.filter(Snap.filter.blur(7, 7));
             }*/

            clonePoint.clone().attr({
                class: "wr-item-circle",
                filter: filterBlur
            }).prependTo(insertWomen).stop().animate({
                transform: elementTransformScale,
                r: 11
            }, 1000, mina.easeinout);
        }


        var setT1 = setTimeout(function () {
            for (var i = 0; i < group.length; i++) {
                group[i].addClass('active');
            }
            allScaleItem.animate({transform: elementTransformScale}, 600, mina.linear);
        }, 2000);
    }

    //Random Fn
    function randomInteger(min, max) {
        var rand = min + Math.random() * (max - min);
        rand = Math.round(rand);
        return rand;
    }

}


