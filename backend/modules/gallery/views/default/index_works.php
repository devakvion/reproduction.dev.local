<?php
use yii\helpers\Url;
use kartik\widgets\FileInput;
use kartik\sortable\Sortable;
use kartik\popover\PopoverX;
use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<style type="text/css">
    .gallery-item {
        overflow: visible;
    }
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
                'filebatchuploadsuccess' => 'function(event, data, previewId, index){ location.reload(); }',
                'fileuploaderror' => 'function() { $("#gallery-upload-notification").empty(); showNotification("error", "Неверный формат изображения", "Разрешённые форматы изображений: jpg, png, gif", $("#gallery-upload-notification")); }',
            ]

        ]); ?>
    </div>
<div class="note-gallery-jewelry">* можно менять очередность вывода изображений, кликнув на картинку и не отпуская переместить в нужное место</div>
    <?php
    $items = [];
    $imgDir = \Yii::$app->params['frontUrl'] . $model->imageDir . $pid . '/';
    foreach ($gallery AS $g) {
        $items[] = ['content' => '<div class="gallery-item" id="gallery-item' . $g->id . '">
            <div class="widget__config">
                <a href="" onclick="removeGalleryItem($(this) , \'/gallery/default/remove-img/' . $g->id . '\', ' . $g->id . '); return false;"><i class="pe-7s-close remove"></i></a>
            </div>
            <img src="' . $imgDir . $g->img . '">
            <div>' . PopoverX::widget([
                'header' => 'Ссылка на Etsy',
                'placement' => PopoverX::ALIGN_TOP,
                'content' => '<input type="text" maxlength="255" value="' . $g->link . '" class="input-text" id="link-' . $g->id . '">',
                'footer' => Html::button(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btLinkSave' . $g->id, 'onclick' => 'linkSave(' . $g->id . ')']),
                'toggleButton' => ['label' => 'Ссылка на Etsy', 'class' => 'btn btn-skyblue', 'onclick' => 'jQuery("#gallery-list").sortable(\'disable\')'],
            ]) . '</div>
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

<script>
    function linkSave(id) {
        var btn = $('#btLinkSave' + id);
        loaderShow(btn);
        $.ajax({
            url: '/gallery/default/save-link/' + id,
            type: 'post',
            data: {link:$('#link-' + id).val()},
            beforeSend: function() {
                sendInProcess = true;
            },
            success: function (data) {
                loaderHide(btn);
                console.log(data);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                loaderHide(btn);
                alert("Error: " + errorThrown);
            }
        });
        return false;
    }
</script>
<?php
$this->registerJs(
    '$(".popover-title .close").click(function(){ jQuery("#gallery-list").sortable(\'enable\'); });'
);
?>