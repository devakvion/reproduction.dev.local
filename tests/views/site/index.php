<?php
use yii\web\View;

/* @var $this yii\web\View */
$this->title = 'Index';
?>
<div id="container-full" class="m-scene">

    <!-- Menu Left
    ================================================== -->
    <div id="wr-menu-let">
        <ul class="menu-left">
            <li><a class="link illust-link" href="/"><i class="alena-icon0"></i>Home</a></li>
            <li><a class="link illust-link" href="/site/test"><i class="alena-icon0"></i>illstr</a></li>
            <li><a class="link apps-link  active" href="#"><i class="alena-icon1"></i>apps</a></li>
            <li><a class="link about-link" href="#"><i class="alena-icon2"></i>about</a></li>
            <li><a class="link process-link" href="#"><i class="alena-icon3"></i>process</a></li>
            <li><a class="link process-link" href="#"><i class="alena-mail"></i>email</a></li>
        </ul>
    </div>
    <div id="wr-menu-top"></div>
    <div id="content" role="main" class="scene_element scene_element--fadein">
        <!-- Header Parallax
        ================================================== -->
        <div id="header" class="parallax-container">
            <div class="parallax"><img src="/img/index-page/header/header.jpg"></div>
            <div id="title-top">
                <h3>illustration</h3>
                <i class="alena-logo"></i>
            </div>
        </div>
        <!-- End Header Parallax
        ================================================== -->
        <!-- Tag Menu
        ================================================== -->
        <div id="wr-menu-tag">
            <ul class="menu-tag">
                <li><a href="#"></a></li>
            </ul>
        </div>
        <!-- End Tag Menu
        ================================================== -->
        <div id="grid-masonry">
            <?php
            for ($i = 1; $i < 20; $i++) {
                if ($i % 2 == 0) {
                    echo '<div class="item"><a class="modal" href="/site/modal?id=' . $i . '"><img src="/img/masonry/_' . $i . '.jpg" alt=""/></a></div>';
                } else {
                    echo '<div class="item w2"><a class="modal" href="/site/modal?id=' . $i . '"><img src="/img/masonry/_' . $i . '.jpg" alt=""/></a></div>';
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- JS
================================================== -->
<?php
$js = <<<JS
titleTopHeader();
//scrollTopMenu();
$('.modal').magnificPopup({type:'ajax'});
var elem = document.querySelector('#grid-masonry');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.item',
  gutter: 0

});
msnry.layout();
JS;
$this->registerJs($js, \yii\web\View::POS_LOAD, 'index-page');
?>

