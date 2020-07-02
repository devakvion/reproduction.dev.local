<?php
use frontend\assets\AppAssetWoman;
use frontend\assets\AppAssetMan;
use frontend\assets\AppAssetManWoman;
if($category->path == "zhenskoe_zdorovie"){
    AppAssetWoman::register($this);
}
if($category->path == "muzhskoe_zdorovie"){
    AppAssetMan::register($this);
}
if(($category->path == "zdorovie_semejnoj_pary") || ($category->path == "vozrastnye_izmenenija")){
    AppAssetManWoman::register($this);
}
?>
<?= yii\base\View::render($category->path . '/' . $problem->path,['category'=>$category,'problem'=>$problem, 'content' => $content]); ?>

