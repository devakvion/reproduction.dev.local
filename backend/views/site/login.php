<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wrapper login-page">

    <div class="row mtop-100">
        <div class="col-md-4 col-md-offset-4 clearfix bg--dark">

            <div class="main-logo"><?= Yii::$app->name ?>  <span>BackOffice</span>
                <?php if (Yii::$app->session->hasFlash('success')): ?>
                    <p>
                        <?php echo Yii::$app->session->getFlash('success') ?>
                    </p>
                <?php elseif(Yii::$app->session->hasFlash('error')): ?>
                    <p>
                        <?php echo Yii::$app->session->getFlash('success') ?>
                    </p>
                <?php else: ?>
                <p><?= Yii::t('app', 'IF_FORGOTTEN_PASSWORD') ?> <a href="/site/request-password-reset"><?= Yii::t('app', 'CLICK_TO_RESET') ?></a></p>
                <?php endif; ?>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="pe-7f-user pe-fw"></i></span>
                <?= $form->field($model, 'username')->label(false)->textInput(['placeholder' => Yii::t('app', 'USERNAME_OR_EMAIL')]) ?>
            </div>
            <div class="input-group mtop-35">
                <span class="input-group-addon"><i class="pe-7f-lock pe-fw"></i></span>
                <?= $form->field($model, 'password')->label(false)->passwordInput(['placeholder' => Yii::t('app', 'PASSWORD')]) ?>
            </div>
            <div class="clearfix"></div>
            <?= Html::submitButton(Yii::t('app', 'LOGIN'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
