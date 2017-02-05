<?php
use yii\helpers\Url;
use app\helpers\ContentHelper;

$this->title = $product->info->name;
?>
<!-- PAGE -->
<section id="page" class="page page__product">

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
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= $product->brand->urlCosmetic ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $product->brand->info->name ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= $product->brand->urlCosmetic."/".$product->category->alias ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $product->category->info->name ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $product->info->name ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= $product->info->name ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <?= $this->render('_filters',[
                    'tags' => $tags,
                    'prettyFilters' => $prettyFilters,
                ]) ?>
                <?php
                if ($product->tags) : ?>
                <div class="b-filtered is-fadeInDown is-animated">
                        <ul class="b-filtered__list">
                            <?php
                            foreach ($product->tags as $tag) : ?>
                                <li class="b-filtered__item">
                                    <span class="b-filtered__link"><?= $tag->info->name ?></span>
                                </li>
                            <?php
                            endforeach; ?>
                        </ul>
                </div>
                <?php
                endif; ?>
                <div class="b-product">
                        <div class="b-product__photo is-fadeIn is-animated">
                                <a href="<?= $product->thumbPath ?>" class="">
                                        <img src="<?= $product->thumbPath ?>" alt="">
                                </a>
                        </div>
                        <div class="b-product__content is-fadeIn is-animated">
                                <?= $product->info->text ?>
                        </div>
                </div>
                <div class="g-tabs__wrapper is-fadeIn is-animated">
                        <ul class="g-tabs__list">
                                <?= ContentHelper::productTab('1','is--active'); ?>
                                <?= ContentHelper::productTab('2'); ?>
                                <?= ContentHelper::productTab('3'); ?>
                                <?= ContentHelper::productTab('4'); ?>
                        </ul>
                        <div class="g-tabs__panes">
                                <?= ContentHelper::productTabContent($product->info->description,'1','is--active'); ?>
                                <?= ContentHelper::productTabContent($product->info->application,'2'); ?>
                                <?= ContentHelper::productTabContent($product->info->ingredients,'3'); ?>
                                <?= ContentHelper::productTabContent($product->info->honors,'4'); ?>
                        </div>
                </div>
            <?php 
            if ($product->same1 || $product->same2 || $product->same3) : ?>
                <div class="b-products">
                        <h2 class="g-text--promo is-fadeIn is-animated"><?= Yii::t('app','you_may_interested') ?>:</h2>
                        <ul class="b-products__list">
                            <?php
                            if ($product->same1) : ?>
                                <li class="b-products__item is-fadeIn is-animated">
                                        <a href="<?= $product->same1->urlCosmetic ?>" class="b-products__inner">
                                                <span class="b-products__title"><?= $product->same1->info->name ?></span>
                                                <span class="b-products__photo">
                                                        <img src="<?= $product->same1->thumbPath ?>" alt="<?= $product->same1->info->name ?>">
                                                </span>
                                                <span class="b-products__desc"><?= $product->same1->info->sub_title ?></span>
                                        </a>
                                </li>
                            <?php
                            endif; ?>    
                            <?php
                            if ($product->same2) : ?>   
                                <li class="b-products__item is-fadeIn is-animated">
                                        <a href="<?= $product->same2->urlCosmetic ?>" class="b-products__inner">
                                                <span class="b-products__title"><?= $product->same2->info->name ?></span>
                                                <span class="b-products__photo">
                                                        <img src="<?= $product->same2->thumbPath ?>" alt="<?= $product->same2->info->name ?>">
                                                </span>
                                                <span class="b-products__desc"><?= $product->same2->info->sub_title ?></span>
                                        </a>
                                </li>
                            <?php
                            endif; ?>       
                            <?php
                            if ($product->same3) : ?>     
                                <li class="b-products__item is-fadeIn is-animated">
                                        <a href="<?= $product->same3->urlCosmetic ?>" class="b-products__inner">
                                                <span class="b-products__title"><?= $product->same3->info->name ?></span>
                                                <span class="b-products__photo">
                                                        <img src="<?= $product->same3->thumbPath ?>" alt="<?= $product->same3->info->name ?>">
                                                </span>
                                                <span class="b-products__desc"><?= $product->same3->info->sub_title ?></span>
                                        </a>
                                </li>
                            <?php
                            endif; ?>  
                        </ul>
                </div>
            <?php 
            endif; ?>
        
                <?php
                if (Yii::$app->page->getSubBlock('video1','id')) : ?>
                <div class="g-grid is-fadeIn is-animated">
                        <?php
                        for ($i=1;$i<10;$i++) : ?>
                            <?php
                            $video = Yii::$app->page->getSubBlockInfo('video'.$i,'description');
                            if ($video) : ?>
                            <div class="g-col--half">
                                    <div class="b-video">
                                            <div class="b-video__content">
                                                    <?= $video ?>
                                            </div>
                                            <div class="b-video__title">
                                                    <span class="b-video__link"><?= Yii::$app->page->getSubBlockInfo('video'.$i,'name') ?></span>
                                            </div>
                                    </div>
                            </div>
                            <?php
                           else : 
                               break;
                           endif; ?>
                       <?php
                       endfor; ?>
                </div>
                <?php
                endif; ?>
                
                <?= \app\helpers\ContentHelper::seoText(Yii::$app->page->seoText) ?>
        </div>
</section>
<!-- /PAGE -->