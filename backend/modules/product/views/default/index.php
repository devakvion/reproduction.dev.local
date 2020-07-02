<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->registerCssFile("/css/widearea.css");
$this->registerJsFile('/js/widearea.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<style type="text/css">
    #w0 label.switch {
        margin: 6px 0;
    }
</style>

<div id="items-list" class="widget">
    <!--<p class="form-group">
        <?/*= Html::a(Yii::t('app', 'BTN_ADD'), ['create'], ['class' => 'btn btn-skyblue', 'onclick' => 'getHtmlViaAjax(this, $("#content"));return false;']) */?>
    </p>-->
    <?php Pjax::begin(['id' => 'models', 'timeout' => false, 'enablePushState' => false]) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{items}{pager}",
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions' => ['style' => 'width:30px;'],
            ],
            //'date',
            'title',
            [
                'attribute' => 'Связи',
                'format' => 'raw',
                'value' => function ($model) {
                    $solutions = $model->getSolutions();
                    $tags = array_filter(explode(',', $model->tags));
                    $solutionsNames = '';
                    foreach($tags AS $t){
                        $solutionsNames .= $solutions[$t] . '<br>';
                    }
                    return '<p class="solutions-list">' . $solutionsNames . '</p>';
                    //return substr(str_replace(',', ', ', $model->tags), 2);
                },
            ],
            [
                'attribute' => 'Опубликованно',
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
        $.post('/product/default/update/' + id, {'Product[active]': active}, function (data) {
            if (true == data.save) {

            } else {
                var cheked = 1 == active ? false : true ;
                $('#active'+ id).prop('checked', cheked);
                alert('don\'t saved');
            }
        });
    }
</script>