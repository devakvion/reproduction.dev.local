<!-- Header bg-header-top-review
================================================== -->
<header id="header-top">
    <div class="row header-row-top hed-all-bg bg-header-top-review">
        <div class="con-hd">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <?= yii\base\View::render('@frontend/views/phone/_phone_help'); ?>

                    <h1 class="BebasNeueBold header-color title-problem-header">
                        Отзывы
                        <!--  SVG   -->
                        <span class="wr-svg-header">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 121 121" class="svg-slider-category">
  <g fill="none" stroke="#363840" transform="translate(-2026 -1860)">
    <g transform="translate(2026 1860)">
      <path d="M0.585365854,60.097561 C0.585365537,81.3592207 11.9283258,101.005805 30.3414632,111.636635 C48.7546005,122.267464 71.4405214,122.267464 89.8536588,111.636635 C108.266796,101.005805 119.609756,81.3592207 119.609756,60.097561 C119.609756,27.2298832 92.9652388,0.585365854 60.097561,0.585365854 C27.2298832,0.585365854 0.585365854,27.2298832 0.585365854,60.097561"/>
      <path d="M0.585365854,60.097561 C0.585365537,81.3592207 11.9283258,101.005805 30.3414632,111.636635 C48.7546005,122.267464 71.4405214,122.267464 89.8536588,111.636635 C108.266796,101.005805 119.609756,81.3592207 119.609756,60.097561 C119.609756,27.2298832 92.9652388,0.585365854 60.097561,0.585365854 C27.2298832,0.585365854 0.585365854,27.2298832 0.585365854,60.097561"/>
      <path d="M45.7521951,39.8087805 C45.7004878,37.6497561 47.4039024,35.9004878 49.5609756,35.9004878 L95.1082927,35.9004878 C97.262439,35.9004878 99.0107317,37.6517073 99.0107317,39.8087805 L99.0107317,69.3365854 C99.0107317,71.4956098 97.262439,73.244878 95.1034146,73.244878 L86.4487805,73.244878 L86.4487805,82.4995122 L77.6917073,73.742439 L50.444878,73.3073171 C48.2926829,73.2731707 46.5063415,71.4926829 46.4546341,69.3365854 L45.7541463,39.8087805 L45.7521951,39.8087805 Z M55.5960976,47.1531707 L89.7814634,47.1531707 L55.5960976,47.1531707 Z M55.5960976,53.982439 L89.7814634,53.982439 L55.5960976,53.982439 Z M55.5960976,61.7873171 L89.7814634,61.7873171 L55.5960976,61.7873171 Z"/>
      <path d="M38.6545775,48.7629268 L27.165111,48.7629268 C25.0088848,48.7629268 23.262439,50.5092683 23.262439,52.675122 L23.262439,82.0546341 C23.262439,84.2146341 25.0088848,86.0497561 27.1612084,86.1521951 L35.916853,86.5717073 L35.916853,96.0546341 L44.1885664,86.7434146 L69.3734846,86.7434146 C70.9911421,86.7434146 72.3024399,85.4263415 72.3024399,83.8185366 L72.3024399,79.2878049"/>
    </g>
  </g>
</svg>
                         </span>
                    </h1>

                    <h3>Для нас важно<br> ваше
                        мнение о наших продуктах</h3>
                    <span data-remodal-target="modal" class="btn btn-slider modal-btn">
                        Написать
                    </span>
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
                            <a href="/otzyvy" itemprop="item" title="Отзывы">
                                <span itemprop="name">Отзывы</span>
                                <meta itemprop="position" content="2">
                            </a>
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
<section>
    <div class="row">
        <div class="container container-bg-gray">
            <div class="con-item-questions">
                <div class="comments">
                    <?php
                    $products = yii\helpers\ArrayHelper::map(\backend\models\Product::find()->where(['active' => 1])->all(), 'slug', 'title', 'id');
                    $productsDrop = [];
                    foreach ($products AS $product) {
                        $productName = $product[key($product)];
                        $productsDrop[$productName] = $productName;
                    }
                    $i = 0;
                    $gendersIcon = ['family', 'man', 'woman'];
                    foreach ($comments AS $comment):
                        $gendersIcon = ['family', 'man', 'woman'];
                        $img = 'user-' . $gendersIcon[$comment->gender] . '.png';

                        if (empty($comment->product_id)) {
                            $productSlug = $productName = false;
                        } else {
                            $productSlug = key($products[$comment->product_id]);
                            $productName = $products[$comment->product_id][key($products[$comment->product_id])];
                        }
                        ?>
                        <article class="comment block-animate">
                            <div class="comment-img">
                                <img class="user-<?= $gendersIcon[$comment->gender] ?>" src="/img/review/<?= $img ?>"
                                     alt="<?= $comment->title ?>">
                            </div>

                            <div class="comment-body">
                                <?php if (($i++) % 2): ?>
                                <div class="text text-bg-c">
                                    <?php else: ?>
                                    <div class="text">
                                        <?php endif; ?>
                                        <?php if ($productSlug): ?>
                                            <a class="comment-title" href="/nashi_produkty/<?= $productSlug ?>">
                                                <img alt="<?= $productName ?>"
                                                     src="/img/drugs/drugs_logo/retina/<?= $productSlug ?>_logo.png"
                                                     data-device-pixel-ratio-1.5="/img/drugs/drugs_logo/retina/<?= $productSlug ?>_logo.png"
                                                     class="<?= $productSlug ?>-com-img">
                                                <span><?= $productName ?></span>
                                            </a>
                                        <?php endif; ?>
                                        <i class="reproduction-quotes-2"></i>

                                        <p class="review-p">
                                            <?= $comment->text ?>
                                        </p>
                                        <i class="reproduction-quotes"></i>
                                    </div>

                                    <p class="attribution"><span
                                                class="comment-name"><?= str_replace(',', ',</span> <span>', $comment->title) ?></span><span
                                                class="comment-date"><?= $comment->date ?></span></p>
                                </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="txt-center row comments-btn-f">
    <span id="more-comments" class="modal-btn-more">
        Показать ещё
    </span>
            </div>
        </div>
</section>

<div class="txt-center row comments-btn-f">
    <span data-remodal-target="modal" class="modal-btn-more">
        Добавить отзыв
    </span>
</div>
<!--Empty Block-->
<div class="row">
    <div class="empty-block-section"></div>
</div>
<!-- Здесь форма отправки отзыва
================================================== -->
<div class="remodal" data-remodal-id="modal"  data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h4 class="title-article after-line">Добавить отзыв</h4> <br>

    <div>
       <p class="note-form-top">Поля, отмеченные звездочкой <span class="req-sp"> * </span>,
                обязательны для
                заполнения.</p>
        <?php $form = \yii\bootstrap\ActiveForm::begin([
            'id' => 'comment-form',
            'enableClientValidation' => false,
            'enableAjaxValidation' => false,
        ]); ?>

        <?= $form->field($formModel, 'name', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('name')]])->label(false) ?>

        <?= $form->field($formModel, 'city', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('city')]])->label(false) ?>

        <?= $form->field($formModel, 'email', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('email')]])->label(false) ?>

        <?= $form->field($formModel, 'product')->dropDownList(
            $productsDrop,
            ['prompt' => 'Выберите продукт *'])->label(false);
        ?>

        <?= $form->field($formModel, 'body', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('body')]])->label(false)->textArea(['rows' => 6])->label(false); ?>

        <?= $form->field($formModel, 'gender', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('gender')]])->radioList(
            ['Семья *', 'Мужчина *', 'Женщина *'],
            [
                'item' => function ($index, $label, $name, $checked, $value) {
                    $return = '<label class="modal-radio">';
                    $return .= '<input class="in-radio" type="radio" name="' . $name . '" value="' . $value . '"';
                    $return .= '<i></i>';
                    $return .= '<span class="lab-rad">' . ucwords($label) . '</span>';
                    $return .= '</label>';
                    return $return;
                }
            ]
        )
            ->label(false); ?>
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
<?php
$script = <<< JS
  var svgHeader = $('.wr-svg-header svg');
    pathPrepareCssAll(svgHeader);
    setTimeout(function () {
        startAnimationSvgHeader(svgHeader);

    }, 100);
var commentPhoto = false;
$(function () {


    $('body').on('beforeSubmit', 'form#comment-form', function () {
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
                    $('.comment-upload-img-small').attr({src:'/uploads/comment/without_photo.png'});
                    $('#comment-photo-del').hide();
                } else {
                    $('#commentform-verifycode-image').click();
                    responseClass = 'error';
                }
                $('#response-wr').addClass(responseClass + '-sent').html(response.text);
            }
        });
        return false;
    });
});

var commentsPage = 1;
$('#more-comments').click(function() {
  $.ajax({
            url: '/comments?page=' + commentsPage,
            type: 'get',
            success: function (response) {
              if(response){
                $('.comments').append(response);
                commentsPage++;
              } else {
                $('#more-comments').hide();
              }
            
            }
        });
});
$('#captcha-bt').click(function(){
    $(this).fadeOut().fadeIn();
    $('#commentform-verifycode-image').click();
});

setTimeout(function(){
    if( $('#mibew-agent-button').hasClass("on") ){
        $('#mibew-agent-button').click();
    }
}, 3000);
JS;
$this->registerJs($script, yii\web\View::POS_LOAD);
?>
<?php

$this->registerCssFile('/css/modal.css');
//$this->registerJsFile('/js/viewport-checker/dist/jquery.viewportchecker.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/Remodal-master/dist/remodal.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/visitor.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
?>
