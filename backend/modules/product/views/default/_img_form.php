<?php
use yii\helpers\Url;
use kartik\widgets\FileInput;

?>
<div class="client-img-form">
    <div class="col-md-6" style="overflow: hidden;">
        <h3 class="subtitle">Изображение</h3>

        <div class="form-group" id="product-img-wr">
            <?php $img = empty($model->img_big) ? 'n.jpg' : $model->id . '/' . $model->img_big; ?>
            <img src="<?= Yii::$app->params['frontUrl'] . $model->imageDir . $img ?>" class="product-upload-img"
                 style="max-height: 240px;">

            <div class="upload-notification"></div>
            <?= FileInput::widget([
                'model' => $model,
                'attribute' => 'img_big',
                'pluginOptions' => [
                    'uploadAsync' => false,
                    'uploadUrl' => Url::to(['/product/default/upload-img/' . $model->id . '?type=big']),
                    'showCaption' => false,
                    'showPreview' => false,
                    'allowedFileExtensions' => ['jpg', 'png', 'gif'],
                    'browseLabel' => 'Выбрать Изображение',
                ],
                'pluginEvents' => [
                    'fileloaded' => 'function() { $(".upload-notification").empty(); $(this).fileinput("upload"); }',
                    'fileuploaderror' => 'function() { showNotification("error", "Неверный формат изображения", "Допустимые типы изображений: jpg, png, gif", $(".upload-notification")); }',
                    'filebatchuploadsuccess' => 'function(event, data){ $("#product-img-wr .kv-upload-progress").addClass("hide"); $(".product-upload-img").attr({src:data.response}); }',
                ]

            ]); ?>
        </div>
    </div>

    <div class="col-md-6" style="overflow: hidden;">
        <h3 class="subtitle">Миниатюра</h3>

        <div class="form-group"id="product-img-small-wr">
            <?php $img = empty($model->img_small) ? 'n.jpg' : $model->id . '/' . $model->img_small; ?>
            <img src="<?= Yii::$app->params['frontUrl'] . $model->imageDir . $img ?>" class="product-upload-img-small"
                 style="max-height: 160px;">

            <div class="upload-notification-small"></div>
            <?= FileInput::widget([
                'model' => $model,
                'attribute' => 'img_small',
                'pluginOptions' => [
                    'uploadAsync' => false,
                    'uploadUrl' => Url::to(['/product/default/upload-img/' . $model->id . '?type=small']),
                    'showCaption' => false,
                    'showPreview' => false,
                    'allowedFileExtensions' => ['jpg', 'png', 'gif'],
                    'browseLabel' => 'Выбрать Миниатюру',
                ],
                'pluginEvents' => [
                    'fileloaded' => 'function() { $(".upload-notification-small").empty(); $(this).fileinput("upload"); }',
                    'fileuploaderror' => 'function() { showNotification("error", "Неверный формат изображения", "Допустимые типы изображений: jpg, png, gif", $(".upload-notification-small")); }',
                    'filebatchuploadsuccess' => 'function(event, data){ $("#product-img-small-wr .kv-upload-progress").addClass("hide"); $(".product-upload-img-small").attr({src:data.response}); }',
                ]

            ]); ?>
        </div>
    </div>
</div>