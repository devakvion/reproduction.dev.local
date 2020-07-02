<?php
$i = 0;
$products = yii\helpers\ArrayHelper::map(\backend\models\Product::find()->where(['active' => 1])->all(), 'slug', 'title', 'id');
foreach ($faqs AS $faq):
    if (empty($faq->product_id)) {
        $productSlug = $productName = false;
    } else {
        $productSlug = key($products[$faq->product_id]);
        $productName = $products[$faq->product_id][key($products[$faq->product_id])];
    }
    ?>
    <!--Item-->
    <article class="quest-more-wr">
        <?php if (($i++) % 2): ?>
        <div class="wr-quest-item bg-quest-b block-animate">
            <?php else: ?>
            <div class="wr-quest-item block-animate">
                <?php endif; ?>
                <div class="wr-content-quest">
                    <span class="quest-sp"></span>

                    <div class="top-quest">
                        <h4 class="t-quest"><?= $faq->question ?></h4>
                    </div>
                    <div class="con-quest">
                        <p class="p-quest">
                            <?= $faq->answer ?>
                        </p>
                    </div>
                </div>
                <div class="foot-quest">
                    <div class="wr-down-lite">
                        <span class="reproduction-down-lite"></span>
                    </div>
                    <a href="/nashi_produkty/<?= $productSlug ?>" class="tag-quest"><?= $productName ?><span
                            class="reproduction-tags-2"></span></a>
                </div>
            </div>
    </article>
<?php endforeach; ?>
<?php if (count($faqs) <= 0): ?>
    <div class="count-block block-animate">
        <h3 class="title-article-woman-sub">Задать вопрос?</h3>

        <p class="txt-article">
            По данному препарату <?php if(1 == $page): ?>вопросов еще не поступало<?php else: ?>больше вопросов нет<?php endif; ?>, если у вас есть вопрос, вы можете отправить его  <span class="modal-sp" data-remodal-target="modal">нам</span>
        </p>
    </div>
<?php endif; ?>

<script>
    <?php if($limit > count($faqs)): ?>
    $(btFaqsMore).text('Больше вопросов нет');
    btFaqsMoreOff = true;
    <?php else: ?>
    nextPage = <?= ++$page ?>;
    <?php endif; ?>
</script>
