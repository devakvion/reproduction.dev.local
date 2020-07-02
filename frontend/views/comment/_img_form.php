<?php
use yii\helpers\Url;
use kartik\widgets\FileInput;

/* @var $model backend\models\Comment */
?>
<div class="client-img-form">

    <div class="col-md-12 padding-none-left" style="overflow: hidden;">

        <div class="form-group">
            <img src="<?= $model->imageDir ?>without_photo.png" class="comment-upload-img-small">

            <div class="upload-notification-small"></div>
            <?= FileInput::widget([
                'model' => $model,
                'attribute' => 'img_small',
                'pluginOptions' => [
                    'uploadAsync' => false,
                    'uploadUrl' => Url::to(['comment/upload-img']),
                    'showCaption' => false,
                    'showPreview' => false,
                    'allowedFileExtensions' => ['jpg', 'png', 'gif'],
                    'browseLabel' => 'Загрузить фотографию',
                ],
                'pluginEvents' => [
                    'fileloaded' => 'function() { $(".upload-notification-small").empty(); $(this).fileinput("upload"); }',
                    'fileuploaderror' => 'function() { $(".upload-notification-small").html("Допустимые типы изображений: jpg, png, gif"); }',
                    'filebatchuploadsuccess' => 'function(event, data){ $(".comment-upload-img-small").attr({src:data.response}); removeBt.show(); }',
                ]

            ]); ?>
            <button id="remove-img" class="btn btn-default" type="button"><i class="glyphicon glyphicon-trash"></i>
                <span class="hidden-xs">Удалить</span></button>
        </div>
    </div>
</div>