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
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <h1 class="BebasNeueBold header-color title-problem-header">
                        Контакты
                        <!--  SVG   -->
                        <span class="wr-svg-header">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122" class="svg-slider-category">
  <g fill="none" stroke="#313B56" transform="translate(-2339 -2024)">
    <g transform="translate(2340 2025)">
      <path d="M0,60 C4.05812251e-15,93.137085 26.862915,120 60,120 C93.137085,120 120,93.137085 120,60 C120,26.862915 93.137085,2.02906125e-15 60,0 C26.862915,-2.02906125e-15 4.05812251e-15,26.862915 0,60"/>
      <path d="M29.9645902,33.0836066 C29.9645902,28.942623 33.3344262,25.5737705 37.4744262,25.5737705 L83.5495082,25.5737705 C87.6904918,25.5737705 91.0593443,28.9436066 91.0593443,33.0836066 L91.0593443,90.1101639 C91.0593443,94.2511475 87.6895082,97.62 83.5495082,97.62 L37.4754098,97.62 C33.3344262,97.62 29.9645902,94.2501639 29.9645902,90.1101639 L29.9645902,33.0836066 Z M35.2859016,42.1908197 L22.6406557,42.1908197 L35.2859016,42.1908197 Z M35.2868852,54.7868852 L22.6396721,54.7868852 L35.2868852,54.7868852 Z M35.2868852,68.3704918 L22.6396721,68.3704918 L35.2868852,68.3704918 Z M22.6396721,81.0059016 L35.2868852,81.0059016 L22.6396721,81.0059016 Z M44.284918,77.8878689 C44.3567213,78.3796721 44.7796721,78.7436066 45.2763934,78.7436066 L77.2672131,78.7436066 C77.7639344,78.7436066 78.1859016,78.3796721 78.2586885,77.8878689 C78.3078689,77.5436066 79.4311475,69.3777049 75.1839344,64.4714754 C73.1547541,62.127541 70.2678689,60.9403279 66.604918,60.9403279 C66.3393443,60.9403279 66.1160656,61.0701639 65.9331148,61.2491803 L65.9085246,61.222623 C65.8908197,61.2403279 64.1380328,62.8947541 61.2757377,62.8947541 C58.4134426,62.8947541 56.6586885,61.2403279 56.644918,61.2265574 L56.6193443,61.2531148 C56.4363934,61.0721311 56.2111475,60.9383607 55.9445902,60.9383607 C52.2816393,60.9383607 49.3937705,62.1285246 47.3655738,64.4714754 C43.1163934,69.3796721 44.2377049,77.5436066 44.2868852,77.8878689 L44.284918,77.8878689 Z M61.2718033,64.8944262 C62.4501639,64.8944262 63.4593443,64.6681967 64.3170492,64.3701639 L61.2708197,70.6790164 L58.2236066,64.3691803 C59.0822951,64.6691803 60.092459,64.8954098 61.2708197,64.8954098 L61.2718033,64.8944262 Z M70.6239344,49.9239344 C70.6239344,44.7668852 66.4298361,40.5727869 61.2737705,40.5727869 C56.1177049,40.5727869 51.9196721,44.7668852 51.9196721,49.9229508 C51.9196721,55.08 56.1177049,59.2770492 61.2737705,59.2770492 C66.4298361,59.2770492 70.624918,55.08 70.624918,49.9229508 L70.6239344,49.9239344 Z"/>
    </g>
  </g>
</svg>
                         </span>
                    </h1>
                    <h3>Обратная связь</h3>
                </div>
            </div>
            <?= yii\base\View::render('@frontend/views/site/share'); ?>
            <!--  Breadcrumbs   -->
            <div id="breadcrumbs-wr">
                <nav class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <ol class="cd-multi-steps">
                        <li class="visited" itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                            <a href="/" itemprop="item" title="Главная">
                                <span itemprop="name">Главная</span>
                                <meta itemprop="position" content="1">
                            </a>
                            <span class="cd-multi-steps-line">|</span>
                        </li>

                        <li class="current" itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                                <span itemprop="name">Контакты</span>
                                <meta itemprop="position" content="2">
                        </li>
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
                        <div itemscope itemtype="http://schema.org/Organization" itemprop="organization">
                            <h3 class="title-article after-line" itemprop="name">АО «АКВИОН»</h3>

                            <p>Если у вас есть вопросы, позвоните на нашу горячую линию или напишите письмо.</p>

                            <p class="ph-con-f">
                                <span class="t-num-phone">телефон горячей линии</span> <br>
                                <span class="num-phone" itemprop="telephone"><a href="tel:88002008686"
                                                                                style="text-decoration: none;color: #353845">8-800-200-86-86</a></span><i
                                        class="reproduction-phone-help"></i><br>
                                <span>с 9-00 до 18-00, в будни, звонок по России бесплатный</span>
                            </p>
                            <address>
                                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                    <span itemprop="postalCode">123317</span>, <span itemprop="addressLocality">г. Москва</span>,
                                    <span itemprop="streetAddress">ул. Пресненская набережная, д. 8., стр. 1</span><br>
                                    МФК «Город Столиц», Северный блок, башня Москва.<br><br>
                                </div>
                            </address>
                            <p class="p-contact">
                                <i class="reproduction-phone-help"></i> <span itemprop="telephone"><a
                                            style="text-decoration: none;color: #353845" href="tel:+74957807234">+7 (495) 780-72-34</a></span><br>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="left-section controls">
                    <p class="note-form-top">Поля, отмеченные звездочкой <span class="req-sp"> * </span>,
                        обязательны для
                        заполнения.</p>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'enableClientValidation' => false,]); ?>

                    <?= $form->field($model, 'name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('name')]])->label(false) ?>

                    <?= $form->field($model, 'email', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('email')]])->label(false) ?>

                    <? /*= $form->field($model, 'subject')->hiddenInput()->label(false) */ ?>

                    <?= $form->field($model, 'body', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('body')]])->label(false)->textArea(['rows' => 6])->label(false) ?>

                    <?= $form->field($model, 'compliance', ['template' => "<div id=\"consent-visitor\" class=\"checkbox\">\n{input}\n<span></span>\n<a class=\"bt-pos-vis\" data-remodal-target=\"modal-visitor\">Согласие на обработку персональных данных <i>*</i></a>\n{hint}\n</div>"])->input('checkbox') ?>

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
<!--СОГЛАСИЕ  посетителя сайта на обработку персональных данных-->
<?= yii\base\View::render('@frontend/views/compliance/index'); ?>

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
                balloonContentHeader: 'ЗАО «АКВИОН»',
                balloonContentBody: '123317, г. Москва, ул. Пресненская набережная, д. 8., стр. 1<br>МФК «Город Столиц», Северный блок, башня Москва.',
                balloonContentFooter: '8-800-200-86-86&emsp;<i class=\"reproduction-phone-help\"> </i>  +7 (495) 780-72-34&emsp;<i class=\"reproduction-phone-help\"></i>'
            }, {
                iconImageHref: '/img/logo/logo-map.png',
                iconImageSize: [50, 70]
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
  var svgHeader = $('.wr-svg-header svg');
    pathPrepareCssAll(svgHeader);
    setTimeout(function () {
        startAnimationSvgHeader(svgHeader);

    }, 100);
JS;
$this->registerCssFile('/css/modal.css');
$this->registerJs($script, yii\web\View::POS_READY);
$this->registerJsFile('/js/Remodal-master/dist/remodal.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/visitor.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
?>
