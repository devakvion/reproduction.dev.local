<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;

?>
<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header_contact">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <div class="phone-help-top">
                        <span class="name-phone">телефон горячей линии</span> <br>
                            <span class="phone-help-top-item">8-800-200-86-86 <i
                                    class="reproduction-phone-help"></i></span>
                    </div>
                    <!--  Down Content Help   -->
                    <div id="wr-down-content">
                        <i class="reproduction-down-lite down"></i>
                        <i class="reproduction-down-lite down"></i>
                        <i class="reproduction-down-lite down"></i>
                    </div>
                    <h1 class="BebasNeueBold header-color title-problem-header">
                        Контакты
                        <!--  SVG   -->
                         <span class="wr-svg-header">
                             <svg id="contact-svg" class="svg-slider-category" viewBox="-2 -2 127 127"
                                  xmlns="http://www.w3.org/2000/svg">
                                 <title>contact</title>
                             </svg>
                         </span>
                    </h1>
                    <h3>Обратная связь</h3>
                </div>
            </div>
            <!--  Breadcrumbs   -->
            <div id="breadcrumbs-wr">
                <nav class="breadcrumbs">
                    <ol class="cd-multi-steps">
                        <li class="visited"><a href="/">Главная</a><span class="cd-multi-steps-line">|</span></li>
                        <li class="visited">Контакты</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--Empty Block-->
<div class="row">
    <div class="empty-block-section"></div>
</div>
<!-- Main Section
================================================== -->
<section id="main-article">
    <div class="row">
        <div class="container container-bg-gray">
            <div class="container-it">
            <div class="right-section">
                <div class="position-relative">
                    <!-->
                    <article>
                        <h3 class="title-article after-line">ЗАО «АКВИОН»</h3>
                        <p>Если у вас есть вопросы, позвоните на нашу горячую линию или напишите письмо. Мы ответим на ваш вопрос в течение 3 дней.</p>
                        <p class="ph-con-f">
                            <span class="t-num-phone">телефон горячей линии</span> <br>
                            <span class="num-phone">8-800-200-86-86</span><i class="reproduction-phone-help"></i><br>
                            <span>с 9-00 до 18-00, в будни, звонок по России бесплатный)</span>
                        </p>
                        <address>
                            123317, г. Москва, ул. Пресненская набережная, д. 8., стр. 1<br>
                            МФК «Город Столиц», Северный блок, башня Москва.<br><br>
                        </address>
                        <p class="p-contact">
                            <i class="reproduction-email"></i> mail@akvion.ru<br>
                            <i class="reproduction-phone-help"></i> +7 (495) 780-72-34<br>
                        </p>
                    </article>
                </div>
            </div>
            <div class="left-section controls">
                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'enableClientValidation' => false,]); ?>

                <?= $form->field($model, 'name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('name')]])->label(false) ?>

                <?= $form->field($model, 'email', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('email')]])->label(false) ?>

                <?/*= $form->field($model, 'subject')->hiddenInput()->label(false) */?>

                <?= $form->field($model, 'body', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('body')]])->label(false)->textArea(['rows' => 6])->label(false) ?>

                <?= $form->field($model, 'verifyCode')->label(false)->widget(\yii\captcha\Captcha::className(),
                    [
                       // 'imageOptions' => ['height' => '40px', 'width' => '60px'],
                        'options' => ['placeholder' => $model->getAttributeLabel('verifyCode')],
                        'template' => '<div class="cap-mod">{image}</div><div class="reset-cap"><img id="captcha-bt" src="../img/captcha_bt.png"></div>{input}<p class="n-cap-in">* буквы не чувствительны к регистру</p> '
                    ]) ?>

                <div class="form-group txt-center">
                    <?= Html::submitButton('Отправить', ['class' => 'btn-contact', 'name' => 'contact-button']) ?>
                </div>
                <div class="form-group" id="response-wr"></div>
                <?php ActiveForm::end(); ?>
            </div>
            </div>
        </div>
    </div>
</section>
<!--Empty Block-->
<div class="row">
    <div class="empty-block-section"></div>
</div>
<!-- Map
================================================== -->
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
<?php
$script = <<< JS
$(function () {
animateThis("#contact-svg");
setTimeout(function () {
 callForEachDown.start(downContentHelp, [0, 1, 2, 3], 500);

}, 800);
});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
