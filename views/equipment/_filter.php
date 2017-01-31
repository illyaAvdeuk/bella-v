<?php
use yii\helpers\Url;
?>
<ul class="filter__list">
<li class="filter__item has-sublist">
    <a href="<?= (!empty($category)?Url::to(["/equipment/{$category->alias}"]):Url::to(["/equipment/technologies"])) ?>" class="filter__link">
        <span class="filter__text"><?= Yii::t('app','by_technologies') ?></span>
    </a>
    <ul class="filter__sublist sublist">
        
        <?php
        foreach ($tags as $tag) : ?>
        
        <li class="sublist__item">
            <a href="<?= (!empty($category)?$tag->equipmentCategoryUrl:$tag->equipmentUrl) ?>" class="sublist__link">
                <span class="sublist__text"><?= $tag->info->name ?></span>
            </a>
        </li>
        
        <?php
        endforeach; ?>
        
    </ul>
</li>
<li class="filter__item has-sublist last">
    <a href="<?= (!empty($category)?Url::to(["/equipment/{$category->alias}/brands"]):Url::to(["/equipment/brands"])) ?>" class="filter__link">
            <span class="filter__text"><?= Yii::t('app','by_brands') ?></span>
    </a>
    <ul class="filter__sublist sublist">
        
        <?php
        foreach ($brands as $brand) : ?>
        
        <li class="sublist__item">
            <a href="<?= (!empty($category)?$brand->equipmentCategoryUrl:$brand->equipmentUrl) ?>" class="sublist__link">
                <span class="sublist__text"><?= $brand->info->name ?></span>
            </a>
        </li>
        
        <?php
        endforeach; ?>
        
    </ul>
</li>
</ul>