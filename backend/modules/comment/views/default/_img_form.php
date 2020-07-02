<?php
use yii\helpers\Url;
use kartik\widgets\FileInput;

/* @var $model backend\models\Comment */
?>
<div class="client-img-form">

    <div class="col-md-12 padding-none-left" style="overflow: hidden;">

        <div class="form-group">
            <?php $img = empty($model->img_small) ? 'without_photo.png' : $model->id . '/' . $model->img_small; ?>
            <img src="<?= Yii::$app->params['frontUrl'] . $model->imageDir . $img ?>" class="comment-upload-img-small"
                 style="max-height: 90px; margin-left: 40px;">

            <div class="upload-notification-small"></div>
            <?= FileInput::widget([
                'model' => $model,
                'attribute' => 'img_small',
                'pluginOptions' => [
                    'uploadAsync' => false,
                    'uploadUrl' => Url::to(['/comment/default/upload-img/' . $model->id . '?type=small']),
                    'showCaption' => false,
                    'showPreview' => false,
                    'allowedFileExtensions' => ['jpg', 'png', 'gif'],
                    'browseLabel' => 'Загрузить фотографию',
                ],
                'pluginEvents' => [
                    'fileloaded' => 'function() { $(".upload-notification-small").empty(); $(this).fileinput("upload"); }',
                    'fileuploaderror' => 'function() { showNotification("error", "Неверный формат изображения", "Допустимые типы изображений: jpg, png, gif", $(".upload-notification-small")); }',
                    'filebatchuploadsuccess' => 'function(event, data){ $(".comment-upload-img-small").attr({src:data.response}); removeBt.show(); }',
                ]

            ]); ?>
            <button id="remove-img" class="btn btn-default" type="button"><i class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Удалить</span></button>
        </div>
    </div>
</div>