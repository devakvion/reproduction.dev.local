<div
    style="max-width: 1000px; background-color: #ffffff; text-align: center; padding: 40px; margin: auto; position: relative; overflow: hidden;">
    <div id="left" style="float: left; width: 60%;">
        <h1>#<?= $model->id . ', ' . $model->title ?></h1>

        <img src="/img/masonry/_<?= $model->id ?>.jpg" style="width: 100%;">

        <p><?= $model->description ?></p>

        <p>Tag: <?= $model->tag ?></p>
    </div>
    <div id="right" style="float: left; width: 35%; padding-left: 5%">
        <?php
        for ($i = 1; $i < 16; $i++) {
           if($i != $model->id) echo '<div class="modal-item" style="float: left; width: 120px; height: 120px; overflow: hidden; position: relative;"><a class="modal-link" href="/site/modal?id=' . $i . '"><img style="width: 100%;" src="/img/masonry/_' . $i . '.jpg" alt=""/></a></div>';
        }
        ?>
    </div>

    <button title="close" class="mfp-close"><i class="mfp-close-icn">&times;</i></button>
</div>
<script>
    $('.modal-link').click(function() {
        $('.mfp-content').load(this.href);
        return false;
    });
</script>