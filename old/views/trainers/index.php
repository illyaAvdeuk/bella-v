<?php
use yii\helpers\Url;

$this->title = Yii::t('app','trainers');
?>
<!-- PAGE -->
<section id="page" class="page page__team">

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
                    <li class="breadcrumbs__item">
                        <?= Yii::t('app','trainers') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::t('app','trainers') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <div class="b-hero is-fadeIn is-animated">
                        <div class="b-hero__slide is-fadeIn is-animated" style="background-image: url('<?= Yii::$app->page->getSubBlockThumbOrDef('baner','/images/team/slide.jpg') ?>');"></div>
                        <div class="b-hero__content">
                                <div class="b-hero__headers">
                                    <?php
                                    if (Yii::$app->page->getSubBlockInfo('baner_title1','name')) : ?>
                                        <h2 class="b-hero__subtitle title">
                                                <div class="title__inner is-slideInUp is-animated">
                                                        <div class="title__text">
                                                                <?= Yii::$app->page->getSubBlockInfo('baner_title1','name') ?>
                                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                                        </div>
                                                </div>
                                        </h2>
                                    <?php
                                    endif; ?>
                                    <?php
                                    if (Yii::$app->page->getSubBlockInfo('baner_title2','name')) : ?>
                                        <h3 class="b-hero__subtitle title">
                                                <div class="title__inner is-slideInUp is-animated">
                                                        <div class="title__text">
                                                                 <?= Yii::$app->page->getSubBlockInfo('baner_title2','name') ?>
                                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                                        </div>
                                                </div>
                                        </h3>
                                    <?php
                                    endif; ?>
                                </div>
                        </div>
                        <div class="b-hero__links links is-slideInRight is-animated">
                            <div class="links__wrapper">
                                <a href="<?= Url::to(['/study/shedule']) ?>" class="b-hero__link link"><span class="link__text link__text--small"><?= Yii::t('app','shedule') ?></span></a>
                            </div>
                        </div>
                </div>
                <div class="page__content">

                        <div class="b-team">
                            
                            <?php
                            $i=1;
                            foreach ($trainers as $trainer) : ?>
                            
                                <div class="b-team__item" data-modal="team_<?= $i ?>">
                                    <div class="b-team__inner">
                                        <div class="b-team__content is-animated is-fadeInDown">
                                            <div class="b-team__title">
                                                <span class="is-animated is-slideInUp"><?= $trainer->info->name ?></span>
                                            </div>
                                            <div class="divider">
                                                <span class="divider__line is-animated is-fadeIn"></span>
                                            </div>
                                            <div class="b-team__position">
                                                <span class="is-animated is-slideInUp"><?= $trainer->info->sub_title ?></span>
                                            </div>
                                            <div class="b-team__desc">
                                                <span class="is-animated is-slideInUp"><?= $trainer->info->description ?></span>
                                            </div>
                                        </div>
                                        <div class="b-team__img is-animated is-fadeIn">
                                            <img src="<?= $trainer->thumbPath ?>" alt="<?= $trainer->info->name ?>">
                                        </div>
                                    </div>
                                </div>
                            
                            <?php
                            $i++;
                            endforeach; ?>
                            
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
<!-- MODAL POPUPS -->
<div style="display: none;">
    
    <?php
    $i=1;
    foreach ($trainers as $trainer) : ?>    
    
    <div class="b-team-modal g-modal box-modal" id="team_<?= $i ?>">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close"></i></div>

        <div class="g-modal__inner">
                <img src="<?= $trainer->thumbPath ?>" alt="<?= $trainer->info->name ?>" class="b-team-modal__photo">
                <div class="b-team-modal__title">
                    <div class="title__text">
                        <?= $trainer->info->name ?>
                        <div class="title__underline"></div>
                    </div>
                </div>
                <div class="b-team-modal__position"><?= $trainer->info->sub_title ?></div>
                <?= $trainer->info->text ?>
        </div>
    </div><!-- /modal -->

    <?php
    $i++;
    endforeach; ?>

</div>
<!-- /MODAL POPUPS -->