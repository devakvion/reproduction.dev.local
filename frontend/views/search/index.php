<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

?>
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-search">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <h1 class="BebasNeueBold header-color title-problem-header">
                        Поиск
                        <!--  SVG   -->
                         <span class="wr-svg-header">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122" class="svg-slider-category">
  <g fill="none" stroke="#2A2C35" transform="translate(-1583 -1860)">
    <g transform="translate(1584 1861)">
      <path d="M-1.98020107e-15,60 C3.04310311e-15,93.137085 26.862915,120 60,120 C93.137085,120 120,93.137085 120,60 C120,26.862915 93.137085,2.18404529e-15 60,0 C26.862915,-2.07484303e-15 -1.02795732e-14,26.862915 -1.42108547e-14,60"/>
      <path d="M22.6229508 55.5737705C22.6229508 74.3152366 37.8159109 89.5081967 56.557377 89.5081967 75.2988431 89.5081967 90.4918033 74.3152366 90.4918033 55.5737705 90.4918033 36.8323044 75.2988431 21.6393443 56.557377 21.6393443 37.8159109 21.6393443 22.6229508 36.8323044 22.6229508 55.5737705M76.7213115 81.2163934L94.0111475 100.095738"/>
    </g>
  </g>
</svg>
                         </span>
                    </h1>

                    <h3 class="sub-title-problem-header header-color-ligth">Запрашиваемые вами <br>слово, или слова,
                        которые мы нашли</h3>
                </div>
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
                                <span itemprop="item" title="Поиск">
                                    <span itemprop="name">Поиск</span>
                                    <meta itemprop="position" content="2">
                                </span>
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
<!-- Main
================================================== -->
<section>
    <div class="row">
        <div class="container container-bg-gray">
            <div id="search-section" class="site-error">
                <?php if ($dataProvider): ?>
                    <h2 class="title-article after-line">Вы искали <span
                            class="t-search">"<?= Html::encode($query) ?>"</span>, найденно <?= $totalCount ?>
                        совпадения (ие)</h2>
                    <div class="sear-txt">
                        <?php
                        Pjax::begin(['id' => 'search-pjax', 'enablePushState' => false]);

                        echo ListView::widget([
                            'dataProvider' => $dataProvider,
                            'options' => [
                                'tag' => 'div',
                                'class' => 'search-wrapper',
                                'id' => 'search-wrapper',
                            ],
                            'layout' => "{items}\n{pager}",
                            'itemView' => function ($model, $key, $index, $widget) {
                                return $this->render('_item', ['model' => $model]);
                            },
                        ]);

                        Pjax::end();
                        ?>
                    </div>
                    <?php
                    $script = <<< JS
$(function () {
    $('#search-focus').val('$query ');
});
JS;
                    $this->registerJs($script, yii\web\View::POS_READY);
                    ?>
                <?php else: ?>

                    <?php
                    $script = <<< JS
$(function () {
    $('#open-search ').addClass('active');
    $('#wr-dropdown-search').css({opacity:1, height:'auto'});
    $('#search-focus').focus();

});
JS;
                    $this->registerJs($script, yii\web\View::POS_READY);
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!--Empty Block-->
<div class="row">
    <div class="empty-block-section"></div>
</div>
<?php
$scriptSearch = <<< JS
  var svgHeader = $('.wr-svg-header svg');
    pathPrepareCssAll(svgHeader);
    setTimeout(function () {
        startAnimationSvgHeader(svgHeader);

    }, 100);
JS;
$this->registerJs($scriptSearch, yii\web\View::POS_READY);
?>
<?php
//$this->registerJsFile('/js/viewport-checker/dist/jquery.viewportchecker.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
?>
