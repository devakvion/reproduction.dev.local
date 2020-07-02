<?php
use backend\models\Seo;
use frontend\assets\AppAsset;
use yii\helpers\Html;
if (!isset(Yii::$app->view->params['seoTableName'])) Yii::$app->view->params['seoTableName'] = 'home';
if (!isset(Yii::$app->view->params['seoTableId'])) Yii::$app->view->params['seoTableId'] = 1;
$seo = Seo::find()->where(['table_name' => Yii::$app->view->params['seoTableName'], 'table_id' => Yii::$app->view->params['seoTableId']])->one();
if(!$seo){
    $seo = Seo::find()->where(['table_name' => 'home', 'table_id' =>1])->one();
}
$menuProblems = \backend\models\Category::find()->with('solutions')->orderBy('order DESC')->all();
$menuProducts = \backend\models\Product::find()->where(['active' => 1])->orderBy('id ASC')->all();
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="940e6cbb7764cc45"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($seo->title) ?></title>
    <meta name="description" content="<?= Html::encode($seo->description) ?>">
    <meta name="keywords" content="<?= Html::encode($seo->keywords) ?>">
    <meta property="og:title" content="<?= Html::encode($seo->title) ?>"/>
    <meta property="og:description" content="<?= Html::encode($seo->description) ?>"/>
    <meta property="og:image" content="https://reproduction.info/img/index-img/share-site.min.jpg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content= "https://reproduction.info" />
    <?php $this->head() ?>
    <script>
        /* <![CDATA[ */
        var google_conversion_id = 948736609;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-73160417-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(35049955, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            trackHash:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/35049955" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script src="//yastatic.net/share2/share.js" async="async"></script>
<style>
    p,.list-article li{

        font-size: 1.15em;
    }
    .big_note sup{
        font-size: 1em;
        top: -.2em;
        color: #444657;
    }
</style>
</head>
<body <?php if (\Yii::$app->devicedetect->isMobile()): ?> id="mobile" <?php endif; ?> >
<!--<noscript>
    <div><img src="https://mc.yandex.ru/watch/35049955" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>-->

<?php $this->beginBody() ?>

<!-- Outdated Browser
================================================== -->
<?php if (Yii::$app->params['browserOld']): ?>
    <div id="outdated">
        <div id="outdated-txt">
            <h6>Ваш браузер (Internet Explorer 8 / 9) устарел!</h6>

            <p> Он имеет уязвимости в безопасности и может не показывать все возможности на этом и других сайтах.</p>

            <p>Компания Microsoft официально прекращает поддержку Internet Explorer 8, 9 версий с 12 января 2016г.</p>

            <p>Обновите, пожалуйста, браузер, перейдя по ссылке, или откройте данный сайт в другом браузере.</p> <br>
            <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/ru" target="_blank" rel="nofollow">обновить
                браузер</a>
            <span id="close-old"></span>
        </div>
    </div>
<?php endif; ?>
<div id="wrapper-main-site">
    <!-- Menu Top
    ================================================== -->
    <?= yii\base\View::render('@frontend/views/menu/_menuTop', ['menuProblems' => $menuProblems, 'menuProducts' => $menuProducts]); ?>
    <!--Mobile version-->
    <?= yii\base\View::render('@frontend/views/menu/_menuTopMobile', ['menuProblems' => $menuProblems, 'menuProducts' => $menuProducts]); ?>
    <!-- End Menu Top
    ================================================== -->
    <!-- Content Main
    ================================================== -->
    <div id="wrapper-content-bg">
    </div>
    <main id="main" class="animsition remodal-bg p-r">
        <?= $content ?>
    </main>
    <script>
        function stPage() {
            var elM = document.querySelector('#main');
            elM.className = 'visible remodal-bg';
        }

        setTimeout(function () {
            stPage();
        }, 500);
    </script>
    <!-- End Content Main
    ================================================== -->
    <!-- Footer
    ================================================== -->
    <footer style="text-align: right">
        <div class="row bg-f" style="text-align: left">
            <div id="footer-rep">
                <div class="c-f">
                    <div class="footer-block1" itemscope itemtype="http://schema.org/Organization">
                        <div class="wr-footer-txt txt-left">
                            <span class="title-footer">Компания</span>
                            <a class="" href="http://www.akvion.ru/" target="_blank" rel="nofollow">
                                <img style="width: 170px; height: auto;margin-bottom: 5px" src="/img/proizviditel/logo-ac-w.min.png" alt="АО Аквион">
                               <!-- <br> <br> АО Аквион-->
                            </a>

                            <p class="txt-footer">
                                мы создаем продукты,<br> улучшающие качество жизни
                            </p>

                            <p class="txt-footer"><i class="reproduction-copy"></i>все права защищены</p>
                        </div>
                    </div>
                    <div class="footer-block2 block-footer-height">
                        <div class="wr-footer-txt txt-left">
                            <span class="title-footer">Общение</span>
                           <!-- <a class="chat-footer "
                               id="mibew-agent-button"
                               href="/support/chat?locale=ru&style=reproduction"
                               target="_blank" rel="nofollow"
                               onclick=""><i class="reproduction-chat"></i>онлайн чат</a>-->
                            <a href="/otzyvy"><i class="reproduction-reviews"></i>прочитать отзывы</a>
                            <a href="/novosti"><i class="reproduction-addres"></i>новости</a>
                            <a href="/kontakty"><i class="reproduction-email"></i>написать письмо</a>
                            <a href="/img/politic/Политика_обработки_данных_reproduction.info.pdf" target="_blank"
                               rel="nofollow"><i class="politic-i"></i>Политика обработки персональных данных</a>
                        </div>
                    </div>
                    <div class="footer-block3 block-footer-height">
                        <div class="wr-footer-txt txt-left footer-last-block">
                            <span class="title-footer t-fot-con-up"><a class="foot-a a-cont-foot" href="/kontakty">Контакты</a>
                            </span>
                            <span><a href="tel:88002008686" style="display: inline-block">8-800-200-86-86</a> <i
                                        class="reproduction-phone-help"></i></span><br>
                            <span class="last-phone"><a style="display: inline-block" href="tel:+74957807234">+7 (495) 780-72-34</a> <i
                                        class="reproduction-phone-help"></i></span>
                            <br>
                            <div>
                                <address class="txt-footer"><span>123317</span>, <span
                                    >г. Москва</span>, <span>ул. Пресненская набережная, д. 8., стр. 1
                               МФК «Город Столиц», Северный блок, башня Москва.</span></address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="c-f-bot">
                    <span class="bottom-copy"><i class="reproduction-copy"> </i> АО АКВИОН <?= date('Y') ?></span>
                    <span style="float: right;text-transform: uppercase">
                        <span><a href="http://redhex.pt/"
                                 target="_blank" rel="nofollow" style="color: #949494">developed by Studio
                                RedHex</a></span></span>
                </div>
            </div>
        </div>
        <!--Scroll-->
        <div id="wr-scroller">
            <div id="scroller"></div>
        </div>
    </footer>
    <!-- End Footer
    ================================================== -->
</div>
<!-- Wrapper Content Site
================================================== -->
<div class="fixed fixed--bottom cookie-disclaimer js-cookie-disclaimer">
    <div class="media media--center">
        <div class="close-cookie  g-bg-contain transition-all"><div class='open-close-button open'></div></div>
        <div class="media__body">
            <p>На данном сайте используются cookie-файлы и другие аналогичные технологии. Если, прочитав это сообщение,
                вы остаетесь на нашем сайте, это означает, что вы не возражаете против использования данных
                технологий.</p>
        </div>
        <div class="media__object">
            <div class="btn-wrap">
                <span id="coocie-ok" class="link-reset">Согласен</span>
            </div>
        </div>

    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

