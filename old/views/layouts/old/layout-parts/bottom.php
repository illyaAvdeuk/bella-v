<input type="hidden" id="animationData" 
data-anijs="
        if: click, on: #animationData, do: bounceInRight animated, to: #fp-nav;
        if: mouseover, on: .scroll-down-inner, do: bounce animated, to: .icon__scroll-down;
">

<!-- page animation rules set -->
<input type="hidden" id="animationForPages" 
 data-anijs="
        if: load, on: window, do: slideInLeft animated, to: .menu__toggle, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: slideInLeft animated, to: .menu__toggle, before: scrollReveal, after: holdAnimClass;

        if: load, on: window, do: slideInLeft animated, to: .sidebar, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: slideInLeft animated, to: .sidebar, before: scrollReveal, after: holdAnimClass;

        if: load, on: window, do: slideInLeft animated, to: .breadcrumbs, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: slideInLeft animated, to: .breadcrumbs, before: scrollReveal, after: holdAnimClass;

        if: load, on: window, do: slideInRight animated, to: .search-call, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: slideInRight animated, to: .search-call, before: scrollReveal, after: holdAnimClass;



        if: load, on: window, do: slideInUp animated, to: .is-slideInUp, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: slideInUp animated, to: .is-slideInUp, before: scrollReveal, after: holdAnimClass;

        if: load, on: window, do: slideInLeft animated, to: .is-slideInLeft, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: slideInLeft animated, to: .is-slideInLeft, before: scrollReveal, after: holdAnimClass;

        if: load, on: window, do: slideInRight animated, to: .is-slideInRight, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: slideInRight animated, to: .is-slideInRight, before: scrollReveal, after: holdAnimClass;



        if: load, on: window, do: fadeIn animated, to: .is-fadeIn, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: fadeIn animated, to: .is-fadeIn, before: scrollReveal, after: holdAnimClass;

        if: load, on: window, do: fadeInDown animated, to: .is-fadeInDown, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: fadeInDown animated, to: .is-fadeInDown, before: scrollReveal, after: holdAnimClass;

        if: load, on: window, do: fadeInLeft animated, to: .is-fadeInLeft, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: fadeInLeft animated, to: .is-fadeInLeft, before: scrollReveal, after: holdAnimClass;

        if: load, on: window, do: fadeInRight animated, to: .is-fadeInRight, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: fadeInRight animated, to: .is-fadeInRight, before: scrollReveal, after: holdAnimClass;


        if: load, on: window, do: modifiedFadeInLeft animated, to: .is-modifiedFadeInLeft, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: modifiedFadeInLeft animated, to: .is-modifiedFadeInLeft, before: scrollReveal, after: holdAnimClass;

        if: load, on: window, do: modifiedFadeInRight animated, to: .is-modifiedFadeInRight, before: scrollReveal, after: holdAnimClass;
        if: scroll, on: window, do: modifiedFadeInRight animated, to: .is-modifiedFadeInRight, before: scrollReveal, after: holdAnimClass;
">
<!-- /page animation rules set -->