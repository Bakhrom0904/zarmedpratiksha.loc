<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;

?>
<section class="banner-main pb-0">
    <div class="banner-content">
        <div class="slider banner-slider">
            <?php foreach ($items as $item) { ?>
                <div class="h2-slider-list" style="background-image: url(<?= $item->img ?>);">
                    <!-- <div class="main-slide-image" style="background-image: url(<?= $item->img ?>);"></div> -->
                    <div class="container">
                        <div class="slide-contain">
                            <h1 class="cl-white mt-2 wow fadeInDown"><?= $item->title ?></h1>
                            <p><?= $item->description ?></p>
                            <div class="slide-btn mt-4">
                                <a href="<?=Url::to(['contact'])?>" class="btn bg-white text-blue"><?= Lx::t('frontend', 'Get Started') ?></a>
                            </di v>
                        </div>
                    </div>
                    <div class="overlay-banner"></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>