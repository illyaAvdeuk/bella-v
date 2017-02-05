<?php
use yii\helpers\Url;
?>
<!-- menu -->
    <div class="menu is-fadeInDown is-animated" >
        <ul class="menu__list">
            <li class="menu__item">
                <a href="<?= Url::to(['/consulting']) ?>" class="menu__link">
                    <i class="menu__icon-1"></i>
                    <span class="menu__text"><?= Yii::t('app','consulting') ?></span>
                </a>
            </li>
            <li class="menu__item">
                <a href="<?= Url::to(['/equipment']) ?>" class="menu__link">
                    <i class="menu__icon-2"></i>
                    <span class="menu__text"><?= Yii::t('app','equipment_and_furniture') ?></span>
                </a>
            </li>
            <li class="menu__item">
                <a href="<?= Url::to(['/cosmetic']) ?>" class="menu__link">
                    <i class="menu__icon-3"></i>
                    <span class="menu__text"><?= Yii::t('app','pro_cosmetic') ?></span>
                </a>
            </li>
            <li class="menu__item">
                <a href="<?= Url::to(['/study']) ?>" class="menu__link">
                    <i class="menu__icon-4"></i>
                    <span class="menu__text"><?= Yii::t('app','study_center') ?></span>
                </a>
            </li>
            <li class="menu__item">
                <a href="<?= Url::to(['/service-center']) ?>" class="menu__link">
                    <i class="menu__icon-5"></i>
                    <span class="menu__text"><?= Yii::t('app','service-center') ?></span>
                </a>
            </li>
        </ul>
    </div>
    <!-- /menu -->