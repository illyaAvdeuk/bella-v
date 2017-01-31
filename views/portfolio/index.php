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
                                        <a href="<?= Url::to(['/portfolio/reviews']) ?>" class="b-hero__link link"><span class="link__text"><?= Yii::t('app','reviews') ?></span></a>
                                        <a href="<?= Url::to(['/events']) ?>" class="b-hero__link link"><span class="link__text"><?= Yii::t('app','events') ?></span></a>
                                        <a href="<?= Url::to(['/blog']) ?>" class="b-hero__link link"><span class="link__text"><?= Yii::t('app','blog') ?></span></a>
                                </div>
                        </div>
                </div>

                <div class="page__content">
                        <!-- b-banners -->
                        <div class="b-banners__wrapper b-projects__banners">
                                
                            <?php
                            if (isset($categories[0])) : ?>
                            
                                <div class="b-banner b-banner-1 left is-fadeIn is-animated">
                                        <div class="b-banner__photo">
                                            <img src="<?= $categories[0]->thumbPath ?>" alt="">
                                        </div>
                                        <div class="b-banner__content">
                                                <a href="<?= $categories[0]->url ?>" class="b-banner__title is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= $categories[0]->info->name ?></span>
                                                </a>
                                        </div>
                                </div>

                            <?php
                            endif; ?>
                            
                            <?php
                            if (isset($categories[1])) : ?>
                            
                                <div class="b-banner b-banner-2 right is-fadeIn is-animated">
                                        <div class="b-banner__content">
                                                <a href="<?= $categories[1]->url ?>" class="b-banner__title is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= $categories[1]->info->name ?></span>
                                                </a>
                                        </div>
                                        <div class="b-banner__photo">
                                                <img src="<?= $categories[1]->thumbPath ?>" alt="">
                                        </div>
                                </div>

                            <?php
                            endif; ?>
                            
                            <?php
                            if (isset($categories[2])) : ?>
                            
                                <div class="b-banner b-banner-3 left is-fadeIn is-animated">
                                        <div class="b-banner__photo">
                                                <img src="<?= $categories[2]->thumbPath ?>" alt="">
                                        </div>
                                        <div class="b-banner__content">
                                                <a href="<?= $categories[2]->url ?>" class="b-banner__title is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= $categories[2]->info->name ?></span>
                                                </a>
                                        </div>
                                </div>

                            <?php
                            endif; ?>
                            
                            <?php
                            if (isset($categories[3])) : ?>
                            
                                <div class="b-banner b-banner-4 right is-fadeIn is-animated">
                                        <div class="b-banner__content">
                                                <a href="<?= $categories[3]->url ?>" class="b-banner__title is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= $categories[3]->info->name ?></span>
                                                </a>
                                        </div>
                                        <div class="b-banner__photo">
                                                <img src="<?= $categories[3]->thumbPath ?>" alt="">
                                        </div>
                                </div>
                            
                            <?php
                            endif; ?>
                            
                        </div>
                        <!-- /b-banners -->
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