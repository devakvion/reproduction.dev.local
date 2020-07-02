<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\components\Helpers;
use app\models\Contact;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?></title>

    <?php $this->head() ?>
</head>
<body class="en">
<?php $this->beginBody() ?>
<!-- Container Main
================================================== -->

<!--<div id="container-full" class="m-scene">-->

    <!-- Menu Left
    ================================================== -->
 <!--   <div id="wr-menu-let">
        <ul class="menu-left">
            <li><a class="link illust-link" href="/"><i class="alena-icon0"></i>Home</a></li>
            <li><a class="link illust-link" href="/site/test"><i class="alena-icon0"></i>illstr</a></li>
            <li><a class="link apps-link  active" href="#"><i class="alena-icon1"></i>apps</a></li>
            <li><a class="link about-link" href="#"><i class="alena-icon2"></i>about</a></li>
            <li><a class="link process-link" href="#"><i class="alena-icon3"></i>process</a></li>
            <li><a class="link process-link" href="#"><i class="alena-mail"></i>email</a></li>
        </ul>
    </div>-->
    <!-- End Menu Left
    ================================================== -->
    <!-- Menu Top
    ================================================== -->
    <!--    <div id="wr-menu-top">
            <ul class="menu-top">
                <li><a class="facebook-link" href="#"></a></li>
                <li><a class="livejournal-link" href="#"></a></li>
                <li><a class="google-plus-link" href="#"></a></li>
                <li><a class="pinterest-link" href="#"></a></li>
                <li><a class="vimeo-link" href="#"></a></li>
                <li><a class="youtube-link" href="#"></a></li>
                <li><a class="be-link" href="#"></a></li>
                <li><a class="twitter-link" href="#"></a></li>
                <li><a class="instagram-link" href="#"></a></li>
                <li><a class="e-link" href="#"></a></li>
            </ul>
        </div>-->
    <!--<div id="wr-menu-top"></div>-->
    <!-- End Menu Top
    ================================================== -->

    <!-- Content Main
    ================================================== -->
    <!--<div id="content" role="main" class="scene_element scene_element--fadein">-->
        <?= $content ?>
    <!--</div>-->
    <!-- End Content Main
    ================================================== -->
    <!-- Footer
    ================================================== -->
   <!-- <footer>
        <span class="copy"> Alena <span style="font-size: 11px"> &copy;</span></span>
    </footer>-->
    <!-- End Footer
    ================================================== -->
<!--</div>-->
<!-- Footer
================================================== -->
<footer>
    <span class="copy"> Alena <span style="font-size: 11px"> &copy;</span></span>
</footer>
<!-- End Footer
================================================== -->
<!-- End Container Main
================================================== -->
<?php
/*if (!Yii::$app->user->isGuest) {
    echo "Hello!";
}; */ ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
