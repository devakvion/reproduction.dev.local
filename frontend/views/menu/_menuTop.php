<div id="navigation-desktop" class="wr-navigation hover-menu">
    <nav id="navigation" style="position: relative">
        <!--Cristmas-->
     <!--<div class="christm-wr1">
             <div class="christm1 swing-ch stm1"></div>
             <div class="christm1 swing-ch stm2"></div>
         </div>-->
        <!--End-->
        <!-- Logo
       ================================================== -->
        <div id="logo-left">
            <?php if ('/' != $_SERVER["REQUEST_URI"]): ?><a href="/"><?php endif; ?>
                <span class="logo-main">
            <img src="/img/logo/retina/logo.png" alt="логотип"
                 title="reproduction.info">
                    <!--Cristmas-->
                    <!--<span class="cristm-logo"></span>-->
                    <!--End-->
        </span>
                <?php if ('/' != $_SERVER["REQUEST_URI"]): ?></a><?php endif; ?>
        </div>
        <!-- End Logo
        ================================================== -->
        <ul class="main-list-menu">
            <li id="redhex-t" class="has-dropdown" >
                <span class="item-link-menu has-down-icon">
                   О чем вы хотите узнать?
                    <i class="reproduction-down-lite"></i>
                </span>
                <!-- List Problem
                ================================================== -->
                <div class="wr-dropdown">
                    <div class="wr-dropdown-list problem-dropdown">
                        <?php foreach ($menuProblems AS $category): ?>
                            <div
                                    class="list-problem<?php if (end($menuProblems) === $category): ?> last-list-problem<?php endif; ?>"
                                    data-mh="my-group">
                                <ul class="dropdown">
                                    <li class="title-problem txt-left">
                                        <img src="/img/logo/retina/<?= $category->icon ?>.png"
                                             data-device-pixel-ratio-1.5="/img/logo/retina/<?= $category->icon ?>.png"
                                             alt="проблемы логотип">
                                        <span class="title-problem-list show-tablet"><?= $category->title ?></span>
                                    </li>
                                    <?php foreach ($category->solutions AS $problem): ?>
                                        <?php if ($problem->order > -5): ?>
                                            <li><a class="animsition-link"
                                                   href="/<?= $category->slug ?>/<?= $problem->slug ?>"><span><?= $problem->title ?></span></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- End List Problem
                ================================================== -->
            </li>
            <li id="is-interesting" class="has-dropdown" >

                <span class="item-link-menu has-down-icon">
                    Полезное чтение
                    <i class="reproduction-down-lite"></i>
                </span>
                <!-- List Product
                ================================================== -->
                <div class="wr-dropdown">
                    <div class="wr-dropdown-list">
                        <div class="wr-list-product">
                            <div class="list-product">
                                <ul class="ul-list-product">
                                    <li><a class="link-product animsition-link" href="/otzyvy">Отзывы</a></li>
                                    <li><a class="link-product animsition-link" href="/vopros_otvet">Вопрос-ответ</a></li>
                                    <li>
                                        <!--Новости-->
                                        <a class="link-product animsition-link" href="/novosti">
                                            <span class="title-product">Новости</span>
                                        </a>
                                    </li>
                                    <li>
                                        <!--Статьи-->
                                        <a class="link-product animsition-link" href="/statyi">
                                            <span class="title-product">Статьи</span>
                                        </a>
                                    </li>
                                    <li>
                                        <!--Статьи-->
                                        <a class="link-product animsition-link" href="/specialist">
                                            <span class="title-product">СПЕЦИАЛИСТАМ</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End List Product
                ================================================== -->
            </li>
            <li><a class="item-link-menu animsition-link" href="/o_proizvoditele">О производителе</a></li>
            <li class="has-dropdown">

                <span class="item-link-menu has-down-icon not-before">
                    Наши продукты
                    <i class="reproduction-down-lite"></i>
                </span>
                <!-- List Product
                ================================================== -->
                <div class="wr-dropdown">
                    <div class="wr-dropdown-list">
                        <div class="wr-list-product">
                            <div class="list-product">
                                <ul id="product-menu"  class="ul-list-product">
                                    <?php foreach ($menuProducts AS $product): ?>
                                        <li<?php if (end($menuProducts) === $product): ?> class="last-li-product"<?php endif; ?>>
                                            <!--Сперотон-->
                                            <a class="link-product animsition-link"
                                               href="/nashi_produkty/<?= $product->slug ?>">
                                                <img class="reproduction-drugs-logo <?= $product->slug ?>"
                                                     src="/img/drugs/drugs_logo/retina/<?= $product->slug ?>_logo.png"
                                                     data-device-pixel-ratio-1.5="/img/drugs/drugs_logo/retina/<?= $product->slug ?>_logo.png"
                                                     alt="<?= $product->title ?>">
                                                <span
                                                        class="title-product color-<?= $product->slug ?>"><?= $product->title ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End List Product
                ================================================== -->
            </li>
            <li class="where-to-buy not-li">
                <a class="item-link-menu not-before-li not-li" href="/gde_kupit">
                    <span>Где купить?</span>
                    <i class="reproduction-buy"></i>
                </a>
            </li>
            <li class="search-link not-li" onmouseover="hideBeforeMenuSearch();" onmouseout="showBeforeMenuSearch();">
                <span id="open-search" class="item-link-menu not-li">
                    <i class="reproduction-search"></i>
                </span>
                <!-- Search Form
                ================================================== -->
                <div id="wr-dropdown-search" class="wr-dropdown">
                    <div class="wr-dropdown-list">
                        <div id="search-wr">
                            <form action='/poisk' id='search' method='get'>
                                <div class='input-search'>
                                    <input name="query" id="search-focus" class='search'
                                           placeholder='Введите слово для поиска...'
                                           type='text'>

                                    <div class="wr-fa-search">
                                        <div class="wr-btn-search position-relative search-go">
                                            <button class='btn-search' type='submit' value=''></button>
                                            <i class="reproduction-search"></i>
                                        </div>
                                        <div class="wr-btn-search position-relative close-search">
                                            <button class='btn-times' id='close' type='reset' value=''></button>
                                            <i class="reproduction-close hover-icon"></i>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- End Search Form
                ================================================== -->
            </li>
        </ul>
    </nav>
</div>
