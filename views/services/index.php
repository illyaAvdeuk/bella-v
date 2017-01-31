<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
?>
<!-- PAGE -->
<section id="page" class="section page page__services">
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
                    <?= Yii::$app->page->getPageInfo('name') ?>
                </li>
            </ol>
        </div>
        <!-- /breadcrumbs -->
        <h2 class="page__title title">
            <div class="title__inner is-slideInUp is-animated">
                    <div class="title__text">
                            <?= Yii::$app->page->getPageInfo('name') ?>
                            <div class="title__underline is-slideInLeft is-animated"></div>
                    </div>
            </div>
        </h2>
        <div class="page__content g--center">
            <div class="services">
                <div class="service service-1 left">
                    <a href="<?= Url::to(['/consulting']) ?>" class="service__title is-fadeIn is-animated">
                        <span class=" is-slideInUpis-animated">
                            <?= $mainPage->getSubBlockInfo('home_srv_consulting','name') ?>
                        </span>
                    </a>
                    <div class="service__banner is-fadeIn is-animated">
                        <img src="<?= $mainPage->getSubBlockThumbOrDef('home_srv_consulting','/images/scr2-img1.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_srv_consulting','name') ?>">
                    </div>
                </div>

                <div class="service service-2 right">
                    <a href="<?= Url::to(['/equipment']) ?>" class="service__title is-fadeIn is-animated">
                        <span class="is-slideInUp is-animated">
                            <?= $mainPage->getSubBlockInfo('home_srv_equipment','name') ?>
                        </span>
                    </a>
                    <div class="service__banner is-fadeIn is-animated">
                        <img src="<?= $mainPage->getSubBlockThumbOrDef('home_srv_equipment','/images/scr2-img2.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_srv_equipment','name') ?>">
                    </div>
                </div>

                <div class="service service-3 left">
                    <a href="<?= Url::to(['/cosmetic']) ?>" class="service__title is-fadeIn is-animated">
                        <span class="is-slideInUp is-animated">
                            <?= $mainPage->getSubBlockInfo('home_srv_cosmetic','name') ?>
                        </span>
                    </a>
                    <div class="service__banner is-fadeIn is-animated">
                        <img src="<?= $mainPage->getSubBlockThumbOrDef('home_srv_cosmetic','/images/scr2-img3.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_srv_cosmetic','name') ?>">
                    </div>
                </div>

                <div class="service service-4 right">
                    <a href="<?= Url::to(['/study']) ?>" class="service__title is-fadeIn is-animated">
                        <span class="is-slideInUp is-animated">
                            <?= $mainPage->getSubBlockInfo('home_srv_study','name') ?>
                        </span>
                    </a>
                    <div class="service__banner is-fadeIn is-animated">
                        <img src="<?= $mainPage->getSubBlockThumbOrDef('home_srv_study','/images/scr2-img4.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_srv_study','name') ?>">
                    </div>
                </div>
            </div>
        </div>
        <?= \app\helpers\ContentHelper::seoText(Yii::$app->page->seoText) ?>
    </div>

    <?php $this->beginContent('@app/views/layouts/layout-parts/layers.php'); $this->endContent(); ?>
</section>
<!-- /PAGE -->