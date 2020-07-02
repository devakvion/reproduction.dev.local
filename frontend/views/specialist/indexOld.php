<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-specialist bg-cover">
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
                        СПЕЦИАЛИСТАМ
                        <!--  SVG   -->
                        <span class="wr-svg-header">
                             <svg id="article-svg" class="svg-slider-category" viewBox="-2 -2 126 126"
                                  xmlns="http://www.w3.org/2000/svg">

                             </svg>
                         </span>
                    </h1>
                    <h3>Актуальная научная информация <br> о продуктах линейки Reproduction</h3>
                </div>
            </div>
            <!--  Breadcrumbs   -->
            <div id="breadcrumbs-wr">
                <nav class="breadcrumbs">
                    <ol class="cd-multi-steps">
                        <li class="visited"><a href="/">Главная</a><span class="cd-multi-steps-line">|</span></li>
                        <li class="visited"><span>Специалистам</span></li>
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
<!-- Main Section СПЕЦИАЛИСТАМ
================================================== -->
<section id="specialist-item">
    <div class="row">
        <div class="con-hd" style="overflow: visible">
            <div class="con-item-specialist">
                <div class="txt-spec row">
                    <div class="col-txt-spec-r align-vertical" data-mh="group-spec">
                        <h2 class="title-section after-line h-pr-t">
                            Эффективность доказана
                        </h2>
                        <p>
                            Только за последние 5 лет проведено 10 клинических исследований с участием более 800
                            человек.
                        </p>
                        <p>
                            Эффективность препаратов для здоровья репродуктивной системы подтверждена клиническими
                            исследованиями. Опубликованные результаты позволяют специалистам своевременно получать
                            объективную информацию о возможности применения препаратов при различных проблемах и
                            состояниях.
                            На этой странице вы можете ознакомиться с темами клинических исследований и научными
                            статьями.
                        </p>
                    </div>
                    <div class="col-txt-spec-l bg-cover" data-mh="group-spec">

                    </div>
                </div>
                <div class="row tabs-nav-top">
                    <ul class="tabs">
                        <li class="tab-link current easy-txt transition-all" data-tab="tab-1">Клинические исследования
                            <i
                                    class="reproduction-down-lite transition-all"></i></li>
                        <li class="tab-lin easy-txt transition-all" data-tab="tab-2">Научные публикации <i
                                    class="reproduction-down-lite transition-all"></i></li>
                    </ul>
                </div>
                <div class="row"></div>
                <div id="tab-1" class="tab-content current transition-all">
                    <p>
                        Клинические исследования препаратов для здоровья репродуктивной системы проводятся в
                        государственных медицинских учреждениях. Специалисты изучают их эффективность как для
                        профилактики, так и в комплексной терапии различных заболеваний. Темы клинических исследований
                        выбираются таким образом, чтобы результаты в первую очередь были полезны практикующим врачам.
                    </p>
                    <div class="list-specialist">
                        <div class="item-specialist-bl">
                            <ul class="ul-spec">

                                <?php foreach ($model AS $m): ?>
                                    <?php if (0 == $m->type): ?>
                                <li>
                                    <p class="p-specialist-it">
                                   <span><?= $m->title ?></span>
                                    </p>
                                    <div>
                                        <?php if ($m->link): ?>
                                        <a class="tooltips link-web" href="<?= $m->link ?>">
                                            <i></i>
                                            <span>Читать на сайте</span>
                                        </a>
                                        <?php endif; ?>
                                            <?php if ($m->pdf): ?>
                                        <a class="tooltips link-pdf" href="<?= $m->imageDir . $m->id . '/' . $m->pdf ?>">
                                            <i></i>
                                            <span>Открыть PDF</span>
                                        </a>
                                            <?php endif; ?>
                                    </div>
                                </li>
                                        <?php endif; ?>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-content transition-all">
                    <p>
                        В этом разделе представлены статьи о результатах клинических исследований препаратов для здоровья
                        репродуктивной системы. Для публикации выбираются специализированные медицинские издания, которые
                        пользуются авторитетом среди врачей.
                    </p>
                    <div class="list-specialist">
                        <div class="item-specialist-bl">
                            <ul class="ul-spec">


                                <?php foreach ($model AS $m): ?>
                                    <?php if (1 == $m->type): ?>
                                        <li>
                                            <p class="p-specialist-it">
                                                <span><?= $m->title ?></span>
                                            </p>
                                            <div>
                                                <?php if ($m->link): ?>
                                                    <a class="tooltips link-web" href="<?= $m->link ?>">
                                                        <i></i>
                                                        <span>Читать на сайте</span>
                                                    </a>
                                                <?php endif; ?>
                                                <?php if ($m->pdf): ?>
                                                    <a class="tooltips link-pdf" href="<?= $m->imageDir . $m->id . '/' . $m->pdf ?>">
                                                        <i></i>
                                                        <span>Открыть PDF</span>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>


                            </ul>
                        </div>
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
<div class="remodal" data-remodal-id="modal"
     data-remodal-options="hashTracking: false">
    <div class="logo-interview">
        <img src="/img/logo/logo-map.png" alt="Логотип Аквион">
    </div>
    <h4 class="title-article after-line">Специалистам</h4>
    <div class="txt-development txt-left">
        <p>
            Раздел «Специалистам» предназначен исключительно для медицинских и фармацевтических работников.
            Если вы специалист здравоохранения, нажмите кнопку «Войти». Если вы не являетесь медицинским или фармацевтическим работником, посетите другие разделы сайта, например, <a href="/statyi">«Статьи»</a>.
        </p>
    </div>
    <div class="wr-visit-btn">
        <button class="remodal-cancel remodal-cancel-in-l transition-all">
            Отменить
        </button>
        <button class="remodal-confirm remodal-confirm-in-r transition-all-img">
            Войти
        </button>
    </div>
</div>
<?php
$script = <<< JS
var inst = $('[data-remodal-id=modal]').remodal();
 setTimeout(function () {
        inst.open();
    },500);
 $(document).on('click', '.remodal-cancel', function (event) {
        event.preventDefault();
        inst.close();
                 setTimeout(function () {
            var url = location.protocol + "//" + location.host;
            $(location).attr('href',url);
        },300);
    });
  $(document).on('click', '.remodal-confirm', function (event) {
        event.preventDefault();
        inst.close();

    });
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});
$(function () {
animateThis("#article-svg");
setTimeout(function () {
 callForEachDown.start(downContentHelp, [0, 1, 2, 3], 500);

}, 800);
});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
$this->registerCssFile("https://fonts.googleapis.com/css?family=Roboto+Condensed:400i&amp;subset=cyrillic");
?>
<?php
$this->registerCssFile('/css/modal.css');
$this->registerJsFile('/js/Remodal-master/dist/remodal.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
//$this->registerJsFile('/js/visitor.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
?>
