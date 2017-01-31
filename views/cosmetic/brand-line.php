<?php
use yii\helpers\Url;

$this->title = $category->info->name;
?>
<!-- PAGE -->
<section id="page" class="page page__proline">

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
                        <a href="<?= Url::to(['/cosmetic']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','pro_cosmetic') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= $brand->urlCosmetic ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $brand->info->name ?></span>
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
                <?= $this->render('_filters',[
                    'tags' => $tags,
                    'prettyFilters' => $prettyFilters,
                ]) ?>
                

                <div class="b-products">
                        <ul class="b-products__list">
                            
                            <?php
                            foreach ($products as $product) { ?>
                            
                            <li class="b-products__item is-fadeIn is-animated">
                                <a href="<?= $product->urlCosmetic ?>" class="b-products__inner">
                                    <span class="b-products__title"><?= $product->info->name ?></span>
                                    <span class="b-products__photo">
                                        <img src="<?= $product->thumbPath ?>" alt="">
                                    </span>
                                    <span class="b-products__desc"><?= $product->info->name ?></span>
                                </a>
                            </li>
                            
                            <?php } ?>
                        </ul>
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
</section>
<!-- /PAGE -->