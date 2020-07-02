<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $user common\models\User */

$backLink = Yii::$app->urlManager->createAbsoluteUrl(['site/login']);
?>
Olá <?= Html::encode($user->username) ?>,

As suas credenciais para <?=Html::encode(Yii::$app->name)?>:
Username: <?=$user->username?>
Password: <?=$password?>
<?= Html::a(Html::encode($backLink), $backLink) ?>

<?= $backLink ?>
