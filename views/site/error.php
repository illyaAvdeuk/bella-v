<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- PAGE -->
<section id="page" class="page page__hydropeptide">

        <div class="page__inner">
                <!-- breadcrumbs -->
                <div class="breadcrumbs is-slideInLeft is-animated">
                <ol class="breadcrumbs__list">
                    <li class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= Url::to(['/']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title">Главная</span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        404
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

                <div class="page__content">
                        
                    <article class="g-block is-fadeIn is-animated">
                            <div class="g-content">
                                <h1>404 Страница не найдена</h1>
                                <p>Запрашиваемая страница отсутствует, либо адрес был изменен</p>
                                <div class="g-title g-title--small is-slideInUp is-animated">
                                    <div class="title__text">
                                        <a href="<?= Url::to(['/']) ?>" class="title__link">Вернуться на главную</a>
                                        <div class="title__underline is-slideInLeft is-animated"></div>
                                    </div>
                                </div>
                            </div>
                    </article>

                
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
