<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-questions">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>
                    <h1 class="BebasNeueBold header-color title-problem-header">
                        Вопрос-Ответ
                        <!--  SVG   -->
                        <span class="wr-svg-header">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 122" class="svg-slider-category">
  <g fill="none" stroke="#363840" transform="translate(-2168 -1717)">
    <g transform="translate(2169 1718)">
      <path d="M0,60 C4.05812251e-15,93.137085 26.862915,120 60,120 C93.137085,120 120,93.137085 120,60 C120,26.862915 93.137085,2.02906125e-15 60,0 C26.862915,-2.02906125e-15 4.05812251e-15,26.862915 0,60"/>
      <path d="M0,60 C4.05812251e-15,93.137085 26.862915,120 60,120 C93.137085,120 120,93.137085 120,60 C120,26.862915 93.137085,2.02906125e-15 60,0 C26.862915,-2.02906125e-15 4.05812251e-15,26.862915 0,60"/>
      <path d="M62.9901639,95.3331148 L62.9901639,103.020984 M31.9888525,47.3036066 C31.9888525,32.4954098 44.464918,20.4491803 59.8003279,20.4491803 C75.1367213,20.4491803 87.6137705,32.4963934 87.6137705,47.3036066 C87.6137705,54.5429508 84.7219672,61.2885246 79.467541,66.3609836 L69.72,75.7740984 C65.3793443,79.9642623 62.9901639,85.5334426 62.9921311,91.4596721 M58.1527869,91.4596721 L58.1527869,91.4616393"/>
    </g>
  </g>
</svg>
                         </span>
                    </h1>

                    <h3>Пожалуйста, ознакомьтесь с часто задаваемыми<br>вопросами, прежде чем написать нашим
                        специалистам.</h3>

                    <div class="view-min-sm">
                        <span data-remodal-target="modal" class="btn btn-slider modal-btn">
                        Вопрос?
                    </span>
                    </div>
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
                                <span itemprop="name">Вопрос-ответ</span>
                                <meta itemprop="position" content="2">
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Block Filter
================================================== -->
<section>
    <div class="row">
        <div class="con-hd wr-con-fil">
            <div class="wr-t-top-quest">
                <h3 class="title-article">Фильтр</h3>
                <svg id="filter-svg" viewBox="0 0 68 60" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M-14-18h96v96h-96z"/>
                        <path class="filter-svg-p"
                              d="M0 4h34v6H0V4zm56 0h12v6H56V4zM0 26h12v6H0v-6zm34 0h34v6H34v-6zm22 24h12v6H56v-6zM0 50h34v6H0v-6zm45 10c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zM23 36c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm22-22c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7z"/>
                    </g>
                </svg>
            </div>
            <div class="con-form-fil">
                <form id="filter-questions" data-step="1"
                      data-intro="<span class='help-qf'>Отметьте те продукты, информация по которым вас интересует.</span>">
                    <?php
                    $products = yii\helpers\ArrayHelper::map(\backend\models\Product::find()->where(['active' => 1])->all(), 'slug', 'title', 'id');
                    $productsDrop = [];
                    foreach ($products AS $productId => $product):
                        $productSlug = key($products[$productId]);
                        $productName = $products[$productId][$productSlug];
                        $productsDrop[$productName] = $productName;
                        ?>
                        <div>
                            <input name="<?= $productSlug ?>" value="<?= $productId ?>" type="checkbox"
                                   id="<?= $productSlug ?>-check"/>
                            <label for="<?= $productSlug ?>-check">
                                <?= $productName ?></label>
                        </div>
                    <?php endforeach; ?>
                </form>
                <!--Help-->
                <div class="help-faq-t">
                    <a href="javascript:void(0);" onclick="introJs().start();">
                        <i class="reproduction-info-section"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Section
================================================== -->
<section>
    <div id="faq" class="row">
        <div class="container container-bg-gray">
            <div class="con-item-questions" id="faqs-list">

                <?php
                $i = 0;
                foreach ($faqs AS $faq):
                    if (empty($faq->product_id)) {
                        $productSlug = $productName = false;
                    } else {
                        $productSlug = key($products[$faq->product_id]);
                        $productName = $products[$faq->product_id][key($products[$faq->product_id])];
                    }
                    ?>
                    <!--Item-->
                    <article>
                        <?php if (($i++) % 2): ?>
                        <div class="wr-quest-item bg-quest-b block-animate">
                            <?php else: ?>
                            <div class="wr-quest-item block-animate">
                                <?php endif; ?>
                                <div class="wr-content-quest">
                                    <span class="quest-sp"></span>

                                    <div class="top-quest">
                                        <h4 class="t-quest"><?= $faq->question ?></h4>
                                    </div>
                                    <div class="con-quest">
                                        <p class="p-quest">
                                            <?= $faq->answer ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="foot-quest">
                                    <div class="wr-down-lite">
                                        <span class="reproduction-down-lite"></span>
                                    </div>
                                    <a href="/nashi_produkty/<?= $productSlug ?>" class="tag-quest"><?= $productName ?>
                                        <span class="reproduction-tags-2"></span></a>
                                </div>
                            </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="con-item-questions">
                <span id="bt-faqs-more" class="more-btn">Показать ещё</span>

                <div class="quest-btn-add">
                   <span data-remodal-target="modal" class="modal-btn-more">
                        Задать вопрос
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Empty Block-->
<div class="row">
    <div class="empty-block-section"></div>
</div>
<!-- Здесь форма отправки отзыва
================================================== -->
<div class="remodal" data-remodal-id="modal">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h4 class="title-article after-line">Написать вопроc</h4> <br>

    <p class="txt-left">Мы ответим на ваш вопрос в течение 3 рабочих дней.</p>
    <p class="note-form-top">Поля, отмеченные звездочкой <span class="req-sp"> * </span>,
        обязательны для
        заполнения.</p>
    <div>
        <?php $form = \yii\bootstrap\ActiveForm::begin(['id' => 'faq-form', 'enableClientValidation' => false, 'enableAjaxValidation' => false]); ?>

        <?= $form->field($formModel, 'name', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('name')]])->label(false) ?>

        <?= $form->field($formModel, 'city', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('city')]])->label(false) ?>

        <?= $form->field($formModel, 'email', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('email')]])->label(false) ?>

        <? /*= $form->field($formModel, 'subject')->hiddenInput()->label(false) */ ?>

        <?= $form->field($formModel, 'product')->dropDownList(
            $productsDrop,
            ['prompt' => 'Выберите продукт *', 'class' => 'first-select'])->label(false);
        ?>

        <?= $form->field($formModel, 'body', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('body')]])->label(false)->textArea(['rows' => 6])->label(false) ?>

        <?= $form->field($formModel, 'compliance', ['template' => "<div id=\"consent-visitor\" class=\"checkbox\">\n{input}\n<span></span>\n<a class=\"bt-pos-vis\" data-remodal-target=\"modal-visitor\">Согласие на обработку персональных данных <i>*</i></a>\n{hint}\n</div>"])->input('checkbox') ?>

        <?= $form->field($formModel, 'verifyCode')->label(false)->widget(\yii\captcha\Captcha::className(),
            [
                // 'imageOptions' => ['height' => '42px', 'width' => '60px'],
                'options' => ['placeholder' => $formModel->getAttributeLabel('verifyCode')],
                'template' => '<div class="cap-mod">{image}</div><div class="reset-cap"><img id="captcha-bt" src="../img/captcha_bt.png"></div>{input}<p class="n-cap-in">* буквы не чувствительны к регистру</p> '
            ]) ?>

        <div class="form-group">
            <?= \yii\bootstrap\Html::submitButton('Отправить', ['class' => 'btn-primary', 'name' => 'contact-button']) ?>
        </div>
        <div class="form-group" id="response-wr"></div>
        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>
<!--СОГЛАСИЕ  посетителя сайта на обработку персональных данных-->
<?= yii\base\View::render('@frontend/views/compliance/index'); ?>
<!-- End
================================================== -->
<script>
  var nextPage = <?= ++$page ?>;
  var btFaqsMore = document.getElementById('bt-faqs-more');
  var btFaqsMoreOff = false;
</script>
<?php
$script = <<< JS
  var svgHeader = $('.wr-svg-header svg');
    pathPrepareCssAll(svgHeader);
    setTimeout(function () {
        startAnimationSvgHeader(svgHeader);

    }, 100);
$(function () {

    $('body').on('beforeSubmit', 'form#faq-form', function () {
        $('#response-wr').removeClass('success-sent').removeClass('error-sent').html('');
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: form.serialize(),
            success: function (response) {
            var responseClass;
                if (response.sent){
                    form.find('input[type=text], textarea').val('');
                    responseClass = 'success';
                } else {
                    $('#faqform-verifycode-image').click();
                    responseClass = 'error';
                }
                $('#response-wr').addClass(responseClass + '-sent').html(response.text);
            }
        });
        return false;
    });
    function readMyReStart(){
    $('.con-quest').readmore({
      moreLink: '<span class="l-op-quest">читать далее...</span>',
      lessLink: '<span class="l-cl-quest">Свернуть</span>',
      collapsedHeight: 110,
      speed: 300,
      afterToggle: function(trigger, element, expanded) {
            var o = element.parent().siblings(".foot-quest").find(".reproduction-down-lite");
            if(!o.hasClass("active")){
            o.addClass("active");
            }else{
            o.removeClass("active");
            }

      }
    });
    }
    readMyReStart();
    $(btFaqsMore).click(function() {
        if(btFaqsMoreOff) return false;
        //$(this).hide(600);
        var formValues = $('form#filter-questions').serialize();
        $.get('/vopros_otvet?page=' + nextPage + '&' + formValues, function(response){
           // $(btFaqsMore).show();
            $('#faqs-list').append(response);
            startViewportChecker();
            readMyReStart();
            var controllerAnimatSection = new ScrollMagic.Controller();
            $(".block-animate").each(function (index, elem) {
                new ScrollMagic.Scene({
                    triggerElement: elem,
                    triggerHook: 0.85,
                    reverse: false
                }).on('start', function () {
                     $(elem).addClass('visible');
                }).addTo(controllerAnimatSection);
            });
        });
    });
    $('form#filter-questions input').prop('checked',false);
    $('form#filter-questions').change(function(){
        btFaqsMoreOff = false;
        $(btFaqsMore).text('Показать ещё');
        var formValues = $( this ).serialize();
        $.get('/vopros_otvet?page=1&' + formValues, function(response){
            $('#faqs-list').html(response);
            startViewportChecker();
            readMyReStart();
            var controllerAnimatSection = new ScrollMagic.Controller();
            $(".block-animate").each(function (index, elem) {
                new ScrollMagic.Scene({
                    triggerElement: elem,
                    triggerHook: 0.85,
                    reverse: false
                }).on('start', function () {
                     $(elem).addClass('visible');
                }).addTo(controllerAnimatSection);
            });
        });
    });

});
$('#captcha-bt').click(function(){
    $(this).fadeOut().fadeIn();
    $('#faqform-verifycode-image').click();
});
    //$('article').readmore({speed: 500});

    function openChat(){
            var chatBt = $('#mibew-agent-button');
        if(chatBt.hasClass('on')){
            chatBt.click();
        } else {
            setTimeout(openChat, 10000);
        }
    }
    setTimeout(openChat, 3000);
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
<?php
$this->registerCssFile('/css/modal.css');
$this->registerJsFile('/js/viewport-checker/dist/jquery.viewportchecker.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/Remodal-master/dist/remodal.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/Readmore.js-master/readmore.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/visitor.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
?>
