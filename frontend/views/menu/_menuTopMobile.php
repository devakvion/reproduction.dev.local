<div id="wr-open-menu-top">
    <div class="open-menu-top">
        <span id="trigger-menu-mobile" class="nav-icon">
            <span class="burger"></span>
        </span>
    </div>
</div>
<div id="container-menu-desktop">
    <div class="mp-pusher" id="mp-pusher">
        <nav id="mp-menu" class="mp-menu">
            <div class="mp-level">
                <ul>
                    <li><a class="level-1-link" href="/">Главная</a></li>
                    <li>
                        <a class="level-1-link" href="javascript:void(0);">
                            О чем вы хотите узнать?
                            <i class="reproduction-down-furher"></i>
                        </a>

                        <div class="mp-level">
                            <span class="mp-back">Что вас беспокоит? <i class="reproduction-further"></i></span>
                            <ul class="mobile-ul">
                                <?php foreach ($menuProblems AS $category): ?>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <?= $category->title ?>
                                            <i class="reproduction-down-furher down-furher"></i>

                                        </a>

                                        <div class="mp-level">
                                            <a class="mp-back level-2" href="javascript:void(0);">
                                                <?= $category->title ?> <i class="reproduction-further"></i></a>
                                            <ul class="mobile-ul-dop">
                                                <?php foreach ($category->solutions AS $problem): ?>
                                                    <li>
                                                        <a href="/<?= $category->slug ?>/<?= $problem->slug ?>"><span><?= $problem->title ?></span></a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="level-1-link" href="javascript:void(0);">
                            Полезное чтение
                            <i class="reproduction-down-furher"></i>
                        </a>

                        <div class="mp-level">
                            <span class="mp-back">Полезное чтение <i class="reproduction-further"></i></span>
                            <ul class="mobile-ul">
                                <li>
                                    <a href="/novosti">
                                        Новости
                                        <i class="reproduction-down-furher down-furher"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="/statyi">
                                        Статьи
                                        <i class="reproduction-down-furher down-furher"></i>

                                    </a>
                                </li>
                                <li>
                                    <a href="/specialist">
                                        СПЕЦИАЛИСТАМ
                                        <i class="reproduction-down-furher down-furher"></i>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="level-1-link" href="/o_proizvoditele">О производителе</a></li>
                    <li><a class="level-1-link" href="/otzyvy">Отзывы</a></li>
                    <li><a class="level-1-link" href="/vopros-otvet">Вопрос-ответ</a></li>
                    <li>
                        <a class="level-1-link" href="javascript:void(0);">
                            Наши продукты
                            <i class="reproduction-down-furher down-furher"></i>
                        </a>

                        <div class="mp-level">
                            <span class="mp-back">
                                Наши продукты
                                <i class="reproduction-further"></i>
                            </span>
                            <ul class="mobile-ul">
                                <?php foreach ($menuProducts AS $product): ?>
                                    <li>
                                        <a href="/nashi_produkty/<?= $product->slug ?>">
                                            <span><?= $product->title ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                    <li><a class="level-1-link" href="/gde_kupit">Где купить</a></li>
                </ul>

            </div>
        </nav>
    </div>
</div>
