<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
?>
<!-- PAGE -->
<section id="page" class="page page__hydropeptide">

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
                        <a href="<?= Url::to(['/consulting']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','consulting') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= Yii::$app->page->getPageInfo('name') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

                <div class="page__content">
                        <div class="b-hero--huge">
                                <div class="b-hero__slide is-fadeIn is-animated" style="background-image: url('<?= Yii::$app->page->getSubBlockThumb('baner') ?>');"></div>
                                <div class="b-hero__content">
                                        <div class="b-hero__text">
                                                <h1 class="b-hero__title title">
                                                        <div class="title__inner is-slideInUp is-animated">
                                                                <div class="title__text">
                                                                        <?= Yii::$app->page->getPageInfo('name') ?>
                                                                        <div class="title__underline is-slideInLeft is-animated"></div>
                                                                </div>
                                                        </div>
                                                </h1>
                                        </div>
                                        <div class="b-hero__text">
                                            <?php
                                            if (Yii::$app->page->getSubBlockInfo('baner_title1','name')) : ?>
                                                <h3 class="b-hero__subtitle title">
                                                        <div class="title__inner is-slideInUp is-animated">
                                                                <div class="title__text g-text--smallcaps">
                                                                        <?= Yii::$app->page->getSubBlockInfo('baner_title1','name') ?>
                                                                        <div class="title__underline is-slideInLeft is-animated"></div>
                                                                </div>
                                                        </div>
                                                </h3>
                                            <?php
                                            endif; ?>
                                            <?php
                                            if (Yii::$app->page->getSubBlockInfo('baner_title2','name')) : ?>
                                                <h3 class="b-hero__subtitle title">
                                                        <div class="title__inner is-slideInUp is-animated">
                                                                <div class="title__text g-text--smallcaps">
                                                                        <?= Yii::$app->page->getSubBlockInfo('baner_title2','name') ?>
                                                                        <div class="title__underline is-slideInLeft is-animated"></div>
                                                                </div>
                                                        </div>
                                                </h3>
                                            <?php
                                            endif; ?>
                                        </div>
                                </div>
                        </div>
                    <article class="g-block is-fadeIn is-animated">
                        <div class="g-content">
                            <?= Yii::$app->page->getPageInfo('text') ?>
                        </div>
                </article>
                <article class="g-block is-fadeIn is-animated">
                            <p class="g-title--small-caps"><?= Yii::$app->page->getSubBlockInfo('two_col_img_text_title','name') ?></p>
                            <?= Yii::$app->page->getSubBlockInfo('two_col_img_text_title','description') ?>
                </article>
                    
            <?php
            for ($i=1;$i<10;$i++) : ?>
                <?php
                $block = Yii::$app->page->getSubBlock('two_col_img_text'.$i,'id');
                if ($block) : ?>
                <article class="g-block is-fadeIn is-animated">
                        <div class="g-content">
                                <div class="g-table g-table--responsive">
                                    <?php
                                    if ($i%2 == 1): ?>
                                        <div class="g-table__cell g-col--five-ninth">
                                            <?= Yii::$app->page->getSubBlockInfo('two_col_img_text'.$i,'text') ?>
                                        </div>
                                        <div class="g-table__cell g-col--four-ninth">
                                            <img src="<?= Yii::$app->page->getSubBlockThumb('two_col_img_text'.$i) ?>" alt="<?= Yii::$app->page->getSubBlockInfo('two_col_img_text'.$i,'name') ?>">
                                        </div>
                                    <?php
                                    else: ?>
                                        <div class="g-table__cell g-col--four-ninth">
                                            <img src="<?= Yii::$app->page->getSubBlockThumb('two_col_img_text'.$i) ?>" alt="<?= Yii::$app->page->getSubBlockInfo('two_col_img_text'.$i,'name') ?>">
                                        </div>
                                        <div class="g-table__cell g-col--five-ninth">
                                            <?= Yii::$app->page->getSubBlockInfo('two_col_img_text'.$i,'text') ?>
                                        </div>
                                    <?php
                                    endif; ?>
                                </div>
                        </div>
                </article>
                <?php
                endif; ?>
            <?php
            endfor; ?>
                    
                

                <?php
                $block = Yii::$app->page->getSubBlock('more_facts1','id');
                if ($block) : ?>
                        <div class="g-content">
                                <p class="g-title--small-caps g-title--big is-fadeIn is-animated"><?= Yii::$app->page->getSubBlockInfo('more_facts_title','name') ?></p>
                                <div class="g-table g-table--vtop g-table--responsive is-fadeIn is-animated">
                                    <?php
                                    for ($i=1;$i<4;$i++) : ?>
                                        <?php
                                        $block = Yii::$app->page->getSubBlock('more_facts'.$i,'id');
                                        if ($block) : ?>
                                        <div class="g-table__cell g-col--one-third">
                                                <div class="g-block g-gutter g--center">
                                                        <div class="g-desc">
                                                                <div class="g-desc__text">
                                                                        <?= Yii::$app->page->getSubBlockInfo('more_facts'.$i,'name') ?>
                                                                <div class="g-desc__underline is-slideInLeft is-animated"></div>
                                                        </div>
                                                        </div>
                                                        <div class="g-picture">
                                                                <img src="<?= Yii::$app->page->getSubBlockThumb('more_facts'.$i) ?>" alt="<?= Yii::$app->page->getSubBlockInfo('more_facts'.$i,'name') ?>">
                                                        </div>
                                                </div>
                                        </div>
                                        <?php
                                        endif; ?>
                                    <?php
                                    endfor; ?>    
                                </div>
                        </div>
                <?php
                endif; ?>

                        <div class="g-content g-block">
                                <div class="g-table g-table--responsive is-fadeIn is-animated">
                                        <div class="g-table__row">
                                                <div class="g-table__cell">
                                                    <?php
                                                    if (Yii::$app->page->getSubBlockThumb('video1')) : ?>
                                                        <div class="b-video">
                                                                <div class="b-video__content">
                                                                    <img src="<?= Yii::$app->page->getSubBlockThumb('video1'); ?>" alt="<?= Yii::$app->page->getSubBlockInfo('footer_img','name') ?>">
                                                                </div>
                                                                <div class="b-video__title">
                                                                        <span class="g-link"><?= Yii::$app->page->getSubBlockInfo('video1','name') ?></span>
                                                                </div>
                                                        </div>
                                                        
                                                    <?php
                                                    elseif (!empty(Yii::$app->page->getSubBlockInfo('video1','description'))) : ?>
                                                        <div class="b-video">
                                                                <div class="b-video__content">
                                                                       <?= Yii::$app->page->getSubBlockInfo('video1','description'); ?>
                                                                </div>
                                                                <div class="b-video__title">
                                                                        <span class="g-link"><?= Yii::$app->page->getSubBlockInfo('video1','name') ?></span>
                                                                </div>
                                                        </div>    
                                                    <?php
                                                    endif; ?>
                                                </div>
                                                <div class="g-table__cell g-text--center b-list--small-caps">
                                                        <a href="<?= Url::to(['/consulting/'.Yii::$app->page->getPage('alias').'/reviews' ]) ?>" class="btn btn--colored">Отзывы</a><br>
                                                        <a href="" class="btn btn--colored" data-modal="show-room"><?= Yii::t('app','show-room') ?></a><br>
                                                        <a href="<?= Url::to(['/calculator']) ?>" class="btn btn--colored"><?= Yii::t('app','calculate_effect') ?></a>
                                                </div>
                                        </div>
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
</section>
<!-- /PAGE -->
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-show-room.php'); $this->endContent(); ?>