<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use backend\models\Category;
use backend\models\Solution;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Faq */
/* @var $form yii\widgets\ActiveForm */
?>
<style type="text/css">
    #faq-form label.switch {
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
        <?= Html::a(Yii::t('app', 'BTN_BACK_TO_LIST'), ['/faq'], ['class' => 'btn btn-skyblue', 'onclick' => 'getHtmlViaAjax(this, $("#content"));return false;']) ?>
    </p>
    <?php if ($model->isNewRecord): ?>
        <a href="" id="faq-update" onclick="getHtmlViaAjax(this, $('#content'));return false;"></a>
    <?php endif; ?>
    <div class="faq-form">
        <?php $form = ActiveForm::begin([
            'enableClientValidation' => false,
            'options' => [
                'id' => 'faq-form',
                'onsubmit' => 'sendForm(this, $("#btn-faq-save"), $("#form-faq-notification"), true); return false;',
            ],
        ]); ?>
        <?php
        echo \vova07\imperavi\Widget::widget([
            'selector' => '#faq-text',
            'settings' => [
                'lang' => 'ru',
                'minHeight' => 200,
                'plugins' => [
                ]
            ]
        ]);
        ?>
        <?php if ($model->isNewRecord): ?>
            <?= $form->field($model, 'question')->textInput(['placeholder' => $model->attributeLabels()['question'], 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-faq-save']) ?>
            </div>
        <?php else: ?>
            <div class="form-group">
                <?=
                $form->field($model, 'product_id')->label(false)
                    ->dropDownList(
                        ArrayHelper::map(\backend\models\Product::find()->all(), 'id', 'title'),
                        ['prompt'=>'Выберите Препарат']
                    )
                ?>
            </div>

            <?= $form->field($model, 'question')->textarea(['rows' => '2', 'placeholder' => $model->attributeLabels()['question'], 'class' => 'textarea'])->label(false) ?>

            <?= $form->field($model, 'answer')->textarea(['rows' => '6', 'placeholder' => $model->attributeLabels()['answer'], 'class' => 'textarea'])->label(false) ?>

            <?= $form->field($model, 'tags')->hiddenInput()->label(false) ?>

            <!--<table id="solutions">
                <tr><th colspan="5" class="table-title">Связи</th></tr>
                <tr>
                    <?php
/*                    $tags = array_filter(explode(',', $model->tags));
                    $categories = Category::find()->orderBy('order DESC')->all();
                    $solutions = Solution::find()->orderBy('category_id ASC, order DESC')->all();
                    $categoriesId = [];
                    foreach ($categories AS $c):
                        $categoriesId[] = $c->id; */?>
                        <th><?/*= $c->title */?></th>
                    <?php /*endforeach; */?>
                </tr>
                <tr>
                    <?php /*foreach ($categoriesId AS $ci): */?>
                        <td>
                            <?php /*foreach ($solutions AS $s):
                                if ($s->category_id == $ci):*/?>
                                    <p><input id="chkbx-<?/*= $s->id */?>" class="checkbox" type="checkbox"<?php /*if (in_array($s->id, $tags)): */?> checked<?php /*endif; */?>>
                                <label for="chkbx-<?/*= $s->id */?>"><?/*= $s->title */?></label></p>
                                <?php
/*                            endif;
                            endforeach; */?>
                        </td>
                    <?php /*endforeach; */?>
                </tr>
            </table>-->
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
                <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-faq-save']) ?>
            </div>        <?php endif; ?>
        <?php ActiveForm::end(); ?>
        <div class="widget__content notification-wr" id="form-faq-notification"></div>
    </div>
</div>
<script>
    $('#active').change(function () {
        var value = $(this).is(":checked") ? 1 : 0;
        $('#faq-' + this.id).val(value);
    });
    $('#solutions .checkbox').on('change', function () {
        var tags = ',';
        $('#solutions .checkbox').each(function () {
            if ($(this).is(":checked")) tags += this.id.replace('chkbx-', '') + ',';
        });
        $('#faq-tags').val(tags);
    });
</script>