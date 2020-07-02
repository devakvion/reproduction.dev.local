<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-drugs">
        <div class="con-hd">
            <div class="left-header txt-right dr-heder-ch">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <!--  Down Content Help   -->
                    <div id="wr-down-content">
                        <i class="reproduction-down-lite down"></i>
                        <i class="reproduction-down-lite down"></i>
                        <i class="reproduction-down-lite down"></i>
                    </div>
                    <h1 class="BebasNeueBold header-color title-problem-header">
                        МЕНСЕ
                        <!--  SVG   -->
                        <span class="wr-svg-header">
                        <svg id="drugs-svg" class="svg-slider-category" viewBox="-2 -2 128 128"
                             xmlns="http://www.w3.org/2000/svg">
                        </svg>
                            </span>
                        <!--R-->
                        <span id="svg-r" class="translate3d">
                            <svg viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.3 5.1c.1 0 .2-.1.3-.2.3-.3.5-.7.5-1 0-.4-.2-.8-.5-1.1-.3-.2-.7-.3-1.1-.3H2.7c-.1 0-.1 0-.1.1v3.9c0 .1 0 .1.1.1h.8c.1 0 .1 0 .1-.1V5.3h.6l.6 1.2c0 .1.1.1.2.1h.9c.1 0 .1-.1.1-.2l-.7-1.3zm-.6-.8c-.1.1-.2.1-.4.1h-.7v-1h.8c.1 0 .3 0 .4.1.1.1.2.2.2.4-.1.2-.2.3-.3.4zM4.2.5C1.9.5.1 2.4.1 4.6.1 6.8 2 8.7 4.2 8.7c2.3 0 4.1-1.9 4.1-4.1C8.3 2.4 6.4.5 4.2.5zm0 7.6C2.3 8.1.7 6.5.7 4.6s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z"
                                    fill-rule="evenodd"/>
                            </svg>
                    </h1>
                    <h3>Негормональная <br>
                        поддержка в период менопаузы
                    </h3>
                    <div class="view-sm">
                        <a id="txt-apteka_ru" href="http://apteka.ru/moskva/catalog/mense-5-0-n40-kaps-_56b257a4ef757/"
                           class="btn btn-slider btn-apteka_ru" target="_blank" rel="nofollow">
                            купить на аптека.ру
                        </a>
                        <br>
                        <a id="video-instruction" href="https://www.youtube.com/watch?v=bXtZTnQMX2U"
                           class="btn btn-slider btn-apteka_ru" target="_blank" rel="nofollow">
                            Видеоинструкция
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-header vertical-center txt-center view-sm">
                <img class="full-img view-desc-img" src="/img/drugs/drugs-bg/mense-bg.jpg" alt="Менсе">
            </div>
            <!--  Breadcrumbs   -->
            <div id="breadcrumbs-wr">
                <nav class="breadcrumbs">
                    <ol class="cd-multi-steps">
                        <li class="visited"><a href="/">Главная</a><span class="cd-multi-steps-line">|</span></li>
                        <li class="visited"><span>Наши продукты</span> -</li>
                        <li class="current"><span><?= $model->title ?></span></li>
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
<!-- img
================================================== -->
<div class="row view-mob-img block-animate">
    <div class="con-pr-em txt-center">
        <img class="full-img img-top-mob" src="/img/drugs/drugs-item/mense-index-big.jpg" alt="Менсе">
    </div>
    <div class="bt-wr-apteka_ru txt-center">
        <a href="http://apteka.ru/moskva/catalog/mense-5-0-n40-kaps-_56b257a4ef757/"
           class="btn btn-slider btn-apteka_ru hidden" target="_blank" rel="nofollow">
            купить на аптека.ру
        </a>
        <a id="video-instruction" href="https://www.youtube.com/watch?v=bXtZTnQMX2U"
           class="btn btn-slider btn-apteka_ru" target="_blank" rel="nofollow">
            Видеоинструкция
        </a>
    </div>
</div>
<!-- Main Section Менсе
================================================== -->
<div class="row block-animate">
    <div class="con-hd bl-pr-it bg-beige-light">
        <div class="con-pr-em">
            <div class="left-article min_height p-pr-r" data-mh="group-im-pr">
                <div class="align-vertical">
                    <h2 class="title-section after-line h-pr-t">
                        <?= $content[0]->title ?>
                        <span class="item-number-article">
                                <strong class="number-item"><i class="reproduction-quotes"></i></strong>
                                <span class="vertical-line"></span>
                            </span>
                    </h2>
                    <?= $content[0]->description ?>
                    <a class="next-mense" href="http://mense.ru/" target="_blank">Узнать подробнее о Менсе на сайте
                        www.mense.ru
                        <span>
                        <svg viewBox="0 0 40 18" xmlns="http://www.w3.org/2000/svg"><title>
                                arrow-r</title>
                            <g fill-rule="evenodd">
                                <path d="M0 7.768h37.652v2.16H0z"/>
                                <path d="M30.478 17.71L29 16.13l7.826-7.275L29 1.58 30.478 0 40 8.855z"/>
                            </g>
                        </svg>
                    </span></a>
                </div>
            </div>
            <div class="right-article p-pr-l">
                <div class="bg-53 m-img-bg" data-mh="group-im-pr"></div>
            </div>
        </div>
    </div>
</div>
<!-- Special Block
================================================== -->
<div class="row block-animate">
    <div class="con-hd">
        <div class="special-article">
            <div class="wr-special-article">
                <h5 class="after-line"><?= $content[1]->title ?></h5> <br>
                <?= $content[1]->description ?>

                <div class="wr-i-info">
                    <i class="reproduction-info-section"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row block-animate">
    <div class="con-hd bl-pr-it bg-beige-light">
        <div class="con-pr-em">
            <div class="columh-block">
                <div class="not-col dontsplit">
                    <h3 class="title-article after-line"><?= $content[2]->title ?></h3>
                    <?= $content[2]->description ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!--Empty Block-->
<div class="row">
    <div class="empty-block-section"></div>
</div>
<div class="row block-animate">
    <div class="con-hd bl-pr-it bg-beige-light">
        <div class="con-pr-em">
            <div class="columh-block">
                <h3 class="title-article after-line"><?= $content[3]->title ?></h3>
                <br>
                <?= $content[3]->description ?>

            </div>
        </div>
    </div>
</div>
<!-- Special Block
================================================== -->
<div class="row block-animate">
    <div class="con-hd">
        <div class="special-article">
            <div class="wr-special-article">
                <h5 class="after-line"><?= $content[4]->title ?></h5> <br>
                <?= $content[4]->description ?>

                <div class="wr-i-info">
                    <i class="reproduction-info-section"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$script = <<< JS
$(function () {
animateThis("#drugs-svg");
    var fotoramaDiv = $('.fotorama').fotorama();
    var fotorama = fotoramaDiv.data('fotorama');
    $('.video-play').click(function(){
    if(!$(this).hasClass('active')){
    fotorama.playVideo();
    $(this).addClass('active');
    }else{
    fotorama.stopVideo();
    $(this).removeClass('active');
    }
    });

});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
<?php if (Yii::$app->params['browserOld9']) {
    $scriptColumn = <<< JS
$('.columh-block').columnize({width: 500});
JS;
    $this->registerJs($scriptColumn, yii\web\View::POS_READY);
}
?>
