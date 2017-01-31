/*! modernizr 3.3.1 (Custom Build) | MIT *
 * http://modernizr.com/download/?-audio-canvas-cssanimations-csstransforms-cssvhunit-cssvwunit-flexbox-flexwrap-placeholder-svg-svgclippaths-video-setclasses !*/
!function(e,n,t){function a(e,n){return typeof e===n}function o(){var e,n,t,o,r,s,i;for(var l in w)if(w.hasOwnProperty(l)){if(e=[],n=w[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=a(n.fn,"function")?n.fn():n.fn,r=0;r<e.length;r++)s=e[r],i=s.split("."),1===i.length?Modernizr[i[0]]=o:(!Modernizr[i[0]]||Modernizr[i[0]]instanceof Boolean||(Modernizr[i[0]]=new Boolean(Modernizr[i[0]])),Modernizr[i[0]][i[1]]=o),h.push((o?"":"no-")+i.join("-"))}}function r(e){var n=C.className,t=Modernizr._config.classPrefix||"";if(S&&(n=n.baseVal),Modernizr._config.enableJSClass){var a=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(a,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),S?C.className.baseVal=n:C.className=n)}function s(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):S?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function i(){var e=n.body;return e||(e=s(S?"svg":"body"),e.fake=!0),e}function l(e,t,a,o){var r,l,c,d,p="modernizr",u=s("div"),f=i();if(parseInt(a,10))for(;a--;)c=s("div"),c.id=o?o[a]:p+(a+1),u.appendChild(c);return r=s("style"),r.type="text/css",r.id="s"+p,(f.fake?f:u).appendChild(r),f.appendChild(u),r.styleSheet?r.styleSheet.cssText=e:r.appendChild(n.createTextNode(e)),u.id=p,f.fake&&(f.style.background="",f.style.overflow="hidden",d=C.style.overflow,C.style.overflow="hidden",C.appendChild(f)),l=t(u,e),f.fake?(f.parentNode.removeChild(f),C.style.overflow=d,C.offsetHeight):u.parentNode.removeChild(u),!!l}function c(e,n){return!!~(""+e).indexOf(n)}function d(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function p(e,n){return function(){return e.apply(n,arguments)}}function u(e,n,t){var o;for(var r in e)if(e[r]in n)return t===!1?e[r]:(o=n[e[r]],a(o,"function")?p(o,t||n):o);return!1}function f(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function y(n,a){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(f(n[o]),a))return!0;return!1}if("CSSSupportsRule"in e){for(var r=[];o--;)r.push("("+f(n[o])+":"+a+")");return r=r.join(" or "),l("@supports ("+r+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function m(e,n,o,r){function i(){p&&(delete $.style,delete $.modElem)}if(r=a(r,"undefined")?!1:r,!a(o,"undefined")){var l=y(e,o);if(!a(l,"undefined"))return l}for(var p,u,f,m,v,g=["modernizr","tspan"];!$.style;)p=!0,$.modElem=s(g.shift()),$.style=$.modElem.style;for(f=e.length,u=0;f>u;u++)if(m=e[u],v=$.style[m],c(m,"-")&&(m=d(m)),$.style[m]!==t){if(r||a(o,"undefined"))return i(),"pfx"==n?m:!0;try{$.style[m]=o}catch(h){}if($.style[m]!=v)return i(),"pfx"==n?m:!0}return i(),!1}function v(e,n,t,o,r){var s=e.charAt(0).toUpperCase()+e.slice(1),i=(e+" "+E.join(s+" ")+s).split(" ");return a(n,"string")||a(n,"undefined")?m(i,n,o,r):(i=(e+" "+_.join(s+" ")+s).split(" "),u(i,n,t))}function g(e,n,a){return v(e,t,t,n,a)}var h=[],w=[],T={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){w.push({name:e,fn:n,options:t})},addAsyncTest:function(e){w.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=T,Modernizr=new Modernizr,Modernizr.addTest("svg",!!n.createElementNS&&!!n.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect);var C=n.documentElement,S="svg"===C.nodeName.toLowerCase();Modernizr.addTest("audio",function(){var e=s("audio"),n=!1;try{(n=!!e.canPlayType)&&(n=new Boolean(n),n.ogg=e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),n.mp3=e.canPlayType('audio/mpeg; codecs="mp3"').replace(/^no$/,""),n.opus=e.canPlayType('audio/ogg; codecs="opus"')||e.canPlayType('audio/webm; codecs="opus"').replace(/^no$/,""),n.wav=e.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),n.m4a=(e.canPlayType("audio/x-m4a;")||e.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(t){}return n}),Modernizr.addTest("canvas",function(){var e=s("canvas");return!(!e.getContext||!e.getContext("2d"))}),Modernizr.addTest("video",function(){var e=s("video"),n=!1;try{(n=!!e.canPlayType)&&(n=new Boolean(n),n.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),n.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),n.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""),n.vp9=e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/,""),n.hls=e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/,""))}catch(t){}return n});var x={}.toString;Modernizr.addTest("svgclippaths",function(){return!!n.createElementNS&&/SVGClipPath/.test(x.call(n.createElementNS("http://www.w3.org/2000/svg","clipPath")))});var P=T.testStyles=l;P("#modernizr { height: 50vh; }",function(n){var t=parseInt(e.innerHeight/2,10),a=parseInt((e.getComputedStyle?getComputedStyle(n,null):n.currentStyle).height,10);Modernizr.addTest("cssvhunit",a==t)}),P("#modernizr { width: 50vw; }",function(n){var t=parseInt(e.innerWidth/2,10),a=parseInt((e.getComputedStyle?getComputedStyle(n,null):n.currentStyle).width,10);Modernizr.addTest("cssvwunit",a==t)});var b="Moz O ms Webkit",E=T._config.usePrefixes?b.split(" "):[];T._cssomPrefixes=E;var _=T._config.usePrefixes?b.toLowerCase().split(" "):[];T._domPrefixes=_;var N={elem:s("modernizr")};Modernizr._q.push(function(){delete N.elem});var $={style:N.elem.style};Modernizr._q.unshift(function(){delete $.style}),T.testAllProps=v,T.testAllProps=g,Modernizr.addTest("cssanimations",g("animationName","a",!0)),Modernizr.addTest("flexbox",g("flexBasis","1px",!0)),Modernizr.addTest("flexwrap",g("flexWrap","wrap",!0)),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&g("transform","scale(1)",!0)}),Modernizr.addTest("placeholder","placeholder"in s("input")&&"placeholder"in s("textarea")),o(),r(h),delete T.addTest,delete T.addAsyncTest;for(var z=0;z<Modernizr._q.length;z++)Modernizr._q[z]();e.Modernizr=Modernizr}(window,document);


/*! device.js 0.2.7 */
(function(){var a,b,c,d,e,f,g,h,i,j;b=window.device,a={},window.device=a,d=window.document.documentElement,j=window.navigator.userAgent.toLowerCase(),a.ios=function(){return a.iphone()||a.ipod()||a.ipad()},a.iphone=function(){return!a.windows()&&e("iphone")},a.ipod=function(){return e("ipod")},a.ipad=function(){return e("ipad")},a.android=function(){return!a.windows()&&e("android")},a.androidPhone=function(){return a.android()&&e("mobile")},a.androidTablet=function(){return a.android()&&!e("mobile")},a.blackberry=function(){return e("blackberry")||e("bb10")||e("rim")},a.blackberryPhone=function(){return a.blackberry()&&!e("tablet")},a.blackberryTablet=function(){return a.blackberry()&&e("tablet")},a.windows=function(){return e("windows")},a.windowsPhone=function(){return a.windows()&&e("phone")},a.windowsTablet=function(){return a.windows()&&e("touch")&&!a.windowsPhone()},a.fxos=function(){return(e("(mobile;")||e("(tablet;"))&&e("; rv:")},a.fxosPhone=function(){return a.fxos()&&e("mobile")},a.fxosTablet=function(){return a.fxos()&&e("tablet")},a.meego=function(){return e("meego")},a.cordova=function(){return window.cordova&&"file:"===location.protocol},a.nodeWebkit=function(){return"object"==typeof window.process},a.mobile=function(){return a.androidPhone()||a.iphone()||a.ipod()||a.windowsPhone()||a.blackberryPhone()||a.fxosPhone()||a.meego()},a.tablet=function(){return a.ipad()||a.androidTablet()||a.blackberryTablet()||a.windowsTablet()||a.fxosTablet()},a.desktop=function(){return!a.tablet()&&!a.mobile()},a.television=function(){var a;for(television=["googletv","viera","smarttv","internet.tv","netcast","nettv","appletv","boxee","kylo","roku","dlnadoc","roku","pov_tv","hbbtv","ce-html"],a=0;a<television.length;){if(e(television[a]))return!0;a++}return!1},a.portrait=function(){return window.innerHeight/window.innerWidth>1},a.landscape=function(){return window.innerHeight/window.innerWidth<1},a.noConflict=function(){return window.device=b,this},e=function(a){return-1!==j.indexOf(a)},g=function(a){var b;return b=new RegExp(a,"i"),d.className.match(b)},c=function(a){var b=null;g(a)||(b=d.className.replace(/^\s+|\s+$/g,""),d.className=b+" "+a)},i=function(a){g(a)&&(d.className=d.className.replace(" "+a,""))},a.ios()?a.ipad()?c("ios ipad tablet"):a.iphone()?c("ios iphone mobile"):a.ipod()&&c("ios ipod mobile"):a.android()?c(a.androidTablet()?"android tablet":"android mobile"):a.blackberry()?c(a.blackberryTablet()?"blackberry tablet":"blackberry mobile"):a.windows()?c(a.windowsTablet()?"windows tablet":a.windowsPhone()?"windows mobile":"desktop"):a.fxos()?c(a.fxosTablet()?"fxos tablet":"fxos mobile"):a.meego()?c("meego mobile"):a.nodeWebkit()?c("node-webkit"):a.television()?c("television"):a.desktop()&&c("desktop"),a.cordova()&&c("cordova"),f=function(){a.landscape()?(i("portrait"),c("landscape")):(i("landscape"),c("portrait"))},h=Object.prototype.hasOwnProperty.call(window,"onorientationchange")?"orientationchange":"resize",window.addEventListener?window.addEventListener(h,f,!1):window.attachEvent?window.attachEvent(h,f):window[h]=f,f(),"function"==typeof define&&"object"==typeof define.amd&&define.amd?define(function(){return a}):"undefined"!=typeof module&&module.exports?module.exports=a:window.device=a}).call(this);

/*!
 * fullPage 2.8.6
 * https://github.com/alvarotrigo/fullPage.js
 * @license MIT licensed
 *
 * Copyright (C) 2015 alvarotrigo.com - A project by Alvaro Trigo
 */
!function(e,n){"use strict";"function"==typeof define&&define.amd?define(["jquery"],function(t){return n(t,e,e.document,e.Math)}):"object"==typeof exports&&exports?module.exports=n(require("jquery"),e,e.document,e.Math):n(jQuery,e,e.document,e.Math)}("undefined"!=typeof window?window:this,function(e,n,t,o,i){"use strict";var a="fullpage-wrapper",r="."+a,s="fp-scrollable",l="."+s,c="fp-responsive",d="fp-notransition",f="fp-destroyed",u="fp-enabled",h="fp-viewing",p="active",v="."+p,m="fp-completely",g="."+m,S=".section",w="fp-section",y="."+w,b=y+v,x=y+":first",C=y+":last",T="fp-tableCell",k="."+T,I="fp-auto-height",L="fp-normal-scroll",E="fp-nav",A="#"+E,M="fp-tooltip",H="."+M,O="fp-show-active",z=".slide",B="fp-slide",R="."+B,D=R+v,P="fp-slides",F="."+P,V="fp-slidesContainer",q="."+V,Y="fp-table",N="fp-slidesNav",U="."+N,X=U+" a",W="fp-controlArrow",j="."+W,K="fp-prev",Q="."+K,_=W+" "+K,G=j+Q,J="fp-next",Z="."+J,$=W+" "+J,ee=j+Z,ne=e(n),te=e(t),oe={scrollbars:!0,mouseWheel:!0,hideScrollbars:!1,fadeScrollbars:!1,disableMouse:!0,interactiveScrollbars:!0};e.fn.fullpage=function(s){function l(n,t){at("autoScrolling",n,t);var o=e(b);s.autoScrolling&&!s.scrollBar?(lt.css({overflow:"hidden",height:"100%"}),W(Mt.recordHistory,"internal"),gt.css({"-ms-touch-action":"none","touch-action":"none"}),o.length&&et(o.position().top)):(lt.css({overflow:"visible",height:"initial"}),W(!1,"internal"),gt.css({"-ms-touch-action":"","touch-action":""}),et(0),o.length&&lt.scrollTop(o.position().top))}function W(e,n){at("recordHistory",e,n)}function Q(e,n){"internal"!==n&&s.fadingEffect&&dt.fadingEffect&&dt.fadingEffect.update(e),at("scrollingSpeed",e,n)}function J(e,n){at("fitToSection",e,n)}function Z(e){s.lockAnchors=e}function ae(e){e?(jn(),Kn()):(Wn(),Qn())}function re(n,t){"undefined"!=typeof t?(t=t.replace(/ /g,"").split(","),e.each(t,function(e,t){tt(n,t,"m")})):n?(ae(!0),_n()):(ae(!1),Gn())}function se(n,t){"undefined"!=typeof t?(t=t.replace(/ /g,"").split(","),e.each(t,function(e,t){tt(n,t,"k")})):s.keyboardScrolling=n}function le(){var n=e(b).prev(y);n.length||!s.loopTop&&!s.continuousVertical||(n=e(y).last()),n.length&&Ke(n,null,!0)}function ce(){var n=e(b).next(y);n.length||!s.loopBottom&&!s.continuousVertical||(n=e(y).first()),n.length&&Ke(n,null,!1)}function de(e,n){Q(0,"internal"),fe(e,n),Q(Mt.scrollingSpeed,"internal")}function fe(e,n){var t=Rn(e);"undefined"!=typeof n?Pn(e,n):t.length>0&&Ke(t)}function ue(e){Xe("right",e)}function he(e){Xe("left",e)}function pe(n){if(!gt.hasClass(f)){wt=!0,St=ne.height(),e(y).each(function(){var n=e(this).find(F),t=e(this).find(R);s.verticalCentered&&e(this).find(k).css("height",zn(e(this))+"px"),e(this).css("height",St+"px"),s.scrollOverflow&&(t.length?t.each(function(){Hn(e(this))}):Hn(e(this))),t.length>1&&Sn(n,n.find(D))});var t=e(b),o=t.index(y);o&&de(o+1),wt=!1,e.isFunction(s.afterResize)&&n&&s.afterResize.call(gt),e.isFunction(s.afterReBuild)&&!n&&s.afterReBuild.call(gt)}}function ve(n){var t=ct.hasClass(c);n?t||(l(!1,"internal"),J(!1,"internal"),e(A).hide(),ct.addClass(c),e.isFunction(s.afterResponsive)&&s.afterResponsive.call(gt,n),s.responsiveSlides&&dt.responsiveSlides&&dt.responsiveSlides.toSections()):t&&(l(Mt.autoScrolling,"internal"),J(Mt.autoScrolling,"internal"),e(A).show(),ct.removeClass(c),e.isFunction(s.afterResponsive)&&s.afterResponsive.call(gt,n),s.responsiveSlides&&dt.responsiveSlides&&dt.responsiveSlides.toSlides())}function me(){return{options:s,internals:{getXmovement:Mn,removeAnimation:kn,getTransforms:nt,lazyLoad:$e,addAnimation:Tn,performHorizontalMove:yn,silentLandscapeScroll:$n,keepSlidesPosition:We,silentScroll:et,styleSlides:xe}}}function ge(){s.css3&&(s.css3=Xn()),s.scrollBar=s.scrollBar||s.hybrid,ye(),be(),re(!0),l(s.autoScrolling,"internal");var n=e(b).find(D);n.length&&(0!==e(b).index(y)||0===e(b).index(y)&&0!==n.index())&&$n(n),Cn(),Un(),"complete"===t.readyState&&an(),ne.on("load",an)}function Se(){ne.on("scroll",Be).on("hashchange",rn).blur(hn).resize(xn),te.keydown(sn).keyup(cn).on("click touchstart",A+" a",pn).on("click touchstart",X,vn).on("click",H,ln),e(y).on("click touchstart",j,un),s.normalScrollElements&&(te.on("mouseenter",s.normalScrollElements,function(){ae(!1)}),te.on("mouseleave",s.normalScrollElements,function(){ae(!0)}))}function we(e){var t="fp_"+e+"Extension";dt[e]="undefined"!=typeof n[t]?new n[t]:null}function ye(){var n=gt.find(s.sectionSelector);s.anchors.length||(s.anchors=n.filter("[data-anchor]").map(function(){return e(this).data("anchor").toString()}).get()),s.navigationTooltips.length||(s.navigationTooltips=n.filter("[data-tooltip]").map(function(){return e(this).data("tooltip").toString()}).get())}function be(){gt.css({height:"100%",position:"relative"}),gt.addClass(a),e("html").addClass(u),St=ne.height(),gt.removeClass(f),ke(),e(y).each(function(n){var t=e(this),o=t.find(R),i=o.length;Ce(t,n),Te(t,n),i>0?xe(t,o,i):s.verticalCentered&&On(t)}),s.fixedElements&&s.css3&&e(s.fixedElements).appendTo(ct),s.navigation&&Le(),Ae(),Me(),s.fadingEffect&&dt.fadingEffect&&dt.fadingEffect.apply(),s.scrollOverflow?("complete"===t.readyState&&Ee(),ne.on("load",Ee)):ze()}function xe(n,t,o){var i=100*o,a=100/o;t.wrapAll('<div class="'+V+'" />'),t.parent().wrap('<div class="'+P+'" />'),n.find(q).css("width",i+"%"),o>1&&(s.controlArrows&&Ie(n),s.slidesNavigation&&Vn(n,o)),t.each(function(n){e(this).css("width",a+"%"),s.verticalCentered&&On(e(this))});var r=n.find(D);r.length&&(0!==e(b).index(y)||0===e(b).index(y)&&0!==r.index())?$n(r):t.eq(0).addClass(p)}function Ce(n,t){t||0!==e(b).length||n.addClass(p),n.css("height",St+"px"),s.paddingTop&&n.css("padding-top",s.paddingTop),s.paddingBottom&&n.css("padding-bottom",s.paddingBottom),"undefined"!=typeof s.sectionsColor[t]&&n.css("background-color",s.sectionsColor[t]),"undefined"!=typeof s.anchors[t]&&n.attr("data-anchor",s.anchors[t])}function Te(n,t){"undefined"!=typeof s.anchors[t]&&n.hasClass(p)&&En(s.anchors[t],t),s.menu&&s.css3&&e(s.menu).closest(r).length&&e(s.menu).appendTo(ct)}function ke(){gt.find(s.sectionSelector).addClass(w),gt.find(s.slideSelector).addClass(B)}function Ie(e){e.find(F).after('<div class="'+_+'"></div><div class="'+$+'"></div>'),"#fff"!=s.controlArrowColor&&(e.find(ee).css("border-color","transparent transparent transparent "+s.controlArrowColor),e.find(G).css("border-color","transparent "+s.controlArrowColor+" transparent transparent")),s.loopHorizontal||e.find(G).hide()}function Le(){ct.append('<div id="'+E+'"><ul></ul></div>');var n=e(A);n.addClass(function(){return s.showActiveTooltip?O+" "+s.navigationPosition:s.navigationPosition});for(var t=0;t<e(y).length;t++){var o="";s.anchors.length&&(o=s.anchors[t]);var i='<li><a href="#'+o+'"><span></span></a>',a=s.navigationTooltips[t];"undefined"!=typeof a&&""!==a&&(i+='<div class="'+M+" "+s.navigationPosition+'">'+a+"</div>"),i+="</li>",n.find("ul").append(i)}e(A).css("margin-top","-"+e(A).height()/2+"px"),e(A).find("li").eq(e(b).index(y)).find("a").addClass(p)}function Ee(){e(y).each(function(){var n=e(this).find(R);n.length?n.each(function(){Hn(e(this))}):Hn(e(this))}),ze()}function Ae(){gt.find('iframe[src*="youtube.com/embed/"]').each(function(){He(e(this),"enablejsapi=1")})}function Me(){gt.find('iframe[src*="player.vimeo.com/"]').each(function(){He(e(this),"api=1")})}function He(e,n){var t=e.attr("src");e.attr("src",t+Oe(t)+n)}function Oe(e){return/\?/.test(e)?"&":"?"}function ze(){var n=e(b);n.addClass(m),s.scrollOverflowHandler.afterRender&&s.scrollOverflowHandler.afterRender(n),$e(n),en(n),e.isFunction(s.afterLoad)&&s.afterLoad.call(n,n.data("anchor"),n.index(y)+1),e.isFunction(s.afterRender)&&s.afterRender.call(gt)}function Be(){var n;if(!s.autoScrolling||s.scrollBar){var o=ne.scrollTop(),i=De(o),a=0,r=o+ne.height()/2,l=ct.height()-ne.height()===o,c=t.querySelectorAll(y);if(l)a=c.length-1;else for(var d=0;d<c.length;++d){var f=c[d];f.offsetTop<=r&&(a=d)}if(Re(i)&&(e(b).hasClass(m)||e(b).addClass(m).siblings().removeClass(m)),n=e(c).eq(a),!n.hasClass(p)){Ht=!0;var u=e(b),h=u.index(y)+1,v=An(n),g=n.data("anchor"),S=n.index(y)+1,w=n.find(D);if(w.length)var x=w.data("anchor"),C=w.index();bt&&(n.addClass(p).siblings().removeClass(p),e.isFunction(s.onLeave)&&s.onLeave.call(u,h,S,v),e.isFunction(s.afterLoad)&&s.afterLoad.call(n,g,S),tn(u),$e(n),en(n),En(g,S-1),s.anchors.length&&(ft=g),qn(C,x,g,S)),clearTimeout(Lt),Lt=setTimeout(function(){Ht=!1},100)}s.fitToSection&&(clearTimeout(Et),Et=setTimeout(function(){bt&&s.fitToSection&&(e(b).is(n)&&(wt=!0),Ke(e(b)),wt=!1)},s.fitToSectionDelay))}}function Re(n){var t=e(b).position().top,o=t+ne.height();return"up"==n?o>=ne.scrollTop()+ne.height():t<=ne.scrollTop()}function De(e){var n=e>Ot?"down":"up";return Ot=e,Ft=e,n}function Pe(e,n){if(Ct.m[e]){var t="down"===e?"bottom":"top",o="down"===e?ce:le;if(dt.scrollHorizontally&&(o=dt.scrollHorizontally.getScrollSection(e,o)),n.length>0){if(!s.scrollOverflowHandler.isScrolled(t,n))return!0;o()}else o()}}function Fe(n){var t=n.originalEvent,i=e(t.target).closest(y);if(!Ve(n.target)&&qe(t)){s.autoScrolling&&n.preventDefault();var a=s.scrollOverflowHandler.scrollable(i);if(bt&&!pt){var r=Zn(t);Rt=r.y,Dt=r.x,i.find(F).length&&o.abs(Bt-Dt)>o.abs(zt-Rt)?o.abs(Bt-Dt)>ne.outerWidth()/100*s.touchSensitivity&&(Bt>Dt?Ct.m.right&&ue(i):Ct.m.left&&he(i)):s.autoScrolling&&o.abs(zt-Rt)>ne.height()/100*s.touchSensitivity&&(zt>Rt?Pe("down",a):Rt>zt&&Pe("up",a))}}}function Ve(n,t){t=t||0;var o=e(n).parent();return t<s.normalScrollElementTouchThreshold&&o.is(s.normalScrollElements)?!0:t==s.normalScrollElementTouchThreshold?!1:Ve(o,++t)}function qe(e){return"undefined"==typeof e.pointerType||"mouse"!=e.pointerType}function Ye(e){var n=e.originalEvent;if(s.fitToSection&&lt.stop(),qe(n)){var t=Zn(n);zt=t.y,Bt=t.x}}function Ne(e,n){for(var t=0,i=e.slice(o.max(e.length-n,1)),a=0;a<i.length;a++)t+=i[a];return o.ceil(t/n)}function Ue(t){var i=(new Date).getTime(),a=e(g).hasClass(L);if(s.autoScrolling&&!ht&&!a){t=t||n.event;var r=t.wheelDelta||-t.deltaY||-t.detail,l=o.max(-1,o.min(1,r)),c="undefined"!=typeof t.wheelDeltaX||"undefined"!=typeof t.deltaX,d=o.abs(t.wheelDeltaX)<o.abs(t.wheelDelta)||o.abs(t.deltaX)<o.abs(t.deltaY)||!c;xt.length>149&&xt.shift(),xt.push(o.abs(r)),s.scrollBar&&(t.preventDefault?t.preventDefault():t.returnValue=!1);var f=e(b),u=s.scrollOverflowHandler.scrollable(f),h=i-Pt;if(Pt=i,h>200&&(xt=[]),bt){var p=Ne(xt,10),v=Ne(xt,70),m=p>=v;m&&d&&(0>l?Pe("down",u):Pe("up",u))}return!1}s.fitToSection&&lt.stop()}function Xe(n,t){var o="undefined"==typeof t?e(b):t,i=o.find(F),a=i.find(R).length;if(!(!i.length||pt||2>a)){var r=i.find(D),l=null;if(l="left"===n?r.prev(R):r.next(R),!l.length){if(!s.loopHorizontal)return;l="left"===n?r.siblings(":last"):r.siblings(":first")}pt=!0,Sn(i,l,n)}}function We(){e(D).each(function(){$n(e(this),"internal")})}function je(e){var n=e.position(),t=n.top,o=n.top>Ft,i=t-St+e.outerHeight(),a=s.bigSectionsDestination;return e.outerHeight()>St?(!o&&!a||"bottom"===a)&&(t=i):(o||wt&&e.is(":last-child"))&&(t=i),Ft=t,t}function Ke(n,t,o){if("undefined"!=typeof n){var i=je(n),a={element:n,callback:t,isMovementUp:o,dtop:i,yMovement:An(n),anchorLink:n.data("anchor"),sectionIndex:n.index(y),activeSlide:n.find(D),activeSection:e(b),leavingSection:e(b).index(y)+1,localIsResizing:wt};if(!(a.activeSection.is(n)&&!wt||s.scrollBar&&ne.scrollTop()===a.dtop&&!n.hasClass(I))){if(a.activeSlide.length)var r=a.activeSlide.data("anchor"),l=a.activeSlide.index();s.autoScrolling&&s.continuousVertical&&"undefined"!=typeof a.isMovementUp&&(!a.isMovementUp&&"up"==a.yMovement||a.isMovementUp&&"down"==a.yMovement)&&(a=Ge(a)),(!e.isFunction(s.onLeave)||a.localIsResizing||s.onLeave.call(a.activeSection,a.leavingSection,a.sectionIndex+1,a.yMovement)!==!1)&&(tn(a.activeSection),n.addClass(p).siblings().removeClass(p),$e(n),s.scrollOverflowHandler.onLeave(),bt=!1,qn(l,r,a.anchorLink,a.sectionIndex),Qe(a),ft=a.anchorLink,En(a.anchorLink,a.sectionIndex))}}}function Qe(n){if(s.css3&&s.autoScrolling&&!s.scrollBar){var t="translate3d(0px, -"+n.dtop+"px, 0px)";Bn(t,!0),s.scrollingSpeed?kt=setTimeout(function(){Ze(n)},s.scrollingSpeed):Ze(n)}else{var o=_e(n);e(o.element).animate(o.options,s.scrollingSpeed,s.easing).promise().done(function(){s.scrollBar?setTimeout(function(){Ze(n)},30):Ze(n)})}}function _e(e){var n={};return s.autoScrolling&&!s.scrollBar?(n.options={top:-e.dtop},n.element=r):(n.options={scrollTop:e.dtop},n.element="html, body"),n}function Ge(n){return n.isMovementUp?e(b).before(n.activeSection.nextAll(y)):e(b).after(n.activeSection.prevAll(y).get().reverse()),et(e(b).position().top),We(),n.wrapAroundElements=n.activeSection,n.dtop=n.element.position().top,n.yMovement=An(n.element),n}function Je(n){n.wrapAroundElements&&n.wrapAroundElements.length&&(n.isMovementUp?e(x).before(n.wrapAroundElements):e(C).after(n.wrapAroundElements),et(e(b).position().top),We())}function Ze(n){Je(n),e.isFunction(s.afterLoad)&&!n.localIsResizing&&s.afterLoad.call(n.element,n.anchorLink,n.sectionIndex+1),s.scrollOverflowHandler.afterLoad(),s.resetSliders&&dt.resetSliders&&dt.resetSliders.apply(n),en(n.element),n.element.addClass(m).siblings().removeClass(m),bt=!0,e.isFunction(n.callback)&&n.callback.call(this)}function $e(n){var n=on(n);n.find("img[data-src], source[data-src], audio[data-src], iframe[data-src]").each(function(){e(this).attr("src",e(this).data("src")),e(this).removeAttr("data-src"),e(this).is("source")&&e(this).closest("video").get(0).load()})}function en(n){var n=on(n);n.find("video, audio").each(function(){var n=e(this).get(0);n.hasAttribute("data-autoplay")&&"function"==typeof n.play&&n.play()}),n.find('iframe[src*="youtube.com/embed/"]').each(function(){var n=e(this).get(0);n.hasAttribute("data-autoplay")&&nn(n),n.onload=function(){n.hasAttribute("data-autoplay")&&nn(n)}})}function nn(e){e.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}',"*")}function tn(n){var n=on(n);n.find("video, audio").each(function(){var n=e(this).get(0);n.hasAttribute("data-keepplaying")||"function"!=typeof n.pause||n.pause()}),n.find('iframe[src*="youtube.com/embed/"]').each(function(){var n=e(this).get(0);/youtube\.com\/embed\//.test(e(this).attr("src"))&&!n.hasAttribute("data-keepplaying")&&e(this).get(0).contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}',"*")})}function on(n){var t=n.find(D);return t.length&&(n=e(t)),n}function an(){var e=n.location.hash.replace("#","").split("/"),t=decodeURIComponent(e[0]),o=decodeURIComponent(e[1]);t&&(s.animateAnchor?Pn(t,o):de(t,o))}function rn(){if(!Ht&&!s.lockAnchors){var e=n.location.hash.replace("#","").split("/"),t=decodeURIComponent(e[0]),o=decodeURIComponent(e[1]),i="undefined"==typeof ft,a="undefined"==typeof ft&&"undefined"==typeof o&&!pt;t.length&&(t&&t!==ft&&!i||a||!pt&&ut!=o)&&Pn(t,o)}}function sn(n){clearTimeout(At);var t=e(":focus");if(!t.is("textarea")&&!t.is("input")&&!t.is("select")&&"true"!==t.attr("contentEditable")&&""!==t.attr("contentEditable")&&s.keyboardScrolling&&s.autoScrolling){var o=n.which,i=[40,38,32,33,34];e.inArray(o,i)>-1&&n.preventDefault(),ht=n.ctrlKey,At=setTimeout(function(){mn(n)},150)}}function ln(){e(this).prev().trigger("click")}function cn(e){yt&&(ht=e.ctrlKey)}function dn(e){2==e.which&&(Vt=e.pageY,gt.on("mousemove",gn))}function fn(e){2==e.which&&gt.off("mousemove")}function un(){var n=e(this).closest(y);e(this).hasClass(K)?Ct.m.left&&he(n):Ct.m.right&&ue(n)}function hn(){yt=!1,ht=!1}function pn(n){n.preventDefault();var t=e(this).parent().index();Ke(e(y).eq(t))}function vn(n){n.preventDefault();var t=e(this).closest(y).find(F),o=t.find(R).eq(e(this).closest("li").index());Sn(t,o)}function mn(n){var t=n.shiftKey;switch(n.which){case 38:case 33:Ct.k.up&&le();break;case 32:if(t&&Ct.k.up){le();break}case 40:case 34:Ct.k.down&&ce();break;case 36:Ct.k.up&&fe(1);break;case 35:Ct.k.down&&fe(e(y).length);break;case 37:Ct.k.left&&he();break;case 39:Ct.k.right&&ue();break;default:return}}function gn(e){bt&&(e.pageY<Vt&&Ct.m.up?le():e.pageY>Vt&&Ct.m.down&&ce()),Vt=e.pageY}function Sn(n,t,o){var i=n.closest(y),a={slides:n,destiny:t,direction:o,destinyPos:t.position(),slideIndex:t.index(),section:i,sectionIndex:i.index(y),anchorLink:i.data("anchor"),slidesNav:i.find(U),slideAnchor:Nn(t),prevSlide:i.find(D),prevSlideIndex:i.find(D).index(),localIsResizing:wt};return a.xMovement=Mn(a.prevSlideIndex,a.slideIndex),a.localIsResizing||(bt=!1),s.onSlideLeave&&!a.localIsResizing&&"none"!==a.xMovement&&e.isFunction(s.onSlideLeave)&&s.onSlideLeave.call(a.prevSlide,a.anchorLink,a.sectionIndex+1,a.prevSlideIndex,a.xMovement,a.slideIndex)===!1?void(pt=!1):(tn(a.prevSlide),t.addClass(p).siblings().removeClass(p),a.localIsResizing||$e(t),!s.loopHorizontal&&s.controlArrows&&(i.find(G).toggle(0!==a.slideIndex),i.find(ee).toggle(!t.is(":last-child"))),i.hasClass(p)&&qn(a.slideIndex,a.slideAnchor,a.anchorLink,a.sectionIndex),dt.continuousHorizontal&&dt.continuousHorizontal.apply(a),yn(n,a,!0),void(s.interlockedSlides&&dt.interlockedSlides&&dt.interlockedSlides.apply(a)))}function wn(n){dt.continuousHorizontal&&dt.continuousHorizontal.afterSlideLoads(n),bn(n.slidesNav,n.slideIndex),n.localIsResizing||(e.isFunction(s.afterSlideLoad)&&s.afterSlideLoad.call(n.destiny,n.anchorLink,n.sectionIndex+1,n.slideAnchor,n.slideIndex),bt=!0),en(n.destiny),pt=!1,dt.interlockedSlides&&dt.interlockedSlides.apply(n)}function yn(e,n,t){var i=n.destinyPos;if(s.css3){var a="translate3d(-"+o.round(i.left)+"px, 0px, 0px)";Tn(e.find(q)).css(nt(a)),It=setTimeout(function(){t&&wn(n)},s.scrollingSpeed,s.easing)}else e.animate({scrollLeft:o.round(i.left)},s.scrollingSpeed,s.easing,function(){t&&wn(n)})}function bn(e,n){e.find(v).removeClass(p),e.find("li").eq(n).find("a").addClass(p)}function xn(){if(Cn(),vt){var n=e(t.activeElement);if(!n.is("textarea")&&!n.is("input")&&!n.is("select")){var i=ne.height();o.abs(i-qt)>20*o.max(qt,i)/100&&(pe(!0),qt=i)}}else clearTimeout(Tt),Tt=setTimeout(function(){pe(!0)},350)}function Cn(){var e=s.responsive||s.responsiveWidth,n=s.responsiveHeight,t=e&&ne.outerWidth()<e,o=n&&ne.height()<n;e&&n?ve(t||o):e?ve(t):n&&ve(o)}function Tn(e){var n="all "+s.scrollingSpeed+"ms "+s.easingcss3;return e.removeClass(d),e.css({"-webkit-transition":n,transition:n})}function kn(e){return e.addClass(d)}function In(n,t){s.navigation&&(e(A).find(v).removeClass(p),n?e(A).find('a[href="#'+n+'"]').addClass(p):e(A).find("li").eq(t).find("a").addClass(p))}function Ln(n){s.menu&&(e(s.menu).find(v).removeClass(p),e(s.menu).find('[data-menuanchor="'+n+'"]').addClass(p))}function En(e,n){Ln(e),In(e,n)}function An(n){var t=e(b).index(y),o=n.index(y);return t==o?"none":t>o?"up":"down"}function Mn(e,n){return e==n?"none":e>n?"left":"right"}function Hn(e){if(!e.hasClass("fp-noscroll")){e.css("overflow","hidden");var n,t=s.scrollOverflowHandler,o=t.wrapContent(),i=e.closest(y),a=t.scrollable(e);a.length?n=t.scrollHeight(e):(n=e.get(0).scrollHeight,s.verticalCentered&&(n=e.find(k).get(0).scrollHeight));var r=St-parseInt(i.css("padding-bottom"))-parseInt(i.css("padding-top"));n>r?a.length?t.update(e,r):(s.verticalCentered?e.find(k).wrapInner(o):e.wrapInner(o),t.create(e,r)):t.remove(e),e.css("overflow","")}}function On(e){e.hasClass(Y)||e.addClass(Y).wrapInner('<div class="'+T+'" style="height:'+zn(e)+'px;" />')}function zn(e){var n=St;if(s.paddingTop||s.paddingBottom){var t=e;t.hasClass(w)||(t=e.closest(y));var o=parseInt(t.css("padding-top"))+parseInt(t.css("padding-bottom"));n=St-o}return n}function Bn(e,n){n?Tn(gt):kn(gt),gt.css(nt(e)),setTimeout(function(){gt.removeClass(d)},10)}function Rn(n){var t=gt.find(y+'[data-anchor="'+n+'"]');return t.length||(t=e(y).eq(n-1)),t}function Dn(e,n){var t=n.find(F),o=t.find(R+'[data-anchor="'+e+'"]');return o.length||(o=t.find(R).eq(e)),o}function Pn(e,n){var t=Rn(e);"undefined"==typeof n&&(n=0),e===ft||t.hasClass(p)?Fn(t,n):Ke(t,function(){Fn(t,n)})}function Fn(e,n){if("undefined"!=typeof n){var t=e.find(F),o=Dn(n,e);o.length&&Sn(t,o)}}function Vn(e,n){e.append('<div class="'+N+'"><ul></ul></div>');var t=e.find(U);t.addClass(s.slidesNavPosition);for(var o=0;n>o;o++)t.find("ul").append('<li><a href="#"><span></span></a></li>');t.css("margin-left","-"+t.width()/2+"px"),t.find("li").first().find("a").addClass(p)}function qn(e,n,t,o){var i="";s.anchors.length&&!s.lockAnchors&&(e?("undefined"!=typeof t&&(i=t),"undefined"==typeof n&&(n=e),ut=n,Yn(i+"/"+n)):"undefined"!=typeof e?(ut=n,Yn(t)):Yn(t)),Un()}function Yn(e){if(s.recordHistory)location.hash=e;else if(vt||mt)n.history.replaceState(i,i,"#"+e);else{var t=n.location.href.split("#")[0];n.location.replace(t+"#"+e)}}function Nn(e){var n=e.data("anchor"),t=e.index();return"undefined"==typeof n&&(n=t),n}function Un(){var n=e(b),t=n.find(D),o=Nn(n),i=Nn(t),a=String(o);t.length&&(a=a+"-"+i),a=a.replace("/","-").replace("#","");var r=new RegExp("\\b\\s?"+h+"-[^\\s]+\\b","g");ct[0].className=ct[0].className.replace(r,""),ct.addClass(h+"-"+a)}function Xn(){var e,o=t.createElement("p"),a={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};t.body.insertBefore(o,null);for(var r in a)o.style[r]!==i&&(o.style[r]="translate3d(1px,1px,1px)",e=n.getComputedStyle(o).getPropertyValue(a[r]));return t.body.removeChild(o),e!==i&&e.length>0&&"none"!==e}function Wn(){t.addEventListener?(t.removeEventListener("mousewheel",Ue,!1),t.removeEventListener("wheel",Ue,!1),t.removeEventListener("MozMousePixelScroll",Ue,!1)):t.detachEvent("onmousewheel",Ue)}function jn(){var e,o="";n.addEventListener?e="addEventListener":(e="attachEvent",o="on");var a="onwheel"in t.createElement("div")?"wheel":t.onmousewheel!==i?"mousewheel":"DOMMouseScroll";"DOMMouseScroll"==a?t[e](o+"MozMousePixelScroll",Ue,!1):t[e](o+a,Ue,!1)}function Kn(){gt.on("mousedown",dn).on("mouseup",fn)}function Qn(){gt.off("mousedown",dn).off("mouseup",fn)}function _n(){if(vt||mt){var n=Jn();e(r).off("touchstart "+n.down).on("touchstart "+n.down,Ye).off("touchmove "+n.move).on("touchmove "+n.move,Fe)}}function Gn(){if(vt||mt){var n=Jn();e(r).off("touchstart "+n.down).off("touchmove "+n.move)}}function Jn(){var e;return e=n.PointerEvent?{down:"pointerdown",move:"pointermove"}:{down:"MSPointerDown",move:"MSPointerMove"}}function Zn(e){var n=[];return n.y="undefined"!=typeof e.pageY&&(e.pageY||e.pageX)?e.pageY:e.touches[0].pageY,n.x="undefined"!=typeof e.pageX&&(e.pageY||e.pageX)?e.pageX:e.touches[0].pageX,mt&&qe(e)&&s.scrollBar&&(n.y=e.touches[0].pageY,n.x=e.touches[0].pageX),n}function $n(e,n){Q(0,"internal"),"undefined"!=typeof n&&(wt=!0),Sn(e.closest(F),e),"undefined"!=typeof n&&(wt=!1),Q(Mt.scrollingSpeed,"internal")}function et(e){if(s.scrollBar)gt.scrollTop(e);else if(s.css3){var n="translate3d(0px, -"+e+"px, 0px)";Bn(n,!1)}else gt.css("top",-e)}function nt(e){return{"-webkit-transform":e,"-moz-transform":e,"-ms-transform":e,transform:e}}function tt(e,n,t){switch(n){case"up":Ct[t].up=e;break;case"down":Ct[t].down=e;break;case"left":Ct[t].left=e;break;case"right":Ct[t].right=e;break;case"all":"m"==t?re(e):se(e)}}function ot(n){l(!1,"internal"),re(!1),se(!1),gt.addClass(f),clearTimeout(It),clearTimeout(kt),clearTimeout(Tt),clearTimeout(Lt),clearTimeout(Et),ne.off("scroll",Be).off("hashchange",rn).off("resize",xn),te.off("click",A+" a").off("mouseenter",A+" li").off("mouseleave",A+" li").off("click",X).off("mouseover",s.normalScrollElements).off("mouseout",s.normalScrollElements),e(y).off("click",j),clearTimeout(It),clearTimeout(kt),n&&it()}function it(){et(0),gt.find("img[data-src], source[data-src], audio[data-src], iframe[data-src]").each(function(){e(this).attr("src",e(this).data("src")),e(this).removeAttr("data-src")}),e(A+", "+U+", "+j).remove(),e(y).css({height:"","background-color":"",padding:""}),e(R).css({width:""}),gt.css({height:"",position:"","-ms-touch-action":"","touch-action":""}),lt.css({overflow:"",height:""}),e("html").removeClass(u),ct.removeClass(c),e.each(ct.get(0).className.split(/\s+/),function(e,n){0===n.indexOf(h)&&ct.removeClass(n)}),e(y+", "+R).each(function(){s.scrollOverflowHandler.remove(e(this)),e(this).removeClass(Y+" "+p)}),kn(gt),gt.find(k+", "+q+", "+F).each(function(){e(this).replaceWith(this.childNodes)}),lt.scrollTop(0);var n=[w,B,V];e.each(n,function(n,t){e("."+t).removeClass(t)})}function at(e,n,t){s[e]=n,"internal"!==t&&(Mt[e]=n)}function rt(){return e("html").hasClass(u)?void st("error","Fullpage.js can only be initialized once and you are doing it multiple times!"):(s.continuousVertical&&(s.loopTop||s.loopBottom)&&(s.continuousVertical=!1,st("warn","Option `loopTop/loopBottom` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled")),s.scrollBar&&s.scrollOverflow&&st("warn","Option `scrollBar` is mutually exclusive with `scrollOverflow`. Sections with scrollOverflow might not work well in Firefox"),s.continuousVertical&&s.scrollBar&&(s.continuousVertical=!1,st("warn","Option `scrollBar` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled")),void e.each(s.anchors,function(n,t){var o=te.find("[name]").filter(function(){return e(this).attr("name")&&e(this).attr("name").toLowerCase()==t.toLowerCase()}),i=te.find("[id]").filter(function(){return e(this).attr("id")&&e(this).attr("id").toLowerCase()==t.toLowerCase()});(i.length||o.length)&&(st("error","data-anchor tags can not have the same value as any `id` element on the site (or `name` element for IE)."),i.length&&st("error",'"'+t+'" is is being used by another element `id` property'),o.length&&st("error",'"'+t+'" is is being used by another element `name` property'))}))}function st(e,n){console&&console[e]&&console[e]("fullPage: "+n)}if(e("html").hasClass(u))return void rt();var lt=e("html, body"),ct=e("body"),dt=e.fn.fullpage;s=e.extend({menu:!1,anchors:[],lockAnchors:!1,navigation:!1,navigationPosition:"right",navigationTooltips:[],showActiveTooltip:!1,slidesNavigation:!1,slidesNavPosition:"bottom",scrollBar:!1,hybrid:!1,css3:!0,scrollingSpeed:700,autoScrolling:!0,fitToSection:!0,fitToSectionDelay:1e3,easing:"easeInOutCubic",easingcss3:"ease",loopBottom:!1,loopTop:!1,loopHorizontal:!0,continuousVertical:!1,continuousHorizontal:!0,scrollHorizontally:!0,interlockedSlides:!1,resetSliders:!1,fadingEffect:!1,normalScrollElements:null,scrollOverflow:!1,scrollOverflowHandler:ie,scrollOverflowOptions:null,touchSensitivity:5,normalScrollElementTouchThreshold:5,bigSectionsDestination:null,keyboardScrolling:!0,animateAnchor:!0,recordHistory:!0,controlArrows:!0,controlArrowColor:"#fff",verticalCentered:!0,sectionsColor:[],paddingTop:0,paddingBottom:0,fixedElements:null,responsive:0,responsiveWidth:0,responsiveHeight:0,responsiveSlides:!1,sectionSelector:S,slideSelector:z,afterLoad:null,onLeave:null,afterRender:null,afterResize:null,afterReBuild:null,afterSlideLoad:null,onSlideLeave:null,afterResponsive:null},s);var ft,ut,ht,pt=!1,vt=navigator.userAgent.match(/(iPhone|iPod|iPad|Android|playbook|silk|BlackBerry|BB10|Windows Phone|Tizen|Bada|webOS|IEMobile|Opera Mini)/),mt="ontouchstart"in n||navigator.msMaxTouchPoints>0||navigator.maxTouchPoints,gt=e(this),St=ne.height(),wt=!1,yt=!0,bt=!0,xt=[],Ct={};Ct.m={up:!0,down:!0,left:!0,right:!0},Ct.k=e.extend(!0,{},Ct.m);var Tt,kt,It,Lt,Et,At,Mt=e.extend(!0,{},s);rt(),oe.click=mt,oe=e.extend(oe,s.scrollOverflowOptions),e.extend(e.easing,{easeInOutCubic:function(e,n,t,o,i){return(n/=i/2)<1?o/2*n*n*n+t:o/2*((n-=2)*n*n+2)+t}}),e(this).length&&(dt.setAutoScrolling=l,dt.setRecordHistory=W,dt.setScrollingSpeed=Q,dt.setFitToSection=J,dt.setLockAnchors=Z,dt.setMouseWheelScrolling=ae,dt.setAllowScrolling=re,dt.setKeyboardScrolling=se,dt.moveSectionUp=le,dt.moveSectionDown=ce,dt.silentMoveTo=de,dt.moveTo=fe,dt.moveSlideRight=ue,dt.moveSlideLeft=he,dt.reBuild=pe,dt.setResponsive=ve,dt.getFullpageData=me,dt.destroy=ot,we("continuousHorizontal"),we("scrollHorizontally"),we("resetSliders"),we("interlockedSlides"),we("responsiveSlides"),we("fadingEffect"),ge(),Se());var Ht=!1,Ot=0,zt=0,Bt=0,Rt=0,Dt=0,Pt=(new Date).getTime(),Ft=0,Vt=0,qt=St},"undefined"!=typeof IScroll&&(IScroll.prototype.wheelOn=function(){this.wrapper.addEventListener("wheel",this),this.wrapper.addEventListener("mousewheel",this),this.wrapper.addEventListener("DOMMouseScroll",this)},IScroll.prototype.wheelOff=function(){this.wrapper.removeEventListener("wheel",this),this.wrapper.removeEventListener("mousewheel",this),this.wrapper.removeEventListener("DOMMouseScroll",this)});var ie={refreshId:null,iScrollInstances:[],onLeave:function(){var n=e(b).find(l).data("iscrollInstance");"undefined"!=typeof n&&n&&n.wheelOff()},afterLoad:function(){var n=e(b).find(l).data("iscrollInstance");"undefined"!=typeof n&&n&&n.wheelOn()},create:function(n,t){var o=n.find(l);o.height(t),o.each(function(){var n=jQuery(this),t=n.data("iscrollInstance");t&&e.each(ie.iScrollInstances,function(){e(this).destroy()}),t=new IScroll(n.get(0),oe),ie.iScrollInstances.push(t),n.data("iscrollInstance",t)})},isScrolled:function(e,n){var t=n.data("iscrollInstance");return t?"top"===e?t.y>=0&&!n.scrollTop():"bottom"===e?0-t.y+n.scrollTop()+1+n.innerHeight()>=n[0].scrollHeight:void 0:!0},scrollable:function(e){return e.find(F).length?e.find(D).find(l):e.find(l)},scrollHeight:function(e){return e.find(l).children().first().get(0).scrollHeight},remove:function(e){var n=e.find(l);if(n.length){var t=n.data("iscrollInstance");t.destroy(),n.data("iscrollInstance",null)}e.find(l).children().first().children().first().unwrap().unwrap()},update:function(n,t){clearTimeout(ie.refreshId),ie.refreshId=setTimeout(function(){e.each(ie.iScrollInstances,function(){e(this).get(0).refresh()})},150),n.find(l).css("height",t+"px").parent().css("height",t+"px")},wrapContent:function(){return'<div class="'+s+'"><div class="fp-scroller"></div></div>'}}});

/*

 arcticModal — jQuery plugin
 Version: 0.3
 Author: Sergey Predvoditelev (sergey.predvoditelev@gmail.com)
 Company: Arctic Laboratory (http://arcticlab.ru/)

 Docs & Examples: http://arcticlab.ru/arcticmodal/

 */
(function(d){var g={type:"html",content:"",url:"",ajax:{},ajax_request:null,closeOnEsc:!0,closeOnOverlayClick:!0,clone:!1,overlay:{block:void 0,tpl:'<div class="arcticmodal-overlay"></div>',css:{backgroundColor:"#000",opacity:0.6}},container:{block:void 0,tpl:'<div class="arcticmodal-container"><table class="arcticmodal-container_i"><tr><td class="arcticmodal-container_i2"></td></tr></table></div>'},wrap:void 0,body:void 0,errors:{tpl:'<div class="arcticmodal-error arcticmodal-close"></div>',autoclose_delay:2E3,
ajax_unsuccessful_load:"Error"},openEffect:{type:"fade",speed:400},closeEffect:{type:"fade",speed:400},beforeOpen:d.noop,afterOpen:d.noop,beforeClose:d.noop,afterClose:d.noop,afterLoading:d.noop,afterLoadingOnShow:d.noop,errorLoading:d.noop},j=0,e=d([]),m={isEventOut:function(a,b){var c=!0;d(a).each(function(){d(b.target).get(0)==d(this).get(0)&&(c=!1);0==d(b.target).closest("HTML",d(this).get(0)).length&&(c=!1)});return c}},f={getParentEl:function(a){var b=d(a);return b.data("arcticmodal")?b:(b=
d(a).closest(".arcticmodal-container").data("arcticmodalParentEl"))?b:!1},transition:function(a,b,c,e){e=void 0==e?d.noop:e;switch(c.type){case "fade":"show"==b?a.fadeIn(c.speed,e):a.fadeOut(c.speed,e);break;case "none":"show"==b?a.show():a.hide(),e()}},prepare_body:function(a,b){d(".arcticmodal-close",a.body).unbind("click.arcticmodal").bind("click.arcticmodal",function(){b.arcticmodal("close");return!1})},init_el:function(a,b){var c=a.data("arcticmodal");if(!c){c=b;j++;c.modalID=j;c.overlay.block=
d(c.overlay.tpl);c.overlay.block.css(c.overlay.css);c.container.block=d(c.container.tpl);c.body=d(".arcticmodal-container_i2",c.container.block);b.clone?c.body.html(a.clone(!0)):(a.before('<div id="arcticmodalReserve'+c.modalID+'" style="display: none" />'),c.body.html(a));f.prepare_body(c,a);c.closeOnOverlayClick&&c.overlay.block.add(c.container.block).click(function(b){m.isEventOut(d(">*",c.body),b)&&a.arcticmodal("close")});c.container.block.data("arcticmodalParentEl",a);a.data("arcticmodal",c);
e=d.merge(e,a);d.proxy(h.show,a)();if("html"==c.type)return a;if(void 0!=c.ajax.beforeSend){var k=c.ajax.beforeSend;delete c.ajax.beforeSend}if(void 0!=c.ajax.success){var g=c.ajax.success;delete c.ajax.success}if(void 0!=c.ajax.error){var l=c.ajax.error;delete c.ajax.error}var n=d.extend(!0,{url:c.url,beforeSend:function(){void 0==k?c.body.html('<div class="arcticmodal-loading" />'):k(c,a)},success:function(b){a.trigger("afterLoading");c.afterLoading(c,a,b);void 0==g?c.body.html(b):g(c,a,b);f.prepare_body(c,
a);a.trigger("afterLoadingOnShow");c.afterLoadingOnShow(c,a,b)},error:function(){a.trigger("errorLoading");c.errorLoading(c,a);void 0==l?(c.body.html(c.errors.tpl),d(".arcticmodal-error",c.body).html(c.errors.ajax_unsuccessful_load),d(".arcticmodal-close",c.body).click(function(){a.arcticmodal("close");return!1}),c.errors.autoclose_delay&&setTimeout(function(){a.arcticmodal("close")},c.errors.autoclose_delay)):l(c,a)}},c.ajax);c.ajax_request=d.ajax(n);a.data("arcticmodal",c)}},init:function(a){a=
d.extend(!0,{},g,a);if(d.isFunction(this))if(void 0==a)d.error("jquery.arcticmodal: Uncorrect parameters");else if(""==a.type)d.error('jquery.arcticmodal: Don\'t set parameter "type"');else switch(a.type){case "html":if(""==a.content){d.error('jquery.arcticmodal: Don\'t set parameter "content"');break}var b=a.content;a.content="";return f.init_el(d(b),a);case "ajax":if(""==a.url){d.error('jquery.arcticmodal: Don\'t set parameter "url"');break}return f.init_el(d("<div />"),a)}else return this.each(function(){f.init_el(d(this),
d.extend(!0,{},a))})}},h={show:function(){var a=f.getParentEl(this);if(!1===a)d.error("jquery.arcticmodal: Uncorrect call");else{var b=a.data("arcticmodal");b.overlay.block.hide();b.container.block.hide();d("BODY").append(b.overlay.block);d("BODY").append(b.container.block);b.beforeOpen(b,a);a.trigger("beforeOpen");if("hidden"!=b.wrap.css("overflow")){b.wrap.data("arcticmodalOverflow",b.wrap.css("overflow"));var c=b.wrap.outerWidth(!0);b.wrap.css("overflow","hidden");var g=b.wrap.outerWidth(!0);g!=
c&&b.wrap.css("marginRight",g-c+"px")}e.not(a).each(function(){d(this).data("arcticmodal").overlay.block.hide()});f.transition(b.overlay.block,"show",1<e.length?{type:"none"}:b.openEffect);f.transition(b.container.block,"show",1<e.length?{type:"none"}:b.openEffect,function(){b.afterOpen(b,a);a.trigger("afterOpen")});return a}},close:function(){if(d.isFunction(this))e.each(function(){d(this).arcticmodal("close")});else return this.each(function(){var a=f.getParentEl(this);if(!1===a)d.error("jquery.arcticmodal: Uncorrect call");
else{var b=a.data("arcticmodal");!1!==b.beforeClose(b,a)&&(a.trigger("beforeClose"),e.not(a).last().each(function(){d(this).data("arcticmodal").overlay.block.show()}),f.transition(b.overlay.block,"hide",1<e.length?{type:"none"}:b.closeEffect),f.transition(b.container.block,"hide",1<e.length?{type:"none"}:b.closeEffect,function(){b.afterClose(b,a);a.trigger("afterClose");b.clone||d("#arcticmodalReserve"+b.modalID).replaceWith(b.body.find(">*"));b.overlay.block.remove();b.container.block.remove();a.data("arcticmodal",
null);d(".arcticmodal-container").length||(b.wrap.data("arcticmodalOverflow")&&b.wrap.css("overflow",b.wrap.data("arcticmodalOverflow")),b.wrap.css("marginRight",0))}),"ajax"==b.type&&b.ajax_request.abort(),e=e.not(a))}})},setDefault:function(a){d.extend(!0,g,a)}};d(function(){g.wrap=d(document.all&&!document.querySelector?"html":"body")});d(document).bind("keyup.arcticmodal",function(a){var b=e.last();b.length&&b.data("arcticmodal").closeOnEsc&&27===a.keyCode&&b.arcticmodal("close")});d.arcticmodal=
d.fn.arcticmodal=function(a){if(h[a])return h[a].apply(this,Array.prototype.slice.call(arguments,1));if("object"===typeof a||!a)return f.init.apply(this,arguments);d.error("jquery.arcticmodal: Method "+a+" does not exist")}})(jQuery);

/*!
 * jQuery Mousewheel 3.1.13
 *
 * Copyright 2015 jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});

/*!
 * jScrollPane - v2.0.23 - 2016-01-28
 * http://jscrollpane.kelvinluck.com/
 *
 * Copyright (c) 2014 Kelvin Luck
 * Dual licensed under the MIT or GPL licenses.
 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){a.fn.jScrollPane=function(b){function c(b,c){function d(c){var f,h,j,k,l,o,p=!1,q=!1;if(N=c,void 0===O)l=b.scrollTop(),o=b.scrollLeft(),b.css({overflow:"hidden",padding:0}),P=b.innerWidth()+rb,Q=b.innerHeight(),b.width(P),O=a('<div class="jspPane" />').css("padding",qb).append(b.children()),R=a('<div class="jspContainer" />').css({width:P+"px",height:Q+"px"}).append(O).appendTo(b);else{if(b.css("width",""),p=N.stickToBottom&&A(),q=N.stickToRight&&B(),k=b.innerWidth()+rb!=P||b.outerHeight()!=Q,k&&(P=b.innerWidth()+rb,Q=b.innerHeight(),R.css({width:P+"px",height:Q+"px"})),!k&&sb==S&&O.outerHeight()==T)return void b.width(P);sb=S,O.css("width",""),b.width(P),R.find(">.jspVerticalBar,>.jspHorizontalBar").remove().end()}O.css("overflow","auto"),S=c.contentWidth?c.contentWidth:O[0].scrollWidth,T=O[0].scrollHeight,O.css("overflow",""),U=S/P,V=T/Q,W=V>1,X=U>1,X||W?(b.addClass("jspScrollable"),f=N.maintainPosition&&($||bb),f&&(h=y(),j=z()),e(),g(),i(),f&&(w(q?S-P:h,!1),v(p?T-Q:j,!1)),F(),C(),L(),N.enableKeyboardNavigation&&H(),N.clickOnTrack&&m(),J(),N.hijackInternalLinks&&K()):(b.removeClass("jspScrollable"),O.css({top:0,left:0,width:R.width()-rb}),D(),G(),I(),n()),N.autoReinitialise&&!pb?pb=setInterval(function(){d(N)},N.autoReinitialiseDelay):!N.autoReinitialise&&pb&&clearInterval(pb),l&&b.scrollTop(0)&&v(l,!1),o&&b.scrollLeft(0)&&w(o,!1),b.trigger("jsp-initialised",[X||W])}function e(){W&&(R.append(a('<div class="jspVerticalBar" />').append(a('<div class="jspCap jspCapTop" />'),a('<div class="jspTrack" />').append(a('<div class="jspDrag" />').append(a('<div class="jspDragTop" />'),a('<div class="jspDragBottom" />'))),a('<div class="jspCap jspCapBottom" />'))),cb=R.find(">.jspVerticalBar"),db=cb.find(">.jspTrack"),Y=db.find(">.jspDrag"),N.showArrows&&(hb=a('<a class="jspArrow jspArrowUp" />').bind("mousedown.jsp",k(0,-1)).bind("click.jsp",E),ib=a('<a class="jspArrow jspArrowDown" />').bind("mousedown.jsp",k(0,1)).bind("click.jsp",E),N.arrowScrollOnHover&&(hb.bind("mouseover.jsp",k(0,-1,hb)),ib.bind("mouseover.jsp",k(0,1,ib))),j(db,N.verticalArrowPositions,hb,ib)),fb=Q,R.find(">.jspVerticalBar>.jspCap:visible,>.jspVerticalBar>.jspArrow").each(function(){fb-=a(this).outerHeight()}),Y.hover(function(){Y.addClass("jspHover")},function(){Y.removeClass("jspHover")}).bind("mousedown.jsp",function(b){a("html").bind("dragstart.jsp selectstart.jsp",E),Y.addClass("jspActive");var c=b.pageY-Y.position().top;return a("html").bind("mousemove.jsp",function(a){p(a.pageY-c,!1)}).bind("mouseup.jsp mouseleave.jsp",o),!1}),f())}function f(){db.height(fb+"px"),$=0,eb=N.verticalGutter+db.outerWidth(),O.width(P-eb-rb);try{0===cb.position().left&&O.css("margin-left",eb+"px")}catch(a){}}function g(){X&&(R.append(a('<div class="jspHorizontalBar" />').append(a('<div class="jspCap jspCapLeft" />'),a('<div class="jspTrack" />').append(a('<div class="jspDrag" />').append(a('<div class="jspDragLeft" />'),a('<div class="jspDragRight" />'))),a('<div class="jspCap jspCapRight" />'))),jb=R.find(">.jspHorizontalBar"),kb=jb.find(">.jspTrack"),_=kb.find(">.jspDrag"),N.showArrows&&(nb=a('<a class="jspArrow jspArrowLeft" />').bind("mousedown.jsp",k(-1,0)).bind("click.jsp",E),ob=a('<a class="jspArrow jspArrowRight" />').bind("mousedown.jsp",k(1,0)).bind("click.jsp",E),N.arrowScrollOnHover&&(nb.bind("mouseover.jsp",k(-1,0,nb)),ob.bind("mouseover.jsp",k(1,0,ob))),j(kb,N.horizontalArrowPositions,nb,ob)),_.hover(function(){_.addClass("jspHover")},function(){_.removeClass("jspHover")}).bind("mousedown.jsp",function(b){a("html").bind("dragstart.jsp selectstart.jsp",E),_.addClass("jspActive");var c=b.pageX-_.position().left;return a("html").bind("mousemove.jsp",function(a){r(a.pageX-c,!1)}).bind("mouseup.jsp mouseleave.jsp",o),!1}),lb=R.innerWidth(),h())}function h(){R.find(">.jspHorizontalBar>.jspCap:visible,>.jspHorizontalBar>.jspArrow").each(function(){lb-=a(this).outerWidth()}),kb.width(lb+"px"),bb=0}function i(){if(X&&W){var b=kb.outerHeight(),c=db.outerWidth();fb-=b,a(jb).find(">.jspCap:visible,>.jspArrow").each(function(){lb+=a(this).outerWidth()}),lb-=c,Q-=c,P-=b,kb.parent().append(a('<div class="jspCorner" />').css("width",b+"px")),f(),h()}X&&O.width(R.outerWidth()-rb+"px"),T=O.outerHeight(),V=T/Q,X&&(mb=Math.ceil(1/U*lb),mb>N.horizontalDragMaxWidth?mb=N.horizontalDragMaxWidth:mb<N.horizontalDragMinWidth&&(mb=N.horizontalDragMinWidth),_.width(mb+"px"),ab=lb-mb,s(bb)),W&&(gb=Math.ceil(1/V*fb),gb>N.verticalDragMaxHeight?gb=N.verticalDragMaxHeight:gb<N.verticalDragMinHeight&&(gb=N.verticalDragMinHeight),Y.height(gb+"px"),Z=fb-gb,q($))}function j(a,b,c,d){var e,f="before",g="after";"os"==b&&(b=/Mac/.test(navigator.platform)?"after":"split"),b==f?g=b:b==g&&(f=b,e=c,c=d,d=e),a[f](c)[g](d)}function k(a,b,c){return function(){return l(a,b,this,c),this.blur(),!1}}function l(b,c,d,e){d=a(d).addClass("jspActive");var f,g,h=!0,i=function(){0!==b&&tb.scrollByX(b*N.arrowButtonSpeed),0!==c&&tb.scrollByY(c*N.arrowButtonSpeed),g=setTimeout(i,h?N.initialDelay:N.arrowRepeatFreq),h=!1};i(),f=e?"mouseout.jsp":"mouseup.jsp",e=e||a("html"),e.bind(f,function(){d.removeClass("jspActive"),g&&clearTimeout(g),g=null,e.unbind(f)})}function m(){n(),W&&db.bind("mousedown.jsp",function(b){if(void 0===b.originalTarget||b.originalTarget==b.currentTarget){var c,d=a(this),e=d.offset(),f=b.pageY-e.top-$,g=!0,h=function(){var a=d.offset(),e=b.pageY-a.top-gb/2,j=Q*N.scrollPagePercent,k=Z*j/(T-Q);if(0>f)$-k>e?tb.scrollByY(-j):p(e);else{if(!(f>0))return void i();e>$+k?tb.scrollByY(j):p(e)}c=setTimeout(h,g?N.initialDelay:N.trackClickRepeatFreq),g=!1},i=function(){c&&clearTimeout(c),c=null,a(document).unbind("mouseup.jsp",i)};return h(),a(document).bind("mouseup.jsp",i),!1}}),X&&kb.bind("mousedown.jsp",function(b){if(void 0===b.originalTarget||b.originalTarget==b.currentTarget){var c,d=a(this),e=d.offset(),f=b.pageX-e.left-bb,g=!0,h=function(){var a=d.offset(),e=b.pageX-a.left-mb/2,j=P*N.scrollPagePercent,k=ab*j/(S-P);if(0>f)bb-k>e?tb.scrollByX(-j):r(e);else{if(!(f>0))return void i();e>bb+k?tb.scrollByX(j):r(e)}c=setTimeout(h,g?N.initialDelay:N.trackClickRepeatFreq),g=!1},i=function(){c&&clearTimeout(c),c=null,a(document).unbind("mouseup.jsp",i)};return h(),a(document).bind("mouseup.jsp",i),!1}})}function n(){kb&&kb.unbind("mousedown.jsp"),db&&db.unbind("mousedown.jsp")}function o(){a("html").unbind("dragstart.jsp selectstart.jsp mousemove.jsp mouseup.jsp mouseleave.jsp"),Y&&Y.removeClass("jspActive"),_&&_.removeClass("jspActive")}function p(c,d){if(W){0>c?c=0:c>Z&&(c=Z);var e=new a.Event("jsp-will-scroll-y");if(b.trigger(e,[c]),!e.isDefaultPrevented()){var f=c||0,g=0===f,h=f==Z,i=c/Z,j=-i*(T-Q);void 0===d&&(d=N.animateScroll),d?tb.animate(Y,"top",c,q,function(){b.trigger("jsp-user-scroll-y",[-j,g,h])}):(Y.css("top",c),q(c),b.trigger("jsp-user-scroll-y",[-j,g,h]))}}}function q(a){void 0===a&&(a=Y.position().top),R.scrollTop(0),$=a||0;var c=0===$,d=$==Z,e=a/Z,f=-e*(T-Q);(ub!=c||wb!=d)&&(ub=c,wb=d,b.trigger("jsp-arrow-change",[ub,wb,vb,xb])),t(c,d),O.css("top",f),b.trigger("jsp-scroll-y",[-f,c,d]).trigger("scroll")}function r(c,d){if(X){0>c?c=0:c>ab&&(c=ab);var e=new a.Event("jsp-will-scroll-x");if(b.trigger(e,[c]),!e.isDefaultPrevented()){var f=c||0,g=0===f,h=f==ab,i=c/ab,j=-i*(S-P);void 0===d&&(d=N.animateScroll),d?tb.animate(_,"left",c,s,function(){b.trigger("jsp-user-scroll-x",[-j,g,h])}):(_.css("left",c),s(c),b.trigger("jsp-user-scroll-x",[-j,g,h]))}}}function s(a){void 0===a&&(a=_.position().left),R.scrollTop(0),bb=a||0;var c=0===bb,d=bb==ab,e=a/ab,f=-e*(S-P);(vb!=c||xb!=d)&&(vb=c,xb=d,b.trigger("jsp-arrow-change",[ub,wb,vb,xb])),u(c,d),O.css("left",f),b.trigger("jsp-scroll-x",[-f,c,d]).trigger("scroll")}function t(a,b){N.showArrows&&(hb[a?"addClass":"removeClass"]("jspDisabled"),ib[b?"addClass":"removeClass"]("jspDisabled"))}function u(a,b){N.showArrows&&(nb[a?"addClass":"removeClass"]("jspDisabled"),ob[b?"addClass":"removeClass"]("jspDisabled"))}function v(a,b){var c=a/(T-Q);p(c*Z,b)}function w(a,b){var c=a/(S-P);r(c*ab,b)}function x(b,c,d){var e,f,g,h,i,j,k,l,m,n=0,o=0;try{e=a(b)}catch(p){return}for(f=e.outerHeight(),g=e.outerWidth(),R.scrollTop(0),R.scrollLeft(0);!e.is(".jspPane");)if(n+=e.position().top,o+=e.position().left,e=e.offsetParent(),/^body|html$/i.test(e[0].nodeName))return;h=z(),j=h+Q,h>n||c?l=n-N.horizontalGutter:n+f>j&&(l=n-Q+f+N.horizontalGutter),isNaN(l)||v(l,d),i=y(),k=i+P,i>o||c?m=o-N.horizontalGutter:o+g>k&&(m=o-P+g+N.horizontalGutter),isNaN(m)||w(m,d)}function y(){return-O.position().left}function z(){return-O.position().top}function A(){var a=T-Q;return a>20&&a-z()<10}function B(){var a=S-P;return a>20&&a-y()<10}function C(){R.unbind(zb).bind(zb,function(a,b,c,d){bb||(bb=0),$||($=0);var e=bb,f=$,g=a.deltaFactor||N.mouseWheelSpeed;return tb.scrollBy(c*g,-d*g,!1),e==bb&&f==$})}function D(){R.unbind(zb)}function E(){return!1}function F(){O.find(":input,a").unbind("focus.jsp").bind("focus.jsp",function(a){x(a.target,!1)})}function G(){O.find(":input,a").unbind("focus.jsp")}function H(){function c(){var a=bb,b=$;switch(d){case 40:tb.scrollByY(N.keyboardSpeed,!1);break;case 38:tb.scrollByY(-N.keyboardSpeed,!1);break;case 34:case 32:tb.scrollByY(Q*N.scrollPagePercent,!1);break;case 33:tb.scrollByY(-Q*N.scrollPagePercent,!1);break;case 39:tb.scrollByX(N.keyboardSpeed,!1);break;case 37:tb.scrollByX(-N.keyboardSpeed,!1)}return e=a!=bb||b!=$}var d,e,f=[];X&&f.push(jb[0]),W&&f.push(cb[0]),O.bind("focus.jsp",function(){b.focus()}),b.attr("tabindex",0).unbind("keydown.jsp keypress.jsp").bind("keydown.jsp",function(b){if(b.target===this||f.length&&a(b.target).closest(f).length){var g=bb,h=$;switch(b.keyCode){case 40:case 38:case 34:case 32:case 33:case 39:case 37:d=b.keyCode,c();break;case 35:v(T-Q),d=null;break;case 36:v(0),d=null}return e=b.keyCode==d&&g!=bb||h!=$,!e}}).bind("keypress.jsp",function(b){return b.keyCode==d&&c(),b.target===this||f.length&&a(b.target).closest(f).length?!e:void 0}),N.hideFocus?(b.css("outline","none"),"hideFocus"in R[0]&&b.attr("hideFocus",!0)):(b.css("outline",""),"hideFocus"in R[0]&&b.attr("hideFocus",!1))}function I(){b.attr("tabindex","-1").removeAttr("tabindex").unbind("keydown.jsp keypress.jsp"),O.unbind(".jsp")}function J(){if(location.hash&&location.hash.length>1){var b,c,d=escape(location.hash.substr(1));try{b=a("#"+d+', a[name="'+d+'"]')}catch(e){return}b.length&&O.find(d)&&(0===R.scrollTop()?c=setInterval(function(){R.scrollTop()>0&&(x(b,!0),a(document).scrollTop(R.position().top),clearInterval(c))},50):(x(b,!0),a(document).scrollTop(R.position().top)))}}function K(){a(document.body).data("jspHijack")||(a(document.body).data("jspHijack",!0),a(document.body).delegate('a[href*="#"]',"click",function(b){var c,d,e,f,g,h,i=this.href.substr(0,this.href.indexOf("#")),j=location.href;if(-1!==location.href.indexOf("#")&&(j=location.href.substr(0,location.href.indexOf("#"))),i===j){c=escape(this.href.substr(this.href.indexOf("#")+1));try{d=a("#"+c+', a[name="'+c+'"]')}catch(k){return}d.length&&(e=d.closest(".jspScrollable"),f=e.data("jsp"),f.scrollToElement(d,!0),e[0].scrollIntoView&&(g=a(window).scrollTop(),h=d.offset().top,(g>h||h>g+a(window).height())&&e[0].scrollIntoView()),b.preventDefault())}}))}function L(){var a,b,c,d,e,f=!1;R.unbind("touchstart.jsp touchmove.jsp touchend.jsp click.jsp-touchclick").bind("touchstart.jsp",function(g){var h=g.originalEvent.touches[0];a=y(),b=z(),c=h.pageX,d=h.pageY,e=!1,f=!0}).bind("touchmove.jsp",function(g){if(f){var h=g.originalEvent.touches[0],i=bb,j=$;return tb.scrollTo(a+c-h.pageX,b+d-h.pageY),e=e||Math.abs(c-h.pageX)>5||Math.abs(d-h.pageY)>5,i==bb&&j==$}}).bind("touchend.jsp",function(){f=!1}).bind("click.jsp-touchclick",function(){return e?(e=!1,!1):void 0})}function M(){var a=z(),c=y();b.removeClass("jspScrollable").unbind(".jsp"),O.unbind(".jsp"),b.replaceWith(yb.append(O.children())),yb.scrollTop(a),yb.scrollLeft(c),pb&&clearInterval(pb)}var N,O,P,Q,R,S,T,U,V,W,X,Y,Z,$,_,ab,bb,cb,db,eb,fb,gb,hb,ib,jb,kb,lb,mb,nb,ob,pb,qb,rb,sb,tb=this,ub=!0,vb=!0,wb=!1,xb=!1,yb=b.clone(!1,!1).empty(),zb=a.fn.mwheelIntent?"mwheelIntent.jsp":"mousewheel.jsp";"border-box"===b.css("box-sizing")?(qb=0,rb=0):(qb=b.css("paddingTop")+" "+b.css("paddingRight")+" "+b.css("paddingBottom")+" "+b.css("paddingLeft"),rb=(parseInt(b.css("paddingLeft"),10)||0)+(parseInt(b.css("paddingRight"),10)||0)),a.extend(tb,{reinitialise:function(b){b=a.extend({},N,b),d(b)},scrollToElement:function(a,b,c){x(a,b,c)},scrollTo:function(a,b,c){w(a,c),v(b,c)},scrollToX:function(a,b){w(a,b)},scrollToY:function(a,b){v(a,b)},scrollToPercentX:function(a,b){w(a*(S-P),b)},scrollToPercentY:function(a,b){v(a*(T-Q),b)},scrollBy:function(a,b,c){tb.scrollByX(a,c),tb.scrollByY(b,c)},scrollByX:function(a,b){var c=y()+Math[0>a?"floor":"ceil"](a),d=c/(S-P);r(d*ab,b)},scrollByY:function(a,b){var c=z()+Math[0>a?"floor":"ceil"](a),d=c/(T-Q);p(d*Z,b)},positionDragX:function(a,b){r(a,b)},positionDragY:function(a,b){p(a,b)},animate:function(a,b,c,d,e){var f={};f[b]=c,a.animate(f,{duration:N.animateDuration,easing:N.animateEase,queue:!1,step:d,complete:e})},getContentPositionX:function(){return y()},getContentPositionY:function(){return z()},getContentWidth:function(){return S},getContentHeight:function(){return T},getPercentScrolledX:function(){return y()/(S-P)},getPercentScrolledY:function(){return z()/(T-Q)},getIsScrollableH:function(){return X},getIsScrollableV:function(){return W},getContentPane:function(){return O},scrollToBottom:function(a){p(Z,a)},hijackInternalLinks:a.noop,destroy:function(){M()}}),d(c)}return b=a.extend({},a.fn.jScrollPane.defaults,b),a.each(["arrowButtonSpeed","trackClickSpeed","keyboardSpeed"],function(){b[this]=b[this]||b.speed}),this.each(function(){var d=a(this),e=d.data("jsp");e?e.reinitialise(b):(a("script",d).filter('[type="text/javascript"],:not([type])').remove(),e=new c(d,b),d.data("jsp",e))})},a.fn.jScrollPane.defaults={showArrows:!1,maintainPosition:!0,stickToBottom:!1,stickToRight:!1,clickOnTrack:!0,autoReinitialise:!1,autoReinitialiseDelay:500,verticalDragMinHeight:0,verticalDragMaxHeight:99999,horizontalDragMinWidth:0,horizontalDragMaxWidth:99999,contentWidth:void 0,animateScroll:!1,animateDuration:300,animateEase:"linear",hijackInternalLinks:!1,verticalGutter:4,horizontalGutter:4,mouseWheelSpeed:3,arrowButtonSpeed:0,arrowRepeatFreq:50,arrowScrollOnHover:!1,trackClickSpeed:0,trackClickRepeatFreq:70,verticalArrowPositions:"split",horizontalArrowPositions:"split",enableKeyboardNavigation:!0,hideFocus:!1,keyboardSpeed:0,initialDelay:300,speed:30,scrollPagePercent:.8}});

/*!
AniJS - http://anijs.github.io
Licensed under the MIT license

Copyright (c) 2014 Dariel Noel <darielnoel@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
!function(a,b){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("AniJS requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=function(b){var c="data-anijs",d="default",f="$",g="if",h="on",i="do",j="to",k="(\\s+|^)",l="(\\s+|$)",m="animationend",n="transitionend";b={rootDOMTravelScope:{},eventProviderCollection:{},init:function(){o._helperCollection={};var a=o._createDefaultHelper();b.registerHelper(d,a),o._helperDefaultIndex=d,b.rootDOMTravelScope=document,b.Parser=o.Parser,o._animationEndEvent=o._animationEndPrefix(),o._classNamesWhenAnim=""},setDOMRootTravelScope:function(a){var c;try{"document"===a?c=document:(c=document.querySelector(a),c||(c=document))}catch(a){c=document}b.rootDOMTravelScope=c},run:function(){var a=[],d={};b.purgeAll(),b.eventProviderCollection={},a=o._findAniJSNodeCollection(b.rootDOMTravelScope);var g,e=a.length,f=0;for(f;f<e;f++)g=a[f],d=o._getParsedAniJSSentenceCollection(g.getAttribute(c)),o._setupElementAnim(g,d)},createAnimation:function(a,b){var c=b||"";o._setupElementAnim(c,a)},getHelper:function(a){var b=o._helperCollection;return b[a]||b[d]},registerHelper:function(a,b){o._helperCollection[a]=b},purge:function(a){if(a&&""!==a&&" "!==a){var c=document.querySelectorAll(a),d=c.length,e=0;for(e;e<d;e++)b.EventSystem.purgeEventTarget(c[e])}},purgeAll:function(){b.EventSystem.purgeAll()},purgeEventTarget:function(a){b.EventSystem.purgeEventTarget(a)},setClassNamesWhenAnim:function(a){o._classNamesWhenAnim=" "+a},createEventProvider:function(){return b.EventSystem.createEventTarget()},registerEventProvider:function(a){var c=b.eventProviderCollection;return a.id&&a.value&&b.EventSystem.isEventTarget(a.value)?(c[a.id]=a.value,1):""},getEventProvider:function(a){return b.eventProviderCollection[a]}};var o={};return o._createDefaultHelper=function(){var a={removeAnim:function(a,b){b.nodeHelper.removeClass(a.target,b.behavior)},holdAnimClass:function(a,b){}};return a},o._createParser=function(){return new Parser},o._setupElementAnim=function(a,b){var e,c=b.length,d=0;for(d;d<c;d++)e=b[d],o._setupElementSentenceAnim(a,e)},o._setupElementSentenceAnim=function(a,c){var d=o._eventHelper(c),e=o._eventTargetHelper(a,c);if(""!==d){var h,f=e.length,g=0;for(g;g<f;g++)if(h=e[g],b.EventSystem.isEventTarget(h)){var i=function(d){var e=o._behaviorTargetHelper(a,c),f=o._behaviorHelper(c),g=o._beforeHelper(a,c),h=o._afterHelper(a,c);""!==o._classNamesWhenAnim&&(f+=o._classNamesWhenAnim);var i={behaviorTargetList:e,nodeHelper:o.NodeHelper,animationEndEvent:o._animationEndEvent,behavior:f,after:h,eventSystem:b.EventSystem},j=new o.AnimationContext(i);g&&o.Util.isFunction(g)?g(d,j):j.run()};b.EventSystem.addEventListenerHelper(h,d,i,!1),b.EventSystem.registerEventHandle(h,d,i)}}else console.log("You must define some event")},o._eventHelper=function(a){var b="",c=a.event||b;return c===m?c=o._animationEndPrefix():c===n&&(c=o._transitionEndPrefix()),c},o._eventTargetHelper=function(c,d){var h,e=c,f=[e],g=b.rootDOMTravelScope;if(d.eventTarget)if(h=o._eventProviderHelper(d.eventTarget),h.length>0)f=h;else if("document"===d.eventTarget)f=[document];else if("window"===d.eventTarget)f=[a];else if(d.eventTarget.split)try{f=g.querySelectorAll(d.eventTarget)}catch(a){console.log("Ugly Selector Here"),f=[]}return f},o._behaviorTargetHelper=function(a,c){var d=a,e=[d],g=b.rootDOMTravelScope,h=c.behaviorTarget;if(h){h=h.split(f).join(",");try{e=g.querySelectorAll(h)}catch(a){e=[],console.log("ugly selector here")}}return e},o._behaviorHelper=function(a){var b=a.behavior||"";return b},o._afterHelper=function(a,b){var c=o._callbackHelper(a,b,b.after);return c},o._beforeHelper=function(a,b){var c=o._callbackHelper(a,b,b.before);return c},o._callbackHelper=function(a,b,c){var d=c||"",e=o._helperHelper(b);if(d&&!o.Util.isFunction(d)){var f=o._helperCollection,g=f[e];d=!(!g||!g[d])&&g[d]}return d},o._helperHelper=function(a){var b=a.helper||o._helperDefaultIndex;return b},o._eventProviderHelper=function(a){var c=[];b.eventProviderCollection;if(a)if(a.id&&b.EventSystem.isEventTarget(a.value))c.push(a.value),b.registerEventProvider(a);else if(a.split){eventProviderIDList=a.split("$");var g,e=eventProviderIDList.length,f=1;for(f;f<e;f++)if(g=eventProviderIDList[f],g&&" "!==g){g=g.trim();var h=b.getEventProvider(g);h||(h=b.EventSystem.createEventTarget(),b.registerEventProvider({id:g,value:h})),c.push(h)}}return c},o._getParsedAniJSSentenceCollection=function(a){return o.Parser.parse(a)},o._findAniJSNodeCollection=function(a){var b="["+c+"]";return a.querySelectorAll(b)},o._animationEndPrefix=function(){var a=o._endPrefixBrowserDetectionIndex(),b=[m,"oAnimationEnd",m,"webkitAnimationEnd"];return b[a]},o._transitionEndPrefix=function(){var a=o._endPrefixBrowserDetectionIndex(),b=[n,"oTransitionEnd",n,"webkitTransitionEnd"];return b[a]},o._endPrefixBrowserDetectionIndex=function(){for(var a=document.createElement("fakeelement"),b=["animation","OAnimation","MozAnimation","webkitAnimation"],c=0;c<b.length;c++)if(void 0!==a.style[b[c]])return c},o.AnimationContext=function(a){var b=this;b.init=function(a){b.behaviorTargetList=a.behaviorTargetList||[],b.nodeHelper=a.nodeHelper,b.animationEndEvent=a.animationEndEvent,b.behavior=a.behavior,b.after=a.after,b.eventSystem=a.eventSystem},b.run=function(){var j,a=b,c=a.behaviorTargetList,d=c.length,e=a.nodeHelper,f=a.behavior,g=a.animationEndEvent,h=a.after,i=0;for(i;i<d;i++)j=c[i],e.addClass(j,f),a.eventSystem.addEventListenerHelper(j,g,function(c){a.eventSystem.removeEventListenerHelper(c.target,c.type,arguments.callee),h?o.Util.isFunction(h)&&h(c,b):e.removeClass(c.target,f)})},b.init(a)},o.Parser={parse:function(a){return this.parseDeclaration(a)},parseDeclaration:function(a){var c,d,b=[];c=a.split(";");var e=c.length,f=0;for(f;f<e;f++)d=this.parseSentence(c[f]),b.push(d);return b},parseSentence:function(a){var c,d,b={};c=a.split(",");var e=c.length,f=0;for(f;f<e;f++)d=this.parseDefinition(c[f]),b[d.key]=d.value;return b},parseDefinition:function(a){var c,d,e,b={},f="event",k="eventTarget",l="behavior",m="behaviorTarget";return c=a.split(":"),c.length>1&&(d=c[0].trim(),e=c[1].trim(),d===g?d=f:d===h?d=k:d===i?d=l:d===j&&(d=m),b.key=d,b.value=e),b}},o.NodeHelper={addClass:function(a,b){b instanceof Array||(b=b.split(" "));for(var c=0,d=b.length;c<d;++c)b[c]&&!new RegExp(k+b[c]+l).test(a.className)&&(a.className=a.className.trim()+" "+b[c])},removeClass:function(a,b){b instanceof Array||(b=b.split(" "));for(var c=0,d=b.length;c<d;++c)a.className=a.className.replace(new RegExp(k+b[c]+l)," ").trim()},hasClass:function(a,b){return b&&new RegExp(k+b+l).test(a.className)}},o.Util={isFunction:function(a){return!!(a&&a.constructor&&a.call&&a.apply)}},b.EventSystem={eventCollection:{},eventIdCounter:0,isEventTarget:function(a){return a.addEventListener?1:0},createEventTarget:function(){return new b.EventTarget},addEventListenerHelper:function(a,b,c,d){a.addEventListener(b,c,!1)},removeEventListenerHelper:function(a,b,c){a.removeEventListener(b,c)},purgeAll:function(){var f,g,a=this,b=a.eventCollection,c=Object.keys(b),d=c.length,e=0;for(e;e<d;e++)f=c[e],g=b[f],g&&g.handleCollection&&g.handleCollection.length>0&&a.purgeEventTarget(g.handleCollection[0].element),delete b[f]},purgeEventTarget:function(a){var d,b=this,c=a._aniJSEventID;if(c){d=b.eventCollection[c].handleCollection;var g,e=d.length,f=0;for(f;f<e;f++)g=d[f],b.removeEventListenerHelper(a,g.eventType,g.listener);b.eventCollection[c]=a._aniJSEventID=null,delete b.eventCollection[c],delete a._aniJSEventID}},registerEventHandle:function(a,b,c){var d=this,e=a._aniJSEventID,f=d.eventCollection,g={eventType:b,listener:c,element:a};if(e)f[e].handleCollection.push(g);else{var h={handleCollection:[g]};f[++d.eventIdCounter]=h,a._aniJSEventID=d.eventIdCounter}}},b.EventTarget=function(){this._listeners={}},b.EventTarget.prototype={constructor:b.EventTarget,addEventListener:function(a,b,c){var d=this;"undefined"==typeof d._listeners[a]&&(d._listeners[a]=[]),d._listeners[a].push(b)},dispatchEvent:function(a){var b=this;if("string"==typeof a&&(a={type:a}),a.target||(a.target=b),!a.type)throw new Error("Event object missing 'type' property.");if(this._listeners[a.type]instanceof Array)for(var c=b._listeners[a.type],d=0,e=c.length;d<e;d++)c[d].call(b,a)},removeEventListener:function(a,b){var c=this;if(c._listeners[a]instanceof Array)for(var d=c._listeners[a],e=0,f=d.length;e<f;e++)if(d[e]===b){d.splice(e,1);break}}},b}(c||{});return c.init(),c.run(),"function"==typeof define&&define.amd&&define("anijs",[],function(){return c}),"undefined"==typeof b&&(a.AniJS=c),c}),function(){var a=AniJS.getHelper();a.scrollReveal=function(a,c){animationContextBehaviorTargetList=c.behaviorTargetList,visibleBehaviorTargetList=[];for(var d=0;d<animationContextBehaviorTargetList.length;d++)element=animationContextBehaviorTargetList[d],b.isElementInViewport(element,.33)?element.isRevealed||(visibleBehaviorTargetList.push(element),element.isRevealed=1):element.isRevealed=0;c.behaviorTargetList=visibleBehaviorTargetList,c.run()};var b={viewportFactor:1,docElem:window.document.documentElement,isElementInViewport:function(a,b){var c=window.pageYOffset,d=c+this._getViewportH(),e=a.offsetHeight,f=this._getOffset(a).top,g=f+e,b=b||0;return f+e*b<=d&&g>=c||"fixed"==(a.currentStyle?a.currentStyle:window.getComputedStyle(a,null)).position},_getViewportH:function(){var a=this.docElem.clientHeight,b=window.innerHeight;return a<b?b:a},_getOffset:function(a){var b=0,c=0;do isNaN(a.offsetTop)||(b+=a.offsetTop),isNaN(a.offsetLeft)||(c+=a.offsetLeft);while(a=a.offsetParent);return{top:b,left:c}}}}(window);

/**
 * bxSlider v4.2.4
 * Copyright 2013-2015 Steven Wanderski
 * Written while drinking Belgian ales and listening to jazz

 * Licensed under MIT (http://opensource.org/licenses/MIT)
 */

!function(a){var b={mode:"horizontal",slideSelector:"",infiniteLoop:!0,hideControlOnEnd:!1,speed:500,easing:null,slideMargin:0,startSlide:0,randomStart:!1,captions:!1,ticker:!1,tickerHover:!1,adaptiveHeight:!1,adaptiveHeightSpeed:500,video:!1,useCSS:!0,preloadImages:"visible",responsive:!0,slideZIndex:50,wrapperClass:"bx-wrapper",touchEnabled:!0,swipeThreshold:50,oneToOneTouch:!0,preventDefaultSwipeX:!0,preventDefaultSwipeY:!1,ariaLive:!0,ariaHidden:!0,keyboardEnabled:!1,pager:!0,pagerType:"full",pagerShortSeparator:" / ",pagerSelector:null,buildPager:null,pagerCustom:null,controls:!0,nextText:"Next",prevText:"Prev",nextSelector:null,prevSelector:null,autoControls:!1,startText:"Start",stopText:"Stop",autoControlsCombine:!1,autoControlsSelector:null,auto:!1,pause:4e3,autoStart:!0,autoDirection:"next",stopAutoOnClick:!1,autoHover:!1,autoDelay:0,autoSlideForOnePage:!1,minSlides:1,maxSlides:1,moveSlides:0,slideWidth:0,shrinkItems:!1,onSliderLoad:function(){return!0},onSlideBefore:function(){return!0},onSlideAfter:function(){return!0},onSlideNext:function(){return!0},onSlidePrev:function(){return!0},onSliderResize:function(){return!0}};a.fn.bxSlider=function(c){if(0===this.length)return this;if(this.length>1)return this.each(function(){a(this).bxSlider(c)}),this;var d={},e=this,f=a(window).width(),g=a(window).height();if(!a(e).data("bxSlider")){var h=function(){a(e).data("bxSlider")||(d.settings=a.extend({},b,c),d.settings.slideWidth=parseInt(d.settings.slideWidth),d.children=e.children(d.settings.slideSelector),d.children.length<d.settings.minSlides&&(d.settings.minSlides=d.children.length),d.children.length<d.settings.maxSlides&&(d.settings.maxSlides=d.children.length),d.settings.randomStart&&(d.settings.startSlide=Math.floor(Math.random()*d.children.length)),d.active={index:d.settings.startSlide},d.carousel=d.settings.minSlides>1||d.settings.maxSlides>1?!0:!1,d.carousel&&(d.settings.preloadImages="all"),d.minThreshold=d.settings.minSlides*d.settings.slideWidth+(d.settings.minSlides-1)*d.settings.slideMargin,d.maxThreshold=d.settings.maxSlides*d.settings.slideWidth+(d.settings.maxSlides-1)*d.settings.slideMargin,d.working=!1,d.controls={},d.interval=null,d.animProp="vertical"===d.settings.mode?"top":"left",d.usingCSS=d.settings.useCSS&&"fade"!==d.settings.mode&&function(){for(var a=document.createElement("div"),b=["WebkitPerspective","MozPerspective","OPerspective","msPerspective"],c=0;c<b.length;c++)if(void 0!==a.style[b[c]])return d.cssPrefix=b[c].replace("Perspective","").toLowerCase(),d.animProp="-"+d.cssPrefix+"-transform",!0;return!1}(),"vertical"===d.settings.mode&&(d.settings.maxSlides=d.settings.minSlides),e.data("origStyle",e.attr("style")),e.children(d.settings.slideSelector).each(function(){a(this).data("origStyle",a(this).attr("style"))}),i())},i=function(){var b=d.children.eq(d.settings.startSlide);e.wrap('<div class="'+d.settings.wrapperClass+'"><div class="bx-viewport"></div></div>'),d.viewport=e.parent(),d.settings.ariaLive&&!d.settings.ticker&&d.viewport.attr("aria-live","polite"),d.loader=a('<div class="bx-loading" />'),d.viewport.prepend(d.loader),e.css({width:"horizontal"===d.settings.mode?1e3*d.children.length+215+"%":"auto",position:"relative"}),d.usingCSS&&d.settings.easing?e.css("-"+d.cssPrefix+"-transition-timing-function",d.settings.easing):d.settings.easing||(d.settings.easing="swing"),d.viewport.css({width:"100%",overflow:"hidden",position:"relative"}),d.viewport.parent().css({maxWidth:m()}),d.settings.pager||d.settings.controls||d.viewport.parent().css({margin:"0 auto 0px"}),d.children.css({"float":"horizontal"===d.settings.mode?"left":"none",listStyle:"none",position:"relative"}),d.children.css("width",n()),"horizontal"===d.settings.mode&&d.settings.slideMargin>0&&d.children.css("marginRight",d.settings.slideMargin),"vertical"===d.settings.mode&&d.settings.slideMargin>0&&d.children.css("marginBottom",d.settings.slideMargin),"fade"===d.settings.mode&&(d.children.css({position:"absolute",zIndex:0,display:"none"}),d.children.eq(d.settings.startSlide).css({zIndex:d.settings.slideZIndex,display:"block"})),d.controls.el=a('<div class="bx-controls" />'),d.settings.captions&&x(),d.active.last=d.settings.startSlide===p()-1,d.settings.video&&e.fitVids(),("all"===d.settings.preloadImages||d.settings.ticker)&&(b=d.children),d.settings.ticker?d.settings.pager=!1:(d.settings.controls&&v(),d.settings.auto&&d.settings.autoControls&&w(),d.settings.pager&&u(),(d.settings.controls||d.settings.autoControls||d.settings.pager)&&d.viewport.after(d.controls.el)),j(b,k)},j=function(b,c){var d=b.find('img:not([src=""]), iframe').length,e=0;return 0===d?void c():void b.find('img:not([src=""]), iframe').each(function(){a(this).one("load error",function(){++e===d&&c()}).each(function(){this.complete&&a(this).load()})})},k=function(){if(d.settings.infiniteLoop&&"fade"!==d.settings.mode&&!d.settings.ticker){var b="vertical"===d.settings.mode?d.settings.minSlides:d.settings.maxSlides,c=d.children.slice(0,b).clone(!0).addClass("bx-clone"),f=d.children.slice(-b).clone(!0).addClass("bx-clone");d.settings.ariaHidden&&(c.attr("aria-hidden",!0),f.attr("aria-hidden",!0)),e.append(c).prepend(f)}d.loader.remove(),r(),"vertical"===d.settings.mode&&(d.settings.adaptiveHeight=!0),d.viewport.height(l()),e.redrawSlider(),d.settings.onSliderLoad.call(e,d.active.index),d.initialized=!0,d.settings.responsive&&a(window).bind("resize",R),d.settings.auto&&d.settings.autoStart&&(p()>1||d.settings.autoSlideForOnePage)&&H(),d.settings.ticker&&I(),d.settings.pager&&D(d.settings.startSlide),d.settings.controls&&G(),d.settings.touchEnabled&&!d.settings.ticker&&M(),d.settings.keyboardEnabled&&!d.settings.ticker&&a(document).keydown(L)},l=function(){var b=e.outerHeight(),c=null,f=a();if("vertical"===d.settings.mode||d.settings.adaptiveHeight)if(d.carousel){c=1===d.settings.moveSlides?d.active.index:d.active.index*q(),f=d.children.eq(c);for(var g=1;g<=d.settings.maxSlides-1;g++)f=c+g>=d.children.length?f.add(d.children.eq(c+g-d.children.length)):f.add(d.children.eq(c+g))}else f=d.children.eq(d.active.index);else f=d.children;return"vertical"===d.settings.mode?(f.each(function(c){b+=a(this).outerHeight()}),d.settings.slideMargin>0&&(b+=d.settings.slideMargin*(d.settings.minSlides-1))):b=Math.max.apply(Math,f.map(function(){return a(this).outerHeight(!1)}).get()),"border-box"===d.viewport.css("box-sizing")?b+=parseFloat(d.viewport.css("padding-top"))+parseFloat(d.viewport.css("padding-bottom"))+parseFloat(d.viewport.css("border-top-width"))+parseFloat(d.viewport.css("border-bottom-width")):"padding-box"===d.viewport.css("box-sizing")&&(b+=parseFloat(d.viewport.css("padding-top"))+parseFloat(d.viewport.css("padding-bottom"))),b},m=function(){var a="100%";return d.settings.slideWidth>0&&(a="horizontal"===d.settings.mode?d.settings.maxSlides*d.settings.slideWidth+(d.settings.maxSlides-1)*d.settings.slideMargin:d.settings.slideWidth),a},n=function(){var a=d.settings.slideWidth,b=d.viewport.width();if(0===d.settings.slideWidth||d.settings.slideWidth>b&&!d.carousel||"vertical"===d.settings.mode)a=b;else if(d.settings.maxSlides>1&&"horizontal"===d.settings.mode){if(b>d.maxThreshold)return a;b<d.minThreshold?a=(b-d.settings.slideMargin*(d.settings.minSlides-1))/d.settings.minSlides:d.settings.shrinkItems&&(a=Math.floor((b+d.settings.slideMargin)/Math.ceil((b+d.settings.slideMargin)/(a+d.settings.slideMargin))-d.settings.slideMargin))}return a},o=function(){var a=1,b=null;return"horizontal"===d.settings.mode&&d.settings.slideWidth>0?d.viewport.width()<d.minThreshold?a=d.settings.minSlides:d.viewport.width()>d.maxThreshold?a=d.settings.maxSlides:(b=d.children.first().width()+d.settings.slideMargin,a=Math.floor((d.viewport.width()+d.settings.slideMargin)/b)):"vertical"===d.settings.mode&&(a=d.settings.minSlides),a},p=function(){var a=0,b=0,c=0;if(d.settings.moveSlides>0)if(d.settings.infiniteLoop)a=Math.ceil(d.children.length/q());else for(;b<d.children.length;)++a,b=c+o(),c+=d.settings.moveSlides<=o()?d.settings.moveSlides:o();else a=Math.ceil(d.children.length/o());return a},q=function(){return d.settings.moveSlides>0&&d.settings.moveSlides<=o()?d.settings.moveSlides:o()},r=function(){var a,b,c;d.children.length>d.settings.maxSlides&&d.active.last&&!d.settings.infiniteLoop?"horizontal"===d.settings.mode?(b=d.children.last(),a=b.position(),s(-(a.left-(d.viewport.width()-b.outerWidth())),"reset",0)):"vertical"===d.settings.mode&&(c=d.children.length-d.settings.minSlides,a=d.children.eq(c).position(),s(-a.top,"reset",0)):(a=d.children.eq(d.active.index*q()).position(),d.active.index===p()-1&&(d.active.last=!0),void 0!==a&&("horizontal"===d.settings.mode?s(-a.left,"reset",0):"vertical"===d.settings.mode&&s(-a.top,"reset",0)))},s=function(b,c,f,g){var h,i;d.usingCSS?(i="vertical"===d.settings.mode?"translate3d(0, "+b+"px, 0)":"translate3d("+b+"px, 0, 0)",e.css("-"+d.cssPrefix+"-transition-duration",f/1e3+"s"),"slide"===c?(e.css(d.animProp,i),e.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(b){a(b.target).is(e)&&(e.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"),E())})):"reset"===c?e.css(d.animProp,i):"ticker"===c&&(e.css("-"+d.cssPrefix+"-transition-timing-function","linear"),e.css(d.animProp,i),e.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(b){a(b.target).is(e)&&(e.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"),s(g.resetValue,"reset",0),J())}))):(h={},h[d.animProp]=b,"slide"===c?e.animate(h,f,d.settings.easing,function(){E()}):"reset"===c?e.css(d.animProp,b):"ticker"===c&&e.animate(h,f,"linear",function(){s(g.resetValue,"reset",0),J()}))},t=function(){for(var b="",c="",e=p(),f=0;e>f;f++)c="",d.settings.buildPager&&a.isFunction(d.settings.buildPager)||d.settings.pagerCustom?(c=d.settings.buildPager(f),d.pagerEl.addClass("bx-custom-pager")):(c=f+1,d.pagerEl.addClass("bx-default-pager")),b+='<div class="bx-pager-item"><a href="" data-slide-index="'+f+'" class="bx-pager-link">'+c+"</a></div>";d.pagerEl.html(b)},u=function(){d.settings.pagerCustom?d.pagerEl=a(d.settings.pagerCustom):(d.pagerEl=a('<div class="bx-pager" />'),d.settings.pagerSelector?a(d.settings.pagerSelector).html(d.pagerEl):d.controls.el.addClass("bx-has-pager").append(d.pagerEl),t()),d.pagerEl.on("click touchend","a",C)},v=function(){d.controls.next=a('<a class="bx-next" href="">'+d.settings.nextText+"</a>"),d.controls.prev=a('<a class="bx-prev" href="">'+d.settings.prevText+"</a>"),d.controls.next.bind("click touchend",y),d.controls.prev.bind("click touchend",z),d.settings.nextSelector&&a(d.settings.nextSelector).append(d.controls.next),d.settings.prevSelector&&a(d.settings.prevSelector).append(d.controls.prev),d.settings.nextSelector||d.settings.prevSelector||(d.controls.directionEl=a('<div class="bx-controls-direction" />'),d.controls.directionEl.append(d.controls.prev).append(d.controls.next),d.controls.el.addClass("bx-has-controls-direction").append(d.controls.directionEl))},w=function(){d.controls.start=a('<div class="bx-controls-auto-item"><a class="bx-start" href="">'+d.settings.startText+"</a></div>"),d.controls.stop=a('<div class="bx-controls-auto-item"><a class="bx-stop" href="">'+d.settings.stopText+"</a></div>"),d.controls.autoEl=a('<div class="bx-controls-auto" />'),d.controls.autoEl.on("click",".bx-start",A),d.controls.autoEl.on("click",".bx-stop",B),d.settings.autoControlsCombine?d.controls.autoEl.append(d.controls.start):d.controls.autoEl.append(d.controls.start).append(d.controls.stop),d.settings.autoControlsSelector?a(d.settings.autoControlsSelector).html(d.controls.autoEl):d.controls.el.addClass("bx-has-controls-auto").append(d.controls.autoEl),F(d.settings.autoStart?"stop":"start")},x=function(){d.children.each(function(b){var c=a(this).find("img:first").attr("title");void 0!==c&&(""+c).length&&a(this).append('<div class="bx-caption"><span>'+c+"</span></div>")})},y=function(a){a.preventDefault(),d.controls.el.hasClass("disabled")||(d.settings.auto&&d.settings.stopAutoOnClick&&e.stopAuto(),e.goToNextSlide())},z=function(a){a.preventDefault(),d.controls.el.hasClass("disabled")||(d.settings.auto&&d.settings.stopAutoOnClick&&e.stopAuto(),e.goToPrevSlide())},A=function(a){e.startAuto(),a.preventDefault()},B=function(a){e.stopAuto(),a.preventDefault()},C=function(b){var c,f;b.preventDefault(),d.controls.el.hasClass("disabled")||(d.settings.auto&&d.settings.stopAutoOnClick&&e.stopAuto(),c=a(b.currentTarget),void 0!==c.attr("data-slide-index")&&(f=parseInt(c.attr("data-slide-index")),f!==d.active.index&&e.goToSlide(f)))},D=function(b){var c=d.children.length;return"short"===d.settings.pagerType?(d.settings.maxSlides>1&&(c=Math.ceil(d.children.length/d.settings.maxSlides)),void d.pagerEl.html(b+1+d.settings.pagerShortSeparator+c)):(d.pagerEl.find("a").removeClass("active"),void d.pagerEl.each(function(c,d){a(d).find("a").eq(b).addClass("active")}))},E=function(){if(d.settings.infiniteLoop){var a="";0===d.active.index?a=d.children.eq(0).position():d.active.index===p()-1&&d.carousel?a=d.children.eq((p()-1)*q()).position():d.active.index===d.children.length-1&&(a=d.children.eq(d.children.length-1).position()),a&&("horizontal"===d.settings.mode?s(-a.left,"reset",0):"vertical"===d.settings.mode&&s(-a.top,"reset",0))}d.working=!1,d.settings.onSlideAfter.call(e,d.children.eq(d.active.index),d.oldIndex,d.active.index)},F=function(a){d.settings.autoControlsCombine?d.controls.autoEl.html(d.controls[a]):(d.controls.autoEl.find("a").removeClass("active"),d.controls.autoEl.find("a:not(.bx-"+a+")").addClass("active"))},G=function(){1===p()?(d.controls.prev.addClass("disabled"),d.controls.next.addClass("disabled")):!d.settings.infiniteLoop&&d.settings.hideControlOnEnd&&(0===d.active.index?(d.controls.prev.addClass("disabled"),d.controls.next.removeClass("disabled")):d.active.index===p()-1?(d.controls.next.addClass("disabled"),d.controls.prev.removeClass("disabled")):(d.controls.prev.removeClass("disabled"),d.controls.next.removeClass("disabled")))},H=function(){if(d.settings.autoDelay>0){setTimeout(e.startAuto,d.settings.autoDelay)}else e.startAuto(),a(window).focus(function(){e.startAuto()}).blur(function(){e.stopAuto()});d.settings.autoHover&&e.hover(function(){d.interval&&(e.stopAuto(!0),d.autoPaused=!0)},function(){d.autoPaused&&(e.startAuto(!0),d.autoPaused=null)})},I=function(){var b,c,f,g,h,i,j,k,l=0;"next"===d.settings.autoDirection?e.append(d.children.clone().addClass("bx-clone")):(e.prepend(d.children.clone().addClass("bx-clone")),b=d.children.first().position(),l="horizontal"===d.settings.mode?-b.left:-b.top),s(l,"reset",0),d.settings.pager=!1,d.settings.controls=!1,d.settings.autoControls=!1,d.settings.tickerHover&&(d.usingCSS?(g="horizontal"===d.settings.mode?4:5,d.viewport.hover(function(){c=e.css("-"+d.cssPrefix+"-transform"),f=parseFloat(c.split(",")[g]),s(f,"reset",0)},function(){k=0,d.children.each(function(b){k+="horizontal"===d.settings.mode?a(this).outerWidth(!0):a(this).outerHeight(!0)}),h=d.settings.speed/k,i="horizontal"===d.settings.mode?"left":"top",j=h*(k-Math.abs(parseInt(f))),J(j)})):d.viewport.hover(function(){e.stop()},function(){k=0,d.children.each(function(b){k+="horizontal"===d.settings.mode?a(this).outerWidth(!0):a(this).outerHeight(!0)}),h=d.settings.speed/k,i="horizontal"===d.settings.mode?"left":"top",j=h*(k-Math.abs(parseInt(e.css(i)))),J(j)})),J()},J=function(a){var b,c,f,g=a?a:d.settings.speed,h={left:0,top:0},i={left:0,top:0};"next"===d.settings.autoDirection?h=e.find(".bx-clone").first().position():i=d.children.first().position(),b="horizontal"===d.settings.mode?-h.left:-h.top,c="horizontal"===d.settings.mode?-i.left:-i.top,f={resetValue:c},s(b,"ticker",g,f)},K=function(b){var c=a(window),d={top:c.scrollTop(),left:c.scrollLeft()},e=b.offset();return d.right=d.left+c.width(),d.bottom=d.top+c.height(),e.right=e.left+b.outerWidth(),e.bottom=e.top+b.outerHeight(),!(d.right<e.left||d.left>e.right||d.bottom<e.top||d.top>e.bottom)},L=function(a){var b=document.activeElement.tagName.toLowerCase(),c="input|textarea",d=new RegExp(b,["i"]),f=d.exec(c);if(null==f&&K(e)){if(39===a.keyCode)return y(a),!1;if(37===a.keyCode)return z(a),!1}},M=function(){d.touch={start:{x:0,y:0},end:{x:0,y:0}},d.viewport.bind("touchstart MSPointerDown pointerdown",N),d.viewport.on("click",".bxslider a",function(a){d.viewport.hasClass("click-disabled")&&(a.preventDefault(),d.viewport.removeClass("click-disabled"))})},N=function(a){if(d.controls.el.addClass("disabled"),d.working)a.preventDefault(),d.controls.el.removeClass("disabled");else{d.touch.originalPos=e.position();var b=a.originalEvent,c="undefined"!=typeof b.changedTouches?b.changedTouches:[b];d.touch.start.x=c[0].pageX,d.touch.start.y=c[0].pageY,d.viewport.get(0).setPointerCapture&&(d.pointerId=b.pointerId,d.viewport.get(0).setPointerCapture(d.pointerId)),d.viewport.bind("touchmove MSPointerMove pointermove",P),d.viewport.bind("touchend MSPointerUp pointerup",Q),d.viewport.bind("MSPointerCancel pointercancel",O)}},O=function(a){s(d.touch.originalPos.left,"reset",0),d.controls.el.removeClass("disabled"),d.viewport.unbind("MSPointerCancel pointercancel",O),d.viewport.unbind("touchmove MSPointerMove pointermove",P),d.viewport.unbind("touchend MSPointerUp pointerup",Q),d.viewport.get(0).releasePointerCapture&&d.viewport.get(0).releasePointerCapture(d.pointerId)},P=function(a){var b=a.originalEvent,c="undefined"!=typeof b.changedTouches?b.changedTouches:[b],e=Math.abs(c[0].pageX-d.touch.start.x),f=Math.abs(c[0].pageY-d.touch.start.y),g=0,h=0;3*e>f&&d.settings.preventDefaultSwipeX?a.preventDefault():3*f>e&&d.settings.preventDefaultSwipeY&&a.preventDefault(),"fade"!==d.settings.mode&&d.settings.oneToOneTouch&&("horizontal"===d.settings.mode?(h=c[0].pageX-d.touch.start.x,g=d.touch.originalPos.left+h):(h=c[0].pageY-d.touch.start.y,g=d.touch.originalPos.top+h),s(g,"reset",0))},Q=function(a){d.viewport.unbind("touchmove MSPointerMove pointermove",P),d.controls.el.removeClass("disabled");var b=a.originalEvent,c="undefined"!=typeof b.changedTouches?b.changedTouches:[b],f=0,g=0;d.touch.end.x=c[0].pageX,d.touch.end.y=c[0].pageY,"fade"===d.settings.mode?(g=Math.abs(d.touch.start.x-d.touch.end.x),g>=d.settings.swipeThreshold&&(d.touch.start.x>d.touch.end.x?e.goToNextSlide():e.goToPrevSlide(),e.stopAuto())):("horizontal"===d.settings.mode?(g=d.touch.end.x-d.touch.start.x,f=d.touch.originalPos.left):(g=d.touch.end.y-d.touch.start.y,f=d.touch.originalPos.top),!d.settings.infiniteLoop&&(0===d.active.index&&g>0||d.active.last&&0>g)?s(f,"reset",200):Math.abs(g)>=d.settings.swipeThreshold?(0>g?e.goToNextSlide():e.goToPrevSlide(),e.stopAuto()):s(f,"reset",200)),d.viewport.unbind("touchend MSPointerUp pointerup",Q),d.viewport.get(0).releasePointerCapture&&d.viewport.get(0).releasePointerCapture(d.pointerId)},R=function(b){if(d.initialized)if(d.working)window.setTimeout(R,10);else{var c=a(window).width(),h=a(window).height();(f!==c||g!==h)&&(f=c,g=h,e.redrawSlider(),d.settings.onSliderResize.call(e,d.active.index))}},S=function(a){var b=o();d.settings.ariaHidden&&!d.settings.ticker&&(d.children.attr("aria-hidden","true"),d.children.slice(a,a+b).attr("aria-hidden","false"))};return e.goToSlide=function(b,c){var f,g,h,i,j=!0,k=0,m={left:0,top:0},n=null;if(!d.working&&d.active.index!==b){if(d.working=!0,d.oldIndex=d.active.index,0>b?d.active.index=p()-1:b>=p()?d.active.index=0:d.active.index=b,j=d.settings.onSlideBefore.call(e,d.children.eq(d.active.index),d.oldIndex,d.active.index),"undefined"!=typeof j&&!j)return d.active.index=d.oldIndex,void(d.working=!1);if("next"===c?d.settings.onSlideNext.call(e,d.children.eq(d.active.index),d.oldIndex,d.active.index)||(j=!1):"prev"===c&&(d.settings.onSlidePrev.call(e,d.children.eq(d.active.index),d.oldIndex,d.active.index)||(j=!1)),"undefined"!=typeof j&&!j)return d.active.index=d.oldIndex,void(d.working=!1);d.active.last=d.active.index>=p()-1,(d.settings.pager||d.settings.pagerCustom)&&D(d.active.index),d.settings.controls&&G(),"fade"===d.settings.mode?(d.settings.adaptiveHeight&&d.viewport.height()!==l()&&d.viewport.animate({height:l()},d.settings.adaptiveHeightSpeed),d.children.filter(":visible").fadeOut(d.settings.speed).css({zIndex:0}),d.children.eq(d.active.index).css("zIndex",d.settings.slideZIndex+1).fadeIn(d.settings.speed,function(){a(this).css("zIndex",d.settings.slideZIndex),E()})):(d.settings.adaptiveHeight&&d.viewport.height()!==l()&&d.viewport.animate({height:l()},d.settings.adaptiveHeightSpeed),!d.settings.infiniteLoop&&d.carousel&&d.active.last?"horizontal"===d.settings.mode?(n=d.children.eq(d.children.length-1),m=n.position(),k=d.viewport.width()-n.outerWidth()):(f=d.children.length-d.settings.minSlides,m=d.children.eq(f).position()):d.carousel&&d.active.last&&"prev"===c?(g=1===d.settings.moveSlides?d.settings.maxSlides-q():(p()-1)*q()-(d.children.length-d.settings.maxSlides),n=e.children(".bx-clone").eq(g),m=n.position()):"next"===c&&0===d.active.index?(m=e.find("> .bx-clone").eq(d.settings.maxSlides).position(),d.active.last=!1):b>=0&&(i=b*q(),m=d.children.eq(i).position()),void 0!==typeof m&&(h="horizontal"===d.settings.mode?-(m.left-k):-m.top,s(h,"slide",d.settings.speed))),d.settings.ariaHidden&&S(d.active.index*q())}},e.goToNextSlide=function(){if(d.settings.infiniteLoop||!d.active.last){var a=parseInt(d.active.index)+1;e.goToSlide(a,"next")}},e.goToPrevSlide=function(){if(d.settings.infiniteLoop||0!==d.active.index){var a=parseInt(d.active.index)-1;e.goToSlide(a,"prev")}},e.startAuto=function(a){d.interval||(d.interval=setInterval(function(){"next"===d.settings.autoDirection?e.goToNextSlide():e.goToPrevSlide()},d.settings.pause),d.settings.autoControls&&a!==!0&&F("stop"))},e.stopAuto=function(a){d.interval&&(clearInterval(d.interval),d.interval=null,d.settings.autoControls&&a!==!0&&F("start"))},e.getCurrentSlide=function(){return d.active.index},e.getCurrentSlideElement=function(){return d.children.eq(d.active.index)},e.getSlideElement=function(a){return d.children.eq(a)},e.getSlideCount=function(){return d.children.length},e.isWorking=function(){return d.working},e.redrawSlider=function(){d.children.add(e.find(".bx-clone")).outerWidth(n()),d.viewport.css("height",l()),d.settings.ticker||r(),d.active.last&&(d.active.index=p()-1),d.active.index>=p()&&(d.active.last=!0),d.settings.pager&&!d.settings.pagerCustom&&(t(),D(d.active.index)),d.settings.ariaHidden&&S(d.active.index*q())},e.destroySlider=function(){d.initialized&&(d.initialized=!1,a(".bx-clone",this).remove(),d.children.each(function(){void 0!==a(this).data("origStyle")?a(this).attr("style",a(this).data("origStyle")):a(this).removeAttr("style")}),void 0!==a(this).data("origStyle")?this.attr("style",a(this).data("origStyle")):a(this).removeAttr("style"),a(this).unwrap().unwrap(),d.controls.el&&d.controls.el.remove(),d.controls.next&&d.controls.next.remove(),d.controls.prev&&d.controls.prev.remove(),d.pagerEl&&d.settings.controls&&!d.settings.pagerCustom&&d.pagerEl.remove(),a(".bx-caption",this).remove(),d.controls.autoEl&&d.controls.autoEl.remove(),clearInterval(d.interval),d.settings.responsive&&a(window).unbind("resize",R),d.settings.keyboardEnabled&&a(document).unbind("keydown",L),a(this).removeData("bxSlider"))},e.reloadSlider=function(b){void 0!==b&&(c=b),e.destroySlider(),h(),a(e).data("bxSlider",this)},h(),a(e).data("bxSlider",this),this}}}(jQuery);


/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
(function(r,G,f,v){var J=f("html"),n=f(r),p=f(G),b=f.fancybox=function(){b.open.apply(this,arguments)},I=navigator.userAgent.match(/msie/i),B=null,s=G.createTouch!==v,t=function(a){return a&&a.hasOwnProperty&&a instanceof f},q=function(a){return a&&"string"===f.type(a)},E=function(a){return q(a)&&0<a.indexOf("%")},l=function(a,d){var e=parseInt(a,10)||0;d&&E(a)&&(e*=b.getViewport()[d]/100);return Math.ceil(e)},w=function(a,b){return l(a,b)+"px"};f.extend(b,{version:"2.1.5",defaults:{padding:15,margin:20,
width:800,height:600,minWidth:100,minHeight:100,maxWidth:9999,maxHeight:9999,pixelRatio:1,autoSize:!0,autoHeight:!1,autoWidth:!1,autoResize:!0,autoCenter:!s,fitToView:!0,aspectRatio:!1,topRatio:0.5,leftRatio:0.5,scrolling:"auto",wrapCSS:"",arrows:!0,closeBtn:!0,closeClick:!1,nextClick:!1,mouseWheel:!0,autoPlay:!1,playSpeed:3E3,preload:3,modal:!1,loop:!0,ajax:{dataType:"html",headers:{"X-fancyBox":!0}},iframe:{scrolling:"auto",preload:!0},swf:{wmode:"transparent",allowfullscreen:"true",allowscriptaccess:"always"},
keys:{next:{13:"left",34:"up",39:"left",40:"up"},prev:{8:"right",33:"down",37:"right",38:"down"},close:[27],play:[32],toggle:[70]},direction:{next:"left",prev:"right"},scrollOutside:!0,index:0,type:null,href:null,content:null,title:null,tpl:{wrap:'<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',image:'<img class="fancybox-image" src="{href}" alt="" />',iframe:'<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen'+
(I?' allowtransparency="true"':"")+"></iframe>",error:'<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',closeBtn:'<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',next:'<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',prev:'<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'},openEffect:"fade",openSpeed:250,openEasing:"swing",openOpacity:!0,
openMethod:"zoomIn",closeEffect:"fade",closeSpeed:250,closeEasing:"swing",closeOpacity:!0,closeMethod:"zoomOut",nextEffect:"elastic",nextSpeed:250,nextEasing:"swing",nextMethod:"changeIn",prevEffect:"elastic",prevSpeed:250,prevEasing:"swing",prevMethod:"changeOut",helpers:{overlay:!0,title:!0},onCancel:f.noop,beforeLoad:f.noop,afterLoad:f.noop,beforeShow:f.noop,afterShow:f.noop,beforeChange:f.noop,beforeClose:f.noop,afterClose:f.noop},group:{},opts:{},previous:null,coming:null,current:null,isActive:!1,
isOpen:!1,isOpened:!1,wrap:null,skin:null,outer:null,inner:null,player:{timer:null,isActive:!1},ajaxLoad:null,imgPreload:null,transitions:{},helpers:{},open:function(a,d){if(a&&(f.isPlainObject(d)||(d={}),!1!==b.close(!0)))return f.isArray(a)||(a=t(a)?f(a).get():[a]),f.each(a,function(e,c){var k={},g,h,j,m,l;"object"===f.type(c)&&(c.nodeType&&(c=f(c)),t(c)?(k={href:c.data("fancybox-href")||c.attr("href"),title:c.data("fancybox-title")||c.attr("title"),isDom:!0,element:c},f.metadata&&f.extend(!0,k,
c.metadata())):k=c);g=d.href||k.href||(q(c)?c:null);h=d.title!==v?d.title:k.title||"";m=(j=d.content||k.content)?"html":d.type||k.type;!m&&k.isDom&&(m=c.data("fancybox-type"),m||(m=(m=c.prop("class").match(/fancybox\.(\w+)/))?m[1]:null));q(g)&&(m||(b.isImage(g)?m="image":b.isSWF(g)?m="swf":"#"===g.charAt(0)?m="inline":q(c)&&(m="html",j=c)),"ajax"===m&&(l=g.split(/\s+/,2),g=l.shift(),l=l.shift()));j||("inline"===m?g?j=f(q(g)?g.replace(/.*(?=#[^\s]+$)/,""):g):k.isDom&&(j=c):"html"===m?j=g:!m&&(!g&&
k.isDom)&&(m="inline",j=c));f.extend(k,{href:g,type:m,content:j,title:h,selector:l});a[e]=k}),b.opts=f.extend(!0,{},b.defaults,d),d.keys!==v&&(b.opts.keys=d.keys?f.extend({},b.defaults.keys,d.keys):!1),b.group=a,b._start(b.opts.index)},cancel:function(){var a=b.coming;a&&!1!==b.trigger("onCancel")&&(b.hideLoading(),b.ajaxLoad&&b.ajaxLoad.abort(),b.ajaxLoad=null,b.imgPreload&&(b.imgPreload.onload=b.imgPreload.onerror=null),a.wrap&&a.wrap.stop(!0,!0).trigger("onReset").remove(),b.coming=null,b.current||
b._afterZoomOut(a))},close:function(a){b.cancel();!1!==b.trigger("beforeClose")&&(b.unbindEvents(),b.isActive&&(!b.isOpen||!0===a?(f(".fancybox-wrap").stop(!0).trigger("onReset").remove(),b._afterZoomOut()):(b.isOpen=b.isOpened=!1,b.isClosing=!0,f(".fancybox-item, .fancybox-nav").remove(),b.wrap.stop(!0,!0).removeClass("fancybox-opened"),b.transitions[b.current.closeMethod]())))},play:function(a){var d=function(){clearTimeout(b.player.timer)},e=function(){d();b.current&&b.player.isActive&&(b.player.timer=
setTimeout(b.next,b.current.playSpeed))},c=function(){d();p.unbind(".player");b.player.isActive=!1;b.trigger("onPlayEnd")};if(!0===a||!b.player.isActive&&!1!==a){if(b.current&&(b.current.loop||b.current.index<b.group.length-1))b.player.isActive=!0,p.bind({"onCancel.player beforeClose.player":c,"onUpdate.player":e,"beforeLoad.player":d}),e(),b.trigger("onPlayStart")}else c()},next:function(a){var d=b.current;d&&(q(a)||(a=d.direction.next),b.jumpto(d.index+1,a,"next"))},prev:function(a){var d=b.current;
d&&(q(a)||(a=d.direction.prev),b.jumpto(d.index-1,a,"prev"))},jumpto:function(a,d,e){var c=b.current;c&&(a=l(a),b.direction=d||c.direction[a>=c.index?"next":"prev"],b.router=e||"jumpto",c.loop&&(0>a&&(a=c.group.length+a%c.group.length),a%=c.group.length),c.group[a]!==v&&(b.cancel(),b._start(a)))},reposition:function(a,d){var e=b.current,c=e?e.wrap:null,k;c&&(k=b._getPosition(d),a&&"scroll"===a.type?(delete k.position,c.stop(!0,!0).animate(k,200)):(c.css(k),e.pos=f.extend({},e.dim,k)))},update:function(a){var d=
a&&a.type,e=!d||"orientationchange"===d;e&&(clearTimeout(B),B=null);b.isOpen&&!B&&(B=setTimeout(function(){var c=b.current;c&&!b.isClosing&&(b.wrap.removeClass("fancybox-tmp"),(e||"load"===d||"resize"===d&&c.autoResize)&&b._setDimension(),"scroll"===d&&c.canShrink||b.reposition(a),b.trigger("onUpdate"),B=null)},e&&!s?0:300))},toggle:function(a){b.isOpen&&(b.current.fitToView="boolean"===f.type(a)?a:!b.current.fitToView,s&&(b.wrap.removeAttr("style").addClass("fancybox-tmp"),b.trigger("onUpdate")),
b.update())},hideLoading:function(){p.unbind(".loading");f("#fancybox-loading").remove()},showLoading:function(){var a,d;b.hideLoading();a=f('<div id="fancybox-loading"><div></div></div>').click(b.cancel).appendTo("body");p.bind("keydown.loading",function(a){if(27===(a.which||a.keyCode))a.preventDefault(),b.cancel()});b.defaults.fixed||(d=b.getViewport(),a.css({position:"absolute",top:0.5*d.h+d.y,left:0.5*d.w+d.x}))},getViewport:function(){var a=b.current&&b.current.locked||!1,d={x:n.scrollLeft(),
y:n.scrollTop()};a?(d.w=a[0].clientWidth,d.h=a[0].clientHeight):(d.w=s&&r.innerWidth?r.innerWidth:n.width(),d.h=s&&r.innerHeight?r.innerHeight:n.height());return d},unbindEvents:function(){b.wrap&&t(b.wrap)&&b.wrap.unbind(".fb");p.unbind(".fb");n.unbind(".fb")},bindEvents:function(){var a=b.current,d;a&&(n.bind("orientationchange.fb"+(s?"":" resize.fb")+(a.autoCenter&&!a.locked?" scroll.fb":""),b.update),(d=a.keys)&&p.bind("keydown.fb",function(e){var c=e.which||e.keyCode,k=e.target||e.srcElement;
if(27===c&&b.coming)return!1;!e.ctrlKey&&(!e.altKey&&!e.shiftKey&&!e.metaKey&&(!k||!k.type&&!f(k).is("[contenteditable]")))&&f.each(d,function(d,k){if(1<a.group.length&&k[c]!==v)return b[d](k[c]),e.preventDefault(),!1;if(-1<f.inArray(c,k))return b[d](),e.preventDefault(),!1})}),f.fn.mousewheel&&a.mouseWheel&&b.wrap.bind("mousewheel.fb",function(d,c,k,g){for(var h=f(d.target||null),j=!1;h.length&&!j&&!h.is(".fancybox-skin")&&!h.is(".fancybox-wrap");)j=h[0]&&!(h[0].style.overflow&&"hidden"===h[0].style.overflow)&&
(h[0].clientWidth&&h[0].scrollWidth>h[0].clientWidth||h[0].clientHeight&&h[0].scrollHeight>h[0].clientHeight),h=f(h).parent();if(0!==c&&!j&&1<b.group.length&&!a.canShrink){if(0<g||0<k)b.prev(0<g?"down":"left");else if(0>g||0>k)b.next(0>g?"up":"right");d.preventDefault()}}))},trigger:function(a,d){var e,c=d||b.coming||b.current;if(c){f.isFunction(c[a])&&(e=c[a].apply(c,Array.prototype.slice.call(arguments,1)));if(!1===e)return!1;c.helpers&&f.each(c.helpers,function(d,e){if(e&&b.helpers[d]&&f.isFunction(b.helpers[d][a]))b.helpers[d][a](f.extend(!0,
{},b.helpers[d].defaults,e),c)});p.trigger(a)}},isImage:function(a){return q(a)&&a.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)},isSWF:function(a){return q(a)&&a.match(/\.(swf)((\?|#).*)?$/i)},_start:function(a){var d={},e,c;a=l(a);e=b.group[a]||null;if(!e)return!1;d=f.extend(!0,{},b.opts,e);e=d.margin;c=d.padding;"number"===f.type(e)&&(d.margin=[e,e,e,e]);"number"===f.type(c)&&(d.padding=[c,c,c,c]);d.modal&&f.extend(!0,d,{closeBtn:!1,closeClick:!1,nextClick:!1,arrows:!1,
mouseWheel:!1,keys:null,helpers:{overlay:{closeClick:!1}}});d.autoSize&&(d.autoWidth=d.autoHeight=!0);"auto"===d.width&&(d.autoWidth=!0);"auto"===d.height&&(d.autoHeight=!0);d.group=b.group;d.index=a;b.coming=d;if(!1===b.trigger("beforeLoad"))b.coming=null;else{c=d.type;e=d.href;if(!c)return b.coming=null,b.current&&b.router&&"jumpto"!==b.router?(b.current.index=a,b[b.router](b.direction)):!1;b.isActive=!0;if("image"===c||"swf"===c)d.autoHeight=d.autoWidth=!1,d.scrolling="visible";"image"===c&&(d.aspectRatio=
!0);"iframe"===c&&s&&(d.scrolling="scroll");d.wrap=f(d.tpl.wrap).addClass("fancybox-"+(s?"mobile":"desktop")+" fancybox-type-"+c+" fancybox-tmp "+d.wrapCSS).appendTo(d.parent||"body");f.extend(d,{skin:f(".fancybox-skin",d.wrap),outer:f(".fancybox-outer",d.wrap),inner:f(".fancybox-inner",d.wrap)});f.each(["Top","Right","Bottom","Left"],function(a,b){d.skin.css("padding"+b,w(d.padding[a]))});b.trigger("onReady");if("inline"===c||"html"===c){if(!d.content||!d.content.length)return b._error("content")}else if(!e)return b._error("href");
"image"===c?b._loadImage():"ajax"===c?b._loadAjax():"iframe"===c?b._loadIframe():b._afterLoad()}},_error:function(a){f.extend(b.coming,{type:"html",autoWidth:!0,autoHeight:!0,minWidth:0,minHeight:0,scrolling:"no",hasError:a,content:b.coming.tpl.error});b._afterLoad()},_loadImage:function(){var a=b.imgPreload=new Image;a.onload=function(){this.onload=this.onerror=null;b.coming.width=this.width/b.opts.pixelRatio;b.coming.height=this.height/b.opts.pixelRatio;b._afterLoad()};a.onerror=function(){this.onload=
this.onerror=null;b._error("image")};a.src=b.coming.href;!0!==a.complete&&b.showLoading()},_loadAjax:function(){var a=b.coming;b.showLoading();b.ajaxLoad=f.ajax(f.extend({},a.ajax,{url:a.href,error:function(a,e){b.coming&&"abort"!==e?b._error("ajax",a):b.hideLoading()},success:function(d,e){"success"===e&&(a.content=d,b._afterLoad())}}))},_loadIframe:function(){var a=b.coming,d=f(a.tpl.iframe.replace(/\{rnd\}/g,(new Date).getTime())).attr("scrolling",s?"auto":a.iframe.scrolling).attr("src",a.href);
f(a.wrap).bind("onReset",function(){try{f(this).find("iframe").hide().attr("src","//about:blank").end().empty()}catch(a){}});a.iframe.preload&&(b.showLoading(),d.one("load",function(){f(this).data("ready",1);s||f(this).bind("load.fb",b.update);f(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show();b._afterLoad()}));a.content=d.appendTo(a.inner);a.iframe.preload||b._afterLoad()},_preloadImages:function(){var a=b.group,d=b.current,e=a.length,c=d.preload?Math.min(d.preload,
e-1):0,f,g;for(g=1;g<=c;g+=1)f=a[(d.index+g)%e],"image"===f.type&&f.href&&((new Image).src=f.href)},_afterLoad:function(){var a=b.coming,d=b.current,e,c,k,g,h;b.hideLoading();if(a&&!1!==b.isActive)if(!1===b.trigger("afterLoad",a,d))a.wrap.stop(!0).trigger("onReset").remove(),b.coming=null;else{d&&(b.trigger("beforeChange",d),d.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove());b.unbindEvents();e=a.content;c=a.type;k=a.scrolling;f.extend(b,{wrap:a.wrap,skin:a.skin,
outer:a.outer,inner:a.inner,current:a,previous:d});g=a.href;switch(c){case "inline":case "ajax":case "html":a.selector?e=f("<div>").html(e).find(a.selector):t(e)&&(e.data("fancybox-placeholder")||e.data("fancybox-placeholder",f('<div class="fancybox-placeholder"></div>').insertAfter(e).hide()),e=e.show().detach(),a.wrap.bind("onReset",function(){f(this).find(e).length&&e.hide().replaceAll(e.data("fancybox-placeholder")).data("fancybox-placeholder",!1)}));break;case "image":e=a.tpl.image.replace("{href}",
g);break;case "swf":e='<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="'+g+'"></param>',h="",f.each(a.swf,function(a,b){e+='<param name="'+a+'" value="'+b+'"></param>';h+=" "+a+'="'+b+'"'}),e+='<embed src="'+g+'" type="application/x-shockwave-flash" width="100%" height="100%"'+h+"></embed></object>"}(!t(e)||!e.parent().is(a.inner))&&a.inner.append(e);b.trigger("beforeShow");a.inner.css("overflow","yes"===k?"scroll":
"no"===k?"hidden":k);b._setDimension();b.reposition();b.isOpen=!1;b.coming=null;b.bindEvents();if(b.isOpened){if(d.prevMethod)b.transitions[d.prevMethod]()}else f(".fancybox-wrap").not(a.wrap).stop(!0).trigger("onReset").remove();b.transitions[b.isOpened?a.nextMethod:a.openMethod]();b._preloadImages()}},_setDimension:function(){var a=b.getViewport(),d=0,e=!1,c=!1,e=b.wrap,k=b.skin,g=b.inner,h=b.current,c=h.width,j=h.height,m=h.minWidth,u=h.minHeight,n=h.maxWidth,p=h.maxHeight,s=h.scrolling,q=h.scrollOutside?
h.scrollbarWidth:0,x=h.margin,y=l(x[1]+x[3]),r=l(x[0]+x[2]),v,z,t,C,A,F,B,D,H;e.add(k).add(g).width("auto").height("auto").removeClass("fancybox-tmp");x=l(k.outerWidth(!0)-k.width());v=l(k.outerHeight(!0)-k.height());z=y+x;t=r+v;C=E(c)?(a.w-z)*l(c)/100:c;A=E(j)?(a.h-t)*l(j)/100:j;if("iframe"===h.type){if(H=h.content,h.autoHeight&&1===H.data("ready"))try{H[0].contentWindow.document.location&&(g.width(C).height(9999),F=H.contents().find("body"),q&&F.css("overflow-x","hidden"),A=F.outerHeight(!0))}catch(G){}}else if(h.autoWidth||
h.autoHeight)g.addClass("fancybox-tmp"),h.autoWidth||g.width(C),h.autoHeight||g.height(A),h.autoWidth&&(C=g.width()),h.autoHeight&&(A=g.height()),g.removeClass("fancybox-tmp");c=l(C);j=l(A);D=C/A;m=l(E(m)?l(m,"w")-z:m);n=l(E(n)?l(n,"w")-z:n);u=l(E(u)?l(u,"h")-t:u);p=l(E(p)?l(p,"h")-t:p);F=n;B=p;h.fitToView&&(n=Math.min(a.w-z,n),p=Math.min(a.h-t,p));z=a.w-y;r=a.h-r;h.aspectRatio?(c>n&&(c=n,j=l(c/D)),j>p&&(j=p,c=l(j*D)),c<m&&(c=m,j=l(c/D)),j<u&&(j=u,c=l(j*D))):(c=Math.max(m,Math.min(c,n)),h.autoHeight&&
"iframe"!==h.type&&(g.width(c),j=g.height()),j=Math.max(u,Math.min(j,p)));if(h.fitToView)if(g.width(c).height(j),e.width(c+x),a=e.width(),y=e.height(),h.aspectRatio)for(;(a>z||y>r)&&(c>m&&j>u)&&!(19<d++);)j=Math.max(u,Math.min(p,j-10)),c=l(j*D),c<m&&(c=m,j=l(c/D)),c>n&&(c=n,j=l(c/D)),g.width(c).height(j),e.width(c+x),a=e.width(),y=e.height();else c=Math.max(m,Math.min(c,c-(a-z))),j=Math.max(u,Math.min(j,j-(y-r)));q&&("auto"===s&&j<A&&c+x+q<z)&&(c+=q);g.width(c).height(j);e.width(c+x);a=e.width();
y=e.height();e=(a>z||y>r)&&c>m&&j>u;c=h.aspectRatio?c<F&&j<B&&c<C&&j<A:(c<F||j<B)&&(c<C||j<A);f.extend(h,{dim:{width:w(a),height:w(y)},origWidth:C,origHeight:A,canShrink:e,canExpand:c,wPadding:x,hPadding:v,wrapSpace:y-k.outerHeight(!0),skinSpace:k.height()-j});!H&&(h.autoHeight&&j>u&&j<p&&!c)&&g.height("auto")},_getPosition:function(a){var d=b.current,e=b.getViewport(),c=d.margin,f=b.wrap.width()+c[1]+c[3],g=b.wrap.height()+c[0]+c[2],c={position:"absolute",top:c[0],left:c[3]};d.autoCenter&&d.fixed&&
!a&&g<=e.h&&f<=e.w?c.position="fixed":d.locked||(c.top+=e.y,c.left+=e.x);c.top=w(Math.max(c.top,c.top+(e.h-g)*d.topRatio));c.left=w(Math.max(c.left,c.left+(e.w-f)*d.leftRatio));return c},_afterZoomIn:function(){var a=b.current;a&&(b.isOpen=b.isOpened=!0,b.wrap.css("overflow","visible").addClass("fancybox-opened"),b.update(),(a.closeClick||a.nextClick&&1<b.group.length)&&b.inner.css("cursor","pointer").bind("click.fb",function(d){!f(d.target).is("a")&&!f(d.target).parent().is("a")&&(d.preventDefault(),
b[a.closeClick?"close":"next"]())}),a.closeBtn&&f(a.tpl.closeBtn).appendTo(b.skin).bind("click.fb",function(a){a.preventDefault();b.close()}),a.arrows&&1<b.group.length&&((a.loop||0<a.index)&&f(a.tpl.prev).appendTo(b.outer).bind("click.fb",b.prev),(a.loop||a.index<b.group.length-1)&&f(a.tpl.next).appendTo(b.outer).bind("click.fb",b.next)),b.trigger("afterShow"),!a.loop&&a.index===a.group.length-1?b.play(!1):b.opts.autoPlay&&!b.player.isActive&&(b.opts.autoPlay=!1,b.play()))},_afterZoomOut:function(a){a=
a||b.current;f(".fancybox-wrap").trigger("onReset").remove();f.extend(b,{group:{},opts:{},router:!1,current:null,isActive:!1,isOpened:!1,isOpen:!1,isClosing:!1,wrap:null,skin:null,outer:null,inner:null});b.trigger("afterClose",a)}});b.transitions={getOrigPosition:function(){var a=b.current,d=a.element,e=a.orig,c={},f=50,g=50,h=a.hPadding,j=a.wPadding,m=b.getViewport();!e&&(a.isDom&&d.is(":visible"))&&(e=d.find("img:first"),e.length||(e=d));t(e)?(c=e.offset(),e.is("img")&&(f=e.outerWidth(),g=e.outerHeight())):
(c.top=m.y+(m.h-g)*a.topRatio,c.left=m.x+(m.w-f)*a.leftRatio);if("fixed"===b.wrap.css("position")||a.locked)c.top-=m.y,c.left-=m.x;return c={top:w(c.top-h*a.topRatio),left:w(c.left-j*a.leftRatio),width:w(f+j),height:w(g+h)}},step:function(a,d){var e,c,f=d.prop;c=b.current;var g=c.wrapSpace,h=c.skinSpace;if("width"===f||"height"===f)e=d.end===d.start?1:(a-d.start)/(d.end-d.start),b.isClosing&&(e=1-e),c="width"===f?c.wPadding:c.hPadding,c=a-c,b.skin[f](l("width"===f?c:c-g*e)),b.inner[f](l("width"===
f?c:c-g*e-h*e))},zoomIn:function(){var a=b.current,d=a.pos,e=a.openEffect,c="elastic"===e,k=f.extend({opacity:1},d);delete k.position;c?(d=this.getOrigPosition(),a.openOpacity&&(d.opacity=0.1)):"fade"===e&&(d.opacity=0.1);b.wrap.css(d).animate(k,{duration:"none"===e?0:a.openSpeed,easing:a.openEasing,step:c?this.step:null,complete:b._afterZoomIn})},zoomOut:function(){var a=b.current,d=a.closeEffect,e="elastic"===d,c={opacity:0.1};e&&(c=this.getOrigPosition(),a.closeOpacity&&(c.opacity=0.1));b.wrap.animate(c,
{duration:"none"===d?0:a.closeSpeed,easing:a.closeEasing,step:e?this.step:null,complete:b._afterZoomOut})},changeIn:function(){var a=b.current,d=a.nextEffect,e=a.pos,c={opacity:1},f=b.direction,g;e.opacity=0.1;"elastic"===d&&(g="down"===f||"up"===f?"top":"left","down"===f||"right"===f?(e[g]=w(l(e[g])-200),c[g]="+=200px"):(e[g]=w(l(e[g])+200),c[g]="-=200px"));"none"===d?b._afterZoomIn():b.wrap.css(e).animate(c,{duration:a.nextSpeed,easing:a.nextEasing,complete:b._afterZoomIn})},changeOut:function(){var a=
b.previous,d=a.prevEffect,e={opacity:0.1},c=b.direction;"elastic"===d&&(e["down"===c||"up"===c?"top":"left"]=("up"===c||"left"===c?"-":"+")+"=200px");a.wrap.animate(e,{duration:"none"===d?0:a.prevSpeed,easing:a.prevEasing,complete:function(){f(this).trigger("onReset").remove()}})}};b.helpers.overlay={defaults:{closeClick:!0,speedOut:200,showEarly:!0,css:{},locked:!s,fixed:!0},overlay:null,fixed:!1,el:f("html"),create:function(a){a=f.extend({},this.defaults,a);this.overlay&&this.close();this.overlay=
f('<div class="fancybox-overlay"></div>').appendTo(b.coming?b.coming.parent:a.parent);this.fixed=!1;a.fixed&&b.defaults.fixed&&(this.overlay.addClass("fancybox-overlay-fixed"),this.fixed=!0)},open:function(a){var d=this;a=f.extend({},this.defaults,a);this.overlay?this.overlay.unbind(".overlay").width("auto").height("auto"):this.create(a);this.fixed||(n.bind("resize.overlay",f.proxy(this.update,this)),this.update());a.closeClick&&this.overlay.bind("click.overlay",function(a){if(f(a.target).hasClass("fancybox-overlay"))return b.isActive?
b.close():d.close(),!1});this.overlay.css(a.css).show()},close:function(){var a,b;n.unbind("resize.overlay");this.el.hasClass("fancybox-lock")&&(f(".fancybox-margin").removeClass("fancybox-margin"),a=n.scrollTop(),b=n.scrollLeft(),this.el.removeClass("fancybox-lock"),n.scrollTop(a).scrollLeft(b));f(".fancybox-overlay").remove().hide();f.extend(this,{overlay:null,fixed:!1})},update:function(){var a="100%",b;this.overlay.width(a).height("100%");I?(b=Math.max(G.documentElement.offsetWidth,G.body.offsetWidth),
p.width()>b&&(a=p.width())):p.width()>n.width()&&(a=p.width());this.overlay.width(a).height(p.height())},onReady:function(a,b){var e=this.overlay;f(".fancybox-overlay").stop(!0,!0);e||this.create(a);a.locked&&(this.fixed&&b.fixed)&&(e||(this.margin=p.height()>n.height()?f("html").css("margin-right").replace("px",""):!1),b.locked=this.overlay.append(b.wrap),b.fixed=!1);!0===a.showEarly&&this.beforeShow.apply(this,arguments)},beforeShow:function(a,b){var e,c;b.locked&&(!1!==this.margin&&(f("*").filter(function(){return"fixed"===
f(this).css("position")&&!f(this).hasClass("fancybox-overlay")&&!f(this).hasClass("fancybox-wrap")}).addClass("fancybox-margin"),this.el.addClass("fancybox-margin")),e=n.scrollTop(),c=n.scrollLeft(),this.el.addClass("fancybox-lock"),n.scrollTop(e).scrollLeft(c));this.open(a)},onUpdate:function(){this.fixed||this.update()},afterClose:function(a){this.overlay&&!b.coming&&this.overlay.fadeOut(a.speedOut,f.proxy(this.close,this))}};b.helpers.title={defaults:{type:"float",position:"bottom"},beforeShow:function(a){var d=
b.current,e=d.title,c=a.type;f.isFunction(e)&&(e=e.call(d.element,d));if(q(e)&&""!==f.trim(e)){d=f('<div class="fancybox-title fancybox-title-'+c+'-wrap">'+e+"</div>");switch(c){case "inside":c=b.skin;break;case "outside":c=b.wrap;break;case "over":c=b.inner;break;default:c=b.skin,d.appendTo("body"),I&&d.width(d.width()),d.wrapInner('<span class="child"></span>'),b.current.margin[2]+=Math.abs(l(d.css("margin-bottom")))}d["top"===a.position?"prependTo":"appendTo"](c)}}};f.fn.fancybox=function(a){var d,
e=f(this),c=this.selector||"",k=function(g){var h=f(this).blur(),j=d,k,l;!g.ctrlKey&&(!g.altKey&&!g.shiftKey&&!g.metaKey)&&!h.is(".fancybox-wrap")&&(k=a.groupAttr||"data-fancybox-group",l=h.attr(k),l||(k="rel",l=h.get(0)[k]),l&&(""!==l&&"nofollow"!==l)&&(h=c.length?f(c):e,h=h.filter("["+k+'="'+l+'"]'),j=h.index(this)),a.index=j,!1!==b.open(h,a)&&g.preventDefault())};a=a||{};d=a.index||0;!c||!1===a.live?e.unbind("click.fb-start").bind("click.fb-start",k):p.undelegate(c,"click.fb-start").delegate(c+
":not('.fancybox-item, .fancybox-nav')","click.fb-start",k);this.filter("[data-fancybox-start=1]").trigger("click");return this};p.ready(function(){var a,d;f.scrollbarWidth===v&&(f.scrollbarWidth=function(){var a=f('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),b=a.children(),b=b.innerWidth()-b.height(99).innerWidth();a.remove();return b});if(f.support.fixedPosition===v){a=f.support;d=f('<div style="position:fixed;top:20px;"></div>').appendTo("body");var e=20===
d[0].offsetTop||15===d[0].offsetTop;d.remove();a.fixedPosition=e}f.extend(b.defaults,{scrollbarWidth:f.scrollbarWidth(),fixed:f.support.fixedPosition,parent:f("body")});a=f(r).width();J.addClass("fancybox-lock-test");d=f(r).width();J.removeClass("fancybox-lock-test");f("<style type='text/css'>.fancybox-margin{margin-right:"+(d-a)+"px;}</style>").appendTo("head")})})(window,document,jQuery);

			
	var $window = $(window);

	// получаем ширину документа
	function getWidth() {
	  if (self.innerWidth) {
	    return self.innerWidth;
	  }

	  if (document.documentElement && document.documentElement.clientWidth) {
	    return document.documentElement.clientWidth;
	  }

	  if (document.body) {
	    return document.body.clientWidth;
	  }
	}
	// получаем ширину документа
	function getHeight() {
	  if (self.innerHeight) {
	    return self.innerHeight;
	  }

	  if (document.documentElement && document.documentElement.clientHeight) {
	    return document.documentElement.clientHeight;
	  }

	  if (document.body) {
	    return document.body.clientHeight;
	  }
	}

	function documentWidthStatus(){
		if ( getWidth() <= 992 && !$('body').hasClass('page--narrow') ){
			$('body').removeClass('page--wide').addClass('page--narrow')
		} else if ( getWidth() > 992 && !$('body').hasClass('page--wide') ){
			$('body').removeClass('page--narrow').addClass('page--wide')
		}
	}

	function documentHeightStatus(){
		if ( getHeight() <= 710 && !$('body').hasClass('page--slim') ){
			$('body').removeClass('page--tall').addClass('page--slim')
		} else if ( getHeight() > 710 && !$('body').hasClass('page--tall') ){
			$('body').removeClass('page--slim').addClass('page--tall')
		}
	}

	// закрваем меню по клику вне его области
	function closeMobileMenu(){
		$('.sidebar, .menu__toggle').toggleClass('active');
	}

	// закрваем меню по клику вне его области
	function closeMenuOnOutOfClick(){
	    $('body').mouseup(function(e) {
	        var subject = $('.sidebar.active');

	        if( subject.length
	            && !e.target.className.includes('menu__toggle')
	            && !e.target.className.includes('icon__toggle')
	            && e.target.className != subject.attr('class')
	            && !subject.has(e.target).length){
	            closeMobileMenu();
	        }
	    });
	}

	// Устанавливаем минимальную высоту секции = высоте экрана
    function setSectionMinHeight(){
    	$('.section').css({'min-height':getHeight()});
    }


	//
    // Слайдер логотипов партнеров
    //---------------------------------------------------------------------------------------
    if ($('.js-slider-brands').length) {
        initBrandsSlider();
    };
    function initBrandsSlider() {
        var slider,
        settings = function () {//будем показывать разное кол-во слайдов на разных разрешениях
            var setting,
                setting1 = {
                    maxSlides: 1,
                },
                setting2 = {
                    maxSlides: 2,
                },
                setting3 = {
                    maxSlides: 3,
                },
                setting4 = {
                    maxSlides: 4,
                },
                setting5 = {
                    maxSlides: 5,
                },
                common = {
                    minSlides: 1,
                    slideWidth: 200,
                    slideMargin: 0,
                    pager: false,
                    controls: false,
                    ticker: true,
                    speed:50000
                };

            if (getWidth() <= 400) {
                setting = $.extend(setting1, common);
            }
            if (getWidth() > 400 && getWidth() <= 500) {
                setting = $.extend(setting2, common);
            }
            if (getWidth() > 500 && getWidth() <= 760) {
                setting = $.extend(setting3, common);
            }
            if (getWidth() > 760 && getWidth() <= 1000) {
                setting = $.extend(setting4, common);
            }
            if (getWidth() > 1000) {
                setting = $.extend(setting5, common);
            }
            return setting;
        };

        function reloadSettings() {
            var set = settings();
            slider.reloadSlider($.extend(set, { startSlide: slider.getCurrentSlide() }));
        }

        var set = settings();
        slider = $('.js-slider-brands').bxSlider(set);

        $window.on('resize load', function () {
            setTimeout(reloadSettings, 500);
        });
    };

    

	//
    // Слайдер аксессуаров на странице - therapy
    //---------------------------------------------------------------------------------------
    if ($('.js-slider-accessories').length) {
        initAccessoriesSlider();
    };
    function initAccessoriesSlider() {
        var slider,
        settings = function () {//будем показывать разное кол-во слайдов на разных разрешениях
            var setting,
                setting1 = {
                    maxSlides: 1,
                },
                setting2 = {
                    maxSlides: 2,
                },
                setting3 = {
                    maxSlides: 3,
                },
                setting4 = {
                    maxSlides: 4,
                },
                setting5 = {
                    maxSlides: 5,
                },
                common = {
                    minSlides: 1,
                    slideWidth: 200,
                    slideMargin: 0,
                    pager: false,
                    controls: false,
                    ticker: true,
                    speed:50000
                };

            if (getWidth() <= 400) {
                setting = $.extend(setting1, common);
            }
            if (getWidth() > 400 && getWidth() <= 500) {
                setting = $.extend(setting2, common);
            }
            if (getWidth() > 500 && getWidth() <= 760) {
                setting = $.extend(setting3, common);
            }
            if (getWidth() > 760 && getWidth() <= 1000) {
                setting = $.extend(setting4, common);
            }
            if (getWidth() > 1000) {
                setting = $.extend(setting5, common);
            }
            return setting;
        };

        function reloadSettings() {
            var set = settings();
            slider.reloadSlider($.extend(set, { startSlide: slider.getCurrentSlide() }));
        }

        var set = settings();
        slider = $('.js-slider-accessories').bxSlider(set);

        $window.on('resize load', function () {
            setTimeout(reloadSettings, 500);
        });
    };

	//
    // Слайдер сертификатов на странице - hydropeptide
    //---------------------------------------------------------------------------------------
    if ($('.js-slider-sertificate').length) {
        initSertificateSlider();
    };
    function initSertificateSlider() {
        var slider,
        settings = function () {//будем показывать разное кол-во слайдов на разных разрешениях
            var setting,
                setting1 = {
                    maxSlides: 1,
                },
                setting2 = {
                    maxSlides: 2,
                },
                setting3 = {
                    maxSlides: 3,
                },
                setting4 = {
                    maxSlides: 4,
                },
                setting5 = {
                    maxSlides: 5,
                },
                common = {
                    minSlides: 1,
                    slideWidth: 200,
                    slideMargin: 0,
                    pager: false,
                    controls: false,
                    ticker: true,
                    speed:50000
                };

            if (getWidth() <= 400) {
                setting = $.extend(setting1, common);
            }
            if (getWidth() > 400 && getWidth() <= 500) {
                setting = $.extend(setting2, common);
            }
            if (getWidth() > 500 && getWidth() <= 760) {
                setting = $.extend(setting3, common);
            }
            if (getWidth() > 760 && getWidth() <= 1000) {
                setting = $.extend(setting4, common);
            }
            if (getWidth() > 1000) {
                setting = $.extend(setting5, common);
            }
            return setting;
        };

        function reloadSettings() {
            var set = settings();
            slider.reloadSlider($.extend(set, { startSlide: slider.getCurrentSlide() }));
        }

        var set = settings();
        slider = $('.js-slider-sertificate').bxSlider(set);

        $window.on('resize load', function () {
            setTimeout(reloadSettings, 500);
        });
    };

    /* Posts carousel */
	$('.js-posts-review-carousel').bxSlider({
		minSlides: 1,
		maxSlides: 3,
    	moveSlides: 1,
		slideWidth: 260,
		slideMargin: 36,
		pager: false
	});



	/* Подключаем fancybox для фоток проекта */
	(function(){
		var $projectPhoto = $('.b-gallery__photo');
		if ( $projectPhoto.length ){
			$projectPhoto.fancybox({
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		}
	})();

	/* Подключаем fancybox для фоток оборудования - therapy.html */
	(function(){
		var $equipmentPhoto = $('.js-slider-gallery');
		if ( $equipmentPhoto.length ){
			$equipmentPhoto.fancybox({
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		}
	})();

	/* Подключаем fancybox для фото товара - therapy.html */
	(function(){
		var $equipmentPhoto = $('.b-product-promo__picture');
		if ( $equipmentPhoto.length ){
			var link = $equipmentPhoto.find('a').attr('href');
			var title = $equipmentPhoto.find('a').attr('title');
			$('.b-product-promo').on('click', function(){
				$.fancybox({
					href		: link,
					title  		: title,
					openEffect	: 'elastic',
					closeEffect	: 'elastic',
			    	helpers : {
			    		title : {
			    			type : 'inside'
			    		}
			    	}
				});
			});
		}
	})();

	//
    // Слайдер с тремя элементами
    //---------------------------------------------------------------------------------------
    if ($('.js-gallery-carousel').length) {
        initThreeInRowSlider();
    };
    function initThreeInRowSlider() {
        var slider,
        settings = function () {//будем показывать разное кол-во слайдов на разных разрешениях
            var setting,
                setting1 = {
                    maxSlides: 1,
                },
                setting2 = {
                    maxSlides: 2,
                },
                setting3 = {
                    maxSlides: 2,
                },
                setting4 = {
                    maxSlides: 3,
                },
                setting5 = {
                    maxSlides: 3,
                },
                common = {
                    minSlides: 1,
					moveSlides: 1,
					slideWidth: 260,
					slideMargin: 36,
					controls: false
                };

            if (getWidth() <= 400) {
                setting = $.extend(setting1, common);
            }
            if (getWidth() > 400 && getWidth() <= 500) {
                setting = $.extend(setting2, common);
            }
            if (getWidth() > 500 && getWidth() <= 760) {
                setting = $.extend(setting3, common);
            }
            if (getWidth() > 760 && getWidth() <= 1000) {
                setting = $.extend(setting4, common);
            }
            if (getWidth() > 1000) {
                setting = $.extend(setting5, common);
            }
            return setting;
        };

        function reloadSettings(slider) {
            var set = settings();
            slider.reloadSlider($.extend(set, { startSlide: slider.getCurrentSlide() }));
        }

        var set = settings();
        slider = $('.js-gallery-carousel').bxSlider(set);

        $window.on('resize load', function () {
            setTimeout(reloadSettings(slider), 500);
        });
    };

    /* Product tabs block functions */
    function tabsUnsetActive() {
    	$('.js-tab-link').parent().removeClass('is--active');
    }
    function paneUnsetActive() {
    	$('.js-pane').removeClass('is--active');
    }
    function tabsSwitcher() {
    	if ( $('.js-tab-link').length ){
        	$('.js-tab-link').on('click', function(e){
        		e.preventDefault();
        		
        		var id = $(this).attr('href');
        		tabsUnsetActive();
        		$(this).parent().addClass('is--active');

        		paneUnsetActive();
        		$(id).addClass('is--active');
        	});
        }
    }
    $(document).ready(function() {
    	/*
    	**
    	**  Init Page Scripts
    	**
    	****************************/
    	documentWidthStatus();
    	documentHeightStatus();
    	closeMenuOnOutOfClick();
    	tabsSwitcher();
    	$('.js-filter-scrollable .has-sublist, .js-dropdown-scrollable .has-sublist').mouseover(function(){
    		if ( !$(this).hasClass('modified') ){
	    		$(this).addClass('modified').find('.sublist').jScrollPane({
					showArrows: true
		    	});
		    }
    	});
    	
    	//setSectionMinHeight();
    	(function(){
    		$window.resize(function(){
    			documentWidthStatus();
    			documentHeightStatus();
    			//setSectionMinHeight();
    		});
    	})();

    	// FullPage Plugin Settings
    	(function(){
    		if ( $('#fullpage').length ) {
    			$('#fullpage').fullpage({
    				navigation: false,
    				autoScrolling: false,
    				scrollOverflow: false,
    				fitToSection: false,
    				
    				afterLoad: function(anchorLink,index){
    					if ( index == 6 ){
    						var $screen_6 = $('.screen-6');
    						if ( !$screen_6.hasClass('svg-animation--done') ){
    							setTimeout(function(){
    								$('#svgLogo').attr("filter","url(#colorFill)")
    								$screen_6.addClass('svg-animation--done');
    								document.getElementById("animateOnLoad")
    								        .beginElement();
    							},100);
    						}
    						
    					}
    			    },
    			    afterResize: function(){
    					documentWidthStatus();
    					documentHeightStatus();
    			    }
    			});

    			$('.left__panel, .right__panel')
    				.find('.is-animated')
    				.add('.scroll-down')
    				.add('.sidebar')
    				.addClass('animated');
    			$('#animationData').trigger('click');
    		}
    	})();

    	// Screen 4 content parallax effect
    	(function(){
    		if ( $('.screen-44').length ){
    			var $screen = $('.screen-4');
    			var screenH = $screen.height();
    			var $scrPromo = $screen.find('.screen__promo');
    			var $scrBg = $screen.find('.screen__bg');
    			var scrTop = $screen.offset().top;
    			var move = 0;

    			$window.scroll(function(){
    				window.requestAnimationFrame(function(){
	    				move = ($(this).scrollTop()-scrTop);

	    				$scrPromo.css({
	    					"transform": "translate3D(0, "+move+"px, 0)"
	    				});
	    				
	    				/*$scrBg.css({
	    					"transform": "translate3D(0, "+move+"px, 0)"
	    				});*/
	    			});
    			});
    		}
    	})();

    	// Screen 4 content parallax effect
    	(function(){
    		if ( $('.screen-4').length ){
    			var $screen = $('.screen-4');
    			var $scrPromo = $screen.find('.screen__promo');
    			var $scrBg = $screen.find('.screen__bg');
    			var screenH = $screen.height();
    			var promoH = $scrPromo.height();
    			var offsetTop = $screen.offset().top;
    			var move = 0;
    			var dist = 0;
    			var scrollTop = 0;
    			var promoPos = -offsetTop + screenH-promoH;

    			setParallaxBgPosition($screen);
    			$window.resize(function(){
    				setParallaxBgPosition($screen);
    			});
    			$window.scroll(function(){
    				window.requestAnimationFrame(function(){
	    				scrollTop = $(this).scrollTop();
	    				dist = (scrollTop+promoPos);
	    				move = dist>0?0:dist;

	    				$scrPromo.css({
	    					"transform": "translate3D(0, "+move+"px, 0)"
	    				});

	    				/*$scrBg.css({
	    					"transform": "translate3D(0, "+(scrollTop-offsetTop)+"px, 0)"
	    				});*/
	    			});
    			});
    		}
    	})();

    	// Screen 6 content parallax effect
    	function setParallaxBgPosition($screen__block) {
    		var $screen = $screen__block;
			var $scrBg = $screen.find('.screen__bg');
			var screenH = $screen.height();
    		var offsetTop = $screen.offset().top;

    		//$scrBg.css({ 'height':screenH, 'top': offsetTop});
    	}
    	(function(){
    		if ( $('.screen-6').length ){
    			var $screen = $('.screen-6');
    			var $scrPromo = $screen.find('.screen__promo');
    			var $scrBg = $screen.find('.screen__bg');
    			var screenH = $screen.height();
    			var promoH = $scrPromo.height();
    			var offsetTop = $screen.offset().top;
    			var move = 0;
    			var dist = 0;
    			var scrollTop = 0;
    			var promoPos = -offsetTop + screenH-promoH;

    			setParallaxBgPosition($screen);
    			$window.resize(function(){
    				setParallaxBgPosition($screen);
    			});
    			$window.scroll(function(){
    				window.requestAnimationFrame(function(){
	    				scrollTop = $(this).scrollTop();
	    				dist = (scrollTop+promoPos);
	    				move = dist>0?0:dist;

	    				$scrPromo.css({
	    					"transform": "translate3D(0, "+move+"px, 0)"
	    				});

	    				/*$scrBg.css({
	    					"transform": "translate3D(0, "+(scrollTop-offsetTop)+"px, 0)"
	    				});*/
	    			});
    			});
    		}
    	})();
    	// Scroll Down Function
    	(function(){
    		if ( $('.scroll-down').length ) {
    			$('.scroll-down').on('click', function(){
    				$.fn.fullpage.moveSectionDown();
    			});
    		}
    	})();

    	// Menu Toggle Function
    	(function(){
    		$('.menu__toggle').on('click', function(){
    			$(this).toggleClass('active');
    			$('.sidebar').addClass('active');
    		});
    	})();

    	// Carousel
    	(function() {
    		if ( $("#testimonials").length ){
			    /* Testimonials carousel */
				$('#testimonials').bxSlider({
					minSlides: 1,
					maxSlides: 1,
			    	moveSlides: 1,
			    	adaptiveHeight: true,
			    	responsive: true,
					slideMargin: 10,
					pager: true,
					controls: false
				});
    	 	}
    	})();


    	//Modal popup
        $('[data-modal]').on('click', function (e) {
            e.preventDefault();
            var link = $(this).data('modal');
            if (link) { $('#'+link).arcticmodal() }
        });

    	//Page Minimal Height
    	(function(){
    		$(window).on('load resize', function(){
    			var $html = $('html');
    			var $page = $('#page');
    			var $footer = $('#footer');

    			$page.removeAttr('style');
    			if ( $html.height() - $footer.height() > $page.height() ) {
    				var pageH = $html.height() - $footer.height();
    				$page.innerHeight( pageH );
    			}
    		});
    	})();

    	//
    	// Style input file field
    	//---------------------------------------------------------------------------------------
    	$(document).on('change', '.js-input-file input[type="file"]', function () {
    	    var file_field = $(this).closest('.js-input-file');
    	    var path_input = file_field.find('input.g-input-file__path');
    	    var files = $(this)[0].files;
    	    var file_names = [];
    	    for (var i = 0; i < files.length; i++) {
    	        file_names.push(files[i].name);
    	    }
    	    path_input.val(file_names.join(", "));
    	    path_input.trigger('change');
    	});
        
        
        //
        // Если браузер не знает о плейсхолдерах в формах
        //---------------------------------------------------------------------------------------
        if ($('html').hasClass('no-placeholder')) {
            /* Placeholders.js v4.0.1 */
            !function (a) { "use strict"; function b() { } function c() { try { return document.activeElement } catch (a) { } } function d(a, b) { for (var c = 0, d = a.length; d > c; c++) if (a[c] === b) return !0; return !1 } function e(a, b, c) { return a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent ? a.attachEvent("on" + b, c) : void 0 } function f(a, b) { var c; a.createTextRange ? (c = a.createTextRange(), c.move("character", b), c.select()) : a.selectionStart && (a.focus(), a.setSelectionRange(b, b)) } function g(a, b) { try { return a.type = b, !0 } catch (c) { return !1 } } function h(a, b) { if (a && a.getAttribute(B)) b(a); else for (var c, d = a ? a.getElementsByTagName("input") : N, e = a ? a.getElementsByTagName("textarea") : O, f = d ? d.length : 0, g = e ? e.length : 0, h = f + g, i = 0; h > i; i++) c = f > i ? d[i] : e[i - f], b(c) } function i(a) { h(a, k) } function j(a) { h(a, l) } function k(a, b) { var c = !!b && a.value !== b, d = a.value === a.getAttribute(B); if ((c || d) && "true" === a.getAttribute(C)) { a.removeAttribute(C), a.value = a.value.replace(a.getAttribute(B), ""), a.className = a.className.replace(A, ""); var e = a.getAttribute(I); parseInt(e, 10) >= 0 && (a.setAttribute("maxLength", e), a.removeAttribute(I)); var f = a.getAttribute(D); return f && (a.type = f), !0 } return !1 } function l(a) { var b = a.getAttribute(B); if ("" === a.value && b) { a.setAttribute(C, "true"), a.value = b, a.className += " " + z; var c = a.getAttribute(I); c || (a.setAttribute(I, a.maxLength), a.removeAttribute("maxLength")); var d = a.getAttribute(D); return d ? a.type = "text" : "password" === a.type && g(a, "text") && a.setAttribute(D, "password"), !0 } return !1 } function m(a) { return function () { P && a.value === a.getAttribute(B) && "true" === a.getAttribute(C) ? f(a, 0) : k(a) } } function n(a) { return function () { l(a) } } function o(a) { return function () { i(a) } } function p(a) { return function (b) { return v = a.value, "true" === a.getAttribute(C) && v === a.getAttribute(B) && d(x, b.keyCode) ? (b.preventDefault && b.preventDefault(), !1) : void 0 } } function q(a) { return function () { k(a, v), "" === a.value && (a.blur(), f(a, 0)) } } function r(a) { return function () { a === c() && a.value === a.getAttribute(B) && "true" === a.getAttribute(C) && f(a, 0) } } function s(a) { var b = a.form; b && "string" == typeof b && (b = document.getElementById(b), b.getAttribute(E) || (e(b, "submit", o(b)), b.setAttribute(E, "true"))), e(a, "focus", m(a)), e(a, "blur", n(a)), P && (e(a, "keydown", p(a)), e(a, "keyup", q(a)), e(a, "click", r(a))), a.setAttribute(F, "true"), a.setAttribute(B, T), (P || a !== c()) && l(a) } var t = document.createElement("input"), u = void 0 !== t.placeholder; if (a.Placeholders = { nativeSupport: u, disable: u ? b : i, enable: u ? b : j }, !u) { var v, w = ["text", "search", "url", "tel", "email", "password", "number", "textarea"], x = [27, 33, 34, 35, 36, 37, 38, 39, 40, 8, 46], y = "#ccc", z = "placeholdersjs", A = new RegExp("(?:^|\\s)" + z + "(?!\\S)"), B = "data-placeholder-value", C = "data-placeholder-active", D = "data-placeholder-type", E = "data-placeholder-submit", F = "data-placeholder-bound", G = "data-placeholder-focus", H = "data-placeholder-live", I = "data-placeholder-maxlength", J = 100, K = document.getElementsByTagName("head")[0], L = document.documentElement, M = a.Placeholders, N = document.getElementsByTagName("input"), O = document.getElementsByTagName("textarea"), P = "false" === L.getAttribute(G), Q = "false" !== L.getAttribute(H), R = document.createElement("style"); R.type = "text/css"; var S = document.createTextNode("." + z + " {color:" + y + ";}"); R.styleSheet ? R.styleSheet.cssText = S.nodeValue : R.appendChild(S), K.insertBefore(R, K.firstChild); for (var T, U, V = 0, W = N.length + O.length; W > V; V++) U = V < N.length ? N[V] : O[V - N.length], T = U.attributes.placeholder, T && (T = T.nodeValue, T && d(w, U.type) && s(U)); var X = setInterval(function () { for (var a = 0, b = N.length + O.length; b > a; a++) U = a < N.length ? N[a] : O[a - N.length], T = U.attributes.placeholder, T ? (T = T.nodeValue, T && d(w, U.type) && (U.getAttribute(F) || s(U), (T !== U.getAttribute(B) || "password" === U.type && !U.getAttribute(D)) && ("password" === U.type && !U.getAttribute(D) && g(U, "text") && U.setAttribute(D, "password"), U.value === U.getAttribute(B) && (U.value = T), U.setAttribute(B, T)))) : U.getAttribute(C) && (k(U), U.removeAttribute(B)); Q || clearInterval(X) }, J); e(a, "beforeunload", function () { M.disable() }) } }(this);
        };

    });
