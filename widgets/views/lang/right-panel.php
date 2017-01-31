<?php
use app\models\Lang;
?>

<ul class="lang__list lang__list--fixed-vertical slideInRight is-animated">
<?php foreach ($langs as $lang):
    $local = (($lang->url === Lang::getDefaultLang()->url) ? '' : '/'.$lang->url);
    $local = ((empty(Yii::$app->getRequest()->getLangUrl()) && empty($local)) ? '/': $local);
    if ($current->name == $lang->name) : ?>
        <li class="lang__item">
            <span class="lang__link active"><?= mb_substr($lang->name,0,3,'UTF-8') ?></span>
        </li>
    <?php
    else : ?>
        <?php
        if (empty($rows) || isset($rows[$lang->id])): ?>
        
        <li class="lang__item">
            <a href="<?= $local.Yii::$app->getRequest()->getLangUrl() ?>" class="lang__link"><?= mb_substr($lang->name,0,3,'UTF-8') ?></a>>
        </li>
        
        <?php
        else: ?>
        
        <li class="lang__item">
            <a href="<?= $local ?>" class="lang__link"><?= mb_substr($lang->name,0,3,'UTF-8') ?></a>>
        </li>
        
        <?php
        endif; ?>
    <?php
    endif;
endforeach;?>    
</ul>