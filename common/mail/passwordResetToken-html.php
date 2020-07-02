<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<div class="password-reset">
    <p><?= Yii::t('app', 'HELLO') ?> <?= Html::encode($user->username) ?>,</p>

    <p><?= Yii::t('app', 'FOLLOW_LINK_RESET_PASSWORD') ?>:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>
