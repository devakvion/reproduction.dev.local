<?php
/* @var $this yii\web\View */
$this->title = 'About';
use frontend\assets\IndexAsset;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\widgets\AjaxSubmitButton;
use frontend\components\Helpers;

IndexAsset::register($this);
?>
<!-- Menu Aside
================================================== -->
<aside id="top-menu-index" role="complementary">
    <div class="container">
        <div class="aside-menu vertical-center">
            <a class="btn small" href="#proeleven">PROELEVEN</a>
            <a class="btn small" href="#ourteam"><?= Yii::t('app', 'Our Team') ?></a>
            <a class="btn small" href="#contacts"><?= Yii::t('app', 'Contacts') ?></a>
            <a class="btn small" href="#partners"><?= Yii::t('app', 'Partners') ?></a>
        </div>
    </div>
</aside>
<!-- End Menu Aside
================================================== -->
<!-- Header Title
================================================== -->
<header class="clients-page-header margin-header"
        style="background-image: url(<?= $header->imageDir . $header->img ?>)">
</header>
<!-- End Header
================================================== -->
<!-- Block About Title
================================================== -->
<section id="proeleven" class="section-skew bg-site-grey">
    <div class="container container-block-1">
        <div class="breadcrumb-wr">
            <p class="article-breadcrumb color-navy-blue"><span
                    class="circular-breadcrumb"></span><?= Yii::t('app', 'about us') ?></p>
        </div>
        <div class="divider"></div>
        <h3 class="article-title color-navy-blue">ProEleven</h3>

        <p class="article-description color-navy-blue"><?= @$section['pro-eleven'] ?></p>

        <div class="arrow-next">
            <i class="flaticon-expand22"></i>
        </div>
    </div>
</section>
<!-- End Block About Title
================================================== -->
<!-- List About
================================================== -->
<article class="row">
    <div class="container container-block-1 margin-top-about">
        <div class="about-me-clients-list">

            <!--Who are we?-->
            <div class="about-me-clients-item">
                <div class="title-biography">
                    <h4><?= Yii::t('app', 'Who are we') ?>?</h4>
                </div>
                <div class="biography-has-column">
                    <p><?= nl2br($about->{'who_' . Yii::$app->language}) ?></p>
                </div>
            </div>
            <!--End-->
            <!--Mission & values-->
            <div class="about-me-clients-item">
                <div class="title-biography title-about">
                    <h4><?= Yii::t('app', 'Mission & values') ?></h4>
                </div>
                <div class="biography-has-column">
                    <p><?= nl2br($about->{'mission_' . Yii::$app->language}) ?></p>
                </div>
            </div>
            <!--End-->
        </div>
    </div>
</article>
<!-- End List About
================================================== -->
<!-- Block Our Team Title
================================================== -->
<section id="ourteam" class="section-skew bg-site-grey">
    <div class="container container-block-1">
        <div class="breadcrumb-wr">
            <p class="article-breadcrumb color-navy-blue"><span
                    class="circular-breadcrumb"></span><?= Yii::t('app', 'about us') ?></p>
        </div>
        <div class="divider"></div>
        <h3 class="article-title color-navy-blue"><?= Yii::t('app', 'Our Team') ?></h3>

        <p class="article-description color-navy-blue"><?= @$section['our-team'] ?></p>

        <div class="arrow-next">
            <i class="flaticon-expand22"></i>
        </div>
    </div>
</section>
<!-- End Block Our Team Title
================================================== -->

<!-- List Our Team
================================================== -->
<div class="row">
    <div class="container margin-top-team">
        <div class="container-img">
            <?php foreach ($staff AS $s): ?>
                <div class="item-card">
                    <img src="<?= $s->imageDir . $s->img ?>" alt="<?= $s->name ?>"/>

                    <div class="no-link">
                        <div class="wr-profession ">
                            <span class="name-profession"><?= $s->name ?></span>
                            <span class="profession"><?= $s->{'role_' . Yii::$app->language} ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End List Our Team
================================================== -->
<!-- Contact Title
================================================== -->
<section id="contacts" class="section-skew bg-site-grey">
    <div class="container container-block-1">
        <div class="breadcrumb-wr">
            <p class="article-breadcrumb color-navy-blue"><span
                    class="circular-breadcrumb"></span><?= Yii::t('app', 'about us') ?></p>
        </div>
        <div class="divider"></div>
        <h3 class="article-title color-navy-blue"><?= Yii::t('app', 'Contact us') ?></h3>

        <p class="article-description color-navy-blue"><?= @$section['contacts'] ?></p>

        <div class="arrow-next">
            <i class="flaticon-expand22"></i>
        </div>
    </div>
</section>
<!-- End Contact Title
================================================== -->
<!-- Contact Form
================================================== -->
<!--Proeleven-->
<div id="proeleven-txt" class="row">
    <div class="container container-block-1 margin-top-skew">
        <div class="wr-small-teams">
            <div class="wr-list-teams">
                <div class="country-teams">
                    <p>Proeleven</p>
                </div>
                <div class="country-teams-list">
                    <div class="columns about-col">
                        <ul>
                            <?= Helpers::nl2li($contacts->{'left_' . Yii::$app->language}) ?>
                        </ul>
                        <ul>
                            <?= Helpers::nl2li($contacts->{'right_' . Yii::$app->language}) ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact Item-->
<div class="row">
    <div class="container container-block-1">
        <div class="row  contact-top">
            <?php $form = ActiveForm::begin([
                'id' => 'contact-form',
            ]); ?>
            <div class="left-contact">
                <?= $form->field($model, 'name')->textInput(['class' => 'floatLabel']) ?>
                <?= $form->field($model, 'email')->textInput(['class' => 'floatLabel']) ?>
            </div>
            <div class="right-contact">
                <?= $form->field($model, 'body')->textArea(['class' => 'floatLabel']) ?>
            </div>
            <div class="row"></div>
            <div class="form-group-btn txt-center">
                <?php AjaxSubmitButton::begin([
                    'label' => Yii::t('app', 'Send'),
                    'ajaxOptions' => [
                        'type' => 'POST',
                        'url' => 'about/index',
                        /*'cache' => false,*/
                        'success' => new \yii\web\JsExpression('function(data){ showResponse(data); }'),
                    ],
                    'options' => ['class' => 'btn', 'type' => 'submit'],
                ]);
                AjaxSubmitButton::end();
                ?>
            </div>
            <?php ActiveForm::end(); ?>
            <div id="output"><span></span></div>
        </div>
    </div>
</div>
<!-- End Contact Form
================================================== -->
<!-- Map Google
================================================== -->
<div class="wr-map">
    <div id="map"></div>
</div>
<!-- End Map Google
================================================== -->
<!-- Partners
================================================== -->
<section id="partners">
    <div class="row">
        <div class="container">
            <div class="partners-block bg-site-grey">
                <?php foreach ($partners AS $p): ?>
                    <div class="partners-block-item">
                        <p><?= Yii::t('app', 'partner') ?></p>

                        <div class="divider"></div>
                        <h3><?= $p->name ?></h3>
                        <a href="<?= $p->link ?>" target="_blank" class="btn">visit website</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Partners
================================================== -->
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var myLatlng = new google.maps.LatLng(38.671270, -9.169748);
        var mapOptions = {
            zoom: 17,
            center: myLatlng,
            disableDefaultUI: true,
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
        var image = '/img/interface/map.png';
        var myLatLng = new google.maps.LatLng(38.671270, -9.169748);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'ProEleven',
            icon: image
        });
    }
</script>
<?php $this->registerJsFile('@web/js/scroll.js', ['depends' => 'yii\web\JqueryAsset', 'position' => $this::POS_END], 'scroll'); ?>
<?php $this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyAvMWJF6RalZUflZbaqVg3UB8MZtnGfiEQ&sensor=false', ['position' => $this::POS_HEAD], 'google-map'); ?>


