<?php
use yii\helpers\Url;

$this->title = $project->info->name;
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
                        <a href="<?= $category->url ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= $category->info->name ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $project->info->name ?>
                    </li>
                </ol>
            </div>
            <!-- /breadcrumbs -->

        <?php $this->beginContent('@app/views/layouts/layout-parts/menu.php'); $this->endContent(); ?>

                <div class="page__content">
                        <div class="g-block g-content">
                                <div class="g-title g-title--small g-top-gutter is-slideInUp is-animated">
                                        <div class="title__text">
                                                <a href="" class="title__link"><?= $project->info->name ?></a>
                                                <div class="title__underline is-slideInLeft is-animated"></div>
                                        </div>
                                </div>
                                
                                <div class="b-gallery__carousel">
                                        <div class="js-gallery-carousel">
                                                
                                        <?php
                                        if ($project->attachedImages) :
                                            foreach ($project->attachedImages as $img) : ?>
                                            
                                                <div class="b-gallery__item">
                                                        <div class="b-gallery__inner">
                                                            <a href="<?= $img->path ?>" class="b-gallery__photo is-animated is-fadeIn" rel="gallery">
                                                                <img src="<?= $img->path ?>" alt="<?= $img->title ?>">
                                                            </a>
                                                        </div>
                                                </div>
                                            
                                            <?php
                                            endforeach;
                                        endif; ?>
                                            
                                        </div>
                                </div>
                                
                                <p class="g--center is-fadeIn is-animated"><?= $project->info->description ?></p>
                        </div>
                        <div class="g-block g-content">
                                <?= $project->info->text ?>
                        </div>

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