<!-- filter -->
<div class="filter filter--scrollable js-filter-scrollable is-fadeInDown is-animated">
        <ul class="filter__list">
                <?php if (isset($tags[0])) : 
                $parentTag = $tags[0];    
                ?>
                <li class="filter__item has-sublist">
                        <a href="" class="filter__link">
                                <span class="filter__text"><?= $parentTag->infoData->name ?></span>
                        </a>
                        <ul class="filter__sublist sublist">
                                <?php
                                foreach ($parentTag->children as $tag) : ?>
                                <li class="sublist__item">
                                    <?php
                                    if ($tag->isAvailable) : ?>
                                        <a href="<?= $tag->cosmeticUrl ?>" class="sublist__link <?= (($tag->isSelected) ? 'sublist__link-selected':'') ?>">
                                            <span class="sublist__text"><?= $tag->info->name ?></span>
                                        </a>
                                    <?php
                                    else : ?>
                                        <span class="sublist__link sublist__link-not_available">
                                            <span class="sublist__text"><?= $tag->info->name ?></span>
                                        </span>
                                    <?php
                                    endif; ?>
                                </li>
                                <?php
                                endforeach; ?>
                                
                        </ul>
                <?php endif; ?>    
                </li>
                <?php if (isset($tags[1])) : 
                $parentTag = $tags[1];
                ?>
                <li class="filter__item has-sublist last">
                        <a href="" class="filter__link">
                                <span class="filter__text"><?= $parentTag->infoData->name ?></span>
                        </a>
                        <ul class="filter__sublist sublist">
                                <?php
                                foreach ($parentTag->children as $tag) : ?>
                                <li class="sublist__item">
                                    <?php
                                    if ($tag->isAvailable) : ?>
                                        <a href="<?= $tag->cosmeticUrl ?>" class="sublist__link <?= (($tag->isSelected) ? 'sublist__link-selected':'') ?>">
                                                    <span class="sublist__text"><?= $tag->info->name ?></span>
                                        </a>
                                    <?php
                                    else : ?>
                                        <span class="sublist__link sublist__link-not_available">
                                            <span class="sublist__text"><?= $tag->info->name ?></span>
                                        </span>
                                    <?php
                                    endif; ?>
                                </li>
                                <?php
                                endforeach; ?>
                                
                        </ul>
                </li>
                <?php endif; ?>    
        </ul>
</div>
<!-- /filter -->
<?php if (isset($prettyFilters->selectedTags)) : 
?>
<!-- Filtered items -->
<div class="b-filtered is-fadeInDown is-animated">
        <ul class="b-filtered__list">
            <?php
            foreach ($prettyFilters->selectedTags as $tag) : ?>
                <li class="b-filtered__item">
                        <a href="<?= $tag->cosmeticUrl ?>" class="b-filtered__link"><?= $tag->info->name ?></a>
                </li>
            <?php
            endforeach; ?>
        </ul>
</div>
<!-- /Filtered items -->
<?php endif; ?>    