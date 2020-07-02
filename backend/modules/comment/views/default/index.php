<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<style type="text/css">
    #w0 label.switch {
        margin: 6px 0;
    }
</style>
<div id="items-list" class="widget">
    <p class="form-group">
        <?= Html::a(Yii::t('app', 'BTN_ADD'), ['create'], ['class' => 'btn btn-skyblue', 'onclick' => 'getHtmlViaAjax(this, $("#content"));return false;']) ?>
    </p>
    <?php Pjax::begin(['id' => 'models', 'timeout' => false, 'enablePushState' => false]) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{items}{pager}",
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions' => ['style' => 'width:30px;'],
            ],
            'date',
            /*[
                'contentOptions' => ['style' => 'width:120px; text-align: center;'],
                'attribute' => 'Фотогафия',
                'format' => 'raw',
                'value' => function ($model) {
                    $img = empty($model->img_small) ? 'without_photo.png' : $model->id . '/' . $model->img_small;
                    return '<img src="' . Yii::$app->params['frontUrl'] . $model->imageDir . $img . '" style="height:60px; border-radius: 5px;">';
                },
            ],*/
            'title',
            [
                'attribute' => 'Пол',
                'format' => 'raw',
                'value' => function ($model) {
                    $genders = ['Семья', 'Мужчина', 'Женщина'];
                    return $genders[$model->gender];
                },
            ],
            [
                'attribute' => 'Продукт',
                'format' => 'raw',
                'value' => function ($model) {
                    if (empty($model->product_id)) {
                        return '';
                    } else {
                        $products = ArrayHelper::map(\backend\models\Product::find()->all(), 'id', 'title');
                        return $products[$model->product_id];
                    }
                },
            ],
            [
                'contentOptions' => ['style' => 'width:90px;'],
                'attribute' => 'Опубликовано',
                'format' => 'raw',
                'value' => function ($model) {
                    $checked = 1 == $model->active ? ' checked' : '';
                    return '<input onchange="setActive(' . $model->id . ', this.checked)" id="active' . $model->id . '" class="sw" type="checkbox"' . $checked . '><label class="switch" for="active' . $model->id . '"></label>';
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:60px; text-align: center;'],
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => Yii::t('yii', 'Update'),
                            'onclick' => 'getHtmlViaAjax(this, $("#content"));return false;'
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title' => Yii::t('yii', 'Delete'),
                            'data-pjax' => 'w0',
                            'onclick' => 'return confirm(\'' . Yii::t('yii', 'Are you sure you want to delete selected items?') . '\')',
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>
    <?php Pjax::end() ?>
</div>

<script>
    function setActive(id, value) {
        var active = value ? 1 : 0;
        $.post('/comment/default/update/' + id, {'Comment[active]': active}, function (data) {
            if (true == data.save) {

            } else {
                var cheked = 1 == active ? false : true;
                $('#active' + id).prop('checked', cheked);
                alert('don\'t saved');
            }
        });
    }
</script>
