<?php
$products = yii\helpers\ArrayHelper::map(\backend\models\Product::find()->where(['active' => 1])->all(), 'slug', 'title', 'id');
$productsDrop = [];
foreach ($products AS $product) {
    $productName = $product[key($product)];
    $productsDrop[$productName] = $productName;
}
$i = 0;
$gendersIcon = ['family', 'man', 'woman'];
foreach ($comments AS $comment):
    $gendersIcon = ['family', 'man', 'woman'];
    $img = 'user-' . $gendersIcon[$comment->gender] . '.png';

    if (empty($comment->product_id)) {
        $productSlug = $productName = false;
    } else {
        $productSlug = key($products[$comment->product_id]);
        $productName = $products[$comment->product_id][key($products[$comment->product_id])];
    }
    ?>
    <article class="comment block-animate">
        <div class="comment-img">
            <img class="user-<?= $gendersIcon[$comment->gender] ?>" src="/img/review/<?= $img ?>"
                 alt="<?= $comment->title ?>">
        </div>

        <div class="comment-body">
            <?php if (($i++) % 2): ?>
            <div class="text text-bg-c">
                <?php else: ?>
                <div class="text">
                    <?php endif; ?>
                    <?php if ($productSlug): ?>
                        <a class="comment-title" href="/nashi_produkty/<?= $productSlug ?>">
                            <img alt="<?= $productName ?>"
                                 src="/img/drugs/drugs_logo/retina/<?= $productSlug ?>_logo.png"
                                 data-device-pixel-ratio-1.5="/img/drugs/drugs_logo/retina/<?= $productSlug ?>_logo.png"
                                 class="<?= $productSlug ?>-com-img">
                            <span><?= $productName ?></span>
                        </a>
                    <?php endif; ?>
                    <i class="reproduction-quotes-2"></i>

                    <p class="review-p">
                        <?= $comment->text ?>
                    </p>
                    <i class="reproduction-quotes"></i>
                </div>

                <p class="attribution"><span
                        class="comment-name"><?= str_replace(',', ',</span> <span>', $comment->title) ?></span><span
                        class="comment-date"><?= $comment->date ?></span></p>
            </div>
    </article>
<?php endforeach; ?>
<script>
  var controllerAnimatSection = new ScrollMagic.Controller();

  $(".block-animate").each(function (index, elem) {
    new ScrollMagic.Scene({
      triggerElement: elem,
      triggerHook: 0.85,
      reverse: false
    }).on('start', function () {
      $(elem).addClass('visible');


    }).addTo(controllerAnimatSection);
  });
</script>
