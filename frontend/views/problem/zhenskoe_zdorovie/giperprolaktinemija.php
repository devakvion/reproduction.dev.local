<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-woman">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>

                    <div class="p-r-in-bl">
                        <h1 class="BebasNeueBold header-color title-problem-header">Гиперпролактинемия: <br> как определить? Что делать, если повышен пролактин?</h1>
                        <!--  SVG   -->
                                <span class="wr-svg-header">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122"  class="svg-slider-category">
<g fill="none" stroke="#2A2C35" transform="translate(-1881 -1722)">
  <g transform="translate(1882 1723)">
    <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
    <path d="M59.55,75.503 C74.187,75.503 86.053,63.783 86.053,49.323 C86.053,34.867 74.187,23.145 59.551,23.145 C44.916,23.145 33.049,34.865 33.049,49.325 C33.049,63.782 44.915,75.503 59.552,75.503 L59.55,75.503 Z M60.845,75.445 L60.845,100.189 L60.845,75.444 L60.845,75.445 Z M48.665,86.39 L73.71,86.39 L48.665,86.39 Z"/>
  </g>
</g>
</svg>
                                </span>
                    </div>

                    <h3>Женское здоровье</h3>
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
                    <figure class="drugs-article active" data-name-drugs="Прегнотон">
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
                    <figure class="drugs-article" data-name-drugs="Синергин">
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
            <!-- TXT Что такое пролактин ?
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
                            <div class="bg-40 m-img-bg" data-mh="group-im-pr"></div>
                        </div>
                    </div>
                </div>
                <!--Empty Block-->
                <div class="row">
                    <div class="empty-block-section"></div>
                </div>
                <!--  Section #2   -->
                <div class="row  block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="column-svg">
                            <div class="wr-svg-article">
                                <img class="full-img" src="/img/index-img/empty.min.jpg" alt="empty">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 500" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <filter id="a" width="345.6%" height="345.6%" x="-122.8%" y="-122.8%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="7.369"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="translate(-906 -3152)">
                                        <g transform="translate(906 3152)">
                                            <path fill="#F7F7F7" d="M0 0H630V500H0z"/>
                                            <image xlink:href="/img/index-img/woman@2x.min.png" x="191" width="247.485" height="500" />
                                            <g class="w-end-m" transform="translate(25 18)">
                                                <g class="w-org  Гипофиз" transform="translate(301)">
                                                    <g>
                                                        <path stroke="#606D88" d="M8.16796875 10.5664063L147.039063 177.617187 235.863281 177.617187"/>
                                                        <circle cx="9.357" cy="9.514" r="9" fill="#125198" class="blur" filter="url(#a)"/>
                                                        <circle cx="8.357" cy="10.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(191 134)">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(10 17)">
                                                                <path d="M12.114,58.514 C12.8,55.943 13.229,53.286 13.229,50.629 C13.314,47.886 12.457,45.829 10.4,44.029 C8.6,42.4 6.371,41.629 4.486,40.086 C2.771,38.714 1.486,36.914 0.8,34.857 C0.029,32.543 0.029,30.057 0.8,27.743 C1.571,25.343 3.371,23.714 5.086,22 C3.286,17.8 4.143,12.486 7.229,9.057 C10.314,5.629 15.543,4.343 19.914,5.886 C21.714,2.886 24.971,0.829 28.4,0.486 C31.829,0.143 35.429,1.343 37.829,3.829 C41.686,0.829 47.257,0.143 51.714,2.114 C53.943,3.143 56,4.943 56.514,7.257 C60.457,7.6 64.486,8.714 67.143,11.629 C69.8,14.543 70.571,19.429 67.914,22.343 C69.714,25.6 69.457,29.8 67.4,32.886 C65.343,35.971 61.486,37.686 57.8,37.257 C56.943,40.429 53.343,42.314 50,42.057 C46.657,41.8 43.743,39.829 41.514,37.429 C40.914,40.429 38.343,42.657 35.429,43.686 C32.514,44.629 29.429,44.457 26.429,43.857 C26.343,45.657 26.257,47.457 26.086,49.257 C25.657,52.6 24.886,55.857 23.771,59.029 C23.771,59.114 23.686,59.114 23.686,59.114 C23.6,59.114 23.6,58.943 23.686,59.029"/>
                                                                <path d="M19.486 58.6C19.571 58.514 19.571 58.771 19.4 58.686 19.314 58.6 19.314 58.514 19.4 58.429 19.829 57.314 20.171 56.2 20.429 55.086 21.457 50.8 22.571 45.229 21.029 40.943 20.429 39.143 19.229 37.686 18.286 36.143 17.429 34.857 16.314 33.571 15.714 32.114 14.343 29.029 14.171 25.086 15.886 22.086 20.086 14.543 33.457 16.086 34.314 25.171M48.029 21.571C45.371 24.829 44.857 29.629 46.914 33.314 47 33.4 47.171 33.4 47.086 33.314"/>
                                                                <path d="M11.514 12.571C13.229 12.743 14.857 13.6 16.057 14.886 17.257 16.171 17.943 17.886 17.943 19.6M29.171 18.229C31.657 18.743 34.314 17.629 36.114 15.829 37.914 14.029 38.943 11.543 39.457 9.057 39.286 9.143 39.114 9.143 38.943 9.229M36.886 15.571C37.571 18.229 39.886 20.114 42.457 21.057 45.457 22.171 48.971 22.086 51.886 20.886 54.886 19.686 57.371 17.286 58.657 14.286"/>
                                                                <path d="M52.914,20.286 C55.057,20.543 57.114,21.657 58.657,23.2 C60.2,24.743 61.143,26.886 61.314,29.029"/>
                                                            </g>
                                                            <circle cx="39.429" cy="50.657" r="6.429" stroke="#FD5368" stroke-width="1.7" class="w-item"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="dontsplit not-col">
                                <h3 class="title-article after-line"><?= $content[1]->title ?></h3>
                                <?= $content[1]->description ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Special Block
                ================================================== -->
                <div class="row block-animate">
                    <div class="special-article">
                        <div class="wr-special-article">
                            <h5 class="after-line"><?= $content[2]->title ?></h5> <br>
                            <?= $content[2]->description ?>
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
                            <h3 class="title-article after-line"><?= $content[3]->title ?></h3>
                            <?= $content[3]->description ?>
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
                            <h4 class="note-dr-footer">Этот препарат поможет вам в решении проблемы гиперпролактинемии</h4>
                            <div class="sum-2-drugs sum-1 txt-center">
                                <!--  Прегнотон  -->
                                <figure class="figure-article" data-name-drugs="Прегнотон">
                                    <img class="full-img" src="/img/drugs/drugs-bg/pregnoton-bg.png"
                                         alt="Прегнотон">
                                    <figcaption>
                                        <a href="/nashi_produkty/pregnoton">
                                        <span class="drugs-name-transition">
                                        Прегнотон
                                            </span>
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
                           <!-- <div class="wr-note-drugs-article">
                            <span class="note-drugs-article">
                                 Этот препарат поможет вам в решении проблемы.
                            </span>
                            </div>-->
                        </div>
                        <!--  List Problem   -->
                        <div class="drug-article-right p-pr-l">
                            <?= yii\base\View::render('@frontend/views/site/other_tags'); ?>
                            <div class="tag-item txt-center">
                                <ul class="l-p-c-a">
                                    <li><a href="/zhenskoe_zdorovie/podgotovka_k_beremennosti"><i
                                                class="reproduction-tags-2"></i>Подготовка к беременности</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/mastopatija"><i class="reproduction-tags-2"></i>Мастопатия</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/cistit"><i
                                                class="reproduction-tags-2"></i>Цистит</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/narushenija_menstrualnogo_cikla"><i
                                                class="reproduction-tags-2"></i>Нарушения менструального
                                            цикла</a></li>
                                    <li><a href="/zhenskoe_zdorovie/grudnoe_vskarmlivanie"><i
                                                    class="reproduction-tags-2"></i>Кормление грудью</a></li>
                                    <li><a href="/zhenskoe_zdorovie/priem_kombinirovannyh_oralnyh_kontraceptivov"><i
                                                class="reproduction-tags-2"></i>Прием комбинированных оральных
                                            контрацептивов</a></li>

                                </ul>
                            </div>
                            <!--<div class="wr-note-drugs-article">
                            <span class="note-drugs-article list-problem-note-article">
                                 В данном блоке представлены другие проблемы, связанные с женским здоровьем
                            </span>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

