<!DOCTYPE html>

<html prefix="og: http://ogp.me/ns#" class="no-js js_active  vc_desktop  vc_transform  vc_transform skrollr skrollr-desktop"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>(()=>{class RocketLazyLoadScripts{constructor(){this.v="2.0.3",this.userEvents=["keydown","keyup","mousedown","mouseup","mousemove","mouseover","mouseenter","mouseout","mouseleave","touchmove","touchstart","touchend","touchcancel","wheel","click","dblclick","input","visibilitychange"],this.attributeEvents=["onblur","onclick","oncontextmenu","ondblclick","onfocus","onmousedown","onmouseenter","onmouseleave","onmousemove","onmouseout","onmouseover","onmouseup","onmousewheel","onscroll","onsubmit"]}async t(){this.i(),this.o(),/iP(ad|hone)/.test(navigator.userAgent)&&this.h(),this.u(),this.l(this),this.m(),this.k(this),this.p(this),this._(),await Promise.all([this.R(),this.L()]),this.lastBreath=Date.now(),this.S(this),this.P(),this.D(),this.O(),this.M(),await this.C(this.delayedScripts.normal),await this.C(this.delayedScripts.defer),await this.C(this.delayedScripts.async),this.F("domReady"),await this.T(),await this.j(),await this.I(),this.F("windowLoad"),await this.A(),window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this.everythingLoaded=!0,this.lastTouchEnd&&await new Promise((t=>setTimeout(t,500-Date.now()+this.lastTouchEnd))),this.H(),this.F("all"),this.U(),this.W()}i(){this.CSPIssue=sessionStorage.getItem("rocketCSPIssue"),document.addEventListener("securitypolicyviolation",(t=>{this.CSPIssue||"script-src-elem"!==t.violatedDirective||"data"!==t.blockedURI||(this.CSPIssue=!0,sessionStorage.setItem("rocketCSPIssue",!0))}),{isRocket:!0})}o(){window.addEventListener("pageshow",(t=>{this.persisted=t.persisted,this.realWindowLoadedFired=!0}),{isRocket:!0}),window.addEventListener("pagehide",(()=>{this.onFirstUserAction=null}),{isRocket:!0})}h(){let t;function e(e){t=e}window.addEventListener("touchstart",e,{isRocket:!0}),window.addEventListener("touchend",(function i(o){Math.abs(o.changedTouches[0].pageX-t.changedTouches[0].pageX)<10&&Math.abs(o.changedTouches[0].pageY-t.changedTouches[0].pageY)<10&&o.timeStamp-t.timeStamp<200&&(o.target.dispatchEvent(new PointerEvent("click",{target:o.target,bubbles:!0,cancelable:!0,detail:1})),event.preventDefault(),window.removeEventListener("touchstart",e,{isRocket:!0}),window.removeEventListener("touchend",i,{isRocket:!0}))}),{isRocket:!0})}q(t){this.userActionTriggered||("mousemove"!==t.type||this.firstMousemoveIgnored?"keyup"===t.type||"mouseover"===t.type||"mouseout"===t.type||(this.userActionTriggered=!0,this.onFirstUserAction&&this.onFirstUserAction()):this.firstMousemoveIgnored=!0),"click"===t.type&&t.preventDefault(),this.savedUserEvents.length>0&&(t.stopPropagation(),t.stopImmediatePropagation()),"touchstart"===this.lastEvent&&"touchend"===t.type&&(this.lastTouchEnd=Date.now()),"click"===t.type&&(this.lastTouchEnd=0),this.lastEvent=t.type,this.savedUserEvents.push(t)}u(){this.savedUserEvents=[],this.userEventHandler=this.q.bind(this),this.userEvents.forEach((t=>window.addEventListener(t,this.userEventHandler,{passive:!1,isRocket:!0})))}U(){this.userEvents.forEach((t=>window.removeEventListener(t,this.userEventHandler,{passive:!1,isRocket:!0}))),this.savedUserEvents.forEach((t=>{t.target.dispatchEvent(new window[t.constructor.name](t.type,t))}))}m(){this.eventsMutationObserver=new MutationObserver((t=>{const e="return false";for(const i of t){if("attributes"===i.type){const t=i.target.getAttribute(i.attributeName);t&&t!==e&&(i.target.setAttribute("data-rocket-"+i.attributeName,t),i.target["rocket"+i.attributeName]=new Function("event",t),i.target.setAttribute(i.attributeName,e))}"childList"===i.type&&i.addedNodes.forEach((t=>{if(t.nodeType===Node.ELEMENT_NODE)for(const i of t.attributes)this.attributeEvents.includes(i.name)&&i.value&&""!==i.value&&(t.setAttribute("data-rocket-"+i.name,i.value),t["rocket"+i.name]=new Function("event",i.value),t.setAttribute(i.name,e))}))}})),this.eventsMutationObserver.observe(document,{subtree:!0,childList:!0,attributeFilter:this.attributeEvents})}H(){this.eventsMutationObserver.disconnect(),this.attributeEvents.forEach((t=>{document.querySelectorAll("[data-rocket-"+t+"]").forEach((e=>{e.setAttribute(t,e.getAttribute("data-rocket-"+t)),e.removeAttribute("data-rocket-"+t)}))}))}k(t){Object.defineProperty(HTMLElement.prototype,"onclick",{get(){return this.rocketonclick||null},set(e){this.rocketonclick=e,this.setAttribute(t.everythingLoaded?"onclick":"data-rocket-onclick","this.rocketonclick(event)")}})}S(t){function e(e,i){let o=e[i];e[i]=null,Object.defineProperty(e,i,{get:()=>o,set(s){t.everythingLoaded?o=s:e["rocket"+i]=o=s}})}e(document,"onreadystatechange"),e(window,"onload"),e(window,"onpageshow");try{Object.defineProperty(document,"readyState",{get:()=>t.rocketReadyState,set(e){t.rocketReadyState=e},configurable:!0}),document.readyState="loading"}catch(t){console.log("WPRocket DJE readyState conflict, bypassing")}}l(t){this.originalAddEventListener=EventTarget.prototype.addEventListener,this.originalRemoveEventListener=EventTarget.prototype.removeEventListener,this.savedEventListeners=[],EventTarget.prototype.addEventListener=function(e,i,o){o&&o.isRocket||!t.B(e,this)&&!t.userEvents.includes(e)||t.B(e,this)&&!t.userActionTriggered||e.startsWith("rocket-")||t.everythingLoaded?t.originalAddEventListener.call(this,e,i,o):t.savedEventListeners.push({target:this,remove:!1,type:e,func:i,options:o})},EventTarget.prototype.removeEventListener=function(e,i,o){o&&o.isRocket||!t.B(e,this)&&!t.userEvents.includes(e)||t.B(e,this)&&!t.userActionTriggered||e.startsWith("rocket-")||t.everythingLoaded?t.originalRemoveEventListener.call(this,e,i,o):t.savedEventListeners.push({target:this,remove:!0,type:e,func:i,options:o})}}F(t){"all"===t&&(EventTarget.prototype.addEventListener=this.originalAddEventListener,EventTarget.prototype.removeEventListener=this.originalRemoveEventListener),this.savedEventListeners=this.savedEventListeners.filter((e=>{let i=e.type,o=e.target||window;return"domReady"===t&&"DOMContentLoaded"!==i&&"readystatechange"!==i||("windowLoad"===t&&"load"!==i&&"readystatechange"!==i&&"pageshow"!==i||(this.B(i,o)&&(i="rocket-"+i),e.remove?o.removeEventListener(i,e.func,e.options):o.addEventListener(i,e.func,e.options),!1))}))}p(t){let e;function i(e){return t.everythingLoaded?e:e.split(" ").map((t=>"load"===t||t.startsWith("load.")?"rocket-jquery-load":t)).join(" ")}function o(o){function s(e){const s=o.fn[e];o.fn[e]=o.fn.init.prototype[e]=function(){return this[0]===window&&t.userActionTriggered&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=i(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{const e=arguments[0][t];delete arguments[0][t],arguments[0][i(t)]=e}))),s.apply(this,arguments),this}}if(o&&o.fn&&!t.allJQueries.includes(o)){const e={DOMContentLoaded:[],"rocket-DOMContentLoaded":[]};for(const t in e)document.addEventListener(t,(()=>{e[t].forEach((t=>t()))}),{isRocket:!0});o.fn.ready=o.fn.init.prototype.ready=function(i){function s(){parseInt(o.fn.jquery)>2?setTimeout((()=>i.bind(document)(o))):i.bind(document)(o)}return t.realDomReadyFired?!t.userActionTriggered||t.fauxDomReadyFired?s():e["rocket-DOMContentLoaded"].push(s):e.DOMContentLoaded.push(s),o([])},s("on"),s("one"),s("off"),t.allJQueries.push(o)}e=o}t.allJQueries=[],o(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){o(t)}})}P(){const t=new Map;document.write=document.writeln=function(e){const i=document.currentScript,o=document.createRange(),s=i.parentElement;let n=t.get(i);void 0===n&&(n=i.nextSibling,t.set(i,n));const c=document.createDocumentFragment();o.setStart(c,0),c.appendChild(o.createContextualFragment(e)),s.insertBefore(c,n)}}async R(){return new Promise((t=>{this.userActionTriggered?t():this.onFirstUserAction=t}))}async L(){return new Promise((t=>{document.addEventListener("DOMContentLoaded",(()=>{this.realDomReadyFired=!0,t()}),{isRocket:!0})}))}async I(){return this.realWindowLoadedFired?Promise.resolve():new Promise((t=>{window.addEventListener("load",t,{isRocket:!0})}))}M(){this.pendingScripts=[];this.scriptsMutationObserver=new MutationObserver((t=>{for(const e of t)e.addedNodes.forEach((t=>{"SCRIPT"!==t.tagName||t.noModule||t.isWPRocket||this.pendingScripts.push({script:t,promise:new Promise((e=>{const i=()=>{const i=this.pendingScripts.findIndex((e=>e.script===t));i>=0&&this.pendingScripts.splice(i,1),e()};t.addEventListener("load",i,{isRocket:!0}),t.addEventListener("error",i,{isRocket:!0}),setTimeout(i,1e3)}))})}))})),this.scriptsMutationObserver.observe(document,{childList:!0,subtree:!0})}async j(){await this.J(),this.pendingScripts.length?(await this.pendingScripts[0].promise,await this.j()):this.scriptsMutationObserver.disconnect()}D(){this.delayedScripts={normal:[],async:[],defer:[]},document.querySelectorAll("script[type$=rocketlazyloadscript]").forEach((t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)}))}async _(){await this.L();let t=[];document.querySelectorAll("script[type$=rocketlazyloadscript][data-rocket-src]").forEach((e=>{let i=e.getAttribute("data-rocket-src");if(i&&!i.startsWith("data:")){i.startsWith("//")&&(i=location.protocol+i);try{const o=new URL(i).origin;o!==location.origin&&t.push({src:o,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}catch(t){}}})),t=[...new Map(t.map((t=>[JSON.stringify(t),t]))).values()],this.N(t,"preconnect")}async $(t){if(await this.G(),!0!==t.noModule||!("noModule"in HTMLScriptElement.prototype))return new Promise((e=>{let i;function o(){(i||t).setAttribute("data-rocket-status","executed"),e()}try{if(navigator.userAgent.includes("Firefox/")||""===navigator.vendor||this.CSPIssue)i=document.createElement("script"),[...t.attributes].forEach((t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),i.setAttribute(e,t.nodeValue))})),t.text&&(i.text=t.text),t.nonce&&(i.nonce=t.nonce),i.hasAttribute("src")?(i.addEventListener("load",o,{isRocket:!0}),i.addEventListener("error",(()=>{i.setAttribute("data-rocket-status","failed-network"),e()}),{isRocket:!0}),setTimeout((()=>{i.isConnected||e()}),1)):(i.text=t.text,o()),i.isWPRocket=!0,t.parentNode.replaceChild(i,t);else{const i=t.getAttribute("data-rocket-type"),s=t.getAttribute("data-rocket-src");i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",o,{isRocket:!0}),t.addEventListener("error",(i=>{this.CSPIssue&&i.target.src.startsWith("data:")?(console.log("WPRocket: CSP fallback activated"),t.removeAttribute("src"),this.$(t).then(e)):(t.setAttribute("data-rocket-status","failed-network"),e())}),{isRocket:!0}),s?(t.fetchPriority="high",t.removeAttribute("data-rocket-src"),t.src=s):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}}catch(i){t.setAttribute("data-rocket-status","failed-transform"),e()}}));t.setAttribute("data-rocket-status","skipped")}async C(t){const e=t.shift();return e?(e.isConnected&&await this.$(e),this.C(t)):Promise.resolve()}O(){this.N([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}N(t,e){this.trash=this.trash||[];let i=!0;var o=document.createDocumentFragment();t.forEach((t=>{const s=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(s&&!s.startsWith("data:")){const n=document.createElement("link");n.href=s,n.rel=e,"preconnect"!==e&&(n.as="script",n.fetchPriority=i?"high":"low"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),t.nonce&&(n.nonce=t.nonce),o.appendChild(n),this.trash.push(n),i=!1}})),document.head.appendChild(o)}W(){this.trash.forEach((t=>t.remove()))}async T(){try{document.readyState="interactive"}catch(t){}this.fauxDomReadyFired=!0;try{await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this.G(),window.dispatchEvent(new Event("rocket-DOMContentLoaded"))}catch(t){console.error(t)}}async A(){try{document.readyState="complete"}catch(t){}try{await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),window.dispatchEvent(new Event("rocket-load")),await this.G(),window.rocketonload&&window.rocketonload(),await this.G(),this.allJQueries.forEach((t=>t(window).trigger("rocket-jquery-load"))),await this.G();const t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this.G(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}catch(t){console.error(t)}}async G(){Date.now()-this.lastBreath>45&&(await this.J(),this.lastBreath=Date.now())}async J(){return document.hidden?new Promise((t=>setTimeout(t))):new Promise((t=>requestAnimationFrame(t)))}B(t,e){return e===document&&"readystatechange"===t||(e===document&&"DOMContentLoaded"===t||(e===window&&"DOMContentLoaded"===t||(e===window&&"load"===t||e===window&&"pageshow"===t)))}static run(){(new RocketLazyLoadScripts).t()}}RocketLazyLoadScripts.run()})();</script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
<script src="data:text/javascript;base64,d2luZG93Ll93Y2EgPSB3aW5kb3cuX3djYSB8fCBbXTs=" data-rocket-status="executed">window._wca = window._wca || [];</script>

    <!-- This site is optimized with the Yoast SEO plugin v23.5 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Ayan's Academy</title>
<link data-rocket-preload="" as="style" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/css" rel="preload">
<link href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/css" media="all" onload="this.media=&#39;all&#39;" rel="stylesheet">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CAbril%20Fatface%3Aregular&#038;subset=latin&#038;display=swap"></noscript><link rel="preload" data-rocket-preload="" as="image" href="<?php echo e($bannerImage); ?>" fetchpriority="high">
    <meta name="description" content="Ayan's Academy">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ayan's Academy">
    <meta property="og:description" content="Ayan's Academy">
    <meta property="og:site_name" content="Ayan's Academy">
    <meta property="article:modified_time" content="2025-01-04T04:59:17+00:00">
    <meta property="og:image" content="<?php echo e($bannerImage); ?>">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="854">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary_large_image">
    <!-- / Yoast SEO plugin. -->


<link rel="dns-prefetch" href="https://stats.wp.com/">
<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
<link rel="dns-prefetch" href="https://i0.wp.com/">
<link rel="dns-prefetch" href="https://c0.wp.com/">
<link rel="stylesheet" id="masterstudy-bootstrap-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/bootstrap.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="masterstudy-bootstrap-custom-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ms-bootstrap-custom.css" type="text/css" media="all">
<style id="wp-emoji-styles-inline-css" type="text/css">

    img.wp-smiley, img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<link data-minify="1" rel="stylesheet" id="wp-block-library-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style.min.css" type="text/css" media="all">
<style id="wp-block-library-inline-css" type="text/css">
.has-text-align-justify{text-align:justify;}
</style>
<link data-minify="1" rel="stylesheet" id="mediaelement-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/mediaelementplayer-legacy.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="wp-mediaelement-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wp-mediaelement.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="wc-blocks-vendors-style-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wc-blocks-vendors-style.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="wc-blocks-style-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wc-blocks-style.css" type="text/css" media="all">
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link data-minify="1" rel="stylesheet" id="stm_zoom_main-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/main.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="formcraft-common-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/formcraft-common.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="formcraft-form-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/form.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="linear-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/linear.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="linear-icons-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/linear-icons.css" type="text/css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link data-minify="1" rel="stylesheet" id="ms-font-icomoon-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/icomoon.fonts.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm_lms_icons-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="video.js-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/video-js.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="masterstudy-lms-learning-management-system-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/stm_lms.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm_lazyload_init-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/lazyload.css" type="text/css" media="all">
<link rel="stylesheet" id="wpmenucart-icons-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wpmenucart-icons.min.css" type="text/css" media="all">
<style id="wpmenucart-icons-inline-css" type="text/css">
@font-face{font-family:WPMenuCart;src:url(https://pecpte.com/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.eot);src:url(https://pecpte.com/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.eot?#iefix) format('embedded-opentype'),url(https://pecpte.com/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.woff2) format('woff2'),url(https://pecpte.com/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.woff) format('woff'),url(https://pecpte.com/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.ttf) format('truetype'),url(https://pecpte.com/wp-content/plugins/woocommerce-menu-bar-cart/assets/fonts/WPMenuCart.svg#WPMenuCart) format('svg');font-weight:400;font-style:normal;font-display:swap}
</style>
<link rel="stylesheet" id="wpmenucart-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wpmenucart-main.min.css" type="text/css" media="all">
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link data-minify="1" rel="stylesheet" id="font-icomoon-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/icomoon(1).fonts.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="font-icomoon-rtl-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style(1).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="select2-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/select2.css" type="text/css" media="all">
<link rel="stylesheet" id="fancybox-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.fancybox.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="animate-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/animate.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm_theme_styles-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/styles.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-stm_layout_styles-classic_lms-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/classic_lms.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm_theme_styles_animation-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/animation.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-headers-header_default-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/header_default.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-headers_transparent-header_default_transparent-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/header_default_transparent.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm_theme_style-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style(2).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm_theme_custom_styles-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/custom_styles.css" type="text/css" media="all">
<style id="stm_theme_custom_styles-inline-css" type="text/css">
/*
Checkout page accept terms and condition checkbox broken => fixed
*/
@font-face {
  font-display: swap!important;
}
input#terms {
    width: unset;
}
body.home {
    padding-bottom:0!important;
    font-display: swap!important;
}
body.home #footer{
    position: static!important;
}
.pecpte-hero-area{
    background-repeat: no-repeat!important;
    background-size: cover!important;
}
.logo-unit img.img-responsive{
    widht: 250px!important!important;
    height: auto!important;
}
.pull-left img{
    height: 16px;
    width: 16px;
}
..stm_lms_lazy_image__lazyloaded img {
    opacity: 1;
    visibility: visible;
}
.stm_lms_lazy_image img.lazyloaded {
    opacity: 1!important;
    visibility: visible!important;
}
@media only screen and (max-width: 768px) {
  .logo-unit img.img-responsive{
    widht: 200px!important;
  }
  .block-scroll{
    display: flex;
    overflow: scroll;
  }
  .pecpte-heading{
    line-height: 50px!important;
  }
  .pecpte-heading-span1{
    font-size: 35px!important;
  }
  .pecpte-heading-span2{
    font-size: 25px!important;
  }
}/* Checkout page accept terms and condition checkbox broken => fixed */ @font-face { font-display: swap!important; } input#terms { width: unset; } body.home { padding-bottom:0!important; font-display: swap!important; } body.home #footer{ position: static!important; } .pecpte-hero-area{ background-repeat: no-repeat!important; background-size: cover!important; } .logo-unit img.img-responsive{ widht: 250px!important!important; height: auto!important; } .pull-left img{ height: 16px; width: 16px; } ..stm_lms_lazy_image__lazyloaded img { opacity: 1; visibility: visible; } .stm_lms_lazy_image img.lazyloaded { opacity: 1!important; visibility: visible!important; } @media only screen and (max-width: 768px) { .logo-unit img.img-responsive{ widht: 200px!important; } .block-scroll{ display: flex; overflow: scroll; } .pecpte-heading{ line-height: 50px!important; } .pecpte-heading-span1{ font-size: 35px!important; } .pecpte-heading-span2{ font-size: 25px!important; } }
</style>
<link data-minify="1" rel="stylesheet" id="language_center-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style(3).css" type="text/css" media="all">
<link rel="stylesheet" id="joinchat-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/joinchat.min.css" type="text/css" media="all">
<style id="joinchat-inline-css" type="text/css">
.joinchat{ --red:37; --green:211; --blue:102; }
</style>
<link data-minify="1" rel="stylesheet" id="js_composer_front-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/js_composer.min.css" type="text/css" media="all">
<link rel="stylesheet" id="video-conferencing-with-zoom-api-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style(1).min.css" type="text/css" media="all">

<link data-minify="1" rel="stylesheet" id="jetpack_css-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jetpack.css" type="text/css" media="all">
<script type="text/javascript" id="jquery-core-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery-migrate-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery-migrate.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vue.js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/vue.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vue-resource.js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/vue-resource.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vue2-datepicker-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/vue2-datepicker.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="stm-lms-lms-js-extra">
/* <![CDATA[ */
var stm_lms_vars = {"symbol":"TK","position":"left","currency_thousands":",","wp_rest_nonce":"17d31b3695"};
/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="stm-lms-lms-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/lms.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/lazysizes.min.js.download" id="lazysizes.js-js" data-rocket-defer="" defer=""></script>
<script type="text/javascript" data-minify="1" id="stm_lms_lazysizes-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/stm_lms_lazyload.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="wpmenucart-ajax-assist-js-extra">
/* <![CDATA[ */
var wpmenucart_ajax_assist = {"shop_plugin":"woocommerce","always_display":""};
/* ]]> */
</script>
<script type="text/javascript" id="wpmenucart-ajax-assist-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wpmenucart-ajax-assist.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery-blockui-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.blockUI.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/pecpte.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="wc-add-to-cart-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/add-to-cart.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="vc_woocommerce-add-to-cart-js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/woocommerce-add-to-cart.js.download" data-rocket-status="executed"></script>
<script defer="" type="text/javascript" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/s-202611.js.download" id="woocommerce-analytics-js"></script>
<meta name="generator" content="WordPress 6.4.8">
<meta name="generator" content="WooCommerce 6.2.3">
        <script src="data:text/javascript;base64,CiAgICAgICAgICAgIHZhciBkYXlzU3RyID0gIkRheXMiOwogICAgICAgICAgICB2YXIgaG91cnNTdHIgPSAiSG91cnMiOwogICAgICAgICAgICB2YXIgbWludXRlc1N0ciA9ICJNaW51dGVzIjsKICAgICAgICAgICAgdmFyIHNlY29uZHNTdHIgPSAiU2Vjb25kcyI7CiAgICAgICAg" data-rocket-status="executed">
            var daysStr = "Days";
            var hoursStr = "Hours";
            var minutesStr = "Minutes";
            var secondsStr = "Seconds";
        </script>
            <script src="data:text/javascript;base64,CiAgICAgICAgdmFyIHN0bV9sbXNfcHJvX25vbmNlcyA9IHsic3RtX2xtc19wcm9faW5zdGFsbF9iYXNlIjoiMjY3Yzg1YmM1NyIsInN0bV9sbXNfcHJvX3NlYXJjaF9jb3Vyc2VzIjoiOTU4MGMyMDQ1ZSIsInN0bV9sbXNfcHJvX3VkZW15X2ltcG9ydF9jb3Vyc2VzIjoiZDZmMmI1ZjZmMyIsInN0bV9sbXNfcHJvX3VkZW15X3B1Ymxpc2hfY291cnNlIjoiYTRiYTk3YjY1MSIsInN0bV9sbXNfcHJvX3VkZW15X2ltcG9ydF9jdXJyaWN1bHVtIjoiYzEzYTBlYTJiYSIsInN0bV9sbXNfcHJvX3NhdmVfYWRkb25zIjoiNGYxMDNhNDhhNyIsInN0bV9sbXNfY3JlYXRlX2Fubm91bmNlbWVudCI6ImE5NjczNmQ2YTgiLCJzdG1fbG1zX3Byb191cGxvYWRfaW1hZ2UiOiJmYzI5ODg0MDJhIiwic3RtX2xtc19wcm9fZ2V0X2ltYWdlX2RhdGEiOiIyYmZmNWU4OTczIiwic3RtX2xtc19wcm9fc2F2ZV9xdWl6IjoiMzg2NmJkOGE5MSIsInN0bV9sbXNfcHJvX3NhdmVfbGVzc29uIjoiYWEyYWEwMDE1MCIsInN0bV9sbXNfcHJvX3NhdmVfZnJvbnRfY291cnNlIjoiZGExNjhmZTZkNyIsInN0bV9sbXNfZ2V0X2NvdXJzZV9pbmZvIjoiMWM4NjhlMTU5MCIsInN0bV9sbXNfZ2V0X2NvdXJzZV9zdHVkZW50cyI6ImM0YzRiNjJkM2MifTsKICAgIA==" data-rocket-status="executed">
        var stm_lms_pro_nonces = {"stm_lms_pro_install_base":"267c85bc57","stm_lms_pro_search_courses":"9580c2045e","stm_lms_pro_udemy_import_courses":"d6f2b5f6f3","stm_lms_pro_udemy_publish_course":"a4ba97b651","stm_lms_pro_udemy_import_curriculum":"c13a0ea2ba","stm_lms_pro_save_addons":"4f103a48a7","stm_lms_create_announcement":"a96736d6a8","stm_lms_pro_upload_image":"fc2988402a","stm_lms_pro_get_image_data":"2bff5e8973","stm_lms_pro_save_quiz":"3866bd8a91","stm_lms_pro_save_lesson":"aa2aa00150","stm_lms_pro_save_front_course":"da168fe6d7","stm_lms_get_course_info":"1c868e1590","stm_lms_get_course_students":"c4c4b62d3c"};


    <style>
        .vue_is_disabled {
            display: none;
        }
    </style>
        <script src="data:text/javascript;base64,CiAgICAgICAgdmFyIHN0bV9sbXNfbm9uY2VzID0geyJsb2FkX21vZGFsIjoiNGNiZGU3Y2IyMCIsImxvYWRfY29udGVudCI6ImFlZTNkNGNiN2EiLCJzdGFydF9xdWl6IjoiOTU5M2RkMjNmNCIsInVzZXJfYW5zd2VycyI6ImIwN2ZmMGI5MjUiLCJnZXRfb3JkZXJfaW5mbyI6IjM2YjdhNDM4NDciLCJ1c2VyX29yZGVycyI6Ijg1MDM4NGFiZGIiLCJzdG1fbG1zX2dldF9pbnN0cnVjdG9yX2NvdXJzZXMiOiI0NmE3YjE3YThkIiwic3RtX2xtc19hZGRfY29tbWVudCI6ImYzYzA3ZjExMzAiLCJzdG1fbG1zX2dldF9jb21tZW50cyI6IjQxYTU4ZDhkYzkiLCJzdG1fbG1zX2xvZ2luIjoiNWYyYTQ5M2FmYyIsInN0bV9sbXNfcmVnaXN0ZXIiOiJlMzI5ODM1OTNkIiwic3RtX2xtc19iZWNvbWVfaW5zdHJ1Y3RvciI6ImMyYmNhMzk0NjEiLCJzdG1fbG1zX2VudGVycHJpc2UiOiI3YzQwNmFiMzczIiwic3RtX2xtc19nZXRfdXNlcl9jb3Vyc2VzIjoiZDhkNDA5MGViYiIsInN0bV9sbXNfZ2V0X3VzZXJfcXVpenplcyI6ImIwMTVkNDVjYzQiLCJzdG1fbG1zX3dpc2hsaXN0IjoiZjA3NzllZjZlNCIsInN0bV9sbXNfc2F2ZV91c2VyX2luZm8iOiIxM2U1ZTIwMWUyIiwic3RtX2xtc19sb3N0X3Bhc3N3b3JkIjoiMjYwODljMTE2YSIsInN0bV9sbXNfY2hhbmdlX2F2YXRhciI6IjRmOTA4OGI1MzkiLCJzdG1fbG1zX2RlbGV0ZV9hdmF0YXIiOiJmNTU0YWI3NWJmIiwic3RtX2xtc19jb21wbGV0ZV9sZXNzb24iOiJlZTdkMGY4Y2FmIiwic3RtX2xtc191c2VfbWVtYmVyc2hpcCI6ImIxZjRjYTBmOTUiLCJzdG1fbG1zX2NoYW5nZV9mZWF0dXJlZCI6ImQ4MTQwYjkwM2YiLCJzdG1fbG1zX2RlbGV0ZV9jb3Vyc2Vfc3Vic2NyaXB0aW9uIjoiZGVhZjY4NDlhZSIsInN0bV9sbXNfZ2V0X3Jldmlld3MiOiI4OTc4ZTBlMDZlIiwic3RtX2xtc19hZGRfcmV2aWV3IjoiZTBlNmEyYjIzYyIsInN0bV9sbXNfYWRkX3RvX2NhcnQiOiJiMTc1YjE1NzkxIiwic3RtX2xtc19kZWxldGVfZnJvbV9jYXJ0IjoiYjExMmQ2M2Y4MyIsInN0bV9sbXNfcHVyY2hhc2UiOiI5MzliNGExZGQ4Iiwic3RtX2xtc19zZW5kX21lc3NhZ2UiOiJjNmY1NmM4MWIzIiwic3RtX2xtc19nZXRfdXNlcl9jb252ZXJzYXRpb25zIjoiOTJjZGEwYjJlMCIsInN0bV9sbXNfZ2V0X3VzZXJfbWVzc2FnZXMiOiIwYjYwYzYxMTBkIiwic3RtX2N1cnJpY3VsdW0iOiI2ZjY4NTNiZTU0Iiwic3RtX21hbmFnZV9wb3N0cyI6IjdjOTIyOTA2MTYiLCJzdG1fY3VycmljdWx1bV9jcmVhdGVfaXRlbSI6ImIyOTZhNGM2MTQiLCJzdG1fY3VycmljdWx1bV9nZXRfaXRlbSI6ImYwYjc4ZmE2NDIiLCJzdG1fc2F2ZV9xdWVzdGlvbnMiOiIwMzU5NTY0NjdjIiwic3RtX3NhdmVfdGl0bGUiOiI2YzMyM2Q3MjY1Iiwid3BjZnRvX3NhdmVfc2V0dGluZ3MiOiI2YzJmYmY1MjA3Iiwic3RtX2xtc190YWJsZXNfdXBkYXRlIjoiN2IwMmZmY2ExMSIsInN0bV9sbXNfZ2V0X2VudGVycHJpc2VfZ3JvdXBzIjoiNDk3NWFkZThiZSIsInN0bV9sbXNfZ2V0X2VudGVycHJpc2VfZ3JvdXAiOiIyNWFkOTFmZjc4Iiwic3RtX2xtc19hZGRfZW50ZXJwcmlzZV9ncm91cCI6IjkwZGE5MmJkMjYiLCJzdG1fbG1zX2RlbGV0ZV9lbnRlcnByaXNlX2dyb3VwIjoiYjY3MTE0YzE3NyIsInN0bV9sbXNfYWRkX3RvX2NhcnRfZW50ZXJwcmlzZSI6IjIzMzhmZTFlNmUiLCJzdG1fbG1zX2dldF91c2VyX2VudF9jb3Vyc2VzIjoiYzcxMzU1YTI1OSIsInN0bV9sbXNfZGVsZXRlX3VzZXJfZW50X2NvdXJzZXMiOiIzYTkzZDE4MmRhIiwic3RtX2xtc19hZGRfdXNlcl9lbnRfY291cnNlcyI6ImQ2NmE4MTFiMmYiLCJzdG1fbG1zX2NoYW5nZV9lbnRfZ3JvdXBfYWRtaW4iOiIxODg5OTc1OGIyIiwic3RtX2xtc19kZWxldGVfdXNlcl9mcm9tX2dyb3VwIjoiZTc1Yzc0ZWEyYSIsInN0bV9sbXNfaW1wb3J0X2dyb3VwcyI6ImY2MmVlNzBlZGQiLCJzdG1fbG1zX3VwbG9hZF9maWxlX2Fzc2lnbm1lbnQiOiI0MWU1NjdkNjljIiwic3RtX2xtc19kZWxldGVfYXNzaWdubWVudF9maWxlIjoiMmQzMmFkNGFkOSIsInN0bV9sbXNfc2F2ZV9kcmFmdF9jb250ZW50IjoiOWNhODI2MzViNyIsInN0bV9sbXNfYWNjZXB0X2RyYWZ0X2Fzc2lnbm1lbnQiOiJmM2E0YjEyMDVlIiwic3RtX2xtc19nZXRfYXNzaWdubWVudF9kYXRhIjoiN2I3YjFkMjQxOCIsInN0bV9sbXNfZ2V0X2luc3RydWN0b3JfYXNzaW5nbWVudHMiOiIwMGE5Yjc3NjBiIiwic3RtX2xtc19nZXRfdXNlcl9hc3NpbmdtZW50cyI6IjE4OWNiZmM2MDciLCJzdG1fbG1zX2VkaXRfdXNlcl9hbnN3ZXIiOiI3YTg4ZjUwNzM5Iiwic3RtX2xtc19nZXRfdXNlcl9wb2ludHNfaGlzdG9yeSI6IjM4ZmJiOWU5OTciLCJzdG1fbG1zX2J1eV9mb3JfcG9pbnRzIjoiOWY3YjIzYjVlYyIsInN0bV9sbXNfZ2V0X3BvaW50X3VzZXJzIjoiZDU4MjNjODFlZiIsInN0bV9sbXNfZ2V0X3VzZXJfcG9pbnRzX2hpc3RvcnlfYWRtaW4iOiI2MzA2YzE2ZjA2Iiwic3RtX2xtc19jaGFuZ2VfcG9pbnRzIjoiMWUxMjgzZGNjZSIsInN0bV9sbXNfZGVsZXRlX3BvaW50cyI6IjJiYzg0OWY3ZDUiLCJzdG1fbG1zX2dldF91c2VyX2J1bmRsZXMiOiI5MzlkMzZkOWE5Iiwic3RtX2xtc19jaGFuZ2VfYnVuZGxlX3N0YXR1cyI6ImZjYTdkNjFiNTMiLCJzdG1fbG1zX2RlbGV0ZV9idW5kbGUiOiI5YjMwNDJjZGFiIiwic3RtX2xtc19nZXRfY29fY291cnNlcyI6IjhiYmEyNTNmMmMiLCJzdG1fbG1zX2NoZWNrX2NlcnRpZmljYXRlX2NvZGUiOiJlOTE4YmU5NWUzIiwic3RtX2xtc19nZXRfZ29vZ2xlX2NsYXNzcm9vbV9jb3Vyc2VzIjoiMjU0ODFmZWJjZiIsInN0bV9sbXNfZ2V0X2dvb2dsZV9jbGFzc3Jvb21fY291cnNlIjoiZjIwODVjNmU4ZiIsInN0bV9sbXNfZ2V0X2dvb2dsZV9jbGFzc3Jvb21fcHVibGlzaF9jb3Vyc2UiOiJhMmQyNDc3OTljIiwic3RtX2xtc19nZXRfZ19jX2dldF9hcmNoaXZlX3BhZ2UiOiJhYTVkMjhlNTE1IiwiaW5zdGFsbF96b29tX2FkZG9uIjoiMmNlZTViOTM0ZSIsInN0bV9sbXNfZ2V0X2NvdXJzZV9jb29raWVfcmVkaXJlY3QiOiI0ZjM4ZjM4YTBjIiwic3RtX2dldF9jZXJ0aWZpY2F0ZXMiOiJkYjY4NTE2MDc1Iiwic3RtX2dldF9jZXJ0aWZpY2F0ZV9maWVsZHMiOiJiYTU3MzQzOTYwIiwic3RtX3NhdmVfY2VydGlmaWNhdGUiOiI2MzE5ZDJhOWZkIiwic3RtX2dldF9jZXJ0aWZpY2F0ZV9jYXRlZ29yaWVzIjoiNWRmMmQ4NTQwNSIsInN0bV9nZXRfY2VydGlmaWNhdGUiOiJlMDc2Zjg5YTgzIiwic3RtX2RlbGV0ZV9jZXJ0aWZpY2F0ZSI6IjUwYTI3MDU5NTkiLCJzdG1fbG1zX2dldF91c2Vyc19zdWJtaXNzaW9ucyI6IjM1OTBjMDIyYjEiLCJzdG1fbG1zX3VwZGF0ZV91c2VyX3N0YXR1cyI6IjRjY2ZkYzVjNjMiLCJzdG1fbG1zX2hpZGVfYmVjb21lX2luc3RydWN0b3Jfbm90aWNlIjoiOGRlN2E4ZWI0ZSIsInN0bV9sbXNfYmFuX3VzZXIiOiJkMzY3ZTQyYzFhIiwic3RtX2xtc19zYXZlX2Zvcm1zIjoiNmIyMDdkOTFjNiIsInN0bV9sbXNfZ2V0X2Zvcm1zIjoiZTk2M2E5ZmI2NCIsInN0bV9sbXNfdXBsb2FkX2Zvcm1fZmlsZSI6IjgyYjJiMDM0NWUiLCJzdG1fbG1zX2Rhc2hib2FyZF9nZXRfY291cnNlX3N0dWRlbnRzIjoiMjVkZjRjODMwNiIsInN0bV9sbXNfZGFzaGJvYXJkX2RlbGV0ZV91c2VyX2Zyb21fY291cnNlIjoiZjk5NTA3ZjliMCIsInN0bV9sbXNfZGFzaGJvYXJkX2FkZF91c2VyX3RvX2NvdXJzZSI6ImNhMjU3OGUxN2YiLCJzdG1fbG1zX2FkZF90b19jYXJ0X2d1ZXN0IjoiODYzMzExMDc3MSIsInN0bV9sbXNfZmFzdF9sb2dpbiI6IjMyMjY0MDQ4MzIiLCJzdG1fbG1zX2Zhc3RfcmVnaXN0ZXIiOiI0ZGE2YzlhNGQwIiwic3RtX2xtc19jaGFuZ2VfbG1zX2F1dGhvciI6IjM0YTYxY2NhMzQiLCJzdG1fbG1zX2FkZF9zdHVkZW50X21hbnVhbGx5IjoiMTNkMGExNWVmOSIsInN0bV9sbXNfY2hhbmdlX2NvdXJzZV9zdGF0dXMiOiJkOGZhZGFlN2Y1Iiwic3RtX2xtc190b3RhbF9wcm9ncmVzcyI6IjE2YzMzNjJhZDEiLCJzdG1fbG1zX2FkZF9oNXBfcmVzdWx0IjoiODMwNjc5ODM5YyIsInN0bV9sbXNfdG9nZ2xlX2J1eWluZyI6ImM4NWE0ZGMzMDIiLCJzdG1fbG1zX2xvZ291dCI6ImU0NTBhMGNlMjMiLCJzdG1fbG1zX3Jlc3RvcmVfcGFzc3dvcmQiOiI3YWYxMjcxMDUyIiwic3RtX2xtc19oaWRlX2Fubm91bmNlbWVudCI6IjdlMGMwOWRmY2IiLCJzdG1fbG1zX2dldF9jdXJyaWN1bHVtX3YyIjoiNmZmZDU5NGZkOCIsInN0bV9sbXNfZGFzaGJvYXJkX2dldF9zdHVkZW50X3Byb2dyZXNzIjoiZDZjOTUyYzMzZiIsInN0bV9sbXNfZGFzaGJvYXJkX3NldF9zdHVkZW50X2l0ZW1fcHJvZ3Jlc3MiOiIzYjViODRmZDRkIiwic3RtX2xtc19kYXNoYm9hcmRfcmVzZXRfc3R1ZGVudF9wcm9ncmVzcyI6ImY5YjgyMmFhYTQiLCJzdG1fbG1zX2Rhc2hib2FyZF9nZXRfY291cnNlc19saXN0IjoiZjMxNzJiNTQ3YyIsInN0bV9sbXNfZGFzaGJvYXJkX2dldF9zdHVkZW50X2Fzc2lnbm1lbnRzIjoiMjFhODQ0MjFlZSIsInN0bV9sbXNfZGFzaGJvYXJkX2dldF9zdHVkZW50X3F1aXp6ZXMiOiI1N2I3ZDY3NjVlIiwic3RtX2xtc19kYXNoYm9hcmRfZ2V0X3N0dWRlbnRfcXVpeiI6ImQ5ODgxNmZjYjgiLCJzdG1fbG1zX3dpemFyZF9zYXZlX3NldHRpbmdzIjoiMmQ0ZmY1OGU0MSIsInN0bV9sbXNfd2l6YXJkX3NhdmVfYnVzaW5lc3NfdHlwZSI6IjYyNWU1MGUxN2YiLCJzdG1fbG1zX2dldF9lbnJvbGxlZF9hc3NpbmdtZW50cyI6IjhlYzc1NzZkNzQifTsKICAgIA==" data-rocket-status="executed">
        var stm_lms_nonces = {"load_modal":"4cbde7cb20","load_content":"aee3d4cb7a","start_quiz":"9593dd23f4","user_answers":"b07ff0b925","get_order_info":"36b7a43847","user_orders":"850384abdb","stm_lms_get_instructor_courses":"46a7b17a8d","stm_lms_add_comment":"f3c07f1130","stm_lms_get_comments":"41a58d8dc9","stm_lms_login":"5f2a493afc","stm_lms_register":"e32983593d","stm_lms_become_instructor":"c2bca39461","stm_lms_enterprise":"7c406ab373","stm_lms_get_user_courses":"d8d4090ebb","stm_lms_get_user_quizzes":"b015d45cc4","stm_lms_wishlist":"f0779ef6e4","stm_lms_save_user_info":"13e5e201e2","stm_lms_lost_password":"26089c116a","stm_lms_change_avatar":"4f9088b539","stm_lms_delete_avatar":"f554ab75bf","stm_lms_complete_lesson":"ee7d0f8caf","stm_lms_use_membership":"b1f4ca0f95","stm_lms_change_featured":"d8140b903f","stm_lms_delete_course_subscription":"deaf6849ae","stm_lms_get_reviews":"8978e0e06e","stm_lms_add_review":"e0e6a2b23c","stm_lms_add_to_cart":"b175b15791","stm_lms_delete_from_cart":"b112d63f83","stm_lms_purchase":"939b4a1dd8","stm_lms_send_message":"c6f56c81b3","stm_lms_get_user_conversations":"92cda0b2e0","stm_lms_get_user_messages":"0b60c6110d","stm_curriculum":"6f6853be54","stm_manage_posts":"7c92290616","stm_curriculum_create_item":"b296a4c614","stm_curriculum_get_item":"f0b78fa642","stm_save_questions":"035956467c","stm_save_title":"6c323d7265","wpcfto_save_settings":"6c2fbf5207","stm_lms_tables_update":"7b02ffca11","stm_lms_get_enterprise_groups":"4975ade8be","stm_lms_get_enterprise_group":"25ad91ff78","stm_lms_add_enterprise_group":"90da92bd26","stm_lms_delete_enterprise_group":"b67114c177","stm_lms_add_to_cart_enterprise":"2338fe1e6e","stm_lms_get_user_ent_courses":"c71355a259","stm_lms_delete_user_ent_courses":"3a93d182da","stm_lms_add_user_ent_courses":"d66a811b2f","stm_lms_change_ent_group_admin":"18899758b2","stm_lms_delete_user_from_group":"e75c74ea2a","stm_lms_import_groups":"f62ee70edd","stm_lms_upload_file_assignment":"41e567d69c","stm_lms_delete_assignment_file":"2d32ad4ad9","stm_lms_save_draft_content":"9ca82635b7","stm_lms_accept_draft_assignment":"f3a4b1205e","stm_lms_get_assignment_data":"7b7b1d2418","stm_lms_get_instructor_assingments":"00a9b7760b","stm_lms_get_user_assingments":"189cbfc607","stm_lms_edit_user_answer":"7a88f50739","stm_lms_get_user_points_history":"38fbb9e997","stm_lms_buy_for_points":"9f7b23b5ec","stm_lms_get_point_users":"d5823c81ef","stm_lms_get_user_points_history_admin":"6306c16f06","stm_lms_change_points":"1e1283dcce","stm_lms_delete_points":"2bc849f7d5","stm_lms_get_user_bundles":"939d36d9a9","stm_lms_change_bundle_status":"fca7d61b53","stm_lms_delete_bundle":"9b3042cdab","stm_lms_get_co_courses":"8bba253f2c","stm_lms_check_certificate_code":"e918be95e3","stm_lms_get_google_classroom_courses":"25481febcf","stm_lms_get_google_classroom_course":"f2085c6e8f","stm_lms_get_google_classroom_publish_course":"a2d247799c","stm_lms_get_g_c_get_archive_page":"aa5d28e515","install_zoom_addon":"2cee5b934e","stm_lms_get_course_cookie_redirect":"4f38f38a0c","stm_get_certificates":"db68516075","stm_get_certificate_fields":"ba57343960","stm_save_certificate":"6319d2a9fd","stm_get_certificate_categories":"5df2d85405","stm_get_certificate":"e076f89a83","stm_delete_certificate":"50a2705959","stm_lms_get_users_submissions":"3590c022b1","stm_lms_update_user_status":"4ccfdc5c63","stm_lms_hide_become_instructor_notice":"8de7a8eb4e","stm_lms_ban_user":"d367e42c1a","stm_lms_save_forms":"6b207d91c6","stm_lms_get_forms":"e963a9fb64","stm_lms_upload_form_file":"82b2b0345e","stm_lms_dashboard_get_course_students":"25df4c8306","stm_lms_dashboard_delete_user_from_course":"f99507f9b0","stm_lms_dashboard_add_user_to_course":"ca2578e17f","stm_lms_add_to_cart_guest":"8633110771","stm_lms_fast_login":"3226404832","stm_lms_fast_register":"4da6c9a4d0","stm_lms_change_lms_author":"34a61cca34","stm_lms_add_student_manually":"13d0a15ef9","stm_lms_change_course_status":"d8fadae7f5","stm_lms_total_progress":"16c3362ad1","stm_lms_add_h5p_result":"830679839c","stm_lms_toggle_buying":"c85a4dc302","stm_lms_logout":"e450a0ce23","stm_lms_restore_password":"7af1271052","stm_lms_hide_announcement":"7e0c09dfcb","stm_lms_get_curriculum_v2":"6ffd594fd8","stm_lms_dashboard_get_student_progress":"d6c952c33f","stm_lms_dashboard_set_student_item_progress":"3b5b84fd4d","stm_lms_dashboard_reset_student_progress":"f9b822aaa4","stm_lms_dashboard_get_courses_list":"f3172b547c","stm_lms_dashboard_get_student_assignments":"21a84421ee","stm_lms_dashboard_get_student_quizzes":"57b7d6765e","stm_lms_dashboard_get_student_quiz":"d98816fcb8","stm_lms_wizard_save_settings":"2d4ff58e41","stm_lms_wizard_save_business_type":"625e50e17f","stm_lms_get_enrolled_assingments":"8ec7576d74"};
    </script>

<!-- Open Graph Meta Data by WP-Open-Graph plugin-->
<meta property="og:site_name" content="Ayan's Academy">
<meta property="og:locale" content="en_us">
<meta property="og:type" content="website">
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:title" content="">
<meta property="og:url" content="https://pecpte.com">
<meta property="og:description" content="">
<meta prefix="fb: http://ogp.me/ns/fb#" property="fb:app_id" content="1383332401872481">
<meta property="fb:admins" content="2298145213811760">
<!-- /Open Graph Meta Data -->


    <style>
        .vue_is_disabled {
            display: none;
        }
    </style>
        <script src="data:text/javascript;base64,CgkJdmFyIHN0bV93cGNmdG9fbm9uY2VzID0geyJ3cGNmdG9fc2F2ZV9zZXR0aW5ncyI6IjZjMmZiZjUyMDciLCJnZXRfaW1hZ2VfdXJsIjoiOTdiMDIyYWY4NyIsIndwY2Z0b191cGxvYWRfZmlsZSI6IjQ3NjU2NDAxODUiLCJ3cGNmdG9fc2VhcmNoX3Bvc3RzIjoiMTMwODllZmY0NiJ9OwoJ" data-rocket-status="executed">
        var stm_wpcfto_nonces = {"wpcfto_save_settings":"6c2fbf5207","get_image_url":"97b022af87","wpcfto_upload_file":"4765640185","wpcfto_search_posts":"13089eff46"};
    </script>
    <style>img#wpstats{display:none}</style>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <link rel="preconnect" href="https://code.tidio.co/">        <style>
            #wp-admin-bar-stm_lms_settings            img {
                max-width: 25px;
                vertical-align: top;
                position: relative;
                top: 3px;
            }
        </style>
<meta name="msapplication-TileImage" content="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/07/cropped-PEC-blank-logo.png?fit=270%2C270&amp;ssl=1">
        <style type="text/css" id="wp-custom-css">
            .transparent_header .header_default{
    padding-bottom: 25px;
    background-color: black;
    opacity: 70%;
}

.transparent_header .fixed .right_buttons .search-toggler {
    border-color: #000;
    color: #000;
}

/* extra */

.block-scroll{
    display:flex;
}
.block-main {
      color:white;
      background-color:#FFA700;
      padding: 5px;
    margin:5px;
    width: 224px;
    height: 220px;
    border-radius: 10px;
        transition:0.3s ease;
      opacity:95%;

}
.block-main:hover {
    transform: translateY(-13px);
    transition: 0.3s ease;
    opacity:75%;
}

.block-head {
        font-size:25px;
        text-align: center;
      font-weight:600;
        padding-bottom:10px;
}
.block-head:hover{
    opacity:100%;
}
.block-img {
      display:block;
      width:100px;
      padding: 5px 5px;
      margin:28px 0px 0px 52px;
}
.ielts-block-img{
      width:200px;
      padding: 5px 5px;
      margin:0px 0px 0px 9px;
}
.pte-block-img{
      width:200px;
      padding: 10px 5px;
      margin:60px 0px 0px 10px;
}
.block-image{

}

.b1{
    background-color:#FFA700;
}
.b2{
    background-color:#0099;
}
.b3{
    background-color:#10c45c;
}
.b4{
    background-color:#d94da6;
}
.b5{
    background-color:#ff7e15;
}
/* For Oversease Image Block*/

.oversease-block-main {
      color:white;
      background-color:#5D3FD3;
      padding: 5px;
    margin:5px;
    width: 224px;
    height: 220px;
    border-radius: 2px;
        transition:0.3s ease;
      opacity:95%;

}
.oversease-block-main:hover {
    transform: translateY(-13px);
    transition: 0.3s ease;
    opacity:75%;
}
        </style>
        <style type="text/css" title="dynamic-css" class="options-output">.logo-unit .logo{font-family:Montserrat;color:#fff;font-size:23px;}.header_top_bar, .header_top_bar a, .header_2_top_bar .header_2_top_bar__inner ul.header-menu li a{font-family:Montserrat;font-weight:400;font-style:normal;color:#ffffff;font-size:12px;}
body.skin_custom_color .stm_archive_product_inner_grid_content .stm-courses li.product.course-col-list .product-image .onsale,
body.skin_custom_color .related.products .stm-courses li.product.course-col-list .product-image .onsale,
body.skin_custom_color .stm_archive_product_inner_grid_content .stm-courses li.product .product__inner .woocommerce-LoopProduct-link .onsale,
body.skin_custom_color .related.products .stm-courses li.product .product__inner .woocommerce-LoopProduct-link .onsale,
body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .sticky_post,
body.skin_custom_color .overflowed_content .wpb_column .icon_box,
body.skin_custom_color .stm_countdown_bg,
body.skin_custom_color #searchform-mobile .search-wrapper .search-submit,
body.skin_custom_color .header-menu-mobile .header-menu > li .arrow.active,
body.skin_custom_color .header-menu-mobile .header-menu > li.opened > a,
body.skin_custom_color mark,
body.skin_custom_color .woocommerce .cart-totals_wrap .shipping-calculator-button:hover,
body.skin_custom_color .detailed_rating .detail_rating_unit tr td.bar .full_bar .bar_filler,
body.skin_custom_color .product_status.new,
body.skin_custom_color .stm_woo_helpbar .woocommerce-product-search input[type="submit"],
body.skin_custom_color .stm_archive_product_inner_unit .stm_archive_product_inner_unit_centered .stm_featured_product_price .price.price_free,
body.skin_custom_color .sidebar-area .widget:after,
body.skin_custom_color .sidebar-area .socials_widget_wrapper .widget_socials li .back a,
body.skin_custom_color .socials_widget_wrapper .widget_socials li .back a,
body.skin_custom_color .widget_categories ul li a:hover:after,
body.skin_custom_color .event_date_info_table .event_btn .btn-default,
body.skin_custom_color .course_table tr td.stm_badge .badge_unit.quiz,
body.skin_custom_color .page-links span:hover,
body.skin_custom_color .page-links span:after,
body.skin_custom_color .page-links > span:after,
body.skin_custom_color .page-links > span,
body.skin_custom_color .stm_post_unit:after,
body.skin_custom_color .blog_layout_grid .post_list_content_unit:after,
body.skin_custom_color ul.page-numbers > li a.page-numbers:after,
body.skin_custom_color ul.page-numbers > li span.page-numbers:after,
body.skin_custom_color ul.page-numbers > li a.page-numbers:hover,
body.skin_custom_color ul.page-numbers > li span.page-numbers:hover,
body.skin_custom_color ul.page-numbers > li a.page-numbers.current:after,
body.skin_custom_color ul.page-numbers > li span.page-numbers.current:after,
body.skin_custom_color ul.page-numbers > li a.page-numbers.current,
body.skin_custom_color ul.page-numbers > li span.page-numbers.current,
body.skin_custom_color .triangled_colored_separator,
body.skin_custom_color .magic_line,
body.skin_custom_color .navbar-toggle .icon-bar,
body.skin_custom_color .navbar-toggle:hover .icon-bar,
body.skin_custom_color #searchform .search-submit,
body.skin_custom_color .header_main_menu_wrapper .header-menu > li > ul.sub-menu:before,
body.skin_custom_color .search-toggler:after,
body.skin_custom_color .modal .popup_title,
body.skin_custom_color .sticky_post,
body.skin_custom_color .btn-carousel-control:after,
.primary_bg_color,
.mbc,
.stm_lms_courses_carousel_wrapper .owl-dots .owl-dot.active,
.stm_lms_courses_carousel__term.active,
body.course_hub .header_default.header_2,
.triangled_colored_separator:before,
.triangled_colored_separator:after,
body.skin_custom_color.udemy .btn-default,
.single_instructor .stm_lms_courses .stm_lms_load_more_courses,
.single_instructor .stm_lms_courses .stm_lms_load_more_courses:hover,
.stm_lms_course_sticky_panel .stm_lms_course_sticky_panel__button .btn,
.stm_lms_course_sticky_panel .stm_lms_course_sticky_panel__button .btn:hover,
body.skin_custom_color.language_center .btn-default
{background-color:#FFA700;}.icon_box.stm_icon_box_hover_none{border-left-color:#FFA700;}
body.skin_custom_color ul.page-numbers > li a.page-numbers:hover,
body.skin_custom_color ul.page-numbers > li a.page-numbers.current,
body.skin_custom_color ul.page-numbers > li span.page-numbers.current,
body.skin_custom_color .custom-border textarea:active,
body.skin_custom_color .custom-border input[type=text]:active,
body.skin_custom_color .custom-border input[type=email]:active,
body.skin_custom_color .custom-border input[type=number]:active,
body.skin_custom_color .custom-border input[type=password]:active,
body.skin_custom_color .custom-border input[type=tel]:active,
body.skin_custom_color .custom-border .form-control:active,
body.skin_custom_color .custom-border textarea:focus,
body.skin_custom_color .custom-border input[type=text]:focus,
body.skin_custom_color .custom-border input[type=email]:focus,
body.skin_custom_color .custom-border input[type=number]:focus,
body.skin_custom_color .custom-border input[type=password]:focus,
body.skin_custom_color .custom-border input[type=tel]:focus,
body.skin_custom_color .custom-border .form-control:focus,
body.skin_custom_color .icon-btn:hover .icon_in_btn,
body.skin_custom_color .icon-btn:hover,
body.skin_custom_color .average_rating_unit,
body.skin_custom_color blockquote,
body.skin_custom_color .tp-caption .icon-btn:hover .icon_in_btn,
body.skin_custom_color .tp-caption .icon-btn:hover,
body.skin_custom_color .stm_theme_wpb_video_wrapper .stm_video_preview:after,
body.skin_custom_color .btn-carousel-control,
body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .post_list_comment_num,
body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit,
body.skin_custom_color .search-toggler:hover,
body.skin_custom_color .search-toggler,
.stm_lms_courses_carousel_wrapper .owl-dots .owl-dot.active,
.triangled_colored_separator .triangle:before
{border-color:#FFA700;}
body.skin_custom_color .icon_box .icon i,
body.skin_custom_color .icon-btn:hover .icon_in_btn,
body.skin_custom_color .icon-btn:hover .link-title,
body.skin_custom_color .stats_counter .h1,
body.skin_custom_color .event_date_info .event_date_info_unit .event_labels,
body.skin_custom_color .event-col .event_archive_item .event_location i,
body.skin_custom_color .event-col .event_archive_item .event_start i,
body.skin_custom_color .gallery_terms_list li.active a,
body.skin_custom_color .tp-caption .icon-btn:hover .icon_in_btn,
body.skin_custom_color .teacher_single_product_page>a:hover .title,
body.skin_custom_color .sidebar-area .widget ul li a:hover:after,
body.skin_custom_color div.pp_woocommerce .pp_gallery ul li a:hover,
body.skin_custom_color div.pp_woocommerce .pp_gallery ul li.selected a,
body.skin_custom_color .single_product_after_title .meta-unit i,
body.skin_custom_color .single_product_after_title .meta-unit .value a:hover,
body.skin_custom_color .woocommerce-breadcrumb a:hover,
body.skin_custom_color #footer_copyright .copyright_text a:hover,
body.skin_custom_color .widget_stm_recent_posts .widget_media .cats_w a:hover,
body.skin_custom_color .widget_pages ul.style_2 li a:hover,
body.skin_custom_color .sidebar-area .widget_categories ul li a:hover,
body.skin_custom_color .sidebar-area .widget ul li a:hover,
body.skin_custom_color .widget_categories ul li a:hover,
body.skin_custom_color .stm_product_list_widget li a:hover .title,
body.skin_custom_color .widget_contacts ul li .text a:hover,
body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:focus .h6,
body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:focus .h6,
body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:focus,
body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:focus,
body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:active .h6,
body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:active .h6,
body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:active,
body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:active,
body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:hover .h6,
body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:hover .h6,
body.skin_custom_color .sidebar-area .widget_pages ul.style_1 li a:hover,
body.skin_custom_color .sidebar-area .widget_nav_menu ul.style_1 li a:hover,
body.skin_custom_color .widget_pages ul.style_1 li a:focus .h6,
body.skin_custom_color .widget_nav_menu ul.style_1 li a:focus .h6,
body.skin_custom_color .widget_pages ul.style_1 li a:focus,
body.skin_custom_color .widget_nav_menu ul.style_1 li a:focus,
body.skin_custom_color .widget_pages ul.style_1 li a:active .h6,
body.skin_custom_color .widget_nav_menu ul.style_1 li a:active .h6,
body.skin_custom_color .widget_pages ul.style_1 li a:active,
body.skin_custom_color .widget_nav_menu ul.style_1 li a:active,
body.skin_custom_color .widget_pages ul.style_1 li a:hover .h6,
body.skin_custom_color .widget_nav_menu ul.style_1 li a:hover .h6,
body.skin_custom_color .widget_pages ul.style_1 li a:hover,
body.skin_custom_color .widget_nav_menu ul.style_1 li a:hover,
body.skin_custom_color .see_more a:after,
body.skin_custom_color .see_more a,
body.skin_custom_color .transparent_header_off .header_main_menu_wrapper ul > li > ul.sub-menu > li a:hover,
body.skin_custom_color .stm_breadcrumbs_unit .navxtBreads > span a:hover,
body.skin_custom_color .btn-carousel-control,
body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .post_list_comment_num,
body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .date-m,
body.skin_custom_color .post_list_main_section_wrapper .post_list_meta_unit .date-d,
body.skin_custom_color .stats_counter h1,
body.skin_custom_color .yellow,
body.skin_custom_color ol li a:hover,
body.skin_custom_color ul li a:hover,
body.skin_custom_color .search-toggler,
.primary_color,
.mtc_h:hover,
body.classic_lms .header_top_bar .header_top_bar_socs ul li a:hover,
body.classic_lms .header_top_bar a:hover,
#footer .widget_stm_lms_popular_courses ul li a:hover .meta .h5.title,
body.classic_lms .stm_lms_wishlist_button a:hover i,
.classic_lms .post_list_main_section_wrapper .post_list_item_title:hover,
.stm_lms_courses__single.style_2 .stm_lms_courses__single--title h5:hover
{color:#FFA700;}
body.skin_custom_color .triangled_colored_separator .triangle,
body.skin_custom_color .magic_line:after
{border-bottom-color:#FFA700;}body.rtl-demo .stm_testimonials_wrapper_style_2 .stm_lms_testimonials_single__content:after{border-left-color:#2c75e4;}
body.skin_custom_color .blog_layout_grid .post_list_meta_unit .sticky_post,
body.skin_custom_color .blog_layout_list .post_list_meta_unit .sticky_post,
body.skin_custom_color .product_status.special,
body.skin_custom_color .view_type_switcher a:hover,
body.skin_custom_color .view_type_switcher a.view_list.active_list,
body.skin_custom_color .view_type_switcher a.view_grid.active_grid,
body.skin_custom_color .stm_archive_product_inner_unit .stm_archive_product_inner_unit_centered .stm_featured_product_price .price,
body.skin_custom_color .sidebar-area .widget_text .btn,
body.skin_custom_color .stm_product_list_widget.widget_woo_stm_style_2 li a .meta .stm_featured_product_price .price,
body.skin_custom_color .widget_tag_cloud .tagcloud a:hover,
body.skin_custom_color .sidebar-area .widget ul li a:after,
body.skin_custom_color .sidebar-area .socials_widget_wrapper .widget_socials li a,
body.skin_custom_color .socials_widget_wrapper .widget_socials li a,
body.skin_custom_color .gallery_single_view .gallery_img a:after,
body.skin_custom_color .course_table tr td.stm_badge .badge_unit,
body.skin_custom_color .widget_mailchimp .stm_mailchimp_unit .button,
body.skin_custom_color .textwidget .btn:active,
body.skin_custom_color .textwidget .btn:focus,
body.skin_custom_color .form-submit .submit:active,
body.skin_custom_color .form-submit .submit:focus,
body.skin_custom_color .button:focus,
body.skin_custom_color .button:active,
body.skin_custom_color .btn-default:active,
body.skin_custom_color .btn-default:focus,
body.skin_custom_color .button:hover,
body.skin_custom_color .textwidget .btn:hover,
body.skin_custom_color .form-submit .submit,
body.skin_custom_color .button,
body.skin_custom_color .btn-default,
.btn.btn-default:hover, .button:hover, .textwidget .btn:hover,
body.skin_custom_color .short_separator,
body.skin_custom_color div.multiseparator:after,
body.skin_custom_color .widget_pages ul.style_2 li a:hover:after,
body.skin_custom_color.single-product .product .woocommerce-tabs .wc-tabs li.active a:before,
body.skin_custom_color.woocommerce .sidebar-area .widget .widget_title:after,
body.skin_custom_color.woocommerce .sidebar-area .widget.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle,
body.skin_custom_color.woocommerce .sidebar-area .widget.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range,
.sbc,
.sbc_h:hover,
.wpb-js-composer .vc_general.vc_tta.vc_tta-tabs.vc_tta-style-classic li.vc_tta-tab>a,
.wpb-js-composer .vc_general.vc_tta.vc_tta-tabs.vc_tta-style-classic li.vc_tta-tab>a:hover,
#header.transparent_header .header_2 .stm_lms_account_dropdown .dropdown button,
.stm_lms_courses_categories.style_3 .stm_lms_courses_category>a:hover,
.stm_lms_udemy_course .nav.nav-tabs>li a,
body.classic_lms .classic_style .nav.nav-tabs>li.active a,
.header_bottom:after,
.sbc:hover,
body.rtl-demo .stm_testimonials_wrapper_style_2 .stm_lms_testimonials_single__content
{background-color:#5D3FD3;}
body.skin_custom_color.woocommerce .sidebar-area .widget.widget_layered_nav ul li a:after,
body.skin_custom_color.woocommerce .sidebar-area .widget.widget_product_categories ul li a:after,
body.skin_custom_color .wpb_tabs .form-control:focus,
body.skin_custom_color .wpb_tabs .form-control:active,
body.skin_custom_color .woocommerce .cart-totals_wrap .shipping-calculator-button,
body.skin_custom_color .sidebar-area .widget_text .btn,
body.skin_custom_color .widget_tag_cloud .tagcloud a:hover,
body.skin_custom_color .icon_box.dark a:hover,
body.skin_custom_color .simple-carousel-bullets a.selected,
body.skin_custom_color .stm_sign_up_form .form-control:active,
body.skin_custom_color .stm_sign_up_form .form-control:focus,
body.skin_custom_color .form-submit .submit,
body.skin_custom_color .button,
body.skin_custom_color .btn-default,
.sbrc,
.sbrc_h:hover,
.vc_general.vc_tta.vc_tta-tabs,
body.skin_custom_color .blog_layout_grid .post_list_meta_unit,
body.skin_custom_color .blog_layout_grid .post_list_meta_unit .post_list_comment_num,
body.skin_custom_color .blog_layout_list .post_list_meta_unit .post_list_comment_num,
body.skin_custom_color .blog_layout_list .post_list_meta_unit,
#header.transparent_header .header_2 .stm_lms_account_dropdown .dropdown button
{border-color:#2c75e4;}
.header_2_top_bar__inner .top_bar_right_part .header_top_bar_socs ul li a:hover,
.secondary_color,
body.skin_custom_color.single-product .product .woocommerce-tabs .wc-tabs li.active a,
body.skin_custom_color.single-product .product .woocommerce-tabs .wc-tabs li a:hover,
body.skin_custom_color .widget_pages ul.style_2 li a:hover .h6,
body.skin_custom_color .icon_box .icon_text>h3>span,
body.skin_custom_color .stm_woo_archive_view_type_list .stm_featured_product_stock i,
body.skin_custom_color .stm_woo_archive_view_type_list .expert_unit_link:hover .expert,
body.skin_custom_color .stm_archive_product_inner_unit .stm_archive_product_inner_unit_centered .stm_featured_product_body a .title:hover,
body.skin_custom_color .stm_product_list_widget.widget_woo_stm_style_2 li a:hover .title,
body.skin_custom_color .blog_layout_grid .post_list_meta_unit .post_list_comment_num,
body.skin_custom_color .blog_layout_grid .post_list_meta_unit .date-m,
body.skin_custom_color .blog_layout_grid .post_list_meta_unit .date-d,
body.skin_custom_color .blog_layout_list .post_list_meta_unit .post_list_comment_num,
body.skin_custom_color .blog_layout_list .post_list_meta_unit .date-m,
body.skin_custom_color .blog_layout_list .post_list_meta_unit .date-d,
body.skin_custom_color .widget_stm_recent_posts .widget_media a:hover .h6,
body.skin_custom_color .widget_product_search .woocommerce-product-search:after,
body.skin_custom_color .widget_search .search-form > label:after,
body.skin_custom_color .sidebar-area .widget ul li a,
body.skin_custom_color .sidebar-area .widget_categories ul li a,
body.skin_custom_color .widget_contacts ul li .text a,
body.skin_custom_color .event-col .event_archive_item > a:hover .title,
body.skin_custom_color .stm_contact_row a:hover,
body.skin_custom_color .comments-area .commentmetadata i,
body.skin_custom_color .stm_post_info .stm_post_details .comments_num .post_comments:hover,
body.skin_custom_color .stm_post_info .stm_post_details .comments_num .post_comments i,
body.skin_custom_color .stm_post_info .stm_post_details .post_meta li a:hover span,
body.skin_custom_color .stm_post_info .stm_post_details .post_meta li i,
body.skin_custom_color .blog_layout_list .post_list_item_tags .post_list_divider,
body.skin_custom_color .blog_layout_list .post_list_item_tags a,
body.skin_custom_color .blog_layout_list .post_list_cats .post_list_divider,
body.skin_custom_color .blog_layout_list .post_list_cats a,
body.skin_custom_color .blog_layout_list .post_list_item_title a:hover,
body.skin_custom_color .blog_layout_grid .post_list_item_tags .post_list_divider,
body.skin_custom_color .blog_layout_grid .post_list_item_tags a,
body.skin_custom_color .blog_layout_grid .post_list_cats .post_list_divider,
body.skin_custom_color .blog_layout_grid .post_list_cats a,
body.skin_custom_color .blog_layout_grid .post_list_item_title:focus,
body.skin_custom_color .blog_layout_grid .post_list_item_title:active,
body.skin_custom_color .blog_layout_grid .post_list_item_title:hover,
body.skin_custom_color .stm_featured_products_unit .stm_featured_product_single_unit .stm_featured_product_single_unit_centered .stm_featured_product_body a .title:hover,
body.skin_custom_color .icon_box.dark a:hover,
body.skin_custom_color .post_list_main_section_wrapper .post_list_item_tags .post_list_divider,
body.skin_custom_color .post_list_main_section_wrapper .post_list_item_tags a,
body.skin_custom_color .post_list_main_section_wrapper .post_list_cats .post_list_divider,
body.skin_custom_color .post_list_main_section_wrapper .post_list_cats a,
body.skin_custom_color .post_list_main_section_wrapper .post_list_item_title:active,
body.skin_custom_color .post_list_main_section_wrapper .post_list_item_title:focus,
body.skin_custom_color .post_list_main_section_wrapper .post_list_item_title:hover,
body.skin_custom_color a:hover,
.secondary_color,
#header.transparent_header .header_2 .header_top .stm_lms_categories .heading_font,
#header.transparent_header .header_2 .header_top .stm_lms_categories i,
.classic_lms .post_list_main_section_wrapper .post_list_cats a,
.classic_lms .post_list_main_section_wrapper .post_list_item_tags a,
body.skin_custom_color .single_product_after_title .meta-unit.teacher:hover .value,
.stm_lms_course_sticky_panel__teacher:before,
.stm_lms_courses__single__inner .stm_lms_courses__single--info_title a:hover h4
{color:#2c75e4;}a{color:#2c75e4;}body,
                    .normal_font,
                    .h6.normal_font,
                    body.rtl.rtl-demo .stm_testimonials_wrapper_style_2 .stm_lms_testimonials_single__excerpt p,
                    .stm_product_list_widget.widget_woo_stm_style_2 li a .meta .title{text-align:justify;color:#273044;font-size:14px;}.btn{font-family:Arial, Helvetica, sans-serif;line-height:14px;font-size:14px;}.header-menu{font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;color:#fff;}h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6,.nav-tabs>li>a,.member-name,.section-title,.user-name,.heading_font,.item-title,.acomment-meta,[type="reset"],.bp-subnavs,.activity-header,table,.widget_categories ul li a,.sidebar-area .widget ul li a,.select2-selection__rendered,blockquote,.select2-chosen,.vc_tta-tabs.vc_tta-tabs-position-top .vc_tta-tabs-container .vc_tta-tabs-list li.vc_tta-tab a,.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tabs-container .vc_tta-tabs-list li.vc_tta-tab a, body.distance-learning .btn, body.distance-learning .vc_btn3{font-family:Arial, Helvetica, sans-serif;text-align:left;color:#273044;}h1,.h1{line-height:55px;letter-spacing:-0.4px;font-weight:700;font-size:50px;}h2,.h2{line-height:38px;font-weight:700;font-size:36px;}h3,.h3{line-height:34px;font-weight:700;font-size:24px;}h4,.h4,blockquote{line-height:26px;font-weight:700;font-size:18px;}h5,.h5,.select2-selection__rendered{line-height:20px;font-size:14px;}h6,.h6,.widget_pages ul li a, .widget_nav_menu ul li a, .footer_menu li a,.widget_categories ul li a,.sidebar-area .widget ul li a{line-height:12px;font-weight:400;font-size:12px;}#footer_top{background-color:#414b4f;}#footer_bottom{background-color:#273044;}#footer_bottom .widget_title h3{font-weight:700;color:#ffffff;font-size:18px;}#footer_bottom, .widget_contacts ul li .text,
                .footer_widgets_wrapper .widget ul li a,
                .widget_nav_menu ul.style_1 li a .h6,
                .widget_pages ul.style_2 li a .h6,
                #footer .stm_product_list_widget.widget_woo_stm_style_2 li a .meta .title,
                .widget_pages ul.style_1 li a .h6{color:#ffffff;}.widget_pages ul.style_2 li a:after{background-color:#ffffff;}#footer_copyright{background-color:#5e676b;}#footer_copyright .copyright_text, #footer_copyright .copyright_text a{color:#ffffff;}#footer_copyright{border-color:#5e676b;}</style>

                <style type="text/css" data-type="vc_shortcodes-custom-css">
                .vc_custom_1645950070151{background-image: url(<?php echo e('admin/dist/'.$bannerImage); ?>) !important;}
                .vc_custom_1645695539961{margin-bottom: 44px !important;}.vc_custom_1536836667813{margin-bottom: 0px !important;padding-top: 29px !important;padding-bottom: 60px !important;}.vc_custom_1645989356413{margin-bottom: 0px !important;background-image: url(https://pecpte.com/wp-content/uploads/2022/02/pecpte-background.jpg?id=5305) !important;}.vc_custom_1579768494906{margin-bottom: 0px !important;background-color: #e8e8e8 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1436164243861{margin-bottom: 28px !important;}.vc_custom_1579437107739{margin-top: !important;}.vc_custom_1645986912369{margin-top: -150px !important;}.vc_custom_1579595041823{margin-bottom: 51px !important;}.vc_custom_1436163882282{margin-bottom: 46px !important;}.vc_custom_1579595072581{margin-bottom: 11px !important;}.vc_custom_1646028687037{margin-right: 210px !important;}.vc_custom_1579416932851{margin-bottom: -13px !important;}.vc_custom_1536751636857{margin-bottom: 47px !important;}.vc_custom_1437023252855{margin-top: 7px !important;margin-bottom: 0px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>    <style id="rocket-lazyrender-inline-css">[data-wpr-lazyrender] {content-visibility: auto;}</style><meta name="generator" content="WP Rocket 3.19.3" data-wpr-features="wpr_delay_js wpr_defer_js wpr_minify_js wpr_lazyload_images wpr_preconnect_external_domains wpr_automatic_lazy_rendering wpr_oci wpr_minify_css wpr_preload_links wpr_desktop"><link rel="prefetch" href="https://pecpte.com/events/pte-exam-fee/">
<style>
@media only screen and (max-width: 991px) {
    .header_top_bar {
        display: block !important;
        padding: 10px 0 !important;
    }

    .header_top_bar .pull-left {
        display: none !important;
    }

    .header_top_bar .header_login_url,
    .header_top_bar .header_top_bar_socs {
        display: none !important;
    }

    .header_top_bar .pull-right,
    .header_top_bar .xs-pull-left {
        float: none !important;
    }

    .header_top_bar .xs-pull-left {
        width: 100% !important;
    }

    .header_top_bar .top_bar_info {
        display: block !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .header_top_bar .top_bar_info li.hidden-info {
        display: block !important;
        width: 100% !important;
        margin: 0 0 8px 0 !important;
        padding: 0 !important;
        white-space: normal !important;
        line-height: 1.5 !important;
        font-size: 13px !important;
    }

    .header_top_bar .top_bar_info li.hidden-info:last-child {
        margin-bottom: 0 !important;
    }

    .header_top_bar .top_bar_info li.hidden-info i {
        width: 18px !important;
        margin-right: 8px !important;
        text-align: center;
    }
}
</style>


<style id="aa-custom-header-updates">
.header_top_bar_socs ul li a,
.copyright_socials ul li a {
    transition: transform .25s ease, color .25s ease, background-color .25s ease;
}
.header-menu > li > a,
.header-menu-mobile .header-menu > li > a {
    transition: font-size .22s ease, transform .22s ease, color .22s ease;
}
.header_main_menu_wrapper .header-menu > li:hover > a,
.header_main_menu_wrapper .header-menu > li > a:hover,
.header-menu-mobile .header-menu > li > a:hover {
    font-size: 16.5px !important;
}
.magic_line,
.magic_line:after,
.magic_line.line_visible,
.magic_line.line_visible:after {
    background-color: #7c3aed !important;
}
.module__cafc4ce9f11bc27b53b4b6553925c990 .triangled_colored_separator,
.triangled_colored_separator {
    background-color: #7c3aed !important;
}
.module__cafc4ce9f11bc27b53b4b6553925c990 .triangled_colored_separator .triangle,
.triangled_colored_separator .triangle,
.triangled_colored_separator .triangle:before,
.triangled_colored_separator .triangle:after {
    border-bottom-color: #7c3aed !important;
    border-top-color: #7c3aed !important;
}
</style>




<style id="aa-submenu-overlap-fix">
/* Submenu must stay above content on inner pages */
body,
#wrapper,
#main,
.stm_lms_breadcrumbs,
.stm_lms_breadcrumbs__header_default{
    overflow: visible !important;
}

#header,
#header .header_default,
#header .header_default .container,
#header .header_default .row,
#header .header_default [class*="col-"],
#header .header_main_menu_wrapper,
#header .header_main_menu_wrapper .collapse,
#header .header_main_menu_wrapper .navbar-collapse,
#header .header_main_menu_wrapper .header-menu,
#header .header_main_menu_wrapper .header-menu > li,
#header .header_main_menu_wrapper .header-menu > li > ul.sub-menu,
#header .header_main_menu_wrapper .header-menu > li > ul.sub-menu > li{
    overflow: visible !important;
}

#header{
    position: relative !important;
    z-index: 999999 !important;
}

#header .header_default,
#header .header_main_menu_wrapper,
#header .header_main_menu_wrapper .collapse.navbar-collapse.pull-right{
    position: relative !important;
    z-index: 999999 !important;
}

#header .header_main_menu_wrapper .header-menu > li{
    position: relative !important;
}

#header .header_main_menu_wrapper .header-menu > li > ul.sub-menu{
    position: absolute !important;
    top: 100% !important;
    left: 0 !important;
    display: none !important;
    min-width: 250px !important;
    background: #fff !important;
    margin: 0 !important;
    padding: 10px 0 !important;
    list-style: none !important;
    border-radius: 8px !important;
    box-shadow: 0 12px 30px rgba(0,0,0,.18) !important;
    z-index: 9999999 !important;
}

#header .header_main_menu_wrapper .header-menu > li:hover > ul.sub-menu{
    display: block !important;
}

#header .header_main_menu_wrapper .header-menu > li > ul.sub-menu > li{
    position: relative !important;
}

#header .header_main_menu_wrapper .header-menu > li > ul.sub-menu > li > ul.sub-menu{
    position: absolute !important;
    top: 0 !important;
    left: 100% !important;
    display: none !important;
    min-width: 250px !important;
    background: #fff !important;
    margin: 0 0 0 6px !important;
    padding: 10px 0 !important;
    list-style: none !important;
    border-radius: 8px !important;
    box-shadow: 0 12px 30px rgba(0,0,0,.18) !important;
    z-index: 9999999 !important;
}

#header .header_main_menu_wrapper .header-menu > li > ul.sub-menu > li:hover > ul.sub-menu{
    display: block !important;
}

#header .header_main_menu_wrapper .header-menu > li > ul.sub-menu > li > a,
#header .header_main_menu_wrapper .header-menu > li > ul.sub-menu > li > ul.sub-menu > li > a{
    display: block !important;
    white-space: nowrap !important;
    color: black !important;
    background-color: white !important;
}

@media only screen and (max-width: 991px){
    #header .header_main_menu_wrapper .header-menu > li > ul.sub-menu,
    #header .header_main_menu_wrapper .header-menu > li > ul.sub-menu > li > ul.sub-menu{
        position: static !important;
        min-width: 100% !important;
        box-shadow: none !important;
        border-radius: 0 !important;
    }
}
</style>


<style>
/* FORCE BLACK DROPDOWN */
.header_main_menu_wrapper .header-menu > li > ul.sub-menu,
.header_main_menu_wrapper .header-menu > li > ul.sub-menu > li > ul.sub-menu{
    background:#000 !important;
    opacity:1 !important;
    backdrop-filter:none !important;
    -webkit-backdrop-filter:none !important;
}

/* text */
.header_main_menu_wrapper .header-menu > li > ul.sub-menu li a{
    color:#fff !important;
}

/* hover */
.header_main_menu_wrapper .header-menu > li > ul.sub-menu li:hover > a{
    background:#222 !important;
    color:#fff !important;
}
</style>


<style>
/* Mobile Top Bar: show only phone & social */
@media (max-width: 767px){
    .header_top_bar .top_bar_left span:not(.top_bar_phone),
    .header_top_bar .top_bar_left a:not(.top_bar_phone){
        display:none !important;
    }
    .header_top_bar .top_bar_right{
        display:flex !important;
        justify-content:flex-end !important;
        align-items:center;
    }
    .header_top_bar .top_bar_left{
        display:flex !important;
        align-items:center;
    }
}
</style>


<style id="aa-mobile-topbar-only-phone-social-final">
@media only screen and (max-width: 991px){
    /* topbar layout */
    .header_top_bar{
        display:block !important;
        padding:10px 0 !important;
    }

    .header_top_bar .container,
    .header_top_bar .clearfix{
        display:flex !important;
        align-items:center !important;
        justify-content:space-between !important;
        gap:12px !important;
        flex-wrap:nowrap !important;
    }

    /* hide empty left/login blocks */
    .header_top_bar .pull-left,
    .header_top_bar .header_login_url{
        display:none !important;
    }

    /* show socials */
    .header_top_bar .pull-right,
    .header_top_bar .header_top_bar_socs,
    .header_top_bar .header_top_bar_socs ul,
    .header_top_bar .header_top_bar_socs ul li{
        display:block !important;
    }

    .header_top_bar .header_top_bar_socs{
        float:none !important;
        order:2 !important;
        flex:0 0 auto !important;
    }

    .header_top_bar .header_top_bar_socs ul{
        display:flex !important;
        align-items:center !important;
        justify-content:flex-end !important;
        gap:8px !important;
        margin:0 !important;
        padding:0 !important;
        list-style:none !important;
    }

    .header_top_bar .header_top_bar_socs ul li{
        margin:0 !important;
        padding:0 !important;
    }

    .header_top_bar .header_top_bar_socs ul li a{
        display:inline-flex !important;
        align-items:center !important;
        justify-content:center !important;
        width:30px !important;
        height:30px !important;
        color:#fff !important;
    }

    /* show only phone item */
    .header_top_bar .xs-pull-left{
        float:none !important;
        order:1 !important;
        flex:1 1 auto !important;
        width:auto !important;
        min-width:0 !important;
    }

    .header_top_bar .xs-pull-left .top_bar_info{
        display:flex !important;
        align-items:center !important;
        margin:0 !important;
        padding:0 !important;
        list-style:none !important;
    }

    .header_top_bar .xs-pull-left .top_bar_info li.hidden-info{
        display:none !important;
        margin:0 !important;
        padding:0 !important;
        white-space:nowrap !important;
    }

    .header_top_bar .xs-pull-left .top_bar_info li.hidden-info:last-child{
        display:inline-flex !important;
        align-items:center !important;
        font-size:14px !important;
        line-height:1.4 !important;
        color:#fff !important;
    }

    .header_top_bar .xs-pull-left .top_bar_info li.hidden-info:last-child i{
        margin-right:7px !important;
    }
}
</style>

</head>
<body class="home page-template-default page page-id-7 stm_lms_button theme-masterstudy woocommerce-js skin_custom_color classic_lms masterstudy-theme stm_preloader_0 wpb-js-composer js-comp-ver-6.8.0 vc_responsive" ontouchstart="" style="padding-bottom: 0px;">


<div id="wrapper">



<div id="header" class="transparent_header sticky_header" data-color="" style="padding-bottom: 0px;">

            <div class="header_top_bar" style="background-color:#5D3FD3">
    <div class="container">
        <div class="clearfix">

    <div class="pull-left">
        <ul class="top_bar_info clearfix">
            <li class="hidden-info"></li>
        </ul>
    </div>

            <!-- Header Top bar Login -->

                                <div class="pull-right">
        <div class="header_login_url">
                            <a href="">
                <span class="vertical_divider"></span>
                <a href=""></a>
                    </div>
    </div>
                        <!-- Header top bar Socials -->
                            <div class="pull-right">
    <div class="header_top_bar_socs">
        <ul class="clearfix">
            <li><a href="https://www.facebook.com/share/1c8YP6kvMn/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li><li><a href="https://x.com/ayansacademy" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li><li><a href="https://youtube.com/@ayansacademy?si=lAH25hFyQXTg2Hcf" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a></li><li><a href="https://www.instagram.com/ayans_academy?igsh=amdrYXJ5eG81cnZo" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li><li><a href="https://www.linkedin.com/company/ayan-s-academy/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>        </ul>
    </div>
</div>
                <div class="pull-right xs-pull-left">
        <ul class="top_bar_info clearfix">
                            <li class="hidden-info">
                    <i class="far fa-clock"></i> Monday- Saturday 10.00 - 6.00                </li>
                                        <li class="hidden-info">
                    <i class="fa fa-map-marker-alt"></i> House no-440 ( 2nd Floor Left Side), Road no-6, Avenue-6, Mirpur-DOHS, Dhaka-1216                </li>
                                        <li class="hidden-info">
                    <i class="fa fa-phone"></i> +880 1319904015                </li>
                    </ul>
    </div>


        </div>
    </div>
</div>
            <div class="sticky_header_holder"></div>

    <div class="header_default header_default">
        <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="logo-unit">
                    <a href="index.php">
        <img class="img-responsive logo_transparent_static visible" src="<?php echo e('admin/dist/'.$logoTransparent); ?>" style="width: 50px;" alt="PEC-Education">
                    <img class="img-responsive logo_colored_fixed hidden" src="<?php echo e('admin/dist/'.$logoColored); ?>" style="width: 100px;" alt="PEC-Education">
            </a>
            </div>

            <!-- Navbar toggle MOBILE -->
            <button type="button" class="navbar-toggle collapsed hidden-lg hidden-md" data-toggle="collapse" data-target="#header_menu_toggler">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> <!-- md-3 -->


        <!-- MObile menu -->
        <div class="col-xs-12 col-sm-12 visible-xs visible-sm">
            <div class="collapse navbar-collapse header-menu-mobile" id="header_menu_toggler">
                <ul class="header-menu clearfix">
                    <li id="menu-item-2065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-2065"><a href="index.php" aria-current="page">Home</a><div class="magic_line" style="max-width: 0px;"></div></li>
<li id="menu-item-2251" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2251"><a href="about.php">About Us</a><span class="arrow"><i class="fa fa-angle-right"></i></span>
<ul class="sub-menu">
    <li id="menu-item-4979" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4979"><a href="team.php">Our Team</a></li>
    <li id="menu-item-3719" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3719"><a href="mission.php">Our Mission</a></li>
    <li id="menu-item-3720" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3720"><a href="vision.php">Our Vision</a></li>
    <li id="menu-item-3721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3721"><a href="certificates.php">Certificates</a></li>
</ul>
<div class="magic_line" style="max-width: 0px;"></div></li>
<li id="menu-item-1176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1176"><a href="study.php">Services</a><span class="arrow"><i class="fa fa-angle-right"></i></span>
<ul class="sub-menu">
    <li id="menu-item-3713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3713"><a href="study.php">Study Abroad</a>
    <ul class="sub-menu">
        <li id="menu-item-4251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4251"><a href="study.php">Study in Best Universities in USA</a></li>
        <li id="menu-item-4252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4252"><a href="study.php">Study in Canada</a></li>
        <li id="menu-item-4250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4250"><a href="study.php">Study in the UK</a></li>
        <li id="menu-item-4247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4247"><a href="study.php">Study in Australia</a></li>
        <li id="menu-item-4249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4249"><a href="study.php">Study in Sweden</a></li>
        <li id="menu-item-4248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4248"><a href="study.php">Study in Germany</a></li>
    </ul>
</li>
    <li id="menu-item-5442" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5442"><a href="study.php">Pearson VUE Test Center</a></li>
    <li id="menu-item-3722" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3722"><a href="study.php">PTE Online Courses</a></li>
    <li id="menu-item-5448" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5448"><a href="study.php">PTE Mock Tests</a></li>
    <li id="menu-item-3758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3758"><a href="study.php">PTE Exam Registration</a></li>
</ul>
<div class="magic_line" style="max-width: 0px;"></div></li>
<li id="menu-item-1873" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1873"><a href="course.php">Courses</a><span class="arrow"><i class="fa fa-angle-right"></i></span>
<ul class="sub-menu">
    <li id="menu-item-3723" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3723"><a href="study.php">PTE Academic</a>
    <ul class="sub-menu">
        <li id="menu-item-5111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5111"><a href="study.php">PTE Home Test</a></li>
    </ul>
</li>
    <li id="menu-item-5497" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5497"><a href="study.php">PTE Core Exam</a></li>
    <li id="menu-item-5845" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5845"><a href="study.php">TOEFL iBT Test</a></li>
    <li id="menu-item-3724" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3724"><a href="study.php">IELTS</a></li>
    <li id="menu-item-4163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4163"><a href="study.php">Lean Sigma Project Management</a></li>
    <li id="menu-item-3725" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="study.php">Spoken English</a></li>
</ul>
<div class="magic_line" style="max-width: 0px;"></div></li>
<li id="menu-item-3938" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3938"></span>

<div class="magic_line" style="max-width: 0px;"></div></li>
<li id="menu-item-1492" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1492"><a href="gallery.php">Gallery</a><span class="arrow"><i class="fa fa-angle-right"></i></span>
<ul class="sub-menu">
    <li id="menu-item-3726" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3726"><a href="gallery.php?gallery=pte-score-card">PTE Score Card</a></li>
    <li id="menu-item-3757" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3757"><a href="gallery.php?gallery=seminar-pics">Seminar Pics</a></li>
    <li id="menu-item-1566" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1566"><a href="faq.php">FAQ</a></li>
</ul>
<div class="magic_line" style="max-width: 0px;"></div></li>
<li id="menu-item-1167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1167"><a href="contact.php">Contact Us</a><div class="magic_line" style="max-width: 0px;"></div></li>
<li class="menu-item wpmenucartli wpmenucart-display-right menu-item empty-wpmenucart" id="wpmenucartli" style=""><a class="wpmenucart-contents empty-wpmenucart" style="display:none">&nbsp;</a><div class="magic_line" style="max-width: 0px;"></div></li>                    <li>

                    <div class="magic_line" style="max-width: 0px;"></div></li>
                </ul>
            </div>
        </div>

        <!-- Desktop menu -->
        <div class="col-md-9 col-sm-9 col-sm-offset-0 hidden-xs hidden-sm">

<div class="stm_menu_toggler" data-text="Menu"></div>
<div class="header_main_menu_wrapper clearfix" style="margin-top:5px;">

    <div class="pull-right hidden-xs right_buttons">


                    <div class="search-toggler-unit">

            </div>


            </div>

    <div class="collapse navbar-collapse pull-right">
        <ul class="header-menu clearfix">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-2065"><a href="index.php" aria-current="page">Home</a><div class="magic_line line_visible" style="max-width: 42px;"></div></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2251"><a href="about.php">About Us</a>
<ul class="sub-menu">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4979"><a href="team.php">Our Team</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3719"><a href="mission.php">Our Mission</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3720"><a href="vision.php">Our Vision</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3721"><a href="certificates.php">Our Achievements</a></li>
</ul>
<div class="magic_line" style="max-width: 73.113px;"></div></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1176"><a href="study.php">Services</a>
<ul class="sub-menu">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3713"><a href="study.php?service=study aboard">Study Abroad</a>
    <ul class="sub-menu">
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4251"><a href="study.php?service=australia">Study in Australia</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4252"><a href="study.php?service=canada">Study in Canada</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4250"><a href="study.php?service=usa">Study in the USA </a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4247"><a href="study.php?service=germany">Study in Germany </a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4249"><a href="study.php?service=new-zealand">Study in New Zealand</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4248"><a href="study.php?service=denmark">Study in Denmak</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4248"><a href="study.php?service=hungry">Study in Hungry</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4248"><a href="study.php?service=neatherlands">Study in Natherlands</a></li>
    </ul>
</li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5442"><a href="study.php?service=pte-exam-registration">PTE Exam Registration</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5448"><a href="study.php?service=pte-mock-tests">PTE Mock Tests</a></li>
</ul>
<div class="magic_line" style="max-width: 70.55px;"></div></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1873"><a href="course.php">Courses</a>
<ul class="sub-menu">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5497"><a href="course.php?course=pte academy">PTE Academic</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5845"><a href="course.php?course=pte-core">PTE Core </a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3724"><a href="course.php?course=pte-ukvi">PTE UKVI</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4163"><a href="course.php?course=pre-pte-course">Pre-PTE Course</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php?course=basic-english">Basic English</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php?course=a-z grammar">A to Z Grammar</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php?course=spoken-english">Spoken English</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php?course=phonetics">Phonetics</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php?course=toefl-ibt-test">TOEFL IBT Test</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php?course=ielts">IELTS</a></li>
</ul>
<div class="magic_line" style="max-width: 69.2375px;"></div></li>

<div class="magic_line" style="max-width: 39.6875px;"></div></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1492"><a href="gallery.php">Gallery</a>
<ul class="sub-menu">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3726"><a href="gallery.php?gallery=pte-score-card">PTE Score Card</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3757"><a href="gallery.php?gallery=seminar-pics">Seminar Pics</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1566"><a href="faq.php">FAQ</a></li>
</ul>
<div class="magic_line" style="max-width: 66.375px;"></div></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1167"><a href="contact.php">Contact Us</a><div class="magic_line" style="max-width: 90.738px;"></div></li>
<li class="menu-item wpmenucartli wpmenucart-display-right menu-item empty-wpmenucart" id="wpmenucartli" style=""><a class="wpmenucart-contents empty-wpmenucart" style="display:none">&nbsp;</a><div class="magic_line"></div></li>        </ul>
    </div>

</div>        </div><!-- md-8 desk menu -->

    </div> <!-- row -->
</div> <!-- container -->    </div>
</div> <!-- id header -->
<script id="aa-mobile-menu-fix">
jQuery(function($){
    var $mobileMenu = $('.header-menu-mobile');

    $mobileMenu.find('.menu-item-has-children > .arrow').off('click.aa').on('click.aa', function(e){
        e.preventDefault();
        e.stopPropagation();
        var $arrow = $(this);
        var $li = $arrow.closest('.menu-item-has-children');
        $li.toggleClass('opened');
        $arrow.toggleClass('active');
        $li.children('.sub-menu').first().stop(true, true).slideToggle(180);
    });
});
</script>
