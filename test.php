<!DOCTYPE html>

<html prefix="og: http://ogp.me/ns#" class="no-js js_active  vc_desktop  vc_transform  vc_transform skrollr skrollr-desktop"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>(()=>{class RocketLazyLoadScripts{constructor(){this.v="2.0.3",this.userEvents=["keydown","keyup","mousedown","mouseup","mousemove","mouseover","mouseenter","mouseout","mouseleave","touchmove","touchstart","touchend","touchcancel","wheel","click","dblclick","input","visibilitychange"],this.attributeEvents=["onblur","onclick","oncontextmenu","ondblclick","onfocus","onmousedown","onmouseenter","onmouseleave","onmousemove","onmouseout","onmouseover","onmouseup","onmousewheel","onscroll","onsubmit"]}async t(){this.i(),this.o(),/iP(ad|hone)/.test(navigator.userAgent)&&this.h(),this.u(),this.l(this),this.m(),this.k(this),this.p(this),this._(),await Promise.all([this.R(),this.L()]),this.lastBreath=Date.now(),this.S(this),this.P(),this.D(),this.O(),this.M(),await this.C(this.delayedScripts.normal),await this.C(this.delayedScripts.defer),await this.C(this.delayedScripts.async),this.F("domReady"),await this.T(),await this.j(),await this.I(),this.F("windowLoad"),await this.A(),window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this.everythingLoaded=!0,this.lastTouchEnd&&await new Promise((t=>setTimeout(t,500-Date.now()+this.lastTouchEnd))),this.H(),this.F("all"),this.U(),this.W()}i(){this.CSPIssue=sessionStorage.getItem("rocketCSPIssue"),document.addEventListener("securitypolicyviolation",(t=>{this.CSPIssue||"script-src-elem"!==t.violatedDirective||"data"!==t.blockedURI||(this.CSPIssue=!0,sessionStorage.setItem("rocketCSPIssue",!0))}),{isRocket:!0})}o(){window.addEventListener("pageshow",(t=>{this.persisted=t.persisted,this.realWindowLoadedFired=!0}),{isRocket:!0}),window.addEventListener("pagehide",(()=>{this.onFirstUserAction=null}),{isRocket:!0})}h(){let t;function e(e){t=e}window.addEventListener("touchstart",e,{isRocket:!0}),window.addEventListener("touchend",(function i(o){Math.abs(o.changedTouches[0].pageX-t.changedTouches[0].pageX)<10&&Math.abs(o.changedTouches[0].pageY-t.changedTouches[0].pageY)<10&&o.timeStamp-t.timeStamp<200&&(o.target.dispatchEvent(new PointerEvent("click",{target:o.target,bubbles:!0,cancelable:!0,detail:1})),event.preventDefault(),window.removeEventListener("touchstart",e,{isRocket:!0}),window.removeEventListener("touchend",i,{isRocket:!0}))}),{isRocket:!0})}q(t){this.userActionTriggered||("mousemove"!==t.type||this.firstMousemoveIgnored?"keyup"===t.type||"mouseover"===t.type||"mouseout"===t.type||(this.userActionTriggered=!0,this.onFirstUserAction&&this.onFirstUserAction()):this.firstMousemoveIgnored=!0),"click"===t.type&&t.preventDefault(),this.savedUserEvents.length>0&&(t.stopPropagation(),t.stopImmediatePropagation()),"touchstart"===this.lastEvent&&"touchend"===t.type&&(this.lastTouchEnd=Date.now()),"click"===t.type&&(this.lastTouchEnd=0),this.lastEvent=t.type,this.savedUserEvents.push(t)}u(){this.savedUserEvents=[],this.userEventHandler=this.q.bind(this),this.userEvents.forEach((t=>window.addEventListener(t,this.userEventHandler,{passive:!1,isRocket:!0})))}U(){this.userEvents.forEach((t=>window.removeEventListener(t,this.userEventHandler,{passive:!1,isRocket:!0}))),this.savedUserEvents.forEach((t=>{t.target.dispatchEvent(new window[t.constructor.name](t.type,t))}))}m(){this.eventsMutationObserver=new MutationObserver((t=>{const e="return false";for(const i of t){if("attributes"===i.type){const t=i.target.getAttribute(i.attributeName);t&&t!==e&&(i.target.setAttribute("data-rocket-"+i.attributeName,t),i.target["rocket"+i.attributeName]=new Function("event",t),i.target.setAttribute(i.attributeName,e))}"childList"===i.type&&i.addedNodes.forEach((t=>{if(t.nodeType===Node.ELEMENT_NODE)for(const i of t.attributes)this.attributeEvents.includes(i.name)&&i.value&&""!==i.value&&(t.setAttribute("data-rocket-"+i.name,i.value),t["rocket"+i.name]=new Function("event",i.value),t.setAttribute(i.name,e))}))}})),this.eventsMutationObserver.observe(document,{subtree:!0,childList:!0,attributeFilter:this.attributeEvents})}H(){this.eventsMutationObserver.disconnect(),this.attributeEvents.forEach((t=>{document.querySelectorAll("[data-rocket-"+t+"]").forEach((e=>{e.setAttribute(t,e.getAttribute("data-rocket-"+t)),e.removeAttribute("data-rocket-"+t)}))}))}k(t){Object.defineProperty(HTMLElement.prototype,"onclick",{get(){return this.rocketonclick||null},set(e){this.rocketonclick=e,this.setAttribute(t.everythingLoaded?"onclick":"data-rocket-onclick","this.rocketonclick(event)")}})}S(t){function e(e,i){let o=e[i];e[i]=null,Object.defineProperty(e,i,{get:()=>o,set(s){t.everythingLoaded?o=s:e["rocket"+i]=o=s}})}e(document,"onreadystatechange"),e(window,"onload"),e(window,"onpageshow");try{Object.defineProperty(document,"readyState",{get:()=>t.rocketReadyState,set(e){t.rocketReadyState=e},configurable:!0}),document.readyState="loading"}catch(t){console.log("WPRocket DJE readyState conflict, bypassing")}}l(t){this.originalAddEventListener=EventTarget.prototype.addEventListener,this.originalRemoveEventListener=EventTarget.prototype.removeEventListener,this.savedEventListeners=[],EventTarget.prototype.addEventListener=function(e,i,o){o&&o.isRocket||!t.B(e,this)&&!t.userEvents.includes(e)||t.B(e,this)&&!t.userActionTriggered||e.startsWith("rocket-")||t.everythingLoaded?t.originalAddEventListener.call(this,e,i,o):t.savedEventListeners.push({target:this,remove:!1,type:e,func:i,options:o})},EventTarget.prototype.removeEventListener=function(e,i,o){o&&o.isRocket||!t.B(e,this)&&!t.userEvents.includes(e)||t.B(e,this)&&!t.userActionTriggered||e.startsWith("rocket-")||t.everythingLoaded?t.originalRemoveEventListener.call(this,e,i,o):t.savedEventListeners.push({target:this,remove:!0,type:e,func:i,options:o})}}F(t){"all"===t&&(EventTarget.prototype.addEventListener=this.originalAddEventListener,EventTarget.prototype.removeEventListener=this.originalRemoveEventListener),this.savedEventListeners=this.savedEventListeners.filter((e=>{let i=e.type,o=e.target||window;return"domReady"===t&&"DOMContentLoaded"!==i&&"readystatechange"!==i||("windowLoad"===t&&"load"!==i&&"readystatechange"!==i&&"pageshow"!==i||(this.B(i,o)&&(i="rocket-"+i),e.remove?o.removeEventListener(i,e.func,e.options):o.addEventListener(i,e.func,e.options),!1))}))}p(t){let e;function i(e){return t.everythingLoaded?e:e.split(" ").map((t=>"load"===t||t.startsWith("load.")?"rocket-jquery-load":t)).join(" ")}function o(o){function s(e){const s=o.fn[e];o.fn[e]=o.fn.init.prototype[e]=function(){return this[0]===window&&t.userActionTriggered&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=i(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{const e=arguments[0][t];delete arguments[0][t],arguments[0][i(t)]=e}))),s.apply(this,arguments),this}}if(o&&o.fn&&!t.allJQueries.includes(o)){const e={DOMContentLoaded:[],"rocket-DOMContentLoaded":[]};for(const t in e)document.addEventListener(t,(()=>{e[t].forEach((t=>t()))}),{isRocket:!0});o.fn.ready=o.fn.init.prototype.ready=function(i){function s(){parseInt(o.fn.jquery)>2?setTimeout((()=>i.bind(document)(o))):i.bind(document)(o)}return t.realDomReadyFired?!t.userActionTriggered||t.fauxDomReadyFired?s():e["rocket-DOMContentLoaded"].push(s):e.DOMContentLoaded.push(s),o([])},s("on"),s("one"),s("off"),t.allJQueries.push(o)}e=o}t.allJQueries=[],o(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){o(t)}})}P(){const t=new Map;document.write=document.writeln=function(e){const i=document.currentScript,o=document.createRange(),s=i.parentElement;let n=t.get(i);void 0===n&&(n=i.nextSibling,t.set(i,n));const c=document.createDocumentFragment();o.setStart(c,0),c.appendChild(o.createContextualFragment(e)),s.insertBefore(c,n)}}async R(){return new Promise((t=>{this.userActionTriggered?t():this.onFirstUserAction=t}))}async L(){return new Promise((t=>{document.addEventListener("DOMContentLoaded",(()=>{this.realDomReadyFired=!0,t()}),{isRocket:!0})}))}async I(){return this.realWindowLoadedFired?Promise.resolve():new Promise((t=>{window.addEventListener("load",t,{isRocket:!0})}))}M(){this.pendingScripts=[];this.scriptsMutationObserver=new MutationObserver((t=>{for(const e of t)e.addedNodes.forEach((t=>{"SCRIPT"!==t.tagName||t.noModule||t.isWPRocket||this.pendingScripts.push({script:t,promise:new Promise((e=>{const i=()=>{const i=this.pendingScripts.findIndex((e=>e.script===t));i>=0&&this.pendingScripts.splice(i,1),e()};t.addEventListener("load",i,{isRocket:!0}),t.addEventListener("error",i,{isRocket:!0}),setTimeout(i,1e3)}))})}))})),this.scriptsMutationObserver.observe(document,{childList:!0,subtree:!0})}async j(){await this.J(),this.pendingScripts.length?(await this.pendingScripts[0].promise,await this.j()):this.scriptsMutationObserver.disconnect()}D(){this.delayedScripts={normal:[],async:[],defer:[]},document.querySelectorAll("script[type$=rocketlazyloadscript]").forEach((t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)}))}async _(){await this.L();let t=[];document.querySelectorAll("script[type$=rocketlazyloadscript][data-rocket-src]").forEach((e=>{let i=e.getAttribute("data-rocket-src");if(i&&!i.startsWith("data:")){i.startsWith("//")&&(i=location.protocol+i);try{const o=new URL(i).origin;o!==location.origin&&t.push({src:o,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}catch(t){}}})),t=[...new Map(t.map((t=>[JSON.stringify(t),t]))).values()],this.N(t,"preconnect")}async $(t){if(await this.G(),!0!==t.noModule||!("noModule"in HTMLScriptElement.prototype))return new Promise((e=>{let i;function o(){(i||t).setAttribute("data-rocket-status","executed"),e()}try{if(navigator.userAgent.includes("Firefox/")||""===navigator.vendor||this.CSPIssue)i=document.createElement("script"),[...t.attributes].forEach((t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),i.setAttribute(e,t.nodeValue))})),t.text&&(i.text=t.text),t.nonce&&(i.nonce=t.nonce),i.hasAttribute("src")?(i.addEventListener("load",o,{isRocket:!0}),i.addEventListener("error",(()=>{i.setAttribute("data-rocket-status","failed-network"),e()}),{isRocket:!0}),setTimeout((()=>{i.isConnected||e()}),1)):(i.text=t.text,o()),i.isWPRocket=!0,t.parentNode.replaceChild(i,t);else{const i=t.getAttribute("data-rocket-type"),s=t.getAttribute("data-rocket-src");i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",o,{isRocket:!0}),t.addEventListener("error",(i=>{this.CSPIssue&&i.target.src.startsWith("data:")?(console.log("WPRocket: CSP fallback activated"),t.removeAttribute("src"),this.$(t).then(e)):(t.setAttribute("data-rocket-status","failed-network"),e())}),{isRocket:!0}),s?(t.fetchPriority="high",t.removeAttribute("data-rocket-src"),t.src=s):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}}catch(i){t.setAttribute("data-rocket-status","failed-transform"),e()}}));t.setAttribute("data-rocket-status","skipped")}async C(t){const e=t.shift();return e?(e.isConnected&&await this.$(e),this.C(t)):Promise.resolve()}O(){this.N([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}N(t,e){this.trash=this.trash||[];let i=!0;var o=document.createDocumentFragment();t.forEach((t=>{const s=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(s&&!s.startsWith("data:")){const n=document.createElement("link");n.href=s,n.rel=e,"preconnect"!==e&&(n.as="script",n.fetchPriority=i?"high":"low"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),t.nonce&&(n.nonce=t.nonce),o.appendChild(n),this.trash.push(n),i=!1}})),document.head.appendChild(o)}W(){this.trash.forEach((t=>t.remove()))}async T(){try{document.readyState="interactive"}catch(t){}this.fauxDomReadyFired=!0;try{await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this.G(),window.dispatchEvent(new Event("rocket-DOMContentLoaded"))}catch(t){console.error(t)}}async A(){try{document.readyState="complete"}catch(t){}try{await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),window.dispatchEvent(new Event("rocket-load")),await this.G(),window.rocketonload&&window.rocketonload(),await this.G(),this.allJQueries.forEach((t=>t(window).trigger("rocket-jquery-load"))),await this.G();const t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this.G(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}catch(t){console.error(t)}}async G(){Date.now()-this.lastBreath>45&&(await this.J(),this.lastBreath=Date.now())}async J(){return document.hidden?new Promise((t=>setTimeout(t))):new Promise((t=>requestAnimationFrame(t)))}B(t,e){return e===document&&"readystatechange"===t||(e===document&&"DOMContentLoaded"===t||(e===window&&"DOMContentLoaded"===t||(e===window&&"load"===t||e===window&&"pageshow"===t)))}static run(){(new RocketLazyLoadScripts).t()}}RocketLazyLoadScripts.run()})();</script>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="facebook-domain-verification" content="n0134ytg3vlixio8ouysvnv1feiozj">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<script src="data:text/javascript;base64,d2luZG93Ll93Y2EgPSB3aW5kb3cuX3djYSB8fCBbXTs=" data-rocket-status="executed">window._wca = window._wca || [];</script>

	<!-- This site is optimized with the Yoast SEO plugin v23.5 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>AyanAcademy</title>
<link crossorigin="" data-rocket-preconnect="" href="https://fonts.googleapis.com/" rel="preconnect">
<link crossorigin="" data-rocket-preconnect="" href="https://stats.wp.com/" rel="preconnect">
<link crossorigin="" data-rocket-preconnect="" href="https://i0.wp.com/" rel="preconnect">
<link data-rocket-preload="" as="style" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/css" rel="preload">
<link href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/css" media="all" onload="this.media=&#39;all&#39;" rel="stylesheet">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CAbril%20Fatface%3Aregular&#038;subset=latin&#038;display=swap"></noscript><link rel="preload" data-rocket-preload="" as="image" href="banner1.jpg" fetchpriority="high">
	<meta name="description" content="AyanAcademy">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta property="og:title" content="AyanAcademy">
	<meta property="og:description" content="AyanAcademy">
	<meta property="og:site_name" content="AyanAcademy">
	<meta property="article:modified_time" content="2025-01-04T04:59:17+00:00">
	<meta property="og:image" content="banner1.jpg">
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
<meta property="og:site_name" content="AyanAcademy">
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
		
	<link rel="shortcut icon" type="image/x-icon" href="thumbnail.png">
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<link rel="preconnect" href="https://code.tidio.co/">		<style>
			#wp-admin-bar-stm_lms_settings			img {
				max-width: 25px;
				vertical-align: top;
				position: relative;
				top: 3px;
			}
		</style>
		<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
<link rel="icon" href="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/07/cropped-PEC-blank-logo.png?fit=32%2C32&amp;ssl=1" sizes="32x32">
<link rel="icon" href="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/07/cropped-PEC-blank-logo.png?fit=192%2C192&amp;ssl=1" sizes="192x192">
<link rel="apple-touch-icon" href="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/07/cropped-PEC-blank-logo.png?fit=180%2C180&amp;ssl=1">
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
	  background-color:#2c75e4;
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
{background-color:#2c75e4;}
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
				.vc_custom_1645950070151{background-image: url(banner1.jpg) !important;}
				.vc_custom_1645695539961{margin-bottom: 44px !important;}.vc_custom_1536836667813{margin-bottom: 0px !important;padding-top: 29px !important;padding-bottom: 60px !important;}.vc_custom_1645989356413{margin-bottom: 0px !important;background-image: url(https://pecpte.com/wp-content/uploads/2022/02/pecpte-background.jpg?id=5305) !important;}.vc_custom_1579768494906{margin-bottom: 0px !important;background-color: #e8e8e8 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1436164243861{margin-bottom: 28px !important;}.vc_custom_1579437107739{margin-top: !important;}.vc_custom_1645986912369{margin-top: -150px !important;}.vc_custom_1579595041823{margin-bottom: 51px !important;}.vc_custom_1436163882282{margin-bottom: 46px !important;}.vc_custom_1579595072581{margin-bottom: 11px !important;}.vc_custom_1646028687037{margin-right: 210px !important;}.vc_custom_1579416932851{margin-bottom: -13px !important;}.vc_custom_1536751636857{margin-bottom: 47px !important;}.vc_custom_1437023252855{margin-top: 7px !important;margin-bottom: 0px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>    <style id="rocket-lazyrender-inline-css">[data-wpr-lazyrender] {content-visibility: auto;}</style><meta name="generator" content="WP Rocket 3.19.3" data-wpr-features="wpr_delay_js wpr_defer_js wpr_minify_js wpr_lazyload_images wpr_preconnect_external_domains wpr_automatic_lazy_rendering wpr_oci wpr_minify_css wpr_preload_links wpr_desktop"><link rel="prefetch" href="https://pecpte.com/events/pte-exam-fee/"></head>
<body class="home page-template-default page page-id-7 stm_lms_button theme-masterstudy woocommerce-js skin_custom_color classic_lms masterstudy-theme stm_preloader_0 wpb-js-composer js-comp-ver-6.8.0 vc_responsive" ontouchstart="" style="padding-bottom: 0px;">


<div id="wrapper">

    
    
<div id="header" class="transparent_header sticky_header" data-color="" style="padding-bottom: 0px;">

			<div class="header_top_bar" style="background-color:#2c75e4">
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
			                <a href="https://pecpte.com/user-account/">
                <span class="vertical_divider"></span>
                <a href=""></a>
			        </div>
    </div>
			            <!-- Header top bar Socials -->
							<div class="pull-right">
    <div class="header_top_bar_socs">
        <ul class="clearfix">
            <li><a href=""><i class="fab fa-facebook"></i></a></li><li><a href=""><i class="fab fa-twitter"></i></a></li><li><a href=""><i class="fab fa-instagram"></i></a></li><li><a href=""><i class="fab fa-linkedin"></i></a></li>        </ul>
    </div>
</div>			
				<div class="pull-right xs-pull-left">
		<ul class="top_bar_info clearfix">
							<li class="hidden-info">
                    <i class="far fa-clock"></i> Monday- Saturday 10.00 - 6.00				</li>
										<li class="hidden-info">
                    <i class="fa fa-map-marker-alt"></i> House no-440 ( 2nd Floor Left Side), Road no-6, Avenue-6, Mirpur-DOHS,Dhaka-1216				</li>
										<li class="hidden-info">
                    <i class="fa fa-phone"></i> +880 1876196019                </li>
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
                	<a href="">
		<img class="img-responsive logo_transparent_static visible" src="thumbnail.png" style="width: 50px;" alt="PEC-Education">
					<img class="img-responsive logo_colored_fixed hidden" src="logo.png" style="width: 250px;" alt="PEC-Education">
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
				    <li id="menu-item-2065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-2065"><a href="" aria-current="page">Home</a><div class="magic_line" style="max-width: 0px;"></div></li>
<li id="menu-item-2251" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2251"><a href="/about">About Us</a><span class="arrow"><i class="fa fa-angle-right"></i></span>
<ul class="sub-menu">
	<li id="menu-item-4979" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4979"><a href="team.html">Our Team</a></li>
	<li id="menu-item-3719" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3719"><a href="mission.html">Our Mission</a></li>
	<li id="menu-item-3720" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3720"><a href="mission.html">Our Vision</a></li>
	<li id="menu-item-3721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3721"><a href="certificates.html">Certificates</a></li>
</ul>
<div class="magic_line" style="max-width: 0px;"></div></li>
<li id="menu-item-1176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1176"><a href="https://pecpte.com/services/">Services</a><span class="arrow"><i class="fa fa-angle-right"></i></span>
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
<li id="menu-item-1873" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1873"><a href="study.php">Courses</a><span class="arrow"><i class="fa fa-angle-right"></i></span>
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
<li id="menu-item-1492" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1492"><a href="">Gallery</a><span class="arrow"><i class="fa fa-angle-right"></i></span>
<ul class="sub-menu">
	<li id="menu-item-3726" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3726"><a href="">PTE Score Card</a></li>
	<li id="menu-item-3757" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3757"><a href="">Seminar Pics</a></li>
	<li id="menu-item-1566" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1566"><a href="">FAQ</a></li>
</ul>
<div class="magic_line" style="max-width: 0px;"></div></li>
<li id="menu-item-1167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1167"><a href="">Contact Us</a><div class="magic_line" style="max-width: 0px;"></div></li>
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
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-2065"><a href="" aria-current="page">Home</a><div class="magic_line line_visible" style="max-width: 42px;"></div></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2251"><a href="about.php">About Us</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4979"><a href="team.html">Our Team</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3719"><a href="mission.html">Our Mission</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3720"><a href="mission.html">Our Vision</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3721"><a href="certificates.html">Our Achievements</a></li>
</ul>
<div class="magic_line" style="max-width: 73.113px;"></div></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1176"><a href="study.php">Services</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3713"><a href="">Study Abroad</a>
	<ul class="sub-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4251"><a href="study.php">Study in Australia</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4252"><a href="study.php">Study in Canada</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4250"><a href="study.php">Study in the USA </a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4247"><a href="study.php">Study in Germany </a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4249"><a href="study.php">Study in New Zealand</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4248"><a href="study.php">Study in Denmak</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4248"><a href="study.php">Study in Hungry</a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4248"><a href="study.php">Study in Natherlands</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5442"><a href="study.php">PTE Exam Registration</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5448"><a href="study.php">PTE Mock Tests</a></li>
</ul>
<div class="magic_line" style="max-width: 70.55px;"></div></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1873"><a href="course.php">Courses</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5497"><a href="course.php">PTE Academic</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5845"><a href="course.php">PTE Core </a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3724"><a href="course.php">PTE UKVI</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4163"><a href="course.php">Pre-PTE Course</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php">Basic English</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php">AtoZ Grammar</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php">Spoken English</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php">Phonetics</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php">TOEFL IBT Test</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="course.php">IELTS</a></li>
</ul>
<div class="magic_line" style="max-width: 69.2375px;"></div></li>

<div class="magic_line" style="max-width: 39.6875px;"></div></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1492"><a href="galary.php">Gallery</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3726"><a href="galary.php">PTE Score Card</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3757"><a href="galary.php">Seminar Pics</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1566"><a href="galary.php">FAQ</a></li>
</ul>
<div class="magic_line" style="max-width: 66.375px;"></div></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1167"><a href="contact.php">Contact Us</a><div class="magic_line" style="max-width: 90.738px;"></div></li>
<li class="menu-item wpmenucartli wpmenucart-display-right menu-item empty-wpmenucart" id="wpmenucartli" style=""><a class="wpmenucart-contents empty-wpmenucart" style="display:none">&nbsp;</a><div class="magic_line"></div></li>        </ul>
    </div>

</div>	    </div><!-- md-8 desk menu -->
	    
    </div> <!-- row -->
</div> <!-- container -->    </div>
</div> <!-- id header -->
    <div id="main">

	
<!-- Breads -->
<div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default">

	
	</div>

    <div class="container">

                    <div class="post_type_exist clearfix">
                                    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid pecpte-hero-area vc_custom_1645950070151 vc_row-has-fill vc_row-o-full-height vc_row-o-columns-middle vc_row-o-content-middle vc_row-flex" style="background-position: center top !important; position: relative; left: -160.4px; box-sizing: border-box; width: 1521px; padding-left: 160.4px; padding-right: 160.6px; min-height: 100vh;">
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-xs-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html">
		<div class="wpb_wrapper">
			<h1 class="pecpte-heading" style="color:#fff; line-height:100px; margin-top:50px;"><strong><span class="pecpte-heading-span1" style="font-size:75px; background-color:rgba(0,0,0, .6); padding:10px">Take the first step</span></strong></h1>
		</div>
	</div>
<style type="text/css">.vc_btn3-style-gradient.vc_btn-gradient-btn-69b5960c63730:hover{color: #fff;background-color: #f4524d;border: none;background-position: 100% 0;}</style><style type="text/css">.vc_btn3-style-gradient.vc_btn-gradient-btn-69b5960c63730{color: #fff;border: none;background-color: #fe6c61;background-image: -webkit-linear-gradient(left, #fe6c61 0%, #f4524d 50%,#fe6c61 100%);background-image: linear-gradient(to right, #fe6c61 0%, #f4524d 50%,#fe6c61 100%);-webkit-transition: all .2s ease-in-out;transition: all .2s ease-in-out;background-size: 200% 100%;}</style>
</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1645695539961">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1579437107739"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1645986912369">
		<div class="wpb_wrapper">
			<div class="block-scroll">
    <a href="study.php">
        <div class="block-main b1">
            <div class="block-img">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/oversease_sized.png" class="block-image" alt="Study Abroad" width="90" height="90">
            </div>
            <div class="block-head">Study Abroad</div>
        </div>
    </a><!--Main Block End-->
    <a href="course.php"><!--Main Block-->
        <div class="block-main b3">
            <div class="pte-block-img"><!--icon-->
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/pte-logo-1.png" class="block-image entered lazyloaded" alt="Person PTE Academy" width="190" height="63" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/pte-logo-1.png?resize=190%2C63&amp;ssl=1" data-ll-status="loaded"><noscript><img decoding="async" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/pte-logo-1.png?resize=190%2C63&#038;ssl=1" class="block-image" alt="Person PTE Academy" width="190" height="63"  data-recalc-dims="1"></noscript>
            </div>
        </div>
    </a><!--Main Block End-->
    <a href="course.php"><!--Main Block-->
        <div class="block-main b2">
            <div class="ielts-block-img">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ielts-1.png" class="block-image" alt="IELTS" width="190" height="190">
            </div>
        </div>
    </a><!--Main Block End-->
    <a href="course.php">
        <div class="block-main b4">
            <div class="block-img">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/speaking_sized.png" class="block-image" alt="Spoken English" width="90" height="90">
            </div>
            <div class="block-head">Spoken English</div>
        </div>
    </a><!--Main Block End-->
    <a href="course.php" target="_blank">
        <div class="block-main b5">
            <div class="block-img">
                <img decoding="async" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/online-course_sized.png" class="block-image" alt="Online Courses &amp; PTE Mock Test" width="90" height="90">
            </div>
            <div class="block-head">Online Courses &amp; PTE Mock Test</div>
        </div>
    </a><!--Main Block End-->
</div>
		</div>
	</div>
</div></div></div></div></div></div></div></div>

<div class="vc_row wpb_row vc_row-fluid overflowed_content">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<div class="stm_lms_courses_grid stm_lms_courses all_loaded">

    <div class="stm_lms_courses_grid__top showing">
        <div class="stm_lms_courses_grid__counter">
                            <h2>PTE Courses(On Campus)</h2>
                    </div>
        <div class="stm_lms_courses_grid__sort heading_font stm_lms_grid_sort_module hidden" data-text="Sort by:">
            <select class="no-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                <option value="date_high">Release date (newest first)</option>
                <option value="date_low">Release date (oldest first)</option>
                <option value="rating">Overall Rating</option>
                <option value="popular">Popular (most viewed)</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-nyv7-container"><span class="select2-selection__rendered" id="select2-nyv7-container" title="Release date (newest first)">Release date (newest first)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
    </div>

                    <div class="stm_lms_courses__grid stm_lms_courses__grid_4 stm_lms_courses__grid_center  stm_lms_courses__grid_found_4" data-pages="1">
    
    


<div class="stm_lms_courses__single stm_lms_courses__single_animation no-sale style_1 ">

    <div class="stm_lms_courses__single__inner">

        
<div class="stm_lms_courses__single--image">

    
    
    
    <a href="" class="heading_font" data-preview="Preview this course">
        <div>
            <div class="stm_lms_lazy_image stm_lms_lazyloaded stm_lms_lazy_image__lazyloaded"><img data-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/02/1765-1-scaled-544x322.jpg 2x" class=" lazyloaded" data-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/02/1765-1-scaled-272x161.jpg" width="272" height="161" alt="Diverse adult students working in computer class. Line of man and women in casual sitting at table, using desktops, typing, looking at monitor. Training course concept" title="Diverse adult students working in computer class" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/02/1765-1-scaled-544x322.jpg 2x" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/1765-1-scaled-272x161.jpg"></div>        </div>
    </a>

</div>
        <div class="stm_lms_courses__single--inner">

            
	<div class="stm_lms_courses__single--terms">
		<div class="stm_lms_courses__single--term">
			PTE 1 to 1 Long Course		</div>
	</div>

            <div class="stm_lms_courses__single--title">
	<a href="">
		<h5>PTE Short Course(Batch)</h5>
	</a>
</div>
            <div class="stm_lms_courses__single--meta">

                
        <div class="stm_lms_courses__hours">
            <i class="stmlms-lms-clocks"></i>
            <span>15 hours Lecture</span>
        </div>
	

                    <div class="stm_lms_courses__single--price heading_font">
                    <strong>TK8,000</strong>
            </div>

            </div>

        </div>

        

<div class="stm_lms_courses__single--info">
            <div class="stm_lms_courses__single--info_author">
            <div class="stm_lms_courses__single--info_author__avatar">
                </noscript>            </div>
            <div class="stm_lms_courses__single--info_author__login">
                Ayan Academy            </div>
        </div>
    
    <div class="stm_lms_courses__single--info_title">
        <a href="">
            <h4>PTE Short Course(Batch)</h4>
        </a>
    </div>

    <div class="stm_lms_courses__single--info_rate">

        
        
    </div>

    <div class="stm_lms_courses__single--info_excerpt">
            </div>

    <div class="stm_lms_courses__single--info_meta">

        	<div class="stm_lms_course__meta">
		<i class="stmlms-level"></i>
		Intermediate	</div>

	<div class="stm_lms_course__meta">
		<i class="stmlms-cats"></i>
		1 Lectures	</div>

	<div class="stm_lms_course__meta">
		<i class="stmlms-lms-clocks"></i>
		15 hours Lecture	</div>

    </div>

    <div class="stm_lms_courses__single--info_preview">
        <a href="" title="PTE Short Course(Batch)" class="heading_font">
            Preview this course        </a>
    </div>

    <div class="stm_lms_courses__single--info_bottom">
        
<div class="stm-lms-wishlist" data-add="Add to Wishlist" data-add-icon="far fa-heart" data-remove="Wishlisted" data-remove-icon="fa fa-heart" data-id="3050">
	        <i class="far fa-heart"></i>
        <span>Add to Wishlist</span>
	</div>

            <div class="stm_lms_courses__single--price heading_font">
                    <strong>TK8,000</strong>
            </div>
    </div>


</div>



    </div>

</div>        </div>

    <div class="hidden">
        
<div class="text-center">
    <a href="" class="btn btn-default stm_lms_load_more_courses" data-offset="1" data-template="courses/grid" data-url="" data-args="{&quot;per_row&quot;:&quot;4&quot;,&quot;include_link&quot;:true,&quot;posts_per_page&quot;:&quot;4&quot;,&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;stm_lms_course_taxonomy&quot;,&quot;field&quot;:&quot;term_id&quot;,&quot;terms&quot;:[&quot;154&quot;]}]}" style="display: none;">
        <span>Load more</span>
    </a>
</div>    </div>

</div>

<div class="stm_lms_courses_grid stm_lms_courses all_loaded">

    <div class="stm_lms_courses_grid__top showing">
        <div class="stm_lms_courses_grid__counter">
                            <h2>PTE COURSES(Online)</h2>
                    </div>
        <div class="stm_lms_courses_grid__sort heading_font stm_lms_grid_sort_module hidden" data-text="Sort by:">
            <select class="no-search select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                <option value="date_high">Release date (newest first)</option>
                <option value="date_low">Release date (oldest first)</option>
                <option value="rating">Overall Rating</option>
                <option value="popular">Popular (most viewed)</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-2sqi-container"><span class="select2-selection__rendered" id="select2-2sqi-container" title="Release date (newest first)">Release date (newest first)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>
    </div>

                    <div class="stm_lms_courses__grid stm_lms_courses__grid_4 stm_lms_courses__grid_center  stm_lms_courses__grid_found_4" data-pages="1">
    
    

<div class="stm_lms_courses__single stm_lms_courses__single_animation no-sale style_1 ">

    <div class="stm_lms_courses__single__inner">

        
<div class="stm_lms_courses__single--image">

    
    
            <div class="stm_lms_post_status heading_font special">
            Special        </div>
    
    <a href="" class="heading_font" data-preview="Preview this course">
        <div>
            <div class="stm_lms_lazy_image stm_lms_lazyloaded stm_lms_lazy_image__lazyloaded"><img data-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/02/989-scaled-544x322.jpg 2x" class=" lazyloaded" data-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/02/989-scaled-272x161.jpg" width="272" height="161" alt="Five young people studying on white desk. Beautiful women and men working together wearing casual clothes. Multi-ethnic group." title="Multi-ethnic group of young men and women studying indoors." srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/02/989-scaled-544x322.jpg 2x" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/989-scaled-272x161.jpg"></div>        </div>
    </a>

</div>
        <div class="stm_lms_courses__single--inner">

            
	<div class="stm_lms_courses__single--terms">
		<div class="stm_lms_courses__single--term">
			Online PTE Academic		</div>
	</div>

            <div class="stm_lms_courses__single--title">
	<a href="">
		<h5>PTE short course online(One On One)</h5>
	</a>
</div>
            <div class="stm_lms_courses__single--meta">

                


                    <div class="stm_lms_courses__single--price heading_font">
                    <strong>TK12,900</strong>
            </div>

            </div>

        </div>

        

<div class="stm_lms_courses__single--info">
            <div class="stm_lms_courses__single--info_author">
            <div class="stm_lms_courses__single--info_author__avatar">
                </noscript>            </div>
            <div class="stm_lms_courses__single--info_author__login">
                Ayan Academy        </div>
        </div>
    
    <div class="stm_lms_courses__single--info_title">
        <a href="">
            <h4>PTE short course online(One On One)</h4>
        </a>
    </div>

    <div class="stm_lms_courses__single--info_rate">

        
        
    </div>

    <div class="stm_lms_courses__single--info_excerpt">
            </div>

    <div class="stm_lms_courses__single--info_meta">

        
	<div class="stm_lms_course__meta">
		<i class="stmlms-cats"></i>
		2 Lectures	</div>


    </div>

    <div class="stm_lms_courses__single--info_preview">
        <a href="" title="PTE short course online(One On One)" class="heading_font">
            Preview this course        </a>
    </div>

    <div class="stm_lms_courses__single--info_bottom">
            <div class="stm_lms_courses__single--price heading_font">
                    <strong>TK12,900</strong>
            </div>
    </div>


</div>
    </div>

</div>

       </div>

    <div class="hidden">
        
<div class="text-center">
    <a href="" class="btn btn-default stm_lms_load_more_courses" data-offset="1" data-template="courses/grid" data-url="" data-args="{&quot;per_row&quot;:&quot;4&quot;,&quot;include_link&quot;:true,&quot;posts_per_page&quot;:&quot;4&quot;,&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;stm_lms_course_taxonomy&quot;,&quot;field&quot;:&quot;term_id&quot;,&quot;terms&quot;:[&quot;136&quot;]}]}" style="display: none;">
        <span>Load more</span>
    </a>
</div>    </div>

</div>

		</div>
	</div>




</div></div></div></div>

<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1.6" data-vc-parallax-image="https://i0.wp.com/pecpte.com/wp-content/uploads/2018/09/achivements.jpg?fit=1920%2C1000&amp;ssl=1" class="vc_row wpb_row vc_row-fluid stm_fixed_background vc_custom_1536836667813 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving" style="position: relative; left: -160.4px; box-sizing: border-box; width: 1521px; padding-left: 160.4px; padding-right: 160.6px;">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="aa5b84e1f5e48d81091fc279a089999c3 vc_empty_space" style="height: 42px">
    <span class="vc_empty_space_inner"></span>
</div>
<div class="vc_custom_heading vc_custom_1579595041823 text_align_center"><h2 style="color: #ffffff;text-align: center" class="masterstudy-custom-title">OUR ACHIEVEMENTS</h2></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element  vc_custom_1579595072581">
		<div class="wpb_wrapper">

		</div>
	</div>
</div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1436163882282"><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="stats_counter text-center" style="color:#ffffff" data-id="counter_module__e89daf6be8200b082ae717444152b7be" data-value="278" data-duration="2.5">
			<div class="icon" style="height: 72px;
                "></div>
				<div class="h1" id="counter_module__e89daf6be8200b082ae717444152b7be" style="color:#FFA700">278</div>
				<div class="stats_counter_title h5" style="color:#ffffff">
            Oversease        </div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="stats_counter text-center" style="color:#fff" data-id="counter_module__c6d82503c8914e867e7af4b28d8aaf2c" data-value="470" data-duration="2.5">
			<div class="icon" style="height: 72px;
                "></div>
				<div class="h1" id="counter_module__c6d82503c8914e867e7af4b28d8aaf2c" style="color:#FFA700">470</div>
				<div class="stats_counter_title h5" style="color:#fff">
            Classes complete        </div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="stats_counter text-center" style="color:#fff" data-id="counter_module__fb7a02ba72f3cb0933e3dfe976fff30f" data-value="830" data-duration="2.5">
			<div class="icon" style="height: 72px;
                "></div>
				<div class="h1" id="counter_module__fb7a02ba72f3cb0933e3dfe976fff30f" style="color:#FFA700">830</div>
				<div class="stats_counter_title h5" style="color:#fff">
            Students enrolled        </div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="stats_counter text-center" style="color:#fff" data-id="counter_module__2f96813b4f5bf6dfbf58d8b006fb8192" data-value="06" data-duration="2.5">
			<div class="icon" style="height: 72px;
                "></div>
				<div class="h1" id="counter_module__2f96813b4f5bf6dfbf58d8b006fb8192" style="color:#FFA700">6</div>
				<div class="stats_counter_title h5" style="color:#fff">
            Certified teachers        </div>
	</div>
</div></div></div></div>
<div class="a224a9d1d2a5510525f714cdbecd1fd40 vc_empty_space" style="height: 48px">
    <span class="vc_empty_space_inner"></span>
</div>
</div></div></div><div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -60%;" data-top-bottom="top: 0%;" style="height: 160%; background-image: url(&quot;https://i0.wp.com/pecpte.com/wp-content/uploads/2018/09/achivements.jpg?fit=1920%2C1000&amp;ssl=1&quot;); top: -60%;"></div></div>
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid sbc vc_custom_1645989356413 vc_row-has-fill" style="position: relative; left: -160.4px; box-sizing: border-box; width: 1521px; padding-left: 160.4px; padding-right: 160.6px;">
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-7"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_left">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img decoding="async" width="450" height="450" src="PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png" class="vc_single_image-img attachment-full entered lazyloaded" alt="" title="student-image" data-lazy-srcset="PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?w=450&amp;ssl=1 450w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=300%2C300&amp;ssl=1 300w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=150%2C150&amp;ssl=1 150w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=75%2C75&amp;ssl=1 75w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=129%2C129&amp;ssl=1 129w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=69%2C69&amp;ssl=1 69w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=20%2C20&amp;ssl=1 20w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=100%2C100&amp;ssl=1 100w" data-lazy-sizes="(max-width: 450px) 100vw, 450px" data-lazy-src="PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?fit=450%2C450&amp;ssl=1" data-ll-status="loaded" sizes="(max-width: 450px) 100vw, 450px" srcset="PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?w=450&amp;ssl=1 450w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=300%2C300&amp;ssl=1 300w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=150%2C150&amp;ssl=1 150w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=75%2C75&amp;ssl=1 75w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=129%2C129&amp;ssl=1 129w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=69%2C69&amp;ssl=1 69w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=20%2C20&amp;ssl=1 20w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=100%2C100&amp;ssl=1 100w"><noscript><img decoding="async" width="450" height="450" src="PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?fit=450%2C450&amp;ssl=1" class="vc_single_image-img attachment-full" alt="" title="student-image" srcset="PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?w=450&amp;ssl=1 450w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=300%2C300&amp;ssl=1 300w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=150%2C150&amp;ssl=1 150w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=75%2C75&amp;ssl=1 75w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=129%2C129&amp;ssl=1 129w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=69%2C69&amp;ssl=1 69w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=20%2C20&amp;ssl=1 20w, PEC- Education - PTE Academic In Dhaka, Bangladesh_files/student-image.png?resize=100%2C100&amp;ssl=1 100w" sizes="(max-width: 450px) 100vw, 450px" /></noscript></div>
		</figure>
	</div>
    <div class="text-center  vc_custom_1646028687037">
        <div class="stm_countdown" id="countdown_364368"><div class="countdown_ended h2">Time is up, sorry!</div></div>
    </div>

    <script src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHsKICAgICAgICBqUXVlcnkoZnVuY3Rpb24gKCQpIHsKICAgICAgICAgICAgdmFyIGZsYXNoID0gZmFsc2U7CiAgICAgICAgICAgIHZhciB0cyA9IDE2NDg3MzE2MDAwMDA7CiAgICAgICAgICAgIHZhciB0aW1lVXAgPSAnVGltZSBpcyB1cCwgc29ycnkhJzsKICAgICAgICAgICAgaWYgKChuZXcgRGF0ZSgpKSA8IHRzKSB7CiAgICAgICAgICAgICAgICAkKCcjY291bnRkb3duXzM2NDM2OCcpLmNvdW50ZG93bih7CiAgICAgICAgICAgICAgICAgICAgdGltZXN0YW1wOiB0cywKICAgICAgICAgICAgICAgICAgICBjYWxsYmFjazogZnVuY3Rpb24gKGRheXMsIGhvdXJzLCBtaW51dGVzLCBzZWNvbmRzKSB7CiAgICAgICAgICAgICAgICAgICAgICAgIHZhciBzdW1tYXJ5VGltZSA9IGRheXMgKyBob3VycyArIG1pbnV0ZXMgKyBzZWNvbmRzOwogICAgICAgICAgICAgICAgICAgICAgICBpZiAoc3VtbWFyeVRpbWUgPT0gMCkgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgJCgnI2NvdW50ZG93bl8zNjQzNjgnKS5odG1sKCc8ZGl2IGNsYXNzPSJjb3VudGRvd25fZW5kZWQgaDIiPicgKyB0aW1lVXAgKyAnPC9kaXY+Jyk7CiAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgICAgICQoJyNjb3VudGRvd25fMzY0MzY4JykuaHRtbCgnPGRpdiBjbGFzcz0iY291bnRkb3duX2VuZGVkIGgyIj4nICsgdGltZVVwICsgJzwvZGl2PicpOwogICAgICAgICAgICB9CiAgICAgICAgfSk7CiAgICB9KTs=" data-rocket-status="executed">window.addEventListener('DOMContentLoaded', function() {
        jQuery(function ($) {
            var flash = false;
            var ts = 1648731600000;
            var timeUp = 'Time is up, sorry!';
            if ((new Date()) < ts) {
                $('#countdown_364368').countdown({
                    timestamp: ts,
                    callback: function (days, hours, minutes, seconds) {
                        var summaryTime = days + hours + minutes + seconds;
                        if (summaryTime == 0) {
                            $('#countdown_364368').html('<div class="countdown_ended h2">' + timeUp + '</div>');
                        }
                    }
                });
            } else {
                $('#countdown_364368').html('<div class="countdown_ended h2">' + timeUp + '</div>');
            }
        });
    });</script>

    <style>
        .stm_countdown .countdown_label {
            color: #eeee22 !important;
        }
    </style>
<div class="vc_custom_heading text_align_left"></div>
<div class="vc_custom_heading fwl text_align_left">
	</div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-5"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html">
		<div class="wpb_wrapper">
			<div data-uniq="69b5960d6c0d2" class="uniq-69b5960d6c0d2 formcraft-css form-live align-left"><input type="hidden" id="formcraft3_wpnonce" name="formcraft3_wpnonce" value="9f0933d2ae"><input type="hidden" name="_wp_http_referer" value="/"><div class="fc-pagination-cover fc-pagination-1">
				<div class="fc-pagination" style="width: 100%">
					<div class="pagination-trigger active" data-index="0">
						<span class="page-number"><span>1</span></span>
						<span class="page-name ">Step 1</span>
						
					</div>
				</div>
			</div>
			
			<style scoped="scoped">
			@media (max-width : 480px) {
				.fc_modal-dialog-2 .fc-pagination-cover .fc-pagination
				{
					background-color: white !important;
				}
			}
						.formcraft-css .fc-form.fc-form-2 .form-element .submit-cover .submit-button,
			.formcraft-css .fc-form.fc-form-2 .form-element .fileupload-cover .button-file,
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover .button,
			.formcraft-datepicker .ui-datepicker-header,
			.formcraft-datepicker .ui-datepicker-title
			{
				background: #4488ee;
				color: #fff;
			}
			.formcraft-datepicker td .ui-state-active,
			.formcraft-datepicker td .ui-state-hover,
			.formcraft-css .fc-form.fc-form-2 .form-element .slider-cover .ui-slider-range
			{
				background: #4488ee;
			}
			#ui-datepicker-div.formcraft-datepicker .ui-datepicker-header,
			.formcraft-css .fc-form .field-cover>div.full hr
			{
				border-color: #3b77d1;
			}
			#ui-datepicker-div.formcraft-datepicker .ui-datepicker-prev:hover,
			#ui-datepicker-div.formcraft-datepicker .ui-datepicker-next:hover,
			#ui-datepicker-div.formcraft-datepicker select.ui-datepicker-month:hover,
			#ui-datepicker-div.formcraft-datepicker select.ui-datepicker-year:hover
			{
				background-color: #3b77d1;
			}
			.formcraft-css .fc-pagination>div.active .page-number,
			.formcraft-css .form-cover-builder .fc-pagination>div:first-child .page-number
			{
				background-color: #4488ee;
				color: #fff;
			}
			#ui-datepicker-div.formcraft-datepicker table.ui-datepicker-calendar th,
			#ui-datepicker-div.formcraft-datepicker table.ui-datepicker-calendar td.ui-datepicker-today a,
			.formcraft-css .fc-form.fc-form-2 .form-element .star-cover label,
			html .formcraft-css .fc-form.label-floating .form-element .field-cover.has-focus>span,
			.formcraft-css .fc-form.fc-form-2 .form-element .customText-cover a,
			.formcraft-css .prev-next>div span:hover
			{
				color: #4488ee;
			}
			.formcraft-css .fc-form.fc-form-2 .form-element .customText-cover a:hover
			{
				color: #3b77d1;
			}
			html .formcraft-css .fc-form.fc-form-2.label-floating .form-element .field-cover > span
			{
				color: #666666;
			}
			html .formcraft-css .fc-form .final-success .final-success-check {
				border: 2px solid #666666;
			}
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="text"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="email"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="password"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="tel"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover textarea,
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover select,
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover .time-fields-cover,
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover .awesomplete ul
			{
				color: #777;
			}
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="text"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="password"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="email"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="radio"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="checkbox"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="tel"],
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover select,
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover textarea
			{
				background-color: #fafafa;
			}
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="radio"]:checked,
			.formcraft-css .fc-form.fc-form-2 .form-element .field-cover input[type="checkbox"]:checked {
				border-color: #3b77d1;
				background: #4488ee;				
			}
			.formcraft-css .fc-form.fc-form-2 .form-element .star-cover label .star
			{
				text-shadow: 0px 1px 0px #3b77d1;
			}
			.formcraft-css .fc-form.fc-form-2 .form-element .slider-cover .ui-slider-range
			{
				box-shadow: 0px 1px 1px #3b77d1 inset;
			}
			.formcraft-css .fc-form.fc-form-2 .form-element .fileupload-cover .button-file
			{
				border-color: #3b77d1;
			}
			.formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="password"]:focus,
			.formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="email"]:focus,
			.formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="tel"]:focus,
			.formcraft-css .fc-form.fc-form-2 .form-element .form-element-html input[type="text"]:focus,
			.formcraft-css .fc-form.fc-form-2 .form-element .form-element-html textarea:focus,
			.formcraft-css .fc-form.fc-form-2 .form-element .form-element-html select:focus
			{
				border-color: #4488ee;
			}
			.formcraft-css .fc-form.fc-form-2 .form-element .form-element-html .field-cover .is-read-only:focus {
				border-color: #ccc;
			}
			.formcraft-css .fc-form.fc-form-2			{
				font-family: inherit;
			}
			@media (max-width : 480px) {
				html .dedicated-page,
				html .dedicated-page .formcraft-css .fc-pagination > div.active
				{
					background: white;
				}
			}
		</style>
		<div class="form-cover">
			<form data-auto-scroll="" data-no-message-redirect="" data-thousand="" data-decimal="." data-delay="" data-id="2" class="fc-form fc-form-2 align- spin- save-form- dont-submit-hidden- remove-asterisk- icons-hide- disable-enter- label-block field-border-visible frame-visible field-alignment-left options-fade align-left" style="width: 580px; color: #666666; font-size: 100%; background: white">
				<div class="form-page form-page-0 active" data-index="0">
					
					<div class="form-page-content     ">
						<div data-identifier="field1" data-index="0" style="width: 50%" class=" form-element form-element-field1 options-false index-false form-element-0 default-false form-element-type-oneLineText is-required-true odd -handle">
							<div class="form-element-html"><div><label class="oneLineText-cover field-cover"><span class="sub-label-true"><span class="main-label"><span>First Name</span></span><span class="sub-label"><span>Enter your First Name</span></span></span><div><span class="error"></span><input type="text" placeholder="" make-read-only="false" data-field-id="field1" name="field1[]" data-min-char="" data-max-char="" data-val-type="" data-regexp="" data-is-required="true" data-allow-spaces="" class="validation-lenient" data-placement="right" data-toggle="tooltip" tooltip="" data-trigger="focus" data-html="true" data-input-mask="" data-mask-placeholder="" data-original-title=""></div></label></div></div>
							
						</div><div data-identifier="field2" data-index="1" style="width: 50%" class=" even form-element form-element-field2 options-false index-false form-element-1 default-false form-element-type-oneLineText is-required-true -handle">
							<div class="form-element-html"><div><label class="oneLineText-cover field-cover"><span class="sub-label-true"><span class="main-label"><span>Last Name</span></span><span class="sub-label"><span>Enter Your Last Name</span></span></span><div><span class="error"></span><input type="text" placeholder="" make-read-only="false" data-field-id="field2" name="field2[]" data-min-char="" data-max-char="" data-val-type="" data-regexp="" data-is-required="true" data-allow-spaces="" class="validation-lenient" data-placement="right" data-toggle="tooltip" tooltip="" data-trigger="focus" data-html="true" data-input-mask="" data-mask-placeholder="" data-original-title=""></div></label></div></div>
							
						</div><div data-identifier="field4" data-index="2" style="width: 100%" class=" form-element form-element-field4 options-false index-false form-element-2 default-false form-element-type-email is-required-false odd -handle">
							<div class="form-element-html"><div><label class="email-cover field-cover"><span class="sub-label-true"><span class="main-label"><span>Email</span></span><span class="sub-label"><span>Enter valid email</span></span></span><div><span class="error"></span><input placeholder="" data-field-id="field4" type="text" data-val-type="email" make-read-only="" data-is-required="false" name="field4" class="validation-lenient" data-placement="right" data-toggle="tooltip" tooltip="" data-trigger="focus" data-html="true" data-original-title=""></div></label></div></div>
							
						</div><div data-identifier="field5" data-index="3" style="width: 100%" class=" even form-element form-element-field5 options-false index-false form-element-3 default-false form-element-type-oneLineText is-required-true -handle">
							<div class="form-element-html"><div><label class="oneLineText-cover field-cover has-input"><span class="sub-label-true"><span class="main-label"><span>Number</span></span><span class="sub-label"><span>Enter phone number</span></span></span><div><span class="error"></span><input type="text" placeholder="+880" make-read-only="false" data-field-id="field5" name="field5[]" data-min-char="" data-max-char="" data-val-type="" data-regexp="" data-is-required="true" data-allow-spaces="" class="validation-lenient" data-placement="right" data-toggle="tooltip" tooltip="" data-trigger="focus" data-html="true" data-input-mask="" data-mask-placeholder="+880" data-original-title=""></div></label></div></div>
							
						</div>
						<input type="submit" value="Submit" class="btn btn-primary" style="margin-bottom:20px;background-color: #4488ee; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
					</div>
				</div>
			</form>
			<div class="prev-next prev-next-1" style="width: 580px; color: #666666; font-size: 100%; background: white">
				<div><input type="text" class="  "><span class="inactive page-prev "><i class="formcraft-icon">keyboard_arrow_left</i>Previous</span></div>
				<div><input type="text" class="  "><span class="page-next ">Next<i class="formcraft-icon">keyboard_arrow_right</i></span></div>
			</div>
		</div></div>
		</div>
	</div>
</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>

<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1436164243861">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_custom_heading vc_custom_1579416932851 text_align_center"><h2 style="text-align: center" class="masterstudy-custom-title">Our Blogs</h2></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1536751636857"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="stm_colored_separatormasterstudy_color_separator_ module__cafc4ce9f11bc27b53b4b6553925c990">
	<div class="triangled_colored_separator">
		<div class="triangle"></div>
	</div>
</div>
</div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="post_list_main_section_wrapper post_list_1983">
				<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="post_list_content_unit">
													<div class="post_list_featured_image">
								<a href="" title="View post details">
									<div class="stm_lms_lazy_image stm_lms_lazyloaded stm_lms_lazy_image__lazyloaded"><img width="370" height="193" data-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2025/05/PTE-Personalized_Coaching.jpg?resize=370%2C193&amp;ssl=1" class="img-responsive wp-post-image lazyloaded" alt="PTE Personalized Coaching" data-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2025/05/PTE-Personalized_Coaching.jpg?resize=370%2C193&amp;ssl=1 370w, https://i0.wp.com/pecpte.com/wp-content/uploads/2025/05/PTE-Personalized_Coaching.jpg?zoom=2&amp;resize=370%2C193&amp;ssl=1 740w, https://i0.wp.com/pecpte.com/wp-content/uploads/2025/05/PTE-Personalized_Coaching.jpg?zoom=3&amp;resize=370%2C193&amp;ssl=1 1110w" data-sizes="(max-width: 370px) 100vw, 370px" sizes="(max-width: 370px) 100vw, 370px" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2025/05/PTE-Personalized_Coaching.jpg?resize=370%2C193&amp;ssl=1 370w, https://i0.wp.com/pecpte.com/wp-content/uploads/2025/05/PTE-Personalized_Coaching.jpg?zoom=2&amp;resize=370%2C193&amp;ssl=1 740w, https://i0.wp.com/pecpte.com/wp-content/uploads/2025/05/PTE-Personalized_Coaching.jpg?zoom=3&amp;resize=370%2C193&amp;ssl=1 1110w" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/PTE-Personalized_Coaching.jpg"></div>								</a>
							</div>
												<div class="row">
															<div class="col-md-3 col-sm-4 col-xs-12">
									<div class="post_list_meta_unit">
										<div class="date-d">26</div>
										<div class="date-m">May</div>
																																																													</div>
								</div>
														<div class="col-md-9 col-sm-8 col-xs-12 ">
								<div class="post_list_inner_content_unit post_list_inner_content_unit_left">
									<a href="" class="post_list_item_title h3">Boost Your PTE Score with PTE Personalized Coaching</a>
									<div class="post_list_item_excerpt"><p>Boost Your PTE Score with Personalized Coaching Getting a high score on the Pearson Test of English (PTE) needs good preparation and PTE personalized coaching. With the right help, you can get better at taking the test and feel more confident. At PEC-Education, we know how key effective PTE coaching is. Our skilled trainers give […]</p>
</div>
									<div class="short_separator"></div>

																			<!-- Post cats -->
																					<div class="post_list_cats">
																																						<a href="">Ayan Academy</a><span class="post_list_divider">,</span>
																							</div>
																			
									<!-- Post tags -->
																	</div> <!-- post_list_inner_content_unit -->
							</div> <!-- inner col -->
						</div> <!-- row -->
					</div> <!-- post_list_content_unit -->
				</div> <!-- col -->
									
									</div> <!-- close row to prevent blocks jumping -->
					<div class="row">
									</div> <!-- row -->
	</div> <!-- post_list_main_section_wrapper -->
	<div class="vc_btn3-container wpb_animate_when_almost_visible wpb_bounceIn bounceIn vc_btn3-inline wpb_start_animation animated">
	<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-modern vc_btn3-icon-left vc_btn3-color-primary" href="" title="" target="_blank"> Read More Blogs</a></div>
</div></div></div></div></div></div></div></div>

<div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="testimonials_main_wrapper simple_carousel_wrapper">
		<div class="clearfix testimonials_control_bar_top">

							<div class="pull-left">
					<h2 class="testimonials_main_title">Testimonials</h2>
				</div>
			
			<div class="pull-right testimonials_control_bar">
				<div class="clearfix">
					
				</div>
			</div>

		</div>
		<div class="testimonials-carousel-unit">
			<div class="testimonials-carousel-init simple_carousel_init clearfix owl-carousel stm_owl-theme owl-loaded owl-text-select-on" data-items="2">
														
														
														
														
														
														
														
														
														
							<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-800px, 0px, 0px); transition: all; width: 5200px;"><div class="owl-item cloned" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=20%2C20&amp;ssl=1 20w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=20%2C20&amp;ssl=1 20w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Ashique Al Ashraf</h4>
																					<div class="testimonial_sphere">Zonal Sales Manager, Energypac Electronics Ltd</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>Several times i have taken Mock exam from there. PEC is the best institutions in Bangladesh for PTE..Especially honorable Md. Azizul Sir gives proper guidelines for PTE exam..You will get real test of exam here definitely.Personally I recommend everyone to take tuition from here.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item cloned" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=20%2C20&amp;ssl=1 20w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=20%2C20&amp;ssl=1 20w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Md Rezuanul Haque</h4>
																					<div class="testimonial_sphere">Zurich, Switzerland</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>PEC Education is one of the very good Coaching Center for PTE Exam in Bangladesh. Their lectures and mock tests helped me lot to get good scores in my PTE Exam.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item active" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/12729070_10209416253182381_1696455717736670143_n-1.jpg" class="testimonial-media-unit-rounded wp-post-image entered lazyloaded" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?w=720&amp;ssl=1 720w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=20%2C20&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=600%2C600&amp;ssl=1 600w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=100%2C100&amp;ssl=1 100w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=69%2C69&amp;ssl=1" data-ll-status="loaded" sizes="(max-width: 69px) 100vw, 69px" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?w=720&amp;ssl=1 720w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=20%2C20&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=600%2C600&amp;ssl=1 600w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=100%2C100&amp;ssl=1 100w"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?w=720&amp;ssl=1 720w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=20%2C20&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=600%2C600&amp;ssl=1 600w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=100%2C100&amp;ssl=1 100w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Syed Twaseen Ahsan</h4>
																					<div class="testimonial_sphere">Melbourne, Victoria, Australia</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>Gave my first PTE exam via PEC Education and received an overall score of 89. It would not have been possible without the personalised treatment that I received from each member of the PEC Education faculty. The institution consists of great exam preparation facilities and has staff who are really friendly and are eager to help you achieve your aim. Overall I had a great experience collaborating with the entire PEC Education team who helped me achieve my target score.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item active" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg" class="testimonial-media-unit-rounded wp-post-image entered lazyloaded" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=100%2C100&amp;ssl=1 100w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?zoom=3&amp;resize=69%2C69&amp;ssl=1 207w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=69%2C69&amp;ssl=1" data-ll-status="loaded" sizes="(max-width: 69px) 100vw, 69px" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=100%2C100&amp;ssl=1 100w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?zoom=3&amp;resize=69%2C69&amp;ssl=1 207w"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=100%2C100&amp;ssl=1 100w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?zoom=3&amp;resize=69%2C69&amp;ssl=1 207w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Jaynul Abedin</h4>
																					<div class="testimonial_sphere">Cumilla, bangladesh</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>Forthrightly and honestly speaking as far as I am concerned about PEC, an excellent and incredible scope for getting various types of services for mastering on English language. I really acknowledge and appreciate their services because I have already benefited by their services. They are relentlessly working for students. To recapitulate, I will obviously say that, please get over here and justify the validity of my opinion completely </p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?resize=20%2C20&amp;ssl=1 20w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/sumaiya.jpg?resize=20%2C20&amp;ssl=1 20w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Sumaiya Majumder Nazia</h4>
																					<div class="testimonial_sphere">BPTC, London, UK</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>It is one of the most organised institution in Bangladesh for PTE. They have excellent trainers who gives feedback upon every mock tests and these are really helpful. I have personally benefited from them a lot.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?resize=20%2C20&amp;ssl=1 20w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/wadud.jpg?resize=20%2C20&amp;ssl=1 20w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Rusho Refat Bin Wadud</h4>
																					<div class="testimonial_sphere">North South University</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>In cpc(NSU) inform me about this institution(PEC-EDUCATION) PTE training center. Very short time i learn here and I think i learn a lot. The instructor is very helpful and this institution arrange good moc test facility.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?resize=20%2C20&amp;ssl=1 20w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/moynul.jpg?resize=20%2C20&amp;ssl=1 20w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Moynul Islam Khan</h4>
																					<div class="testimonial_sphere">Dhaka, Bangladesh</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>PEC-Education provides service on PTE learning and training with dedication and help students to get their desired score. All their supporting staff and trainers are international standard and cooperative. Trainers are trained by the PTE test owner, “Pearson”. They provide high standard training and quality mock test’s assessment with score card which helped me a lot to improve myself in the final exam.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?resize=20%2C20&amp;ssl=1 20w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/milon.jpg?resize=20%2C20&amp;ssl=1 20w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Milon Mia</h4>
																					<div class="testimonial_sphere">Jonkoping, Sweden</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>This is a very good environment for learning PTE course as well as to prepare for mock test before sit for real exam. Learning courses are structured, understandable. People are very much supportable in this organisation to get all sorts of help. This is absolutely the very excellent place for the beginner of PTE learning.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?resize=20%2C20&amp;ssl=1 20w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/a.jpg?resize=20%2C20&amp;ssl=1 20w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">M Aslamur Rahman Rajeeb</h4>
																					<div class="testimonial_sphere">Dhaka, Bangladesh</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>I found it really helpful. Proper facilities for PTE preparation with updated PTE mock tests. If you are interested in PTE, you can take help of PEC-Education to achieve your desired score.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=20%2C20&amp;ssl=1 20w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/ashike.jpg?resize=20%2C20&amp;ssl=1 20w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Ashique Al Ashraf</h4>
																					<div class="testimonial_sphere">Zonal Sales Manager, Energypac Electronics Ltd</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>Several times i have taken Mock exam from there. PEC is the best institutions in Bangladesh for PTE..Especially honorable Md. Azizul Sir gives proper guidelines for PTE exam..You will get real test of exam here definitely.Personally I recommend everyone to take tuition from here.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=20%2C20&amp;ssl=1 20w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?w=85&amp;ssl=1 85w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/arif.jpg?resize=20%2C20&amp;ssl=1 20w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Md Rezuanul Haque</h4>
																					<div class="testimonial_sphere">Zurich, Switzerland</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>PEC Education is one of the very good Coaching Center for PTE Exam in Bangladesh. Their lectures and mock tests helped me lot to get good scores in my PTE Exam.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item cloned" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?w=720&amp;ssl=1 720w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=20%2C20&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=600%2C600&amp;ssl=1 600w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=100%2C100&amp;ssl=1 100w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?w=720&amp;ssl=1 720w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=20%2C20&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=600%2C600&amp;ssl=1 600w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/12729070_10209416253182381_1696455717736670143_n-1.jpg?resize=100%2C100&amp;ssl=1 100w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Syed Twaseen Ahsan</h4>
																					<div class="testimonial_sphere">Melbourne, Victoria, Australia</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>Gave my first PTE exam via PEC Education and received an overall score of 89. It would not have been possible without the personalised treatment that I received from each member of the PEC Education faculty. The institution consists of great exam preparation facilities and has staff who are really friendly and are eager to help you achieve your aim. Overall I had a great experience collaborating with the entire PEC Education team who helped me achieve my target score.</p>
</div>
						</div> <!-- inner wrapper -->
					</div></div><div class="owl-item cloned" style="width: 400px; margin-right: 0px;"><div class="col-md-6 col-sm-12 col-xs-12">
						<div class="testimonial_inner_wrapper">
															<div class="media">
									<div class="media-left media-top">
										<div class="testimonial-media-unit">
											<img decoding="async" width="69" height="69" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2069%2069&#39;%3E%3C/svg%3E" class="testimonial-media-unit-rounded wp-post-image" alt="" data-lazy-srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=100%2C100&amp;ssl=1 100w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?zoom=3&amp;resize=69%2C69&amp;ssl=1 207w" data-lazy-sizes="(max-width: 69px) 100vw, 69px" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=69%2C69&amp;ssl=1"><noscript><img decoding="async" width="69" height="69" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=69%2C69&amp;ssl=1" class="testimonial-media-unit-rounded wp-post-image" alt="" srcset="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=300%2C300&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?resize=100%2C100&amp;ssl=1 100w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/01/afb14e4c-fa20-4199-95dd-1d05781529d0.jpg?zoom=3&amp;resize=69%2C69&amp;ssl=1 207w" sizes="(max-width: 69px) 100vw, 69px" /></noscript>										</div>
									</div>
									<div class="media-body">
										<h4 class="testimonials-inner-title">Jaynul Abedin</h4>
																					<div class="testimonial_sphere">Cumilla, bangladesh</div>
																				<div class="short_separator"></div>
									</div>
								</div>
														<div class="testimonial_inner_content" style="color:#aaaaaa"><p>Forthrightly and honestly speaking as far as I am concerned about PEC, an excellent and incredible scope for getting various types of services for mastering on English language. I really acknowledge and appreciate their services because I have already benefited by their services. They are relentlessly working for students. To recapitulate, I will obviously say that, please get over here and justify the validity of my opinion completely </p>
</div>
						</div> <!-- inner wrapper -->
					</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
		</div>
	</div> <!-- testimonials main wrapper -->
	
	
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div>

<div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_custom_heading text_align_center"><h1 style="text-align: center" class="masterstudy-custom-title">Representing Overseas Universities</h1></div>
<div class="multiseparator"></div>
<div class="wpb_images_carousel wpb_content_element vc_clearfix"><div class="wpb_wrapper"><div id="vc_images-carousel-1-1773508109" data-ride="vc_carousel" data-wrap="true" style="width: 100%;" data-interval="2000" data-auto-height="yes" data-mode="horizontal" data-partial="true" data-per-view="5" data-hide-on-end="false" class="vc_slide vc_images_carousel vc_per-view-more vc_per-view-5 vc_partial vc_build"><div class="vc_carousel-inner"><div class="vc_carousel-slideline" style="width: 7488px;"><div class="vc_carousel-slideline-inner vc_transition" style="left: -7.5%;"><div class="vc_item" style="width: 2.5%; height: 163px;"><div class="vc_inner"><img decoding="async" class="entered exited" width="163" height="106" alt="waterloo" title="waterloo" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/waterloo.png?fit=163%2C106&amp;ssl=1" src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%20163%20106&#39;%3E%3C/svg%3E"><noscript><img decoding="async" class="" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/waterloo.png?fit=163%2C106&amp;ssl=1" width="163" height="106" alt="waterloo" title="waterloo" /></noscript></div></div><div class="vc_item" style="width: 2.5%; height: 163px;"><div class="vc_inner"><img decoding="async" class="entered lazyloaded" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/trent_university163x49.png" width="163" height="49" alt="trent_university163x49" title="trent_university163x49" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/trent_university163x49.png?fit=163%2C49&amp;ssl=1" data-ll-status="loaded"><noscript><img decoding="async" class="" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/trent_university163x49.png?fit=163%2C49&amp;ssl=1" width="163" height="49" alt="trent_university163x49" title="trent_university163x49" /></noscript></div></div><div class="vc_item vc_active" style="width: 2.5%; height: 163px;"><div class="vc_inner"><img decoding="async" class="entered lazyloaded" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/tasmania_university163x163.png" width="163" height="163" alt="tasmania_university163x163" title="tasmania_university163x163" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/tasmania_university163x163.png?fit=163%2C163&amp;ssl=1" data-ll-status="loaded"><noscript><img decoding="async" class="" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/tasmania_university163x163.png?fit=163%2C163&amp;ssl=1" width="163" height="163" alt="tasmania_university163x163" title="tasmania_university163x163" /></noscript></div></div><div class="vc_item" style="width: 2.5%; height: 163px;"><div class="vc_inner"><img decoding="async" class="entered lazyloaded" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/photo.jpg-163x102-1.png" width="163" height="102" alt="photo.jpg-163x102" title="photo.jpg-163x102" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/photo.jpg-163x102-1.png?fit=163%2C102&amp;ssl=1" data-ll-status="loaded"><noscript><img decoding="async" class="" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/photo.jpg-163x102-1.png?fit=163%2C102&amp;ssl=1" width="163" height="102" alt="photo.jpg-163x102" title="photo.jpg-163x102" /></noscript></div></div><div class="vc_item" style="width: 2.5%; height: 163px;"><div class="vc_inner"><img decoding="async" class="entered lazyloaded" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/johns_hopkins_163x105.png" width="163" height="105" alt="johns_hopkins_163x105" title="johns_hopkins_163x105" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/johns_hopkins_163x105.png?fit=163%2C105&amp;ssl=1" data-ll-status="loaded"><noscript><img decoding="async" class="" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/johns_hopkins_163x105.png?fit=163%2C105&amp;ssl=1" width="163" height="105" alt="johns_hopkins_163x105" title="johns_hopkins_163x105" /></noscript></div></div><div class="vc_item" style="width: 2.5%; height: 163px;"><div class="vc_inner"><img decoding="async" class="entered lazyloaded" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/uppsala_university163x163.png" width="163" height="163" alt="uppsala_university163x163" title="uppsala_university163x163" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/uppsala_university163x163.png?fit=163%2C163&amp;ssl=1" data-ll-status="loaded"><noscript><img decoding="async" class="" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/uppsala_university163x163.png?fit=163%2C163&amp;ssl=1" width="163" height="163" alt="uppsala_university163x163" title="uppsala_university163x163" /></noscript></div></div><div class="vc_item" style="width: 2.5%; height: 163px;"><div class="vc_inner"><img decoding="async" class="entered lazyloaded" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/aro_NFSA_163x163.png" width="163" height="163" alt="aro_NFSA_163x163" title="aro_NFSA_163x163" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/aro_NFSA_163x163.png?fit=163%2C163&amp;ssl=1" data-ll-status="loaded"><noscript><img decoding="async" class="" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2020/06/aro_NFSA_163x163.png?fit=163%2C163&amp;ssl=1" width="163" height="163" alt="aro_NFSA_163x163" title="aro_NFSA_163x163" /></noscript></div></div><div class="vc_item" style="width: 2.5%; height: 163px;"><div class="vc_inner"><img decoding="async" class="entered lazyloaded" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/University_of_Greenwich.png" width="300" height="144" alt="University_of_Greenwich" title="University_of_Greenwich" data-lazy-src="https://i0.wp.com/pecpte.com/wp-content/uploads/2025/01/University_of_Greenwich.png?fit=300%2C144&amp;ssl=1" data-ll-status="loaded"><noscript><img decoding="async" class="" src="https://i0.wp.com/pecpte.com/wp-content/uploads/2025/01/University_of_Greenwich.png?fit=300%2C144&amp;ssl=1" width="300" height="144" alt="University_of_Greenwich" title="University_of_Greenwich" /></noscript></div></div></div></div></div><a class="vc_left vc_carousel-control" href="" data-slide="prev"><span class="icon-prev"></span></a><a class="vc_right vc_carousel-control" href="" data-slide="next"><span class="icon-next"></span></a></div></div></div></div></div></div></div>
                            </div>
        
        
        <div class="clearfix">
                    </div>

    </div>

           </div>
</div>
		<footer data-wpr-lazyrender="1" id="footer" class="parallax-off">
			<div class="footer_wrapper">
				
				
				
        <div id="footer_bottom">
            <div class="footer_widgets_wrapper kek text-upper">
                <div class="container">
                    <div class="widgets cols_4 clearfix">
						<aside id="stm_text-2" class="widget stm_wp_widget_text"><div class="widget_title"><h3>About Us</h3></div>        <div class="textwidget"><p>prioritizes its client's interests.<br>
</p>
</div>

		</aside><aside id="stm_text-3" class="widget stm_wp_widget_text"><div class="widget_title"><h3>Contact Us</h3></div>        <div class="textwidget"><p>Mobile : +880-1713-167969<br>
Mobile : +880 1876196019<br>
Email : info@ayanacademy.com<br></p>
</div>

		</aside><aside id="socials-2" class="widget widget_socials"><div class="widget_title"><h3>Social Network</h3></div><div class="socials_widget_wrapper"><ul class="widget_socials list-unstyled clearfix"><li class="simple_flip_container">
							<div class="simple_flipper">
								<div class="front">
									<a href="" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
								</div>
								<div class="back">
									<a href="" target="_blank"><i class="fab fa-facebook"></i></a>
								</div>
							</div>
						</li><li class="simple_flip_container">
							<div class="simple_flipper">
								<div class="front">
									<a href="" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
								</div>
								<div class="back">
									<a href="" target="_blank"><i class="fab fa-twitter"></i></a>
								</div>
							</div>
						</li><li class="simple_flip_container">
							<div class="simple_flipper">
								<div class="front">
									<a href="" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
								</div>
								<div class="back">
									<a href="" target="_blank"><i class="fab fa-instagram"></i></a>
								</div>
							</div>
						</li><li class="simple_flip_container">
							<div class="simple_flipper">
								<div class="front">
									<a href="" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
								</div>
								<div class="back">
									<a href="" target="_blank"><i class="fab fa-linkedin"></i></a>
								</div>
							</div>
						</li>
	        </ul></div></aside><aside id="working_hours-4" class="widget widget_working_hours"><div class="widget_title"><h3>Business Hours</h3></div>        
	        <table class="table_working_hours">
		        		        							<tbody><tr class="opened">
							<td class="day_label h6 normal_font">Monday</td>
							<td class="day_value h6 normal_font">10 am - 6.00 pm</td>
						</tr>
							        		        							<tr class="opened">
							<td class="day_label h6 normal_font">Tuesday</td>
							<td class="day_value h6 normal_font">10 am - 6.00 pm</td>
						</tr>
							        		        							<tr class="opened">
							<td class="day_label h6 normal_font">Wednesday</td>
							<td class="day_value h6 normal_font">10 am - 6.00 pm</td>
						</tr>
							        		        							<tr class="opened">
							<td class="day_label h6 normal_font">Thursday</td>
							<td class="day_value h6 normal_font">10 am - 6.00 pm</td>
						</tr>
							        		        							<tr class="opened">
							<td class="day_label h6 normal_font">Friday</td>
							<td class="day_value h6 normal_font">10 am - 6.00 pm</td>
						</tr>
							        		        							<tr class="opened">
							<td class="day_label h6 normal_font">Saturday</td>
							<td class="day_value h6 normal_font">10 am - 6.00 pm</td>
						</tr>
							        		        							<tr class="closed">
							<td class="day_label h6 normal_font">Sunday</td>
							<td class="day_value closed h6 normal_font"><span>Closed</span></td>
						</tr>
							        	        </tbody></table>

		</aside>                    </div>
                </div>
            </div>
        </div>

					
				<div id="footer_copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-8">
					<div class="clearfix">
													<div class="pull-left">
																										<noscript></noscript>
															</div>
																			<div class="copyright_text">Copyright ©2026 Ayan Academy All rights reserved.</div>
											</div>
				</div>
				<div class="col-md-6 col-sm-4">
					<div class="clearfix">
						<div class="pull-right xs-pull-left">
																					<!-- Header top bar Socials -->
															<div class="pull-right">
									<div class="copyright_socials">
										<ul class="clearfix">
											<li><a href=""><i class="fab fa-youtube"></i></a></li>										</ul>
									</div>
								</div>
													</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
			</div>
		</footer>

        
    <!-- Searchform -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		
			<div class="modal-body heading_font">
				<div class="search-title">Search</div>
				
			</div>
		
		</div>
	</div>
</div>
    <script src="data:text/javascript;base64,CiAgICAgICAgdmFyIGNmN19jdXN0b21faW1hZ2UgPSAnaHR0cHM6Ly9wZWNwdGUuY29tL3dwLWNvbnRlbnQvdGhlbWVzL21hc3RlcnN0dWR5L2Fzc2V0cy9pbWcvJzsKICAgICAgICB2YXIgZGF5c1N0ciA9ICdEYXlzJzsKICAgICAgICB2YXIgaG91cnNTdHIgPSAnSG91cnMnOwogICAgICAgIHZhciBtaW51dGVzU3RyID0gJ01pbnV0ZXMnOwogICAgICAgIHZhciBzZWNvbmRzU3RyID0gJ1NlY29uZHMnOwogICAg" data-rocket-status="executed">
        var cf7_custom_image = 'https://pecpte.com/wp-content/themes/masterstudy/assets/img/';
        var daysStr = 'Days';
        var hoursStr = 'Hours';
        var minutesStr = 'Minutes';
        var secondsStr = 'Seconds';
    </script>


	<script type="text/javascript" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgRkNfVmFsaWRhdGlvbl8yID0geyJpc19pbnZhbGlkIjoiSW52YWxpZCIsIm1pbl9jaGFyIjoiTWluIFt4XSBjaGFyYWN0ZXJzIHJlcXVpcmVkIiwibWF4X2NoYXIiOiJNYXggW3hdIGNoYXJhY3RlcnMgYWxsb3dlZCIsIm1heF9maWxlcyI6InRlc3QiLCJtYXhfZmlsZV9zaXplIjoiRmlsZXMgYmlnZ2VyIHRoYW4gW3hdIE1CIG5vdCBhbGxvd2VkIiwiYWxsb3dfZW1haWwiOiJJbnZhbGlkIEVtYWlsIiwiYWxsb3dfdXJsIjoiSW52YWxpZCBVUkwiLCJhbGxvd19yZWdleHAiOiJJbnZhbGlkIEV4cHJlc3Npb24iLCJhbGxvd19hbHBoYWJldHMiOiJPbmx5IGFscGhhYmV0cyIsImFsbG93X251bWJlcnMiOiJPbmx5IG51bWJlcnMiLCJhbGxvd19hbHBoYW51bWVyaWMiOiJTaG91bGQgYmUgYWxwaGFudW1lcmljIiwiZmFpbGVkIjoiUGxlYXNlIGNvcnJlY3QgdGhlIGVycm9ycyBhbmQgdHJ5IGFnYWluIiwiaXNfcmVxdWlyZWQiOiJNaXNzaW5nICEifTsKLyogXV0+ICovCg==" data-rocket-status="executed">
/* <![CDATA[ */
var FC_Validation_2 = {"is_invalid":"Invalid","min_char":"Min [x] characters required","max_char":"Max [x] characters allowed","max_files":"test","max_file_size":"Files bigger than [x] MB not allowed","allow_email":"Invalid Email","allow_url":"Invalid URL","allow_regexp":"Invalid Expression","allow_alphabets":"Only alphabets","allow_numbers":"Only numbers","allow_alphanumeric":"Should be alphanumeric","failed":"Please correct the errors and try again","is_required":"Missing !"};
/* ]]> */
</script>

<div class="joinchat joinchat--right joinchat--show joinchat--tooltip" data-settings="{&quot;telephone&quot;:&quot;880 1876196019&quot;,&quot;mobile_only&quot;:false,&quot;button_delay&quot;:2,&quot;whatsapp_web&quot;:true,&quot;message_views&quot;:2,&quot;message_delay&quot;:3,&quot;message_badge&quot;:false,&quot;message_send&quot;:&quot;&quot;,&quot;message_hash&quot;:&quot;&quot;}">
	<div class="joinchat__button">
		<div class="joinchat__button__open"></div>
								<div class="joinchat__button__sendtext">Open chat</div>
									</div>
		<svg height="0" width="0"><defs><clippath id="joinchat__message__peak"><path d="M17 25V0C17 12.877 6.082 14.9 1.031 15.91c-1.559.31-1.179 2.272.004 2.272C9.609 18.182 17 18.088 17 25z"></path></clippath></defs></svg>
</div>
<script type="text/html" id="wpb-modifications"></script>	<script type="text/javascript" src="data:text/javascript;base64,CgkJKGZ1bmN0aW9uICgpIHsKCQkJdmFyIGMgPSBkb2N1bWVudC5ib2R5LmNsYXNzTmFtZTsKCQkJYyA9IGMucmVwbGFjZSgvd29vY29tbWVyY2Utbm8tanMvLCAnd29vY29tbWVyY2UtanMnKTsKCQkJZG9jdW1lbnQuYm9keS5jbGFzc05hbWUgPSBjOwoJCX0pKCk7Cgk=" data-rocket-status="executed">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link data-minify="1" rel="stylesheet" id="stm-courses_grid-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-lms-courses-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/courses.css" type="text/css" media="all">
<link rel="stylesheet" id="stm-lms-courses/style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(1).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-lms-wishlist-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wishlist.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-featured_products-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(2).css" type="text/css" media="all">

<link data-minify="1" rel="stylesheet" id="stm-stats_counter-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(3).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-countdown-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(4).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="fc-captcha-addon-css-main-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/captcha_form_main.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-event_grid-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(5).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-color_separator-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(6).css" type="text/css" media="all">
<style id="stm-color_separator-style_1-inline-css" type="text/css">

    .module__cafc4ce9f11bc27b53b4b6553925c990 .triangled_colored_separator {
        background-color: #fdc735 !important;
    }
    .module__cafc4ce9f11bc27b53b4b6553925c990 .triangled_colored_separator .triangle {
        border-bottom-color: #fdc735 !important;
    }

</style>
<link rel="stylesheet" id="vc_animate-css-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/animate.min.css" type="text/css" media="all">
<link rel="stylesheet" id="vc_font_awesome_5_shims-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/v4-shims.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="vc_font_awesome_5-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/all.min.css" type="text/css" media="all">
<link rel="stylesheet" id="owl.carousel-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/owl.carousel.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-testimonials-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(7).css" type="text/css" media="all">
<link rel="stylesheet" id="vc_carousel_css-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/vc_carousel.min.css" type="text/css" media="all">
<script type="text/javascript" id="masterstudy-bootstrap-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/bootstrap.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="masterstudy-bootstrap-custom-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ms-bootstrap-custom.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jetpack-photon-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/photon.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm_jquery.countdown-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.countdown.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm_zoom_main-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/main.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="lms_countdown.js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/countdown.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="js-cookie-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/js.cookie.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="woocommerce-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/woocommerce.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_b3a341fc15efac276fc5ebbe2f55d921","fragment_name":"wc_fragments_b3a341fc15efac276fc5ebbe2f55d921","request_timeout":"5000"};
/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="wc-cart-fragments-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/cart-fragments.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-cart-fragments-js-after" src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHsKLyogPCFbQ0RBVEFbICovCgkJalF1ZXJ5KCAnYm9keScgKS5iaW5kKCAnd2NfZnJhZ21lbnRzX3JlZnJlc2hlZCcsIGZ1bmN0aW9uKCkgewoJCQl2YXIgamV0cGFja0xhenlJbWFnZXNMb2FkRXZlbnQ7CgkJCXRyeSB7CgkJCQlqZXRwYWNrTGF6eUltYWdlc0xvYWRFdmVudCA9IG5ldyBFdmVudCggJ2pldHBhY2stbGF6eS1pbWFnZXMtbG9hZCcsIHsKCQkJCQlidWJibGVzOiB0cnVlLAoJCQkJCWNhbmNlbGFibGU6IHRydWUKCQkJCX0gKTsKCQkJfSBjYXRjaCAoIGUgKSB7CgkJCQlqZXRwYWNrTGF6eUltYWdlc0xvYWRFdmVudCA9IGRvY3VtZW50LmNyZWF0ZUV2ZW50KCAnRXZlbnQnICkKCQkJCWpldHBhY2tMYXp5SW1hZ2VzTG9hZEV2ZW50LmluaXRFdmVudCggJ2pldHBhY2stbGF6eS1pbWFnZXMtbG9hZCcsIHRydWUsIHRydWUgKTsKCQkJfQoJCQlqUXVlcnkoICdib2R5JyApLmdldCggMCApLmRpc3BhdGNoRXZlbnQoIGpldHBhY2tMYXp5SW1hZ2VzTG9hZEV2ZW50ICk7CgkJfSApOwoJCQovKiBdXT4gKi8KfSk7" data-rocket-status="executed">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
		jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
			var jetpackLazyImagesLoadEvent;
			try {
				jetpackLazyImagesLoadEvent = new Event( 'jetpack-lazy-images-load', {
					bubbles: true,
					cancelable: true
				} );
			} catch ( e ) {
				jetpackLazyImagesLoadEvent = document.createEvent( 'Event' )
				jetpackLazyImagesLoadEvent.initEvent( 'jetpack-lazy-images-load', true, true );
			}
			jQuery( 'body' ).get( 0 ).dispatchEvent( jetpackLazyImagesLoadEvent );
		} );
		
/* ]]> */
});</script>
<script type="text/javascript" id="rocket-browser-checker-js-after" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwoidXNlIHN0cmljdCI7dmFyIF9jcmVhdGVDbGFzcz1mdW5jdGlvbigpe2Z1bmN0aW9uIGRlZmluZVByb3BlcnRpZXModGFyZ2V0LHByb3BzKXtmb3IodmFyIGk9MDtpPHByb3BzLmxlbmd0aDtpKyspe3ZhciBkZXNjcmlwdG9yPXByb3BzW2ldO2Rlc2NyaXB0b3IuZW51bWVyYWJsZT1kZXNjcmlwdG9yLmVudW1lcmFibGV8fCExLGRlc2NyaXB0b3IuY29uZmlndXJhYmxlPSEwLCJ2YWx1ZSJpbiBkZXNjcmlwdG9yJiYoZGVzY3JpcHRvci53cml0YWJsZT0hMCksT2JqZWN0LmRlZmluZVByb3BlcnR5KHRhcmdldCxkZXNjcmlwdG9yLmtleSxkZXNjcmlwdG9yKX19cmV0dXJuIGZ1bmN0aW9uKENvbnN0cnVjdG9yLHByb3RvUHJvcHMsc3RhdGljUHJvcHMpe3JldHVybiBwcm90b1Byb3BzJiZkZWZpbmVQcm9wZXJ0aWVzKENvbnN0cnVjdG9yLnByb3RvdHlwZSxwcm90b1Byb3BzKSxzdGF0aWNQcm9wcyYmZGVmaW5lUHJvcGVydGllcyhDb25zdHJ1Y3RvcixzdGF0aWNQcm9wcyksQ29uc3RydWN0b3J9fSgpO2Z1bmN0aW9uIF9jbGFzc0NhbGxDaGVjayhpbnN0YW5jZSxDb25zdHJ1Y3Rvcil7aWYoIShpbnN0YW5jZSBpbnN0YW5jZW9mIENvbnN0cnVjdG9yKSl0aHJvdyBuZXcgVHlwZUVycm9yKCJDYW5ub3QgY2FsbCBhIGNsYXNzIGFzIGEgZnVuY3Rpb24iKX12YXIgUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyPWZ1bmN0aW9uKCl7ZnVuY3Rpb24gUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyKG9wdGlvbnMpe19jbGFzc0NhbGxDaGVjayh0aGlzLFJvY2tldEJyb3dzZXJDb21wYXRpYmlsaXR5Q2hlY2tlciksdGhpcy5wYXNzaXZlU3VwcG9ydGVkPSExLHRoaXMuX2NoZWNrUGFzc2l2ZU9wdGlvbih0aGlzKSx0aGlzLm9wdGlvbnM9ISF0aGlzLnBhc3NpdmVTdXBwb3J0ZWQmJm9wdGlvbnN9cmV0dXJuIF9jcmVhdGVDbGFzcyhSb2NrZXRCcm93c2VyQ29tcGF0aWJpbGl0eUNoZWNrZXIsW3trZXk6Il9jaGVja1Bhc3NpdmVPcHRpb24iLHZhbHVlOmZ1bmN0aW9uKHNlbGYpe3RyeXt2YXIgb3B0aW9ucz17Z2V0IHBhc3NpdmUoKXtyZXR1cm4hKHNlbGYucGFzc2l2ZVN1cHBvcnRlZD0hMCl9fTt3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigidGVzdCIsbnVsbCxvcHRpb25zKSx3aW5kb3cucmVtb3ZlRXZlbnRMaXN0ZW5lcigidGVzdCIsbnVsbCxvcHRpb25zKX1jYXRjaChlcnIpe3NlbGYucGFzc2l2ZVN1cHBvcnRlZD0hMX19fSx7a2V5OiJpbml0UmVxdWVzdElkbGVDYWxsYmFjayIsdmFsdWU6ZnVuY3Rpb24oKXshMSBpbiB3aW5kb3cmJih3aW5kb3cucmVxdWVzdElkbGVDYWxsYmFjaz1mdW5jdGlvbihjYil7dmFyIHN0YXJ0PURhdGUubm93KCk7cmV0dXJuIHNldFRpbWVvdXQoZnVuY3Rpb24oKXtjYih7ZGlkVGltZW91dDohMSx0aW1lUmVtYWluaW5nOmZ1bmN0aW9uKCl7cmV0dXJuIE1hdGgubWF4KDAsNTAtKERhdGUubm93KCktc3RhcnQpKX19KX0sMSl9KSwhMSBpbiB3aW5kb3cmJih3aW5kb3cuY2FuY2VsSWRsZUNhbGxiYWNrPWZ1bmN0aW9uKGlkKXtyZXR1cm4gY2xlYXJUaW1lb3V0KGlkKX0pfX0se2tleToiaXNEYXRhU2F2ZXJNb2RlT24iLHZhbHVlOmZ1bmN0aW9uKCl7cmV0dXJuImNvbm5lY3Rpb24iaW4gbmF2aWdhdG9yJiYhMD09PW5hdmlnYXRvci5jb25uZWN0aW9uLnNhdmVEYXRhfX0se2tleToic3VwcG9ydHNMaW5rUHJlZmV0Y2giLHZhbHVlOmZ1bmN0aW9uKCl7dmFyIGVsZW09ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgibGluayIpO3JldHVybiBlbGVtLnJlbExpc3QmJmVsZW0ucmVsTGlzdC5zdXBwb3J0cyYmZWxlbS5yZWxMaXN0LnN1cHBvcnRzKCJwcmVmZXRjaCIpJiZ3aW5kb3cuSW50ZXJzZWN0aW9uT2JzZXJ2ZXImJiJpc0ludGVyc2VjdGluZyJpbiBJbnRlcnNlY3Rpb25PYnNlcnZlckVudHJ5LnByb3RvdHlwZX19LHtrZXk6ImlzU2xvd0Nvbm5lY3Rpb24iLHZhbHVlOmZ1bmN0aW9uKCl7cmV0dXJuImNvbm5lY3Rpb24iaW4gbmF2aWdhdG9yJiYiZWZmZWN0aXZlVHlwZSJpbiBuYXZpZ2F0b3IuY29ubmVjdGlvbiYmKCIyZyI9PT1uYXZpZ2F0b3IuY29ubmVjdGlvbi5lZmZlY3RpdmVUeXBlfHwic2xvdy0yZyI9PT1uYXZpZ2F0b3IuY29ubmVjdGlvbi5lZmZlY3RpdmVUeXBlKX19XSksUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyfSgpOwovKiBdXT4gKi8K" data-rocket-status="executed">
/* <![CDATA[ */
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
/* ]]> */
</script>
<script type="text/javascript" id="rocket-preload-links-js-extra">
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/checkout\/??(.*)|\/cart\/?|\/wc-api\/v(.*)|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/pecpte.com","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type="text/javascript" id="rocket-preload-links-js-after" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwooZnVuY3Rpb24oKSB7CiJ1c2Ugc3RyaWN0Ijt2YXIgcj0iZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiYic3ltYm9sIj09dHlwZW9mIFN5bWJvbC5pdGVyYXRvcj9mdW5jdGlvbihlKXtyZXR1cm4gdHlwZW9mIGV9OmZ1bmN0aW9uKGUpe3JldHVybiBlJiYiZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiZlLmNvbnN0cnVjdG9yPT09U3ltYm9sJiZlIT09U3ltYm9sLnByb3RvdHlwZT8ic3ltYm9sIjp0eXBlb2YgZX0sZT1mdW5jdGlvbigpe2Z1bmN0aW9uIGkoZSx0KXtmb3IodmFyIG49MDtuPHQubGVuZ3RoO24rKyl7dmFyIGk9dFtuXTtpLmVudW1lcmFibGU9aS5lbnVtZXJhYmxlfHwhMSxpLmNvbmZpZ3VyYWJsZT0hMCwidmFsdWUiaW4gaSYmKGkud3JpdGFibGU9ITApLE9iamVjdC5kZWZpbmVQcm9wZXJ0eShlLGkua2V5LGkpfX1yZXR1cm4gZnVuY3Rpb24oZSx0LG4pe3JldHVybiB0JiZpKGUucHJvdG90eXBlLHQpLG4mJmkoZSxuKSxlfX0oKTtmdW5jdGlvbiBpKGUsdCl7aWYoIShlIGluc3RhbmNlb2YgdCkpdGhyb3cgbmV3IFR5cGVFcnJvcigiQ2Fubm90IGNhbGwgYSBjbGFzcyBhcyBhIGZ1bmN0aW9uIil9dmFyIHQ9ZnVuY3Rpb24oKXtmdW5jdGlvbiBuKGUsdCl7aSh0aGlzLG4pLHRoaXMuYnJvd3Nlcj1lLHRoaXMuY29uZmlnPXQsdGhpcy5vcHRpb25zPXRoaXMuYnJvd3Nlci5vcHRpb25zLHRoaXMucHJlZmV0Y2hlZD1uZXcgU2V0LHRoaXMuZXZlbnRUaW1lPW51bGwsdGhpcy50aHJlc2hvbGQ9MTExMSx0aGlzLm51bU9uSG92ZXI9MH1yZXR1cm4gZShuLFt7a2V5OiJpbml0Iix2YWx1ZTpmdW5jdGlvbigpeyF0aGlzLmJyb3dzZXIuc3VwcG9ydHNMaW5rUHJlZmV0Y2goKXx8dGhpcy5icm93c2VyLmlzRGF0YVNhdmVyTW9kZU9uKCl8fHRoaXMuYnJvd3Nlci5pc1Nsb3dDb25uZWN0aW9uKCl8fCh0aGlzLnJlZ2V4PXtleGNsdWRlVXJpczpSZWdFeHAodGhpcy5jb25maWcuZXhjbHVkZVVyaXMsImkiKSxpbWFnZXM6UmVnRXhwKCIuKCIrdGhpcy5jb25maWcuaW1hZ2VFeHQrIikkIiwiaSIpLGZpbGVFeHQ6UmVnRXhwKCIuKCIrdGhpcy5jb25maWcuZmlsZUV4dCsiKSQiLCJpIil9LHRoaXMuX2luaXRMaXN0ZW5lcnModGhpcykpfX0se2tleToiX2luaXRMaXN0ZW5lcnMiLHZhbHVlOmZ1bmN0aW9uKGUpey0xPHRoaXMuY29uZmlnLm9uSG92ZXJEZWxheSYmZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigibW91c2VvdmVyIixlLmxpc3RlbmVyLmJpbmQoZSksZS5saXN0ZW5lck9wdGlvbnMpLGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoIm1vdXNlZG93biIsZS5saXN0ZW5lci5iaW5kKGUpLGUubGlzdGVuZXJPcHRpb25zKSxkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCJ0b3VjaHN0YXJ0IixlLmxpc3RlbmVyLmJpbmQoZSksZS5saXN0ZW5lck9wdGlvbnMpfX0se2tleToibGlzdGVuZXIiLHZhbHVlOmZ1bmN0aW9uKGUpe3ZhciB0PWUudGFyZ2V0LmNsb3Nlc3QoImEiKSxuPXRoaXMuX3ByZXBhcmVVcmwodCk7aWYobnVsbCE9PW4pc3dpdGNoKGUudHlwZSl7Y2FzZSJtb3VzZWRvd24iOmNhc2UidG91Y2hzdGFydCI6dGhpcy5fYWRkUHJlZmV0Y2hMaW5rKG4pO2JyZWFrO2Nhc2UibW91c2VvdmVyIjp0aGlzLl9lYXJseVByZWZldGNoKHQsbiwibW91c2VvdXQiKX19fSx7a2V5OiJfZWFybHlQcmVmZXRjaCIsdmFsdWU6ZnVuY3Rpb24odCxlLG4pe3ZhciBpPXRoaXMscj1zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7aWYocj1udWxsLDA9PT1pLm51bU9uSG92ZXIpc2V0VGltZW91dChmdW5jdGlvbigpe3JldHVybiBpLm51bU9uSG92ZXI9MH0sMWUzKTtlbHNlIGlmKGkubnVtT25Ib3Zlcj5pLmNvbmZpZy5yYXRlVGhyb3R0bGUpcmV0dXJuO2kubnVtT25Ib3ZlcisrLGkuX2FkZFByZWZldGNoTGluayhlKX0sdGhpcy5jb25maWcub25Ib3ZlckRlbGF5KTt0LmFkZEV2ZW50TGlzdGVuZXIobixmdW5jdGlvbiBlKCl7dC5yZW1vdmVFdmVudExpc3RlbmVyKG4sZSx7cGFzc2l2ZTohMH0pLG51bGwhPT1yJiYoY2xlYXJUaW1lb3V0KHIpLHI9bnVsbCl9LHtwYXNzaXZlOiEwfSl9fSx7a2V5OiJfYWRkUHJlZmV0Y2hMaW5rIix2YWx1ZTpmdW5jdGlvbihpKXtyZXR1cm4gdGhpcy5wcmVmZXRjaGVkLmFkZChpLmhyZWYpLG5ldyBQcm9taXNlKGZ1bmN0aW9uKGUsdCl7dmFyIG49ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgibGluayIpO24ucmVsPSJwcmVmZXRjaCIsbi5ocmVmPWkuaHJlZixuLm9ubG9hZD1lLG4ub25lcnJvcj10LGRvY3VtZW50LmhlYWQuYXBwZW5kQ2hpbGQobil9KS5jYXRjaChmdW5jdGlvbigpe30pfX0se2tleToiX3ByZXBhcmVVcmwiLHZhbHVlOmZ1bmN0aW9uKGUpe2lmKG51bGw9PT1lfHwib2JqZWN0IiE9PSh2b2lkIDA9PT1lPyJ1bmRlZmluZWQiOnIoZSkpfHwhMSBpbiBlfHwtMT09PVsiaHR0cDoiLCJodHRwczoiXS5pbmRleE9mKGUucHJvdG9jb2wpKXJldHVybiBudWxsO3ZhciB0PWUuaHJlZi5zdWJzdHJpbmcoMCx0aGlzLmNvbmZpZy5zaXRlVXJsLmxlbmd0aCksbj10aGlzLl9nZXRQYXRobmFtZShlLmhyZWYsdCksaT17b3JpZ2luYWw6ZS5ocmVmLHByb3RvY29sOmUucHJvdG9jb2wsb3JpZ2luOnQscGF0aG5hbWU6bixocmVmOnQrbn07cmV0dXJuIHRoaXMuX2lzTGlua09rKGkpP2k6bnVsbH19LHtrZXk6Il9nZXRQYXRobmFtZSIsdmFsdWU6ZnVuY3Rpb24oZSx0KXt2YXIgbj10P2Uuc3Vic3RyaW5nKHRoaXMuY29uZmlnLnNpdGVVcmwubGVuZ3RoKTplO3JldHVybiBuLnN0YXJ0c1dpdGgoIi8iKXx8KG49Ii8iK24pLHRoaXMuX3Nob3VsZEFkZFRyYWlsaW5nU2xhc2gobik/bisiLyI6bn19LHtrZXk6Il9zaG91bGRBZGRUcmFpbGluZ1NsYXNoIix2YWx1ZTpmdW5jdGlvbihlKXtyZXR1cm4gdGhpcy5jb25maWcudXNlc1RyYWlsaW5nU2xhc2gmJiFlLmVuZHNXaXRoKCIvIikmJiF0aGlzLnJlZ2V4LmZpbGVFeHQudGVzdChlKX19LHtrZXk6Il9pc0xpbmtPayIsdmFsdWU6ZnVuY3Rpb24oZSl7cmV0dXJuIG51bGwhPT1lJiYib2JqZWN0Ij09PSh2b2lkIDA9PT1lPyJ1bmRlZmluZWQiOnIoZSkpJiYoIXRoaXMucHJlZmV0Y2hlZC5oYXMoZS5ocmVmKSYmZS5vcmlnaW49PT10aGlzLmNvbmZpZy5zaXRlVXJsJiYtMT09PWUuaHJlZi5pbmRleE9mKCI/IikmJi0xPT09ZS5ocmVmLmluZGV4T2YoIiMiKSYmIXRoaXMucmVnZXguZXhjbHVkZVVyaXMudGVzdChlLmhyZWYpJiYhdGhpcy5yZWdleC5pbWFnZXMudGVzdChlLmhyZWYpKX19XSxbe2tleToicnVuIix2YWx1ZTpmdW5jdGlvbigpeyJ1bmRlZmluZWQiIT10eXBlb2YgUm9ja2V0UHJlbG9hZExpbmtzQ29uZmlnJiZuZXcgbihuZXcgUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyKHtjYXB0dXJlOiEwLHBhc3NpdmU6ITB9KSxSb2NrZXRQcmVsb2FkTGlua3NDb25maWcpLmluaXQoKX19XSksbn0oKTt0LnJ1bigpOwp9KCkpOwovKiBdXT4gKi8K" data-rocket-status="executed">
/* <![CDATA[ */
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
/* ]]> */
</script>
<script type="text/javascript" id="fancybox-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.fancybox.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="select2-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/select2.full.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm_theme_scripts-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/custom.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="ajaxsubmit-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ajax.submit.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="joinchat-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/joinchat.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="wpb_composer_front_js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/js_composer_front.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm-courses_grid-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm-lms-wishlist-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wishlist.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery.cookie-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.cookie.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="stm-lms-courses-js-extra">
/* <![CDATA[ */
var courses_view = {"type":"grid"};
var courses_view = {"type":"grid"};
/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="stm-lms-courses-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/courses.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vc_jquery_skrollr_js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/skrollr.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="countUp.min.js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/countUp.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm-stats_counter-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(1).js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery.countdown-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.countdown(1).js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="fc-modal-js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/fc_modal.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="fc-tooltip-js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/tooltip.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="fc-autocomplete-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/awesomplete.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery-ui-core-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/core.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery-ui-mouse-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/mouse.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="fc-form-js-js-extra">
/* <![CDATA[ */
var FC = {"ajaxurl":"https:\/\/pecpte.com\/wp-admin\/admin-ajax.php","fct":{"keepdata":"Keep Data When Deleting Plugin","needAPIKey":"You need to enter the Google API Key when editing the field to make the autocomplete address field work","Form:":"Form:","Embed Type:":"Embed Type:","Add a FormCraft form":"Add a FormCraft form","Inline":"Inline","Popup":"Popup","Slide In":"Slide In","Button Text:":"Button Text:","Alignment:":"Alignment:","Left":"Left","Center":"Center","Right":"Right","Placement:":"Placement:","Bottom Right":"Bottom Right","Bind:":"Bind:","bind form popup action to a CSS selector":"bind form popup action to a CSS selector","Class:":"Class:","add a custom class to the popup button":"add a custom class to the popup button","Font Color:":"Font Color:","font color of the button":"font color of the button","Button Color:":"Button Color:","color of the button":"color of the button","Auto Popup:":"Auto Popup:","auto popup the form on page load after x seconds":"auto popup the form on page load after x seconds","loseChanges":"You will lose any un-saved changes.","Free AddOns":"Free AddOns","Purchased AddOns":"Purchased AddOns","Paid AddOns":"Paid AddOns","read more":"read more","Nothing Left To Install":"Nothing Left To Install","Please check your internet connection":"Please check your internet connection","back":"back","Help Topics":"Help Topics","Sorry, nothing here":"Sorry, nothing here","Contact Support":"Contact Support","Unknown Error.":"Unknown Error.","Failed Saving.":"Failed Saving.","Failed Saving. Please try disabing your firewall, or security plugin.":"Failed Saving. Please try disabing your firewall, or security plugin.","Debug Info":"Debug Info","Invalid":"Invalid","Min [x] characters required":"Min [x] characters required","Max [x] characters allowed":"Max [x] characters allowed","Max [x] file(s) allowed":"test","Files bigger than [x] MB not allowed":"Files bigger than [x] MB not allowed","Invalid Email":"Invalid Email","Invalid URL":"Invalid URL","Invalid Expression":"Invalid Expression","Only alphabets":"Only alphabets","Only numbers":"Only numbers","Should be alphanumeric":"Should be alphanumeric","Please correct the errors and try again":"Please correct the errors and try again","Message received":"Message received","<p>Hello [Name],<\/p><p><br><\/p><p>We have received your submission. Here are the details you have submitted to us:<\/p><p>[Form Content]<\/p><p><br><\/p><p>Regards,<\/p><p>Nishant<\/p>":"<p>Hello [Name],<\/p><p><br><\/p><p>We have received your submission. Here are the details you have submitted to us:<\/p><p>[Form Content]<\/p><p><br><\/p><p>Regards,<\/p><p>Nishant<\/p>","Thank you for your submission":"Thank you for your submission","<p>Hello,<\/p><p><br><\/p><p>You have received a new form submission for the form [Form Name]. Here are the details:<\/p><p>[Form Content]<\/p><p><br><\/p><p>Page: [URL]<br>Unique ID: #[Entry ID]<br>Date: [Date]<br>Time: [Time]<\/p>":"<p>Hello,<\/p><p><br><\/p><p>You have received a new form submission for the form [Form Name]. Here are the details:<\/p><p>[Form Content]<\/p><p><br><\/p><p>Page: [URL]<br>Unique ID: #[Entry ID]<br>Date: [Date]<br>Time: [Time]<\/p>","New Form Submission":"New Form Submission","Heading":"Heading","Some Title":"Some Title","Name":"Name","your full name":"your full name","Password":"Password","check your caps":"check your caps","Email":"Email","a valid email":"a valid email","Comments":"Comments","more details":"more details","Favorite Fruits":"Favorite Fruits","pick one!":"pick one!","Language":"Language","Date":"Date","of appointment":"of appointment","Add some text or <strong>HTML<\/strong> here":"Add some text or <strong>HTML<\/strong> here","Text Field":"Text Field","Submit Form":"Submit Form","File":"File","upload":"upload","Slider":"Slider","take your pick":"take your pick","Time":"Time","Address":"Address","your home \/ office":"your home \/ office","Rate":"Rate","our support":"our support","Liked the food?":"Liked the food?","let us know":"let us know","Survey":"Survey","How Was the Food?":"How Was the Food?","How Was the Service?":"How Was the Service?","Poor":"Poor","Average":"Average","Good":"Good","Bad":"Bad","Could be better":"Could be better","So so":"So so","Excellent":"Excellent","Blank":"Blank","Template":"Template","Duplicate":"Duplicate","Import":"Import","(blank form)":"(blank form)","80% Zoom":"80% Zoom","Select Form Template To View":"Select Form Template To View","Select Form":"Select Form","Create Form":"Create Form","No Forms Found":"No Forms Found","Forms":"Forms","New Form":"New Form","ID":"ID","Last Edit":"Last Edit","Sure? This action can't be reversed.":"Sure? This action can't be reversed.","Form Analytics":"Form Analytics","reset analytics data":"reset analytics data","Custom":"Custom","All Forms":"All Forms","form views":"form views","submissions":"submissions","conversion":"conversion","charges":"charges","No Entries Found":"No Entries Found","Select Form to Export":"Select Form to Export","Separator:":"Separator:","Comma (CSV format)":"Comma (CSV format)","Semicolon":"Semicolon","Export":"Export","Entries":"Entries","(All Forms)":"(All Forms)","Created":"Created","Hide Empty Fields":"Hide Empty Fields","Save Changes":"Save Changes","Edit Entry":"Edit Entry","Print":"Print","Referer":"Referer","Insights":"Insights","Get Insights":"Get Insights","Period":"Period","All":"All","From":"From","To":"To","Max Entries":"Max Entries","Entries Analyzed":"Entries Analyzed","No Insights Available":"No Insights Available","learn more":"learn more","License Key verified":"License Key verified","Verified":"Verified","Update Key Info":"Update Key Info","Verify Key":"Verify Key","Purchased On":"Purchased On","Last Check":"Last Check","Expires On":"Expires On","More Info":"More Info","days too late":"days too late","days left":"days left","Renew License Key":"Renew License Key","renewing the license key gives you access to auto plugin updates and free customer support":"renewing the license key gives you access to auto plugin updates and free customer support","No Files Found":"No Files Found","File Uploads":"File Uploads","Trash":"Trash","Type":"Type","Size":"Size","Disable Analytics":"Disable Analytics","Search":"Search","Loading":"Loading","Entry View":"Entry View","Your License Key":"Your License Key","Your Email":"Your Email"},"datepickerLang":"https:\/\/pecpte.com\/wp-content\/plugins\/formcraft3\/assets\/js\/datepicker-lang\/"};
/* ]]> */
</script>
<script type="text/javascript" id="fc-form-js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/form.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="fc-captcha-addon-js-main-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/captcha_form_main.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vc_waypoints-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/vc-waypoints.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="owl.carousel-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/owl.carousel.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm-testimonials-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(2).js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vc_transition_bootstrap_js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/transition.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vc_carousel_js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/vc_carousel.min.js.download" data-rocket-status="executed"></script>
<script src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/e-202611.js.download" defer=""></script>
<script>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:11.3.4',blog:'203252251',post:'7',tz:'6',srv:'pecpte.com'} ]);
	_stq.push([ 'clickTrackerInit', '203252251', '7' ]);
</script>
    <script src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHsKICAgIGpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7CiAgICAgIAogICAgfSk7CiAgICB9KTs=" data-rocket-status="executed">window.addEventListener('DOMContentLoaded', function() {
    jQuery(document).ready(function() {
      
    });
    });</script>
    <script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async="" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/lazyload.min.js.download"></script><script type="text/javascript" src="data:text/javascript;base64,CmRvY3VtZW50LnRpZGlvQ2hhdENvZGUgPSAieDh4ZGh5YXprZGI1NzdhcmJqM3JyZ2FicGJjenc0ZDUiOwooZnVuY3Rpb24oKSB7CiAgZnVuY3Rpb24gYXN5bmNMb2FkKCkgewogICAgdmFyIHRpZGlvU2NyaXB0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgic2NyaXB0Iik7CiAgICB0aWRpb1NjcmlwdC50eXBlID0gInRleHQvamF2YXNjcmlwdCI7CiAgICB0aWRpb1NjcmlwdC5hc3luYyA9IHRydWU7CiAgICB0aWRpb1NjcmlwdC5zcmMgPSAiLy9jb2RlLnRpZGlvLmNvL3g4eGRoeWF6a2RiNTc3YXJiajNycmdhYnBiY3p3NGQ1LmpzIjsKICAgIGRvY3VtZW50LmJvZHkuYXBwZW5kQ2hpbGQodGlkaW9TY3JpcHQpOwogIH0KICBpZiAod2luZG93LmF0dGFjaEV2ZW50KSB7CiAgICB3aW5kb3cuYXR0YWNoRXZlbnQoIm9ubG9hZCIsIGFzeW5jTG9hZCk7CiAgfSBlbHNlIHsKICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCJsb2FkIiwgYXN5bmNMb2FkLCBmYWxzZSk7CiAgfQp9KSgpOwo=" data-rocket-status="executed">
document.tidioChatCode = "x8xdhyazkdb577arbj3rrgabpbczw4d5";
(function() {
  function asyncLoad() {
    var tidioScript = document.createElement("script");
    tidioScript.type = "text/javascript";
    tidioScript.async = true;
    tidioScript.src = "//code.tidio.co/x8xdhyazkdb577arbj3rrgabpbczw4d5.js";
    document.body.appendChild(tidioScript);
  }
  if (window.attachEvent) {
    window.attachEvent("onload", asyncLoad);
  } else {
    window.addEventListener("load", asyncLoad, false);
  }
})();
</script>	<script defer="" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;ed93474679284e09820733c88e189923&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>


<script type="text/javascript" async="" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/x8xdhyazkdb577arbj3rrgabpbczw4d5.js.download"></script></body></html>