<header class="main-header clearfix">
    <h1 class="main-header__title">
        <i class="icon <?= $dirIcon ?>"></i>
        <?= $dirName ?>
    </h1>
</header>
<div class="widget" id="content-ajax"></div>
<div class="widget widget--tabbed">
    <?php if ($subDirs ): ?>
        <div class="tabs sub-dirs">
            <?php foreach ($subDirs AS $subDirUrl => $options):
                if($options['back']):?>
                <?php if ($subDir == $subDirUrl): ?>
                    <a class="tabs__tab active" href="/_dir/<?= $dir ?>/<?= $subDirUrl ?>"><?= $options['name'] ?></a>
                <?php else: ?>
                    <a class="tabs__tab" href="/_dir/<?= $dir ?>/<?= $subDirUrl ?>"><?= $options['name'] ?></a>
                <?php endif; ?>
            <?php
            endif;
            endforeach; ?>
        </div>
        <div class="tabs__content" id="content"><?=$content?></div>
    <?php else: ?>
        <div class="widget__content" id="content"><?=$content?></div>
    <?php endif; ?>
</div>
