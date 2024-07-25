
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>MySQL CREATE VIEW, REPLACE VIEW, DROP VIEW Statements</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website">
<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.">
<meta property="og:image" content="https://www.w3schools.com/images/w3schools_logo_436_2.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="436">
<meta property="og:image:height" content="228">
<meta property="og:description" content="W3Schools offers free online tutorials, references and exercises in all the major languages of the web. Covering popular subjects like HTML, CSS, JavaScript, Python, SQL, Java, and many, many more.">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="preload" href="/lib/fonts/fontawesome.woff2?14663396" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/source-code-pro-v14-latin-regular.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/roboto-mono-v13-latin-500.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/source-sans-pro-v14-latin-700.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/source-sans-pro-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/freckle-face-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="stylesheet" href="/lib/w3schools31.css">

<!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTCFC3S');

var subjectFolder = location.pathname;
subjectFolder = subjectFolder.replace("/", "");
if (subjectFolder.startsWith("python/") == true ) {
  if (subjectFolder.includes("/numpy/") == true ) {
    subjectFolder = "numpy/"
  } else if (subjectFolder.includes("/pandas/") == true ) {
      subjectFolder = "pandas/"
  } else if (subjectFolder.includes("/scipy/") == true ) {
      subjectFolder = "scipy/"
  }
}
subjectFolder = subjectFolder.substr(0, subjectFolder.indexOf("/"));
</script>
<!-- End Google Tag Manager -->

<script src="/lib/uic.js?v=1.0.5"></script>
<script data-cfasync="false" type="text/javascript">
var k42 = false;

k42 = true;

</script>
<script data-cfasync="false" type="text/javascript">
    window.snigelPubConf = {
    "adengine": {

      "activeAdUnits": ["main_leaderboard", "sidebar_top", "bottom_left", "bottom_right"]

  }
}
uic_r_a()
</script>
<script async data-cfasync="false" src="https://cdn.snigelweb.com/adengine/w3schools.com/loader.js" type="text/javascript"></script>
<script src="/lib/common-deps.js?v=1.0.1"></script>
<script src="/lib/user-session.js?v=1.0.28"></script>
<script src="/lib/my-learning.js?v=1.0.19"></script>
<script type='text/javascript'>
var stickyadstatus = "";
function fix_stickyad() {
  document.getElementById("stickypos").style.position = "sticky";
  var elem = document.getElementById("stickyadcontainer");
  if (!elem) {return false;}
  if (document.getElementById("skyscraper")) {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("skyscraper"), "width").replace("px", ""));  
    }
  else {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("right"), "width").replace("px", ""));  
  }
  elem.style.width = skyWidth + "px";
  if (window.innerWidth <= 992) {
    elem.style.position = "";
    elem.style.top = stickypos + "px";
    return false;
  }
  var stickypos = document.getElementById("stickypos").offsetTop;
  var docTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
  var adHeight = Number(w3_getStyleValue(elem, "height").replace("px", ""));
  if (stickyadstatus == "") {
    if ((stickypos - docTop) < 60) {
      elem.style.position = "fixed";
      elem.style.top = "60px";
      stickyadstatus = "sticky";
      document.getElementById("stickypos").style.position = "sticky";

    }
  } else {
    if ((docTop + 60) - stickypos < 0) {  
      elem.style.position = "";
      elem.style.top = stickypos + "px";
      stickyadstatus = "";
      document.getElementById("stickypos").style.position = "static";
    }
  }
  if (stickyadstatus == "sticky") {
    if ((docTop + adHeight + 60) > document.getElementById("footer").offsetTop) {
      elem.style.position = "absolute";
      elem.style.top = (document.getElementById("footer").offsetTop - adHeight) + "px";
      document.getElementById("stickypos").style.position = "static";
    } else {
        elem.style.position = "fixed";
        elem.style.top = "60px";
        stickyadstatus = "sticky";
        document.getElementById("stickypos").style.position = "sticky";
    }
  }
}
function w3_getStyleValue(elmnt,style) {
  if (window.getComputedStyle) {
    return window.getComputedStyle(elmnt,null).getPropertyValue(style);
  } else {
    return elmnt.currentStyle[style];
  }
}
</script>

</head><body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTCFC3S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<style>
#darkmodemenu {
  position:absolute;
  top:-40px;
  right:16px;
  padding:5px 20px 10px 18px;
  border-bottom-left-radius:5px;
  border-bottom-right-radius:5px;
  z-index:-1;
  transition: top 0.2s;
  user-select: none;
}
#darkmodemenu input,#darkmodemenu label {
  cursor:pointer;
}
</style>
<script>
(
function setThemeMode() {
  var x = localStorage.getItem("preferredmode");
  var y = localStorage.getItem("preferredpagemode");  
  if (x == "dark") {
    document.body.className += " darktheme";
  }
  if (y == "dark") {
    document.body.className += " darkpagetheme";
  }
})();
</script>
<div id="pagetop" class="w3-bar w3-card-2 notranslate">
  <a href="https://www.w3schools.com" class="w3-bar-item w3-button w3-hover-none w3-left w3-padding-16" title="Home" style="width:77px">
    <i class="fa fa-logo ws-text-green ws-hover-text-green" style="position:relative;font-size:42px!important;"></i>
  </a>

<style>
.topnavmain_pro {
  background-color:#9763f6;
  color:#fff;
}
.topnavmain_pro:hover {
  background-color:#7d53cc!important;
  color:#fff!important;
}

@media screen and (max-width: 1160px) {
  .ws-hide-1160 {
    display: none !important;
  }
}
@media screen and (max-width: 1300px) {
  .ws-hide-1300 {
    display: none !important;
  }
}
@media screen and (max-width: 700px) {
  .ws-hide-700 {
    display: none !important;
  }
}
@media screen and (max-width:380px) {
  #w3loginbtn {
    width:90px!important;
    padding-left:2px!important;
    padding-right:2px;
  }
  #signupbtn_topnav,#spacesbtn_topnav {
    display:none!important;
  }
}

</style>

  <a class="w3-bar-item w3-button w3-hide-small barex bar-item-hover w3-padding-24" href="javascript:void(0)" onclick="w3_open_nav('tutorials')" id="navbtn_tutorials" title="Tutorials" style="width:116px">Tutorials <i class='fa fa-caret-down' style="font-size:20px;"></i><i class='fa fa-caret-up' style="display:none"></i></a>
  <a class="w3-bar-item w3-button w3-hide-small barex bar-item-hover w3-padding-24" href="javascript:void(0)" onclick="w3_open_nav('references')" id="navbtn_references" title="References" style="width:132px">References <i class='fa fa-caret-down' style="font-size:20px;"></i><i class='fa fa-caret-up' style="display:none"></i></a>
  <a class="w3-bar-item w3-button w3-hide-small barex bar-item-hover w3-padding-24 ws-hide-800" href="javascript:void(0)" onclick="w3_open_nav('exercises')" id="navbtn_exercises" title="Exercises" style="width:118px">Exercises <i class='fa fa-caret-down' style="font-size:20px;"></i><i class='fa fa-caret-up' style="display:none"></i></a>

  <a class="w3-bar-item w3-button bar-item-hover w3-padding-24 barex ws-hide-1300" href="/bootcamp/index.php" title="Web Development Bootcamp">Bootcamp</a>

  <a class="w3-bar-item w3-button bar-item-hover w3-padding-24" href="javascript:void(0)" onclick="w3_open()" id="navbtn_menu" title="Menu" style="width:93px">Menu <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style="display:none"></i></a>

  <div id="loginactioncontainer" class="w3-right w3-padding-16" style="margin-left:1px;width:55px">
    <div id="mypagediv"></div>
      <!-- <button id="w3loginbtn" style="border:none;display:none;cursor:pointer" class="login w3-right w3-hover-greener" onclick='w3_open_nav("login")'>LOG IN</button>-->
      <a id="w3loginbtn" title="Login to your account" class="w3-bar-item w3-btn bar-item-hover w3-right ws-light-green" style="display:none;width:112px;background-color:white;color:black;padding-left:39px;position:relative;z-index:4;border-radius:25px;" href="https://profile.w3schools.com/log-in?redirect_url=https%3A%2F%2Fmy-learning.w3schools.com" target="_self">Log in</a>
  </div>

  <div class="w3-right w3-padding-16">
    <a id="spacesbtn_topnav" style="display:none;width: 93px;border-radius: 25px; margin-right: 20px;" class="w3-bar-item w3-button w3-right w3x-hide-small barex ws-green ws-hover-green" href="https://spaces.w3schools.com" title="Go to Your Space">Spaces</a>  
    <a id="signupbtn_topnav" class="w3-bar-item w3-button w3-right barex ws-green ws-hover-green" style="width: 93px;border-radius: 25px; margin-right: 20px;position:relative;z-index:5;" href="/signup/index.html" title="Sign Up to Improve Your Learning Experience">Sign Up</a>
    <a class="w3-bar-item w3-button w3-right ws-hide-1066 w3-hide-small barex ws-yellow ws-hover-yellow gt-btn-top-spaces" style="width: 150px;border-radius: 25px; margin-right: 15px;" href="/spaces/index.html" title="Get Your Own Website With W3Schools Spaces">Create Website</a>
    <a class="w3-bar-item w3-button w3-right ws-hide-900 w3-hide-small barex ws-pink ws-hover-pink gt-btn-top-cert" style="border-radius: 25px; margin-right: 15px;" href="https://shop.w3schools.com/collections/course-catalog" target="_blank" id="cert_navbtn" title="Courses">Get Certified</a>
    <a class="w3-bar-item w3-button w3-right w3-hide-small ws-hide-1160 barex topnavmain_pro gt-btn-top-pro" style="border-radius: 25px; margin-right: 15px;" href="/pro/index.php" title="Upgrade And Unlock Powerful Features"><svg style="position:relative;top:2px;margin-right:2px;" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.65723 6.24707C6.76704 5.91764 7.233 5.91765 7.34281 6.24707L7.98828 8.1835C8.276 9.04666 8.95332 9.72399 9.81648 10.0117L11.7529 10.6572C12.0824 10.767 12.0824 11.233 11.7529 11.3428L9.81649 11.9883C8.95332 12.276 8.27599 12.9533 7.98828 13.8165L7.34281 15.7529C7.233 16.0823 6.76704 16.0823 6.65723 15.7529L6.01173 13.8165C5.72401 12.9533 5.04669 12.276 4.18353 11.9883L2.24707 11.3428C1.91764 11.233 1.91764 10.767 2.24707 10.6572L4.18353 10.0117C5.04669 9.72399 5.72401 9.04667 6.01173 8.18352L6.65723 6.24707Z" fill="white"></path><path d="M2.79434 1.14824C2.86023 0.950586 3.1398 0.950587 3.20569 1.14824L3.59297 2.3101C3.7656 2.828 4.172 3.2344 4.6899 3.40703L5.85177 3.79432C6.04942 3.86021 6.04942 4.13978 5.85177 4.20567L4.6899 4.59296C4.172 4.76559 3.7656 5.17199 3.59297 5.68989L3.20569 6.85176C3.13981 7.04941 2.86023 7.04942 2.79434 6.85176L2.40704 5.68988C2.23441 5.17198 1.82801 4.76559 1.31012 4.59296L0.148241 4.20567C-0.0494137 4.13978 -0.0494138 3.86021 0.148241 3.79432L1.31012 3.40703C1.82802 3.2344 2.23441 2.82801 2.40704 2.31011L2.79434 1.14824Z" fill="white"></path><path d="M9.8629 0.0988265C9.90682 -0.032943 10.0932 -0.0329419 10.1371 0.098828L10.3953 0.873401C10.5104 1.21867 10.7813 1.4896 11.1266 1.60469L11.9012 1.86288C12.0329 1.9068 12.0329 2.09319 11.9012 2.13711L11.1266 2.39531C10.7813 2.51039 10.5104 2.78133 10.3953 3.12659L10.1371 3.90117C10.0932 4.03294 9.90682 4.03294 9.8629 3.90117L9.6047 3.12659C9.48961 2.78132 9.21868 2.5104 8.87342 2.39531L8.09883 2.13711C7.96706 2.09319 7.96706 1.9068 8.09883 1.86288L8.87342 1.60469C9.21868 1.4896 9.48961 1.21867 9.6047 0.873408L9.8629 0.0988265Z" fill="white"></path></svg> Upgrade</a>    
<!--    <a class="ws-light-green ws-hover-green w3-bar-item w3-button w3-right w3-hide-small ws-hide-1300 barex" style="border-radius: 25px; margin-right: 15px;" href="/signup/index.html" title="Sign Up to Improve Your Learning Experience">Sign Up</a>    -->
  </div>  
</div>

<div style='display:none;position:absolute;z-index:4;right:52px;height:44px;background-color:#282A35;letter-spacing:normal;' id='googleSearch'>
  <div class='gcse-search'></div>
</div>
<div style='display:none;position:absolute;z-index:3;right:111px;height:44px;background-color:#282A35;text-align:right;padding-top:9px;' id='google_translate_element'></div>

<div class='w3-card-2 topnav notranslate' id='topnav'>
  <div style="overflow:auto;">
    <div class="w3-bar w3-left" style="width:100%;overflow:hidden;height:44px">
      <a href='javascript:void(0);' class='topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button' onclick='open_menu()' title='Menu'></a>
      <a href='/default.asp' class='topnav-icons fa fa-home w3-left w3-bar-item w3-button' title='Home'></a>
      <a class="w3-bar-item w3-button" href='/html/default.asp' title='HTML Tutorial' style="padding-left:18px!important;padding-right:18px!important;">HTML</a>
      <a class="w3-bar-item w3-button" href='/css/default.asp' title='CSS Tutorial'>CSS</a>
      <a class="w3-bar-item w3-button" href='/js/default.asp' title='JavaScript Tutorial'>JAVASCRIPT</a>
      <a class="w3-bar-item w3-button" href='/sql/default.asp' title='SQL Tutorial'>SQL</a>
      <a class="w3-bar-item w3-button" href='/python/default.asp' title='Python Tutorial'>PYTHON</a>
      <a class="w3-bar-item w3-button" href='/java/default.asp' title='Java Tutorial'>JAVA</a>
      <a class="w3-bar-item w3-button" href='/php/default.asp' title='PHP Tutorial'>PHP</a>
      <a class="w3-bar-item w3-button" href='/bootstrap/bootstrap_ver.asp' title='Bootstrap Tutorial'>BOOTSTRAP</a>
      <a class="w3-bar-item w3-button" href='/howto/default.asp' title='How To'>HOW TO</a>
      <a class="w3-bar-item w3-button" href='/w3css/default.asp' title='W3.CSS Tutorial'>W3.CSS</a>
      <a class="w3-bar-item w3-button" href='/c/index.php' title='C Tutorial'>C</a>
      <a class="w3-bar-item w3-button" href='/cpp/default.asp' title='C++ Tutorial'>C++</a>
      <a class="w3-bar-item w3-button" href='/cs/index.php' title='C# Tutorial'>C#</a>
      <a class="w3-bar-item w3-button" href='/react/default.asp' title='React Tutorial'>REACT</a>
      <a class="w3-bar-item w3-button" href='/r/default.asp' title='R Tutorial'>R</a>
      <a class="w3-bar-item w3-button" href='/jquery/default.asp' title='jQuery Tutorial'>JQUERY</a>
      <a class="w3-bar-item w3-button" href='/django/index.php' title='Django Tutorial'>DJANGO</a>
      <a class="w3-bar-item w3-button" href='/typescript/index.php' title='Typescript Tutorial'>TYPESCRIPT</a>      
      <a class="w3-bar-item w3-button" href='/nodejs/default.asp' title='NodeJS Tutorial'>NODEJS</a>      
      <a class="w3-bar-item w3-button" href='/mysql/default.asp' title='MySQL Tutorial'>MYSQL</a>                  
      <a href='javascript:void(0);' class='topnav-icons fa w3-right w3-bar-item w3-button' onclick='gSearch(this)' title='Search W3Schools'>&#xe802;</a>
      <a href='javascript:void(0);' class='topnav-icons fa w3-right w3-bar-item w3-button' onclick='gTra(this)' title='Translate W3Schools'>&#xe801;</a>
<!--      <a href='javascript:void(0);' class='topnav-icons fa w3-right w3-bar-item w3-button' onclick='changecodetheme(this)' title='Toggle Dark Code Examples'>&#xe80b;</a>-->
      <a href='javascript:void(0);' class='topnav-icons fa w3-right w3-bar-item w3-button' onmouseover="mouseoverdarkicon()" onmouseout="mouseoutofdarkicon()" onclick='changepagetheme(2)'>&#xe80b;</a>


      <!--
      <a class="w3-bar-item w3-button w3-right" id='topnavbtn_exercises' href='javascript:void(0);' onclick='w3_open_nav("exercises")' title='Exercises'>EXERCISES <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>
      -->
      
    </div>
    
<div id="darkmodemenu" class="ws-black" onmouseover="mouseoverdarkicon()" onmouseout="mouseoutofdarkicon()">
<input id="radio_darkpage" type="checkbox" name="radio_theme_mode" onclick="click_darkpage()"><label for="radio_darkpage"> Dark mode</label>
<br>
<input id="radio_darkcode" type="checkbox" name="radio_theme_mode" onclick="click_darkcode()"><label for="radio_darkcode"> Dark code</label>
</div>

<nav id="nav_tutorials" class="w3-hide-small" style="position:absolute;padding-bottom:60px;">
 <div class="w3-content" style="max-width:1100px;font-size:18px">
 <span onclick="w3_close_nav('tutorials')" class="w3-button w3-xxxlarge w3-display-topright w3-hover-white sectionxsclosenavspan" style="padding-right:30px;padding-left:30px;">&times;</span><br>
 <div class="w3-row-padding w3-bar-block">
  <div class="w3-container" style="padding-left:13px">
   <h2 style="color:#FFF4A3;"><b>Tutorials</b></h2>
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top">HTML and CSS</h3>
   <a class="w3-bar-item w3-button" href="/html/default.asp">Learn HTML</a>
   <a class="w3-bar-item w3-button" href="/css/default.asp">Learn CSS</a>
   <a class="w3-bar-item w3-button" href="/css/css_rwd_intro.asp" title="Responsive Web Design">Learn RWD</a>
   <a class="w3-bar-item w3-button" href="/bootstrap/bootstrap_ver.asp">Learn Bootstrap</a>
   <a class="w3-bar-item w3-button" href="/w3css/default.asp">Learn W3.CSS</a>
   <a class="w3-bar-item w3-button" href="/colors/default.asp">Learn Colors</a>
   <a class="w3-bar-item w3-button" href="/icons/default.asp">Learn Icons</a>
   <a class="w3-bar-item w3-button" href="/graphics/default.asp">Learn Graphics</a>
   <a class="w3-bar-item w3-button" href='/graphics/svg_intro.asp'>Learn SVG</a>
   <a class="w3-bar-item w3-button" href='/graphics/canvas_intro.asp'>Learn Canvas</a>
   <a class="w3-bar-item w3-button" href="/howto/default.asp">Learn How To</a>
   <a class="w3-bar-item w3-button" href="/sass/default.php">Learn Sass</a>   
   <div class="w3-hide-large w3-hide-small">
   <h3 class="w3-margin-top">Data Analytics</h3>
   <a class="w3-bar-item w3-button" href="/ai/default.asp">Learn AI</a>
   <a class="w3-bar-item w3-button" href="/python/python_ml_getting_started.asp">Learn Machine Learning</a>
   <a class="w3-bar-item w3-button" href="/datascience/default.asp">Learn Data Science</a> 
   <a class="w3-bar-item w3-button" href="/python/numpy/default.asp">Learn NumPy</a>       
   <a class="w3-bar-item w3-button" href="/python/pandas/default.asp">Learn Pandas</a>    
   <a class="w3-bar-item w3-button" href="/python/scipy/index.php">Learn SciPy</a>    
   <a class="w3-bar-item w3-button" href="/python/matplotlib_intro.asp">Learn Matplotlib</a>    
   <a class="w3-bar-item w3-button" href="/statistics/index.php">Learn Statistics</a>
   <a class="w3-bar-item w3-button" href="/excel/index.php">Learn Excel</a>

   <h3 class="w3-margin-top">XML Tutorials</h3>
   <a class="w3-bar-item w3-button" href="/xml/default.asp">Learn XML</a>
   <a class="w3-bar-item w3-button" href='/xml/ajax_intro.asp'>Learn XML AJAX</a>
   <a class="w3-bar-item w3-button" href="/xml/dom_intro.asp">Learn XML DOM</a>
   <a class="w3-bar-item w3-button" href='/xml/xml_dtd_intro.asp'>Learn XML DTD</a>
   <a class="w3-bar-item w3-button" href='/xml/schema_intro.asp'>Learn XML Schema</a>
   <a class="w3-bar-item w3-button" href="/xml/xsl_intro.asp">Learn XSLT</a>
   <a class="w3-bar-item w3-button" href='/xml/xpath_intro.asp'>Learn XPath</a>
   <a class="w3-bar-item w3-button" href='/xml/xquery_intro.asp'>Learn XQuery</a>
  </div>
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top">JavaScript</h3>
   <a class="w3-bar-item w3-button" href="/js/default.asp">Learn JavaScript</a>
   <a class="w3-bar-item w3-button" href="/jquery/default.asp">Learn jQuery</a>
   <a class="w3-bar-item w3-button" href="/react/default.asp">Learn React</a>
   <a class="w3-bar-item w3-button" href="/angular/default.asp">Learn AngularJS</a>
   <a class="w3-bar-item w3-button" href="/js/js_json_intro.asp">Learn JSON</a>
   <a class="w3-bar-item w3-button" href="/js/js_ajax_intro.asp">Learn AJAX</a>
   <a class="w3-bar-item w3-button" href="/appml/default.asp">Learn AppML</a>
   <a class="w3-bar-item w3-button" href="/w3js/default.asp">Learn W3.JS</a>

   <h3 class="w3-margin-top">Programming</h3>
   <a class="w3-bar-item w3-button" href="/python/default.asp">Learn Python</a>
   <a class="w3-bar-item w3-button" href="/java/default.asp">Learn Java</a>
   <a class="w3-bar-item w3-button" href="/c/index.php">Learn C</a>
   <a class="w3-bar-item w3-button" href="/cpp/default.asp">Learn C++</a>
   <a class="w3-bar-item w3-button" href="/cs/index.php">Learn C#</a>
   <a class="w3-bar-item w3-button" href="/r/default.asp">Learn R</a>
   <a class="w3-bar-item w3-button" href="/kotlin/index.php">Learn Kotlin</a>
   <a class="w3-bar-item w3-button" href="/go/index.php">Learn Go</a>
   <a class="w3-bar-item w3-button" href="/django/index.php">Learn Django</a>
   <a class="w3-bar-item w3-button" href="/typescript/index.php">Learn TypeScript</a>
  </div> 
 <div class="w3-col l3 m6">
   <h3 class="w3-margin-top">Server Side</h3>
   <a class="w3-bar-item w3-button" href="/sql/default.asp">Learn SQL</a>
   <a class="w3-bar-item w3-button" href="/mysql/default.asp">Learn MySQL</a>
   <a class="w3-bar-item w3-button" href="/php/default.asp">Learn PHP</a>
   <a class="w3-bar-item w3-button" href='/asp/default.asp'>Learn ASP</a>
   <a class="w3-bar-item w3-button" href='/nodejs/default.asp'>Learn Node.js</a>
   <a class="w3-bar-item w3-button" href='/nodejs/nodejs_raspberrypi.asp'>Learn Raspberry Pi</a>
   <a class="w3-bar-item w3-button" href='/git/default.asp'>Learn Git</a>
   <a class="w3-bar-item w3-button" href='/mongodb/index.php'>Learn MongoDB</a>
   <a class="w3-bar-item w3-button" href='/aws/index.php'>Learn AWS Cloud</a>

   <h3 class="w3-margin-top">Web Building</h3>
   <a class="w3-bar-item w3-button" href="/spaces/index.html" title="Get Your Own Website With W3shools Spaces">Create a Website <span class="ribbon-topnav ws-yellow">NEW</span></a>
   <a class="w3-bar-item w3-button" href="/where_to_start.asp">Where To Start</a>
   <a class="w3-bar-item w3-button" href="/w3css/w3css_templates.asp">Web Templates</a>
   <a class="w3-bar-item w3-button" href="/browsers/default.asp">Web Statistics</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com" target="_blank">Web Certificates</a>
   <a class="w3-bar-item w3-button" href="/whatis/default.asp">Web Development</a>
   <a class="w3-bar-item w3-button" href='/tryit/default.asp'>Code Editor</a>
   <a class="w3-bar-item w3-button" href="/typingspeed/default.asp">Test Your Typing Speed</a>
   <a class="w3-bar-item w3-button" href="/codegame/index.html" target="_blank">Play a Code Game</a>
   <a class="w3-bar-item w3-button" href="/cybersecurity/index.php">Cyber Security</a>
   <a class="w3-bar-item w3-button" href="/accessibility/index.php">Accessibility</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/pages/newsletter" target="_blank">Join our Newsletter</a>
  </div>
  <div class="w3-col l3 m6 w3-hide-medium">
   <h3 class="w3-margin-top">Data Analytics</h3>
   <a class="w3-bar-item w3-button" href="/ai/default.asp">Learn AI</a>
   <a class="w3-bar-item w3-button" href="/python/python_ml_getting_started.asp">Learn Machine Learning</a>
   <a class="w3-bar-item w3-button" href="/datascience/default.asp">Learn Data Science</a> 
   <a class="w3-bar-item w3-button" href="/python/numpy/default.asp">Learn NumPy</a>    
   <a class="w3-bar-item w3-button" href="/python/pandas/default.asp">Learn Pandas</a>    
   <a class="w3-bar-item w3-button" href="/python/scipy/index.php">Learn SciPy</a>    
   <a class="w3-bar-item w3-button" href="/python/matplotlib_intro.asp">Learn Matplotlib</a>    
   <a class="w3-bar-item w3-button" href="/statistics/index.php">Learn Statistics</a>
   <a class="w3-bar-item w3-button" href="/excel/index.php">Learn Excel</a>
   <a class="w3-bar-item w3-button" href="/googlesheets/index.php">Learn Google Sheets</a>

   <h3 class="w3-margin-top">XML Tutorials</h3>
   <a class="w3-bar-item w3-button" href="/xml/default.asp">Learn XML</a>
   <a class="w3-bar-item w3-button" href='/xml/ajax_intro.asp'>Learn XML AJAX</a>
   <a class="w3-bar-item w3-button" href="/xml/dom_intro.asp">Learn XML DOM</a>
   <a class="w3-bar-item w3-button" href='/xml/xml_dtd_intro.asp'>Learn XML DTD</a>
   <a class="w3-bar-item w3-button" href='/xml/schema_intro.asp'>Learn XML Schema</a>
   <a class="w3-bar-item w3-button" href="/xml/xsl_intro.asp">Learn XSLT</a>
   <a class="w3-bar-item w3-button" href='/xml/xpath_intro.asp'>Learn XPath</a>
   <a class="w3-bar-item w3-button" href='/xml/xquery_intro.asp'>Learn XQuery</a>
  </div>
 </div>
 </div>
 <br class="hidesm">
</nav>

<nav id="nav_references" class="w3-hide-small" style="position:absolute;padding-bottom:60px;">
 <div class="w3-content" style="max-width:1100px;font-size:18px">
 <span onclick="w3_close_nav('references')" class="w3-button w3-xxxlarge w3-display-topright w3-hover-white sectionxsclosenavspan" style="padding-right:30px;padding-left:30px;">&times;</span><br>
 <div class="w3-row-padding w3-bar-block">
 <div class="w3-container" style="padding-left:13px">
   <h2 style="color:#FFF4A3;"><b>References</b></h2>
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top">HTML</h3>
   <a class="w3-bar-item w3-button" href='/tags/default.asp'>HTML Tag Reference</a>
   <a class="w3-bar-item w3-button" href='/tags/ref_html_browsersupport.asp'>HTML Browser Support</a>   
   <a class="w3-bar-item w3-button" href='/tags/ref_eventattributes.asp'>HTML Event Reference</a>
   <a class="w3-bar-item w3-button" href='/colors/default.asp'>HTML Color Reference</a>
   <a class="w3-bar-item w3-button" href='/tags/ref_attributes.asp'>HTML Attribute Reference</a>
   <a class="w3-bar-item w3-button" href='/tags/ref_canvas.asp'>HTML Canvas Reference</a>
   <a class="w3-bar-item w3-button" href='/graphics/svg_reference.asp'>HTML SVG Reference</a>
   <a class="w3-bar-item w3-button" href='/graphics/google_maps_reference.asp'>Google Maps Reference</a>
   <h3 class="w3-margin-top">CSS</h3>
   <a class="w3-bar-item w3-button" href='/cssref/index.php'>CSS Reference</a>
   <a class="w3-bar-item w3-button" href='/cssref/css3_browsersupport.asp'>CSS Browser Support</a>
   <a class="w3-bar-item w3-button" href='/cssref/css_selectors.asp'>CSS Selector Reference</a>
   <a class="w3-bar-item w3-button" href='/bootstrap/bootstrap_ref_all_classes.asp'>Bootstrap 3 Reference</a>
   <a class="w3-bar-item w3-button" href='/bootstrap4/bootstrap_ref_all_classes.asp'>Bootstrap 4 Reference</a>
   <a class="w3-bar-item w3-button" href='/w3css/w3css_references.asp'>W3.CSS Reference</a>
   <a class="w3-bar-item w3-button" href='/icons/icons_reference.asp'>Icon Reference</a>
   <a class="w3-bar-item w3-button" href='/sass/sass_functions_string.php'>Sass Reference</a>
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top">JavaScript</h3>
   <a class="w3-bar-item w3-button" href='/jsref/default.asp'>JavaScript Reference</a>
   <a class="w3-bar-item w3-button" href='/jsref/default.asp'>HTML DOM Reference</a>
   <a class="w3-bar-item w3-button" href='/jquery/jquery_ref_overview.asp'>jQuery Reference</a>
   <a class="w3-bar-item w3-button" href='/angular/angular_ref_directives.asp'>AngularJS Reference</a>
   <a class="w3-bar-item w3-button" href="/appml/appml_reference.asp">AppML Reference</a>
   <a class="w3-bar-item w3-button" href="/w3js/w3js_references.asp">W3.JS Reference</a>

   <h3 class="w3-margin-top">Programming</h3>
   <a class="w3-bar-item w3-button" href='/python/python_reference.asp'>Python Reference</a>
   <a class="w3-bar-item w3-button" href='/java/java_ref_keywords.asp'>Java Reference</a>
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top">Server Side</h3>
   <a class="w3-bar-item w3-button" href='/sql/sql_ref_keywords.asp'>SQL Reference</a>
   <a class="w3-bar-item w3-button" href='/mysql/mysql_ref_functions.asp'>MySQL Reference</a>
   <a class="w3-bar-item w3-button" href='/php/php_ref_overview.asp'>PHP Reference</a>
   <a class="w3-bar-item w3-button" href='/asp/asp_ref_response.asp'>ASP Reference</a>
   <h3 class="w3-margin-top">XML</h3>
   <a class="w3-bar-item w3-button" href='/xml/dom_nodetype.asp'>XML DOM Reference</a>
   <a class="w3-bar-item w3-button" href='/xml/dom_http.asp'>XML Http Reference</a>
   <a class="w3-bar-item w3-button" href='/xml/xsl_elementref.asp'>XSLT Reference</a>
   <a class="w3-bar-item w3-button" href='/xml/schema_elements_ref.asp'>XML Schema Reference</a>
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top">Character Sets</h3>
   <a class="w3-bar-item w3-button" href='/charsets/default.asp'>HTML Character Sets</a>
   <a class="w3-bar-item w3-button" href='/charsets/ref_html_ascii.asp'>HTML ASCII</a>
   <a class="w3-bar-item w3-button" href='/charsets/ref_html_ansi.asp'>HTML ANSI</a>
   <a class="w3-bar-item w3-button" href='/charsets/ref_html_ansi.asp'>HTML Windows-1252</a>
   <a class="w3-bar-item w3-button" href='/charsets/ref_html_8859.asp'>HTML ISO-8859-1</a>
   <a class="w3-bar-item w3-button" href='/charsets/ref_html_symbols.asp'>HTML Symbols</a>
   <a class="w3-bar-item w3-button" href='/charsets/ref_html_utf8.asp'>HTML UTF-8</a>
  </div>
 </div>
 <br class="hidesm">
 </div>
</nav>

<nav id="nav_exercises" class="w3-hide-small" style="position:absolute;padding-bottom:60px;">
 <div class="w3-content" style="max-width:1100px;font-size:18px">
 <span onclick="w3_close_nav('exercises')" class="w3-button w3-xxxlarge w3-display-topright w3-hover-white sectionxsclosenavspan" style="padding-right:30px;padding-left:30px;">&times;</span><br>
 <div class="w3-row-padding w3-bar-block">
 <div class="w3-container" style="padding-left:13px">
   <h2 style="color:#FFF4A3;"><b>Exercises and Quizzes</b></h2>
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top"><a class="ws-btn ws-yellow w3-hover-text-white" style="width:155px;font-size:21px" href="/exercises/index.php">Exercises</a></h3>
   <a class="w3-bar-item w3-button" href="/html/html_exercises.asp">HTML Exercises</a>
   <a class="w3-bar-item w3-button" href="/css/css_exercises.asp">CSS Exercises</a>
   <a class="w3-bar-item w3-button" href="/js/js_exercises.asp">JavaScript Exercises</a>
   <a class="w3-bar-item w3-button" href="/python/python_exercises.asp">Python Exercises</a>
   <a class="w3-bar-item w3-button" href="/sql/sql_exercises.asp">SQL Exercises</a>
   <a class="w3-bar-item w3-button" href="/php/php_exercises.asp">PHP Exercises</a>
   <a class="w3-bar-item w3-button" href="/java/java_exercises.asp">Java Exercises</a>
   <a class="w3-bar-item w3-button" href="/c/c_exercises.php">C Exercises</a>
   <a class="w3-bar-item w3-button" href="/cpp/cpp_exercises.asp">C++ Exercises</a>
   <a class="w3-bar-item w3-button" href="/cs/cs_exercises.asp">C# Exercises</a>
   <a class="w3-bar-item w3-button" href="/jquery/jquery_exercises.asp">jQuery Exercises</a>
   <a class="w3-bar-item w3-button" href="/react/react_exercises.asp">React.js Exercises</a>      
   <a class="w3-bar-item w3-button" href="/mysql/mysql_exercises.asp">MySQL Exercises</a>
   <a class="w3-bar-item w3-button" href="/bootstrap5/bootstrap_exercises.php">Bootstrap 5 Exercises</a>
   <a class="w3-bar-item w3-button" href="/bootstrap4/bootstrap_exercises.asp">Bootstrap 4 Exercises</a>
   <a class="w3-bar-item w3-button" href="/bootstrap/bootstrap_exercises.asp">Bootstrap 3 Exercises</a>
   <a class="w3-bar-item w3-button" href="/python/numpy/numpy_exercises.asp">NumPy Exercises</a>
   <a class="w3-bar-item w3-button" href="/python/pandas/pandas_exercises.asp">Pandas Exercises</a>
   <a class="w3-bar-item w3-button" href="/python/scipy/scipy_exercises.php">SciPy Exercises</a>
   <a class="w3-bar-item w3-button" href="/typescript/typescript_exercises.php">TypeScript Exercises</a>
   <a class="w3-bar-item w3-button" href="/excel/excel_exercises.php">Excel Exercises</a>
   <a class="w3-bar-item w3-button" href="/r/r_exercises.asp">R Exercises</a>
   <a class="w3-bar-item w3-button" href="/git/git_exercises.asp">Git Exercises</a>
   <a class="w3-bar-item w3-button" href="/kotlin/kotlin_exercises.php">Kotlin Exercises</a>
   <a class="w3-bar-item w3-button" href="/go/go_exercises.php">Go Exercises</a>
   <a class="w3-bar-item w3-button" href="/mongodb/mongodb_exercises.php">MongoDB Exercises</a>      
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top"><a class="ws-btn ws-yellow w3-hover-text-white" style="width:135px;font-size:21px" href="/quiztest/default.asp">Quizzes</a></h3>
   <a class="w3-bar-item w3-button" href="/html/html_quiz.asp" target="_top">HTML Quiz</a>
   <a class="w3-bar-item w3-button" href="/css/css_quiz.asp" target="_top">CSS Quiz</a>
   <a class="w3-bar-item w3-button" href="/js/js_quiz.asp" target="_top">JavaScript Quiz</a>
   <a class="w3-bar-item w3-button" href="/python/python_quiz.asp" target="_top">Python Quiz</a>
   <a class="w3-bar-item w3-button" href="/sql/sql_quiz.asp" target="_top">SQL Quiz</a>
   <a class="w3-bar-item w3-button" href="/php/php_quiz.asp" target="_top">PHP Quiz</a>
   <a class="w3-bar-item w3-button" href="/java/java_quiz.asp" target="_top">Java Quiz</a>
   <a class="w3-bar-item w3-button" href="/c/c_quiz.php">C Quiz</a>
   <a class="w3-bar-item w3-button" href="/cpp/cpp_quiz.asp" target="_top">C++ Quiz</a>
   <a class="w3-bar-item w3-button" href="/cs/cs_quiz.asp" target="_top">C# Quiz</a>
   <a class="w3-bar-item w3-button" href="/jquery/jquery_quiz.asp" target="_top">jQuery Quiz</a>
   <a class="w3-bar-item w3-button" href="/react/react_quiz.asp">React.js Quiz</a>   
   <a class="w3-bar-item w3-button" href="/mysql/mysql_quiz.asp" target="_top">MySQL Quiz</a>
   <a class="w3-bar-item w3-button" href="/bootstrap5/bootstrap_quiz.php" target="_top">Bootstrap 5 Quiz</a>
   <a class="w3-bar-item w3-button" href="/bootstrap4/bootstrap_quiz.asp" target="_top">Bootstrap 4 Quiz</a>
   <a class="w3-bar-item w3-button" href="/bootstrap/bootstrap_quiz.asp" target="_top">Bootstrap 3 Quiz</a>
   <a class="w3-bar-item w3-button" href="/python/numpy/numpy_quiz.asp" target="_top">NumPy Quiz</a>
   <a class="w3-bar-item w3-button" href="/python/pandas/pandas_quiz.asp" target="_top">Pandas Quiz</a>
   <a class="w3-bar-item w3-button" href="/python/scipy/scipy_quiz.php" target="_top">SciPy Quiz</a>
   <a class="w3-bar-item w3-button" href="/typescript/typescript_quiz.php">TypeScript Quiz</a>   
   <a class="w3-bar-item w3-button" href="/xml/xml_quiz.asp" target="_top">XML Quiz</a>
   <a class="w3-bar-item w3-button" href="/r/r_quiz.asp" target="_top">R Quiz</a>
   <a class="w3-bar-item w3-button" href="/git/git_quiz.asp">Git Quiz</a>   
   <a class="w3-bar-item w3-button" href="/kotlin/kotlin_quiz.php" target="_top">Kotlin Quiz</a>
   <a class="w3-bar-item w3-button" href="/cybersecurity/cybersecurity_quiz.php">Cyber Security Quiz</a>
   <a class="w3-bar-item w3-button" href="/accessibility/accessibility_quiz.php">Accessibility Quiz</a>
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top"><a class="ws-btn ws-yellow w3-hover-text-white" style="width:135px;font-size:21px" href="https://campus.w3schools.com/collections/course-catalog" target="_blank">Courses</a></h3>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/html-course" target="_blank">HTML Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/css-course" target="_blank">CSS Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/javascript-course" target="_blank">JavaScript Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/front-end-course" target="_blank">Front End Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/python-course" target="_blank">Python Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/sql-course" target="_blank">SQL Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/php-course" target="_blank">PHP Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/java-course" target="_blank">Java Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/c-course-1" target="_blank">C++ Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/c-course" target="_blank">C# Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/jquery-course" target="_blank">jQuery Course</a>   
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/react-js-course" target="_blank">React.js Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/bootstrap-4-course" target="_blank">Bootstrap 4 Course</a> 
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/bootstrap-course" target="_blank">Bootstrap 3 Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/numpy-course" target="_blank">NumPy Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/pandas-course" target="_blank">Pandas Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/learn-typescript" target="_blank">TypeScript Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/xml-course" target="_blank">XML Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/r-course" target="_blank">R Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/data-analytics-program" target="_blank">Data Analytics Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/cyber-security-course" target="_blank">Cyber Security Course</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/course-catalog/products/accessibility-course" target="_blank">Accessibility Course</a>
  </div>
  <div class="w3-col l3 m6">
   <h3 class="w3-margin-top"><a class="ws-btn ws-yellow w3-hover-text-white" style="width:150px;font-size:21px" href="https://campus.w3schools.com/collections/certifications" target="_blank">Certificates</a></h3>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/html-certificate" target="_blank">HTML Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/css-certificate" target="_blank">CSS Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/javascript-certificate" target="_blank">JavaScript Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/front-end-certificate" target="_blank">Front End Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/python-certificate" target="_blank">Python Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/sql-certificate" target="_blank">SQL Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/php-certificate" target="_blank">PHP Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/java-certificate" target="_blank">Java Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/c-certificate" target="_blank">C++ Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/c-certificate-1" target="_blank">C# Certificate</a>   
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/jquery-certificate" target="_blank">jQuery Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/react-js-certificate" target="_blank">React.js Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/mysql-certificate" target="_blank">MySQL Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/bootstrap-5-certificate" target="_blank">Bootstrap 5 Certificate</a>   
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/bootstrap-4-certificate" target="_blank">Bootstrap 4 Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/bootstrap-3-certificate" target="_blank">Bootstrap 3 Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/typescript-certificate" target="_blank">TypeScript Certificate</a>   
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/xml-certificate" target="_blank">XML Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/excel-certificate" target="_blank">Excel Certificate</a>   
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/data-science-certificate" target="_blank">Data Science Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/cyber-security-certificate" target="_blank">Cyber Security Certificate</a>
   <a class="w3-bar-item w3-button" href="https://campus.w3schools.com/collections/certifications/products/accessibility-certificate" target="_blank">Accessibility Certificate</a>
  </div>
 </div>
 <br class="hidesm">
 </div>
</nav>

  </div>
</div>

<div id='myAccordion' class="w3-card-2 w3-center w3-hide-large w3-hide-medium ws-grey" style="width:100%;position:absolute;display:none;">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-xxlarge w3-right">&times;</a><br>
  <div class="w3-container w3-padding-32">
    <a class="w3-button w3-block" style="font-size:22px;" onclick="open_xs_menu('tutorials');" href="javascript:void(0);">Tutorials <i class='fa fa-caret-down'></i></a>
    <div id="sectionxs_tutorials" class="w3-left-align w3-show" style="background-color:#282A35;color:white;"></div>
    <a class="w3-button w3-block" style="font-size:22px;" onclick="open_xs_menu('references')" href="javascript:void(0);">References <i class='fa fa-caret-down'></i></a>
    <div id="sectionxs_references" class="w3-left-align w3-show" style="background-color:#282A35;color:white;"></div>
    <a class="w3-button w3-block" style="font-size:22px;" onclick="open_xs_menu('exercises')" href="javascript:void(0);">Exercises <i class='fa fa-caret-down'></i></a>
    <div id="sectionxs_exercises" class="w3-left-align w3-show" style="background-color:#282A35;color:white;"></div>
    <a class="w3-button w3-block" style="font-size:22px;" href="https://campus.w3schools.com/collections/course-catalog" target="_blank">Get Certified</a>
    <a class="w3-button w3-block" style="font-size:22px;" href="/signup/index.html">Sign Up</a>
    <a class="w3-button w3-block" style="font-size:22px;" href="/pro/index.php" title="Upgrade to Improve Your Learning Experiences">Upgrade</a>
    <a class="w3-button w3-block" style="font-size:22px;" href="/spaces/index.html" title="Get Your Own Website With W3schools Spaces">Spaces</a>
    <a class="w3-button w3-block" style="font-size:22px;" href="/bootcamp/index.php">Bootcamp</a>
    <a class="w3-button w3-block" style="font-size:22px;" href="/videos/index.php" title="Video Tutorials">Videos</a>    
    <a class="w3-button w3-block" style="font-size:22px;" href="https://campus.w3schools.com" target="_blank">Shop</a>
  </div>
</div>

<script>
(
function setThemeCheckboxes() {
  var x = localStorage.getItem("preferredmode");
  var y = localStorage.getItem("preferredpagemode");  
  if (x == "dark") {
    document.getElementById("radio_darkcode").checked = true;
    
  }
  if (y == "dark") {
    document.getElementById("radio_darkpage").checked = true;
  }
})();

function mouseoverdarkicon() {
  if(window.matchMedia("(pointer: coarse)").matches) {
    return false;
  }
  var a = document.getElementById("darkmodemenu");
  a.style.top = "44px";
}
function mouseoutofdarkicon() {
  var a = document.getElementById("darkmodemenu");
  a.style.top = "-40px";
}
function changepagetheme(n) {
  var a = document.getElementById("radio_darkcode");
  var b = document.getElementById("radio_darkpage");
  document.body.className = document.body.className.replace("darktheme", "");
  document.body.className = document.body.className.replace("darkpagetheme", "");    
  document.body.className = document.body.className.replace("  ", " ");
  if (a.checked && b.checked) {
    localStorage.setItem("preferredmode", "light");
    localStorage.setItem("preferredpagemode", "light");
    a.checked = false;
    b.checked = false;    
  } else {
    document.body.className += " darktheme";
    document.body.className += " darkpagetheme";  
    localStorage.setItem("preferredmode", "dark");
    localStorage.setItem("preferredpagemode", "dark");
    a.checked = true;
    b.checked = true;    
  }
}


function click_darkpage() {
  var b = document.getElementById("radio_darkpage");
  if (b.checked) {
    document.body.className += " darkpagetheme";
    document.body.className = document.body.className.replace("  ", " ");    
    localStorage.setItem("preferredpagemode", "dark");
  } else {
    document.body.className = document.body.className.replace("darkpagetheme", "");
    document.body.className = document.body.className.replace("  ", " ");    
    localStorage.setItem("preferredpagemode", "light");
  }
}

function click_darkcode() {
  var a = document.getElementById("radio_darkcode");
  if (a.checked) {
    document.body.className += " darktheme";
    document.body.className = document.body.className.replace("  ", " ");    
    localStorage.setItem("preferredmode", "dark");
  } else {
    document.body.className = document.body.className.replace("darktheme", "");
    document.body.className = document.body.className.replace("  ", " ");
    localStorage.setItem("preferredmode", "light");
  }
}
</script>

<div class='w3-sidebar w3-collapse' id='sidenav'>
  <div id='leftmenuinner'>
    <div id='leftmenuinnerinner'>
<!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
<h2 class="left"><span class="left_h2">MySQL</span> Tutorial</h2>
<a target="_top" href="default.asp">MySQL HOME</a>
<a target="_top" href="mysql_intro.asp">MySQL Intro</a>
<a target="_top" href="mysql_rdbms.asp">MySQL RDBMS</a>
<br>
<h2 class="left"><span class="left_h2">MySQL</span> SQL</h2>
<a target="_top" href="mysql_sql.asp">MySQL SQL</a>
<a target="_top" href="mysql_select.asp">MySQL SELECT</a>
<a target="_top" href="mysql_where.asp">MySQL WHERE</a>
<a target="_top" href="mysql_and_or.asp">MySQL AND, OR, NOT</a>
<a target="_top" href="mysql_orderby.asp">MySQL ORDER BY</a>
<a target="_top" href="mysql_insert.asp">MySQL INSERT INTO</a>
<a target="_top" href="mysql_null_values.asp">MySQL NULL Values</a>
<a target="_top" href="mysql_update.asp">MySQL UPDATE</a>
<a target="_top" href="mysql_delete.asp">MySQL DELETE</a>
<a target="_top" href="mysql_limit.asp">MySQL LIMIT</a>
<a target="_top" href="mysql_min_max.asp">MySQL MIN and MAX</a>
<a target="_top" href="mysql_count_avg_sum.asp">MySQL COUNT, AVG, SUM</a>
<a target="_top" href="mysql_like.asp">MySQL LIKE</a>
<a target="_top" href="mysql_wildcards.asp">MySQL Wildcards</a>
<a target="_top" href="mysql_in.asp">MySQL IN</a>
<a target="_top" href="mysql_between.asp">MySQL BETWEEN</a>
<a target="_top" href="mysql_alias.asp">MySQL Aliases</a>
<a target="_top" href="mysql_join.asp">MySQL Joins</a>
<a target="_top" href="mysql_join_inner.asp">MySQL INNER JOIN</a>
<a target="_top" href="mysql_join_left.asp">MySQL LEFT JOIN</a>
<a target="_top" href="mysql_join_right.asp">MySQL RIGHT JOIN</a>
<a target="_top" href="mysql_join_cross.asp">MySQL CROSS JOIN</a>
<a target="_top" href="mysql_join_self.asp">MySQL Self Join</a>
<a target="_top" href="mysql_union.asp">MySQL UNION</a>
<a target="_top" href="mysql_groupby.asp">MySQL GROUP BY</a>
<a target="_top" href="mysql_having.asp">MySQL HAVING</a>
<a target="_top" href="mysql_exists.asp">MySQL EXISTS</a>
<a target="_top" href="mysql_any_all.asp">MySQL ANY, ALL</a>
<a target="_top" href="mysql_insert_into_select.asp">MySQL INSERT SELECT</a>
<a target="_top" href="mysql_case.asp">MySQL CASE</a>
<a target="_top" href="mysql_ifnull.asp">MySQL Null Functions</a>
<a target="_top" href="mysql_comments.asp">MySQL Comments</a>
<a target="_top" href="mysql_operators.asp">MySQL Operators</a>
<br>
<h2 class="left"><span class="left_h2">MySQL</span> Database</h2>
<!--<a target="_top" href="mysql_install_windows.asp">MySQL Install (Windows)</a>
<a target="_top" href="mysql_install_linux.asp">MySQL Install (Linux)</a>-->
<a target="_top" href="mysql_create_db.asp">MySQL Create DB</a>
<a target="_top" href="mysql_drop_db.asp">MySQL Drop DB</a>
<a target="_top" href="mysql_create_table.asp">MySQL Create Table</a>
<a target="_top" href="mysql_drop_table.asp">MySQL Drop Table</a>
<a target="_top" href="mysql_alter.asp">MySQL Alter Table</a>
<a target="_top" href="mysql_constraints.asp">MySQL Constraints</a>
<a target="_top" href="mysql_notnull.asp">MySQL Not Null</a>
<a target="_top" href="mysql_unique.asp">MySQL Unique</a>
<a target="_top" href="mysql_primarykey.asp">MySQL Primary Key</a>
<a target="_top" href="mysql_foreignkey.asp">MySQL Foreign Key</a>
<a target="_top" href="mysql_check.asp">MySQL Check</a>
<a target="_top" href="mysql_default.asp">MySQL Default</a>
<a target="_top" href="mysql_create_index.asp">MySQL Create Index</a>
<a target="_top" href="mysql_autoincrement.asp">MySQL Auto Increment</a>
<a target="_top" href="mysql_dates.asp">MySQL Dates</a>
<a target="_top" href="mysql_view.asp">MySQL Views</a>
<br>
<h2 class="left"><span class="left_h2">MySQL</span> References</h2>
<a target="_top" href="mysql_datatypes.asp">MySQL Data Types</a>
<a target="_top" href="mysql_ref_functions.asp">MySQL Functions</a>
<div class="ref_overview" style="margin-left:10px;">
  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:2px;font-style:italic;">String Functions</span>
  <a target="_top" href="func_mysql_ascii.asp">ASCII</a>
  <a target="_top" href="func_mysql_char_length.asp">CHAR_LENGTH</a>
  <a target="_top" href="func_mysql_character_length.asp">CHARACTER_LENGTH</a>
  <a target="_top" href="func_mysql_concat.asp">CONCAT</a>
  <a target="_top" href="func_mysql_concat_ws.asp">CONCAT_WS</a>
  <a target="_top" href="func_mysql_field.asp">FIELD</a>
  <a target="_top" href="func_mysql_find_in_set.asp">FIND_IN_SET</a>
  <a target="_top" href="func_mysql_format.asp">FORMAT</a>
  <a target="_top" href="func_mysql_insert.asp">INSERT</a>
  <a target="_top" href="func_mysql_instr.asp">INSTR</a>
  <a target="_top" href="func_mysql_lcase.asp">LCASE</a>
  <a target="_top" href="func_mysql_left.asp">LEFT</a>
  <a target="_top" href="func_mysql_length.asp">LENGTH</a>
  <a target="_top" href="func_mysql_locate.asp">LOCATE</a>
  <a target="_top" href="func_mysql_lower.asp">LOWER</a>
  <a target="_top" href="func_mysql_lpad.asp">LPAD</a>
  <a target="_top" href="func_mysql_ltrim.asp">LTRIM</a>
  <a target="_top" href="func_mysql_mid.asp">MID</a>
  <a target="_top" href="func_mysql_position.asp">POSITION</a>
  <a target="_top" href="func_mysql_repeat.asp">REPEAT</a>
  <a target="_top" href="func_mysql_replace.asp">REPLACE</a>
  <a target="_top" href="func_mysql_reverse.asp">REVERSE</a>
  <a target="_top" href="func_mysql_right.asp">RIGHT</a>
  <a target="_top" href="func_mysql_rpad.asp">RPAD</a>
  <a target="_top" href="func_mysql_rtrim.asp">RTRIM</a>
  <a target="_top" href="func_mysql_space.asp">SPACE</a>
  <a target="_top" href="func_mysql_strcmp.asp">STRCMP</a>
  <a target="_top" href="func_mysql_substr.asp">SUBSTR</a>
  <a target="_top" href="func_mysql_substring.asp">SUBSTRING</a>
  <a target="_top" href="func_mysql_substring_index.asp">SUBSTRING_INDEX</a>
  <a target="_top" href="func_mysql_trim.asp">TRIM</a>
  <a target="_top" href="func_mysql_ucase.asp">UCASE</a>
  <a target="_top" href="func_mysql_upper.asp">UPPER</a>

  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Numeric Functions</span>
  <a target="_top" href="func_mysql_abs.asp">ABS</a>
  <a target="_top" href="func_mysql_acos.asp">ACOS</a>
  <a target="_top" href="func_mysql_asin.asp">ASIN</a>
  <a target="_top" href="func_mysql_atan.asp">ATAN</a>
  <a target="_top" href="func_mysql_atan2.asp">ATAN2</a>
  <a target="_top" href="func_mysql_avg.asp">AVG</a>
  <a target="_top" href="func_mysql_ceil.asp">CEIL</a>
  <a target="_top" href="func_mysql_ceiling.asp">CEILING</a>
  <a target="_top" href="func_mysql_cos.asp">COS</a>
  <a target="_top" href="func_mysql_cot.asp">COT</a>
  <a target="_top" href="func_mysql_count.asp">COUNT</a>
  <a target="_top" href="func_mysql_degrees.asp">DEGREES</a>
  <a target="_top" href="func_mysql_div.asp">DIV</a>
  <a target="_top" href="func_mysql_exp.asp">EXP</a>
  <a target="_top" href="func_mysql_floor.asp">FLOOR</a>
  <a target="_top" href="func_mysql_greatest.asp">GREATEST</a>
  <a target="_top" href="func_mysql_least.asp">LEAST</a>
  <a target="_top" href="func_mysql_ln.asp">LN</a>
  <a target="_top" href="func_mysql_log.asp">LOG</a>
  <a target="_top" href="func_mysql_log10.asp">LOG10</a>
  <a target="_top" href="func_mysql_log2.asp">LOG2</a>
  <a target="_top" href="func_mysql_max.asp">MAX</a>
  <a target="_top" href="func_mysql_min.asp">MIN</a>
  <a target="_top" href="func_mysql_mod.asp">MOD</a>
  <a target="_top" href="func_mysql_pi.asp">PI</a>
  <a target="_top" href="func_mysql_pow.asp">POW</a>
  <a target="_top" href="func_mysql_power.asp">POWER</a>
  <a target="_top" href="func_mysql_radians.asp">RADIANS</a>
  <a target="_top" href="func_mysql_rand.asp">RAND</a>
  <a target="_top" href="func_mysql_round.asp">ROUND</a>
  <a target="_top" href="func_mysql_sign.asp">SIGN</a>
  <a target="_top" href="func_mysql_sin.asp">SIN</a>
  <a target="_top" href="func_mysql_sqrt.asp">SQRT</a>
  <a target="_top" href="func_mysql_sum.asp">SUM</a>
  <a target="_top" href="func_mysql_tan.asp">TAN</a>
  <a target="_top" href="func_mysql_truncate.asp">TRUNCATE</a>

  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Date Functions</span>
  <a target="_top" href="func_mysql_adddate.asp">ADDDATE</a>
  <a target="_top" href="func_mysql_addtime.asp">ADDTIME</a>
  <a target="_top" href="func_mysql_curdate.asp">CURDATE</a>
  <a target="_top" href="func_mysql_current_date.asp">CURRENT_DATE</a>
  <a target="_top" href="func_mysql_current_time.asp">CURRENT_TIME</a>
  <a target="_top" href="func_mysql_current_timestamp.asp">CURRENT_TIMESTAMP</a>
  <a target="_top" href="func_mysql_curtime.asp">CURTIME</a>
  <a target="_top" href="func_mysql_date.asp">DATE</a>
  <a target="_top" href="func_mysql_datediff.asp">DATEDIFF</a>
  <a target="_top" href="func_mysql_date_add.asp">DATE_ADD</a>
  <a target="_top" href="func_mysql_date_format.asp">DATE_FORMAT</a>
  <a target="_top" href="func_mysql_date_sub.asp">DATE_SUB</a>
  <a target="_top" href="func_mysql_day.asp">DAY</a>
  <a target="_top" href="func_mysql_dayname.asp">DAYNAME</a>
  <a target="_top" href="func_mysql_dayofmonth.asp">DAYOFMONTH</a>
  <a target="_top" href="func_mysql_dayofweek.asp">DAYOFWEEK</a>
  <a target="_top" href="func_mysql_dayofyear.asp">DAYOFYEAR</a>
  <a target="_top" href="func_mysql_extract.asp">EXTRACT</a>
  <a target="_top" href="func_mysql_from_days.asp">FROM_DAYS</a>
  <a target="_top" href="func_mysql_hour.asp">HOUR</a>
  <a target="_top" href="func_mysql_last_day.asp">LAST_DAY</a>
  <a target="_top" href="func_mysql_localtime.asp">LOCALTIME</a>
  <a target="_top" href="func_mysql_localtimestamp.asp">LOCALTIMESTAMP</a>
  <a target="_top" href="func_mysql_makedate.asp">MAKEDATE</a>
  <a target="_top" href="func_mysql_maketime.asp">MAKETIME</a>
  <a target="_top" href="func_mysql_microsecond.asp">MICROSECOND</a>
  <a target="_top" href="func_mysql_minute.asp">MINUTE</a>
  <a target="_top" href="func_mysql_month.asp">MONTH</a>
  <a target="_top" href="func_mysql_monthname.asp">MONTHNAME</a>
  <a target="_top" href="func_mysql_now.asp">NOW</a>
  <a target="_top" href="func_mysql_period_add.asp">PERIOD_ADD</a>
  <a target="_top" href="func_mysql_period_diff.asp">PERIOD_DIFF</a>
  <a target="_top" href="func_mysql_quarter.asp">QUARTER</a>
  <a target="_top" href="func_mysql_second.asp">SECOND</a>
  <a target="_top" href="func_mysql_sec_to_time.asp">SEC_TO_TIME</a>
  <a target="_top" href="func_mysql_str_to_date.asp">STR_TO_DATE</a>
  <a target="_top" href="func_mysql_subdate.asp">SUBDATE</a>
  <a target="_top" href="func_mysql_subtime.asp">SUBTIME</a>
  <a target="_top" href="func_mysql_sysdate.asp">SYSDATE</a>
  <a target="_top" href="func_mysql_time.asp">TIME</a>
  <a target="_top" href="func_mysql_time_format.asp">TIME_FORMAT</a>
  <a target="_top" href="func_mysql_time_to_sec.asp">TIME_TO_SEC</a>
  <a target="_top" href="func_mysql_timediff.asp">TIMEDIFF</a>
  <a target="_top" href="func_mysql_timestamp.asp">TIMESTAMP</a>
  <a target="_top" href="func_mysql_to_days.asp">TO_DAYS</a>
  <a target="_top" href="func_mysql_week.asp">WEEK</a>
  <a target="_top" href="func_mysql_weekday.asp">WEEKDAY</a>
  <a target="_top" href="func_mysql_weekofyear.asp">WEEKOFYEAR</a>
  <a target="_top" href="func_mysql_year.asp">YEAR</a>
  <a target="_top" href="func_mysql_yearweek.asp">YEARWEEK</a>

  <span style="display:inline-block;margin-left:10px;padding:5px;margin-top:10px;font-style:italic">Advanced Functions</span>
  <a target="_top" href="func_mysql_bin.asp">BIN</a>
  <a target="_top" href="func_mysql_binary.asp">BINARY</a>
  <a target="_top" href="func_mysql_case.asp">CASE</a>
  <a target="_top" href="func_mysql_cast.asp">CAST</a>
  <a target="_top" href="func_mysql_coalesce.asp">COALESCE</a>
  <a target="_top" href="func_mysql_connection_id.asp">CONNECTION_ID</a>
  <a target="_top" href="func_mysql_conv.asp">CONV</a>
  <a target="_top" href="func_mysql_convert.asp">CONVERT</a>
  <a target="_top" href="func_mysql_current_user.asp">CURRENT_USER</a>
  <a target="_top" href="func_mysql_database.asp">DATABASE</a>
  <a target="_top" href="func_mysql_if.asp">IF</a>
  <a target="_top" href="func_mysql_ifnull.asp">IFNULL</a>
  <a target="_top" href="func_mysql_isnull.asp">ISNULL</a>
  <a target="_top" href="func_mysql_last_insert_id.asp">LAST_INSERT_ID</a>
  <a target="_top" href="func_mysql_nullif.asp">NULLIF</a>
  <a target="_top" href="func_mysql_session_user.asp">SESSION_USER</a>
  <a target="_top" href="func_mysql_system_user.asp">SYSTEM_USER</a>
  <a target="_top" href="func_mysql_user.asp">USER</a>
  <a target="_top" href="func_mysql_version.asp">VERSION</a>
</div>

<br>
<h2 class="left"><span class="left_h2">MySQL</span> Examples</h2>
<a target="_top" href="mysql_examples.asp">MySQL Examples</a>
<a target="_top" href="mysql_editor.asp">MySQL Editor</a>
<a target="_top" href="mysql_quiz.asp">MySQL Quiz</a>
<a target="_top" href="mysql_exercises.asp">MySQL Exercises</a>
<a target="_top" href="mysql_exam.asp">MySQL Certificate</a>
      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12' id='main'>
      <div id='mainLeaderboard' style='overflow:hidden;'>
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="adngin-main_leaderboard-0"></div>
        <!-- adspace leaderboard -->

      </div>
<h1>MySQL <span class="color_h1">Views</span></h1>
<div class="w3-clear nextprev">
  <a class="w3-left w3-btn" href="mysql_dates.asp">&#10094; Previous</a>
  <a class="w3-right w3-btn" href="mysql_datatypes.asp">Next &#10095;</a>
</div>
<hr>
<h2>MySQL CREATE VIEW Statement</h2>
<p>In SQL, a view is a virtual table based on the result-set of an SQL statement.</p>
<p>A view contains rows and columns, just like a real table. The fields in a view are fields from one or more real tables in the database.</p>
<p>You can add SQL statements and functions to a view and present the data as if the data were coming from one single table.</p>
<p>A view is created with the <code class="w3-codespan">CREATE VIEW</code> statement.</p>

<h3>CREATE VIEW Syntax</h3>
<div class="w3-example">
<div class="w3-code notranslate sqlHigh">
CREATE VIEW <em>view_name</em> AS<br>
SELECT <em>column1</em>, <em>column2</em>, ...<br>
FROM <em>table_name</em><br>
WHERE <em>condition</em>;</div></div>

<p><b>Note:</b> A view always shows up-to-date data! The database engine recreates the 
view, every time a user queries it.</p>
<hr>

<h2>MySQL CREATE VIEW Examples</h2>
<p>The following SQL creates a view that shows all customers from Brazil:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate sqlHigh">
CREATE VIEW [Brazil Customers] AS<br>
SELECT CustomerName, ContactName<br>
FROM Customers<br>
WHERE Country = 'Brazil';</div>
</div>

<p>We can query the view above as follows:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate sqlHigh">
SELECT * FROM [Brazil Customers];</div>
</div>

<p>The following SQL creates a view that selects every product in the &quot;Products&quot; table with a price higher than the average price:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate sqlHigh">
CREATE VIEW [Products Above Average Price] AS<br>
SELECT ProductName, Price<br>
FROM Products<br>
WHERE Price &gt; (SELECT AVG(Price) FROM Products);</div>
</div>

<p>We can query the view above as follows:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate sqlHigh">
SELECT * FROM [Products Above Average Price];</div>
</div>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <div id="adngin-mid_content-0"></div>
  
</div>
<hr>

<h2>MySQL Updating a View</h2>
<p>A view can be updated with the <code class="w3-codespan">CREATE OR REPLACE VIEW</code> statement.</p>

<h3>CREATE OR REPLACE VIEW Syntax</h3>
<div class="w3-example">
<div class="w3-code notranslate sqlHigh">
CREATE OR REPLACE VIEW <em>view_name</em> AS<br>
SELECT <em>column1</em>, <em>column2</em>, ...<br>
FROM <em>table_name</em><br>
WHERE <em>condition</em>;</div></div>

<p>The following SQL adds the &quot;City&quot; column to the &quot;Brazil Customers&quot; view:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate sqlHigh">
CREATE OR REPLACE VIEW [Brazil Customers] AS<br>
SELECT CustomerName, ContactName, City<br>
FROM Customers<br>
WHERE Country = 'Brazil';</div>
</div>
<hr>

<h2>MySQL Dropping a View</h2>
<p>A view is deleted with the <code class="w3-codespan">DROP VIEW</code> statement.</p>

<h3>DROP VIEW Syntax</h3>
<div class="w3-example">
<div class="w3-code notranslate sqlHigh">
DROP VIEW <em>view_name</em>;</div></div>

<p>The following SQL drops the &quot;Brazil Customers&quot; view:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate sqlHigh">
DROP VIEW [Brazil Customers];</div>
</div>

<br>
<div class="w3-clear nextprev">
  <a class="w3-left w3-btn" href="mysql_dates.asp">&#10094; Previous</a>
  <a class="w3-right w3-btn" href="mysql_datatypes.asp">Next &#10095;</a>
</div>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
<div class="w3-col l2 m12" id="right">

<div class="sidesection">
  <div id="skyscraper">
  
    <div id="adngin-sidebar_top-0"></div>
  
  </div>
</div>
  
<style>
.ribbon-vid {
  font-size:12px;
  font-weight:bold;
  padding: 6px 20px;
  left:-20px;
  top:-10px;
  text-align: center;
  color:black;
  border-radius:25px;
}
</style>

<div class="sidesection" style="margin-top:20px;margin-bottom:20px;">
<a id="upperfeatureshowcaselink" class="showcasebackend" href="https://www.w3schools.com/spaces/" target="_blank">
<picture id="upperfeatureshowcase">
  <source id="upperfeatureshowcase3001" srcset="/images/img_backend_300.png" media="(max-width: 990px)" style="border-radius: 5px;">
  <source id="upperfeatureshowcase120" srcset="/images/img_backend_120.png" media="(max-width: 1260px)" style="border-radius: 5px;">
  <source id="upperfeatureshowcase160" srcset="/images/img_backend_160.png" media="(max-width: 1700px)" style="border-radius: 5px;">
  <img id="upperfeatureshowcase300" src="/images/img_backend_300.png" alt="Get started with your own server with Dynamic Spaces" style="width:auto;border-radius: 5px;">
</picture>
</a>
</div>

<div class="sidesection">
<h4><a href="/colors/colors_picker.asp">COLOR PICKER</a></h4>
<a href="/colors/colors_picker.asp">
<img src="/images/colorpicker2000.png" alt="colorpicker" loading="lazy">
</a>
</div>

<div class="sidesection">
<!--<h4>LIKE US</h4>-->
  <div class="sharethis">
    <a href="https://www.facebook.com/w3schoolscom/" target="_blank" title="Facebook"><span class="fa fa-facebook-square fa-2x"></span></a>
    <a href="https://www.instagram.com/w3schools.com_official/" target="_blank" title="Instagram"><span class="fa fa-instagram fa-2x"></span></a>
    <a href="https://www.linkedin.com/company/w3schools.com/" target="_blank" title="LinkedIn"><span class="fa fa-linkedin-square fa-2x"></span></a>
    <a href="https://discord.gg/6Z7UaRbUQM" target="_blank" title='Join the W3schools community on Discord'><span class="fa fa-discord fa-2x"></span></a>    
  </div>
</div>

<!--
<div class="sidesection" style="border-radius:5px;color:#555;padding-top:1px;padding-bottom:8px;margin-left:auto;margin-right:auto;max-width:230px;background-color:#d4edda">
<p>Get your<br>certification today!</p>
<a href="/cert/default.asp" target="_blank">
<img src="/images/w3certified_logo_250.png" style="margin:0 12px 20px 10px;max-width:80%">
</a>
<a class="w3-btn w3-margin-bottom" style="text-decoration:none;border-radius:5px;"
href="/cert/default.asp" target="_blank">View options</a>
</div>
-->

<style>
#courses_get_started_btn {
text-decoration:none !important;
background-color:#04AA6D;
width:100%;
border-bottom-left-radius:5px;
border-bottom-right-radius:5px;
padding-top:10px;
padding-bottom:10px;
font-family: 'Source Sans Pro', sans-serif;
}
#courses_get_started_btn:hover {
background-color:#059862!important;
}
</style>
<div id="internalCourses"  class="sidesection">
<p style="font-size:18px;padding-left:2px;padding-right:2px;">Get certified<br>by completing<br><span id="courses_subject_text">a</span> course today!</p>
<a id="courses_subject_img_link" href="https://shop.w3schools.com/collections/course-catalog" target="_blank">
<div style="padding:0 20px 20px 20px">
<svg id="w3_cert_badge2" style="margin:auto;width:85%" data-name="w3_cert_badge2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><defs><style>.cls-1{fill:#04aa6b;}.cls-2{font-size:23px;}.cls-2,.cls-3,.cls-4{fill:#fff;}.cls-2,.cls-3{font-family:RobotoMono-Medium, Roboto Mono;font-weight:500;}.cls-3{font-size:20.08px;}</style></defs><circle class="cls-1" cx="150" cy="150" r="146.47" transform="translate(-62.13 150) rotate(-45)"/><text class="cls-2" transform="translate(93.54 63.89) rotate(-29.5)">w</text><text class="cls-2" transform="translate(107.13 56.35) rotate(-20.8)">3</text><text class="cls-2" transform="matrix(0.98, -0.21, 0.21, 0.98, 121.68, 50.97)">s</text><text class="cls-2" transform="translate(136.89 47.84) rotate(-3.47)">c</text><text class="cls-2" transform="translate(152.39 47.03) rotate(5.12)">h</text><text class="cls-2" transform="translate(167.85 48.54) rotate(13.72)">o</text><text class="cls-2" transform="translate(182.89 52.35) rotate(22.34)">o</text><text class="cls-2" transform="matrix(0.86, 0.52, -0.52, 0.86, 197.18, 58.36)">l</text><text class="cls-2" transform="matrix(0.77, 0.64, -0.64, 0.77, 210.4, 66.46)">s</text><text class="cls-3" transform="translate(35.51 186.66) rotate(69.37)"> </text><text class="cls-3" transform="matrix(0.47, 0.88, -0.88, 0.47, 41.27, 201.28)">C</text><text class="cls-3" transform="matrix(0.58, 0.81, -0.81, 0.58, 48.91, 215.03)">E</text><text class="cls-3" transform="matrix(0.67, 0.74, -0.74, 0.67, 58.13, 227.36)">R</text><text class="cls-3" transform="translate(69.16 238.92) rotate(39.44)">T</text><text class="cls-3" transform="matrix(0.85, 0.53, -0.53, 0.85, 81.47, 248.73)">I</text><text class="cls-3" transform="translate(94.94 256.83) rotate(24.36)">F</text><text class="cls-3" transform="translate(109.34 263.09) rotate(16.83)">I</text><text class="cls-3" transform="translate(124.46 267.41) rotate(9.34)">E</text><text class="cls-3" transform="translate(139.99 269.73) rotate(1.88)">D</text><text class="cls-3" transform="translate(155.7 270.01) rotate(-5.58)"> </text><text class="cls-3" transform="translate(171.32 268.24) rotate(-13.06)"> </text><text class="cls-2" transform="translate(187.55 266.81) rotate(-21.04)">.</text><text class="cls-3" transform="translate(203.27 257.7) rotate(-29.24)"> </text><text class="cls-3" transform="translate(216.84 249.83) rotate(-36.75)"> </text><text class="cls-3" transform="translate(229.26 240.26) rotate(-44.15)">2</text><text class="cls-3" transform="translate(240.39 229.13) rotate(-51.62)">0</text><text class="cls-3" transform="translate(249.97 216.63) rotate(-59.17)">2</text><text class="cls-3" transform="matrix(0.4, -0.92, 0.92, 0.4, 257.81, 203.04)">3</text><path class="cls-4" d="M196.64,136.31s3.53,3.8,8.5,3.8c3.9,0,6.75-2.37,6.75-5.59,0-4-3.64-5.81-8-5.81h-2.59l-1.53-3.48,6.86-8.13a34.07,34.07,0,0,1,2.7-2.85s-1.11,0-3.33,0H194.79v-5.86H217.7v4.28l-9.19,10.61c5.18.74,10.24,4.43,10.24,10.92s-4.85,12.3-13.19,12.3a17.36,17.36,0,0,1-12.41-5Z"/><path class="cls-4" d="M152,144.24l30.24,53.86,14.94-26.61L168.6,120.63H135.36l-13.78,24.53-13.77-24.53H77.93l43.5,77.46.15-.28.16.28Z"/></svg>
</div>

</a>
<a class="w3-btn" id="courses_get_started_btn" 
href="https://shop.w3schools.com/collections/course-catalog" target="_blank">Get started</a>
</div>

<div class="sidesection" id="moreAboutSubject">
</div>

<div class="sidesection" style="margin-top:20px;margin-bottom:20px;">
<a id="lowerfeatureshowcaselink" class="showcasesubs" href="https://www.w3schools.com/spaces/" target="_blank">
<picture id="lowerfeatureshowcase">
  <source id="lowerfeatureshowcase3001" srcset="/images/img_subs_300.png" media="(max-width: 990px)" style="border-radius: 5px;">
  <source id="lowerfeatureshowcase120" srcset="/images/img_subs_120.png" media="(max-width: 1260px)" style="border-radius: 5px;">
  <source id="lowerfeatureshowcase160" srcset="/images/img_subs_160.png" media="(max-width: 1700px)" style="border-radius: 5px;">
  <img id="lowerfeatureshowcase300" src="/images/img_subs_300.png" alt="Subscribe" style="width:auto;border-radius: 5px;">
</picture>
</a>
</div>

<script>
var internalFeatureRnd = Math.floor(Math.random() * (5 - 1)) + 1;
var upshowcase120 = document.getElementById("upperfeatureshowcase120");
var upshowcase160 = document.getElementById("upperfeatureshowcase160");
var upshowcase300 = document.getElementById("upperfeatureshowcase300");
var upshowcase3001 = document.getElementById("upperfeatureshowcase3001");
var upshowcaselink = document.getElementById("upperfeatureshowcaselink");
var lowshowcase120 = document.getElementById("lowerfeatureshowcase120");
var lowshowcase160 = document.getElementById("lowerfeatureshowcase160");
var lowshowcase300 = document.getElementById("lowerfeatureshowcase300");
var lowshowcase3001 = document.getElementById("lowerfeatureshowcase3001");
var lowshowcaselink = document.getElementById("lowerfeatureshowcaselink");

if (internalFeatureRnd == 2) {
  upshowcase120.srcset = "/images/img_subs_120.png";
  upshowcase160.srcset = "/images/img_subs_160.png";
  upshowcase300.srcset = "/images/img_subs_300.png";
  upshowcase3001.srcset = "/images/img_subs_300.png";
  upshowcaselink.href = "https://www.w3schools.com/spaces/";
  upshowcaselink.classList.remove("showcasebackend");
  upshowcaselink.classList.add("showcaseupgrade");
  lowshowcase120.srcset = "/images/img_bootcamp_120.png";
  lowshowcase160.srcset = "/images/img_bootcamp_160.png";
  lowshowcase300.srcset = "/images/img_bootcamp_300.png";
  lowshowcase3001.srcset = "/images/img_bootcamp_300.png";  
  lowshowcaselink.href = "https://www.w3schools.com/bootcamp/";
  lowshowcaselink.classList.remove("showcasesubs");
  lowshowcaselink.classList.add("showcasebootcamp");
} else if (internalFeatureRnd == 3) {
  upshowcase120.srcset = "/images/img_bootcamp_120.png";
  upshowcase160.srcset = "/images/img_bootcamp_160.png";
  upshowcase300.srcset = "/images/img_bootcamp_300.png";
  upshowcase3001.srcset = "/images/img_bootcamp_300.png";
  upshowcaselink.href = "https://www.w3schools.com/bootcamp/";
  upshowcaselink.classList.remove("showcasebackend");
  upshowcaselink.classList.add("showcasebootcamp");
  lowshowcase120.srcset = "/images/img_fullaccess3_120.png";
  lowshowcase160.srcset = "/images/img_fullaccess3_160.png";
  lowshowcase300.srcset = "/images/img_fullaccess3_300.png";
  lowshowcase3001.srcset = "/images/img_fullaccess3_300.png";  
  lowshowcaselink.href = "https://campus.w3schools.com/collections/course-catalog/products/w3schools-full-access-course";
  lowshowcaselink.classList.remove("showcasesubs");
  lowshowcaselink.classList.add("showcasefullaccess");
} else if (internalFeatureRnd == 4) {
  upshowcase120.srcset = "/images/img_fullaccess3_120.png";
  upshowcase160.srcset = "/images/img_fullaccess3_160.png";
  upshowcase300.srcset = "/images/img_fullaccess3_300.png";
  upshowcase3001.srcset = "/images/img_fullaccess3_300.png";
  upshowcaselink.href = "https://campus.w3schools.com/collections/course-catalog/products/w3schools-full-access-course";
  upshowcaselink.classList.remove("showcasebackend");
  upshowcaselink.classList.add("showcasefullaccess");
  lowshowcase120.srcset = "/images/img_backend_120.png";
  lowshowcase160.srcset = "/images/img_backend_160.png";
  lowshowcase300.srcset = "/images/img_backend_300.png";
  lowshowcase3001.srcset = "/images/img_backend_300.png";  
  lowshowcaselink.href = "https://www.w3schools.com/spaces/";
  lowshowcaselink.classList.remove("showcasesubs");
  lowshowcaselink.classList.add("showcasebackend");
}
function addTryitSpaces(subject) {
  let spacesButt = document.createElement("a");
  let ribb = document.createElement("span");
  spacesButt.innerHTML="Get your own " + subject + " Server"
  spacesButt.classList.add("ws-black", "ws-hover-black", "spaces-tryit");
  spacesButt.href="https://www.w3schools.com/spaces/";
  spacesButt.setAttribute("title", "W3Schools Spaces");
  spacesButt.setAttribute("target", "_blank");

  var tryits = document.getElementsByClassName("w3-example");
  for (var i = 0; i < tryits.length; i++) {
    if (tryits[i].firstElementChild.nodeName == "H3") {
      tryits[i].firstElementChild.appendChild(spacesButt.cloneNode(true));
      break;
    }
  }
}

switch (subjectFolder) {
  case "cpp":
    subjectText = "C++";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/c-course-1";
    break;
  case "java":
    subjectText = "Java";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/java-course";
    addTryitSpaces(subjectText);
    break;
  case "bootstrap4":
    subjectText = "Bootstrap 4";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/bootstrap-4-course";
    break;  
  case "xml":
    subjectText = "XML";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/xml-course";
    break;
  case "jquery":
    subjectText = "jQuery";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/jquery-course";
    break;
  case "accessibility":
    subjectText = "Accessibility";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/accessibility-course";
    break;
  case "bootstrap":
    subjectText = "Bootstrap 3";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/bootstrap-course";
    break;
  case "html":
    subjectText = "HTML";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/html-course";
    break;
  case "tags":
    subjectText = "HTML";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/html-course";
    break;
  case "css":
    subjectText = "CSS";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/css-course";
    break;
  case "cssref":
    subjectText = "CSS";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/css-course";
    break;
  case "js":
    subjectText = "JavaScript";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/javascript-course";
    break;
  case "jsref":
    subjectText = "JavaScript";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/javascript-course";
    break;
  case "react":
    subjectText = "React.js";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/react-js-course";
    if (upshowcaselink.classList.contains("showcasebackend") == true) {
      upshowcase120.srcset = "/images/img_backend_120_react.png";
      upshowcase160.srcset = "/images/img_backend_160_react.png";
      upshowcase300.srcset = "/images/img_backend_300_react.png";
      upshowcase3001.srcset = "/images/img_backend_300_react.png";  
    } else if (lowshowcaselink.classList.contains("showcasebackend") == true) {
      lowshowcase120.srcset = "/images/img_backend_120_react.png";
      lowshowcase160.srcset = "/images/img_backend_160_react.png";
      lowshowcase300.srcset = "/images/img_backend_300_react.png";
      lowshowcase3001.srcset = "/images/img_backend_300_react.png";  
    }
    addTryitSpaces(subjectText);
    break;
  case "sql":
    subjectText = "SQL";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/sql-course";
    addTryitSpaces(subjectText);    
    break;
  case "mysql":
    addTryitSpaces("SQL");
    break; 
  case "php":
    subjectText = "PHP";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/php-course";
    if (upshowcaselink.classList.contains("showcasebackend") == true) {
      upshowcase120.srcset = "/images/img_backend_120_php.png";
      upshowcase160.srcset = "/images/img_backend_160_php.png";
      upshowcase300.srcset = "/images/img_backend_300_php.png";
      upshowcase3001.srcset = "/images/img_backend_300_php.png";  
    } else if (lowshowcaselink.classList.contains("showcasebackend") == true) {
      lowshowcase120.srcset = "/images/img_backend_120_php.png";
      lowshowcase160.srcset = "/images/img_backend_160_php.png";
      lowshowcase300.srcset = "/images/img_backend_300_php.png";
      lowshowcase3001.srcset = "/images/img_backend_300_php.png";  
    }
    addTryitSpaces(subjectText);
    break;
  case "cybersecurity":
    subjectText = "Cyber Security";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/cyber-security-course";
    break;
  case "r":
    subjectText = "R";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/r-course";
    break;
  case "numpy":
    subjectText = "Numpy";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/numpy-course";
    if (upshowcaselink.classList.contains("showcasebackend") == true) {
      upshowcase120.srcset = "/images/img_backend_120_numpy.png";
      upshowcase160.srcset = "/images/img_backend_160_numpy.png";
      upshowcase300.srcset = "/images/img_backend_300_numpy.png";
      upshowcase3001.srcset = "/images/img_backend_300_numpy.png";  
    } else if (lowshowcaselink.classList.contains("showcasebackend") == true) {
      lowshowcase120.srcset = "/images/img_backend_120_numpy.png";
      lowshowcase160.srcset = "/images/img_backend_160_numpy.png";
      lowshowcase300.srcset = "/images/img_backend_300_numpy.png";
      lowshowcase3001.srcset = "/images/img_backend_300_numpy.png";  
    }
    addTryitSpaces("Python");
    break;
  case "django":
    if (upshowcaselink.classList.contains("showcasebackend") == true) {
      upshowcase120.srcset = "/images/img_backend_120_django.png";
      upshowcase160.srcset = "/images/img_backend_160_django.png";
      upshowcase300.srcset = "/images/img_backend_300_django.png";
      upshowcase3001.srcset = "/images/img_backend_300_django.png";  
    } else if (lowshowcaselink.classList.contains("showcasebackend") == true) {
      lowshowcase120.srcset = "/images/img_backend_120_django.png";
      lowshowcase160.srcset = "/images/img_backend_160_django.png";
      lowshowcase300.srcset = "/images/img_backend_300_django.png";
      lowshowcase3001.srcset = "/images/img_backend_300_django.png";  
    }
    addTryitSpaces("Django");
    break; 
  case "typescript":
    if (upshowcaselink.classList.contains("showcasebackend") == true) {
      upshowcase120.srcset = "/images/img_backend_120_ts.png";
      upshowcase160.srcset = "/images/img_backend_160_ts.png";
      upshowcase300.srcset = "/images/img_backend_300_ts.png";
      upshowcase3001.srcset = "/images/img_backend_300_ts.png";  
    } else if (lowshowcaselink.classList.contains("showcasebackend") == true) {
      lowshowcase120.srcset = "/images/img_backend_120_ts.png";
      lowshowcase160.srcset = "/images/img_backend_160_ts.png";
      lowshowcase300.srcset = "/images/img_backend_300_ts.png";
      lowshowcase3001.srcset = "/images/img_backend_300_ts.png";  
    }
    addTryitSpaces("TypeScript");
    break; 
  case "nodejs":
    if (upshowcaselink.classList.contains("showcasebackend") == true) {
      upshowcase120.srcset = "/images/img_backend_120_node.png";
      upshowcase160.srcset = "/images/img_backend_160_node.png";
      upshowcase300.srcset = "/images/img_backend_300_node.png";
      upshowcase3001.srcset = "/images/img_backend_300_node.png";  
    } else if (lowshowcaselink.classList.contains("showcasebackend") == true) {
      lowshowcase120.srcset = "/images/img_backend_120_node.png";
      lowshowcase160.srcset = "/images/img_backend_160_node.png";
      lowshowcase300.srcset = "/images/img_backend_300_node.png";
      lowshowcase3001.srcset = "/images/img_backend_300_node.png";  
    }
    addTryitSpaces("Node.js");
    break; 
  case "pandas":
    subjectText = "Pandas";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/pandas-course";
    if (upshowcaselink.classList.contains("showcasebackend") == true) {
      upshowcase120.srcset = "/images/img_backend_120_pandas.png";
      upshowcase160.srcset = "/images/img_backend_160_pandas.png";
      upshowcase300.srcset = "/images/img_backend_300_pandas.png";
      upshowcase3001.srcset = "/images/img_backend_300_pandas.png";  
    } else if (lowshowcaselink.classList.contains("showcasebackend") == true) {
      lowshowcase120.srcset = "/images/img_backend_120_pandas.png";
      lowshowcase160.srcset = "/images/img_backend_160_pandas.png";
      lowshowcase300.srcset = "/images/img_backend_300_pandas.png";
      lowshowcase3001.srcset = "/images/img_backend_300_pandas.png";  
    }
    addTryitSpaces("Python");
    break;
  case "python":
    subjectText = "Python";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/python-course";
    if (upshowcaselink.classList.contains("showcasebackend") == true) {
      upshowcase120.srcset = "/images/img_backend_120_python.png";
      upshowcase160.srcset = "/images/img_backend_160_python.png";
      upshowcase300.srcset = "/images/img_backend_300_python.png";
      upshowcase3001.srcset = "/images/img_backend_300_python.png";  
    } else if (lowshowcaselink.classList.contains("showcasebackend") == true) {
      lowshowcase120.srcset = "/images/img_backend_120_python.png";
      lowshowcase160.srcset = "/images/img_backend_160_python.png";
      lowshowcase300.srcset = "/images/img_backend_300_python.png";
      lowshowcase3001.srcset = "/images/img_backend_300_python.png";  
    }
    addTryitSpaces(subjectText);
    break;
  case "cs":
    subjectText = "C#";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog/products/c-course";
    addTryitSpaces(subjectText);
    break;    
  default:
    subjectText = "a";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog";
}
if (typeof subjectText == 'undefined') {
    subjectText = "a";
    subjectLink = "https://shop.w3schools.com/collections/course-catalog";
}
if (subjectText != "a") {
  document.getElementById("courses_subject_text").innerHTML = "a " + subjectText + "<br>";
  document.getElementById("courses_subject_img_link").href = subjectLink;
  document.getElementById("courses_get_started_btn").href = subjectLink;
}
</script>


<div id="stickypos" class="sidesection" style="text-align:center;position:sticky;top:50px;">
  <div id="stickyadcontainer">
    <div style="position:relative;margin:auto;">
      
      <div id="adngin-sidebar_sticky-0"></div>
        <script>
        function secondSnigel() {
          if(window.adngin && window.adngin.adnginLoaderReady) {
            if (Number(w3_getStyleValue(document.getElementById("main"), "height").replace("px", "")) > 2200) {         
              if (document.getElementById("adngin-mid_content-0")) {
                adngin.queue.push(function(){  adngin.cmd.startAuction(["sidebar_sticky", "mid_content" ]); });
              } else {
                adngin.queue.push(function(){  adngin.cmd.startAuction(["sidebar_sticky"]); });
              }
            } else {
              if (document.getElementById("adngin-mid_content-0")) {
                adngin.queue.push(function(){  adngin.cmd.startAuction(["mid_content"]); });
              }
            }
          } else {
            window.addEventListener('adnginLoaderReady', function() {
              if (Number(w3_getStyleValue(document.getElementById("main"), "height").replace("px", "")) > 2200) {
                if (document.getElementById("adngin-mid_content-0")) {
                  adngin.queue.push(function(){  adngin.cmd.startAuction(["sidebar_sticky", "mid_content" ]); });
                } else {
                  adngin.queue.push(function(){  adngin.cmd.startAuction(["sidebar_sticky"]); });
                }
              } else {
                if (document.getElementById("adngin-mid_content-0")) {
                  adngin.queue.push(function(){  adngin.cmd.startAuction(["mid_content"]); });
                }
              }
            });
          }
        }
      </script>
      
    </div>
  </div>
</div>

<script>
uic_r_c()
</script>

</div>
</div>
<div id="footer" class="footer w3-container w3-white">

<hr>

<div style="overflow:auto">
  <div class="bottomad">
    <!-- BottomMediumRectangle -->
    <!--<pre>bottom_medium_rectangle, all: [970,250][300,250][336,280]</pre>-->
    <div id="adngin-bottom_left-0" style="padding:0 10px 10px 0;float:left;width:auto;"></div>
    <!-- adspace bmr -->
    <!-- RightBottomMediumRectangle -->
    <!--<pre>right_bottom_medium_rectangle, desktop: [300,250][336,280]</pre>-->
    <div id="adngin-bottom_right-0" style="padding:0 10px 10px 0;float:left;width:auto;"></div>
  </div>
</div>

<hr>
<div class="w3-row-padding w3-center w3-small" style="margin:auto">
  <div class="w3-col m12 w3-hide-medium w3-hide-small" style="width:20%">
    <a class="w3-btn ws-black w3-block w3-round" href="javascript:void(0);" onclick="displayError();return false" style="white-space:nowrap;text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;">Report Error</a>
  </div>
  <div class="w3-col m12 w3-hide-large">
    <a class="w3-btn ws-black w3-block w3-round" href="javascript:void(0);" onclick="displayError();return false" style="white-space:nowrap;text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;">Report Error</a>
  </div>


  <div class="w3-col m12 w3-hide-medium w3-hide-small" style="width:20%">
    <a class="w3-btn ws-black w3-block w3-round" href="/spaces/index.html" style="text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;">Spaces</a>
  </div>
  <div class="w3-col m12 w3-hide-large">
    <a class="w3-btn ws-black w3-block w3-round" href="/spaces/index.html" style="text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;">Spaces</a>
  </div>


  <div class="w3-col m12 w3-hide-medium w3-hide-small" style="width:20%">
    <a class="w3-btn ws-black w3-block w3-round" href="/pro/index.php" style="text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;" title="Upgrade to Improve Your Learning Experiences">Upgrade</a>
  </div>
  <div class="w3-col m12 w3-hide-large">
    <a class="w3-btn ws-black w3-block w3-round" href="/pro/index.php" style="text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;" title="Upgrade to Improve Your Learning Experiences">Upgrade</a>
  </div>

  <div class="w3-col m12 w3-hide-medium w3-hide-small" style="width:20%">
    <a class="w3-btn ws-black w3-block w3-round" href="https://campus.w3schools.com/pages/newsletter" target="_blank" style="white-space:nowrap;text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;">Newsletter</a>
  </div>
  <div class="w3-col m12 w3-hide-large">
    <a class="w3-btn ws-black w3-block w3-round" href="https://campus.w3schools.com/pages/newsletter" target="_blank" style="white-space:nowrap;text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;">Newsletter</a>
  </div>


  <div class="w3-col m12 w3-hide-medium w3-hide-small" style="width:20%">
    <a class="w3-btn ws-black w3-block w3-round" href="https://shop.w3schools.com/collections/certifications" target="_blank" style="text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;">Get Certified</a>
  </div>

  <div class="w3-col m12 w3-hide-large">
    <a class="w3-btn ws-black w3-block w3-round" href="https://shop.w3schools.com/collections/certifications" target="_blank" style="text-decoration:none;margin-top:1px;margin-bottom:1px;font-size:17px;font-family:Source Sans Pro, sans-serif;">Get Certified</a>
  </div>
</div>

<hr>
<div class="ws-grey w3-padding w3-margin-bottom" id="err_form" style="display:none;position:relative">
<span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright w3-large">&times;</span>

<h2>Report Error</h2>

<p>If you want to report an error, or if you want to make a suggestion, do not hesitate to send us an e-mail:</p>
<p>help@w3schools.com</p>
<br>

<!--
<h2>Your Suggestion:</h2>
<form>
<div class="w3-section">      
<label for="err_email">Your E-mail:</label>
<input class="w3-input w3-border" type="text" style="margin-top:5px;width:100%" id="err_email" name="err_email">
</div>
<div class="w3-section">      
<label for="err_email">Page address:</label>
<input class="w3-input w3-border" type="text" style="width:100%;margin-top:5px" id="err_url" name="err_url" disabled="disabled">
</div>
<div class="w3-section">
<label for="err_email">Description:</label>
<textarea rows="10" class="w3-input w3-border" id="err_desc" name="err_desc" style="width:100%;margin-top:5px;resize:vertical;"></textarea>
</div>
<div class="form-group">        
<button type="button" class="w3-button w3-dark-grey" onclick="sendErr()">Submit</button>
</div>
<br>
</form>
-->

</div>
<div class="w3-container ws-grey w3-padding" id="err_sent" style="display:none;position:relative">
<span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright">&times;</span>     
<h2>Thank You For Helping Us!</h2>
<p>Your message has been sent to W3Schools.</p>
</div>

<div class="w3-row w3-center w3-small">
<div class="w3-col l3 m6 s12">
<div class="top10">
<h5 style="font-family: 'Source Sans Pro', sans-serif;">Top Tutorials</h5>
<a href="/html/default.asp">HTML Tutorial</a><br>
<a href="/css/default.asp">CSS Tutorial</a><br>
<a href="/js/default.asp">JavaScript Tutorial</a><br>
<a href="/howto/default.asp">How To Tutorial</a><br>
<a href="/sql/default.asp">SQL Tutorial</a><br>
<a href="/python/default.asp">Python Tutorial</a><br>
<a href="/w3css/default.asp">W3.CSS Tutorial</a><br>
<a href="/bootstrap/bootstrap_ver.asp">Bootstrap Tutorial</a><br>
<a href="/php/default.asp">PHP Tutorial</a><br>
<a href="/java/default.asp">Java Tutorial</a><br>
<a href="/cpp/default.asp">C++ Tutorial</a><br>
<a href="/jquery/default.asp">jQuery Tutorial</a><br>
</div>
</div>
<div class="w3-col l3 m6 s12">
<div class="top10">
<h5 style="font-family: 'Source Sans Pro', sans-serif;">Top References</h5>
<a href="/tags/default.asp">HTML Reference</a><br>
<a href="/cssref/index.php">CSS Reference</a><br>
<a href="/jsref/default.asp">JavaScript Reference</a><br>
<a href="/sql/sql_ref_keywords.asp">SQL Reference</a><br>
<a href="/python/python_reference.asp">Python Reference</a><br>
<a href="/w3css/w3css_references.asp">W3.CSS Reference</a><br>
<a href="/bootstrap/bootstrap_ref_all_classes.asp">Bootstrap Reference</a><br>
<a href="/php/php_ref_overview.asp">PHP Reference</a><br>
<a href="/colors/colors_names.asp">HTML Colors</a><br>
<a href="/java/java_ref_keywords.asp">Java Reference</a><br>
<a href="/angular/angular_ref_directives.asp">Angular Reference</a><br>
<a href="/jquery/jquery_ref_overview.asp">jQuery Reference</a><br>
</div>
</div>
<div class="w3-col l3 m6 s12">
<div class="top10">
<h5 style="font-family: 'Source Sans Pro', sans-serif;">Top Examples</h5>
<a href="/html/html_examples.asp">HTML Examples</a><br>
<a href="/css/css_examples.asp">CSS Examples</a><br>
<a href="/js/js_examples.asp">JavaScript Examples</a><br>
<a href="/howto/default.asp">How To Examples</a><br>
<a href="/sql/sql_examples.asp">SQL Examples</a><br>
<a href="/python/python_examples.asp">Python Examples</a><br>
<a href="/w3css/w3css_examples.asp">W3.CSS Examples</a><br>
<a href="/bootstrap/bootstrap_examples.asp">Bootstrap Examples</a><br>
<a href="/php/php_examples.asp">PHP Examples</a><br>
<a href="/java/java_examples.asp">Java Examples</a><br>
<a href="/xml/xml_examples.asp">XML Examples</a><br>
<a href="/jquery/jquery_examples.asp">jQuery Examples</a><br>
</div>
</div>
<div class="w3-col l3 m6 s12">
<div class="top10">
<!--
<h4>Web Certificates</h4>
<a href="/cert/default.asp">HTML Certificate</a><br>
<a href="/cert/default.asp">CSS Certificate</a><br>
<a href="/cert/default.asp">JavaScript Certificate</a><br>
<a href="/cert/default.asp">SQL Certificate</a><br>
<a href="/cert/default.asp">Python Certificate</a><br>
<a href="/cert/default.asp">PHP Certificate</a><br>
<a href="/cert/default.asp">Bootstrap Certificate</a><br>
<a href="/cert/default.asp">XML Certificate</a><br>
<a href="/cert/default.asp">jQuery Certificate</a><br>
<a href="//www.w3schools.com/cert/default.asp" class="w3-button w3-margin-top w3-dark-grey" style="text-decoration:none">
Get Certified &raquo;</a>
-->

<a href="https://shop.w3schools.com/collections/course-catalog" target="_blank"><h5 style="font-family: 'Source Sans Pro', sans-serif;">Get Certified</h5></a>
<a href="https://campus.w3schools.com/collections/certifications/products/html-certificate" target="_blank">HTML Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/css-certificate" target="_blank">CSS Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/javascript-certificate" target="_blank">JavaScript Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/front-end-certificate" target="_blank">Front End Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/sql-certificate" target="_blank">SQL Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/python-certificate" target="_blank">Python Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/php-certificate" target="_blank">PHP Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/jquery-certificate" target="_blank">jQuery Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/java-certificate" target="_blank">Java Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/c-certificate" target="_blank">C++ Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/c-certificate-1" target="_blank">C# Certificate</a><br>
<a href="https://campus.w3schools.com/collections/certifications/products/xml-certificate" target="_blank">XML Certificate</a><br>
<!--<a href="https://shop.w3schools.com/collections/course-catalog" target="_blank" class="w3-button w3-margin-top ws-black ws-hover-black w3-round" style="text-decoration:none;font-size:16px;font-family:Source Sans Pro, sans-serif;">
Get Certified &#10095;</a>-->

</div>
</div>        
</div>        

<hr>
<div class="w3-opacity" style="font-size:12px;text-align:right;margin-bottom:16px;margin-right:8px;">
    <a href="/forum/default.asp" target="_blank" class="xw3-text-grey xw3-hover-text-black" style="text-decoration:none" title="Forum">FORUM</a> |
    <a href="/about/default.asp" target="_top" class="xw3-text-grey xw3-hover-text-black" style="text-decoration:none" title="About W3Schools">ABOUT</a>
</div>
<div class="w3-center w3-small w3-opacity">
W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning.
Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.
While using W3Schools, you agree to have read and accepted our <a href="/about/about_copyright.asp">terms of use</a>, 
<a href="/about/about_privacy.asp">cookie and privacy policy</a>.<br><br>
<a href="/about/about_copyright.asp">Copyright 1999-2023</a> by Refsnes Data. All Rights Reserved.<br>
<a href="//www.w3schools.com/w3css/default.asp">W3Schools is Powered by W3.CSS</a>.<br><br>
</div>
<div class="w3-center w3-small">
<a href="//www.w3schools.com">
    <i class="fa fa-logo ws-text-green ws-hover-text-green" style="position:relative;font-size:42px!important;"></i>
</div>
<br><br>
</div>
</div>
<script src="/lib/w3schools_footer.js?update=20220202"></script>

<script>
  MyLearning.loadUser('footer', function () {
    if (UserSession.loggedIn) {
      document.getElementById("signupbtn_topnav").style.display = "none";
      document.getElementById("spacesbtn_topnav").style.display = "block";
    } else {
      addMyLearnButt();
    }
  });
  function docReady(fn) {
    document.addEventListener("DOMContentLoaded", fn);
    if (document.readyState === "interactive" || document.readyState === "complete" ) {
      fn();
    }
  }
  uic_r_z();
  uic_r_d()

function addMyLearnButt() {
  let nav = document.getElementsByClassName("nextprev");
  if (document.body.contains(nav[1])) {
    if ((nav[1].firstElementChild.innerHTML.indexOf("Previous") || nav[1].firstElementChild.innerHTML.indexOf("Home") !== -1) && (nav[1].firstElementChild.nextElementSibling.innerHTML.indexOf("Next") !== -1)) {
      let myLearnButt = document.createElement("a");
      myLearnButt.innerHTML="Log in to track progress";
      myLearnButt.classList.add("w3-btn", "w3-hide-small", "myl-nav-butt");
      myLearnButt.href="https://www.w3schools.com/signup/?utm_source=classic&utm_medium=" + subjectFolder + "_tutorial&utm_campaign=button_lower_navigation";
      myLearnButt.setAttribute("title", "Sign Up and improve Your Learning Experience");
      myLearnButt.setAttribute("target", "_blank");
      nav[1].classList.add("w3-center");
      nav[1].firstElementChild.insertAdjacentElement("afterend", myLearnButt);
    }
  }
}
</script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
<![endif]-->
</body>
</html>
