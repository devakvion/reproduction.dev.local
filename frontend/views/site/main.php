<!-- Slider Top
================================================== -->
<section>
    <div id="animation-1" class="fotorama-wr-main row">
        <!--  Down Content Help   -->
        <div id="wr-down-content">
            <i class="reproduction-down-lite down"></i>
            <i class="reproduction-down-lite down"></i>
            <i class="reproduction-down-lite down"></i>
        </div>
        <!--  Keyboard   -->
        <div class="wr-keyboard">
            <svg id="keyboard-svg" viewBox="0 0 71 47" xmlns="http://www.w3.org/2000/svg">

                <desc>Нажмите на стрелки клавиатуры</desc>
                <g class="keyboard-svg-1">
                    <path
                        d="M42.795 22.145h-14.86c-1.93 0-3.5-1.57-3.5-3.5V3.785c0-1.93 1.57-3.5 3.5-3.5h14.86c1.93 0 3.5 1.57 3.5 3.5v14.86c0 1.93-1.57 3.5-3.5 3.5zm-14.86-20.86c-1.378 0-2.5 1.122-2.5 2.5v14.86c0 1.378 1.122 2.5 2.5 2.5h14.86c1.38 0 2.5-1.122 2.5-2.5V3.785c0-1.378-1.12-2.5-2.5-2.5h-14.86z"/>
                    <path
                        d="M34.217 12.68c-.55 0-.81-.407-.577-.905l1.3-2.785c.233-.5.614-.5.847 0l1.3 2.786c.234.498-.025.906-.575.906h-2.295z"/>
                </g>
                <g class="keyboard-svg-2">
                    <path
                        d="M42.795 46.312h-14.86c-1.93 0-3.5-1.57-3.5-3.5v-14.86c0-1.93 1.57-3.5 3.5-3.5h14.86c1.93 0 3.5 1.57 3.5 3.5v14.86c0 1.93-1.57 3.5-3.5 3.5zm-14.86-20.86c-1.378 0-2.5 1.123-2.5 2.5v14.86c0 1.38 1.122 2.5 2.5 2.5h14.86c1.38 0 2.5-1.12 2.5-2.5v-14.86c0-1.378-1.12-2.5-2.5-2.5h-14.86z"/>
                    <path
                        d="M36.513 33.917c.55 0 .81.408.577.906l-1.3 2.785c-.234.498-.615.498-.848 0l-1.3-2.785c-.234-.498.026-.906.576-.906h2.295z"/>
                </g>

                <g class="keyboard-svg-2">
                    <path
                        d="M18.628 46H3.768c-1.93 0-3.5-1.57-3.5-3.5V27.64c0-1.93 1.57-3.5 3.5-3.5h14.86c1.93 0 3.5 1.57 3.5 3.5V42.5c0 1.93-1.57 3.5-3.5 3.5zM3.768 25.14c-1.378 0-2.5 1.122-2.5 2.5V42.5c0 1.38 1.122 2.5 2.5 2.5h14.86c1.378 0 2.5-1.12 2.5-2.5V27.64c0-1.378-1.122-2.5-2.5-2.5H3.768z"/>
                    <path
                        d="M12.845 36.218c0 .55-.408.81-.906.577l-2.786-1.302c-.5-.232-.5-.613 0-.846l2.785-1.302c.498-.232.905.027.905.577v2.296z"/>
                </g>
                <g class="keyboard-svg-2">
                    <path
                        d="M66.962 46h-14.86c-1.93 0-3.5-1.57-3.5-3.5V27.64c0-1.93 1.57-3.5 3.5-3.5h14.86c1.93 0 3.5 1.57 3.5 3.5V42.5c0 1.93-1.57 3.5-3.5 3.5zm-14.86-20.86c-1.38 0-2.5 1.122-2.5 2.5V42.5c0 1.38 1.12 2.5 2.5 2.5h14.86c1.38 0 2.5-1.12 2.5-2.5V27.64c0-1.378-1.12-2.5-2.5-2.5h-14.86z"/>
                    <path
                        d="M57.885 33.922c0-.55.408-.81.906-.577l2.786 1.302c.498.232.498.613 0 .846l-2.785 1.302c-.497.232-.905-.027-.905-.577v-2.296z"/>
                </g>
            </svg>
        </div>
        <!--   Touchpad Help   -->
        <span class="touchpad-help"> <i class="reproduction-tach_help"></i></span>
        <!--  Fotoramma   -->
        <div class="fotorama"
             data-width="100%"
             data-maxheight="490"
             data-minheight="310"
             data-fit="cover"
             data-transition="crossfade"
             data-loop="true"
             data-keyboard="true"
             data-swipe="true"
             data-click="false"
             data-nav="false"
             data-transitionduration="800">
            <!-- \Yii::$app->devicedetect->isTablet();-->
            <?php if (!\Yii::$app->devicedetect->isMobile()): ?>
            <!--   Women Health   -->
            <div id="women-block" data-img="/img/header-slider/zip/women_health.jpg" class="wrapper-section-slider">
                <?php else: ?>
                <div id="women-block" data-img="/img/header-slider/mobile/women_health.jpg"
                     class="wrapper-section-slider">
                    <?php endif; ?>
                    <!--  Help Phone   -->
                    <div class="phone-help-top">
                        <span class="phone-help-top-item">8-800-200-86-86 <i class="reproduction-phone-help"></i></span>
                    </div>
                    <!--  Content TXT Slider   -->
                    <div class="slider-section-left">
                        <div class="content-slider-left">
                            <!--  TXT   -->
                            <div class="animate-hgroup">
                                <h1 class="title-slider-left BebasNeueBold header-color">
                                    Бережем <br>
                                    женское здоровье
                                    <!--  SVG   -->
                                <span class="wr-svg-slider">
                                    <svg id="women-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <desc>Бережем женское здоровье</desc>
                                    </svg>
                                </span>
                                </h1>
                            </div>
                            <h3 class="sub-title-slider OpenSansCondensed txt-right header-color-ligth">
                                Поддержание
                                здоровья и <br> помощь в решении проблем
                            </h3>
                            <!--  BTN   -->
                            <div class="wr-btn-slider txt-right">
                                <a class="btn btn-slider" href="#">Перейти
                           <span class="wr-arrow-i">
                                <i class="reproduction-further-btn arrow-btn-1"></i>
                               <i class="reproduction-further-btn arrow-btn-2"></i>
                           </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--  Men's Health   -->
                <?php if (!\Yii::$app->devicedetect->isMobile()): ?>
                <div class="wrapper-section-slider" data-img="img/header-slider/zip/men-health_bg.jpg" id="men-block">
                    <?php else: ?>
                    <div class="wrapper-section-slider" data-img="img/header-slider/mobile/men-health_bg.jpg"
                         id="men-block">
                        <?php endif; ?>
                        <!--  Help Phone   -->
                        <div class="phone-help-top">
                            <span class="phone-help-top-item">8-800-200-86-86 <i
                                    class="reproduction-phone-help"></i></span>
                        </div>
                        <!--  Content TXT Slider   -->
                        <div class="slider-section-left txt-right">
                            <div class="content-slider-left ">
                                <div class="animate-hgroup">
                                    <h1 class="title-slider-left BebasNeueBold header-color">
                                        Сохраняем <br>
                                        мужское здоровье
                                        <!--  SVG   -->
                                <span class="wr-svg-slider">
                                    <svg id="men-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <desc> Сохраняем мужское здоровье</desc>
                                    </svg>
                                </span>
                                    </h1>
                                </div>

                                <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                    Комбинированные препараты <br>
                                    для повышения мужской фертильности
                                </h3>
                                <!--  BTN   -->
                                <div class="wr-btn-slider txt-right">
                                    <a class="btn btn-slider" href="#">Перейти
                           <span class="wr-arrow-i">
                                <i class="reproduction-further-btn arrow-btn-1"></i>
                               <i class="reproduction-further-btn arrow-btn-2"></i>
                           </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--   Health couples   -->
                    <?php if (!\Yii::$app->devicedetect->isMobile()): ?>
                    <div id="couples-block" data-img="/img/header-slider/couples-health_bg.jpg"
                         class="wrapper-section-slider">
                        <?php else: ?>
                        <div class="wrapper-section-slider" data-img="img/header-slider/mobile/couples-health_bg.jpg"
                             id="couples-block">
                            <?php endif; ?>
                            <!--  Help Phone   -->
                            <div class="phone-help-top">
                                <span class="phone-help-top-item">8-800-200-86-86 <i
                                        class="reproduction-phone-help"></i></span>
                            </div>
                            <!--  Content TXT Slider   -->
                            <div class="slider-section-left txt-right">
                                <div class="content-slider-left ">
                                    <!--  TXT   -->
                                    <div class="animate-hgroup">
                                        <h1 class="title-slider-left BebasNeueBold header-color">
                                            Здоровье <br>
                                            семейной пары
                                            <!--  SVG   -->
                                <span class="wr-svg-slider">
                                    <svg id="couples-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <desc>Зачатие ребенка, семейеая пара</desc>
                                    </svg>
                                </span>
                                        </h1>
                                    </div>
                                    <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                        Создать прочный материальный фундамент
                                    </h3>
                                    <!--  BTN   -->
                                    <div class="wr-btn-slider txt-right">
                                        <a class="btn btn-slider" href="#">Перейти
                           <span class="wr-arrow-i">
                                <i class="reproduction-further-btn arrow-btn-1"></i>
                               <i class="reproduction-further-btn arrow-btn-2"></i>
                           </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--   Old Health   -->
                        <?php if (!\Yii::$app->devicedetect->isMobile()): ?>
                        <div id="oldHealth-block" data-img="/img/header-slider/zip/old-health_bg.jpg"
                             class="wrapper-section-slider">
                            <?php else: ?>
                            <div class="wrapper-section-slider" data-img="img/header-slider/mobile/old-health_bg.jpg"
                                 id="oldHealth-block">
                                <?php endif; ?>
                                <!--  Help Phone   -->
                                <div class="phone-help-top">
                                    <span class="phone-help-top-item">8-800-200-86-86 <i
                                            class="reproduction-phone-help"></i></span>
                                </div>
                                <!--  Content TXT Slider   -->
                                <div class="slider-section-left txt-right">
                                    <div class="content-slider-left ">
                                        <!--  TXT   -->
                                        <div class="animate-hgroup">
                                            <h1 class="title-slider-left BebasNeueBold header-color">
                                                Возрастные изменения
                                                <!--  SVG   -->
                                <span class="wr-svg-slider">
                                    <svg id="old-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <desc>Бережем здоровье, возраст</desc>
                                        <path class="none-stroke"
                                              d="M61 121c33.137 0 60-26.863 60-60S94.137 1 61 1 1 27.863 1 61s26.863 60 60 60z"/>
                                    </svg>
                                </span>
                                            </h1>
                                        </div>
                                        <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                            Поддержание
                                            здоровья и <br> помощь в решении проблем
                                        </h3>
                                        <!--  BTN   -->
                                        <div class="wr-btn-slider txt-right">
                                            <a class="btn btn-slider" href="#">Перейти
                           <span class="wr-arrow-i">
                                <i class="reproduction-further-btn arrow-btn-1"></i>
                               <i class="reproduction-further-btn arrow-btn-2"></i>
                           </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</section>
<!-- Intermediate Block
================================================== -->
<section>
    <div class="row">
        <div class="container-not-pading">
            <div class="banner txt-center border-bg-beige-light">
                <div class="item-intermediate">
                    <i class="reproduction-to-read"></i>
                    <i class="reproduction-info"></i>
                    <i class="reproduction-info-read"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Info Site
================================================== -->
<section id="section-info-site">
    <div class="row row-container">
        <div class="container-not-pading">
            <div class="bg-gray container-beige section-pading">
                <div class="left-section">
                    <div class="wr-img">
                        <img class="full-img border-img" src="/img/img-index/21.jpg"
                             alt="Репродуктивная система">
                    </div>
                </div>
                <div class="right-section txt-right-article">
                    <div class="position-relative">

                        <!--  Title   -->
                        <h2 class="CompPro-Regulap title-section">Почему так важно <br>
                            заботиться о репродуктивной системе
                            <!--  Number Title   -->
                            <span class="item-number-left">
                                <strong class="number-item">01</strong>
                                <!--  Line   -->
                                <span class="vertical-line"></span>

                            </span>
                        </h2>
                        <!--  Description   -->
                        <p class="default-p  padding-left-p txt-justify">
                            Вводный текст на несколько предложений, посвященный заботе о репродуктивной системе и
                            репродуктивной
                            линейке.
                            Рыбные тексты также применяются для демонстрации различных видов шрифта и в разработке
                            макетов.
                            Как
                            правило их содержание бессмысленно. По причине своей функции текста-заполнителя для макетов
                            нечитабельность рыбных текстов имеет особое значение, так как человеческое восприятие имеет
                            особенность, распознавать определенные образцы и повторения. В случае произвольного набора
                            букв
                            и
                            длины слов ничто не отвлекает от оценки воздействия и читаемости различных шрифтов, а также
                            от
                            распределения текста на странице (макет или площадь набора).
                        </p>
                        <!--  Line   -->
                        <div class="vertical-line"></div>
                        <!--  Next Help   -->
                        <div class="wr-vertical-line-next">
                            <span class="reproduction-further"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intermediate Block
================================================== -->
<section>
    <div class="row">
        <div class="container-not-pading">
            <div class="banner txt-center border-bg-beige-light">
                <div class="item-intermediate">
                    <span class="reproduction-human"></span>
            <span class="reproduction-heart-note"><span class="path1"></span><span class="path2"></span><span
                    class="path3"></span><span class="path4"></span></span>
             <span class="reproduction-drug-note"><span class="path1"></span><span class="path2"></span><span
                     class="path3"></span><span class="path4"></span><span class="path5"></span><span
                     class="path6"></span><span class="path7"></span><span class="path8"></span><span
                     class="path9"></span></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Human Section
================================================== -->
<section id="human-section" class="">
    <!--  Menu Section Category  -->
    <div class="row overflow">
        <div class="container overflow">
            <!--   Title   -->
            <div class="wr-title-human-title position-relative">
                <!--  Number   -->
                <div class="item-number-left-human">
                    <strong class="number-item">02</strong>
                    <!--  Line   -->
                    <div class="vertical-line"></div>

                </div>
                <!--  Title   -->
                <h2 class="CompPro-Regulap title-section title-section-human align-vertical">Что вас беспокоит?</h2>
            </div>
            <div class="wr-menu-numan-list txt-center position-relative" data-step="1"
                 data-intro="Выберете раздел, который вас интересует, кликнув на него.
                 <span class='note-tool-tip'>* Нажмите на стрелку, чтобы просмотреть следующие шаги, или закройте подсказку.</span>">
                <ul class="list-category align-vertical">
                    <li class="active select-category" onclick="selectCategory($(this))" data-category="people"><i
                            class="reproduction-married-couple"></i><span>Здоровье семейной пары</span></li>
                    <li class="select-category" onclick="selectCategory($(this))" data-category="women"><i
                            class="reproduction-women"></i><span>Женское здоровье</span></li>
                    <li class="select-category" onclick="selectCategory($(this))" data-category="men"><i
                            class="reproduction-men"></i><span>Мужское здоровье</span></li>
                    <li class="select-category" onclick="selectCategory($(this))" data-category="old"><i
                            class="reproduction-age-old"></i><span>Возрастные изменения</span></li>
                </ul>
            </div>
            <!--  Help   -->
            <div class="wr-help-human">
                <a href="javascript:void(0);" onclick="introJs().start();">
                    <i class="reproduction-help"></i>
                </a>
            </div>
        </div>
    </div>
    <!--  Line   -->
    <div class="row">
        <div class="container">
            <div class="line-container"></div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">
                <!--  Select  Problem All -->
                <div class="human-problem">
                    <div class="help-item-block" data-step="2"
                         data-intro="Наведите на проблему, которая вас интересует."
                         data-position='right'>
                        <!--  Men & Woman List Problem   -->
                        <div id="select-people-category" class="select-category-list"
                             data-category="people">
                            <a href="/news" class="list-problem-link" data-drugs="Синергин,Сперотон,Прегнотон"
                               data-problem="pelvic_organs,dna">
                        <span>
                            Планирование первого ребенка после 35 лет
                            <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="/newsr" class="list-problem-link" data-problem="pelvic_organs,pituitary"
                               data-drugs="Прегнотон,Сперотон">
                        <span>
                            Бесплодие
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-problem="pelvic_organs"
                               data-drugs="Прегнотон,Сперотон">
                        <span>
                            Подготовка к ВРТ
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-problem="pelvic_organs,dna"
                               data-drugs="Синергин">
                        <span>
                             Повторные выкидыши
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                        </div>
                        <!--  Woman List Problem  -->
                        <div id="select-women-category" class="select-category-list"
                             data-category="women">
                            <a href="#" class="list-problem-link" data-drugs="Прегнотон,Синергин"
                               data-problem="pelvic_organs">
                        <span>
                            Подготовка к беременности
                            <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Прегнотон"
                               data-problem="pelvic_organs">
                        <span>
                            Нарушения менструального цикла
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Прегнотон"
                               data-problem="pituitary">
                        <span>
                            Гиперпролактинемия
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Синергин"
                               data-problem="mammary_gland">
                        <span>
                            Мастопатия
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Цистениум"
                               data-problem="urinary_bladder">
                        <span>
                            Цистит
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Синергин"
                               data-problem="pituitary,ovary,other">
                        <span>
                            Прием комбинированных оральных контрацептивов
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                        </div>
                        <!--  Men List Problem  -->
                        <div id="select-men-category" class="select-category-list"
                             data-category="men">
                            <a href="#" class="list-problem-link" data-drugs="Сперотон,Синергин"
                               data-problem="pelvic_organs">
                        <span>
                            Подготовка к зачатию
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Синергин"
                               data-problem="penis,other">
                        <span>
                            Эректильная дисфункция
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Синергин"
                               data-problem="prostatitis">
                        <span>
                            Простатит
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Синергин"
                               data-problem="men_testicles,other">
                        <span>
                            Варикоцеле
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                        </div>
                        <!--  Old List Problem  -->
                        <div id="select-old-category" class="select-category-list" data-category="old">
                            <a href="#" class="list-problem-link" data-drugs="Синергин"
                               data-problem="pelvic_organs-men,cardio-male,leather-men">
                        <span>
                            Мужчина старше 35 лет
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Синергин"
                               data-problem="pelvic_organs-w,mammary_gland,cardio-women,leather-w">
                        <span>
                            Женщина старше 35 лет
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                            <a href="#" class="list-problem-link" data-drugs="Синергин"
                               data-problem="urogenital_system,mammary_gland,leather-w,bone,nervous_systemy">
                        <span>
                            Менопауза
                              <!--  Arrow   -->
                            <span class="wr-arrow-small">
                                <i class="reproduction-further-btn arrow-btn-list"></i>
                                <i class="reproduction-further-btn arrow-btn-list2"></i>
                            </span>
                        </span>
                                <!--  Link Mobile end Tablet   -->
                        <span class="link-tablet">
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus"></i></span>
                        </span>
                            </a>
                        </div>
                    </div>
                    <!--  Вывод наименования органов   -->
                    <div id="wr-human-drugs">
                        <div id="show-organs-name">

                        </div>
                    </div>
                </div>
                <div class="human-main txt-center">
                    <div class="wr-human" data-step="3"
                         data-intro="На силуэтах показываются органы, которые относятся к данной проблеме."
                         data-position='right'>
                        <img class="full-img" src="/img/human-svg/empty.jpg" alt="На силуэтах показываются органы, которые относятся к данной проблеме.">
                        <!-- Human Main
                        ================================================== -->
                        <?= yii\base\View::render('@frontend/views/site/human'); ?>
                    </div>
                </div>
                <!--  List Drugs   -->
                <div class="human-drugs">
                    <div class="row container-img-drugs">
                        <div class="help-item-block" data-step="4"
                             data-intro="В данном блоке показываются препараты, которые могут помочь решить проблему, выбранную вами"
                             data-position='left'>
                            <div class="img-drugs-item">
                                <!--  Сперотон   -->
                                <figure class="figure-durgs" data-name-drugs="Сперотон">
                                    <img class="full-img-drugs" src="/img/drugs/speroton.png" alt="Сперотон">
                                    <figcaption>
                                        <a href="#">
                                            <!--<i class="reproduction-plus"></i>-->
                                    <span class="drugs-name-transition">
                                        <!--Сперотон-->
                                    </span>
                                        </a>
                                    </figcaption>
                                </figure>

                            </div>
                            <div class="img-drugs-item">
                                <!--  Сперотон   -->
                                <figure class="figure-durgs" data-name-drugs="Прегнотон">
                                    <img class="full-img-drugs" src="/img/drugs/pregnoton.png" alt="Прегнотон">
                                    <figcaption>
                                        <a href="#">
                                            <!--<i class="reproduction-plus"></i>-->
                                    <span class="drugs-name-transition">
                                        <!--Сперотон-->
                                    </span>
                                        </a>
                                    </figcaption>
                                </figure>

                            </div>
                            <div class="img-drugs-item">
                                <!--  Сперотон   -->
                                <figure class="figure-durgs" data-name-drugs="Синергин">
                                    <img class="full-img-drugs" src="/img/drugs/sinergin.png" alt="Синергин">
                                    <figcaption>
                                        <a href="#">
                                            <!--<i class="reproduction-plus"></i>-->
                                    <span class="drugs-name-transition">
                                        <!--Сперотон-->
                                    </span>
                                        </a>
                                    </figcaption>
                                </figure>

                            </div>
                            <div class="img-drugs-item">
                                <!--  Сперотон   -->
                                <figure class="figure-durgs" data-name-drugs="Сперотон">
                                    <img class="full-img-drugs" src="/img/drugs/speroton.png" alt="Сперотон">
                                    <figcaption>
                                        <a href="#">
                                            <!--<i class="reproduction-plus"></i>-->
                                    <span class="drugs-name-transition">
                                        <!--Сперотон-->
                                    </span>
                                        </a>
                                    </figcaption>
                                </figure>

                            </div>
                            <div class="img-drugs-item">
                                <!--  Сперотон   -->
                                <figure class="figure-durgs" data-name-drugs="Сперотон">
                                    <img class="full-img-drugs" src="/img/drugs/speroton.png" alt="Сперотон">
                                    <figcaption>
                                        <a href="#">
                                            <!--<i class="reproduction-plus"></i>-->
                                    <span class="drugs-name-transition">
                                        <!--Сперотон-->
                                    </span>
                                        </a>
                                    </figcaption>
                                </figure>

                            </div>
                            <div class="img-drugs-item">
                                <!--  Сперотон   -->
                                <figure class="figure-durgs" data-name-drugs="Синергин">
                                    <img class="full-img-drugs" src="/img/drugs/sinergin.png" alt="Синергин">
                                    <figcaption>
                                        <a href="#">
                                            <!--<i class="reproduction-plus"></i>-->
                                    <span class="drugs-name-transition">
                                        <!--Сперотон-->
                                    </span>
                                        </a>
                                    </figcaption>
                                </figure>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Human Mobile view
================================================== -->
<section id="human-view-mobile">
    <div class="row">
        <div class="container-not-pading">
            <div class="position-relative wr-item-number-left-human bg-beige-light">
                <h2 class="CompPro-Regulap title-section">
                    Что вас беспокоит
                    <!--  Number Title   -->
                    <span class="item-number-left">
                        <strong class="number-item">02</strong>
                        <!--  Line   -->
                        <span class="vertical-line"></span>
                    </span>
                </h2>
            </div>
        </div>
    </div>
    <!--  Здоровье семейной пары   -->
    <div class="row row-mobile-first bg-beige-light">
        <div class="container">
            <h3 class="title-problem-mobile">
                <i class="reproduction-married-couple"></i>
                Здоровье семейной пары
            </h3>

            <div id="fotorama1"
                 data-width="100%"
                 data-maxheight="350"
                 data-fit="contain"
                 data-transition="slide"
                 data-loop="true"
                 data-keyboard="true"
                 data-arrows="false"
                 data-click="false"
                 data-swipe="true"
                 data-nav="thumbs"
                 data-navposition='bottom'
                 data-thumbmargin="10"
                 data-thumbwidth="45"
                 data-thumbheight="50"
                 data-thumbborderwidth="1"
                 data-transitionduration="600">
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/people/people3.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>
                    <!--   Touchpad Help   -->
                    <i class="reproduction-tach_help"></i>

                    <p>Бесплодие</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/people/people1.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p> Повторные выкидыши</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/people/people2.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Подготовка к ВРТ</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/people/people1.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Планирование <br> первого ребенка после 35 лет</p>
                </div>
            </div>
            <!--   Touchpad Help   -->
            <i class="reproduction-touch2"></i>
        </div>
    </div>
    <!--  Женское здоровье   -->
    <div class="row row-mobile">
        <div class="container">
            <h3 class="title-problem-mobile"><i class="reproduction-women"></i> Женское здоровье</h3>

            <div id="fotorama2"
                 data-width="100%"
                 data-maxheight="350"
                 data-fit="contain"
                 data-transition="slide"
                 data-loop="true"
                 data-keyboard="true"
                 data-arrows="false"
                 data-click="false"
                 data-swipe="true"
                 data-nav="thumbs"
                 data-navposition='bottom'
                 data-thumbmargin="10"
                 data-thumbwidth="45"
                 data-thumbheight="50"
                 data-thumbborderwidth="1"
                 data-transitionduration="600">
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/woman/woman1.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>
                    <!--   Touchpad Help   -->
                    <i class="reproduction-tach_help"></i>

                    <p>Подготовка к беременности</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/woman/woman2.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Нарушения менструального цикла</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/woman/woman3.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Гиперпролактинемия</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/woman/woman4.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Мастопатия</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/woman/woman5.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Цистит</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/problem_slider/woman/woman6.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Прием комбинированных оральных контрацептивов</p>
                </div>
            </div>
            <!--   Touchpad Help   -->
            <i class="reproduction-touch2"></i>
        </div>
    </div>
    <!--  Возрастные изменения   -->
    <div class="row row-mobile">
        <div class="container">
            <h3 class="title-problem-mobile"><i class="reproduction-age-old"></i> Возрастные изменения</h3>

            <div id="fotorama3"
                 data-width="100%"
                 data-maxheight="350"
                 data-fit="contain"
                 data-transition="slide"
                 data-loop="true"
                 data-keyboard="true"
                 data-arrows="false"
                 data-click="false"
                 data-swipe="true"
                 data-nav="thumbs"
                 data-navposition='bottom'
                 data-thumbmargin="10"
                 data-thumbwidth="45"
                 data-thumbheight="50"
                 data-thumbborderwidth="1"
                 data-transitionduration="600">
                <div class="mobile-container-fotorama txt-center" data-img="/img/people/problem4.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>
                    <!--   Touchpad Help   -->
                    <i class="reproduction-tach_help"></i>

                    <p>Женщина старше 35 лет</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/people/problem1.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Менопауза</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/people/problem5.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Мужчина старше 35 лет</p>
                </div>
            </div>
            <!--   Touchpad Help   -->
            <i class="reproduction-touch2"></i>
        </div>
    </div>
    <!--  Мужское здоровье   -->
    <div class="row">
        <div class="container">
            <h3 class="title-problem-mobile"><i class="reproduction-men"></i> Мужское здоровье</h3>

            <div id="fotorama4"
                 data-width="100%"
                 data-maxheight="350"
                 data-fit="contain"
                 data-transition="slide"
                 data-loop="true"
                 data-keyboard="true"
                 data-arrows="false"
                 data-click="false"
                 data-swipe="true"
                 data-nav="thumbs"
                 data-navposition='bottom'
                 data-thumbmargin="10"
                 data-thumbwidth="45"
                 data-thumbheight="50"
                 data-thumbborderwidth="1"
                 data-transitionduration="600">
                <div class="mobile-container-fotorama txt-center" data-img="/img/men/problem1.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>
                    <!--   Touchpad Help   -->
                    <i class="reproduction-tach_help"></i>

                    <p>Подготовка к зачатию</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/men/problem2.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Эректильная дисфункция</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/men/problem5.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Простатит</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/men/problem4.jpg">
                    <a href="#"><i class="reproduction-plus-bg"></i></a>

                    <p>Варикоцеле</p>
                </div>
            </div>
            <!--   Touchpad Help   -->
            <i class="reproduction-touch2"></i>
        </div>
    </div>
</section>
<!-- Section Drugs Mobile
================================================== -->
<section id="section-drugs-mobile">
    <div class="row">
        <div class="container-not-pading">
            <div class="position-relative wr-item-number-left-human">
                <!--  Number   -->
                <div class="item-number-left-human">
                    <strong class="number-item">03</strong>
                    <!--  Line   -->
                    <div class="vertical-line"></div>

                </div>
                <h2 class="CompPro-Regulap title-section">Препараты</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div id="fotorama5"
                 data-width="100%"
                 data-maxheight="350"
                 data-fit="contain"
                 data-transition="slide"
                 data-loop="true"
                 data-keyboard="true"
                 data-arrows="false"
                 data-click="false"
                 data-swipe="true"
                 data-nav="dots"
                 data-transitionduration="600">
                <div class="mobile-container-drugs txt-center" data-img="/img/drugs/drugs-3d/sinergin.png">
                    <!--   <a class="btn-drugs-mobile" href="#">
                           <span>Сперотон</span>
                       </a>-->

                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/drugs/drugs-slider/sinergin.jpg">
                    <a class="btn-drugs-mobile" href="#"></a>

                    <p>Синергин</p>
                </div>
                <div class="mobile-container-fotorama txt-center" data-img="/img/drugs/drugs-slider/pregnoton.jpg">
                    <a href="#"></a>

                    <p>Прегнатон</p>
                </div>
            </div>
        </div>
    </div>
</section>

