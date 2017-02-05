<?php
use yii\helpers\Url;

$this->title = $category->info->name;
?>
<!-- PAGE -->
<section id="page" class="page page__payback">

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
                        <a href="<?= Url::to(['/stocks']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','stocks') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $category->info->name ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                 <?= $category->info->name ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <div class="page__content">
                        <!-- b-best-deal__list -->
                        <div class="b-best-deal__list">
                            
                            <?php
                            $i=1;
                            foreach ($stocks as $stock) : ?>
                            
                                <div class="b-best-deal__item b-best-deal__item-<?= $i ?> is-fadeIn is-animated">
                                        <div class="b-best-deal__img">
                                            <img src="<?= $stock->thumbPath ?>" alt="<?= $stock->info->name ?>">
                                        </div>
                                        <a href="<?= $stock->product->searchUrl ?>" class="b-best-deal__title">
                                            <div class="g-as-table is-visible is-slideInUp is-animated">
                                                <div class="g-as-table-cell">
                                                    <span class="g-text--big"><?= $stock->info->name ?></span>
                                                    <span class="g-text--big g-text--color-alt"><?= $stock->info->sub_title ?></span>
                                                    <span class="g-text--big"><?= $stock->info->description ?></span>
                                                    <div class="g-as-inline-block">
                                                        <div class="g-form__col--one g-input-file js-input-file">
                                                            <?php
                                                            if ($stock->attachedFiles) : 
                                                                foreach ($stock->attachedFiles as $file) : ?>
                                                                    <p><a href="<?= $file->path ?>" class="g-input-file__path"><?= $file->title ?></a></p>
                                                                <?php
                                                                endforeach;
                                                            endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                </div>

                            <?php
                            $i++;
                            endforeach; ?>
                            
                        </div>
                        <!-- /b-best-deal__list -->

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

                        <!-- b-banners -->
                        <div class="b-banners__wrapper b-best-deal__banners">
                            
                            <?php
                            foreach ($posts as $post) : ?>
                                <div class="b-banner g-col--one-third left is-fadeIn is-animated">
                                        <div class="b-banner__photo">
                                            <img src="<?= $post->thumbPath ?>" alt="<?= $post->info->title ?>">
                                        </div>
                                        <div class="b-banner__content">
                                                <a href="<?= $post->url ?>" class="b-banner__title--alt g-text--transform-none is-fadeIn is-animated">
                                                        <span class="is-slideInUp is-animated"><?= $post->info->title ?></span>
                                                </a>
                                        </div>
                                </div>
                            <?php
                            endforeach; ?>
                        </div>
                        <!-- /b-banners -->
                </div>
                <?= \app\helpers\ContentHelper::seoText(Yii::$app->page->seoText) ?>
        </div>

        <div class="layer layer-1">
                <div class="page__block page__block-1 is-modifiedFadeInLeft is-animated"></div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->