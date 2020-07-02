<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-woman">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <h1 class="BebasNeueBold header-color title-problem-header">
                        Комбинированные <br> оральные контрацептивы – как избежать побочных эффектов
                        <!--  SVG   -->
                        <span class="wr-svg-header">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122"
                                    class="svg-slider-category">
<g fill="none" stroke="#2A2C35" transform="translate(-1881 -1722)">
  <g transform="translate(1882 1723)">
    <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
    <path d="M59.55,75.503 C74.187,75.503 86.053,63.783 86.053,49.323 C86.053,34.867 74.187,23.145 59.551,23.145 C44.916,23.145 33.049,34.865 33.049,49.325 C33.049,63.782 44.915,75.503 59.552,75.503 L59.55,75.503 Z M60.845,75.445 L60.845,100.189 L60.845,75.444 L60.845,75.445 Z M48.665,86.39 L73.71,86.39 L48.665,86.39 Z"/>
  </g>
</g>
</svg>
                                </span>
                    </h1>

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
            <!-- TXT Оральная контрацепция - легко и просто
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
                            <div class="bg-44 m-img-bg" data-mh="group-im-pr"></div>
                        </div>
                    </div>
                </div>
                <!-- Empty Block
                ================================================== -->
                <div class="row">
                    <div class="container">
                        <div class="empty-block-article"></div>
                    </div>
                </div>
                <!--  Section #2   -->
                <div class="row  block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="column-svg">
                            <div class="wr-svg-article">
                                <img class="full-img" src="/img/index-img/empty.min.jpg" alt="empty">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 500"
                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <filter id="a" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%"
                                                filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="b" width="345.6%" height="345.6%" x="-122.8%" y="-122.8%"
                                                filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="7.369"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="translate(-911 -4712)">
                                        <g transform="translate(911 4712)">
                                            <path fill="#F7F7F7" d="M0 0H630V500H0z"/>
                                            <image xlink:href="/img/index-img/woman@2x.min.png" x="191" width="247.485"
                                                   height="500"/>
                                            <g class="w-end-m" transform="translate(25 18)">
                                                <g class="w-org  Яичники" transform="translate(272 298)">
                                                    <g transform="translate(0 41)">
                                                        <path stroke="#606D88"
                                                              d="M11.6640625 46.8554688L165.695313 46.8554688 266.199219 0.640625"/>
                                                        <circle cx="9.357" cy="45.514" r="9" fill="#065BB9" class="blur"
                                                                filter="url(#a)" opacity=".695"/>
                                                        <circle cx="11.357" cy="46.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(221)">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45" r="45" fill="#F7F7F7"
                                                                    stroke="#495466" stroke-width="1.2"/>
                                                            <g transform="translate(6 27)">
                                                                <path stroke="#B3B3B3" stroke-width="1.29"
                                                                      d="M39,11.486 C43.886,11.4 48.086,9.857 52.543,8.057 C49.886,9.943 47.486,11.314 45.343,13.629 C42.086,17.229 39.857,21.6 39,26.4"/>
                                                                <g stroke="#B3B3B3" stroke-width="1.29">
                                                                    <path d="M70.029,21.857 C70.029,22.114 69.943,22.543 70.114,22.714 C70.2,22.8 70.371,22.886 70.457,22.886 C70.971,22.971 71.314,22.543 71.657,22.286 C72,22.029 72.257,21.686 72.6,21.429 C73.286,20.743 73.886,19.971 74.486,19.2 C75.771,17.4 76.714,15.343 77.057,13.2 L77.057,13.029 C77.829,8.486 76.2,1.8 68.743,0.514 C61.286,-0.771 58.457,3.686 54.857,3.943"/>
                                                                    <path d="M64.971 12.429C64.629 12.343 64.286 12.171 64.2 11.743 64.029 10.714 66.343 10.8 66.857 10.886 67.886 10.971 68.914 11.143 69.943 11.229 70.543 11.229 71.229 11.229 71.743 10.886 73.114 10.029 73.371 5.914 68.486 4.714 63.6 3.514 59.657 5.914 57.686 8.486M13.029 12.429C13.371 12.343 14.143 12.257 14.057 11.743 14.057 11.571 13.886 11.314 13.714 11.229 13.543 11.143 13.371 11.057 13.114 10.971 12.943 10.971 12.771 10.886 12.686 10.886 11.486 10.714 10.286 10.886 9.086 11.057 8.143 11.229 6.943 11.314 6.086 10.8 4.714 9.943 4.457 5.829 9.343 4.629 14.229 3.429 18.171 5.829 20.143 8.4"/>
                                                                    <path d="M23.057,3.943 C19.457,3.6 16.629,-0.771 9.171,0.514 C1.714,1.714 0.171,8.4 0.857,12.943 C1.2,15.171 2.229,17.229 3.514,19.114 C3.943,19.8 4.457,20.4 4.971,21 C5.486,21.514 6,22.2 6.686,22.543 C6.943,22.714 7.2,22.8 7.457,22.8 C7.543,22.8 7.714,22.8 7.8,22.714 C8.057,22.543 7.971,22.114 7.971,21.857"/>
                                                                </g>
                                                                <path stroke="#4B5363" stroke-opacity=".566"
                                                                      stroke-width="1.2"
                                                                      d="M39 11.486C34.114 11.4 29.914 9.857 25.457 8.057 28.114 9.943 30.514 11.314 32.657 13.629 35.914 17.229 38.143 21.6 39 26.4M39 26.486L39 57"/>
                                                            </g>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2"
                                                               transform="translate(26 27)">
                                                                <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943"/>
                                                            </g>
                                                            <g stroke="#FD5368" stroke-width="1.7"
                                                               transform="translate(11 39)">
                                                                <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"
                                                                      class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="w-org  Гипофиз" transform="translate(3)">
                                                    <g transform="translate(43)">
                                                        <path stroke="#606D88"
                                                              d="M221.90625 11.1953125L97.203125 177.617188 0.484375 177.617188"/>
                                                        <circle cx="222.357" cy="9.514" r="9" fill="#125198"
                                                                class="blur" filter="url(#b)"/>
                                                        <circle cx="221.357" cy="10.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(0 134)">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45" r="45" fill="#F7F7F7"
                                                                    stroke="#495466" stroke-width="1.2"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2"
                                                               transform="translate(10 17)">
                                                                <path d="M12.114,58.514 C12.8,55.943 13.229,53.286 13.229,50.629 C13.314,47.886 12.457,45.829 10.4,44.029 C8.6,42.4 6.371,41.629 4.486,40.086 C2.771,38.714 1.486,36.914 0.8,34.857 C0.029,32.543 0.029,30.057 0.8,27.743 C1.571,25.343 3.371,23.714 5.086,22 C3.286,17.8 4.143,12.486 7.229,9.057 C10.314,5.629 15.543,4.343 19.914,5.886 C21.714,2.886 24.971,0.829 28.4,0.486 C31.829,0.143 35.429,1.343 37.829,3.829 C41.686,0.829 47.257,0.143 51.714,2.114 C53.943,3.143 56,4.943 56.514,7.257 C60.457,7.6 64.486,8.714 67.143,11.629 C69.8,14.543 70.571,19.429 67.914,22.343 C69.714,25.6 69.457,29.8 67.4,32.886 C65.343,35.971 61.486,37.686 57.8,37.257 C56.943,40.429 53.343,42.314 50,42.057 C46.657,41.8 43.743,39.829 41.514,37.429 C40.914,40.429 38.343,42.657 35.429,43.686 C32.514,44.629 29.429,44.457 26.429,43.857 C26.343,45.657 26.257,47.457 26.086,49.257 C25.657,52.6 24.886,55.857 23.771,59.029 C23.771,59.114 23.686,59.114 23.686,59.114 C23.6,59.114 23.6,58.943 23.686,59.029"/>
                                                                <path d="M19.486 58.6C19.571 58.514 19.571 58.771 19.4 58.686 19.314 58.6 19.314 58.514 19.4 58.429 19.829 57.314 20.171 56.2 20.429 55.086 21.457 50.8 22.571 45.229 21.029 40.943 20.429 39.143 19.229 37.686 18.286 36.143 17.429 34.857 16.314 33.571 15.714 32.114 14.343 29.029 14.171 25.086 15.886 22.086 20.086 14.543 33.457 16.086 34.314 25.171M48.029 21.571C45.371 24.829 44.857 29.629 46.914 33.314 47 33.4 47.171 33.4 47.086 33.314"/>
                                                                <path d="M11.514 12.571C13.229 12.743 14.857 13.6 16.057 14.886 17.257 16.171 17.943 17.886 17.943 19.6M29.171 18.229C31.657 18.743 34.314 17.629 36.114 15.829 37.914 14.029 38.943 11.543 39.457 9.057 39.286 9.143 39.114 9.143 38.943 9.229M36.886 15.571C37.571 18.229 39.886 20.114 42.457 21.057 45.457 22.171 48.971 22.086 51.886 20.886 54.886 19.686 57.371 17.286 58.657 14.286"/>
                                                                <path d="M52.914,20.286 C55.057,20.543 57.114,21.657 58.657,23.2 C60.2,24.743 61.143,26.886 61.314,29.029"/>
                                                            </g>
                                                            <circle cx="39.429" cy="50.657" r="6.429" stroke="#FD5368"
                                                                    stroke-width="1.7" class="w-item"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </div>
                            <article style="display: inline-block">
                                <div class="not-col dontsplit">
                                    <h3 class="title-article after-line"><?= $content[1]->title ?></h3><br>
                                    <?= $content[1]->description ?>

                            </article>
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
                <!--  Section #4   -->
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
                            <h4 class="note-dr-footer">Эти препараты помогут вам в решении проблемы побочных эффектов приема контрацептивов</h4>
                            <div class="sum-2-drugs">
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
                              Эти препараты помогут вам в решении проблемы приема комбинированных оральных контрацептивов
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
                                    <li><a href="/zhenskoe_zdorovie/grudnoe_vskarmlivanie"><i
                                                    class="reproduction-tags-2"></i>Кормление грудью</a></li>
                                    <li><a href="/zhenskoe_zdorovie/giperprolaktinemija"><i
                                                    class="reproduction-tags-2"></i>Гиперпролактинемия</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/narushenija_menstrualnogo_cikla"><i
                                                    class="reproduction-tags-2"></i>Нарушения менструального
                                            цикла</a></li>

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