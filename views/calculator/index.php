<?php
use yii\helpers\Url;

$this->title = Yii::t('app','calculate_effect');
?>
<!-- PAGE -->
<section id="page" class="page page__payback">

        <div class="page__inner">
                <!-- breadcrumbs -->
                <div class="breadcrumbs is-slideInLeft is-animated">
                <ol class="breadcrumbs__list">
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= Url::to(['/']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','main') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= Yii::t('app','calculate_effect') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::t('app','calculate_effect') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <div class="page__content">
                        <!-- b-banners -->
                        <div class="b-banners__wrapper b-payback__banners">
                                <div class="b-banner b-banner-1 left is-fadeIn is-animated">
                                        <div class="b-banner__photo">
                                                <img src="/images/payback/b-1.jpg" alt="">
                                        </div>
                                        <div class="b-banner__content">
                                                <a href="" class="b-banner__title is-fadeIn is-animated" data-modal="paybackBusiness">
                                                        <span class="is-slideInUp is-animated"><?= Yii::t('app','business-a') ?></span>
                                                </a>
                                        </div>
                                </div>

                                <div class="b-banner b-banner-2 right is-fadeIn is-animated">
                                        <div class="b-banner__content">
                                                <a href="" class="b-banner__title is-fadeIn is-animated" data-modal="paybackCosmetics">
                                                        <span class="is-slideInUp is-animated"><?= Yii::t('app','cosmetic-i') ?></span>
                                                </a>
                                        </div>
                                        <div class="b-banner__photo">
                                                <img src="/images/payback/b-2.jpg" alt="">
                                        </div>
                                </div>

                                <div class="b-banner b-banner-3 left is-fadeIn is-animated">
                                        <div class="b-banner__photo">
                                                <img src="/images/payback/b-3.jpg" alt="">
                                        </div>
                                        <div class="b-banner__content">
                                                <a href="<?= Url::to(['/calculator/equipment']) ?>" class="b-banner__title is-fadeIn is-animated"">
                                                        <span class="is-slideInUp is-animated"><?= Yii::t('app','equipment-ya') ?></span>
                                                </a>
                                        </div>
                                </div>
                        </div>
                        <!-- /b-banners -->
                </div>
        </div>

        <div class="layer layer-1">
                <div class="page__block page__block-1 is-modifiedFadeInLeft is-animated"></div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->

