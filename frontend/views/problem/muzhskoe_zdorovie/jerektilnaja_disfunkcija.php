<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-man">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>

                    <div class="p-r-in-bl">
                    <h1 class="BebasNeueBold header-color title-problem-header">Эректильная дисфункция – <br> причины и лечение
                    </h1>
                        <!--  SVG   -->
                                <span class="wr-svg-header">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122" class="svg-slider-category">
  <g fill="none" stroke="#2A2C35" transform="translate(-2029 -1723)">
    <g transform="translate(2030 1724)">
      <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
      <path d="M53.816 94.892C68.202 94.892 79.863 83.232 79.863 68.846 79.863 54.461 68.203 42.799 53.816 42.799 39.43 42.799 27.769 54.459 27.769 68.845 27.769 83.23 39.429 94.891 53.815 94.891L53.816 94.892zM72.036 50.627L91.328 31.332M79.538 31.332L91.328 31.332 91.328 43.124"/>
    </g>
  </g>
</svg>
                                </span>
                    </div>
                    <h3>Мужское здоровье</h3>
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
                                <span itemprop="name"><?= $category->title .' - '. $problem->title ?></span>
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
        <div class="container-pr">
            <div class="col-1 view-des">
                <!-- Drugs List
                ================================================== -->
                <div id="pin1" class="list-drugs-article">
                    <!--  Сперотон   -->
                    <figure class="drugs-article" data-name-drugs="Сперотон">
                        <img class="full-img-drugs" src="/img/drugs/drugs-index/speroton-index-small.jpg"
                             alt="Сперотон">
                        <figcaption>
                            <a href="/nashi_produkty/speroton">
                                     <span class="drugs-name-transition">
                                    Сперотон
                                         </span>
                            </a>
                        </figcaption>
                    </figure>
                    <!--  Прегнотон  -->
                    <figure class="drugs-article" data-name-drugs="Прегнотон">
                        <img class="full-img-drugs" src="/img/drugs/drugs-index/pregnoton-index-small.jpg"
                             alt="Прегнотон">
                        <figcaption>
                            <a href="/nashi_produkty/pregnoton">
                                     <span class="drugs-name-transition">
                                    Прегнотон
                                         </span>
                            </a>
                        </figcaption>
                    </figure>
                    <!--  Прегнотон Мама -->
                    <figure class="drugs-article" data-name-drugs="Прегнотон Мама">
                        <img class="full-img-drugs" src="/img/drugs/drugs-index/pregnoton_mama-sm.min.png"
                             alt="Прегнотон">
                        <figcaption>
                            <a href="/nashi_produkty/pregnoton_mama">
                                     <span class="drugs-name-transition">
                                    Прегнотон Мама
                                         </span>
                            </a>
                        </figcaption>
                    </figure>
                    <!--  Менсе   -->
                    <figure class="drugs-article" data-name-drugs="Менсе">
                        <img class="full-img-drugs" src="/img/drugs/drugs-index/mense-index-small.jpg"
                             alt="Менсе">
                        <figcaption>
                            <a href="/nashi_produkty/mence">
                                     <span class="drugs-name-transition">
                                    Менсе
                                         </span>
                            </a>
                        </figcaption>
                    </figure>
                    <!--  Синергин   -->
                    <figure class="drugs-article active" data-name-drugs="Синергин">
                        <img class="full-img-drugs" src="/img/drugs/drugs-index/sinergin-index-small.jpg"
                             alt="Синергин">
                        <figcaption>
                            <a href="/nashi_produkty/sinergin">
                                     <span class="drugs-name-transition">
                                    Синергин
                                         </span>
                            </a>
                        </figcaption>
                    </figure>
                    <!--  Цисталин   -->
                    <figure class="drugs-article" data-name-drugs="Цистениум">
                        <img class="full-img-drugs" src="/img/drugs/drugs-index/cystenium-index-small.jpg"
                             alt="Цистениум">
                        <figcaption>
                            <a href="/nashi_produkty/cystenium">
                                     <span class="drugs-name-transition">
                                    Цистениум
                                         </span>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- TXT Эректильная дисфункция <br> (нарушения эрекции) – причины и лечен
            ================================================== -->
            <div id="wr-col-article" class="col-2 pad-col2">
                <div class="row block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="left-article p-pr-r">
                            <div class="txt-left min_height" data-mh="group-im-pr">
                                <div class="align-vertical">
                                    <h2 class="title-section after-line h-pr-t">
                                        <?= $content[0]->title ?>
                            <span class="item-number-article">
                                <strong class="number-item"><i class="reproduction-quotes"></i></strong>
                                <span class="vertical-line"></span>
                            </span>
                                    </h2>
                                    <!--  Article   -->
                                    <?= $content[0]->description ?>

                                </div>
                            </div>
                        </div>
                        <div class="right-article p-pr-l">
                            <div class="bg-45 m-img-bg" data-mh="group-im-pr"></div>
                        </div>
                    </div>
                </div>
                <!-- Special Block
                 ================================================== -->
                <div class="row block-animate">
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
                <!--  Section #2   -->
                <div class="row  block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="column-svg">
                            <div class="wr-svg-article">
                                <img class="full-img" src="/img/index-img/empty.min.jpg" alt="empty">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 500" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <filter id="a" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="translate(-1577 -574)">
                                        <g transform="translate(1577 574)">
                                            <path fill="#F7F7F7" d="M0 0H630V500H0z"/>
                                            <image xlink:href="/img/index-img/men@2x.min.png" width="286.002" height="500" x="172" y="1"/>
                                            <g class="m-end-w" transform="translate(24 133)">
                                                <g class="m-org  Половой  член" transform="translate(281 168)">
                                                    <g transform="translate(0 41)">
                                                        <path stroke="#606D88" d="M10 74.2773437L179.074219 0.944 256.445314 0.944"/>
                                                        <circle cx="8.285" cy="75.341" r="8" fill="#065BB9" class="blur" filter="url(#a)" opacity=".695"/>
                                                        <circle cx="10.285" cy="74.341" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(210)">
                                                        <g class="gr-m">
                                                            <circle cx="45.667" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <path stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" d="M56.895,22.371 C56.895,26.057 51.838,29.057 45.667,29.057 C39.495,29.057 34.438,26.057 34.438,22.371 C34.438,18.686 39.495,17.229 45.667,17.229 C51.838,17.229 56.895,18.686 56.895,22.371 L56.895,22.371 Z"/>
                                                            <path stroke="#5F98D7" stroke-width="1.5" d="M45.667 81.771L45.667 46.457C45.667 34.8 54.581 34.2 55.695 34.886 57.667 36.086 56.638 37.8 55.781 38.914 54.924 40.029 52.952 41.4 52.952 44.743L52.952 67.029C52.952 68.229 54.067 67.029 55.095 69.343 56.038 71.657 53.295 79.371 50.381 80.743 48.067 81.857 45.667 81.771 45.667 81.771L45.667 81.771zM45.667 81.771L45.667 46.457C45.667 34.8 36.752 34.2 35.638 34.886 33.667 36.086 34.695 37.8 35.552 38.914 36.41 40.029 38.381 41.4 38.381 44.743L38.381 67.029C38.381 68.229 37.267 67.029 36.238 69.343 35.295 71.657 38.038 79.371 40.952 80.743 43.352 81.857 45.667 81.771 45.667 81.771L45.667 81.771z" class="m-item"/>
                                                            <path stroke="#5F98D7" stroke-width="1.5" d="M49.438,36.6 C48.41,36.086 47.124,35.829 45.667,35.829 C44.21,35.829 42.924,36.171 41.895,36.6" class="m-item"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(15 5)">
                                                                <path d="M46.61,39.4 C46.61,39.4 44.81,40 45.41,41.714 C46.01,43.429 47.724,42.829 47.724,42.829 C50.552,41.886 53.895,44.286 55.095,48.143 C56.295,52 55.01,55.857 52.181,56.8 C52.181,56.8 50.552,57.743 50.981,59.286 C51.495,60.829 53.295,60.229 53.295,60.229 C57.924,58.771 60.238,52.857 58.438,47.114 C56.638,41.371 51.324,37.943 46.61,39.4 L46.61,39.4 Z"/>
                                                                <path d="M52.181.743C47.638 8.543 44.381 18.4 53.552 26.371 67.267 38.371 57.495 44.8 57.495 44.8M14.381 39.4C14.381 39.4 16.181 40 15.581 41.714 14.981 43.429 13.267 42.829 13.267 42.829 10.438 41.886 7.095 44.286 5.895 48.143 4.695 52 5.981 55.857 8.81 56.8 8.81 56.8 10.438 57.743 10.01 59.286 9.495 60.829 7.695 60.229 7.695 60.229 3.067 58.771.752 52.857 2.552 47.114 4.352 41.371 9.667 37.943 14.381 39.4L14.381 39.4z"/>
                                                                <path d="M8.81,0.743 C13.352,8.543 16.61,18.4 7.438,26.371 C-6.276,38.371 3.495,44.8 3.495,44.8"/>
                                                            </g>
                                                            <path stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" d="M62.739 47.918C65.577 47.01 68.877 49.382 70.102 53.212 71.327 57.042 70.017 60.888 67.179 61.796 64.34 62.704 61.041 60.332 59.816 56.503 58.591 52.673 59.9 48.827 62.739 47.918L62.739 47.918zM23.856 61.74C21.018 60.832 19.708 56.986 20.933 53.156 22.159 49.326 25.458 46.954 28.296 47.862 31.135 48.771 32.445 52.617 31.219 56.447 29.994 60.276 26.695 62.648 23.856 61.74L23.856 61.74z"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <article>
                                <h3 class="title-article after-line"><?= $content[2]->title ?></h3>
                                <?= $content[2]->description ?>

                            </article>
                        </div>
                    </div>
                </div>
                <!-- Special Block
                ================================================== -->
                <div class="row block-animate">
                    <div class="special-article">
                        <div class="wr-special-article">
                            <h5 class="after-line"><?= $content[3]->title ?></h5> <br>
                            <?= $content[3]->description ?>
                            <div class="wr-i-info">
                                <i class="reproduction-info-section"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Section #3   -->
                <div class="row  block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="columh-block">
                            <h3 class="title-article after-line"><?= $content[4]->title ?></h3>
                            <?= $content[4]->description ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Article
================================================== -->
<section id="footer-article">
    <div class="row block-animate">
        <div class="container-pr">
            <div class="col-2">
                <!--  Drugs   -->
                <div class="row bl-pr-it">
                    <div class="con-pr-em">
                        <!--  Препараты, относящиеся к решению данной проблемы   -->
                        <div class="drug-article-left p-pr-r">
                            <h4 class="note-dr-footer">Этот препарат поможет в решении проблемы эректильной дисфункции</h4>
                            <div class="sum-2-drugs sum-1 txt-center">
                                <!--  Синергин   -->
                                <figure class="figure-article" data-name-drugs="Синергин">
                                    <img class="full-img" src="/img/drugs/drugs-bg/sinergin-bg.png"
                                         alt="Синергин">
                                    <figcaption>
                                        <a href="/nashi_produkty/sinergin">
                                             <span class="drugs-name-transition">
                                            Синергин
                                                 </span>
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!--  List Problem   -->
                        <div class="drug-article-right p-pr-l">
                            <?= yii\base\View::render('@frontend/views/site/other_tags'); ?>
                            <div class="tag-item txt-center">
                                <ul class="l-p-c-a">
                                    <li><a href="/muzhskoe_zdorovie/podgotovka_k_zachatiju"><i
                                                class="reproduction-tags-2"></i>Подготовка к зачатию</a>
                                    </li>
                                    <li><a href="/muzhskoe_zdorovie/prostatit"><i class="reproduction-tags-2"></i>Простатит</a>
                                    </li>
                                    <li><a href="/muzhskoe_zdorovie/varikocele"><i
                                                class="reproduction-tags-2"></i>Варикоцеле</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
