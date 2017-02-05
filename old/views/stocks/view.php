<?php
//use Yii;
use yii\helpers\Url;

$this->title = $stock->info->name;
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
                        <a href="<?= Url::to(['/stocks']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','stocks') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= Url::to(["/stocks/{$category->alias}"]) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $category->info->name ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $stock->info->name ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= $stock->info->name ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>
                
                <?php 
                if (Yii::$app->page->pageThumb) : ?>
                <div class="b-hero--simple is-fadeIn is-animated">
                        <div class="b-hero__slide--simple">
                            <img src="<?= Yii::$app->page->pageThumb ?>" alt="<?= $stock->info->name ?>">
                        </div>
                </div>
                <?php
                endif; ?>
                <div class="page__content">
                        <div class="b-post">
                            <?= $stock->info->text ?>
                        </div>
                        <!-- b-banners -->
                        <div class="b-banners__wrapper b-best-deal__banners">
                            
                            <?php
                            foreach ($posts as $post) : ?>
                                <div class="b-banner g-col--one-third left is-fadeIn is-animated">
                                        <div class="b-banner__photo">
                                            <img src="<?= $post->thumbPath ?>" alt="<?= $post->info->title ?>">
                                        </div>
                                        <div class="b-banner__content">
                                                <a href="<?= $post->url ?>" class="b-banner__title--alt g-text--transform-none is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= $post->info->title ?></span>
                                                </a>
                                        </div>
                                </div>
                            <?php
                            endforeach; ?>
                        </div>
                        <!-- /b-banners -->

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