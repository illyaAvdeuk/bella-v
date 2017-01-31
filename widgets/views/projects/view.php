<!-- SCREEN_8 -->
<?php 
use yii\helpers\Url;
if (!empty($projectsTop)) : ?>
    <section id="screen8" class="section screen-8 fp-auto-height">
            <div class="layer-2">
                    <div data-anijs="if: scroll, on: window, do: modifiedFadeInRight animated, before: scrollReveal, after: holdAnimClass" class="screen__block screen__block-2 is-animated"></div>	
            </div>

            <div class="screen__inner">
                    <h2 class="screen__title title">
                            <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                    <div class="title__text">
                                            <?= Yii::t('app','our_clients') ?>
                                            <div data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                    </div>
                            </div>
                    </h2>
                    <div class="screen__content">
                            <div class="banners">
                                    <div class="banners__row-1">
                                        
                                        <?php
                                        $i=1;
                                        foreach ($projectsTop as $project) : ?>
                                            <div class="banner banner-<?= $i ?>">
                                                    <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="banner__content is-animated">
                                                            <div class="banner__title">
                                                                    <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated"><?= $project->info->name ?></span>
                                                            </div>
                                                            <!--div class="banner__city">
                                                                    <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">г. Киев</span>
                                                            </div-->
                                                            <div class="banner__action">
                                                                <a href="<?= $project->url ?>" class="banner__readmore"><?= Yii::t('app','read_more') ?></a>
                                                            </div>
                                                    </div>
                                                    <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner__img is-animated">
                                                            <img src="<?= $project->thumbPath ?>" alt="<?= $project->info->name ?>">
                                                    </div>
                                            </div>
                                        <?php
                                        $i++;
                                        endforeach; 
                                        unset($i); ?>
                                            

                                    </div>
                                
                                <?php 
                                if (!empty($projectsBottom)) : ?>
                                
                                    <div class="banners__row-2">
                                        
                                        <?php
                                        $i=1;
                                        foreach ($projectsBottom as $project) : ?>
                                        
                                            <div class="banner banner-<?= $i ?>">
                                                    <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="banner__content is-animated">
                                                            <div class="banner__title">
                                                                    <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated"><?= $project->info->name ?></span>
                                                            </div>
                                                            <!--div class="banner__city">
                                                                    <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">г. Киев</span>
                                                            </div-->
                                                            <div class="banner__action">
                                                                    <a href="<?= $project->url ?>" class="banner__readmore"><?= Yii::t('app','read_more') ?></a>
                                                            </div>
                                                    </div>
                                                    <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner__img is-animated">
                                                            <img src="<?= $project->thumbPath ?>" alt="<?= $project->info->name ?>">
                                                    </div>
                                            </div>

                                        <?php
                                        $i++;
                                        endforeach; 
                                        unset($i); ?>
                                            
                                    </div>
                                
                                <?php 
                                endif; ?>
                                
                                    <div class="screen__action action">
                                            <a data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" href="<?= Url::to(['/portfolio']) ?>" class="link--showmore is-animated">
                                                    <span class="action__text">
                                                            <?= Yii::t('app','show_more') ?>
                                                            <span data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="action__underline is-animated"></span>
                                                    </span>
                                            </a>
                                    </div>
                            </div>
                    </div>
            </div>
    </section>
<?php 
endif; ?>
    <!-- /SCREEN_8 -->

