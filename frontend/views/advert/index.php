<div id="wr-cris">
    <div class="boot0 boot"></div>
    <div class="boot1 boot"></div>
    <div id="item-can"></div>

    <div class="row">
        <h1 class="christmas-tlt">Компания АКВИОН <br> желает вам процветания и удачи в Новом году!</h1>
        <img class="col-cris" src="/img/new_year/cr-2.png" alt="Новый год"><div id="days"></div>
    </div>
    <div class="row">

    </div>
    <div class="row">
        <div class="container con-img-pl">
            <div class="wr-all-pl p-r">
                <div class="wr-fon-pl">
                    <img class="full-img" src="/img/new_year/year1.jpg" alt="Новый Год Аквион">
                    <a rel="nofollow" class="venobox pl-can" data-type="youtube" data-autoplay="true"
                       href="https://youtu.be/d65J0WbndsQ"></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
$this->registerJsFile('/js/venobox-js/venobox.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/christmas/Three.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/christmas/snow.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/christmas/christmas.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerCssFile('/css/christmas.css');
?>