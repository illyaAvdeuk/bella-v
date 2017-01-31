<?php
use yii\helpers\Url;

$this->title = $brand->info->name;
?>
<!-- PAGE -->
<section id="page" class="page page__hydropeptide">

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
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= Url::to(['/cosmetic']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','pro_cosmetic') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $brand->info->name ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= $brand->info->name ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>
                <!-- menu -->
                <div class="menu is-fadeInDown is-animated">
                        <ul class="menu__list menu__list--narrow">
                                <li class="menu__item">
                                        <a href="<?= $brand->urlCosmetic.'/prof' ?>" class="menu__link">
                                                <i class="menu__icon-6"></i>
                                                <span class="menu__text"><?= Yii::t('app','pro_line') ?></span>
                                        </a>
                                </li>
                                <li class="menu__item">
                                        <a href="<?= $brand->urlCosmetic.'/home' ?>" class="menu__link">
                                                <i class="menu__icon-7"></i>
                                                <span class="menu__text"><?= Yii::t('app','home_line') ?></span>
                                        </a>
                                </li>
                        </ul>
                </div>
                <!-- /menu -->
                <div class="page__content">

                        <div class="b-hero">
                                <div class="b-hero__slide is-fadeIn is-animated" style="background-image: url('<?= Yii::$app->page->getSubBlockThumb('baner') ?>');"></div>
                                <div class="b-hero__content">
                                        <!-- <div class="b-hero__headers">
                                                <h2 class="b-hero__title b-hero__title--dark title">
                                                        <div class="slideInUp is-animated">
                                                                <div class="title__text">
                                                                        Самые мощные, самые безопасные и наиболее эффективные ингредиенты.
                                                                </div>
                                                        </div>
                                                </h2>
                                        </div> -->
                                </div>
                                <div class="b-hero__links links is-slideInRight is-animated">
                                        <div class="links__wrapper">
                                                <a href="<?= $brand->urlCosmetic.'/info' ?>" class="b-hero__link link"><span class="link__text link__text--small"><?= Yii::$app->page->getSubBlockInfo('label','name') ?></span></a>
                                                <a href="<?= $brand->urlCosmetic.'/reviews' ?>" class="b-hero__link link"><span class="link__text">Отзывы</span></a>
                                        </div>
                                </div>
                        </div>
                        <?= Yii::$app->page->getSubBlockInfo('content','text') ?>
                        
                        <?php
                        if (Yii::$app->page->getSubBlock('carousel1','id')) : ?>
                        <div class="grid slider-sertificate is-fadeIn is-animated">
                                <div class="slider-sertificate__wrapper">
                                        <ul class="slider-sertificate js-slider-sertificate">
                                            <?php
                                            for ($i=1;$i<10;$i++) : ?>
                                                <?php
                                                $img = Yii::$app->page->getSubBlockThumb('carousel'.$i);
                                                if ($img) : ?>
                                                    <li class="slider-sertificate__item item">
                                                            <figure class="item__picture">
                                                                    <a href="" class="item__link">
                                                                        <img src="<?= $img ?>" alt="<?= Yii::$app->page->getSubBlockInfo('carousel'.$i,'name') ?>">
                                                                    </a>
                                                            </figure>
                                                    </li>
                                                <?php
                                                else : 
                                                    break;
                                                endif; ?>
                                            <?php
                                            endfor; ?>
                                        </ul>
                                </div>
                        </div>
                         <?php
                        endif; ?>
                    
                        <div class="g-content g-block is-fadeIn is-animated">
                                <div class="g-table g-table--responsive">
                                        <div class="g-table__row">
                                                <div class="g-table__cell">
                                                    <?php
                                                    if (Yii::$app->page->getSubBlock('video1','id')) : ?>
                                                        <div class="b-video">
                                                                <div class="b-video__content">
                                                                       <?= Yii::$app->page->getSubBlockInfo('video1','description'); ?>
                                                                </div>
                                                                <div class="b-video__title">
                                                                        <span class="g-link"><?= Yii::$app->page->getSubBlockInfo('video1','name') ?></span>
                                                                </div>
                                                        </div>
                                                    <?php
                                                    elseif (Yii::$app->page->getSubBlock('footer_img','id')) : ?>
                                                        <div class="b-video">
                                                                <div class="b-video__content">
                                                                    <img src="<?= Yii::$app->page->getSubBlockThumb('footer_img'); ?>" alt="<?= Yii::$app->page->getSubBlockInfo('footer_img','name') ?>">
                                                                </div>
                                                                <div class="b-video__title">
                                                                        <span class="g-link"><?= Yii::$app->page->getSubBlockInfo('footer_img','name') ?></span>
                                                                </div>
                                                        </div>    
                                                    <?php
                                                    endif; ?>
                                                </div>
                                                <div class="g-table__cell g-text--center">
                                                        <a href="" class="btn btn--colored">Презентация и протоколы</a><br>
                                                        <a href="" class="btn btn--colored">Презентация и протоколы</a>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <?= \app\helpers\ContentHelper::seoText(Yii::$app->page->seoText) ?>
                </div>
        </div>

        <div class="layer layer-1">
                <div class="page__block page__block-1 is-modifiedFadeInLeft is-animated"></div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 is-modifiedFadeInRight is-animated"></div>	
        </div>

        <div class="layer layer-3">
                <div class="page__block page__block-3 is-modifiedFadeInLeft is-animated"></div>
        </div>

        <div class="layer layer-4">
                <div class="page__block page__block-4 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->