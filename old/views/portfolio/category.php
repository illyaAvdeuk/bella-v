<?php
use yii\helpers\Url;

$this->title = $category->info->name;
?>
<!-- PAGE -->
<section id="page" class="page page__projects">

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
                        <a href="<?= Url::to(['/portfolio']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','projects') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $category->info->name ?>
                    </li>
                </ol>
            </div>
            <!-- /breadcrumbs -->

                <?php $this->beginContent('@app/views/layouts/layout-parts/menu.php'); $this->endContent(); ?>

                <div class="b-hero">
                        <div class="b-hero__slide is-fadeIn is-animated" style="background-image: url('/images/project-spa/slide.jpg');"></div>
                        <div class="b-hero__content">
                                <div class="b-hero__headers">
                                        <h2 class="b-hero__title title">
                                                <div class="title__inner is-slideInUp is-animated">
                                                        <div class="title__text">
                                                                <?= $category->info->name ?>
                                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                                        </div>
                                                </div>
                                        </h2>
                                        <h3 class="b-hero__subtitle title">
                                                <div class="title__inner is-slideInUp is-animated">
                                                        <div class="title__text">
                                                                <?= Yii::t('app','projects_title') ?>
                                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                                        </div>
                                                </div>
                                        </h3>
                                </div>
                        </div>
                        <div class="b-hero__links links is-slideInRight is-animated">
                                <div class="links__wrapper">
                                        <a href="<?= Url::to(['/portfolio/reviews']) ?>" class="b-hero__link link"><span class="link__text">Отзывы</span></a>
                                        <a href="<?= Url::to(['/events']) ?>" class="b-hero__link link"><span class="link__text">События</span></a>
                                        <a href="<?= Url::to(['/blog']) ?>" class="b-hero__link link"><span class="link__text">Блог</span></a>
                                </div>
                        </div>
                </div>
                <div class="b-text is-fadeIn is-animated">
                        <?= $category->info->text ?>
                </div>

                <div class="page__content">
                        
                    <?php
                    foreach ($projects as $project) : ?>
                    
                        <div class="g-block g-content">
                                <div class="g-title g-title--small is-slideInUp is-animated">
                                        <div class="title__text">
                                                <a href="<?= $project->url ?>" class="title__link"><?= $project->info->name ?></a>
                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                        </div>
                                </div>
                                <?php
                                if ($project->attachedImages) : ?>
                                <div class="b-gallery__carousel">
                                        <div class="js-gallery-carousel">
                                               
                                                <?php
                                                foreach ($project->attachedImages as $img) : ?>
                                            
                                                <div class="b-gallery__item">
                                                        <div class="b-gallery__inner">
                                                                <a href="<?= $img->path ?>" class="b-gallery__photo is-animated is-fadeIn" rel="gallery<?= $project->id ?>" >
                                                                    <img src="<?= $img->path ?>" alt="<?= $img->title ?>">
                                                                </a>
                                                        </div>
                                                </div>
                                                
                                                <?php
                                                endforeach; ?>
                                            
                                        </div>
                                </div>
                                <?php
                                endif; ?>
                                <p class="g--center is-fadeIn is-animated"><?= $project->info->description ?></p>
                        </div>
                        
                    <?php
                    endforeach; ?>
                    
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
                                <div class="action-block__item is-fadeInLeft is-animated animated">
                                        <a href="" class="btn btn--colored" data-modal="show-room"><?= Yii::t('app','show-room') ?></a>
                                </div>
                                <div class="action-block__item is-fadeInRight is-animated animated">
                                        <a href="<?= Url::to(['/calculator']) ?>" class="btn btn--colored"><?= Yii::t('app','calculate_effect') ?></a>
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