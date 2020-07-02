<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\sortable\Sortable;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<style type="text/css">
</style>

<div id="items-list" class="widget">
    <?php Pjax::begin(['id' => 'models', 'timeout' => false, 'enablePushState' => false]) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{items}{pager}",
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions' => ['style' => 'width:30px;'],
            ],
            [
                'attribute' => 'Категория',
                'format' => 'raw',
                'value' => function ($model) {
                    $categories = ['home' => 'Общее', 'solution' => 'Что вас беспокоит?', 'article' => 'Статьи', 'specialist' => 'Специалисты', 'news' => 'Новости', 'comment' => 'Отзывы',
                        'faq' => 'Вопрос-Ответ', 'product' => 'Наши продукты', 'pharmacy' => 'Где купить?',
                        'search' => 'Поиск', 'contact' => 'Контакты', 'error' => 'Данная страница не найдена'];
                    return $categories[$model->table_name];
                },
            ],
            'table_id',
            'title',
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:60px; text-align: center;'],
                'template' => '{update}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => Yii::t('yii', 'Update'),
                            'onclick' => 'getHtmlViaAjax(this, $("#content"));return false;'
                        ]);
                    },
                ]
            ],
        ],
    ]); ?>
    <?php Pjax::end() ?>
</div>
