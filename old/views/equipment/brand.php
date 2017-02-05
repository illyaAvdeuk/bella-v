<?php
use yii\helpers\Url;

$this->title = $brand->info->name;
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
                        <?= $brand->info->name ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        

                <!-- filter one-column -->
                <div class="filter is-fadeInDown is-animated">
                        <div class="filter is-fadeInDown is-animated">
                       <?= $this->render('_filter',[
                            'tags' => $tags,
                            'brands' => $brands,
                            'category' => false
                        ]) ?>
                        </div>
                </div>
               <!-- /filter one-column -->
               
        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= $brand->info->name ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>
               
                <!-- Filtered items -->
                <!--div class="b-filtered is-fadeInDown is-animated">
                        <ul class="b-filtered__list">
                                <li class="b-filtered__item">
                                        <a href="<?= Url::to(['/equipment']) ?>" class="b-filtered__link"><?= $brand->info->name ?></a>
                                </li>
                        </ul>
                </div-->
                <!-- /Filtered items -->
                
                
            <?php
            foreach ($tagsProducts as $tag) : ?>
                <h2 class="g-text--promo is-fadeIn is-animated"><?= $tag['name'] ?></h2>
                <div class="b-media b-media--outside-up">
                        <ul class="b-media__list b-media__list--inside-down">
                            
                            <?php
                            foreach ($tag['products'] as $product) : ?>
                            
                                <li class="b-media__item is-fadeIn is-animated">
                                        <div class="b-media__title">
                                                <a href="<?= $product->equipmentUrl ?>" class="b-media__link"><?= $product->info->name ?></a>
                                        </div>
                                        <a href="<?= $product->equipmentUrl ?>" class="b-media__inner">
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
            endforeach; ?>     
                
        </div>

        <div class="layer layer-1">
                <div class="page__block page__block-1 is-modifiedFadeInLeft is-animated"></div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->