<?php 
use yii\helpers\Url;
?>
<section id="screen4" class="section screen-4">
        <div class="layer-1">
                <div class="screen__bg" style="background: url('<?= Yii::$app->page->getSubBlockThumbOrDef('home_fon_bg','/images/scr-4/bg.jpg') ?>') no-repeat center center; background-size: cover;" ></div>
        </div>

        <div class="layer-3">
                <div data-anijs="if: scroll, on: window, do: modifiedFadeInRight animated, before: scrollReveal, after: holdAnimClass" class="screen__block screen__block-2 is-animated"></div>	
        </div>

        <div class="screen__inner">
                <div class="screen__promo">
                        <div class="promo__block-1">
                            
                            <?php
                            if (Yii::$app->page->isSubBlockInfo('home_fon_title1','name')) : ?>
                                <div class="promo__title promo__title-1">
                                        <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                            <?= Yii::$app->page->getSubBlockInfo('home_fon_title1','name') ?>
                                        </div>
                                </div>
                            <?php
                            endif; ?>
                            
                            <?php
                            if (Yii::$app->page->isSubBlockInfo('home_fon_title2','name')) : ?>
                                <div class="promo__subtitle-1 subtitle">
                                        <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                <div class="subtitle__text">
                                                        <?= Yii::$app->page->getSubBlockInfo('home_fon_title2','name') ?>
                                                        <div data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="subtitle__underline is-animated"></div>
                                                </div>
                                        </div>
                                </div>
                            <?php
                            endif; ?>
                        </div>

                        <div class="promo__block-2">
                            
                            <?php
                            if (Yii::$app->page->isSubBlockInfo('home_fon_title3','name')) : ?>
                                <div class="promo__title promo__title-2">
                                        <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                            <?= Yii::$app->page->getSubBlockInfo('home_fon_title3','name') ?>
                                        </div>
                                </div>
                            <?php
                            endif; ?>
                            
                            <?php
                            if (Yii::$app->page->isSubBlock('home_fon_feature_1')) : ?>
                                <div class="promo__list list">
                                    <?php
                                    for ($i=1;$i<10;$i++) : 
                                        if (Yii::$app->page->isSubBlockInfo('home_fon_feature_'.$i,'name')) : ?>
                                    
                                        <div class="list__item item">
                                                <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                        <div class="item__text">
                                                                <?= Yii::$app->page->getSubBlockInfo('home_fon_feature_'.$i,'name') ?>
                                                                <div data-anijs="if: scroll, on: window, do: slideInRight animated, before: scrollReveal, after: holdAnimClass" class="item__underline is-animated"></div>
                                                        </div>
                                                </div>
                                        </div>
                                        <?php
                                        else : 
                                            break;
                                        endif;
                                    endfor; ?>    
                                </div>
                            <?php
                            endif; ?>
                            
                        </div>
                </div>
        </div>
</section>