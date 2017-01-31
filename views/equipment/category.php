<?php
use yii\helpers\Url;

$this->title = $category->info->name;
?>
<!-- PAGE -->
<section id="page" class="page page__post">

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
                        <a href="<?= Url::to(['/equipment']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','equipment_and_furniture') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $category->info->name ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        

                <!-- filter one-column -->
                <div class="filter is-fadeInDown is-animated">
                       <?= $this->render('_filter',[
                            'tags' => $tags,
                            'brands' => $brands,
                            'category' => $category
                        ]) ?>
                </div>
                <!-- /filter one-column -->
        
        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= $category->info->name ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>       
                
                <div class="page__content">
                        <div class="b-media b-media--outside-up">
                                <ul class="b-media__list b-media__list--inside-down">
                                        
                                    <?php
                                    foreach ($tags as $tag) : ?>
                                        <li class="b-media__item is-fadeIn is-animated">
                                                <div class="b-media__title">
                                                        <a href="<?= $tag->equipmentCategoryUrl ?>" class="b-media__link"><?= $tag->info->name ?></a>
                                                </div>
                                                <a href="<?= $tag->equipmentCategoryUrl ?>" class="b-media__inner">
                                                        <span class="b-media__picture">
                                                                <img src="<?= $tag->getThumbPathOrDef('/images/bt/m-1.jpg') ?>" alt="<?= $tag->info->name ?>">
                                                        </span>
                                                </a>
                                        </li>
                                    <?php
                                    endforeach; ?>    
                                        
                                </ul>
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
</section>
<!-- /PAGE -->