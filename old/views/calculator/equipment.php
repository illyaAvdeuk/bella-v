<?php
use yii\helpers\Url;

$this->title = Yii::t('app','calculate_equipment_effect');
?>
<!-- PAGE -->
<section id="page" class="page page__payback">

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
                        <a href="<?= Url::to(['/calculator']) ?>" class="breadcrumbs__link" itemprop="url">
                            <span itemprop="title"><?= Yii::t('app','calculate_effect') ?></span>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= Yii::t('app','calculate_equipment_effect') ?>
                    </li>
                </ol>
        </div>
        <!-- /breadcrumbs -->

        <h1 class="page__title title">
                <div class="title__inner is-slideInUp is-animated">
                        <div class="title__text">
                                <?= Yii::t('app','calculate_equipment_effect') ?>
                                <div class="title__underline is-slideInLeft is-animated"></div>
                        </div>
                </div>
        </h1>

                <div class="page__content">
                    <div class="g-content g-grid">
                        <div class="g-table--responsive">
                                <div class="g-table__row">
                                        <div class="g-table__cell g-col--one-fourth">
                                                <div class="g-dropdown g-dropdown--scrollable js-dropdown-scrollable is-fadeInDown is-animated">
                                                        <ul class="g-dropdown__list">
                                                                <li class="g-dropdown__item has-sublist">
                                                                    
                                                                        <span class="g-dropdown__link">
                                                                            <span class="g-dropdown__text"><?= Yii::t('app','choose_apparat') ?></span>
                                                                        </span>
                                                                    
                                                                        <ul class="g-dropdown__sublist sublist">
                                                                            
                                                                            <?php
                                                                            foreach ($products as $product) : ?>
                                                                            
                                                                                <li class="sublist__item">
                                                                                    <a href="<?= $product->calculatorUrl ?>" class="sublist__link">
                                                                                        <span class="sublist__text"><?= $product->brand->info->name ?> <?= $product->info->name ?></span>
                                                                                    </a>
                                                                                </li>
                                                                            
                                                                            <?php
                                                                            endforeach; ?>    
                                                                                
                                                                        </ul>
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                        <div class="g-table__cell g-col--two-fourth">
                                        </div>
                                        <div class="g-table__cell g-col--one-fourth">
                                        </div>
                                </div>
                        </div>
                    </div>
                    <div class="g-content g-grid">
                            <div class="g-col--half">
                                    <table class="g-table--colored">
                                            <tr>
                                                    <th colspan="2"><i class="icon-costs"></i><span><?= Yii::t('app','procedure_cost') ?>:</span></th>
                                            </tr>
                                            <tr>
                                                    <td><?= Yii::t('app','employee_bonus') ?>:</td>
                                                    <td>0 грн (0%)</td>
                                            </tr>
                                            <tr>
                                                    <td><?= Yii::t('app','consumables') ?>:</td>
                                                    <td>0 грн.</td>
                                            </tr>
                                    </table>
                            </div>
                            <div class="g-col--half">
                                    <table class="g-table--colored">
                                            <tr>
                                                    <th colspan="2"><i class="icon-profit"></i><span><?= Yii::t('app','profit') ?>:</span></th>
                                            </tr>
                                            <tr>
                                                    <td><?= Yii::t('app','per_day') ?>:</td>
                                                    <td>0 грн.</td>
                                            </tr>
                                            <tr>
                                                    <td><?= Yii::t('app','per_month') ?>:</td>
                                                    <td>0 грн.</td>
                                            </tr>
                                            <tr>
                                                    <td><?= Yii::t('app','per_year') ?>:</td>
                                                    <td>0 грн.</td>
                                            </tr>
                                    </table>
                            </div>
                        </div>
            </div>

            <div class="layer layer-1">
                    <div class="page__block page__block-1 is-modifiedFadeInRight is-animated"></div>	
            </div>
</section>
<!-- /PAGE -->