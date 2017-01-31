<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
?>
<!-- PAGE -->
<section id="page" class="page page__privacy">

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
                        <?= Yii::$app->page->getPageInfo('name') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::$app->page->getPageInfo('name') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>
                <div class="page__content">
                        <div class="g-content g-text--tiny">
                            <?= Yii::$app->page->getPageInfo('text') ?>
                        </div>
                </div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->
