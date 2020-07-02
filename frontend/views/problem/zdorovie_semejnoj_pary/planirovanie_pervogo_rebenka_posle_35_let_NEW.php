<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-manWoman">
        <div class="con-hd">
            <div class="left-header txt-right pl-first-baby">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <!--  Down Content Help   -->
                    <div id="wr-down-content">
                        <i class="reproduction-down-lite down"></i>
                        <i class="reproduction-down-lite down"></i>
                        <i class="reproduction-down-lite down"></i>
                    </div>
                    <h1 class="BebasNeueBold header-color title-problem-header">
                        <?= $content[0]->title ?>
                        <!--  SVG   -->
                                <span class="wr-svg-header">
                                    <svg id="couples-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <title>Здоровье семейной пары</title>
                                        <desc><?= $content[0]->title ?></desc>
                                    </svg>
                                </span>
                    </h1>

                    <h3>Здоровье семейной
                        пары</h3>
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
                                    <p><?= $content[0]->description ?></p>
                                </div>

                            </div>
                        </div>
                        <div class="right-article p-pr-l">
                            <div class="bg-35 m-img-bg heights-auto" data-mh="group-im-pr"></div>
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
                            <div class="wr-svg-article active">
                                <img class="full-img" src="/img/menWoman-img-problem/empty.png"
                                     alt="empty">
                                <svg id="human-woman" viewBox="0 0 640 500"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <title><?= $content[0]->title ?></title>
                                    <desc>Как планировать первую беременность</desc>
                                    <g id="point-main"></g>
                                    <!--  Men End Women   -->
                                    <g id="menEndWomen-problem-gr">
                                        <!--  Penis Men   -->
                                        <g class="penisWM-item item-group" data-problem="pelvic_organs"
                                           data-name="Половой член"
                                           data-section="Органы малого таза">
                                            <g class="penisWM-organ item-organ">

                                            </g>
                                        </g>
                                        <!--  Testicles WM   -->
                                        <g class="testiclesWM-item item-group" data-problem="pelvic_organs"
                                           data-name="Яички"
                                           data-section="Органы малого таза">
                                            <g class="testiclesWM-organ item-organ">

                                            </g>
                                        </g>
                                        <!--  DNA Men   -->
                                        <g class="dnaMen-item item-group" data-problem="dna"
                                           data-name="ДНК мужских сперматозоидов"
                                           data-section="ДНК мужских сперматозоидов">
                                            <g class="dnaMen-organ item-organ">

                                            </g>
                                        </g>
                                        <!--  Uterus   -->
                                        <g class="uterusW-item item-group" data-problem="pelvic_organs"
                                           data-name="Матка"
                                           data-section="Органы малого таза">
                                            <g class="uterusW-organ item-organ">

                                            </g>
                                        </g>
                                        <!--  Ovaries   -->
                                        <g class="ovariesW-item item-group" data-problem="pelvic_organs"
                                           data-name="Яичники"
                                           data-section="Органы малого таза">
                                            <g class="ovariesW-organ item-organ">

                                            </g>
                                        </g>
                                        <!--  Urinary bladder Women   -->
                                        <g class="urinary_bladderWomen-item item-group" data-problem="pelvic_organs"
                                           data-name="Мочевой пузырь"
                                           data-section="Органы малого таза">
                                            <g class="urinary_bladderWomen-organ item-organ">

                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <article>
                                <h3 class="title-article after-line"><?= $content[1]->title ?></h3>

                                <p><?= $content[1]->description ?></p>
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
                            <article>
                                <h3 class="title-article after-line"><?= $content[3]->title ?></h3>

                                <p><?= $content[3]->description ?></p>
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
                            <h3 class="title-article after-line"><?= $content[4]->title ?></h3>

                            <p><?= $content[4]->description ?></p>

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
                            <div class="sum-2-drugs sum-3">
                                <!--  Синергин   -->
                                <figure class="figure-article">
                                    <img class="full-img" src="/img/drugs/drugs-item/sinergin-index-big.jpg"
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
                                <figure class="figure-article">
                                    <img class="full-img" src="/img/drugs/drugs-item/speroton-index-big.jpg"
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
                                <figure class="figure-article" data-name-drugs="Прегнотон">
                                    <img class="full-img" src="/img/drugs/drugs-item/pregnoton-index-big.jpg"
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
                            <div class="wr-note-drugs-article">
                            <span class="note-drugs-article">
                                 Эти препараты помогут вам подготовиться к зачатию.
                            </span>
                            </div>
                        </div>
                        <!--  List Problem   -->
                        <div class="drug-article-right p-pr-l">

                            <div class="tag-item txt-center">
                                <ul class="l-p-c-a">
                                    <li><a href="/zdorovie_semejnoj_pary/zhenskoe_besplodie"><i
                                                class="reproduction-tags-2"></i>Женское бесплодие</a>
                                    </li>
                                    <li><a href="/zdorovie_semejnoj_pary/podgotovka_k_vrt"><i
                                                class="reproduction-tags-2"></i>Подготовка к ВРТ и ЭКО</a>
                                    </li>
                                    <li><a href="/zdorovie_semejnoj_pary/povtornye_vykidyshi"><i
                                                class="reproduction-tags-2"></i> Повторные выкидыши</a></li>
                                    <li><a href="/zdorovie_semejnoj_pary/muzhskoe_besplodie"><i
                                                class="reproduction-tags-2"></i>Мужское бесплодие</a></li>

                                </ul>
                            </div>
                            <div class="wr-note-drugs-article">
                            <span class="note-drugs-article list-problem-note-article">
                                 В данном блоке представлены другие проблемы, связанные со здоровьем семейной пары.
                            </span>
                            </div>
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
