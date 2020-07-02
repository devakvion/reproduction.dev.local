<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<?= Yii::t('app', 'HELLO') ?> <?= $user->username ?>,

<?= Yii::t('app', 'FOLLOW_LINK_RESET_PASSWORD') ?>:

<?= $resetLink ?>
