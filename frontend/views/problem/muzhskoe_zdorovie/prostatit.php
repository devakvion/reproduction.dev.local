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
                        <h1 class="BebasNeueBold header-color title-problem-header">Профилактика простатита</h1>
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
                    <h3>Мужское здоровье </h3>
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
            <!-- TXT  Простатит: <br> симптомы, лечение, профилактика
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
                            <div class="bg-47 m-img-bg" data-mh="group-im-pr"></div>
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
                                        <filter id="a" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="translate(-1577 -2144)">
                                        <g transform="translate(1577 2144)">
                                            <path fill="#F7F7F7" d="M0 0H630V500H0z"/>
                                            <image xlink:href="/img/index-img/men@2x.min.png" width="286.002" height="500" x="172" y="1"/>
                                            <g class="m-end-w" transform="translate(24 133)">
                                                <g class="m-org  Мочевой  пузырь" transform="translate(1)">
                                                    <g transform="translate(44 45)">
                                                        <path stroke="#606D88" d="M241.363281 184.304687L76 0.773435699 0.140624988 0.773435699"/>
                                                        <circle cx="244.357" cy="183.514" r="9" fill="#065BB9" class="blur" filter="url(#a)" opacity=".695"/>
                                                        <circle cx="242.357" cy="184.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(17 25)">
                                                                <path d="M27.914 61.229C27.914 59.429 28 57.457 28.171 55.314 28.771 45.543 30.4 40.4 33.143 38.171 35.114 36.543 37.686 35.6 40.514 34.657 45.314 33.029 50.714 31.143 53.714 25.4 56.371 20.429 56.2 15.971 53.286 11.171 50.886 7.229 44.457.286 27.914.286 11.371.286 4.943 7.229 2.543 11.171-.371 15.971-.543 20.429 2.114 25.4 5.114 31.143 10.6 33.029 15.314 34.657 18.143 35.6 20.714 36.543 22.686 38.171 25.429 40.486 27.057 45.629 27.657 55.314 27.829 57.457 27.914 59.514 27.914 61.229M28.171 64.9L28 64.9 27.743 64.9"/>
                                                                <path d="M5.286 21.971C5.8 23.514 6.914 24.886 8.457 25.4 9.057 25.571 9.743 25.657 10.343 25.829 11.371 26.086 12.4 26.514 13.171 27.2 13.943 27.886 14.457 28.914 14.457 29.943M18.743 28.571C18.657 30.371 19.771 32.257 21.486 32.943 22.343 33.286 23.286 33.371 24.143 33.714 25.686 34.4 26.8 36.029 27.057 37.657M11.543 18.714C12.4 19.571 13.257 20.429 14.457 20.771 15.229 20.943 16.086 20.943 16.857 20.943 18.829 21.029 20.886 21.886 21.657 23.6M5.286 16.914C5.886 15.629 7.257 14.686 8.714 14.514 9.743 14.429 10.686 14.686 11.714 14.686 13.086 14.686 14.457 14.171 15.486 13.229M12.829 9.286C14.457 7.657 16.943 6.971 19.257 7.486 20.2 7.657 21.057 8.086 21.914 8.171 23.457 8.343 25.086 7.657 26.029 6.457M51.486 21.114C50.971 22.657 49.857 24.029 48.314 24.543 47.714 24.714 47.029 24.8 46.429 24.971 45.4 25.229 44.371 25.657 43.6 26.343 42.829 27.029 42.314 28.057 42.314 29.086M38.029 28.571C38.114 30.371 37 32.257 35.286 32.943 34.429 33.286 33.486 33.371 32.629 33.714 31.086 34.4 29.971 36.029 29.714 37.657M45.143 18.114C44.286 18.971 43.429 19.829 42.229 20.171 41.457 20.343 40.6 20.343 39.829 20.343 37.857 20.429 35.8 21.286 35.029 23M50.286 16.143C49.686 14.857 48.314 13.914 46.857 13.743 45.829 13.657 44.886 13.914 43.857 13.914 42.486 13.914 41.114 13.4 40.086 12.457M43.171 9.286C41.543 7.657 39.057 6.971 36.743 7.486 35.8 7.657 34.943 8.086 34.086 8.171 32.543 8.343 30.914 7.657 29.971 6.457M27.829 15.114C27.229 16.4 26.886 18.029 27.486 19.314 27.829 20 28.514 20.6 28.686 21.371 29.029 22.571 28.343 23.857 27.571 24.886M27.914 61.229L27.914 65"/>
                                                            </g>
                                                            <g stroke="#5F98D7" stroke-width="1.5" transform="translate(1 18)">
                                                                <path d="M39.457 71.743C39.286 64.114 38.514 52.714 35.514 50.143 30.971 46.286 18.2 46.543 12.2 35.057 10.057 30.943 9.286 26.229 9.971 21.6 10.143 20.4 9.457 19.286 8.343 18.771 5.514 17.571 2.943 15.943.8 13.8M83.6 5.829C82.057 7.971 80 9.857 77.257 11.229 75.543 12.086 73.486 11.743 72.2 10.371 66.886 4.629 57.714.6 43.914.6 30.2.6 21.029 4.629 15.629 10.371 14.343 11.743 12.286 12.086 10.571 11.229 7.829 9.857 5.771 7.971 4.229 5.829M48.371 71.743C48.543 64.114 49.314 52.714 52.314 50.143 56.857 46.286 69.629 46.543 75.629 35.057 77.771 30.943 78.543 26.229 77.857 21.6 77.686 20.4 78.371 19.286 79.486 18.771 82.314 17.571 84.886 15.943 87.029 13.8" class="m-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <article class="not-col dontsplit align-vertical">
                                <h3 class="title-article after-line"><?= $content[2]->title ?></h3>
                                <?= $content[2]->description ?>
                            </article>
                        </div>
                    </div>
                </div>
                <!--Empty Block-->
                <div class="row">
                    <div class="empty-block-section"></div>
                </div>
                <!--  Section #3   -->
                <div class="row  block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="columh-block">
                            <h3 class="title-article after-line"><?= $content[3]->title ?></h3>
                            <?= $content[3]->description ?>
                        </div>
                    </div>
                </div>
                <!-- Special Block
                ================================================== -->
                <div class="row block-animate">
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
                <div class="row  block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="columh-block">
                            <div class="dontsplit not-col">
                                <h3 class="title-article after-line"><?= $content[5]->title ?></h3>
                                <?= $content[5]->description ?>

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
                            <h4 class="note-dr-footer">Этот препарат способствует борьбе с простатитом и помогает  предупредить его появление</h4>
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
                                    <li><a href="/muzhskoe_zdorovie/varikocele"><i
                                                class="reproduction-tags-2"></i>Варикоцеле</a></li>
                                    <li><a href="/muzhskoe_zdorovie/jerektilnaja_disfunkcija"><i
                                                class="reproduction-tags-2"></i>Эректильная дисфункция</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>