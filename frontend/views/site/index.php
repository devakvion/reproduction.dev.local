<!--Slider Top-->
<header>
    <div id="animation-1" class="fotorama-wr-main row">
        <!--Fotoramma  data-autoplay="5000"
             data-transitionduration="1200"-->
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
             data-transitionduration="1200"
            >
            <!--Women Health-->
            <div id="women-block" data-img="/img/header-slider/zip/women_health.jpg" class="wr-s-sl">
                <!--Help Phone-->
                <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                <?= yii\base\View::render('@frontend/views/site/share'); ?>

                <!--Content TXT Slider-->
                <div class="slider-section-left">
                    <div class="content-slider-left">
                        <div class="animate-hgroup">
                            <h2 class="title-slider-left BebasNeueBold header-color">
                                Бережем <br>
                                женское здоровье
                                <!--SVG-->
                                <span class="wr-svg-slider">
                                    <svg id="women-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122"
                                         class="svg-slider-category">
  <g fill="none" stroke="#2A2C35" transform="translate(-1881 -1722)">
    <g transform="translate(1882 1723)">
      <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
      <path d="M59.55,75.503 C74.187,75.503 86.053,63.783 86.053,49.323 C86.053,34.867 74.187,23.145 59.551,23.145 C44.916,23.145 33.049,34.865 33.049,49.325 C33.049,63.782 44.915,75.503 59.552,75.503 L59.55,75.503 Z M60.845,75.445 L60.845,100.189 L60.845,75.444 L60.845,75.445 Z M48.665,86.39 L73.71,86.39 L48.665,86.39 Z"/>
    </g>
  </g>
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
                <?= yii\base\View::render('@frontend/views/site/share'); ?>
                <!--Content TXT Slider-->
                <div class="slider-section-left txt-right">
                    <div class="content-slider-left ">
                        <div class="animate-hgroup">
                            <h2 class="title-slider-left BebasNeueBold header-color">
                                Сохраняем <br>
                                мужское здоровье
                                <!--SVG-->
                                <span class="wr-svg-slider">
                                    <svg id="men-svg" class="svg-slider-category" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 122 122">
  <g fill="none" stroke="#2A2C35" transform="translate(-2029 -1723)">
    <g transform="translate(2030 1724)">
      <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
      <path d="M53.816 94.892C68.202 94.892 79.863 83.232 79.863 68.846 79.863 54.461 68.203 42.799 53.816 42.799 39.43 42.799 27.769 54.459 27.769 68.845 27.769 83.23 39.429 94.891 53.815 94.891L53.816 94.892zM72.036 50.627L91.328 31.332M79.538 31.332L91.328 31.332 91.328 43.124"/>
    </g>
  </g>
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
                <?= yii\base\View::render('@frontend/views/site/share'); ?>
                <!--Content TXT Slider-->
                <div class="slider-section-left txt-right">
                    <div class="content-slider-left ">
                        <div class="animate-hgroup">
                            <h2 class="title-slider-left BebasNeueBold header-color">
                                Здоровье <br>
                                семейной пары
                                <!--SVG-->
                                <span class="wr-svg-slider">
                                    <svg id="couples-svg" class="svg-slider-category" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 122 122">
  <g fill="none" stroke="#2A2C35" transform="translate(-1717 -1722)">
    <g transform="translate(1718 1723)">
      <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
      <path d="M49.228 83.34C63.178 83.34 74.488 72.032 74.488 58.082 74.488 44.132 63.178 32.825 49.228 32.825 35.278 32.825 23.968 44.133 23.968 58.082 23.968 72.032 35.278 83.34 49.228 83.34zM66.896 40.416L85.603 21.706M74.173 21.706L85.603 21.706 85.603 33.14"/>
      <path d="M65.478,89.494 C76.503,89.494 85.442,80.664 85.442,69.774 C85.442,58.884 76.504,50.054 65.478,50.054 C54.453,50.054 45.514,58.884 45.514,69.774 C45.514,80.664 54.454,89.494 65.478,89.494 Z M66.453,88.954 L66.453,107.591 L66.453,88.954 Z M57.277,97.198 L76.144,97.198 L57.278,97.198 L57.277,97.198 Z"/>
    </g>
  </g>
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
                <?= yii\base\View::render('@frontend/views/site/share'); ?>
                <!--Content TXT Slider-->
                <div class="slider-section-left txt-right">
                    <div class="content-slider-left ">
                        <div class="animate-hgroup">
                            <h2 class="title-slider-left BebasNeueBold header-color">
                                Возрастные изменения
                                <span class="wr-svg-slider">
                                    <svg id="old-svg" class="svg-slider-category" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 122 122">
  <g fill="none" stroke="#2A2C35" transform="translate(-1572 -1720)">
    <g transform="translate(1573 1721)">
      <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
      <path d="M56.948 67.574L65.488 67.574 67.908 61.836 67.908 77.166 72.928 55.906 72.795 71.986 75.795 64.328 86.39 64.328"/>
      <path d="M96.685,64.536 L60.057,101.176 L23.429,64.536 C16.661,57.766 16.661,46.584 23.429,39.816 C26.664,36.578 31.077,34.666 35.784,34.666 C40.491,34.666 44.904,36.43 48.14,39.816 L58.29,49.966 L51.23,57.178 C50.79,57.618 50.79,58.503 51.23,58.943 C51.524,59.237 51.82,59.237 52.113,59.237 C52.407,59.237 52.701,59.091 52.995,58.943 L60.938,50.998 L71.97,39.963 C75.207,36.725 79.62,34.811 84.327,34.811 C89.034,34.811 93.447,36.578 96.683,39.964 C103.597,46.584 103.597,57.767 96.683,64.536 L96.685,64.536 Z"/>
    </g>
  </g>
</svg>
                                </span>
                            </h2>
                        </div>
                        <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                            Помогаем продлить <br> период активной жизни и сохранить здоровье
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
                <?= yii\base\View::render('@frontend/views/site/share'); ?>
                <!--Content TXT Slider-->
                <div class="slider-section-left txt-right">
                    <div class="content-slider-left ">
                        <div class="animate-hgroup">
                            <h2 class="title-slider-left BebasNeueBold header-color">
                                Эффективность доказана
                                <span class="wr-svg-slider">
                                    <svg id="article-svg" class="svg-slider-category" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 122 122">
  <g fill="none" stroke="#363840" transform="translate(-1878 -1855)">
    <g transform="translate(1879 1856)">
      <path d="M0,60 C4.05812251e-15,93.137085 26.862915,120 60,120 C93.137085,120 120,93.137085 120,60 C120,26.862915 93.137085,2.02906125e-15 60,0 C26.862915,-2.02906125e-15 4.05812251e-15,26.862915 0,60"/>
      <path d="M33.1632787,25.5737705 C31.1567213,25.5737705 29.5081967,27.7062295 29.5081967,30.2636066 L29.5081967,89.3586885 C29.5081967,91.9504918 31.1557377,94.0504918 33.1632787,94.0504918 L91.6465574,94.0504918 L91.6465574,94.0180328 L91.7468852,94.0180328 C91.7734426,94.0180328 91.7990164,94.0180328 91.8236066,93.9865574 C91.8501639,93.9865574 91.8757377,93.9865574 91.9022951,93.9521311 C93.5744262,93.5586885 94.8885246,91.657377 94.8885246,89.3606557 L94.8885246,46.924918 C94.8885246,44.367541 93.2144262,42.235082 91.2078689,42.235082 L88.1704918,42.235082 L88.1704918,30.262623 C88.1704918,27.7052459 86.4983607,25.5727869 84.4918033,25.5727869 L33.1622951,25.5727869 L33.1632787,25.5737705 Z M87.9993443,44.8918033 L90.3747541,44.8918033 C91.342623,44.8918033 92.127541,46.1085246 92.127541,47.6439344 L92.127541,89.0340984 C92.127541,90.5714754 91.3406557,91.8177049 90.3767213,91.8177049 L90.1337705,91.8177049 C89.8918033,91.7862295 89.6321311,91.6898361 89.3291803,91.4636066 C88.684918,90.9521311 88.0013115,89.8662295 88.0013115,86.5396721 L88.0013115,44.8937705 L87.9993443,44.8918033 Z M36.397377,83.0655738 L55.495082,83.0655738 L55.495082,82.8137705 L36.2695082,82.8137705 L36.2695082,83.0665574 L36.397377,83.0665574 L36.397377,83.0655738 Z M36.397377,78.0078689 L55.495082,78.0078689 L55.495082,77.755082 L36.2695082,77.755082 L36.2695082,78.0088525 L36.397377,78.0088525 L36.397377,78.0078689 Z M36.397377,72.9481967 L55.495082,72.9481967 L55.495082,72.6954098 L36.2695082,72.6954098 L36.2695082,72.9481967 L36.397377,72.9481967 Z M36.397377,67.8895082 L55.495082,67.8895082 L55.495082,67.6377049 L36.2695082,67.6377049 L36.2695082,67.8904918 L36.397377,67.8904918 L36.397377,67.8895082 Z M49.0445902,60.0501639 L68.1422951,60.0501639 L68.1422951,59.7963934 L48.9167213,59.7963934 L48.9167213,60.0491803 L49.0445902,60.0491803 L49.0445902,60.0501639 Z M61.9455738,83.0665574 L81.0442623,83.0665574 L81.0442623,82.8147541 L61.8167213,82.8147541 L61.8167213,83.067541 L61.9445902,83.067541 L61.9455738,83.0665574 Z M61.9455738,78.0088525 L81.0442623,78.0088525 L81.0442623,77.7560656 L61.8167213,77.7560656 L61.8167213,78.0098361 L61.9445902,78.0098361 L61.9455738,78.0088525 Z M61.9455738,72.9491803 L81.0442623,72.9491803 L81.0442623,72.6963934 L61.8167213,72.6963934 L61.8167213,72.9491803 L61.9445902,72.9491803 L61.9455738,72.9491803 Z M61.9455738,67.8904918 L81.0442623,67.8904918 L81.0442623,67.6386885 L61.8167213,67.6386885 L61.8167213,67.8914754 L61.9445902,67.8914754 L61.9455738,67.8904918 Z M48.2213115,33.6432787 C47.8613115,33.7091803 47.5770492,34.135082 47.5770492,34.5934426 L47.5770492,50.2357377 C47.5770492,50.727541 47.9114754,51.1544262 48.2980328,51.1544262 L69.3786885,51.1544262 C69.7406557,51.1544262 70.1006557,50.7285246 70.1006557,50.2357377 L70.1006557,34.5934426 C70.1006557,34.1016393 69.7386885,33.6422951 69.3777049,33.6422951 L48.2213115,33.6422951 L48.2213115,33.6432787 Z"/>
    </g>
  </g>
</svg>
                                </span>
                            </h2>
                        </div>
                        <h3 class="sub-title-slider animate-sub-title OpenSansCondensed txt-right header-color-ligth">
                            За последние годы проведено<br> 16 клинических исследований с участием более 1200 человек
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
                    <img class="full-img img-mg"
                         src="/img/img-index/21.jpg"
                         alt="Репродуктивная система">
                </div>
                <div class="right-section align-vertical pad-gr-left">
                    <!--Title-->
                    <h1 class="title-section after-line">Препараты для улучшения работы <br> репродуктивной системы мужчин и женщин
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
<!--<a href="javascript:void(0);" onclick="introJs().start();"></a>-->

<!--Human Section-->
<section id="human-section" class="leare_fix container-human">
    <!--Title-->
    <h2 class="title-section after-line human-block">О чем вы хотите узнать?
    </h2>
    <!--  Menu Section Category  -->
    <div class="row leare_fix p-r">
        <div class="tabbed-wr p-r">
            <div class="wr-help-human">
                <a href="javascript:void(0);" onclick="introJs().start();">
                    <i class="reproduction-info-section"></i>
                </a>
            </div>
            <div class="tabbed leare_fix">
                <div class="help-div tabbed leare_fix" data-step="1"
                     data-intro="Выберете раздел, который вас интересует, кликнув на него.
                 <span class='note-tool-tip'>* Нажмите на стрелку, чтобы просмотреть следующие шаги, или закройте подсказку.</span>">
                <label class="first-label">О чем вы хотите узнать?</label>
                <input type="radio" name="tabs" id="tab-nav-1" checked>
                <label class="click-label" for="tab-nav-1" data-for="tab-nav-1">
                    <i class="category-i">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122">
                            <g fill="none" transform="translate(-1717 -1722)">
                                <g transform="translate(1718 1723)">
                                    <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
                                    <path d="M49.228 83.34C63.178 83.34 74.488 72.032 74.488 58.082 74.488 44.132 63.178 32.825 49.228 32.825 35.278 32.825 23.968 44.133 23.968 58.082 23.968 72.032 35.278 83.34 49.228 83.34zM66.896 40.416L85.603 21.706M74.173 21.706L85.603 21.706 85.603 33.14"/>
                                    <path d="M65.478,89.494 C76.503,89.494 85.442,80.664 85.442,69.774 C85.442,58.884 76.504,50.054 65.478,50.054 C54.453,50.054 45.514,58.884 45.514,69.774 C45.514,80.664 54.454,89.494 65.478,89.494 Z M66.453,88.954 L66.453,107.591 L66.453,88.954 Z M57.277,97.198 L76.144,97.198 L57.278,97.198 L57.277,97.198 Z"/>
                                </g>
                            </g>
                        </svg>
                    </i>
                    Здоровье семейной пары</label>
                <input type="radio" name="tabs" id="tab-nav-2">
                <label class="click-label" data-for="tab-nav-2" for="tab-nav-2">
                    <i class="category-i">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122">
                            <g fill="none" transform="translate(-1881 -1722)">
                                <g transform="translate(1882 1723)">
                                    <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
                                    <path d="M59.55,75.503 C74.187,75.503 86.053,63.783 86.053,49.323 C86.053,34.867 74.187,23.145 59.551,23.145 C44.916,23.145 33.049,34.865 33.049,49.325 C33.049,63.782 44.915,75.503 59.552,75.503 L59.55,75.503 Z M60.845,75.445 L60.845,100.189 L60.845,75.444 L60.845,75.445 Z M48.665,86.39 L73.71,86.39 L48.665,86.39 Z"/>
                                </g>
                            </g>
                        </svg>
                    </i>
                    Женское здоровье</label>
                <input type="radio" name="tabs" id="tab-nav-3" >
                <label class="click-label" for="tab-nav-3" data-for="tab-nav-3">
                    <i class="category-i">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122">
                            <g fill="none" transform="translate(-2029 -1723)">
                                <g transform="translate(2030 1724)">
                                    <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
                                    <path d="M53.816 94.892C68.202 94.892 79.863 83.232 79.863 68.846 79.863 54.461 68.203 42.799 53.816 42.799 39.43 42.799 27.769 54.459 27.769 68.845 27.769 83.23 39.429 94.891 53.815 94.891L53.816 94.892zM72.036 50.627L91.328 31.332M79.538 31.332L91.328 31.332 91.328 43.124"/>
                                </g>
                            </g>
                        </svg>
                    </i>
                    Мужское здоровье</label>
                <input type="radio" name="tabs" id="tab-nav-4" >
                <label class="click-label" for="tab-nav-4" data-for="tab-nav-4">
                    <i class="category-i">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122">
                            <g fill="none" transform="translate(-1572 -1720)">
                                <g transform="translate(1573 1721)">
                                    <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
                                    <path d="M56.948 67.574L65.488 67.574 67.908 61.836 67.908 77.166 72.928 55.906 72.795 71.986 75.795 64.328 86.39 64.328"/>
                                    <path d="M96.685,64.536 L60.057,101.176 L23.429,64.536 C16.661,57.766 16.661,46.584 23.429,39.816 C26.664,36.578 31.077,34.666 35.784,34.666 C40.491,34.666 44.904,36.43 48.14,39.816 L58.29,49.966 L51.23,57.178 C50.79,57.618 50.79,58.503 51.23,58.943 C51.524,59.237 51.82,59.237 52.113,59.237 C52.407,59.237 52.701,59.091 52.995,58.943 L60.938,50.998 L71.97,39.963 C75.207,36.725 79.62,34.811 84.327,34.811 C89.034,34.811 93.447,36.578 96.683,39.964 C103.597,46.584 103.597,57.767 96.683,64.536 L96.685,64.536 Z"/>
                                </g>
                            </g>
                        </svg>
                    </i>
                    Возрастные изменения</label>
                </div>
                <div class="tabs leare_fix" data-mh="my-index">
                    <div class="leare_fix tab-nav-1 active">
                        <h3>Здоровье семейной пары</h3>
                        <div class="human-problem p-r">
                            <div class="help-item-block" data-step="2"
                                 data-intro="Наведите на проблему, которая вас интересует."
                                 data-position='right'>
                                <!--  Men & Woman List Problem   -->
                                <a href="/zdorovie_semejnoj_pary/planirovanie_pervogo_rebenka_posle_35_let"
                                   class="list-problem-link " data-drugs="Синергин,Сперотон,Прегнотон" data-human="wm"
                                   data-problem="ДНК,Мочевой,Яичники,Матка,Половой,Яички">
                                    Планирование первого ребенка после 35 лет
                                </a>
                                <a href="/zdorovie_semejnoj_pary/zhenskoe_besplodie" class="list-problem-link "
                                   data-problem="Мочевой,Гипофиз,Яичники,Матка" data-human="w"
                                   data-drugs="Прегнотон,Синергин">
                                    Женское бесплодие
                                </a>
                                <a href="/zdorovie_semejnoj_pary/muzhskoe_besplodie" class="list-problem-link "
                                   data-problem="Гипофиз,Половой,Яички" data-human="m"
                                   data-drugs="Синергин,Сперотон">
                                    Мужское бесплодие
                                </a>
                                <a href="/zdorovie_semejnoj_pary/podgotovka_k_vrt" class="list-problem-link "
                                   data-problem="Мочевой,Яичники,Матка,Половой,Яички" data-human="wm"
                                   data-drugs="Прегнотон,Сперотон">
                                    Подготовка к ВРТ и ЭКО
                                </a>
                                <a href="/zdorovie_semejnoj_pary/povtornye_vykidyshi" class="list-problem-link "
                                   data-human="wm"
                                   data-problem="ДНК,Мочевой,Яичники,Матка,Половой,Яички"
                                   data-drugs="Синергин">
                                    Повторные выкидыши
                                </a>
                                <!--  Вывод наименования органов   -->
                                <div class="show-organs-name"></div>

                            </div>
                        </div>
                        <div class="human-main txt-center">
                            <div class="wr-human" data-step="3"
                                 data-intro="На силуэтах показываются органы, которые относятся к данной проблеме."
                                 data-position='left'>
                                <img class="full-img" src="/img/index-img/empty.min.jpg"
                                     alt="На силуэтах показываются органы, которые относятся к данной проблеме.">
                                <!-- Men Woman
                                ================================================== -->
                                <? /*= yii\base\View::render('@frontend/views/site/_human_new'); */ ?>
                                <div class=" human-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 500"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <filter id="a" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="b" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="c" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="d" width="345.6%" height="345.6%" x="-122.8%" y="-122.8%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="7.369"/>
                                            </filter>
                                            <filter id="e" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="f" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="g" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="h" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd" transform="translate(-197 -47)">
                                            <g transform="translate(197 47)">
                                                <path fill="#FFF" d="M0 0H630V500H0z"/>
                                                <image xlink:href="/img/index-img/problem_svg/people.min.png" x="145"
                                                       width="340.26" height="500"/>
                                                <g class="w-end-m" transform="translate(25 42)">
                                                    <g class="w-org  Матка" transform="translate(0 296)">
                                                        <g transform="translate(45)">
                                                            <path stroke="#606D88"
                                                                  d="M140.96875 9.54296877L75 64.5625 0.679687504 64.5625"/>
                                                            <circle cx="142.357" cy="8.514" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#a)" opacity=".695"/>
                                                            <circle cx="141.357" cy="9.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(0 20)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g transform="translate(6 27)">
                                                                    <path stroke="#B3B3B3" stroke-width="1.29"
                                                                          d="M39,11.486 C43.886,11.4 48.086,9.857 52.543,8.057 C49.886,9.943 47.486,11.314 45.343,13.629 C42.086,17.229 39.857,21.6 39,26.4"/>
                                                                    <g stroke="#B3B3B3" stroke-width="1.29">
                                                                        <path d="M70.029,21.857 C70.029,22.114 69.943,22.543 70.114,22.714 C70.2,22.8 70.371,22.886 70.457,22.886 C70.971,22.971 71.314,22.543 71.657,22.286 C72,22.029 72.257,21.686 72.6,21.429 C73.286,20.743 73.886,19.971 74.486,19.2 C75.771,17.4 76.714,15.343 77.057,13.2 L77.057,13.029 C77.829,8.486 76.2,1.8 68.743,0.514 C61.286,-0.771 58.457,3.686 54.857,3.943"/>
                                                                        <path d="M64.971 12.429C64.629 12.343 64.286 12.171 64.2 11.743 64.029 10.714 66.343 10.8 66.857 10.886 67.886 10.971 68.914 11.143 69.943 11.229 70.543 11.229 71.229 11.229 71.743 10.886 73.114 10.029 73.371 5.914 68.486 4.714 63.6 3.514 59.657 5.914 57.686 8.486M13.029 12.429C13.371 12.343 14.143 12.257 14.057 11.743 14.057 11.571 13.886 11.314 13.714 11.229 13.543 11.143 13.371 11.057 13.114 10.971 12.943 10.971 12.771 10.886 12.686 10.886 11.486 10.714 10.286 10.886 9.086 11.057 8.143 11.229 6.943 11.314 6.086 10.8 4.714 9.943 4.457 5.829 9.343 4.629 14.229 3.429 18.171 5.829 20.143 8.4"/>
                                                                        <path d="M23.057,3.943 C19.457,3.6 16.629,-0.771 9.171,0.514 C1.714,1.714 0.171,8.4 0.857,12.943 C1.2,15.171 2.229,17.229 3.514,19.114 C3.943,19.8 4.457,20.4 4.971,21 C5.486,21.514 6,22.2 6.686,22.543 C6.943,22.714 7.2,22.8 7.457,22.8 C7.543,22.8 7.714,22.8 7.8,22.714 C8.057,22.543 7.971,22.114 7.971,21.857"/>
                                                                    </g>
                                                                    <path stroke="#4B5363" stroke-opacity=".566"
                                                                          stroke-width="1.2"
                                                                          d="M39 11.486C34.114 11.4 29.914 9.857 25.457 8.057 28.114 9.943 30.514 11.314 32.657 13.629 35.914 17.229 38.143 21.6 39 26.4M39 26.486L39 57"/>
                                                                </g>
                                                                <g stroke="#FD5368" stroke-width="1.7"
                                                                   transform="translate(26 27)">
                                                                    <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943"
                                                                          class="w-item"/>
                                                                </g>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(11 39)">
                                                                    <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Яичники" transform="translate(0 215)">
                                                        <g transform="translate(45 46)">
                                                            <path stroke="#606D88"
                                                                  d="M129.433594 30.566406L75.0000002 0.566405991 0.628906456 0.566405991"/>
                                                            <circle cx="127.357" cy="28.514" r="9" fill="#065BB9"
                                                                    class="blur" filter="url(#b)" opacity=".695"/>
                                                            <circle cx="129.357" cy="29.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g transform="translate(6 27)">
                                                                    <path stroke="#B3B3B3" stroke-width="1.29"
                                                                          d="M39,11.486 C43.886,11.4 48.086,9.857 52.543,8.057 C49.886,9.943 47.486,11.314 45.343,13.629 C42.086,17.229 39.857,21.6 39,26.4"/>
                                                                    <g stroke="#B3B3B3" stroke-width="1.29">
                                                                        <path d="M70.029,21.857 C70.029,22.114 69.943,22.543 70.114,22.714 C70.2,22.8 70.371,22.886 70.457,22.886 C70.971,22.971 71.314,22.543 71.657,22.286 C72,22.029 72.257,21.686 72.6,21.429 C73.286,20.743 73.886,19.971 74.486,19.2 C75.771,17.4 76.714,15.343 77.057,13.2 L77.057,13.029 C77.829,8.486 76.2,1.8 68.743,0.514 C61.286,-0.771 58.457,3.686 54.857,3.943"/>
                                                                        <path d="M64.971 12.429C64.629 12.343 64.286 12.171 64.2 11.743 64.029 10.714 66.343 10.8 66.857 10.886 67.886 10.971 68.914 11.143 69.943 11.229 70.543 11.229 71.229 11.229 71.743 10.886 73.114 10.029 73.371 5.914 68.486 4.714 63.6 3.514 59.657 5.914 57.686 8.486M13.029 12.429C13.371 12.343 14.143 12.257 14.057 11.743 14.057 11.571 13.886 11.314 13.714 11.229 13.543 11.143 13.371 11.057 13.114 10.971 12.943 10.971 12.771 10.886 12.686 10.886 11.486 10.714 10.286 10.886 9.086 11.057 8.143 11.229 6.943 11.314 6.086 10.8 4.714 9.943 4.457 5.829 9.343 4.629 14.229 3.429 18.171 5.829 20.143 8.4"/>
                                                                        <path d="M23.057,3.943 C19.457,3.6 16.629,-0.771 9.171,0.514 C1.714,1.714 0.171,8.4 0.857,12.943 C1.2,15.171 2.229,17.229 3.514,19.114 C3.943,19.8 4.457,20.4 4.971,21 C5.486,21.514 6,22.2 6.686,22.543 C6.943,22.714 7.2,22.8 7.457,22.8 C7.543,22.8 7.714,22.8 7.8,22.714 C8.057,22.543 7.971,22.114 7.971,21.857"/>
                                                                    </g>
                                                                    <path stroke="#4B5363" stroke-opacity=".566"
                                                                          stroke-width="1.2"
                                                                          d="M39 11.486C34.114 11.4 29.914 9.857 25.457 8.057 28.114 9.943 30.514 11.314 32.657 13.629 35.914 17.229 38.143 21.6 39 26.4M39 26.486L39 57"/>
                                                                </g>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(26 27)">
                                                                    <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943"/>
                                                                </g>
                                                                <g stroke="#FD5368" stroke-width="1.7"
                                                                   transform="translate(11 39)">
                                                                    <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"
                                                                          class="w-item"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Мочевой  пузырь" transform="translate(0 113)">
                                                        <g transform="translate(44 45)">
                                                            <path stroke="#606D88"
                                                                  d="M133.777344 116.941404L76 0.773435699 0.140624988 0.773435699"/>
                                                            <circle cx="136.357" cy="115.514" r="9" fill="#065BB9"
                                                                    class="blur" filter="url(#c)" opacity=".695"/>
                                                            <circle cx="134.357" cy="116.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(17 25)">
                                                                    <path d="M27.914 61.229C27.914 59.429 28 57.457 28.171 55.314 28.771 45.543 30.4 40.4 33.143 38.171 35.114 36.543 37.686 35.6 40.514 34.657 45.314 33.029 50.714 31.143 53.714 25.4 56.371 20.429 56.2 15.971 53.286 11.171 50.886 7.229 44.457.286 27.914.286 11.371.286 4.943 7.229 2.543 11.171-.371 15.971-.543 20.429 2.114 25.4 5.114 31.143 10.6 33.029 15.314 34.657 18.143 35.6 20.714 36.543 22.686 38.171 25.429 40.486 27.057 45.629 27.657 55.314 27.829 57.457 27.914 59.514 27.914 61.229M28.171 64.9L28 64.9 27.743 64.9"/>
                                                                    <path d="M5.286 21.971C5.8 23.514 6.914 24.886 8.457 25.4 9.057 25.571 9.743 25.657 10.343 25.829 11.371 26.086 12.4 26.514 13.171 27.2 13.943 27.886 14.457 28.914 14.457 29.943M18.743 28.571C18.657 30.371 19.771 32.257 21.486 32.943 22.343 33.286 23.286 33.371 24.143 33.714 25.686 34.4 26.8 36.029 27.057 37.657M11.543 18.714C12.4 19.571 13.257 20.429 14.457 20.771 15.229 20.943 16.086 20.943 16.857 20.943 18.829 21.029 20.886 21.886 21.657 23.6M5.286 16.914C5.886 15.629 7.257 14.686 8.714 14.514 9.743 14.429 10.686 14.686 11.714 14.686 13.086 14.686 14.457 14.171 15.486 13.229M12.829 9.286C14.457 7.657 16.943 6.971 19.257 7.486 20.2 7.657 21.057 8.086 21.914 8.171 23.457 8.343 25.086 7.657 26.029 6.457M51.486 21.114C50.971 22.657 49.857 24.029 48.314 24.543 47.714 24.714 47.029 24.8 46.429 24.971 45.4 25.229 44.371 25.657 43.6 26.343 42.829 27.029 42.314 28.057 42.314 29.086M38.029 28.571C38.114 30.371 37 32.257 35.286 32.943 34.429 33.286 33.486 33.371 32.629 33.714 31.086 34.4 29.971 36.029 29.714 37.657M45.143 18.114C44.286 18.971 43.429 19.829 42.229 20.171 41.457 20.343 40.6 20.343 39.829 20.343 37.857 20.429 35.8 21.286 35.029 23M50.286 16.143C49.686 14.857 48.314 13.914 46.857 13.743 45.829 13.657 44.886 13.914 43.857 13.914 42.486 13.914 41.114 13.4 40.086 12.457M43.171 9.286C41.543 7.657 39.057 6.971 36.743 7.486 35.8 7.657 34.943 8.086 34.086 8.171 32.543 8.343 30.914 7.657 29.971 6.457M27.829 15.114C27.229 16.4 26.886 18.029 27.486 19.314 27.829 20 28.514 20.6 28.686 21.371 29.029 22.571 28.343 23.857 27.571 24.886M27.914 61.229L27.914 65"/>
                                                                </g>
                                                                <g stroke="#FD5368" stroke-width="1.7"
                                                                   transform="translate(1 18)">
                                                                    <path d="M39.457 71.743C39.286 64.114 38.514 52.714 35.514 50.143 30.971 46.286 18.2 46.543 12.2 35.057 10.057 30.943 9.286 26.229 9.971 21.6 10.143 20.4 9.457 19.286 8.343 18.771 5.514 17.571 2.943 15.943.8 13.8M83.6 5.829C82.057 7.971 80 9.857 77.257 11.229 75.543 12.086 73.486 11.743 72.2 10.371 66.886 4.629 57.714.6 43.914.6 30.2.6 21.029 4.629 15.629 10.371 14.343 11.743 12.286 12.086 10.571 11.229 7.829 9.857 5.771 7.971 4.229 5.829M48.371 71.743C48.543 64.114 49.314 52.714 52.314 50.143 56.857 46.286 69.629 46.543 75.629 35.057 77.771 30.943 78.543 26.229 77.857 21.6 77.686 20.4 78.371 19.286 79.486 18.771 82.314 17.571 84.886 15.943 87.029 13.8"
                                                                          class="w-item"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Гипофиз">
                                                        <g transform="translate(44)">
                                                            <path stroke="#606D88"
                                                                  d="M160.687181 10.7189121L76 56.066406 0.812500018 56.066406"/>
                                                            <circle cx="162.357" cy="9.514" r="9" fill="#125198"
                                                                    class="blur" filter="url(#d)"/>
                                                            <circle cx="161.357" cy="10.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(0 9)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(10 17)">
                                                                    <path d="M12.114,58.514 C12.8,55.943 13.229,53.286 13.229,50.629 C13.314,47.886 12.457,45.829 10.4,44.029 C8.6,42.4 6.371,41.629 4.486,40.086 C2.771,38.714 1.486,36.914 0.8,34.857 C0.029,32.543 0.029,30.057 0.8,27.743 C1.571,25.343 3.371,23.714 5.086,22 C3.286,17.8 4.143,12.486 7.229,9.057 C10.314,5.629 15.543,4.343 19.914,5.886 C21.714,2.886 24.971,0.829 28.4,0.486 C31.829,0.143 35.429,1.343 37.829,3.829 C41.686,0.829 47.257,0.143 51.714,2.114 C53.943,3.143 56,4.943 56.514,7.257 C60.457,7.6 64.486,8.714 67.143,11.629 C69.8,14.543 70.571,19.429 67.914,22.343 C69.714,25.6 69.457,29.8 67.4,32.886 C65.343,35.971 61.486,37.686 57.8,37.257 C56.943,40.429 53.343,42.314 50,42.057 C46.657,41.8 43.743,39.829 41.514,37.429 C40.914,40.429 38.343,42.657 35.429,43.686 C32.514,44.629 29.429,44.457 26.429,43.857 C26.343,45.657 26.257,47.457 26.086,49.257 C25.657,52.6 24.886,55.857 23.771,59.029 C23.771,59.114 23.686,59.114 23.686,59.114 C23.6,59.114 23.6,58.943 23.686,59.029"/>
                                                                    <path d="M19.486 58.6C19.571 58.514 19.571 58.771 19.4 58.686 19.314 58.6 19.314 58.514 19.4 58.429 19.829 57.314 20.171 56.2 20.429 55.086 21.457 50.8 22.571 45.229 21.029 40.943 20.429 39.143 19.229 37.686 18.286 36.143 17.429 34.857 16.314 33.571 15.714 32.114 14.343 29.029 14.171 25.086 15.886 22.086 20.086 14.543 33.457 16.086 34.314 25.171M48.029 21.571C45.371 24.829 44.857 29.629 46.914 33.314 47 33.4 47.171 33.4 47.086 33.314"/>
                                                                    <path d="M11.514 12.571C13.229 12.743 14.857 13.6 16.057 14.886 17.257 16.171 17.943 17.886 17.943 19.6M29.171 18.229C31.657 18.743 34.314 17.629 36.114 15.829 37.914 14.029 38.943 11.543 39.457 9.057 39.286 9.143 39.114 9.143 38.943 9.229M36.886 15.571C37.571 18.229 39.886 20.114 42.457 21.057 45.457 22.171 48.971 22.086 51.886 20.886 54.886 19.686 57.371 17.286 58.657 14.286"/>
                                                                    <path d="M52.914,20.286 C55.057,20.543 57.114,21.657 58.657,23.2 C60.2,24.743 61.143,26.886 61.314,29.029"/>
                                                                </g>
                                                                <circle cx="39.429" cy="50.657" r="6.429"
                                                                        stroke="#FD5368" stroke-width="1.7"
                                                                        class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="m-end-w" transform="translate(350 46)">
                                                    <g class="m-org  Половой  член" transform="translate(1 312)">
                                                        <g transform="translate(0 17)">
                                                            <path stroke="#606D88"
                                                                  d="M10.5039075 7.71484351L134.000001 7.71484541 210.445314 24.944"/>
                                                            <circle cx="8.285" cy="8.341" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#e)" opacity=".695"/>
                                                            <circle cx="10.285" cy="7.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(164)">
                                                            <g class="gr-m">
                                                                <circle cx="45.667" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <path stroke="#4B5363" stroke-opacity=".566"
                                                                      stroke-width="1.2"
                                                                      d="M56.895,22.371 C56.895,26.057 51.838,29.057 45.667,29.057 C39.495,29.057 34.438,26.057 34.438,22.371 C34.438,18.686 39.495,17.229 45.667,17.229 C51.838,17.229 56.895,18.686 56.895,22.371 L56.895,22.371 Z"/>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M45.667 81.771L45.667 46.457C45.667 34.8 54.581 34.2 55.695 34.886 57.667 36.086 56.638 37.8 55.781 38.914 54.924 40.029 52.952 41.4 52.952 44.743L52.952 67.029C52.952 68.229 54.067 67.029 55.095 69.343 56.038 71.657 53.295 79.371 50.381 80.743 48.067 81.857 45.667 81.771 45.667 81.771L45.667 81.771zM45.667 81.771L45.667 46.457C45.667 34.8 36.752 34.2 35.638 34.886 33.667 36.086 34.695 37.8 35.552 38.914 36.41 40.029 38.381 41.4 38.381 44.743L38.381 67.029C38.381 68.229 37.267 67.029 36.238 69.343 35.295 71.657 38.038 79.371 40.952 80.743 43.352 81.857 45.667 81.771 45.667 81.771L45.667 81.771z"
                                                                      class="m-item"/>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M49.438,36.6 C48.41,36.086 47.124,35.829 45.667,35.829 C44.21,35.829 42.924,36.171 41.895,36.6"
                                                                      class="m-item"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(15 5)">
                                                                    <path d="M46.61,39.4 C46.61,39.4 44.81,40 45.41,41.714 C46.01,43.429 47.724,42.829 47.724,42.829 C50.552,41.886 53.895,44.286 55.095,48.143 C56.295,52 55.01,55.857 52.181,56.8 C52.181,56.8 50.552,57.743 50.981,59.286 C51.495,60.829 53.295,60.229 53.295,60.229 C57.924,58.771 60.238,52.857 58.438,47.114 C56.638,41.371 51.324,37.943 46.61,39.4 L46.61,39.4 Z"/>
                                                                    <path d="M52.181.743C47.638 8.543 44.381 18.4 53.552 26.371 67.267 38.371 57.495 44.8 57.495 44.8M14.381 39.4C14.381 39.4 16.181 40 15.581 41.714 14.981 43.429 13.267 42.829 13.267 42.829 10.438 41.886 7.095 44.286 5.895 48.143 4.695 52 5.981 55.857 8.81 56.8 8.81 56.8 10.438 57.743 10.01 59.286 9.495 60.829 7.695 60.229 7.695 60.229 3.067 58.771.752 52.857 2.552 47.114 4.352 41.371 9.667 37.943 14.381 39.4L14.381 39.4z"/>
                                                                    <path d="M8.81,0.743 C13.352,8.543 16.61,18.4 7.438,26.371 C-6.276,38.371 3.495,44.8 3.495,44.8"/>
                                                                </g>
                                                                <path stroke="#4B5363" stroke-opacity=".566"
                                                                      stroke-width="1.2"
                                                                      d="M62.739 47.918C65.577 47.01 68.877 49.382 70.102 53.212 71.327 57.042 70.017 60.888 67.179 61.796 64.34 62.704 61.041 60.332 59.816 56.503 58.591 52.673 59.9 48.827 62.739 47.918L62.739 47.918zM23.856 61.74C21.018 60.832 19.708 56.986 20.933 53.156 22.159 49.326 25.458 46.954 28.296 47.862 31.135 48.771 32.445 52.617 31.219 56.447 29.994 60.276 26.695 62.648 23.856 61.74L23.856 61.74z"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="m-org  Яички" transform="translate(14 212)">
                                                        <g transform="translate(0 38)">
                                                            <path stroke="#606D88"
                                                                  d="M7.5546875 68.9062502L121 1.86920147e-7 197.117188 1.86920147e-7"/>
                                                            <circle cx="9.285" cy="70.341" r="9" fill="#065BB9"
                                                                    class="blur" filter="url(#f)" opacity=".695"/>
                                                            <circle cx="7.285" cy="69.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(152)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <path stroke="#4B5363" stroke-opacity=".566"
                                                                      stroke-width="1.2"
                                                                      d="M56.229,22.371 C56.229,26.057 51.171,29.057 45,29.057 C38.829,29.057 33.771,26.057 33.771,22.371 C33.771,18.686 38.829,17.229 45,17.229 C51.171,17.229 56.229,18.686 56.229,22.371 L56.229,22.371 Z"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(33 34)">
                                                                    <path d="M12 47.771L12 12.457C12 .8 20.914.2 22.029.886 24 2.086 22.971 3.8 22.114 4.914 21.257 6.029 19.286 7.4 19.286 10.743L19.286 33.029C19.286 34.229 20.4 33.029 21.429 35.343 22.371 37.657 19.629 45.371 16.714 46.743 14.314 47.857 12 47.771 12 47.771L12 47.771zM12 47.771L12 12.457C12 .8 3.086.2 1.886.886-.086 2.086.943 3.8 1.8 4.914 2.657 6.029 4.629 7.4 4.629 10.743L4.629 33.029C4.629 34.229 3.514 33.029 2.486 35.343 1.543 37.657 4.286 45.371 7.2 46.743 9.6 47.857 12 47.771 12 47.771L12 47.771z"/>
                                                                    <path d="M15.686,2.6 C14.657,2.086 13.371,1.829 11.914,1.829 C10.457,1.829 9.171,2.171 8.143,2.6"/>
                                                                </g>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(14 5)">
                                                                    <path d="M46.943,39.4 C46.943,39.4 45.143,40 45.743,41.714 C46.343,43.429 48.057,42.829 48.057,42.829 C50.886,41.886 54.229,44.286 55.429,48.143 C56.629,52 55.343,55.857 52.514,56.8 C52.514,56.8 50.886,57.743 51.314,59.286 C51.829,60.829 53.629,60.229 53.629,60.229 C58.257,58.771 60.571,52.857 58.771,47.114 C56.971,41.371 51.571,37.943 46.943,39.4 L46.943,39.4 Z"/>
                                                                    <path d="M52.429.743C47.886 8.543 44.629 18.4 53.8 26.371 67.514 38.371 57.743 44.8 57.743 44.8M14.629 39.4C14.629 39.4 16.429 40 15.829 41.714 15.229 43.429 13.514 42.829 13.514 42.829 10.686 41.886 7.343 44.286 6.143 48.143 4.943 52 6.229 55.857 9.057 56.8 9.057 56.8 10.686 57.743 10.257 59.286 9.743 60.829 7.943 60.229 7.943 60.229 3.314 58.771 1 52.857 2.8 47.114 4.6 41.371 10 37.943 14.629 39.4L14.629 39.4z"/>
                                                                    <path d="M9.143,0.743 C13.686,8.543 16.943,18.4 7.771,26.371 C-5.943,38.371 3.829,44.8 3.829,44.8"/>
                                                                </g>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M62.07 47.906C64.909 46.998 68.208 49.37 69.433 53.199 70.658 57.029 69.349 60.875 66.51 61.784 63.672 62.692 60.373 60.32 59.147 56.49 57.922 52.66 59.232 48.814 62.07 47.906L62.07 47.906zM23.109 61.728C20.271 60.82 18.961 56.973 20.186 53.143 21.411 49.314 24.711 46.942 27.549 47.85 30.387 48.758 31.697 52.605 30.472 56.434 29.247 60.264 25.948 62.636 23.109 61.728L23.109 61.728z"
                                                                      class="m-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="m-org  ДНК  сперматозоидов" transform="translate(0 110)">
                                                        <g transform="translate(0 44)">
                                                            <path stroke="#606D88"
                                                                  d="M8.36719409 153.785156L135.000007 0.945312576 210.874976 0.945312576"/>
                                                            <circle cx="8.285" cy="150.341" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#g)" opacity=".695"/>
                                                            <circle cx="8.285" cy="153.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(166)">
                                                            <g class="gr-m">
                                                                <circle cx="45.333" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(5 33)">
                                                                    <path d="M30.305 3.6L30.305 20.4M36.99.6L36.99 23.4M73.076 3.6L73.076 20.4M79.848.6L79.848 23.4M43.676.6L43.676 23.4M50.362 3.686L50.362 20.314M.133.6L.133 23.4M6.819 3.686L6.819 20.314"/>
                                                                </g>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M88.019 30.771C78.248 30.771 72.933 36.514 68.048 42.857M64.79 47.229C59.99 53.486 54.848 59.229 45.333 59.229 23.905 59.229 24.419 30.857 2.648 30.857"
                                                                      class="m-item"/>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M88.019 59.229C66.333 59.229 66.505 30.857 45.333 30.857 35.648 30.857 30.505 36.686 25.619 43.029M22.19 47.571C17.476 53.743 12.248 59.229 2.648 59.229"
                                                                      class="m-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="m-org  Гипофиз" transform="translate(42)">
                                                        <g>
                                                            <path stroke="#606D88"
                                                                  d="M8.52054038 10.6323686L92.9999998 52.2734377 168.828125 52.2734377"/>
                                                            <circle cx="8.285" cy="8.341" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#h)" opacity=".695"/>
                                                            <circle cx="7.285" cy="10.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(125 5)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(10 17)">
                                                                    <path d="M57.886,58.514 C57.2,55.943 56.771,53.286 56.771,50.629 C56.686,47.886 57.543,45.829 59.6,44.029 C61.4,42.4 63.629,41.629 65.514,40.086 C67.229,38.714 68.514,36.914 69.2,34.857 C69.971,32.543 69.971,30.057 69.2,27.743 C68.429,25.343 66.629,23.714 64.914,22 C66.714,17.8 65.857,12.486 62.771,9.057 C59.686,5.629 54.457,4.343 50.086,5.886 C48.286,2.886 45.029,0.829 41.6,0.486 C38.171,0.143 34.571,1.343 32.171,3.829 C28.314,0.829 22.743,0.143 18.286,2.114 C16.057,3.143 14,4.943 13.486,7.257 C9.543,7.6 5.514,8.714 2.857,11.629 C0.2,14.543 -0.571,19.429 2.086,22.343 C0.286,25.6 0.543,29.8 2.6,32.886 C4.657,35.971 8.514,37.686 12.2,37.257 C13.057,40.429 16.657,42.314 20,42.057 C23.343,41.8 26.257,39.829 28.486,37.429 C29.086,40.429 31.657,42.657 34.571,43.686 C37.486,44.629 40.571,44.457 43.571,43.857 C43.657,45.657 43.743,47.457 43.914,49.257 C44.343,52.6 45.114,55.857 46.229,59.029 C46.229,59.114 46.314,59.114 46.314,59.114 C46.4,59.114 46.4,58.943 46.314,59.029"/>
                                                                    <path d="M50.514 58.6C50.429 58.514 50.429 58.771 50.6 58.686 50.686 58.6 50.686 58.514 50.6 58.429 50.171 57.314 49.829 56.2 49.571 55.086 48.543 50.8 47.429 45.229 48.971 40.943 49.571 39.143 50.771 37.686 51.714 36.143 52.571 34.857 53.686 33.571 54.286 32.114 55.657 29.029 55.829 25.086 54.114 22.086 49.914 14.543 36.543 16.086 35.686 25.171M21.971 21.571C24.629 24.829 25.143 29.629 23.086 33.314 23 33.4 22.829 33.4 22.914 33.314"/>
                                                                    <path d="M58.486 12.571C56.771 12.743 55.143 13.6 53.943 14.886 52.743 16.171 52.057 17.886 52.057 19.6M40.829 18.229C38.343 18.743 35.686 17.629 33.886 15.829 32.086 14.029 31.057 11.543 30.543 9.057 30.714 9.143 30.886 9.143 31.057 9.229M33.114 15.571C32.429 18.229 30.114 20.114 27.543 21.057 24.543 22.171 21.029 22.086 18.114 20.886 15.114 19.686 12.629 17.286 11.343 14.286"/>
                                                                </g>
                                                                <circle cx="50.571" cy="50.657" r="6.429"
                                                                        stroke="#5F98D7" stroke-width="1.5"
                                                                        class="m-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leare_fix tab-nav-2" data-mh="my-index">
                        <h3>Женское здоровье</h3>
                        <div class="human-problem human-problem-w">

                            <!--  Woman List Problem  -->
                            <a href="/zhenskoe_zdorovie/podgotovka_k_beremennosti"
                               class="list-problem-link " data-drugs="Прегнотон,Синергин"
                               data-problem="Яичники, Матка" data-human="w">
                                Подготовка к беременности
                            </a>
                            <a href="/zhenskoe_zdorovie/beremennost" class="list-problem-link "
                               data-problem="Беременность"
                               data-drugs="Прегнотон Мама">
                                Питание при беременности
                            </a>
                            <a href="/zhenskoe_zdorovie/kormlenie_grudyu" class="list-problem-link "
                               data-problem="Кормление"
                               data-drugs="Прегнотон Мама">
                                Грудное вскармливание
                            </a>

                            <a href="/zhenskoe_zdorovie/narushenija_menstrualnogo_cikla"
                               class="list-problem-link w-link"
                               data-problem="Яичники, Матка" data-human="w"
                               data-drugs="Прегнотон">
                                Нарушения менструального цикла
                            </a>
                            <a href="/zhenskoe_zdorovie/giperprolaktinemija" class="list-problem-link"
                               data-problem="Гипофиз" data-human="w"
                               data-drugs="Прегнотон">
                                Гиперпролактинемия
                            </a>
                            <a href="/zhenskoe_zdorovie/mastopatija" class="list-problem-link"
                               data-problem="Молочные" data-human="w"
                               data-drugs="Синергин">
                                Мастопатия
                            </a>
                            <a href="/zhenskoe_zdorovie/cistit" class="list-problem-link "
                               data-problem="Мочевой"
                               data-drugs="Цистениум">
                                Цистит
                            </a>

                            <a href="/zhenskoe_zdorovie/priem_kombinirovannyh_oralnyh_kontraceptivov"
                               class="list-problem-link " data-problem="Гипофиз,Яичники"
                               data-drugs="Синергин">
                                Прием комбинированных оральных контрацептивов
                            </a>
                            <!--  Вывод наименования органов   -->
                            <div class="show-organs-name"></div>

                        </div>
                        <div class="human-main txt-center">
                            <div class="wr-human" data-step="3"
                                 data-intro="На силуэтах показываются органы, которые относятся к данной проблеме."
                                 data-position='left'>
                                <img class="full-img" src="/img/index-img/empty.min.jpg"
                                     alt="На силуэтах показываются органы, которые относятся к данной проблеме.">
                                <!-- Woman
                                ================================================== -->
                                <div class="human-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 500"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <filter id="a" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="b" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="c" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="d" width="345.6%" height="345.6%" x="-122.8%" y="-122.8%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="7.369"/>
                                            </filter>
                                            <filter id="e" width="262.5%" height="262.5%" x="-81.3%" y="-81.3%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="f" width="262.5%" height="262.5%" x="-81.3%" y="-81.3%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="g" width="262.5%" height="262.5%" x="-81.3%" y="-81.3%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd" transform="translate(-197 -597)">
                                            <g transform="translate(197 597)">
                                                <path fill="#FFF" d="M0 0H630V500H0z"/>
                                                <image xlink:href="/img/index-img/woman@2x.min.png" x="191"
                                                       width="247.485" height="500"/>
                                                <g class="w-end-m" transform="translate(25 17)">
                                                    <g class="w-org  Матка" transform="translate(0 341)">
                                                        <g transform="translate(45 44)">
                                                            <path stroke="#606D88"
                                                                  d="M245 16.6523438L75 0.562500019 0.679687504 0.562500019"/>
                                                            <circle cx="245.357" cy="15.514" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#a)" opacity=".695"/>
                                                            <circle cx="244.357" cy="16.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g transform="translate(6 27)">
                                                                    <path stroke="#B3B3B3" stroke-width="1.29"
                                                                          d="M39,11.486 C43.886,11.4 48.086,9.857 52.543,8.057 C49.886,9.943 47.486,11.314 45.343,13.629 C42.086,17.229 39.857,21.6 39,26.4"/>
                                                                    <g stroke="#B3B3B3" stroke-width="1.29">
                                                                        <path d="M70.029,21.857 C70.029,22.114 69.943,22.543 70.114,22.714 C70.2,22.8 70.371,22.886 70.457,22.886 C70.971,22.971 71.314,22.543 71.657,22.286 C72,22.029 72.257,21.686 72.6,21.429 C73.286,20.743 73.886,19.971 74.486,19.2 C75.771,17.4 76.714,15.343 77.057,13.2 L77.057,13.029 C77.829,8.486 76.2,1.8 68.743,0.514 C61.286,-0.771 58.457,3.686 54.857,3.943"/>
                                                                        <path d="M64.971 12.429C64.629 12.343 64.286 12.171 64.2 11.743 64.029 10.714 66.343 10.8 66.857 10.886 67.886 10.971 68.914 11.143 69.943 11.229 70.543 11.229 71.229 11.229 71.743 10.886 73.114 10.029 73.371 5.914 68.486 4.714 63.6 3.514 59.657 5.914 57.686 8.486M13.029 12.429C13.371 12.343 14.143 12.257 14.057 11.743 14.057 11.571 13.886 11.314 13.714 11.229 13.543 11.143 13.371 11.057 13.114 10.971 12.943 10.971 12.771 10.886 12.686 10.886 11.486 10.714 10.286 10.886 9.086 11.057 8.143 11.229 6.943 11.314 6.086 10.8 4.714 9.943 4.457 5.829 9.343 4.629 14.229 3.429 18.171 5.829 20.143 8.4"/>
                                                                        <path d="M23.057,3.943 C19.457,3.6 16.629,-0.771 9.171,0.514 C1.714,1.714 0.171,8.4 0.857,12.943 C1.2,15.171 2.229,17.229 3.514,19.114 C3.943,19.8 4.457,20.4 4.971,21 C5.486,21.514 6,22.2 6.686,22.543 C6.943,22.714 7.2,22.8 7.457,22.8 C7.543,22.8 7.714,22.8 7.8,22.714 C8.057,22.543 7.971,22.114 7.971,21.857"/>
                                                                    </g>
                                                                    <path stroke="#4B5363" stroke-opacity=".566"
                                                                          stroke-width="1.2"
                                                                          d="M39 11.486C34.114 11.4 29.914 9.857 25.457 8.057 28.114 9.943 30.514 11.314 32.657 13.629 35.914 17.229 38.143 21.6 39 26.4M39 26.486L39 57"/>
                                                                </g>
                                                                <g stroke="#FD5368" stroke-width="1.7"
                                                                   transform="translate(26 27)">
                                                                    <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943"
                                                                          class="w-item"/>
                                                                </g>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(11 39)">
                                                                    <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Яичники" transform="translate(0 240)">
                                                        <g transform="translate(45 46)">
                                                            <path stroke="#606D88"
                                                                  d="M238.664063 100.855469L75.0000002 0.566405991 0.628906456 0.566405991"/>
                                                            <circle cx="236.357" cy="99.514" r="9" fill="#065BB9"
                                                                    class="blur" filter="url(#b)" opacity=".695"/>
                                                            <circle cx="238.357" cy="100.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g transform="translate(6 27)">
                                                                    <path stroke="#B3B3B3" stroke-width="1.29"
                                                                          d="M39,11.486 C43.886,11.4 48.086,9.857 52.543,8.057 C49.886,9.943 47.486,11.314 45.343,13.629 C42.086,17.229 39.857,21.6 39,26.4"/>
                                                                    <g stroke="#B3B3B3" stroke-width="1.29">
                                                                        <path d="M70.029,21.857 C70.029,22.114 69.943,22.543 70.114,22.714 C70.2,22.8 70.371,22.886 70.457,22.886 C70.971,22.971 71.314,22.543 71.657,22.286 C72,22.029 72.257,21.686 72.6,21.429 C73.286,20.743 73.886,19.971 74.486,19.2 C75.771,17.4 76.714,15.343 77.057,13.2 L77.057,13.029 C77.829,8.486 76.2,1.8 68.743,0.514 C61.286,-0.771 58.457,3.686 54.857,3.943"/>
                                                                        <path d="M64.971 12.429C64.629 12.343 64.286 12.171 64.2 11.743 64.029 10.714 66.343 10.8 66.857 10.886 67.886 10.971 68.914 11.143 69.943 11.229 70.543 11.229 71.229 11.229 71.743 10.886 73.114 10.029 73.371 5.914 68.486 4.714 63.6 3.514 59.657 5.914 57.686 8.486M13.029 12.429C13.371 12.343 14.143 12.257 14.057 11.743 14.057 11.571 13.886 11.314 13.714 11.229 13.543 11.143 13.371 11.057 13.114 10.971 12.943 10.971 12.771 10.886 12.686 10.886 11.486 10.714 10.286 10.886 9.086 11.057 8.143 11.229 6.943 11.314 6.086 10.8 4.714 9.943 4.457 5.829 9.343 4.629 14.229 3.429 18.171 5.829 20.143 8.4"/>
                                                                        <path d="M23.057,3.943 C19.457,3.6 16.629,-0.771 9.171,0.514 C1.714,1.714 0.171,8.4 0.857,12.943 C1.2,15.171 2.229,17.229 3.514,19.114 C3.943,19.8 4.457,20.4 4.971,21 C5.486,21.514 6,22.2 6.686,22.543 C6.943,22.714 7.2,22.8 7.457,22.8 C7.543,22.8 7.714,22.8 7.8,22.714 C8.057,22.543 7.971,22.114 7.971,21.857"/>
                                                                    </g>
                                                                    <path stroke="#4B5363" stroke-opacity=".566"
                                                                          stroke-width="1.2"
                                                                          d="M39 11.486C34.114 11.4 29.914 9.857 25.457 8.057 28.114 9.943 30.514 11.314 32.657 13.629 35.914 17.229 38.143 21.6 39 26.4M39 26.486L39 57"/>
                                                                </g>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(26 27)">
                                                                    <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943"/>
                                                                </g>
                                                                <g stroke="#FD5368" stroke-width="1.7"
                                                                   transform="translate(11 39)">
                                                                    <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"
                                                                          class="w-item"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Мочевой  пузырь" transform="translate(0 138)">
                                                        <g transform="translate(44 45)">
                                                            <path stroke="#606D88"
                                                                  d="M241.363281 184.304687L76 0.773435699 0.140624988 0.773435699"/>
                                                            <circle cx="244.357" cy="183.514" r="9" fill="#065BB9"
                                                                    class="blur" filter="url(#c)" opacity=".695"/>
                                                            <circle cx="242.357" cy="184.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(17 25)">
                                                                    <path d="M27.914 61.229C27.914 59.429 28 57.457 28.171 55.314 28.771 45.543 30.4 40.4 33.143 38.171 35.114 36.543 37.686 35.6 40.514 34.657 45.314 33.029 50.714 31.143 53.714 25.4 56.371 20.429 56.2 15.971 53.286 11.171 50.886 7.229 44.457.286 27.914.286 11.371.286 4.943 7.229 2.543 11.171-.371 15.971-.543 20.429 2.114 25.4 5.114 31.143 10.6 33.029 15.314 34.657 18.143 35.6 20.714 36.543 22.686 38.171 25.429 40.486 27.057 45.629 27.657 55.314 27.829 57.457 27.914 59.514 27.914 61.229M28.171 64.9L28 64.9 27.743 64.9"/>
                                                                    <path d="M5.286 21.971C5.8 23.514 6.914 24.886 8.457 25.4 9.057 25.571 9.743 25.657 10.343 25.829 11.371 26.086 12.4 26.514 13.171 27.2 13.943 27.886 14.457 28.914 14.457 29.943M18.743 28.571C18.657 30.371 19.771 32.257 21.486 32.943 22.343 33.286 23.286 33.371 24.143 33.714 25.686 34.4 26.8 36.029 27.057 37.657M11.543 18.714C12.4 19.571 13.257 20.429 14.457 20.771 15.229 20.943 16.086 20.943 16.857 20.943 18.829 21.029 20.886 21.886 21.657 23.6M5.286 16.914C5.886 15.629 7.257 14.686 8.714 14.514 9.743 14.429 10.686 14.686 11.714 14.686 13.086 14.686 14.457 14.171 15.486 13.229M12.829 9.286C14.457 7.657 16.943 6.971 19.257 7.486 20.2 7.657 21.057 8.086 21.914 8.171 23.457 8.343 25.086 7.657 26.029 6.457M51.486 21.114C50.971 22.657 49.857 24.029 48.314 24.543 47.714 24.714 47.029 24.8 46.429 24.971 45.4 25.229 44.371 25.657 43.6 26.343 42.829 27.029 42.314 28.057 42.314 29.086M38.029 28.571C38.114 30.371 37 32.257 35.286 32.943 34.429 33.286 33.486 33.371 32.629 33.714 31.086 34.4 29.971 36.029 29.714 37.657M45.143 18.114C44.286 18.971 43.429 19.829 42.229 20.171 41.457 20.343 40.6 20.343 39.829 20.343 37.857 20.429 35.8 21.286 35.029 23M50.286 16.143C49.686 14.857 48.314 13.914 46.857 13.743 45.829 13.657 44.886 13.914 43.857 13.914 42.486 13.914 41.114 13.4 40.086 12.457M43.171 9.286C41.543 7.657 39.057 6.971 36.743 7.486 35.8 7.657 34.943 8.086 34.086 8.171 32.543 8.343 30.914 7.657 29.971 6.457M27.829 15.114C27.229 16.4 26.886 18.029 27.486 19.314 27.829 20 28.514 20.6 28.686 21.371 29.029 22.571 28.343 23.857 27.571 24.886M27.914 61.229L27.914 65"/>
                                                                </g>
                                                                <g stroke="#FD5368" stroke-width="1.7"
                                                                   transform="translate(1 18)">
                                                                    <path d="M39.457 71.743C39.286 64.114 38.514 52.714 35.514 50.143 30.971 46.286 18.2 46.543 12.2 35.057 10.057 30.943 9.286 26.229 9.971 21.6 10.143 20.4 9.457 19.286 8.343 18.771 5.514 17.571 2.943 15.943.8 13.8M83.6 5.829C82.057 7.971 80 9.857 77.257 11.229 75.543 12.086 73.486 11.743 72.2 10.371 66.886 4.629 57.714.6 43.914.6 30.2.6 21.029 4.629 15.629 10.371 14.343 11.743 12.286 12.086 10.571 11.229 7.829 9.857 5.771 7.971 4.229 5.829M48.371 71.743C48.543 64.114 49.314 52.714 52.314 50.143 56.857 46.286 69.629 46.543 75.629 35.057 77.771 30.943 78.543 26.229 77.857 21.6 77.686 20.4 78.371 19.286 79.486 18.771 82.314 17.571 84.886 15.943 87.029 13.8"
                                                                          class="w-item"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Гипофиз">
                                                        <g transform="translate(44)">
                                                            <path stroke="#606D88"
                                                                  d="M223.167969 10.5664063L76 81.066406 0.812500018 81.066406"/>
                                                            <circle cx="224.357" cy="9.514" r="9" fill="#125198"
                                                                    class="blur" filter="url(#d)"/>
                                                            <circle cx="223.357" cy="10.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(0 34)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(10 17)">
                                                                    <path d="M12.114,58.514 C12.8,55.943 13.229,53.286 13.229,50.629 C13.314,47.886 12.457,45.829 10.4,44.029 C8.6,42.4 6.371,41.629 4.486,40.086 C2.771,38.714 1.486,36.914 0.8,34.857 C0.029,32.543 0.029,30.057 0.8,27.743 C1.571,25.343 3.371,23.714 5.086,22 C3.286,17.8 4.143,12.486 7.229,9.057 C10.314,5.629 15.543,4.343 19.914,5.886 C21.714,2.886 24.971,0.829 28.4,0.486 C31.829,0.143 35.429,1.343 37.829,3.829 C41.686,0.829 47.257,0.143 51.714,2.114 C53.943,3.143 56,4.943 56.514,7.257 C60.457,7.6 64.486,8.714 67.143,11.629 C69.8,14.543 70.571,19.429 67.914,22.343 C69.714,25.6 69.457,29.8 67.4,32.886 C65.343,35.971 61.486,37.686 57.8,37.257 C56.943,40.429 53.343,42.314 50,42.057 C46.657,41.8 43.743,39.829 41.514,37.429 C40.914,40.429 38.343,42.657 35.429,43.686 C32.514,44.629 29.429,44.457 26.429,43.857 C26.343,45.657 26.257,47.457 26.086,49.257 C25.657,52.6 24.886,55.857 23.771,59.029 C23.771,59.114 23.686,59.114 23.686,59.114 C23.6,59.114 23.6,58.943 23.686,59.029"/>
                                                                    <path d="M19.486 58.6C19.571 58.514 19.571 58.771 19.4 58.686 19.314 58.6 19.314 58.514 19.4 58.429 19.829 57.314 20.171 56.2 20.429 55.086 21.457 50.8 22.571 45.229 21.029 40.943 20.429 39.143 19.229 37.686 18.286 36.143 17.429 34.857 16.314 33.571 15.714 32.114 14.343 29.029 14.171 25.086 15.886 22.086 20.086 14.543 33.457 16.086 34.314 25.171M48.029 21.571C45.371 24.829 44.857 29.629 46.914 33.314 47 33.4 47.171 33.4 47.086 33.314"/>
                                                                    <path d="M11.514 12.571C13.229 12.743 14.857 13.6 16.057 14.886 17.257 16.171 17.943 17.886 17.943 19.6M29.171 18.229C31.657 18.743 34.314 17.629 36.114 15.829 37.914 14.029 38.943 11.543 39.457 9.057 39.286 9.143 39.114 9.143 38.943 9.229M36.886 15.571C37.571 18.229 39.886 20.114 42.457 21.057 45.457 22.171 48.971 22.086 51.886 20.886 54.886 19.686 57.371 17.286 58.657 14.286"/>
                                                                    <path d="M52.914,20.286 C55.057,20.543 57.114,21.657 58.657,23.2 C60.2,24.743 61.143,26.886 61.314,29.029"/>
                                                                </g>
                                                                <circle cx="39.429" cy="50.657" r="6.429"
                                                                        stroke="#FD5368" stroke-width="1.7"
                                                                        class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Кормление  грудью" transform="translate(317 193)">
                                                        <g transform="translate(0 10)">
                                                            <path stroke="#606D88"
                                                                  d="M12.796875 13.5507812L140.000001 36.1484383 218.632814 36.1484383"/>
                                                            <circle cx="12.285" cy="12.841" r="12" fill="#065BB9"
                                                                    class="blur" filter="url(#e)" opacity=".695"/>
                                                            <circle cx="12.285" cy="12.841" r="5" fill="#57647A"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(174)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(19 31)">
                                                                    <path d="M4.829 4.214C6.371 4.814 7.571 6.186 8 7.814M.371 24.871C2.257 23.929 3.886 22.557 5.086 20.757M3.2 14.929C4.657 15.614 5.943 16.643 7.229 17.671 11.257 20.843 15.286 23.929 19.057 27.357 19.914 28.129 20.686 28.9 21.371 29.757 21.543 30.014 21.714 30.271 21.8 30.614 21.971 31.214 21.629 31.9 21.114 32.243 20.6 32.586 20 32.757 19.314 32.757 17.514 32.757 15.8 31.729 14.6 30.357 12.543 28.043 11.343 25.3 10.143 22.471 9.457 20.757 8.6 19.043 7.229 17.929M3.971 12.957C3.971 12.957 11.771 13.129 18.2 9.871 24.629 6.614 28.143 2.757 26.343.786 24.886-.671 21.8.786 18.971 3.957 15.543 7.729 11.086 12.7 3.971 12.957L3.971 12.957zM9.371 14.929C9.371 14.929 19.143 17.329 27.543 16.3 38 15.014 33.8 6.786 26.686 10.471 18.886 14.5 9.371 14.929 9.371 14.929L9.371 14.929zM11.171 17.5C11.171 17.5 17.857 22.9 24.8 25.043 33.371 27.786 33.029 19.9 26.257 20.157 18.714 20.5 11.171 17.5 11.171 17.5L11.171 17.5z"/>
                                                                </g>
                                                                <path stroke="#495466" stroke-width="1.2"
                                                                      d="M17.571,41.729 C24.943,43.1 28.971,37.529 33.171,32.471 C37.286,27.5 42.343,22.871 49.029,22.614 C58.371,22.271 64.457,29.643 66.429,38.043 C68.657,47.643 67.114,60.5 58.8,66.843 C50.829,72.929 39.429,71.214 32.314,64.871 C28.971,61.871 27.086,57.5 25.2,53.557 C23.314,49.786 20.143,47.214 16.714,45.071"/>
                                                                <path stroke="#FD5368" stroke-width="1.7"
                                                                      d="M62.829,86.814 C62.657,82.443 62.571,78.071 62.4,73.7 C56.486,74.986 50.486,76.271 44.4,75.671 C36.943,74.9 29.914,70.957 25.029,65.3 C20.143,59.643 17.314,52.357 16.714,44.814 C16.629,44.129 16.629,43.443 16.8,42.757 C17.057,41.986 17.571,41.386 18.171,40.871 C23.229,35.729 28.543,30.929 33.171,25.357 C37.886,19.786 42,13.7 45.086,7.014 C46.029,4.871 46.886,2.729 47.571,0.586"
                                                                      class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Молочные  железы" transform="translate(317 75)">
                                                        <g transform="translate(0 46)">
                                                            <path stroke="#606D88"
                                                                  d="M11.8476563 66.6367188L136.285157 0.0742195129 219.652345 0.0742195129"/>
                                                            <circle cx="12.285" cy="65.841" r="12" fill="#065BB9"
                                                                    class="blur" filter="url(#f)" opacity=".695"/>
                                                            <circle cx="11.285" cy="64.841" r="5" fill="#57647A"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(174)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(16)">
                                                                    <path d="M7.829 35.214C9.371 35.814 10.571 37.186 11 38.814M3.371 55.871C5.257 54.929 6.886 53.557 8.086 51.757M6.2 45.929C7.657 46.614 8.943 47.643 10.229 48.671 14.257 51.843 18.286 54.929 22.057 58.357 22.914 59.129 23.686 59.9 24.371 60.757 24.543 61.014 24.714 61.271 24.8 61.614 24.971 62.214 24.629 62.9 24.114 63.243 23.6 63.586 23 63.757 22.314 63.757 20.514 63.757 18.8 62.729 17.6 61.357 15.543 59.043 14.343 56.3 13.143 53.471 12.457 51.757 11.6 50.043 10.229 48.929M6.971 43.957C6.971 43.957 14.771 44.129 21.2 40.871 27.629 37.614 31.143 33.757 29.343 31.786 27.886 30.329 24.8 31.786 21.971 34.957 18.543 38.729 14.086 43.7 6.971 43.957L6.971 43.957zM12.371 45.929C12.371 45.929 22.143 48.329 30.543 47.3 41 46.014 36.8 37.786 29.686 41.471 21.886 45.5 12.371 45.929 12.371 45.929L12.371 45.929zM14.171 48.5C14.171 48.5 20.857 53.9 27.8 56.043 36.371 58.786 36.029 50.9 29.257 51.157 21.714 51.5 14.171 48.5 14.171 48.5L14.171 48.5z"/>
                                                                    <path d="M46.829,86.814 C46.657,82.443 46.571,78.071 46.4,73.7 C40.486,74.986 34.486,76.271 28.4,75.671 C20.943,74.9 13.914,70.957 9.029,65.3 C4.143,59.643 1.314,52.357 0.714,44.814 C0.629,44.129 0.629,43.443 0.8,42.757 C1.057,41.986 1.571,41.386 2.171,40.871 C7.229,35.729 12.543,30.929 17.171,25.357 C21.886,19.786 26,13.7 29.086,7.014 C30.029,4.871 30.886,2.729 31.571,0.586"/>
                                                                </g>
                                                                <path stroke="#FD5368" stroke-width="1.7"
                                                                      d="M17.571,41.729 C24.943,43.1 28.971,37.529 33.171,32.471 C37.286,27.5 42.343,22.871 49.029,22.614 C58.371,22.271 64.457,29.643 66.429,38.043 C68.657,47.643 67.114,60.5 58.8,66.843 C50.829,72.929 39.429,71.214 32.314,64.871 C28.971,61.871 27.086,57.5 25.2,53.557 C23.314,49.786 20.143,47.214 16.714,45.071"
                                                                      class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Беременность" transform="translate(277 313)">
                                                        <g transform="translate(0 2)">
                                                            <path stroke="#606D88"
                                                                  d="M13 13.8710938L176.285157 45.0742195 259.652345 45.0742195"/>
                                                            <circle cx="12.285" cy="12.841" r="12" fill="#065BB9"
                                                                    class="blur" filter="url(#g)" opacity=".695"/>
                                                            <circle cx="11.285" cy="11.841" r="5" fill="#57647A"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(214)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g fill-rule="nonzero" stroke="#FD5368"
                                                                   transform="translate(19 16)">
                                                                    <path stroke-width="1.4"
                                                                          d="M43.4975385,3.29907692 C37.5815385,-1.52892308 29.9655385,-0.168923077 25.2735385,2.55107692 C22.4175385,4.18307692 18.8135385,7.31107692 17.7935385,13.0230769 C17.4535385,14.9270769 17.8615385,16.6950769 18.2015385,18.1230769 C18.2695385,18.5310769 18.4055385,18.8710769 18.4055385,19.2110769 C18.7455385,20.9790769 19.7655385,21.3870769 20.2415385,21.5910769 C20.3095385,21.5910769 20.3095385,21.6590769 20.3775385,21.6590769 C20.4455385,21.7270769 20.5815385,21.9990769 20.5815385,22.1350769 C20.7175385,22.4750769 20.8535385,22.7470769 21.1255385,22.9510769 C21.3295385,23.1550769 21.5335385,23.2230769 21.7375385,23.2230769 C21.8055385,23.2230769 21.8735385,23.2230769 22.0095385,23.2910769 C22.0095385,23.2910769 22.0775385,23.2910769 22.0775385,23.2910769 C22.4855385,24.4470769 22.1455385,24.9230769 21.8055385,25.5350769 C21.4655385,26.0110769 21.1255385,26.5550769 21.2615385,27.3710769 C21.4655385,28.5270769 22.6895385,28.4590769 23.3695385,28.3910769 C23.5055385,28.3910769 23.7095385,28.3910769 23.8455385,28.3910769 C24.0495385,28.7310769 24.0495385,29.1390769 24.1175385,29.5470769 C24.1855385,29.9550769 24.1855385,30.3630769 24.3215385,30.8390769 C24.4575385,31.3830769 24.8655385,31.5190769 25.1375385,31.5190769 C25.2055385,31.7230769 25.2735385,31.9950769 25.4775385,32.1310769 C25.6815385,32.3350769 26.0215385,32.4030769 26.2255385,32.4710769 C26.2935385,32.4710769 26.3615385,32.4710769 26.3615385,32.5390769 C26.9735385,33.0830769 27.5855385,33.3550769 28.1295385,33.4910769 C26.2935385,35.1910769 24.6615385,36.8910769 23.7095385,37.8430769 C23.4375385,35.6670769 22.7575385,31.2470769 21.1935385,29.8190769 C18.2015385,27.0310769 16.0935385,27.9830769 16.0255385,28.0510769 C15.9575385,28.0510769 15.8895385,28.1190769 15.8895385,28.1870769 C15.8215385,28.1870769 15.8215385,28.1870769 15.7535385,28.1190769 M3.71753846,44.7777654 C3.64953846,45.1857654 3.64953846,46.8190769 3.71753846,47.2270769 C3.92153846,52.0550769 5.48553846,55.1830769 8.81753846,57.6310769 C10.9255385,59.1950769 14.3255385,60.4870769 18.3375385,60.4870769 C20.7175385,60.4870769 23.3015385,60.0110769 26.0215385,58.9230769 C33.9095385,55.6590769 38.4655385,52.4630769 40.9815385,48.7230769 C44.3815385,43.5550769 45.6735385,40.0190769 45.4695385,36.4830769 C45.3335385,34.0350769 44.5175385,32.0630769 43.9055385,30.6350769 C43.3615385,29.4790769 43.1575385,28.1870769 43.2935385,27.1670769 C43.7015385,24.1070769 44.6535385,22.4750769 45.6735385,20.7750769 C45.9455385,20.2990769 46.2175385,19.8230769 46.4895385,19.2790769 C48.3935385,15.5390769 49.2775385,8.05907692 43.4975385,3.29907692 M12.1034967,33.6924197 C11.8314967,33.9644197 6.59549667,39.5404197 5.09949667,44.0964197 C4.55549667,44.4364197 2.71949667,45.2524197 0.611496665,43.2804197 C-1.22450333,41.5804197 1.69949667,34.9844197 3.19549667,33.2844197 C3.39949667,33.0124197 3.67149667,32.8764197 3.94349667,32.7404197 C4.07949667,32.8084197 4.14749667,32.9444197 4.14749667,33.0804197 L4.28349667,34.0324197 L4.96349667,33.4204197 C5.30349667,33.0804197 5.77949667,32.7404197 5.84749667,32.7404197 C5.91549667,32.7404197 6.05149667,32.7404197 6.11949667,32.8084197 C6.18749667,32.8764197 6.18749667,33.1484197 6.18749667,33.2844197 C4.14749667,36.2764197 3.05949667,38.3844197 3.05949667,38.4524197 C2.92349667,38.7244197 2.99149667,38.9964197 3.26349667,39.1324197 C3.53549667,39.2684197 3.80749667,39.2004197 3.94349667,38.9284197 C3.94349667,38.9284197 5.50749667,35.9364197 8.29549667,32.0604197 C11.3554967,27.7764197 14.6874967,28.0484197 16.3874967,28.5924197 C18.1554967,29.2044197 19.1754967,31.3124197 19.5154967,34.8484197 C19.7194967,37.4324197 18.6314967,44.9804197 18.3594967,46.6804197 C17.6794967,50.6924197 19.3794967,51.7804197 19.5154967,51.8484197 C19.5834967,51.9164197 19.7194967,51.9164197 19.7874967,51.9164197 M19.1158044,43.7893428 C19.5238044,44.6733428 20.2718044,45.6933428 21.5638044,46.2373428 C21.9038044,46.3733428 22.2438044,46.4413428 22.5838044,46.4413428 C25.0318044,46.4413428 28.2958044,43.7213428 30.6078044,41.8853428 L31.2198044,41.3413428 C32.9198044,39.9133428 33.9398044,39.0293428 34.8238044,38.1453428 C35.5038044,37.4653428 36.1158044,36.9213428 36.9318044,36.2413428 M37.6416772,31.1645336 C36.8936772,30.2805336 34.7176772,29.1245336 32.2696772,30.7565336 C31.9976772,30.9605336 31.6576772,31.1645336 31.3856772,31.3685336 C31.3856772,31.3685336 31.3176772,31.3685336 31.3176772,31.3685336 C30.9096772,31.5045336 30.5696772,31.8445336 30.1616772,32.2525336 C29.4611542,32.9530565 28.8274521,33.4976641 28.1458416,33.5804116 M24.1855385,21.1830769 C23.5055385,22.1350769 22.6215385,22.1350769 22.3495385,22.0670769 C22.3495385,22.0670769 22.2815385,22.0670769 22.2815385,22.0670769 C22.1455385,22.0670769 22.0095385,21.9990769 22.0095385,21.9990769 C21.9415385,21.9310769 21.8055385,21.6590769 21.7375385,21.5230769 C21.6015385,21.1150769 21.3975385,20.7750769 21.0575385,20.5710769 C20.9895385,20.5710769 20.9215385,20.5030769 20.8535385,20.5030769 C20.7175385,20.4350769 20.5815385,20.4350769 20.5135385,20.2990769 C20.5815385,20.2310769 20.6495385,20.1630769 20.7175385,20.0950769 C20.7855385,20.0270769 21.6695385,18.3270769 24.1175385,18.5990769 M23.8205217,17.1528379 C23.8205217,16.8808379 23.6165217,16.6088379 23.3445217,16.6088379 C20.6245217,16.3368379 19.3325217,18.0368379 18.9925217,18.5128379"
                                                                          class="w-item"/>
                                                                    <path stroke-width="1.5"
                                                                          d="M37.6495385,21.5230769 C37.5815385,21.7950769 37.7175385,22.0670769 37.9895385,22.1350769 C38.2615385,22.2030769 38.4655385,22.2710769 38.7375385,22.2710769 C39.4175385,22.2710769 40.0295385,21.9310769 40.5055385,21.3190769 C41.5935385,19.8910769 41.8655385,17.1030769 41.2535385,16.0830769 C40.7775385,15.1990769 40.1655385,14.7910769 39.4855385,14.7910769 C38.3295385,14.7230769 37.5135385,15.8790769 37.3775385,16.0150769"
                                                                          class="w-item"/>
                                                                </g>
                                                                <path stroke="#4B5363" stroke-opacity=".566"
                                                                      stroke-width="1.2"
                                                                      d="M39.4093599,2.58056719 C40.2446808,4.42339213 40.3191384,6.26621707 39.837491,8.05552564 C39.3791115,9.72151384 38.4646795,11.3456197 37.2361295,12.8952679 C33.5248848,17.5698074 29.0202016,20.9646074 24.9808783,25.2366107 C17.5956177,33.0244075 14.3055237,43.3716834 14.8918771,54.0214432 L14.8918771,54.0516916 C14.6964259,61.7371093 16.9254995,69.2387098 21.2835944,75.3232896 C23.8291127,79.8093584 27.1122263,84.0464597 31.1166477,87.8414692 C31.1282817,87.8484496 31.1352621,87.8600836 31.1422425,87.8647372"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leare_fix tab-nav-3">
                        <h3>Мужское здоровье</h3>
                        <div class="human-problem">
                            <!--  Men List Problem  -->
                            <a href="/muzhskoe_zdorovie/podgotovka_k_zachatiju"
                               class="list-problem-link " data-drugs="Сперотон,Синергин"
                               data-problem="Мочевой,Половой,Яички">
                                Подготовка к зачатию
                            </a>
                            <a href="/muzhskoe_zdorovie/jerektilnaja_disfunkcija"
                               class="list-problem-link " data-drugs="Синергин"
                               data-problem="Половой">
                                Эректильная дисфункция
                            </a>
                            <a href="/muzhskoe_zdorovie/prostatit"
                               class="list-problem-link " data-drugs="Синергин"
                               data-problem="Предстательная">
                                Простатит
                            </a>
                            <a href="/muzhskoe_zdorovie/varikocele" class="list-problem-link" data-drugs="Сперотон" data-problem="Яички">
                                Варикоцеле
                            </a>
                            <!--  Вывод наименования органов   -->
                            <div class="show-organs-name"></div>
                        </div>
                        <div class="human-main txt-center">
                            <div class="wr-human" data-step="3"
                                 data-intro="На силуэтах показываются органы, которые относятся к данной проблеме."
                                 data-position='left'>
                                <img class="full-img" src="/img/index-img/empty.min.jpg"
                                     alt="На силуэтах показываются органы, которые относятся к данной проблеме.">
                                <!-- Men
                                ================================================== -->
                                <div class="human-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 500"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <filter id="a" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="b" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="c" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="d" width="316.7%" height="316.7%" x="-108.4%" y="-108.4%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd" transform="translate(-197 -1127)">
                                            <g transform="translate(197 1127)">
                                                <path fill="#FFF" d="M0 0H630V500H0z"/>
                                                <image xlink:href="/img/index-img/men@2x.min.png" width="286.002"
                                                       height="500" x="172" y="1"/>
                                                <g class="m-end-w" transform="translate(24 133)">
                                                    <g class="m-org  Половой  член" transform="translate(281 168)">
                                                        <g transform="translate(0 41)">
                                                            <path stroke="#606D88"
                                                                  d="M10 74.2773437L179.074219 0.944 256.445314 0.944"/>
                                                            <circle cx="8.285" cy="75.341" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#a)" opacity=".695"/>
                                                            <circle cx="10.285" cy="74.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(210)">
                                                            <g class="gr-m">
                                                                <circle cx="45.667" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <path stroke="#4B5363" stroke-opacity=".566"
                                                                      stroke-width="1.2"
                                                                      d="M56.895,22.371 C56.895,26.057 51.838,29.057 45.667,29.057 C39.495,29.057 34.438,26.057 34.438,22.371 C34.438,18.686 39.495,17.229 45.667,17.229 C51.838,17.229 56.895,18.686 56.895,22.371 L56.895,22.371 Z"/>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M45.667 81.771L45.667 46.457C45.667 34.8 54.581 34.2 55.695 34.886 57.667 36.086 56.638 37.8 55.781 38.914 54.924 40.029 52.952 41.4 52.952 44.743L52.952 67.029C52.952 68.229 54.067 67.029 55.095 69.343 56.038 71.657 53.295 79.371 50.381 80.743 48.067 81.857 45.667 81.771 45.667 81.771L45.667 81.771zM45.667 81.771L45.667 46.457C45.667 34.8 36.752 34.2 35.638 34.886 33.667 36.086 34.695 37.8 35.552 38.914 36.41 40.029 38.381 41.4 38.381 44.743L38.381 67.029C38.381 68.229 37.267 67.029 36.238 69.343 35.295 71.657 38.038 79.371 40.952 80.743 43.352 81.857 45.667 81.771 45.667 81.771L45.667 81.771z"
                                                                      class="m-item"/>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M49.438,36.6 C48.41,36.086 47.124,35.829 45.667,35.829 C44.21,35.829 42.924,36.171 41.895,36.6"
                                                                      class="m-item"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(15 5)">
                                                                    <path d="M46.61,39.4 C46.61,39.4 44.81,40 45.41,41.714 C46.01,43.429 47.724,42.829 47.724,42.829 C50.552,41.886 53.895,44.286 55.095,48.143 C56.295,52 55.01,55.857 52.181,56.8 C52.181,56.8 50.552,57.743 50.981,59.286 C51.495,60.829 53.295,60.229 53.295,60.229 C57.924,58.771 60.238,52.857 58.438,47.114 C56.638,41.371 51.324,37.943 46.61,39.4 L46.61,39.4 Z"/>
                                                                    <path d="M52.181.743C47.638 8.543 44.381 18.4 53.552 26.371 67.267 38.371 57.495 44.8 57.495 44.8M14.381 39.4C14.381 39.4 16.181 40 15.581 41.714 14.981 43.429 13.267 42.829 13.267 42.829 10.438 41.886 7.095 44.286 5.895 48.143 4.695 52 5.981 55.857 8.81 56.8 8.81 56.8 10.438 57.743 10.01 59.286 9.495 60.829 7.695 60.229 7.695 60.229 3.067 58.771.752 52.857 2.552 47.114 4.352 41.371 9.667 37.943 14.381 39.4L14.381 39.4z"/>
                                                                    <path d="M8.81,0.743 C13.352,8.543 16.61,18.4 7.438,26.371 C-6.276,38.371 3.495,44.8 3.495,44.8"/>
                                                                </g>
                                                                <path stroke="#4B5363" stroke-opacity=".566"
                                                                      stroke-width="1.2"
                                                                      d="M62.739 47.918C65.577 47.01 68.877 49.382 70.102 53.212 71.327 57.042 70.017 60.888 67.179 61.796 64.34 62.704 61.041 60.332 59.816 56.503 58.591 52.673 59.9 48.827 62.739 47.918L62.739 47.918zM23.856 61.74C21.018 60.832 19.708 56.986 20.933 53.156 22.159 49.326 25.458 46.954 28.296 47.862 31.135 48.771 32.445 52.617 31.219 56.447 29.994 60.276 26.695 62.648 23.856 61.74L23.856 61.74z"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="m-org  Яички" transform="translate(291 1)">
                                                        <g transform="translate(0 38)">
                                                            <path stroke="#606D88"
                                                                  d="M7.84765625 220.601562L170 1.86920147e-7 246.117188 1.86920147e-7"/>
                                                            <circle cx="9.285" cy="222.341" r="9" fill="#065BB9"
                                                                    class="blur" filter="url(#b)" opacity=".695"/>
                                                            <circle cx="7.285" cy="221.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(201)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <path stroke="#4B5363" stroke-opacity=".566"
                                                                      stroke-width="1.2"
                                                                      d="M56.229,22.371 C56.229,26.057 51.171,29.057 45,29.057 C38.829,29.057 33.771,26.057 33.771,22.371 C33.771,18.686 38.829,17.229 45,17.229 C51.171,17.229 56.229,18.686 56.229,22.371 L56.229,22.371 Z"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(33 34)">
                                                                    <path d="M12 47.771L12 12.457C12 .8 20.914.2 22.029.886 24 2.086 22.971 3.8 22.114 4.914 21.257 6.029 19.286 7.4 19.286 10.743L19.286 33.029C19.286 34.229 20.4 33.029 21.429 35.343 22.371 37.657 19.629 45.371 16.714 46.743 14.314 47.857 12 47.771 12 47.771L12 47.771zM12 47.771L12 12.457C12 .8 3.086.2 1.886.886-.086 2.086.943 3.8 1.8 4.914 2.657 6.029 4.629 7.4 4.629 10.743L4.629 33.029C4.629 34.229 3.514 33.029 2.486 35.343 1.543 37.657 4.286 45.371 7.2 46.743 9.6 47.857 12 47.771 12 47.771L12 47.771z"/>
                                                                    <path d="M15.686,2.6 C14.657,2.086 13.371,1.829 11.914,1.829 C10.457,1.829 9.171,2.171 8.143,2.6"/>
                                                                </g>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(14 5)">
                                                                    <path d="M46.943,39.4 C46.943,39.4 45.143,40 45.743,41.714 C46.343,43.429 48.057,42.829 48.057,42.829 C50.886,41.886 54.229,44.286 55.429,48.143 C56.629,52 55.343,55.857 52.514,56.8 C52.514,56.8 50.886,57.743 51.314,59.286 C51.829,60.829 53.629,60.229 53.629,60.229 C58.257,58.771 60.571,52.857 58.771,47.114 C56.971,41.371 51.571,37.943 46.943,39.4 L46.943,39.4 Z"/>
                                                                    <path d="M52.429.743C47.886 8.543 44.629 18.4 53.8 26.371 67.514 38.371 57.743 44.8 57.743 44.8M14.629 39.4C14.629 39.4 16.429 40 15.829 41.714 15.229 43.429 13.514 42.829 13.514 42.829 10.686 41.886 7.343 44.286 6.143 48.143 4.943 52 6.229 55.857 9.057 56.8 9.057 56.8 10.686 57.743 10.257 59.286 9.743 60.829 7.943 60.229 7.943 60.229 3.314 58.771 1 52.857 2.8 47.114 4.6 41.371 10 37.943 14.629 39.4L14.629 39.4z"/>
                                                                    <path d="M9.143,0.743 C13.686,8.543 16.943,18.4 7.771,26.371 C-5.943,38.371 3.829,44.8 3.829,44.8"/>
                                                                </g>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M62.07 47.906C64.909 46.998 68.208 49.37 69.433 53.199 70.658 57.029 69.349 60.875 66.51 61.784 63.672 62.692 60.373 60.32 59.147 56.49 57.922 52.66 59.232 48.814 62.07 47.906L62.07 47.906zM23.109 61.728C20.271 60.82 18.961 56.973 20.186 53.143 21.411 49.314 24.711 46.942 27.549 47.85 30.387 48.758 31.697 52.605 30.472 56.434 29.247 60.264 25.948 62.636 23.109 61.728L23.109 61.728z"
                                                                      class="m-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="m-org  Предстательная  железа"
                                                       transform="translate(0 168)">
                                                        <g class="org-gr">
                                                            <g transform="translate(45 47)">
                                                                <path stroke="#606D88"
                                                                      d="M236.03125 34.828125L76 0.773435699 0.140624988 0.773435699"/>
                                                                <circle cx="238.357" cy="33.514" r="9" fill="#065BB9"
                                                                        class="blur" filter="url(#c)" opacity=".695"/>
                                                                <circle cx="236.357" cy="34.514" r="5" fill="#4B6186"/>
                                                            </g>
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M56.229,22.371 C56.229,26.057 51.171,29.057 45,29.057 C38.829,29.057 33.771,26.057 33.771,22.371 C33.771,18.686 38.829,17.229 45,17.229 C51.171,17.229 56.229,18.686 56.229,22.371 L56.229,22.371 Z"
                                                                      class="m-item"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(33 34)">
                                                                    <path d="M12 47.771L12 12.457C12 .8 20.914.2 22.029.886 24 2.086 22.971 3.8 22.114 4.914 21.257 6.029 19.286 7.4 19.286 10.743L19.286 33.029C19.286 34.229 20.4 33.029 21.429 35.343 22.371 37.657 19.629 45.371 16.714 46.743 14.314 47.857 12 47.771 12 47.771L12 47.771zM12 47.771L12 12.457C12 .8 3.086.2 1.886.886-.086 2.086.943 3.8 1.8 4.914 2.657 6.029 4.629 7.4 4.629 10.743L4.629 33.029C4.629 34.229 3.514 33.029 2.486 35.343 1.543 37.657 4.286 45.371 7.2 46.743 9.6 47.857 12 47.771 12 47.771L12 47.771z"/>
                                                                    <path d="M15.686,2.6 C14.657,2.086 13.371,1.829 11.914,1.829 C10.457,1.829 9.171,2.171 8.143,2.6"/>
                                                                </g>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(14 5)">
                                                                    <path d="M46.943,39.4 C46.943,39.4 45.143,40 45.743,41.714 C46.343,43.429 48.057,42.829 48.057,42.829 C50.886,41.886 54.229,44.286 55.429,48.143 C56.629,52 55.343,55.857 52.514,56.8 C52.514,56.8 50.886,57.743 51.314,59.286 C51.829,60.829 53.629,60.229 53.629,60.229 C58.257,58.771 60.571,52.857 58.771,47.114 C56.971,41.371 51.571,37.943 46.943,39.4 L46.943,39.4 Z"/>
                                                                    <path d="M52.429.743C47.886 8.543 44.629 18.4 53.8 26.371 67.514 38.371 57.743 44.8 57.743 44.8M14.629 39.4C14.629 39.4 16.429 40 15.829 41.714 15.229 43.429 13.514 42.829 13.514 42.829 10.686 41.886 7.343 44.286 6.143 48.143 4.943 52 6.229 55.857 9.057 56.8 9.057 56.8 10.686 57.743 10.257 59.286 9.743 60.829 7.943 60.229 7.943 60.229 3.314 58.771 1 52.857 2.8 47.114 4.6 41.371 10 37.943 14.629 39.4L14.629 39.4z"/>
                                                                    <path d="M9.143,0.743 C13.686,8.543 16.943,18.4 7.771,26.371 C-5.943,38.371 3.829,44.8 3.829,44.8"/>
                                                                </g>
                                                                <path stroke="#4B5363" stroke-opacity=".566"
                                                                      stroke-width="1.2"
                                                                      d="M62.07 47.906C64.909 46.998 68.208 49.37 69.433 53.199 70.658 57.029 69.349 60.875 66.51 61.784 63.672 62.692 60.373 60.32 59.147 56.49 57.922 52.66 59.232 48.814 62.07 47.906L62.07 47.906zM23.109 61.728C20.271 60.82 18.961 56.973 20.186 53.143 21.411 49.314 24.711 46.942 27.549 47.85 30.387 48.758 31.697 52.605 30.472 56.434 29.247 60.264 25.948 62.636 23.109 61.728L23.109 61.728z"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="m-org  Мочевой  пузырь" transform="translate(1)">
                                                        <g transform="translate(44 45)">
                                                            <path stroke="#606D88"
                                                                  d="M241.363281 184.304687L76 0.773435699 0.140624988 0.773435699"/>
                                                            <circle cx="244.357" cy="183.514" r="9" fill="#065BB9"
                                                                    class="blur" filter="url(#d)" opacity=".695"/>
                                                            <circle cx="242.357" cy="184.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(17 25)">
                                                                    <path d="M27.914 61.229C27.914 59.429 28 57.457 28.171 55.314 28.771 45.543 30.4 40.4 33.143 38.171 35.114 36.543 37.686 35.6 40.514 34.657 45.314 33.029 50.714 31.143 53.714 25.4 56.371 20.429 56.2 15.971 53.286 11.171 50.886 7.229 44.457.286 27.914.286 11.371.286 4.943 7.229 2.543 11.171-.371 15.971-.543 20.429 2.114 25.4 5.114 31.143 10.6 33.029 15.314 34.657 18.143 35.6 20.714 36.543 22.686 38.171 25.429 40.486 27.057 45.629 27.657 55.314 27.829 57.457 27.914 59.514 27.914 61.229M28.171 64.9L28 64.9 27.743 64.9"/>
                                                                    <path d="M5.286 21.971C5.8 23.514 6.914 24.886 8.457 25.4 9.057 25.571 9.743 25.657 10.343 25.829 11.371 26.086 12.4 26.514 13.171 27.2 13.943 27.886 14.457 28.914 14.457 29.943M18.743 28.571C18.657 30.371 19.771 32.257 21.486 32.943 22.343 33.286 23.286 33.371 24.143 33.714 25.686 34.4 26.8 36.029 27.057 37.657M11.543 18.714C12.4 19.571 13.257 20.429 14.457 20.771 15.229 20.943 16.086 20.943 16.857 20.943 18.829 21.029 20.886 21.886 21.657 23.6M5.286 16.914C5.886 15.629 7.257 14.686 8.714 14.514 9.743 14.429 10.686 14.686 11.714 14.686 13.086 14.686 14.457 14.171 15.486 13.229M12.829 9.286C14.457 7.657 16.943 6.971 19.257 7.486 20.2 7.657 21.057 8.086 21.914 8.171 23.457 8.343 25.086 7.657 26.029 6.457M51.486 21.114C50.971 22.657 49.857 24.029 48.314 24.543 47.714 24.714 47.029 24.8 46.429 24.971 45.4 25.229 44.371 25.657 43.6 26.343 42.829 27.029 42.314 28.057 42.314 29.086M38.029 28.571C38.114 30.371 37 32.257 35.286 32.943 34.429 33.286 33.486 33.371 32.629 33.714 31.086 34.4 29.971 36.029 29.714 37.657M45.143 18.114C44.286 18.971 43.429 19.829 42.229 20.171 41.457 20.343 40.6 20.343 39.829 20.343 37.857 20.429 35.8 21.286 35.029 23M50.286 16.143C49.686 14.857 48.314 13.914 46.857 13.743 45.829 13.657 44.886 13.914 43.857 13.914 42.486 13.914 41.114 13.4 40.086 12.457M43.171 9.286C41.543 7.657 39.057 6.971 36.743 7.486 35.8 7.657 34.943 8.086 34.086 8.171 32.543 8.343 30.914 7.657 29.971 6.457M27.829 15.114C27.229 16.4 26.886 18.029 27.486 19.314 27.829 20 28.514 20.6 28.686 21.371 29.029 22.571 28.343 23.857 27.571 24.886M27.914 61.229L27.914 65"/>
                                                                </g>
                                                                <g stroke="#5F98D7" stroke-width="1.5"
                                                                   transform="translate(1 18)">
                                                                    <path d="M39.457 71.743C39.286 64.114 38.514 52.714 35.514 50.143 30.971 46.286 18.2 46.543 12.2 35.057 10.057 30.943 9.286 26.229 9.971 21.6 10.143 20.4 9.457 19.286 8.343 18.771 5.514 17.571 2.943 15.943.8 13.8M83.6 5.829C82.057 7.971 80 9.857 77.257 11.229 75.543 12.086 73.486 11.743 72.2 10.371 66.886 4.629 57.714.6 43.914.6 30.2.6 21.029 4.629 15.629 10.371 14.343 11.743 12.286 12.086 10.571 11.229 7.829 9.857 5.771 7.971 4.229 5.829M48.371 71.743C48.543 64.114 49.314 52.714 52.314 50.143 56.857 46.286 69.629 46.543 75.629 35.057 77.771 30.943 78.543 26.229 77.857 21.6 77.686 20.4 78.371 19.286 79.486 18.771 82.314 17.571 84.886 15.943 87.029 13.8"
                                                                          class="m-item"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leare_fix tab-nav-4">
                        <h3>Возрастные изменения</h3>
                        <div class="human-problem">
                            <!--  Old List Problem  -->
                            <a href="/vozrastnye_izmenenija/muzhchina_starshe_35_let"
                               class="list-problem-link" data-drugs="Синергин"  data-human="m"
                               data-problem="система,Кожа, Органы">
                                Мужчина старше 35 лет
                            </a>
                            <a href="/vozrastnye_izmenenija/zhenshhina_starshe_35_let"
                               class="list-problem-link" data-drugs="Синергин"  data-human="w"
                               data-problem="Молочные,Сердечно-сосудистая, Матка">
                                Женщина старше 35 лет
                            </a>
                            <a href="/vozrastnye_izmenenija/menopauza"
                               class="list-problem-link" data-drugs="Менсе,Цистениум"   data-human="w"
                               data-problem="Нервная,Молочные, Костная, Кожа,Мочевой">
                                Менопауза
                            </a>
                            <!--  Вывод наименования органов   -->
                            <div class="show-organs-name"></div>
                        </div>
                        <div class="human-main txt-center">
                            <div class="wr-human" data-step="3"
                                 data-intro="На силуэтах показываются органы, которые относятся к данной проблеме."
                                 data-position='left'>
                                <img class="full-img" src="/img/index-img/empty.min.jpg"
                                     alt="На силуэтах показываются органы, которые относятся к данной проблеме.">
                                <!-- Human Main Old
                                ================================================== -->
                                <div class="human-svg ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 500"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <filter id="a" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="b" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="c" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="d" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="e" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="f" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="g" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="h" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="i" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                            <filter id="j" width="343.8%" height="343.8%" x="-121.9%" y="-121.9%"
                                                    filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                            </filter>
                                        </defs>
                                        <g fill="none" fill-rule="evenodd" transform="translate(-198 -1665)">
                                            <g transform="translate(198 1665)">
                                                <path fill="#FFF" d="M0 0H630V500H0z"/>
                                                <image xlink:href="/img/index-img/problem_svg/people.min.png" x="145"
                                                       width="340.26" height="500"/>
                                                <g class="w-end-m" transform="translate(24 8)">
                                                    <g class="w-org  Костная  система" transform="translate(0 393)">
                                                        <g transform="translate(50 27)">
                                                            <path stroke="#606D88"
                                                                  d="M121.210937 10.0742187L75 25.5625 0.679687504 25.5625"/>
                                                            <circle cx="122.357" cy="8.514" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#a)" opacity=".695"/>
                                                            <circle cx="121.357" cy="9.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(16 18)">
                                                                    <circle cx="6.971" cy="10.271" r="1.8"/>
                                                                    <circle cx="13.057" cy="13.1" r="1.8"/>
                                                                    <circle cx="21.371" cy="13.1" r="1.8"/>
                                                                    <circle cx="20.514" cy="24.071" r="1.8"/>
                                                                    <circle cx="25.057" cy="29.471" r="1.8"/>
                                                                    <circle cx="29.429" cy="35.814" r="1.8"/>
                                                                    <circle cx="31.314" cy="22.7" r="1.8"/>
                                                                    <circle cx="34.914" cy="29.043" r="1.8"/>
                                                                    <circle cx="41.343" cy="24.5" r="1.8"/>
                                                                    <circle cx="49.229" cy="22.7" r="1.8"/>
                                                                    <circle cx="48.8" cy="29.557" r="1.8"/>
                                                                    <circle cx="44.514" cy="42.071" r="1.8"/>
                                                                    <circle cx="26.686" cy="61.014" r="1.8"/>
                                                                    <circle cx="31.229" cy="42.843" r="1.8"/>
                                                                    <circle cx="36.714" cy="36.243" r="1.8"/>
                                                                    <circle cx="43.486" cy="34.443" r="1.8"/>
                                                                    <circle cx="38.257" cy="43.871" r="1.8"/>
                                                                    <circle cx="40.314" cy="60.5" r="1.8"/>
                                                                    <circle cx="33.457" cy="61.271" r="1.8"/>
                                                                    <circle cx="36.886" cy="66.757" r="1.8"/>
                                                                    <circle cx="29.343" cy="67.014" r="1.8"/>
                                                                    <circle cx="25.4" cy="17.986" r="1.8"/>
                                                                    <circle cx="20.514" cy="5.729" r="1.8"/>
                                                                    <circle cx="13.057" cy="6.157" r="1.8"/>
                                                                    <circle cx="7.743" cy="17.214" r="1.8"/>
                                                                    <circle cx="14.857" cy="19.1" r="1.8"/>
                                                                    <path d="M42.629,70.357 C43.743,66.071 49.829,44.729 50.514,38.043 C50.943,34.357 56,32.386 56.943,28.786 C57.629,26.214 57.886,23.386 56.771,20.986 C55.143,17.471 51.029,15.671 47.429,16.357 C44.857,16.871 42.629,18.157 40.057,18.329 C37.486,18.586 34.743,17.986 32.514,16.614 C29.686,14.9 27.629,11.9 26.857,8.643 C26.257,5.9 27.286,2.214 24.029,0.843 C22.657,0.243 21.114,0.157 19.657,0.071 C15.2,-0.014 10.657,0.671 6.886,2.986 C3.114,5.3 0.286,9.5 0.457,13.957 C0.543,16.529 1.829,19.271 3.8,20.986 C6.371,23.3 8.343,22.271 11.343,23.043 C13.229,23.471 14.686,24.929 16.057,26.386 C17.6,28.014 19.143,29.729 20.686,31.443 C22.486,33.5 24.2,35.557 25.4,37.957 C27.543,42.329 26.686,47.043 25.657,51.586 C24.114,58.443 21.371,64.871 18.114,71.043"/>
                                                                </g>
                                                                <path stroke="#FD5368" stroke-width="1.7"
                                                                      d="M63.257,86.643 C64.886,82.957 69.514,66.843 70.8,58.786 C71.4,55.271 76.114,52.1 77.143,47.986 C78.257,43.871 78.086,40.271 76.714,37.186 C74.314,31.871 68.314,28.957 62.4,30.071 C61.029,30.329 59.743,30.757 58.629,31.186 C57.429,31.614 56.4,31.957 55.457,32.043 C53.743,32.214 52.029,31.786 50.657,30.929 C48.857,29.814 47.571,27.929 47.057,25.786 C46.971,25.357 46.971,24.757 46.886,24.071 C46.714,21.586 46.543,16.871 41.657,14.814 C39.514,13.871 37.457,13.7 35.571,13.7 C29.571,13.614 24.429,14.814 20.4,17.3 C15,20.643 11.657,26.471 11.914,32.214 C12.086,35.986 13.886,39.929 16.714,42.414 C19.543,44.9 22.286,45.071 24.171,45.243 C24.857,45.329 25.543,45.329 26.143,45.5 C26.914,45.671 28.029,46.957 28.714,47.557 C30.257,49.186 31.714,50.814 33.171,52.529 C34.714,54.243 36.257,56.129 37.2,58.1 C38.657,61.1 38.057,64.7 37.114,68.814 C35.657,75.586 32.829,81.929 28.971,87.671"
                                                                      class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Матка  и  яичники" transform="translate(0 295)">
                                                        <g transform="translate(45 28)">
                                                            <path stroke="#606D88"
                                                                  d="M139.855469 9.8515625L75 16.5625 0.679687504 16.5625"/>
                                                            <circle cx="141.357" cy="8.514" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#b)" opacity=".695"/>
                                                            <circle cx="140.357" cy="9.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g transform="translate(6 27)">
                                                                    <path stroke="#B3B3B3" stroke-width="1.29"
                                                                          d="M39,11.486 C43.886,11.4 48.086,9.857 52.543,8.057 C49.886,9.943 47.486,11.314 45.343,13.629 C42.086,17.229 39.857,21.6 39,26.4"/>
                                                                    <g stroke="#B3B3B3" stroke-width="1.29">
                                                                        <path d="M70.029,21.857 C70.029,22.114 69.943,22.543 70.114,22.714 C70.2,22.8 70.371,22.886 70.457,22.886 C70.971,22.971 71.314,22.543 71.657,22.286 C72,22.029 72.257,21.686 72.6,21.429 C73.286,20.743 73.886,19.971 74.486,19.2 C75.771,17.4 76.714,15.343 77.057,13.2 L77.057,13.029 C77.829,8.486 76.2,1.8 68.743,0.514 C61.286,-0.771 58.457,3.686 54.857,3.943"/>
                                                                        <path d="M64.971 12.429C64.629 12.343 64.286 12.171 64.2 11.743 64.029 10.714 66.343 10.8 66.857 10.886 67.886 10.971 68.914 11.143 69.943 11.229 70.543 11.229 71.229 11.229 71.743 10.886 73.114 10.029 73.371 5.914 68.486 4.714 63.6 3.514 59.657 5.914 57.686 8.486M13.029 12.429C13.371 12.343 14.143 12.257 14.057 11.743 14.057 11.571 13.886 11.314 13.714 11.229 13.543 11.143 13.371 11.057 13.114 10.971 12.943 10.971 12.771 10.886 12.686 10.886 11.486 10.714 10.286 10.886 9.086 11.057 8.143 11.229 6.943 11.314 6.086 10.8 4.714 9.943 4.457 5.829 9.343 4.629 14.229 3.429 18.171 5.829 20.143 8.4"/>
                                                                        <path d="M23.057,3.943 C19.457,3.6 16.629,-0.771 9.171,0.514 C1.714,1.714 0.171,8.4 0.857,12.943 C1.2,15.171 2.229,17.229 3.514,19.114 C3.943,19.8 4.457,20.4 4.971,21 C5.486,21.514 6,22.2 6.686,22.543 C6.943,22.714 7.2,22.8 7.457,22.8 C7.543,22.8 7.714,22.8 7.8,22.714 C8.057,22.543 7.971,22.114 7.971,21.857"/>
                                                                    </g>
                                                                    <path stroke="#4B5363" stroke-opacity=".566"
                                                                          stroke-width="1.2"
                                                                          d="M39 11.486C34.114 11.4 29.914 9.857 25.457 8.057 28.114 9.943 30.514 11.314 32.657 13.629 35.914 17.229 38.143 21.6 39 26.4M39 26.486L39 57"/>
                                                                </g>
                                                                <g stroke="#FD5368" stroke-width="1.7"
                                                                   transform="translate(26 27)">
                                                                    <path d="M.229 8.4C2.2 10.971 2.457 15.343 5.457 19.629 8.457 23.914 12.486 24.6 13.6 28.2 14.714 31.8 13.686 42.171 13.771 45.429 13.943 48.771 15.4 55.543 16.343 56.4 17.2 57.257 19 56.914 19 56.914 19 56.914 20.8 57.257 21.657 56.4 22.514 55.543 24.057 48.771 24.229 45.429 24.4 42.086 23.286 31.8 24.4 28.2 25.514 24.6 29.543 23.914 32.543 19.629 35.543 15.343 35.8 10.971 37.771 8.4M3.057 3.943C6.657 4.286 11.286 0 19 0 26.714 0 31.343 4.286 34.943 3.943"
                                                                          class="w-item"/>
                                                                </g>
                                                                <g stroke="#FD5368" stroke-width="1.7"
                                                                   transform="translate(11 39)">
                                                                    <path d="M65.029 9.857C66.314 9.086 67.171 7.886 67.343 6.514 67.771 3.686 65.2.943 61.686.429 61.086.343 60.486.343 59.886.343 57.143.6 54.914 2.314 54.571 4.629 54.143 7.457 56.714 10.2 60.229 10.714 62.029 10.971 63.743 10.629 65.029 9.857L65.029 9.857zM2.971 9.857C4.257 10.629 5.971 11.057 7.771 10.8 11.286 10.286 13.771 7.629 13.429 4.714 13.086 2.4 10.857.686 8.114.429 7.514.343 6.914.429 6.314.514 2.8 1.029.314 3.686.657 6.6.829 7.886 1.686 9.086 2.971 9.857L2.971 9.857z"
                                                                          class="w-item"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Сердечно-сосудистая  система"
                                                       transform="translate(1 197)">
                                                        <g transform="translate(44 4)">
                                                            <path stroke="#606D88"
                                                                  d="M167.859375 10.359375L75 44.5625 0.679687504 44.5625"/>
                                                            <circle cx="168.357" cy="8.514" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#c)" opacity=".695"/>
                                                            <circle cx="167.357" cy="9.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(3 2)">
                                                                    <path d="M31.114 42.814C31.114 42.814 33.771 37.671 36.771 35.271 39.429 33.214 42.257 31.843 42.257 31.843L37.114 30.043C37.114 30.043 36.857 29.014 38.314 27.814 39.771 26.614 41.229 26.443 41.229 26.443 41.229 26.443 43.714 26.786 45.086 27.386 47.143 28.329 48.257 29.443 48.257 29.443 48.257 29.443 50.829 28.757 54.857 28.843 58.714 28.929 64.2 29.786 63.171 34.329 62.143 38.786 59.486 36.3 57 35.957 54.343 35.614 51.257 36.814 49.371 38.786M25.2 47.443C26.057 50.443 26.914 53.529 28.371 56.271 29.829 59.014 32.057 61.5 34.971 62.786 35.829 63.129 36.771 63.386 37.714 63.814 39.343 64.5 40.886 65.443 42.257 66.729"/>
                                                                    <path d="M50.057 38.786C53.571 40.929 55.543 44.871 56.829 48.814 57.171 49.843 57.429 50.871 57.514 51.986 57.6 53.871 57 55.843 55.971 57.386 54.943 58.929 53.4 60.214 51.686 61.071 51.171 61.329 50.571 61.586 49.971 61.843M61.543 67.5C61.114 66.3 60.257 65.271 59.229 64.5 58.2 63.729 57 63.214 55.8 62.7M55.629 57.643C55.886 61.929 55.2 66.214 53.743 70.243M32.486 61.071C33.343 60.043 34.457 59.271 35.743 58.843 38.4 58.071 41.314 59.1 43.971 58.329M62.143 30.9C61.457 30.643 60.771 30.986 60.171 31.329 59.229 32.014 58.543 33.129 58.543 34.329 58.543 35.529 59.314 36.729 60.429 36.986M27.686 30.3C27.857 27.3 29.4 24.386 31.629 22.329 33.857 20.271 36.771 19.071 39.857 18.729 43.114 18.3 46.543 18.814 49.2 20.7 51.857 22.586 53.743 25.671 53.486 28.929M56.486 35.957C58.371 36.986 59.486 39.3 59.229 41.443"/>
                                                                    <path d="M38.4 34.157C35.057 31.157 31.029 30.043 27.343 30.471 24.514 25.5 27 20.271 27.857 15.043 28.543 10.5 28.543 5.614 27.943.729M21.514 58.157C20.829 56.786 20.314 55.414 19.8 54.043 18.686 50.871 18.257 47.529 18.171 44.186 18.086 40.414 19.629 36.043 17.829 32.443 16.371 29.614 13.114 27.729 10.286 26.7 7.2 25.586 3.771 25.414.514 25.757M3.771 19.671C5.743 19.671 7.714 19.843 9.6 20.271 10.543 20.443 11.4 20.7 12.343 20.871 14.4 21.3 16.8 21.471 18.514 20.014 21.429 17.7 22.029 12.9 22.457 9.386 22.714 7.243 22.714 5.1 22.543 2.871M42.686 18.471C44.829 14.786 47.057 11.1 49.886 7.843 52.114 5.271 54.6 2.957 57.429 1.243M47.571 19.757C49.714 16.329 51.943 12.986 54.6 10.071 57 7.5 59.743 5.186 62.914 3.643"/>
                                                                </g>
                                                                <path stroke="#FD5368" stroke-width="1.7"
                                                                      d="M52.371,40.786 C50.486,42.757 48.343,47.9 48.343,47.9 C48.343,47.9 44.571,46.443 41.657,45.843 C38.229,45.071 34.114,44.814 34.114,44.814 C34.114,44.814 30.086,46.786 28.114,49.786 C25.971,53.043 25.114,55.271 24.514,60.157 C26.4,64.014 29.057,67.614 32.314,70.443 C39.429,76.786 52.8,82.957 58.886,81.586 C65.143,80.214 69.257,68.386 68.657,56.386 C68.057,45.243 59.829,40.529 52.714,40.786"
                                                                      class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Молочные  железы" transform="translate(0 98)">
                                                        <g transform="translate(45 51)">
                                                            <path stroke="#606D88"
                                                                  d="M108.117187 18.7421875L75 0.562500019 0.679687504 0.562500019"/>
                                                            <circle cx="109.357" cy="17.514" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#d)" opacity=".695"/>
                                                            <circle cx="108.357" cy="18.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(16)">
                                                                    <path d="M7.829 35.214C9.371 35.814 10.571 37.186 11 38.814M3.371 55.871C5.257 54.929 6.886 53.557 8.086 51.757M6.2 45.929C7.657 46.614 8.943 47.643 10.229 48.671 14.257 51.843 18.286 54.929 22.057 58.357 22.914 59.129 23.686 59.9 24.371 60.757 24.543 61.014 24.714 61.271 24.8 61.614 24.971 62.214 24.629 62.9 24.114 63.243 23.6 63.586 23 63.757 22.314 63.757 20.514 63.757 18.8 62.729 17.6 61.357 15.543 59.043 14.343 56.3 13.143 53.471 12.457 51.757 11.6 50.043 10.229 48.929M6.971 43.957C6.971 43.957 14.771 44.129 21.2 40.871 27.629 37.614 31.143 33.757 29.343 31.786 27.886 30.329 24.8 31.786 21.971 34.957 18.543 38.729 14.086 43.7 6.971 43.957L6.971 43.957zM12.371 45.929C12.371 45.929 22.143 48.329 30.543 47.3 41 46.014 36.8 37.786 29.686 41.471 21.886 45.5 12.371 45.929 12.371 45.929L12.371 45.929zM14.171 48.5C14.171 48.5 20.857 53.9 27.8 56.043 36.371 58.786 36.029 50.9 29.257 51.157 21.714 51.5 14.171 48.5 14.171 48.5L14.171 48.5z"/>
                                                                    <path d="M46.829,86.814 C46.657,82.443 46.571,78.071 46.4,73.7 C40.486,74.986 34.486,76.271 28.4,75.671 C20.943,74.9 13.914,70.957 9.029,65.3 C4.143,59.643 1.314,52.357 0.714,44.814 C0.629,44.129 0.629,43.443 0.8,42.757 C1.057,41.986 1.571,41.386 2.171,40.871 C7.229,35.729 12.543,30.929 17.171,25.357 C21.886,19.786 26,13.7 29.086,7.014 C30.029,4.871 30.886,2.729 31.571,0.586"/>
                                                                </g>
                                                                <path stroke="#FD5368" stroke-width="1.7"
                                                                      d="M17.571,41.729 C24.943,43.1 28.971,37.529 33.171,32.471 C37.286,27.5 42.343,22.871 49.029,22.614 C58.371,22.271 64.457,29.643 66.429,38.043 C68.657,47.643 67.114,60.5 58.8,66.843 C50.829,72.929 39.429,71.214 32.314,64.871 C28.971,61.871 27.086,57.5 25.2,53.557 C23.314,49.786 20.143,47.214 16.714,45.071"
                                                                      class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Нервная  система" transform="translate(2)">
                                                        <g transform="translate(43 6)">
                                                            <path stroke="#606D88"
                                                                  d="M131.472656 9.37109375L75 43.5625 0.679687504 43.5625"/>
                                                            <circle cx="132.357" cy="8.514" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#e)" opacity=".695"/>
                                                            <circle cx="131.357" cy="9.514" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <circle cx="34.971" cy="41.729" r="3.514"
                                                                        stroke="#4B5363" stroke-opacity=".566"
                                                                        stroke-width="1.2"/>
                                                                <path stroke="#FD5368" stroke-width="1.5"
                                                                      d="M38.657,90.071 C38.914,88.1 38.657,85.871 39,84.329 C39.6,81.671 41.4,79.1 43.971,78.157 C46.971,77.043 50.314,77.043 53.486,76.786 C56.057,76.614 58.457,76.357 60.429,75.929 C69.771,73.614 76.371,68.043 78.857,60.243 C81.343,52.443 79.2,43.271 73.543,37.529 C69.086,33.071 62.743,30.586 56.486,31.014 C51.343,31.357 46.886,33.329 42.514,35.3 C41.914,35.557 41.057,36.157 40.371,36.157 L40.286,36.157 L40.286,36.071 C40.286,35.386 40.714,34.443 41.057,33.757 C41.4,32.9 41.914,31.871 42.686,31.357 C43.457,30.843 44.4,30.586 45.171,30.071 C46.629,29.129 47.829,27.757 48.686,26.214 C49.2,25.271 48.857,24.157 47.914,23.643 C46.971,23.129 45.857,23.471 45.343,24.414 C44.571,25.786 43.457,26.814 42.086,27.5 C41.571,25.529 41.486,23.471 41.914,21.5 C42.086,20.471 41.486,19.443 40.457,19.271 C39.429,19.1 38.4,19.7 38.229,20.729 C37.886,22.529 37.8,24.329 38.057,26.214 C38.143,27.071 38.314,27.843 38.657,28.614 C39.257,29.814 38.571,30.5 38.143,31.529 C37.8,32.214 37.457,32.986 37.114,33.671 C36.857,34.271 36.429,35.129 35.743,35.3 C35.229,35.471 34.714,35.471 34.2,35.557 C33.686,35.643 33.171,35.814 32.657,35.557 C32.057,35.3 31.629,34.786 31.2,34.271 C30.514,33.5 29.486,32.043 29.914,31.014 C30,30.757 30.171,30.586 30.343,30.414 C31.8,28.614 32.4,26.471 32.571,24.157 C32.657,23.129 32.657,22.1 32.657,21.157 C32.657,19.871 32.657,18.671 32.914,17.471 C33.086,16.443 32.4,15.5 31.371,15.329 C30.343,15.157 29.4,15.843 29.229,16.871 C28.714,18.157 28.714,19.614 28.714,20.9 L28.714,24.843 C28.714,25.271 28.629,25.7 28.029,25.529 C27.6,25.443 27.514,25.014 27.343,24.671 C26.486,22.7 24.771,21.243 23.743,19.357 C23.229,18.414 22.029,18.157 21.171,18.671 C20.229,19.186 19.971,20.386 20.486,21.243 C21.257,22.614 22.2,23.729 23.143,24.843 C23.4,25.186 23.657,25.529 23.914,25.871 C22.543,26.129 21.171,26.043 19.886,25.614 C18.857,25.271 17.829,25.871 17.486,26.9 C17.143,27.929 17.743,28.957 18.771,29.3 C19.971,29.643 21.171,29.814 22.371,29.814 C23.486,29.814 24.429,29.557 25.457,29.3 C25.629,29.214 25.8,29.3 25.971,29.386 C26.143,29.557 26.143,29.729 26.143,29.986 C26.143,30.929 25.8,31.614 26.057,32.557 C26.229,33.414 26.657,34.271 27.086,35.043 C27.514,35.729 28.029,36.329 28.543,36.929 C28.971,37.357 29.657,38.043 29.4,38.729 C29.229,39.243 28.714,40.1 28.2,40.357 C26.743,41.043 24.6,40.186 23.486,39.157 C22.971,38.729 22.629,38.214 22.2,37.7 C21.343,36.671 20.314,35.814 19.2,35.129 C17.743,34.271 16.029,33.671 14.314,33.414 C13.286,33.329 12.343,34.014 12.171,35.043 C12.086,36.071 12.771,37.014 13.8,37.186 C14.829,37.271 15.857,37.614 16.714,38.129 C16.886,38.214 17.657,38.471 17.743,38.729 C17.829,38.986 17.4,39.329 17.229,39.329 C16.714,39.5 16.2,39.5 15.686,39.671 C14.657,39.929 13.629,40.186 12.686,40.357 C11.657,40.529 10.886,41.471 11.057,42.5 C11.143,43.443 12,44.129 12.943,44.129 L13.2,44.129 C14.4,43.957 15.6,43.614 16.714,43.357 C17.229,43.186 17.743,43.1 18.171,43.014 C19.286,42.757 20.571,42.329 21.686,42.757 C22.2,42.929 22.543,43.357 23.057,43.614 C23.657,43.871 24.343,44.129 25.029,44.214 C26.229,44.471 27.343,44.471 28.457,44.471 C28.8,44.471 29.143,44.386 29.4,44.729 C30.429,45.843 30,47.043 29.4,48.243 C29.229,48.671 28.886,49.1 28.457,49.614 C27.771,50.386 27.086,51.5 25.971,51.329 C25.114,51.243 24.257,50.729 23.486,50.471 C22.2,49.957 20.914,49.271 19.714,48.5 C18.857,47.9 17.657,48.157 17.057,49.1 C16.457,49.957 16.714,51.157 17.657,51.757 C19.543,52.957 21.6,53.986 23.743,54.671 C23.4,55.014 23.057,55.443 22.714,55.786 C22.029,56.643 21.343,57.414 20.571,58.186 C19.8,58.957 19.8,60.157 20.571,60.843 C20.914,61.186 21.429,61.443 21.943,61.443 C22.457,61.443 22.886,61.271 23.229,60.929 C24.086,60.071 24.857,59.129 25.629,58.271 C26.143,57.671 26.657,57.071 27.171,56.471 C27.514,56.043 27.943,55.7 28.286,55.271 C28.457,55.186 28.543,55.1 28.629,55.014 C28.8,55.957 28.971,56.986 28.971,58.014 L28.971,58.1 C28.971,59.3 28.971,60.5 28.714,61.443 C28.371,62.471 28.971,63.5 29.914,63.843 C30.086,63.929 30.257,63.929 30.514,63.929 C31.286,63.929 32.057,63.414 32.314,62.643 C32.829,61.1 32.743,59.471 32.743,58.1 L32.743,58.014 C32.743,56.557 32.571,55.1 32.229,53.729 C31.886,52.443 32.057,51.329 32.657,50.129 C33,49.443 33.171,48.329 34.029,48.071 C34.371,47.986 34.714,48.157 35.057,48.157 C35.657,48.157 36.257,47.986 36.857,47.9 C37.971,47.643 38.057,48.071 38.486,48.929 C39.171,50.3 39.943,51.5 40.714,52.786 C41.314,53.814 41.057,54.757 41.057,55.871 C41.057,57.071 41.143,58.271 41.4,59.471 L41.486,59.9 C41.657,60.757 41.829,61.7 42,62.643 C42.171,63.5 42.943,64.186 43.886,64.186 L44.314,64.186 C45.343,63.929 46.029,62.986 45.771,61.957 C45.6,61.1 45.429,60.243 45.343,59.386 L45,58.786 C44.914,58.186 44.829,57.586 44.829,56.9 C46.2,58.1 47.657,59.214 49.2,60.243 C49.543,60.5 49.886,60.586 50.229,60.586 C50.829,60.586 51.429,60.329 51.771,59.729 C52.371,58.871 52.114,57.671 51.257,57.071 C49.457,55.871 47.743,54.5 46.114,52.957 C47.571,52.786 49.029,52.7 50.314,53.129 C51.343,53.471 52.371,52.871 52.714,51.929 C53.057,50.9 52.457,49.871 51.514,49.529 C48.943,48.757 46.371,49.1 44.057,49.443 C43.886,49.443 43.543,49.529 43.2,49.529 C42.429,48.329 41.914,46.957 41.229,45.757 C40.8,45.071 40.714,44.386 41.229,43.614 C42.086,42.329 43.886,41.814 45.257,41.214 C49.2,39.414 52.971,37.786 56.914,37.529 C61.286,37.271 65.743,38.986 68.829,42.071 C72.771,46.1 74.314,52.443 72.514,58.014 C70.2,65.214 63.857,68.129 58.886,69.329 C57.429,69.671 55.286,69.843 52.971,70.014 C49.286,70.357 45,70.7 41.4,71.986 C34.543,74.386 31.971,81.843 32.057,88.614"
                                                                      class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Мочевой  пузырь" transform="translate(175 305)">
                                                        <g>
                                                            <path stroke="#606D88"
                                                                  d="M9.05078125 8.015625L201.558594 136.944 362.445314 136.944"/>
                                                            <circle cx="8.285" cy="8.341" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#f)" opacity=".695"/>
                                                            <circle cx="9.285" cy="8.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(317 88)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(17 25)">
                                                                    <path d="M27.914 61.229C27.914 59.429 28 57.457 28.171 55.314 28.771 45.543 30.4 40.4 33.143 38.171 35.114 36.543 37.686 35.6 40.514 34.657 45.314 33.029 50.714 31.143 53.714 25.4 56.371 20.429 56.2 15.971 53.286 11.171 50.886 7.229 44.457.286 27.914.286 11.371.286 4.943 7.229 2.543 11.171-.371 15.971-.543 20.429 2.114 25.4 5.114 31.143 10.6 33.029 15.314 34.657 18.143 35.6 20.714 36.543 22.686 38.171 25.429 40.486 27.057 45.629 27.657 55.314 27.829 57.457 27.914 59.514 27.914 61.229M28.171 64.9L28 64.9 27.743 64.9"/>
                                                                    <path d="M5.286 21.971C5.8 23.514 6.914 24.886 8.457 25.4 9.057 25.571 9.743 25.657 10.343 25.829 11.371 26.086 12.4 26.514 13.171 27.2 13.943 27.886 14.457 28.914 14.457 29.943M18.743 28.571C18.657 30.371 19.771 32.257 21.486 32.943 22.343 33.286 23.286 33.371 24.143 33.714 25.686 34.4 26.8 36.029 27.057 37.657M11.543 18.714C12.4 19.571 13.257 20.429 14.457 20.771 15.229 20.943 16.086 20.943 16.857 20.943 18.829 21.029 20.886 21.886 21.657 23.6M5.286 16.914C5.886 15.629 7.257 14.686 8.714 14.514 9.743 14.429 10.686 14.686 11.714 14.686 13.086 14.686 14.457 14.171 15.486 13.229M12.829 9.286C14.457 7.657 16.943 6.971 19.257 7.486 20.2 7.657 21.057 8.086 21.914 8.171 23.457 8.343 25.086 7.657 26.029 6.457M51.486 21.114C50.971 22.657 49.857 24.029 48.314 24.543 47.714 24.714 47.029 24.8 46.429 24.971 45.4 25.229 44.371 25.657 43.6 26.343 42.829 27.029 42.314 28.057 42.314 29.086M38.029 28.571C38.114 30.371 37 32.257 35.286 32.943 34.429 33.286 33.486 33.371 32.629 33.714 31.086 34.4 29.971 36.029 29.714 37.657M45.143 18.114C44.286 18.971 43.429 19.829 42.229 20.171 41.457 20.343 40.6 20.343 39.829 20.343 37.857 20.429 35.8 21.286 35.029 23M50.286 16.143C49.686 14.857 48.314 13.914 46.857 13.743 45.829 13.657 44.886 13.914 43.857 13.914 42.486 13.914 41.114 13.4 40.086 12.457M43.171 9.286C41.543 7.657 39.057 6.971 36.743 7.486 35.8 7.657 34.943 8.086 34.086 8.171 32.543 8.343 30.914 7.657 29.971 6.457M27.829 15.114C27.229 16.4 26.886 18.029 27.486 19.314 27.829 20 28.514 20.6 28.686 21.371 29.029 22.571 28.343 23.857 27.571 24.886M27.914 61.229L27.914 65"/>
                                                                </g>
                                                                <g stroke="#FD5368" stroke-width="1.7"
                                                                   transform="translate(1 18)">
                                                                    <path d="M39.457 71.743C39.286 64.114 38.514 52.714 35.514 50.143 30.971 46.286 18.2 46.543 12.2 35.057 10.057 30.943 9.286 26.229 9.971 21.6 10.143 20.4 9.457 19.286 8.343 18.771 5.514 17.571 2.943 15.943.8 13.8M83.6 5.829C82.057 7.971 80 9.857 77.257 11.229 75.543 12.086 73.486 11.743 72.2 10.371 66.886 4.629 57.714.6 43.914.6 30.2.6 21.029 4.629 15.629 10.371 14.343 11.743 12.286 12.086 10.571 11.229 7.829 9.857 5.771 7.971 4.229 5.829M48.371 71.743C48.543 64.114 49.314 52.714 52.314 50.143 56.857 46.286 69.629 46.543 75.629 35.057 77.771 30.943 78.543 26.229 77.857 21.6 77.686 20.4 78.371 19.286 79.486 18.771 82.314 17.571 84.886 15.943 87.029 13.8"
                                                                          class="w-item"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="w-org  Кожа" transform="translate(256 96)">
                                                        <g transform="translate(0 51)">
                                                            <path stroke="#606D88"
                                                                  d="M9.375 17.390625L120.558594 0.944 281.445314 0.944"/>
                                                            <circle cx="8.285" cy="18.341" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#g)" opacity=".695"/>
                                                            <circle cx="9.285" cy="18.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(236)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(0 9)">
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
                                                                <path stroke="#FD5368" stroke-width="1.7"
                                                                      d="M2.486,30.757 L32.229,30.757 C35.657,30.757 38.4,33.5 38.4,36.929 L36.086,53.214 C36.086,58.1 40.029,62.129 45,62.129 C49.886,62.129 53.914,58.186 53.914,53.214 L51.6,36.929 C51.6,33.5 54.343,30.757 57.771,30.757 L87.514,30.757"
                                                                      class="w-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="m-end-w" transform="translate(350 6)">
                                                    <g class="m-org  Органы  малого  таза" transform="translate(0 297)">
                                                        <g transform="translate(0 39)">
                                                            <path stroke="#606D88"
                                                                  d="M11.1171875 15.9179687L135.027344 0.816407082 211.445314 2.944"/>
                                                            <circle cx="8.285" cy="16.341" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#h)" opacity=".695"/>
                                                            <circle cx="10.285" cy="15.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(165)">
                                                            <g class="gr-m">
                                                                <circle cx="45.667" cy="45" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M56.895 22.371C56.895 26.057 51.838 29.057 45.667 29.057 39.495 29.057 34.438 26.057 34.438 22.371 34.438 18.686 39.495 17.229 45.667 17.229 51.838 17.229 56.895 18.686 56.895 22.371L56.895 22.371zM45.667 81.771L45.667 46.457C45.667 34.8 54.581 34.2 55.695 34.886 57.667 36.086 56.638 37.8 55.781 38.914 54.924 40.029 52.952 41.4 52.952 44.743L52.952 67.029C52.952 68.229 54.067 67.029 55.095 69.343 56.038 71.657 53.295 79.371 50.381 80.743 48.067 81.857 45.667 81.771 45.667 81.771L45.667 81.771zM45.667 81.771L45.667 46.457C45.667 34.8 36.752 34.2 35.638 34.886 33.667 36.086 34.695 37.8 35.552 38.914 36.41 40.029 38.381 41.4 38.381 44.743L38.381 67.029C38.381 68.229 37.267 67.029 36.238 69.343 35.295 71.657 38.038 79.371 40.952 80.743 43.352 81.857 45.667 81.771 45.667 81.771L45.667 81.771z"
                                                                      class="m-item"/>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M49.438,36.6 C48.41,36.086 47.124,35.829 45.667,35.829 C44.21,35.829 42.924,36.171 41.895,36.6"
                                                                      class="m-item"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(15 5)">
                                                                    <path d="M46.61,39.4 C46.61,39.4 44.81,40 45.41,41.714 C46.01,43.429 47.724,42.829 47.724,42.829 C50.552,41.886 53.895,44.286 55.095,48.143 C56.295,52 55.01,55.857 52.181,56.8 C52.181,56.8 50.552,57.743 50.981,59.286 C51.495,60.829 53.295,60.229 53.295,60.229 C57.924,58.771 60.238,52.857 58.438,47.114 C56.638,41.371 51.324,37.943 46.61,39.4 L46.61,39.4 Z"/>
                                                                    <path d="M52.181.743C47.638 8.543 44.381 18.4 53.552 26.371 67.267 38.371 57.495 44.8 57.495 44.8M14.381 39.4C14.381 39.4 16.181 40 15.581 41.714 14.981 43.429 13.267 42.829 13.267 42.829 10.438 41.886 7.095 44.286 5.895 48.143 4.695 52 5.981 55.857 8.81 56.8 8.81 56.8 10.438 57.743 10.01 59.286 9.495 60.829 7.695 60.229 7.695 60.229 3.067 58.771.752 52.857 2.552 47.114 4.352 41.371 9.667 37.943 14.381 39.4L14.381 39.4z"/>
                                                                    <path d="M8.81,0.743 C13.352,8.543 16.61,18.4 7.438,26.371 C-6.276,38.371 3.495,44.8 3.495,44.8"/>
                                                                </g>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M70.102 53.212C71.327 57.042 70.017 60.888 67.179 61.796 64.34 62.704 61.041 60.332 59.816 56.503 58.591 52.673 59.9 48.827 62.739 47.918 65.577 47.01 68.877 49.382 70.102 53.212zM20.933 53.156C22.159 49.326 25.458 46.954 28.296 47.862 31.135 48.771 32.445 52.617 31.219 56.447 29.994 60.276 26.695 62.648 23.856 61.74 21.018 60.832 19.708 56.986 20.933 53.156z"
                                                                      class="m-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="m-org  Сердечно-сосудистая  система"
                                                       transform="translate(38 197)">
                                                        <g transform="translate(0 19)">
                                                            <path stroke="#606D88"
                                                                  d="M10.6992188 8.5234375L97.0273438 22.8164071 173.445314 24.944"/>
                                                            <circle cx="8.285" cy="8.341" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#i)" opacity=".695"/>
                                                            <circle cx="10.285" cy="7.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(128)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(3 2)">
                                                                    <path d="M31.114 42.814C31.114 42.814 33.771 37.671 36.771 35.271 39.429 33.214 42.257 31.843 42.257 31.843L37.114 30.043C37.114 30.043 36.857 29.014 38.314 27.814 39.771 26.614 41.229 26.443 41.229 26.443 41.229 26.443 43.714 26.786 45.086 27.386 47.143 28.329 48.257 29.443 48.257 29.443 48.257 29.443 50.829 28.757 54.857 28.843 58.714 28.929 64.2 29.786 63.171 34.329 62.143 38.786 59.486 36.3 57 35.957 54.343 35.614 51.257 36.814 49.371 38.786M25.2 47.443C26.057 50.443 26.914 53.529 28.371 56.271 29.829 59.014 32.057 61.5 34.971 62.786 35.829 63.129 36.771 63.386 37.714 63.814 39.343 64.5 40.886 65.443 42.257 66.729"/>
                                                                    <path d="M50.057 38.786C53.571 40.929 55.543 44.871 56.829 48.814 57.171 49.843 57.429 50.871 57.514 51.986 57.6 53.871 57 55.843 55.971 57.386 54.943 58.929 53.4 60.214 51.686 61.071 51.171 61.329 50.571 61.586 49.971 61.843M61.543 67.5C61.114 66.3 60.257 65.271 59.229 64.5 58.2 63.729 57 63.214 55.8 62.7M55.629 57.643C55.886 61.929 55.2 66.214 53.743 70.243M32.486 61.071C33.343 60.043 34.457 59.271 35.743 58.843 38.4 58.071 41.314 59.1 43.971 58.329M62.143 30.9C61.457 30.643 60.771 30.986 60.171 31.329 59.229 32.014 58.543 33.129 58.543 34.329 58.543 35.529 59.314 36.729 60.429 36.986M27.686 30.3C27.857 27.3 29.4 24.386 31.629 22.329 33.857 20.271 36.771 19.071 39.857 18.729 43.114 18.3 46.543 18.814 49.2 20.7 51.857 22.586 53.743 25.671 53.486 28.929M56.486 35.957C58.371 36.986 59.486 39.3 59.229 41.443"/>
                                                                    <path d="M38.4 34.157C35.057 31.157 31.029 30.043 27.343 30.471 24.514 25.5 27 20.271 27.857 15.043 28.543 10.5 28.543 5.614 27.943.729M21.514 58.157C20.829 56.786 20.314 55.414 19.8 54.043 18.686 50.871 18.257 47.529 18.171 44.186 18.086 40.414 19.629 36.043 17.829 32.443 16.371 29.614 13.114 27.729 10.286 26.7 7.2 25.586 3.771 25.414.514 25.757M3.771 19.671C5.743 19.671 7.714 19.843 9.6 20.271 10.543 20.443 11.4 20.7 12.343 20.871 14.4 21.3 16.8 21.471 18.514 20.014 21.429 17.7 22.029 12.9 22.457 9.386 22.714 7.243 22.714 5.1 22.543 2.871M42.686 18.471C44.829 14.786 47.057 11.1 49.886 7.843 52.114 5.271 54.6 2.957 57.429 1.243M47.571 19.757C49.714 16.329 51.943 12.986 54.6 10.071 57 7.5 59.743 5.186 62.914 3.643"/>
                                                                </g>
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M52.371,40.786 C50.486,42.757 48.343,47.9 48.343,47.9 C48.343,47.9 44.571,46.443 41.657,45.843 C38.229,45.071 34.114,44.814 34.114,44.814 C34.114,44.814 30.086,46.786 28.114,49.786 C25.971,53.043 25.114,55.271 24.514,60.157 C26.4,64.014 29.057,67.614 32.314,70.443 C39.429,76.786 52.8,82.957 58.886,81.586 C65.143,80.214 69.257,68.386 68.657,56.386 C68.057,45.243 59.829,40.529 52.714,40.786"
                                                                      class="m-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="m-org  Кожа" transform="translate(45)">
                                                        <g transform="translate(0 47)">
                                                            <path stroke="#606D88"
                                                                  d="M10.6171875 89.6367188L92.0273438 0.816407082 168.445314 2.944"/>
                                                            <circle cx="8.285" cy="90.341" r="8" fill="#065BB9"
                                                                    class="blur" filter="url(#j)" opacity=".695"/>
                                                            <circle cx="10.285" cy="89.341" r="5" fill="#4B6186"/>
                                                        </g>
                                                        <g class="org-gr" transform="translate(121)">
                                                            <g class="gr-m">
                                                                <circle cx="45" cy="45.5" r="45" fill="#FFF"
                                                                        stroke="#495466" stroke-width="1.2"/>
                                                                <g stroke="#4B5363" stroke-opacity=".566"
                                                                   stroke-width="1.2" transform="translate(0 9)">
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
                                                                <path stroke="#5F98D7" stroke-width="1.5"
                                                                      d="M2.486,30.757 L32.229,30.757 C35.657,30.757 38.4,33.5 38.4,36.929 L36.086,53.214 C36.086,58.1 40.029,62.129 45,62.129 C49.886,62.129 53.914,58.186 53.914,53.214 L51.6,36.929 C51.6,33.5 54.343,30.757 57.771,30.757 L87.514,30.757"
                                                                      class="m-item"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <figure class="figure-durgs" data-name-drugs="Прегнотон Мама">
                            <img src="/img/drugs/drugs-index/pregnoton_mama-sm.min.png" alt="Прегнотон Мама">
                            <figcaption>
                                <a href="/nashi_produkty/pregnoton_mama">
                                    <span class="drugs-name-transition s-f-i">
                                       Прегнотон Мама
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
                                <a href="/nashi_produkty/sinergin">
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

</section>
<?php
$this->registerJsFile('/dist/js/index/intro.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
//$this->registerJsFile('/js/index.new.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/dist/js/index/human.new.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);


?>