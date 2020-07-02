<!-- Header bg-header-top-old
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-old">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>

                    <div class="p-r-in-bl">
                        <h1 class="BebasNeueBold header-color title-problem-header">Мужчина <br> старше 35 лет</h1>
                        <!--  SVG   -->
                                <span class="wr-svg-header">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122" class="svg-slider-category">
  <g fill="none" stroke="#2A2C35" transform="translate(-1572 -1720)">
    <g transform="translate(1573 1721)">
      <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
      <path d="M56.948 67.574L65.488 67.574 67.908 61.836 67.908 77.166 72.928 55.906 72.795 71.986 75.795 64.328 86.39 64.328"/>
      <path d="M96.685,64.536 L60.057,101.176 L23.429,64.536 C16.661,57.766 16.661,46.584 23.429,39.816 C26.664,36.578 31.077,34.666 35.784,34.666 C40.491,34.666 44.904,36.43 48.14,39.816 L58.29,49.966 L51.23,57.178 C50.79,57.618 50.79,58.503 51.23,58.943 C51.524,59.237 51.82,59.237 52.113,59.237 C52.407,59.237 52.701,59.091 52.995,58.943 L60.938,50.998 L71.97,39.963 C75.207,36.725 79.62,34.811 84.327,34.811 C89.034,34.811 93.447,36.578 96.683,39.964 C103.597,46.584 103.597,57.767 96.683,64.536 L96.685,64.536 Z"/>
    </g>
  </g>
</svg>
                                </span>
                    </div>

                    <h3>Возрастные изменения</h3>
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
            <!-- TXT Возрастные изменения в организме мужчины
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
                            <div class="bg-50 m-img-bg" data-mh="group-im-pr"></div>
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
                                    <g fill="none" fill-rule="evenodd" transform="translate(-2237 -46)">
                                        <g transform="translate(2237 46)">
                                            <path fill="#F7F7F7" d="M0 0H630V500H0z"/>
                                            <image xlink:href="/img/index-img/men@2x.min.png" width="286.002" height="500" x="172" y="1"/>
                                            <g class="m-end-w" transform="translate(19 133)">
                                                <g class="m-org  Половой  член" transform="translate(286 168)">
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
                                                <g class="m-org  Яички" transform="translate(296 1)">
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
                                                <g class="m-org  Сердечно-сосудистая  система" transform="translate(3 100)">
                                                    <g transform="translate(38)">
                                                        <path stroke="#606D88" d="M297.050781 11.4960938L85.0039063 105.773436 0.140624988 105.773436"/>
                                                        <circle cx="298.357" cy="9.514" r="9" fill="#065BB9" class="blur" filter="url(#c)" opacity=".695"/>
                                                        <circle cx="296.357" cy="10.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(0 70)">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45.5" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(3 2)">
                                                                <path d="M31.114 42.814C31.114 42.814 33.771 37.671 36.771 35.271 39.429 33.214 42.257 31.843 42.257 31.843L37.114 30.043C37.114 30.043 36.857 29.014 38.314 27.814 39.771 26.614 41.229 26.443 41.229 26.443 41.229 26.443 43.714 26.786 45.086 27.386 47.143 28.329 48.257 29.443 48.257 29.443 48.257 29.443 50.829 28.757 54.857 28.843 58.714 28.929 64.2 29.786 63.171 34.329 62.143 38.786 59.486 36.3 57 35.957 54.343 35.614 51.257 36.814 49.371 38.786M25.2 47.443C26.057 50.443 26.914 53.529 28.371 56.271 29.829 59.014 32.057 61.5 34.971 62.786 35.829 63.129 36.771 63.386 37.714 63.814 39.343 64.5 40.886 65.443 42.257 66.729"/>
                                                                <path d="M50.057 38.786C53.571 40.929 55.543 44.871 56.829 48.814 57.171 49.843 57.429 50.871 57.514 51.986 57.6 53.871 57 55.843 55.971 57.386 54.943 58.929 53.4 60.214 51.686 61.071 51.171 61.329 50.571 61.586 49.971 61.843M61.543 67.5C61.114 66.3 60.257 65.271 59.229 64.5 58.2 63.729 57 63.214 55.8 62.7M55.629 57.643C55.886 61.929 55.2 66.214 53.743 70.243M32.486 61.071C33.343 60.043 34.457 59.271 35.743 58.843 38.4 58.071 41.314 59.1 43.971 58.329M62.143 30.9C61.457 30.643 60.771 30.986 60.171 31.329 59.229 32.014 58.543 33.129 58.543 34.329 58.543 35.529 59.314 36.729 60.429 36.986M27.686 30.3C27.857 27.3 29.4 24.386 31.629 22.329 33.857 20.271 36.771 19.071 39.857 18.729 43.114 18.3 46.543 18.814 49.2 20.7 51.857 22.586 53.743 25.671 53.486 28.929M56.486 35.957C58.371 36.986 59.486 39.3 59.229 41.443"/>
                                                                <path d="M38.4 34.157C35.057 31.157 31.029 30.043 27.343 30.471 24.514 25.5 27 20.271 27.857 15.043 28.543 10.5 28.543 5.614 27.943.729M21.514 58.157C20.829 56.786 20.314 55.414 19.8 54.043 18.686 50.871 18.257 47.529 18.171 44.186 18.086 40.414 19.629 36.043 17.829 32.443 16.371 29.614 13.114 27.729 10.286 26.7 7.2 25.586 3.771 25.414.514 25.757M3.771 19.671C5.743 19.671 7.714 19.843 9.6 20.271 10.543 20.443 11.4 20.7 12.343 20.871 14.4 21.3 16.8 21.471 18.514 20.014 21.429 17.7 22.029 12.9 22.457 9.386 22.714 7.243 22.714 5.1 22.543 2.871M42.686 18.471C44.829 14.786 47.057 11.1 49.886 7.843 52.114 5.271 54.6 2.957 57.429 1.243M47.571 19.757C49.714 16.329 51.943 12.986 54.6 10.071 57 7.5 59.743 5.186 62.914 3.643"/>
                                                            </g>
                                                            <path stroke="#5F98D7" stroke-width="1.5" d="M52.371,40.786 C50.486,42.757 48.343,47.9 48.343,47.9 C48.343,47.9 44.571,46.443 41.657,45.843 C38.229,45.071 34.114,44.814 34.114,44.814 C34.114,44.814 30.086,46.786 28.114,49.786 C25.971,53.043 25.114,55.271 24.514,60.157 C26.4,64.014 29.057,67.614 32.314,70.443 C39.429,76.786 52.8,82.957 58.886,81.586 C65.143,80.214 69.257,68.386 68.657,56.386 C68.057,45.243 59.829,40.529 52.714,40.786" class="m-item"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="m-org  Кожа" transform="translate(0 3)">
                                                    <g transform="translate(44 40)">
                                                        <path stroke="#606D88" d="M148.976563 52.0703125L76 0.773435699 0.140624988 0.773435699"/>
                                                        <circle cx="152.357" cy="52.514" r="9" fill="#065BB9" class="blur" filter="url(#d)" opacity=".695"/>
                                                        <circle cx="150.357" cy="53.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45.5" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(0 9)">
                                                                <circle cx="51.086" cy="60.586" r="2.4"/>
                                                                <circle cx="65.829" cy="51.243" r="2.4"/>
                                                                <circle cx="76.114" cy="58.871" r="2.4"/>
                                                                <circle cx="61.286" cy="68.471" r="2.4"/>
                                                                <circle cx="22.286" cy="64.614" r="2.4"/>
                                                                <circle cx="16.286" cy="50.471" r="2.4"/>
                                                                <circle cx="32.914" cy="56.3" r="2.4"/>
                                                                <circle cx="40.371" cy="72.929" r="2.4"/>
                                                                <path d="M53.743 42.5L53.743 37.271C53.743 35.3 55.371 33.671 57.343 33.671 59.314 33.671 60.943 35.3 60.943 37.271L60.943 38.9C60.943 40.871 62.571 42.5 64.543 42.5 66.514 42.5 68.143 40.871 68.143 38.9L68.143 37.271C68.143 35.3 69.771 33.671 71.743 33.671 73.714 33.671 75.343 35.3 75.343 37.271L75.343 38.9C75.343 40.871 76.971 42.5 78.943 42.5 80.914 42.5 82.543 40.871 82.543 38.9L82.543 37.271C82.543 35.3 84.171 33.671 86.143 33.671 88.114 33.671 89.829 35.3 89.829 37.271M36.343 42.5L36.343 37.271C36.343 35.3 34.714 33.671 32.743 33.671 30.771 33.671 29.143 35.3 29.143 37.271L29.143 38.9C29.143 40.871 27.514 42.5 25.543 42.5 23.571 42.5 21.943 40.871 21.943 38.9L21.943 37.271C21.943 35.3 20.314 33.671 18.343 33.671 16.371 33.671 14.743 35.3 14.743 37.271L14.743 38.9C14.743 40.871 13.114 42.5 11.143 42.5 9.171 42.5 7.543 40.871 7.543 38.9L7.543 37.271C7.543 35.3 5.914 33.671 3.943 33.671 1.971 33.671.257 35.3.257 37.271M49.714 43.957C49.714 46.529 47.657 48.586 45.086 48.586 42.514 48.586 40.457 46.529 40.457 43.957 40.457 39.757 42.857 39.929 43.371 33.671 44.571 20.9 45.086.929 45.086.929 45.086.929 45.429 21.071 46.8 33.671 47.4 40.014 49.714 39.929 49.714 43.957L49.714 43.957z"/>
                                                            </g>
                                                            <path stroke="#5F98D7" stroke-width="1.5" d="M2.486,30.757 L32.229,30.757 C35.657,30.757 38.4,33.5 38.4,36.929 L36.086,53.214 C36.086,58.1 40.029,62.129 45,62.129 C49.886,62.129 53.914,58.186 53.914,53.214 L51.6,36.929 C51.6,33.5 54.343,30.757 57.771,30.757 L87.514,30.757" class="m-item"/>
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
                            <h3 class="title-article after-line"><?= $content[2]->title ?></h3>
                            <?= $content[2]->description ?>

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
                            <h4 class="note-dr-footer">Этот препарат поможет замедлить возрастные изменения</h4>
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
                                    <li><a href="/vozrastnye_izmenenija/zhenshhina_starshe_35_let"><i
                                                class="reproduction-tags-2"></i>Женщина старше 35 лет</a>
                                    </li>
                                    <li><a href="/vozrastnye_izmenenija/menopauza"><i
                                                class="reproduction-tags-2"></i>Менопауза</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
