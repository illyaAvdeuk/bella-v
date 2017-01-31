<?php
use yii\helpers\Url;

$this->title = Yii::t('app','events');
?>
<!-- PAGE -->
<section id="page" class="page page__blog">

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
                        <?= Yii::t('app','events') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::t('app','events') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

            <?php $this->beginContent('@app/views/layouts/layout-parts/menu.php'); $this->endContent(); ?>

                <div class="page__content">
                        <div class="g-content--narrow g-top-gutter">
                                <div class="g-col--one-third">
                                        <div class="b-search is-fadeInDown is-animated">
                                            <form action="/events" method="GET" class="b-search__form">
                                                        <input class="b-search__input" name="s" placeholder="Поиск" data-url="<?= Url::to(['/api/events/get-events']) ?>" type="text">
                                                        <button type="submit" class="b-search__submit">
                                                                <i class="b-search__icon"></i>
                                                        </button>
                                                </form>
                                        </div>
                                </div>
                        </div>
                        <div class="b-posts-review__wrapper">
                            
                            <?php
                            foreach ($events as $event) : ?>
                            
                                <div class="b-post-review">
                                        <div class="b-post-review__inner">
                                                <div class="b-post-review__content is-animated is-fadeInDown">
                                                        <div class="b-post-review__title">
                                                                <span class="is-animated is-slideInUp"><?= $event->info->title ?></span>
                                                        </div>
                                                        <div class="divider">
                                                                <span class="divider__line is-animated is-fadeIn"></span>
                                                        </div>
                                                        <div class="b-post-review__desc">
                                                                <span class="is-animated is-slideInUp"><?= $event->info->description ?></span>
                                                        </div>
                                                        <div class="divider divider--hiding">
                                                                <span class="divider__line is-animated is-fadeIn"></span>
                                                        </div>
                                                        <div class="b-post-review__date">
                                                                <span class="is-animated is-slideInUp"><?= $event->getPubDate() ?></span>
                                                        </div>
                                                        <div class="b-post-review__action">
                                                                <a href="<?= $event->url ?>" class="b-post-review__readmore"><?= Yii::t('app','read_more') ?></a>
                                                        </div>
                                                </div>
                                                <div class="b-post-review__img is-animated is-fadeIn">
                                                        <img src="<?= $event->thumbPath ?>" alt="<?= $event->info->title ?>">
                                                </div>
                                        </div>
                                </div>
                            
                            <?php
                            endforeach; ?>
                               
                        </div>

                        <?= \app\widgets\WLinkPager::widget([
                            'pagination' => $pages,
                            'nextPageLabel' => '>',
                            'prevPageLabel' => '<',
                            'lastPageLabel' => '>>',
                            'firstPageLabel' => '<<',
                            'activePageCssClass' => "pagination__link--active",
                            'options' => ['class' => "pagination is-fadeIn is-animated"],
                            'pageCssClass' => 'pagination__item',
                            'linkOptions' => ['class' => "pagination__link"],
                        ]);?>

                        <div class="action-block">
                                <div class="action-block__item action-block__item--centered is-fadeInDown is-animated">
                                        <a href="" class="btn btn--colored" data-modal="subscribeForm"><?= Yii::t('app','subscribe_blog') ?>!</a>
                                </div>
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