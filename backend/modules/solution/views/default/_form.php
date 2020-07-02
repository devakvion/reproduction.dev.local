<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Solution */
/* @var $form yii\widgets\ActiveForm */
$this->registerCssFile("/css/widearea.css");
$this->registerJsFile('/js/widearea.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<style type="text/css">
    #solution-form label.switch {
        display: inline-block;
        margin: auto;
    }

    .fileinput-remove-button, .fileinput-upload-button {
        display: none;
    }

    #solutions {
        margin: 40px 0;
        border: solid 20px #f9f9f9;
        background-color: #f9f9f9;
    }

    #solutions th {
        font-size: 14px;
    }

    #solutions td {
        vertical-align: top;
    }

    #solutions p {
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

    .solution-form label {
        font-weight: bold;
        margin-bottom: 10px;
    }

    #solution-slug {
        font-size: 16px;
    }

    #solution-content .content-title {
        font-size: 16px;
    }

    #solution-content .ui-accordion-header {
        background-image: none;
        background-color: #f6f6f6;
    }

    #solution-content .form-content-title {
        font-size: 15px;
        height: 70px;
    }

    #solution-content .redactor-editor p {
        color: #444;
    }

    #solution-content .btn {
        font-size: 14px;
    }

    #solution-content b, #solution-content strong {
        font-weight: bold;
    }

    #solution-content ol, #solution-content ul {
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
        <?= Html::a(Yii::t('app', 'BTN_BACK_TO_LIST'), ['/_dir/solutions'], ['class' => 'btn btn-skyblue']) ?>
    </p>

    <div class="solution-form">
        <?php $form = ActiveForm::begin([
            'enableClientValidation' => false,
            'options' => [
                'id' => 'solution-form',
                'onsubmit' => 'sendForm(this, $("#btn-solution-save"), $("#form-solution-notification"), true); return false;',
            ],
        ]); ?>

        <?= $form->field($model, 'slug')->textInput(['placeholder' => $model->attributeLabels()['slug'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>

        <?= $form->field($model, 'title')->textInput(['placeholder' => $model->attributeLabels()['title'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>


        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-solution-save']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        <div class="widget__content notification-wr" id="form-solution-notification"></div>
    </div>
    <div id="solution-content">
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
    var contentId;
    window['setTitle'] = function () {
        $('#content-title-header' + contentId).html(nl2br($('#content-title' + contentId).val()));
    };
</script>