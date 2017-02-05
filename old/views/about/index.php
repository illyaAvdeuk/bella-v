<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
?>
<!-- PAGE -->
<section id="page" class="page page__projects">

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
                                        <h3 class="b-hero__subtitle title">
                                                <div class="title__inner is-slideInUp is-animated">
                                                        <div class="title__text">
                                                                <?= strip_tags(Yii::$app->page->getSubBlockInfo('baner','description')) ?>
                                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                                        </div>
                                                </div>
                                        </h3>
                                </div>
                        </div>
                        <div class="b-hero__links links is-slideInRight is-animated">
                                <div class="links__wrapper">
                                        <a href="<?= Url::to(['/about/reviews']) ?>" class="b-hero__link link"><span class="link__text">Отзывы</span></a>
                                        <a href="<?= Url::to(['/study']) ?>" class="b-hero__link link"><span class="link__text">Обучение</span></a>
                                </div>
                        </div>
                </div>

                <div class="page__content">
                        <!-- b-banners -->
                        <div class="g-grid g-text--center">
                                <div class="g-col--one-fourth is-fadeIn is-animated">
                                        <div class="g-title__wrapper">
                                            <a href="<?= Url::to(['/team']) ?>" class="g-title--border-left is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= Yii::t('app','team') ?></span>
                                                </a>
                                        </div>
                                        <div class="g-picture">
                                                <img src="/images/about/p-1.jpg" alt="">
                                        </div>
                                </div>

                                <div class="g-col--one-fourth is-fadeIn is-animated">
                                        <div class="g-title__wrapper">
                                            <a href="<?= Url::to(['/about/values']) ?>" class="g-title--border-left is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= Yii::t('app','values') ?></span>
                                                </a>
                                        </div>
                                        <div class="g-picture">
                                                <img src="/images/about/p-2.jpg" alt="">
                                        </div>
                                </div>

                                <div class="g-col--one-fourth is-fadeIn is-animated">
                                        <div class="g-title__wrapper">
                                            <a href="<?= Url::to(['/partners']) ?>" class="g-title--border-left is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= Yii::t('app','partners') ?></span>
                                                </a>
                                        </div>
                                        <div class="g-picture">
                                                <img src="/images/about/p-3.jpg" alt="">
                                        </div>
                                </div>

                                <div class="g-col--one-fourth is-fadeIn is-animated">
                                        <div class="g-title__wrapper">
                                            <a href="<?= Url::to(['/about/charity']) ?>" class="g-title--border-left is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= Yii::t('app','charity') ?></span>
                                                </a>
                                        </div>
                                        <div class="g-picture">
                                                <img src="/images/about/p-4.jpg" alt="">
                                        </div>
                                </div>
                        </div>
                        <!-- /b-banners -->

                        <div class="g-content">
                                <h4 class="g-title g-title--small">
                                        <div class="title__inner is-slideInUp is-animated">
                                                <div class="title__text">
                                                        <?= Yii::$app->page->getPageInfo('sub_name') ?>
                                                        <div class="title__underline is-slideInLeft is-animated"></div>
                                                </div>
                                        </div>
                                </h4>
                                <?= Yii::$app->page->getSubBlockInfo('content','text') ?>
                        </div>

                        <div class="action-block">
                                <div class="action-block__item is-fadeInLeft is-animated animated">
                                        <a href="" class="btn btn--colored" data-modal="show-room"><?= Yii::t('app','show-room') ?></a>
                                </div>
                                <div class="action-block__item is-fadeInRight is-animated animated">
                                    <a href="<?= Url::to(['/calculator']) ?>" class="btn btn--colored"><?= Yii::t('app','calculate_effect') ?></a>
                                </div>
                        </div>
                </div>
                <?= \app\helpers\ContentHelper::seoText(Yii::$app->page->seoText) ?>
        </div>

        <div class="layer layer-1">
                <div class="page__block page__block-1 is-modifiedFadeInLeft is-animated"></div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-show-room.php'); $this->endContent(); ?>