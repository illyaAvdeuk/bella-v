<?php
use yii\helpers\Url;

$this->title = $tag->info->name;
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
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= Url::to(["/equipment/{$category->alias}"]) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $category->info->name ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $tag->info->name ?>
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
                            'category' => $category
                        ]) ?>
                        </div>
                </div>
                <!-- /filter one-column -->
        
        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= $tag->info->name ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>
                
                <?php
                if (Yii::$app->page->isSubBlock('baner')) : ?>
                <div class="b-hero">
                        <div class="b-hero__slide is-fadeIn is-animated" style="background-image: url('<?= Yii::$app->page->getSubBlockThumb('baner') ?>');"></div>
                </div>
                <?php
                endif; ?>
                <!-- Filtered items -->
                                                <!--div class="b-filtered is-fadeInDown is-animated">
                                                        <ul class="b-filtered__list">
                                                                <li class="b-filtered__item">
                                                                        <a href="" class="b-filtered__link">Микротоки</a>
                                                                </li>
                                                                <li class="b-filtered__item">
                                                                        <a href="" class="b-filtered__link">BT</a>
                                                                </li>
                                                        </ul>
                                                </div-->
                <!-- /Filtered items -->

                <div class="b-text is-fadeIn is-animated">
                    <?= Yii::$app->page->getPageInfo('text') ?>
                </div>
                <!--h2 class="g-text--promo is-fadeIn is-animated">Набор мобильный косметолог</h2>
                <div class="b-media b-media--inside-down">
                        <ul class="b-media__list is-fadeIn is-animated">
                                <li class="b-media__item">
                                        <a href="" class="b-media__inner">
                                                <span class="b-media__picture">
                                                        <img src="/images/bt/m-1.jpg" alt="">
                                                </span>
                                                <span class="b-media__title">Миктотоки</span>
                                        </a>
                                </li>
                                <li class="b-media__item">
                                        <a href="" class="b-media__inner">
                                                <span class="b-media__picture">
                                                        <img src="/images/bt/m-2.jpg" alt="">
                                                </span>
                                                <span class="b-media__title">Анализатор</span>
                                        </a>
                                </li>
                                <li class="b-media__item">
                                        <a href="" class="b-media__inner">
                                                <span class="b-media__picture">
                                                        <img src="/images/bt/m-3.jpg" alt="">
                                                </span>
                                                <span class="b-media__title">Очки</span>
                                        </a>
                                </li>
                                <li class="b-media__item">
                                        <a href="" class="b-media__inner">
                                                <span class="b-media__picture">
                                                        <img src="/images/bt/m-4.jpg" alt="">
                                                </span>
                                                <span class="b-media__title">Скрабер</span>
                                        </a>
                                </li>
                                <li class="b-media__item">
                                        <a href="" class="b-media__inner">
                                                <span class="b-media__picture">
                                                        <img src="/images/bt/m-5.jpg" alt="">
                                                </span>
                                                <span class="b-media__title">Лупа</span>
                                        </a>
                                </li>
                                <li class="b-media__item">
                                        <a href="" class="b-media__inner">
                                                <span class="b-media__picture">
                                                        <img src="/images/bt/m-6.jpg" alt="">
                                                </span>
                                                <span class="b-media__title">Щеточка для  очищения</span>
                                        </a>
                                </li>
                        </ul>
                </div-->
            <?php
            if ($kits) : ?>
                <?php
                foreach ($kits as $kit) : ?>
                <div class="g-title g-title--small is-slideInUp is-animated">
                        <div class="title__text">
                                <a href="<?= $kit->equipmentKitUrl ?>" class="title__link"><?= $kit->info->name ?></a>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
                <div class="b-media b-media--inside-down">
                        <ul class="b-media__list is-fadeIn is-animated">
                            <?php
                            foreach ($kit->products as $kitProduct) : ?>
                                <li class="b-media__item">
                                        <a href="<?= $kitProduct->equipmentUrl ?>" class="b-media__inner">
                                                <span class="b-media__picture">
                                                    <img src="<?= $kitProduct->thumbPath ?>" alt="<?= $kitProduct->info->name ?>">
                                                </span>
                                                <span class="b-media__title"><?= $kitProduct->info->name ?></span>
                                        </a>
                                </li>
                            <?php
                            endforeach; ?> 
                        </ul>
                </div>
                <?php
                endforeach; ?> 
            <?php
            endif; ?>
                
                <?php
                if ($products) : ?>
                <div class="b-media b-media--outside-up">
                        <ul class="b-media__list b-media__list--inside-down">
                            
                            <?php
                            foreach ($products as $product) : ?>
                            
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
                endif; ?>
                
                <div class="page__content">
                        <div class="action-block">
                                <div class="action-block__item is-fadeInLeft is-animated">
                                        <a href="" class="btn btn--colored" data-modal="test-drive"><?= Yii::t('app','to_order_test-drive') ?></a>
                                </div>
                                <div class="action-block__item is-fadeInRight is-animated">
                                        <a href="" class="btn btn--colored" data-modal="show-room"><?= Yii::t('app','show-room') ?></a>
                                </div>
                        </div>
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
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-show-room.php'); $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-test-drive.php'); $this->endContent(); ?>