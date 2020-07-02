<?php
use yii\web\View;
?>
<div id="contact-map" class="row bg-header-top-contact">
</div>
<?php $this->registerJs("
    $('body').on('beforeSubmit', 'form#contact-form', function () {
        $('#response-wr').removeClass('success-sent').removeClass('error-sent').html('');
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: form.serialize(),
            success: function (response) {
            var responseClass;
                if (response.sent){
                    form.find('input[type=text], textarea').val('');
                    responseClass = 'success';
                } else {
                    $('#contactform-verifycode-image').click();
                    responseClass = 'error';
                }
                 $('#response-wr').addClass(responseClass + '-sent').html(response.text);
            }
        });
        return false;
    });
    var url = '//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU';
    $.getScript( url, function() {
        ymaps.ready(init);
        function init() {
            if(0 == $('#contact-map').size()) return false;
            var myMap = new ymaps.Map('contact-map', {
                center: [55.746949, 37.539481],
                zoom: 14
            });
            myMap.controls.add('zoomControl', {left: 5, top: 5});
            myPlacemark1 = new ymaps.Placemark([55.746949, 37.539481], {
                balloonContentHeader: '<i class=\"reproduction-logo_acvion\"></i> ЗАО «АКВИОН»',
                balloonContentBody: '123317, г. Москва, ул. Пресненская набережная, д. 8., стр. 1<br>МФК «Город Столиц», Северный блок, башня Москва.',
                balloonContentFooter: '8-800-200-86-86<i class=\"reproduction-phone-help\"></i>, +7 (495) 780-72-34<i class=\"reproduction-phone-help\"></i>'
            }, {
                iconImageHref: '/img/logo/logo_acvion_map.svg',
                iconImageSize: [60, 60]
            });
            myMap.geoObjects.add(myPlacemark1);
        }
    });

$('#captcha-bt').click(function(){
    $(this).fadeOut().fadeIn();
    $('#contactform-verifycode-image').click();
});

", View::POS_READY, 'contacts'); ?>

