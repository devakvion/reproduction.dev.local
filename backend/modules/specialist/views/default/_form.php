<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use backend\models\Category;
use backend\models\Solution;

/* @var $this yii\web\View */
/* @var $model backend\models\Specialist */
/* @var $form yii\widgets\ActiveForm */
?>
<style type="text/css">
    #article-form label.switch {
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
</style>

<div id="items-list" class="widget">

    <p class="form-group">
        <?= Html::a(Yii::t('app', 'BTN_BACK_TO_LIST'), ['/specialist'], ['class' => 'btn btn-skyblue', 'onclick' => 'getHtmlViaAjax(this, $("#content"));return false;']) ?>
    </p>
    <?php if ($model->isNewRecord): ?>
        <a href="" id="article-update" onclick="getHtmlViaAjax(this, $('#content'));return false;"></a>
    <?php endif; ?>
    <div class="article-form">
        <?php $form = ActiveForm::begin([
            'enableClientValidation' => false,
            'options' => [
                'id' => 'article-form',
                'onsubmit' => 'sendForm(this, $("#btn-article-save"), $("#form-article-notification"), true); return false;',
            ],
        ]); ?>
        
        <?php if ($model->isNewRecord): ?>
            <?= $form->field($model, 'title')->textInput(['placeholder' => $model->attributeLabels()['title'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-article-save']) ?>
            </div>
        <?php else: ?>
            <div class="form-group">
                <?= DatePicker::widget([
                    'id' => 'date-article',
                    'name' => 'Specialist[date]',
                    'language' => 'ru',
                    'value' => '0000-00-00' == $model->date ? '' : $model->date,
                    'options' => ['placeholder' => 'Дата'],
                    'pluginOptions' => [
                        'format' => 'dd/mm/yyyy',
                        'autoclose' => true,
                    ]
                ]); ?>
            </div>
            <?= $form->field($model, 'link')->textInput(['placeholder' => $model->attributeLabels()['link'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>

            <div class="form-group">
                <input id="radio-0" class="radio" type="radio" name="Specialist[type]"
                       value="0"<?php if (0 == $model->type): ?> checked<?php endif; ?>>
                <label for="radio-0"><?= $model->types[0] ?></label>
                <input id="radio-1" class="radio" type="radio" name="Specialist[type]"
                       value="1"<?php if (1 == $model->type): ?> checked<?php endif; ?>>
                <label for="radio-1"><?= $model->types[1] ?></label>
                <br><br>
            </div>

            <?= $form->field($model, 'title')->textInput(['placeholder' => $model->attributeLabels()['title'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>

            <?= $this->renderAjax('_pdf_form', ['model' => $model]) ?>

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
                <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-article-save']) ?>
            </div>        <?php endif; ?>
        <?php ActiveForm::end(); ?>
        <div class="widget__content notification-wr" id="form-article-notification"></div>
    </div>
</div>
<script>
    $('#article-slug').on('change keyup paste', function () {
        this.value = $.toSlug(this.value);
    });
    if ('' == $('#article-slug').val()) {
        var slug = convertToSlug($('#article-title').val());
        $('#article-slug').val(slug);
    }
    $('#active').change(function () {
        var value = $(this).is(":checked") ? 1 : 0;
        $('#specialist-' + this.id).val(value);
    });
    $('#solutions .checkbox').on('change', function () {
        var tags = ',';
        $('#solutions .checkbox').each(function () {
            if ($(this).is(":checked")) tags += this.id.replace('chkbx-', '') + ',';
        });
        $('#article-tags').val(tags);
    });
</script>