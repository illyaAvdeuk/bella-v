<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
?>
<!-- PAGE -->
<section id="page" class="page page__cosmetic">
	
    <div class="page__inner">
        <!-- breadcrumbs -->
        <div class="breadcrumbs is-slideInLeft is-animated">
            <ol class="breadcrumbs__list">
                <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="<?= Url::to(['/']) ?>" class="breadcrumbs__link" itemprop="url">
                        <span itemprop="title"><?= Yii::t('app','main') ?></span>
                    </a>
                </li>
                <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="<?= Url::to(['/services']) ?>" class="breadcrumbs__link" itemprop="url">
                        <span itemprop="title"><?= Yii::t('app','services') ?></span>
                    </a>
                </li>
                <li class="breadcrumbs__item">
                    <?= Yii::$app->page->getPageInfo('name') ?>
                </li>
            </ol>
        </div>
        <!-- /breadcrumbs -->

        <?php $this->beginContent('@app/views/layouts/layout-parts/menu.php'); $this->endContent(); ?>

        <div class="b-hero">
            <div class="b-hero__slide is-fadeIn is-animated" style="background-image: url('<?= Yii::$app->page->getSubBlockThumb('baner') ?>');"></div>
            <div class="b-hero__content">
                <div class="b-hero__headers">
                    <h2 class="b-hero__title title">
                        <div class="title__inner is-slideInUp is-animated">
                            <div class="title__text">
                                <?= Yii::$app->page->getPageInfo('name') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                            </div>
                        </div>
                    </h2>
                    <?php
                    if (Yii::$app->page->getSubBlockInfo('baner_title1','name')) : ?>
                    <h3 class="b-hero__subtitle title">
                        <div class="title__inner is-slideInUp is-animated">
                            <div class="title__text">
                                <?= Yii::$app->page->getSubBlockInfo('baner_title1','name') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                            </div>
                        </div>
                    </h3>
                    <?php
                    endif; ?>
                </div>
            </div>
            <div class="b-hero__links links is-slideInRight is-animated">
                <div class="links__wrapper">
                    <a href="<?= Url::to(['/cosmetic/reviews']) ?>" class="b-hero__link link"><span class="link__text"><?= Yii::t('app','reviews') ?></span></a>
                    <a href="<?= Url::to(['/study']) ?>" class="b-hero__link link"><span class="link__text"><?= Yii::t('app','study') ?></span></a>
                    <a href="<?= Url::to(['/portfolio']) ?>" class="b-hero__link link"><span class="link__text link__text--small"><?= Yii::t('app','who_trust?') ?></span></a>
                </div>
            </div>
        </div>
        <div class="b-text g-text--center is-fadeIn is-animated">
            <p class="g-text--big g-text--smallcaps"><?= Yii::$app->page->getSubBlockInfo('content','name') ?></p>
        </div>

        <div class="page__content">
            <!-- cosmetics -->
            <div class="cosmetics__wrapper">
                
                <?php
                if (isset($brands[0])) : ?>
                
                <div class="cosmetic cosmetic-1 left is-fadeIn is-animated">
                    <div class="cosmetic__banner">
                        <img src="<?= $brands[0]->thumbPath ?>" alt="">
                    </div>
                    <div class="cosmetic__content">
                        <a href="<?= $brands[0]->urlCosmetic ?>" class="cosmetic__title is-fadeIn is-animated">
                            <span class="is-slideInUp is-animated"><?= $brands[0]->info->name ?></span>
                        </a>
                    </div>
                </div>
                
                <?php
                endif; ?>
                
                <?php
                if (isset($brands[1])) : ?>
                
                <div class="cosmetic cosmetic-2 right is-fadeIn is-animated">
                    <div class="cosmetic__content">
                        <a href="<?= $brands[1]->urlCosmetic ?>" class="cosmetic__title is-fadeIn is-animated">
                            <span class="is-slideInUp is-animated"><?= $brands[1]->info->name ?></span>
                        </a>
                    </div>
                    <div class="cosmetic__banner">
                        <img src="<?= $brands[1]->thumbPath ?>" alt="">
                    </div>
                </div>
                
                <?php
                endif; ?>

                <?php
                if (isset($brands[2])) : ?>
                
                <div class="cosmetic cosmetic-3 left is-fadeIn is-animated">
                    <div class="cosmetic__banner">
                        <img src="<?= $brands[2]->thumbPath ?>" alt="">
                    </div>
                    <div class="cosmetic__content">
                        <a href="<?= $brands[2]->urlCosmetic ?>" class="cosmetic__title is-fadeIn is-animated">
                            <span class="is-slideInUp is-animated"><?= $brands[2]->info->name ?></span>
                        </a>
                    </div>
                </div>

                <?php
                endif; ?>
                
                <?php
                if (isset($brands[3])) : ?>
                
                <div class="cosmetic cosmetic-4 right is-fadeIn is-animated">
                    <div class="cosmetic__content">
                        <a href="<?= $brands[3]->urlCosmetic ?>" class="cosmetic__title is-fadeIn is-animated">
                            <span class="is-slideInUp is-animated"><?= $brands[3]->info->name ?></span>
                        </a>
                    </div>
                    <div class="cosmetic__banner">
                        <img src="<?= $brands[3]->thumbPath ?>" alt="">
                    </div>
                </div>
                
                <?php
                endif; ?>
                
            </div>
            <!-- /cosmetics -->
            <div class="action-block">
                <div class="action-block__item is-fadeInLeft is-animated animated">
                    <a href="" class="btn btn--colored" data-modal="paybackCosmetics"><?= Yii::t('app','calculate_procedure_profit') ?></a>
                </div>
                <div class="action-block__item is-fadeInRight is-animated animated">
                    <a href="" class="btn btn--colored" data-modal="study-cosmetic"><?= Yii::t('app','to_order_study') ?></a>
                </div>
            </div>
        </div>
        <?= \app\helpers\ContentHelper::seoText(Yii::$app->page->seoText) ?>
    </div>

    <?php $this->beginContent('@app/views/layouts/layout-parts/layers.php'); $this->endContent(); ?>
</section>
<!-- /PAGE -->
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-study-cosmetic.php'); $this->endContent(); ?>