
<!-- Header
================================================== -->
<header id="header-top">
    <div class="row header-row-top women-header bg-header-top-review">
        <div class="bg-empty-header"></div>
        <div class="container">
            <div class="left-header txt-right">
                <div class="wr-txt-header">
                    <!--  Help Phone   -->
                    <div class="phone-help-top">
                        <span class="name-phone">телефон горячей линии</span> <br>
                        <span class="phone-help-top-item">8-800-200-86-86 <i class="reproduction-phone-help"></i></span>
                    </div>
                    <!--  Down Content Help   -->
                    <div id="wr-down-content">
                        <i class="reproduction-down-lite down"></i>
                        <i class="reproduction-down-lite down"></i>
                        <i class="reproduction-down-lite down"></i>
                    </div>
                    <h1 class="BebasNeueBold header-color title-problem-header">
                        Отзывы
                        <!--  SVG   -->
                         <span class="wr-svg-header">
                             <svg id="review-svg" class="svg-slider-category" viewBox="0 0 125 125"
                                  xmlns="http://www.w3.org/2000/svg">

                             </svg>
                         </span>
                    </h1>

                    <h3 class="sub-title-problem-header header-color-ligth">Для нас важно<br> ваше
                        мнение о наших продуктах</h3>
                    <span data-remodal-target="modal" class="btn btn-slider modal-btn">
                        Написать
                    </span>
                </div>
            </div>
            <div class="right-header">
            </div>
            <!--  Breadcrumbs   -->
            <div id="breadcrumbs-wr">
                <nav class="breadcrumbs">
                    <ol class="cd-multi-steps">
                        <li class="visited"><a href="/">Главная</a><span class="cd-multi-steps-line">|</span></li>
                        <li class="visited">Отзывы</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Empty Block
================================================== -->
<div class="row">
    <div class="container">
        <div class="empty-block-article"></div>
    </div>
</div>
<!-- Main Section
================================================== -->
<section>
    <div class="row">
        <div class="container-review review-sec">
            <div class="wr-comments">
                <div class="comments">
                    <?php
                    $products = yii\helpers\ArrayHelper::map(\backend\models\Product::find()->all(), 'slug', 'title', 'id');
                    $i = 0;
                    foreach ($comments AS $comment):
                        $img = empty($comment->img_small) ? 'without_photo.png' : $comment->id . '/' . $comment->img_small;
                        if (empty($comment->product_id)) {
                            $productSlug = $productName = false;
                        } else {
                            $productSlug = key($products[$comment->product_id]);
                            $productName = $products[$comment->product_id][key($products[$comment->product_id])];
                        }
                        ?>
                        <article class="comment block-animate">
                            <div class="comment-img">
                                <img src="<?= $comment->imageDir . $img ?>" alt="<?= $comment->title ?>">
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
                                                     src="/img/drugs/drugs_logo/default/<?= $productSlug ?>_logo.png" data-device-pixel-ratio-1.5="/img/drugs/drugs_logo/retina/<?= $productSlug ?>_logo.png"
                                                     class="reproduction-drugs-logo pad-logo">
                                                <span><?= $productName ?></span>
                                            </a>
                                        <?php endif; ?>
                                        <p class="p-not-i">
                                            <i class="reproduction-quotes-2"></i>
                                        </p>

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
        </div>
</section>

<div class="txt-center row">
    <span data-remodal-target="modal" class="modal-btn-more">
        Добавить отзыв
    </span>
</div>
<!-- Здесь форма отправки отзыва
================================================== -->
<div class="remodal" data-remodal-id="modal">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h4 class="t-modal">Добавить отзыв</h4>

    <div>
        <div class="form-group field-commentform-img" style="position: relative;">
            <input id="fileupload" type="file" name="files[]" data-url="/comment/upload-photo" title=""
                   style="position: absolute; top: 0; left: 0; width: 90px; opacity: 0; cursor: pointer;">
            <img class="comment-upload-img-small" src="/uploads/comment/without_photo.png">
            <button id="comment-photo-upload" class="btn-dl col-ok-dl">Загрузить фотографию (опционально)</button>
            <button id="comment-photo-del" class="btn-dl col-del-dl" style="display: none;">Удалить фотографию</button>
            <div id="progress" style="clear: both;">
                <div class="bar" style="height: 10px; background-color: green; width: 0;"></div>
            </div>
            <div id="load-photo-msg" class="form-group field-commentform-error"></div>
        </div>

        <?php $form = \yii\bootstrap\ActiveForm::begin([
            'id' => 'comment-form',
            'enableClientValidation' => false,
            'enableAjaxValidation' => false,
        ]); ?>

        <?= $form->field($formModel, 'name', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('name')]])->label(false) ?>

        <?= $form->field($formModel, 'city', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('city')]])->label(false) ?>

        <?= $form->field($formModel, 'email', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('email')]])->label(false) ?>

        <?= $form->field($formModel, 'subject')->hiddenInput()->label(false) ?>

        <?= $form->field($formModel, 'photo')->hiddenInput()->label(false) ?>

        <?= $form->field($formModel, 'body', ['inputOptions' => ['placeholder' => $formModel->getAttributeLabel('body')]])->label(false)->textArea(['rows' => 6])->label(false) ?>

        <div class="form-group">
            <?= \yii\bootstrap\Html::submitButton('Отправить', ['class' => 'btn-primary', 'name' => 'contact-button']) ?>
        </div>
        <div class="form-group" id="response-wr"></div>
        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>
<!-- End
================================================== -->
<?php
$script = <<< JS
var commentPhoto = false;
$(function () {
animateThis("#review-svg");
setTimeout(function () {
    callForEachDown.start(downContentHelp, [0, 1, 2, 3], 500);

}, 800);

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
                    $('#contactform-verifycode-image').click();
                    responseClass = 'error';
                }
                $('#response-wr').addClass(responseClass + '-sent').html(response.text);
            }
        });
        return false;
    });

    $('#fileupload').fileupload({
            dataType: 'json',
            submit: function(e, data){
                $('#load-photo-msg').html('');
                data.formData = {file: commentPhoto};
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                if(100 == progress){
                    progress = 0;
                }
                $('#progress .bar').css(
                    'width',
                    progress + '%'
                );
            },
            done: function (e, data) {
                if(data.result.files[0].error){
                    if('Filetype not allowed' == data.result.files[0].error) data.result.files[0].error = 'Неверный формат изображения - допустимые типы: jpg, png, gif';
                    $('#load-photo-msg').html(data.result.files[0].error);
                } else {
                    commentPhoto = data.result.files[0].name;
                    $('#comment-photo-del').show();
                    $('.comment-upload-img-small').attr({src:'/uploads/comment/temp/' + commentPhoto});
                    $('#commentform-photo').val(commentPhoto);
                }
            }
        });

    $('#comment-photo-upload').click(function(){ $('#fileupload').click(); });

    $('#comment-photo-del').click(function(){
        $(this).hide();
        $('.comment-upload-img-small').attr({src:'/uploads/comment/without_photo.png'});
        $('#commentform-photo').val('');
        $.get('/comment/delete-photo?file=' + commentPhoto, function(response){
            console.log(response);
        });
    });
});
JS;
$this->registerJs($script, yii\web\View::POS_LOAD);
?>
<?php

$this->registerCssFile('/css/modal.css');
$this->registerJsFile('/js/viewport-checker/dist/jquery.viewportchecker.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/Remodal-master/dist/remodal.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);

$this->registerJsFile('/js/jQuery-File-Upload-9.11.2/jquery.ui.widget.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/jQuery-File-Upload-9.11.2/jquery.iframe-transport.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
$this->registerJsFile('/js/jQuery-File-Upload-9.11.2/jquery.fileupload.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
?>
