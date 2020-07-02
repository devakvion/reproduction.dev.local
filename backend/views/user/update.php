<?php

?>

<header class="main-header clearfix">
    <h1 class="main-header__title">
        <i class="icon pe-7f-study"></i>
        <?= Yii::t('app', 'ADMINISTRATORS') ?>
    </h1>
</header>
<div id="user-list">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
</div>