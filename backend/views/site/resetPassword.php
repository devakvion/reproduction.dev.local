<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wrapper login-page">

    <div class="row mtop-100">
        <div class="col-md-4 col-md-offset-4 clearfix bg--dark">

            <div class="main-logo"><?= Yii::$app->name ?> <span>BackOffice</span>
                <p><?= Yii::t('app', 'CHOOSE_NEW_PASSWORD') ?></p></div>
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="pe-7f-lock"></i></span>
                <?= $form->field($model, 'password')->label(false)->passwordInput(['placeholder' => Yii::t('app', 'PASSWORD')]) ?>
            </div>
            <div class="clearfix"></div>
            <?= Html::submitButton(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>