<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
?>

<!-- PAGE -->
<section id="page" class="page page__consulting">

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
                                                <div class="is-slideInUp is-animated">
                                                        <div class="title__text">
                                                                <?= Yii::$app->page->getPageInfo('name') ?>
                                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                                        </div>
                                                </div>
                                        </h2>
                                        <h3 class="b-hero__subtitle title">
                                                <div class="is-slideInUp is-animated">
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
                                        <a href="<?= Url::to(['/consulting/why']) ?>" class="b-hero__link link"><span class="link__text">Почему мы</span></a>
                                        <a href="<?= Url::to(['/consulting/reviews']) ?>" class="b-hero__link link"><span class="link__text">Отзывы</span></a>
                                        <a href="<?= Url::to(['/portfolio']) ?>" class="b-hero__link link"><span class="link__text link__text--small">Кто нам доверяет?</span></a>
                                </div>
                        </div>
                </div>
                <div class="b-text g-text--center is-fadeIn is-animated">
                        <p class="g-text--big g-text--smallcaps"><?= Yii::$app->page->getSubBlockInfo('content','name') ?></p>
                </div>

                <div class="page__content">
                        <!-- consultings -->
                        <div class="consultings__wrapper">
                                <div class="consulting consulting-1 left is-fadeIn is-animated">
                                        <div class="consulting__banner">
                                            <img src="<?= $mainPage->getSubBlockThumbOrDef('home_area_salony','/images/consulting/img-1.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_area_salony','name') ?>">
                                        </div>
                                        <div class="consulting__content">
                                            <a href="<?= Url::to(['/consulting/salony']) ?>" class="consulting__title is-fadeIn is-animated">
                                                <span class="is-slideInUp is-animated">
                                                    <?= $mainPage->getSubBlockInfo('home_area_salony','name') ?>
                                                </span>
                                            </a>
                                        </div>
                                </div>

                                <div class="consulting consulting-2 right is-fadeIn is-animated">
                                        <div class="consulting__content">
                                                <a href="<?= Url::to(['/consulting/spa-wellness']) ?>" class="consulting__title is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated">
                                                            <?= $mainPage->getSubBlockInfo('home_area_spa_wellness','name') ?>
                                                        </span>
                                                </a>
                                        </div>
                                        <div class="consulting__banner">
                                            <img src="<?= $mainPage->getSubBlockThumbOrDef('home_area_spa_wellness','/images/consulting/img-2.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_area_spa_wellness','name') ?>">
                                        </div>
                                </div>

                                <div class="consulting consulting-3 left is-fadeIn is-animated">
                                        <div class="consulting__banner">
                                            <img src="<?= $mainPage->getSubBlockThumbOrDef('home_area_sanatorii','/images/consulting/img-3.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_area_sanatorii','name') ?>">
                                        </div>
                                        <div class="consulting__content">
                                                <a href="<?= Url::to(['/consulting/sanatorii']) ?>" class="consulting__title is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated">
                                                            <?= $mainPage->getSubBlockInfo('home_area_sanatorii','name') ?>
                                                        </span>
                                                </a>
                                        </div>
                                </div>

                                <div class="consulting consulting-4 right is-fadeIn is-animated">
                                        <div class="consulting__content">
                                                <a href="<?= Url::to(['/consulting/fitnes']) ?>" class="consulting__title is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated">
                                                            <?= $mainPage->getSubBlockInfo('home_area_fitnes','name') ?>
                                                        </span>
                                                </a>
                                        </div>
                                        <div class="consulting__banner">
                                            <img src="<?= $mainPage->getSubBlockThumbOrDef('home_area_fitnes','/images/consulting/img-4.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_area_fitnes','name') ?>">
                                        </div>
                                </div>

                                <div class="consulting consulting-5 right is-fadeIn is-animated">
                                        <div class="consulting__content">
                                                <a href="<?= Url::to(['/consulting/hotels']) ?>" class="consulting__title is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated">
                                                            <?= $mainPage->getSubBlockInfo('home_area_hotels','name') ?>
                                                        </span>
                                                </a>
                                        </div>
                                        <div class="consulting__banner">
                                                <img src="<?= $mainPage->getSubBlockThumbOrDef('home_area_hotels','/images/consulting/img-5.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_area_hotels','name') ?>">
                                        </div>
                                </div>

                                <div class="consulting consulting-6 right is-fadeIn is-animated">
                                        <div class="consulting__content">
                                                <a href="<?= Url::to(['/consulting/mobile-cosmo']) ?>" class="consulting__title is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated">
                                                            <?= $mainPage->getSubBlockInfo('home_area_mobile_cosmo','name') ?>
                                                        </span>
                                                </a>
                                        </div>
                                        <div class="consulting__banner">
                                                <img src="<?= $mainPage->getSubBlockThumbOrDef('home_area_mobile_cosmo','/images/consulting/img-6.jpg') ?>" alt="<?= $mainPage->getSubBlockInfo('home_area_mobile_cosmo','name') ?>">
                                        </div>
                                </div>
                        </div>
                        <!-- /consultings -->
                        <div class="action-block">
                                <div class="action-block__item is-fadeInLeft is-animated animated">
                                        <a href="" class="btn btn--colored" data-modal="test-drive"><?= Yii::t('app','test-drive') ?></a>
                                </div>
                                <div class="action-block__item is-fadeInRight is-animated animated">
                                        <a href="" class="btn btn--colored" data-modal="show-room"><?= Yii::t('app','show-room') ?></a>
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
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-test-drive.php'); $this->endContent(); ?>