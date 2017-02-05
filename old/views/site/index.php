<?php
use yii\helpers\Url;

$this->title = Yii::t('app','main');
?>
<!-- SLIDER SECTIONS -->
<div id="fullpage">

    <!-- SCREEN_1 -->
    <section class="section screen screen-1">
            <div  data-anijs="if: load, on: window, do: fadeIn animated, after: holdAnimClass" class="layer-1 is-animated">
                <div class="screen__bg" style="background: url('<?= Yii::$app->page->getSubBlockThumbOrDef('home_top_bg','/images/screen1-bg.jpg') ?>') no-repeat center center; background-size: cover;" ></div>
            </div>

            <div class="layer-2">
                    <div data-anijs="if: load, on: window, do: modifiedFadeInLeft animated, after: holdAnimClass" class="screen__block is-animated"></div>	
            </div>

            <div class="screen__content">
                    <div class="logo">
                            <a href="" data-anijs="if: load, on: window, do: slideInUp animated, after: holdAnimClass" class="logo__link is-animated">
                                    <img src="images/logo.png" alt="" class="logo__img">
                            </a>
                    </div>
                    <div class="screen__promo promo">
                        
                        <?php
                        if (Yii::$app->page->isSubBlockInfo('home_top_bg_title1','name')) : ?>
                            <div class="promo__title promo__title-1">
                                <div data-anijs="if: load, on: window, do: slideInUp animated, after: holdAnimClass" class="is-animated">
                                    <?= Yii::$app->page->getSubBlockInfo('home_top_bg_title1','name') ?>
                                </div>
                            </div>
                        <?php
                        endif; ?>
                        
                        <?php
                        if (Yii::$app->page->isSubBlockInfo('home_top_bg_title1','description')) : ?>
                            <div class="promo__subtitle-1 subtitle">
                                    <div data-anijs="if: load, on: window, do: slideInUp animated, after: holdAnimClass" class="is-animated">
                                            <div class="subtitle__text">
                                                    <?= Yii::$app->page->getSubBlockInfo('home_top_bg_title1','description', true) ?>
                                                    <div data-anijs="if: load, on: window, do: slideInLeft animated, after: holdAnimClass" class="subtitle__underline underline is-animated"></div>
                                            </div>
                                    </div>
                            </div>
                        <?php
                        endif; ?>
                        
                        <?php
                        if (Yii::$app->page->isSubBlockInfo('home_top_bg_title2','name')) : ?>
                            <div class="promo__title promo__title-2">
                                <div data-anijs="if: load, on: window, do: slideInUp animated, after: holdAnimClass" class="is-animated">
                                    <?= Yii::$app->page->getSubBlockInfo('home_top_bg_title2','name') ?>
                                </div>
                            </div>
                        <?php
                        endif; ?>
                        
                        <?php
                        if (Yii::$app->page->isSubBlockInfo('home_top_bg_title2','description')) : ?>
                            <div class="promo__subtitle-2 subtitle">
                                    <div data-anijs="if: load, on: window, do: slideInUp animated, after: holdAnimClass" class="is-animated">
                                            <div class="subtitle__text">
                                                    <?= Yii::$app->page->getSubBlockInfo('home_top_bg_title2','description', true) ?>
                                                    <div data-anijs="if: load, on: window, do: slideInRight animated, after: holdAnimClass" class="subtitle__underline underline is-animated"></div>
                                            </div>
                                    </div>
                            </div>
                        <?php
                        endif; ?>
                        
                    </div>
            </div>


                    <!-- scroll-down -->
                    <div class="scroll-down bounceInUp is-animated">
                            <div class="scroll-down__inner">
                                    <i class="icon__scroll-down"></i>
                                    <span class="scroll-down__text"><?= Yii::t('app','down') ?></span>
                            </div>
                    </div>
                    <!-- /scroll-down -->
    </section>
    <!-- /SCREEN_1 -->


    <!-- SCREEN_2 -->
    <section id="screen2" class="section screen-2">

            <div class="layer-1">
                    <div data-anijs="if: scroll, on: window, do: modifiedFadeInLeft animated, before: scrollReveal, after: holdAnimClass" class="screen__block screen__block-1 is-animated"></div>
            </div>

            <div class="layer-2">
                    <div data-anijs="if: scroll, on: window, do: modifiedFadeInRight animated, before: scrollReveal, after: holdAnimClass" class="screen__block screen__block-2 is-animated"></div>	
            </div>

            <div class="screen__inner">
                    <h2 class="screen__title title">
                            <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class=" is-animated">
                                    <div class="title__text">
                                            <?= Yii::t('app','services') ?>
                                            <div data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                    </div>
                            </div>
                    </h2>
                    <div class="screen__content">
                        
                        <?php
                        if (Yii::$app->page->isSubBlock('home_srv_consulting')) : ?>
                            <div class="service service-1 left">
                                <a href="<?= Url::to(['/consulting']) ?>" data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="service__title is-animated">
                                            <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class=" is-animated">
                                                    <?= Yii::$app->page->getSubBlockInfo('home_srv_consulting','name') ?>
                                            </span>
                                    </a>
                                    <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="service__banner is-animated">
                                            <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_srv_consulting','/images/scr2-img1.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_srv_consulting','name') ?>">
                                    </div>
                            </div>
                        <?php
                        endif; ?>
                        
                        <?php
                        if (Yii::$app->page->isSubBlock('home_srv_equipment')) : ?>
                            <div class="service service-2 right">
                                    <a href="<?= Url::to(['/equipment']) ?>" data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="service__title is-animated">
                                            <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class=" is-animated">
                                                <?= Yii::$app->page->getSubBlockInfo('home_srv_equipment','name') ?>
                                            </span>
                                    </a>
                                    <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="service__banner is-animated">
                                            <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_srv_equipment','/images/scr2-img2.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_srv_equipment','name') ?>">
                                    </div>
                            </div>
                        <?php
                        endif; ?>
                        
                        
                        <?php
                        if (Yii::$app->page->isSubBlock('home_srv_cosmetic')) : ?>
                            <div class="service service-3 left">
                                    <a href="<?= Url::to(['/cosmetic']) ?>" data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="service__title is-animated">
                                            <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class=" is-animated">
                                                <?= Yii::$app->page->getSubBlockInfo('home_srv_cosmetic','name') ?>
                                            </span>
                                    </a>
                                    <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="service__banner is-animated">
                                            <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_srv_cosmetic','/images/scr2-img3.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_srv_cosmetic','name') ?>">
                                    </div>
                            </div>
                        <?php
                        endif; ?>
                        
                        <?php
                        if (Yii::$app->page->isSubBlock('home_srv_study')) : ?>
                            <div class="service service-4 right">
                                    <a href="<?= Url::to(['/study']) ?>" data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="service__title is-animated">
                                            <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class=" is-animated">
                                                <?= Yii::$app->page->getSubBlockInfo('home_srv_study','name') ?>
                                            </span>
                                    </a>
                                    <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="service__banner is-animated">
                                            <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_srv_study','/images/scr2-img4.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_srv_study','name') ?>">
                                    </div>
                            </div>
                        <?php
                        endif; ?>
                        
                    </div>
            </div>

    </section>
    <!-- /SCREEN_2 -->


    <!-- SCREEN_3 -->
    <section id="screen3" class="section screen-3">
            <div class="screen__inner">
                    <h2 class="screen__title title">
                            <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                    <div class="title__text">
                                            <?= Yii::t('app','our_fields') ?>
                                            <div data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                    </div>
                            </div>
                    </h2>
                    <div class="screen__content">
                            <div class="banners">
                                
                                <?php
                                if (Yii::$app->page->isSubBlock('home_area_spa_wellness')) : ?>
                                    <div class="banner banner-1">
                                            <div class="banner__title">
                                                    <a href="<?= Url::to(['/consulting/spa-wellness']) ?>" data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="inner is-animated">
                                                            <span class="slideInUp"><?= Yii::$app->page->getSubBlockInfo('home_area_spa_wellness','name') ?></span>
                                                    </a>
                                            </div>
                                            <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner__img is-animated">
                                                    <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_area_spa_wellness','/images/scr-3/img-1.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_area_spa_wellness','name') ?>">
                                            </div>
                                    </div>
                                <?php
                                endif; ?>
                                
                                <?php
                                if (Yii::$app->page->isSubBlock('home_area_salony')) : ?>
                                    <div class="banner banner-2">
                                            <div class="banner__title">
                                                <a href="<?= Url::to(['/consulting/salony']) ?>" data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="inner is-animated">
                                                            <span class="slideInUp"><?= Yii::$app->page->getSubBlockInfo('home_area_salony','name') ?></span>
                                                    </a>
                                            </div>
                                            <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner__img is-animated">
                                                    <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_area_salony','/images/scr-3/img-2.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_area_salony','name') ?>">
                                            </div>
                                    </div>
                                <?php
                                endif; ?>

                                <?php
                                if (Yii::$app->page->isSubBlock('home_area_mobile_cosmo')) : ?>
                                    <div class="banner banner-3">
                                            <div class="banner__title">
                                                    <a href="<?= Url::to(['/consulting/mobile-cosmo']) ?>" data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="inner is-animated">
                                                            <span class="slideInUp"><?= Yii::$app->page->getSubBlockInfo('home_area_mobile_cosmo','name') ?></span>
                                                    </a>
                                            </div>
                                            <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner__img is-animated">
                                                    <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_area_mobile_cosmo','/images/scr-3/img-3.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_area_mobile_cosmo','name') ?>">
                                            </div>
                                    </div>
                                <?php
                                endif; ?>
                                
                                
                                <?php
                                if (Yii::$app->page->isSubBlock('home_area_sanatorii')) : ?>
                                    <div class="banner banner-4">
                                            <div class="banner__title">
                                                    <a href="<?= Url::to(['/consulting/sanatorii']) ?>" data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="inner is-animated">
                                                            <span class="slideInUp"><?= Yii::$app->page->getSubBlockInfo('home_area_sanatorii','name') ?></span>
                                                    </a>
                                            </div>
                                            <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner__img is-animated">
                                                    <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_area_sanatorii','/images/scr-3/img-4.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_area_sanatorii','name') ?>">
                                            </div>
                                    </div>
                                <?php
                                endif; ?>
                                
                                <?php
                                if (Yii::$app->page->isSubBlock('home_area_fitnes')) : ?>
                                    <div class="banner banner-5">
                                            <div class="banner__title">
                                                    <a href="<?= Url::to(['/consulting/fitnes']) ?>" data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="inner is-animated">
                                                            <span class="slideInUp"><?= Yii::$app->page->getSubBlockInfo('home_area_fitnes','name') ?></span>
                                                    </a>
                                            </div>
                                            <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner__img is-animated">
                                                    <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_area_fitnes','/images/scr-3/img-5.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_area_fitnes','name') ?>">
                                            </div>
                                    </div>
                                <?php
                                endif; ?>
                                
                                <?php
                                if (Yii::$app->page->isSubBlock('home_area_hotels')) : ?>
                                    <div class="banner banner-6">
                                            <div class="banner__title">
                                                    <a href="<?= Url::to(['/consulting/hotels']) ?>" data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="inner is-animated">
                                                            <span class="slideInUp"><?= Yii::$app->page->getSubBlockInfo('home_area_hotels','name') ?></span>
                                                    </a>
                                            </div>
                                            <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner__img is-animated">
                                                    <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_area_hotels','/images/scr-3/img-6.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_area_hotels','name') ?>">
                                            </div>
                                    </div>
                                <?php
                                endif; ?>
                                
                            </div>
                    </div>
            </div>

    </section>
    <!-- /SCREEN_3 -->


    <!-- SCREEN_4 -->
    <?= \app\widgets\WFon::widget() ?>
    <!-- /SCREEN_4 -->


    <!-- SCREEN_5 -->
    <?= \app\widgets\WWhatWeDo::widget() ?>
    <!-- /SCREEN_5 -->


    <!-- SCREEN_6 -->
    <?= \app\widgets\WWhyWe::widget() ?>
    <!-- /SCREEN_6 -->


    <!-- SCREEN_7 -->
    <section id="screen7" class="section screen-7 fp-auto-height">
            <div class="layer-1">
                    <div data-anijs="if: scroll, on: window, do: modifiedFadeInLeft animated, before: scrollReveal, after: holdAnimClass" class="screen__block screen__block-1 is-animated"></div>
            </div>

            <div class="screen__inner">
                    <div class="screen__promo">
                            
                        <?php
                        if (Yii::$app->page->isSubBlock('home_brand_title')) : ?>
                            <div class="promo__header container">
                                <?php
                                if (Yii::$app->page->isSubBlockInfo('home_brand_title','name')) : ?>
                                    <div class="promo__title title">
                                            <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                    <div class="title__text">
                                                            <?= Yii::$app->page->getSubBlockInfo('home_brand_title','name') ?>
                                                            <div data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                                    </div>
                                            </div>
                                    </div>
                                <?php
                                endif; ?>
                                
                                <?php
                                if (Yii::$app->page->isSubBlockInfo('home_brand_title','description')) : ?>
                                    <div class="promo__title title">
                                            <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                    <div class="title__text">
                                                            <?= Yii::$app->page->getSubBlockInfo('home_brand_title','description',true) ?>
                                                            <div data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                                    </div>
                                            </div>
                                    </div>
                                <?php
                                endif; ?>
                            </div>
                        <?php
                        endif; ?>
                        
                            <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="grid slider-brands is-animated">
                                    <div class="slider-brands__wrapper">
                                            <ul class="slider-brands js-slider-brands">
                                                <?php
                                                foreach ($brands as $brand) : ?>
                                                    <li class="slider-brands__item item">
                                                            <figure class="item__picture">
                                                                    <a href="<?= $brand->homeUrl ?>" class="item__link">
                                                                        <img src="<?= $brand->thumbPathSm ?>" alt="<?= $brand->info->name ?>">
                                                                    </a>
                                                            </figure>
                                                    </li>
                                                <?php
                                                endforeach; ?>   
                                            </ul>
                                    </div>
                            </div>
                            <div class="action-block container">
                                    <div data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: scrollReveal, after: holdAnimClass" class="action-block__item is-animated">
                                            <a href="" class="btn btn--primary" data-modal="test-drive"><?= Yii::t('app','test-drive') ?></a>
                                    </div>
                                    <div data-anijs="if: scroll, on: window, do: fadeInRight animated, before: scrollReveal, after: holdAnimClass" class="action-block__item is-animated">
                                            <a href="<?= Url::to(['/calculator']) ?>" class="btn btn--primary"><?= Yii::t('app','calculate_equipment_effect') ?></a>
                                    </div>
                            </div>

                    </div>
            </div>
    </section>
    <!-- /SCREEN_7 -->


    <!-- SCREEN_8 -->
    <?= \app\widgets\WProjects::widget(); ?>
    <!-- /SCREEN_8 -->

    <!-- SCREEN_9 -->
    <?= \app\widgets\WReviews::widget(); ?>
    <!-- /SCREEN_9 -->


    <!-- SCREEN_10 -->
    <section id="screen10" class="section screen-10 fp-auto-height">
            <div class="layer-2">
                    <div data-anijs="if: scroll, on: window, do: modifiedFadeInRight animated, before: scrollReveal, after: holdAnimClass" class="screen__block screen__block-2 is-animated"></div>	
            </div>

            <div class="screen__inner">
                    <h2 class="screen__title title">
                            <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                    <div class="title__text">
                                            <?= Yii::t('app','blog') ?>
                                            <div data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                    </div>
                            </div>
                    </h2>
                    <div class="screen__content">
                            <div class="banners">
                                
                                <?php
                                $i = 1;
                                foreach ($lastPosts as $post) : ?>
                                
                                    <div class="banner banner-<?= $i ?>">
                                            <div class="banner__inner">
                                                    <div class="banner__content">
                                                            <div class="banner__title">
                                                                    <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated"><?= $post->info->title ?></span>
                                                            </div>
                                                            <div class="divider">
                                                                    <span data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="divider__line is-animated"></span>
                                                            </div>
                                                            <div class="banner__desc">
                                                                    <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated"><?= strip_tags($post->info->description) ?></span>
                                                            </div>
                                                            <div class="divider divider--hiding">
                                                                    <span data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="divider__line is-animated"></span>
                                                            </div>
                                                            <div class="banner__date">
                                                                    <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated"><?= $post->getPubDate() ?></span>
                                                            </div>
                                                            <div class="banner__action">
                                                                    <a href="<?= $post->url ?>" class="banner__readmore"><?= Yii::t('app','read_more') ?></a>
                                                            </div>
                                                    </div>
                                                    <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner__img is-animated">
                                                            <img src="<?= $post->thumbPath ?>" alt="<?= $post->info->title ?>">
                                                    </div>
                                            </div>
                                    </div>

                                <?php
                                endforeach; 
                                unset($i); ?>
                                    

                                    <div class="screen__action action">
                                        <a href="<?= Url::to(['/blog']) ?>" class="action__link--showmore">
                                                    <span class="action__text">
                                                            <?= Yii::t('app','show_more') ?>
                                                            <span data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="action__underline is-animated"></span>
                                                    </span>
                                            </a>
                                    </div>
                            </div>

                            <div class="grid action-block container">
                                    <div class="action-block__item">
                                            <a href="" class="btn btn--primary" data-modal="subscribeForm"><?= Yii::t('app','subscribe_blog') ?></a>
                                    </div>
                            </div>
                    </div>
            </div>
    </section>
    <!-- /SCREEN_10 -->
</div>
<!-- /SLIDER SECTIONS -->
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-test-drive.php'); $this->endContent(); ?>