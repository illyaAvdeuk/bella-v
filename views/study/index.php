<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
?>
<!-- PAGE -->
<section id="page" class="page page__study">

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
                                        <a href="<?= Url::to(['/study/shedule']) ?>" class="b-hero__link link"><span class="link__text link__text--small"><?= Yii::t('app','shedule') ?></span></a>
                                        <a href="<?= Url::to(['/events']) ?>" class="b-hero__link link"><span class="link__text"><?= Yii::t('app','events') ?></span></a>
                                </div>
                        </div>
                </div>
                <div class="b-text g-text--center is-fadeIn is-animated">
                        <p class="g-text--big g-text--smallcaps"><?= Yii::$app->page->getSubBlockInfo('content','name') ?></p>
                </div>

                <div class="page__content">
                        <!-- studys -->
                        <div class="study__wrapper">
                                <div class="study study-1 left">
                                        <div class="study__banner is-fadeInLeft is-animate">
                                                <img src="/images/study/img-1.jpg" alt="">
                                        </div>
                                        <div class="study__content">
                                                <a href="<?= Url::to(['/study/equipment']) ?>" class="study__title is-fadeInLeft is-animated">
                                                        <span><?= Yii::t('app','equipment_technics_study') ?></span>
                                                </a>
                                        </div>
                                </div>

                                <div class="study study-2 right">
                                        <div class="study__content">
                                                <a href="<?= Url::to(['/study/cosmetic']) ?>" class="study__title is-fadeInDown is-animated">
                                                        <span><?= Yii::t('app','cosmetologs_study') ?></span>
                                                </a>
                                        </div>
                                        <div class="study__banner is-fadeInDown is-animate">
                                                <img src="/images/study/img-2.jpg" alt="">
                                        </div>
                                </div>

                                <div class="study study-3 left">
                                        <div class="study__banner is-fadeInRight is-animate">
                                                <img src="/images/study/img-3.jpg" alt="">
                                        </div>
                                        <div class="study__content">
                                                <a href="<?= Url::to(['/trainers']) ?>" class="study__title is-fadeInRight is-animated">
                                                        <span><?= Yii::t('app','our_trainers') ?></span>
                                                </a>
                                        </div>
                                </div>
                        </div>
                        <!-- /studys -->
                        <div class="action-block">
                                <div class="action-block__item is-fadeInLeft is-animated">
                                        <a href="" class="btn btn--colored" data-modal="seminar"><?= Yii::t('app','to_seminar') ?></a>
                                </div>
                                <div class="action-block__item is-fadeInRight is-animated">
                                        <a href="" class="btn btn--colored" data-modal="subscribeForm" ><?= Yii::t('app','subscribe_channel') ?></a>
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