
<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-article">
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
                        Статьи
                        <!--  SVG   -->
                         <span class="wr-svg-header">
                             <svg id="article-svg" class="svg-slider-category" viewBox="-2 -2 126 126"
                                  xmlns="http://www.w3.org/2000/svg">
                                 <title>Статьи</title>
                             </svg>
                         </span>
                    </h1>

                    <h3>Статьи: <br> здесь нужен текст.
                    </h3>
                </div>
            </div>
            <div class="right-header">
            </div>
            <!--  Breadcrumbs   -->
            <div id="breadcrumbs-wr">
                <nav class="breadcrumbs">
                    <ol class="cd-multi-steps">
                        <li class="visited"><a href="/">Главная</a><span class="cd-multi-steps-line">|</span></li>
                        <li class="visited"><span>Статьи</span></li>
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
<section>
    <div class="row">
        <div class="container container-bg-gray">
            <div class="con-item-questions">

                <?php foreach ($model AS $m): ?>
                    <!--item-->
                    <div class="article-it-l">
                        <div class="nws-item">
                            <span class="ic-nws"></span>

                            <div class="article-wr">
                                <img class="article-img" src="<?= $m->imageDir . $m->id . '/' . $m->img_small ?>"
                                     alt="<?= $m->title ?>" align="left">

                                <h3 class="title-article after-line"><a href="/statyi/<?= $m->slug ?>"><?= $m->title ?></a></h3>

                                <a href="/statyi/<?= $m->slug ?>" class="article-lead"><?= $m->lead ?></a>

                            </div>
                            <?php if (!empty($m->pdf)): ?>
                                <!--Если PDF-->
                                <div class="cleare_fix txt-right">
                                    <a class="pdf-open" href="<?= $m->imageDir . $m->id . '/' . $m->pdf ?>"
                                       target="_blank" rel="nofollow"><img src="/img/article/pdf.png" alt="открыть pdf"></a>
                                </div>
                            <?php endif; ?>

                            <div class="cleare_fix footer-nws">
                                <span class="date-nws"><?= $m->date ?></span>
                            </div>
                        </div>
                    </div>
                    <!--End-->
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<!--Empty Block-->
<div class="row">
    <div class="empty-block-section"></div>
</div>
<?php
$script = <<< JS
$(function () {
animateThis("#article-svg");
setTimeout(function () {
 callForEachDown.start(downContentHelp, [0, 1, 2, 3], 500);

}, 800);
});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
