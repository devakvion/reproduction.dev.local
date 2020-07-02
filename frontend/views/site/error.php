<?php
use yii\helpers\Html;

Yii::$app->view->params['seoTableName'] = 'error';
?>
    <!-- Header bg-header-top-error
    ================================================== -->
    <header id="header-top">
        <div class="row header-row-top hed-all-bg bg-header-top-error">
            <div class="con-hd">
                <div class="left-header txt-right">
                    <div class="wr-txt-header">
                        <!--  Help Phone   -->
                        <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                        <h1 class="BebasNeueBold header-color title-problem-header">
                            Ошибка
                            <!--  SVG   -->
                         <span class="wr-svg-header">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122" class="svg-slider-category">
  <g fill="none" stroke="#363840" transform="translate(-1728 -2001)">
    <g transform="translate(1729 2002)">
      <path d="M-1.98020107e-15,60 C3.04310311e-15,93.137085 26.862915,120 60,120 C93.137085,120 120,93.137085 120,60 C120,26.862915 93.137085,2.18404529e-15 60,0 C26.862915,-2.07484303e-15 -1.02795732e-14,26.862915 -1.42108547e-14,60"/>
      <path d="M22.6229508 55.5737705C22.6229508 74.3152366 37.8159109 89.5081967 56.557377 89.5081967 75.2988431 89.5081967 90.4918033 74.3152366 90.4918033 55.5737705 90.4918033 36.8323044 75.2988431 21.6393443 56.557377 21.6393443 37.8159109 21.6393443 22.6229508 36.8323044 22.6229508 55.5737705M78.0491803 81.5901639L94.675082 98.2740984M84.4583607 47.197377C81.3147541 37.597377 73.5442623 30.092459 63.7809836 27.3206557M46.3770492 47.6557377L65.64 66.9186885M66.3757377 47.3055738L47.797377 67.2295082"/>
    </g>
  </g>
</svg>
                         </span>
                        </h1>

                        <h3>Данная страница не найдена</h3>
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
                                <span itemprop="item" title="Ошибка запроса">
                                    <span itemprop="name">Ошибка запроса</span>
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
    <!-- Main Section
    ================================================== -->
    <section>
        <div class="row">
            <div class="container bg-beige-light">
                <div class="site-error">
                    <h2 class="title-article after-line"><?= Html::encode($this->title) ?></h2> <br>
                    <div class="title-article alert-danger">
                        <?= nl2br(Html::encode($message)) ?>
                    </div>
                    <br>
                    <p>
                        К сожалению, запрашиваемая вами страница не найдена, приносим свои извинения. <br>
                        Вы можете воспользоваться формой поиска, которая находится выше, или написать <a href="/kontakty">нам</a>.
                    </p>
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