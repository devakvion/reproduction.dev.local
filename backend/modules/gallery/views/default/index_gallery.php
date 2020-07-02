<?php
use yii\helpers\Url;
use kartik\widgets\FileInput;
use kartik\sortable\Sortable;

/* @var $this yii\web\View */
?>
<style type="text/css">
    .fileinput-remove, .fileinput-upload-button {
        display: none;
    }
</style>
<div class="gallery-img-form form-group gallery-jewelry">
    <div style="overflow: hidden;">

        <div id="gallery-upload-notification"></div>
        <?= FileInput::widget([
            'model' => $model,
            'attribute' => 'img[]',
            'options' => ['multiple' => true],
            'pluginOptions' => [
                'uploadUrl' => Url::to(['/gallery/default/upload-img/' . $pid]),
                'uploadAsync' => true,
                'maxFileCount' => 50,
                'showCaption' => false,
                'showPreview' => false,
                'allowedFileExtensions' => ['jpg', 'png', 'gif'],
                'browseLabel' => 'Добавить изображения',
            ],
            'pluginEvents' => [
                'fileloaded' => 'function() { $("#gallery-upload-notification").empty(); $(this).fileinput("upload"); }',
                'filebatchuploadsuccess' => 'function(event, data, previewId, index){ addItemsToGallery(data.response); }',
                'fileuploaderror' => 'function() { $("#gallery-upload-notification").empty(); showNotification("error", "Неверный формат изображения", "Разрешённые форматы изображений: jpg, png, gif", $("#gallery-upload-notification")); }',
            ]

        ]); ?>
    </div>
    <div class="note-gallery-jewelry">* можно менять очередность вывода изображений, кликнув на картинку и не отпуская переместить в нужное место</div>

    <?php
    $items = [];
    $imgDir = \Yii::$app->params['frontUrl'] . $model->imageDir . $pid . '/';
    foreach ($gallery AS $g) {
        $items[] = ['content' => '<div class="gallery-item gallery-about" id="gallery-item' . $g->id . '">
            <div class="widget__config">
                <a href="" onclick="removeGalleryItem($(this) , \'/gallery/default/remove-img/' . $g->id . '\', ' . $g->id . '); return false;"><i class="pe-7s-close remove"></i></a>
            </div>
            <img src="' . $imgDir . $g->img . '">
        </div>'];
    };
    echo Sortable::widget([
        'id' => 'gallery-list',
        'type' => 'grid',
        'items' => $items,
        'pluginEvents' => [
            'sortupdate' => 'function(e, ui) { setOrderItemsGallery("/gallery/default/set-order"); }',
        ]
    ]);
    ?>
</div>