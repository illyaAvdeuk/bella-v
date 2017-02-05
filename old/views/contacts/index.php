<?php
use yii\helpers\Url;

$this->title = Yii::$app->page->getPageInfo('name');
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
                        <style>
                                #map { 
                                        height: 295px;
                                }
                                .b-map__wrapper {
                                        position: relative;
                                        margin-bottom: 30px;
                                }
                                .b-map__info {
                                        position: absolute;
                                        top: 60px;
                                        right: 8%;
                                        width: 215px;
                                        padding: 0;
                                        background: #FFF;
                                        border-left: 7px solid #fd432b;
                                }
                                .b-map__list {
                                        display: block;
                                        margin: 0;
                                        padding: 20px 0;
                                        list-style-type: none;
                                }
                                .b-map__item {
                                        position: relative;
                                        display: block;
                                        margin: 0 0 20px;
                                        padding: 0 20px 0 46px;
                                        font-size: 14px;
                                        line-height: 20px;
                                }
                                .b-map__item:last-child {
                                        margin-bottom: 0;
                                }

                                .b-map__item i {
                                        position: absolute;
                                        left: 20px; top: 3px;
                                }
                                .page .page__block-2 {
                                    position: absolute;
                                    top: 270px;
                                    right: -200px;
                                    bottom: 0;
                                    width: 900px;
                                    height: 750px;
                                    background: rgba(2, 2, 2, 0.1);
                                    -ms-transform: rotate(49.75deg);
                                    transform: rotate(49.75deg);
                                }
                        </style>
                        <div class="b-map__wrapper is-fadeIn is-animated">
                                <div id="map"></div>
                                <div class="b-map__info">
                                        <ul class="b-map__list">
                                                <li class="b-map__item"><i class="icon-location"></i> <?= Yii::$app->page->getSubBlockInfo('address','description') ?></li>
                                                <li class="b-map__item"><i class="icon-phone"></i> <?= Yii::$app->page->getSubBlockInfo('phone','description') ?></li>
                                        </ul>
                                </div>
                        </div>
                    <script type="text/javascript">
                                var map;
                                function initMap() {
                                  var alfa = {lat: 50.4567452, lng: 30.4989016};
                                  var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 11,
                                    center: alfa,
                                disableDefaultUI: true
                                  });

                                  var marker = new google.maps.Marker({
                                    position: alfa,
                                    map: map,
                                    title: 'Alfa SPA'
                                  });
                                }
                    </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXaWrJ5uVNF24rcJvo0BiHSSjmiHuFx30&callback=initMap"></script>

            <div class="g-grid--narrow is-slideInUp is-animated">
                    <p class="g-text--center g-text--uppercase"><?= Yii::t('forms','feedback_form') ?></p>
                    <form class="f-fdb g-form--simple xhr-form" id="fdb_form" method="POST" action="<?= Url::to(['/api/forms/add']) ?>" >

                        <div class="g-form__col--half">
                            <label class="g-hidden"><?= Yii::t('forms','your_name') ?>*</label>
                            <input type="text" class="g-input g-input--simple" name="name" id="fdb_name" placeholder="Ваше имя, отчество*">
                        </div>
                        <div class="g-form__col--half">
                            <label class="g-hidden"><?= Yii::t('forms','mobile_phone') ?>*</label>
                            <input type="phone" class="g-input g-input--simple" name="phone" id="fdb_phone" placeholder="Мобильный телефон*">
                        </div>
                        <div class="g-form__col--half">
                            <label class="g-hidden"><?= Yii::t('forms','your_email') ?>*</label>
                            <input type="email" class="g-input g-input--simple" name="email" id="fdb_email" placeholder="Ваше email*">
                        </div>
                        <div class="g-form__col--half">
                            <label class="g-hidden"><?= Yii::t('forms','enter_message') ?></label>
                            <textarea class="g-textarea--simple" name="msg" id="fdb_comment" placeholder="Введите сообщение"></textarea>
                        </div>
                                <input type="hidden" hidden name="form_type" value="feedback">
                                <input name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" type="hidden">
                            <div class="g-form__col--one g-text-center g-margin--none">
                                <button type="submit" class="btn btn--colored btn--normal"><?= Yii::t('forms','send') ?></button>
                            </div>
                        </form>
                                </div>
                        </div>
                </div>
        </div>

        <div class="layer layer-2">
                <div class="page__block page__block-2 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->