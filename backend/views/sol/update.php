<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Solution */

$this->title = 'Update Solution: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Solutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solution-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
