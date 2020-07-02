<?php
/* @var $this yii\web\View */
$this->title = $name;

use yii\helpers\Html;
?>
<!-- Header
================================================== -->
<header class="videos-page-header" style="background-image: url('/img/error-page/header.jpg')">
</header>
<!-- End Header
================================================== -->
<!-- Block Video Title
================================================== -->
<section id="error-page" class="section-skew bg-site-grey">
    <div class="container container-block-1">
        <div class="breadcrumb-wr">
            <p class="article-breadcrumb color-navy-blue"><span
                    class="circular-breadcrumb"></span>Error page / <?= Html::encode($this->title) ?></p>
        </div>
        <div class="divider"></div>
        <h3 class="article-title color-navy-blue"><?= nl2br(Html::encode($message)); ?></h3>
        <div class="alert alert-danger" style="margin-top: 50px">
            <p>
                <?= Yii::t('app', 'The above error occurred while the Web server was processing your request') ?>.
            </p>
            <p>
                <?= Yii::t('app', 'Please contact us if you think this is a server error. Thank you.') ?>
            </p>
        </div>
    </div>
</section>
<!-- End Block Video Title
================================================== -->

