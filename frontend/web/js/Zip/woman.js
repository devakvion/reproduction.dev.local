$(document).ready(function () {
    function womanGetView() {
// init controller
        var controller = new ScrollMagic.Controller();
// build scene
        var scene = new ScrollMagic.Scene({triggerElement: "#main-article", triggerHook: 0.16})
            .setPin("#pin1")
            .setClassToggle("#pin1", "active")
            // .addIndicators({name: "1 (duration:" + getDurationHeader() + " )"}) // add indicators (requires plugin)
            .addTo(controller);

        // get the current duration value
        var duration = scene.duration();

// set a new duration
        scene.duration(500);

// use a function to automatically adjust the duration to the window height.
        var durationValueCache;

        function getDuration() {
            return durationValueCache;
        }

        function updateDuration(e) {
            durationValueCache = $('#wr-col-article').height() - $('#pin1').height();
        }

        $(window).on("resize", updateDuration); // update the duration when the window size changes
        $(window).triggerHandler("resize"); // set to initial value
        scene.duration(getDuration); // supply duration method


        function getDurationHeader() {
            var h = $('#wr-col-article').height() - $('#pin1').height();
            return h;
        }

    }

    womanGetView();

    /***********************************************
     Resize
     ***********************************************/
    $(window).on("resize", function () {

    }).trigger('resize');

});