<?php
use yii\helpers\Url;

$this->title = Yii::t('app','stocks');
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
                        <?= Yii::t('app','stocks') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::t('app','stocks') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <div class="page__content">
                        <!-- b-banners -->
                        <div class="b-banners__wrapper b-best-deals__banners">
                                <div class="b-banner b-banner-1 left is-fadeIn is-animated">
                                        <div class="b-banner__photo">
                                                <img src="/images/best-deals/b-1.jpg" alt="">
                                        </div>
                                        <div class="b-banner__content">
                                                <a href="<?= Url::to(['/stocks/equipment']) ?>" class="b-banner__title is-fadeIn is-animated" >
                                                        <span class="is-slideInUp is-animated"><?= Yii::t('app','equipment') ?></span>
                                                </a>
                                        </div>
                                </div>

                                <div class="b-banner b-banner-2 right is-fadeIn is-animated">
                                        <div class="b-banner__content">
                                                <a href="<?= Url::to(['/stocks/cosmetic']) ?>" class="b-banner__title is-fadeIn is-animated" >
                                                        <span class="is-slideInUp is-animated"><?= Yii::t('app','cosmetic') ?></span>
                                                </a>
                                        </div>
                                        <div class="b-banner__photo">
                                                <img src="/images/best-deals/b-2.jpg" alt="">
                                        </div>
                                </div>
                        </div>
                        <!-- /b-banners -->
                        <div class="action-block">
                                <div class="action-block__item is-fadeInLeft is-animated animated">
                                        <a href="" class="btn btn--colored" data-modal="seminar"><?= Yii::t('app','to_seminar') ?></a>
                                </div>
                                <div class="action-block__item is-fadeInRight is-animated animated">
                                        <a href="" class="btn btn--colored" data-modal="subscribeForm"><?= Yii::t('app','subscribe_channel') ?></a>
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
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-seminar.php'); $this->endContent(); ?>