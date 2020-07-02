<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Seo */
/* @var $form yii\widgets\ActiveForm */
?>
<style type="text/css">
    #seo-form label.switch {
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

    .seo-form label {
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>

<div id="items-list" class="widget">

    <p class="form-group">
        <?= Html::a(Yii::t('app', 'BTN_BACK_TO_LIST'), ['/seo'], ['class' => 'btn btn-skyblue', 'onclick' => 'getHtmlViaAjax(this, $("#content"));return false;']) ?>
    </p>
    <?php if ($model->isNewRecord): ?>
        <a href="" id="seo-update" onclick="getHtmlViaAjax(this, $('#content'));return false;"></a>
    <?php endif; ?>
    <div class="seo-form">
        <?php $form = ActiveForm::begin([
            'enableClientValidation' => false,
            'options' => [
                'id' => 'seo-form',
                'onsubmit' => 'sendForm(this, $("#btn-seo-save"), $("#form-seo-notification"), true); return false;',
            ],
        ]); ?>

        <?= $form->field($model, 'title')->textInput(['placeholder' => $model->attributeLabels()['title'], 'maxlength' => true, 'class' => 'input-text']) ?>

        <?= $form->field($model, 'keywords')->textarea(['rows' => '4', 'placeholder' => $model->attributeLabels()['keywords'], 'class' => 'textarea']) ?>

        <?= $form->field($model, 'description')->textarea(['rows' => '4', 'placeholder' => $model->attributeLabels()['description'], 'class' => 'textarea']) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-seo-save']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        <div class="widget__content notification-wr" id="form-seo-notification"></div>
    </div>
</div>
