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
                    <form type="GET" >
                    <div class="g-content g-grid">
                        <div class="g-table--responsive">
                                <div class="g-table__row">
                                        <div class="g-table__cell g-col--one-fourth">
                                                <div class="g-dropdown g-dropdown--scrollable js-dropdown-scrollable is-fadeInDown is-animated">
                                                        <ul class="g-dropdown__list">
                                                                <li class="g-dropdown__item has-sublist">
                                                                        
                                                                    <?php
                                                                    if ($product) : ?>
                                                                    
                                                                        <span class="g-dropdown__link">
                                                                            <span class="g-dropdown__text"><?= $product->brand->info->name ?> <?= $product->info->name ?></span>
                                                                        </span>
                                                                    
                                                                    <?php
                                                                    else : ?>
                                                                    
                                                                        <span class="g-dropdown__link">
                                                                            <span class="g-dropdown__text">Аппарат</span>
                                                                        </span>
                                                                    
                                                                    <?php
                                                                    endif; ?>
                                                                    
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
                                                <div class="g-text--center"><?= Yii::t('app','work_days_number') ?></div>
                                                <input type="text" name="rangeSlider_1" value="<?= Yii::$app->calculator->selectedDays ?>" class="g-range-slider" id="rangeSlider_1" />

                                                <div class="g-text--center"><?= Yii::t('app','procedures_per_day_number') ?></div>
                                                <input type="text" name="rangeSlider_2" value="<?= Yii::$app->calculator->selectedPerDay ?>" class="g-range-slider" id="rangeSlider_2" />

                                                <div class="g-text--center"><?= Yii::t('app','procedure_price') ?></div>
                                                <input type="text" name="rangeSlider_3" value="<?= Yii::$app->calculator->selectedPrice ?>" class="g-range-slider" id="rangeSlider_3" />
                                        </div>
                                        <div class="g-table__cell g-col--one-fourth">
                                                <button type="submit" class="btn btn--primary"><?= Yii::t('app','calculate') ?></button>
                                        </div>
                                </div>
                        </div>
                    </div>
                    </form>
                        <div class="g-content g-grid">
                                <div class="g-col--half">
                                        <table class="g-table--colored">
                                                <tr>
                                                        <th colspan="2"><i class="icon-costs"></i><span><?= Yii::t('app','procedure_cost') ?>:</span></th>
                                                </tr>
                                                <tr>
                                                        <td><?= Yii::t('app','employee_bonus') ?>:</td>
                                                        <td><?= Yii::$app->calculator->bonus ?> грн (<?= Yii::$app->calculator->product->calculate->bonus*100 ?>%)</td>
                                                </tr>
                                                <tr>
                                                        <td><?= Yii::t('app','consumables') ?>:</td>
                                                        <td><?= Yii::$app->calculator->product->calculate->consumables ?> грн.</td>
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
                                                        <td><?= number_format(Yii::$app->calculator->profitPerDay,0,'',' ') ?> грн.</td>
                                                </tr>
                                                <tr>
                                                        <td><?= Yii::t('app','per_month') ?>:</td>
                                                        <td><?= number_format(Yii::$app->calculator->profitPerMonth,0,'',' ') ?> грн.</td>
                                                </tr>
                                                <tr>
                                                        <td><?= Yii::t('app','per_year') ?>:</td>
                                                        <td><?= number_format(Yii::$app->calculator->profitPerYear,0,'',' ') ?> грн.</td>
                                                </tr>
                                        </table>
                                </div>
                        </div>
                        <div class="g-content g-grid">
                                <div class="g-col--one">
                                        <div class="g-width--two-third">
                                                <canvas id="chart" width="430" height="240"></canvas>
                                                <div id="chartjs-tooltip"></div>
                                        </div>
                                </div>
                        </div>
                        <div class="g-content g-grid">
                                <div class="g-col--one">
                                        <table class="g-table--colored g-width--two-third">
                                                <tr>
                                                        <th colspan="2"><i class="icon-profit2"></i><span><?= Yii::t('app','profit_trend') ?>:</span></th>
                                                </tr>
                                                <tr>
                                                        <td>1 <?= Yii::t('app','year') ?>:</td>
                                                        <td><?= number_format(Yii::$app->calculator->profitPerYear,0,'',' ') ?> грн.</td>
                                                </tr>
                                                <tr>
                                                        <td>2 <?= Yii::t('app','year') ?>:</td>
                                                        <td><?= number_format(Yii::$app->calculator->profitPerYear*2,0,'',' ') ?> грн.</td>
                                                </tr>
                                                <tr>
                                                        <td>3 <?= Yii::t('app','year') ?>:</td>
                                                        <td><?= number_format(Yii::$app->calculator->profitPerYear*3,0,'',' ') ?> грн.</td>
                                                </tr>
                                                <tr>
                                                        <td>4 <?= Yii::t('app','year') ?>:</td>
                                                        <td><?= number_format(Yii::$app->calculator->profitPerYear*4,0,'',' ') ?> грн.</td>
                                                </tr>
                                                <tr>
                                                        <td>5 <?= Yii::t('app','year') ?>:</td>
                                                        <td><?= number_format(Yii::$app->calculator->profitPerYear*5,0,'',' ') ?> грн.</td>
                                                </tr>
                                        </table>
                                </div>
                        <div class="g-content g-grid">
                                <div class="g-width--two-third">
                                        <p class="g-text--center"><?= Yii::t('forms','steel_question-fill_form_and_we_call_you') ?></p>
                                        <form class="f-sbc" id="sbc_form" method="POST" action="<?= Url::to(['/forms/add']) ?>">
                                            <div class="g-form__col--half">
                                                <label class="g-hidden"><?= Yii::t('forms','your_name') ?></label>
                                                <input type="text" class="g-input g-input--simple" name="name" id="sbc_email" placeholder="Ваше имя, отчество">
                                            </div>
                                            <div class="g-form__col--half">
                                                <label class="g-hidden"><?= Yii::t('forms','phone_number') ?>*</label>
                                                <input type="phone" class="g-input g-input--simple" name="phone" id="sbc_email" placeholder="Номер телефона*">
                                            </div>
                                            <input type="hidden" hidden name="form_type" value="payback-equipment">
                                            <input name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" type="hidden">
                                                <div class="g-form__col--one g-text-center g-margin--none">
                                                    <button type="submit" class="btn btn--colored btn--normal"><?= Yii::t('forms','send') ?></button>
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>

        <div class="layer layer-1">
                <div class="page__block page__block-1 is-modifiedFadeInRight is-animated"></div>	
        </div>
</section>
<!-- /PAGE -->