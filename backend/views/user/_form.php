<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="widget">
    <?php if(User::isUserSuperAdmin(Yii::$app->user->identity->username)): ?>
    <p>
        <?= Html::a(Yii::t('app', 'BTN_BACK_TO_LIST'), ['/user'], ['class' => 'btn btn-skyblue']) ?>
    </p>
    <?php endif; ?>
    <div class="user-form">

        <?php $form = ActiveForm::begin([
            'enableClientValidation' => false,
            'options' => [
                'id' => 'user-form',
                'onsubmit' => 'sendForm(this, $("#btn-user-save"), $("#form-user-notification"), true); return false;',
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username', 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail', 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>
        <?= $form->field($model, 'password')->textInput(['placeholder' => 'Password', 'maxlength' => true, 'class' => 'input-text'])->label(false) ?>



        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btn-user-save']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        <div class="widget__content notification-wr" id="form-user-notification"></div>

    </div>
</div>