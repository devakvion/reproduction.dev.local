<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>
<style type="text/css">
    #comment-form label.switch {
        display: inline-block;
        margin: auto;
    }

    .fileinput-remove-button, .fileinput-upload-button {
        display: none;
    }

    #remove-img {
        bottom: 14px;
        left: 229px;
        position: absolute;
    }
</style>
<div id="items-list" class="widget">

    <p class="form-group">
        <?= Html::a(Yii::t('app', 'BTN_BACK_TO_LIST'), ['/comment'], ['class' => 'btn btn-skyblue', 'onclick' => 'getHtmlViaAjax(this, $("#content"));return false;']) ?>
    </p>
    <?php if ($model->isNewRecord): ?>
        <a href="" id="comment-update" onclick="getHtmlViaAjax(this, $('#content'));return false;"></a>
    <?php endif; ?>
    <div class="comment-form">
        <?php $form = ActiveForm::begin([
            'enableClientValidation' => false,
            'options' => [
                'id' => 'comment-form',
                'onsubmit' => 'sendForm(this, $("#btn-comment-save"), $("#form-comment-notification"), true); return false;',
            ],
        ]); ?>
        <?php if ($model->isNewRecord): ?>
            <?= $form->field($model, 'title')->textInput(['placeholder' => $model->attributeLabels()['title'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-comment-save']) ?>
            </div>
        <?php else: ?>
        <!--<div class="form-group" style="overflow: hidden;">
                <? /*= $this->renderAjax('_img_form', ['model' => $model]) */ ?>
            </div>-->
        <div class="form-group">
            <?=
            $form->field($model, 'product_id')->label(false)
                ->dropDownList(
                    ArrayHelper::map(\backend\models\Product::find()->all(), 'id', 'title'),
                    ['prompt' => 'Выберите Препарат']
                )
            ?>
        </div>
        <div class="form-group">
            <?= DatePicker::widget([
                'id' => 'date-comment',
                'name' => 'Comment[date]',
                'value' => '0000-00-00' == $model->date ? '' : $model->date,
                'options' => ['placeholder' => 'Дата',],
                'pluginOptions' => [
                    'format' => 'dd/mm/yyyy',
                    'autoclose' => true,
                ]
            ]); ?>
        </div>

    <?= $form->field($model, 'active')->hiddenInput()->label(false) ?>
        <p class="note-comments">* Обязательно ставить запятую, как в примере ниже</p>
    <?= $form->field($model, 'title')->textInput(['placeholder' => $model->attributeLabels()['title'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>

        <div class="form-group">
            <input id="radio-0" class="radio" type="radio" name="Comment[gender]"
                   value="0"<?php if (0 == $model->gender): ?> checked<?php endif; ?>>
            <label for="radio-0">Семья</label>
            <input id="radio-1" class="radio" type="radio" name="Comment[gender]"
                   value="1"<?php if (1 == $model->gender): ?> checked<?php endif; ?>>
            <label for="radio-1">Мужчина</label>
            <input id="radio-2" class="radio" type="radio" name="Comment[gender]"
                   value="2"<?php if (2 == $model->gender): ?> checked<?php endif; ?>>
            <label for="radio-2">Женщина</label>
            <br><br>
        </div>
        <?= $form->field($model, 'text')->textarea(['rows' => '6', 'placeholder' => $model->attributeLabels()['text'], 'class' => 'textarea'])->label(false) ?>

        <div class="form-group active col-md-3 padding-none-left">
            <label>Опубликовано</label>
            <input name="active" id="active" class="sw"
                   type="checkbox"<?php if (1 == $model->active): ?> checked<?php endif; ?>>
            <label class="switch" for="active"></label>
        </div>
        <div class="row"></div>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-comment-save']) ?>
        </div>
        <?php endif; ?>

        <?php ActiveForm::end(); ?>
        <div class="widget__content notification-wr" id="form-comment-notification"></div>
    </div>
    <script>
        $('#active, #hl').change(function () {
            var value = $(this).is(":checked") ? 1 : 0;
            $('#comment-' + this.id).val(value);
        });
        var removeBt = $('#remove-img');
        removeBt.on('click', function () {
            $.get('/comment/default/delete-img/<?= $model->id ?>', function (response) {
                if (response.action) {
                    removeBt.hide();
                    $(".comment-upload-img-small").attr({src: '<?= Yii::$app->params['frontUrl'] . $model->imageDir ?>without_photo.png'});
                } else {
                    showNotification("error", response.title, response.errors, $(".upload-notification-small"));
                }
            });
        });
        <?php if(empty($model->img_small)): ?>
        removeBt.hide();
        <?php endif; ?>
    </script>