<?php
if ($reviews): ?>
<section id="screen9" class="section screen-9 fp-auto-height">
            <div class="layer-1">
                    <div data-anijs="if: scroll, on: window, do: modifiedFadeInLeft animated, before: scrollReveal, after: holdAnimClass" class="screen__block screen__block-1 is-animated"></div>
            </div>

            <div class="screen__content">
                    <div class="screen__promo">
                            <div class="promo__header container">
                                    <div class="promo__title title">
                                            <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                    <div class="title__text">
                                                            alfa spa глазами наших клиентов
                                                            <div data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                            <div data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal, after: holdAnimClass" class="grid carousel__wrapper is-animated">
                                    <div class="container">
                                            <div id="testimonials" class="carousel">
                                                <?php
                                                foreach ($reviews as $review): ?>
                                                    <div class="carousel__item item">
                                                            <div class="item__img">
                                                                <img src="<?= $review->getThumbPathOrDef("/images/scr-9/img-1.jpg") ?>" alt="<?= $review->info->name ?>">
                                                            </div>
                                                            <div class="item__content">
                                                                <div class="item__title title">
                                                                        <div class="title__text">
                                                                                <?= $review->info->name ?>
                                                                                <div data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="item__text">
                                                                    <?= $review->info->text ?>
                                                                </div>
                                                            </div>
                                                    </div>
                                                
                                                <?php
                                                endforeach; ?>
                                                
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div>
    </section>
<?php
endif; ?>
