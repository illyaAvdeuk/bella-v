<?php 
use yii\helpers\Url;
?>
<section id="screen5" class="section screen-5">
        <div class="layer-1">
                <div data-anijs="if: scroll, on: window, do: modifiedFadeInLeft animated, before: scrollReveal, after: holdAnimClass" class="screen__block screen__block-1 is-animated"></div>
        </div>

        <div class="screen__inner">
                <h2 class="screen__title title">
                        <div data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                <div class="title__text">
                                        Що ми робимо?
                                        <div data-anijs="if: scroll, on: window, do: slideInLeft animated, before: scrollReveal, after: holdAnimClass" class="title__underline is-animated"></div>
                                </div>
                        </div>
                </h2>
                <div class="screen__content">
                        <div class="banners">
                                <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner banner-1 is-animated">
                                        <div class="banner__img">
                                                <img src="/images/scr-5/img-1.jpg" alt="">
                                                <div class="banner__content">
                                                        <div class="banner__inner">Допомагаємо створити вам бізнес</div>
                                                </div>
                                        </div>
                                        <a href="<?= Url::to(['/consulting']) ?>" class="banner__title">
                                                <div class="is-visible">
                                                        <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                                Допомагаємо створити ваш бізнес
                                                        </span>
                                                </div>
                                                <div class="is-hidden">
                                                        <span>Lorem ipsum dolor sit amet, consectetur.</span>
                                                </div>
                                        </a>
                                </div>

                                <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner banner-2 is-animated">
                                        <div class="banner__img">
                                                <img src="/images/scr-5/img-2.jpg" alt="">
                                                <div class="banner__content">
                                                        <div class="banner__inner">
                                                                Косметологіним
                                                                Медичним
                                                                SPA обладнанням 
                                                                і меблями
                                                        </div>
                                                </div>
                                        </div>
                                        <a href="<?= Url::to(['/equipment']) ?>" class="banner__title">
                                                <div class="is-visible">
                                                        <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                                Косметологіним
                                                                Медичним
                                                                SPA обладнанням 
                                                                і меблями
                                                        </span>
                                                </div>
                                                <div class="is-hidden">
                                                        <span>Lorem ipsum dolor sit amet, consectetur.</span>
                                                </div>
                                        </a>
                                </div>

                                <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner banner-3 is-animated">
                                        <div class="banner__img">
                                                <img src="/images/scr-5/img-3.jpg" alt="">
                                                <div class="banner__content">
                                                        <div class="banner__inner">
                                                                Продаємо 
                                                                професійну 
                                                                косметику
                                                        </div>
                                                </div>
                                        </div>
                                        <a href="<?= Url::to(['/cosmetic']) ?>" class="banner__title">
                                                <div class="is-visible">
                                                        <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                                Продаємо 
                                                                професійну 
                                                                косметику
                                                        </span>
                                                </div>
                                                <div class="is-hidden">
                                                        <span>Lorem ipsum dolor sit amet, consectetur.</span>
                                                </div>
                                        </a>
                                </div>

                                <div data-anijs="if: scroll, on: window, do: fadeIn animated, before: scrollReveal, after: holdAnimClass" class="banner banner-4 is-animated">
                                        <div class="banner__img">
                                                <img src="/images/scr-5/img-4.jpg" alt="">
                                                <div class="banner__content">
                                                        <div class="banner__inner">
                                                                Супроводжуємо
                                                        </div>
                                                </div>
                                        </div>
                                        <a href="<?= Url::to(['/study']) ?>" class="banner__title">
                                                <div class="is-visible">
                                                        <span data-anijs="if: scroll, on: window, do: slideInUp animated, before: scrollReveal, after: holdAnimClass" class="is-animated">
                                                                Супроводжуємо
                                                        </span>
                                                </div>
                                                <div class="is-hidden">
                                                        <span>Lorem ipsum dolor sit amet, consectetur.</span>
                                                </div>
                                        </a>
                                </div>

                        </div>
                </div>
        </div>
</section>