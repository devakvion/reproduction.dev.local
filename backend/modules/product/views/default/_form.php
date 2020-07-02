<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use backend\models\Category;
use backend\models\Product;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>
<style type="text/css">
    #product-form label.switch {
        display: inline-block;
        margin: auto;
    }

    .fileinput-remove-button, .fileinput-upload-button {
        display: none;
    }

    #products {
        margin: 40px 0;
        border: solid 20px #f9f9f9;
        background-color: #f9f9f9;
    }

    #products th {
        font-size: 14px;
    }

    #products td {
        vertical-align: top;
    }

    #products p {
        font-size: 12px;
        padding: 10px 6px;
    }

    .table-title {
        font-size: 16px !important;
        font-weight: bold;
        padding-bottom: 15px;
        text-align: center;
        text-transform: capitalize;
    }

    .fileinput-cancel-button {
        display: none;
    }

    #product-slug {
        font-size: 14px;
    }

    #product-content .content-title {
        font-size: 16px;
    }

    #product-content .ui-accordion-header {
        background-image: none;
        background-color: #f6f6f6;
    }

    #product-content .form-content-title {
        font-size: 15px;
        height: 70px;
    }

    #product-content .redactor-editor p {
        color: #444;
    }

    #product-content .btn {
        font-size: 14px;
    }

    #product-content b, #product-content strong {
        font-weight: bold;
    }

    #product-content ol, #product-content ul {
        list-style: outside none disc;
    }

    .content-confirm {
        float: right;
        width: 80%;
    }

    .form-content-text {
        overflow: hidden;
    }

    .widearea-fullscreen {
        overflow: auto;
    }

</style>

<div id="items-list" class="widget">

    <p class="form-group">
        <?= Html::a(Yii::t('app', 'BTN_BACK_TO_LIST'), ['/product'], ['class' => 'btn btn-skyblue', 'onclick' => 'getHtmlViaAjax(this, $("#content"));return false;']) ?>
    </p>
    <?php if ($model->isNewRecord): ?>
        <a href="" id="product-update" onclick="getHtmlViaAjax(this, $('#content'));return false;"></a>
    <?php endif; ?>
    <div class="product-form">
        <?php $form = ActiveForm::begin([
            'enableClientValidation' => false,
            'options' => [
                'id' => 'product-form',
                'onsubmit' => 'sendForm(this, $("#btn-product-save"), $("#form-product-notification"), true); return false;',
            ],
        ]); ?>
        <?php if ($model->isNewRecord): ?>
            <?= $form->field($model, 'title')->textInput(['placeholder' => $model->attributeLabels()['title'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-product-save']) ?>
            </div>
        <?php else: ?>

            <?= $form->field($model, 'slug')->textInput(['placeholder' => $model->attributeLabels()['slug'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>

            <?= $form->field($model, 'title')->textInput(['placeholder' => $model->attributeLabels()['title'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>

            <?= $form->field($model, 'active')->hiddenInput()->label(false) ?>
            <div class="form-group row">
                <div class="form-group active col-md-3">
                    <label>Опубликованно</label>
                    <input name="active" id="active" class="sw"
                           type="checkbox"<?php if (1 == $model->active): ?> checked<?php endif; ?>>
                    <label class="switch" for="active"></label>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-product-save']) ?>
            </div>        <?php endif; ?>
        <?php ActiveForm::end(); ?>
        <div class="widget__content notification-wr" id="form-product-notification"></div>
    </div>
    <div id="product-content">
        <?php
        /*echo \vova07\imperavi\Widget::widget([
            'selector' => '.form-content-text',
            'settings' => [
                'lang' => 'ru',
                'minHeight' => 200,
                'paragraphize' => false,
                'plugins' => [
                    'fullscreen',
                ]
            ]
        ]);*/
        foreach ($content AS $c):
            ?>
            <div class="content-title"><span id="content-title-header<?= $c->id ?>"><?= nl2br($c->title) ?></span></div>

            <div>
                <?php $form = ActiveForm::begin([
                    'action' => '/content/update-ajax?id=' . $c->id,
                    'enableClientValidation' => false,
                    'options' => [
                        'id' => 'content-form',
                        'onsubmit' => 'sendForm(this, $("#btn-content-save' . $c->id . '"), $("#form-content-notification' . $c->id . '"), true, "setTitle"); contentId=' . $c->id . '; return false;',
                    ],
                ]); ?>
                <textarea placeholder="Заголовок" name="Content[title]" class="textarea form-content-title"
                          id="content-title<?= $c->id ?>"><?= $c->title ?></textarea>
                <textarea data-widearea="enable" placeholder="Текст" rows="4" name="Content[description]"
                          class="textarea form-content-text"
                          id="content-text<?= $c->id ?>"><?= preg_replace('/^\s\s+/ui', ' ', str_replace(["\r", "\n"], ' ', $c->description)) ?></textarea>

                <div class="form-group">
                    <button class="btn btn-skyblue" id="btn-content-save<?= $c->id ?>" type="submit">Сохранить</button>
                    <div class="widget__content notification-wr content-confirm"
                         id="form-content-notification<?= $c->id ?>"></div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>

        <?php endforeach; ?>
    </div>
</div>
<script>
    $('#product-slug').on('change keyup paste', function () {
        this.value = convertToSlug(this.value);
    });
    if ('' == $('#product-slug').val()) {
        var slug = convertToSlug($('#product-title').val());
        $('#product-slug').val(slug);
    }
    $('#active').change(function () {
        var value = $(this).is(":checked") ? 1 : 0;
        $('#product-' + this.id).val(value);
    });
    $('#products .checkbox').on('change', function () {
        var tags = ',';
        $('#products .checkbox').each(function () {
            if ($(this).is(":checked")) tags += this.id.replace('chkbx-', '') + ',';
        });
        $('#product-tags').val(tags);
    });
    var contentId;
    window['setTitle'] = function () {
        $('#content-title-header' + contentId).html(nl2br($('#content-title' + contentId).val()));
    };

    $("#product-content").accordion({
        collapsible: true,
        autoHeight: false,
        navigation: true,
        active: false
    });

    $(window).ready(function () {
        wideArea();
    });
</script>