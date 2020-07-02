<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-woman1">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <div class="p-r-in-bl">
                        <h1 class="BebasNeueBold header-color title-problem-header">Грудное вскармливание</h1>
                        <!--  SVG   -->
                        <span class="wr-svg-header">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122"
                                     class="svg-slider-category">
<g fill="none" stroke="#2A2C35" transform="translate(-1881 -1722)">
  <g transform="translate(1882 1723)">
    <path d="M60,120 C93.137,120 120,93.137 120,60 C120,26.863 93.137,0 60,0 C26.863,0 0,26.863 0,60 C0,93.137 26.863,120 60,120 Z"/>
    <path d="M59.55,75.503 C74.187,75.503 86.053,63.783 86.053,49.323 C86.053,34.867 74.187,23.145 59.551,23.145 C44.916,23.145 33.049,34.865 33.049,49.325 C33.049,63.782 44.915,75.503 59.552,75.503 L59.55,75.503 Z M60.845,75.445 L60.845,100.189 L60.845,75.444 L60.845,75.445 Z M48.665,86.39 L73.71,86.39 L48.665,86.39 Z"/>
  </g>
</g>
</svg>
                                </span>
                    </div>

                    <h3>Женское здоровье</h3>
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
                            <span itemprop="name"><?= $category->title . ' - ' . $problem->title ?></span>
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
                    <figure class="drugs-article active" data-name-drugs="Прегнотон Мама">
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
                    <figure class="drugs-article " data-name-drugs="Синергин">
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
                                        КОРМЛЕНИЕ
                                        <span class="item-number-article">
                                <strong class="number-item"><i class="reproduction-quotes"></i></strong>
                                <span class="vertical-line"></span>
                            </span>
                                    </h2>
                                    <p>Кормление грудью – физическое выражение маминой заботы о малыше. Ведь молоко –
                                        единственный источник полезных веществ для ребенка с рождения и до момента,
                                        когда он сможет питаться самостоятельно.
                                        Существуют различные правила и ограничения при <a href="/statyi/chto-mozhno-i-chego-ne-stoit-delat-kormjashhejj-mame">грудном вскармливании</a>.
                                        <br>
                                        <br>
                                        Все они продиктованы единственным желанием – дать малышу полноценное питание,
                                        чтобы он мог расти здоровым. Что же такое «правильное» грудное молоко и как
                                        женщине следить за своим здоровьем во время кормления?</p>
                                </div>

                            </div>
                        </div>
                        <div class="right-article p-pr-l">
                            <div class="bg-52 m-img-bg" data-mh="group-im-pr"></div>
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 500"
                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <filter id="a" width="262.5%" height="262.5%" x="-81.3%" y="-81.3%"
                                                filterUnits="objectBoundingBox">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="6.502"/>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="translate(-911 -5752)">
                                        <g transform="translate(911 5752)">
                                            <path fill="#F7F7F7" d="M0 0H630V500H0z"/>
                                            <image xlink:href="/img/index-img/woman@2x.min.png" x="191" width="247.485"
                                                   height="500"/>
                                            <g class="w-end-m" transform="translate(25 18)">
                                                <g class="w-org  Кормление  грудью" transform="translate(317 191)">
                                                    <g transform="translate(0 11)">
                                                        <path stroke="#606D88"
                                                              d="M12.796875 13.5507812L140.000001 36.1484383 218.632814 36.1484383"/>
                                                        <circle cx="12.285" cy="12.841" r="12" fill="#065BB9"
                                                                class="blur" filter="url(#a)" opacity=".695"/>
                                                        <circle cx="12.285" cy="12.841" r="5" fill="#57647A"/>
                                                    </g>
                                                    <g class="org-gr" transform="translate(166)">
                                                        <circle cx="51.5" cy="52.072" r="51.5" fill="#F7F7F7"
                                                                stroke="#495466" stroke-width="1.2"/>
                                                        <path fill="#F7F7F7" stroke="#495466" stroke-width="1.2"
                                                              d="M20.1090333,47.7565222 C28.5458778,49.3255556 33.1557,42.9498556 37.9623667,37.1612556 C42.6717556,31.4722222 48.4592111,26.1745889 56.1109667,25.8804667 C66.8023667,25.4879222 73.7674556,33.9247667 76.0243,43.5381 C78.5741222,54.5247667 76.8082444,69.2388889 67.2933333,76.4981 C58.1709667,83.4631889 45.1243,81.5004667 36.9815778,74.2412556 C33.1557,70.8079222 30.9984222,65.8055556 28.84,61.2930111 C26.6815778,56.9773111 23.0525444,54.0338 19.1282444,51.5812556"/>
                                                        <g class="gr-m" transform="translate(18.311)">
                                                            <path stroke="#4B5363" stroke-opacity=".566"
                                                                  stroke-width="1.2"
                                                                  d="M8.95985556 40.3004667C10.7245889 40.9871333 12.0979222 42.5573111 12.5888889 44.4204667M3.85792222 63.9412556C6.01634444 62.8631889 7.88064444 61.2930111 9.25397778 59.2330111M7.09555556 52.5631889C8.76301111 53.3471333 10.2347667 54.5247667 11.7065222 55.7012556 16.3163444 59.3314333 20.9273111 62.8631889 25.2430111 66.7863444 26.2238 67.6698556 27.1073111 68.5522222 27.8912556 69.5330111 28.0881 69.8271333 28.2838 70.1212556 28.3822222 70.5138 28.5779222 71.2004667 28.1865222 71.9855556 27.5971333 72.3781 27.0088889 72.7706444 26.3222222 72.9663444 25.5371333 72.9663444 23.4771333 72.9663444 21.5155556 71.7898556 20.1422222 70.2196778 17.7881 67.5714333 16.4147667 64.4322222 15.0414333 61.1945889 14.2563444 59.2330111 13.2755556 57.2714333 11.7065222 55.9965222M7.97792222 50.3063444C7.97792222 50.3063444 16.9045889 50.5031889 24.2622222 46.7745889 31.6198556 43.0471333 35.6414333 38.6330111 33.5814333 36.3773111 31.9139778 34.7098556 28.3822222 36.3773111 25.1445889 40.0063444 21.2214333 44.3231889 16.1206444 50.0122222 7.97792222 50.3063444L7.97792222 50.3063444zM14.1579222 52.5631889C14.1579222 52.5631889 25.3414333 55.3098556 34.9547667 54.1322222 46.9222222 52.6604667 42.1155556 43.2439778 33.9739778 47.4612556 25.0473111 52.0722222 14.1579222 52.5631889 14.1579222 52.5631889L14.1579222 52.5631889zM16.2179222 55.5055556C16.2179222 55.5055556 23.8696778 61.6855556 31.8155556 64.1381 41.6245889 67.2773111 41.2331889 58.2522222 33.4830111 58.5463444 24.8504667 58.9388889 16.2179222 55.5055556 16.2179222 55.5055556L16.2179222 55.5055556z"/>
                                                            <path stroke="#FD5368" stroke-width="1.7"
                                                                  d="M53.5931889,99.3538 C53.3963444,94.3514333 53.2979222,89.3479222 53.1022222,84.3455556 C46.3339778,85.8173111 39.4673111,87.2879222 32.5022222,86.6012556 C23.9681,85.7188889 15.9238,81.2063444 10.3331889,74.7322222 C4.74143333,68.2581 1.5038,59.9196778 0.817133333,51.2871333 C0.719855556,50.5031889 0.719855556,49.7181 0.915555556,48.9330111 C1.20967778,48.0506444 1.79792222,47.3639778 2.48458889,46.7745889 C8.27318889,40.8898556 14.3547667,35.3965222 19.6512556,29.0196778 C25.0473111,22.6439778 29.7555556,15.6788889 33.2873111,8.02713333 C34.3665222,5.57458889 35.3473111,3.12318889 36.1312556,0.670644444"
                                                                  class="w-item"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="not-col" style="display: inline-block"><h3 class="title-article after-line">Как
                                    изменяется грудное молоко? </h3>
                                <p>В природе все продумано, поэтому состав грудного молока меняется вместе с ростом
                                    ребенка и его потребностями. Появляющееся в первые дни после родов молозиво
                                    рассчитано на то, что почки и желудок младенца еще не начали работать в полном
                                    объеме. Поэтому в молозиве много легкоусвояемых белков, чтобы малыш быстро наедался.
                                    С молозивом он получает необходимые гормоны и пептиды, витамины А и Е, цинк и селен,
                                    которые защищают от кислородного стресса, формируют иммунитет, развивают зрение.
                                    <br>
                                    Молозиво сменяется переходным молоком. Его вырабатывается больше, оно содержит
                                    факторы роста, иммунные клетки, лактобактерии, которые должны заселить кишечник
                                    ребенка. </p>
                                <p>
                                    На вторую-третью неделю после родов приходит зрелое молоко. В нем меньше
                                    легкоусвояемых белков и незаменимых аминокислот, зато больше углеводов и жиров –
                                    малыш уже способен их усвоить. А жиры и углеводы – незаменимый источник энергии,
                                    поэтому от них напрямую зависит активность ребенка.
                                </p>
                            </div>
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
                            <h3 class="title-article after-line">Состав грудного молока</h3>
                            <p><b>Полноценное грудное молоко должно содержать:</b></p>
                            <ul class="list-article">
                                <li>Воду, белки, углеводы (в том числе, сахара), жиры (насыщенные, мононенасыщенные,
                                    полиненасыщенные), витамины А, В<sub>1</sub>, В<sub>2</sub>, В<sub>3</sub>,
                                    В<sub>5</sub>, В<sub>6</sub>, В<sub>9</sub>, В<sub>12</sub>, С, Е, К, бета-каротин,
                                    минералы кальций, железо, магний, фосфор, калий, натрий, цинк.
                                </li>
                                <li>Ферменты необходимы для усвоения питательных веществ, организм ребенка не
                                    вырабатывает их в нужном количестве.

                                </li>
                                <li>Иммунные клетки: фагоциты, Т- и В-лимфоциты, иммуноглобулины, лизоцим и
                                    лактоферрин.
                                </li>
                                <li>
                                    Бифидобактерии для заселения кишечника.
                                </li>
                                <li>
                                    Гормоны и факторы роста.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Empty Block-->
                <div class="row">
                    <div class="empty-block-section"></div>
                </div>
                <div class="row  block-animate bl-pr-it bg-beige-light">
                    <div class="con-pr-em">
                        <div class="columh-block-nw">
                            <div class="block-nw1">
                                <div class="bg-cover bg-cover1" data-mh="group-im-kr">

                                </div>
                            </div>
                            <div class="block-nw2" data-mh="group-im-kr">
                                <h3 class="title-article after-line">Жирность молока</h3>
                                <p>Еще одна важная характеристика грудного молока – жирность. Ее изменения в течение
                                    одного
                                    кормления не связаны с рационом женщины. Молоко, вырабатываемое разными областями
                                    молочных желез, различается жирностью. Переднее молоко, которое ребенок получает в
                                    первые минуты кормления, менее жирное и хорошо утоляет жажду, заднее молоко более
                                    питательное – в нем содержание жиров выше.</p>
                                <p>
                                    А вот состав жиров в молоке напрямую определяется продуктами, которыми питается
                                    женщина. Если в ее рационе достаточно полиненасыщенных жирных кислот, они попадут в
                                    молоко. Если женщина не получает Омега-3, в молоке их тоже не будет. А ведь Омега-3
                                    особенно необходимы в первый год жизни ребенка как важнейшие составляющие роста и
                                    развития нервных клеток (нейрогенеза). Кроме того, дети, обеспеченные Омега-3, менее
                                    склонны к аллергии.
                                </p>
                            </div>

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
                            <h3 class="title-article after-line">Питание кормящей мамы: важные аспекты</h3>
                            <p>
                                Правило простое: если в мамином рационе не хватает полезных веществ, ребенок их не
                                получит. Например, «правильное» молоко должно содержать около 25 МЕ витамина D, но
                                доступное среднестатистическому человеку питание не может обеспечить его потребности в
                                витамине D, особенно осенью и зимой. Из-за этого у ребенка может развиться рахит, и,
                                конечно, женщине заранее стоит задуматься о дополнительных источниках витамина D.
                            </p>
                            <p>
                                Есть и обратная сторона медали. Природа устроила так, что самые необходимые для ребенка
                                вещества будут уходить в молоко вне зависимости от того, достаточно ли их в рационе
                                женщины. В первую очередь, это касается железа. Если кормящая мама не ест, например,
                                красное мясо и не поддерживает себя железосодержащими препаратами, в молоко уйдут ее
                                собственные запасы железа из эритроцитов, а это грозит анемией.
                            </p>
                            <p>
                                Узнать больше о том, как правильно подобрать рацион при грудном вскармливании, можно в нашей статье <a href="/statyi/pitanie-kormjashhejj-mamy-strogaja-dieta-ili-zdravyjj-smysl">«Питание кормящей мамы – строгая диета или здравый смысл?»</a>.
                            </p>
                            <h3 class="title-article after-line">Прегнотон Мама – то, что нужно</h3>
                            <p>
                                Кормящие женщины очень разборчивы в еде и во многом отказывают себе, чтобы не
                                спровоцировать у малыша аллергию или проблемы с пищеварением. В результате из рациона
                                исчезают многие фрукты и овощи, красное мясо, морепродукты, рыба, крупы и хлеб из муки
                                грубого помола. Но диетическое однообразное питание может повлиять на качество грудного
                                молока и вызвать другие проблемы. Ведь грудное молоко должно содержать достаточное для
                                ребенка количество витаминов и минералов, которые мама получает именно из пищи. Даже
                                элементарный дефицит йода может замедлить рост и умственное развитие ребенка.
                            </p>
                            <p>
                                Каждая капсула комплекса <a href="/nashi_produkty/pregnoton_mama">Прегнотон Мама</a>
                                содержит необходимые для мамы и ребенка витамины и минералы (включая йод и железо) и,
                                конечно, незаменимые Омега-3. Прегнотон Мама поможет маме и малышу оставаться здоровыми
                                и бодрыми во время всего периода грудного вскармливания.
                            </p>

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
                            <h4 class="note-dr-footer">Этот препарат содержит необходимые для мамы и ребенка витамины и
                                минералы
                            </h4>
                            <div class="sum-2-drugs sum-1 txt-center">
                                <!--  Прегнотон  -->
                                <figure class="figure-article" data-name-drugs="Синергин">
                                    <img class="full-img" src="/img/drugs/drugs-bg/pregnoton_mama.png"
                                         alt="Прегнотон Мама">
                                    <figcaption>
                                        <a href="/nashi_produkty/pregnoton_mama">
                                        <span class="drugs-name-transition">
                                       Прегнотон Мама
                                            </span>
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
                            <!--<div class="wr-note-drugs-article">
                            <span class="note-drugs-article">
                                 Этот препарат поможет вам в предупреждении и комплексной терапии мастопатии.
                            </span>
                            </div>-->
                        </div>
                        <!--  List Problem   -->
                        <div class="drug-article-right p-pr-l">
                            <?= yii\base\View::render('@frontend/views/site/other_tags'); ?>
                            <div class="tag-item txt-center">
                                <ul class="l-p-c-a">
                                    <li><a href="/zhenskoe_zdorovie/podgotovka_k_beremennosti"><i
                                                    class="reproduction-tags-2"></i>Подготовка к беременности</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/cistit"><i
                                                    class="reproduction-tags-2"></i>Цистит</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/narushenija_menstrualnogo_cikla"><i
                                                    class="reproduction-tags-2"></i>Нарушения менструального
                                            цикла</a></li>
                                    <li><a href="/zhenskoe_zdorovie/giperprolaktinemija"><i
                                                    class="reproduction-tags-2"></i>Гиперпролактинемия</a>
                                    </li>
                                    <li><a href="/zhenskoe_zdorovie/mastopatija"><i
                                                    class="reproduction-tags-2"></i>Мастопатия</a></li>
                                    <li><a href="/zhenskoe_zdorovie/priem_kombinirovannyh_oralnyh_kontraceptivov"><i
                                                    class="reproduction-tags-2"></i>Прием комбинированных оральных
                                            контрацептивов</a></li>


                                </ul>
                            </div>
                            <!-- <div class="wr-note-drugs-article">
                             <span class="note-drugs-article list-problem-note-article">
                                  В данном блоке представлены другие проблемы, связанные с женским здоровьем.
                             </span>
                             </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
