<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wrapper login-page">

    <div class="row mtop-100">
        <div class="col-md-4 col-md-offset-4 clearfix bg--dark">

            <div class="main-logo"><?= Yii::$app->name ?>  <span>BackOffice</span>
            <p><?= Yii::t('app', 'LINK_TO_RESET_WILL_SENDED') ?></p></div>
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="pe-7f-mail"></i></span>
                <?= $form->field($model, 'email')->label(false)->textInput(['placeholder' => 'E-mail']) ?>
            </div>
            <div class="clearfix"></div>
            <?= Html::submitButton(Yii::t('app', 'SEND'), ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>

