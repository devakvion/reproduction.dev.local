//var checkedVisitor = false;
$(document).ready(function () {
    var checkItem = $('#consent-visitor input');
    var inst = $('[data-remodal-id=modal-visitor]').remodal();
    var inst2 = $('[data-remodal-id=modal]').remodal();
    $(document).on("click", '.remodal-cancel-in-l', function (e) {
        inst.close();
        checkItem.removeAttr("checked");
        //checkItem.removeClass('active');
    });
    $(document).on("click", '.remodal-confirm-in-r', function (e) {
        inst.close();
        checkItem.removeAttr("checked");
        checkItem.attr("checked","checked");
       // checkItem.addClass('active');
        checkItem.trigger('click');
        inst2.open();
    });
});
