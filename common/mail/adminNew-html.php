<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$backLink = Yii::$app->urlManager->createAbsoluteUrl(['site/login']);
?>
<div class="password-reset">
    <p>Olá <?= Html::encode($user->username) ?>,</p>

    <p>As suas credenciais para <?=Html::encode(Yii::$app->name)?>:</p>
    <p>Username: <?=$user->username?></p>
    <p>Password: <?=$password?></p>
    <p><?= Html::a(Html::encode($backLink), $backLink) ?></p>
</div>
