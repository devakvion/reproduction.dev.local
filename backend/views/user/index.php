<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <header class="main-header clearfix">
        <h1 class="main-header__title">
            <i class="icon pe-7f-study"></i>
            <?= Yii::t('app', 'ADMINISTRATORS') ?> </h1>
    </header>
    <div class="widget widget__content" id="user-list">
        <p>
            <?= Html::a(Yii::t('app', 'ADD_ADMINISTRATOR'), ['create'], ['class' => 'btn btn-skyblue']) ?>
        </p>
        <?php if (Yii::$app->session->hasFlash('super_admin')): ?>

            <div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                <div class="media">
                    <figure class="pull-left alert--icon"><i class="pe-7s-close-circle"></i></figure>
                    <div class="media-body"><h3 class="alert--title">Erro de eliminar o administrador</h3>

                        <p class="alert--text"><?= Yii::$app->session->getFlash('super_admin') ?><br></p></div>
                </div>
            </div>
        <?php endif; ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'layout' => "{items}{pager}",
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                    'contentOptions' => ['style' => 'width:30px;'],
                ],

                //'id',
                'username',
                //'auth_key',
                //'password_hash',
                //'password_reset_token',
                // 'email:email',
                // 'status',
                // 'role',
                // 'created_at',
                // 'updated_at',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} {delete}',
                    'contentOptions' => ['style' => 'width:60px;'],
                ],
            ],
        ]); ?>
    </div>
</div>
