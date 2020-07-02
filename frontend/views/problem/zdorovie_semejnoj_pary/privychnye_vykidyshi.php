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
                        <h1 class="BebasNeueBold header-color title-problem-header">Повторные выкидыши: как женщине преодолеть невынашивание</h1>
                        <!--  SVG   -->
                                <span class="wr-svg-header">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122"
                                      class="svg-slider-category">
  <g fill="none" stroke="#2A2C35" transform="translate(-1717 -1722)">
    <g transform="translate(1718 1723)">
      <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
      <path d="M49.228 83.34C63.178 83.34 74.488 72.032 74.488 58.082 74.488 44.132 63.178 32.825 49.228 32.825 35.278 32.825 23.968 44.133 23.968 58.082 23.968 72.032 35.278 83.34 49.228 83.34zM66.896 40.416L85.603 21.706M74.173 21.706L85.603 21.706 85.603 33.14"/>
      <path d="M65.478,89.494 C76.503,89.494 85.442,80.664 85.442,69.774 C85.442,58.884 76.504,50.054 65.478,50.054 C54.453,50.054 45.514,58.884 45.514,69.774 C45.514,80.664 54.454,89.494 65.478,89.494 Z M66.453,88.954 L66.453,107.591 L66.453,88.954 Z M57.277,97.198 L76.144,97.198 L57.278,97.198 L57.277,97.198 Z"/>
    </g>
  </g>
</svg>
                                </span>
                    </div>

                    <h3>Здоровье семейной
                        пары</h3>
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
            <!-- TXT  Привычное <br> невынашивание беременности
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
                            <div class="bg-38 m-img-bg" data-mh="group-im-pr"></div>
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
                                        <filter id="d" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="e" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="f" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="translate(-197 -2218)">
                                        <g transform="translate(197 2218)">
                                            <path fill="#F7F7F7" d="M0 0H630V500H0z"/>
                                            <image xlink:href="/img/index-img/problem_svg/people.min.png" x="145" width="340.26" height="500" />
                                            <g class="w-end-m-active" transform="translate(25 42)">
                                                <g class="w-org  Матка" transform="translate(0 296)">
                                                    <g transform="translate(45)">
                                                        <path stroke="#606D88" d="M140.96875 9.54296877L75 64.5625 0.679687504 64.5625"/>
                                                        <circle cx="142.357" cy="8.514" r="8" fill="#065BB9" class="blur" filter="url(#a)" opacity=".695"/>
                                                        <circle cx="141.357" cy="9.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(0 20)">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g transform="translate(6 27)">
                                                                <path stroke="#B3B3B3" stroke-width="1.29" d="M39,11.486 C43.886,11.4 48.086,9.857 52.543,8.057 C49.886,9.943 47.486,11.314 45.343,13.629 C42.086,17.229 39.857,21.6 39,26.4"/>
                                                                <g stroke="#B3B3B3" stroke-width="1.29">
                                                                    <path d="M70.029,21.857 C70.029,22.114 69.943,22.543 70.114,22.714 C70.2,22.8 70.371,22.886 70.457,22.886 C70.971,22.971 71.314,22.543 71.657,22.286 C72,22.029 72.257,21.686 72.6,21.429 C73.286,20.743 73.886,19.971 74.486,19.2 C75.771,17.4 76.714,15.343 77.057,13.2 L77.057,13.029 C77.829,8.486 76.2,1.8 68.743,0.514 C61.286,-0.771 58.457,3.686 54.857,3.943"/>
                                                                    <path d="M64.971 12.429C64.629 12.343 64.286 12.171 64.2 11.743 64.029 10.714 66.343 10.8 66.857 10.886 67.886 10.971 68.914 11.143 69.943 11.229 70.543 11.229 71.229 11.229 71.743 10.886 73.114 10.029 73.371 5.914 68.486 4.714 63.6 3.514 59.657 5.914 57.686 8.486M13.029 12.429C13.371 12.343 14.143 12.257 14.057 11.743 14.057 11.571 13.886 11.314 13.714 11.229 13.543 11.143 13.371 11.057 13.114 10.971 12.943 10.971 12.771 10.886 12.686 10.886 11.486 10.714 10.286 10.886 9.086 11.057 8.143 11.229 6.943 11.314 6.086 10.8 4.714 9.943 4.457 5.829 9.343 4.629 14.229 3.429 18.171 5.829 20.143 8.4"/>
                                                                    <path d="M23.057,3.943 C19.457,3.6 16.629,-0.771 9.171,0.514 C1.714,1.714 0.171,8.4 0.857,12.943 C1.2,15.171 2.229,17.229 3.514,19.114 C3.943,19.8 4.457,20.4 4.971,21 C5.486,21.514 6,22.2 6.686,22.543 C6.943,22.714 7.2,22.8 7.457,22.8 C7.543,22.8 7.714,22.8 7.8,22.714 C8.057,22.543 7.971,22.114 7.971,21.857"/>
                                                                </g>
                                                                <path stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" d="M39 11.486C34.114 11.4 29.914 9.857 25.457 8.057 28.114 9.943 30.514 11.314 32.657 13.629 35.914 17.229 38.143 21.6 39 26.4M39 26.486L39 57"/>
                                                            </g>
                                                            <g stroke="#FD5368" stroke-width="1.7" transform="translate(26 27)">
                                                                <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943" class="w-item"/>
                                                            </g>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(11 39)">
                                                                <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="w-org  Яичники" transform="translate(0 215)">
                                                    <g transform="translate(45 46)">
                                                        <path stroke="#606D88" d="M129.433594 30.566406L75.0000002 0.566405991 0.628906456 0.566405991"/>
                                                        <circle cx="127.357" cy="28.514" r="9" fill="#065BB9" class="blur" filter="url(#b)" opacity=".695"/>
                                                        <circle cx="129.357" cy="29.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g transform="translate(6 27)">
                                                                <path stroke="#B3B3B3" stroke-width="1.29" d="M39,11.486 C43.886,11.4 48.086,9.857 52.543,8.057 C49.886,9.943 47.486,11.314 45.343,13.629 C42.086,17.229 39.857,21.6 39,26.4"/>
                                                                <g stroke="#B3B3B3" stroke-width="1.29">
                                                                    <path d="M70.029,21.857 C70.029,22.114 69.943,22.543 70.114,22.714 C70.2,22.8 70.371,22.886 70.457,22.886 C70.971,22.971 71.314,22.543 71.657,22.286 C72,22.029 72.257,21.686 72.6,21.429 C73.286,20.743 73.886,19.971 74.486,19.2 C75.771,17.4 76.714,15.343 77.057,13.2 L77.057,13.029 C77.829,8.486 76.2,1.8 68.743,0.514 C61.286,-0.771 58.457,3.686 54.857,3.943"/>
                                                                    <path d="M64.971 12.429C64.629 12.343 64.286 12.171 64.2 11.743 64.029 10.714 66.343 10.8 66.857 10.886 67.886 10.971 68.914 11.143 69.943 11.229 70.543 11.229 71.229 11.229 71.743 10.886 73.114 10.029 73.371 5.914 68.486 4.714 63.6 3.514 59.657 5.914 57.686 8.486M13.029 12.429C13.371 12.343 14.143 12.257 14.057 11.743 14.057 11.571 13.886 11.314 13.714 11.229 13.543 11.143 13.371 11.057 13.114 10.971 12.943 10.971 12.771 10.886 12.686 10.886 11.486 10.714 10.286 10.886 9.086 11.057 8.143 11.229 6.943 11.314 6.086 10.8 4.714 9.943 4.457 5.829 9.343 4.629 14.229 3.429 18.171 5.829 20.143 8.4"/>
                                                                    <path d="M23.057,3.943 C19.457,3.6 16.629,-0.771 9.171,0.514 C1.714,1.714 0.171,8.4 0.857,12.943 C1.2,15.171 2.229,17.229 3.514,19.114 C3.943,19.8 4.457,20.4 4.971,21 C5.486,21.514 6,22.2 6.686,22.543 C6.943,22.714 7.2,22.8 7.457,22.8 C7.543,22.8 7.714,22.8 7.8,22.714 C8.057,22.543 7.971,22.114 7.971,21.857"/>
                                                                </g>
                                                                <path stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" d="M39 11.486C34.114 11.4 29.914 9.857 25.457 8.057 28.114 9.943 30.514 11.314 32.657 13.629 35.914 17.229 38.143 21.6 39 26.4M39 26.486L39 57"/>
                                                            </g>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(26 27)">
                                                                <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943"/>
                                                            </g>
                                                            <g stroke="#FD5368" stroke-width="1.7" transform="translate(11 39)">
                                                                <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z" class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="w-org  Мочевой  пузырь" transform="translate(0 113)">
                                                    <g transform="translate(44 45)">
                                                        <path stroke="#606D88" d="M133.777344 116.941404L76 0.773435699 0.140624988 0.773435699"/>
                                                        <circle cx="136.357" cy="115.514" r="9" fill="#065BB9" class="blur" filter="url(#c)" opacity=".695"/>
                                                        <circle cx="134.357" cy="116.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(17 25)">
                                                                <path d="M27.914 61.229C27.914 59.429 28 57.457 28.171 55.314 28.771 45.543 30.4 40.4 33.143 38.171 35.114 36.543 37.686 35.6 40.514 34.657 45.314 33.029 50.714 31.143 53.714 25.4 56.371 20.429 56.2 15.971 53.286 11.171 50.886 7.229 44.457.286 27.914.286 11.371.286 4.943 7.229 2.543 11.171-.371 15.971-.543 20.429 2.114 25.4 5.114 31.143 10.6 33.029 15.314 34.657 18.143 35.6 20.714 36.543 22.686 38.171 25.429 40.486 27.057 45.629 27.657 55.314 27.829 57.457 27.914 59.514 27.914 61.229M28.171 64.9L28 64.9 27.743 64.9"/>
                                                                <path d="M5.286 21.971C5.8 23.514 6.914 24.886 8.457 25.4 9.057 25.571 9.743 25.657 10.343 25.829 11.371 26.086 12.4 26.514 13.171 27.2 13.943 27.886 14.457 28.914 14.457 29.943M18.743 28.571C18.657 30.371 19.771 32.257 21.486 32.943 22.343 33.286 23.286 33.371 24.143 33.714 25.686 34.4 26.8 36.029 27.057 37.657M11.543 18.714C12.4 19.571 13.257 20.429 14.457 20.771 15.229 20.943 16.086 20.943 16.857 20.943 18.829 21.029 20.886 21.886 21.657 23.6M5.286 16.914C5.886 15.629 7.257 14.686 8.714 14.514 9.743 14.429 10.686 14.686 11.714 14.686 13.086 14.686 14.457 14.171 15.486 13.229M12.829 9.286C14.457 7.657 16.943 6.971 19.257 7.486 20.2 7.657 21.057 8.086 21.914 8.171 23.457 8.343 25.086 7.657 26.029 6.457M51.486 21.114C50.971 22.657 49.857 24.029 48.314 24.543 47.714 24.714 47.029 24.8 46.429 24.971 45.4 25.229 44.371 25.657 43.6 26.343 42.829 27.029 42.314 28.057 42.314 29.086M38.029 28.571C38.114 30.371 37 32.257 35.286 32.943 34.429 33.286 33.486 33.371 32.629 33.714 31.086 34.4 29.971 36.029 29.714 37.657M45.143 18.114C44.286 18.971 43.429 19.829 42.229 20.171 41.457 20.343 40.6 20.343 39.829 20.343 37.857 20.429 35.8 21.286 35.029 23M50.286 16.143C49.686 14.857 48.314 13.914 46.857 13.743 45.829 13.657 44.886 13.914 43.857 13.914 42.486 13.914 41.114 13.4 40.086 12.457M43.171 9.286C41.543 7.657 39.057 6.971 36.743 7.486 35.8 7.657 34.943 8.086 34.086 8.171 32.543 8.343 30.914 7.657 29.971 6.457M27.829 15.114C27.229 16.4 26.886 18.029 27.486 19.314 27.829 20 28.514 20.6 28.686 21.371 29.029 22.571 28.343 23.857 27.571 24.886M27.914 61.229L27.914 65"/>
                                                            </g>
                                                            <g stroke="#FD5368" stroke-width="1.7" transform="translate(1 18)">
                                                                <path d="M39.457 71.743C39.286 64.114 38.514 52.714 35.514 50.143 30.971 46.286 18.2 46.543 12.2 35.057 10.057 30.943 9.286 26.229 9.971 21.6 10.143 20.4 9.457 19.286 8.343 18.771 5.514 17.571 2.943 15.943.8 13.8M83.6 5.829C82.057 7.971 80 9.857 77.257 11.229 75.543 12.086 73.486 11.743 72.2 10.371 66.886 4.629 57.714.6 43.914.6 30.2.6 21.029 4.629 15.629 10.371 14.343 11.743 12.286 12.086 10.571 11.229 7.829 9.857 5.771 7.971 4.229 5.829M48.371 71.743C48.543 64.114 49.314 52.714 52.314 50.143 56.857 46.286 69.629 46.543 75.629 35.057 77.771 30.943 78.543 26.229 77.857 21.6 77.686 20.4 78.371 19.286 79.486 18.771 82.314 17.571 84.886 15.943 87.029 13.8" class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="m-end-w-active" transform="translate(350 46)">
                                                <g class="m-org  Половой  член" transform="translate(1 312)">
                                                    <g transform="translate(0 17)">
                                                        <path stroke="#606D88" d="M10.5039075 7.71484351L134.000001 7.71484541 210.445314 24.944"/>
                                                        <circle cx="8.285" cy="8.341" r="8" fill="#065BB9" class="blur" filter="url(#d)" opacity=".695"/>
                                                        <circle cx="10.285" cy="7.341" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(164)">
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
                                                <g class="m-org  Яички" transform="translate(14 212)">
                                                    <g transform="translate(0 38)">
                                                        <path stroke="#606D88" d="M7.5546875 68.9062502L121 1.86920147e-7 197.117188 1.86920147e-7"/>
                                                        <circle cx="9.285" cy="70.341" r="9" fill="#065BB9" class="blur" filter="url(#e)" opacity=".695"/>
                                                        <circle cx="7.285" cy="69.341" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(152)">
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
                                                <g class="m-org  ДНК  сперматозоидов" transform="translate(0 110)">
                                                    <g transform="translate(0 44)">
                                                        <path stroke="#606D88" d="M8.36719409 153.785156L135.000007 0.945312576 210.874976 0.945312576"/>
                                                        <circle cx="8.285" cy="150.341" r="8" fill="#065BB9" class="blur" filter="url(#f)" opacity=".695"/>
                                                        <circle cx="8.285" cy="153.341" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(166)">
                                                        <g class="gr-m">
                                                            <circle cx="45.333" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(5 33)">
                                                                <path d="M30.305 3.6L30.305 20.4M36.99.6L36.99 23.4M73.076 3.6L73.076 20.4M79.848.6L79.848 23.4M43.676.6L43.676 23.4M50.362 3.686L50.362 20.314M.133.6L.133 23.4M6.819 3.686L6.819 20.314"/>
                                                            </g>
                                                            <path stroke="#5F98D7" stroke-width="1.5" d="M88.019 30.771C78.248 30.771 72.933 36.514 68.048 42.857M64.79 47.229C59.99 53.486 54.848 59.229 45.333 59.229 23.905 59.229 24.419 30.857 2.648 30.857" class="m-item"/>
                                                            <path stroke="#5F98D7" stroke-width="1.5" d="M88.019 59.229C66.333 59.229 66.505 30.857 45.333 30.857 35.648 30.857 30.505 36.686 25.619 43.029M22.19 47.571C17.476 53.743 12.248 59.229 2.648 59.229" class="m-item"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
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
                <!--  Section #3   -->
                <div class="row  block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="columh-block">
                            <article>
                                <h3 class="title-article after-line"><?= $content[2]->title ?></h3>
                                <?= $content[2]->description ?>


                                <h3 class="title-article after-line"><?= $content[3]->title ?></h3>
                                <?= $content[3]->description ?>


                                <h3 class="title-article after-line"><?= $content[4]->title ?></h3>
                                <?= $content[4]->description ?>


                                <h3 class="title-article after-line"><?= $content[5]->title ?></h3>
                                <?= $content[5]->description ?>


                                <h3 class="title-article after-line"><?= $content[6]->title ?></h3>
                                <?= $content[6]->description ?>

                            </article>
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
                            <article>
                                <h3 class="title-article after-line"><?= $content[7]->title ?></h3>
                                <?= $content[7]->description ?>


                                <div class="not-col">
                                    <h3 class="title-article after-line"><?= $content[8]->title ?></h3>
                                    <?= $content[8]->description ?>

                                </div>
                                <h3 class="title-article after-line"><?= $content[9]->title ?></h3>
                                <?= $content[9]->description ?>

                                <h3 class="title-article after-line"><?= $content[10]->title ?></h3>
                                <?= $content[10]->description ?>

                            </article>
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
                            <h4 class="note-dr-footer">Этот препарат может быть полезен в решении проблемы привычных выкидышей</h4>
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
                          <!--  <div class="wr-note-drugs-article">
                            <span class="note-drugs-article">
                                 Этот препарат может быть полезен в решении проблемы привычных выкидышей.
                            </span>
                            </div>-->
                        </div>
                        <!--  List Problem   -->
                        <div class="drug-article-right p-pr-l">
                            <?= yii\base\View::render('@frontend/views/site/other_tags'); ?>
                            <div class="tag-item txt-center">
                                <ul class="l-p-c-a">
                                    <li><a href="/zdorovie_semejnoj_pary/zhenskoe_besplodie"><i
                                                class="reproduction-tags-2"></i>Женское бесплодие</a>
                                    </li>
                                    <li><a href="/zdorovie_semejnoj_pary/podgotovka_k_vrt"><i
                                                class="reproduction-tags-2"></i>Подготовка к ВРТ и ЭКО</a>
                                    </li>
                                    <li><a href="/zdorovie_semejnoj_pary/planirovanie_pervogo_rebenka_posle_35_let"><i
                                                class="reproduction-tags-2"></i>Планирование первого ребенка после
                                            35
                                            лет</a>
                                    </li>
                                    <li><a href="/zdorovie_semejnoj_pary/muzhskoe_besplodie"><i
                                                class="reproduction-tags-2"></i>Мужское бесплодие</a></li>

                                </ul>
                            </div>
                            <!--<div class="wr-note-drugs-article">
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
<?php
$script = <<< JS
function setSvgProblem(){
    var menEndWomenAll = {
    penisWM: attr = {
        class: "men-fill",
        insert: ".penisWM-item",
        insertOrgan: ".penisWM-organ",
        name: "penisWM",
        category: "men",
        organCircle: {
            circleWr: 'M591.667,401m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
        },
        circleSmall: [365.285, 379.341, 5],
        path: "M365.53,379.944l145.628,20.391l79.896,0",
        organPath: {
            p0: "M602.895,378.371c0,3.686 -5.057,6.686 -11.228,6.686c-6.172,0 -11.229,-3 -11.229,-6.686c0,-3.685 5.057,-5.142 11.229,-5.142c6.171,0 11.228,1.457 11.228,5.142Z",
            p4: "M607.61,400.4c0,0 -1.8,0.6 -1.2,2.314c0.6,1.715 2.314,1.115 2.314,1.115c2.828,-0.943 6.171,1.457 7.371,5.314c1.2,3.857 -0.085,7.714 -2.914,8.657c0,0 -1.629,0.943 -1.2,2.486c0.514,1.543 2.314,0.943 2.314,0.943c4.629,-1.458 6.943,-7.372 5.143,-13.115c-1.8,-5.743 -7.114,-9.171 -11.828,-7.714Z",
            p5: "M613.181,361.743c-4.543,7.8 -7.8,17.657 1.371,25.628c13.715,12 3.943,18.429 3.943,18.429",
            p6: "M575.381,400.4c0,0 1.8,0.6 1.2,2.314c-0.6,1.715 -2.314,1.115 -2.314,1.115c-2.829,-0.943 -6.172,1.457 -7.372,5.314c-1.2,3.857 0.086,7.714 2.915,8.657c0,0 1.628,0.943 1.2,2.486c-0.515,1.543 -2.315,0.943 -2.315,0.943c-4.628,-1.458 -6.943,-7.372 -5.143,-13.115c1.8,-5.743 7.115,-9.171 11.829,-7.714Z",
            p7: "M569.81,361.743c4.542,7.8 7.8,17.657 -1.372,25.628c-13.714,12 -3.943,18.429 -3.943,18.429",
            p8: "M608.739,403.918c2.838,-0.908 6.138,1.464 7.363,5.294c1.225,3.83 -0.085,7.676 -2.923,8.584c-2.839,0.908 -6.138,-1.464 -7.363,-5.293c-1.225,-3.83 0.084,-7.676 2.923,-8.585Z",
            p9: "M569.856,417.74c-2.838,-0.908 -4.148,-4.754 -2.923,-8.584c1.226,-3.83 4.525,-6.202 7.363,-5.294c2.839,0.909 4.149,4.755 2.923,8.585c-1.225,3.829 -4.524,6.201 -7.363,5.293Z"
        },
        organMain: {
            p1: "M591.667,437.771l0,-35.314c0,-11.657 8.914,-12.257 10.028,-11.571c1.972,1.2 0.943,2.914 0.086,4.028c-0.857,1.115 -2.829,2.486 -2.829,5.829c0,3.343 0,20.657 0,22.286c0,1.2 1.115,0 2.143,2.314c0.943,2.314 -1.8,10.028 -4.714,11.4c-2.314,1.114 -4.714,1.028 -4.714,1.028Z",
            p2: "M591.667,437.771l0,-35.314c0,-11.657 -8.915,-12.257 -10.029,-11.571c-1.971,1.2 -0.943,2.914 -0.086,4.028c0.858,1.115 2.829,2.486 2.829,5.829c0,3.343 0,20.657 0,22.286c0,1.2 -1.114,0 -2.143,2.314c-0.943,2.314 1.8,10.028 4.714,11.4c2.4,1.114 4.715,1.028 4.715,1.028Z",
            p3: "M595.438,392.6c-1.028,-0.514 -2.314,-0.771 -3.771,-0.771c-1.457,0 -2.743,0.342 -3.772,0.771"
        }
    },
    testiclesWM: attr = {
        class: "men-fill",
        insert: ".testiclesWM-item",
        insertOrgan: ".testiclesWM-organ",
        name: "testiclesWM",
        category: "men",
        organCircle: {
            circleWr: 'M591,301m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
        },
        circleSmall: [370.285, 366.341, 5],
        path: "M370.153,366.418l141.523,-64.297l80.089,0",
        organPath: {
            p0: "M602.229,278.371c0,3.686 -5.058,6.686 -11.229,6.686c-6.171,0 -11.229,-3 -11.229,-6.686c0,-3.685 5.058,-5.142 11.229,-5.142c6.171,0 11.229,1.457 11.229,5.142Z",
            p1: "M591,337.771l0,-35.314c0,-11.657 8.914,-12.257 10.029,-11.571c1.971,1.2 0.942,2.914 0.085,4.028c-0.857,1.115 -2.828,2.486 -2.828,5.829c0,3.343 0,20.657 0,22.286c0,1.2 1.114,0 2.143,2.314c0.942,2.314 -1.8,10.028 -4.715,11.4c-2.4,1.114 -4.714,1.028 -4.714,1.028Z",
            p2: "M591,337.771l0,-35.314c0,-11.657 -8.914,-12.257 -10.114,-11.571c-1.972,1.2 -0.943,2.914 -0.086,4.028c0.857,1.115 2.829,2.486 2.829,5.829c0,3.343 0,20.657 0,22.286c0,1.2 -1.115,0 -2.143,2.314c-0.943,2.314 1.8,10.028 4.714,11.4c2.4,1.114 4.8,1.028 4.8,1.028Z",
            p3: "M594.686,292.6c-1.029,-0.514 -2.315,-0.771 -3.772,-0.771c-1.457,0 -2.743,0.342 -3.771,0.771",
            p4: "M606.943,300.4c0,0 -1.8,0.6 -1.2,2.314c0.6,1.715 2.314,1.115 2.314,1.115c2.829,-0.943 6.172,1.457 7.372,5.314c1.2,3.857 -0.086,7.714 -2.915,8.657c0,0 -1.628,0.943 -1.2,2.486c0.515,1.543 2.315,0.943 2.315,0.943c4.628,-1.458 6.942,-7.372 5.142,-13.115c-1.8,-5.743 -7.2,-9.171 -11.828,-7.714Z",
            p5: "M612.429,261.743c-4.543,7.8 -7.8,17.657 1.371,25.628c13.714,12 3.943,18.429 3.943,18.429",
            p6: "M574.629,300.4c0,0 1.8,0.6 1.2,2.314c-0.6,1.715 -2.315,1.115 -2.315,1.115c-2.828,-0.943 -6.171,1.457 -7.371,5.314c-1.2,3.857 0.086,7.714 2.914,8.657c0,0 1.629,0.943 1.2,2.486c-0.514,1.543 -2.314,0.943 -2.314,0.943c-4.629,-1.458 -6.943,-7.372 -5.143,-13.115c1.8,-5.743 7.2,-9.171 11.829,-7.714Z",
            p7: "M569.143,261.743c4.543,7.8 7.8,17.657 -1.372,25.628c-13.714,12 -3.942,18.429 -3.942,18.429"
        },
        organMain: {
            p8: "M608.07,303.906c2.839,-0.908 6.138,1.464 7.363,5.293c1.225,3.83 -0.084,7.676 -2.923,8.585c-2.838,0.908 -6.137,-1.464 -7.363,-5.294c-1.225,-3.83 0.085,-7.676 2.923,-8.584Z",
            p9: "M569.109,317.728c-2.838,-0.908 -4.148,-4.755 -2.923,-8.585c1.225,-3.829 4.525,-6.201 7.363,-5.293c2.838,0.908 4.148,4.755 2.923,8.584c-1.225,3.83 -4.524,6.202 -7.363,5.294Z"
        }
    },
    dnaMen: attr = {
        class: "men-fill",
        insert: ".dnaMen-item",
        insertOrgan: ".dnaMen-organ",
        name: "dnaMen",
        category: "men",
        organCircle: {
            circleWr: 'M592.333,201m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
        },
        circleSmall: [364.285, 354.341, 5],
        path: "M364.762,354.429l146.789,-152.099l79.571,0",
        organPath: {
            p0: "M582.305,192.6l0,16.8",
            p1: "M588.99,189.6l0,22.8",
            p2: "M625.076,192.6l0,16.8",
            p3: "M631.848,189.6l0,22.8",
            p4: "M595.676,189.6l0,22.8",
            p5: "M602.362,192.686l0,16.628",
            p6: "M552.133,189.6l0,22.8",
            p7: "M558.819,192.686l0,16.628"
        },
        organMain: {
            p8: "M635.019,186.771c-9.771,0 -15.086,5.743 -19.971,12.086",
            p9: "M611.79,203.229c-4.8,6.257 -9.942,12 -19.457,12c-21.428,0 -20.914,-28.372 -42.685,-28.372",
            p10: "M635.019,215.229c-21.686,0 -21.514,-28.372 -42.686,-28.372c-9.685,0 -14.828,5.829 -19.714,12.172",
            p11: "M569.19,203.571c-4.714,6.172 -9.942,11.658 -19.542,11.658"
        }
    },
    uterusW: attr = {
        class: "women-fill",
        insert: ".uterusW-item",
        insertOrgan: ".uterusW-organ",
        name: "uterusW",
        category: "women",
        organCircle: {
            circleWr: 'M51,401m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
        },
        circleSmall: [217.285, 344.341, 5],
        path: "M217.606,345.442l-85.997,55.698l-81.25,0",
        organPath: {
            p0: "M51,394.486c4.886,-0.086 9.086,-1.629 13.543,-3.429c-2.657,1.886 -5.057,3.257 -7.2,5.572c-3.257,3.6 -5.486,7.971 -6.343,12.771",
            p1: "M82.029,404.857c0,0.257 -0.086,0.686 0.085,0.857c0.086,0.086 0.257,0.172 0.343,0.172c0.514,0.085 0.857,-0.343 1.2,-0.6c0.343,-0.257 0.6,-0.6 0.943,-0.857c0.686,-0.686 1.286,-1.458 1.886,-2.229c1.285,-1.8 2.228,-3.857 2.571,-6c0,-0.086 0,-0.086 0,-0.171c0.772,-4.543 -0.857,-11.229 -8.314,-12.515c-7.457,-1.285 -10.286,3.172 -13.886,3.429",
            p2: "M76.971,395.429c-0.342,-0.086 -0.685,-0.258 -0.771,-0.686c-0.171,-1.029 2.143,-0.943 2.657,-0.857c1.029,0.085 2.057,0.257 3.086,0.343c0.6,0 1.286,0 1.8,-0.343c1.371,-0.857 1.628,-4.972 -3.257,-6.172c-4.886,-1.2 -8.829,1.2 -10.8,3.772",
            p3: "M25.029,395.429c0.342,-0.086 1.114,-0.172 1.028,-0.686c0,-0.172 -0.171,-0.429 -0.343,-0.514c-0.171,-0.086 -0.343,-0.172 -0.6,-0.258c-0.171,0 -0.343,-0.085 -0.428,-0.085c-1.2,-0.172 -2.4,0 -3.6,0.171c-0.943,0.172 -2.143,0.257 -3,-0.257c-1.372,-0.857 -1.629,-4.971 3.257,-6.171c4.886,-1.2 8.828,1.2 10.8,3.771",
            p4: "M35.057,386.943c-3.6,-0.343 -6.428,-4.714 -13.886,-3.429c-7.457,1.2 -9,7.886 -8.314,12.429c0.343,2.228 1.372,4.286 2.657,6.171c0.429,0.686 0.943,1.286 1.457,1.886c0.515,0.514 1.029,1.2 1.715,1.543c0.257,0.171 0.514,0.257 0.771,0.257c0.086,0 0.257,0 0.343,-0.086c0.257,-0.171 0.171,-0.6 0.171,-0.857",
            p5: "M51,394.486c-4.886,-0.086 -9.086,-1.629 -13.543,-3.429c2.657,1.886 5.057,3.257 7.2,5.572c3.257,3.6 5.486,7.971 6.343,12.771",
            p6: "M51,409.486l0,30.514",
            p9: "M82.029,404.857c1.285,-0.771 2.142,-1.971 2.314,-3.343c0.428,-2.828 -2.143,-5.571 -5.657,-6.085c-0.6,-0.086 -1.2,-0.086 -1.8,-0.086c-2.743,0.257 -4.972,1.971 -5.315,4.286c-0.428,2.828 2.143,5.571 5.658,6.085c1.8,0.257 3.514,-0.085 4.8,-0.857Z",
            p10: "M19.971,404.857c1.286,0.772 3,1.2 4.8,0.943c3.515,-0.514 6,-3.171 5.658,-6.086c-0.343,-2.314 -2.572,-4.028 -5.315,-4.285c-0.6,-0.086 -1.2,0 -1.8,0.085c-3.514,0.515 -6,3.172 -5.657,6.086c0.172,1.286 1.029,2.486 2.314,3.257Z"
        },
        organMain: {
            p7: "M32.229,391.4c1.971,2.571 2.228,6.943 5.228,11.229c3,4.285 7.029,4.971 8.143,8.571c1.114,3.6 0.086,13.971 0.171,17.229c0.172,3.342 1.629,10.114 2.572,10.971c0.857,0.857 2.657,0.514 2.657,0.514c0,0 1.8,0.343 2.657,-0.514c0.857,-0.857 2.4,-7.629 2.572,-10.971c0.171,-3.343 -0.943,-13.629 0.171,-17.229c1.114,-3.6 5.143,-4.286 8.143,-8.571c3,-4.286 3.257,-8.658 5.228,-11.229",
            p8: "M35.057,386.943c3.6,0.343 8.229,-3.943 15.943,-3.943c7.714,0 12.343,4.286 15.943,3.943"
        }
    },
    ovariesW: attr = {
        class: "women-fill",
        insert: ".ovariesW-item",
        insertOrgan: ".ovariesW-organ",
        name: "ovariesW",
        category: "women",
        organCircle: {
            circleWr: 'M51,301m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
        },
        circleSmall: [212.285, 332.341, 5],
        path: "M212.34,333.132l-81.25,-31.805l-81.226,0",
        organPath: {
            p0: "M51,294.486c4.886,-0.086 9.086,-1.629 13.543,-3.429c-2.657,1.886 -5.057,3.257 -7.2,5.572c-3.257,3.6 -5.486,7.971 -6.343,12.771",
            p1: "M82.029,304.857c0,0.257 -0.086,0.686 0.085,0.857c0.086,0.086 0.257,0.172 0.343,0.172c0.514,0.085 0.857,-0.343 1.2,-0.6c0.343,-0.257 0.6,-0.6 0.943,-0.857c0.686,-0.686 1.286,-1.458 1.886,-2.229c1.285,-1.8 2.228,-3.857 2.571,-6c0,-0.086 0,-0.086 0,-0.171c0.772,-4.543 -0.857,-11.229 -8.314,-12.515c-7.457,-1.285 -10.286,3.172 -13.886,3.429",
            p2: "M76.971,295.429c-0.342,-0.086 -0.685,-0.258 -0.771,-0.686c-0.171,-1.029 2.143,-0.943 2.657,-0.857c1.029,0.085 2.057,0.257 3.086,0.343c0.6,0 1.286,0 1.8,-0.343c1.371,-0.857 1.628,-4.972 -3.257,-6.172c-4.886,-1.2 -8.829,1.2 -10.8,3.772",
            p3: "M25.029,295.429c0.342,-0.086 1.114,-0.172 1.028,-0.686c0,-0.172 -0.171,-0.429 -0.343,-0.514c-0.171,-0.086 -0.343,-0.172 -0.6,-0.258c-0.171,0 -0.343,-0.085 -0.428,-0.085c-1.2,-0.172 -2.4,0 -3.6,0.171c-0.943,0.172 -2.143,0.257 -3,-0.257c-1.372,-0.857 -1.629,-4.971 3.257,-6.171c4.886,-1.2 8.828,1.2 10.8,3.771",
            p4: "M35.057,286.943c-3.6,-0.343 -6.428,-4.714 -13.886,-3.429c-7.457,1.2 -9,7.886 -8.314,12.429c0.343,2.228 1.372,4.286 2.657,6.171c0.429,0.686 0.943,1.286 1.457,1.886c0.515,0.514 1.029,1.2 1.715,1.543c0.257,0.171 0.514,0.257 0.771,0.257c0.086,0 0.257,0 0.343,-0.086c0.257,-0.171 0.171,-0.6 0.171,-0.857",
            p5: "M51,294.486c-4.886,-0.086 -9.086,-1.629 -13.543,-3.429c2.657,1.886 5.057,3.257 7.2,5.572c3.257,3.6 5.486,7.971 6.343,12.771",
            p6: "M51,309.486l0,30.514",
            p7: "M32.229,291.4c1.971,2.571 2.228,6.943 5.228,11.229c3,4.285 7.029,4.971 8.143,8.571c1.114,3.6 0.086,13.971 0.171,17.229c0.172,3.342 1.629,10.114 2.572,10.971c0.857,0.857 2.657,0.514 2.657,0.514c0,0 1.8,0.343 2.657,-0.514c0.857,-0.857 2.4,-7.629 2.572,-10.971c0.171,-3.343 -0.943,-13.629 0.171,-17.229c1.114,-3.6 5.143,-4.286 8.143,-8.571c3,-4.286 3.257,-8.658 5.228,-11.229",
            p8: "M35.057,286.943c3.6,0.343 8.229,-3.943 15.943,-3.943c7.714,0 12.343,4.286 15.943,3.943"
        },
        organMain: {
            p9: "M82.029,304.857c1.285,-0.771 2.142,-1.971 2.314,-3.343c0.428,-2.828 -2.143,-5.571 -5.657,-6.085c-0.6,-0.086 -1.2,-0.086 -1.8,-0.086c-2.743,0.257 -4.972,1.971 -5.315,4.286c-0.428,2.828 2.143,5.571 5.658,6.085c1.8,0.257 3.514,-0.085 4.8,-0.857Z",
            p10: "M19.971,304.857c1.286,0.772 3,1.2 4.8,0.943c3.515,-0.514 6,-3.171 5.658,-6.086c-0.343,-2.314 -2.572,-4.028 -5.315,-4.285c-0.6,-0.086 -1.2,0 -1.8,0.085c-3.514,0.515 -6,3.172 -5.657,6.086c0.172,1.286 1.029,2.486 2.314,3.257Z"
        }
    },
    urinary_bladderWomen: attr = {
        class: "women-fill",
        insert: ".urinary_bladderWomen-item",
        insertOrgan: ".urinary_bladderWomen-organ",
        name: "urinary_bladderWomen",
        category: "women",
        organCircle: {
            circleWr: 'M51,201m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
        },
        circleSmall: [209.285, 319.341, 5],
        path: "M209.309,319.21l-78.112,-118.018l-80.263,0",
        organPath: {
            p0: "M50.914,242.229c0,-1.8 0.086,-3.772 0.257,-5.915c0.6,-9.771 2.229,-14.914 4.972,-17.143c1.971,-1.628 4.543,-2.571 7.371,-3.514c4.8,-1.628 10.2,-3.514 13.2,-9.257c2.657,-4.971 2.486,-9.429 -0.428,-14.229c-2.4,-3.942 -8.829,-10.885 -25.372,-10.885c-16.543,0 -22.971,6.943 -25.371,10.885c-2.914,4.8 -3.086,9.258 -0.429,14.229c3,5.743 8.486,7.629 13.2,9.257c2.829,0.943 5.4,1.886 7.372,3.514c2.743,2.315 4.371,7.458 4.971,17.143c0.172,2.143 0.257,4.2 0.257,5.915",
            p1: "M51.171,246c-0.085,0 -0.085,0 -0.171,0c-0.086,0 -0.171,0 -0.257,0",
            p3: "M28.286,202.971c0.514,1.543 1.628,2.915 3.171,3.429c0.6,0.171 1.286,0.257 1.886,0.429c1.028,0.257 2.057,0.685 2.828,1.371c0.772,0.686 1.286,1.714 1.286,2.743",
            p4: "M41.743,209.571c-0.086,1.8 1.028,3.686 2.743,4.372c0.857,0.343 1.8,0.428 2.657,0.771c1.543,0.686 2.657,2.315 2.914,3.943",
            p5: "M34.543,199.714c0.857,0.857 1.714,1.715 2.914,2.057c0.772,0.172 1.629,0.172 2.4,0.172c1.972,0.086 4.029,0.943 4.8,2.657",
            p6: "M28.286,197.914c0.6,-1.285 1.971,-2.228 3.428,-2.4c1.029,-0.085 1.972,0.172 3,0.172c1.372,0 2.743,-0.515 3.772,-1.457",
            p7: "M35.829,190.286c1.628,-1.629 4.114,-2.315 6.428,-1.8c0.943,0.171 1.8,0.6 2.657,0.685c1.543,0.172 3.172,-0.514 4.115,-1.714",
            p8: "M74.486,202.114c-0.515,1.543 -1.629,2.915 -3.172,3.429c-0.6,0.171 -1.285,0.257 -1.885,0.428c-1.029,0.258 -2.058,0.686 -2.829,1.372c-0.771,0.686 -1.286,1.714 -1.286,2.743",
            p9: "M61.029,209.571c0.085,1.8 -1.029,3.686 -2.743,4.372c-0.857,0.343 -1.8,0.428 -2.657,0.771c-1.543,0.686 -2.658,2.315 -2.915,3.943",
            p10: "M68.143,199.114c-0.857,0.857 -1.714,1.715 -2.914,2.057c-0.772,0.172 -1.629,0.172 -2.4,0.172c-1.972,0.086 -4.029,0.943 -4.8,2.657",
            p11: "M73.286,197.143c-0.6,-1.286 -1.972,-2.229 -3.429,-2.4c-1.028,-0.086 -1.971,0.171 -3,0.171c-1.371,0 -2.743,-0.514 -3.771,-1.457",
            p12: "M66.171,190.286c-1.628,-1.629 -4.114,-2.315 -6.428,-1.8c-0.943,0.171 -1.8,0.6 -2.657,0.685c-1.543,0.172 -3.172,-0.514 -4.115,-1.714",
            p13: "M50.829,196.114c-0.6,1.286 -0.943,2.915 -0.343,4.2c0.343,0.686 1.028,1.286 1.2,2.057c0.343,1.2 -0.343,2.486 -1.115,3.515",
            p14: "M50.914,242.229l0,3.771"
        },
        organMain: {
            p15: "M46.457,245.743c-0.171,-7.629 -0.943,-19.029 -3.943,-21.6c-4.543,-3.857 -17.314,-3.6 -23.314,-15.086c-2.143,-4.114 -2.914,-8.828 -2.229,-13.457c0.172,-1.2 -0.514,-2.314 -1.628,-2.829c-2.829,-1.2 -5.4,-2.828 -7.543,-4.971",
            p16: "M90.6,179.829c-1.543,2.142 -3.6,4.028 -6.343,5.4c-1.714,0.857 -3.771,0.514 -5.057,-0.858c-5.314,-5.742 -14.486,-9.771 -28.286,-9.771c-13.714,0 -22.885,4.029 -28.285,9.771c-1.286,1.372 -3.343,1.715 -5.058,0.858c-2.742,-1.372 -4.8,-3.258 -6.342,-5.4",
            p17: "M55.371,245.743c0.172,-7.629 0.943,-19.029 3.943,-21.6c4.543,-3.857 17.315,-3.6 23.315,-15.086c2.142,-4.114 2.914,-8.828 2.228,-13.457c-0.171,-1.2 0.514,-2.314 1.629,-2.829c2.828,-1.2 5.4,-2.828 7.543,-4.971"
        }
    }
};
    return menEndWomenAll;
}
$(function () {
    animateThis("#couples-svg");
    setTimeout(function () {
        callForEachDown.start(downContentHelp, [0, 1, 2, 3], 500);
    }, 800);
    var controller1 = new ScrollMagic.Controller();
    new ScrollMagic.Scene({triggerElement: "#human-woman", triggerHook: 0.8, reverse: false})
        .on("start end", function (e) {
            itemHumanStart('#human-woman', setSvgProblem());
        })
        .addTo(controller1);
});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
<?php if (Yii::$app->params['browserOld9']) {
    $scriptColumn = <<< JS
var flag = false;
$('.column-svg').columnize({
   width: 430,
    doneFunc: function () {
        if (flag) {
           itemHumanStart('#human-woman', setSvgProblem());
        } else {
            flag = true;
        }

    }
});
$('.columh-block').columnize({width: 430});
JS;
    $this->registerJs($scriptColumn, yii\web\View::POS_READY);
}
?>
