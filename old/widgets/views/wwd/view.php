<?php
use yii\helpers\Url;
?>
<section id="screen5" class="section screen-5">
        <div class="layer-1">
                <div data-anijs="if: scroll, on: window, do: modifiedFadeInLeft animated, before: scrollReveal, after: holdAnimClass" class="screen__block screen__block-1 is-animated"></div>
        </div>

        <div class="screen__inner">
                <h2 class="screen__title title">
                        <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                <div class="title__text">
                                        Что мы делаем?
                                        <div data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                </div>
                        </div>
                </h2>
                <div class="screen__content">
                        <div class="banners">
                            
                            <?php
                            if (Yii::$app->page->isSubBlock('home_wwd_consulting')) : ?>
                                <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner banner-1 is-animated">
                                        <div class="banner__img">
                                                <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_wwd_consulting','/images/scr-5/img-1.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_wwd_consulting','name') ?>">
                                                <div class="banner__content">
                                                        <div class="banner__inner"><?= Yii::$app->page->getSubBlockInfo('home_wwd_consulting','description') ?></div>
                                                </div>
                                        </div>
                                        <a href="<?= Url::to(['/consulting']) ?>" class="banner__title">
                                                <div class="is-visible">
                                                        <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                                <?= Yii::$app->page->getSubBlockInfo('home_wwd_consulting','name') ?>
                                                        </span>
                                                </div>
                                                <div class="is-hidden">
                                                        <?= Yii::$app->page->getSubBlockInfo('home_wwd_consulting','text') ?>
                                                </div>
                                        </a>
                                </div>
                            <?php
                            endif; ?>

                            <?php
                            if (Yii::$app->page->isSubBlock('home_wwd_equipment')) : ?>
                                <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner banner-2 is-animated">
                                        <div class="banner__img">
                                                <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_wwd_equipment','/images/scr-5/img-2.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_wwd_equipment','name') ?>">
                                                <div class="banner__content">
                                                        <div class="banner__inner">
                                                                <?= Yii::$app->page->getSubBlockInfo('home_wwd_equipment','description') ?>
                                                        </div>
                                                </div>
                                        </div>
                                        <a href="<?= Url::to(['/equipment']) ?>" class="banner__title">
                                                <div class="is-visible">
                                                        <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                                <?= Yii::$app->page->getSubBlockInfo('home_wwd_equipment','name') ?>
                                                        </span>
                                                </div>
                                                <div class="is-hidden">
                                                        <?= Yii::$app->page->getSubBlockInfo('home_wwd_equipment','text') ?>
                                                </div>
                                        </a>
                                </div>
                            <?php
                            endif; ?>
                            
                            <?php
                            if (Yii::$app->page->isSubBlock('home_wwd_cosmetic')) : ?>
                                <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner banner-3 is-animated">
                                        <div class="banner__img">
                                                <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_wwd_cosmetic','/images/scr-5/img-3.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_wwd_cosmetic','name') ?>">
                                                <div class="banner__content">
                                                        <div class="banner__inner">
                                                                <?= Yii::$app->page->getSubBlockInfo('home_wwd_cosmetic','description') ?>
                                                        </div>
                                                </div>
                                        </div>
                                        <a href="<?= Url::to(['/cosmetic']) ?>" class="banner__title">
                                                <div class="is-visible">
                                                        <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                                <?= Yii::$app->page->getSubBlockInfo('home_wwd_cosmetic','name') ?>
                                                        </span>
                                                </div>
                                                <div class="is-hidden">
                                                       <?= Yii::$app->page->getSubBlockInfo('home_wwd_cosmetic','text') ?>
                                                </div>
                                        </a>
                                </div>
                            <?php
                            endif; ?>
                            
                            <?php
                            if (Yii::$app->page->isSubBlock('home_wwd_study')) : ?>
                                <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner banner-4 is-animated">
                                        <div class="banner__img">
                                                <img src="<?= Yii::$app->page->getSubBlockThumbOrDef('home_wwd_study','/images/scr-5/img-4.jpg') ?>" alt="<?= Yii::$app->page->getSubBlockInfo('home_wwd_study','name') ?>">
                                                <div class="banner__content">
                                                        <div class="banner__inner">
                                                                <?= Yii::$app->page->getSubBlockInfo('home_wwd_study','description') ?>
                                                        </div>
                                                </div>
                                        </div>
                                        <a href="<?= Url::to(['/study']) ?>" class="banner__title">
                                                <div class="is-visible">
                                                        <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                                <?= Yii::$app->page->getSubBlockInfo('home_wwd_study','name') ?>
                                                        </span>
                                                </div>
                                                <div class="is-hidden">
                                                        <?= Yii::$app->page->getSubBlockInfo('home_wwd_study','text') ?>
                                                </div>
                                        </a>
                                </div>
                            <?php
                            endif; ?>
                            
                        </div>
                </div>
        </div>
</section>