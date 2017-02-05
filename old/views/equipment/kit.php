<?php
use yii\helpers\Url;

$this->title = $kit->info->name;
?>
<!-- PAGE -->
<section id="page" class="page page__kit">

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
                        <a href="<?= Url::to(['/equipment']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','equipment_and_furniture') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= Url::to(["/equipment/{$category->alias}"]) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $category->info->name ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $kit->info->name ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= $kit->info->name ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <div class="page__content">
                <article class="g-block">
                        <div class="g-block__header">
                            <?php
                            if (Yii::$app->page->getSubBlockInfo('sub_title1','name')) : ?>
                                <div class="g-block__title title is-slideInUp is-animated">
                                        <div class="title__text">
                                                <?= Yii::$app->page->getSubBlockInfo('sub_title1','name') ?>
                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                        </div>
                                </div>
                            <?php
                            endif; ?>
                            <?php
                            if (Yii::$app->page->getSubBlockInfo('sub_title2','name')) : ?>
                                <div class="g-block__title g-block__title--right title is-slideInUp is-animated">
                                        <div class="title__text">
                                                <?= Yii::$app->page->getSubBlockInfo('sub_title2','name') ?>
                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                        </div>
                                </div>
                            <?php
                            endif; ?>
                        </div>
                        <div class="g-block__content g-block__content--alt">
                                <div class="g-grid is-fadeIn is-animated">
                                        <div class="g-col--two-third">
                                            <img src="<?= $kit->thumbPath ?>" alt="<?= $kit->info->name ?>">
                                        </div>
                                        <div class="g-col--one-third">
                                                <nav class="b-list b-list--square">
                                                        <h4 class="b-list__title"><?= Yii::t('app','kit_consist') ?>:</h4>
                                                        <ul class="b-list__list">
                                                                
                                                            <?php
                                                            foreach ($kit->products as $kitProduct) : ?>
                                                            
                                                                <li class="b-list__item">
                                                                        <a href="<?= $kitProduct->equipmentUrl ?>" class="b-list__link"><?= $kitProduct->info->name ?></a>
                                                                </li>
                                                             
                                                            <?php
                                                            endforeach; ?>     
                                                                
                                                        </ul>
                                                        <p class="b-list__text g-text--color-alt"><?= Yii::t('app','no_analogs') ?></p>
                                                </nav>
                                        </div>
                                </div>
                        </div>
                </article>

                        <div class="action-block">
                                <div class="action-block__item action-block__item--centered is-fadeInLeft is-animated">
                                        <a href="" class="btn btn--colored" data-modal="test-drive"><?= Yii::t('app','to_order_test-drive') ?></a>
                                </div>
                        </div>
                        <?php
                        if (Yii::$app->page->getPage('id')) : ?>
                            <?= Yii::$app->page->getPageInfo('text') ?>
                        <?php
                        endif; ?>
                
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

<?php $this->beginContent('@app/views/layouts/layout-parts/modal-test-drive.php'); $this->endContent(); ?>