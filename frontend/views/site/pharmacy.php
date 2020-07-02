<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-purchase">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <h1 class="BebasNeueBold header-color title-problem-header">
                        Где купить?
                        <!--  SVG   -->
                        <span class="wr-svg-header">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124" class="svg-slider-category">
  <g fill="none" stroke="#363840" transform="translate(-1916 -2013)">
    <g transform="translate(1917 2014)">
      <path d="M0,61 C4.12575788e-15,94.6893697 27.3106303,122 61,122 C94.6893697,122 122,94.6893697 122,61 C122,27.3106303 94.6893697,2.06287894e-15 61,0 C27.3106303,-2.06287894e-15 4.12575788e-15,27.3106303 0,61"/>
      <path d="M93.654,97.21 L28.532,97.21 C27.947,97.21 27.389,96.972 26.986,96.548 C26.583,96.125 26.371,95.555 26.4,94.971 L29.063,41.159 C29.119,40.022 30.057,39.129 31.195,39.129 L89.65,39.129 C90.77,39.129 91.697,39.993 91.78,41.107 L95.746,94.65 C95.774,94.787 95.788,94.93 95.788,95.076 C95.788,96.256 94.833,97.211 93.654,97.211 L93.654,97.21 Z"/>
      <path d="M47.138,52.556 C47.138,54.022 45.948,55.213 44.483,55.213 C43.013,55.213 41.821,54.021 41.821,52.556 C41.821,51.086 43.014,49.896 44.484,49.896 C45.948,49.896 47.139,51.088 47.139,52.556 L47.138,52.556 Z M80.347,52.556 C80.347,54.022 79.157,55.213 77.695,55.213 C76.222,55.213 75.032,54.021 75.032,52.556 C75.032,51.086 76.222,49.896 77.695,49.896 C79.157,49.896 80.347,51.088 80.347,52.556 Z M61.08,21.762 L61.09,21.762 L61.08,21.762 Z M79.82,36.234 C79.82,25.9 71.416,17.494 61.09,17.494 L61.08,17.494 C50.753,17.494 42.35,25.9 42.35,36.234 L79.82,36.234 Z"/>
    </g>
  </g>
</svg>
                         </span>
                    </h1>

                    <h3>Наши продукты <br>представлены во многих
                        городах</h3>
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
                                <span itemprop="name">Где купить</span>
                                <meta itemprop="position" content="2">
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Main Section
================================================== -->
<section id="pharmacy">
    <div class="row">
        <!-- Filter
        ================================================== -->
        <div id="filter-purchase" class="con-hd wr-con-fil">
            <div class="wr-t-top-quest">
                <h3 class="title-article">Поиск</h3>
                <svg xmlns="http://www.w3.org/2000/svg" id="filter-svg" viewBox="0 0 82 82">
                    <path fill="#5a6893" fill-rule="evenodd"
                          d="M60,55.3 C70.7,42.3 70,22.7 57.8,10.5 C44.8,-2.5 23.5,-2.5 10.5,10.5 C-2.5,23.5 -2.5,44.8 10.5,57.8 C17,64.3 25.5,67.5 34.1,67.5 C41.6,67.5 49.1,65 55.3,60 L75.5,80.2 C76.2,80.9 77,81.2 77.8,81.2 C78.6,81.2 79.5,80.9 80.1,80.2 C81.4,78.9 81.4,76.9 80.1,75.5 L60,55.3 Z M15.2,53 C4.8,42.6 4.8,25.6 15.2,15.2 C20.4,10 27.2,7.3 34.1,7.3 C41,7.3 47.8,10 53,15.2 C63.4,25.6 63.4,42.6 53,53 C42.6,63.5 25.6,63.5 15.2,53 Z"/>
                </svg>
                <!--   <svg id="filter-svg" viewBox="0 0 68 60" xmlns="http://www.w3.org/2000/svg"><title>filter</title>
                       <g fill="none" fill-rule="evenodd">
                           <path d="M-14-18h96v96h-96z"/>
                           <path class="filter-svg-p"
                                 d="M0 4h34v6H0V4zm56 0h12v6H56V4zM0 26h12v6H0v-6zm34 0h34v6H34v-6zm22 24h12v6H56v-6zM0 50h34v6H0v-6zm45 10c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zM23 36c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm22-22c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7z"/>
                       </g>
                   </svg>-->
            </div>
            <div class="con-form-fil">
                <form data-step="1"
                      data-intro="<span class='help-qf'>Введите аптеку, которую вы хотите найти.</span>">
                    <input id="search-purchase" class="search" placeholder="аптека..."/>
                </form>
                <!--Help-->
                <div class="help-faq-t">
                    <a href="javascript:void(0);" onclick="introJs().start();">
                        <i class="reproduction-info-section"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container bg-beige-light">
            <div class="container-it">
                <h3 class="title-article after-line">Интернет-аптеки</h3>
                <ul class="list">
                    <li class="block-filter apteka_ru">
                        <a class="t-pharmacy" href="https://apteka.ru/product/mense-50-n40-kaps-5e326986ca7bdc000192d6de/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/apteka_ru.png"
                                 alt="Где продается Сперотон">
                            <span class="name">apteka.ru</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.piluli.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/piluli.png"
                                 alt="Где продается Прегнотон">
                            <span class="name">Piluli.ru</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.eapteka.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap07.min.png"
                                 alt="Где продается Синергин">
                            <span class="name">eаптека.ru</span>
                        </a>
                    </li>
                    <!-- <li class="block-filter">
                         <a class="t-pharmacy" href="http://www.aptekaonline.ru/" target="_blank" rel="nofollow">
                             <img class="logo-pharmacy" src="/img/pharmacy_logo/apteka_online_ru.png"
                                  alt="Где продается Цистениум">
                             <span class="name">aptekaOnline.ru</span>
                         </a>
                     </li>-->
                    <!-- <li class="block-filter">
                         <a class="t-pharmacy" href="http://rusapteka.com/brand/akvion/" target="_blank" rel="nofollow">
                             <img class="logo-pharmacy" src="/img/pharmacy_logo/rusapteka.jpg"
                                  alt="купить продукцию Аквион">
                             <span class="name">Русаптека</span>
                         </a>
                     </li>-->
                    <!-- <li class="block-filter">
                         <a class="t-pharmacy" href="http://elixir.farm/brand/akvion/" target="_blank" rel="nofollow">
                             <img class="logo-pharmacy" src="/img/pharmacy_logo/elixir-farm.png"
                                  alt="купить продукцию Аквион">
                             <span class="name">ЭлексирФарм</span>
                         </a>
                     </li>-->
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://zdravcity.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap08.min.jpg"
                                 alt="купить продукцию Аквион">
                            <span class="name">Здрав Сити</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="http://lekprice.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/lek_price.png"
                                 alt="купить продукцию Аквион">
                            <span class="name">LekПрайс</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.rodnik-apteka.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/logo_RZ.png"
                                 alt="купить продукцию Аквион">
                            <span class="name">Родник Здоровья</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://zhivika.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/givika.png"
                                 alt="купить продукцию Аквион">
                            <span class="name">Живика</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.aptekaonline.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/aptekaonline.png" alt="Менсе купить">
                            <span class="name">Аптека онлайн.ру</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://megapteka.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/megapteka_logo_5.min.png"
                                 alt="купить продукцию Аквион">
                            <span class="name">Мегаптека.ру</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://uteka.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/yteka.min.png"
                                 alt="купить продукцию Аквион">
                            <span class="name">Ютека</span>
                        </a>
                    </li>
                    <!--Сети-->
                    <li class="t-not-logo">
                        <br>
                        <h3 class="title-article after-line">Вы можете купить нашу продукцию в следующих аптечных
                            сетях</h3>
                    </li>

                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.rigla.ru/shop/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/rigla.png" alt="Препараты Аквион">
                            <span class="name">Ригла</span>
                        </a>
                    </li>
                   <!-- <li class="block-filter">
                        <a class="t-pharmacy" href="https://apteka-sklad.com/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/1.png" alt="Препараты Аквион">
                            <span class="name">Аптечный склад</span>
                        </a>
                    </li>-->

                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.asna.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/asna-new.jpg" alt="Менсе купить">
                            <span class="name">Асна</span>
                        </a>
                    </li>

                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.stoletov.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/Logo_Curve_green.png"
                                 alt="Препараты Аквион">
                            <span class="name">Доктор Столетов</span>
                        </a
                    </li>
                   <!-- <li class="block-filter">
                        <a class="t-pharmacy" href="http://apteka-ozerki.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/empty_logo.png" alt="Препараты Аквион">
                            <span class="name">Озерки</span>
                        </a
                    </li>-->
                    <!--<li class="block-filter">
                        <a class="t-pharmacy" href="http://www.samson-f.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/samson_farma.png" alt="Препараты Аквион">
                            <span class="name">Самсон-Фарма</span>
                        </a>
                    </li>-->
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.neopharm.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/neo_farm.png" alt="Препараты Аквион">
                            <span class="name">Нео-Фарм</span>
                        </a>
                    </li>
                    <!--<li class="block-filter">
                        <a class="t-pharmacy" href="http://stolichki.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/stolichki.png" alt="Препараты Аквион">
                            <span class="name">Столички</span>
                        </a>
                    </li>-->
                    <!--<li class="block-filter">
                        <a class="t-pharmacy" href="http://apteka-april.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/aprel.png" alt="Препараты Аквион">
                            <span class="name">Апрель</span>
                        </a>
                    </li>-->
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.nevis.spb.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/nevis.png" alt="Препараты Аквион">
                            <span class="name">Невис</span>
                        </a
                    </li>
                    <!-- <li class="block-filter">
                         <a class="t-pharmacy" href="http://www.pharmacor.ru/" target="_blank" rel="nofollow">
                             <img class="logo-pharmacy" src="/img/pharmacy_logo/farma_kor_n.png" alt="Препараты Аквион">
                             <span class="name">Фармакор</span>
                         </a
                     </li>-->
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.rodnik-apteka.ru/shop/index.php?p=shop" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/podnick_zdoroviya.png"
                                 alt="Препараты Аквион">
                            <span class="name">Родник Здоровья</span>
                        </a
                    </li>
                    <!--<li class="block-filter">
                        <a class="t-pharmacy" href="http://s-zdorovie.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/zdorovie_reg.png" alt="Препараты Аквион">
                            <span class="name">Здоровье</span>
                        </a>
                    </li>-->
                    <!--<li class="block-filter">
                        <a class="t-pharmacy" href="http://eapteka.zdravgorod.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/zdorovi_gorod.png"
                                 alt="Препараты Аквион">
                            <span class="name">Здоровый Город</span>
                        </a>
                    </li>-->
                   <!-- <li class="block-filter">
                        <a class="t-pharmacy" href="http://www.apteka-ifk.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/ifk.png" alt="Препараты Аквион">
                            <span class="name">ИФК</span>
                        </a
                    </li>-->
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.aptekatrika.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/trika.png" alt="Препараты Аквион">
                            <span class="name">Трика</span>
                        </a>
                    </li>

                    <!--<li class="block-filter">
                        <a class="t-pharmacy" href="http://www.farmacia.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/faraciya.png" alt="Препараты Аквион">
                            <span class="name">Фармация</span>
                        </a>
                    </li>-->
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.farma-grant.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap12.min.png" alt="Препараты Аквион">
                            <span class="name">Фарма-Грант</span>
                        </a>
                    </li>
                    <!--<li class="block-filter">
                        <a class="t-pharmacy" href="http://www.ukaca.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/aptechni_standart.png"
                                 alt="Препараты Аквион">
                            <span class="name">Аптечный Стандарт</span>
                        </a>
                    </li>-->

                    <!--<li class="block-filter">
                        <a class="t-pharmacy" href="http://vlasta.003.ms/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/vlasta.png" alt="Препараты Аквион">
                            <span class="name">Власта</span>
                        </a>
                    </li>-->
                   <!-- <li class="block-filter">
                        <a class="t-pharmacy" href="http://www.aptekasol.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/solnishko.png" alt="Препараты Аквион">
                            <span class="name">Солнышко</span>
                        </a>
                    </li>-->
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://melzdrav.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/melodiya_zdorobiya.png"
                                 alt="Препараты Аквион">
                            <span class="name">Мелодия Здоровья</span>
                        </a>
                    </li>
                    <!-- <li class="block-filter">
                         <a class="t-pharmacy" href="http://serdechco.ru/" target="_blank" rel="nofollow">
                             <img class="logo-pharmacy" src="/img/pharmacy_logo/serdechko.png" alt="Препараты Аквион">
                             <span class="name">Сердечко</span>
                         </a>
                     </li>-->
                   <!-- <li class="block-filter">
                        <a class="t-pharmacy" href="http://www.vitafarm.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/vita_farm.png" alt="Препараты Аквион">
                            <span class="name">Вита-Фарм</span>
                        </a>
                    </li>-->
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://zdorov.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/dialog_zdoroviya.png"
                                 alt="Препараты Аквион">
                            <span class="name">Здоров.ру</span>
                        </a
                    </li>
                    <!--<li class="block-filter">
                        <a class="t-pharmacy" href="http://apteka-ekonom.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/econom.png" alt="Препараты Аквион">
                            <span class="name">Эконом</span>
                        </a
                    </li>-->
                    <!--<li class="block-filter">
                        <span class="t-pharmacy">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/empty_logo.png" alt="Препараты Аквион">
                            <span class="name">Фармспейс</span>
                        </span
                    </li>-->
                    <li class="block-filter">
                        <a href="https://lekafarm.ru/apteki.html" class="t-pharmacy" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/leka_farm.png" alt="Препараты Аквион">
                            <span class="name">Лека-Фарм</span>
                        </a
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://vitaexpress.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap03.min.jpg"
                                 alt="Препараты Аквион">
                            <span class="name">Вита</span>
                        </a
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://planetazdorovo.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap11.min.jpeg"
                                 alt="Препараты Аквион">
                            <span class="name">Планета Здоровья</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://farmlend.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/farmlend.png"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Фармленд</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://newhospital.ru/aptechnaya-set/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap10.min.jpg"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Новая Больница</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://zhivika.ru/" target="_blank" rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/givika.png"
                                 alt="купить продукцию Аквион">
                            <span class="name">Живика</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.proapteka.ru/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap15.min.png"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">ПроАптека</span>
                        </a>
                    </li>

                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://apteka-ot-sklada.ru/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap01.min.jpg"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Аптека от склада</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <span class="t-pharmacy">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap05.min.jpg"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Гармония здоровья</span>
                        </span>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://www.pharmeconom.ru/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap14.min.png"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Фармэконом</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://фармаимпекс.рус/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap13.min.png"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Фармаимпекс</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://newapteka.ru/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap09.min.jpg"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Новая Аптека</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://minicen.ru/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap02.min.png"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Аптека Миницен</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="http://www.nofnn.ru/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap06.min.png"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Госаптека</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://volgofarm.ru/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/new/ap04.min.png"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">Волгофарм</span>
                        </a>
                    </li>
                    <li class="block-filter">
                        <a class="t-pharmacy" href="https://lekopttorg.ru/" target="_blank"
                           rel="nofollow">
                            <img class="logo-pharmacy" src="/img/pharmacy_logo/LekOptTorg.min.png"
                                 alt="Купить в аптеках Препараты Аквион">
                            <span class="name">ЛекОптТорг</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px">
        <div class="container bg-beige-light">
            <div class="container-it">
                <h3 class="title-article after-line">В Казахстане:</h3>
                <p>Жители Казахстана могут заказать нашу продукцию в интернет-аптеках<span>&nbsp;и</span> сетевых
                    аптеках<strong>&nbsp;<a href="https://gippokrat.kz/" rel=nofollow" target="_blank"
                                            style="text-decoration: none">Гиппократ</a></strong>, <a
                            href="https://europharma.kz/" rel=nofollow" target="_blank"
                            style="text-decoration: none"><strong>Europharma</strong></a>, <a
                            href="https://biosfera.kz/" rel=nofollow" target="_blank"
                            style="text-decoration: none"><strong>Биосфера</strong></a>, <a
                            href="https://rauza-ade.kz/" rel=nofollow" target="_blank"
                            style="text-decoration: none"><strong>Рауза-АДЕ</strong></a>.</p>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px">
        <div class="container bg-beige-light">
            <div class="container-it">
                <h3 class="title-article after-line">В Республике Беларусь:</h3>
                <p>Вы можете узнать о наличии нашей продукции в аптеках Белоруссии, воспользовавшись сервисом поиска на
                    сайтах <a href="https://tabletka.by/" rel=nofollow" target="_blank"
                              style="text-decoration: none"><strong> tabletka.by</strong></a> и <a
                            href="https://apteka.103.by/" rel=nofollow" target="_blank"
                            style="text-decoration: none"><strong>apteka.103.by</strong></a>.</p>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px">
        <div class="container bg-beige-light">
            <div class="container-it">
                <h3 class="title-article after-line">В Армении:</h3>
                <p>Жители Армении могут приобрести нашу продукцию в Медицинском Центре им. Академика В.А. Фанарджяна по
                    адресу: г. Ереван, 0019, ул. Сармена, д. 90.
                    Тел:<span>&nbsp;</span><strong>+374-(10)-529001</strong></p>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px">
        <div class="container bg-beige-light">
            <div class="container-it">
                <h3 class="title-article after-line">В Грузии:</h3>
                <p>Жители Грузии найдут наши препараты в аптеках Pharmadepot и <strong><a rel="nofollow"
                                                                                          href="https://www.gpc.ge/"
                                                                                          target="_blank"
                                                                                          style="text-decoration: none">GPC</a></strong>.
                </p>
            </div>
        </div>
    </div>
</section>
<!--Empty Block-->
<div class="row">
    <div class="empty-block-section"></div>
</div>
<!--<a href="/pregnoton"><img  class="advertising-img" src="/img/advertising/2.png" alt="Прегнотон"></a>-->
<!-- End
================================================== -->
<?php
$script = <<< JS
  var svgHeader = $('.wr-svg-header svg');
    pathPrepareCssAll(svgHeader);
    setTimeout(function () {
        startAnimationSvgHeader(svgHeader);

    }, 100);
$(function () {
var options = {
  valueNames: [ 'name' ]
};

var nameList = new List('pharmacy', options);
nameList.on('updated',function(){
stLiActive();
});
function stLiActive(){
var s = $('.block-filter');
s.each(function(){
$(this).toggleClass('active');
});
}
});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
<?php
$this->registerJsFile('/js/list.js-master/dist/list.min.js', ['defer' => 'defer']);

?>
