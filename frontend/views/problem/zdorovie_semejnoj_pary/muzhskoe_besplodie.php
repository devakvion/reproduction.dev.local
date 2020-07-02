<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-manWoman">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <div class="p-r-in-bl">
                        <h1 class="BebasNeueBold header-color title-problem-header">Мужское бесплодие – <br> причины и
                            лечение</h1>
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

                    <h3>Здоровье семейной
                        пары</h3>
                </div>
            </div>
            <div class="right-header">
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
                <div id="pin1" class="list-drugs-article">
                    <!--  Сперотон   -->
                    <figure class="drugs-article active" data-name-drugs="Сперотон">
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
                            <div class="bg-34 m-img-bg" data-mh="group-im-pr"></div>
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
                        <div class="columh-block">
                            <article>
                                <h3 class="title-article after-line"><?= $content[1]->title ?></h3>
                                <?= $content[1]->description ?>

                            </article>
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
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 630 500">
                                    <defs>
                                        <filter id="a" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="b" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="c" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="d" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="translate(-907 -1087)">
                                        <g transform="translate(907 1087)">
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
                                                <g class="m-org  Яички" transform="translate(291 1)">
                                                    <g transform="translate(0 38)">
                                                        <path stroke="#606D88" d="M7.84765625 220.601562L170 1.86920147e-7 246.117188 1.86920147e-7"/>
                                                        <circle cx="9.285" cy="222.341" r="9" fill="#065BB9" class="blur" filter="url(#b)" opacity=".695"/>
                                                        <circle cx="7.285" cy="221.341" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(201)">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <path stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" d="M56.229,22.371 C56.229,26.057 51.171,29.057 45,29.057 C38.829,29.057 33.771,26.057 33.771,22.371 C33.771,18.686 38.829,17.229 45,17.229 C51.171,17.229 56.229,18.686 56.229,22.371 L56.229,22.371 Z"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(33 34)">
                                                                <path d="M12 47.771L12 12.457C12 .8 20.914.2 22.029.886 24 2.086 22.971 3.8 22.114 4.914 21.257 6.029 19.286 7.4 19.286 10.743L19.286 33.029C19.286 34.229 20.4 33.029 21.429 35.343 22.371 37.657 19.629 45.371 16.714 46.743 14.314 47.857 12 47.771 12 47.771L12 47.771zM12 47.771L12 12.457C12 .8 3.086.2 1.886.886-.086 2.086.943 3.8 1.8 4.914 2.657 6.029 4.629 7.4 4.629 10.743L4.629 33.029C4.629 34.229 3.514 33.029 2.486 35.343 1.543 37.657 4.286 45.371 7.2 46.743 9.6 47.857 12 47.771 12 47.771L12 47.771z"/>
                                                                <path d="M15.686,2.6 C14.657,2.086 13.371,1.829 11.914,1.829 C10.457,1.829 9.171,2.171 8.143,2.6"/>
                                                            </g>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(14 5)">
                                                                <path d="M46.943,39.4 C46.943,39.4 45.143,40 45.743,41.714 C46.343,43.429 48.057,42.829 48.057,42.829 C50.886,41.886 54.229,44.286 55.429,48.143 C56.629,52 55.343,55.857 52.514,56.8 C52.514,56.8 50.886,57.743 51.314,59.286 C51.829,60.829 53.629,60.229 53.629,60.229 C58.257,58.771 60.571,52.857 58.771,47.114 C56.971,41.371 51.571,37.943 46.943,39.4 L46.943,39.4 Z"/>
                                                                <path d="M52.429.743C47.886 8.543 44.629 18.4 53.8 26.371 67.514 38.371 57.743 44.8 57.743 44.8M14.629 39.4C14.629 39.4 16.429 40 15.829 41.714 15.229 43.429 13.514 42.829 13.514 42.829 10.686 41.886 7.343 44.286 6.143 48.143 4.943 52 6.229 55.857 9.057 56.8 9.057 56.8 10.686 57.743 10.257 59.286 9.743 60.829 7.943 60.229 7.943 60.229 3.314 58.771 1 52.857 2.8 47.114 4.6 41.371 10 37.943 14.629 39.4L14.629 39.4z"/>
                                                                <path d="M9.143,0.743 C13.686,8.543 16.943,18.4 7.771,26.371 C-5.943,38.371 3.829,44.8 3.829,44.8"/>
                                                            </g>
                                                            <path stroke="#5F98D7" stroke-width="1.5" d="M62.07 47.906C64.909 46.998 68.208 49.37 69.433 53.199 70.658 57.029 69.349 60.875 66.51 61.784 63.672 62.692 60.373 60.32 59.147 56.49 57.922 52.66 59.232 48.814 62.07 47.906L62.07 47.906zM23.109 61.728C20.271 60.82 18.961 56.973 20.186 53.143 21.411 49.314 24.711 46.942 27.549 47.85 30.387 48.758 31.697 52.605 30.472 56.434 29.247 60.264 25.948 62.636 23.109 61.728L23.109 61.728z" class="m-item"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="m-org  Предстательная  железа" transform="translate(0 168)">
                                                    <g class="org-gr">
                                                        <g transform="translate(45 47)">
                                                            <path stroke="#606D88" d="M236.03125 34.828125L76 0.773435699 0.140624988 0.773435699"/>
                                                            <circle cx="238.357" cy="33.514" r="9" fill="#065BB9" class="blur" filter="url(#c)" opacity=".695"/>
                                                            <circle cx="236.357" cy="34.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <path stroke="#5F98D7" stroke-width="1.5" d="M56.229,22.371 C56.229,26.057 51.171,29.057 45,29.057 C38.829,29.057 33.771,26.057 33.771,22.371 C33.771,18.686 38.829,17.229 45,17.229 C51.171,17.229 56.229,18.686 56.229,22.371 L56.229,22.371 Z" class="m-item"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(33 34)">
                                                                <path d="M12 47.771L12 12.457C12 .8 20.914.2 22.029.886 24 2.086 22.971 3.8 22.114 4.914 21.257 6.029 19.286 7.4 19.286 10.743L19.286 33.029C19.286 34.229 20.4 33.029 21.429 35.343 22.371 37.657 19.629 45.371 16.714 46.743 14.314 47.857 12 47.771 12 47.771L12 47.771zM12 47.771L12 12.457C12 .8 3.086.2 1.886.886-.086 2.086.943 3.8 1.8 4.914 2.657 6.029 4.629 7.4 4.629 10.743L4.629 33.029C4.629 34.229 3.514 33.029 2.486 35.343 1.543 37.657 4.286 45.371 7.2 46.743 9.6 47.857 12 47.771 12 47.771L12 47.771z"/>
                                                                <path d="M15.686,2.6 C14.657,2.086 13.371,1.829 11.914,1.829 C10.457,1.829 9.171,2.171 8.143,2.6"/>
                                                            </g>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(14 5)">
                                                                <path d="M46.943,39.4 C46.943,39.4 45.143,40 45.743,41.714 C46.343,43.429 48.057,42.829 48.057,42.829 C50.886,41.886 54.229,44.286 55.429,48.143 C56.629,52 55.343,55.857 52.514,56.8 C52.514,56.8 50.886,57.743 51.314,59.286 C51.829,60.829 53.629,60.229 53.629,60.229 C58.257,58.771 60.571,52.857 58.771,47.114 C56.971,41.371 51.571,37.943 46.943,39.4 L46.943,39.4 Z"/>
                                                                <path d="M52.429.743C47.886 8.543 44.629 18.4 53.8 26.371 67.514 38.371 57.743 44.8 57.743 44.8M14.629 39.4C14.629 39.4 16.429 40 15.829 41.714 15.229 43.429 13.514 42.829 13.514 42.829 10.686 41.886 7.343 44.286 6.143 48.143 4.943 52 6.229 55.857 9.057 56.8 9.057 56.8 10.686 57.743 10.257 59.286 9.743 60.829 7.943 60.229 7.943 60.229 3.314 58.771 1 52.857 2.8 47.114 4.6 41.371 10 37.943 14.629 39.4L14.629 39.4z"/>
                                                                <path d="M9.143,0.743 C13.686,8.543 16.943,18.4 7.771,26.371 C-5.943,38.371 3.829,44.8 3.829,44.8"/>
                                                            </g>
                                                            <path stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" d="M62.07 47.906C64.909 46.998 68.208 49.37 69.433 53.199 70.658 57.029 69.349 60.875 66.51 61.784 63.672 62.692 60.373 60.32 59.147 56.49 57.922 52.66 59.232 48.814 62.07 47.906L62.07 47.906zM23.109 61.728C20.271 60.82 18.961 56.973 20.186 53.143 21.411 49.314 24.711 46.942 27.549 47.85 30.387 48.758 31.697 52.605 30.472 56.434 29.247 60.264 25.948 62.636 23.109 61.728L23.109 61.728z"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="m-org  Мочевой  пузырь" transform="translate(1)">
                                                    <g transform="translate(44 45)">
                                                        <path stroke="#606D88" d="M241.363281 184.304687L76 0.773435699 0.140624988 0.773435699"/>
                                                        <circle cx="244.357" cy="183.514" r="9" fill="#065BB9" class="blur" filter="url(#d)" opacity=".695"/>
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
                            <div class="leare_fix" style="display: inline-block">
                            <article class="not-col dontsplit">
                                <h3 class="title-article after-line"><?= $content[2]->title ?></h3>
                                <?= $content[2]->description ?>

                            </article>
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
                            <h4 class="note-dr-footer">Эти препараты помогут справиться с мужским бесплодием</h4>
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
                                <!--  Сперотон  -->
                                <figure class="figure-article" data-name-drugs="Сперотон">
                                    <img class="full-img" src="/img/drugs/drugs-bg/speroton-bg.png"
                                         alt="Сперотон">
                                    <figcaption>
                                        <a href="/nashi_produkty/speroton">
                                                   <span class="drugs-name-transition">
                                                Сперотон
                                                       </span>
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
                        <!--    <div class="wr-note-drugs-article">
                            <span class="note-drugs-article">
                                 Эти препараты помогут справиться с мужским бесплодием.
                            </span>
                            </div>-->
                        </div>
                        <!--  List Problem   -->
                        <div class="drug-article-right p-pr-l">
                            <?= yii\base\View::render('@frontend/views/site/other_tags'); ?>
                            <div class="tag-item txt-center">
                                <ul class="l-p-c-a">
                                    <li><a href="/zdorovie_semejnoj_pary/planirovanie_pervogo_rebenka_posle_35_let"><i
                                                class="reproduction-tags-2"></i>Планирование первого ребенка после
                                            35
                                            лет</a>
                                    </li>
                                    <li><a href="/zdorovie_semejnoj_pary/podgotovka_k_vrt"><i
                                                class="reproduction-tags-2"></i>Подготовка к ВРТ и ЭКО</a>
                                    </li>
                                    <li><a href="/zdorovie_semejnoj_pary/povtornye_vykidyshi"><i
                                                class="reproduction-tags-2"></i> Повторные выкидыши</a></li>
                                    <li><a href="/zdorovie_semejnoj_pary/zhenskoe_besplodie"><i
                                                class="reproduction-tags-2"></i>Женское бесплодие</a></li>

                                </ul>
                            </div>
                          <!--  <div class="wr-note-drugs-article">
                            <span class="note-drugs-article list-problem-note-article">
                                 В данном блоке представлены другие проблемы, связанные со здоровьем семейной пары.
                            </span>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

