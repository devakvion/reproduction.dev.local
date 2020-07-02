<?php
$items = [];
foreach ($model AS $m) {
    ob_start(); ?>
        <div class="picture">
            <div class="l-art-img">
                <img class="full-img transition-all-ease"
                     src="<?= $m->imageDir . $m->id . '/' . $m->img_big ?>"
                     alt="<?= $m->title ?>">
                <div class="wr-btn-art">
                    <a class="art-btn vertical-center" href="/statyi/<?= $m->slug ?>">Перейти
                    </a>
                </div>
            </div>
            <div class="r-art-txt txt-center position-relative">

                <div class="txt-left">
                    <a href="/statyi/<?= $m->slug ?>">
                        <h2 class="after-line h-art"><?= $m->title ?></h2>
                    </a>

                    <p><?= $m->lead ?></p>
                </div>
                <div class="data-art">
                    <span class="date-nws"><?= $m->date ?></span>
                    <span class="tlt-item-art"><?= $m->types[$m->type] ?></span>
                </div>
            </div>
        </div>
    <?php
    $items[] = ob_get_contents();
    ob_end_clean();
}
echo json_encode($items);
?>