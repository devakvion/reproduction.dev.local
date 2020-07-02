    <!--Slider Top-->
    <header>
        <div id="animation-1" class="fotorama-wr-main row">
            <!--Down Content Help-->
            <div id="wr-down-content">
                <i class="reproduction-down-lite down"></i>
                <i class="reproduction-down-lite down"></i>
                <i class="reproduction-down-lite down"></i>
            </div>
            <!--Keyboard-->
            <?php if (!\Yii::$app->devicedetect->isMobile()): ?>
                <div class="wr-keyboard">
                    <svg id="keyboard-svg" viewBox="0 0 71 47" xmlns="http://www.w3.org/2000/svg">
                        <title>Клавиатура</title>
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
                        </g>
                    </svg>
                </div>
            <?php endif; ?>
            <!--Touchpad Help-->
            <?php if (\Yii::$app->devicedetect->isMobile()): ?>
                <span class="touchpad-help"> <i class="reproduction-tach_help"></i></span>
            <?php endif; ?>
            <!--Fotoramma-->
            <div class="fotorama"
                 data-width="100%"
                 data-maxheight="500"
                 data-minheight="320"
                 data-fit="cover"
                 data-transition="crossfade"
                 data-loop="true"
                 data-keyboard="true"
                 data-swipe="true"
                 data-click="false"
                 data-nav="false"
                 data-transitionduration="800">
                <!--Women Health-->
                <div id="women-block" data-img="/img/header-slider/zip/women_health.jpg" class="wr-s-sl">
                    <!--Help Phone-->
                    <div class="phone-help-top">
                        <span class="phone-help-top-item">8-800-200-86-86 <i class="reproduction-phone-help"></i></span>
                    </div>
                    <!--Content TXT Slider-->
                    <div class="slider-section-left">
                        <div class="content-slider-left">
                            <div class="animate-hgroup">
                                <h2 class="title-slider-left BebasNeueBold header-color">
                                    Бережем <br>
                                    женское здоровье
                                    <!--SVG-->
                                <span class="wr-svg-slider">
                                    <svg id="women-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <title>Женское здоровье</title>
                                        <desc>Бережем женское здоровье</desc>
                                    </svg>
                                </span>
                                </h2>
                            </div>
                            <h3 class="sub-title-slider OpenSansCondensed txt-right header-color-ligth">
                                Поддержание
                                здоровья и <br> помощь в решении проблем
                            </h3>
                            <!--BTN-->
                            <div class="wr-btn-slider txt-right">
                                <a class="btn btn-slider "
                                   href="/zhenskoe_zdorovie/podgotovka_k_beremennosti">Перейти
                           <span class="wr-arrow-i">
                                <i class="reproduction-further-btn arrow-btn-1"></i>
                               <i class="reproduction-further-btn arrow-btn-2"></i>
                           </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Men's Health-->
                <div class="wr-s-sl" data-img="img/header-slider/zip/men-health_bg.jpg" id="men-block">
                    <!--Help Phone-->
                    <div class="phone-help-top">
                            <span class="phone-help-top-item">8-800-200-86-86 <i
                                    class="reproduction-phone-help"></i></span>
                    </div>
                    <!--Content TXT Slider-->
                    <div class="slider-section-left txt-right">
                        <div class="content-slider-left ">
                            <div class="animate-hgroup">
                                <h2 class="title-slider-left BebasNeueBold header-color">
                                    Сохраняем <br>
                                    мужское здоровье
                                    <!--SVG-->
                                <span class="wr-svg-slider">
                                    <svg id="men-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <title>Мужское здоровье</title>
                                        <desc> Сохраняем мужское здоровье</desc>
                                    </svg>
                                </span>
                                </h2>
                            </div>

                            <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                Комбинированные препараты <br>
                                для повышения мужской фертильности
                            </h3>
                            <!--BTN-->
                            <div class="wr-btn-slider txt-right">
                                <a class="btn btn-slider "
                                   href="/muzhskoe_zdorovie/podgotovka_k_zachatiju">Перейти
                           <span class="wr-arrow-i">
                                <i class="reproduction-further-btn arrow-btn-1"></i>
                               <i class="reproduction-further-btn arrow-btn-2"></i>
                           </span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!--Health couples-->
                <div id="couples-block" data-img="/img/header-slider/couples-health_bg.jpg"
                     class="wr-s-sl">
                    <!--Help Phone-->
                    <div class="phone-help-top">
                                <span class="phone-help-top-item">8-800-200-86-86 <i
                                        class="reproduction-phone-help"></i></span>
                    </div>
                    <!--Content TXT Slider-->
                    <div class="slider-section-left txt-right">
                        <div class="content-slider-left ">
                            <div class="animate-hgroup">
                                <h2 class="title-slider-left BebasNeueBold header-color">
                                    Здоровье <br>
                                    семейной пары
                                    <!--SVG-->
                                <span class="wr-svg-slider">
                                    <svg id="couples-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <title>Здоровье семейной пары</title>
                                        <desc>Зачатие ребенка, семейеая пара</desc>
                                    </svg>
                                </span>
                                </h2>
                            </div>
                            <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                Создать прочный материальный фундамент
                            </h3>
                            <!--BTN-->
                            <div class="wr-btn-slider txt-right">
                                <a class="btn btn-slider "
                                   href="/zdorovie_semejnoj_pary/planirovanie_pervogo_rebenka_posle_35_let">Перейти
                           <span class="wr-arrow-i">
                                <i class="reproduction-further-btn arrow-btn-1"></i>
                               <i class="reproduction-further-btn arrow-btn-2"></i>
                           </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Old Health-->
                <div id="oldHealth-block" data-img="/img/header-slider/zip/old-health_bg.jpg"
                     class="wr-s-sl">
                    <!--Help Phone-->
                    <div class="phone-help-top">
                                    <span class="phone-help-top-item">8-800-200-86-86 <i
                                            class="reproduction-phone-help"></i></span>
                    </div>
                    <!--Content TXT Slider-->
                    <div class="slider-section-left txt-right">
                        <div class="content-slider-left ">
                            <div class="animate-hgroup">
                                <h2 class="title-slider-left BebasNeueBold header-color">
                                    Возрастные изменения
                                <span class="wr-svg-slider">
                                    <svg id="old-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <title>Возрастные изменения</title>
                                        <desc>Бережем здоровье, возраст</desc>
                                        <path class="none-stroke"
                                              d="M61 121c33.137 0 60-26.863 60-60S94.137 1 61 1 1 27.863 1 61s26.863 60 60 60z"/>
                                    </svg>
                                </span>
                                </h2>
                            </div>
                            <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                Поддержание
                                здоровья и <br> помощь в решении проблем
                            </h3>
                            <!--BTN-->
                            <div class="wr-btn-slider txt-right">
                                <a class="btn btn-slider "
                                   href="/vozrastnye_izmenenija/muzhchina_starshe_35_let">Перейти
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
    </header>
    <!--Empty Block-->
    <div class="row">
        <div class="empty-block-section"></div>
    </div>
    <!--Section Info Site-->
    <section id="section-info-site">
        <div class="row">
            <div class="container container-bg-gray">
                <div class="container-it">
                    <div class="left-section pad-gr-right">
                        <img class="full-img img-mg" data-device-pixel-ratio-1.5="/img/img-index/21.jpg"
                             src="/img/img-index/21.min.jpg"
                             alt="Репродуктивная система">
                    </div>
                    <div class="right-section align-vertical pad-gr-left">
                        <!--Title-->
                        <h1 class="title-section after-line">Почему так важно <br>
                            заботиться о репродуктивной системе
                            <span class="item-number">
                                <i class="reproduction-quotes"></i>
                                <span class="vertical-line"></span>
                            </span>
                        </h1>
                        <!--Description-->
                        <article class="position-relative">
                            <p class="txt-justify">
                                От состояния репродуктивной системы зависят многие аспекты нашей жизни. Стать
                                родителями, жить в гармонии с любимым человеком, спокойно относится к своему
                                возрасту –
                                все это возможно только при нормальной работе органов репродуктивной системы.
                                Справиться
                                с проблемами и избежать нарушений в половой сфере помогут препараты репродуктивной
                                линейки, предназначенные для мужчин и женщин в разные периоды жизни.
                            </p>
                            <!--  Line   -->
                            <div class="line-all"></div>
                            <div class="vertical-line"></div>
                            <!--  Next Help   -->
                            <span class="reproduction-further next-ic"></span>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Empty Block-->
    <div class="row">
        <div class="empty-block-section"></div>
    </div>
    <!--Human Section-->
    <section id="human-section">
        <!--  Menu Section Category  -->
        <div class="row">
            <div class="container-not-pad">
                <!--   Title   -->
                <div class="row">
                    <div class="w-t-h position-relative">
                        <h2 class="title-section t-dr-in">Что вас беспокоит?
                    <span class="item-number">
                        <i class="reproduction-quotes"></i>
                        <span class="vertical-line"></span>
                    </span>
                        </h2>
                    </div>

                    <div class="w-m-n-l txt-center position-relative" data-step="1"
                         data-intro="Выберете раздел, который вас интересует, кликнув на него.
                 <span class='note-tool-tip'>* Нажмите на стрелку, чтобы просмотреть следующие шаги, или закройте подсказку.</span>">
                        <ul class="list-category">
                            <li class="active select-category" onclick="selectCategory($(this))" data-category="people">
                                <img src="/img/logo/default/reproduction-married-couple.png"
                                     data-device-pixel-ratio-1.5="/img/logo/retina/reproduction-married-couple.png"
                                     alt="Здоровье семейной пары">
                                <span>Здоровье семейной пары</span>
                            </li>
                            <li class="select-category" onclick="selectCategory($(this))" data-category="women">
                                <img src="/img/logo/default/reproduction-women.png"
                                     data-device-pixel-ratio-1.5="/img/logo/retina/reproduction-women.png"
                                     alt="Женское здоровье"><span>Женское здоровье</span></li>
                            <li class="select-category" onclick="selectCategory($(this))" data-category="men">
                                <img src="/img/logo/default/reproduction-men.png"
                                     data-device-pixel-ratio-1.5="/img/logo/retina/reproduction-men.png"
                                     alt="Мужское здоровье"><span>Мужское здоровье</span></li>
                            <li class="select-category" onclick="selectCategory($(this))" data-category="old">
                                <img src="/img/logo/default/reproduction-age-old.png"
                                     data-device-pixel-ratio-1.5="/img/logo/retina/reproduction-age-old.png"
                                     alt="Возрастные изменения"><span>Возрастные изменения</span></li>
                        </ul>
                    </div>
                </div>
                <!--  Help   -->
                <div class="wr-help-human">
                    <a href="javascript:void(0);" onclick="introJs().start();">
                        <i class="reproduction-info-section"></i>
                    </a>
                </div>

                <!--  Line   -->
                <div class="row view-des">
                    <div class="line-row"></div>
                </div>

                <div class="row">
                    <!--  Select  Problem All -->
                    <div class="human-problem">
                        <div class="help-item-block" data-step="2"
                             data-intro="Наведите на проблему, которая вас интересует."
                             data-position='right'>
                            <!--  Men & Woman List Problem   -->
                            <div id="select-people-category" class="select-category-list"
                                 data-category="people">
                                <a href="/zdorovie_semejnoj_pary/planirovanie_pervogo_rebenka_posle_35_let"
                                   class="list-problem-link " data-drugs="Синергин,Сперотон,Прегнотон"
                                   data-problem="Органы малого таза,ДНК мужских сперматозоидов">
                                    Планирование первого ребенка после 35 лет
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zdorovie_semejnoj_pary/besplodie" class="list-problem-link "
                                   data-problem="Органы малого таза,Гипофиз"
                                   data-drugs="Прегнотон,Сперотон">
                                    Бесплодие
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zdorovie_semejnoj_pary/podgotovka_k_vrt" class="list-problem-link "
                                   data-problem="Органы малого таза"
                                   data-drugs="Прегнотон,Сперотон">
                                    Подготовка к ВРТ
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zdorovie_semejnoj_pary/povtornye_vykidyshi"
                                   class="list-problem-link "
                                   data-problem="Органы малого таза,ДНК мужских сперматозоидов"
                                   data-drugs="Синергин">
                                     Повторные выкидыши
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                            </div>
                            <!--  Woman List Problem  -->
                            <div id="select-women-category" class="select-category-list"
                                 data-category="women">
                                <a href="/zhenskoe_zdorovie/podgotovka_k_beremennosti"
                                   class="list-problem-link " data-drugs="Прегнотон,Синергин"
                                   data-problem="Органы малого таза">
                                    Подготовка к беременности
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zhenskoe_zdorovie/narushenija_menstrualnogo_cikla"
                                   class="list-problem-link " data-drugs="Прегнотон"
                                   data-problem="Яичники,Матка">
                                    Нарушения менструального цикла
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zhenskoe_zdorovie/giperprolaktinemija" class="list-problem-link "
                                   data-drugs="Прегнотон"
                                   data-problem="Гипофиз">
                                    Гиперпролактинемия
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zhenskoe_zdorovie/mastopatija" class="list-problem-link "
                                   data-drugs="Синергин"
                                   data-problem="Молочные железы">
                                    Мастопатия
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zhenskoe_zdorovie/cistit" class="list-problem-link "
                                   data-drugs="Цисталин"
                                   data-problem="Мочевой пузырь">
                                    Цистит
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zhenskoe_zdorovie/priem_kombinirovannyh_oralnyh_kontraceptivov"
                                   class="list-problem-link " data-drugs="Синергин"
                                   data-problem="Гипофиз,Яичники">
                                    Прием комбинированных оральных контрацептивов
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                            </div>
                            <!--  Men List Problem  -->
                            <div id="select-men-category" class="select-category-list"
                                 data-category="men">
                                <a href="/muzhskoe_zdorovie/podgotovka_k_zachatiju"
                                   class="list-problem-link " data-drugs="Сперотон,Синергин"
                                   data-problem="Органы малого таза">
                                    Подготовка к зачатию
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/muzhskoe_zdorovie/jerektilnaja_disfunkcija"
                                   class="list-problem-link " data-drugs="Синергин"
                                   data-problem="Половой член">
                                    Эректильная дисфункция
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/muzhskoe_zdorovie/prostatit" class="list-problem-link "
                                   data-drugs="Синергин"
                                   data-problem="Предстательная железа">
                                    Простатит
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/muzhskoe_zdorovie/varikocele" class="list-problem-link "
                                   data-drugs="Сперотон"
                                   data-problem="Яички">
                                    Варикоцеле
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                            </div>
                            <!--  Old List Problem  -->
                            <div id="select-old-category" class="select-category-list" data-category="old">
                                <a href="/vozrastnye_izmenenija/muzhchina_starshe_35_let"
                                   class="list-problem-link " data-drugs="Синергин"
                                   data-problem="Органы малого таза ,Сердечно-сосудистая система ,Кожа ">
                                    Мужчина старше 35 лет
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/vozrastnye_izmenenija/zhenshhina_starshe_35_let"
                                   class="list-problem-link " data-drugs="Синергин"
                                   data-problem="Матка,Яичники,Молочные железы,Сердечно-сосудистая система,Кожа">
                                    Женщина старше 35 лет
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/vozrastnye_izmenenija/menopauza" class="list-problem-link "
                                   data-drugs="Синергин"
                                   data-problem="Мочеполовая система,Молочные железы,Кожа,Костная нервная система,Нервная система">
                                    Менопауза
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                            </div>
                            <!--  Вывод наименования органов   -->
                            <div id="wr-human-drugs">
                                <div id="show-organs-name">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="human-main txt-center">
                        <div class="wr-human" data-step="3"
                             data-intro="На силуэтах показываются органы, которые относятся к данной проблеме."
                             data-position='left'>
                            <img class="full-img" src="/img/human-svg/empty.jpg" alt="">
                            <!-- Human Main
                            ================================================== -->
                            <?= yii\base\View::render('@frontend/views/site/human'); ?>
                        </div>
                    </div>
                    <!--  List Drugs   -->
                    <div class="human-drugs">
                        <div class="row container-img-drugs">
                            <div class="help-item-block overflow-hidden" data-step="4"
                                 data-intro="В данном блоке показываются препараты, которые могут помочь решить проблему, выбранную вами"
                                 data-position='left'>
                                <div class="img-drugs-item">
                                    <!--  Сперотон   -->
                                    <figure class="figure-durgs" data-name-drugs="Сперотон">
                                        <img src="/img/drugs/drugs-index/speroton-index-small.jpg"
                                             alt="Сперотон">
                                        <figcaption>
                                            <a href="/nashi_produkty/speroton">
                                    <span class="drugs-name-transition s-f-i">
                                        Сперотон
                                    </span>
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="img-drugs-item">
                                    <!--  Синергин   -->
                                    <figure class="figure-durgs" data-name-drugs="Синергин">
                                        <img src="/img/drugs/drugs-index/sinergin-index-small.jpg"
                                             alt="Синергин">
                                        <figcaption>
                                            <a  href="/nashi_produkty/sinergin">
                                    <span class="drugs-name-transition s-f-i">
                                        Синергин
                                    </span>
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="img-drugs-item">
                                    <!--  Менсе   -->
                                    <figure class="figure-durgs" data-name-drugs="Менсе">
                                        <img src="/img/drugs/drugs-index/mense-index-small.jpg"
                                             alt="Менсе">
                                        <figcaption>
                                            <a href="/nashi_produkty/mence">
                                    <span class="drugs-name-transition s-f-i">
                                        Менсе
                                    </span>
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="img-drugs-item">
                                    <!--  Прегнотон  -->
                                    <figure class="figure-durgs" data-name-drugs="Прегнотон">
                                        <img src="/img/drugs/drugs-index/pregnoton-index-small.jpg"
                                             alt="Прегнотон">
                                        <figcaption>
                                            <a href="/nashi_produkty/pregnoton">
                                    <span class="drugs-name-transition s-f-i">
                                        Прегнотон
                                    </span>
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="img-drugs-item">
                                    <!--  Цисталин   -->
                                    <figure class="figure-durgs" data-name-drugs="Цисталин">
                                        <img src="/img/drugs/drugs-index/cystenium-index-small.jpg"
                                             alt="Цистениум">
                                        <figcaption>
                                            <a href="/nashi_produkty/cystenium">
                                    <span class="drugs-name-transition s-f-i">
                                        Цистениум
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
    <noindex>
        <section id="human-view-mobile">
            <div class="row">
                <div class="container bg-beige-light">
                    <div class="container-it">
                        <h2 class="title-section t-dr-in">Что вас беспокоит?
                    <span class="item-number">
                        <i class="reproduction-quotes"></i>
                        <span class="vertical-line"></span>
                    </span>
                        </h2>
                        <!--  Здоровье семейной пары   -->
                        <h3 class="t-pr-mob">
                            <img src="/img/logo/default/reproduction-married-couple.png"
                                 data-device-pixel-ratio-1.5="/img/logo/retina/reproduction-married-couple.png"
                                 alt="Здоровье семейной пары">
                            <span>Здоровье семейной пары</span>
                        </h3>

                        <div class="s-p_m">
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
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/people/people3.jpg">
                                    <a class="mob-link-slider "
                                       href="/zdorovie_semejnoj_pary/besplodie"><i
                                            class="reproduction-plus-bg"></i></a>
                                    <!--   Touchpad Help   -->
                                    <i class="reproduction-tach_help"></i>

                                    <p>Бесплодие</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/people/people1.jpg">
                                    <a class="mob-link-slider "
                                       href="/zdorovie_semejnoj_pary/povtornye_vykidyshi"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p> Повторные выкидыши</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/people/people2.jpg">
                                    <a class="mob-link-slider "
                                       href="/zdorovie_semejnoj_pary/podgotovka_k_vrt"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Подготовка к ВРТ</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/people/people1.jpg">
                                    <a class="mob-link-slider "
                                       href="/zdorovie_semejnoj_pary/planirovanie_pervogo_rebenka_posle_35_let"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Планирование <br> первого ребенка после 35 лет</p>
                                </div>
                            </div>
                            <!--   Touchpad Help   -->
                            <i class="reproduction-touch2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Женское здоровье   -->
            <div class="row">
                <div class="container">
                    <div class="container-it">
                        <h3 class="t-pr-mob">
                            <img src="/img/logo/default/reproduction-women.png"
                                 data-device-pixel-ratio-1.5="/img/logo/retina/reproduction-women.png"
                                 alt="Женское здоровье">
                            <span>Женское здоровье</span>
                        </h3>

                        <div class="s-p_m">
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
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/woman/woman1.jpg">
                                    <a class="mob-link-slider "
                                       href="/zhenskoe_zdorovie/podgotovka_k_beremennosti"><i
                                            class="reproduction-plus-bg"></i></a>
                                    <!--   Touchpad Help   -->
                                    <i class="reproduction-tach_help"></i>

                                    <p>Подготовка к беременности</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/woman/woman2.jpg">
                                    <a class="mob-link-slider "
                                       href="/zhenskoe_zdorovie/narushenija_menstrualnogo_cikla"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Нарушения менструального цикла</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/woman/woman3.jpg">
                                    <a class="mob-link-slider "
                                       href="/zhenskoe_zdorovie/giperprolaktinemija"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Гиперпролактинемия</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/woman/woman4.jpg">
                                    <a class="mob-link-slider" href="/zhenskoe_zdorovie/mastopatija"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Мастопатия</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/woman/woman5.jpg">
                                    <a class="mob-link-slider "
                                       href="/zhenskoe_zdorovie/cistit"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Цистит</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/woman/woman6.jpg">
                                    <a class="mob-link-slider "
                                       href="/zhenskoe_zdorovie/priem_kombinirovannyh_oralnyh_kontraceptivov"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Прием комбинированных оральных контрацептивов</p>
                                </div>
                            </div>
                            <!--   Touchpad Help   -->
                            <i class="reproduction-touch2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Мужское здоровье   -->
            <div class="row">
                <div class="container bg-beige-light">
                    <div class="container-it">
                        <h3 class="t-pr-mob">
                            <img src="/img/logo/default/reproduction-men.png"
                                 data-device-pixel-ratio-1.5="/img/logo/retina/reproduction-men.png"
                                 alt="Мужское здоровье">
                            <span>Мужское здоровье</span>
                        </h3>

                        <div class="s-p_m">
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
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/men/men1.jpg">
                                    <a class="mob-link-slider "
                                       href="/muzhskoe_zdorovie/podgotovka_k_zachatiju"><i
                                            class="reproduction-plus-bg"></i></a>
                                    <!--   Touchpad Help   -->
                                    <i class="reproduction-tach_help"></i>

                                    <p>Подготовка к зачатию</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/men/men2.jpg">
                                    <a class="mob-link-slider "
                                       href="/muzhskoe_zdorovie/jerektilnaja_disfunkcija"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Эректильная дисфункция</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/men/men3.jpg">
                                    <a class="mob-link-slider "
                                       href="/muzhskoe_zdorovie/prostatit"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Простатит</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/men/men4.jpg">
                                    <a class="mob-link-slider "
                                       href="muzhskoe_zdorovie/varikocele"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Варикоцеле</p>
                                </div>
                            </div>
                            <!--   Touchpad Help   -->
                            <i class="reproduction-touch2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Возрастные изменения   -->
            <div class="row">
                <div class="container">
                    <div class="container-it">
                        <h3 class="t-pr-mob">
                            <img src="/img/logo/default/reproduction-age-old.png"
                                 data-device-pixel-ratio-1.5="/img/logo/retina/reproduction-age-old.png"
                                 alt="Возрастные изменения">
                            <span>Возрастные изменения</span>
                        </h3>

                        <div class="s-p_m">
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
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/old/old1.jpg">
                                    <a class="mob-link-slider "
                                       href="/vozrastnye_izmenenija/zhenshhina_starshe_35_let"><i
                                            class="reproduction-plus-bg"></i></a>
                                    <!--   Touchpad Help   -->
                                    <i class="reproduction-tach_help"></i>

                                    <p>Женщина старше 35 лет</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/old/old2.jpg">
                                    <a class="mob-link-slider "
                                       href="/vozrastnye_izmenenija/menopauza"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Менопауза</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/old/old3.jpg">
                                    <a class="mob-link-slider "
                                       href="/vozrastnye_izmenenija/muzhchina_starshe_35_let"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Мужчина старше 35 лет</p>
                                </div>
                            </div>
                            <!--   Touchpad Help   -->
                            <i class="reproduction-touch2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Drugs Mobile
        ================================================== -->
        <section id="section-drugs-mobile">
            <div class="row">
                <div class="container bg-beige-light">
                    <div class="container-it">

                        <h2 class="title-section t-dr-in">Препараты
                            <span class="item-number">
                            <i class="reproduction-quotes"></i>
                            <span class="vertical-line"></span>
                            </span>
                        </h2>

                        <div class="s-p_m">
                            <div id="fotorama5"
                                 data-width="100%"
                                 data-maxheight="350"
                                 data-fit="contain"
                                 data-transition="crossfade"
                                 data-loop="true"
                                 data-keyboard="true"
                                 data-arrows="false"
                                 data-click="false"
                                 data-swipe="true"
                                 data-nav="dots"
                                 data-transitionduration="600">
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/drugs/drugs-slider/speroton.jpg">
                                    <a class="btn-drugs-mobile "
                                       href="/nashi_produkty/speroton">Сперотон</a>
                                </div>
                                <div class="mobile-container-drugs txt-center"
                                     data-img="/img/drugs/drugs-slider/pregnoton.jpg">
                                    <a class="btn-drugs-mobile"
                                       href="/nashi_produkty/pregnoton">Прегнотон</a>
                                </div>

                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/drugs/drugs-slider/mense.jpg">
                                    <a class="btn-drugs-mobile"
                                       href="/nashi_produkty/mence">Менсе</a>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/drugs/drugs-slider/cystenium.jpg">
                                    <a class="btn-drugs-mobile "
                                       href="/nashi_produkty/cystenium">Цистениум</a>

                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/drugs/drugs-slider/sinergin.jpg">
                                    <a class="btn-drugs-mobile "
                                       href="/nashi_produkty/sinergin">Синергин</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </noindex>
<?php
if (\Yii::$app->devicedetect->isMobile()) {
    $script = <<< JS
//Tablet & Phone Link
     $(".list-problem-link").hover(function(e){
        var lT = $(".link-tablet-phone");
         // e.preventDefault();
          lT.removeClass('active');
           var iT = $(this).children(".link-tablet-phone");
            iT.addClass('active');
     },function(){
      var lT = $(".link-tablet-phone");
         // e.preventDefault();
          lT.removeClass('active');
     });

//Click Tablet & Phone
    function clickTabletPhoneSpan(obj) {
        var l = $(".link-tablet-phone");
        var url = obj.parent().parent().attr("href");
        location.href = url;

    }
    $('#human-section').on('click',function(){
});

JS;
    $this->registerJs($script, yii\web\View::POS_LOAD);
}
?>
<?php
//$this->registerJsFile('/js/human.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
//$this->registerJsFile('/js/index.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
//$this->registerJsFile('/dist/js/index/index.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
//$this->registerJsFile('/dist/js/index/human.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/dist/js/index/index.all.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);


?>