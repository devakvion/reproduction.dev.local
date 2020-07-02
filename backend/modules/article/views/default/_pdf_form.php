<?php
use yii\helpers\Url;
use kartik\widgets\FileInput;

/* @var $model backend\models\Article */
?>
    <div class="client-img-form" id="info-pdf">
        <div style="overflow: hidden;">

            <div class="form-group" style="position: relative;">

                <div id="pdf-upload" class="upload-notification"></div>
                <?= FileInput::widget([
                    'model' => $model,
                    'attribute' => 'pdf',
                    'pluginOptions' => [
                        'uploadUrl' => Url::to(['/article/default/upload-pdf/' . $model->id]),
                        'showCaption' => false,
                        'showPreview' => false,
                        'allowedFileExtensions' => ['pdf',],
                        'browseLabel' => 'Выбрать файл pdf',
                    ],
                    'pluginEvents' => [
                        'fileloaded' => 'function() { $(".upload-notification").empty(); $(this).fileinput("upload"); }',
                        'fileuploaderror' => 'function() { showNotification("error", "Неверный формат изображения", "Допустимые типы изображений: pdf", $("#pdf-upload")); }',
                        'fileuploaded' => 'function(event, data){ $(".kv-upload-progress").addClass("hide"); $("#del-info-pdf-btn, #show-info-pdf-btn").removeClass("hidden"); $("#show-info-pdf-btn").attr({href:data.response.href}) }',
                    ]

                ]); ?>
                <div class="pdf-wr" style="position: absolute; top: 0; left: 200px;">
                    <button id="del-info-pdf-btn" class="btn btn-default hidden" type="button" onclick="deleteInfoPdf();"><i
                            class="glyphicon glyphicon-trash"></i> Удалить файл
                    </button>
                    <a id="show-info-pdf-btn" class="btn btn-default hidden"
                       href="<?= Yii::$app->params['frontUrl'] . $model->imageDir . $model->id . '/' . $model->pdf ?>"
                       target="_blank"><i class="glyphicon glyphicon-upload"></i> Открыть файл</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        <?php if (!empty($model->pdf)): ?>
        $('#del-info-pdf-btn, #show-info-pdf-btn').removeClass('hidden');
        <?php endif; ?>
        function deleteInfoPdf(){
            var btn = $('#del-info-pdf-btn');
            $.ajax({
                url: '/article/default/delete-pdf/<?= $model->id ?>',
                type: 'get',
                beforeSend: function() {
                    loaderShow(btn);
                },
                success: function (data) {
                    loaderHide(btn);
                    if(true == data){
                        $('#del-info-pdf-btn, #show-info-pdf-btn').addClass('hidden');
                    } else {
                        alert(data);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    loaderHide(btn);
                    alert("Error: " + errorThrown);
                }
            });
        };
    </script>
