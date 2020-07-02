<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-old">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>

                    <div class="p-r-in-bl">
                        <h1 class="BebasNeueBold header-color title-problem-header">Женщина <br> старше 35 лет</h1>
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
                    <figure class="drugs-article active" data-name-drugs="Менсе">
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
                    <figure class="drugs-article active" data-name-drugs="Цистениум">
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
                            <div class="bg-51 m-img-bg" data-mh="group-im-pr"></div>
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
                                        <filter id="c" width="262.5%" height="262.5%" x="-81.3%" y="-81.3%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="d" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="e" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="translate(-2238 -569)">
                                        <g transform="translate(2238 569)">
                                            <path fill="#F7F7F7" d="M0 0H630V500H0z"/>
                                            <image xlink:href="/img/index-img/woman@2x.min.png" x="191" width="247.485" height="500" />
                                            <g class="w-end-m" transform="translate(25 92)">
                                                <g class="w-org  Матка" transform="translate(0 266)">
                                                    <g transform="translate(45 44)">
                                                        <path stroke="#606D88" d="M245 16.6523438L75 0.562500019 0.679687504 0.562500019"/>
                                                        <circle cx="245.357" cy="15.514" r="8" fill="#065BB9" class="blur" filter="url(#a)" opacity=".695"/>
                                                        <circle cx="244.357" cy="16.514" r="5" fill="#4B6186"/>
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
                                                            <g stroke="#FD5368" stroke-width="1.7" transform="translate(26 27)">
                                                                <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943" class="w-item"/>
                                                            </g>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(11 39)">
                                                                <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="w-org  Яичники" transform="translate(272 224)">
                                                    <g transform="translate(0 41)">
                                                        <path stroke="#606D88" d="M11.6640625 46.8554688L165.695313 46.8554688 266.199219 0.640625"/>
                                                        <circle cx="9.357" cy="45.514" r="9" fill="#065BB9" class="blur" filter="url(#b)" opacity=".695"/>
                                                        <circle cx="11.357" cy="46.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(221)">
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
                                                <g class="w-org  Молочные  железы" transform="translate(317)">
                                                    <g transform="translate(0 46)">
                                                        <path stroke="#606D88" d="M11.8476563 66.6367188L136.285157 0.0742195129 219.652345 0.0742195129"/>
                                                        <circle cx="12.285" cy="65.841" r="12" fill="#065BB9" class="blur" filter="url(#c)" opacity=".695"/>
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
                                                <g class="w-org  Сердечно-сосудистая  система" transform="translate(4 152)">
                                                    <g transform="translate(44 1)">
                                                        <path stroke="#606D88" d="M276.75 9.8984375L75 47.5625 0.679687504 47.5625"/>
                                                        <circle cx="277.357" cy="8.514" r="8" fill="#065BB9" class="blur" filter="url(#d)" opacity=".695"/>
                                                        <circle cx="276.357" cy="9.514" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr">
                                                        <g class="gr-m">
                                                            <circle cx="45" cy="45.5" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(3 2)">
                                                                <path d="M31.114 42.814C31.114 42.814 33.771 37.671 36.771 35.271 39.429 33.214 42.257 31.843 42.257 31.843L37.114 30.043C37.114 30.043 36.857 29.014 38.314 27.814 39.771 26.614 41.229 26.443 41.229 26.443 41.229 26.443 43.714 26.786 45.086 27.386 47.143 28.329 48.257 29.443 48.257 29.443 48.257 29.443 50.829 28.757 54.857 28.843 58.714 28.929 64.2 29.786 63.171 34.329 62.143 38.786 59.486 36.3 57 35.957 54.343 35.614 51.257 36.814 49.371 38.786M25.2 47.443C26.057 50.443 26.914 53.529 28.371 56.271 29.829 59.014 32.057 61.5 34.971 62.786 35.829 63.129 36.771 63.386 37.714 63.814 39.343 64.5 40.886 65.443 42.257 66.729"/>
                                                                <path d="M50.057 38.786C53.571 40.929 55.543 44.871 56.829 48.814 57.171 49.843 57.429 50.871 57.514 51.986 57.6 53.871 57 55.843 55.971 57.386 54.943 58.929 53.4 60.214 51.686 61.071 51.171 61.329 50.571 61.586 49.971 61.843M61.543 67.5C61.114 66.3 60.257 65.271 59.229 64.5 58.2 63.729 57 63.214 55.8 62.7M55.629 57.643C55.886 61.929 55.2 66.214 53.743 70.243M32.486 61.071C33.343 60.043 34.457 59.271 35.743 58.843 38.4 58.071 41.314 59.1 43.971 58.329M62.143 30.9C61.457 30.643 60.771 30.986 60.171 31.329 59.229 32.014 58.543 33.129 58.543 34.329 58.543 35.529 59.314 36.729 60.429 36.986M27.686 30.3C27.857 27.3 29.4 24.386 31.629 22.329 33.857 20.271 36.771 19.071 39.857 18.729 43.114 18.3 46.543 18.814 49.2 20.7 51.857 22.586 53.743 25.671 53.486 28.929M56.486 35.957C58.371 36.986 59.486 39.3 59.229 41.443"/>
                                                                <path d="M38.4 34.157C35.057 31.157 31.029 30.043 27.343 30.471 24.514 25.5 27 20.271 27.857 15.043 28.543 10.5 28.543 5.614 27.943.729M21.514 58.157C20.829 56.786 20.314 55.414 19.8 54.043 18.686 50.871 18.257 47.529 18.171 44.186 18.086 40.414 19.629 36.043 17.829 32.443 16.371 29.614 13.114 27.729 10.286 26.7 7.2 25.586 3.771 25.414.514 25.757M3.771 19.671C5.743 19.671 7.714 19.843 9.6 20.271 10.543 20.443 11.4 20.7 12.343 20.871 14.4 21.3 16.8 21.471 18.514 20.014 21.429 17.7 22.029 12.9 22.457 9.386 22.714 7.243 22.714 5.1 22.543 2.871M42.686 18.471C44.829 14.786 47.057 11.1 49.886 7.843 52.114 5.271 54.6 2.957 57.429 1.243M47.571 19.757C49.714 16.329 51.943 12.986 54.6 10.071 57 7.5 59.743 5.186 62.914 3.643"/>
                                                            </g>
                                                            <path stroke="#FD5368" stroke-width="1.7" d="M52.371,40.786 C50.486,42.757 48.343,47.9 48.343,47.9 C48.343,47.9 44.571,46.443 41.657,45.843 C38.229,45.071 34.114,44.814 34.114,44.814 C34.114,44.814 30.086,46.786 28.114,49.786 C25.971,53.043 25.114,55.271 24.514,60.157 C26.4,64.014 29.057,67.614 32.314,70.443 C39.429,76.786 52.8,82.957 58.886,81.586 C65.143,80.214 69.257,68.386 68.657,56.386 C68.057,45.243 59.829,40.529 52.714,40.786" class="w-item"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="w-org  Кожа" transform="translate(364 111)">
                                                    <g transform="translate(0 21)">
                                                        <path stroke="#606D88" d="M10.5585938 9.66015625L82.59375 30.944 171.445314 30.944"/>
                                                        <circle cx="8.285" cy="8.341" r="8" fill="#065BB9" class="blur" filter="url(#e)" opacity=".695"/>
                                                        <circle cx="9.285" cy="8.341" r="5" fill="#4B6186"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(126)">
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
                                                            <path stroke="#FD5368" stroke-width="1.7" d="M2.486,30.757 L32.229,30.757 C35.657,30.757 38.4,33.5 38.4,36.929 L36.086,53.214 C36.086,58.1 40.029,62.129 45,62.129 C49.886,62.129 53.914,58.186 53.914,53.214 L51.6,36.929 C51.6,33.5 54.343,30.757 57.771,30.757 L87.514,30.757" class="w-item"/>
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
                            <h4 class="note-dr-footer">Эти препараты помогут продлить период активной жизни</h4>
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
                                <!--  Менсе   -->
                                <figure class="figure-article" data-name-drugs="Менсе">
                                    <img class="full-img" src="/img/drugs/drugs-bg/mense-bg.png"
                                         alt="Менсе">
                                    <figcaption>
                                        <a href="/nashi_produkty/sinergin">
                                              <span class="drugs-name-transition">
                                            Менсе
                                                  </span>
                                        </a>
                                    </figcaption>
                                </figure>
                                <!--  Цистениум   -->
                                <figure class="figure-article" data-name-drugs="Цистениум">
                                    <img class="full-img" src="/img/drugs/drugs-bg/cystenium-bg.png"
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
                        <!--  List Problem   -->
                        <div class="drug-article-right p-pr-l">
                            <?= yii\base\View::render('@frontend/views/site/other_tags'); ?>
                            <div class="tag-item txt-center">
                                <ul class="l-p-c-a">
                                    <li><a href="/vozrastnye_izmenenija/muzhchina_starshe_35_let"><i
                                                class="reproduction-tags-2"></i>Мужчина старше 35 лет</a>
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

