<?php
use yii\helpers\Url;
?>
<div class="left__panel">
    <!-- offer -->
    <div class="offer bounceInLeft is-animated">
        <ul class="offer__list list">
            <li class="list__item item"><a href="<?= Url::to(['/calculator']) ?>" class="item__link calculate"><?= Yii::t('app','calculate_effect') ?></a></li>
            <li class="list__item item"><a href="<?= Url::to(['/stocks']) ?>" class="item__link gift"><?= Yii::t('app','stocks') ?></a></li>
        </ul>
    </div>
    <!-- /offer -->

    <!-- menu-toggle -->
    <div class="menu__toggle bounceInLeft is-animated">
        <i class="icon__toggle"></i>
    </div>
    <!-- /menu-toggle -->

    <!-- social -->
    <div class="social bounceInLeft is-animated">
        <a href="#" class="social__link hoverSlideUp"><i class="icon__fb"></i></a>
        <a href="#" class="social__link hoverSlideUp"><i class="icon__youtube"></i></a>
    </div>
    <!-- /social -->
</div>