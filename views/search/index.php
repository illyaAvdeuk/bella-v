<?php
use yii\helpers\Url;

$this->title = Yii::t('app','site_search');
?>
<!-- PAGE -->
<section id="page" class="page page__bt">

        <div class="page__inner">
                <!-- breadcrumbs -->
                <div class="breadcrumbs is-slideInLeft is-animated">
                <ol class="breadcrumbs__list">
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= Url::to(['/']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','main') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= Yii::t('app','site_search') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::t('app','site_search') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <?php
                if ($products) : ?>
                <div class="b-media b-media--outside-up">
                        <ul class="b-media__list b-media__list--inside-down">
                            
                            <?php
                            foreach ($products as $product) : ?>
                            
                                <li class="b-media__item is-fadeIn is-animated">
                                        <div class="b-media__title">
                                                <a href="<?= $product->searchUrl ?>" class="b-media__link"><?= $product->info->name ?></a>
                                        </div>
                                        <a href="<?= $product->searchUrl ?>" class="b-media__inner">
                                                <span class="b-media__picture">
                                                        <img src="<?= $product->thumbPath ?>" alt="<?= $product->info->name ?>">
                                                </span>
                                        </a>
                                </li>
                            
                            <?php
                            endforeach; ?>    
                                
                        </ul>
                </div>
                <?php
                else: ?>
                <div class="b-media b-media--outside-up">
                <?= Yii::t('app','no_search_results') ?>
                </div>
                <?php
                endif; ?>
        
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
                
        </div>

        <div class="layer layer-1">
                <div class="page__block page__block-1 is-modifiedFadeInLeft is-animated"></div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-show-room.php'); $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-test-drive.php'); $this->endContent(); ?>
