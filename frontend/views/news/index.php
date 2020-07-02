
<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-news">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                                     <h1 class="BebasNeueBold header-color title-problem-header">
                        Новости
                        <!--  SVG   -->
                         <span class="wr-svg-header">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122" class="svg-slider-category">
  <g fill="none" stroke="#2A2C35" transform="translate(-1728 -1861)">
    <g transform="translate(1729 1862)">
      <path d="M0,60 C4.05812251e-15,93.137085 26.862915,120 60,120 C93.137085,120 120,93.137085 120,60 C120,26.862915 93.137085,2.02906125e-15 60,0 C26.862915,-2.02906125e-15 4.05812251e-15,26.862915 0,60"/>
      <path d="M61.3898361,77.5140984 L26.7295082,77.5140984 C26.0360656,77.5140984 25.5737705,77.0518033 25.5737705,76.3593443 L25.5737705,44.1245902 C25.5737705,43.4321311 26.0360656,42.9698361 26.7295082,42.9698361 L61.3898361,42.9698361 C62.0822951,42.9698361 62.5445902,43.4321311 62.5445902,44.1245902 L62.5445902,76.3593443 C62.5445902,77.0527869 62.0822951,77.5140984 61.3898361,77.5140984 Z M72.0196721,43.084918 L97.8983607,43.084918 L72.0196721,43.084918 Z M72.0196721,59.0291803 L97.8983607,59.0291803 L72.0196721,59.0291803 Z M72.0196721,74.857377 L97.8983607,74.857377 L72.0196721,74.857377 Z M26.7295082,91.495082 L80.9144262,91.495082 L26.7295082,91.495082 Z M97.8983607,30.4918033 L26.7295082,30.4918033 L97.8983607,30.4918033 Z"/>
    </g>
  </g>
</svg>
                         </span>
                    </h1>

                    <h3>Последние события: <br>  исследования, акции, обновления сайта.
                    </h3>
                </div>
            </div>
            <div class="right-header">
            </div>
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
                                <span itemprop="name">Новости</span>
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
<section>
    <div class="row">
        <div class="container container-bg-gray">
            <div class="con-item-questions">

                <?php foreach ($model AS $m): ?>
                    <!--item-->
                    <div class="news-it-l">
                        <h3 class="title-article after-line"><?= $m->title ?></h3>

                        <div class="nws-item">
                            <span class="ic-nws"></span>
                            <?= $m->text ?>
                            <?php if (!empty($m->pdf)): ?>
                                <!--Если PDF-->
                                <div class="leare_fix txt-right">
                                    <a class="pdf-open" href="<?= $m->imageDir . $m->id . '/' . $m->pdf ?>" target="_blank" rel="nofollow"><img src="/img/news/pdf.png" alt="открыть pdf"></a>
                                </div>
                            <?php endif; ?>

                            <div class="footer-nws">
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
 var svgHeader = $('.wr-svg-header svg');
    pathPrepareCssAll(svgHeader);
    setTimeout(function () {
        startAnimationSvgHeader(svgHeader);

    }, 100);
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
