<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
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
                <?php
                if (Yii::$app->page->breadcrumbs) : 
                    foreach (Yii::$app->page->breadcrumbs as $page) :
                    ?>
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= $page->url ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $page->info->name ?></span>
                        </a>
                    </li>
                    <?php
                    endforeach;
                endif; ?>
                    <li class="breadcrumbs__item">
                        <?= Yii::$app->page->getPageInfo('name'); ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::$app->page->getPageInfo('name'); ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <div class="b-hero--simple is-fadeIn is-animated">
                        <div class="b-hero__slide--simple">
                                <img src="<?= Yii::$app->page->pageThumb; ?>" alt="">
                        </div>
                </div>
                <div class="page__content">
                        <div class="g-gutter g-content">
                            <div class="g-table g-table--responsive is-fadeIn is-animated">
                            <?= Yii::$app->page->getPageInfo('text'); ?>
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

        <div class="layer layer-5">
                <div class="page__block page__block-5 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->