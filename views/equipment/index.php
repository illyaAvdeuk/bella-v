<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
?>
<!-- PAGE -->
<section id="page" class="page page__equipment">

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
                    <a href="<?= Url::to(['/equipment/reviews']) ?>" class="b-hero__link link"><span class="link__text"><?= Yii::t('app','reviews') ?></span></a>
                    <a href="<?= Url::to(['/study']) ?>" class="b-hero__link link"><span class="link__text"><?= Yii::t('app','study') ?></span></a>
                    <a href="<?= Url::to(['/portfolio']) ?>" class="b-hero__link link"><span class="link__text link__text--small"><?= Yii::t('app','who_trust?') ?></span></a>
                </div>
            </div>
        </div>
        <div class="b-text g-text--center is-fadeIn is-animated">
            <p class="g-text--big g-text--smallcaps"><?= Yii::$app->page->getSubBlockInfo('content','name') ?>  </p>
        </div>

        <!-- filter -->
        <div class="filter is-fadeInDown is-animated">
            <?= $this->render('_filter',[
                    'tags' => $tags[0]->children,
                    'brands' => $brands
                ]) ?>
        </div>
        <!-- /filter -->

        <div class="page__content">
            <!-- equipments -->
            <div class="equipments__wrapper">
                <div class="equipment equipment-1 left is-fadeIn is-animated">
                    <div class="equipment__banner">
                        <img src="/images/equipment/img-1.jpg" alt="">
                    </div>
                    <div class="equipment__content">
                        <a href="<?= Url::to(['/equipment/estetic']) ?>" class="equipment__title is-fadeIn is-animated">
                            <span class="is-slideInUp is-animated">
                                    <?= Yii::t('app','estetic_and_cosmetology') ?>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="equipment equipment-2 right is-fadeIn is-animated">
                    <div class="equipment__content">
                        <a href="<?= Url::to(['/equipment/medicine']) ?>" class="equipment__title is-fadeIn is-animated">
                            <span class="is-slideInUp is-animated"><?= Yii::t('app','medicine') ?></span>
                        </a>
                    </div>
                    <div class="equipment__banner">
                        <img src="/images/equipment/img-2.jpg" alt="">
                    </div>
                </div>

                <div class="equipment equipment-3 left is-fadeIn is-animated">
                    <div class="equipment__banner">
                        <img src="/images/equipment/img-3.jpg" alt="">
                    </div>
                    <div class="equipment__content">
                        <a href="<?= Url::to(['/equipment/spa-wellness']) ?>" class="equipment__title is-fadeIn is-animated">
                            <span class="is-slideInUp is-animated"><?= Yii::t('app','spa-wellness') ?></span>
                        </a>
                    </div>
                </div>

                <div class="equipment equipment-4 right is-fadeIn is-animated">
                    <div class="equipment__content">
                        <a href="<?= Url::to(['/equipment/mebel']) ?>" class="equipment__title is-fadeIn is-animated">
                            <span class="is-slideInUp is-animated"><?= Yii::t('app','furniture') ?></span>
                        </a>
                    </div>
                    <div class="equipment__banner">
                        <img src="/images/equipment/img-4.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- /equipments -->
            <div class="action-block">
                <div class="action-block__item is-fadeInLeft is-animated animated">
                    <a href="" class="btn btn--colored" data-modal="test-drive"><?= Yii::t('app','test-drive') ?></a>
                </div>
                <div class="action-block__item is-fadeInRight is-animated animated">
                    <a href="" class="btn btn--colored" data-modal="study-equipment-techniques"><?= Yii::t('app','equipment_technics_study') ?></a>
                </div>
            </div>
        </div>
        <?= \app\helpers\ContentHelper::seoText(Yii::$app->page->seoText) ?>
    </div>

    <?php $this->beginContent('@app/views/layouts/layout-parts/layers.php'); $this->endContent(); ?>
</section>
<!-- /PAGE -->
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-study-equipment-techniques.php'); $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-test-drive.php'); $this->endContent(); ?>
