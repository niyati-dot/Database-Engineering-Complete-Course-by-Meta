<!DOCTYPE html>
<html lang="en" xmlns:fb="facebook.com/2008/fbml">
<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="/assets/mdl/material.min.css" />
<link type="text/css" rel="stylesheet" href="/assets/mdl/additional.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 " />
<link rel="shortcut icon" href="//www.w3resource.com/images/favicon.png">
<title>MySQL alter table - w3resource</title>
<meta name="Keywords" content="MySQL alter, altering table, insert column first, insert column before, alter mysql, mysql alter table insert column, mysql alter table insert, mysql alter table insert column before, mysql alter table insert a field, MySql alter table add index, MySql alter table add unique index, mysql alter table add index example, mysql alter table add index unique, mysql alter table add index syntax, mysql alter table add index fulltext, MySql alter table add primary key, add foreign key,mysql alter table add index tutorial, Tutorial, w3eresource" />
<meta name="description" content="The ALTER TABLE command is used to change the structure of an existing table.">
<meta property="og:title" content="MySQL alter table - w3resource" />
<meta property="og:description" content="The ALTER TABLE command is used to change the structure of an existing table." />
<meta property="og:type" content="tutorial" />
<meta property="og:url" content="https://www.w3resource.com/mysql/altering-table/altering-table.php" />
<meta property="og:image" content="//www.w3resource.com/w3r_images/mysql.gif" />
<meta property="og:site_name" content="w3resource" />


<script type="text/javascript" src="//m.servedby-buysellads.com/monetization.js"></script>
<style type="text/css">
@-webkit-keyframes hover-swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 10deg);
            transform: rotate3d(0, 0, 1, 10deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -7deg);
            transform: rotate3d(0, 0, 1, -7deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg);
  }

  to {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
  }
}

@keyframes hover-swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 10deg);
            transform: rotate3d(0, 0, 1, 10deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -7deg);
            transform: rotate3d(0, 0, 1, -7deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg);
  }

  to {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
  }
}

#hovercard {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

#hovercard .hover-section {
  position: relative;
  left: 14px;
}

#hovercard .hover-banner,
#hovercard .hover-subset {
  position: relative;
  top: 14px;
  left: -14px;
}

#hovercard .hover-section {
  display: flex;
  flex-direction: column;
  max-width: 250px;
  border-radius: 8px;
  background-color: #201b2a;
  text-decoration: none;
}

#hovercard .hover-banner:before {
  transition: all .2s ease-in-out;
}

#hovercard .hover-banner:before {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 0;
  border-width: 0;
  border-top-right-radius: 0;
  background-color: hsla(0, 0%, 100%, 0);
  content: "";
}

#hovercard .hover-banner:hover {
  -webkit-transform-origin: top center;
          transform-origin: top center;
  -webkit-animation-name: hover-swing;
          animation-name: hover-swing;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;

  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}

#hovercard .hover-banner:hover:before {
  width: 100%;
  height: 100%;
  border-width: 60px;
  border-top-right-radius: 100%;
  background-color: hsla(0, 0%, 100%, .08);
}

#hovercard .hover-ad {
  position: absolute;
  top: 0;
  right: 0;
  padding: 3px 8px;
  border-top-right-radius: 8px;
  border-bottom-left-radius: 8px;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 9px;
}

#hovercard .hover-banner {
  display: flex;
  margin-bottom: 14px;
  height: 140px;
  border-radius: 8px;
  box-shadow: inset 0 0 0 1px hsla(0, 0%, 0%, .1);

  justify-content: center;
  align-items: center;
}

#hovercard .hover-logo {
  width: 125px;
  height: 50px;
}

#hovercard .hover-subset {
  display: flex;
}

#hovercard .hover-icon {
  margin-right: 10px;
  padding: 4px;
  height: 20px;
  border: solid 5px #201b2a;
  border-radius: 50%;
}

#hovercard .hover-description {
  margin-bottom: 30px;
  color: #ddd;
  font-size: 14px;
}
</style>


<script>
window.FontAwesomeKitConfig = {"asyncLoading":{"enabled":false},"autoA11y":{"enabled":true},"baseUrl":"https://kit-free.fontawesome.com","detectConflictsUntil":null,"license":"free","method":"css","minify":{"enabled":true},"v4FontFaceShim":{"enabled":true},"v4shim":{"enabled":true},"version":"latest"};
!function(){function r(e){var t,n=[],i=document,o=i.documentElement.doScroll,r="DOMContentLoaded",a=(o?/^loaded|^c/:/^loaded|^i|^c/).test(i.readyState);a||i.addEventListener(r,t=function(){for(i.removeEventListener(r,t),a=1;t=n.shift();)t()}),a?setTimeout(e,0):n.push(e)}!function(){if(!(void 0===window.Element||"classList"in document.documentElement)){var e,t,n,i=Array.prototype,o=i.push,r=i.splice,a=i.join;d.prototype={add:function(e){this.contains(e)||(o.call(this,e),this.el.className=this.toString())},contains:function(e){return-1!=this.el.className.indexOf(e)},item:function(e){return this[e]||null},remove:function(e){if(this.contains(e)){for(var t=0;t<this.length&&this[t]!=e;t++);r.call(this,t,1),this.el.className=this.toString()}},toString:function(){return a.call(this," ")},toggle:function(e){return this.contains(e)?this.remove(e):this.add(e),this.contains(e)}},window.DOMTokenList=d,e=Element.prototype,t="classList",n=function(){return new d(this)},Object.defineProperty?Object.defineProperty(e,t,{get:n}):e.__defineGetter__(t,n)}function d(e){for(var t=(this.el=e).className.replace(/^\s+|\s+$/g,"").split(/\s+/),n=0;n<t.length;n++)o.call(this,t[n])}}();function a(e){var t,n,i,o;prefixesArray=e||["fa"],prefixesSelectorString="."+Array.prototype.join.call(e,",."),t=document.querySelectorAll(prefixesSelectorString),Array.prototype.forEach.call(t,function(e){n=e.getAttribute("title"),e.setAttribute("aria-hidden","true"),i=!e.nextElementSibling||!e.nextElementSibling.classList.contains("sr-only"),n&&i&&((o=document.createElement("span")).innerHTML=n,o.classList.add("sr-only"),e.parentNode.insertBefore(o,e.nextSibling))})}var d=function(e,t){var n=document.createElement("link");n.href=e,n.media="all",n.rel="stylesheet",n.id="font-awesome-5-kit-css",t&&t.detectingConflicts&&t.detectionIgnoreAttr&&n.setAttributeNode(document.createAttribute(t.detectionIgnoreAttr)),document.getElementsByTagName("head")[0].appendChild(n)},c=function(e,t){!function(e,t){var n,i=t&&t.before||void 0,o=t&&t.media||void 0,r=window.document,a=r.createElement("link");if(t&&t.detectingConflicts&&t.detectionIgnoreAttr&&a.setAttributeNode(document.createAttribute(t.detectionIgnoreAttr)),i)n=i;else{var d=(r.body||r.getElementsByTagName("head")[0]).childNodes;n=d[d.length-1]}var c=r.styleSheets;a.rel="stylesheet",a.href=e,a.media="only x",function e(t){if(r.body)return t();setTimeout(function(){e(t)})}(function(){n.parentNode.insertBefore(a,i?n:n.nextSibling)});var s=function(e){for(var t=a.href,n=c.length;n--;)if(c[n].href===t)return e();setTimeout(function(){s(e)})};function l(){a.addEventListener&&a.removeEventListener("load",l),a.media=o||"all"}a.addEventListener&&a.addEventListener("load",l),(a.onloadcssdefined=s)(l)}(e,t)},e=function(e,t,n){var i=t&&void 0!==t.autoFetchSvg?t.autoFetchSvg:void 0,o=t&&void 0!==t.async?t.async:void 0,r=t&&void 0!==t.autoA11y?t.autoA11y:void 0,a=document.createElement("script"),d=document.scripts[0];a.src=e,void 0!==r&&a.setAttribute("data-auto-a11y",r?"true":"false"),i&&(a.setAttributeNode(document.createAttribute("data-auto-fetch-svg")),a.setAttribute("data-fetch-svg-from",t.fetchSvgFrom)),o&&a.setAttributeNode(document.createAttribute("defer")),n&&n.detectingConflicts&&n.detectionIgnoreAttr&&a.setAttributeNode(document.createAttribute(n.detectionIgnoreAttr)),d.parentNode.appendChild(a)};function s(e,t){var n=t&&t.addOn||"",i=t&&t.baseFilename||e.license+n,o=t&&t.minify?".min":"",r=t&&t.fileSuffix||e.method,a=t&&t.subdir||e.method;return e.baseUrl+"/releases/"+("latest"===e.version?"latest":"v".concat(e.version))+"/"+a+"/"+i+o+"."+r}var t,n,i,o,l;try{if(window.FontAwesomeKitConfig){var u,f=window.FontAwesomeKitConfig,m={detectingConflicts:f.detectConflictsUntil&&new Date<=new Date(f.detectConflictsUntil),detectionIgnoreAttr:"data-fa-detection-ignore",detectionTimeoutAttr:"data-fa-detection-timeout",detectionTimeout:null};"js"===f.method&&(o=m,l={async:(i=f).asyncLoading.enabled,autoA11y:i.autoA11y.enabled},"pro"===i.license&&(l.autoFetchSvg=!0,l.fetchSvgFrom=i.baseUrl+"/releases/"+("latest"===i.version?"latest":"v".concat(i.version))+"/svgs"),i.v4shim.enabled&&e(s(i,{addOn:"-v4-shims",minify:i.minify.enabled})),e(s(i,{minify:i.minify.enabled}),l,o)),"css"===f.method&&function(e,t){var n,i=a.bind(a,["fa","fab","fas","far","fal","fad"]);e.autoA11y.enabled&&(r(i),n=i,"undefined"!=typeof MutationObserver&&new MutationObserver(n).observe(document,{childList:!0,subtree:!0})),e.v4shim.enabled&&(e.license,e.asyncLoading.enabled?c(s(e,{addOn:"-v4-shims",minify:e.minify.enabled}),t):d(s(e,{addOn:"-v4-shims",minify:e.minify.enabled}),t));e.v4FontFaceShim.enabled&&(e.asyncLoading.enabled?c(s(e,{addOn:"-v4-font-face",minify:e.minify.enabled}),t):d(s(e,{addOn:"-v4-font-face",minify:e.minify.enabled}),t));var o=s(e,{minify:e.minify.enabled});e.asyncLoading.enabled?c(o,t):d(o,t)}(f,m),m.detectingConflicts&&((u=document.currentScript.getAttribute(m.detectionTimeoutAttr))&&(m.detectionTimeout=u),document.currentScript.setAttributeNode(document.createAttribute(m.detectionIgnoreAttr)),t=f,n=m,r(function(){var e=document.createElement("script");n&&n.detectionIgnoreAttr&&e.setAttributeNode(document.createAttribute(n.detectionIgnoreAttr)),n&&n.detectionTimeoutAttr&&n.detectionTimeout&&e.setAttribute(n.detectionTimeoutAttr,n.detectionTimeout),e.src=s(t,{baseFilename:"conflict-detection",fileSuffix:"js",subdir:"js",minify:t.minify.enabled}),e.async=!0,document.body.appendChild(e)}))}}catch(e){}}();
</script>
<script type="text/javascript">
	(function(){
		var bsa_optimize=document.createElement('script');
		bsa_optimize.type='text/javascript';
		bsa_optimize.async=true;
		bsa_optimize.src='https://cdn4.buysellads.net/pub/w3resource.js?'+(new Date()-new Date()%600000);
		(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa_optimize);
	})();
</script>
</head>
<body>
<div id="w3r_body">
<style type="text/css">
article a {
text-decoration: none	
}
.mdl-menu {
min-width: 1024px;	
}
.mdl-menu__item {
height: 24px;
line-height: 24px;
font-size: 1em;
padding: 3px	
}
/*.mdl-menu__item {
height: 48px;
width:48px;
}*/
.header_notice a{
color: #fff
}
ul.nav.nav-list li {
font-size: 1em	
}
.mdl-layout__drawer .mdl-navigation .mdl-navigation__link {
color: #2a69a8;	
font-weight: 600;
font-size: 1.2em
}
.material-icons.home_link { font-size: 48px; }
#drawer_menu_topic_head1,#drawer_menu_topic_head2,#drawer_menu_topic_head3,#drawer_menu_topic_head4,
#drawer_menu_topic_head5,#drawer_menu_topic_head6,#drawer_menu_topic_head7 {
color: #ff6a01;
font-size: 1.5em;
font-weight: 700
}
.mdl-layout-title a {
color: #fff
}
@media screen and (max-width: 1024px) {	
	.drawer_logo {display: none}
}
@media screen and (max-width: 568px) {
#sidebar_right {
display: none
}
}	
@media screen and (max-width: 768px) {
ul.nav.nav-list {
display: none
}
}	

.w3r_donate_link {
font-weight: 800
}
.w3r_donate_link i{
margin-right: 5px;
margin-top: 20px;
}
.w3r_donate_link .gz{
margin-top: -30px
}
.w3r_donate_link a i{
color: #fff	
}
.w3r_donate_link a:hover{
color: #ff0a01
}
.w3r_donate_link a:visited{
color: #fff
}

.w3r_donate_link a:hover{
color: #ff0a01
}
.w3r_donate_link a:visited{
color: #fff
}
.w3r_donate_link a:link{
color: #fff	
}
.w3r_donate_link a:hover{
color: #ff0a01
}
.w3r_donate_link a:visited{
color: #fff
}
</style>
<style type="text/css">
   .gsc-control-cse
    {
        height:20px;
        background-color: rgb(63,81,181);
        border:0;
        margin-top: -15px;
        !important;     
    }
    .gsc-control-cse-en
    {
        height:20px;
        background-color: rgb(63,81,181);
        border:0;
        margin-top: -15px;
        !important;
    }
.widget {display: none !important;}
@media (max-width:629px) {
  .customSearch {
    display: none;
  }
}
</style>


<script async src="https://www.googletagmanager.com/gtag/js?id=G-HCW88J419P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HCW88J419P');
</script>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
<header class="mdl-layout__header">
<div class="mdl-layout__header-row">

<span class="mdl-layout-title"><a href="https://www.w3resource.com/index.php">w3resource</a></span>

<div class="mdl-layout-spacer mdl-layout--large-screen-only"></div>

<div class="mdl-layout-spacer mdl-layout--large-screen-only"></div>
<nav class="mdl-navigation mdl-layout--large-screen-only">

</nav>

<nav class="mdl-navigation mdl-layout--large-screen-only">
<div class="customSearch" style="border:0px solid;margin:-20px;width:400px;height:auto;">
<script>
  (function() {
    var cx = '013584948386948090933:pjqiqxq1drs';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
    })();
 </script>
<gcse:search enableAutoComplete="true"></gcse:search>
</div>
</nav>
</div>
</header>

<main class="mdl-layout__content">
<div class="page-content">



<div class="mdl-grid">
<div class="mdl-cell mdl-card mdl-shadow--2dp through mdl-shadow--6dp mdl-cell--2-col mdl-cell--hide-phone">
<ul class='nav nav-list'><li><a href='/index.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'>Home</a></li><li><a href='/mysql/mysql-tutorials.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'>MySQL Home</a></li><li><a href='/mysql/mysql-installation-on-linux-and-windows.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Installation</a></li><li><a href='/mysql/administration-tools/mysql-workbench-tutorial.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Administration Tools</a></li><li><a href='/mysql/mysql-connectors-and-apis.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Connectors and APIs</a></li><li><a href='/mysql/mysql-storage-engines.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Storage Engines (table types)</a></li><li><a href='/mysql/mysql-language-structure.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Language Structure</a></li><li><a href='/mysql/mysql-data-types.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Data Types</a></li><li><a href='/mysql/mysql-connection.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> Connecting to and disconnecting from MySQL</a></li><li><a href='/mysql/creating-using-databases-tables/what-are-database-and-tables.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL CREATE DATABASES, TABLES</a></li><li><a href='/mysql/creating-table-advance/constraint.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL CONSTRAINT</a></li><li><a href='/mysql/creating-table-advance/create-index.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL CREATE INDEX</a></li><li class='active'><a href='/mysql/altering-table/altering-table.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'>MySQL ALTER TABLE</a></li><li><a href='/mysql/mysql-partition.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Partitioning</a></li><li><a href='/mysql/inserting-updating-deleting/MySQL-insert-into-statement.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Insert</a></li><li><a href='/mysql/update-table/update-table.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Update</a></li><li><a href='/mysql/inserting-updating-deleting/mysql-delete.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Delete</a></li><li><a href='/mysql/basic-select-statement/mysql-basic-select-statement.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL basic select statement</a></li><li><a href='/mysql/mysql-union.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL UNION</a></li><li><a href='/mysql/aggregate-functions-and-grouping/aggregate-functions-and-grouping-in-mysql.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> Aggregate functions and grouping</a></li><li><a href='/mysql/mysql-functions-and-operators.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL functions and operators</a></li><li><a href='/mysql/advance-query-in-mysql/find-duplicate-data-mysql.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> Advance queries in MySQL</a></li><li><a href='/mysql/advance-query-in-mysql/mysql-joins.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL JOINS</a></li><li><a href='/mysql/subqueries/index.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Subqueries</a></li><li><a href='/mysql/mysql-procedure.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Procedure</a></li><li><a href='/mysql/mysql-triggers.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Triggers</a></li><li><a href='/mysql/mysql-transaction.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Transaction</a></li><li><a href='/mysql/mysql-views.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Views</a></li><li><a href='/mysql/mysql-security.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Security</a></li><li><a href='/mysql/mysql-show.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Show Commands</a></li><li><a href='/mysql/drop-table/drop-table.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL DROP</a></li><li><a href='/mysql/exporting-and-importing-data-between-mysql-and-microsoft-excel.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> Exporting and importing data between mysql and microsoft excel</a></li><li><a href='/mysql/mysql-backup-and-restore.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL backup and restore</a></li><li><a href='/php/pdo/php-pdo.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> Working with PDO</a></li><li><a href='/mysql/mysql-cluster-overview.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Cluster Overview</a></li><li><a href='/mysql/mysql-question-answer.php' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Questions Answers</a></li><li><a href='/mysql-exercises/' itemscope itemtype='http://schema.org/WebPageElement/SiteNavigationElement'> MySQL Exercises</a></li></ul></div>
<div class="mdl-cell mdl-card mdl-shadow--2dp through mdl-shadow--6dp mdl-cell--7-col">
<article itemscope itemtype="https://schema.org/TechArticle">
<h1 class="heading" id="h_one">MySQL ALTER TABLE</h1>
<time itemprop="dateModified" datetime="August 19 2022 21:51:22.">Last update on August 19 2022 21:51:22 (UTC/GMT +8 hours)</time>
<style type="text/css">
@media screen and (max-width: 1920px) {
#h1_banner_block {display: block}
#h1_banner_block_mobile {display: none}
#h1_banner_mobile_smallest {display: none}
}
@media screen and (max-width: 600px) {
#h1_banner_block {display: none}
#h1_banner_block_mobile {display: block}
#h1_banner_mobile_smallest {display: none}	
}
@media screen and (max-width: 480px) {
#h1_banner_block {display: none}
#h1_banner_block_mobile {display: none}
#h1_banner_mobile_smallest {display: block}	
}
</style>
<div class="mdl-grid">
<div class="mdl-cell mdl-cell--12-col" id="h1_banner_block">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-full-width-responsive="true" data-ad-client="ca-pub-2153208817642134" data-ad-slot="3199727180"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div id="bsa-zone_1634824896174-3_123456"></div>
</div>
<div class="mdl-cell mdl-cell--12-col" id="h1_banner_mobile_smallest">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2153208817642134" crossorigin="anonymous"></script>

<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2153208817642134" data-ad-slot="5610855762" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<h2>ALTER TABLE</h2>
<p>The ALTER TABLE command is used&nbsp; to change the structure of an existing table. It helps to add or delete columns, create or destroy indexes, change the type of existing columns, rename columns or the table itself. It&nbsp; can also be used to change the comment for the table and type of the table.</p>
<p><strong>Syntax: </strong></p>
<pre class="well_syntax">ALTER [IGNORE] TABLE tbl_name
    [alter_specification [, alter_specification] ...]
    [partition_options]

alter_specification:
    table_options
  | ADD [COLUMN] col_name column_definition
        [FIRST | AFTER col_name ]
  | ADD [COLUMN] (col_name column_definition,...)
  | ADD {INDEX|KEY} [index_name]
        [index_type] (index_col_name,...) [index_option] ...
  | ADD [CONSTRAINT [symbol]] PRIMARY KEY
        [index_type] (index_col_name,...) [index_option] ...
  | ADD [CONSTRAINT [symbol]]
        UNIQUE [INDEX|KEY] [index_name]
        [index_type] (index_col_name,...) [index_option] ...
  | ADD FULLTEXT [INDEX|KEY] [index_name]
        (index_col_name,...) [index_option] ...
  | ADD SPATIAL [INDEX|KEY] [index_name]
        (index_col_name,...) [index_option] ...
  | ADD [CONSTRAINT [symbol]]
        FOREIGN KEY [index_name] (index_col_name,...)
        reference_definition
  | ALGORITHM [=] {DEFAULT|INPLACE|COPY}
  | ALTER [COLUMN] col_name {SET DEFAULT literal | DROP DEFAULT}
  | CHANGE [COLUMN] old_col_name new_col_name column_definition
        [FIRST|AFTER col_name]
  | LOCK [=] {DEFAULT|NONE|SHARED|EXCLUSIVE}
  | MODIFY [COLUMN] col_name column_definition
        [FIRST | AFTER col_name]
  | DROP [COLUMN] col_name
  | DROP PRIMARY KEY
  | DROP {INDEX|KEY} index_name
  | DROP FOREIGN KEY fk_symbol
  | DISABLE KEYS
  | ENABLE KEYS
  | RENAME [TO|AS] new_tbl_name
  | ORDER BY col_name [, col_name] ...
  | CONVERT TO CHARACTER SET charset_name [COLLATE collation_name]
  | [DEFAULT] CHARACTER SET [=] charset_name [COLLATE [=] collation_name]
  | DISCARD TABLESPACE
  | IMPORT TABLESPACE
  | FORCE
  | ADD PARTITION (partition_definition)
  | DROP PARTITION partition_names
  | TRUNCATE PARTITION {partition_names | ALL}
  | COALESCE PARTITION number
  | REORGANIZE PARTITION partition_names INTO (partition_definitions)
  | EXCHANGE PARTITION partition_name WITH TABLE tbl_name
  | ANALYZE PARTITION {partition_names | ALL}
  | CHECK PARTITION {partition_names | ALL}
  | OPTIMIZE PARTITION {partition_names | ALL}
  | REBUILD PARTITION {partition_names | ALL}
  | REPAIR PARTITION {partition_names | ALL}
  | REMOVE PARTITIONING

index_col_name:
    col_name [(length)] [ASC | DESC]

index_type:
    USING {BTREE | HASH}

index_option:
    KEY_BLOCK_SIZE [=] value
  | index_type
  | WITH PARSER parser_name
  | COMMENT 'string'

table_options:
    table_option [[,] table_option] ...  (see CREATE TABLE options)
</pre>
<p><strong> Arguments:</strong></p>
<style type="text/css">
 .btn-toolbar {display: none}
 </style>
<div class="table-responsive">
<table class="table table-small-font table-bordered table-striped">
<tr>
<th>Name</th>
<th> Description </th>
</tr>
<tr>
<td>COLUMN</td>
<td>List of columns. </td>
</tr>
<tr>
<td>FIRST</td>
<td>A column can be added at a specific position within a table row, using FIRST or AFTER clause. By default, the column is added at the last. You can also use FIRST and AFTER in CHANGE or MODIFY operations to reorder columns within a table.</td>
</tr>
<tr>
<td>INDEX | KEY </td>
<td>KEY is normally a synonym for INDEX</td>
</tr>
<tr>
<td>CONSTRAINT</td>
<td>CONSTRAINT is used to define rules to allow or restrict what values can be stored in columns. </td>
</tr>
<tr>
<td>PRIMARY KEY</td>
<td>A PRIMARY KEY is a unique index where all key columns must be defined as NOT NULL. If not declare MySQL declares them so implicitly. A table can have only one PRIMARY KEY. </td>
</tr>
<tr>
<td>UNIQUE</td>
<td>A UNIQUE index creates a constraint in which all values in the index must be distinct. An error occurs when you try to add a new row with a key value that matches an existing row. </td>
</tr>
<tr>
<td>FULLTEXT</td>
<td>FULLTEXT indexes are used for full-text searches. Only the MyISAM storage engine supports FULLTEXT indexes. They can be created only from CHAR, VARCHAR, and TEXT columns. Indexing always happens over the entire column; column prefix indexing is not supported and any prefix length is ignored if specified.</td>
</tr>
<tr>
<td>SPATIAL</td>
<td>SPATIAL indexes can be created on spatial data types. Spatial types are supported only for MyISAM tables and indexed columns must be declared as NOT NULL.</td>
</tr>
<tr>
<td>FOREIGN KEY</td>
<td>InnoDB and NDB tables support checking of foreign key constraints. The columns of the referenced table must always be explicitly named. Both ON DELETE and ON UPDATE functions on foreign keys.</td>
</tr>
<tr>
<td>CHECK</td>
<td>For other storage engines, MySQL Server parses and ignores the FOREIGN KEY and REFERENCES syntax in CREATE TABLE statements other than the InnoDB and NDB engine. The CHECK clause is parsed but ignored by all storage engines.</td>
</tr>
<tr>
<td>ALGORITHM=COPY</td>
<td>You needed this when you are applying ALTER TABLE in earlier versions of MySQL (&lt; 5.6) while altering a table online. This method was used to use a temporary table while altering a table. </td>
</tr>
<tr>
<td>ALGORITHM = DEFAULT</td>
<td> is the same a specifying no ALGORITHM clause at all.</td>
</tr>
<tr>
<td>ALGORITHM=INPLACE</td>
<td>The ALGORITHM=INPLACE continue the operation inside the InnoDB storage engines by using the in-place technique, and fail which are not support this features with an error.</td>
</tr>
<tr>
<td>LOCK = DEFAULT</td>
<td> Permit a series of coincident events i.e. reads and writes when supported. Otherwise permit concurrent reads when supported else enforce exclusive access.</td>
</tr>
<tr>
<td>LOCK = NONE</td>
<td>When supported, permit concurrent reads and writes else return an error message.</td>
</tr>
<tr>
<td>LOCK =SHARED</td>
<td>When supported, allow concurrent reads but restrict writes. Remember that writes will be blocked even if concurrent writes are supported by the storage engine for the given ALGORITHM clause (if any) and ALTER TABLE operation. When concurrent reads are not supported an error message will be returned. </td>
</tr>
<tr>
<td>LOCK = EXCLUSIVE</td>
<td>This enforce exclusive access. It happens even if concurrent reads/writes are supported by the storage engine for the given ALGORITHM clause (if any) and ALTER TABLE operation.</td>
</tr>
</table>
</div>
<p><strong>Basic Examples</strong></p>
<p>Create a table testtable as shown below: </p>
<pre class="line-numbers"><code class="language-sql">CREATE TABLE testtable (col1 INT(11), col2 VARCHAR(15));
</code>
</pre>
<p>To rename the table from testtable to w3r1, use the following statement. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE testtable RENAME w3r1;
</code>
</pre>
<p>To change column col1 from INTEGER to TINYINT NOT NULL (leaving the name the same), and to change column b from VARCHAR(15) to CHAR(25) as well as renaming it from col2 to col3, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE w3r1 MODIFY col1 TINYINT NOT NULL, CHANGE col2 col3 VARCHAR(25);
</code>
</pre>
<p>To add a new TIMESTAMP column named col4, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE w3r1 ADD col4 TIMESTAMP;
</code>
</pre>
<p>To add an index on column col4 and a UNIQUE index on column col1, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE w3r1 ADD INDEX (col4), ADD UNIQUE (col1);
</code>
</pre>
<p>To remove column col3 from the table w3r1, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE w3r1 DROP COLUMN col3;
</code>
</pre>
<p>To add a new AUTO_INCREMENT integer column named col3, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE w3r1 ADD col3 INT UNSIGNED NOT NULL AUTO_INCREMENT,   
ADD PRIMARY KEY (col3);
</code>
</pre>
<p>Here in the above example, we indexed col3 (as a PRIMARY KEY) because AUTO_INCREMENT columns must be indexed, and we declare col3 as NOT NULL because primary key columns cannot be NULL.</p>
<p>To change the data type of col1 into BIGINT, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE w3r1 MODIFY col1 BIGINT;
</code>
</pre>
<p>If you want to include the attributes UNSIGNED DEFAULT 1 and COMMENT 'test column', show the below statement - </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE w3r1 MODIFY col1 BIGINT UNSIGNED DEFAULT 1 COMMENT 'test column';
</code>
</pre>
<p>To change the table default character set and all character columns (CHAR, VARCHAR, TEXT) to a new character set, use a statement like this:</p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE w3r1 CONVERT TO CHARACTER SET latin1;
</code>
</pre>
<P><strong>MySQL ALTER TABLE insert column</strong></P>
<p>Here is the structure of <em>newbook_mast</em> table. </p>
<p><strong>Sample Output:</strong> </p>
<pre class="output">+------------+--------------+------+-----+------------+-------+
| Field      | Type         | Null | Key | Default    | Extra |
+------------+--------------+------+-----+------------+-------+
| book_id    | varchar(15)  | NO   | PRI |            |       |
| book_name  | varchar(50)  | NO   |     |            |       |
| isbn_no    | varchar(15)  | NO   |     |            |       |
| cate_id    | varchar(8)   | NO   |     |            |       |
| aut_id     | varchar(8)   | NO   |     |            |       |
| pub_id     | varchar(8)   | NO   |     |            |       |
| dt_of_pub  | date         | NO   |     | 0000-00-00 |       |
| pub_lang   | varchar(15)  | YES  |     | NULL       |       |
| no_page    | decimal(5,0) | NO   |     | 0          |       |
| book_price | decimal(8,2) | NO   |     | 0.00       |       |
+------------+--------------+------+-----+------------+-------+
10 rows in set (0.00 sec)
</pre>
<p>If you want to add a column 'id' of integer type in the table <em>newbook_mast</em>, the following statement can be used.</p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE newbook_mast
ADD id  INT;
</code>
</pre>
<p>Here is the structure of the <em>newbook_mast</em> after add a column <em>id</em> . </p>
<img src='https://www.w3resource.com/w3r_images/alter1.gif' alt="MySQL alter table" style="max-width:100%;display:block;height:auto;border: 2px solid silver;">
<p><strong>MySQL ALTER TABLE insert column FIRST </strong></p>
<p>Here is the structure of <em>newbook_mast</em> table. </p>
<p><strong>Sample Output:</strong> </p>
<pre class="output">+------------+--------------+------+-----+------------+-------+
| Field      | Type         | Null | Key | Default    | Extra |
+------------+--------------+------+-----+------------+-------+
| book_id    | varchar(15)  | NO   | PRI |            |       |
| book_name  | varchar(50)  | NO   |     |            |       |
| isbn_no    | varchar(15)  | NO   |     |            |       |
| cate_id    | varchar(8)   | NO   |     |            |       |
| aut_id     | varchar(8)   | NO   |     |            |       |
| pub_id     | varchar(8)   | NO   |     |            |       |
| dt_of_pub  | date         | NO   |     | 0000-00-00 |       |
| pub_lang   | varchar(15)  | YES  |     | NULL       |       |
| no_page    | decimal(5,0) | NO   |     | 0          |       |
| book_price | decimal(8,2) | NO   |     | 0.00       |       |
+------------+--------------+------+-----+------------+-------+
10 rows in set (0.00 sec)
</pre>
<p>If you want to insert a column <em>id</em> of integer type, as first column of the table <em>newbook_mast</em>, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE newbook_mast
ADD id  INT  FIRST ;
</code>
</pre>
<p>Here is the structure of the <em>newbook_mast</em> after adding a column <em>id</em> at first. </p>
<img src='https://www.w3resource.com/w3r_images/alter2.gif' alt="MySQL alter table" style="max-width:100%;display:block;height:auto;border: 2px solid silver;">
<p><strong>MySQL ALTER TABLE to insert column AFTER a column</strong></p>
<p>Here is the structure of <em>newbook_mast</em> table. </p>
<pre class="output">+------------+--------------+------+-----+------------+-------+
| Field      | Type         | Null | Key | Default    | Extra |
+------------+--------------+------+-----+------------+-------+
| book_id    | varchar(15)  | NO   | PRI |            |       |
| book_name  | varchar(50)  | NO   |     |            |       |
| isbn_no    | varchar(15)  | NO   |     |            |       |
| cate_id    | varchar(8)   | NO   |     |            |       |
| aut_id     | varchar(8)   | NO   |     |            |       |
| pub_id     | varchar(8)   | NO   |     |            |       |
| dt_of_pub  | date         | NO   |     | 0000-00-00 |       |
| pub_lang   | varchar(15)  | YES  |     | NULL       |       |
| no_page    | decimal(5,0) | NO   |     | 0          |       |
| book_price | decimal(8,2) | NO   |     | 0.00       |       |
+------------+--------------+------+-----+------------+-------+
10 rows in set (0.00 sec)
</pre>
<p>If you want to add two specific columns <em>pub_name</em> and <em>pub_add</em> after <em>pub_id</em> and <em>dt_of_pub</em> columns respectively, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE newbook_mast
ADD pub_name  VARCHAR(35)  AFTER pub_id,
ADD pub_add   VARCHAR(50)  AFTER dt_of_pub;
</code>
</pre>
<p>Here is the structure of the <em>newbook_mast</em> after add two columns in specific position said above.</p>
<img src='https://www.w3resource.com/w3r_images/alter3.gif' alt="MySQL alter table" style="max-width:100%;display:block;height:auto;border: 2px solid silver;">
<p><strong>MySQL ALTER TABLE ADD INDEX</strong></p>.If you want to add an index named 'cate_id' on 'cate_id' column for the table 'newbook_mast', the following statement can be used.
<pre class="line-numbers"><code class="language-sql">ALTER TABLE newbook_mast
ADD INDEX cate_id(cate_id);
</code>
</pre>
<p>Here is the indexes for the <em>newbook_mast</em> table after adding an index named <em>cate_id</em> on <em>cate_id</em> column.</p>
<pre class="output" style="overflow: scroll;">+--------------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| Table        | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment |
+--------------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| newbook_mast |          0 | PRIMARY  |            1 | book_id     | A         |           0 |     NULL | NULL   |      | BTREE      |         |               |
| <strong><font color="#FF0000">newbook_mast |          1 | cate_id  |            1 | cate_id     | A         |        NULL |     NULL | NULL   |      | BTREE</font></strong>      |         |               |
+--------------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
2 rows in set (0.00 sec)
</pre>
<p><strong>MySQL ALTER TABLE ADD UNIQUE INDEX </strong></p>
<p>If you want to add a UNIQUE INDEX named 'cate_id' on 'cate_id' column for the table 'newbook_mast', the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE newbook_mast
ADD UNIQUE INDEX cate_id(cate_id);
</code>
</pre>
<p>Here is the unique indexes for the <em>newbook_mast</em> table after adding an unique index named <em>cate_id</em> on <em>cate_id</em> column.</p>
<p><strong>Sample Output:</strong> </p>
<pre class="output" style="overflow: scroll;">+--------------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| Table        | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment |
+--------------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| newbook_mast |          0 | PRIMARY  |            1 | book_id     | A         |           0 |     NULL | NULL   |      | BTREE      |         |               |
| <strong><font color="#FF0000">newbook_mast |          0 | cate_id  |            1 | cate_id     | A         |           0 |     NULL | NULL   |      | BTREE</font></strong>      |         |               |
+--------------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
2 rows in set (0.00 sec)
</pre>
<p><strong>MySQL ALTER TABLE ADD PRIMARY KEY</strong></p>
<p>Here is the structure of <em>tstpurch</em> table. The below figure shows that it has no primary key. </p>
<pre class="output">+-------------+---------------+------+-----+------------+-------+
| Field       | Type          | Null | Key | Default    | Extra |
+-------------+---------------+------+-----+------------+-------+
| invoice_no  | varchar(12)   | NO   |     |            |       |
| invoice_dt  | date          | NO   |     | 0000-00-00 |       |
| ord_no      | varchar(25)   | NO   |     | NULL       |       |
| ord_date    | date          | NO   |     | 0000-00-00 |       |
| receive_dt  | date          | NO   |     | 0000-00-00 |       |
| book_id     | varchar(8)    | NO   |     |            |       |
| book_name   | varchar(50)   | NO   |     |            |       |
| pub_lang    | varchar(8)    | YES  |     | NULL       |       |
| cate_id     | varchar(8)    | YES  |     | NULL       |       |
| receive_qty | int(5)        | NO   |     | 0          |       |
| purch_price | decimal(12,2) | NO   |     | 0.00       |       |
| total_cost  | decimal(12,2) | NO   |     | 0.00       |       |
+-------------+---------------+------+-----+------------+-------+
12 rows in set (0.01 sec)
</pre>
<p>If you want to l create a PRIMARY KEY on <em>invoice_no</em> column for the table <em>tstpurch</em>, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE tstpurch
ADD PRIMARY KEY invoice_no (invoice_no);
</code>
</pre>
<p>Here is the primary key after adding a primary key named <em>invoice_no</em> on <em>invoice_no</em> column.</p>
<pre class="output">+-------------+---------------+------+-----+------------+-------+
| Field       | Type          | Null | Key | Default    | Extra |
+-------------+---------------+------+-----+------------+-------+
| invoice_no  | varchar(12)   | NO   | <strong><font color="#FF0000">PRI</font></strong> |            |       |
| invoice_dt  | date          | NO   |     | 0000-00-00 |       |
| ord_no      | varchar(25)   | NO   |     | NULL       |       |
| ord_date    | date          | NO   |     | 0000-00-00 |       |
| receive_dt  | date          | NO   |     | 0000-00-00 |       |
| book_id     | varchar(8)    | NO   |     |            |       |
| book_name   | varchar(50)   | NO   |     |            |       |
| pub_lang    | varchar(8)    | YES  |     | NULL       |       |
| cate_id     | varchar(8)    | YES  |     | NULL       |       |
| receive_qty | int(5)        | NO   |     | 0          |       |
| purch_price | decimal(12,2) | NO   |     | 0.00       |       |
| total_cost  | decimal(12,2) | NO   |     | 0.00       |       |
+-------------+---------------+------+-----+------------+-------+
12 rows in set (0.01 sec)
</pre>
<p>Here is the details of the index.</p>
<p><strong>Sample Output:</strong> </p>
<pre class="output" style="overflow: scroll;">+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| Table    | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
<strong><font color="#FF0000">| tstpurch |          0 | PRIMARY  |            1 | invoice_no  | A         |           0 |     NULL | NULL   |      | BTREE      |         |               |</font></strong>
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
1 row in set (0.00 sec)
</pre>
<p><strong>MySQL ALTER TABLE ADD FOREIGN KEY</strong></p>
<p>Here are the structure of<em> torder </em>table and <em>newbook_mast</em> table.</p>
<pre class="output">Table: torder  
+-----------+-------------+------+-----+------------+-------+
| Field     | Type        | Null | Key | Default    | Extra |
+-----------+-------------+------+-----+------------+-------+
| ord_no    | varchar(15) | NO   |     |            |       |
| ord_date  | date        | NO   |     | 0000-00-00 |       |
| book_id   | varchar(15) | NO   | PRI |            |       |
| book_name | varchar(50) | NO   |     |            |       |
| cate_id   | varchar(8)  | NO   | PRI |            |       |
| pub_lang  | varchar(15) | NO   |     |            |       |
| ord_qty   | int(5)      | NO   |     | 0          |       |
+-----------+-------------+------+-----+------------+-------+

Table: newbook_mast
+------------+--------------+------+-----+------------+-------+
| Field      | Type         | Null | Key | Default    | Extra |
+------------+--------------+------+-----+------------+-------+
| book_id    | varchar(15)  | NO   | PRI |            |       |
| book_name  | varchar(50)  | NO   |     |            |       |
| isbn_no    | varchar(15)  | NO   |     |            |       |
| cate_id    | varchar(8)   | NO   |     |            |       |
| aut_id     | varchar(8)   | NO   |     |            |       |
| pub_id     | varchar(8)   | NO   |     |            |       |
| dt_of_pub  | date         | NO   |     | 0000-00-00 |       |
| pub_lang   | varchar(15)  | YES  |     | NULL       |       |
| no_page    | decimal(5,0) | NO   |     | 0          |       |
| book_price | decimal(8,2) | NO   |     | 0.00       |       |
+------------+--------------+------+-----+------------+-------+
10 rows in set (0.00 sec)
</pre>
<p>If you want to create a FOREIGN KEY with the combination of <em>book_id</em> and <em>cate_id</em> columns of <em>newbook_mast</em> table with a reference from <em>torder</em> table, the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE newbook_mast
ADD&nbsp; FOREIGN KEY(book_id,cate_id)
REFERENCES 
torder(book_id,cateid);
</code>
</pre>
<p>Here is the details of the index of <em>newbook_mast</em> table. </p>
<pre class="output" style="overflow: scroll;">+--------------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| Table        | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment |
+--------------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| newbook_mast |          0 | PRIMARY  |            1 | book_id     | A         |           0 |     NULL | NULL   |      | BTREE      |         |               |
| <strong><font color="#FF0000">newbook_mast |          1 | book_id  |            1 | book_id     | A         |        NULL |     NULL | NULL   |      | BTREE      |         |               |</font></strong>
| <strong><font color="#FF0000">newbook_mast |          1 | book_id  |            2 | cate_id     | A         |        NULL |     NULL | NULL   |      | BTREE      |         |               |</font></strong>
+--------------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
3 rows in set (0.00 sec)
</pre>
<p><strong>MySQL ALTER TABLE ADD and DROP column, INDEX, PRIMARY KEY and FOREIGN KEY</strong></p>
<p>Here is the structure and index of <em>tstpurch</em> and <em>torder</em> table.</p>
<pre class="output" style="overflow: scroll;">Table: tstpurch
+-------------+---------------+------+-----+------------+-------+
| Field       | Type          | Null | Key | Default    | Extra |
+-------------+---------------+------+-----+------------+-------+
| id          | int(5)        | YES  |     | NULL       |       |
| invoice_no  | varchar(12)   | NO   | PRI |            |       |
| invoice_dt  | date          | NO   |     | 0000-00-00 |       |
| ord_no      | varchar(25)   | NO   | MUL | NULL       |       |
| ord_date    | date          | NO   |     | 0000-00-00 |       |
| receive_dt  | date          | NO   |     | 0000-00-00 |       |
| book_id     | varchar(8)    | NO   |     |            |       |
| book_name   | varchar(50)   | NO   |     |            |       |
| pub_lang    | varchar(8)    | YES  |     | NULL       |       |
| cate_id     | varchar(8)    | YES  | MUL | NULL       |       |
| receive_qty | int(5)        | NO   |     | 0          |       |
| purch_price | decimal(12,2) | NO   |     | 0.00       |       |
| total_cost  | decimal(12,2) | NO   |     | 0.00       |       |
+-------------+---------------+------+-----+------------+-------+

Indexes of  tstpurch table
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| Table    | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| tstpurch |          0 | PRIMARY  |            1 | invoice_no  | A         |           0 |     NULL | NULL   |      | BTREE      |         |               |
| tstpurch |          1 | cate_id  |            1 | cate_id     | A         |        NULL |     NULL | NULL   | YES  | BTREE      |         |               |
| tstpurch |          1 | ord_no   |            1 | ord_no      | A         |        NULL |     NULL | NULL   |      | BTREE      |         |               |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+

Table: torder
+-----------+-------------+------+-----+------------+-------+
| Field     | Type        | Null | Key | Default    | Extra |
+-----------+-------------+------+-----+------------+-------+
| ord_no    | varchar(15) | NO   | PRI |            |       |
| ord_date  | date        | NO   |     | 0000-00-00 |       |
| book_id   | varchar(15) | NO   | MUL |            |       |
| book_name | varchar(50) | NO   |     |            |       |
| cate_id   | varchar(8)  | NO   |     |            |       |
| pub_lang  | varchar(15) | NO   |     |            |       |
| ord_qty   | int(5)      | NO   |     | 0          |       |
+-----------+-------------+------+-----+------------+-------+

Indexes of torder
+--------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| Table  | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment |
+--------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| torder |          0 | PRIMARY  |            1 | ord_no      | A         |           0 |     NULL | NULL   |      | BTREE      |         |               |
| torder |          1 | book_id  |            1 | book_id     | A         |        NULL |     NULL | NULL   |      | BTREE      |         |               |
| torder |          1 | book_id  |            2 | cate_id     | A         |        NULL |     NULL | NULL   |      | BTREE      |         |               |
+--------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
</pre>
<p>If you want to modifies the structure of 'tstpurch' table in the following manner -</p>
<p><strong>1.</strong> Drop the 'id' column, existing primary key, index 'cate_id' and foreign key 'ord_no'. <br />
<strong>2.</strong> Add an integer type column 'id' with default value 0.<br />
<strong>3.</strong> Add column 'chano' which is varchar type and size 10 and don't accept any NULL value.<br />
<strong>4.</strong> Add a date type column 'chadt'.<br />
<strong>5.</strong> Add a primary key named 'invoice_no' on 'invoice_no' column.<br />
<strong>6.</strong> Add an index named 'cate_id' on 'cate_id' column.<br />
<strong>7.</strong> Add a foreign key in combination of two columns 'ord_no' and 'book_id' which is referred by the same primary key of 'torder' table.</p>
<p>the following statement can be used. </p>
<pre class="line-numbers"><code class="language-sql">ALTER TABLE tstpurch
DROP id,
ADD id int NOT NULL DEFAULT 0,
ADD chano VARCHAR(10) NOT NULL,
ADD  chadt date,
DROP  PRIMARY KEY,
ADD  PRIMARY KEY invoice_no (invoice_no),
DROP  INDEX cate_id,
ADD  INDEX cate_id(cate_id),
DROP  FOREIGN KEY ord_no,
ADD  FOREIGN KEY(book_id,cate_id) REFERENCES
torder(book_id,cate_id);
</code>
</pre>
<p>and now, here is the structure and index of <em>tstpurch</em> and <em>torder</em> table </p>
<pre class="output" style="overflow: scroll;">Table: tstpurch
+-------------+---------------+------+-----+------------+-------+
| Field       | Type          | Null | Key | Default    | Extra |
+-------------+---------------+------+-----+------------+-------+
| invoice_no  | varchar(12)   | NO   | PRI |            |       |
| invoice_dt  | date          | NO   |     | 0000-00-00 |       |
| ord_no      | varchar(25)   | NO   | MUL | NULL       |       |
| ord_date    | date          | NO   |     | 0000-00-00 |       |
| receive_dt  | date          | NO   |     | 0000-00-00 |       |
| book_id     | varchar(8)    | NO   | MUL |            |       |
| book_name   | varchar(50)   | NO   |     |            |       |
| pub_lang    | varchar(8)    | YES  |     | NULL       |       |
| cate_id     | varchar(8)    | YES  | MUL | NULL       |       |
| receive_qty | int(5)        | NO   |     | 0          |       |
| purch_price | decimal(12,2) | NO   |     | 0.00       |       |
| total_cost  | decimal(12,2) | NO   |     | 0.00       |       |
| id          | int(11)       | NO   |     | 0          |       |
| chano       | varchar(10)   | NO   |     | NULL       |       |
| chadt       | date          | YES  |     | NULL       |       |
+-------------+---------------+------+-----+------------+-------+

Indexes of tstpurch
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| Table    | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| tstpurch |          0 | PRIMARY  |            1 | invoice_no  | A         |           0 |     NULL | NULL   |      | BTREE      |         |               |
| tstpurch |          1 | ord_no   |            1 | ord_no      | A         |        NULL |     NULL | NULL   |      | BTREE      |         |               |
| tstpurch |          1 | cate_id  |            1 | cate_id     | A         |        NULL |     NULL | NULL   | YES  | BTREE      |         |               |
| tstpurch |          1 | book_id  |            1 | book_id     | A         |        NULL |     NULL | NULL   |      | BTREE      |         |               |
| tstpurch |          1 | book_id  |            2 | cate_id     | A         |        NULL |     NULL | NULL   | YES  | BTREE      |         |               |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+

Table: torder
+-----------+-------------+------+-----+------------+-------+
| Field     | Type        | Null | Key | Default    | Extra |
+-----------+-------------+------+-----+------------+-------+
| ord_no    | varchar(15) | NO   | PRI |            |       |
| ord_date  | date        | NO   |     | 0000-00-00 |       |
| book_id   | varchar(15) | NO   | MUL |            |       |
| book_name | varchar(50) | NO   |     |            |       |
| cate_id   | varchar(8)  | NO   |     |            |       |
| pub_lang  | varchar(15) | NO   |     |            |       |
| ord_qty   | int(5)      | NO   |     | 0          |       |
+-----------+-------------+------+-----+------------+-------+

Indexes of torder
+--------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| Table  | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment |
+--------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
| torder |          0 | PRIMARY  |            1 | ord_no      | A         |           0 |     NULL | NULL   |      | BTREE      |         |               |
| torder |          1 | book_id  |            1 | book_id     | A         |        NULL |     NULL | NULL   |      | BTREE      |         |               |
| torder |          1 | book_id  |            2 | cate_id     | A         |        NULL |     NULL | NULL   |      | BTREE      |         |               |
+--------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+
</pre>
<p class="note_blue"><strong>Previous:</strong><a href="https://www.w3resource.com/mysql/creating-table-advance/create-index.php"> MySQL CREATE INDEX</a><br>
<strong>Next: </strong><a href="https://www.w3resource.com/mysql/mysql-partition.php"> MySQL Partitioning </a></p>
</article>
﻿<style type="text/css">

.a_link a:link{

color: #bc17d6;

font-weight: bold;

font-size: 16px;

margin-left: 1%

}

.a_link a:hover{

color: #4e990d;

font-weight: bold;

font-size: 16px;

margin-left: 1%

}

.a_link a:active{

color: #0c1796;

font-weight: bold;

font-size: 16px;

margin-left: 1%

}

.a_link a:visited{

color: #032859;

font-weight: bold;

font-size: 16px;

margin-left: 1%

}

.native-cpc a {

  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu,

  Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;

}



.default-ad {

  display: none;

}



.native-cpc a {

  text-decoration: none !important;

}



.native-cpc img {

  display: none;

}



.native-cpc ._default_ {

  display: flex;

  flex-flow: column wrap;

  max-width: 600px;

  padding: 10px;

  background: repeating-linear-gradient(-45deg, transparent, transparent 5px, hsla(0, 0%, 0%, .025) 5px, hsla(0, 0%, 0%, .025) 10px) hsla(203, 11%, 95%, .4);



}



.native-cpc .default-title {

  margin-right: 5px;

  font-size: 10px;

  margin-bottom: 2px;

  letter-spacing: .75px;

  text-transform: uppercase;

}



.native-cpc .default-title:before {

  content: "Sponsored by "

}



.native-cpc .default-description {

  font-size: 14px;

  line-height: 1.4;

}
.widget {display: none !important;}
p.bottom_social_share{
margin-left:0;
font-weight: bold;
font-size: 17px;
}
span.bottom_social_share{
margin-left: 50px;
margin-right: 50px;
}
</style>


<div class="mdl-cell mdl-cell--12-col">
<p class="bottom_social_share">Follow us on <span><a href="https://www.facebook.com/W3resource-103553425799800" target="_blank">Facebook</a></span>
and <span><a href="https://twitter.com/w3resource" target="_blank">Twitter</a></span> for latest update.</p>
</div>

<div class="mdl-grid" style="margin-bottom: 50px">

<div id="bottom_ad_zero_google" class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-2153208817642134" data-ad-slot="4616214717"></ins>
<script>

(adsbygoogle = window.adsbygoogle || []).push({});

</script>
</div>
</div>


<style type="text/css">
.tips h2 {font-size: 22px; font-weight: bold; border-bottom: 1px solid #000;}
.tips {margin: -20px 10px 10px 10px}
</style>

<hr class="w3r_hr">
<ul class="w3r_list" style="list-style: none; font-size: 17px;margin-block-start: 0.83em; margin-block-end: 0.83em;">
<li><strong>Weekly Trends</strong></li>
<li><a href="https://www.w3resource.com/java-exercises/basic/index.php" target="_blank">Java Basic Programming Exercises</a></li>
<li><a href="https://www.w3resource.com/sql/subqueries/understanding-sql-subqueries.php" target="_blank">SQL Subqueries</a></li>
<li><a href="https://www.w3resource.com/sql-exercises/adventureworks/index.php" target="_blank">Adventureworks Database Exercises</a></li>
<li><a href="https://www.w3resource.com/csharp-exercises/basic/index.php" target="_blank">C# Sharp Basic Exercises</a></li>
<li><a href="https://www.w3resource.com/sql/aggregate-functions/count-with-distinct.php" target="_blank">SQL COUNT() with distinct</a></li>
<li><a href="https://www.w3resource.com/javascript-exercises/javascript-string-exercises.php" target="_blank">JavaScript String Exercises</a></li>
<li><a href="https://www.w3resource.com/javascript/form/javascript-form-validation.php" target="_blank">JavaScript HTML Form Validation</a></li>
<li><a href="https://www.w3resource.com/java-exercises/collection/index.php" target="_blank">Java Collection Exercises</a></li>
<li><a href="https://www.w3resource.com/sql/aggregate-functions/count-function.php" target="_blank">SQL COUNT() function</a></li>
<li><a href="https://www.w3resource.com/sql/joins/perform-an-inner-join.php" target="_blank">SQL Inner Join</a></li>
<li><a href="https://www.w3resource.com/javascript-exercises/javascript-functions-exercises.php" target="_blank">JavaScript functions Exercises</a></li>
<li><a href="https://www.w3resource.com/python/python-tutorial.php" target="_blank">Python Tutorial</a></li>
<li><a href="https://www.w3resource.com/python-exercises/array/" target="_blank">Python Array Exercises</a></li>
<li><a href="https://www.w3resource.com/sql/joins/cross-join.php" target="_blank">SQL Cross Join</a></li>
<li><a href="https://www.w3resource.com/csharp-exercises/array/index.php" target="_blank">C# Sharp Array Exercises</a></li>
</ul>
<hr class="w3r_hr">
<div id="bottom_ad_zero_google" class="mdl-cell mdl-cell--12-col">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2153208817642134" crossorigin="anonymous"></script>

<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2153208817642134" data-ad-slot="1905003914" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="mdl-cell mdl-cell--12-col">
</div>
<hr class="w3r_hr">
<div id="disqus_thread" itemscope itemtype='https://schema.org/Comment' style="margin-top:0"></div>
<script type="text/javascript">

    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */

    var disqus_shortname = 'w3r'; // required: replace example with your forum shortname



    // The following are highly recommended additional parameters. Remove the slashes in front to use.

    // var disqus_identifier = 'unique_dynamic_id_1234';

    // var disqus_url = 'http://example.com/permalink-to-page.html';



    /* * * DON'T EDIT BELOW THIS LINE * * */

    (function() {

        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;

        dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';

        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);

    })();

</script>



</div>
<div class="mdl-cell mdl-card mdl-shadow--2dp through mdl-shadow--6dp mdl-cell--3-col mdl-cell--hide-phone" id="sidebar_right">
<div id="sol_ad_zero" style="margin-bottom: 20px">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2153208817642134" data-ad-slot="1236474527" data-ad-format="auto"></ins>
<script>

(adsbygoogle = window.adsbygoogle || []).push({});

</script>
</div>


<div id="sol_ad_two" style="width:300px;height:600px;margin-bottom: 20px">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-2153208817642134" data-ad-slot="6376961513"></ins>
<script>

(adsbygoogle = window.adsbygoogle || []).push({});

</script>

<style>
	@media only screen and (min-width: 0px) and (min-height: 0px) {
		div[id^="bsa-zone_1634824904979-6_123456"] {
			min-width: 300px;
			min-height: 250px;
		}
	}
	@media only screen and (min-width: 640px) and (min-height: 0px) {
		div[id^="bsa-zone_1634824904979-6_123456"] {
			min-width: 300px;
			min-height: 250px;
		}
	}
</style>
<div id="bsa-zone_1634824904979-6_123456"></div>
</div>
<div id="sol_ad_three" style="margin-bottom: 20px">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-2153208817642134" data-ad-slot="6965701915"></ins>
<script>

(adsbygoogle = window.adsbygoogle || []).push({});

</script>
</div>
</div>
</div>
</div>
<footer class="mdl-mega-footer">

<div class="mdl-mega-footer__bottom-section">
<div class="mdl-logo"><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/" target="_blank">This work is licensed under a Creative Commons Attribution 4.0 International License.</a></div>
</div>
<div class="mdl-mega-footer__bottom-section">
<div class="mdl-logo">©w3resource.com 2011-2023</div>
<ul class="mdl-mega-footer__link-list">
<li><a href="https://www.w3resource.com/privacy.php">Privacy</a></li>
<li><a href="https://www.w3resource.com/about.php">About</a></li>
<li><a href="https://www.w3resource.com/contact.php">Contact</a></li>
<li><a href="https://www.w3resource.com/feedback.php">Feedback</a></li>
<li><a href="https://www.w3resource.com/advertise.php">Advertise</a></li>
</ul>
</div>
</footer>
</main>
</div>
</div>
</div>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script>
/**
 * material-design-lite - Material Design Components in CSS, JS and HTML
 * @version v1.3.0
 * @license Apache-2.0
 * @copyright 2015 Google, Inc.
 * @link https://github.com/google/material-design-lite
 */
!function(){"use strict";function e(e,t){if(e){if(t.element_.classList.contains(t.CssClasses_.MDL_JS_RIPPLE_EFFECT)){var s=document.createElement("span");s.classList.add(t.CssClasses_.MDL_RIPPLE_CONTAINER),s.classList.add(t.CssClasses_.MDL_JS_RIPPLE_EFFECT);var i=document.createElement("span");i.classList.add(t.CssClasses_.MDL_RIPPLE),s.appendChild(i),e.appendChild(s)}e.addEventListener("click",function(s){if("#"===e.getAttribute("href").charAt(0)){s.preventDefault();var i=e.href.split("#")[1],n=t.element_.querySelector("#"+i);t.resetTabState_(),t.resetPanelState_(),e.classList.add(t.CssClasses_.ACTIVE_CLASS),n.classList.add(t.CssClasses_.ACTIVE_CLASS)}})}}function t(e,t,s,i){function n(){var n=e.href.split("#")[1],a=i.content_.querySelector("#"+n);i.resetTabState_(t),i.resetPanelState_(s),e.classList.add(i.CssClasses_.IS_ACTIVE),a.classList.add(i.CssClasses_.IS_ACTIVE)}if(i.tabBar_.classList.contains(i.CssClasses_.JS_RIPPLE_EFFECT)){var a=document.createElement("span");a.classList.add(i.CssClasses_.RIPPLE_CONTAINER),a.classList.add(i.CssClasses_.JS_RIPPLE_EFFECT);var l=document.createElement("span");l.classList.add(i.CssClasses_.RIPPLE),a.appendChild(l),e.appendChild(a)}i.tabBar_.classList.contains(i.CssClasses_.TAB_MANUAL_SWITCH)||e.addEventListener("click",function(t){"#"===e.getAttribute("href").charAt(0)&&(t.preventDefault(),n())}),e.show=n}var s={upgradeDom:function(e,t){},upgradeElement:function(e,t){},upgradeElements:function(e){},upgradeAllRegistered:function(){},registerUpgradedCallback:function(e,t){},register:function(e){},downgradeElements:function(e){}};s=function(){function e(e,t){for(var s=0;s<c.length;s++)if(c[s].className===e)return"undefined"!=typeof t&&(c[s]=t),c[s];return!1}function t(e){var t=e.getAttribute("data-upgraded");return null===t?[""]:t.split(",")}function s(e,s){var i=t(e);return i.indexOf(s)!==-1}function i(e,t,s){if("CustomEvent"in window&&"function"==typeof window.CustomEvent)return new CustomEvent(e,{bubbles:t,cancelable:s});var i=document.createEvent("Events");return i.initEvent(e,t,s),i}function n(t,s){if("undefined"==typeof t&&"undefined"==typeof s)for(var i=0;i<c.length;i++)n(c[i].className,c[i].cssClass);else{var l=t;if("undefined"==typeof s){var o=e(l);o&&(s=o.cssClass)}for(var r=document.querySelectorAll("."+s),_=0;_<r.length;_++)a(r[_],l)}}function a(n,a){if(!("object"==typeof n&&n instanceof Element))throw new Error("Invalid argument provided to upgrade MDL element.");var l=i("mdl-componentupgrading",!0,!0);if(n.dispatchEvent(l),!l.defaultPrevented){var o=t(n),r=[];if(a)s(n,a)||r.push(e(a));else{var _=n.classList;c.forEach(function(e){_.contains(e.cssClass)&&r.indexOf(e)===-1&&!s(n,e.className)&&r.push(e)})}for(var d,h=0,u=r.length;h<u;h++){if(d=r[h],!d)throw new Error("Unable to find a registered component for the given class.");o.push(d.className),n.setAttribute("data-upgraded",o.join(","));var E=new d.classConstructor(n);E[C]=d,p.push(E);for(var m=0,L=d.callbacks.length;m<L;m++)d.callbacks[m](n);d.widget&&(n[d.className]=E);var I=i("mdl-componentupgraded",!0,!1);n.dispatchEvent(I)}}}function l(e){Array.isArray(e)||(e=e instanceof Element?[e]:Array.prototype.slice.call(e));for(var t,s=0,i=e.length;s<i;s++)t=e[s],t instanceof HTMLElement&&(a(t),t.children.length>0&&l(t.children))}function o(t){var s="undefined"==typeof t.widget&&"undefined"==typeof t.widget,i=!0;s||(i=t.widget||t.widget);var n={classConstructor:t.constructor||t.constructor,className:t.classAsString||t.classAsString,cssClass:t.cssClass||t.cssClass,widget:i,callbacks:[]};if(c.forEach(function(e){if(e.cssClass===n.cssClass)throw new Error("The provided cssClass has already been registered: "+e.cssClass);if(e.className===n.className)throw new Error("The provided className has already been registered")}),t.constructor.prototype.hasOwnProperty(C))throw new Error("MDL component classes must not have "+C+" defined as a property.");var a=e(t.classAsString,n);a||c.push(n)}function r(t,s){var i=e(t);i&&i.callbacks.push(s)}function _(){for(var e=0;e<c.length;e++)n(c[e].className)}function d(e){if(e){var t=p.indexOf(e);p.splice(t,1);var s=e.element_.getAttribute("data-upgraded").split(","),n=s.indexOf(e[C].classAsString);s.splice(n,1),e.element_.setAttribute("data-upgraded",s.join(","));var a=i("mdl-componentdowngraded",!0,!1);e.element_.dispatchEvent(a)}}function h(e){var t=function(e){p.filter(function(t){return t.element_===e}).forEach(d)};if(e instanceof Array||e instanceof NodeList)for(var s=0;s<e.length;s++)t(e[s]);else{if(!(e instanceof Node))throw new Error("Invalid argument provided to downgrade MDL nodes.");t(e)}}var c=[],p=[],C="mdlComponentConfigInternal_";return{upgradeDom:n,upgradeElement:a,upgradeElements:l,upgradeAllRegistered:_,registerUpgradedCallback:r,register:o,downgradeElements:h}}(),s.ComponentConfigPublic,s.ComponentConfig,s.Component,s.upgradeDom=s.upgradeDom,s.upgradeElement=s.upgradeElement,s.upgradeElements=s.upgradeElements,s.upgradeAllRegistered=s.upgradeAllRegistered,s.registerUpgradedCallback=s.registerUpgradedCallback,s.register=s.register,s.downgradeElements=s.downgradeElements,window.componentHandler=s,window.componentHandler=s,window.addEventListener("load",function(){"classList"in document.createElement("div")&&"querySelector"in document&&"addEventListener"in window&&Array.prototype.forEach?(document.documentElement.classList.add("mdl-js"),s.upgradeAllRegistered()):(s.upgradeElement=function(){},s.register=function(){})}),Date.now||(Date.now=function(){return(new Date).getTime()},Date.now=Date.now);for(var i=["webkit","moz"],n=0;n<i.length&&!window.requestAnimationFrame;++n){var a=i[n];window.requestAnimationFrame=window[a+"RequestAnimationFrame"],window.cancelAnimationFrame=window[a+"CancelAnimationFrame"]||window[a+"CancelRequestAnimationFrame"],window.requestAnimationFrame=window.requestAnimationFrame,window.cancelAnimationFrame=window.cancelAnimationFrame}if(/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent)||!window.requestAnimationFrame||!window.cancelAnimationFrame){var l=0;window.requestAnimationFrame=function(e){var t=Date.now(),s=Math.max(l+16,t);return setTimeout(function(){e(l=s)},s-t)},window.cancelAnimationFrame=clearTimeout,window.requestAnimationFrame=window.requestAnimationFrame,window.cancelAnimationFrame=window.cancelAnimationFrame}var o=function(e){this.element_=e,this.init()};window.MaterialButton=o,o.prototype.Constant_={},o.prototype.CssClasses_={RIPPLE_EFFECT:"mdl-js-ripple-effect",RIPPLE_CONTAINER:"mdl-button__ripple-container",RIPPLE:"mdl-ripple"},o.prototype.blurHandler_=function(e){e&&this.element_.blur()},o.prototype.disable=function(){this.element_.disabled=!0},o.prototype.disable=o.prototype.disable,o.prototype.enable=function(){this.element_.disabled=!1},o.prototype.enable=o.prototype.enable,o.prototype.init=function(){if(this.element_){if(this.element_.classList.contains(this.CssClasses_.RIPPLE_EFFECT)){var e=document.createElement("span");e.classList.add(this.CssClasses_.RIPPLE_CONTAINER),this.rippleElement_=document.createElement("span"),this.rippleElement_.classList.add(this.CssClasses_.RIPPLE),e.appendChild(this.rippleElement_),this.boundRippleBlurHandler=this.blurHandler_.bind(this),this.rippleElement_.addEventListener("mouseup",this.boundRippleBlurHandler),this.element_.appendChild(e)}this.boundButtonBlurHandler=this.blurHandler_.bind(this),this.element_.addEventListener("mouseup",this.boundButtonBlurHandler),this.element_.addEventListener("mouseleave",this.boundButtonBlurHandler)}},s.register({constructor:o,classAsString:"MaterialButton",cssClass:"mdl-js-button",widget:!0});var r=function(e){this.element_=e,this.init()};window.MaterialCheckbox=r,r.prototype.Constant_={TINY_TIMEOUT:.001},r.prototype.CssClasses_={INPUT:"mdl-checkbox__input",BOX_OUTLINE:"mdl-checkbox__box-outline",FOCUS_HELPER:"mdl-checkbox__focus-helper",TICK_OUTLINE:"mdl-checkbox__tick-outline",RIPPLE_EFFECT:"mdl-js-ripple-effect",RIPPLE_IGNORE_EVENTS:"mdl-js-ripple-effect--ignore-events",RIPPLE_CONTAINER:"mdl-checkbox__ripple-container",RIPPLE_CENTER:"mdl-ripple--center",RIPPLE:"mdl-ripple",IS_FOCUSED:"is-focused",IS_DISABLED:"is-disabled",IS_CHECKED:"is-checked",IS_UPGRADED:"is-upgraded"},r.prototype.onChange_=function(e){this.updateClasses_()},r.prototype.onFocus_=function(e){this.element_.classList.add(this.CssClasses_.IS_FOCUSED)},r.prototype.onBlur_=function(e){this.element_.classList.remove(this.CssClasses_.IS_FOCUSED)},r.prototype.onMouseUp_=function(e){this.blur_()},r.prototype.updateClasses_=function(){this.checkDisabled(),this.checkToggleState()},r.prototype.blur_=function(){window.setTimeout(function(){this.inputElement_.blur()}.bind(this),this.Constant_.TINY_TIMEOUT)},r.prototype.checkToggleState=function(){this.inputElement_.checked?this.element_.classList.add(this.CssClasses_.IS_CHECKED):this.element_.classList.remove(this.CssClasses_.IS_CHECKED)},r.prototype.checkToggleState=r.prototype.checkToggleState,r.prototype.checkDisabled=function(){this.inputElement_.disabled?this.element_.classList.add(this.CssClasses_.IS_DISABLED):this.element_.classList.remove(this.CssClasses_.IS_DISABLED)},r.prototype.checkDisabled=r.prototype.checkDisabled,r.prototype.disable=function(){this.inputElement_.disabled=!0,this.updateClasses_()},r.prototype.disable=r.prototype.disable,r.prototype.enable=function(){this.inputElement_.disabled=!1,this.updateClasses_()},r.prototype.enable=r.prototype.enable,r.prototype.check=function(){this.inputElement_.checked=!0,this.updateClasses_()},r.prototype.check=r.prototype.check,r.prototype.uncheck=function(){this.inputElement_.checked=!1,this.updateClasses_()},r.prototype.uncheck=r.prototype.uncheck,r.prototype.init=function(){if(this.element_){this.inputElement_=this.element_.querySelector("."+this.CssClasses_.INPUT);var e=document.createElement("span");e.classList.add(this.CssClasses_.BOX_OUTLINE);var t=document.createElement("span");t.classList.add(this.CssClasses_.FOCUS_HELPER);var s=document.createElement("span");if(s.classList.add(this.CssClasses_.TICK_OUTLINE),e.appendChild(s),this.element_.appendChild(t),this.element_.appendChild(e),this.element_.classList.contains(this.CssClasses_.RIPPLE_EFFECT)){this.element_.classList.add(this.CssClasses_.RIPPLE_IGNORE_EVENTS),this.rippleContainerElement_=document.createElement("span"),this.rippleContainerElement_.classList.add(this.CssClasses_.RIPPLE_CONTAINER),this.rippleContainerElement_.classList.add(this.CssClasses_.RIPPLE_EFFECT),this.rippleContainerElement_.classList.add(this.CssClasses_.RIPPLE_CENTER),this.boundRippleMouseUp=this.onMouseUp_.bind(this),this.rippleContainerElement_.addEventListener("mouseup",this.boundRippleMouseUp);var i=document.createElement("span");i.classList.add(this.CssClasses_.RIPPLE),this.rippleContainerElement_.appendChild(i),this.element_.appendChild(this.rippleContainerElement_)}this.boundInputOnChange=this.onChange_.bind(this),this.boundInputOnFocus=this.onFocus_.bind(this),this.boundInputOnBlur=this.onBlur_.bind(this),this.boundElementMouseUp=this.onMouseUp_.bind(this),this.inputElement_.addEventListener("change",this.boundInputOnChange),this.inputElement_.addEventListener("focus",this.boundInputOnFocus),this.inputElement_.addEventListener("blur",this.boundInputOnBlur),this.element_.addEventListener("mouseup",this.boundElementMouseUp),this.updateClasses_(),this.element_.classList.add(this.CssClasses_.IS_UPGRADED)}},s.register({constructor:r,classAsString:"MaterialCheckbox",cssClass:"mdl-js-checkbox",widget:!0});var _=function(e){this.element_=e,this.init()};window.MaterialIconToggle=_,_.prototype.Constant_={TINY_TIMEOUT:.001},_.prototype.CssClasses_={INPUT:"mdl-icon-toggle__input",JS_RIPPLE_EFFECT:"mdl-js-ripple-effect",RIPPLE_IGNORE_EVENTS:"mdl-js-ripple-effect--ignore-events",RIPPLE_CONTAINER:"mdl-icon-toggle__ripple-container",RIPPLE_CENTER:"mdl-ripple--center",RIPPLE:"mdl-ripple",IS_FOCUSED:"is-focused",IS_DISABLED:"is-disabled",IS_CHECKED:"is-checked"},_.prototype.onChange_=function(e){this.updateClasses_()},_.prototype.onFocus_=function(e){this.element_.classList.add(this.CssClasses_.IS_FOCUSED)},_.prototype.onBlur_=function(e){this.element_.classList.remove(this.CssClasses_.IS_FOCUSED)},_.prototype.onMouseUp_=function(e){this.blur_()},_.prototype.updateClasses_=function(){this.checkDisabled(),this.checkToggleState()},_.prototype.blur_=function(){window.setTimeout(function(){this.inputElement_.blur()}.bind(this),this.Constant_.TINY_TIMEOUT)},_.prototype.checkToggleState=function(){this.inputElement_.checked?this.element_.classList.add(this.CssClasses_.IS_CHECKED):this.element_.classList.remove(this.CssClasses_.IS_CHECKED)},_.prototype.checkToggleState=_.prototype.checkToggleState,_.prototype.checkDisabled=function(){this.inputElement_.disabled?this.element_.classList.add(this.CssClasses_.IS_DISABLED):this.element_.classList.remove(this.CssClasses_.IS_DISABLED)},_.prototype.checkDisabled=_.prototype.checkDisabled,_.prototype.disable=function(){this.inputElement_.disabled=!0,this.updateClasses_()},_.prototype.disable=_.prototype.disable,_.prototype.enable=function(){this.inputElement_.disabled=!1,this.updateClasses_()},_.prototype.enable=_.prototype.enable,_.prototype.check=function(){this.inputElement_.checked=!0,this.updateClasses_()},_.prototype.check=_.prototype.check,_.prototype.uncheck=function(){this.inputElement_.checked=!1,this.updateClasses_()},_.prototype.uncheck=_.prototype.uncheck,_.prototype.init=function(){if(this.element_){if(this.inputElement_=this.element_.querySelector("."+this.CssClasses_.INPUT),this.element_.classList.contains(this.CssClasses_.JS_RIPPLE_EFFECT)){this.element_.classList.add(this.CssClasses_.RIPPLE_IGNORE_EVENTS),this.rippleContainerElement_=document.createElement("span"),this.rippleContainerElement_.classList.add(this.CssClasses_.RIPPLE_CONTAINER),this.rippleContainerElement_.classList.add(this.CssClasses_.JS_RIPPLE_EFFECT),this.rippleContainerElement_.classList.add(this.CssClasses_.RIPPLE_CENTER),this.boundRippleMouseUp=this.onMouseUp_.bind(this),this.rippleContainerElement_.addEventListener("mouseup",this.boundRippleMouseUp);var e=document.createElement("span");e.classList.add(this.CssClasses_.RIPPLE),this.rippleContainerElement_.appendChild(e),this.element_.appendChild(this.rippleContainerElement_)}this.boundInputOnChange=this.onChange_.bind(this),this.boundInputOnFocus=this.onFocus_.bind(this),this.boundInputOnBlur=this.onBlur_.bind(this),this.boundElementOnMouseUp=this.onMouseUp_.bind(this),this.inputElement_.addEventListener("change",this.boundInputOnChange),this.inputElement_.addEventListener("focus",this.boundInputOnFocus),this.inputElement_.addEventListener("blur",this.boundInputOnBlur),this.element_.addEventListener("mouseup",this.boundElementOnMouseUp),this.updateClasses_(),this.element_.classList.add("is-upgraded")}},s.register({constructor:_,classAsString:"MaterialIconToggle",cssClass:"mdl-js-icon-toggle",widget:!0});var d=function(e){this.element_=e,this.init()};window.MaterialMenu=d,d.prototype.Constant_={TRANSITION_DURATION_SECONDS:.3,TRANSITION_DURATION_FRACTION:.8,CLOSE_TIMEOUT:150},d.prototype.Keycodes_={ENTER:13,ESCAPE:27,SPACE:32,UP_ARROW:38,DOWN_ARROW:40},d.prototype.CssClasses_={CONTAINER:"mdl-menu__container",OUTLINE:"mdl-menu__outline",ITEM:"mdl-menu__item",ITEM_RIPPLE_CONTAINER:"mdl-menu__item-ripple-container",RIPPLE_EFFECT:"mdl-js-ripple-effect",RIPPLE_IGNORE_EVENTS:"mdl-js-ripple-effect--ignore-events",RIPPLE:"mdl-ripple",IS_UPGRADED:"is-upgraded",IS_VISIBLE:"is-visible",IS_ANIMATING:"is-animating",BOTTOM_LEFT:"mdl-menu--bottom-left",BOTTOM_RIGHT:"mdl-menu--bottom-right",TOP_LEFT:"mdl-menu--top-left",TOP_RIGHT:"mdl-menu--top-right",UNALIGNED:"mdl-menu--unaligned"},d.prototype.init=function(){if(this.element_){var e=document.createElement("div");e.classList.add(this.CssClasses_.CONTAINER),this.element_.parentElement.insertBefore(e,this.element_),this.element_.parentElement.removeChild(this.element_),e.appendChild(this.element_),this.container_=e;var t=document.createElement("div");t.classList.add(this.CssClasses_.OUTLINE),this.outline_=t,e.insertBefore(t,this.element_);var s=this.element_.getAttribute("for")||this.element_.getAttribute("data-mdl-for"),i=null;s&&(i=document.getElementById(s),i&&(this.forElement_=i,i.addEventListener("click",this.handleForClick_.bind(this)),i.addEventListener("keydown",this.handleForKeyboardEvent_.bind(this))));var n=this.element_.querySelectorAll("."+this.CssClasses_.ITEM);this.boundItemKeydown_=this.handleItemKeyboardEvent_.bind(this),this.boundItemClick_=this.handleItemClick_.bind(this);for(var a=0;a<n.length;a++)n[a].addEventListener("click",this.boundItemClick_),n[a].tabIndex="-1",n[a].addEventListener("keydown",this.boundItemKeydown_);if(this.element_.classList.contains(this.CssClasses_.RIPPLE_EFFECT))for(this.element_.classList.add(this.CssClasses_.RIPPLE_IGNORE_EVENTS),a=0;a<n.length;a++){var l=n[a],o=document.createElement("span");o.classList.add(this.CssClasses_.ITEM_RIPPLE_CONTAINER);var r=document.createElement("span");r.classList.add(this.CssClasses_.RIPPLE),o.appendChild(r),l.appendChild(o),l.classList.add(this.CssClasses_.RIPPLE_EFFECT)}this.element_.classList.contains(this.CssClasses_.BOTTOM_LEFT)&&this.outline_.classList.add(this.CssClasses_.BOTTOM_LEFT),this.element_.classList.contains(this.CssClasses_.BOTTOM_RIGHT)&&this.outline_.classList.add(this.CssClasses_.BOTTOM_RIGHT),this.element_.classList.contains(this.CssClasses_.TOP_LEFT)&&this.outline_.classList.add(this.CssClasses_.TOP_LEFT),this.element_.classList.contains(this.CssClasses_.TOP_RIGHT)&&this.outline_.classList.add(this.CssClasses_.TOP_RIGHT),this.element_.classList.contains(this.CssClasses_.UNALIGNED)&&this.outline_.classList.add(this.CssClasses_.UNALIGNED),e.classList.add(this.CssClasses_.IS_UPGRADED)}},d.prototype.handleForClick_=function(e){if(this.element_&&this.forElement_){var t=this.forElement_.getBoundingClientRect(),s=this.forElement_.parentElement.getBoundingClientRect();this.element_.classList.contains(this.CssClasses_.UNALIGNED)||(this.element_.classList.contains(this.CssClasses_.BOTTOM_RIGHT)?(this.container_.style.right=s.right-t.right+"px",this.container_.style.top=this.forElement_.offsetTop+this.forElement_.offsetHeight+"px"):this.element_.classList.contains(this.CssClasses_.TOP_LEFT)?(this.container_.style.left=this.forElement_.offsetLeft+"px",this.container_.style.bottom=s.bottom-t.top+"px"):this.element_.classList.contains(this.CssClasses_.TOP_RIGHT)?(this.container_.style.right=s.right-t.right+"px",this.container_.style.bottom=s.bottom-t.top+"px"):(this.container_.style.left=this.forElement_.offsetLeft+"px",this.container_.style.top=this.forElement_.offsetTop+this.forElement_.offsetHeight+"px"))}this.toggle(e)},d.prototype.handleForKeyboardEvent_=function(e){if(this.element_&&this.container_&&this.forElement_){var t=this.element_.querySelectorAll("."+this.CssClasses_.ITEM+":not([disabled])");t&&t.length>0&&this.container_.classList.contains(this.CssClasses_.IS_VISIBLE)&&(e.keyCode===this.Keycodes_.UP_ARROW?(e.preventDefault(),t[t.length-1].focus()):e.keyCode===this.Keycodes_.DOWN_ARROW&&(e.preventDefault(),t[0].focus()))}},d.prototype.handleItemKeyboardEvent_=function(e){if(this.element_&&this.container_){var t=this.element_.querySelectorAll("."+this.CssClasses_.ITEM+":not([disabled])");if(t&&t.length>0&&this.container_.classList.contains(this.CssClasses_.IS_VISIBLE)){var s=Array.prototype.slice.call(t).indexOf(e.target);if(e.keyCode===this.Keycodes_.UP_ARROW)e.preventDefault(),s>0?t[s-1].focus():t[t.length-1].focus();else if(e.keyCode===this.Keycodes_.DOWN_ARROW)e.preventDefault(),t.length>s+1?t[s+1].focus():t[0].focus();else if(e.keyCode===this.Keycodes_.SPACE||e.keyCode===this.Keycodes_.ENTER){e.preventDefault();var i=new MouseEvent("mousedown");e.target.dispatchEvent(i),i=new MouseEvent("mouseup"),e.target.dispatchEvent(i),e.target.click()}else e.keyCode===this.Keycodes_.ESCAPE&&(e.preventDefault(),this.hide())}}},d.prototype.handleItemClick_=function(e){e.target.hasAttribute("disabled")?e.stopPropagation():(this.closing_=!0,window.setTimeout(function(e){this.hide(),this.closing_=!1}.bind(this),this.Constant_.CLOSE_TIMEOUT))},d.prototype.applyClip_=function(e,t){this.element_.classList.contains(this.CssClasses_.UNALIGNED)?this.element_.style.clip="":this.element_.classList.contains(this.CssClasses_.BOTTOM_RIGHT)?this.element_.style.clip="rect(0 "+t+"px 0 "+t+"px)":this.element_.classList.contains(this.CssClasses_.TOP_LEFT)?this.element_.style.clip="rect("+e+"px 0 "+e+"px 0)":this.element_.classList.contains(this.CssClasses_.TOP_RIGHT)?this.element_.style.clip="rect("+e+"px "+t+"px "+e+"px "+t+"px)":this.element_.style.clip=""},d.prototype.removeAnimationEndListener_=function(e){e.target.classList.remove(d.prototype.CssClasses_.IS_ANIMATING)},d.prototype.addAnimationEndListener_=function(){this.element_.addEventListener("transitionend",this.removeAnimationEndListener_),this.element_.addEventListener("webkitTransitionEnd",this.removeAnimationEndListener_)},d.prototype.show=function(e){if(this.element_&&this.container_&&this.outline_){var t=this.element_.getBoundingClientRect().height,s=this.element_.getBoundingClientRect().width;this.container_.style.width=s+"px",this.container_.style.height=t+"px",this.outline_.style.width=s+"px",this.outline_.style.height=t+"px";for(var i=this.Constant_.TRANSITION_DURATION_SECONDS*this.Constant_.TRANSITION_DURATION_FRACTION,n=this.element_.querySelectorAll("."+this.CssClasses_.ITEM),a=0;a<n.length;a++){var l=null;l=this.element_.classList.contains(this.CssClasses_.TOP_LEFT)||this.element_.classList.contains(this.CssClasses_.TOP_RIGHT)?(t-n[a].offsetTop-n[a].offsetHeight)/t*i+"s":n[a].offsetTop/t*i+"s",n[a].style.transitionDelay=l}this.applyClip_(t,s),window.requestAnimationFrame(function(){this.element_.classList.add(this.CssClasses_.IS_ANIMATING),this.element_.style.clip="rect(0 "+s+"px "+t+"px 0)",this.container_.classList.add(this.CssClasses_.IS_VISIBLE)}.bind(this)),this.addAnimationEndListener_();var o=function(t){t===e||this.closing_||t.target.parentNode===this.element_||(document.removeEventListener("click",o),this.hide())}.bind(this);document.addEventListener("click",o)}},d.prototype.show=d.prototype.show,d.prototype.hide=function(){if(this.element_&&this.container_&&this.outline_){for(var e=this.element_.querySelectorAll("."+this.CssClasses_.ITEM),t=0;t<e.length;t++)e[t].style.removeProperty("transition-delay");var s=this.element_.getBoundingClientRect(),i=s.height,n=s.width;this.element_.classList.add(this.CssClasses_.IS_ANIMATING),this.applyClip_(i,n),this.container_.classList.remove(this.CssClasses_.IS_VISIBLE),this.addAnimationEndListener_()}},d.prototype.hide=d.prototype.hide,d.prototype.toggle=function(e){this.container_.classList.contains(this.CssClasses_.IS_VISIBLE)?this.hide():this.show(e)},d.prototype.toggle=d.prototype.toggle,s.register({constructor:d,classAsString:"MaterialMenu",cssClass:"mdl-js-menu",widget:!0});var h=function(e){this.element_=e,this.init()};window.MaterialProgress=h,h.prototype.Constant_={},h.prototype.CssClasses_={INDETERMINATE_CLASS:"mdl-progress__indeterminate"},h.prototype.setProgress=function(e){this.element_.classList.contains(this.CssClasses_.INDETERMINATE_CLASS)||(this.progressbar_.style.width=e+"%")},h.prototype.setProgress=h.prototype.setProgress,h.prototype.setBuffer=function(e){this.bufferbar_.style.width=e+"%",this.auxbar_.style.width=100-e+"%"},h.prototype.setBuffer=h.prototype.setBuffer,h.prototype.init=function(){if(this.element_){var e=document.createElement("div");e.className="progressbar bar bar1",this.element_.appendChild(e),this.progressbar_=e,e=document.createElement("div"),e.className="bufferbar bar bar2",this.element_.appendChild(e),this.bufferbar_=e,e=document.createElement("div"),e.className="auxbar bar bar3",this.element_.appendChild(e),this.auxbar_=e,this.progressbar_.style.width="0%",this.bufferbar_.style.width="100%",this.auxbar_.style.width="0%",this.element_.classList.add("is-upgraded")}},s.register({constructor:h,classAsString:"MaterialProgress",cssClass:"mdl-js-progress",widget:!0});var c=function(e){this.element_=e,this.init()};window.MaterialRadio=c,c.prototype.Constant_={TINY_TIMEOUT:.001},c.prototype.CssClasses_={IS_FOCUSED:"is-focused",IS_DISABLED:"is-disabled",IS_CHECKED:"is-checked",IS_UPGRADED:"is-upgraded",JS_RADIO:"mdl-js-radio",RADIO_BTN:"mdl-radio__button",RADIO_OUTER_CIRCLE:"mdl-radio__outer-circle",RADIO_INNER_CIRCLE:"mdl-radio__inner-circle",RIPPLE_EFFECT:"mdl-js-ripple-effect",RIPPLE_IGNORE_EVENTS:"mdl-js-ripple-effect--ignore-events",RIPPLE_CONTAINER:"mdl-radio__ripple-container",RIPPLE_CENTER:"mdl-ripple--center",RIPPLE:"mdl-ripple"},c.prototype.onChange_=function(e){for(var t=document.getElementsByClassName(this.CssClasses_.JS_RADIO),s=0;s<t.length;s++){var i=t[s].querySelector("."+this.CssClasses_.RADIO_BTN);i.getAttribute("name")===this.btnElement_.getAttribute("name")&&"undefined"!=typeof t[s].MaterialRadio&&t[s].MaterialRadio.updateClasses_()}},c.prototype.onFocus_=function(e){this.element_.classList.add(this.CssClasses_.IS_FOCUSED)},c.prototype.onBlur_=function(e){this.element_.classList.remove(this.CssClasses_.IS_FOCUSED)},c.prototype.onMouseup_=function(e){this.blur_()},c.prototype.updateClasses_=function(){this.checkDisabled(),this.checkToggleState()},c.prototype.blur_=function(){window.setTimeout(function(){this.btnElement_.blur()}.bind(this),this.Constant_.TINY_TIMEOUT)},c.prototype.checkDisabled=function(){this.btnElement_.disabled?this.element_.classList.add(this.CssClasses_.IS_DISABLED):this.element_.classList.remove(this.CssClasses_.IS_DISABLED)},c.prototype.checkDisabled=c.prototype.checkDisabled,c.prototype.checkToggleState=function(){this.btnElement_.checked?this.element_.classList.add(this.CssClasses_.IS_CHECKED):this.element_.classList.remove(this.CssClasses_.IS_CHECKED)},c.prototype.checkToggleState=c.prototype.checkToggleState,c.prototype.disable=function(){this.btnElement_.disabled=!0,this.updateClasses_()},c.prototype.disable=c.prototype.disable,c.prototype.enable=function(){this.btnElement_.disabled=!1,this.updateClasses_()},c.prototype.enable=c.prototype.enable,c.prototype.check=function(){this.btnElement_.checked=!0,this.onChange_(null)},c.prototype.check=c.prototype.check,c.prototype.uncheck=function(){this.btnElement_.checked=!1,this.onChange_(null)},c.prototype.uncheck=c.prototype.uncheck,c.prototype.init=function(){if(this.element_){this.btnElement_=this.element_.querySelector("."+this.CssClasses_.RADIO_BTN),this.boundChangeHandler_=this.onChange_.bind(this),this.boundFocusHandler_=this.onChange_.bind(this),this.boundBlurHandler_=this.onBlur_.bind(this),this.boundMouseUpHandler_=this.onMouseup_.bind(this);var e=document.createElement("span");e.classList.add(this.CssClasses_.RADIO_OUTER_CIRCLE);var t=document.createElement("span");t.classList.add(this.CssClasses_.RADIO_INNER_CIRCLE),this.element_.appendChild(e),this.element_.appendChild(t);var s;if(this.element_.classList.contains(this.CssClasses_.RIPPLE_EFFECT)){this.element_.classList.add(this.CssClasses_.RIPPLE_IGNORE_EVENTS),s=document.createElement("span"),s.classList.add(this.CssClasses_.RIPPLE_CONTAINER),s.classList.add(this.CssClasses_.RIPPLE_EFFECT),s.classList.add(this.CssClasses_.RIPPLE_CENTER),s.addEventListener("mouseup",this.boundMouseUpHandler_);var i=document.createElement("span");i.classList.add(this.CssClasses_.RIPPLE),s.appendChild(i),this.element_.appendChild(s)}this.btnElement_.addEventListener("change",this.boundChangeHandler_),this.btnElement_.addEventListener("focus",this.boundFocusHandler_),this.btnElement_.addEventListener("blur",this.boundBlurHandler_),this.element_.addEventListener("mouseup",this.boundMouseUpHandler_),this.updateClasses_(),this.element_.classList.add(this.CssClasses_.IS_UPGRADED)}},s.register({constructor:c,classAsString:"MaterialRadio",cssClass:"mdl-js-radio",widget:!0});var p=function(e){this.element_=e,this.isIE_=window.navigator.msPointerEnabled,this.init()};window.MaterialSlider=p,p.prototype.Constant_={},p.prototype.CssClasses_={IE_CONTAINER:"mdl-slider__ie-container",SLIDER_CONTAINER:"mdl-slider__container",BACKGROUND_FLEX:"mdl-slider__background-flex",BACKGROUND_LOWER:"mdl-slider__background-lower",BACKGROUND_UPPER:"mdl-slider__background-upper",IS_LOWEST_VALUE:"is-lowest-value",IS_UPGRADED:"is-upgraded"},p.prototype.onInput_=function(e){this.updateValueStyles_()},p.prototype.onChange_=function(e){this.updateValueStyles_()},p.prototype.onMouseUp_=function(e){e.target.blur()},p.prototype.onContainerMouseDown_=function(e){if(e.target===this.element_.parentElement){e.preventDefault();var t=new MouseEvent("mousedown",{target:e.target,buttons:e.buttons,clientX:e.clientX,clientY:this.element_.getBoundingClientRect().y});this.element_.dispatchEvent(t)}},p.prototype.updateValueStyles_=function(){var e=(this.element_.value-this.element_.min)/(this.element_.max-this.element_.min);0===e?this.element_.classList.add(this.CssClasses_.IS_LOWEST_VALUE):this.element_.classList.remove(this.CssClasses_.IS_LOWEST_VALUE),this.isIE_||(this.backgroundLower_.style.flex=e,this.backgroundLower_.style.webkitFlex=e,this.backgroundUpper_.style.flex=1-e,this.backgroundUpper_.style.webkitFlex=1-e)},p.prototype.disable=function(){this.element_.disabled=!0},p.prototype.disable=p.prototype.disable,p.prototype.enable=function(){this.element_.disabled=!1},p.prototype.enable=p.prototype.enable,p.prototype.change=function(e){"undefined"!=typeof e&&(this.element_.value=e),this.updateValueStyles_()},p.prototype.change=p.prototype.change,p.prototype.init=function(){if(this.element_){if(this.isIE_){var e=document.createElement("div");e.classList.add(this.CssClasses_.IE_CONTAINER),this.element_.parentElement.insertBefore(e,this.element_),this.element_.parentElement.removeChild(this.element_),e.appendChild(this.element_)}else{var t=document.createElement("div");t.classList.add(this.CssClasses_.SLIDER_CONTAINER),this.element_.parentElement.insertBefore(t,this.element_),this.element_.parentElement.removeChild(this.element_),t.appendChild(this.element_);var s=document.createElement("div");s.classList.add(this.CssClasses_.BACKGROUND_FLEX),t.appendChild(s),this.backgroundLower_=document.createElement("div"),this.backgroundLower_.classList.add(this.CssClasses_.BACKGROUND_LOWER),s.appendChild(this.backgroundLower_),this.backgroundUpper_=document.createElement("div"),this.backgroundUpper_.classList.add(this.CssClasses_.BACKGROUND_UPPER),s.appendChild(this.backgroundUpper_)}this.boundInputHandler=this.onInput_.bind(this),this.boundChangeHandler=this.onChange_.bind(this),this.boundMouseUpHandler=this.onMouseUp_.bind(this),this.boundContainerMouseDownHandler=this.onContainerMouseDown_.bind(this),this.element_.addEventListener("input",this.boundInputHandler),this.element_.addEventListener("change",this.boundChangeHandler),this.element_.addEventListener("mouseup",this.boundMouseUpHandler),this.element_.parentElement.addEventListener("mousedown",this.boundContainerMouseDownHandler),this.updateValueStyles_(),this.element_.classList.add(this.CssClasses_.IS_UPGRADED)}},s.register({constructor:p,classAsString:"MaterialSlider",cssClass:"mdl-js-slider",widget:!0});var C=function(e){if(this.element_=e,this.textElement_=this.element_.querySelector("."+this.cssClasses_.MESSAGE),this.actionElement_=this.element_.querySelector("."+this.cssClasses_.ACTION),!this.textElement_)throw new Error("There must be a message element for a snackbar.");if(!this.actionElement_)throw new Error("There must be an action element for a snackbar.");this.active=!1,this.actionHandler_=void 0,this.message_=void 0,this.actionText_=void 0,this.queuedNotifications_=[],this.setActionHidden_(!0)};window.MaterialSnackbar=C,C.prototype.Constant_={ANIMATION_LENGTH:250},C.prototype.cssClasses_={SNACKBAR:"mdl-snackbar",MESSAGE:"mdl-snackbar__text",ACTION:"mdl-snackbar__action",ACTIVE:"mdl-snackbar--active"},C.prototype.displaySnackbar_=function(){this.element_.setAttribute("aria-hidden","true"),
this.actionHandler_&&(this.actionElement_.textContent=this.actionText_,this.actionElement_.addEventListener("click",this.actionHandler_),this.setActionHidden_(!1)),this.textElement_.textContent=this.message_,this.element_.classList.add(this.cssClasses_.ACTIVE),this.element_.setAttribute("aria-hidden","false"),setTimeout(this.cleanup_.bind(this),this.timeout_)},C.prototype.showSnackbar=function(e){if(void 0===e)throw new Error("Please provide a data object with at least a message to display.");if(void 0===e.message)throw new Error("Please provide a message to be displayed.");if(e.actionHandler&&!e.actionText)throw new Error("Please provide action text with the handler.");this.active?this.queuedNotifications_.push(e):(this.active=!0,this.message_=e.message,e.timeout?this.timeout_=e.timeout:this.timeout_=2750,e.actionHandler&&(this.actionHandler_=e.actionHandler),e.actionText&&(this.actionText_=e.actionText),this.displaySnackbar_())},C.prototype.showSnackbar=C.prototype.showSnackbar,C.prototype.checkQueue_=function(){this.queuedNotifications_.length>0&&this.showSnackbar(this.queuedNotifications_.shift())},C.prototype.cleanup_=function(){this.element_.classList.remove(this.cssClasses_.ACTIVE),setTimeout(function(){this.element_.setAttribute("aria-hidden","true"),this.textElement_.textContent="",Boolean(this.actionElement_.getAttribute("aria-hidden"))||(this.setActionHidden_(!0),this.actionElement_.textContent="",this.actionElement_.removeEventListener("click",this.actionHandler_)),this.actionHandler_=void 0,this.message_=void 0,this.actionText_=void 0,this.active=!1,this.checkQueue_()}.bind(this),this.Constant_.ANIMATION_LENGTH)},C.prototype.setActionHidden_=function(e){e?this.actionElement_.setAttribute("aria-hidden","true"):this.actionElement_.removeAttribute("aria-hidden")},s.register({constructor:C,classAsString:"MaterialSnackbar",cssClass:"mdl-js-snackbar",widget:!0});var u=function(e){this.element_=e,this.init()};window.MaterialSpinner=u,u.prototype.Constant_={MDL_SPINNER_LAYER_COUNT:4},u.prototype.CssClasses_={MDL_SPINNER_LAYER:"mdl-spinner__layer",MDL_SPINNER_CIRCLE_CLIPPER:"mdl-spinner__circle-clipper",MDL_SPINNER_CIRCLE:"mdl-spinner__circle",MDL_SPINNER_GAP_PATCH:"mdl-spinner__gap-patch",MDL_SPINNER_LEFT:"mdl-spinner__left",MDL_SPINNER_RIGHT:"mdl-spinner__right"},u.prototype.createLayer=function(e){var t=document.createElement("div");t.classList.add(this.CssClasses_.MDL_SPINNER_LAYER),t.classList.add(this.CssClasses_.MDL_SPINNER_LAYER+"-"+e);var s=document.createElement("div");s.classList.add(this.CssClasses_.MDL_SPINNER_CIRCLE_CLIPPER),s.classList.add(this.CssClasses_.MDL_SPINNER_LEFT);var i=document.createElement("div");i.classList.add(this.CssClasses_.MDL_SPINNER_GAP_PATCH);var n=document.createElement("div");n.classList.add(this.CssClasses_.MDL_SPINNER_CIRCLE_CLIPPER),n.classList.add(this.CssClasses_.MDL_SPINNER_RIGHT);for(var a=[s,i,n],l=0;l<a.length;l++){var o=document.createElement("div");o.classList.add(this.CssClasses_.MDL_SPINNER_CIRCLE),a[l].appendChild(o)}t.appendChild(s),t.appendChild(i),t.appendChild(n),this.element_.appendChild(t)},u.prototype.createLayer=u.prototype.createLayer,u.prototype.stop=function(){this.element_.classList.remove("is-active")},u.prototype.stop=u.prototype.stop,u.prototype.start=function(){this.element_.classList.add("is-active")},u.prototype.start=u.prototype.start,u.prototype.init=function(){if(this.element_){for(var e=1;e<=this.Constant_.MDL_SPINNER_LAYER_COUNT;e++)this.createLayer(e);this.element_.classList.add("is-upgraded")}},s.register({constructor:u,classAsString:"MaterialSpinner",cssClass:"mdl-js-spinner",widget:!0});var E=function(e){this.element_=e,this.init()};window.MaterialSwitch=E,E.prototype.Constant_={TINY_TIMEOUT:.001},E.prototype.CssClasses_={INPUT:"mdl-switch__input",TRACK:"mdl-switch__track",THUMB:"mdl-switch__thumb",FOCUS_HELPER:"mdl-switch__focus-helper",RIPPLE_EFFECT:"mdl-js-ripple-effect",RIPPLE_IGNORE_EVENTS:"mdl-js-ripple-effect--ignore-events",RIPPLE_CONTAINER:"mdl-switch__ripple-container",RIPPLE_CENTER:"mdl-ripple--center",RIPPLE:"mdl-ripple",IS_FOCUSED:"is-focused",IS_DISABLED:"is-disabled",IS_CHECKED:"is-checked"},E.prototype.onChange_=function(e){this.updateClasses_()},E.prototype.onFocus_=function(e){this.element_.classList.add(this.CssClasses_.IS_FOCUSED)},E.prototype.onBlur_=function(e){this.element_.classList.remove(this.CssClasses_.IS_FOCUSED)},E.prototype.onMouseUp_=function(e){this.blur_()},E.prototype.updateClasses_=function(){this.checkDisabled(),this.checkToggleState()},E.prototype.blur_=function(){window.setTimeout(function(){this.inputElement_.blur()}.bind(this),this.Constant_.TINY_TIMEOUT)},E.prototype.checkDisabled=function(){this.inputElement_.disabled?this.element_.classList.add(this.CssClasses_.IS_DISABLED):this.element_.classList.remove(this.CssClasses_.IS_DISABLED)},E.prototype.checkDisabled=E.prototype.checkDisabled,E.prototype.checkToggleState=function(){this.inputElement_.checked?this.element_.classList.add(this.CssClasses_.IS_CHECKED):this.element_.classList.remove(this.CssClasses_.IS_CHECKED)},E.prototype.checkToggleState=E.prototype.checkToggleState,E.prototype.disable=function(){this.inputElement_.disabled=!0,this.updateClasses_()},E.prototype.disable=E.prototype.disable,E.prototype.enable=function(){this.inputElement_.disabled=!1,this.updateClasses_()},E.prototype.enable=E.prototype.enable,E.prototype.on=function(){this.inputElement_.checked=!0,this.updateClasses_()},E.prototype.on=E.prototype.on,E.prototype.off=function(){this.inputElement_.checked=!1,this.updateClasses_()},E.prototype.off=E.prototype.off,E.prototype.init=function(){if(this.element_){this.inputElement_=this.element_.querySelector("."+this.CssClasses_.INPUT);var e=document.createElement("div");e.classList.add(this.CssClasses_.TRACK);var t=document.createElement("div");t.classList.add(this.CssClasses_.THUMB);var s=document.createElement("span");if(s.classList.add(this.CssClasses_.FOCUS_HELPER),t.appendChild(s),this.element_.appendChild(e),this.element_.appendChild(t),this.boundMouseUpHandler=this.onMouseUp_.bind(this),this.element_.classList.contains(this.CssClasses_.RIPPLE_EFFECT)){this.element_.classList.add(this.CssClasses_.RIPPLE_IGNORE_EVENTS),this.rippleContainerElement_=document.createElement("span"),this.rippleContainerElement_.classList.add(this.CssClasses_.RIPPLE_CONTAINER),this.rippleContainerElement_.classList.add(this.CssClasses_.RIPPLE_EFFECT),this.rippleContainerElement_.classList.add(this.CssClasses_.RIPPLE_CENTER),this.rippleContainerElement_.addEventListener("mouseup",this.boundMouseUpHandler);var i=document.createElement("span");i.classList.add(this.CssClasses_.RIPPLE),this.rippleContainerElement_.appendChild(i),this.element_.appendChild(this.rippleContainerElement_)}this.boundChangeHandler=this.onChange_.bind(this),this.boundFocusHandler=this.onFocus_.bind(this),this.boundBlurHandler=this.onBlur_.bind(this),this.inputElement_.addEventListener("change",this.boundChangeHandler),this.inputElement_.addEventListener("focus",this.boundFocusHandler),this.inputElement_.addEventListener("blur",this.boundBlurHandler),this.element_.addEventListener("mouseup",this.boundMouseUpHandler),this.updateClasses_(),this.element_.classList.add("is-upgraded")}},s.register({constructor:E,classAsString:"MaterialSwitch",cssClass:"mdl-js-switch",widget:!0});var m=function(e){this.element_=e,this.init()};window.MaterialTabs=m,m.prototype.Constant_={},m.prototype.CssClasses_={TAB_CLASS:"mdl-tabs__tab",PANEL_CLASS:"mdl-tabs__panel",ACTIVE_CLASS:"is-active",UPGRADED_CLASS:"is-upgraded",MDL_JS_RIPPLE_EFFECT:"mdl-js-ripple-effect",MDL_RIPPLE_CONTAINER:"mdl-tabs__ripple-container",MDL_RIPPLE:"mdl-ripple",MDL_JS_RIPPLE_EFFECT_IGNORE_EVENTS:"mdl-js-ripple-effect--ignore-events"},m.prototype.initTabs_=function(){this.element_.classList.contains(this.CssClasses_.MDL_JS_RIPPLE_EFFECT)&&this.element_.classList.add(this.CssClasses_.MDL_JS_RIPPLE_EFFECT_IGNORE_EVENTS),this.tabs_=this.element_.querySelectorAll("."+this.CssClasses_.TAB_CLASS),this.panels_=this.element_.querySelectorAll("."+this.CssClasses_.PANEL_CLASS);for(var t=0;t<this.tabs_.length;t++)new e(this.tabs_[t],this);this.element_.classList.add(this.CssClasses_.UPGRADED_CLASS)},m.prototype.resetTabState_=function(){for(var e=0;e<this.tabs_.length;e++)this.tabs_[e].classList.remove(this.CssClasses_.ACTIVE_CLASS)},m.prototype.resetPanelState_=function(){for(var e=0;e<this.panels_.length;e++)this.panels_[e].classList.remove(this.CssClasses_.ACTIVE_CLASS)},m.prototype.init=function(){this.element_&&this.initTabs_()},s.register({constructor:m,classAsString:"MaterialTabs",cssClass:"mdl-js-tabs"});var L=function(e){this.element_=e,this.maxRows=this.Constant_.NO_MAX_ROWS,this.init()};window.MaterialTextfield=L,L.prototype.Constant_={NO_MAX_ROWS:-1,MAX_ROWS_ATTRIBUTE:"maxrows"},L.prototype.CssClasses_={LABEL:"mdl-textfield__label",INPUT:"mdl-textfield__input",IS_DIRTY:"is-dirty",IS_FOCUSED:"is-focused",IS_DISABLED:"is-disabled",IS_INVALID:"is-invalid",IS_UPGRADED:"is-upgraded",HAS_PLACEHOLDER:"has-placeholder"},L.prototype.onKeyDown_=function(e){var t=e.target.value.split("\n").length;13===e.keyCode&&t>=this.maxRows&&e.preventDefault()},L.prototype.onFocus_=function(e){this.element_.classList.add(this.CssClasses_.IS_FOCUSED)},L.prototype.onBlur_=function(e){this.element_.classList.remove(this.CssClasses_.IS_FOCUSED)},L.prototype.onReset_=function(e){this.updateClasses_()},L.prototype.updateClasses_=function(){this.checkDisabled(),this.checkValidity(),this.checkDirty(),this.checkFocus()},L.prototype.checkDisabled=function(){this.input_.disabled?this.element_.classList.add(this.CssClasses_.IS_DISABLED):this.element_.classList.remove(this.CssClasses_.IS_DISABLED)},L.prototype.checkDisabled=L.prototype.checkDisabled,L.prototype.checkFocus=function(){Boolean(this.element_.querySelector(":focus"))?this.element_.classList.add(this.CssClasses_.IS_FOCUSED):this.element_.classList.remove(this.CssClasses_.IS_FOCUSED)},L.prototype.checkFocus=L.prototype.checkFocus,L.prototype.checkValidity=function(){this.input_.validity&&(this.input_.validity.valid?this.element_.classList.remove(this.CssClasses_.IS_INVALID):this.element_.classList.add(this.CssClasses_.IS_INVALID))},L.prototype.checkValidity=L.prototype.checkValidity,L.prototype.checkDirty=function(){this.input_.value&&this.input_.value.length>0?this.element_.classList.add(this.CssClasses_.IS_DIRTY):this.element_.classList.remove(this.CssClasses_.IS_DIRTY)},L.prototype.checkDirty=L.prototype.checkDirty,L.prototype.disable=function(){this.input_.disabled=!0,this.updateClasses_()},L.prototype.disable=L.prototype.disable,L.prototype.enable=function(){this.input_.disabled=!1,this.updateClasses_()},L.prototype.enable=L.prototype.enable,L.prototype.change=function(e){this.input_.value=e||"",this.updateClasses_()},L.prototype.change=L.prototype.change,L.prototype.init=function(){if(this.element_&&(this.label_=this.element_.querySelector("."+this.CssClasses_.LABEL),this.input_=this.element_.querySelector("."+this.CssClasses_.INPUT),this.input_)){this.input_.hasAttribute(this.Constant_.MAX_ROWS_ATTRIBUTE)&&(this.maxRows=parseInt(this.input_.getAttribute(this.Constant_.MAX_ROWS_ATTRIBUTE),10),isNaN(this.maxRows)&&(this.maxRows=this.Constant_.NO_MAX_ROWS)),this.input_.hasAttribute("placeholder")&&this.element_.classList.add(this.CssClasses_.HAS_PLACEHOLDER),this.boundUpdateClassesHandler=this.updateClasses_.bind(this),this.boundFocusHandler=this.onFocus_.bind(this),this.boundBlurHandler=this.onBlur_.bind(this),this.boundResetHandler=this.onReset_.bind(this),this.input_.addEventListener("input",this.boundUpdateClassesHandler),this.input_.addEventListener("focus",this.boundFocusHandler),this.input_.addEventListener("blur",this.boundBlurHandler),this.input_.addEventListener("reset",this.boundResetHandler),this.maxRows!==this.Constant_.NO_MAX_ROWS&&(this.boundKeyDownHandler=this.onKeyDown_.bind(this),this.input_.addEventListener("keydown",this.boundKeyDownHandler));var e=this.element_.classList.contains(this.CssClasses_.IS_INVALID);this.updateClasses_(),this.element_.classList.add(this.CssClasses_.IS_UPGRADED),e&&this.element_.classList.add(this.CssClasses_.IS_INVALID),this.input_.hasAttribute("autofocus")&&(this.element_.focus(),this.checkFocus())}},s.register({constructor:L,classAsString:"MaterialTextfield",cssClass:"mdl-js-textfield",widget:!0});var I=function(e){this.element_=e,this.init()};window.MaterialTooltip=I,I.prototype.Constant_={},I.prototype.CssClasses_={IS_ACTIVE:"is-active",BOTTOM:"mdl-tooltip--bottom",LEFT:"mdl-tooltip--left",RIGHT:"mdl-tooltip--right",TOP:"mdl-tooltip--top"},I.prototype.handleMouseEnter_=function(e){var t=e.target.getBoundingClientRect(),s=t.left+t.width/2,i=t.top+t.height/2,n=-1*(this.element_.offsetWidth/2),a=-1*(this.element_.offsetHeight/2);this.element_.classList.contains(this.CssClasses_.LEFT)||this.element_.classList.contains(this.CssClasses_.RIGHT)?(s=t.width/2,i+a<0?(this.element_.style.top="0",this.element_.style.marginTop="0"):(this.element_.style.top=i+"px",this.element_.style.marginTop=a+"px")):s+n<0?(this.element_.style.left="0",this.element_.style.marginLeft="0"):(this.element_.style.left=s+"px",this.element_.style.marginLeft=n+"px"),this.element_.classList.contains(this.CssClasses_.TOP)?this.element_.style.top=t.top-this.element_.offsetHeight-10+"px":this.element_.classList.contains(this.CssClasses_.RIGHT)?this.element_.style.left=t.left+t.width+10+"px":this.element_.classList.contains(this.CssClasses_.LEFT)?this.element_.style.left=t.left-this.element_.offsetWidth-10+"px":this.element_.style.top=t.top+t.height+10+"px",this.element_.classList.add(this.CssClasses_.IS_ACTIVE)},I.prototype.hideTooltip_=function(){this.element_.classList.remove(this.CssClasses_.IS_ACTIVE)},I.prototype.init=function(){if(this.element_){var e=this.element_.getAttribute("for")||this.element_.getAttribute("data-mdl-for");e&&(this.forElement_=document.getElementById(e)),this.forElement_&&(this.forElement_.hasAttribute("tabindex")||this.forElement_.setAttribute("tabindex","0"),this.boundMouseEnterHandler=this.handleMouseEnter_.bind(this),this.boundMouseLeaveAndScrollHandler=this.hideTooltip_.bind(this),this.forElement_.addEventListener("mouseenter",this.boundMouseEnterHandler,!1),this.forElement_.addEventListener("touchend",this.boundMouseEnterHandler,!1),this.forElement_.addEventListener("mouseleave",this.boundMouseLeaveAndScrollHandler,!1),window.addEventListener("scroll",this.boundMouseLeaveAndScrollHandler,!0),window.addEventListener("touchstart",this.boundMouseLeaveAndScrollHandler))}},s.register({constructor:I,classAsString:"MaterialTooltip",cssClass:"mdl-tooltip"});var f=function(e){this.element_=e,this.init()};window.MaterialLayout=f,f.prototype.Constant_={MAX_WIDTH:"(max-width: 1024px)",TAB_SCROLL_PIXELS:100,RESIZE_TIMEOUT:100,MENU_ICON:"&#xE5D2;",CHEVRON_LEFT:"chevron_left",CHEVRON_RIGHT:"chevron_right"},f.prototype.Keycodes_={ENTER:13,ESCAPE:27,SPACE:32},f.prototype.Mode_={STANDARD:0,SEAMED:1,WATERFALL:2,SCROLL:3},f.prototype.CssClasses_={CONTAINER:"mdl-layout__container",HEADER:"mdl-layout__header",DRAWER:"mdl-layout__drawer",CONTENT:"mdl-layout__content",DRAWER_BTN:"mdl-layout__drawer-button",ICON:"material-icons",JS_RIPPLE_EFFECT:"mdl-js-ripple-effect",RIPPLE_CONTAINER:"mdl-layout__tab-ripple-container",RIPPLE:"mdl-ripple",RIPPLE_IGNORE_EVENTS:"mdl-js-ripple-effect--ignore-events",HEADER_SEAMED:"mdl-layout__header--seamed",HEADER_WATERFALL:"mdl-layout__header--waterfall",HEADER_SCROLL:"mdl-layout__header--scroll",FIXED_HEADER:"mdl-layout--fixed-header",OBFUSCATOR:"mdl-layout__obfuscator",TAB_BAR:"mdl-layout__tab-bar",TAB_CONTAINER:"mdl-layout__tab-bar-container",TAB:"mdl-layout__tab",TAB_BAR_BUTTON:"mdl-layout__tab-bar-button",TAB_BAR_LEFT_BUTTON:"mdl-layout__tab-bar-left-button",TAB_BAR_RIGHT_BUTTON:"mdl-layout__tab-bar-right-button",TAB_MANUAL_SWITCH:"mdl-layout__tab-manual-switch",PANEL:"mdl-layout__tab-panel",HAS_DRAWER:"has-drawer",HAS_TABS:"has-tabs",HAS_SCROLLING_HEADER:"has-scrolling-header",CASTING_SHADOW:"is-casting-shadow",IS_COMPACT:"is-compact",IS_SMALL_SCREEN:"is-small-screen",IS_DRAWER_OPEN:"is-visible",IS_ACTIVE:"is-active",IS_UPGRADED:"is-upgraded",IS_ANIMATING:"is-animating",ON_LARGE_SCREEN:"mdl-layout--large-screen-only",ON_SMALL_SCREEN:"mdl-layout--small-screen-only"},f.prototype.contentScrollHandler_=function(){if(!this.header_.classList.contains(this.CssClasses_.IS_ANIMATING)){var e=!this.element_.classList.contains(this.CssClasses_.IS_SMALL_SCREEN)||this.element_.classList.contains(this.CssClasses_.FIXED_HEADER);this.content_.scrollTop>0&&!this.header_.classList.contains(this.CssClasses_.IS_COMPACT)?(this.header_.classList.add(this.CssClasses_.CASTING_SHADOW),this.header_.classList.add(this.CssClasses_.IS_COMPACT),e&&this.header_.classList.add(this.CssClasses_.IS_ANIMATING)):this.content_.scrollTop<=0&&this.header_.classList.contains(this.CssClasses_.IS_COMPACT)&&(this.header_.classList.remove(this.CssClasses_.CASTING_SHADOW),this.header_.classList.remove(this.CssClasses_.IS_COMPACT),e&&this.header_.classList.add(this.CssClasses_.IS_ANIMATING))}},f.prototype.keyboardEventHandler_=function(e){e.keyCode===this.Keycodes_.ESCAPE&&this.drawer_.classList.contains(this.CssClasses_.IS_DRAWER_OPEN)&&this.toggleDrawer()},f.prototype.screenSizeHandler_=function(){this.screenSizeMediaQuery_.matches?this.element_.classList.add(this.CssClasses_.IS_SMALL_SCREEN):(this.element_.classList.remove(this.CssClasses_.IS_SMALL_SCREEN),this.drawer_&&(this.drawer_.classList.remove(this.CssClasses_.IS_DRAWER_OPEN),this.obfuscator_.classList.remove(this.CssClasses_.IS_DRAWER_OPEN)))},f.prototype.drawerToggleHandler_=function(e){if(e&&"keydown"===e.type){if(e.keyCode!==this.Keycodes_.SPACE&&e.keyCode!==this.Keycodes_.ENTER)return;e.preventDefault()}this.toggleDrawer()},f.prototype.headerTransitionEndHandler_=function(){this.header_.classList.remove(this.CssClasses_.IS_ANIMATING)},f.prototype.headerClickHandler_=function(){this.header_.classList.contains(this.CssClasses_.IS_COMPACT)&&(this.header_.classList.remove(this.CssClasses_.IS_COMPACT),this.header_.classList.add(this.CssClasses_.IS_ANIMATING))},f.prototype.resetTabState_=function(e){for(var t=0;t<e.length;t++)e[t].classList.remove(this.CssClasses_.IS_ACTIVE)},f.prototype.resetPanelState_=function(e){for(var t=0;t<e.length;t++)e[t].classList.remove(this.CssClasses_.IS_ACTIVE)},f.prototype.toggleDrawer=function(){var e=this.element_.querySelector("."+this.CssClasses_.DRAWER_BTN);this.drawer_.classList.toggle(this.CssClasses_.IS_DRAWER_OPEN),this.obfuscator_.classList.toggle(this.CssClasses_.IS_DRAWER_OPEN),this.drawer_.classList.contains(this.CssClasses_.IS_DRAWER_OPEN)?(this.drawer_.setAttribute("aria-hidden","false"),e.setAttribute("aria-expanded","true")):(this.drawer_.setAttribute("aria-hidden","true"),e.setAttribute("aria-expanded","false"))},f.prototype.toggleDrawer=f.prototype.toggleDrawer,f.prototype.init=function(){if(this.element_){var e=document.createElement("div");e.classList.add(this.CssClasses_.CONTAINER);var s=this.element_.querySelector(":focus");this.element_.parentElement.insertBefore(e,this.element_),this.element_.parentElement.removeChild(this.element_),e.appendChild(this.element_),s&&s.focus();for(var i=this.element_.childNodes,n=i.length,a=0;a<n;a++){var l=i[a];l.classList&&l.classList.contains(this.CssClasses_.HEADER)&&(this.header_=l),l.classList&&l.classList.contains(this.CssClasses_.DRAWER)&&(this.drawer_=l),l.classList&&l.classList.contains(this.CssClasses_.CONTENT)&&(this.content_=l)}window.addEventListener("pageshow",function(e){e.persisted&&(this.element_.style.overflowY="hidden",requestAnimationFrame(function(){this.element_.style.overflowY=""}.bind(this)))}.bind(this),!1),this.header_&&(this.tabBar_=this.header_.querySelector("."+this.CssClasses_.TAB_BAR));var o=this.Mode_.STANDARD;if(this.header_&&(this.header_.classList.contains(this.CssClasses_.HEADER_SEAMED)?o=this.Mode_.SEAMED:this.header_.classList.contains(this.CssClasses_.HEADER_WATERFALL)?(o=this.Mode_.WATERFALL,this.header_.addEventListener("transitionend",this.headerTransitionEndHandler_.bind(this)),this.header_.addEventListener("click",this.headerClickHandler_.bind(this))):this.header_.classList.contains(this.CssClasses_.HEADER_SCROLL)&&(o=this.Mode_.SCROLL,e.classList.add(this.CssClasses_.HAS_SCROLLING_HEADER)),o===this.Mode_.STANDARD?(this.header_.classList.add(this.CssClasses_.CASTING_SHADOW),this.tabBar_&&this.tabBar_.classList.add(this.CssClasses_.CASTING_SHADOW)):o===this.Mode_.SEAMED||o===this.Mode_.SCROLL?(this.header_.classList.remove(this.CssClasses_.CASTING_SHADOW),this.tabBar_&&this.tabBar_.classList.remove(this.CssClasses_.CASTING_SHADOW)):o===this.Mode_.WATERFALL&&(this.content_.addEventListener("scroll",this.contentScrollHandler_.bind(this)),this.contentScrollHandler_())),this.drawer_){var r=this.element_.querySelector("."+this.CssClasses_.DRAWER_BTN);if(!r){r=document.createElement("div"),r.setAttribute("aria-expanded","false"),r.setAttribute("role","button"),r.setAttribute("tabindex","0"),r.classList.add(this.CssClasses_.DRAWER_BTN);var _=document.createElement("i");_.classList.add(this.CssClasses_.ICON),_.innerHTML=this.Constant_.MENU_ICON,r.appendChild(_)}this.drawer_.classList.contains(this.CssClasses_.ON_LARGE_SCREEN)?r.classList.add(this.CssClasses_.ON_LARGE_SCREEN):this.drawer_.classList.contains(this.CssClasses_.ON_SMALL_SCREEN)&&r.classList.add(this.CssClasses_.ON_SMALL_SCREEN),r.addEventListener("click",this.drawerToggleHandler_.bind(this)),r.addEventListener("keydown",this.drawerToggleHandler_.bind(this)),this.element_.classList.add(this.CssClasses_.HAS_DRAWER),this.element_.classList.contains(this.CssClasses_.FIXED_HEADER)?this.header_.insertBefore(r,this.header_.firstChild):this.element_.insertBefore(r,this.content_);var d=document.createElement("div");d.classList.add(this.CssClasses_.OBFUSCATOR),this.element_.appendChild(d),d.addEventListener("click",this.drawerToggleHandler_.bind(this)),this.obfuscator_=d,this.drawer_.addEventListener("keydown",this.keyboardEventHandler_.bind(this)),this.drawer_.setAttribute("aria-hidden","true")}if(this.screenSizeMediaQuery_=window.matchMedia(this.Constant_.MAX_WIDTH),this.screenSizeMediaQuery_.addListener(this.screenSizeHandler_.bind(this)),this.screenSizeHandler_(),this.header_&&this.tabBar_){this.element_.classList.add(this.CssClasses_.HAS_TABS);var h=document.createElement("div");h.classList.add(this.CssClasses_.TAB_CONTAINER),this.header_.insertBefore(h,this.tabBar_),this.header_.removeChild(this.tabBar_);var c=document.createElement("div");c.classList.add(this.CssClasses_.TAB_BAR_BUTTON),c.classList.add(this.CssClasses_.TAB_BAR_LEFT_BUTTON);var p=document.createElement("i");p.classList.add(this.CssClasses_.ICON),p.textContent=this.Constant_.CHEVRON_LEFT,c.appendChild(p),c.addEventListener("click",function(){this.tabBar_.scrollLeft-=this.Constant_.TAB_SCROLL_PIXELS}.bind(this));var C=document.createElement("div");C.classList.add(this.CssClasses_.TAB_BAR_BUTTON),C.classList.add(this.CssClasses_.TAB_BAR_RIGHT_BUTTON);var u=document.createElement("i");u.classList.add(this.CssClasses_.ICON),u.textContent=this.Constant_.CHEVRON_RIGHT,C.appendChild(u),C.addEventListener("click",function(){this.tabBar_.scrollLeft+=this.Constant_.TAB_SCROLL_PIXELS}.bind(this)),h.appendChild(c),h.appendChild(this.tabBar_),h.appendChild(C);var E=function(){this.tabBar_.scrollLeft>0?c.classList.add(this.CssClasses_.IS_ACTIVE):c.classList.remove(this.CssClasses_.IS_ACTIVE),this.tabBar_.scrollLeft<this.tabBar_.scrollWidth-this.tabBar_.offsetWidth?C.classList.add(this.CssClasses_.IS_ACTIVE):C.classList.remove(this.CssClasses_.IS_ACTIVE)}.bind(this);this.tabBar_.addEventListener("scroll",E),E();var m=function(){this.resizeTimeoutId_&&clearTimeout(this.resizeTimeoutId_),this.resizeTimeoutId_=setTimeout(function(){E(),this.resizeTimeoutId_=null}.bind(this),this.Constant_.RESIZE_TIMEOUT)}.bind(this);window.addEventListener("resize",m),this.tabBar_.classList.contains(this.CssClasses_.JS_RIPPLE_EFFECT)&&this.tabBar_.classList.add(this.CssClasses_.RIPPLE_IGNORE_EVENTS);for(var L=this.tabBar_.querySelectorAll("."+this.CssClasses_.TAB),I=this.content_.querySelectorAll("."+this.CssClasses_.PANEL),f=0;f<L.length;f++)new t(L[f],L,I,this)}this.element_.classList.add(this.CssClasses_.IS_UPGRADED)}},window.MaterialLayoutTab=t,s.register({constructor:f,classAsString:"MaterialLayout",cssClass:"mdl-js-layout"});var b=function(e){this.element_=e,this.init()};window.MaterialDataTable=b,b.prototype.Constant_={},b.prototype.CssClasses_={DATA_TABLE:"mdl-data-table",SELECTABLE:"mdl-data-table--selectable",SELECT_ELEMENT:"mdl-data-table__select",IS_SELECTED:"is-selected",IS_UPGRADED:"is-upgraded"},b.prototype.selectRow_=function(e,t,s){return t?function(){e.checked?t.classList.add(this.CssClasses_.IS_SELECTED):t.classList.remove(this.CssClasses_.IS_SELECTED)}.bind(this):s?function(){var t,i;if(e.checked)for(t=0;t<s.length;t++)i=s[t].querySelector("td").querySelector(".mdl-checkbox"),i.MaterialCheckbox.check(),s[t].classList.add(this.CssClasses_.IS_SELECTED);else for(t=0;t<s.length;t++)i=s[t].querySelector("td").querySelector(".mdl-checkbox"),i.MaterialCheckbox.uncheck(),s[t].classList.remove(this.CssClasses_.IS_SELECTED)}.bind(this):void 0},b.prototype.createCheckbox_=function(e,t){var i=document.createElement("label"),n=["mdl-checkbox","mdl-js-checkbox","mdl-js-ripple-effect",this.CssClasses_.SELECT_ELEMENT];i.className=n.join(" ");var a=document.createElement("input");return a.type="checkbox",a.classList.add("mdl-checkbox__input"),e?(a.checked=e.classList.contains(this.CssClasses_.IS_SELECTED),a.addEventListener("change",this.selectRow_(a,e))):t&&a.addEventListener("change",this.selectRow_(a,null,t)),i.appendChild(a),s.upgradeElement(i,"MaterialCheckbox"),i},b.prototype.init=function(){if(this.element_){var e=this.element_.querySelector("th"),t=Array.prototype.slice.call(this.element_.querySelectorAll("tbody tr")),s=Array.prototype.slice.call(this.element_.querySelectorAll("tfoot tr")),i=t.concat(s);if(this.element_.classList.contains(this.CssClasses_.SELECTABLE)){var n=document.createElement("th"),a=this.createCheckbox_(null,i);n.appendChild(a),e.parentElement.insertBefore(n,e);for(var l=0;l<i.length;l++){var o=i[l].querySelector("td");if(o){var r=document.createElement("td");if("TBODY"===i[l].parentNode.nodeName.toUpperCase()){var _=this.createCheckbox_(i[l]);r.appendChild(_)}i[l].insertBefore(r,o)}}this.element_.classList.add(this.CssClasses_.IS_UPGRADED)}}},s.register({constructor:b,classAsString:"MaterialDataTable",cssClass:"mdl-js-data-table"});var S=function(e){this.element_=e,this.init()};window.MaterialRipple=S,S.prototype.Constant_={INITIAL_SCALE:"scale(0.0001, 0.0001)",INITIAL_SIZE:"1px",INITIAL_OPACITY:"0.4",FINAL_OPACITY:"0",FINAL_SCALE:""},S.prototype.CssClasses_={RIPPLE_CENTER:"mdl-ripple--center",RIPPLE_EFFECT_IGNORE_EVENTS:"mdl-js-ripple-effect--ignore-events",RIPPLE:"mdl-ripple",IS_ANIMATING:"is-animating",IS_VISIBLE:"is-visible"},S.prototype.downHandler_=function(e){if(!this.rippleElement_.style.width&&!this.rippleElement_.style.height){var t=this.element_.getBoundingClientRect();this.boundHeight=t.height,this.boundWidth=t.width,this.rippleSize_=2*Math.sqrt(t.width*t.width+t.height*t.height)+2,this.rippleElement_.style.width=this.rippleSize_+"px",this.rippleElement_.style.height=this.rippleSize_+"px"}if(this.rippleElement_.classList.add(this.CssClasses_.IS_VISIBLE),"mousedown"===e.type&&this.ignoringMouseDown_)this.ignoringMouseDown_=!1;else{"touchstart"===e.type&&(this.ignoringMouseDown_=!0);var s=this.getFrameCount();if(s>0)return;this.setFrameCount(1);var i,n,a=e.currentTarget.getBoundingClientRect();if(0===e.clientX&&0===e.clientY)i=Math.round(a.width/2),n=Math.round(a.height/2);else{var l=void 0!==e.clientX?e.clientX:e.touches[0].clientX,o=void 0!==e.clientY?e.clientY:e.touches[0].clientY;i=Math.round(l-a.left),n=Math.round(o-a.top)}this.setRippleXY(i,n),this.setRippleStyles(!0),window.requestAnimationFrame(this.animFrameHandler.bind(this))}},S.prototype.upHandler_=function(e){e&&2!==e.detail&&window.setTimeout(function(){this.rippleElement_.classList.remove(this.CssClasses_.IS_VISIBLE)}.bind(this),0)},S.prototype.init=function(){if(this.element_){var e=this.element_.classList.contains(this.CssClasses_.RIPPLE_CENTER);this.element_.classList.contains(this.CssClasses_.RIPPLE_EFFECT_IGNORE_EVENTS)||(this.rippleElement_=this.element_.querySelector("."+this.CssClasses_.RIPPLE),this.frameCount_=0,this.rippleSize_=0,this.x_=0,this.y_=0,this.ignoringMouseDown_=!1,this.boundDownHandler=this.downHandler_.bind(this),this.element_.addEventListener("mousedown",this.boundDownHandler),this.element_.addEventListener("touchstart",this.boundDownHandler),this.boundUpHandler=this.upHandler_.bind(this),this.element_.addEventListener("mouseup",this.boundUpHandler),this.element_.addEventListener("mouseleave",this.boundUpHandler),this.element_.addEventListener("touchend",this.boundUpHandler),this.element_.addEventListener("blur",this.boundUpHandler),this.getFrameCount=function(){return this.frameCount_},this.setFrameCount=function(e){this.frameCount_=e},this.getRippleElement=function(){return this.rippleElement_},this.setRippleXY=function(e,t){this.x_=e,this.y_=t},this.setRippleStyles=function(t){if(null!==this.rippleElement_){var s,i,n,a="translate("+this.x_+"px, "+this.y_+"px)";t?(i=this.Constant_.INITIAL_SCALE,n=this.Constant_.INITIAL_SIZE):(i=this.Constant_.FINAL_SCALE,n=this.rippleSize_+"px",e&&(a="translate("+this.boundWidth/2+"px, "+this.boundHeight/2+"px)")),s="translate(-50%, -50%) "+a+i,this.rippleElement_.style.webkitTransform=s,this.rippleElement_.style.msTransform=s,this.rippleElement_.style.transform=s,t?this.rippleElement_.classList.remove(this.CssClasses_.IS_ANIMATING):this.rippleElement_.classList.add(this.CssClasses_.IS_ANIMATING)}},this.animFrameHandler=function(){this.frameCount_-- >0?window.requestAnimationFrame(this.animFrameHandler.bind(this)):this.setRippleStyles(!1)})}},s.register({constructor:S,classAsString:"MaterialRipple",cssClass:"mdl-js-ripple-effect",widget:!1})}();
//# sourceMappingURL=material.min.js.map
</script>



<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
<script>

window.cookieconsent_options = {

message: 'This site uses cookies to deliver our services and to show you relevant ads. By using our site, you acknowledge that you have read and understood our Privacy Policy. Your use of w3resource Services, is subject to these policies',

theme:'dark-bottom',

learnMore: 'More info',

link: 'https://www.w3resource.com/privacy.php'

};

</script>
<style type="text/css">

.previousNext_bottom a:first-child  {

float: left;

margin-left:8px;

}

.previousNext_bottom a:last-child  {

float: right;

margin-right:8px;

}

</style>
<script>

window.onload = function() {

//var old_links = document.getElementById("np").style.display = "none";

var links = document.querySelector("ul.nav.nav-list").childNodes;

var parentDiv = document.querySelector(".np");

var parentDiv_bottom = document.querySelector(".np_bottom");

var node = document.createElement("span"); 

var node_bottom = document.createElement("span");

node.setAttribute("class","previousNext");

node_bottom.setAttribute("class","previousNext_bottom");

parentDiv.appendChild(node);

parentDiv_bottom.appendChild(node_bottom);

for (var i=0; i < links.length; i++) {

if(links[i].getAttribute("class")!=="nav-header" && links[i].children[0].getAttribute('href')===window.location.pathname){

if(links[i-1].getAttribute("class")!=="nav-header"){

var newLink = document.createElement("a");

newLink.setAttribute("href",links[i-1].children[0].getAttribute("href"));

var icon = document.createElement("i");

icon.setAttribute("class","material-icons");

icon.style.marginLeft = '40px';

icon.style.color = '#fff';

icon.style.verticalAlign = 'middle';

var previousTxt = document.createTextNode('skip_previous');

icon.appendChild(previousTxt);

newLink.appendChild(icon);

node.appendChild(newLink);

//for bottom

var newLink_bottom = document.createElement("a");

newLink_bottom.setAttribute("href",links[i-1].children[0].getAttribute("href"));

var previousTxt_bottom = document.createTextNode('Previous');

newLink_bottom.appendChild(previousTxt_bottom);

node_bottom.appendChild(newLink_bottom);

}

else if (links[i-1].getAttribute("class")==="nav-header"){

var newLink = document.createElement("a");

newLink.setAttribute("href",links[i-2].children[0].getAttribute("href"));

var icon = document.createElement("i");

icon.setAttribute("class","material-icons");

icon.style.marginLeft = '40px';

icon.style.color = '#fff';

icon.style.verticalAlign = 'middle';

var previousTxt = document.createTextNode('skip_previous');

icon.appendChild(previousTxt);

newLink.appendChild(icon);

node.appendChild(newLink);

//for bottom

var newLink_bottom = document.createElement("a");

newLink_bottom.setAttribute("href",links[i-2].children[0].getAttribute("href"));

var previousTxt_bottom = document.createTextNode('Previous');

newLink_bottom.appendChild(previousTxt_bottom);

node_bottom.appendChild(newLink_bottom);

}

if(links[i+1].getAttribute("class")!=="nav-header") {

var newLink = document.createElement("a");

newLink.setAttribute("href",links[i+1].children[0].getAttribute("href"));

var icon = document.createElement("i");

icon.setAttribute("class","material-icons");

icon.style.marginLeft = '30px';

icon.style.color = '#fff';

icon.style.verticalAlign = 'middle';

var nextTxt = document.createTextNode('skip_next');

icon.appendChild(nextTxt);

newLink.appendChild(icon);

node.appendChild(newLink);

//for bottom

var newLink_bottom = document.createElement("a");

newLink_bottom.setAttribute("href",links[i+1].children[0].getAttribute("href"));

var NextTxt_bottom = document.createTextNode('Next');

newLink_bottom.appendChild(NextTxt_bottom);

node_bottom.appendChild(newLink_bottom);

}

else if (links[i+1].getAttribute("class")==="nav-header") {

var newLink = document.createElement("a");

newLink.setAttribute("href",links[i+2].children[0].getAttribute("href"));

var icon = document.createElement("i");

icon.setAttribute("class","material-icons");

icon.style.marginLeft = '30px';

icon.style.color = '#fff';

icon.style.verticalAlign = 'middle';

var nextTxt = document.createTextNode('skip_next');

icon.appendChild(nextTxt);

newLink.appendChild(icon);

node.appendChild(newLink);

//for bottom

var newLink_bottom = document.createElement("a");

newLink_bottom.setAttribute("href",links[i+2].children[0].getAttribute("href"));

var NextTxt_bottom = document.createTextNode('Next');

newLink_bottom.appendChild(NextTxt_bottom);

node_bottom.appendChild(newLink_bottom);

}

}

}

var prenext = document.querySelector("span.previousNext");

var cln = prenext.cloneNode(true);

}	

</script>



<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>

(function(){

	if(typeof _bsa !== 'undefined' && _bsa) {

  		// format, zoneKey, segment:value, options

  		_bsa.init('flexbar', 'CK7DCK7L', 'placement:w3resourcecom');

  	}

})();

</script>

<script>
(function() {
  if (typeof _bsa !== 'undefined' && _bsa) {
    _bsa.init('custom', 'CE7DVK3N', 'placement:demo',
    {
      target: '#hovercard',
      template: `
<a href="##statlink##" class="hover-section" target="_blank" rel="noopener">
  <div class="hover-banner" style="background-color: ##backgroundColor##">
    <span style="color: ##backgroundColor##; background-color: ##textColor##CC" class="hover-ad">Sponsored</span>
    <img class="hover-logo" src="##logo##">
  </div>
  <div class="hover-subset">
    <img class="hover-icon" style="background-color: ##backgroundColor##" src="##image##">
    <div class="hover-description"><strong>##company##</strong> ##description##</div>
  </div>
</a>
    `
        }
      );
  }
})();
</script>

<style type="text/css">
/* PrismJS 1.22.0
https://prismjs.com/download.html#themes=prism-coy&languages=markup+css+clike+javascript+abap+abnf+actionscript+ada+agda+al+antlr4+apacheconf+apex+apl+applescript+aql+arduino+arff+asciidoc+aspnet+asm6502+autohotkey+autoit+bash+basic+batch+bbcode+birb+bison+bnf+brainfuck+brightscript+bro+bsl+c+csharp+cpp+cil+clojure+cmake+coffeescript+concurnas+csp+crystal+css-extras+cypher+d+dart+dataweave+dax+dhall+diff+django+dns-zone-file+docker+ebnf+editorconfig+eiffel+ejs+elixir+elm+etlua+erb+erlang+excel-formula+fsharp+factor+firestore-security-rules+flow+fortran+ftl+gml+gcode+gdscript+gedcom+gherkin+git+glsl+go+graphql+groovy+haml+handlebars+haskell+haxe+hcl+hlsl+http+hpkp+hsts+ichigojam+icon+ignore+inform7+ini+io+j+java+javadoc+javadoclike+javastacktrace+jolie+jq+jsdoc+js-extras+json+json5+jsonp+jsstacktrace+js-templates+julia+keyman+kotlin+latex+latte+less+lilypond+liquid+lisp+livescript+llvm+lolcode+lua+makefile+markdown+markup-templating+matlab+mel+mizar+mongodb+monkey+moonscript+n1ql+n4js+nand2tetris-hdl+naniscript+nasm+neon+nginx+nim+nix+nsis+objectivec+ocaml+opencl+oz+parigp+parser+pascal+pascaligo+pcaxis+peoplecode+perl+php+phpdoc+php-extras+plsql+powerquery+powershell+processing+prolog+promql+properties+protobuf+pug+puppet+pure+purebasic+purescript+python+q+qml+qore+r+racket+jsx+tsx+reason+regex+renpy+rest+rip+roboconf+robotframework+ruby+rust+sas+sass+scss+scala+scheme+shell-session+smali+smalltalk+smarty+sml+solidity+solution-file+soy+sparql+splunk-spl+sqf+sql+stan+iecst+stylus+swift+t4-templating+t4-cs+t4-vb+tap+tcl+tt2+textile+toml+turtle+twig+typescript+typoscript+unrealscript+vala+vbnet+velocity+verilog+vhdl+vim+visual-basic+warpscript+wasm+wiki+xeora+xml-doc+xojo+xquery+yaml+yang+zig&plugins=line-highlight+line-numbers+remove-initial-line-feed+inline-color+previewers+autoloader+toolbar+copy-to-clipboard */
/**
 * prism.js Coy theme for JavaScript, CoffeeScript, CSS and HTML
 * Based on https://github.com/tshedor/workshop-wp-theme (Example: http://workshop.kansan.com/category/sessions/basics or http://workshop.timshedor.com/category/sessions/basics);
 * @author Tim  Shedor
 */

code[class*="language-"],
pre[class*="language-"] {
	color: black;
	background: none;
	font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
	font-size: 1em;
	text-align: left;
	white-space: pre;
	word-spacing: normal;
	word-break: normal;
	word-wrap: normal;
	line-height: 1.5;

	-moz-tab-size: 4;
	-o-tab-size: 4;
	tab-size: 4;

	-webkit-hyphens: none;
	-moz-hyphens: none;
	-ms-hyphens: none;
	hyphens: none;
}

/* Code blocks */
pre[class*="language-"] {
	position: relative;
	margin: .5em 0;
	overflow: visible;
	padding: 0;
}
pre[class*="language-"]>code {
	position: relative;
	border-left: 10px solid #358ccb;
	box-shadow: -1px 0px 0px 0px #358ccb, 0px 0px 0px 1px #dfdfdf;
	background-color: #fdfdfd;
	background-image: linear-gradient(transparent 50%, rgba(69, 142, 209, 0.04) 50%);
	background-size: 3em 3em;
	background-origin: content-box;
	background-attachment: local;
}

code[class*="language-"] {
	max-height: inherit;
	height: inherit;
	padding: 0 1em;
	display: block;
	overflow: auto;
}

/* Margin bottom to accommodate shadow */
:not(pre) > code[class*="language-"],
pre[class*="language-"] {
	background-color: #fdfdfd;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	margin-bottom: 1em;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
	position: relative;
	padding: .2em;
	border-radius: 0.3em;
	color: #c92c2c;
	border: 1px solid rgba(0, 0, 0, 0.1);
	display: inline;
	white-space: normal;
}

pre[class*="language-"]:before,
pre[class*="language-"]:after {
	content: '';
	z-index: -2;
	display: block;
	position: absolute;
	bottom: 0.75em;
	left: 0.18em;
	width: 40%;
	height: 20%;
	max-height: 13em;
	box-shadow: 0px 13px 8px #979797;
	-webkit-transform: rotate(-2deg);
	-moz-transform: rotate(-2deg);
	-ms-transform: rotate(-2deg);
	-o-transform: rotate(-2deg);
	transform: rotate(-2deg);
}

pre[class*="language-"]:after {
	right: 0.75em;
	left: auto;
	-webkit-transform: rotate(2deg);
	-moz-transform: rotate(2deg);
	-ms-transform: rotate(2deg);
	-o-transform: rotate(2deg);
	transform: rotate(2deg);
}

.token.comment,
.token.block-comment,
.token.prolog,
.token.doctype,
.token.cdata {
	color: #7D8B99;
}

.token.punctuation {
	color: #5F6364;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.function-name,
.token.constant,
.token.symbol,
.token.deleted {
	color: #c92c2c;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.function,
.token.builtin,
.token.inserted {
	color: #2f9c0a;
}

.token.operator,
.token.entity,
.token.url,
.token.variable {
	color: #a67f59;
	background: rgba(255, 255, 255, 0.5);
}

.token.atrule,
.token.attr-value,
.token.keyword,
.token.class-name {
	color: #1990b8;
}

.token.regex,
.token.important {
	color: #e90;
}

.language-css .token.string,
.style .token.string {
	color: #a67f59;
	background: rgba(255, 255, 255, 0.5);
}

.token.important {
	font-weight: normal;
}

.token.bold {
	font-weight: bold;
}
.token.italic {
	font-style: italic;
}

.token.entity {
	cursor: help;
}

.token.namespace {
	opacity: .7;
}

@media screen and (max-width: 767px) {
	pre[class*="language-"]:before,
	pre[class*="language-"]:after {
		bottom: 14px;
		box-shadow: none;
	}

}

/* Plugin styles: Line Numbers */
pre[class*="language-"].line-numbers.line-numbers {
	padding-left: 0;
}

pre[class*="language-"].line-numbers.line-numbers code {
	padding-left: 3.8em;
}

pre[class*="language-"].line-numbers.line-numbers .line-numbers-rows {
	left: 0;
}

/* Plugin styles: Line Highlight */
pre[class*="language-"][data-line] {
	padding-top: 0;
	padding-bottom: 0;
	padding-left: 0;
}
pre[data-line] code {
	position: relative;
	padding-left: 4em;
}
pre .line-highlight {
	margin-top: 0;
}

pre[data-line] {
	position: relative;
	padding: 1em 0 1em 3em;
}

.line-highlight {
	position: absolute;
	left: 0;
	right: 0;
	padding: inherit 0;
	margin-top: 1em; /* Same as .prism’s padding-top */

	background: hsla(24, 20%, 50%,.08);
	background: linear-gradient(to right, hsla(24, 20%, 50%,.1) 70%, hsla(24, 20%, 50%,0));

	pointer-events: none;

	line-height: inherit;
	white-space: pre;
}

	.line-highlight:before,
	.line-highlight[data-end]:after {
		content: attr(data-start);
		position: absolute;
		top: .4em;
		left: .6em;
		min-width: 1em;
		padding: 0 .5em;
		background-color: hsla(24, 20%, 50%,.4);
		color: hsl(24, 20%, 95%);
		font: bold 65%/1.5 sans-serif;
		text-align: center;
		vertical-align: .3em;
		border-radius: 999px;
		text-shadow: none;
		box-shadow: 0 1px white;
	}

	.line-highlight[data-end]:after {
		content: attr(data-end);
		top: auto;
		bottom: .4em;
	}

.line-numbers .line-highlight:before,
.line-numbers .line-highlight:after {
	content: none;
}

pre[id].linkable-line-numbers span.line-numbers-rows {
	pointer-events: all;
}
pre[id].linkable-line-numbers span.line-numbers-rows > span:before {
	cursor: pointer;
}
pre[id].linkable-line-numbers span.line-numbers-rows > span:hover:before {
	background-color: rgba(128, 128, 128, .2);
}

pre[class*="language-"].line-numbers {
	position: relative;
	padding-left: 3.8em;
	counter-reset: linenumber;
}

pre[class*="language-"].line-numbers > code {
	position: relative;
	white-space: inherit;
}

.line-numbers .line-numbers-rows {
	position: absolute;
	pointer-events: none;
	top: 0;
	font-size: 100%;
	left: -3.8em;
	width: 3em; /* works for line-numbers below 1000 lines */
	letter-spacing: -1px;
	border-right: 1px solid #999;

	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;

}

	.line-numbers-rows > span {
		display: block;
		counter-increment: linenumber;
	}

		.line-numbers-rows > span:before {
			content: counter(linenumber);
			color: #999;
			display: block;
			padding-right: 0.8em;
			text-align: right;
		}

span.inline-color-wrapper {
	/*
	 * The background image is the following SVG inline in base 64:
	 *
	 * <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2 2">
	 *     <path fill="gray" d="M0 0h2v2H0z"/>
	 *     <path fill="white" d="M0 0h1v1H0zM1 1h1v1H1z"/>
	 * </svg>
	 *
	 * SVG-inlining explained:
	 * https://stackoverflow.com/a/21626701/7595472
	 */
	background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyIDIiPjxwYXRoIGZpbGw9ImdyYXkiIGQ9Ik0wIDBoMnYySDB6Ii8+PHBhdGggZmlsbD0id2hpdGUiIGQ9Ik0wIDBoMXYxSDB6TTEgMWgxdjFIMXoiLz48L3N2Zz4=");
	/* This is to prevent visual glitches where one pixel from the repeating pattern could be seen. */
	background-position: center;
	background-size: 110%;

	display: inline-block;
	height: 1.333ch;
	width: 1.333ch;
	margin: 0 .333ch;
	box-sizing: border-box;
	border: 1px solid white;
	outline: 1px solid rgba(0,0,0,.5);
	overflow: hidden;
}

span.inline-color {
	display: block;
	/* To prevent visual glitches again */
	height: 120%;
	width: 120%;
}

.prism-previewer,
.prism-previewer:before,
.prism-previewer:after {
	position: absolute;
	pointer-events: none;
}
.prism-previewer,
.prism-previewer:after {
	left: 50%;
}
.prism-previewer {
	margin-top: -48px;
	width: 32px;
	height: 32px;
	margin-left: -16px;

	opacity: 0;
	-webkit-transition: opacity .25s;
	-o-transition: opacity .25s;
	transition: opacity .25s;
}
.prism-previewer.flipped {
	margin-top: 0;
	margin-bottom: -48px;
}
.prism-previewer:before,
.prism-previewer:after {
	content: '';
	position: absolute;
	pointer-events: none;
}
.prism-previewer:before {
	top: -5px;
	right: -5px;
	left: -5px;
	bottom: -5px;
	border-radius: 10px;
	border: 5px solid #fff;
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.5) inset, 0 0 10px rgba(0, 0, 0, 0.75);
}
.prism-previewer:after {
	top: 100%;
	width: 0;
	height: 0;
	margin: 5px 0 0 -7px;
	border: 7px solid transparent;
	border-color: rgba(255, 0, 0, 0);
	border-top-color: #fff;
}
.prism-previewer.flipped:after {
	top: auto;
	bottom: 100%;
	margin-top: 0;
	margin-bottom: 5px;
	border-top-color: rgba(255, 0, 0, 0);
	border-bottom-color: #fff;
}
.prism-previewer.active {
	opacity: 1;
}

.prism-previewer-angle:before {
	border-radius: 50%;
	background: #fff;
}
.prism-previewer-angle:after {
	margin-top: 4px;
}
.prism-previewer-angle svg {
	width: 32px;
	height: 32px;
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	transform: rotate(-90deg);
}
.prism-previewer-angle[data-negative] svg {
	-webkit-transform: scaleX(-1) rotate(-90deg);
	-moz-transform: scaleX(-1) rotate(-90deg);
	-ms-transform: scaleX(-1) rotate(-90deg);
	-o-transform: scaleX(-1) rotate(-90deg);
	transform: scaleX(-1) rotate(-90deg);
}
.prism-previewer-angle circle {
	fill: transparent;
	stroke: hsl(200, 10%, 20%);
	stroke-opacity: 0.9;
	stroke-width: 32;
	stroke-dasharray: 0, 500;
}

.prism-previewer-gradient {
	background-image: linear-gradient(45deg, #bbb 25%, transparent 25%, transparent 75%, #bbb 75%, #bbb), linear-gradient(45deg, #bbb 25%, #eee 25%, #eee 75%, #bbb 75%, #bbb);
	background-size: 10px 10px;
	background-position: 0 0, 5px 5px;

	width: 64px;
	margin-left: -32px;
}
.prism-previewer-gradient:before {
	content: none;
}
.prism-previewer-gradient div {
	position: absolute;
	top: -5px;
	left: -5px;
	right: -5px;
	bottom: -5px;
	border-radius: 10px;
	border: 5px solid #fff;
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.5) inset, 0 0 10px rgba(0, 0, 0, 0.75);
}

.prism-previewer-color {
	background-image: linear-gradient(45deg, #bbb 25%, transparent 25%, transparent 75%, #bbb 75%, #bbb), linear-gradient(45deg, #bbb 25%, #eee 25%, #eee 75%, #bbb 75%, #bbb);
	background-size: 10px 10px;
	background-position: 0 0, 5px 5px;
}
.prism-previewer-color:before {
	background-color: inherit;
	background-clip: padding-box;
}

.prism-previewer-easing {
	margin-top: -76px;
	margin-left: -30px;
	width: 60px;
	height: 60px;
	background: #333;
}
.prism-previewer-easing.flipped {
	margin-bottom: -116px;
}
.prism-previewer-easing svg {
	width: 60px;
	height: 60px;
}
.prism-previewer-easing circle {
	fill: hsl(200, 10%, 20%);
	stroke: white;
}
.prism-previewer-easing path {
	fill: none;
	stroke: white;
	stroke-linecap: round;
	stroke-width: 4;
}
.prism-previewer-easing line {
	stroke: white;
	stroke-opacity: 0.5;
	stroke-width: 2;
}

@-webkit-keyframes prism-previewer-time {
	0% {
		stroke-dasharray: 0, 500;
		stroke-dashoffset: 0;
	}
	50% {
		stroke-dasharray: 100, 500;
		stroke-dashoffset: 0;
	}
	100% {
		stroke-dasharray: 0, 500;
		stroke-dashoffset: -100;
	}
}

@-o-keyframes prism-previewer-time {
	0% {
		stroke-dasharray: 0, 500;
		stroke-dashoffset: 0;
	}
	50% {
		stroke-dasharray: 100, 500;
		stroke-dashoffset: 0;
	}
	100% {
		stroke-dasharray: 0, 500;
		stroke-dashoffset: -100;
	}
}

@-moz-keyframes prism-previewer-time {
	0% {
		stroke-dasharray: 0, 500;
		stroke-dashoffset: 0;
	}
	50% {
		stroke-dasharray: 100, 500;
		stroke-dashoffset: 0;
	}
	100% {
		stroke-dasharray: 0, 500;
		stroke-dashoffset: -100;
	}
}

@keyframes prism-previewer-time {
	0% {
		stroke-dasharray: 0, 500;
		stroke-dashoffset: 0;
	}
	50% {
		stroke-dasharray: 100, 500;
		stroke-dashoffset: 0;
	}
	100% {
		stroke-dasharray: 0, 500;
		stroke-dashoffset: -100;
	}
}

.prism-previewer-time:before {
	border-radius: 50%;
	background: #fff;
}
.prism-previewer-time:after {
	margin-top: 4px;
}
.prism-previewer-time svg {
	width: 32px;
	height: 32px;
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	transform: rotate(-90deg);
}
.prism-previewer-time circle {
	fill: transparent;
	stroke: hsl(200, 10%, 20%);
	stroke-opacity: 0.9;
	stroke-width: 32;
	stroke-dasharray: 0, 500;
	stroke-dashoffset: 0;
	-webkit-animation: prism-previewer-time linear infinite 3s;
	-moz-animation: prism-previewer-time linear infinite 3s;
	-o-animation: prism-previewer-time linear infinite 3s;
	animation: prism-previewer-time linear infinite 3s;
}
div.code-toolbar {
	position: relative;
}

div.code-toolbar > .toolbar {
	position: absolute;
	top: .3em;
	right: .2em;
	transition: opacity 0.3s ease-in-out;
	opacity: 0;
}

div.code-toolbar:hover > .toolbar {
	opacity: 1;
}

/* Separate line b/c rules are thrown out if selector is invalid.
   IE11 and old Edge versions don't support :focus-within. */
div.code-toolbar:focus-within > .toolbar {
	opacity: 1;
}

div.code-toolbar > .toolbar .toolbar-item {
	display: inline-block;
}

div.code-toolbar > .toolbar a {
	cursor: pointer;
}

div.code-toolbar > .toolbar button {
	background: none;
	border: 0;
	color: inherit;
	font: inherit;
	line-height: normal;
	overflow: visible;
	padding: 0;
	-webkit-user-select: none; /* for button */
	-moz-user-select: none;
	-ms-user-select: none;
}

div.code-toolbar > .toolbar a,
div.code-toolbar > .toolbar button,
div.code-toolbar > .toolbar span {
	color: #bbb;
	font-size: .8em;
	padding: 0 .5em;
	background: #f5f2f0;
	background: rgba(224, 224, 224, 0.2);
	box-shadow: 0 2px 0 0 rgba(0,0,0,0.2);
	border-radius: .5em;
}

div.code-toolbar > .toolbar a:hover,
div.code-toolbar > .toolbar a:focus,
div.code-toolbar > .toolbar button:hover,
div.code-toolbar > .toolbar button:focus,
div.code-toolbar > .toolbar span:hover,
div.code-toolbar > .toolbar span:focus {
	color: inherit;
	text-decoration: none;
}
</style>
<script src="/assets/prism.js"></script>
<script>
var goTop = document.createElement("a");

goTop.innerHTML = '<i class="material-icons">&#xE5D8;</i>';

goTop.style = "bottom:0;right:27%;position:absolute;z-index: 9999";

goTop.setAttribute("href", "#h_one");

document.body.appendChild(goTop);

</script>


</div>
<script>
setTimeout(function() {
parent = document.querySelector('ins.adsbygoogle');
children = parent.children; // [<div class="child1
var chil_len = children.length;
if(chil_len==0){
document.getElementById("w3r_body").style.display = "none";	
var paragraph = document.createElement("h2");
var text = document.createTextNode("We are using an ad blocker. We rely on advertisement to fund our site. Please disable adblocker and refresh the page to continue reading.");
paragraph.setAttribute('style','color:#336699;font-weight:500;margin-top: 10%;margin-left:2%');
paragraph.appendChild(text);
document.body.appendChild(paragraph);
}
}, 15000);
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996" integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ==" data-cf-beacon='{"rayId":"7b689ebf3d8d40eb","version":"2023.3.0","b":1,"token":"5dac2d8f3d14427aab9e85de0419fad9","si":100}' crossorigin="anonymous"></script>
</body>
</html>
