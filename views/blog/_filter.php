<ul class="g-dropdown__list">
        <li class="g-dropdown__item has-sublist">
                <span class="g-dropdown__link">
                        <?php
                        if ($selectedTag) : ?>
                        <span class="g-dropdown__text"><?= $selectedTag->info->name ?></span>
                        <?php
                        else : ?>
                        <span class="g-dropdown__text"><?= Yii::t('app','choose_category') ?></span>
                        <?php
                        endif; ?>
                </span>
                <ul class="g-dropdown__sublist sublist">
                        <?php
                        foreach ($tags as $tag): 
                            if (!$selectedTag || $tag->id != $selectedTag->id):
                            ?>
                            
                            <li class="sublist__item">
                                <a href="<?= $tag->blogUrl ?>" class="sublist__link">
                                    <span class="sublist__text"><?= $tag->info->name ?></span>
                                </a>
                            </li>

                        <?php
                            endif;
                        endforeach; 
                        if ($selectedTag) :
                        ?>
                            <li class="sublist__item">
                                <a href="<?= \yii\helpers\Url::to(['/blog']) ?>" class="sublist__link">
                                    <span class="sublist__text"><?= Yii::t('app','all_categories') ?></span>
                                </a>
                            </li>
                        <?php
                        endif; ?>    
                </ul>
        </li>
</ul>