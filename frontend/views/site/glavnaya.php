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
            <?php endif; ?>
            <!--Touchpad Help-->
            <?php if (\Yii::$app->devicedetect->isMobile()): ?>
                <span class="touchpad-help"> <i class="reproduction-tach_help"></i></span>
            <?php endif; ?>
            <!--Fotoramma-->
            <div class="fotorama"
                 data-width="100%"
                 data-maxheight="520"
                 data-minheight="360"
                 data-fit="cover"
                 data-transition="crossfade"
                 data-loop="true"
                 data-keyboard="true"
                 data-swipe="true"
                 data-click="false"
                 data-nav="false"
                 data-autoplay="5000"
                 data-transitionduration="1200">
                <!--Women Health-->
                <div id="women-block" data-img="/img/header-slider/zip/women_health.jpg" class="wr-s-sl">
                    <!--Help Phone-->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>

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

                                        <desc>Бережем женское здоровье</desc>
                                    </svg>
                                </span>
                                </h2>
                            </div>
                            <h3 class="sub-title-slider OpenSansCondensed txt-right header-color-ligth">
                                Предупреждаем <br> проблемы и помогаем с ними справиться
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
                <div class="wr-s-sl" data-img="/img/specialist/men-health_bg.jpg" id="men-block">
                    <!--Help Phone-->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
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

                                        <desc> Сохраняем мужское здоровье</desc>
                                    </svg>
                                </span>
                                </h2>
                            </div>

                            <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                Поддерживаем <br> мужской организм на протяжении всей жизни
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
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
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

                                        <desc>Зачатие ребенка, семейеая пара</desc>
                                    </svg>
                                </span>
                                </h2>
                            </div>
                            <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                Готовимся стать родителями
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
                <div id="oldHealth-block" data-img="/img/specialist/old-health_bg.jpg"
                     class="wr-s-sl">
                    <!--Help Phone-->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <!--Content TXT Slider-->
                    <div class="slider-section-left txt-right">
                        <div class="content-slider-left ">
                            <div class="animate-hgroup">
                                <h2 class="title-slider-left BebasNeueBold header-color">
                                    Возрастные изменения
                                <span class="wr-svg-slider">
                                    <svg id="old-svg" class="svg-slider-category" viewBox="0 0 122 122"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <desc>Бережем здоровье, возраст</desc>
                                        <path class="none-stroke"
                                              d="M61 121c33.137 0 60-26.863 60-60S94.137 1 61 1 1 27.863 1 61s26.863 60 60 60z"/>
                                    </svg>
                                </span>
                                </h2>
                            </div>
                            <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                Помогаем  продлить <br> период активной жизни и сохранить здоровье
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
                <!--Specialist-->
                <div id="specialist-block" data-img="/img/specialist/header-sl.jpg"
                     class="wr-s-sl">
                    <!--Help Phone-->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <!--Content TXT Slider-->
                    <div class="slider-section-left txt-right">
                        <div class="content-slider-left ">
                            <div class="animate-hgroup">
                                <h2 class="title-slider-left BebasNeueBold header-color">
                                    Эффективность доказана
                                    <span class="wr-svg-slider">
                                    <svg id="article-svg" class="svg-slider-category" viewBox="-2 -2 126 126"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <desc>Актуальная научная информация о продуктах линейки Reproduction</desc>
                                        <path class="none-stroke"
                                              d="M61 121c33.137 0 60-26.863 60-60S94.137 1 61 1 1 27.863 1 61s26.863 60 60 60z"/>
                                    </svg>
                                </span>
                                </h2>
                            </div>
                            <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                                Только за последние 5 лет проведено 10 клинических исследований с участием более 800 человек
                            </h3>
                            <!--BTN-->
                            <div class="wr-btn-slider txt-right">
                                <a class="btn btn-slider "
                                   href="/specialist">Перейти
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
                        </h1>
                        <!--Description-->
                        <div class="position-relative">
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
                        </div>
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
                        <h2 class="title-section t-dr-in">О чем вы хотите узнать?
                    <span class="item-number">
                        <!--<i class="reproduction-quotes"></i>-->
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
                                   data-problem="Органы малого таза,ДНК сперматозоидов,мужские,женские">
                                    Планирование первого ребенка после 35 лет
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zdorovie_semejnoj_pary/zhenskoe_besplodie" class="list-problem-link "
                                   data-problem="Органы малого таза,Гипофиз,женские,гипофиз"
                                   data-drugs="Прегнотон,Синергин">
                                    Женское бесплодие
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zdorovie_semejnoj_pary/muzhskoe_besplodie" class="list-problem-link "
                                   data-problem="Органы малого таза,Гипофиз,мужские,гип"
                                   data-drugs="Синергин,Сперотон">
                                    Мужское бесплодие
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zdorovie_semejnoj_pary/podgotovka_k_vrt" class="list-problem-link "
                                   data-problem="Органы малого таза,мужские,женские"
                                   data-drugs="Прегнотон,Сперотон">
                                    Подготовка к ВРТ и ЭКО
                                    <img class="im-ar" src="/img/dashboard/arrow-2.png" alt="проблемы">
                                    <!--  Link Mobile end Tablet   -->
                            <span class="link-tablet-phone" onclick="clickTabletPhoneSpan($(this));"><i
                                    class="reproduction-plus-bg"></i></span>
                                </a>
                                <a href="/zdorovie_semejnoj_pary/povtornye_vykidyshi"
                                   class="list-problem-link "
                                   data-problem="Органы малого таза,ДНК сперматозоидов,мужские,женские"
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
                                    Нарушения менструального <br> цикла
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
                                   data-drugs="Цистениум"
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
                                   data-drugs="Менсе,Цистениум"
                                   data-problem="Мочеполовая система,Молочные железы,Кожа,Костная система,Нервная система">
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
                            <img class="full-img" src="/img/human-svg/empty.jpg" alt="На силуэтах показываются органы, которые относятся к данной проблеме.">
                            <!-- Human Main
                            ================================================== -->
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="600" height="500" style="background:#f7f7f7" viewBox="0 0 600 500">
                                    <defs>
                                        <filter id="people3-a" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="people3-b" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="people3-c" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="people3-d" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="people3-e" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="people3-f" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                        <filter id="people3-g" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%" filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                       <g class="svg-1" > <g transform="translate(10 185)">
                                            <g transform="translate(44 45)">
                                                <circle cx="133.357" cy="87.514" r="5" fill="#57647A"/>
                                                <polyline stroke="#606D88" points="133.164 87.254 76 .773 .141 .773"/>
                                                <circle cx="132.357" cy="91.514" r="9" fill="#065BB9" filter="url(#people3-a)"/>
                                            </g>
                                           <g class="svg-item"> <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                            <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(17 25)">
                                                <path d="M27.914,61.229 C27.914,59.429 28,57.457 28.171,55.314 C28.771,45.543 30.4,40.4 33.143,38.171 C35.114,36.543 37.686,35.6 40.514,34.657 C45.314,33.029 50.714,31.143 53.714,25.4 C56.371,20.429 56.2,15.971 53.286,11.171 C50.886,7.229 44.457,0.286 27.914,0.286 C11.371,0.286 4.943,7.229 2.543,11.171 C-0.371,15.971 -0.543,20.429 2.114,25.4 C5.114,31.143 10.6,33.029 15.314,34.657 C18.143,35.6 20.714,36.543 22.686,38.171 C25.429,40.486 27.057,45.629 27.657,55.314 C27.829,57.457 27.914,59.514 27.914,61.229"/>
                                                <path d="M5.286 21.971C5.8 23.514 6.914 24.886 8.457 25.4 9.057 25.571 9.743 25.657 10.343 25.829 11.371 26.086 12.4 26.514 13.171 27.2 13.943 27.886 14.457 28.914 14.457 29.943M18.743 28.571C18.657 30.371 19.771 32.257 21.486 32.943 22.343 33.286 23.286 33.371 24.143 33.714 25.686 34.4 26.8 36.029 27.057 37.657M11.543 18.714C12.4 19.571 13.257 20.429 14.457 20.771 15.229 20.943 16.086 20.943 16.857 20.943 18.829 21.029 20.886 21.886 21.657 23.6M5.286 16.914C5.886 15.629 7.257 14.686 8.714 14.514 9.743 14.429 10.686 14.686 11.714 14.686 13.086 14.686 14.457 14.171 15.486 13.229M12.829 9.286C14.457 7.657 16.943 6.971 19.257 7.486 20.2 7.657 21.057 8.086 21.914 8.171 23.457 8.343 25.086 7.657 26.029 6.457M51.486 21.114C50.971 22.657 49.857 24.029 48.314 24.543 47.714 24.714 47.029 24.8 46.429 24.971 45.4 25.229 44.371 25.657 43.6 26.343 42.829 27.029 42.314 28.057 42.314 29.086M38.029 28.571C38.114 30.371 37 32.257 35.286 32.943 34.429 33.286 33.486 33.371 32.629 33.714 31.086 34.4 29.971 36.029 29.714 37.657M45.143 18.114C44.286 18.971 43.429 19.829 42.229 20.171 41.457 20.343 40.6 20.343 39.829 20.343 37.857 20.429 35.8 21.286 35.029 23M50.286 16.143C49.686 14.857 48.314 13.914 46.857 13.743 45.829 13.657 44.886 13.914 43.857 13.914 42.486 13.914 41.114 13.4 40.086 12.457M43.171 9.286C41.543 7.657 39.057 6.971 36.743 7.486 35.8 7.657 34.943 8.086 34.086 8.171 32.543 8.343 30.914 7.657 29.971 6.457M27.829 15.114C27.229 16.4 26.886 18.029 27.486 19.314 27.829 20 28.514 20.6 28.686 21.371 29.029 22.571 28.343 23.857 27.571 24.886M27.914 61.229L27.914 65"/>
                                            </g>
                                            <g stroke="#FD5368" stroke-width="1.7" transform="translate(1 18)">
                                                <path d="M39.457 71.743C39.286 64.114 38.514 52.714 35.514 50.143 30.971 46.286 18.2 46.543 12.2 35.057 10.057 30.943 9.286 26.229 9.971 21.6 10.143 20.4 9.457 19.286 8.343 18.771 5.514 17.571 2.943 15.943.8 13.8M83.6 5.829C82.057 7.971 80 9.857 77.257 11.229 75.543 12.086 73.486 11.743 72.2 10.371 66.886 4.629 57.714.6 43.914.6 30.2.6 21.029 4.629 15.629 10.371 14.343 11.743 12.286 12.086 10.571 11.229 7.829 9.857 5.771 7.971 4.229 5.829M48.371 71.743C48.543 64.114 49.314 52.714 52.314 50.143 56.857 46.286 69.629 46.543 75.629 35.057 77.771 30.943 78.543 26.229 77.857 21.6 77.686 20.4 78.371 19.286 79.486 18.771 82.314 17.571 84.886 15.943 87.029 13.8"/>
                                            </g></g>
                                        </g></g>
                                        <g transform="translate(10 339)">
                                            <g transform="translate(45)">
                                                <circle cx="141.357" cy="5.514" r="5" fill="#57647A"/>
                                                <polyline stroke="#606D88" points="141.512 5.941 75 93.563 .68 93.563"/>
                                                <circle cx="144.357" cy="8.514" r="8" fill="#065BB9" filter="url(#people3-b)"/>
                                            </g>
                                            <g transform="translate(0 49)">
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
                                                    <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943"/>
                                                </g>
                                                <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(11 39)">
                                                    <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g transform="translate(10 287)">
                                            <g transform="translate(46 29)">
                                                <circle cx="124.357" cy="15.514" r="5" fill="#57647A"/>
                                                <polyline stroke="#606D88" points="123.82 17.566 74 22.219 .496 22.219"/>
                                                <circle cx="121.357" cy="9.514" r="9" fill="#065BB9" filter="url(#people3-c)"/>
                                            </g>
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
                                                <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"/>
                                            </g>
                                        </g>
                                        <g transform="translate(10 44)">
                                            <g transform="translate(44)">
                                                <circle cx="161.357" cy="6.514" r="5" fill="#57647A"/>
                                                <polyline stroke="#606D88" points="160.891 6.504 76 86.066 .813 86.066"/>
                                                <circle cx="163.357" cy="9.514" r="9" fill="#065BB9" filter="url(#people3-d)"/>
                                            </g>
                                            <g transform="translate(0 40)">
                                                <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(10 17)">
                                                    <path d="M12.114,58.514 C12.8,55.943 13.229,53.286 13.229,50.629 C13.314,47.886 12.457,45.829 10.4,44.029 C8.6,42.4 6.371,41.629 4.486,40.086 C2.771,38.714 1.486,36.914 0.8,34.857 C0.029,32.543 0.029,30.057 0.8,27.743 C1.571,25.343 3.371,23.714 5.086,22 C3.286,17.8 4.143,12.486 7.229,9.057 C10.314,5.629 15.543,4.343 19.914,5.886 C21.714,2.886 24.971,0.829 28.4,0.486 C31.829,0.143 35.429,1.343 37.829,3.829 C41.686,0.829 47.257,0.143 51.714,2.114 C53.943,3.143 56,4.943 56.514,7.257 C60.457,7.6 64.486,8.714 67.143,11.629 C69.8,14.543 70.571,19.429 67.914,22.343 C69.714,25.6 69.457,29.8 67.4,32.886 C65.343,35.971 61.486,37.686 57.8,37.257 C56.943,40.429 53.343,42.314 50,42.057 C46.657,41.8 43.743,39.829 41.514,37.429 C40.914,40.429 38.343,42.657 35.429,43.686 C32.514,44.629 29.429,44.457 26.429,43.857 C26.343,45.657 26.257,47.457 26.086,49.257 C25.657,52.6 24.886,55.857 23.771,59.029 C23.771,59.114 23.686,59.114 23.686,59.114 C23.6,59.114 23.6,58.943 23.686,59.029"/>
                                                    <path d="M19.486 58.6C19.571 58.514 19.571 58.771 19.4 58.686 19.314 58.6 19.314 58.514 19.4 58.429 19.829 57.314 20.171 56.2 20.429 55.086 21.457 50.8 22.571 45.229 21.029 40.943 20.429 39.143 19.229 37.686 18.286 36.143 17.429 34.857 16.314 33.571 15.714 32.114 14.343 29.029 14.171 25.086 15.886 22.086 20.086 14.543 33.457 16.086 34.314 25.171M48.029 21.571C45.371 24.829 44.857 29.629 46.914 33.314 47 33.4 47.171 33.4 47.086 33.314"/>
                                                    <path d="M11.514 12.571C13.229 12.743 14.857 13.6 16.057 14.886 17.257 16.171 17.943 17.886 17.943 19.6M29.171 18.229C31.657 18.743 34.314 17.629 36.114 15.829 37.914 14.029 38.943 11.543 39.457 9.057 39.286 9.143 39.114 9.143 38.943 9.229M36.886 15.571C37.571 18.229 39.886 20.114 42.457 21.057 45.457 22.171 48.971 22.086 51.886 20.886 54.886 19.686 57.371 17.286 58.657 14.286"/>
                                                    <path d="M52.914,20.286 C55.057,20.543 57.114,21.657 58.657,23.2 C60.2,24.743 61.143,26.886 61.314,29.029"/>
                                                </g>
                                                <circle cx="39.429" cy="50.657" r="6.429" stroke="#FD5368" stroke-width="1.7"/>
                                            </g>
                                        </g>
                                        <g transform="translate(351 258)">
                                            <g transform="translate(0 38)">
                                                <polyline stroke="#606D88" points="5.555 68.906 119 0 195.117 0"/>
                                                <circle cx="5.285" cy="69.341" r="5" fill="#57647A"/>
                                                <circle cx="9.285" cy="73.341" r="9" fill="#065BB9" filter="url(#people3-e)"/>
                                            </g>
                                            <g transform="translate(150)">
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
                                                <path stroke="#5F98D7" stroke-width="1.5" d="M62.07 47.906C64.909 46.998 68.208 49.37 69.433 53.199 70.658 57.029 69.349 60.875 66.51 61.784 63.672 62.692 60.373 60.32 59.147 56.49 57.922 52.66 59.232 48.814 62.07 47.906L62.07 47.906zM23.109 61.728C20.271 60.82 18.961 56.973 20.186 53.143 21.411 49.314 24.711 46.942 27.549 47.85 30.387 48.758 31.697 52.605 30.472 56.434 29.247 60.264 25.948 62.636 23.109 61.728L23.109 61.728z"/>
                                            </g>
                                        </g>
                                        <g transform="translate(340 358)">
                                            <g transform="translate(0 16)">
                                                <polyline stroke="#606D88" points="6.504 8.715 130 8.715 206.445 25.944"/>
                                                <circle cx="6.285" cy="8.341" r="5" fill="#57647A"/>
                                                <circle cx="8.285" cy="8.341" r="8" fill="#065BB9" filter="url(#people3-f)"/>
                                            </g>
                                            <g transform="translate(160)">
                                                <circle cx="45.667" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                <path stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" d="M56.895,22.371 C56.895,26.057 51.838,29.057 45.667,29.057 C39.495,29.057 34.438,26.057 34.438,22.371 C34.438,18.686 39.495,17.229 45.667,17.229 C51.838,17.229 56.895,18.686 56.895,22.371 L56.895,22.371 Z"/>
                                                <g stroke="#5F98D7" stroke-width="1.5" transform="translate(34 34)">
                                                    <path d="M11.667 47.771L11.667 12.457C11.667.8 20.581.2 21.695.886 23.667 2.086 22.638 3.8 21.781 4.914 20.924 6.029 18.952 7.4 18.952 10.743L18.952 33.029C18.952 34.229 20.067 33.029 21.095 35.343 22.038 37.657 19.295 45.371 16.381 46.743 14.067 47.857 11.667 47.771 11.667 47.771L11.667 47.771zM11.667 47.771L11.667 12.457C11.667.8 2.752.2 1.638.886-.333 2.086.695 3.8 1.552 4.914 2.41 6.029 4.381 7.4 4.381 10.743L4.381 33.029C4.381 34.229 3.267 33.029 2.238 35.343 1.295 37.657 4.038 45.371 6.952 46.743 9.352 47.857 11.667 47.771 11.667 47.771L11.667 47.771z"/>
                                                    <path d="M15.438,2.6 C14.41,2.086 13.124,1.829 11.667,1.829 C10.21,1.829 8.924,2.171 7.895,2.6"/>
                                                </g>
                                                <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(15 5)">
                                                    <path d="M46.61,39.4 C46.61,39.4 44.81,40 45.41,41.714 C46.01,43.429 47.724,42.829 47.724,42.829 C50.552,41.886 53.895,44.286 55.095,48.143 C56.295,52 55.01,55.857 52.181,56.8 C52.181,56.8 50.552,57.743 50.981,59.286 C51.495,60.829 53.295,60.229 53.295,60.229 C57.924,58.771 60.238,52.857 58.438,47.114 C56.638,41.371 51.324,37.943 46.61,39.4 L46.61,39.4 Z"/>
                                                    <path d="M52.181.743C47.638 8.543 44.381 18.4 53.552 26.371 67.267 38.371 57.495 44.8 57.495 44.8M14.381 39.4C14.381 39.4 16.181 40 15.581 41.714 14.981 43.429 13.267 42.829 13.267 42.829 10.438 41.886 7.095 44.286 5.895 48.143 4.695 52 5.981 55.857 8.81 56.8 8.81 56.8 10.438 57.743 10.01 59.286 9.495 60.829 7.695 60.229 7.695 60.229 3.067 58.771.752 52.857 2.552 47.114 4.352 41.371 9.667 37.943 14.381 39.4L14.381 39.4z"/>
                                                    <path d="M8.81,0.743 C13.352,8.543 16.61,18.4 7.438,26.371 C-6.276,38.371 3.495,44.8 3.495,44.8"/>
                                                </g>
                                                <path stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" d="M62.739 47.918C65.577 47.01 68.877 49.382 70.102 53.212 71.327 57.042 70.017 60.888 67.179 61.796 64.34 62.704 61.041 60.332 59.816 56.503 58.591 52.673 59.9 48.827 62.739 47.918L62.739 47.918zM23.856 61.74C21.018 60.832 19.708 56.986 20.933 53.156 22.159 49.326 25.458 46.954 28.296 47.862 31.135 48.771 32.445 52.617 31.219 56.447 29.994 60.276 26.695 62.648 23.856 61.74L23.856 61.74z"/>
                                            </g>
                                        </g>
                                        <g transform="translate(376 46)">
                                            <polyline stroke="#606D88" points="8.301 9.313 94 158.273 169.828 158.273"/>
                                            <circle cx="8.285" cy="8.341" r="5" fill="#57647A"/>
                                            <circle cx="8.285" cy="8.341" r="8" fill="#065BB9" filter="url(#people3-g)"/>
                                            <g transform="translate(126 111)">
                                                <circle cx="45" cy="45" r="45" fill="#F7F7F7" stroke="#495466" stroke-width="1.2"/>
                                                <g stroke="#4B5363" stroke-opacity=".566" stroke-width="1.2" transform="translate(10 17)">
                                                    <path d="M57.886,58.514 C57.2,55.943 56.771,53.286 56.771,50.629 C56.686,47.886 57.543,45.829 59.6,44.029 C61.4,42.4 63.629,41.629 65.514,40.086 C67.229,38.714 68.514,36.914 69.2,34.857 C69.971,32.543 69.971,30.057 69.2,27.743 C68.429,25.343 66.629,23.714 64.914,22 C66.714,17.8 65.857,12.486 62.771,9.057 C59.686,5.629 54.457,4.343 50.086,5.886 C48.286,2.886 45.029,0.829 41.6,0.486 C38.171,0.143 34.571,1.343 32.171,3.829 C28.314,0.829 22.743,0.143 18.286,2.114 C16.057,3.143 14,4.943 13.486,7.257 C9.543,7.6 5.514,8.714 2.857,11.629 C0.2,14.543 -0.571,19.429 2.086,22.343 C0.286,25.6 0.543,29.8 2.6,32.886 C4.657,35.971 8.514,37.686 12.2,37.257 C13.057,40.429 16.657,42.314 20,42.057 C23.343,41.8 26.257,39.829 28.486,37.429 C29.086,40.429 31.657,42.657 34.571,43.686 C37.486,44.629 40.571,44.457 43.571,43.857 C43.657,45.657 43.743,47.457 43.914,49.257 C44.343,52.6 45.114,55.857 46.229,59.029 C46.229,59.114 46.314,59.114 46.314,59.114 C46.4,59.114 46.4,58.943 46.314,59.029"/>
                                                    <path d="M50.514 58.6C50.429 58.514 50.429 58.771 50.6 58.686 50.686 58.6 50.686 58.514 50.6 58.429 50.171 57.314 49.829 56.2 49.571 55.086 48.543 50.8 47.429 45.229 48.971 40.943 49.571 39.143 50.771 37.686 51.714 36.143 52.571 34.857 53.686 33.571 54.286 32.114 55.657 29.029 55.829 25.086 54.114 22.086 49.914 14.543 36.543 16.086 35.686 25.171M21.971 21.571C24.629 24.829 25.143 29.629 23.086 33.314 23 33.4 22.829 33.4 22.914 33.314"/>
                                                    <path d="M58.486 12.571C56.771 12.743 55.143 13.6 53.943 14.886 52.743 16.171 52.057 17.886 52.057 19.6M40.829 18.229C38.343 18.743 35.686 17.629 33.886 15.829 32.086 14.029 31.057 11.543 30.543 9.057 30.714 9.143 30.886 9.143 31.057 9.229M33.114 15.571C32.429 18.229 30.114 20.114 27.543 21.057 24.543 22.171 21.029 22.086 18.114 20.886 15.114 19.686 12.629 17.286 11.343 14.286"/>
                                                </g>
                                                <circle cx="50.571" cy="50.657" r="6.429" stroke="#5F98D7" stroke-width="1.5"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                           <!-- --><?/*= yii\base\View::render('@frontend/views/site/human'); */?>
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
                                        <img src="/img/drugs/drugs-index/speroton-index-small.jpg" alt="Сперотон">
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
                                        <img src="/img/drugs/drugs-index/sinergin-index-small.jpg" alt="Синергин">
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
                                        <img src="/img/drugs/drugs-index/mense-index-small.jpg" alt="Менсе">
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
                                        <img src="/img/drugs/drugs-index/pregnoton-index-small.jpg" alt="Прегнотон">
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
                                    <figure class="figure-durgs" data-name-drugs="Цистениум">
                                        <img src="/img/drugs/drugs-index/cystenium-index-small.jpg" alt="Цистениум">
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
        <section id="human-view-mobile">
            <div class="row">
                <div class="container bg-beige-light">
                    <div class="container-it">
                        <h2 class="title-section t-dr-in" style="font-size: 90%">О чем вы хотите узнать?
                    <span class="item-number">
                        <i class="reproduction-quotes"></i>
                        <span class="vertical-line"></span>
                    </span>
                        </h2>
                        <!--  Здоровье семейной пары   -->
                        <h3 class="t-pr-mob" style="padding-top: 5px">
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
                                       href="/zdorovie_semejnoj_pary/zhenskoe_besplodie"><i
                                            class="reproduction-plus-bg"></i></a>
                                    <!--   Touchpad Help   -->
                                    <i class="reproduction-tach_help"></i>

                                    <p>Женское бесплодие</p>
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

                                    <p>Подготовка к ВРТ и ЭКО</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/people/people1.jpg">
                                    <a class="mob-link-slider "
                                       href="/zdorovie_semejnoj_pary/planirovanie_pervogo_rebenka_posle_35_let"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Планирование <br> первого ребенка после 35 лет</p>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/problem_slider/people/people1.jpg">
                                    <a class="mob-link-slider "
                                       href="/zdorovie_semejnoj_pary/muzhskoe_besplodie"><i
                                            class="reproduction-plus-bg"></i></a>

                                    <p>Мужское бесплодие</p>
                                </div>
                            </div>
                            <!--   Touchpad Help    -->
                            <i class="reproduction-touch2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Женское здоровье   -->
            <div class="row">
                <div class="container">
                    <div class="container-it">
                        <h3 class="t-pr-mob" style="padding-top: 5px">
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
                        <h3 class="t-pr-mob" style="padding-top: 5px">
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
                        <h3 class="t-pr-mob" style="padding-top: 5px">
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
                                     data-img="/img/drugs/drugs-bg/speroton-bg.png">
                                    <a class="btn-drugs-mobile"
                                       href="/nashi_produkty/speroton">Сперотон</a>
                                </div>
                                <div class="mobile-container-drugs txt-center"
                                     data-img="/img/drugs/drugs-bg/pregnoton-bg.png">
                                    <a class="btn-drugs-mobile"
                                       href="/nashi_produkty/pregnoton">Прегнотон</a>
                                </div>

                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/drugs/drugs-bg/mense-bg.png">
                                    <a class="btn-drugs-mobile"
                                       href="/nashi_produkty/mence">Менсе</a>
                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/drugs/drugs-bg/cystenium-bg.png">
                                    <a class="btn-drugs-mobile "
                                       href="/nashi_produkty/cystenium">Цистениум</a>

                                </div>
                                <div class="mobile-container-fotorama txt-center"
                                     data-img="/img/drugs/drugs-bg/sinergin-bg.png">
                                    <a class="btn-drugs-mobile "
                                       href="/nashi_produkty/sinergin">Синергин</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
//$this->registerJsFile('/js/index.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
//$this->registerJsFile('/dist/js/index/human.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);


?>