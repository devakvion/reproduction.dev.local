    <!-- Header
    ================================================== -->
    <header id="header-top">
        <div class="row header-row-top hed-all-bg bg-header-top-manWoman">
            <div class="con-hd">
                <div class="left-header txt-right">
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
                            <?= $problem->title ?>
                            <!--  SVG   -->
                                <span class="wr-svg-header">
                                    <svg id="couples-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <title>Здоровье семейной пары</title>
                                        <desc><?= $problem->title ?></desc>
                                    </svg>
                                </span>
                        </h1>

                        <h3>Здоровье семейной
                            пары</h3>
                    </div>
                </div>
                <div class="right-header">
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
                                <div class="bg-36 m-img-bg" data-mh="group-im-pr"></div>
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

                                    <p><?= $content[1]->description ?></p>
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
                                    <img class="full-img" src="/img/woman-header/empty.png" alt="empty">
                                    <svg id="human-woman" viewBox="0 0 610 480" xmlns="http://www.w3.org/2000/svg">
                                        <title>Кто готовится к беременности</title>
                                        <desc>13 советов для тех, кто готовится к беременности</desc>
                                        <g id="point-main"></g>
                                        <!--  Women Problem   -->
                                        <g id="women-problem-gr">
                                            <!--  Uterus   -->
                                            <g class="uterus-item item-group" data-problem="pelvic_organs"
                                               data-name="Матка"
                                               data-section="Органы малого таза,Матка">
                                                <g class="uterus-organ item-organ">

                                                </g>
                                            </g>
                                            <!--  Ovaries   -->
                                            <g class="ovaries-item item-group" data-problem="pelvic_organs,ovary"
                                               data-name="Яичники"
                                               data-section="Органы малого таза,Яичники">
                                                <g class="ovaries-organ item-organ">

                                                </g>
                                            </g>
                                            <!--  Urinary Bladder   -->
                                            <g class="urinaryBladderW-item item-group" data-problem="urinary_bladder"
                                               data-name="Мочевой пузырь" data-section="Мочевой пузырь">
                                                <g class="urinaryBladderW-organ item-organ">

                                                </g>
                                            </g>
                                            <!--  Pituitary   -->
                                            <g class="pituitary-item item-group" data-problem="pituitary"
                                               data-name="Гипофиз" data-section="Гипофиз">
                                                <g class="pituitary-organ item-organ">

                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <article>
                                    <h3 class="title-article after-line"><?= $content[2]->title ?></h3>

                                    <p><?= $content[2]->description ?></p>

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

                                <p><?= $content[3]->description ?></p>

                                <div class="not-col dontsplit">
                                    <h3 class="title-article after-line"><?= $content[4]->title ?></h3>

                                    <?= $content[4]->description ?>

                                </div>
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
                                <div class="sum-2-drugs">
                                    <!--  Синергин   -->
                                    <figure class="figure-article" data-name-drugs="Синергин">
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
                                    <!--  Прегнотон  -->
                                    <figure class="figure-article" data-name-drugs="Сперотон">
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
                                Эти препараты помогут в решении проблемы женского бесплодия.
                            </span>
                                </div>
                            </div>
                            <!--  List Problem   -->
                            <div class="drug-article-right p-pr-l">

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
   var womenOrgansAll = {
       uterus: attr = {
        class: "women-fill",
        insert: ".uterus-item",
        insertOrgan: ".uterus-organ",
        name: "uterus",
        category: "women",
        organCircle: {
            circleWr: 'M546,326m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
        },
        circleSmall: [320.285, 417.341, 5],
        path: "M320.494,417.305l155.237,-91.654l70.87,0",
        organPath: {
            p0: "M546,319.486c4.886,-0.086 9.086,-1.629 13.543,-3.429c-2.657,1.886 -5.057,3.257 -7.2,5.572c-3.257,3.6 -5.486,7.971 -6.343,12.771",
            p1: "M577.029,329.857c0,0.257 -0.086,0.686 0.085,0.857c0.086,0.086 0.257,0.172 0.343,0.172c0.514,0.085 0.857,-0.343 1.2,-0.6c0.343,-0.257 0.6,-0.6 0.943,-0.857c0.686,-0.686 1.286,-1.458 1.886,-2.229c1.285,-1.8 2.228,-3.857 2.571,-6c0,-0.086 0,-0.086 0,-0.171c0.772,-4.543 -0.857,-11.229 -8.314,-12.515c-7.457,-1.285 -10.286,3.172 -13.886,3.429",
            p2: "M571.971,320.429c-0.342,-0.086 -0.685,-0.258 -0.771,-0.686c-0.171,-1.029 2.143,-0.943 2.657,-0.857c1.029,0.085 2.057,0.257 3.086,0.343c0.6,0 1.286,0 1.8,-0.343c1.371,-0.857 1.628,-4.972 -3.257,-6.172c-4.886,-1.2 -8.829,1.2 -10.8,3.772",
            p3: "M520.029,320.429c0.342,-0.086 1.114,-0.172 1.028,-0.686c0,-0.172 -0.171,-0.429 -0.343,-0.514c-0.171,-0.086 -0.343,-0.172 -0.6,-0.258c-0.171,0 -0.343,-0.085 -0.428,-0.085c-1.2,-0.172 -2.4,0 -3.6,0.171c-0.943,0.172 -2.143,0.257 -3,-0.257c-1.372,-0.857 -1.629,-4.971 3.257,-6.171c4.886,-1.2 8.828,1.2 10.8,3.771",
            p4: "M530.057,311.943c-3.6,-0.343 -6.428,-4.714 -13.886,-3.429c-7.457,1.2 -9,7.886 -8.314,12.429c0.343,2.228 1.372,4.286 2.657,6.171c0.429,0.686 0.943,1.286 1.457,1.886c0.515,0.514 1.029,1.2 1.715,1.543c0.257,0.171 0.514,0.257 0.771,0.257c0.086,0 0.257,0 0.343,-0.086c0.257,-0.171 0.171,-0.6 0.171,-0.857",
            p5: "M546,319.486c-4.886,-0.086 -9.086,-1.629 -13.543,-3.429c2.657,1.886 5.057,3.257 7.2,5.572c3.257,3.6 5.486,7.971 6.343,12.771",
            p6: "M546,334.486l0,30.514",
            p9: "M577.029,329.857c1.285,-0.771 2.142,-1.971 2.314,-3.343c0.428,-2.828 -2.143,-5.571 -5.657,-6.085c-0.6,-0.086 -1.2,-0.086 -1.8,-0.086c-2.743,0.257 -4.972,1.971 -5.315,4.286c-0.428,2.828 2.143,5.571 5.658,6.085c1.8,0.257 3.514,-0.085 4.8,-0.857Z",
            p10: "M514.971,329.857c1.286,0.772 3,1.2 4.8,0.943c3.515,-0.514 6,-3.171 5.658,-6.086c-0.343,-2.314 -2.572,-4.028 -5.315,-4.285c-0.6,-0.086 -1.2,0 -1.8,0.085c-3.514,0.515 -6,3.172 -5.657,6.086c0.172,1.286 1.029,2.486 2.314,3.257Z"
        },
        organMain: {
            p7: "M527.229,316.4c1.971,2.571 2.228,6.943 5.228,11.229c3,4.285 7.029,4.971 8.143,8.571c1.114,3.6 0.086,13.971 0.171,17.229c0.172,3.342 1.629,10.114 2.572,10.971c0.857,0.857 2.657,0.514 2.657,0.514c0,0 1.8,0.343 2.657,-0.514c0.857,-0.857 2.4,-7.629 2.572,-10.971c0.171,-3.343 -0.943,-13.629 0.171,-17.229c1.114,-3.6 5.143,-4.286 8.143,-8.571c3,-4.286 3.257,-8.658 5.228,-11.229",
            p8: "M530.057,311.943c3.6,0.343 8.229,-3.943 15.943,-3.943c7.714,0 12.343,4.286 15.943,3.943"
        }
    },
        ovaries: attr = {
            class: "women-fill",
            insert: ".ovaries-item",
            insertOrgan: ".ovaries-organ",
            name: "ovaries",
            category: "women",
            organCircle: {
                circleWr: 'M96,371m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
            },
            circleSmall: [312.285, 402.341, 5],
            path: "M312.804,403.143l-146.271,-32.148l-71.539,0",
            organPath: {
                p0: "M96,364.486c4.886,-0.086 9.086,-1.629 13.543,-3.429c-2.657,1.886 -5.057,3.257 -7.2,5.572c-3.257,3.6 -5.486,7.971 -6.343,12.771",
                p1: "M127.029,374.857c0,0.257 -0.086,0.686 0.085,0.857c0.086,0.086 0.257,0.172 0.343,0.172c0.514,0.085 0.857,-0.343 1.2,-0.6c0.343,-0.257 0.6,-0.6 0.943,-0.857c0.686,-0.686 1.286,-1.458 1.886,-2.229c1.285,-1.8 2.228,-3.857 2.571,-6c0,-0.086 0,-0.086 0,-0.171c0.772,-4.543 -0.857,-11.229 -8.314,-12.515c-7.457,-1.285 -10.286,3.172 -13.886,3.429",
                p2: "M121.971,365.429c-0.342,-0.086 -0.685,-0.258 -0.771,-0.686c-0.171,-1.029 2.143,-0.943 2.657,-0.857c1.029,0.085 2.057,0.257 3.086,0.343c0.6,0 1.286,0 1.8,-0.343c1.371,-0.857 1.628,-4.972 -3.257,-6.172c-4.886,-1.2 -8.829,1.2 -10.8,3.772",
                p3: "M70.029,365.429c0.342,-0.086 1.114,-0.172 1.028,-0.686c0,-0.172 -0.171,-0.429 -0.343,-0.514c-0.171,-0.086 -0.343,-0.172 -0.6,-0.258c-0.171,0 -0.343,-0.085 -0.428,-0.085c-1.2,-0.172 -2.4,0 -3.6,0.171c-0.943,0.172 -2.143,0.257 -3,-0.257c-1.372,-0.857 -1.629,-4.971 3.257,-6.171c4.886,-1.2 8.828,1.2 10.8,3.771",
                p4: "M80.057,356.943c-3.6,-0.343 -6.428,-4.714 -13.886,-3.429c-7.457,1.2 -9,7.886 -8.314,12.429c0.343,2.228 1.372,4.286 2.657,6.171c0.429,0.686 0.943,1.286 1.457,1.886c0.515,0.514 1.029,1.2 1.715,1.543c0.257,0.171 0.514,0.257 0.771,0.257c0.086,0 0.257,0 0.343,-0.086c0.257,-0.171 0.171,-0.6 0.171,-0.857",
                p5: "M96,364.486c-4.886,-0.086 -9.086,-1.629 -13.543,-3.429c2.657,1.886 5.057,3.257 7.2,5.572c3.257,3.6 5.486,7.971 6.343,12.771",
                p6: "M96,379.486l0,30.514",
                p7: "M77.229,361.4c1.971,2.571 2.228,6.943 5.228,11.229c3,4.285 7.029,4.971 8.143,8.571c1.114,3.6 0.086,13.971 0.171,17.229c0.172,3.342 1.629,10.114 2.572,10.971c0.857,0.857 2.657,0.514 2.657,0.514c0,0 1.8,0.343 2.657,-0.514c0.857,-0.857 2.4,-7.629 2.572,-10.971c0.171,-3.343 -0.943,-13.629 0.171,-17.229c1.114,-3.6 5.143,-4.286 8.143,-8.571c3,-4.286 3.257,-8.658 5.228,-11.229",
                p8: "M80.057,356.943c3.6,0.343 8.229,-3.943 15.943,-3.943c7.714,0 12.343,4.286 15.943,3.943"
            },
            organMain: {
                p9: "M127.029,374.857c1.285,-0.771 2.142,-1.971 2.314,-3.343c0.428,-2.828 -2.143,-5.571 -5.657,-6.085c-0.6,-0.086 -1.2,-0.086 -1.8,-0.086c-2.743,0.257 -4.972,1.971 -5.315,4.286c-0.428,2.828 2.143,5.571 5.658,6.085c1.8,0.257 3.514,-0.085 4.8,-0.857Z",
                p10: "M64.971,374.857c1.286,0.772 3,1.2 4.8,0.943c3.515,-0.514 6,-3.171 5.658,-6.086c-0.343,-2.314 -2.572,-4.028 -5.315,-4.285c-0.6,-0.086 -1.2,0 -1.8,0.085c-3.514,0.515 -6,3.172 -5.657,6.086c0.172,1.286 1.029,2.486 2.314,3.257Z"
            }

        },
         urinaryBladderW: attr = {
        class: "women-fill",
        insert: ".urinaryBladderW-item",
        insertOrgan: ".urinaryBladderW-organ",
        name: "urinaryBladderW",
        category: "women",
        organCircle: {
            circleWr: 'M96,251m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
        },
        circleSmall: [320.285, 385.341, 5],
        path: "M320.757,385.453l-154.372,-135.914l-71.839,0",
        organPath: {
            p0: "M95.914,292.229c0,-1.8 0.086,-3.772 0.257,-5.915c0.6,-9.771 2.229,-14.914 4.972,-17.143c1.971,-1.628 4.543,-2.571 7.371,-3.514c4.8,-1.628 10.2,-3.514 13.2,-9.257c2.657,-4.971 2.486,-9.429 -0.428,-14.229c-2.4,-3.942 -8.829,-10.885 -25.372,-10.885c-16.543,0 -22.971,6.943 -25.371,10.885c-2.914,4.8 -3.086,9.258 -0.429,14.229c3,5.743 8.486,7.629 13.2,9.257c2.829,0.943 5.4,1.886 7.372,3.514c2.743,2.315 4.371,7.458 4.971,17.143c0.172,2.143 0.257,4.2 0.257,5.915",
            p1: "M96.171,296c-0.085,0 -0.085,0 -0.171,0c-0.086,0 -0.171,0 -0.257,0",
            p3: "M73.286,252.971c0.514,1.543 1.628,2.915 3.171,3.429c0.6,0.171 1.286,0.257 1.886,0.429c1.028,0.257 2.057,0.685 2.828,1.371c0.772,0.686 1.286,1.714 1.286,2.743",
            p4: "M86.743,259.571c-0.086,1.8 1.028,3.686 2.743,4.372c0.857,0.343 1.8,0.428 2.657,0.771c1.543,0.686 2.657,2.315 2.914,3.943",
            p5: "M79.543,249.714c0.857,0.857 1.714,1.715 2.914,2.057c0.772,0.172 1.629,0.172 2.4,0.172c1.972,0.086 4.029,0.943 4.8,2.657",
            p6: "M73.286,247.914c0.6,-1.285 1.971,-2.228 3.428,-2.4c1.029,-0.085 1.972,0.172 3,0.172c1.372,0 2.743,-0.515 3.772,-1.457",
            p7: "M80.829,240.286c1.628,-1.629 4.114,-2.315 6.428,-1.8c0.943,0.171 1.8,0.6 2.657,0.685c1.543,0.172 3.172,-0.514 4.115,-1.714",
            p8: "M119.486,252.114c-0.515,1.543 -1.629,2.915 -3.172,3.429c-0.6,0.171 -1.285,0.257 -1.885,0.428c-1.029,0.258 -2.058,0.686 -2.829,1.372c-0.771,0.686 -1.286,1.714 -1.286,2.743",
            p9: "M106.029,259.571c0.085,1.8 -1.029,3.686 -2.743,4.372c-0.857,0.343 -1.8,0.428 -2.657,0.771c-1.543,0.686 -2.658,2.315 -2.915,3.943",
            p10: "M113.143,249.114c-0.857,0.857 -1.714,1.715 -2.914,2.057c-0.772,0.172 -1.629,0.172 -2.4,0.172c-1.972,0.086 -4.029,0.943 -4.8,2.657",
            p11: "M118.286,247.143c-0.6,-1.286 -1.972,-2.229 -3.429,-2.4c-1.028,-0.086 -1.971,0.171 -3,0.171c-1.371,0 -2.743,-0.514 -3.771,-1.457",
            p12: "M111.171,240.286c-1.628,-1.629 -4.114,-2.315 -6.428,-1.8c-0.943,0.171 -1.8,0.6 -2.657,0.685c-1.543,0.172 -3.172,-0.514 -4.115,-1.714",
            p13: "M95.829,246.114c-0.6,1.286 -0.943,2.915 -0.343,4.2c0.343,0.686 1.028,1.286 1.2,2.057c0.343,1.2 -0.343,2.486 -1.115,3.515",
            p14: "M95.914,292.229l0,3.771"
        },
        organMain: {
            p15: "M91.457,295.743c-0.171,-7.629 -0.943,-19.029 -3.943,-21.6c-4.543,-3.857 -17.314,-3.6 -23.314,-15.086c-2.143,-4.114 -2.914,-8.828 -2.229,-13.457c0.172,-1.2 -0.514,-2.314 -1.628,-2.829c-2.829,-1.2 -5.4,-2.828 -7.543,-4.971",
            p16: "M135.6,229.829c-1.543,2.142 -3.6,4.028 -6.343,5.4c-1.714,0.857 -3.771,0.514 -5.057,-0.858c-5.314,-5.742 -14.486,-9.771 -28.286,-9.771c-13.714,0 -22.885,4.029 -28.285,9.771c-1.286,1.372 -3.343,1.715 -5.058,0.858c-2.742,-1.372 -4.8,-3.258 -6.342,-5.4",
            p17: "M100.371,295.743c0.172,-7.629 0.943,-19.029 3.943,-21.6c4.543,-3.857 17.315,-3.6 23.315,-15.086c2.142,-4.114 2.914,-8.828 2.228,-13.457c-0.171,-1.2 0.514,-2.314 1.629,-2.829c2.828,-1.2 5.4,-2.828 7.543,-4.971"
        }
    },
       pituitary: attr = {
        class: "women-fill",
        insert: ".pituitary-item",
        insertOrgan: ".pituitary-organ",
        name: "pituitary",
        category: "women",
        organCircle: {
            circleWr: 'M546,176m-45,0a45,45 0 1,0 90,0a45,45 0 1,0 -90,0'
        },
        circleSmall: [343.285, 31.341, 5],
        path: "M343.585,31.117l131.466,144.86l73.149,0",
        organPath: {
            p0: "M523.114,206.514c0.686,-2.571 1.115,-5.228 1.115,-7.885c0.085,-2.743 -0.772,-4.8 -2.829,-6.6c-1.8,-1.629 -4.029,-2.4 -5.914,-3.943c-1.715,-1.372 -3,-3.172 -3.686,-5.229c-0.771,-2.314 -0.771,-4.8 0,-7.114c0.771,-2.4 2.571,-4.029 4.286,-5.743c-1.8,-4.2 -0.943,-9.514 2.143,-12.943c3.085,-3.428 8.314,-4.714 12.685,-3.171c1.8,-3 5.057,-5.057 8.486,-5.4c3.429,-0.343 7.029,0.857 9.429,3.343c3.857,-3 9.428,-3.686 13.885,-1.715c2.229,1.029 4.286,2.829 4.8,5.143c3.943,0.343 7.972,1.457 10.629,4.372c2.657,2.914 3.428,7.8 0.771,10.714c1.8,3.257 1.543,7.457 -0.514,10.543c-2.057,3.085 -5.914,4.8 -9.6,4.371c-0.857,3.172 -4.457,5.057 -7.8,4.8c-3.343,-0.257 -6.257,-2.228 -8.486,-4.628c-0.6,3 -3.171,5.228 -6.085,6.257c-2.915,0.943 -6,0.771 -9,0.171c-0.086,1.8 -0.172,3.6 -0.343,5.4c-0.429,3.343 -1.2,6.6 -2.315,9.772c0,0.085 -0.085,0.085 -0.085,0.085c-0.086,0 -0.086,-0.171 0,-0.085",
            p1: "M530.486,206.6c0.085,-0.086 0.085,0.171 -0.086,0.086c-0.086,-0.086 -0.086,-0.172 0,-0.257c0.429,-1.115 0.771,-2.229 1.029,-3.343c1.028,-4.286 2.142,-9.857 0.6,-14.143c-0.6,-1.8 -1.8,-3.257 -2.743,-4.8c-0.857,-1.286 -1.972,-2.572 -2.572,-4.029c-1.371,-3.085 -1.543,-7.028 0.172,-10.028c4.2,-7.543 17.571,-6 18.428,3.085",
            p2: "M559.029,169.571c-2.658,3.258 -3.172,8.058 -1.115,11.743c0.086,0.086 0.257,0.086 0.172,0",
            p3: "M522.514,160.571c1.715,0.172 3.343,1.029 4.543,2.315c1.2,1.285 1.886,3 1.886,4.714",
            p4: "M540.171,166.229c2.486,0.514 5.143,-0.6 6.943,-2.4c1.8,-1.8 2.829,-4.286 3.343,-6.772c-0.171,0.086 -0.343,0.086 -0.514,0.172",
            p5: "M547.886,163.571c0.685,2.658 3,4.543 5.571,5.486c3,1.114 6.514,1.029 9.429,-0.171c3,-1.2 5.485,-3.6 6.771,-6.6",
            p6: "M563.914,168.286c2.143,0.257 4.2,1.371 5.743,2.914c1.543,1.543 2.486,3.686 2.657,5.829"
        },
        organMain: {
            op2: "M540.429,181.657m-6.429,0a6.429,6.429 0 1,0 12.858,0a6.429,6.429 0 1,0 -12.858,0"
        }
    }
    };
return womenOrgansAll;
}
$(function () {
    animateThis("#couples-svg");
    setTimeout(function () {
        callForEachDown.start(downContentHelp, [0, 1, 2, 3], 500);

    }, 800);
    var controller1 = new ScrollMagic.Controller();
    new ScrollMagic.Scene({triggerElement: "#human-woman", triggerHook: 0.8, reverse: false})
        .on("start end", function (e) {
              itemHumanStart('#human-woman', setSvgProblem(),false,true,'woman');
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
              itemHumanStart('#human-woman', setSvgProblem(),false,true,'woman');
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
