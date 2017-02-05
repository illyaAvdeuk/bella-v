<?php
use yii\helpers\Url;
use app\assets\SheduleAsset;
SheduleAsset::register($this);

$this->title = Yii::t('app','shedule');
?>
<!-- PAGE -->
<section id="page" class="page page__contacts">

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
                        <a href="<?= Url::to(['/study']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','study_center') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= Yii::t('app','shedule') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::t('app','shedule') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <div class="page__content">
                        <div class="calendar">
                                <div class="g-col--four-ninth is-slideInLeft is-animated">
                                        <div class="calendar__module">
                                  <header>
                                    <a class="btn-prev fontawesome-angle-left" href="#"></a>
                                    <h2 class="month"></h2>
                                    <a class="btn-next fontawesome-angle-right" href="#"></a>
                                  </header>
                                  <table>
                                    <thead class="event-days">
                                      <tr></tr>
                                    </thead>
                                    <tbody class="event-calendar">
                                      <tr class="1"></tr>
                                      <tr class="2"></tr>
                                      <tr class="3"></tr>
                                      <tr class="4"></tr>
                                      <tr class="5"></tr>
                                    </tbody>
                                  </table>
                                </div>

                          <div class="calendar__media">
                                <img src="/images/shedule/b-1.jpg" alt="">
                          </div>
                        </div>
                        <div class="g-col--five-ninth is-slideInRight is-animated">
                          <div class="b-shedule">
                                        <div class="b-shedule__title" ><?= Yii::t('app','seminar') ?></div>
                                        <div style="display: block" class="b-event" date-day="<?= $event->day ?>" date-month="<?= $event->month ?>" date-year="<?= $event->year ?>"  data-number="1">
                              <div class="b-event__date"><?= $event->day ?> <?= $event->monthName ?> <?= $event->year ?></div>
                              <h2 class="b-event__title"><span><?= Yii::t('app','topic') ?>: </span>«<?= $event->info->name ?>»</h2>
                              <div class="b-event__description">
                                <?= $event->info->description ?>
                                <div class="b-event__address"><span><?= Yii::t('app','address') ?>: </span><?= $event->info->address ?></div>
                                <div class="b-event__speaker"><span><?= Yii::t('app','seminar_lead') ?>: </span><?= $event->info->speaker ?></div>
                              </div>
                              <div class="b-event__action">
                                <a href="" class="btn btn--inline btn--colored" data-modal="seminar"><?= Yii::t('app','signup') ?></a>
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
                </div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->
<?php $this->beginContent('@app/views/layouts/layout-parts/modal-seminar.php'); $this->endContent(); ?>