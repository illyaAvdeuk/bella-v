<?php
use yii\helpers\Url;
?>
<!-- SIDEBAR -->
<aside class="sidebar is-animated">
    <div class="sidebar__logo logo">
        <a href="<?= Url::to(['/']); ?>" class="logo__link">
            <i class="icon__logo"></i>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="<?= Url::to(['/services']); ?>" class="nav__link icon__service"><?= Yii::t('app','services') ?></a>
            </li>
            <li class="nav__item">
                <a href="<?= Url::to(['/portfolio']); ?>" class="nav__link icon__project"><?= Yii::t('app','projects') ?></a>
            </li>
            <li class="nav__item">
                <a href="<?= Url::to(['/about']); ?>" class="nav__link icon__about"><?= Yii::t('app','about') ?></a>
            </li>
            <li class="nav__item">
                <a href="<?= Url::to(['/blog']); ?>" class="nav__link icon__blog"><?= Yii::t('app','blog') ?></a>
            </li>
            <li class="nav__item">
                <a href="<?= Url::to(['/contacts']); ?>" class="nav__link icon__contacts"><?= Yii::t('app','contacts') ?></a>
            </li>
            <li class="nav__item">
                <a href="<?= Url::to(['/calculator']); ?>" class="nav__link icon__calculate"><?= Yii::t('app','calculate_effect') ?></a>
            </li>
            <li class="nav__item">
                <a href="<?= Url::to(['/stocks']); ?>" class="nav__link icon__gift"><?= Yii::t('app','stocks') ?></a>
            </li>
            <li class="nav__item">
        <a href="#" class="nav__link icon__private"><?= Yii::t('app','for_private_persons') ?></a>
            </li>
        </ul>
    </nav>
    <!-- /Navigation -->

    <div class="sidebar__social social">
        <a href="#" class="social__link hoverSlideUp"><i class="icon__fb"></i></a>
        <a href="#" class="social__link hoverSlideUp"><i class="icon__youtube"></i></a>
    </div>
    
    <?= \app\widgets\WLang::widget() ?>
    
</aside>
<!-- /SIDEBAR -->