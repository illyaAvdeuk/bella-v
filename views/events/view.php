<?php
use yii\helpers\Url;

$this->title = $event->info->title;
?>
<!-- PAGE -->
<section id="page" class="page page__post">

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
                        <a href="<?= Url::to(['/study']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','study_center') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= Url::to(['/events']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','events') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $event->info->title ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= $event->info->title ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>
                
                <?php 
                if (Yii::$app->page->pageThumb) : ?>
                <div class="b-hero--simple is-fadeIn is-animated">
                        <div class="b-hero__slide--simple">
                            <img src="<?= Yii::$app->page->pageThumb ?>" alt="<?= $event->info->title ?>">
                        </div>
                </div>
                <?php
                endif; ?>
                <div class="page__content">
                        <div class="b-post">
                            <?= $event->info->text ?>
                        </div>
                        <h3 class="g-title title">
                                <div class="title__inner is-slideInUp is-animated slideInUp animated">
                                        <div class="title__text">
                                                <?= Yii::t('app','other_events') ?>
                                                <div class="title__underline is-slideInLeft is-animated slideInLeft animated"></div>
                                        </div>
                                </div>
                        </h3>
                        <div class="b-posts-review__wrapper b-posts__carousel">
                                <div class="js-posts-review-carousel">
                                    
                                    <?php
                                    foreach ($lastEvents as $event): ?>
                                    
                                        <div class="b-post-review">
                                                <div class="b-post-review__inner">
                                                        <div class="b-post-review__content">
                                                                <div class="b-post-review__title">
                                                                        <span class="is-animated is-slideInUp"><?= $event->info->title ?></span>
                                                                </div>
                                                                <div class="divider">
                                                                        <span class="divider__line is-animated is-fadeIn"></span>
                                                                </div>
                                                                <div class="b-post-review__desc">
                                                                        <span class="is-animated is-slideInUp"><?= $event->info->description ?></span>
                                                                </div>
                                                                <div class="divider divider--hiding">
                                                                        <span class="divider__line is-animated is-fadeIn"></span>
                                                                </div>
                                                                <div class="b-post-review__date">
                                                                        <span class="is-animated is-slideInUp"><?= $event->getPubDate() ?></span>
                                                                </div>
                                                                <div class="b-post-review__action">
                                                                        <a href="<?= $event->url ?>" class="b-post-review__readmore"><?= Yii::t('app','read_more') ?></a>
                                                                </div>
                                                        </div>
                                                        <div class="b-post-review__img is-animated is-fadeIn">
                                                                <img src="<?= $event->thumbPath ?>" alt="<?= $event->info->title ?>">
                                                        </div>
                                                </div>
                                        </div>

                                    <?php
                                    endforeach; ?>
                                        
                                </div>
                        </div>

                        <div class="action-block">
                                <div class="action-block__item action-block__item--centered is-fadeInDown is-animated">
                                        <a href="" class="btn btn--colored" data-modal="subscribeForm"><?= Yii::t('app','subscribe_blog') ?>!</a>
                                </div>
                        </div>
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

        <div class="layer layer-5">
                <div class="page__block page__block-5 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->