<?= yii\base\View::render('_' . $model->path, ['model' => $model, 'content' => $content]); ?>
<?/*= yii\base\View::render('@frontend/views/site/_pregnoton_mama'); */?>
<?php
$script = <<< JS
$(function () {
 function setPadIconDr(){
 $('.title-icon-problem').each(function () {
        var that = $(this);
        var w = that.width() / 2;
        that.css('margin-left', -w  +"px");
    });
 }
$(window).on("resize", function () {
setPadIconDr();
}).trigger('resize');
});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
<?php
//$this->registerJsFile('/js/viewport-checker/dist/jquery.viewportchecker.min.js', ['depends' => 'frontend\assets\AppAsset', 'defer' => 'defer']);
?>