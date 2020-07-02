<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-woman1">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <div class="p-r-in-bl">
                        <h1 class="BebasNeueBold header-color title-problem-header">Мастопатия – симптомы и лечение</h1>
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
            <!--  Breadcrumbs   -->
            <div id="breadcrumbs-wr">
                <nav class="breadcrumbs">
                    <ol class="cd-multi-steps">
                        <li class="visited"><a href="/">Главная</a><span class="cd-multi-steps-line">|</span></li>
                        <li class="visited"><span><?= $category->title ?></span> -</li>
                        <li class="current"><span><?= $problem->title ?></span></li>
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
            <!-- TXT
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
                            <div class="bg-41 m-img-bg" data-mh="group-im-pr"></div>
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
                                        <filter id="a" width="262.5%" height="262.5%" x="-81.3%" y="-81.3%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="translate(-906 -3672)">
                                        <g transform="translate(906 3672)">
                                            <path fill="#F7F7F7" d="M0 0H630V500H0z"/>
                                            <image xlink:href="/img/index-img/woman@2x.min.png" x="191" width="247.485" height="500" />
                                            <g class="w-end-m" transform="translate(25 18)">
                                                <g class="w-org  Молочные  железы" transform="translate(317 74)">
                                                    <g transform="translate(0 46)">
                                                        <path stroke="#606D88" d="M11.8476563 66.6367188L136.285157 0.0742195129 219.652345 0.0742195129"/>
                                                        <circle cx="12.285" cy="65.841" r="12" fill="#065BB9" class="blur" filter="url(#a)" opacity=".695"/>
                                                        <circle cx="11.285" cy="64.841" r="5" fill="#57647A"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(174)">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45.5" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(16)">
                                                                <path d="M7.829 35.214C9.371 35.814 10.571 37.186 11 38.814M3.371 55.871C5.257 54.929 6.886 53.557 8.086 51.757M6.2 45.929C7.657 46.614 8.943 47.643 10.229 48.671 14.257 51.843 18.286 54.929 22.057 58.357 22.914 59.129 23.686 59.9 24.371 60.757 24.543 61.014 24.714 61.271 24.8 61.614 24.971 62.214 24.629 62.9 24.114 63.243 23.6 63.586 23 63.757 22.314 63.757 20.514 63.757 18.8 62.729 17.6 61.357 15.543 59.043 14.343 56.3 13.143 53.471 12.457 51.757 11.6 50.043 10.229 48.929M6.971 43.957C6.971 43.957 14.771 44.129 21.2 40.871 27.629 37.614 31.143 33.757 29.343 31.786 27.886 30.329 24.8 31.786 21.971 34.957 18.543 38.729 14.086 43.7 6.971 43.957L6.971 43.957zM12.371 45.929C12.371 45.929 22.143 48.329 30.543 47.3 41 46.014 36.8 37.786 29.686 41.471 21.886 45.5 12.371 45.929 12.371 45.929L12.371 45.929zM14.171 48.5C14.171 48.5 20.857 53.9 27.8 56.043 36.371 58.786 36.029 50.9 29.257 51.157 21.714 51.5 14.171 48.5 14.171 48.5L14.171 48.5z"/>
                                                                <path d="M46.829,86.814 C46.657,82.443 46.571,78.071 46.4,73.7 C40.486,74.986 34.486,76.271 28.4,75.671 C20.943,74.9 13.914,70.957 9.029,65.3 C4.143,59.643 1.314,52.357 0.714,44.814 C0.629,44.129 0.629,43.443 0.8,42.757 C1.057,41.986 1.571,41.386 2.171,40.871 C7.229,35.729 12.543,30.929 17.171,25.357 C21.886,19.786 26,13.7 29.086,7.014 C30.029,4.871 30.886,2.729 31.571,0.586"/>
                                                            </g>
                                                            <path stroke="#FD5368" stroke-width="1.7" d="M17.571,41.729 C24.943,43.1 28.971,37.529 33.171,32.471 C37.286,27.5 42.343,22.871 49.029,22.614 C58.371,22.271 64.457,29.643 66.429,38.043 C68.657,47.643 67.114,60.5 58.8,66.843 C50.829,72.929 39.429,71.214 32.314,64.871 C28.971,61.871 27.086,57.5 25.2,53.557 C23.314,49.786 20.143,47.214 16.714,45.071" class="w-item"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="not-col"><h3 class="title-article after-line"><?= $content[1]->title ?></h3>
                                <?= $content[1]->description ?>
                            </div>
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
                            <h3 class="title-article after-line"><?= $content[2]->title ?></h3>
                            <?= $content[2]->description ?>
                        </div>
                    </div>
                </div>
                <!--Empty Block-->
                <div class="row">
                    <div class="empty-block-section"></div>
                </div>
                <div class="row  block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="columh-block">
                            <h3 class="title-article after-line"><?= $content[3]->title ?></h3>
                            <?= $content[3]->description ?>

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
                            <h4 class="note-dr-footer">Этот препарат поможет вам в предупреждении и комплексной терапии мастопатии</h4>
                            <div class="sum-2-drugs sum-1 txt-center">
                                <!--  Прегнотон  -->
                                <figure class="figure-article" data-name-drugs="Синергин">
                                    <img class="full-img" src="/img/drugs/drugs-bg/sinergin-bg.png"
                                         alt="Синергин">
                                    <figcaption>
                                        <a href="/nashi_produkty/pregnoton">
                                        <span class="drugs-name-transition">
                                        Синергин
                                            </span>
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
                            <!--<div class="wr-note-drugs-article">
                            <span class="note-drugs-article">
                                 Этот препарат поможет вам в предупреждении и комплексной терапии мастопатии.
                            </span>
                            </div>-->
                        </div>
                        <!--  List Problem   -->
                        <div class="drug-article-right p-pr-l">
                            <h4 class="note-dr-footer">В данном блоке представлены другие проблемы, связанные с женским здоровьем</h4>
                            <div class="tag-item txt-center">
                                <ul class="l-p-c-a">
                                    <li><a href="/zhenskoe_zdorovie/podgotovka_k_beremennosti"><i
                                                    class="reproduction-tags-2"></i>Подготовка к беременности</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/cistit"><i
                                                    class="reproduction-tags-2"></i>Цистит</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/narushenija_menstrualnogo_cikla"><i
                                                    class="reproduction-tags-2"></i>Нарушения менструального
                                            цикла</a></li>
                                    <li><a href="/zhenskoe_zdorovie/giperprolaktinemija"><i
                                                    class="reproduction-tags-2"></i>Гиперпролактинемия</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/priem_kombinirovannyh_oralnyh_kontraceptivov"><i
                                                    class="reproduction-tags-2"></i>Прием комбинированных оральных
                                            контрацептивов</a></li>

                                </ul>
                            </div>
                            <!-- <div class="wr-note-drugs-article">
                             <span class="note-drugs-article list-problem-note-article">
                                  В данном блоке представлены другие проблемы, связанные с женским здоровьем.
                             </span>
                             </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
