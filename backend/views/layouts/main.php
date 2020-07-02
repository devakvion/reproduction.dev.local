<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?> BackOffice</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<?php if (\Yii::$app->user->isGuest): ?>
    <?= $content ?>
<?php else: ?>
    <header class="top-bar">
        <div class="main-logo"><?= Yii::$app->name ?> <span>BackOffice</span></div>
        <ul class="profile">
            <li class="profile__date">
                <i class="icon pe-7s-date"></i>
                <span><?= Yii::$app->formatter->asDate(time(), 'MMMM dd, yyyy') ?></span>
            </li>
            <li>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" onclick="return false;"
                   class="profile__user">
                    <figure class="pull-left rounded-image profile__img">
                        <img class="media-object" src="/img/admin_icon.png" alt="user" style="height: 100%;">
                    </figure>
					<span class="profile__name">
                        <?php
                        $names = explode(' ', Yii::$app->user->identity->username);
                        if (1 < count($names)) {
                            end($names);
                            echo $names[0] . ' <span>' . $names[key($names)] . '</span>';
                        } else echo $names[0];
                        ?>
                        <i class="pe-7s-angle-down"></i>
					</span>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="/user/update/?id=<?= Yii::$app->user->id ?>"><i class="icon pe-7s-info pe-fw"></i>
                            <?= Yii::t('app', 'NAV_EDIT_PROFILE') ?></a></li>
                    <li><a href="<?= Url::toRoute('/site/logout') ?>"><i
                                class="icon pe-7s-close-circle pe-fw"></i> <?= Yii::t('app', 'NAV_LOGOUT') ?></a></li>
                </ul>
            </li>

        </ul>

    </header>
    <div class="wrapper">

        <aside class="sidebar">
            <ul class="main-nav">
                <?php foreach (Yii::$app->params['dirs'] AS $dir => $dirOptions):
                    if ($dirOptions['back']):?>
                        <?php if (isset($dirOptions['subDirs'])): ?>
                            <li class="main-nav--collapsible">
                                <a class="main-nav__link subdirs">
                                    <span class="main-nav__icon"><i class="icon <?= $dirOptions['icon'] ?>"></i></span>
                                    <?= $dirOptions['name'] ?>
                                </a>
                                <ul class="main-nav__submenu">
                                    <?php foreach ($dirOptions['subDirs'] AS $subDir => $subDirOptions):
                                        if ($subDirOptions['back']):?>
                                            <li>
                                                <a href="/_dir/<?= $dir ?>/<?= $subDir ?>"><span><?= $subDirOptions['name'] ?></span></a>
                                            </li>
                                            <?php
                                        endif;
                                    endforeach; ?>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li>
                                <a class="main-nav__link" href="/_dir/<?= $dir ?>">
                                    <span class="main-nav__icon"><i class="icon  <?= $dirOptions['icon'] ?>"></i></span>
                                    <?= $dirOptions['name'] ?>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php
                    endif;
                endforeach; ?>
                <li>
                    <a class="main-nav__link" href="/user">
                        <span class="main-nav__icon"><i class="icon pe-7f-study"></i></span>
                        <?= Yii::t('app', 'ADMINISTRATORS') ?>
                    </a>
                </li>
            </ul>
        </aside>

        <section class="content">
            <?= $content ?>
        </section>

        <footer class="main-footer">
            <a class="back-top" href="#"><i class="pe-7s-angle-up-circle"></i></a>
        </footer>
    </div>
<?php endif; ?>
<img src="/img/loader.gif" class="loader-img">
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
