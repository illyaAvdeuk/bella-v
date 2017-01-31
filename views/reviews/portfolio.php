<?php
use yii\helpers\Url;

$this->title = Yii::t('app','reviews');
?>
<!-- PAGE -->
<section id="page" class="page page__testimonials">

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
                        <a href="<?= Url::to(["/portfolio"]) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','projects') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= Yii::t('app','reviews') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::t('app','reviews') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <div class="page__content">
                        <div class="b-testimonials g-content">
                                
                        <?php
                        if ($reviews) :
                            foreach ($reviews as $review) : ?>
                            
                                <div class="b-testimonials__item is-fadeIn is-animated">
                                        <div class="b-testimonials__details">
                                                <div class="b-testimonials__author">
                                                        <?= $review->info->name ?>
                                                </div>
                                                <div class="b-testimonials__position"><?= $review->info->description ?></div>
                                                <div class="b-testimonials__date"><?= $review->getPubDate() ?></div>
                                        </div>
                                        <div class="b-testimonials__content">
                                                <?php
                                                if ($review->thumbPath) : ?>
                                                <p>
                                                    <img src="<?= $review->thumbPath ?>" alt="<?= $review->info->name ?>">
                                                </p>
                                                <?php
                                                endif; ?>
                                                <?php
                                                if (!empty($review->link)) : ?>
                                                <p>
                                                    <iframe width="411" height="231" src="<?= $review->link ?>" frameborder="0" allowfullscreen></iframe>
                                                </p>
                                                <?php
                                                endif; ?>
                                                <?= $review->info->text ?>
                                        </div>
                                </div>
                            
                            <?php
                            endforeach; 
                        endif;  ?>
                            
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
            <div class="g-form__wrapper is-fadeIn is-animated">
                <form class="f-tml xhr-form" id="tml_form" action="<?= Url::to(['/api/reviews/add']) ?>" method="POST" enctype="multipart/form-data" data-modal-success="thanks_review" data-modal-err="err_review">
                    <div class="g-form__col--half">
                        <label class="g-hidden"><?= Yii::t('forms','your_name') ?>*</label>
                        <input type="text" class="g-input" name="tml_name" id="tml_name" placeholder="<?= Yii::t('forms','your_name') ?>*" required="" aria-required="true">
                    </div>
                    <div class="g-form__col--half">
                        <label class="g-hidden"><?= Yii::t('forms','your_email') ?>*</label>
                        <input type="email" class="g-input" name="tml_mail" id="tml_mail" placeholder="<?= Yii::t('forms','your_email') ?>*" required="" aria-required="true">
                    </div>
                    <div class="g-form__col--one">
                        <label class="g-hidden"><?= Yii::t('forms','your_review') ?>*</label>
                        <textarea class="g-textarea" name="tml_msg" id="tml_msg" placeholder="<?= Yii::t('forms','your_review') ?>" required=""></textarea>
                    </div>
                    <div class="g-form__col--one">
                    <label class="g-hidden"><?= Yii::t('forms','video_link') ?></label>
                    <input type="text" class="g-input" name="tml_video" id="tml_video" placeholder="<?= Yii::t('forms','video_link') ?>">
                    </div>
                        <div class="g-form__col--one g-input-file js-input-file">
                        <div class="g-input-file__btn">
                            <i class="icon-attache"></i>
                            <input type="file" id="tml_file" name="tml_file">
                        </div>
                        <div class="g-input-file__wrapper">
                            <input type="text" class="g-input-file__path" placeholder="<?= Yii::t('forms','attach_file') ?>">
                        </div>
                    </div>
                    <input name="tml_type_id" value="<?= $reviewsType->id ?>" type="hidden">
                    <input name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" type="hidden">
                    <div class="g-form__col--one g-text-center">
                        <button type="submit" class="btn btn--colored btn--normal"><?= Yii::t('forms','send_review') ?></button>
                    </div>
                </form>
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
</section>
<!-- /PAGE -->
<?php $this->beginContent('@app/views/layouts/layout-parts/modals-reviews.php'); $this->endContent(); ?>