<?php
use yii\helpers\Url;
use app\helpers\ContentHelper;

$this->title = $product->info->name;
?>
<!-- PAGE -->
<section id="page" class="page page__therapy">

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
                    <?php
                    if ($category->id != $product->category->id): ?>
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= $product->category->equipmentKitUrl ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $product->category->info->name ?></span>
                        </a>
                    </li>
                    <?php
                    endif; ?>
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= Url::to(["/equipment/{$category->alias}/{$brand->alias}/b{$brand->id}"]) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $brand->info->name ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $product->info->name ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->


                <!-- filter -->
                <div class="filter is-fadeInDown is-animated">
                        <?= $this->render('_filter',[
                            'tags' => $tags,
                            'brands' => $brands,
                            'category' => $category
                        ]) ?>
                </div>
                <!-- /filter -->
        
        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= $product->info->name ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>        
                
                <?php
                if (Yii::$app->page->getSubBlock('baner','id')) : ?>
                <h2 class="g-text--promo is-fadeIn is-animated"><?= Yii::$app->page->getSubBlockInfo('baner','name') ?></h2>

                <div class="b-hero">
                        <div class="b-hero__slide is-fadeIn is-animated" style="background-image: url('<?= Yii::$app->page->getSubBlockThumb('baner') ?>');"></div>
                        <div class="b-hero__content">
                                <div class="b-hero__text b-hero__text--top-middle is-slideInUp is-animated">
                                        <?= Yii::$app->page->getSubBlockInfo('baner','description') ?>
                                </div>
                        </div>
                </div>
                <?php
                endif; ?>
                
                <div class="b-text is-fadeIn is-animated">
                    <?= Yii::$app->page->getSubBlockInfo('content','text') ?>
                </div>
                
                <div class="b-product-promo">
                        <div class="b-product-promo__picture">
                                <img src="<?= $product->thumbPath ?>" alt="<?= $product->info->name ?>">
                        </div>
                        <div class="b-product-promo__table">
                                <div class="b-product-promo__row is-fadeIn is-animated">
                                        <?= ContentHelper::productFeature($product->info->feature1,'left') ?>
                                        <?= ContentHelper::productFeature($product->info->feature2,'right') ?>
                                </div>
                                <div class="b-product-promo__row b-product-promo__row--narrow is-fadeIn is-animated">
                                        <?= ContentHelper::productFeature($product->info->feature3,'left') ?>
                                        <?= ContentHelper::productFeature($product->info->feature4,'right') ?>
                                </div>
                                <div class="b-product-promo__row is-fadeIn is-animated">
                                        <?= ContentHelper::productFeature($product->info->feature5,'left') ?>
                                        <?= ContentHelper::productFeature($product->info->feature6,'right') ?>
                                </div>
                        </div>
                </div>

            
                <nav class="b-list b-list--underlined is-fadeIn is-animated">
                    <?php
                    if (Yii::$app->page->getSubBlock('feature1','id')) : ?>
                    <ul class="b-list__list">
                        <?php
                        for ($i=1;$i<10;$i++) : ?>
                            <?php
                            $feature = Yii::$app->page->getSubBlockInfo('feature'.$i,'description');
                            if ($feature) : ?>
                                <li class="b-list__item">
                                    <div class="b-list__text">
                                        <?= $feature ?>
                                        <div class="b-list__underline is-slideInLeft is-animated"></div>
                                    </div>
                                </li>
                            <?php
                            else : 
                                break;
                            endif; ?>
                        <?php
                        endfor; ?>
                    </ul>
                    <?php
                    endif; ?>
                </nav>
                
                <div class="action-block">
                    <div class="action-block__item is-fadeInLeft is-animated animated">
                        <a href="" class="btn btn--colored" data-modal="test-drive"><?= Yii::t('app','test-drive') ?></a>
                    </div>
                    <div data-anijs="if: scroll, on: window, do: fadeInRight animated, before: scrollReveal, after: holdAnimClass" class="action-block__item is-animated">
                        <a href="<?= Url::to(['/calculator/equipment']) ?>" class="btn btn--colored"><?= Yii::t('app','calculate_equipment_effect') ?></a>
                    </div>
                </div>
                
                <div class="b-text">
                    <?= $product->info->text ?>
                </div>
                
                <?php
                if (Yii::$app->page->getSubBlock('carousel1','id')) : ?>
                <div class="grid slider-accessories is-fadeIn is-animated">
                        <div class="slider-accessories__wrapper">
                                <ul class="slider-accessories js-slider-accessories">
                                    <?php
                                    for ($i=1;$i<10;$i++) : ?>
                                        <?php
                                        $img = Yii::$app->page->getSubBlockThumb('carousel'.$i);
                                        if ($img) : ?>
                                            <li class="slider-accessories__item item">
                                                    <figure class="item__picture">
                                                            <a href="<?= $img ?>" class="item__link js-slider-gallery" rel="carousel">
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
                
                <div class="page__content">
                        <div class="action-block">
                                <div class="action-block__item action-block__1 is-slideInLeft is-animated">
                                        <a href="" class="btn btn--colored" data-modal="seminar"><?= Yii::t('app','to_seminar') ?></a>
                                </div>
                                <div class="action-block__item action-block__2 is-slideInRight is-animated">
                                        <a href="" class="btn btn--colored" data-modal="subscribeForm"><?= Yii::t('app','subscribe_channel') ?></a>
                                </div>
                        </div>
                </div>
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

        <div class="layer layer-1">
                <div class="page__block page__block-1 is-modifiedFadeInLeft is-animated"></div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 ismodifiedFadeInRight is-animated"></div>	
        </div>

        <div class="layer layer-3">
                <div class="page__block page__block-3 is-modifiedFadeInLeft is-animated"></div>
        </div>

        <div class="layer layer-4">
                <div class="page__block page__block-4 ismodifiedFadeInRight is-animated"></div>	
        </div>

        <div class="layer layer-5">
                <div class="page__block page__block-5 is-modifiedFadeInLeft is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-seminar.php'); $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-test-drive.php'); $this->endContent(); ?>