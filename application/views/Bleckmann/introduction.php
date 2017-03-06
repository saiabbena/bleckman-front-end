<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<main class="main" role="main" id="main-content">
  <div class="container">
    <header class="page-title grid-16 desktop-16">
      <div class="content">
        <h1 class="title">Overview</h1>
        <p class="subtitle">BleckMann webservice</p>
      </div>
    </header>
    <div>
      <ol class="api-menu">
        <li class="first"><a href="introduction.php" class="active">Overview</a></li>
        <li><a href="apicalls.php">Api Calls</a></li>
        <li><a href="/apis/barcode-webservice/use-cases">Use Case</a></li>
        <li><a href="/apis/barcode-webservice/documentation">Documentation</a></li>
        <li class="last"><a href="/content/request-api-key">Request API Key</a></li>
      </ol>
    </div>
    <nav class="sub-menu menu-toggle grid-3 portrait-hidden">
      <h1 class="title">Contents</h1>
      <a name="table-of-contents"></a>
      <ol class="toc-node-numbers">
        <li class="toc-node-level-1 first"><a href="#mode1"><span class="toc-text">Operation Mode1</span></a></li>
        <li class="toc-node-level-1"><a href="#mode2"><span class="toc-text">Operation Mode2</span></a></li>
		 <li class="toc-node-level-1"><a href="#mode3"><span class="toc-text">Operation Mode3</span></a></li>
		 <li class="toc-node-level-1"><a href="#mode4"><span class="toc-text">Operation Mode4</span></a></li>
		 <li class="toc-node-level-5"><a href="#mode5"><span class="toc-text">Operation Mode5</span></a></li>
      </ol>
    </nav>
    <article class="portrait-8 grid-6 desktop-10">
      <div class="portrait-8 grid-6 desktop-10">
        <div class="content">
          <div>
            <div class="toc-item-anchor"><a name="mode1"></a></div>
            <h2 class="h2 title toc-headings">Operation Mode1</h2>
        <p> Operation Mode 1 is used to place a return order only with consumer information and without any order and order lines information, and this operation mode is performed by consumer.
Note - In the this document you will encounter with word "baseurl" in the API CALLs, baseurl means 
Base URL UAT - "api.bleckmann.apoyar.eu"</p>

            <div class="toc-item-anchor"><a name="mode2"></a></div>
            <h2 class="h2 title toc-headings toc-headings">Operation Mode2</h2>
            <p>Operation Mode 2 is used to place a return order order and order lines information getting by using ConsumerEmail and Orderid, and this operation mode is performed by consumer.
Note - In the this document you will encounter with word "baseurl" in the API CALLs, baseurl means 
Base URL UAT - "api.bleckmann.apoyar.eu"
</p>
          
            <div class="toc-item-anchor"><a name="mode3"></a></div>
            <h2 class="h2 title toc-headings">Operation Mode3</h2>
            <p>Operation Mode 3 is used to place a return order without order and orderlines information only with consumer information and which is placed by Customer Service Representative.
Note - In the this document you will encounter with word "baseurl" in the API CALLs 
Base URL UAT – "api.bleckmann.apoyar.eu"
</p>
            <div class="toc-item-anchor"><a name="mode4"></a></div>
            <h2 class="h2 title toc-headings toc-headings">Operation Mode4</h2>
            <p>Operation Mode 4 is used to place a return order with order and order lines information getting by using ConsumerEmail or Orderid or ConsumerName or Phone by that get response one or more Orders from that user will select a order by using selected order Consumeremail and Orderid getting the Order and orderliness and placing the returnorder with that information, and this operation mode is performed by Customer Service Representative.
Note - In the this document you will encounter with word "baseurl" in the API CALLs, baseurl means 
Base URL UAT - "api.bleckmann.apoyar.eu"
</p>

  <div class="toc-item-anchor"><a name="mode5"></a></div>
            <h2 class="h2 title toc-headings toc-headings">Operation Mode5</h2>
            <p>Operation Mode 5 means consuming the api calls by customer at their end and generating the return order label. Process used to place a return order with order and order lines information.
Note - In this document you will encounter with word "baseurl" in the API CALLs, baseurl means 
Base URL UAT - "api.bleckmann.apoyar.eu"
Base URL LIVE- "returns.bleckmann.com:81/bmapi/bleckmannapi"

</p>
          </div>
        </div>
      </div>
    </article>
  </div>
</main>
<style type="text/css">
  
a {
    outline: medium none;
}
a img {
    border: medium none;
}
a, a:link, a:visited, a:active {
    text-decoration: none;
}
a:hover, a:focus {
    text-decoration: underline;
}
:focus {
    outline: 0 none;
}
b, strong {
    font-weight: bold;
}
em, i {
    font-style: italic;
}
.active, .active-trail {
    font-weight: bold;
}
ul li {
    list-style: outside none none;
}
.cf::before, .cf::after {
    content: "";
    display: table;
}
.cf::after {
    clear: both;
}
.cf {
}
.field-name-body ol, .field-name-body ul {
    margin: 0 0 0 10px;
}
.field-name-body ul li {
    list-style: inside none square;
}
.tabs li {
    display: inline;
    padding: 0 10px;
}
.primary {
    margin: 4px 0;
    padding: 3px 0;
}
.primary li {
}
.secondary li {
}
.pager li {
    display: inline-block;
}
.breadcrumb {
    margin: 0;
}
ul.breadcrumb li {
    display: inline;
    margin: 0 0 0 10px;
}
.form-type-textfield {
}
.form-type-checkbox {
    margin: 0;
}
.form-type-radio {
    margin: 0;
}
.form-type-textarea {
    margin: 0;
}
.form-type-managed-file {
    margin: 0;
}
fieldset {
}
label {
    display: inline;
    font-weight: bold;
}
textarea {
}
input {
}
input[type="radio"] {
    vertical-align: middle;
}
input[type="checkbox"] {
    vertical-align: middle;
}
.ie7 input[type="checkbox"] {
    vertical-align: baseline;
}
input[type="file"] {
    vertical-align: middle;
}
input[type="search"] {
}
form small, form .description {
    color: #444;
    display: block;
    font-size: 12px;
    text-align: left;
}
.form-field-required {
}
.form-field-required::after {
    content: " * ";
}
fieldset legend {
    width: 100%;
}
.block .content::before, .block .content::after {
    content: "";
    display: table;
}
.block .content::after {
    clear: both;
}
.block .content {
}
body.toolbar div#admin-toolbar.vertical {
    top: 130px;
}
body.toolbar-drawer div#admin-toolbar.vertical {
    top: 66px;
}
#admin-toolbar {
    top: 20px !important;
}
.page-admin-structure-block-demo .block-region {
    background: #ffff66 none repeat scroll 0 0;
    border: 1px dotted #9f9e00;
    color: #000;
    font: 90% "Lucida Grande","Lucida Sans Unicode",sans-serif;
    margin: 0;
    padding: 5px;
    text-align: center;
    text-shadow: none;
}
.feed {
    text-indent: -9999em;
}
.feed a.feed-icon {
    background: transparent url("/misc/feed.png") repeat scroll 0 0;
    display: block;
    height: 16px;
    width: 16px;
}
a.ical-icon div {
    background-color: #900;
    color: #fff;
    display: inline;
    padding: 2px;
}
.file a.file-icon {
    background: transparent url("/modules/file/icons/text-plain.png") no-repeat scroll left center;
    padding: 2px 2px 2px 20px;
}
.file a.mime-application-pdf {
    background-image: url("/modules/file/icons/application-pdf.png");
}
.file a.mime-application-octet-stream {
    background-image: url("/modules/file/icons/application-octet-stream.png");
}
.file a.mime-application-x-executable {
    background-image: url("/modules/file/icons/application-x-executable.png");
}
.file a.mime-audio-x-generic {
    background-image: url("/modules/file/icons/audio-x-generic.png");
}
.file a.mime-image-x-generic {
    background-image: url("/modules/file/icons/image-x-generic.png");
}
.file a.mime-package-x-generic {
    background-image: url("/modules/file/icons/package-x-generic.png");
}
.file a.mime-text-html {
    background-image: url("/modules/file/icons/text-html.png");
}
.file a.mime-text-plain {
    background-image: url("/modules/file/icons/text-plain.png");
}
.file a.mime-text-x-generic {
    background-image: url("/modules/file/icons/text-x-generic.png");
}
.file a.mime-text-x-script {
    background-image: url("/modules/file/icons/text-x-script.png");
}
.file a.mime-video-x-generic {
    background-image: url("/modules/file/icons/video-x-generic.png");
}
.file a.mime-x-office-document {
    background-image: url("/modules/file/icons/x-office-document.png");
}
.file a.mime-x-office-presentation {
    background-image: url("/modules/file/icons/x-office-presentation.png");
}
.file a.mime-x-office-spreadsheet {
    background-image: url("/modules/file/icons/x-office-spreadsheet.png");
}
.table-order-asc, .table-order-desc {
    float: right;
    height: 16px;
    width: 16px;
}
.table-order-asc {
    background: transparent url("/misc/arrow-asc.png") no-repeat scroll center top;
}
.table-order-desc {
    background: transparent url("/misc/arrow-desc.png") no-repeat scroll center top;
}
.contextual-links-region {
    outline: 2px solid transparent;
    position: relative;
}
.contextual-links-region-active {
    background-color: #ccc;
    background-image: linear-gradient(90deg, transparent 10%, rgba(255, 255, 255, 0.5) 10%);
    background-size: 10px 100px;
    outline: 1px dotted #bbb;
}
div.contextual-links-wrapper {
    display: none;
    position: absolute;
    right: 5px;
    top: 2px;
    z-index: 999;
}
html.js div.contextual-links-wrapper {
    display: block;
}
a.contextual-links-trigger {
    background: rgba(255, 255, 255, 0.9) url("/sites/all/themes/mothership/mothership/css-drupalcore/configure.png") no-repeat scroll center center;
    border: 3px dotted #cfcfcf;
    border-radius: 15px;
    display: none;
    font-size: 11px !important;
    height: 28px;
    margin: 0;
    outline: medium none;
    overflow: hidden;
    padding: 0;
    position: absolute;
    right: -7px;
    text-indent: -999px;
    top: 10px;
    width: 28px;
    z-index: 100;
}
div.contextual-links-active a.contextual-links-trigger {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: rgba(255, 255, 255, 1) url("/sites/all/themes/mothership/mothership/css-drupalcore/configure.png") no-repeat scroll center center;
    border-color: #b3b3b3 #b3b3b3 -moz-use-text-color;
    border-image: none;
    border-style: solid solid none;
    border-width: 1px 1px medium;
    box-shadow: 2px 1px 2px -1px rgba(0, 0, 0, 0.5);
}
div ul.contextual-links {
    background: rgba(250, 250, 250, 0.9) none repeat scroll 0 0;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.5);
    display: none;
    margin: 0;
    padding: 5px 10px 5px 2px;
    position: absolute;
    right: 0;
    text-align: left;
    top: 20px;
    white-space: nowrap;
    z-index: 1;
}
.contextual-links-region:hover a.contextual-links-trigger, div.contextual-links-active a.contextual-links-trigger, div.contextual-links-active ul.contextual-links, div.contextual-links-wrapper ul.contextual-links li {
    display: block !important;
    float: none !important;
}
ul.contextual-links li {
    border-bottom: 1px dotted #b3b3b3 !important;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
    font-size: 11px !important;
    list-style: outside none none !important;
    margin: 0 !important;
    text-align: left !important;
    text-transform: uppercase;
}
ul.contextual-links li:last-child {
    border-bottom: medium none !important;
}
ul.contextual-links li a {
    color: #999 !important;
    display: block !important;
    font-weight: bold;
    padding: 0 17px 0 0 !important;
}
ul.contextual-links li a:hover {
    background-color: #bfdcee;
    color: #bfdcee;
    text-decoration: none;
}
.sprite-swoosh, .swoosh::before, .swoosh::after {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-swoosh.png");
}
.sprite-icons {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-icons.png");
}
.sprite-header-light {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-header-light.png");
}
.sprite-flags, .language-switch .language::before, .language-popup .language::before, .language-switch-dep a::before {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-flags.png");
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
    display: block;
}
audio, canvas, video {
    display: inline-block;
}
audio:not([controls]) {
    display: none;
    height: 0;
}
[hidden], template {
    display: none;
}
html {
    font-family: sans-serif;
}
body {
    margin: 0;
}
a {
    background: transparent none repeat scroll 0 0;
}
a:focus {
    outline: thin dotted;
}
a:active, a:hover {
    outline: 0 none;
}
h1 {
    font-size: 2em;
    margin: 0.67em 0;
}
abbr[title] {
    border-bottom: 1px dotted;
}
b, strong {
    font-weight: bold;
}
dfn {
    font-style: italic;
}
hr {
    box-sizing: content-box;
    height: 0;
}
mark {
    background: #ff0 none repeat scroll 0 0;
    color: #000;
}
code, kbd, pre, samp {
    font-family: monospace,serif;
    font-size: 1em;
}
pre {
    white-space: pre-wrap;
}
q {
    quotes: """ """ "‘" "’";
}
small {
    font-size: 80%;
}
sub, sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}
sup {
    top: -0.5em;
}
sub {
    bottom: -0.25em;
}
img {
    border: 0 none;
}
svg:not(:root) {
    overflow: hidden;
}
figure {
    margin: 0;
}
fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}
legend {
    border: 0 none;
    padding: 0;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: 100%;
    margin: 0;
}
button, input {
    line-height: normal;
}
button, select {
    text-transform: none;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    cursor: pointer;
}
button[disabled], html input[disabled] {
    cursor: default;
}
input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
}
input[type="search"] {
    box-sizing: content-box;
}
button::-moz-focus-inner, input::-moz-focus-inner {
    border: 0 none;
    padding: 0;
}
textarea {
    overflow: auto;
    vertical-align: top;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
.mfp-bg {
    background: #0b0b0b none repeat scroll 0 0;
    height: 100%;
    left: 0;
    opacity: 0.8;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1042;
}
.mfp-wrap {
    backface-visibility: hidden;
    height: 100%;
    left: 0;
    outline: medium none !important;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1043;
}
.mfp-container {
    box-sizing: border-box;
    height: 100%;
    left: 0;
    padding: 0 8px;
    position: absolute;
    text-align: center;
    top: 0;
    width: 100%;
}
.mfp-container::before {
    content: "";
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}
.mfp-align-top .mfp-container::before {
    display: none;
}
.mfp-content {
    display: inline-block;
    margin: 0 auto;
    position: relative;
    text-align: left;
    vertical-align: middle;
    z-index: 1045;
}
.mfp-inline-holder .mfp-content, .mfp-ajax-holder .mfp-content {
    cursor: auto;
    width: 100%;
}
.mfp-ajax-cur {
    cursor: progress;
}
.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
    cursor: zoom-out;
}
.mfp-zoom {
    cursor: zoom-in;
}
.mfp-auto-cursor .mfp-content {
    cursor: auto;
}
.mfp-close, .mfp-arrow, .mfp-preloader, .mfp-counter {
    -moz-user-select: none;
}
.mfp-loading.mfp-figure {
    display: none;
}
.mfp-hide {
    display: none !important;
}
.mfp-preloader {
    color: #ccc;
    left: 8px;
    margin-top: -0.8em;
    position: absolute;
    right: 8px;
    text-align: center;
    top: 50%;
    width: auto;
    z-index: 1044;
}
.mfp-preloader a {
    color: #ccc;
}
.mfp-preloader a:hover {
    color: #fff;
}
.mfp-s-ready .mfp-preloader {
    display: none;
}
.mfp-s-error .mfp-content {
    display: none;
}
button.mfp-close, button.mfp-arrow {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    box-shadow: none;
    cursor: pointer;
    display: block;
    outline: medium none;
    overflow: visible;
    padding: 0;
    z-index: 1046;
}
button::-moz-focus-inner {
    border: 0 none;
    padding: 0;
}
.mfp-close {
    color: #fff;
    font-family: Arial,Baskerville,monospace;
    font-size: 28px;
    font-style: normal;
    height: 44px;
    line-height: 44px;
    opacity: 0.65;
    padding: 0 0 18px 10px;
    position: absolute;
    right: 0;
    text-align: center;
    text-decoration: none;
    top: 0;
    width: 44px;
}
.mfp-close:hover, .mfp-close:focus {
    opacity: 1;
}
.mfp-close:active {
    top: 1px;
}
.mfp-close-btn-in .mfp-close {
    color: #333;
}
.mfp-image-holder .mfp-close, .mfp-iframe-holder .mfp-close {
    color: #fff;
    padding-right: 6px;
    right: -6px;
    text-align: right;
    width: 100%;
}
.mfp-counter {
    color: #ccc;
    font-size: 12px;
    line-height: 18px;
    position: absolute;
    right: 0;
    top: 0;
}
.mfp-arrow {
    height: 110px;
    margin: -55px 0 0;
    opacity: 0.65;
    padding: 0;
    position: absolute;
    top: 50%;
    width: 90px;
}
.mfp-arrow:active {
    margin-top: -54px;
}
.mfp-arrow:hover, .mfp-arrow:focus {
    opacity: 1;
}
.mfp-arrow::before, .mfp-arrow::after, .mfp-arrow .mfp-b, .mfp-arrow .mfp-a {
    border: medium inset transparent;
    content: "";
    display: block;
    height: 0;
    left: 0;
    margin-left: 35px;
    margin-top: 35px;
    position: absolute;
    top: 0;
    width: 0;
}
.mfp-arrow::after, .mfp-arrow .mfp-a {
    border-bottom-width: 13px;
    border-top-width: 13px;
    top: 8px;
}
.mfp-arrow::before, .mfp-arrow .mfp-b {
    border-bottom-width: 21px;
    border-top-width: 21px;
    opacity: 0.7;
}
.mfp-arrow-left {
    left: 0;
}
.mfp-arrow-left::after, .mfp-arrow-left .mfp-a {
    border-right: 17px solid #fff;
    margin-left: 31px;
}
.mfp-arrow-left::before, .mfp-arrow-left .mfp-b {
    border-right: 27px solid #3f3f3f;
    margin-left: 25px;
}
.mfp-arrow-right {
    right: 0;
}
.mfp-arrow-right::after, .mfp-arrow-right .mfp-a {
    border-left: 17px solid #fff;
    margin-left: 39px;
}
.mfp-arrow-right::before, .mfp-arrow-right .mfp-b {
    border-left: 27px solid #3f3f3f;
}
.mfp-iframe-holder {
    padding-bottom: 40px;
    padding-top: 40px;
}
.mfp-iframe-holder .mfp-content {
    line-height: 0;
    max-width: 900px;
    width: 100%;
}
.mfp-iframe-holder .mfp-close {
    top: -40px;
}
.mfp-iframe-scaler {
    height: 0;
    overflow: hidden;
    padding-top: 56.25%;
    width: 100%;
}
.mfp-iframe-scaler iframe {
    background: #000 none repeat scroll 0 0;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
img.mfp-img {
    box-sizing: border-box;
    display: block;
    height: auto;
    line-height: 0;
    margin: 0 auto;
    max-width: 100%;
    padding: 40px 0;
    width: auto;
}
.mfp-figure {
    line-height: 0;
}
.mfp-figure::after {
    background: #444 none repeat scroll 0 0;
    bottom: 40px;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    content: "";
    display: block;
    height: auto;
    left: 0;
    position: absolute;
    right: 0;
    top: 40px;
    width: auto;
    z-index: -1;
}
.mfp-figure small {
    color: #bdbdbd;
    display: block;
    font-size: 12px;
    line-height: 14px;
}
.mfp-figure figure {
    margin: 0;
}
.mfp-bottom-bar {
    cursor: auto;
    left: 0;
    margin-top: -36px;
    position: absolute;
    top: 100%;
    width: 100%;
}
.mfp-title {
    color: #f3f3f3;
    line-height: 18px;
    overflow-wrap: break-word;
    padding-right: 36px;
    text-align: left;
}
.mfp-image-holder .mfp-content {
    max-width: 100%;
}
.mfp-gallery .mfp-image-holder .mfp-figure {
    cursor: pointer;
}
@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
.mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0;
}
.mfp-img-mobile img.mfp-img {
    padding: 0;
}
.mfp-img-mobile .mfp-figure::after {
    bottom: 0;
    top: 0;
}
.mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px;
}
.mfp-img-mobile .mfp-bottom-bar {
    background: rgba(0, 0, 0, 0.6) none repeat scroll 0 0;
    bottom: 0;
    box-sizing: border-box;
    margin: 0;
    padding: 3px 5px;
    position: fixed;
    top: auto;
}
.mfp-img-mobile .mfp-bottom-bar:empty {
    padding: 0;
}
.mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px;
}
.mfp-img-mobile .mfp-close {
    background: rgba(0, 0, 0, 0.6) none repeat scroll 0 0;
    height: 35px;
    line-height: 35px;
    padding: 0;
    position: fixed;
    right: 0;
    text-align: center;
    top: 0;
    width: 35px;
}
}
@media all and (max-width: 900px) {
.mfp-arrow {
    transform: scale(0.75);
}
.mfp-arrow-left {
    transform-origin: 0 50% 0;
}
.mfp-arrow-right {
    transform-origin: 100% 50% 0;
}
.mfp-container {
    padding-left: 6px;
    padding-right: 6px;
}
}
.mfp-ie7 .mfp-img {
    padding: 0;
}
.mfp-ie7 .mfp-bottom-bar {
    left: 50%;
    margin-left: -300px;
    margin-top: 5px;
    padding-bottom: 5px;
    width: 600px;
}
.mfp-ie7 .mfp-container {
    padding: 0;
}
.mfp-ie7 .mfp-content {
    padding-top: 44px;
}
.mfp-ie7 .mfp-close {
    padding-top: 0;
    right: 0;
    top: 0;
}
.selectboxit-container {
    display: inline-block;
    position: relative;
    vertical-align: top;
}
.selectboxit-container * {
    -moz-user-select: none;
    font: 14px Helvetica,Arial;
    outline: medium none;
    white-space: nowrap;
}
.selectboxit-container .selectboxit {
    border-radius: 6px;
    cursor: pointer;
    display: block;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 220px;
}
.selectboxit-container span, .selectboxit-container .selectboxit-options a {
    display: block;
    height: 30px;
    line-height: 30px;
}
.selectboxit-container .selectboxit:focus {
    outline: 0 none;
}
.selectboxit.selectboxit-disabled, .selectboxit-options .selectboxit-disabled {
    box-shadow: none;
    cursor: default;
    opacity: 0.65;
}
.selectboxit-text {
    margin-right: 30px;
    overflow: hidden;
    text-indent: 5px;
    text-overflow: ellipsis;
}
.selectboxit .selectboxit-option-icon-container {
    margin-left: 5px;
}
.selectboxit-container .selectboxit-options {
    border-radius: 6px;
    box-shadow: none;
    box-sizing: border-box;
    cursor: pointer;
    display: none;
    list-style: outside none none;
    margin: 0;
    min-width: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    padding: 0;
    position: absolute;
    text-align: left;
    z-index: 2147483647;
}
.selectboxit-option .selectboxit-option-anchor {
    padding: 0 2px;
}
.selectboxit-option .selectboxit-option-anchor:hover {
    text-decoration: none;
}
.selectboxit-option, .selectboxit-optgroup-header {
    list-style-type: none;
    margin: 0;
    text-indent: 5px;
}
.selectboxit-option-first {
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}
.selectboxit-optgroup-header + .selectboxit-option-first {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.selectboxit-option-last {
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}
.selectboxit-optgroup-header {
    font-weight: bold;
}
.selectboxit-optgroup-header:hover {
    cursor: default;
}
.selectboxit-arrow-container {
    position: absolute;
    right: 0;
    top: 0;
    width: 30px;
}
.selectboxit .selectboxit-arrow-container .selectboxit-arrow {
    left: 0;
    margin: 0 auto;
    position: absolute;
    right: 0;
    top: 50%;
}
.selectboxit .selectboxit-arrow-container .selectboxit-arrow.ui-icon {
    top: 30%;
}
.selectboxit-option-icon-container {
    float: left;
}
.selectboxit-container .selectboxit-option-icon {
    margin: 0;
    padding: 0;
    vertical-align: middle;
}
.selectboxit-option-icon-url {
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 18px 18px;
    float: left;
    height: 100%;
    width: 18px;
}
.selectboxit-rendering {
    display: inline-block !important;
    left: -9999px !important;
    position: absolute !important;
    top: -9999px !important;
    visibility: visible !important;
}
.selectboxit-btn {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #f5f5f5;
    background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
    background-repeat: repeat-x;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #b3b3b3;
    border-image: none;
    border-style: solid;
    border-width: 1px;
}
.selectboxit-btn.selectboxit-enabled:hover, .selectboxit-btn.selectboxit-enabled:focus, .selectboxit-btn.selectboxit-enabled:active {
    background-color: #e6e6e6;
    color: #333333;
}
.selectboxit-btn.selectboxit-enabled:hover, .selectboxit-btn.selectboxit-enabled:focus {
    background-position: 0 -15px;
    color: #333333;
    text-decoration: none;
}
.selectboxit-default-arrow {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #000000;
    height: 0;
    width: 0;
}
.selectboxit-list {
    background-color: #ffffff;
    border: 1px solid rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.selectboxit-list .selectboxit-option-anchor {
    color: #333333;
}
.selectboxit-list > .selectboxit-focus > .selectboxit-option-anchor {
    background-color: #0081c2;
    background-image: linear-gradient(to bottom, #0088cc, #0077b3);
    background-repeat: repeat-x;
    color: #ffffff;
}
.selectboxit-list > .selectboxit-disabled > .selectboxit-option-anchor {
    color: #999999;
}
.qtip {
    box-shadow: none;
    direction: ltr;
    display: none;
    font-size: 10.5px;
    left: -28000px;
    line-height: 12px;
    max-width: 280px;
    min-width: 50px;
    padding: 0;
    position: absolute;
    top: -28000px;
}
.qtip-content {
    overflow: hidden;
    overflow-wrap: break-word;
    padding: 5px 9px;
    position: relative;
    text-align: left;
}
.qtip-titlebar {
    border-width: 0 0 1px;
    font-weight: bold;
    overflow: hidden;
    padding: 5px 35px 5px 10px;
    position: relative;
}
.qtip-titlebar + .qtip-content {
    border-top-width: 0 !important;
}
.qtip-close {
    border-color: transparent;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    outline: medium none;
    position: absolute;
    right: -9px;
    top: -9px;
}
.qtip-titlebar .qtip-close {
    margin-top: -9px;
    right: 4px;
    top: 50%;
}
* html .qtip-titlebar .qtip-close {
    top: 16px;
}
.qtip-titlebar .ui-icon, .qtip-icon .ui-icon {
    direction: ltr;
    display: block;
    text-indent: -1000em;
}
.qtip-icon, .qtip-icon .ui-icon {
    border-radius: 3px;
    text-decoration: none;
}
.qtip-icon .ui-icon {
    background: transparent none no-repeat scroll -100em -100em;
    color: inherit;
    font: bold 10px/13px Tahoma,sans-serif;
    height: 14px;
    text-align: center;
    text-indent: 0;
    width: 18px;
}
.qtip-default {
    background-color: #ffffa3;
    border-color: #f1d031;
    border-style: solid;
    border-width: 1px;
    color: #555;
}
.qtip-default .qtip-titlebar {
    background-color: #ffef93;
}
.qtip-default .qtip-icon {
    background: #f1f1f1 none repeat scroll 0 0;
    border-color: #ccc;
    color: #777;
}
.qtip-default .qtip-titlebar .qtip-close {
    border-color: #aaa;
    color: #111;
}
.qtip .qtip-tip {
    margin: 0 auto;
    overflow: hidden;
    z-index: 10;
}
.qtip .qtip-tip, .qtip .qtip-tip .qtip-vml, .qtip .qtip-tip canvas {
    background: transparent none repeat scroll 0 0;
    border: 0 dashed transparent;
    color: #123456;
    position: absolute;
}
.qtip .qtip-tip canvas {
    left: 0;
    top: 0;
}
.qtip .qtip-tip .qtip-vml {
    display: inline-block;
    visibility: visible;
}
.swiper-container {
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    z-index: 1;
}
.swiper-container-no-flexbox .swiper-slide {
    float: left;
}
.swiper-container-vertical > .swiper-wrapper {
    -moz-box-orient: vertical;
    flex-direction: column;
}
.swiper-wrapper {
    box-sizing: content-box;
    display: flex;
    height: 100%;
    position: relative;
    transition-property: transform;
    width: 100%;
    z-index: 1;
}
.swiper-container-android .swiper-slide, .swiper-wrapper {
    transform: translate3d(0px, 0px, 0px);
}
.swiper-container-multirow > .swiper-wrapper {
    flex-wrap: wrap;
}
.swiper-container-free-mode > .swiper-wrapper {
    margin: 0 auto;
    transition-timing-function: ease-out;
}
.swiper-slide {
    flex-shrink: 0;
    height: 100%;
    position: relative;
    width: 100%;
}
.swiper-container-autoheight, .swiper-container-autoheight .swiper-slide {
    height: auto;
}
.swiper-container-autoheight .swiper-wrapper {
    -moz-box-align: start;
    align-items: flex-start;
    transition-property: transform, height;
}
.swiper-container .swiper-notification {
    left: 0;
    opacity: 0;
    pointer-events: none;
    position: absolute;
    top: 0;
    z-index: -1000;
}
.swiper-wp8-horizontal {
}
.swiper-wp8-vertical {
}
.swiper-button-prev, .swiper-button-next {
    background-position: center center;
    background-repeat: no-repeat;
    cursor: pointer;
    height: 44px;
    margin-top: -22px;
    position: absolute;
    top: 50%;
    width: 27px;
    z-index: 10;
}
.swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled {
    cursor: auto;
    opacity: 0;
    pointer-events: none;
}
.swiper-button-prev, .swiper-container-rtl .swiper-button-next {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20width%3D%2218%22%20height%3D%2231%22%20viewBox%3D%220%200%2018%2031%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M15.696%2030.48L18%2028.128%205.088%2015.216%2018%202.304%2015.648%200%20.384%2015.216%2015.696%2030.48z%22%20fill%3D%22%23ED8C00%22%20fill-rule%3D%22evenodd%22%2F%3E%3C%2Fsvg%3E");
    left: 10px;
    right: auto;
}
.swiper-button-prev.swiper-button-black, .swiper-container-rtl .swiper-button-next.swiper-button-black {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D\'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg\'%20viewBox%3D\'0%200%2027%2044\'%3E%3Cpath%20d%3D\'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z\'%20fill%3D\'%23000000\'%2F%3E%3C%2Fsvg%3E");
}
.swiper-button-prev.swiper-button-white, .swiper-container-rtl .swiper-button-next.swiper-button-white {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D\'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg\'%20viewBox%3D\'0%200%2027%2044\'%3E%3Cpath%20d%3D\'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z\'%20fill%3D\'%23ffffff\'%2F%3E%3C%2Fsvg%3E");
}
.swiper-button-next, .swiper-container-rtl .swiper-button-prev {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20width%3D%2218%22%20height%3D%2231%22%20viewBox%3D%220%200%2018%2031%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M2.304%2030.48L0%2028.128l12.912-12.912L0%202.304%202.352%200l15.264%2015.216L2.304%2030.48z%22%20fill%3D%22%23ED8C00%22%20fill-rule%3D%22evenodd%22%2F%3E%3C%2Fsvg%3E");
    left: auto;
    right: 10px;
}
.swiper-button-next.swiper-button-black, .swiper-container-rtl .swiper-button-prev.swiper-button-black {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D\'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg\'%20viewBox%3D\'0%200%2027%2044\'%3E%3Cpath%20d%3D\'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z\'%20fill%3D\'%23000000\'%2F%3E%3C%2Fsvg%3E");
}
.swiper-button-next.swiper-button-white, .swiper-container-rtl .swiper-button-prev.swiper-button-white {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D\'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg\'%20viewBox%3D\'0%200%2027%2044\'%3E%3Cpath%20d%3D\'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z\'%20fill%3D\'%23ffffff\'%2F%3E%3C%2Fsvg%3E");
}
.swiper-pagination {
    position: absolute;
    text-align: center;
    transform: translate3d(0px, 0px, 0px);
    transition: all 300ms ease 0s;
    z-index: 10;
}
.swiper-pagination.swiper-pagination-hidden {
    opacity: 0;
}
.swiper-pagination-fraction, .swiper-pagination-custom, .swiper-container-horizontal > .swiper-pagination-bullets {
    bottom: 10px;
    left: 0;
    width: 100%;
}
.swiper-pagination-bullet {
    background: #000 none repeat scroll 0 0;
    border-radius: 100%;
    display: inline-block;
    height: 8px;
    opacity: 0.2;
    width: 8px;
}
button.swiper-pagination-bullet {
    -moz-appearance: none;
    border: medium none;
    box-shadow: none;
    margin: 0;
    padding: 0;
}
.swiper-pagination-clickable .swiper-pagination-bullet {
    cursor: pointer;
}
.swiper-pagination-white .swiper-pagination-bullet {
    background: #fff none repeat scroll 0 0;
}
.swiper-pagination-bullet-active {
    background: #ed8c00 none repeat scroll 0 0;
    opacity: 1;
}
.swiper-pagination-white .swiper-pagination-bullet-active {
    background: #fff none repeat scroll 0 0;
}
.swiper-pagination-black .swiper-pagination-bullet-active {
    background: #000 none repeat scroll 0 0;
}
.swiper-container-vertical > .swiper-pagination-bullets {
    right: 10px;
    top: 50%;
    transform: translate3d(0px, -50%, 0px);
}
.swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
    display: block;
    margin: 5px 0;
}
.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 0 5px;
}
.swiper-pagination-progress {
    background: rgba(0, 0, 0, 0.25) none repeat scroll 0 0;
    position: absolute;
}
.swiper-pagination-progress .swiper-pagination-progressbar {
    background: #ed8c00 none repeat scroll 0 0;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transform: scale(0);
    transform-origin: left top 0;
    width: 100%;
}
.swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar {
    transform-origin: right top 0;
}
.swiper-container-horizontal > .swiper-pagination-progress {
    height: 4px;
    left: 0;
    top: 0;
    width: 100%;
}
.swiper-container-vertical > .swiper-pagination-progress {
    height: 100%;
    left: 0;
    top: 0;
    width: 4px;
}
.swiper-pagination-progress.swiper-pagination-white {
    background: rgba(255, 255, 255, 0.5) none repeat scroll 0 0;
}
.swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar {
    background: #fff none repeat scroll 0 0;
}
.swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
    background: #000 none repeat scroll 0 0;
}
.swiper-container-3d {
    perspective: 1200px;
}
.swiper-container-3d .swiper-wrapper, .swiper-container-3d .swiper-slide, .swiper-container-3d .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right, .swiper-container-3d .swiper-slide-shadow-top, .swiper-container-3d .swiper-slide-shadow-bottom, .swiper-container-3d .swiper-cube-shadow {
    transform-style: preserve-3d;
}
.swiper-container-3d .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right, .swiper-container-3d .swiper-slide-shadow-top, .swiper-container-3d .swiper-slide-shadow-bottom {
    height: 100%;
    left: 0;
    pointer-events: none;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 10;
}
.swiper-container-3d .swiper-slide-shadow-left {
    background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), transparent);
}
.swiper-container-3d .swiper-slide-shadow-right {
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), transparent);
}
.swiper-container-3d .swiper-slide-shadow-top {
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent);
}
.swiper-container-3d .swiper-slide-shadow-bottom {
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), transparent);
}
.swiper-container-coverflow .swiper-wrapper, .swiper-container-flip .swiper-wrapper {
}
.swiper-container-cube, .swiper-container-flip {
    overflow: visible;
}
.swiper-container-cube .swiper-slide, .swiper-container-flip .swiper-slide {
    backface-visibility: hidden;
    pointer-events: none;
    z-index: 1;
}
.swiper-container-cube .swiper-slide .swiper-slide, .swiper-container-flip .swiper-slide .swiper-slide {
    pointer-events: none;
}
.swiper-container-cube .swiper-slide-active, .swiper-container-flip .swiper-slide-active, .swiper-container-cube .swiper-slide-active .swiper-slide-active, .swiper-container-flip .swiper-slide-active .swiper-slide-active {
    pointer-events: auto;
}
.swiper-container-cube .swiper-slide-shadow-top, .swiper-container-flip .swiper-slide-shadow-top, .swiper-container-cube .swiper-slide-shadow-bottom, .swiper-container-flip .swiper-slide-shadow-bottom, .swiper-container-cube .swiper-slide-shadow-left, .swiper-container-flip .swiper-slide-shadow-left, .swiper-container-cube .swiper-slide-shadow-right, .swiper-container-flip .swiper-slide-shadow-right {
    backface-visibility: hidden;
    z-index: 0;
}
.swiper-container-cube .swiper-slide {
    height: 100%;
    transform-origin: 0 0 0;
    visibility: hidden;
    width: 100%;
}
.swiper-container-cube.swiper-container-rtl .swiper-slide {
    transform-origin: 100% 0 0;
}
.swiper-container-cube .swiper-slide-active, .swiper-container-cube .swiper-slide-next, .swiper-container-cube .swiper-slide-prev, .swiper-container-cube .swiper-slide-next + .swiper-slide {
    pointer-events: auto;
    visibility: visible;
}
.swiper-container-cube .swiper-cube-shadow {
    background: #000 none repeat scroll 0 0;
    bottom: 0;
    filter: blur(50px);
    height: 100%;
    left: 0;
    opacity: 0.6;
    position: absolute;
    width: 100%;
    z-index: 0;
}
.swiper-container-fade.swiper-container-free-mode .swiper-slide {
    transition-timing-function: ease-out;
}
.swiper-container-fade .swiper-slide {
    pointer-events: none;
    transition-property: opacity;
}
.swiper-container-fade .swiper-slide .swiper-slide {
    pointer-events: none;
}
.swiper-container-fade .swiper-slide-active, .swiper-container-fade .swiper-slide-active .swiper-slide-active {
    pointer-events: auto;
}
.swiper-scrollbar {
    background: rgba(0, 0, 0, 0.1) none repeat scroll 0 0;
    border-radius: 10px;
    position: relative;
}
.swiper-container-horizontal > .swiper-scrollbar {
    bottom: 3px;
    height: 5px;
    left: 1%;
    position: absolute;
    width: 98%;
    z-index: 50;
}
.swiper-container-vertical > .swiper-scrollbar {
    height: 98%;
    position: absolute;
    right: 3px;
    top: 1%;
    width: 5px;
    z-index: 50;
}
.swiper-scrollbar-drag {
    background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
    border-radius: 10px;
    height: 100%;
    left: 0;
    position: relative;
    top: 0;
    width: 100%;
}
.swiper-scrollbar-cursor-drag {
    cursor: move;
}
.swiper-lazy-preloader {
    animation: 1s steps(12, end) 0s normal none infinite running swiper-preloader-spin;
    height: 42px;
    left: 50%;
    margin-left: -21px;
    margin-top: -21px;
    position: absolute;
    top: 50%;
    transform-origin: 50% 50% 0;
    width: 42px;
    z-index: 10;
}
.swiper-lazy-preloader::after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D\'0%200%20120%20120\'%20xmlns%3D\'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg\'%20xmlns%3Axlink%3D\'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink\'%3E%3Cdefs%3E%3Cline%20id%3D\'l\'%20x1%3D\'60\'%20x2%3D\'60\'%20y1%3D\'7\'%20y2%3D\'27\'%20stroke%3D\'%236c6c6c\'%20stroke-width%3D\'11\'%20stroke-linecap%3D\'round\'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(30%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(60%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(90%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(120%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(150%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.37\'%20transform%3D\'rotate(180%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.46\'%20transform%3D\'rotate(210%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.56\'%20transform%3D\'rotate(240%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.66\'%20transform%3D\'rotate(270%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.75\'%20transform%3D\'rotate(300%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.85\'%20transform%3D\'rotate(330%2060%2C60)\'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    background-position: 50% center;
    background-repeat: no-repeat;
    background-size: 100% auto;
    content: "";
    display: block;
    height: 100%;
    width: 100%;
}
.swiper-lazy-preloader-white::after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D\'0%200%20120%20120\'%20xmlns%3D\'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg\'%20xmlns%3Axlink%3D\'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink\'%3E%3Cdefs%3E%3Cline%20id%3D\'l\'%20x1%3D\'60\'%20x2%3D\'60\'%20y1%3D\'7\'%20y2%3D\'27\'%20stroke%3D\'%23fff\'%20stroke-width%3D\'11\'%20stroke-linecap%3D\'round\'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(30%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(60%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(90%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(120%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.27\'%20transform%3D\'rotate(150%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.37\'%20transform%3D\'rotate(180%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.46\'%20transform%3D\'rotate(210%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.56\'%20transform%3D\'rotate(240%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.66\'%20transform%3D\'rotate(270%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.75\'%20transform%3D\'rotate(300%2060%2C60)\'%2F%3E%3Cuse%20xlink%3Ahref%3D\'%23l\'%20opacity%3D\'.85\'%20transform%3D\'rotate(330%2060%2C60)\'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
}
@keyframes swiper-preloader-spin {
100% {
    transform: rotate(360deg);
}
}
@keyframes swiper-preloader-spin {
100% {
    transform: rotate(360deg);
}
}
@font-face {
    font-family: "FontAwesome";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/font-awesome/fontawesome-webfont.eot?#iefix&v=4.5.0") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/font-awesome/fontawesome-webfont.woff2?v=4.5.0") format("woff2"), url("/sites/all/themes/developer/fonts/font-awesome/fontawesome-webfont.woff?v=4.5.0") format("woff"), url("/sites/all/themes/developer/fonts/font-awesome/fontawesome-webfont.ttf?v=4.5.0") format("truetype"), url("/sites/all/themes/developer/fonts/font-awesome/fontawesome-webfont.svg?v=4.5.0#fontawesomeregular") format("svg");
}
.fa {
    display: inline-block;
    font-family: FontAwesome;
    font-feature-settings: normal;
    font-kerning: auto;
    font-language-override: normal;
    font-size: inherit;
    font-size-adjust: none;
    font-stretch: normal;
    font-style: normal;
    font-synthesis: weight style;
    font-variant: normal;
    font-weight: normal;
    line-height: 1;
    text-rendering: auto;
}
.fa-lg {
    font-size: 1.33333em;
    line-height: 0.75em;
    vertical-align: -15%;
}
.fa-2x {
    font-size: 2em;
}
.fa-3x {
    font-size: 3em;
}
.fa-4x {
    font-size: 4em;
}
.fa-5x {
    font-size: 5em;
}
.fa-fw {
    text-align: center;
    width: 1.28571em;
}
.fa-ul {
    list-style-type: none;
    margin-left: 2.14286em;
    padding-left: 0;
}
.fa-ul > li {
    position: relative;
}
.fa-li {
    left: -2.14286em;
    position: absolute;
    text-align: center;
    top: 0.14286em;
    width: 2.14286em;
}
.fa-li.fa-lg {
    left: -1.85714em;
}
.fa-border {
    border: 0.08em solid #eee;
    border-radius: 0.1em;
    padding: 0.2em 0.25em 0.15em;
}
.fa-pull-left {
    float: left;
}
.fa-pull-right {
    float: right;
}
.fa.fa-pull-left {
    margin-right: 0.3em;
}
.fa.fa-pull-right {
    margin-left: 0.3em;
}
.pull-right {
    float: right;
}
.pull-left {
    float: left;
}
.fa.pull-left {
    margin-right: 0.3em;
}
.fa.pull-right {
    margin-left: 0.3em;
}
.fa-spin {
    animation: 2s linear 0s normal none infinite running fa-spin;
}
.fa-pulse {
    animation: 1s steps(8) 0s normal none infinite running fa-spin;
}
@keyframes fa-spin {
0% {
    transform: rotate(0deg);
}
100% {
    transform: rotate(359deg);
}
}
@keyframes fa-spin {
0% {
    transform: rotate(0deg);
}
100% {
    transform: rotate(359deg);
}
}
.fa-rotate-90 {
    transform: rotate(90deg);
}
.fa-rotate-180 {
    transform: rotate(180deg);
}
.fa-rotate-270 {
    transform: rotate(270deg);
}
.fa-flip-horizontal {
    transform: scale(-1, 1);
}
.fa-flip-vertical {
    transform: scale(1, -1);
}
:root .fa-rotate-90, *:root .fa-rotate-180, *:root .fa-rotate-270, *:root .fa-flip-horizontal, *:root .fa-flip-vertical {
    filter: none;
}
.fa-stack {
    display: inline-block;
    height: 2em;
    line-height: 2em;
    position: relative;
    vertical-align: middle;
    width: 2em;
}
.fa-stack-1x, .fa-stack-2x {
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%;
}
.fa-stack-1x {
    line-height: inherit;
}
.fa-stack-2x {
    font-size: 2em;
}
.fa-inverse {
    color: #fff;
}
.fa-glass::before {
    content: "";
}
.fa-music::before {
    content: "";
}
.fa-search::before {
    content: "";
}
.fa-envelope-o::before {
    content: "";
}
.fa-heart::before {
    content: "";
}
.fa-star::before {
    content: "";
}
.fa-star-o::before {
    content: "";
}
.fa-user::before {
    content: "";
}
.fa-film::before {
    content: "";
}
.fa-th-large::before {
    content: "";
}
.fa-th::before {
    content: "";
}
.fa-th-list::before {
    content: "";
}
.fa-check::before {
    content: "";
}
.fa-remove::before, .fa-close::before, .fa-times::before {
    content: "";
}
.fa-search-plus::before {
    content: "";
}
.fa-search-minus::before {
    content: "";
}
.fa-power-off::before {
    content: "";
}
.fa-signal::before {
    content: "";
}
.fa-gear::before, .fa-cog::before {
    content: "";
}
.fa-trash-o::before {
    content: "";
}
.fa-home::before {
    content: "";
}
.fa-file-o::before {
    content: "";
}
.fa-clock-o::before {
    content: "";
}
.fa-road::before {
    content: "";
}
.fa-download::before {
    content: "";
}
.fa-arrow-circle-o-down::before {
    content: "";
}
.fa-arrow-circle-o-up::before {
    content: "";
}
.fa-inbox::before {
    content: "";
}
.fa-play-circle-o::before {
    content: "";
}
.fa-rotate-right::before, .fa-repeat::before {
    content: "";
}
.fa-refresh::before {
    content: "";
}
.fa-list-alt::before {
    content: "";
}
.fa-lock::before {
    content: "";
}
.fa-flag::before {
    content: "";
}
.fa-headphones::before {
    content: "";
}
.fa-volume-off::before {
    content: "";
}
.fa-volume-down::before {
    content: "";
}
.fa-volume-up::before {
    content: "";
}
.fa-qrcode::before {
    content: "";
}
.fa-barcode::before {
    content: "";
}
.fa-tag::before {
    content: "";
}
.fa-tags::before {
    content: "";
}
.fa-book::before {
    content: "";
}
.fa-bookmark::before {
    content: "";
}
.fa-print::before {
    content: "";
}
.fa-camera::before {
    content: "";
}
.fa-font::before {
    content: "";
}
.fa-bold::before {
    content: "";
}
.fa-italic::before {
    content: "";
}
.fa-text-height::before {
    content: "";
}
.fa-text-width::before {
    content: "";
}
.fa-align-left::before {
    content: "";
}
.fa-align-center::before {
    content: "";
}
.fa-align-right::before {
    content: "";
}
.fa-align-justify::before {
    content: "";
}
.fa-list::before {
    content: "";
}
.fa-dedent::before, .fa-outdent::before {
    content: "";
}
.fa-indent::before {
    content: "";
}
.fa-video-camera::before {
    content: "";
}
.fa-photo::before, .fa-image::before, .fa-picture-o::before {
    content: "";
}
.fa-pencil::before {
    content: "";
}
.fa-map-marker::before {
    content: "";
}
.fa-adjust::before {
    content: "";
}
.fa-tint::before {
    content: "";
}
.fa-edit::before, .fa-pencil-square-o::before {
    content: "";
}
.fa-share-square-o::before {
    content: "";
}
.fa-check-square-o::before {
    content: "";
}
.fa-arrows::before {
    content: "";
}
.fa-step-backward::before {
    content: "";
}
.fa-fast-backward::before {
    content: "";
}
.fa-backward::before {
    content: "";
}
.fa-play::before {
    content: "";
}
.fa-pause::before {
    content: "";
}
.fa-stop::before {
    content: "";
}
.fa-forward::before {
    content: "";
}
.fa-fast-forward::before {
    content: "";
}
.fa-step-forward::before {
    content: "";
}
.fa-eject::before {
    content: "";
}
.fa-chevron-left::before {
    content: "";
}
.fa-chevron-right::before {
    content: "";
}
.fa-plus-circle::before {
    content: "";
}
.fa-minus-circle::before {
    content: "";
}
.fa-times-circle::before {
    content: "";
}
.fa-check-circle::before {
    content: "";
}
.fa-question-circle::before {
    content: "";
}
.fa-info-circle::before {
    content: "";
}
.fa-crosshairs::before {
    content: "";
}
.fa-times-circle-o::before {
    content: "";
}
.fa-check-circle-o::before {
    content: "";
}
.fa-ban::before {
    content: "";
}
.fa-arrow-left::before {
    content: "";
}
.fa-arrow-right::before {
    content: "";
}
.fa-arrow-up::before {
    content: "";
}
.fa-arrow-down::before {
    content: "";
}
.fa-mail-forward::before, .fa-share::before {
    content: "";
}
.fa-expand::before {
    content: "";
}
.fa-compress::before {
    content: "";
}
.fa-plus::before {
    content: "";
}
.fa-minus::before {
    content: "";
}
.fa-asterisk::before {
    content: "";
}
.fa-exclamation-circle::before {
    content: "";
}
.fa-gift::before {
    content: "";
}
.fa-leaf::before {
    content: "";
}
.fa-fire::before {
    content: "";
}
.fa-eye::before {
    content: "";
}
.fa-eye-slash::before {
    content: "";
}
.fa-warning::before, .fa-exclamation-triangle::before {
    content: "";
}
.fa-plane::before {
    content: "";
}
.fa-calendar::before {
    content: "";
}
.fa-random::before {
    content: "";
}
.fa-comment::before {
    content: "";
}
.fa-magnet::before {
    content: "";
}
.fa-chevron-up::before {
    content: "";
}
.fa-chevron-down::before {
    content: "";
}
.fa-retweet::before {
    content: "";
}
.fa-shopping-cart::before {
    content: "";
}
.fa-folder::before {
    content: "";
}
.fa-folder-open::before {
    content: "";
}
.fa-arrows-v::before {
    content: "";
}
.fa-arrows-h::before {
    content: "";
}
.fa-bar-chart-o::before, .fa-bar-chart::before {
    content: "";
}
.fa-twitter-square::before {
    content: "";
}
.fa-facebook-square::before {
    content: "";
}
.fa-camera-retro::before {
    content: "";
}
.fa-key::before {
    content: "";
}
.fa-gears::before, .fa-cogs::before {
    content: "";
}
.fa-comments::before {
    content: "";
}
.fa-thumbs-o-up::before {
    content: "";
}
.fa-thumbs-o-down::before {
    content: "";
}
.fa-star-half::before {
    content: "";
}
.fa-heart-o::before {
    content: "";
}
.fa-sign-out::before {
    content: "";
}
.fa-linkedin-square::before {
    content: "";
}
.fa-thumb-tack::before {
    content: "";
}
.fa-external-link::before {
    content: "";
}
.fa-sign-in::before {
    content: "";
}
.fa-trophy::before {
    content: "";
}
.fa-github-square::before {
    content: "";
}
.fa-upload::before {
    content: "";
}
.fa-lemon-o::before {
    content: "";
}
.fa-phone::before {
    content: "";
}
.fa-square-o::before {
    content: "";
}
.fa-bookmark-o::before {
    content: "";
}
.fa-phone-square::before {
    content: "";
}
.fa-twitter::before {
    content: "";
}
.fa-facebook-f::before, .fa-facebook::before {
    content: "";
}
.fa-github::before {
    content: "";
}
.fa-unlock::before {
    content: "";
}
.fa-credit-card::before {
    content: "";
}
.fa-feed::before, .fa-rss::before {
    content: "";
}
.fa-hdd-o::before {
    content: "";
}
.fa-bullhorn::before {
    content: "";
}
.fa-bell::before {
    content: "";
}
.fa-certificate::before {
    content: "";
}
.fa-hand-o-right::before {
    content: "";
}
.fa-hand-o-left::before {
    content: "";
}
.fa-hand-o-up::before {
    content: "";
}
.fa-hand-o-down::before {
    content: "";
}
.fa-arrow-circle-left::before {
    content: "";
}
.fa-arrow-circle-right::before {
    content: "";
}
.fa-arrow-circle-up::before {
    content: "";
}
.fa-arrow-circle-down::before {
    content: "";
}
.fa-globe::before {
    content: "";
}
.fa-wrench::before {
    content: "";
}
.fa-tasks::before {
    content: "";
}
.fa-filter::before {
    content: "";
}
.fa-briefcase::before {
    content: "";
}
.fa-arrows-alt::before {
    content: "";
}
.fa-group::before, .fa-users::before {
    content: "";
}
.fa-chain::before, .fa-link::before {
    content: "";
}
.fa-cloud::before {
    content: "";
}
.fa-flask::before {
    content: "";
}
.fa-cut::before, .fa-scissors::before {
    content: "";
}
.fa-copy::before, .fa-files-o::before {
    content: "";
}
.fa-paperclip::before {
    content: "";
}
.fa-save::before, .fa-floppy-o::before {
    content: "";
}
.fa-square::before {
    content: "";
}
.fa-navicon::before, .fa-reorder::before, .fa-bars::before {
    content: "";
}
.fa-list-ul::before {
    content: "";
}
.fa-list-ol::before {
    content: "";
}
.fa-strikethrough::before {
    content: "";
}
.fa-underline::before {
    content: "";
}
.fa-table::before {
    content: "";
}
.fa-magic::before {
    content: "";
}
.fa-truck::before {
    content: "";
}
.fa-pinterest::before {
    content: "";
}
.fa-pinterest-square::before {
    content: "";
}
.fa-google-plus-square::before {
    content: "";
}
.fa-google-plus::before {
    content: "";
}
.fa-money::before {
    content: "";
}
.fa-caret-down::before {
    content: "";
}
.fa-caret-up::before {
    content: "";
}
.fa-caret-left::before {
    content: "";
}
.fa-caret-right::before {
    content: "";
}
.fa-columns::before {
    content: "";
}
.fa-unsorted::before, .fa-sort::before {
    content: "";
}
.fa-sort-down::before, .fa-sort-desc::before {
    content: "";
}
.fa-sort-up::before, .fa-sort-asc::before {
    content: "";

}
.fa-envelope::before {
    content: "";
}
.fa-linkedin::before {
    content: "";
}
.fa-rotate-left::before, .fa-undo::before {
    content: "";
}
.fa-legal::before, .fa-gavel::before {
    content: "";
}
.fa-dashboard::before, .fa-tachometer::before {
    content: "";
}
.fa-comment-o::before {
    content: "";
}
.fa-comments-o::before {
    content: "";
}
.fa-flash::before, .fa-bolt::before {
    content: "";
}
.fa-sitemap::before {
    content: "";
}
.fa-umbrella::before {
    content: "";
}
.fa-paste::before, .fa-clipboard::before {
    content: "";
}
.fa-lightbulb-o::before {
    content: "";
}
.fa-exchange::before {
    content: "";
}
.fa-cloud-download::before {
    content: "";
}
.fa-cloud-upload::before {
    content: "";
}
.fa-user-md::before {
    content: "";
}
.fa-stethoscope::before {
    content: "";
}
.fa-suitcase::before {
    content: "";
}
.fa-bell-o::before {
    content: "";
}
.fa-coffee::before {
    content: "";
}
.fa-cutlery::before {
    content: "";
}
.fa-file-text-o::before {
    content: "";
}
.fa-building-o::before {
    content: "";
}
.fa-hospital-o::before {
    content: "";
}
.fa-ambulance::before {
    content: "";
}
.fa-medkit::before {
    content: "";
}
.fa-fighter-jet::before {
    content: "";
}
.fa-beer::before {
    content: "";
}
.fa-h-square::before {
    content: "";
}
.fa-plus-square::before {
    content: "";
}
.fa-angle-double-left::before {
    content: "";
}
.fa-angle-double-right::before {
    content: "";
}
.fa-angle-double-up::before {
    content: "";
}
.fa-angle-double-down::before {
    content: "";
}
.fa-angle-left::before {
    content: "";
}
.fa-angle-right::before {
    content: "";
}
.fa-angle-up::before {
    content: "";
}
.fa-angle-down::before {
    content: "";
}
.fa-desktop::before {
    content: "";
}
.fa-laptop::before {
    content: "";
}
.fa-tablet::before {
    content: "";
}
.fa-mobile-phone::before, .fa-mobile::before {
    content: "";
}
.fa-circle-o::before {
    content: "";
}
.fa-quote-left::before {
    content: "";
}
.fa-quote-right::before {
    content: "";
}
.fa-spinner::before {
    content: "";
}
.fa-circle::before {
    content: "";
}
.fa-mail-reply::before, .fa-reply::before {
    content: "";
}
.fa-github-alt::before {
    content: "";
}
.fa-folder-o::before {
    content: "";
}
.fa-folder-open-o::before {
    content: "";
}
.fa-smile-o::before {
    content: "";
}
.fa-frown-o::before {
    content: "";
}
.fa-meh-o::before {
    content: "";
}
.fa-gamepad::before {
    content: "";
}
.fa-keyboard-o::before {
    content: "";
}
.fa-flag-o::before {
    content: "";
}
.fa-flag-checkered::before {
    content: "";
}
.fa-terminal::before {
    content: "";
}
.fa-code::before {
    content: "";
}
.fa-mail-reply-all::before, .fa-reply-all::before {
    content: "";
}
.fa-star-half-empty::before, .fa-star-half-full::before, .fa-star-half-o::before {
    content: "";
}
.fa-location-arrow::before {
    content: "";
}
.fa-crop::before {
    content: "";
}
.fa-code-fork::before {
    content: "";
}
.fa-unlink::before, .fa-chain-broken::before {
    content: "";
}
.fa-question::before {
    content: "";
}
.fa-info::before {
    content: "";
}
.fa-exclamation::before {
    content: "";
}
.fa-superscript::before {
    content: "";
}
.fa-subscript::before {
    content: "";
}
.fa-eraser::before {
    content: "";
}
.fa-puzzle-piece::before {
    content: "";
}
.fa-microphone::before {
    content: "";
}
.fa-microphone-slash::before {
    content: "";
}
.fa-shield::before {
    content: "";
}
.fa-calendar-o::before {
    content: "";
}
.fa-fire-extinguisher::before {
    content: "";
}
.fa-rocket::before {
    content: "";
}
.fa-maxcdn::before {
    content: "";
}
.fa-chevron-circle-left::before {
    content: "";
}
.fa-chevron-circle-right::before {
    content: "";
}
.fa-chevron-circle-up::before {
    content: "";
}
.fa-chevron-circle-down::before {
    content: "";
}
.fa-html5::before {
    content: "";
}
.fa-css3::before {
    content: "";
}
.fa-anchor::before {
    content: "";
}
.fa-unlock-alt::before {
    content: "";
}
.fa-bullseye::before {
    content: "";
}
.fa-ellipsis-h::before {
    content: "";
}
.fa-ellipsis-v::before {
    content: "";
}
.fa-rss-square::before {
    content: "";
}
.fa-play-circle::before {
    content: "";
}
.fa-ticket::before {
    content: "";
}
.fa-minus-square::before {
    content: "";
}
.fa-minus-square-o::before {
    content: "";
}
.fa-level-up::before {
    content: "";
}
.fa-level-down::before {
    content: "";
}
.fa-check-square::before {
    content: "";
}
.fa-pencil-square::before {
    content: "";
}
.fa-external-link-square::before {
    content: "";
}
.fa-share-square::before {
    content: "";
}
.fa-compass::before {
    content: "";
}
.fa-toggle-down::before, .fa-caret-square-o-down::before {
    content: "";
}
.fa-toggle-up::before, .fa-caret-square-o-up::before {
    content: "";
}
.fa-toggle-right::before, .fa-caret-square-o-right::before {
    content: "";
}
.fa-euro::before, .fa-eur::before {
    content: "";
}
.fa-gbp::before {
    content: "";
}
.fa-dollar::before, .fa-usd::before {
    content: "";
}
.fa-rupee::before, .fa-inr::before {
    content: "";
}
.fa-cny::before, .fa-rmb::before, .fa-yen::before, .fa-jpy::before {
    content: "";
}
.fa-ruble::before, .fa-rouble::before, .fa-rub::before {
    content: "";
}
.fa-won::before, .fa-krw::before {
    content: "";
}
.fa-bitcoin::before, .fa-btc::before {
    content: "";
}
.fa-file::before {
    content: "";
}
.fa-file-text::before {
    content: "";
}
.fa-sort-alpha-asc::before {
    content: "";
}
.fa-sort-alpha-desc::before {
    content: "";
}
.fa-sort-amount-asc::before {
    content: "";
}
.fa-sort-amount-desc::before {
    content: "";
}
.fa-sort-numeric-asc::before {
    content: "";
}
.fa-sort-numeric-desc::before {
    content: "";
}
.fa-thumbs-up::before {
    content: "";
}
.fa-thumbs-down::before {
    content: "";
}
.fa-youtube-square::before {
    content: "";
}
.fa-youtube::before {
    content: "";
}
.fa-xing::before {
    content: "";
}
.fa-xing-square::before {
    content: "";
}
.fa-youtube-play::before {
    content: "";
}
.fa-dropbox::before {
    content: "";
}
.fa-stack-overflow::before {
    content: "";
}
.fa-instagram::before {
    content: "";
}
.fa-flickr::before {
    content: "";
}
.fa-adn::before {
    content: "";
}
.fa-bitbucket::before {
    content: "";
}
.fa-bitbucket-square::before {
    content: "";
}
.fa-tumblr::before {
    content: "";
}
.fa-tumblr-square::before {
    content: "";
}
.fa-long-arrow-down::before {
    content: "";
}
.fa-long-arrow-up::before {
    content: "";
}
.fa-long-arrow-left::before {
    content: "";
}
.fa-long-arrow-right::before {
    content: "";
}
.fa-apple::before {
    content: "";
}
.fa-windows::before {
    content: "";
}
.fa-android::before {
    content: "";
}
.fa-linux::before {
    content: "";
}
.fa-dribbble::before {
    content: "";
}
.fa-skype::before {
    content: "";
}
.fa-foursquare::before {
    content: "";
}
.fa-trello::before {
    content: "";
}
.fa-female::before {
    content: "";
}
.fa-male::before {
    content: "";
}
.fa-gittip::before, .fa-gratipay::before {
    content: "";
}
.fa-sun-o::before {
    content: "";
}
.fa-moon-o::before {
    content: "";
}
.fa-archive::before {
    content: "";
}
.fa-bug::before {
    content: "";
}
.fa-vk::before {
    content: "";
}
.fa-weibo::before {
    content: "";
}
.fa-renren::before {
    content: "";
}
.fa-pagelines::before {
    content: "";
}
.fa-stack-exchange::before {
    content: "";
}
.fa-arrow-circle-o-right::before {
    content: "";
}
.fa-arrow-circle-o-left::before {
    content: "";
}
.fa-toggle-left::before, .fa-caret-square-o-left::before {
    content: "";
}
.fa-dot-circle-o::before {
    content: "";
}
.fa-wheelchair::before {
    content: "";
}
.fa-vimeo-square::before {
    content: "";
}
.fa-turkish-lira::before, .fa-try::before {
    content: "";
}
.fa-plus-square-o::before {
    content: "";
}
.fa-space-shuttle::before {
    content: "";
}
.fa-slack::before {
    content: "";
}
.fa-envelope-square::before {
    content: "";
}
.fa-wordpress::before {
    content: "";
}
.fa-openid::before {
    content: "";
}
.fa-institution::before, .fa-bank::before, .fa-university::before {
    content: "";
}
.fa-mortar-board::before, .fa-graduation-cap::before {
    content: "";
}
.fa-yahoo::before {
    content: "";
}
.fa-google::before {
    content: "";
}
.fa-reddit::before {
    content: "";
}
.fa-reddit-square::before {
    content: "";
}
.fa-stumbleupon-circle::before {
    content: "";
}
.fa-stumbleupon::before {
    content: "";
}
.fa-delicious::before {
    content: "";
}
.fa-digg::before {
    content: "";
}
.fa-pied-piper::before {
    content: "";
}
.fa-pied-piper-alt::before {
    content: "";
}
.fa-drupal::before {
    content: "";
}
.fa-joomla::before {
    content: "";
}
.fa-language::before {
    content: "";
}
.fa-fax::before {
    content: "";
}
.fa-building::before {
    content: "";
}
.fa-child::before {
    content: "";
}
.fa-paw::before {
    content: "";
}
.fa-spoon::before {
    content: "";
}
.fa-cube::before {
    content: "";
}
.fa-cubes::before {
    content: "";
}
.fa-behance::before {
    content: "";
}
.fa-behance-square::before {
    content: "";
}
.fa-steam::before {
    content: "";
}
.fa-steam-square::before {
    content: "";
}
.fa-recycle::before {
    content: "";
}
.fa-automobile::before, .fa-car::before {
    content: "";
}
.fa-cab::before, .fa-taxi::before {
    content: "";
}
.fa-tree::before {
    content: "";
}
.fa-spotify::before {
    content: "";
}
.fa-deviantart::before {
    content: "";
}
.fa-soundcloud::before {
    content: "";
}
.fa-database::before {
    content: "";
}
.fa-file-pdf-o::before {
    content: "";
}
.fa-file-word-o::before {
    content: "";
}
.fa-file-excel-o::before {
    content: "";
}
.fa-file-powerpoint-o::before {
    content: "";
}
.fa-file-photo-o::before, .fa-file-picture-o::before, .fa-file-image-o::before {
    content: "";
}
.fa-file-zip-o::before, .fa-file-archive-o::before {
    content: "";
}
.fa-file-sound-o::before, .fa-file-audio-o::before {
    content: "";
}
.fa-file-movie-o::before, .fa-file-video-o::before {
    content: "";
}
.fa-file-code-o::before {
    content: "";
}
.fa-vine::before {
    content: "";
}
.fa-codepen::before {
    content: "";
}
.fa-jsfiddle::before {
    content: "";
}
.fa-life-bouy::before, .fa-life-buoy::before, .fa-life-saver::before, .fa-support::before, .fa-life-ring::before {
    content: "";
}
.fa-circle-o-notch::before {
    content: "";
}
.fa-ra::before, .fa-rebel::before {
    content: "";
}
.fa-ge::before, .fa-empire::before {
    content: "";
}
.fa-git-square::before {
    content: "";
}
.fa-git::before {
    content: "";
}
.fa-y-combinator-square::before, .fa-yc-square::before, .fa-hacker-news::before {
    content: "";
}
.fa-tencent-weibo::before {
    content: "";
}
.fa-qq::before {
    content: "";
}
.fa-wechat::before, .fa-weixin::before {
    content: "";
}
.fa-send::before, .fa-paper-plane::before {
    content: "";
}
.fa-send-o::before, .fa-paper-plane-o::before {
    content: "";
}
.fa-history::before {
    content: "";
}
.fa-circle-thin::before {
    content: "";
}
.fa-header::before {
    content: "";
}
.fa-paragraph::before {
    content: "";
}
.fa-sliders::before {
    content: "";
}
.fa-share-alt::before {
    content: "";
}
.fa-share-alt-square::before {
    content: "";
}
.fa-bomb::before {
    content: "";
}
.fa-soccer-ball-o::before, .fa-futbol-o::before {
    content: "";
}
.fa-tty::before {
    content: "";
}
.fa-binoculars::before {
    content: "";
}
.fa-plug::before {
    content: "";
}
.fa-slideshare::before {
    content: "";
}
.fa-twitch::before {
    content: "";
}
.fa-yelp::before {
    content: "";
}
.fa-newspaper-o::before {
    content: "";
}
.fa-wifi::before {
    content: "";
}
.fa-calculator::before {
    content: "";
}
.fa-paypal::before {
    content: "";
}
.fa-google-wallet::before {
    content: "";
}
.fa-cc-visa::before {
    content: "";
}
.fa-cc-mastercard::before {
    content: "";
}
.fa-cc-discover::before {
    content: "";
}
.fa-cc-amex::before {
    content: "";
}
.fa-cc-paypal::before {
    content: "";
}
.fa-cc-stripe::before {
    content: "";
}
.fa-bell-slash::before {
    content: "";
}
.fa-bell-slash-o::before {
    content: "";
}
.fa-trash::before {
    content: "";
}
.fa-copyright::before {
    content: "";
}
.fa-at::before {
    content: "";
}
.fa-eyedropper::before {
    content: "";
}
.fa-paint-brush::before {
    content: "";
}
.fa-birthday-cake::before {
    content: "";
}
.fa-area-chart::before {
    content: "";
}
.fa-pie-chart::before {
    content: "";
}
.fa-line-chart::before {
    content: "";
}
.fa-lastfm::before {
    content: "";
}
.fa-lastfm-square::before {
    content: "";
}
.fa-toggle-off::before {
    content: "";
}
.fa-toggle-on::before {
    content: "";
}
.fa-bicycle::before {
    content: "";
}
.fa-bus::before {
    content: "";
}
.fa-ioxhost::before {
    content: "";
}
.fa-angellist::before {
    content: "";
}
.fa-cc::before {
    content: "";
}
.fa-shekel::before, .fa-sheqel::before, .fa-ils::before {
    content: "";
}
.fa-meanpath::before {
    content: "";
}
.fa-buysellads::before {
    content: "";
}
.fa-connectdevelop::before {
    content: "";
}
.fa-dashcube::before {
    content: "";
}
.fa-forumbee::before {
    content: "";
}
.fa-leanpub::before {
    content: "";
}
.fa-sellsy::before {
    content: "";
}
.fa-shirtsinbulk::before {
    content: "";
}
.fa-simplybuilt::before {
    content: "";
}
.fa-skyatlas::before {
    content: "";
}
.fa-cart-plus::before {
    content: "";
}
.fa-cart-arrow-down::before {
    content: "";
}
.fa-diamond::before {
    content: "";
}
.fa-ship::before {
    content: "";
}
.fa-user-secret::before {
    content: "";
}
.fa-motorcycle::before {
    content: "";
}
.fa-street-view::before {
    content: "";
}
.fa-heartbeat::before {
    content: "";
}
.fa-venus::before {
    content: "";
}
.fa-mars::before {
    content: "";
}
.fa-mercury::before {
    content: "";
}
.fa-intersex::before, .fa-transgender::before {
    content: "";
}
.fa-transgender-alt::before {
    content: "";
}
.fa-venus-double::before {
    content: "";
}
.fa-mars-double::before {
    content: "";
}
.fa-venus-mars::before {
    content: "";
}
.fa-mars-stroke::before {
    content: "";
}
.fa-mars-stroke-v::before {
    content: "";
}
.fa-mars-stroke-h::before {
    content: "";
}
.fa-neuter::before {
    content: "";
}
.fa-genderless::before {
    content: "";
}
.fa-facebook-official::before {
    content: "";
}
.fa-pinterest-p::before {
    content: "";
}
.fa-whatsapp::before {
    content: "";
}
.fa-server::before {
    content: "";
}
.fa-user-plus::before {
    content: "";
}
.fa-user-times::before {
    content: "";
}
.fa-hotel::before, .fa-bed::before {
    content: "";
}
.fa-viacoin::before {
    content: "";
}
.fa-train::before {
    content: "";
}
.fa-subway::before {
    content: "";
}
.fa-medium::before {
    content: "";
}
.fa-yc::before, .fa-y-combinator::before {
    content: "";
}
.fa-optin-monster::before {
    content: "";
}
.fa-opencart::before {
    content: "";
}
.fa-expeditedssl::before {
    content: "";
}
.fa-battery-4::before, .fa-battery-full::before {
    content: "";
}
.fa-battery-3::before, .fa-battery-three-quarters::before {
    content: "";
}
.fa-battery-2::before, .fa-battery-half::before {
    content: "";
}
.fa-battery-1::before, .fa-battery-quarter::before {
    content: "";
}
.fa-battery-0::before, .fa-battery-empty::before {
    content: "";
}
.fa-mouse-pointer::before {
    content: "";
}
.fa-i-cursor::before {
    content: "";
}
.fa-object-group::before {
    content: "";
}
.fa-object-ungroup::before {
    content: "";
}
.fa-sticky-note::before {
    content: "";
}
.fa-sticky-note-o::before {
    content: "";
}
.fa-cc-jcb::before {
    content: "";
}
.fa-cc-diners-club::before {
    content: "";
}
.fa-clone::before {
    content: "";
}
.fa-balance-scale::before {
    content: "";
}
.fa-hourglass-o::before {
    content: "";
}
.fa-hourglass-1::before, .fa-hourglass-start::before {
    content: "";
}
.fa-hourglass-2::before, .fa-hourglass-half::before {
    content: "";
}
.fa-hourglass-3::before, .fa-hourglass-end::before {
    content: "";
}
.fa-hourglass::before {
    content: "";
}
.fa-hand-grab-o::before, .fa-hand-rock-o::before {
    content: "";
}
.fa-hand-stop-o::before, .fa-hand-paper-o::before {
    content: "";
}
.fa-hand-scissors-o::before {
    content: "";
}
.fa-hand-lizard-o::before {
    content: "";
}
.fa-hand-spock-o::before {
    content: "";
}
.fa-hand-pointer-o::before {
    content: "";
}
.fa-hand-peace-o::before {
    content: "";
}
.fa-trademark::before {
    content: "";
}
.fa-registered::before {
    content: "";
}
.fa-creative-commons::before {
    content: "";
}
.fa-gg::before {
    content: "";
}
.fa-gg-circle::before {
    content: "";
}
.fa-tripadvisor::before {
    content: "";
}
.fa-odnoklassniki::before {
    content: "";
}
.fa-odnoklassniki-square::before {
    content: "";
}
.fa-get-pocket::before {
    content: "";
}
.fa-wikipedia-w::before {
    content: "";
}
.fa-safari::before {
    content: "";
}
.fa-chrome::before {
    content: "";
}
.fa-firefox::before {
    content: "";
}
.fa-opera::before {
    content: "";
}
.fa-internet-explorer::before {
    content: "";
}
.fa-tv::before, .fa-television::before {
    content: "";
}
.fa-contao::before {
    content: "";
}
.fa-500px::before {
    content: "";
}
.fa-amazon::before {
    content: "";
}
.fa-calendar-plus-o::before {
    content: "";
}
.fa-calendar-minus-o::before {
    content: "";
}
.fa-calendar-times-o::before {
    content: "";
}
.fa-calendar-check-o::before {
    content: "";
}
.fa-industry::before {
    content: "";
}
.fa-map-pin::before {
    content: "";
}
.fa-map-signs::before {
    content: "";
}
.fa-map-o::before {
    content: "";
}
.fa-map::before {
    content: "";
}
.fa-commenting::before {
    content: "";
}
.fa-commenting-o::before {
    content: "";
}
.fa-houzz::before {
    content: "";
}
.fa-vimeo::before {
    content: "";
}
.fa-black-tie::before {
    content: "";
}
.fa-fonticons::before {
    content: "";
}
.fa-reddit-alien::before {
    content: "";
}
.fa-edge::before {
    content: "";
}
.fa-credit-card-alt::before {
    content: "";
}
.fa-codiepie::before {
    content: "";
}
.fa-modx::before {
    content: "";
}
.fa-fort-awesome::before {
    content: "";
}
.fa-usb::before {
    content: "";
}
.fa-product-hunt::before {
    content: "";
}
.fa-mixcloud::before {
    content: "";
}
.fa-scribd::before {
    content: "";
}
.fa-pause-circle::before {
    content: "";
}
.fa-pause-circle-o::before {
    content: "";
}
.fa-stop-circle::before {
    content: "";
}
.fa-stop-circle-o::before {
    content: "";
}
.fa-shopping-bag::before {
    content: "";
}
.fa-shopping-basket::before {
    content: "";
}
.fa-hashtag::before {
    content: "";
}
.fa-bluetooth::before {
    content: "";
}
.fa-bluetooth-b::before {
    content: "";
}
.fa-percent::before {
    content: "";
}
@font-face {
    font-family: "PostNL-Regular";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-regular.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.svg#PostNL-Regular") format("svg");
}
@font-face {
    font-family: "PostNL-Medium";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-medium.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.svg#PostNL-Medium") format("svg");
}
@font-face {
    font-family: "PostNL-Bold";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-bold.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.svg#PostNL-Bold") format("svg");
}
.breadcrumbs, .sub-menu a, .promo-banner, .search-suggestions, .qtip-default, .business-actions, .business-label, .lookup-app .results {
    text-rendering: optimizelegibility;
}
h3, .h3, .h2 + .h2.subtitle, blockquote, table.rates .title, .content-bar .testimonial, blockquote.testimonial, .main-menu a, .drop-down h2, .global-search label, .introduction, .shift-headings h2, .intro-block .title, .overview .item .title, .inline-navigation a, .teaser, .strong, .search-form .input, .autocomplete-suggestions.large, .page-footer .killer-app-links, .campaign-content .direct-actions .title span, .scroll-to-top, div.home-items article header.item h4, .page-title .subtitle, .button.square, .call-me-now-container .chat p.buttons button.square, .call-me-now-container .whatsapp p.buttons button.square, .button.large, .call-me-now-container .chat p.buttons button.large, .call-me-now-container .whatsapp p.buttons button.large, .block .title, .direct-actions .title.subtitled em, .media-block .title, .index-block header a, .landing-block .title, .top-list, .contact-options .option .title .button, .contact-options .option .title .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .contact-options .option .title button, .contact-options .option .title .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .contact-options .option .title button, .form .label.large, .lightbox-alert .subtitle, .business-actions .title, .info-box-item .title-size, .killer-app .form-row.price-display .price, .killer-app .result-row.price-display .price, .lookup-app .results .title, .lookup-app .results .result {
    font-family: "PostNL-Regular",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
h1, .h1, h2, .h2, .search-results .result .title b, .page-title .title, .page-title h1, .block .title.emphasized em, .direct-actions .title.stronger, .direct-actions .title.subtitled.huge, .tabs .tab, .comparison .block .title.subtitled, .contact-options .block > .title, .business-actions .subtitled .subtitle, .trigger-overlay-block .tag, .lookup-app .results em {
    font-family: "PostNL-Medium",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
.promo-banner .text, .direct-actions .title.subtitled, .hero-image .block .title {
    font-family: "PostNL-Bold",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
@font-face {
    font-family: "PostNL-icons";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.svg#PostNL-icons") format("svg");
}
.breadcrumbs a::after, .sub-menu .parent-level a::before, .sub-menu .menu-toggle::before, .language-switch .select-value::after, .language-switch-dep a::after, .page-header .icon-toggle a::after, .main-menu .has-children::after, .main-menu .login-options .drop-down a::after, .main-menu .menu-toggle::after, .drop-down h2 a::before, .drop-down a::after, .drop-down .items a::before, .search-form .submit::after, .page-footer .killer-app-links a::after, .page-footer .items a::after, .locationpicker-killerapp .geo-finder-geo::after, html.geolocation .location-picker .location-picker-controls .form .geo-finder-geo::after, html.geolocation .location-picker .post-delay-controls .form .geo-finder-geo::after, html.geolocation .location-picker .post-controls .form .geo-finder-geo::after, html.geolocation .post-delay .location-picker-controls .form .geo-finder-geo::after, html.geolocation .post-delay .post-delay-controls .form .geo-finder-geo::after, html.geolocation .post-delay .post-controls .form .geo-finder-geo::after, html.geolocation .map-big .location-picker-controls .form .geo-finder-geo::after, html.geolocation .map-big .post-delay-controls .form .geo-finder-geo::after, html.geolocation .map-big .post-controls .form .geo-finder-geo::after, .location-picker .location-picker-controls .location-list .location-list-item .location-distance::after, .location-picker .post-delay-controls .location-list .location-list-item .location-distance::after, .location-picker .post-controls .location-list .location-list-item .location-distance::after, .post-delay .location-picker-controls .location-list .location-list-item .location-distance::after, .post-delay .post-delay-controls .location-list .location-list-item .location-distance::after, .post-delay .post-controls .location-list .location-list-item .location-distance::after, .map-big .location-picker-controls .location-list .location-list-item .location-distance::after, .map-big .post-delay-controls .location-list .location-list-item .location-distance::after, .map-big .post-controls .location-list .location-list-item .location-distance::after, .accordion .accordion-header::after, .scroll-to-top a::before, .page-title .back-link a::before, .file::before, .icon::before, .button.action::before, .call-me-now-container .chat p.buttons button::before, .call-me-now-container .whatsapp p.buttons button::before, .button.drop-down::before, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call::before, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call::before, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call::before, .call-me-now-container .amn_callButtonContainer .pcac_cml_call::before, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call::before, .call-me-now-container .amn_callButtonContainer .amn_cmn_call::before, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton::before, .call-me-now-container .pcac_backButtonContainer a::before, .call-me-now-container .chat .inputpanel .clienttyping button::before, .call-me-now-container .whatsapp .inputpanel .clienttyping button::before, .button.action::after, .call-me-now-container .chat p.buttons button::after, .call-me-now-container .whatsapp p.buttons button::after, .button.drop-down::after, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call::after, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cml_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .amn_callButtonContainer .amn_cmn_call::after, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton::after, .call-me-now-container .pcac_backButtonContainer a::after, .call-me-now-container .chat .inputpanel .clienttyping button::after, .call-me-now-container .whatsapp .inputpanel .clienttyping button::after, .button.previous::before, .call-me-now-container .chat p.buttons button.previous::before, .call-me-now-container .whatsapp p.buttons button.previous::before, .button.exit::after, .call-me-now-container .chat p.buttons button.exit::after, .call-me-now-container .whatsapp p.buttons button.exit::after, .button.phone::before, .call-me-now-container .chat p.buttons button.phone::before, .call-me-now-container .whatsapp p.buttons button.phone::before, .button.mail::before, .call-me-now-container .chat p.buttons button.mail::before, .call-me-now-container .whatsapp p.buttons button.mail::before, .exit-link::after, .block.calamity::before, .index-block header a::after, .links a::before, .check-marks li::before, .pagination .next a::before, .pagination .previous a::before, .comparison .toggle::before, .select-native .arrow::after, .js .tooltip::before, .js .tooltipped .icon::before, .gallery-lightbox .mfp-close::after, .gallery-lightbox .mfp-arrow::after, .call-me-now-container.stored-locations-popup ul li div.file-remove::after, .carousel-container .swiper-navigation::after, .apply-buttons .mail::after, .vacancy-header .vacancy::after, .vacancy-entrance .entrance .button::after, .vacancy-entrance .entrance .call-me-now-container .chat p.buttons button::after, .call-me-now-container .chat p.buttons .vacancy-entrance .entrance button::after, .vacancy-entrance .entrance .call-me-now-container .whatsapp p.buttons button::after, .call-me-now-container .whatsapp p.buttons .vacancy-entrance .entrance button::after, .killer-app .title::after, .killer-app .result-container .result-row a.back::before, .killer-app .result-container .result-row.price-display .price::after, .killer-app .result-container .result-row.promo .price::after, .app.customer-support .collapsible-toggle::after, .app.customer-support dl.collapsible-items dt::after, dl.collapsible-items .app.customer-support dt::after {
    font-family: "PostNL-icons",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
body {
    background-color: #ffffff;
    color: #444444;
    font: 14px/1.5 Arial,Helvetica,sans-serif;
}
.call-me-now-container p.pcac_title, #TOL_koptekst1, #TOL_koptekst2 {
    color: #001a73;
    font-family: "PostNL-Medium",sans-serif;
    font-size: 1.71429em;
    font-weight: normal;
    line-height: 1.1;
    margin: 30px 0 0.35em;
    text-rendering: optimizelegibility;
}
.main .search-form label, .page-footer .title, .media-block .price-display, .form legend, .call-me-now-container .chat p.header, .call-me-now-container .whatsapp p.header {
    color: #001a73;
    font-family: "PostNL-Regular",sans-serif;
    font-size: 1.28571em;
    font-weight: normal;
    line-height: 1.2;
    margin: 1.2em 0 0.18em;
    text-rendering: optimizelegibility;
}
h1, .h1, h2, .h2 {
    color: #001a73;
    line-height: 1.1;
}
h3, .h3 {
    font-size: 1.28571em;
    line-height: 1.2;
    margin: 1.2em 0 0.18em;
}
h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
    color: #001a73;
}
h1, .h1 {
    font-size: 1.85714em;
    margin: 0;
}
h2, .h2 {
    font-size: 1.71429em;
    margin: 30px 0 0.35em;
}
h2.first-title, .h2.first-title {
    margin-top: 0;
}
.h2 + .h2.subtitle {
    color: #ed8c00;
    font-size: 1.28571em;
    margin-bottom: 0.5em;
    margin-top: -0.5em;
    max-width: 90%;
}
h3, .h3 {
    font-size: 1.28571em;
    margin: 1.2em 0 0.18em;
}
h4, .h4, h5, .h5 {
    margin-bottom: 0;
}
p, table, ul, ol, figure {
    margin: 0 0 1.6em;
}
p.offset-bottom-half {
    margin-bottom: 0.8em;
}
ul, ol {
    padding: 0 0 0 2em;
}
h2 + ul, .h2 + ul, h3 + ul, .h3 + ul, h4 + ul .h4 + ul, h2 + ol, .h2 + ol, h3 + ol, .h3 + ol, h4 + ol .h4 + ul, h4 + ul .h4 + ol, h4 + ol .h4 + ol {
    margin-top: 0.5em;
}
a {
    color: #ed8c00;
    text-decoration: underline;
}
a:focus, a:hover {
    color: #001a73;
    outline: medium none;
}
a.link-nostyle {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 0 none;
    color: inherit;
    font-size: inherit;
    text-decoration: inherit;
}
@media only screen and (max-width: 1000px) {
abbr[title] {
    border-bottom: 0 none;
}
abbr[title]::after {
    content: " (" attr(title) ")";
}
}
ins {
    text-decoration: none;
}
blockquote {
    font-size: 1.5em;
    line-height: 1.3;
    margin: 0.5em 0 0;
}
blockquote > p {
    margin: 0 0 1em;
}
blockquote > p::before, blockquote > p::after {
    font-size: 1.38462em;
    margin-top: -3px;
    position: absolute;
}
blockquote > p::before {
    content: """;
    margin-left: -12px;
}
blockquote > p::after {
    content: """;
    margin-left: 3px;
}
cite {
    font-size: 0.92857em;
    font-style: normal;
    font-weight: bold;
}
cite .author-info {
    font-weight: normal;
}
blockquote footer .cite {
    font-size: 0.61905em;
}
.js img.responsive {
    visibility: hidden;
}
.js img.responsive.visible {
    visibility: visible;
}
.main img, .main iframe, .content-container img, .content-container iframe {
    max-width: 100%;
}
table {
    border: 0 none;
    font-size: 0.92857em;
    width: 100%;
}
table strong {
    color: #ed8c00;
}
table ins {
    padding-left: 5px;
    white-space: nowrap;
}
table.underlined tr {
    border-bottom: 1px solid #d2d2cc;
}
table.rates .title {
    color: #001a73;
    display: block;
    font-size: 1.07692em;
}
table.rates strong {
    color: #d42b1e;
}
table.rates tbody th:first-child {
    width: 155px;
}
table.rates.large.underlined {
    border-top: 1px solid #c8c8c2;
}
table.rates.large.underlined tr {
    border-color: #c8c8c2;
}
table.rates.large td, table.rates.large th {
    padding: 13px 10px;
}
table.rates.large th:first-child {
    width: 33%;
}
table.rates.large th p {
    color: #898987;
    margin: 0;
}
table.rates.large thead th, table.rates.large tbody td {
    background-color: #f0e1c9;
    border-right: 2px solid #f0f0ec;
}
table.rates.large thead th:first-child {
    background-color: transparent;
    border-right-width: 0;
}
table.rates.large thead th {
    text-align: center;
}
table.rates.large thead th:first-child {
    font-weight: normal;
    text-align: left;
}
table.rates.large tbody th {
    width: 250px;
}
table.rates.large tbody td {
    text-align: center;
}
table.rates.large .title {
    margin-bottom: 0;
}
@media only screen {
table.rates .title {
    font-size: 1.15385em;
}
}
td, th {
    border: 0 none;
    padding: 5px;
    vertical-align: top;
}
tr {
    border-bottom: 1px solid #d2d2cc;
}
td p, th p {
    margin: 0;
}
th {
    padding-right: 40px;
    text-align: left;
}
tbody th {
    font-weight: normal;
}
figcaption {
    font-style: italic;
    padding: 5px 10px;
}
figure.image {
    background-color: #f0f0ec;
    display: table;
    width: 100px;
}
figure.image img {
    max-width: none;
}
@media only screen and (max-width: 660px) {
figure.image {
    width: 100px;
}
}
figure.rounded {
    border-radius: 5px 5px 0;
    overflow: hidden;
}
.figure img {
    max-width: 100%;
}
.hidden {
    display: none;
}
blockquote.testimonial {
    margin: 0 0 1.5em 20px;
}
.content-bar .testimonial, blockquote.testimonial {
    border-left: 2px solid #ed8c00;
    color: #ed8c00;
    font-size: 1.42857em;
    line-height: 1.2;
    padding: 0 10px 0 18px;
}
.content-bar .testimonial.floats, blockquote.testimonial.floats {
    margin: 0.3em 0 22px 20px;
}
.content-bar .testimonial > p, blockquote.testimonial > p {
    position: relative;
}
.content-bar .testimonial > p::before, .content-bar .testimonial > p::after, blockquote.testimonial > p::before, blockquote.testimonial > p::after {
    font-size: 2.14286em;
    line-height: 0.1;
    margin-left: 0;
    position: relative;
}
.content-bar .testimonial > p::before, blockquote.testimonial > p::before {
    bottom: -0.4em;
    content: """;
    margin-right: 5px;
}
.content-bar .testimonial > p::after, blockquote.testimonial > p::after {
    content: "„";
    margin-left: 5px;
    top: -0.1em;
}
@media only screen and (min-width: 661px) {
.content-bar .testimonial, .content-bar .testimonial.floats, blockquote.testimonial, blockquote.testimonial.floats {
    margin-left: 0;
}
.content-bar .testimonial.floats, blockquote.testimonial.floats {
    width: 45%;
}
.content-bar .testimonial.floats.right, blockquote.testimonial.floats.right {
    margin-left: 40px;
}
}
.no-list li {
    margin: 0;
}
.offset-container {
    position: relative;
}
.placeholder {
    color: #999999 !important;
}
.align-right {
    text-align: right;
}
.floats {
    margin-bottom: 1em;
}
.clears.left {
    clear: left;
}
.clears.right {
    clear: right;
}
.clears.both {
    clear: both;
}
.clickable {
    cursor: pointer;
}
.line {
    display: block;
}
.no-margin {
    margin-bottom: 0;
}
@media only screen and (min-width: 661px) {
.floats {
    margin-top: 1em;
}
.floats.right {
    float: right;
    margin-left: 10px;
}
.floats.left {
    float: left;
    margin-right: 10px;
}
.columns::after {
    clear: both;
    content: " ";
    display: block;
}
.columns .column {
    float: left;
    width: 50%;
}
.columns .column.odd {
    clear: left;
}
.columns.spaced .column {
    box-sizing: border-box;
    padding-left: 20px;
    padding-right: 20px;
}
.columns.spaced .column.odd {
    padding-left: 0;
}
.columns.spaced .column.even {
    padding-right: 0;
}
.columns.spaced .column.first {
    padding-left: 0;
    padding-right: 20px;
}
.columns.spaced .column.last {
    padding-left: 20px;
    padding-right: 0;
}
.columns.spaced.narrow .column {
    padding-left: 10px;
    padding-right: 10px;
}
.columns .columns {
    clear: both;
    overflow: hidden;
}
}
@media only screen and (min-width: 1001px) {
.columns .column.odd {
    clear: none;
}
.columns .column.first {
    clear: left;
}
.columns.three .column {
    width: 33.3%;
}
.columns.four .column {
    width: 25%;
}
.columns.spaced .column, .columns.spaced .column.odd, .columns.spaced .column.even {
    padding-left: 10px;
    padding-right: 10px;
}
.columns.spaced .column.first {
    padding-left: 0;
    padding-right: 20px;
}
.columns.spaced .column.last {
    padding-left: 20px;
    padding-right: 0;
}
.columns.spaced.narrow .column {
    padding-left: 5px;
    padding-right: 5px;
}
.columns.spaced.narrow .column.first {
    padding-left: 0;
    padding-right: 10px;
}
.columns.spaced.narrow .column.last {
    padding-left: 10px;
    padding-right: 0;
}
}
.background-offset {
    background-color: #f0f0ec;
}
.no-list, .sub-menu ol, .main-navigation ol, .drop-down .items, .inline-navigation .items, .search-results .results, .page-footer ul, .global-links ul, .list, .links, .inline, .check-marks, .pagination, .fake-select .select-list, .tabs, .form .checkboxes, .lookup-app .results .suggestions {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.off-screen, .breadcrumbs .separator, .drop-down, .index-block .content {
    left: -9999px;
    position: absolute;
}
.cleared::after, .inner-grid::after, .overview .item .content::after, .main .single-line-search::after, .block.cases ul.logos::after, .direct-actions::after, .block.products::after, .tabs::after, .comparison .collapsible-features::after, .form dl.summary dd::after, .form .form-row::after, .form .submit-buttons::after, .killer-app .form .field::after, .killer-app .result-container .field::after {
    clear: both;
    content: " ";
    display: table;
}
.content-bar::before, .content-bar::after {
    clear: both;
    content: " ";
    display: table;
}
.inline-navigation .content, .page-footer .footer-top, .global-links .content-container, .direct-actions .separated, .index-block .content, .tabs .tab, .unique-selling-proposition .landing-block::after, .vacancy-short-description::after, .killer-app, .lookup-app .tab-content {
    border-bottom: 1px solid #d2d2cc;
}
.inline-navigation .content::after, .page-footer .footer-top::after, .global-links .content-container::after, .direct-actions .separated::after, .index-block .content::after, .tabs .tab::after, .unique-selling-proposition .landing-block::after, .vacancy-short-description::after, .killer-app::after, .lookup-app .tab-content::after {
    border-radius: 100%;
    bottom: 0;
    box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.2);
    content: " ";
    display: block;
    height: 10px;
    left: 12.5%;
    position: absolute;
    right: 12.5%;
    z-index: -1;
}
*::-moz-selection {
    background-color: rgba(237, 140, 0, 0.3);
}
.direct-actions *::-moz-selection, .media-block .highlighted-content *::-moz-selection, .form .message.error *::-moz-selection, .qtip-default *::-moz-selection, .lookup-app .results *::-moz-selection {
    background-color: rgba(255, 255, 255, 0.3);
}
.content-container, .breadcrumbs, .main, .page-header, #cookiebar-container .cookie_wrapper {
    clear: both;
    float: none;
    margin-left: auto;
    margin-right: auto;
}
.content-container::after, .breadcrumbs::after, .main::after, .page-header::after, #cookiebar-container .cookie_wrapper::after {
    clear: both;
    content: " ";
    display: block;
}
.content-container > .content, .breadcrumbs > .content, .main > .content, .page-header > .content, #cookiebar-container .cookie_wrapper > .content {
    padding-left: 10px;
    padding-right: 10px;
}
.alternate.content-container, .alternate.breadcrumbs, .alternate.main, .alternate.page-header, #cookiebar-container .alternate.cookie_wrapper {
    background-color: #f0f0ec;
}
.actions.content-container, .actions.breadcrumbs, .actions.main, .actions.page-header, #cookiebar-container .actions.cookie_wrapper {
    background-color: #ed8c00;
    color: #ffffff;
    padding-bottom: 20px;
    padding-top: 10px;
}
.actions.content-container .title, .actions.breadcrumbs .title, .actions.main .title, .actions.page-header .title, #cookiebar-container .actions.cookie_wrapper .title {
    color: #ffffff;
    margin: 0.7em 0;
}
.actions.content-container .button.action, .actions.breadcrumbs .button.action, .actions.main .button.action, .actions.page-header .button.action, #cookiebar-container .actions.cookie_wrapper .button.action, .actions.content-container .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .actions.content-container button, .actions.breadcrumbs .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .actions.breadcrumbs button, .actions.main .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .actions.main button, .actions.page-header .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .actions.page-header button, #cookiebar-container .actions.cookie_wrapper .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons #cookiebar-container .actions.cookie_wrapper button, .actions.content-container .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .actions.content-container button, .actions.breadcrumbs .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .actions.breadcrumbs button, .actions.main .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .actions.main button, .actions.page-header .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .actions.page-header button, #cookiebar-container .actions.cookie_wrapper .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons #cookiebar-container .actions.cookie_wrapper button {
    background-color: #ed8c00;
    border-color: #ffffff;
    color: #ffffff;
}
@media only screen and (min-width: 661px) {
.content-container, .breadcrumbs, .main, .page-header, #cookiebar-container .cookie_wrapper {
    width: 640px;
}
}
@media only screen and (min-width: 1001px) {
.content-container, .breadcrumbs, .main, .page-header, #cookiebar-container .cookie_wrapper {
    width: 960px;
}
.container-8 {
    width: 640px;
}
.content-container.indented {
    box-sizing: border-box;
    padding-left: 70px;
}
}
@media only screen and (min-width: 1151px) {
.content-container, .breadcrumbs, .main, .page-header, #cookiebar-container .cookie_wrapper {
    width: 1120px;
}
.container-12 {
    width: 960px;
}
.container-8 {
    width: 640px;
}
}
.content-bar .content-bar-content {
    margin-bottom: 60px;
    margin-top: 40px;
}
.content-bar.alternate {
    background-color: #f0f0ec;
}
.content-bar.alternate .content-bar-content {
    margin-bottom: 40px;
    margin-top: 30px;
}
.content-bar.actions {
    background-color: #ed8c00;
    color: #ffffff;
}
.content-bar.actions .title {
    color: #ffffff;
    margin: 0.7em 0;
}
.content-bar.actions .button.action, .content-bar.actions .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .content-bar.actions button, .content-bar.actions .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .content-bar.actions button {
    background-color: #ed8c00;
    border-color: #ffffff;
    color: #ffffff;
}
.content-bar.alternate:last-child, .content-bar.actions:last-child {
    margin-bottom: -40px;
}
.grid-1, .grid-3, .grid-4, .grid-5, .grid-6, .grid-7, .grid-8, .grid-9, .grid-12 {
    float: left;
    margin-left: 10px;
    margin-right: 10px;
}
.grid {
    padding-left: 10px;
    padding-right: 10px;
}
.grid-debug {
    background-image: url("/sites/all/themes/developer/img/tests/grid.png");
}
.grid-1 {
    width: 60px;
}
.grid-3 {
    width: 220px;
}
.grid-4 {
    width: 300px;
}
.grid-5 {
    width: 380px;
}
.grid-6 {
    width: 460px;
}
.grid-7 {
    width: 540px;
}
.grid-8 {
    width: 620px;
}
.grid-9 {
    width: 700px;
}
.grid-12 {
    width: 940px;
}
@media only screen and (max-width: 660px) {
.grid-1 {
    float: none;
    width: auto;
}
.grid-3 {
    float: none;
    width: auto;
}
.grid-4 {
    float: none;
    width: auto;
}
.grid-5 {
    float: none;
    width: auto;
}
.grid-6 {
    float: none;
    width: auto;
}
.grid-7 {
    float: none;
    width: auto;
}
.grid-8 {
    float: none;
    width: auto;
}
.grid-9 {
    float: none;
    width: auto;
}
.grid-12 {
    float: none;
    width: auto;
}
}
@media only screen and (min-width: 661px) and (max-width: 1000px) {
.portrait-3, .portrait-4, .portrait-5, .portrait-6, .portrait-7, .portrait-8 {
    float: left;
    margin-left: 10px;
    margin-right: 10px;
}
.portrait-3 {
    width: 220px;
}
.portrait-4 {
    width: 300px;
}
.portrait-5 {
    width: 380px;
}
.portrait-6 {
    width: 460px;
}
.portrait-7 {
    width: 540px;
}
.portrait-8 {
    width: 620px;
}
.grid-9 {
    margin-left: 10px;
    margin-right: 10px;
    max-width: 620px;
}
.grid-12 {
    margin-left: 10px;
    margin-right: 10px;
    max-width: 620px;
}
}
.centered-6 {
    margin-left: 10px;
    margin-right: 10px;
}
.centered-8 {
    margin-left: 10px;
    margin-right: 10px;
}
.centered-10 {
    margin-left: 10px;
    margin-right: 10px;
}
@media only screen and (min-width: 1001px) {
.centered-6, .centered-8, .centered-10 {
    clear: both;
    margin: 0 auto;
}
.centered-6 {
    width: 460px;
}
.centered-8 {
    width: 620px;
}
.centered-10 {
    width: 780px;
}
}
@media only screen and (min-width: 1001px) {
.landscape-3 {
    float: left;
    margin-left: 10px;
    margin-right: 10px;
}
.landscape-3 {
    width: 220px;
}
.push-3 {
    margin-left: 250px;
}
}
@media only screen and (min-width: 1151px) {
.desktop-4, .desktop-5, .desktop-6, .desktop-7, .desktop-8, .desktop-10, .desktop-11, .desktop-12, .desktop-14 {
    float: left;
    margin-left: 10px;
    margin-right: 10px;
}
.desktop-4 {
    width: 300px;
}
.desktop-5 {
    width: 380px;
}
.desktop-6 {
    width: 460px;
}
.desktop-7 {
    width: 540px;
}
.desktop-8 {
    width: 620px;
}
.desktop-10 {
    width: 780px;
}
.desktop-11 {
    width: 860px;
}
.desktop-12 {
    width: 940px;
}
.desktop-14 {
    width: 1100px;
}
.desktop-centered-10 {
    width: 780px;
}
.desktop-centered-12 {
    width: 940px;
}
}
@media only screen and (min-width: 661px) {
.padded-grid .grid-4, .padded-grid .grid-6, .padded-grid .grid-12 {
    box-sizing: border-box;
    padding-left: 20px;
    padding-right: 20px;
}
}
.col-mobile-1, .col-portrait-1, .col-grid-1, .col-desktop-1, .col-mobile-2, .col-portrait-2, .col-grid-2, .col-desktop-2, .col-mobile-3, .col-portrait-3, .col-grid-3, .col-desktop-3, .col-mobile-4, .col-portrait-4, .col-grid-4, .col-desktop-4, .col-mobile-5, .col-portrait-5, .col-grid-5, .col-desktop-5, .col-mobile-6, .col-portrait-6, .col-grid-6, .col-desktop-6, .col-mobile-7, .col-portrait-7, .col-grid-7, .col-desktop-7, .col-mobile-8, .col-portrait-8, .col-grid-8, .col-desktop-8, .col-mobile-9, .col-portrait-9, .col-grid-9, .col-desktop-9, .col-mobile-10, .col-portrait-10, .col-grid-10, .col-desktop-10, .col-mobile-11, .col-portrait-11, .col-grid-11, .col-desktop-11, .col-mobile-12, .col-portrait-12, .col-grid-12, .col-desktop-12 {
    box-sizing: border-box;
    float: left;
    min-height: 1px;
    padding-left: 10px;
    padding-right: 10px;
    position: relative;
}
.gutterless .col-mobile-1, .gutterless .col-portrait-1, .gutterless .col-grid-1, .gutterless .col-desktop-1, .gutterless .col-mobile-2, .gutterless .col-portrait-2, .gutterless .col-grid-2, .gutterless .col-desktop-2, .gutterless .col-mobile-3, .gutterless .col-portrait-3, .gutterless .col-grid-3, .gutterless .col-desktop-3, .gutterless .col-mobile-4, .gutterless .col-portrait-4, .gutterless .col-grid-4, .gutterless .col-desktop-4, .gutterless .col-mobile-5, .gutterless .col-portrait-5, .gutterless .col-grid-5, .gutterless .col-desktop-5, .gutterless .col-mobile-6, .gutterless .col-portrait-6, .gutterless .col-grid-6, .gutterless .col-desktop-6, .gutterless .col-mobile-7, .gutterless .col-portrait-7, .gutterless .col-grid-7, .gutterless .col-desktop-7, .gutterless .col-mobile-8, .gutterless .col-portrait-8, .gutterless .col-grid-8, .gutterless .col-desktop-8, .gutterless .col-mobile-9, .gutterless .col-portrait-9, .gutterless .col-grid-9, .gutterless .col-desktop-9, .gutterless .col-mobile-10, .gutterless .col-portrait-10, .gutterless .col-grid-10, .gutterless .col-desktop-10, .gutterless .col-mobile-11, .gutterless .col-portrait-11, .gutterless .col-grid-11, .gutterless .col-desktop-11, .gutterless .col-mobile-12, .gutterless .col-portrait-12, .gutterless .col-grid-12, .gutterless .col-desktop-12 {
    padding-left: 0;
    padding-right: 0;
}
.inner-grid {
    margin-left: -10px;
    margin-right: -10px;
}
.inner-grid.gutterless {
    margin-left: 0;
    margin-right: 0;
}
.col-mobile-1 {
    width: 8.33333%;
}
.col-mobile-2 {
    width: 16.6667%;
}
.col-mobile-3 {
    width: 25%;
}
.col-mobile-4 {
    width: 33.3333%;
}
.col-mobile-5 {
    width: 41.6667%;
}
.col-mobile-6 {
    width: 50%;
}
.col-mobile-7 {
    width: 58.3333%;
}
.col-mobile-8 {
    width: 66.6667%;
}
.col-mobile-9 {
    width: 75%;
}
.col-mobile-10 {
    width: 83.3333%;
}
.col-mobile-11 {
    width: 91.6667%;
}
.col-mobile-12 {
    width: 100%;
}
@media only screen and (min-width: 661px) {
.col-portrait-1 {
    width: 8.33333%;
}
.col-portrait-2 {
    width: 16.6667%;
}
.col-portrait-3 {
    width: 25%;
}
.col-portrait-4 {
    width: 33.3333%;
}
.col-portrait-5 {
    width: 41.6667%;
}
.col-portrait-6 {
    width: 50%;
}
.col-portrait-7 {
    width: 58.3333%;
}
.col-portrait-8 {
    width: 66.6667%;
}
.col-portrait-9 {
    width: 75%;
}
.col-portrait-10 {
    width: 83.3333%;
}
.col-portrait-11 {
    width: 91.6667%;
}
.col-portrait-12 {
    width: 100%;
}
.col-portrait-offset-1 {
    margin-left: 8.33333%;
}
.col-portrait-offset-2 {
    margin-left: 16.6667%;
}
.col-portrait-offset-3 {
    margin-left: 25%;
}
.col-portrait-offset-4 {
    margin-left: 33.3333%;
}
.col-portrait-offset-5 {
    margin-left: 41.6667%;
}
.col-portrait-offset-6 {
    margin-left: 50%;
}
.col-portrait-offset-7 {
    margin-left: 58.3333%;
}
.col-portrait-offset-8 {
    margin-left: 66.6667%;
}
.col-portrait-offset-9 {
    margin-left: 75%;
}
.col-portrait-offset-10 {
    margin-left: 83.3333%;
}
.col-portrait-offset-11 {
    margin-left: 91.6667%;
}
.col-portrait-offset-12 {
    margin-left: 100%;
}
.no-left-margin {
    margin-left: 0;
}
.no-right-margin {
    margin-right: 0;
}
}
@media only screen and (min-width: 1001px) {
.col-grid-1 {
    width: 8.33333%;
}
.col-grid-2 {
    width: 16.6667%;
}
.col-grid-3 {
    width: 25%;
}
.col-grid-4 {
    width: 33.3333%;
}
.col-grid-5 {
    width: 41.6667%;
}
.col-grid-6 {
    width: 50%;
}
.col-grid-7 {
    width: 58.3333%;
}
.col-grid-8 {
    width: 66.6667%;
}
.col-grid-9 {
    width: 75%;
}
.col-grid-10 {
    width: 83.3333%;
}
.col-grid-11 {
    width: 91.6667%;
}
.col-grid-12 {
    width: 100%;
}
.col-grid-offset-1 {
    margin-left: 8.33333%;
}
.col-grid-offset-2 {
    margin-left: 16.6667%;
}
.col-grid-offset-3 {
    margin-left: 25%;
}
.col-grid-offset-4 {
    margin-left: 33.3333%;
}
.col-grid-offset-5 {
    margin-left: 41.6667%;
}
.col-grid-offset-6 {
    margin-left: 50%;
}
.col-grid-offset-7 {
    margin-left: 58.3333%;
}
.col-grid-offset-8 {
    margin-left: 66.6667%;
}
.col-grid-offset-9 {
    margin-left: 75%;
}
.col-grid-offset-10 {
    margin-left: 83.3333%;
}
.col-grid-offset-11 {
    margin-left: 91.6667%;
}
.col-grid-offset-12 {
    margin-left: 100%;
}
}
@media only screen and (min-width: 1151px) {
.col-desktop-1 {
    width: 8.33333%;
}
.col-desktop-2 {
    width: 16.6667%;
}
.col-desktop-3 {
    width: 25%;
}
.col-desktop-4 {
    width: 33.3333%;
}
.col-desktop-5 {
    width: 41.6667%;
}
.col-desktop-6 {
    width: 50%;
}
.col-desktop-7 {
    width: 58.3333%;
}
.col-desktop-8 {
    width: 66.6667%;
}
.col-desktop-9 {
    width: 75%;
}
.col-desktop-10 {
    width: 83.3333%;
}
.col-desktop-11 {
    width: 91.6667%;
}
.col-desktop-12 {
    width: 100%;
}
.col-desktop-offset-1 {
    margin-left: 8.33333%;
}
.col-desktop-offset-2 {
    margin-left: 16.6667%;
}
.col-desktop-offset-3 {
    margin-left: 25%;
}
.col-desktop-offset-4 {
    margin-left: 33.3333%;
}
.col-desktop-offset-5 {
    margin-left: 41.6667%;
}
.col-desktop-offset-6 {
    margin-left: 50%;
}
.col-desktop-offset-7 {
    margin-left: 58.3333%;
}
.col-desktop-offset-8 {
    margin-left: 66.6667%;
}
.col-desktop-offset-9 {
    margin-left: 75%;
}
.col-desktop-offset-10 {
    margin-left: 83.3333%;
}
.col-desktop-offset-11 {
    margin-left: 91.6667%;
}
.col-desktop-offset-12 {
    margin-left: 100%;
}
}
.breadcrumbs {
    color: #001a73;
    font-size: 0.92857em;
}
.breadcrumbs p {
    margin-top: 20px;
}
.breadcrumbs a {
    color: #001a73;
    text-decoration: none;
}
.breadcrumbs a::after {
    content: "";
    font-size: 1.385em;
    padding: 0 2px;
    vertical-align: middle;
}
.breadcrumbs a.last::after {
    content: "";
}
.main {
    margin-top: 30px;
}
.main.unconstrained {
    margin-top: 0;
    width: auto;
}
.secondary {
    clear: right;
    margin-top: 1em;
}
.secondary.container {
    display: block;
    padding: 0 10px;
}
.content.text {
    max-width: 620px;
}
.content > h2:first-child {
    margin-top: 0;
}
.narrow-content {
    margin-left: 10px;
    margin-right: 10px;
}
.offset {
    margin-bottom: 20px;
    margin-top: 20px;
}
.offset-top {
    margin-top: 20px;
}
.huge-offset {
    margin-bottom: 80px;
    margin-top: 80px;
}
.large-offset {
    margin-bottom: 60px;
    margin-top: 60px;
}
.top-spacing {
    padding-top: 20px;
}
.left-padded {
    padding-left: 20px;
}
.left-padded.small-padding {
    padding-left: 10px;
}
.right-padded {
    padding-right: 20px;
}
.right-padded.small-padding {
    padding-left: 10px;
}
.sub-menu {
    font-size: 0.92857em;
}
.sub-menu .parent-level {
    border-bottom: 1px solid #b1b1b1;
    margin-right: 20px;
    padding-bottom: 15px;
}
.sub-menu .parent-level.no-border {
    border-bottom: medium none;
    padding-bottom: 3px;
}
.sub-menu .parent-level a {
    font-weight: normal;
    padding-left: 12px;
    position: relative;
}
.sub-menu .parent-level a::before {
    content: "";
    font-size: 1.385em;
    left: -3px;
    line-height: 1.1;
    position: absolute;
}
.sub-menu h1, .sub-menu h2 {
    margin: 22px 20px 22px 0;
}
.sub-menu h1 a, .sub-menu h2 a {
    font-weight: normal;
    padding: 0;
}
.sub-menu a {
    color: #001a73;
    display: block;
    padding-left: 15px;
    text-decoration: none;
}
.sub-menu a.active {
    color: #ed8c00;
    font-weight: bold;
}
.sub-menu a:hover {
    color: #ed8c00;
}
.sub-menu .menu-toggle::before {
    left: 0;
    position: absolute;
    text-indent: 0;
}
.sub-menu .menu-toggle {
    display: block;
    float: left;
    position: relative;
    text-indent: -9999em;
    top: -1.5em;
}
.sub-menu .menu-toggle::before {
    content: "";
    font-size: 0.8em;
    line-height: 2;
}
.sub-menu .menu-toggle.open::before {
    content: "";
}
.sub-menu > ol {
    border-top: 1px solid #d2d2cc;
    margin-right: 20px;
}
.sub-menu > ol > li {
    padding: 10px 0;
}
.sub-menu ol li {
    border-bottom: 1px solid #d2d2cc;
}
.sub-menu ol ol {
    font-size: 0.92308em;
    margin-left: 15px;
}
.sub-menu ol ol li {
    border: 0 none;
    padding: 3px 0;
}
.sub-menu ol ol li:first-child {
    margin-top: 3px;
}
.sub-menu ol ol a {
    font-weight: normal;
}
@media only screen and (max-width: 660px) {
.portrait-hidden {
    left: -9999px;
    position: absolute;
}
}
@media only screen and (min-width: 661px) and (max-width: 1000px) {
.portrait-centered {
    clear: both;
    float: none;
    margin-left: auto;
    margin-right: auto;
}
.portrait-hidden {
    left: -9999px;
    position: absolute;
}
}
@media only screen and (min-width: 661px) {
.container {
    display: table;
}
.secondary.container {
    padding: 0;
}
}
@media only screen and (min-width: 1001px) {
.secondary {
    float: right;
    margin-top: 0;
}
.breadcrumbs {
    display: none;
}
}
.language-switch {
    font-size: 0.92308em;
    margin: 0;
    position: absolute;
    right: 110px;
    top: 20px;
    z-index: 3;
}
.language-switch .select-value::after {
    content: "";
    display: inline-block;
    font-size: 1.5em;
    line-height: 0.5;
    vertical-align: middle;
}
.language-switch .language-select {
    padding: 5px 10px;
}
.language-switch .language-select .language {
    display: block;
    padding: 4px 0;
}
.language-switch .language-select .is-selected {
    display: none;
}
.language-switch .fake-select.is-open .select-value::after {
    content: "";
}
.language-switch .fake-select.is-open .language-select {
    left: auto;
    right: 0;
}
.language-switch .fake-select.is-closed .language-select {
    left: -9999em;
    right: auto;
}
.language-switch .language, .language-popup .language {
    color: #001a73;
    text-decoration: none;
}
.language-switch .language::before, .language-popup .language::before {
    background-position: 0 -24px;
    background-repeat: no-repeat;
    content: " ";
    display: inline-block;
    height: 12px;
    margin-right: 5px;
    vertical-align: text-top;
    width: 19px;
}
.language-switch .nl::before, .language-popup .nl::before {
    background-position: 0 -72px;
}
.language-switch .de::before, .language-popup .de::before {
    background-position: 0 -12px;
}
.language-switch .fr::before, .language-popup .fr::before {
    background-position: 0 -48px;
}
.language-switch .es::before, .language-popup .es::before {
    background-position: 0 -36px;
}
.language-switch .ch::before, .language-switch .zh::before, .language-popup .ch::before, .language-popup .zh::before {
    background-position: 0 0;
}
.language-switch .ru::before, .language-popup .ru::before {
    background-position: 0 -84px;
}
.language-switch .it::before, .language-popup .it::before {
    background-position: 0 -60px;
}
.language-popup .clear {
    clear: both;
}
.language-popup h2.title {
    color: #001a73;
    margin: 15px 0 10px;
}
.language-popup div.description {
    display: none;
    margin: 0;
    padding: 0;
}
@media only screen and (min-width: 661px) {
.language-popup div.description {
    display: block;
}
}
.language-popup div.description-devices {
    margin: 0;
    padding: 0;
}
.language-popup ul {
    float: left;
    margin: 0;
    padding: 5px 0 15px;
    width: 100%;
}
.language-popup ul li {
    float: left;
    list-style: outside none none;
    width: 100%;
}
@media only screen and (min-width: 661px) {
.language-popup ul li {
    width: 50%;
}
}
.language-popup ul li a {
    text-decoration: none;
}
.language-switch-dep {
    background: #ffffff none repeat scroll 0 0;
    bottom: -31px;
    font-size: 0.92308em;
    margin: 0;
    position: absolute;
    right: 25px;
}
.language-switch-dep a {
    color: #001a73;
    text-decoration: none;
}
.language-switch-dep a::before {
    background-position: 0 -24px;
    content: " ";
    display: inline-block;
    height: 12px;
    margin-right: 5px;
    vertical-align: text-top;
    width: 19px;
}
.language-switch-dep a::after {
    content: "";
    display: inline-block;
    font-size: 1em;
    margin-left: 5px;
    vertical-align: middle;
}
.page-header, .page-header .page-header-content {
    position: relative;
}
.page-header a {
    color: #001a73;
    text-decoration: none;
}
.page-header .icon-toggle {
    float: right;
    font-size: 1em;
    margin: 0;
    position: relative;
    z-index: 1;
}
.page-header .icon-toggle a {
    display: block;
    padding: 0;
    text-align: center;
}
.page-header .icon-toggle a::before {
    display: none;
}
.page-header .icon-toggle a::after {
    border-color: transparent;
    border-style: solid;
    border-width: 0 1px 2px;
    bottom: 0;
    display: block;
    font-size: 1.8em;
    left: 0;
    line-height: 45px;
    position: absolute;
    right: 0;
    text-indent: 0;
    top: 0;
}
.page-header .icon-toggle.active {
    background-color: #f0f0ec;
}
.full-width-header .page-header .icon-toggle.active {
    padding-bottom: 8px;
    z-index: 6;
}
.page-header .icon-toggle.active a::after {
    border-bottom: 2px solid #f0f0ec;
}
.logo {
    float: left;
}
.logo img {
    vertical-align: middle;
    width: 70px;
}
.main-navigation {
    min-height: 1px;
}
.main-navigation .icon-toggle {
    z-index: 3;
}
.main-navigation .icon-toggle a::after {
    content: "";
}
.main-navigation .icon-toggle.active a::after {
    border-left-color: #d2d2cc;
}
.main-menu {
    background-color: #f0f0ec;
}
.main-menu a {
    display: block;
    font-size: 1.35714em;
}
.main-menu .last-child > a {
    border-right: 0 none;
}
.main-menu.active, .main-menu.js-hidden {
    position: static;
}
.main-menu .menu-toggle {
    border-left: 1px solid #c9c8c2;
    margin: 0;
    padding-left: 0 !important;
    position: absolute;
    right: 0;
    text-indent: -9999em;
    top: 0;
    width: 50px;
}
.main-menu .menu-toggle::after {
    bottom: 0;
    content: "";
    font-size: 0.88889em;
    left: 0;
    line-height: 50px;
    position: absolute;
    right: 0;
    text-align: center;
    text-indent: 0;
    top: 0;
}
.main-menu .open > .menu-toggle::after {
    content: "";
}
.main-menu p {
    margin: 0;
}
.main-menu .business-actions {
    display: none;
}
.drop-down h2 {
    font-size: inherit;
    margin: 0;
}
.drop-down h2 a::before {
    content: "";
    font-size: 1.3em;
    line-height: 1;
    margin-left: -6px;
}
.drop-down a {
    color: #001a73;
}
.drop-down a:hover {
    color: #001a73;
}
.drop-down a.button::before {
    display: none;
}
.drop-down .items a {
    color: #989898;
}
.drop-down .items a:hover {
    color: #001a73;
}
.drop-down .items a::before {
    content: "";
    font-size: 1.2em;
    margin-left: -0.2em;
    vertical-align: sub;
}
.drop-down .items li .more {
    color: #ed8c00;
}
.drop-down .buttons {
    border-top: 1px solid #d2d2cc;
    margin-top: 1em;
    padding-top: 1em;
}
.drop-down .buttons .button, .drop-down .call-me-now-container .chat p.buttons button, .call-me-now-container .chat .drop-down p.buttons button, .drop-down .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp .drop-down p.buttons button {
    color: #ffffff;
    font: bold 1em/2 Arial,Helvetica,sans-serif;
}
.drop-down .footer {
    border-top: 1px solid #d2d2cc;
    clear: both;
    margin: 0;
}
.global-search .icon-toggle {
    position: absolute;
    right: 50px;
    top: 0;
    z-index: 3;
}
.global-search .icon-toggle a::after {
    content: "";
}
.global-search .icon-toggle.active a::after {
    border-left-color: #d2d2cc;
    border-right-color: #d2d2cc;
}
.global-search p {
    margin: 0;
}
.global-search label {
    color: #001a73;
    font-size: 1.35714em;
}
.global-search .form-row .input {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 1em;
    padding: 4px 8px;
    width: 100%;
}
.global-search .form-row .submit::after {
    line-height: 1.4;
}
.full-width-header .page-header {
    margin-bottom: 7px;
}
@media only screen and (max-width: 1000px) {
.logo, .icon-toggle {
    height: 80px;
    line-height: 80px;
    width: 50px;
}
.logo {
    padding-left: 10px;
    position: relative;
    z-index: 1;
}
.main-menu, .drop-down .items, .drop-down .buttons {
    left: -9999px;
    position: absolute;
}
.main-menu {
    border-top: 1px solid #d2d2cc;
    clear: both;
}
.main-menu a {
    margin-left: 20px;
    margin-right: 50px;
    padding: 11px 0;
}
.main-menu ol {
    border-top: 1px solid #c8c8c2;
    margin-bottom: -1px;
}
.main-menu li {
    border-top: 1px solid #c8c8c2;
    position: relative;
    transition: border-color 0.4s ease 0s;
}
.main-menu li.active a {
    color: #001a73;
}
.main-menu li.open {
    border-top-color: #b1b1b1;
}
.main-menu li.open > .menu-toggle {
    background-color: #001a73;
    color: #ffffff;
}
.main-menu li:first-child {
    border-top: 0 none;
}
.main-menu .footer {
    display: none;
}
.main-menu .columns .column {
    float: none;
    width: auto;
}
.main-menu .columns .column.last.has-business-actions {
    border-top: 0 none;
}
.main-menu .children {
    margin-left: 20px;
}
.main-menu .children a {
    margin-left: 0;
    padding-left: 10px;
}
.main-menu .children, .main-menu .children .children .children {
    background-color: #e5e5de;
}
.main-menu .children .children, .main-menu .children .children .children .children {
    background-color: #f0f0ec;
    margin-left: 0;
    padding-left: 20px;
}
.main-menu .children .children a, .main-menu .children .children .children .children a {
    padding-left: 0;
}
.main-menu .children .children a {
    font-size: 1.21429em;
}
.main-menu .children .children .children {
    padding-left: 0;
}
.main-menu .children .children .children a {
    font-size: 1.07143em;
    padding-left: 10px;
}
.login-options .drop-down a, .login-options .drop-down .more {
    border-top: 1px solid #c8c8c2;
    display: block;
    margin-right: 0;
}
.login-options .drop-down p {
    font-size: 0.78947em;
}
.login-options .drop-down .more {
    padding: 11px 10px;
}
.login-options .drop-down .more::after {
    display: none;
}
.drop-down.active, .drop-down.js-hidden {
    position: static;
}
.drop-down a::before, .drop-down a.more {
    display: none;
}
.global-search .search-form {
    left: -9999px;
    position: absolute;
}
.global-search .search-form.js-hidden {
    position: static;
}
.global-search .search-form.js-hidden, .global-search .search-form.active {
    background-color: #f0f0ec;
    border-top: 1px solid #d2d2cc;
    clear: both;
    position: static;
}
.global-search .form-row {
    margin: 0 20px;
    padding: 10px 2px 25px 0;
}
.global-search label {
    display: block;
    margin-bottom: 15px;
}
body {
    margin-top: 112px;
}
.page-header {
    backface-visibility: hidden;
    background-color: white;
    height: 80px;
    left: 0;
    opacity: 1;
    position: fixed;
    right: 0;
    top: 0;
    transition: height 10ms ease 400ms, opacity 400ms ease-out 0s;
    z-index: 10;
}
.page-header.is-moved-up {
    height: 0;
    opacity: 0;
    overflow: hidden;
}
body.full-width-header {
    margin-top: 0;
}
body.full-width-header .page-header {
    background-color: transparent;
    position: static;
}
.logo {
    background: white none repeat scroll 0 0;
    height: 80px;
    position: absolute;
    width: 100%;
    z-index: 3;
}
.menu-container {
    background-color: #ffffff;
    bottom: 0;
    display: none;
    height: 100%;
    left: 0;
    margin-left: auto;
    margin-right: auto;
    overflow-x: hidden;
    overflow-y: auto;
    position: fixed;
    right: 0;
    width: 100%;
    z-index: 1;
}
.rgba .menu-container {
    background-color: rgba(255, 255, 255, 0.5);
}
}
@media only screen and (max-width: 1000px) and (min-width: 661px) {
.menu-container {
    width: 640px;
}
}
@media only screen and (max-width: 1000px) {
.menu-container .main-menu {
    left: 0;
    padding-top: 80px;
    position: relative;
    right: 0;
    width: 100%;
    z-index: 1;
}
.menu-active body {
    overflow: hidden;
}
.menu-active .page-header {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    height: 100%;
}
.menu-active .page-header .menu-container {
    display: block;
}
.full-width-header .menu-active .page-header .menu-container {
    z-index: 2;
}
}
@media only screen and (min-width: 661px) {
.page-header {
    width: 640px;
}
}
@media only screen and (min-width: 1001px) {
.page-header {
    font-size: 0.92857em;
    margin-bottom: 30px;
    margin-top: 10px;
    width: 960px;
}
.full-width-header .page-header {
    margin-bottom: 0;
    position: static;
}
.logo {
    margin-left: 0;
    margin-top: 32px;
}
.logo img {
    width: 80px;
}
.full-width-header .logo {
    margin-top: 20px;
    position: relative;
    top: -20px;
    z-index: 3;
}
body::after, body .menu-overlay {
    background-color: transparent;
    content: " ";
    display: block;
    left: 0;
    position: fixed;
    top: 0;
    transition: background-color 0.25s ease 0s;
    z-index: 3;
}
.no-rgba.opacity body::after, .no-rgba.opacity body .menu-overlay {
    background-color: #000000;
    opacity: 0.25;
}
body.menu-overlay::after, body.menu-overlay .menu-overlay {
    background-color: rgba(0, 0, 0, 0.25);
    bottom: 0;
    right: 0;
}
body.menu-overlay-faded::after {
    background-color: transparent;
}
body.menu-overlay-faded .menu-overlay {
    display: none;
}
.icon-toggle {
    display: none;
}
.main-navigation {
    margin: 0 10px 0 90px;
    padding-top: 50px;
    position: relative;
}
.menu-overlay .main-navigation {
    z-index: 5;
}
.main-menu {
    display: block !important;
}
.main-menu a {
    font-size: 1.30769em;
}
.main-menu .menu-toggle {
    display: none;
}
.main-menu > li {
    float: left;
    overflow: hidden;
    padding-top: 10px;
}
.main-menu > li > a {
    border-right: 1px solid #d2d2cc;
    line-height: 1.2;
    padding: 0 10px;
    transition: border-right 0s ease 0s, transform 0s ease 0s;
}
.main-menu > li > a:hover, .main-menu > li > a:focus {
    color: #ed8c00;
}
.rgba .menu-overlay .main-menu > li > a {
    border-right-color: #969688;
}
.menu-overlay-faded .main-menu > li > a {
    border-right-color: #d2d2cc;
}
.main-menu > li.active > a {
    color: #ed8c00;
}
.menu-overlay .main-menu > li.active > a {
    color: #b26900;
}
.menu-overlay .main-menu > li.hover > a {
    color: #ed8c00;
}
.no-js .main-menu > li:hover, .main-menu > li.hover {
    overflow: visible;
}
.no-js .main-menu > li:hover > .has-children, .main-menu > li.hover > .has-children {
    background-color: #ffffff;
    border-color: transparent;
    border-radius: 10px 10px 0 0;
    margin: -10px 0 0 -1px;
    padding: 10px 5px 10px 11px;
    position: relative;
    z-index: 10;
}
.no-js .main-menu > li:hover > .has-children::after, .main-menu > li.hover > .has-children::after {
    content: "";
}
.no-js .main-menu > li:hover .drop-down, .main-menu > li.hover .drop-down {
    left: 80px;
    right: 0;
    width: auto;
}
.no-js .main-menu > li:hover .drop-down.four, .no-js .main-menu > li:hover .drop-down.seven, .no-js .main-menu > li:hover .drop-down.eight, .main-menu > li.hover .drop-down.four, .main-menu > li.hover .drop-down.seven, .main-menu > li.hover .drop-down.eight {
    left: -15px;
}
.no-js .main-menu > li:hover .drop-down.no-columns, .main-menu > li.hover .drop-down.no-columns {
    left: auto;
    margin-left: -20px;
    right: auto;
}
.main-menu > li .business-actions {
    display: block;
}
.main-menu .has-children {
    padding-right: 5px;
}
.main-menu .has-children::after {
    content: "";
    vertical-align: middle;
}
.drop-down {
    backface-visibility: hidden;
    background-color: #ffffff;
    border-radius: 10px 10px 0;
    box-shadow: -5px 15px 40px 0 rgba(0, 0, 0, 0.5);
    line-height: 1.2;
    overflow: hidden;
    padding: 0 30px;
    width: 600px;
}
.drop-down.no-columns {
    display: table;
}
.drop-down a, .drop-down a.more, .drop-down a.has-children {
    padding: 5px 20px 8px 0;
}
.drop-down a {
    color: #444444;
    position: relative;
}
.drop-down a:hover, .drop-down a:focus {
    color: #ed8c00;
}
.drop-down a::before {
    left: 0;
    position: absolute;
    top: 0.15em;
}
.drop-down a::after {
    font-size: 1.3em;
    position: relative;
    vertical-align: middle;
}
.drop-down a::after, .drop-down a.has-children::after {
    content: "";
}
.drop-down a.more {
    color: #ed8c00;
}
.drop-down a.more:hover {
    color: #001a73;
}
.drop-down .children a {
    display: none;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 0.92308em;
}
.drop-down .children a.always-visible {
    display: block;
}
.drop-down .column {
    padding: 20px 0 15px;
}
.drop-down .column.highlighted {
    background-color: #ffffff;
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.5);
    width: 55%;
}
.drop-down .column.first {
    clear: left;
}
.drop-down .column > .has-children::after {
    content: "";
    top: -1px;
}
.drop-down .column > a, .drop-down .footer a {
    color: #001a73;
}
.drop-down .column > a:hover, .drop-down .column > a:focus, .drop-down .footer a:hover, .drop-down .footer a:focus {
    color: #ed8c00;
}
.drop-down .footer {
    overflow: hidden;
    padding: 12px 0;
}
.drop-down .footer a {
    display: inline;
    padding: 0;
}
.drop-down .footer a.close-link {
    float: right;
    font-size: 0.9em;
    margin-top: 4px;
}
.drop-down .business-actions {
    font-size: 1em;
    line-height: 1.5;
}
.drop-down .business-actions .title {
    font-size: 1.38462em;
}
.drop-down .business-actions .more {
    display: block;
    font: 1em Arial,Helvetica,sans-serif;
    padding-right: 0;
}
.drop-down .business-actions .more::before {
    display: none;
}
.drop-down .language-switch, .drop-down .language-switch-dep {
    float: right;
    position: static;
}
.drop-down .language-switch a, .drop-down .language-switch-dep a {
    color: #444444;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 1em;
}
.drop-down .language-switch a::before, .drop-down .language-switch-dep a::before {
    position: static;
}
.drop-down .language-switch a::after, .drop-down .language-switch-dep a::after {
    content: "";
    font-size: 1em;
}
.drop-down .language-switch a:hover, .drop-down .language-switch-dep a:hover {
    color: #ed8c00;
}
.main-menu li.login-options {
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1;
}
.main-menu li.login-options a::before {
    display: none;
}
.main-menu li.login-options a.has-children {
    border: 0 none;
    border-radius: 5px 5px 0;
    font: bold 0.92308em/1.8 Arial,Helvetica,sans-serif;
    padding: 2px 40px 2px 10px;
    position: relative;
    transition: background-color 0.25s ease 0s, color 0.25s ease 0s;
    z-index: 1;
}
.main-menu li.login-options a.has-children::after {
    font-size: 1.667em;
    line-height: 1.2;
    position: absolute;
    right: 10px;
}
.menu-overlay .main-menu li.login-options a.has-children {
    background-color: #b26900;
    color: #bfbfbf;
}
.main-menu li.login-options a.has-children, .menu-overlay-faded .main-menu li.login-options a.has-children {
    background-color: #ed8c00;
    color: #ffffff;
}
.main-menu li.login-options.hover .has-children, .main-menu li.login-options:hover .has-children, .main-menu li.login-options:focus .has-children {
    background-color: #f0f0ec !important;
    border-bottom-left-radius: 0;
    color: #001a73 !important;
    margin: 0;
    padding: 2px 40px 2px 10px;
}
.main-menu li.login-options.hover .has-children::after, .main-menu li.login-options:hover .has-children::after, .main-menu li.login-options:focus .has-children::after {
    content: "";
}
.main-menu li.login-options.hover .drop-down, .main-menu li.login-options:hover .drop-down, .main-menu li.login-options:focus .drop-down {
    left: auto;
    right: 0;
}
.main-menu li.login-options .drop-down {
    background-color: #f0f0ec;
    border-radius: 10px 0 0 10px;
    line-height: 1.5;
    margin-right: 0;
    padding: 20px;
    width: 320px;
}
.main-menu li.login-options .drop-down a {
    background-color: #ffffff;
    border-radius: 5px 5px 0;
    color: #bbbbbc;
    margin-bottom: 10px;
    padding: 4px 10px 7px;
    position: relative;
}
.main-menu li.login-options .drop-down a::after {
    bottom: 0;
    color: #ed8c00;
    content: "";
    font-size: 27px;
    left: auto;
    margin-top: -0.65em;
    position: absolute;
    right: 10px;
    top: 50%;
}
.main-menu li.login-options .drop-down a.more {
    background-color: transparent;
    margin-top: 10px;
}
.main-menu li.login-options .drop-down a.more::after {
    line-height: 30px;
    top: auto;
}
.main-menu li.login-options .drop-down a:hover, .main-menu li.login-options .drop-down a:focus {
    background-color: #ed8c00;
    color: #ffffff;
}
.main-menu li.login-options .drop-down a:hover::after, .main-menu li.login-options .drop-down a:focus::after {
    color: #ffffff;
}
.main-menu li.login-options .drop-down a:hover h2, .main-menu li.login-options .drop-down a:focus h2 {
    color: #ffffff;
}
.main-menu li.login-options h2 {
    color: #ed8c00;
    font-size: 1.07143em;
}
.global-search {
    margin-right: 100px;
    position: absolute;
    right: 10px;
    top: 0;
}
[lang="de"] .global-search {
    margin-right: 108px;
}
[lang="fr"] .global-search {
    margin-right: 125px;
}
[lang="it"] .global-search, [lang="en"] .global-search {
    margin-right: 83px;
}
[lang="es"] .global-search {
    margin-right: 127px;
}
[lang="ch"] .global-search {
    margin-right: 74px;
}
[lang="ru"] .global-search {
    margin-right: 142px;
}
.global-search label {
    display: none;
}
.global-search .form-row {
    margin: 0 10px 0 0;
    width: 270px;
}
.global-search .form-row .input {
    font-family: Arial,Helvetica,sans-serif;
}
.global-search .form-row .submit {
    width: 30px;
}
.language-switch {
    margin-right: 10px;
    right: 100%;
    top: 5px;
}
}
@media only screen and (min-width: 1151px) {
.page-header {
    width: 1120px;
}
}
.date-display {
    font-size: 0.92857em;
    font-weight: bold;
    padding-right: 5px;
}
.introduction {
    font-size: 1.28571em;
    margin-bottom: 30px;
}
@media only screen and (min-width: 661px) {
.introduction img {
    float: left;
    margin: 0.5em 20px 0 0;
}
}
.shift-headings h1, .shift-headings .page-title .title {
    font-size: 2.14286em;
}
.shift-headings .page-title .subtitle {
    font-size: 1.71429em;
}
.shift-headings h2 {
    font-size: 1.5em;
    margin: 1.2em 0 0.18em;
}
.intro-block .title {
    margin-bottom: 0.4em;
}
.overview .header-image {
    margin: 5px 0 0;
}
.overview .item .title {
    font-size: 1.42857em;
}
.overview .item .title a {
    color: #001a73;
    text-decoration: none;
}
.overview .item .title, .overview .item .date-display {
    margin-bottom: 10px;
    margin-top: 0;
}
.overview .item .meta {
    font-weight: bold;
    margin: 0;
}
.overview .item .content {
    border-bottom: 1px solid #d2d2cc;
    padding: 15px 0 25px;
}
.overview .item .description {
    margin-bottom: 0;
}
.overview .item.clickable:hover {
    background-color: #f0f0ec;
}
@media only screen and (min-width: 661px) {
.overview .header-image {
    float: left;
    width: 120px;
}
.overview .header-image.large {
    width: 170px;
}
.overview .text {
    margin-left: 135px;
}
.overview .header-image.large + .text {
    margin-left: 175px;
}
}
.overview-icons {
    float: right;
    margin: 22px 0 0;
}
.inline-navigation {
    margin-bottom: 30px;
    margin-top: 30px;
}
.inline-navigation .content {
    background-color: #ffffff;
    padding-bottom: 30px;
    position: relative;
}
.inline-navigation .title, .inline-navigation .items {
    display: inline-block;
    vertical-align: middle;
}
.inline-navigation .title {
    color: #444444;
    font-size: 1.14286em;
    margin-right: 25px;
}
.inline-navigation li {
    float: left;
    margin: 0 5px 5px 0;
}
.inline-navigation a {
    background-color: #b4b4ae;
    border-radius: 5px;
    color: #ffffff;
    display: block;
    font-size: 1.28571em;
    padding: 5px 20px 8px;
    text-decoration: none;
}
.inline-navigation a.active, .inline-navigation a:hover {
    background-color: #ed8c00;
}
.gallery .title {
    margin-bottom: 0.5em;
}
.gallery .column {
    margin-bottom: 2em;
}
.gallery .preview {
    display: block;
    height: 130px;
    margin-bottom: 0.5em;
}
.gallery .preview a {
    display: block;
    position: relative;
}
.gallery .preview a::after {
    background: transparent none no-repeat scroll center center;
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
}
.gallery .preview.video a::after {
    background-image: url("/sites/all/themes/developer/img/video-overlay.png");
    content: " ";
}
.gallery .preview img {
    max-height: 130px;
}
.gallery .description {
    font-size: 0.92857em;
    margin-bottom: 0.5em;
}
@media only screen and (min-width: 1151px) {
.gallery .preview {
    height: 150px;
    text-align: center;
}
.gallery .preview img {
    max-height: 150px;
}
}
.social-media-sharing {
    font-size: 1em;
    margin-bottom: 30px;
    overflow: hidden;
}
.social-media-sharing .medium {
    float: left;
    padding-right: 10px;
}
.social-media-sharing.right {
    float: right;
    font-size: 0;
}
.image-container {
    line-height: 0;
}
.teaser {
    font-size: 1.07143em;
}
.redirects {
    border-left: 2px solid #ed8c00;
    margin-bottom: 30px;
    padding-left: 20px;
}
.redirects p {
    margin: 0 0 1em;
}
@media only screen and (min-width: 661px) {
.redirects p {
    margin-bottom: 0.5em;
}
}
.article-information {
    border-top: 1px solid #d2d2cc;
    font-style: italic;
    margin-top: 2.5em;
}
.buttons {
    clear: both;
    margin-bottom: 0;
    margin-top: 0;
}
.buttons .button, .call-me-now-container .chat p.buttons button, .call-me-now-container .whatsapp p.buttons button, .buttons p {
    margin-bottom: 1em;
}
.buttons .button, .call-me-now-container .chat p.buttons button, .call-me-now-container .whatsapp p.buttons button {
    margin-right: 0.5em;
}
.buttons .button.link, .call-me-now-container .chat p.buttons button.link, .call-me-now-container .whatsapp p.buttons button.link {
    margin-bottom: 0;
}
.buttons .button.large, .call-me-now-container .chat p.buttons button.large, .call-me-now-container .whatsapp p.buttons button.large {
    margin-bottom: 15px;
    margin-right: 20px;
}
.buttons.no-spacing .button, .buttons.no-spacing .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .buttons.no-spacing button, .buttons.no-spacing .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .buttons.no-spacing button {
    margin-bottom: 1.8em;
    margin-top: -1em;
}
.buttons.offset-bottom {
    margin-bottom: 1.6em;
}
.category-links {
    margin-bottom: 20px;
}
.category-links h2, .category-links h3 {
    font-size: 1.28571em;
    margin: 0;
}
.category-links h2.light, .category-links h3.light {
    margin: 0;
    padding: 0;
}
.category-links h2.light a, .category-links h3.light a {
    margin: 0;
    padding: 0;
}
.category-links .link {
    color: #001a73;
    text-decoration: none;
}
.category-links .link.small {
    color: #ed8c00;
    font-weight: normal;
}
.category-links .category {
    padding: 15px 10px;
}
.category-links .category ul.light {
    margin-top: 10px;
}
.category-links .category.light {
    background: #ffffff none repeat scroll 0 0;
    margin: 15px 10px;
    padding: 20px;
}
.category-links .category .description {
    color: #898987;
    margin: 5px 0;
    text-rendering: optimizelegibility;
}
.category-links .category .descriptionp {
    margin: 0;
    padding: 0;
}
.category-links .category .link.small.button, .category-links .category .call-me-now-container .chat p.buttons button.link.small, .call-me-now-container .chat p.buttons .category-links .category button.link.small, .category-links .category .call-me-now-container .whatsapp p.buttons button.link.small, .call-me-now-container .whatsapp p.buttons .category-links .category button.link.small {
    font-size: 12px;
}
.category-links .category:hover {
    background-color: #e3e3dc;
}
.category-links .category.light:hover {
    background: #ffffff none repeat scroll 0 0;
}
.category-links .category:hover .link {
    color: #ed8c00;
    text-decoration: underline;
}
.category-links .category:hover .link.small {
    text-decoration: none;
}
.category-links .category:hover .link.small:hover {
    text-decoration: underline;
}
.category-links .category:hover .link.heading {
    color: #001a73;
    text-decoration: none;
}
.share-price .price {
    margin: 0;
}
.share-price .positive {
    color: #6c9d53;
}
.share-price .negative {
    color: #d52b1e;
}
.strong {
    color: #001a73;
    font-size: 1.14286em;
}
.quadia-video iframe {
    border: 0 none;
    overflow: hidden;
}
.promo-label {
    margin: -6px -6px 0 0;
    pointer-events: none;
    position: absolute;
    right: 0;
    top: 0;
}
.promo-banner {
    background-color: #e22914;
    background-image: linear-gradient(to right bottom, #e22914, #d32712);
    border-radius: 100%;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.2);
    color: #ffffff;
    height: 80px;
    line-height: 80px;
    text-align: center;
    transform: rotate(-15deg);
    width: 80px;
}
.promo-banner.positioned {
    position: absolute;
}
.promo-banner.positioned.top {
    top: 0;
}
.promo-banner.positioned.right {
    right: 20px;
    transform: rotate(15deg);
}
.promo-banner.floats {
    margin-top: -0.5em;
}
.promo-banner .text {
    display: inline-block;
    font-size: 15px;
    font-weight: normal;
    line-height: 1.2;
    margin-top: -3px;
    position: relative;
    transition: transform 0s ease 0s;
    vertical-align: middle;
}
.has-promo-banner {
    position: relative;
}
.columns > .content {
    padding-left: 10px;
    padding-right: 10px;
}
@media only screen and (min-width: 661px) {
.columns > .content {
    padding-left: 0;
    padding-right: 0;
}
}
@media only screen and (min-width: 1001px) {
.separated {
    position: relative;
}
.separated::after {
    border-right: 1px solid #d2d2cc;
    bottom: 0;
    content: " ";
    position: absolute;
    right: 0;
    top: 0;
}
.buttons .button.large, .call-me-now-container .chat p.buttons button.large, .call-me-now-container .whatsapp p.buttons button.large {
    margin-right: 0;
}
}
.search-form .form-row {
    padding-right: 2px;
    position: relative;
}
.search-form .inputs {
    display: block;
    position: relative;
}
.search-form .input {
    -moz-appearance: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #b1b1b1 #dadada #dadada #b1b1b1;
    border-image: none;
    border-radius: 5px;
    border-style: solid;
    border-width: 1px;
    box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.1) inset;
    box-sizing: border-box;
    color: #444444;
    padding: 6px 10px;
    position: relative;
    width: 295px;
}
.search-form .input:focus {
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1) inset, 0 0 5px 1px rgba(237, 140, 0, 0.9);
    outline: medium none;
}
.search-form .submit {
    background: #ed8c00 none repeat scroll 0 0;
    border: 0 none;
    border-radius: 0 5px 5px 0;
    bottom: 0;
    padding: 6px;
    position: absolute;
    right: 0;
    text-indent: -9999em;
    top: 0;
    width: 40px;
}
.search-form .submit::after {
    bottom: 0;
    color: #ffffff;
    content: "";
    font-size: 1.5em;
    line-height: 1.6;
    margin-right: 5px;
    position: absolute;
    right: 0;
    text-indent: 0;
    top: 0;
}
.main .search-form {
    margin-left: 0;
}
.main .search-form label {
    color: #001a73;
    display: block;
    font-size: 1.07143em;
    margin-bottom: 1em;
}
.main .search-form .input {
    font-size: 1.07143em;
    width: 99%;
}
.main .search-form .submit::after {
    font-size: 25px;
    line-height: 38px;
}
.search-suggestions {
    clear: left;
    font-size: 0.92857em;
    line-height: 2;
    margin-bottom: 2em;
}
.search-suggestions p {
    margin-bottom: 0;
}
.search-suggestions .inline li {
    margin-right: 1em;
}
.main .single-line-search {
    margin: 20px 10px 30px;
}
.main .single-line-search.search-form {
    margin-bottom: 0;
    margin-left: 0;
}
.main .single-line-search form {
    float: none;
    margin: 0 auto;
}
.main .single-line-search label {
    padding-right: 5px;
}
@media only screen and (min-width: 661px) {
.main .single-line-search label {
    display: inline;
}
.main .single-line-search .inputs {
    display: inline-block;
}
.main .single-line-search .input {
    width: 395px;
}
}
form.search-form {
    position: relative;
}
.suggestion-results {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #ffffff;
    border-color: #d2d2cc;
    border-image: none;
    border-style: solid;
    border-width: 0 1px 1px;
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
    display: none;
    font-size: 0.92857em;
    margin-left: 0;
    min-width: 170px;
    padding: 0;
    position: absolute;
    top: 69px;
    width: 100%;
    z-index: 5 !important;
}
.suggestion-results.small {
    top: 185px;
}
@media only screen and (min-width: 1001px) {
.suggestion-results {
    border: 1px solid #c8c8c2;
    border-radius: 0 5px;
    position: absolute;
    right: 17px;
    top: 33px;
    width: 395px;
}
.suggestion-results.no-label {
    right: auto;
}
.suggestion-results.small {
    right: auto;
    top: auto;
    width: 382px;
}
}
.suggestion-results ul {
    margin: 0;
    padding: 0;
    position: relative;
    width: 100%;
}
.suggestion-results ul li {
    cursor: pointer;
    font-size: 1em;
    list-style: outside none none;
    margin: 0;
    padding: 3px 15px;
}
.suggestion-results ul li:hover {
    background: #f0f0ec none repeat scroll 0 0;
}
.suggestion-results ul li a {
    color: #444444;
    text-decoration: none;
}
.suggestion-results .suggestions {
    background: #f0f0ec none repeat scroll 0 0;
    border-radius: 0 0 0 5px;
    float: left;
    padding: 10px 0;
    position: relative;
    width: 100%;
}
.suggestion-results .suggestions .suggestion {
    float: left;
    margin: 10px 0;
    position: relative;
    width: 100%;
}
.suggestion-results .suggestions .image-block {
    display: none;
}
@media only screen and (min-width: 1001px) {
.suggestion-results .suggestions .image-block {
    background-position: center center;
    background-size: cover;
    display: block;
    float: left;
    height: 70px;
    margin-left: 20px;
    width: 50px;
}
.suggestion-results .suggestions .image-block img {
    display: none;
}
}
.suggestion-results .suggestions .content {
    margin: 0;
    position: relative;
}
@media only screen and (min-width: 1001px) {
.suggestion-results .suggestions .content {
    left: 65px;
    position: absolute;
    right: 0;
}
}
.suggestion-results .suggestions .title {
    font-size: 1.71429em;
    margin: 0;
    padding: 0 20px 4px;
}
.suggestion-results .suggestions .description {
    height: 18px;
    overflow: hidden;
    padding: 0 20px;
}
.suggestion-results .suggestions .button, .suggestion-results .suggestions .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .suggestion-results .suggestions button, .suggestion-results .suggestions .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .suggestion-results .suggestions button {
    margin: 2px 20px 0;
}
.autocomplete-suggestions {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #ffffff;
    border-color: #d2d2cc;
    border-image: none;
    border-style: solid;
    border-width: 0 1px 1px;
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
    font-size: 0.92857em;
    margin-left: 5px;
    min-width: 170px;
    padding: 5px 0;
    z-index: 3 !important;
}
.menu-overlay .autocomplete-suggestions {
    display: none !important;
}
.autocomplete-suggestions.large {
    font-size: 1.07143em;
    padding: 10px 0;
}
.autocomplete-suggestion {
    cursor: pointer;
    padding: 3px 15px;
}
.autocomplete-suggestion:hover, .autocomplete-selected {
    background-color: #f0f0ec;
}
.search-push-blocks {
    margin-bottom: 10px;
}
.search-push-blocks .block {
    background-color: #f0f0ec;
    font-size: 0.92857em;
}
.search-push-blocks .block .title {
    font-size: 1.53846em;
}
.search-push-blocks .killer-apps.columns {
    padding: 0;
}
.search-push-blocks .killer-apps.columns .column {
    margin-bottom: 0;
    min-width: 230px;
}
.search-push-blocks .killer-apps.columns .killer-app {
    border: 0 none;
    left: 0;
    min-width: 0;
    right: 0;
}
.search-push-blocks .killer-apps.columns .killer-app::after {
    display: none;
}
.search-push-blocks .killer-app .title {
    font-size: 1.42857em;
}
.search-push-blocks .killer-app .title::after {
    display: none;
}
.search-push-blocks .killer-app.collapsed header, .search-push-blocks .killer-app.collapsed .form[class] {
    background-color: #f0f0ec;
}
.search-push-blocks .killer-app.collapsed .form {
    padding-bottom: 10px;
}
.search-push-blocks .killer-app.collapsed header {
    border-radius: 10px 10px 0;
}
.search-results {
    border-top: 1px solid #babab1;
}
.search-results .results-count {
    color: #444444;
    font: 0.92857em normal Arial,Helvetica,sans-serif;
    margin: 15px 0 30px;
}
.search-results .original-spelling {
    font-size: 0.92857em;
    margin: 0;
    position: relative;
    top: -25px;
}
.search-results .block, .search-results .media-block {
    font-size: 1em;
}
.search-results .block .title, .search-results .media-block .title {
    font-size: 1.5em;
    margin-bottom: 7px;
}
.search-results .block p, .search-results .media-block p {
    margin-bottom: 1em;
}
.search-results .block p.buttons, .search-results .media-block p.buttons {
    margin-bottom: 0;
}
.search-results .results {
    margin-bottom: 20px;
    margin-top: 20px;
}
.search-results .results.with-push-blocks .result:first-child {
    border-top-width: 0;
}
.search-results .original-spelling + .results {
    margin-top: 0;
}
.search-results .result {
    border-bottom: 1px solid #babab1;
    padding: 15px 0;
}
.search-results .result.clickable:hover {
    background-color: #f0f0ec;
}
.search-results .result .title {
    margin-top: 0;
}
.search-results .result a {
    color: #001a73;
    text-decoration: none;
}
.search-results .result a:visited {
    color: #a0a0a0;
}
.search-results .result.push {
    background: #ffffff none repeat scroll 0 0;
    border: 0 none;
    margin-top: -1px;
    padding: 10px 0;
}
.search-results .result.push .block {
    border: 1px solid #babab1;
    margin: 0;
    padding-bottom: 5px;
}
.search-results .result.push .block .title {
    font-size: 1.28571em;
}
.search-results .result.push .block .button, .search-results .result.push .block .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .search-results .result.push .block button, .search-results .result.push .block .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .search-results .result.push .block button {
    color: #ffffff;
}
.search-results .result.push .block .links a:hover {
    text-decoration: underline;
}
.search-results .description {
    margin: 0.5em 0 0.2em;
}
.search-results .url {
    color: #989898;
    font-size: 0.92857em;
    margin-bottom: 0;
}
@media only screen and (min-width: 661px) {
.search-results .result {
    padding-left: 20px;
    padding-right: 20px;
}
}
.language-selection {
    float: right;
}
.page-footer {
    background-color: #f0f0ec;
    border-top: 1px solid #c8c8c2;
    font-size: 0.92857em;
    margin-top: 40px;
}
.page-footer .content {
    padding-left: 0;
    padding-right: 0;
}
.page-footer .narrow-content {
    margin: 0 10px;
}
.page-footer .footer-top {
    margin: 0 20px;
    padding: 15px 0;
    text-align: right;
}
.page-footer .killer-app-links {
    border-top: 1px solid #c8c8c2;
    color: #001a73;
    font-size: 1.41667em;
    line-height: 1.2;
    margin: 0 10px;
    overflow: hidden;
}
.page-footer .killer-app-links li {
    padding: 10px 0;
}
.page-footer .killer-app-links a {
    color: #ed8c00;
    display: block;
    line-height: 40px;
    position: relative;
}
.page-footer .killer-app-links a::after {
    content: "";
    font-size: 1.3em;
    height: 1.05em;
    margin-top: 2px;
    overflow: hidden;
    position: absolute;
}
.page-footer .killer-app-links a:focus, .page-footer .killer-app-links a:hover {
    color: #001a73;
    text-decoration: none;
}
.page-footer .killer-app-links img {
    margin-right: 10px;
    max-width: 35px;
    vertical-align: middle;
}
.page-footer .footer-navigation {
    border-top: 1px solid #c8c8c2;
    margin: 20px 10px 25px;
}
.page-footer a {
    color: #868681;
    position: relative;
    text-decoration: none;
}
.page-footer a:focus, .page-footer a:hover {
    color: #001a73;
    text-decoration: underline;
}
.page-footer .children a {
    position: static;
}
.page-footer .title {
    display: block;
    font-size: 1.41667em;
    margin: 20px 0 12px;
}
.page-footer .items .item {
    margin: 0 0 10px;
}
.page-footer .items li {
    margin-bottom: 13px;
}
.page-footer .items a::after {
    content: "";
    font-size: 1.3em;
    height: 1em;
    margin-top: -2px;
    overflow: hidden;
    position: absolute;
}
.page-footer .items a.title::after {
    margin-top: -1px;
}
.page-footer .items .childless {
    margin-bottom: 0;
}
.page-footer .items .childless .title {
    margin-bottom: 20px;
}
.page-footer .odd {
    clear: left;
}
.page-footer .odd.childless {
    clear: none;
}
.page-footer .social-media {
    border-top: 1px solid #c8c8c2;
    clear: left;
    line-height: 1;
    margin: 0 10px;
    padding: 20px 0;
}
.page-footer .social-media ul {
    margin-bottom: 0;
}
.page-footer .social-media li {
    display: inline-block;
    margin-bottom: 0;
    margin-right: 10px;
}
.page-footer .social-media .icon::before {
    color: #b4b4ae;
}
.page-footer .social-media .icon::after {
    display: none;
}
.page-footer .social-media .icon:hover::before {
    color: #001a73;
}
.global-links {
    background-color: #ed8c00;
    letter-spacing: 1px;
    margin-bottom: 0;
}
.global-links .content-container {
    padding: 6px 0;
}
.global-links ul {
    margin: 0 10px;
}
.global-links ul li {
    display: inline-block;
    margin-right: 2em;
}
.global-links a {
    color: #ffffff;
}
.page-footer .footer-top, .global-links .content-container {
    border-bottom: 0 none;
    overflow: hidden;
    position: relative;
}
.page-footer .footer-top::after, .global-links .content-container::after {
    bottom: auto;
    top: -10px;
    z-index: 0;
}
@media only screen and (min-width: 661px) {
.page-footer .item {
    float: left;
    width: 50%;
}
.page-footer .title {
    margin-top: 0;
}
.page-footer .killer-app-links li {
    display: block;
    float: left;
    height: 45px;
    margin: 0;
    width: 50%;
}
}
@media only screen and (min-width: 1001px) {
.page-footer .title {
    margin-top: 20px;
}
.page-footer .footer-navigation {
    margin-top: 0;
}
.page-footer .items {
    max-width: 940px;
}
.page-footer .items .item {
    width: 25%;
}
.page-footer .items .childless .title {
    margin-bottom: 0;
}
.page-footer .odd {
    clear: none;
}
.page-footer .killer-app-links li {
    display: inline-block;
    margin-right: 48px;
    white-space: nowrap;
    width: auto;
}
}
@keyframes loader-fade-in {
0%, 20% {
    opacity: 0;
}
100% {
    opacity: 1;
}
}
@keyframes loader-fade-in {
0%, 20% {
    opacity: 0;
}
100% {
    opacity: 1;
}
}
@keyframes loader-fade-in {
0%, 20% {
    opacity: 0;
}
100% {
    opacity: 1;
}
}
#location-picker-container, #delay-container, #map-container {
    background-image: url("/sites/all/themes/developer/img/loader-big.gif");
    background-position: center 162.5px;
    background-repeat: no-repeat;
    min-height: 770px;
}
.locationpicker-killerapp .geo-finder-geo {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    color: #001a73;
    display: block;
    float: right;
    font-size: 1.4em;
    line-height: 1.5em;
    padding: 0;
}
.locationpicker-killerapp .geo-finder-geo::after {
    content: "";
}
.location-picker, .post-delay, .map-big {
    float: left;
    height: 650px;
    position: relative;
    width: 100%;
}
.location-picker .location-picker-map, .location-picker .post-delay-map, .location-picker .post-map, .post-delay .location-picker-map, .post-delay .post-delay-map, .post-delay .post-map, .map-big .location-picker-map, .map-big .post-delay-map, .map-big .post-map {
    height: 100%;
}
.location-picker .location-picker-map .gmnoprint img, .location-picker .location-picker-map .gm-style img, .location-picker .post-delay-map .gmnoprint img, .location-picker .post-delay-map .gm-style img, .location-picker .post-map .gmnoprint img, .location-picker .post-map .gm-style img, .post-delay .location-picker-map .gmnoprint img, .post-delay .location-picker-map .gm-style img, .post-delay .post-delay-map .gmnoprint img, .post-delay .post-delay-map .gm-style img, .post-delay .post-map .gmnoprint img, .post-delay .post-map .gm-style img, .map-big .location-picker-map .gmnoprint img, .map-big .location-picker-map .gm-style img, .map-big .post-delay-map .gmnoprint img, .map-big .post-delay-map .gm-style img, .map-big .post-map .gmnoprint img, .map-big .post-map .gm-style img {
    max-width: none;
}
.location-picker .location-picker-map .gm-style-iw, .location-picker .post-delay-map .gm-style-iw, .location-picker .post-map .gm-style-iw, .post-delay .location-picker-map .gm-style-iw, .post-delay .post-delay-map .gm-style-iw, .post-delay .post-map .gm-style-iw, .map-big .location-picker-map .gm-style-iw, .map-big .post-delay-map .gm-style-iw, .map-big .post-map .gm-style-iw {
    left: 20px !important;
    white-space: nowrap;
}
.location-picker .location-picker-map .gm-style-iw, .location-picker .location-picker-map .gm-style-iw > div, .location-picker .post-delay-map .gm-style-iw, .location-picker .post-delay-map .gm-style-iw > div, .location-picker .post-map .gm-style-iw, .location-picker .post-map .gm-style-iw > div, .post-delay .location-picker-map .gm-style-iw, .post-delay .location-picker-map .gm-style-iw > div, .post-delay .post-delay-map .gm-style-iw, .post-delay .post-delay-map .gm-style-iw > div, .post-delay .post-map .gm-style-iw, .post-delay .post-map .gm-style-iw > div, .map-big .location-picker-map .gm-style-iw, .map-big .location-picker-map .gm-style-iw > div, .map-big .post-delay-map .gm-style-iw, .map-big .post-delay-map .gm-style-iw > div, .map-big .post-map .gm-style-iw, .map-big .post-map .gm-style-iw > div {
    overflow: auto !important;
}
.location-picker .location-picker-map .gm-style-iw + div, .location-picker .post-delay-map .gm-style-iw + div, .location-picker .post-map .gm-style-iw + div, .post-delay .location-picker-map .gm-style-iw + div, .post-delay .post-delay-map .gm-style-iw + div, .post-delay .post-map .gm-style-iw + div, .map-big .location-picker-map .gm-style-iw + div, .map-big .post-delay-map .gm-style-iw + div, .map-big .post-map .gm-style-iw + div {
    display: none;
}
.location-picker .location-picker-controls, .location-picker .post-delay-controls, .location-picker .post-controls, .post-delay .location-picker-controls, .post-delay .post-delay-controls, .post-delay .post-controls, .map-big .location-picker-controls, .map-big .post-delay-controls, .map-big .post-controls {
    background: rgba(0, 0, 0, 0) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6fwYAAtMBznRijrsAAAAASUVORK5CYII=") repeat scroll 0 0;
    border-radius: 10px 10px 0;
    height: auto;
    left: 0;
    margin: 20px;
    padding: 20px 10px 20px 20px;
    position: absolute;
    top: 0;
    width: 280px;
}
.location-picker .location-picker-controls .location-picker-controls-title, .location-picker .post-delay-controls .location-picker-controls-title, .location-picker .post-controls .location-picker-controls-title, .post-delay .location-picker-controls .location-picker-controls-title, .post-delay .post-delay-controls .location-picker-controls-title, .post-delay .post-controls .location-picker-controls-title, .map-big .location-picker-controls .location-picker-controls-title, .map-big .post-delay-controls .location-picker-controls-title, .map-big .post-controls .location-picker-controls-title {
    height: 50px;
    margin: 0;
}
.location-picker .location-picker-controls fieldset, .location-picker .location-picker-controls .form-row, .location-picker .post-delay-controls fieldset, .location-picker .post-delay-controls .form-row, .location-picker .post-controls fieldset, .location-picker .post-controls .form-row, .post-delay .location-picker-controls fieldset, .post-delay .location-picker-controls .form-row, .post-delay .post-delay-controls fieldset, .post-delay .post-delay-controls .form-row, .post-delay .post-controls fieldset, .post-delay .post-controls .form-row, .map-big .location-picker-controls fieldset, .map-big .location-picker-controls .form-row, .map-big .post-delay-controls fieldset, .map-big .post-delay-controls .form-row, .map-big .post-controls fieldset, .map-big .post-controls .form-row {
    margin: 5px 0 0;
}
.location-picker .location-picker-controls fieldset.delay, .location-picker .location-picker-controls .form-row.delay, .location-picker .post-delay-controls fieldset.delay, .location-picker .post-delay-controls .form-row.delay, .location-picker .post-controls fieldset.delay, .location-picker .post-controls .form-row.delay, .post-delay .location-picker-controls fieldset.delay, .post-delay .location-picker-controls .form-row.delay, .post-delay .post-delay-controls fieldset.delay, .post-delay .post-delay-controls .form-row.delay, .post-delay .post-controls fieldset.delay, .post-delay .post-controls .form-row.delay, .map-big .location-picker-controls fieldset.delay, .map-big .location-picker-controls .form-row.delay, .map-big .post-delay-controls fieldset.delay, .map-big .post-delay-controls .form-row.delay, .map-big .post-controls fieldset.delay, .map-big .post-controls .form-row.delay {
    margin: 5px 10px 0 0;
}
.location-picker .location-picker-controls fieldset.delay.submit-buttons, .location-picker .location-picker-controls .form-row.delay.submit-buttons, .location-picker .post-delay-controls fieldset.delay.submit-buttons, .location-picker .post-delay-controls .form-row.delay.submit-buttons, .location-picker .post-controls fieldset.delay.submit-buttons, .location-picker .post-controls .form-row.delay.submit-buttons, .post-delay .location-picker-controls fieldset.delay.submit-buttons, .post-delay .location-picker-controls .form-row.delay.submit-buttons, .post-delay .post-delay-controls fieldset.delay.submit-buttons, .post-delay .post-delay-controls .form-row.delay.submit-buttons, .post-delay .post-controls fieldset.delay.submit-buttons, .post-delay .post-controls .form-row.delay.submit-buttons, .map-big .location-picker-controls fieldset.delay.submit-buttons, .map-big .location-picker-controls .form-row.delay.submit-buttons, .map-big .post-delay-controls fieldset.delay.submit-buttons, .map-big .post-delay-controls .form-row.delay.submit-buttons, .map-big .post-controls fieldset.delay.submit-buttons, .map-big .post-controls .form-row.delay.submit-buttons {
    margin: 10px 10px 0 0;
}
.location-picker .location-picker-controls .form, .location-picker .post-delay-controls .form, .location-picker .post-controls .form, .post-delay .location-picker-controls .form, .post-delay .post-delay-controls .form, .post-delay .post-controls .form, .map-big .location-picker-controls .form, .map-big .post-delay-controls .form, .map-big .post-controls .form {
    background-color: transparent;
    padding: 0;
}
.location-picker .location-picker-controls .form.loading-form, .location-picker .post-delay-controls .form.loading-form, .location-picker .post-controls .form.loading-form, .post-delay .location-picker-controls .form.loading-form, .post-delay .post-delay-controls .form.loading-form, .post-delay .post-controls .form.loading-form, .map-big .location-picker-controls .form.loading-form, .map-big .post-delay-controls .form.loading-form, .map-big .post-controls .form.loading-form {
    animation: 200ms ease 0s normal none 1 running loader-fade-in;
    background-image: url("/sites/all/themes/developer/img/loader-big.gif");
    background-position: center center;
    background-repeat: no-repeat;
}
.location-picker .location-picker-controls .form .label, .location-picker .post-delay-controls .form .label, .location-picker .post-controls .form .label, .post-delay .location-picker-controls .form .label, .post-delay .post-delay-controls .form .label, .post-delay .post-controls .form .label, .map-big .location-picker-controls .form .label, .map-big .post-delay-controls .form .label, .map-big .post-controls .form .label {
    font-weight: bold;
}
.location-picker .location-picker-controls .form .inline.radio, .location-picker .post-delay-controls .form .inline.radio, .location-picker .post-controls .form .inline.radio, .post-delay .location-picker-controls .form .inline.radio, .post-delay .post-delay-controls .form .inline.radio, .post-delay .post-controls .form .inline.radio, .map-big .location-picker-controls .form .inline.radio, .map-big .post-delay-controls .form .inline.radio, .map-big .post-controls .form .inline.radio {
    margin-left: 1px;
}
.location-picker .location-picker-controls .form .geo-finder-geo, .location-picker .post-delay-controls .form .geo-finder-geo, .location-picker .post-controls .form .geo-finder-geo, .post-delay .location-picker-controls .form .geo-finder-geo, .post-delay .post-delay-controls .form .geo-finder-geo, .post-delay .post-controls .form .geo-finder-geo, .map-big .location-picker-controls .form .geo-finder-geo, .map-big .post-delay-controls .form .geo-finder-geo, .map-big .post-controls .form .geo-finder-geo {
    display: none;
}
html.geolocation .location-picker .location-picker-controls .form .geo-finder-query, html.geolocation .location-picker .post-delay-controls .form .geo-finder-query, html.geolocation .location-picker .post-controls .form .geo-finder-query, html.geolocation .post-delay .location-picker-controls .form .geo-finder-query, html.geolocation .post-delay .post-delay-controls .form .geo-finder-query, html.geolocation .post-delay .post-controls .form .geo-finder-query, html.geolocation .map-big .location-picker-controls .form .geo-finder-query, html.geolocation .map-big .post-delay-controls .form .geo-finder-query, html.geolocation .map-big .post-controls .form .geo-finder-query {
    max-width: 82%;
}
html.geolocation .location-picker .location-picker-controls .form .geo-finder-geo, html.geolocation .location-picker .post-delay-controls .form .geo-finder-geo, html.geolocation .location-picker .post-controls .form .geo-finder-geo, html.geolocation .post-delay .location-picker-controls .form .geo-finder-geo, html.geolocation .post-delay .post-delay-controls .form .geo-finder-geo, html.geolocation .post-delay .post-controls .form .geo-finder-geo, html.geolocation .map-big .location-picker-controls .form .geo-finder-geo, html.geolocation .map-big .post-delay-controls .form .geo-finder-geo, html.geolocation .map-big .post-controls .form .geo-finder-geo {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    color: #001a73;
    display: block;
    float: right;
    font-size: 1.4em;
    line-height: 1.5em;
    padding: 0;
}
html.geolocation .location-picker .location-picker-controls .form .geo-finder-geo::after, html.geolocation .location-picker .post-delay-controls .form .geo-finder-geo::after, html.geolocation .location-picker .post-controls .form .geo-finder-geo::after, html.geolocation .post-delay .location-picker-controls .form .geo-finder-geo::after, html.geolocation .post-delay .post-delay-controls .form .geo-finder-geo::after, html.geolocation .post-delay .post-controls .form .geo-finder-geo::after, html.geolocation .map-big .location-picker-controls .form .geo-finder-geo::after, html.geolocation .map-big .post-delay-controls .form .geo-finder-geo::after, html.geolocation .map-big .post-controls .form .geo-finder-geo::after {
    content: "";
}
.location-picker .location-picker-controls .buttons-container, .location-picker .post-delay-controls .buttons-container, .location-picker .post-controls .buttons-container, .post-delay .location-picker-controls .buttons-container, .post-delay .post-delay-controls .buttons-container, .post-delay .post-controls .buttons-container, .map-big .location-picker-controls .buttons-container, .map-big .post-delay-controls .buttons-container, .map-big .post-controls .buttons-container {
    margin: 20px 0;
}
.location-picker .location-picker-controls .location-list, .location-picker .post-delay-controls .location-list, .location-picker .post-controls .location-list, .post-delay .location-picker-controls .location-list, .post-delay .post-delay-controls .location-list, .post-delay .post-controls .location-list, .map-big .location-picker-controls .location-list, .map-big .post-delay-controls .location-list, .map-big .post-controls .location-list {
    margin: 20px 0;
    padding: 0;
}
.location-picker .location-picker-controls .location-list .location-list-item, .location-picker .post-delay-controls .location-list .location-list-item, .location-picker .post-controls .location-list .location-list-item, .post-delay .location-picker-controls .location-list .location-list-item, .post-delay .post-delay-controls .location-list .location-list-item, .post-delay .post-controls .location-list .location-list-item, .map-big .location-picker-controls .location-list .location-list-item, .map-big .post-delay-controls .location-list .location-list-item, .map-big .post-controls .location-list .location-list-item {
    border-bottom: 1px solid #d2d2cc;
    border-top: 1px solid #d2d2cc;
    display: block;
    margin-bottom: -1px;
    padding: 10px 0 10px 35px;
    position: relative;
}
.location-picker .location-picker-controls .location-list .location-list-item:hover, .location-picker .post-delay-controls .location-list .location-list-item:hover, .location-picker .post-controls .location-list .location-list-item:hover, .post-delay .location-picker-controls .location-list .location-list-item:hover, .post-delay .post-delay-controls .location-list .location-list-item:hover, .post-delay .post-controls .location-list .location-list-item:hover, .map-big .location-picker-controls .location-list .location-list-item:hover, .map-big .post-delay-controls .location-list .location-list-item:hover, .map-big .post-controls .location-list .location-list-item:hover {
    background-color: #f0f0ec;
    cursor: pointer;
}
.location-picker .location-picker-controls .location-list .location-list-item .location-icon, .location-picker .post-delay-controls .location-list .location-list-item .location-icon, .location-picker .post-controls .location-list .location-list-item .location-icon, .post-delay .location-picker-controls .location-list .location-list-item .location-icon, .post-delay .post-delay-controls .location-list .location-list-item .location-icon, .post-delay .post-controls .location-list .location-list-item .location-icon, .map-big .location-picker-controls .location-list .location-list-item .location-icon, .map-big .post-delay-controls .location-list .location-list-item .location-icon, .map-big .post-controls .location-list .location-list-item .location-icon {
    left: 5px;
    position: absolute;
}
.location-picker .location-picker-controls .location-list .location-list-item .location-adress, .location-picker .post-delay-controls .location-list .location-list-item .location-adress, .location-picker .post-controls .location-list .location-list-item .location-adress, .post-delay .location-picker-controls .location-list .location-list-item .location-adress, .post-delay .post-delay-controls .location-list .location-list-item .location-adress, .post-delay .post-controls .location-list .location-list-item .location-adress, .map-big .location-picker-controls .location-list .location-list-item .location-adress, .map-big .post-delay-controls .location-list .location-list-item .location-adress, .map-big .post-controls .location-list .location-list-item .location-adress {
    overflow-wrap: break-word;
    width: 65%;
}
.location-picker .location-picker-controls .location-list .location-list-item .location-name, .location-picker .post-delay-controls .location-list .location-list-item .location-name, .location-picker .post-controls .location-list .location-list-item .location-name, .post-delay .location-picker-controls .location-list .location-list-item .location-name, .post-delay .post-delay-controls .location-list .location-list-item .location-name, .post-delay .post-controls .location-list .location-list-item .location-name, .map-big .location-picker-controls .location-list .location-list-item .location-name, .map-big .post-delay-controls .location-list .location-list-item .location-name, .map-big .post-controls .location-list .location-list-item .location-name {
    font-weight: bold;
    width: 65%;
}
.location-picker .location-picker-controls .location-list .location-list-item .location-distance, .location-picker .post-delay-controls .location-list .location-list-item .location-distance, .location-picker .post-controls .location-list .location-list-item .location-distance, .post-delay .location-picker-controls .location-list .location-list-item .location-distance, .post-delay .post-delay-controls .location-list .location-list-item .location-distance, .post-delay .post-controls .location-list .location-list-item .location-distance, .map-big .location-picker-controls .location-list .location-list-item .location-distance, .map-big .post-delay-controls .location-list .location-list-item .location-distance, .map-big .post-controls .location-list .location-list-item .location-distance {
    line-height: 1em;
    margin-top: -7px;
    position: absolute;
    right: 0;
    text-align: right;
    top: 50%;
    width: 30%;
}
.location-picker .location-picker-controls .location-list .location-list-item .location-distance::after, .location-picker .post-delay-controls .location-list .location-list-item .location-distance::after, .location-picker .post-controls .location-list .location-list-item .location-distance::after, .post-delay .location-picker-controls .location-list .location-list-item .location-distance::after, .post-delay .post-delay-controls .location-list .location-list-item .location-distance::after, .post-delay .post-controls .location-list .location-list-item .location-distance::after, .map-big .location-picker-controls .location-list .location-list-item .location-distance::after, .map-big .post-delay-controls .location-list .location-list-item .location-distance::after, .map-big .post-controls .location-list .location-list-item .location-distance::after {
    content: "";
    font-size: 1.28571em;
    margin-left: 2px;
    vertical-align: top;
}
.location-picker .location-picker-controls .location-details, .location-picker .post-delay-controls .location-details, .location-picker .post-controls .location-details, .post-delay .location-picker-controls .location-details, .post-delay .post-delay-controls .location-details, .post-delay .post-controls .location-details, .map-big .location-picker-controls .location-details, .map-big .post-delay-controls .location-details, .map-big .post-controls .location-details {
    list-style: outside none none;
    margin: 20px 0;
    padding: 0;
}
.location-picker .location-picker-controls .location-details .location-name, .location-picker .post-delay-controls .location-details .location-name, .location-picker .post-controls .location-details .location-name, .post-delay .location-picker-controls .location-details .location-name, .post-delay .post-delay-controls .location-details .location-name, .post-delay .post-controls .location-details .location-name, .map-big .location-picker-controls .location-details .location-name, .map-big .post-delay-controls .location-details .location-name, .map-big .post-controls .location-details .location-name {
    font-weight: bold;
}
.location-picker .location-picker-controls dl.location-schedule dt, .location-picker .post-delay-controls dl.location-schedule dt, .location-picker .post-controls dl.location-schedule dt, .post-delay .location-picker-controls dl.location-schedule dt, .post-delay .post-delay-controls dl.location-schedule dt, .post-delay .post-controls dl.location-schedule dt, .map-big .location-picker-controls dl.location-schedule dt, .map-big .post-delay-controls dl.location-schedule dt, .map-big .post-controls dl.location-schedule dt {
    box-sizing: border-box;
    clear: left;
    display: block;
    float: left;
    padding-right: 30px;
    width: 90px;
}
.location-picker .location-picker-controls dl.location-schedule dd, .location-picker .post-delay-controls dl.location-schedule dd, .location-picker .post-controls dl.location-schedule dd, .post-delay .location-picker-controls dl.location-schedule dd, .post-delay .post-delay-controls dl.location-schedule dd, .post-delay .post-controls dl.location-schedule dd, .map-big .location-picker-controls dl.location-schedule dd, .map-big .post-delay-controls dl.location-schedule dd, .map-big .post-controls dl.location-schedule dd {
    margin-left: 120px;
}
.location-picker .location-picker-controls dl.location-schedule dd span.collection-time, .location-picker .post-delay-controls dl.location-schedule dd span.collection-time, .location-picker .post-controls dl.location-schedule dd span.collection-time, .post-delay .location-picker-controls dl.location-schedule dd span.collection-time, .post-delay .post-delay-controls dl.location-schedule dd span.collection-time, .post-delay .post-controls dl.location-schedule dd span.collection-time, .map-big .location-picker-controls dl.location-schedule dd span.collection-time, .map-big .post-delay-controls dl.location-schedule dd span.collection-time, .map-big .post-controls dl.location-schedule dd span.collection-time {
    margin-left: 20px;
}
.location-picker .location-picker-controls dl.location-schedule dd.small, .location-picker .post-delay-controls dl.location-schedule dd.small, .location-picker .post-controls dl.location-schedule dd.small, .post-delay .location-picker-controls dl.location-schedule dd.small, .post-delay .post-delay-controls dl.location-schedule dd.small, .post-delay .post-controls dl.location-schedule dd.small, .map-big .location-picker-controls dl.location-schedule dd.small, .map-big .post-delay-controls dl.location-schedule dd.small, .map-big .post-controls dl.location-schedule dd.small {
    margin-left: 0;
}
.location-picker .location-picker-controls dl.location-schedule dd.lichting-title, .location-picker .post-delay-controls dl.location-schedule dd.lichting-title, .location-picker .post-controls dl.location-schedule dd.lichting-title, .post-delay .location-picker-controls dl.location-schedule dd.lichting-title, .post-delay .post-delay-controls dl.location-schedule dd.lichting-title, .post-delay .post-controls dl.location-schedule dd.lichting-title, .map-big .location-picker-controls dl.location-schedule dd.lichting-title, .map-big .post-delay-controls dl.location-schedule dd.lichting-title, .map-big .post-controls dl.location-schedule dd.lichting-title {
    margin-left: 190px !important;
    margin-top: -10px;
    width: 50px;
}
.location-picker .checkboxes.field, .post-delay .checkboxes.field, .map-big .checkboxes.field {
    margin-left: 1px;
}
.location-picker-legend, .delay-legend, .map-legend {
    float: right;
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.location-picker-legend li, .delay-legend li, .map-legend li {
    display: inline-block;
    float: left;
    line-height: 2.85714em;
    margin-left: 40px;
}
.location-picker-legend li img, .delay-legend li img, .map-legend li img {
    margin-right: 10px;
    vertical-align: middle;
}
.accordion > .accordion-header:first-child {
    border-top: 1px solid #d2d2cc;
}
.accordion .accordion-header {
    border-bottom: 1px solid #d2d2cc;
    cursor: pointer;
    display: block;
    line-height: 50px;
    margin: 0;
}
.accordion .accordion-header::after {
    content: "";
    float: right;
    font-size: 1.28571em;
    line-height: 50px;
    margin-left: 5px;
    margin-right: -5px;
}
.accordion .accordion-header.active {
    border-bottom: medium none;
}
.accordion .accordion-header.active::after {
    content: "";
}
.accordion .accordion-panel {
    display: none;
    max-height: 0;
    padding: 15px 0;
}
.accordion .accordion-panel.active {
    border-bottom: 1px solid #d2d2cc;
    display: block;
    max-height: 100%;
}
.more-details {
    margin: 14px 0;
}
.more-details .details-title {
    cursor: pointer;
    display: inline-block;
    margin: 0;
    padding-left: 25px;
    position: relative;
}
.more-details .details-title::before {
    background-color: #001a73;
    border-radius: 3px;
    color: #ffffff;
    content: "+";
    display: block;
    font: 14px/16px Arial,Helvetica,sans-serif;
    height: 15px;
    left: 0;
    margin-top: 3px;
    position: absolute;
    text-align: center;
    width: 15px;
}
.more-details .details-title .details-alt-title {
    display: none;
}
.more-details .details-title.active {
    margin: 0 0 15px;
}
.more-details .details-title.active::before {
    content: "-";
    line-height: 13px;
}
.more-details .details-title.active .details-default-title {
    display: none;
}
.more-details .details-title.active .details-alt-title {
    display: block;
}
.more-details .details-panel {
    display: none;
}
.more-details .details-panel.active {
    display: block;
}
.openinghours .openinghours-panel {
    display: none;
}
.openinghours .openinghours-panel.active {
    display: block;
}
.post-delay .detail-container, .post-delay .result-container {
    max-height: 360px;
}
.result-container, .detail-container {
    float: left;
    width: 100%;
}
.result-container.clean, .detail-container.clean {
    max-height: 515px;
}
@media only screen and (max-width: 660px) {
.result-container, .detail-container {
    background: #f0f0ec none repeat scroll 0 0;
    float: none;
    max-height: initial;
}
}
.detail-container {
    display: none;
}
.flow-container {
    margin-top: 15px;
    overflow-x: hidden;
    overflow-y: auto;
    width: 100%;
}
@media only screen and (max-width: 660px) {
.flow-container {
    overflow: initial;
}
}
.flow-container.clean {
    margin-top: 0;
}
.detail-container ul {
    display: none;
    margin: 0;
    padding: 0;
}
.detail-container ul li {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.no-delay {
    display: none;
}
.flow-carousel {
    font-size: 0;
    height: auto;
    line-height: 1em;
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
}
.flow-carousel .flow-carousel-panel {
    box-sizing: border-box;
    display: inline-block;
    font-size: 14px;
    height: auto;
    line-height: 1.5em;
    max-height: 0;
    overflow: hidden;
    padding-right: 10px;
    position: relative;
    transition: margin-left 300ms ease 0s, max-height 300ms ease 100ms;
    vertical-align: top;
    white-space: normal;
    width: 100%;
}
.flow-carousel .flow-carousel-panel.active {
    height: auto;
    max-height: 520px;
    min-height: 2.85714em;
    overflow-y: auto;
}
@media only screen and (max-width: 660px) {
.location-picker-legend, .delay-legend, .map-legend {
    display: none;
}
.location-picker, .post-delay {
    float: none;
    height: auto;
    margin-left: -10px;
    margin-right: -10px;
    width: auto;
}
.location-picker .location-picker-map, .location-picker .post-delay-map, .post-delay .location-picker-map, .post-delay .post-delay-map {
    display: none;
}
.location-picker .location-picker-controls, .location-picker .post-delay-controls, .location-picker .post-controls, .post-delay .location-picker-controls, .post-delay .post-delay-controls, .post-delay .post-controls {
    background: #f0f0ec none repeat scroll 0 0;
    border-radius: 0;
    margin: 0;
    padding: 20px;
    position: relative;
    width: auto;
}
}
@media only screen and (max-width: 660px) {
.flow-carousel .flow-carousel-panel.active {
    max-height: none;
    overflow-y: inherit;
}
}
.check-white li::before {
    color: #fff;
}
.check-big li {
    margin-bottom: -0.5em;
    padding-left: 2.6em;
}
.check-big li::before {
    font-size: 2.4em;
    line-height: 1.6em;
}
.campaign-content {
    font-size: 1.14286em;
}
.campaign-content .h2 {
    font-size: 2.1875em;
}
.campaign-content .h2.hidden {
    display: none;
}
.campaign-content .h2 + .h2.subtitle {
    font-size: 1.5625em;
}
.campaign-content .h3 {
    font-size: 1.1875em;
}
.alternate .campaign-content .h2 {
    font-size: 1.5625em;
}
.alternate .campaign-content .h2 + .h2.subtitle {
    font-size: 1.1875em;
}
.campaign-content .direct-actions .title {
    font-size: 1.9375em;
}
.campaign-content .direct-actions .title span {
    color: #001a73;
    display: block;
    font-size: 0.83871em;
    font-style: normal;
}
.campaign-content .page-title .title.huge {
    font-size: 3em;
}
.campaign-content .page-title .title.huge.subtitled em {
    font-size: 0.62em;
}
@media only screen and (max-width: 350px) {
.campaign-content .page-title .title.huge {
    font-size: 2.33333em;
}
.campaign-content .page-title .title.huge.subtitled em {
    font-size: 0.5em;
}
}
.campaign-content .introduction {
    margin-bottom: 3em;
}
.campaign-content .content-bar .button, .campaign-content .content-bar .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .campaign-content .content-bar button, .campaign-content .content-bar .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .campaign-content .content-bar button {
    font-size: 15px;
    padding-bottom: 12px;
    padding-left: 15px;
    padding-top: 12px;
}
.campaign-content .comparison .block .title.subtitled {
    font-size: 1.1875em;
}
@media only screen and (min-width: 661px) {
.campaign-content .h2 {
    font-size: 2.3125em;
}
.campaign-content .h2 + .h2.subtitle {
    font-size: 1.6875em;
}
.campaign-content .h3 {
    font-size: 1.3125em;
}
.alternate .campaign-content .h2 {
    font-size: 1.6875em;
}
.alternate .campaign-content .h2 + .h2.subtitle {
    font-size: 1.3125em;
}
.campaign-content .direct-actions .title {
    font-size: 2.13333em;
}
.campaign-content .page-title .title.huge {
    font-size: 3.13333em;
}
.campaign-content .page-title .title.huge.subtitled em {
    font-size: 0.66em;
}
.campaign-content .comparison .block .title.subtitled {
    font-size: 1.3125em;
}
}
@media only screen and (min-width: 1001px) {
.campaign-content .h2 {
    font-size: 2.5em;
}
.campaign-content .h2 + .h2.subtitle {
    font-size: 1.875em;
}
.campaign-content .h3 {
    font-size: 1.5em;
}
.alternate .campaign-content .h2 {
    font-size: 1.875em;
}
.alternate .campaign-content .h2 + .h2.subtitle {
    font-size: 1.5em;
}
.campaign-content .direct-actions .title {
    font-size: 2.4em;
}
.campaign-content .page-title .title.huge {
    font-size: 3.33333em;
}
.campaign-content .page-title .title.huge.subtitled em {
    font-size: 0.72em;
}
.campaign-content .comparison .block .title.subtitled {
    font-size: 1.5em;
}
}
.scroll-to-top {
    background-color: #ffffff;
    border-radius: 10px 10px 0 0;
    bottom: -51px;
    box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.25);
    color: #ed8c00;
    font-size: 1.28571em;
    margin: 0;
    position: fixed;
    right: 10px;
    text-align: center;
    transition: bottom 0.2s ease 0s;
    width: 80px;
    z-index: 1;
}
.scroll-to-top a {
    display: block;
    line-height: 0.5;
    padding-bottom: 0.8em;
    text-decoration: none;
}
.scroll-to-top a::before {
    content: "";
    display: block;
    font-size: 1.66667em;
    height: 0.9em;
    line-height: 1;
}
.scrolled-down .scroll-to-top {
    bottom: 0;
}
.off-grid {
    max-width: 1120px;
    width: 100%;
}
main div.blog h1.title {
    margin-bottom: 20px;
}
main div.blog article div.index-block {
    border-radius: 10px 10px 0;
}
main div.blog article.blog-big {
    background-position: center center;
    background-size: cover;
    border-radius: 10px 10px 0;
    overflow: hidden;
    position: relative;
}
@media only screen and (min-width: 1151px) {
main div.blog article.blog-big {
    height: 498px;
    width: 620px;
}
}
@media only screen and (max-width: 1151px) and (min-width: 1001px) {
main div.blog article.blog-big {
    height: 762px;
    margin-bottom: 20px;
    width: 940px !important;
}
}
@media only screen and (max-width: 1000px) and (min-width: 661px) {
main div.blog article.blog-big {
    margin-bottom: 20px;
    min-height: 500px;
    width: 620px;
}
main div.blog article.blog-big header {
    border-radius: 0 0 0 10px;
    bottom: 0;
    left: 0;
    margin-right: 0;
    max-width: none;
}
}
@media only screen and (max-width: 660px) {
main div.blog article.blog-big {
    margin-bottom: 20px;
    min-height: 370px;
}
main div.blog article.blog-big header {
    border-radius: 0 0 0 10px;
    bottom: 0;
    left: 0;
    margin-right: 0;
    max-width: none;
}
}
main div.blog article.blog-big a {
    border-radius: 10px 10px 0;
}
main div.blog article.blog-big h1 {
    line-height: 1.1;
}
main div.blog article.blog-big img {
    height: 100%;
    opacity: 0;
    width: 100%;
}
main div.blog article.blog-big div.date-and-comments {
    max-height: none;
}
main div.blog article.blog-big div.date-and-comments a:nth-child(2) {
    color: #001a73;
    font-weight: bold;
    position: relative;
    top: -3px;
}
main div.blog article.blog-big div.date-and-comments span.publication-date::before, main div.blog article.blog-big div.date-and-comments div.date-and-reacties span.reacties::before, div.date-and-reacties main div.blog article.blog-big div.date-and-comments span.reacties::before {
    background-image: url("/sites/all/themes/developer/img/contenthub/calendar-b.png");
}
main div.blog article.blog-big div.date-and-comments span.comments::before {
    background-image: url("/sites/all/themes/developer/img/contenthub/comment-b.png");
}
main div.blog article.blog-big-s {
    background-position: center center;
    background-size: cover;
    border-radius: 10px 10px 0;
    height: auto;
    margin-bottom: 20px;
    position: relative;
}
@media only screen and (min-width: 1151px) {
main div.blog article.blog-big-s {
    height: 240px;
}
}
main div.blog article.blog-big-s a {
    border-radius: 10px 10px 0;
    max-height: 240px;
    overflow: hidden;
}
@media only screen and (max-width: 660px) {
main div.blog article.blog-big-s a {
    border-radius: 10px 10px 0 0;
}
}
@media only screen and (min-width: 1000px) and (max-width: 1150px) {
main div.blog article.blog-big-s .title a {
    max-height: 45px;
}
}
@media only screen and (min-width: 661px) and (max-width: 1000px) {
main div.blog article.blog-big-s .title a {
    max-height: 50px;
}
}
main div.blog article.blog-big-s img {
    border-radius: 0;
    height: 100%;
    opacity: 0;
    width: 100%;
}
@media only screen and (min-width: 1151px) {
main div.blog article.blog-big-s div.date-and-comments {
    margin-bottom: 5px;
    max-height: 20px;
}
}
@media only screen and (min-width: 1000px) and (max-width: 1150px) {
main div.blog article.blog-big-s div.date-and-comments {
    bottom: 6px;
    left: 15px;
    position: absolute;
}
}
main div.blog article.blog-big-s div.date-and-comments span.button.publication-date {
    display: inline-block;
    width: 130px;
}
main div.blog article.blog-big-s div.date-and-comments span.button.comments {
    padding-left: 25px;
}
main div.blog article.blog-big-s header {
    border-radius: 0 0 0 5px;
    bottom: 0;
    left: 0;
    margin: -10px 0 0;
    max-width: none;
    position: absolute;
    width: 430px;
}
@media only screen and (min-width: 1151px) {
main div.blog article.blog-big-s header {
    margin-top: -85px;
}
}
@media only screen and (max-width: 1151px) and (min-width: 1001px) {
main div.blog article.blog-big-s header {
    height: 80px;
    position: static;
}
}
@media only screen and (max-width: 1000px) and (min-width: 661px) {
main div.blog article.blog-big-s header {
    height: 80px;
    position: static;
    width: 270px;
}
}
main div.blog article.blog-big-s a {
    border-radius: 10px 10px 0 0;
}
@media only screen and (max-width: 660px) {
main div.blog article.blog-big-s img {
    width: 660px;
}
main div.blog article.blog-big-s header {
    border-radius: 0 0 0 5px;
    bottom: 0;
    left: 0;
    margin: -10px 0 0;
    max-width: none;
    position: static;
    width: auto;
}
}
main div.blog div.date-and-comments {
    margin-left: 0;
    margin-top: 0;
    max-height: 50px;
    position: static;
}
@media only screen and (min-width: 1000px) and (max-width: 1150px) {
main div.blog div.date-and-comments {
    max-height: 40px;
}
}
main div.blog div.date-and-comments a {
    text-decoration: none;
}
main div.blog div.date-and-comments a:nth-child(2) {
    color: #ed8c00;
    font-weight: bold;
    position: relative;
    top: -6px;
}
main div.blog div.date-and-comments span {
    color: #001a73;
    font-size: 14px;
    font-weight: bold;
    padding-left: 25px;
}
main div.blog div.date-and-comments span.button {
    background-color: transparent;
}
main div.blog div.date-and-comments span.publication-date::before, main div.blog div.date-and-comments div.date-and-reacties span.reacties::before, div.date-and-reacties main div.blog div.date-and-comments span.reacties::before, main div.blog div.date-and-comments span.comments::before {
    background-image: url("/sites/all/themes/developer/img/contenthub/calendar.png");
    background-repeat: no-repeat;
    background-size: contain;
    content: " ";
    display: inline-block;
    height: 20px;
    vertical-align: middle;
    width: 20px;
}
@media only screen and (max-width: 1000px) and (min-width: 661px) {
main div.blog div.date-and-comments span.publication-date::before, main div.blog div.date-and-comments div.date-and-reacties span.reacties::before, div.date-and-reacties main div.blog div.date-and-comments span.reacties::before, main div.blog div.date-and-comments span.comments::before {
    height: 15px;
    width: 15px;
}
}
main div.blog div.date-and-comments span.comments::before {
    background-image: url("/sites/all/themes/developer/img/contenthub/comment.png");
}
main div.blog span.blog.business-label {
    background-color: #ed8c00;
    margin: 15px;
    padding: 2px 15px;
    position: absolute;
}
main div.blog span.blog.business-label a {
    color: #fff;
    display: block;
    text-decoration: none;
}
main div.blog span.blog.business-label.date, main div.blog .media-container .overview .blog-item .bottom-block span.blog.business-label.comments, .media-container .overview .blog-item .bottom-block main div.blog span.blog.business-label.comments, main div.blog .event-container .overview .blog-item .bottom-block span.blog.business-label.comments, .event-container .overview .blog-item .bottom-block main div.blog span.blog.business-label.comments, main div.blog .auteur-container .overview .auteur .bottom-block span.blog.business-label.comments, .auteur-container .overview .auteur .bottom-block main div.blog span.blog.business-label.comments {
    font-size: 18px;
    padding: 15px 20px;
    text-align: center;
    text-transform: lowercase;
}
@media only screen and (max-width: 500px) {
main div.blog span.blog.business-label.date, main div.blog .media-container .overview .blog-item .bottom-block span.blog.business-label.comments, .media-container .overview .blog-item .bottom-block main div.blog span.blog.business-label.comments, main div.blog .event-container .overview .blog-item .bottom-block span.blog.business-label.comments, .event-container .overview .blog-item .bottom-block main div.blog span.blog.business-label.comments, main div.blog .auteur-container .overview .auteur .bottom-block span.blog.business-label.comments, .auteur-container .overview .auteur .bottom-block main div.blog span.blog.business-label.comments {
    font-size: 1em;
    padding: 5px 15px;
}
}
header.blog {
    background-image: linear-gradient(to right bottom, #e45123, #fcba1a);
    border-radius: 10px 10px 0;
    bottom: 20px;
    left: 20px;
    margin: 0 20px 0 0;
    max-width: 390px;
    padding: 15px;
    position: absolute;
}
header.blog h1.title, header.blog h2.title {
    margin: 0;
}
@media only screen and (max-width: 660px) {
header.blog h1.title, header.blog h2.title {
    font-size: 2em;
    line-height: 1.5em;
}
}
@media only screen and (max-width: 400px) {
header.blog h1.title, header.blog h2.title {
    font-size: 1.3em;
}
}
header.blog h1.title a, header.blog h2.title a {
    background-color: transparent;
    color: #ffffff;
    text-decoration: none;
}
header.blog.small {
    background-color: #f0f0ec;
    background-image: none;
    left: 0;
    margin: 0;
    position: absolute;
    width: 100%;
}
header.blog.small .title {
    font-size: 1.65714em;
    line-height: 1.22;
    margin-bottom: 0;
}
@media only screen and (max-width: 1151px) {
header.blog.small .title {
    font-size: 1.28571em;
}
}
@media only screen and (max-width: 500px) {
header.blog.small .title {
    line-height: 1.2em;
}
}
header.blog.small .title a {
    color: #001a73;
}
header.blog.small div.date-and-comments span {
    color: #ed8c00;
}
@media only screen and (min-width: 1151px) {
header.blog.small {
    bottom: 20px;
    left: 20px;
}
}
@media only screen and (max-width: 1151px) and (min-width: 1001px) {
header.blog.small {
    left: 20px;
}
}
@media only screen and (max-width: 660px) {
header.blog.small {
    bottom: 20px;
}
}
div.home-items h3 a {
    color: #001a73;
    font-size: 26px;
    font-weight: bold;
    text-decoration: none;
}
div.home-items article {
    background-position: center center;
    background-size: cover;
    border: 1px solid #d2d2cc;
    border-radius: 10px 10px 0;
    box-sizing: border-box;
    cursor: pointer;
    height: 220px;
    margin: 0 0 15px;
    padding: 10px;
    position: relative;
    width: 100%;
}
@media only screen and (min-width: 1001px) {
div.home-items article {
    height: 150px;
}
}
div.home-items article span.label {
    background-color: #ed8c00;
    margin: 10px;
    padding: 2px 15px;
    position: absolute;
}
div.home-items article span.label a {
    color: #fff;
    display: block;
    text-decoration: none;
}
div.home-items article span.label.date, div.home-items article .media-container .overview .blog-item .bottom-block span.label.comments, .media-container .overview .blog-item .bottom-block div.home-items article span.label.comments, div.home-items article .event-container .overview .blog-item .bottom-block span.label.comments, .event-container .overview .blog-item .bottom-block div.home-items article span.label.comments, div.home-items article .auteur-container .overview .auteur .bottom-block span.label.comments, .auteur-container .overview .auteur .bottom-block div.home-items article span.label.comments {
    font-size: 1em;
    padding: 5px 15px;
    text-align: center;
    text-transform: lowercase;
}
div.home-items article header.item {
    background-color: #f0f0ec;
    border-radius: 0 0 0 10px;
    bottom: -1px;
    height: 100px;
    left: -1px;
    max-width: none;
    position: absolute;
    right: -1px;
}
@media only screen and (min-width: 1001px) {
div.home-items article header.item {
    background-color: white;
    border: 1px solid #d2d2cc;
    border-radius: 10px 10px 0;
    box-sizing: border-box;
    height: auto;
    top: -1px;
}
}
div.home-items article header.item h4 {
    bottom: 45px;
    font-size: 1.28571em;
    font-weight: normal;
    height: 45px;
    left: 10px;
    line-height: 1.2em;
    margin-bottom: 0;
    overflow: hidden;
    position: absolute;
    right: 10px;
}
div.home-items article header.item h4 a {
    color: #001a73;
    text-decoration: none;
}
@media only screen and (min-width: 661px) {
div.home-items article header.item h4 {
    font-size: 1.3em;
}
}
@media only screen and (min-width: 1001px) {
div.home-items article header.item h4 {
    font-size: 1.5em;
    height: auto;
    left: 10px;
    margin: 0;
    top: 10px;
    width: 55%;
}
}
div.home-items article header.item div.image {
    display: none;
}
@media only screen and (min-width: 1001px) {
div.home-items article header.item div.image {
    background-position: center center;
    background-size: cover;
    border-radius: 10px 10px 0;
    bottom: 10px;
    display: block;
    position: absolute;
    right: 10px;
    top: 10px;
    width: 40%;
}
}
div.home-items article header.item div.date-and-comments span {
    bottom: 5px;
    color: #ed8c00;
    left: 10px;
    position: absolute;
}
.media-container, .event-container {
    margin-top: 15px;
}
.media-container .overview, .event-container .overview {
    margin: 0;
}
.media-container .overview .blog-item, .event-container .overview .blog-item {
    background: #ffffff none repeat scroll 0 0;
    border: 1px solid #f0f0ec;
    border-radius: 10px 10px 0 !important;
    display: inline-block;
    margin: 0 10px 10px 0;
    max-width: 100%;
    position: relative;
}
@media only screen and (min-width: 1151px) {
.media-container .overview .blog-item, .event-container .overview .blog-item {
    height: 400px;
}
}
@media only screen and (min-width: 1151px) {
.media-container .overview .blog-item.last, .event-container .overview .blog-item.last {
    margin: 0 0 10px;
}
}
@media only screen and (min-width: 661px) {
.media-container .overview .blog-item.last, .event-container .overview .blog-item.last {
    margin: 0 0 10px;
}
}
.media-container .overview .blog-item .hero-image, .event-container .overview .blog-item .hero-image {
    margin: 0;
    max-height: 154px;
    max-width: 380px;
    overflow: hidden;
    padding: 0 !important;
    width: 100%;
}
@media only screen and (min-width: 1151px) {
.media-container .overview .blog-item .hero-image, .event-container .overview .blog-item .hero-image {
    height: 154px;
    width: 380px;
}
}
.media-container .overview .blog-item .hero-image img, .event-container .overview .blog-item .hero-image img {
    border-radius: 10px 10px 0 0 !important;
}
.media-container .overview .blog-item .content, .event-container .overview .blog-item .content {
    border: medium none !important;
    margin-left: 20px;
    margin-right: 20px;
    min-height: 150px;
}
@media screen and (max-width: 1150px) {
.media-container .overview .blog-item .content, .event-container .overview .blog-item .content {
    min-height: 0;
}
}
.media-container .overview .blog-item .content h2 a, .event-container .overview .blog-item .content h2 a {
    color: #001a73;
    display: block;
    line-height: 1.3em;
    max-height: 53px;
    overflow: hidden;
    text-decoration: none;
}
.media-container .overview .blog-item p.description, .event-container .overview .blog-item p.description {
    font-size: 1em;
    margin-bottom: 12px;
}
@media only screen and (min-width: 1151px) {
.media-container .overview .blog-item p.description, .event-container .overview .blog-item p.description {
    height: 105px;
    overflow: hidden;
}
}
.media-container .overview .blog-item .date-block, .event-container .overview .blog-item .date-block {
    background: #ed8c00 none repeat scroll 0 0;
    color: #ffffff;
    display: block;
    font-family: "PostNL-Regular",sans-serif !important;
    font-size: 1em;
    height: 36px;
    left: 15px;
    line-height: 1.3em;
    padding: 6px 10px 8px;
    position: absolute;
    text-align: center;
    top: 15px;
    width: 30px;
}
.media-container .overview .blog-item .bottom-block, .event-container .overview .blog-item .bottom-block {
    margin: 10px 20px;
}
@media only screen and (min-width: 1151px) {
.media-container .overview .blog-item .bottom-block, .event-container .overview .blog-item .bottom-block {
    bottom: 0;
    left: 20px;
    margin: 0;
    position: absolute;
}
}
.media-container .overview .blog-item .bottom-block .date, .media-container .overview .blog-item .bottom-block .comments, .event-container .overview .blog-item .bottom-block .date, .event-container .overview .blog-item .bottom-block .comments {
    color: #ed8c00;
    display: block;
    float: left;
    font-weight: bold;
    line-height: 1.8em;
    margin: 0 20px 12px 0;
    position: relative;
}
.media-container .overview .blog-item .bottom-block .date::before, .media-container .overview .blog-item .bottom-block .comments::before, .event-container .overview .blog-item .bottom-block .date::before, .event-container .overview .blog-item .bottom-block .comments::before {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/contenthub/calendar.png") no-repeat scroll 0 1px / auto 17px;
    content: "";
    display: inline-block;
    float: left;
    height: 18px;
    margin: 0 3px 0 0;
    width: 17px;
}
.media-container .overview .blog-item .bottom-block .comments, .event-container .overview .blog-item .bottom-block .comments {
    margin: 0 0 12px;
}
.media-container .overview .blog-item .bottom-block .comments a, .event-container .overview .blog-item .bottom-block .comments a {
    text-decoration: none;
}
.media-container .overview .blog-item .bottom-block .comments a:hover, .event-container .overview .blog-item .bottom-block .comments a:hover {
    color: #ed8c00;
}
.media-container .overview .blog-item .bottom-block .comments::before, .event-container .overview .blog-item .bottom-block .comments::before {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/contenthub/comment.png") no-repeat scroll 0 2px / auto 17px;
    height: 19px;
    width: 20px;
}
article.detail .content p {
    line-height: 1.7em;
}
.subhero {
    margin: 0;
    padding: 0;
}
div.content.contenthub-nextarticle {
    margin-right: 0;
}
#nextarticle span {
    font-weight: 100;
}
#nextarticle.action.button, .call-me-now-container .chat p.buttons button#nextarticle, .call-me-now-container .whatsapp p.buttons button#nextarticle {
    display: block;
    padding: 10px;
}
.block.blog-nextarticle {
    padding: 0;
}
#nextarticle.button.action::after, .call-me-now-container .chat p.buttons button#nextarticle::after, .call-me-now-container .whatsapp p.buttons button#nextarticle::after {
    left: 100px;
    margin: 0;
    top: 6px;
}
@media only screen and (max-width: 1150px) and (min-width: 1001px) {
div.grid-3.portrait-8.desktop-3.secondary.nextarticle {
    float: left;
    margin-left: 28px;
    padding: 0;
    width: 580px;
}
}
#nextarticle.button.action::after, .call-me-now-container .chat p.buttons button#nextarticle::after, .call-me-now-container .whatsapp p.buttons button#nextarticle::after {
    left: 100px;
    margin: 0;
    top: 6px;
}
span.blog.business-label {
    left: 0;
    position: absolute;
}
div.date-and-reacties {
    background-color: #f0f0ec;
    border-radius: 10px 10px 0;
    margin-left: 15px;
    margin-top: -40px;
    position: absolute;
}
@media only screen and (max-width: 500px) {
div.date-and-reacties {
    display: none;
}
}
div.date-and-reacties span {
    color: #393939;
    font-size: 13px;
    font-weight: bold;
    padding-left: 25px;
}
div.date-and-reacties span:hover {
    color: #ed8c00;
}
div.date-and-reacties span.button {
    background-color: transparent;
    color: #393939;
    cursor: default;
    margin: 0 10px;
    text-decoration: none;
}
div.date-and-reacties span.button a {
    color: #393939;
    text-decoration: none;
}
div.date-and-reacties span.button a {
    color: #393939;
    text-decoration: none;
}
div.date-and-reacties span.button:hover {
    color: #393939;
}
div.date-and-reacties span.publication-date::before, div.date-and-reacties span.reacties::before {
    background-image: url("/sites/all/themes/developer/img/contenthub/calendar-g.png");
    background-size: contain;
    content: " ";
    display: inline-block;
    font-size: 1.5em;
    height: 20px;
    left: 0;
    margin-top: -0.5em;
    position: absolute;
    top: 50%;
    vertical-align: middle;
    width: 20px;
}
div.date-and-reacties span.reacties::before {
    background-image: url("/sites/all/themes/developer/img/contenthub/comment-g.png");
    background-size: contain;
    content: " ";
}
.related.block a.action.button {
    margin-bottom: 10px;
}
.img-author {
    display: inline-block;
    vertical-align: top;
}
.img-author img {
    border-radius: 50%;
    height: auto;
    margin: 15px;
    width: 100px;
}
.about-author {
    display: inline-block;
    vertical-align: top;
    width: 75%;
}
@media screen and (max-width: 570px) {
.about-author {
    width: 60%;
}
}
.about-author h2 {
    margin-top: 15px;
}
.about-author a {
    text-decoration: none;
}
textarea#comment.input.default {
    min-height: 120px;
}
.date-block {
    background: #ed8c00 none repeat scroll 0 0;
    color: #fff;
    display: block;
    font-family: "PostNL-Regular",sans-serif !important;
    font-size: 1em;
    height: 36px;
    left: 15px;
    line-height: 1.3em;
    padding: 6px 10px 8px;
    position: absolute;
    text-align: center;
    top: 15px;
    width: 30px;
}
.disqus-form {
    margin: 0 20px;
}
.disqus-comment {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #bcbcbc;
    border-image: none;
    border-style: solid;
    border-width: 0 0 1px;
    margin: 0;
    position: relative;
    width: 100%;
}
.disqus-comment .wrapper {
    display: table;
    margin: 2em 0 1em;
    width: 100%;
}
.disqus-comment .wrapper #left {
    display: table-cell;
    vertical-align: baseline;
}
.disqus-comment .wrapper #right {
    display: table-cell;
    text-align: right;
    vertical-align: baseline;
}
.disqus-comment .reacted {
    background-color: #f0f0ec;
    border-radius: 5px 5px 0;
    margin: 0 0 0 4em;
    padding: 5px 15px 30px;
}
.disqus-comment .reacted p {
    margin: 0;
}
.disqus-comment .comment {
    float: right;
}
header.auteur {
    margin-bottom: 20px;
}
header.auteur .profileImg {
    float: left;
    margin: 20px 20px 0 0;
    max-height: 230px;
    max-width: 230px;
    overflow: hidden;
}
header.auteur .profileText {
    float: left;
    margin: 20px 0 0;
    width: 480px;
}
header.auteur .profileText p {
    height: 109px;
    overflow: hidden;
}
header.auteur .profileText a {
    border-radius: 4px 4px 0;
    clear: both;
    color: #ffffff;
    display: block;
    float: left;
    font-size: 0.9em;
    font-weight: bold;
    height: 25px;
    margin: 0 20px 9px 0;
    padding: 0 10px 0 0;
    text-decoration: none;
}
header.auteur .profileText a::before {
    content: "";
    display: inline-block;
    float: left;
    height: 23px;
    margin: 1px 3px 0 5px;
    width: 23px;
}
header.auteur .profileText a.email {
    background-color: #ed8c00;
    line-height: 2em;
}
header.auteur .profileText a.email:hover {
    background-color: #cc7a02;
}
header.auteur .profileText a.email:hover::before {
    background-position: 0 -17px;
}
header.auteur .profileText a.email::before {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/contenthub/mail_icon.png") no-repeat scroll 0 3px / 17px auto;
}
header.auteur .profileText a.twitter {
    background-color: #69beda;
    line-height: 2.2em;
}
header.auteur .profileText a.twitter:hover {
    background-color: #5294aa;
}
header.auteur .profileText a.twitter:hover::before {
    background-position: 0 -17px;
}
header.auteur .profileText a.twitter::before {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/contenthub/twitter_icon.png") no-repeat scroll 0 3px / 17px auto;
}
header.auteur .profileText a.linkedin {
    background-color: #468cb5;
    line-height: 2.2em;
}
header.auteur .profileText a.linkedin:hover {
    background-color: #2c5e7b;
}
header.auteur .profileText a.linkedin:hover::before {
    background-position: 0 -17px;
}
header.auteur .profileText a.linkedin::before {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/contenthub/li_icon.png") no-repeat scroll 0 3px / 17px auto;
}
.auteur-container {
    margin-top: 15px;
}
.auteur-container .overview {
    margin: 0;
}
.auteur-container .overview .auteur {
    background: #ffffff none repeat scroll 0 0;
    border: 1px solid #f0f0ec;
    border-radius: 10px 10px 0 !important;
    display: inline-block;
    height: 400px;
    margin: 0 10px 10px 0;
    max-width: 100%;
    position: relative;
}
.auteur-container .overview .auteur.last {
    margin: 0 0 10px;
}
.auteur-container .overview .auteur .hero-image {
    margin: 0;
    max-height: 154px;
    max-width: 380px;
    overflow: hidden;
    padding: 0 !important;
}
@media screen and (max-width: 1000px) {
.auteur-container .overview .auteur .hero-image {
    width: 100%;
}
}
.auteur-container .overview .auteur .hero-image img {
    border-radius: 10px 10px 0 0 !important;
}
.auteur-container .overview .auteur .content {
    border: medium none !important;
    margin-left: 20px;
    margin-right: 20px;
    max-height: 185px;
    overflow: hidden;
}
.auteur-container .overview .auteur .content h2 a {
    display: block;
    line-height: 1.3em;
    max-height: 53px;
    overflow: hidden;
}
.auteur-container .overview .auteur p.description {
    font-size: 1em;
    margin-bottom: 12px;
    max-height: 110px;
}
.auteur-container .overview .auteur .bottom-block {
    display: block;
    margin: 20px 20px 0;
}
.auteur-container .overview .auteur .bottom-block .date, .auteur-container .overview .auteur .bottom-block .comments {
    color: #ed8c00;
    display: block;
    float: left;
    font-weight: bold;
    line-height: 1.8em;
    margin: 0 20px 12px 0;
}
.auteur-container .overview .auteur .bottom-block .date::before, .auteur-container .overview .auteur .bottom-block .comments::before {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/contenthub/calendar.png") no-repeat scroll 0 1px / auto 17px;
    content: "";
    display: inline-block;
    float: left;
    height: 18px;
    margin: 0 3px 0 0;
    width: 17px;
}
.auteur-container .overview .auteur .bottom-block .comments {
    margin: 0 0 12px;
}
.auteur-container .overview .auteur .bottom-block .comments::before {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/contenthub/comment.png") no-repeat scroll 0 2px / auto 17px;
    height: 19px;
    width: 20px;
}
@media all and (min-width: 661px) and (max-width: 1150px) {
header.auteur {
    border-radius: 15px 15px 0;
    margin-bottom: 20px;
    padding: 20px 0;
}
header.auteur h1 {
    margin-right: 20px;
}
header.auteur .profileImg {
    margin: 20px 20px 0 0;
}
header.auteur .profileText {
    float: left;
    margin: 20px 20px 0 0;
    width: 480px;
}
}
@media all and (max-width: 660px) {
header.auteur {
    background: #efefef none repeat scroll 0 0;
    border-radius: 15px 15px 0;
    float: left;
    max-width: 100%;
    padding: 20px 0;
}
header.auteur h1 {
    margin-left: 20px;
    margin-right: 20px;
}
header.auteur .profileImg {
    margin: 20px 20px 0;
}
header.auteur .profileText {
    float: left;
    margin: 20px 20px 0;
    width: auto;
}
header.auteur .profileText p {
    height: auto;
    width: auto;
}
.event-container .overview .event {
    margin: 0 0 10px;
}
.event-container .overview .event.left {
    margin: 0 0 10px;
}
}
.product-page-content .cover-image {
    min-height: 300px;
}
@media only screen and (min-width: 661px) {
.product-page-content .cover-image {
    min-height: 400px;
}
}
.product-page-content .page-title .title.huge {
    font-size: 2.66667em;
}
.product-page-content .page-title .title.huge.subtitled em {
    font-size: 0.75em;
}
.product-page-content .page-title.pulled-up {
    margin-top: -175px;
}
.product-page-content .page-title .button.action, .product-page-content .page-title .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .product-page-content .page-title button, .product-page-content .page-title .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .product-page-content .page-title button, .product-page-content .page-title .button, .product-page-content .page-title .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .product-page-content .page-title button, .product-page-content .page-title .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .product-page-content .page-title button {
    border-color: #ffffff;
    color: #ffffff;
}
.product-page-content .button.action, .product-page-content .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .product-page-content button, .product-page-content .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .product-page-content button, .product-page-content .button, .product-page-content .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .product-page-content button, .product-page-content .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .product-page-content button {
    font-size: 15px;
    line-height: 1.4em;
    padding-bottom: 11px;
    padding-left: 15px;
    padding-top: 11px;
}
.product-page-content .block.bottom-buttons {
    padding-bottom: 105px;
}
.product-page-content .button.submit, .product-page-content .call-me-now-container .chat p.buttons button.submit, .call-me-now-container .chat p.buttons .product-page-content button.submit, .product-page-content .call-me-now-container .whatsapp p.buttons button.submit, .call-me-now-container .whatsapp p.buttons .product-page-content button.submit {
    font-size: 15px;
    line-height: 1.4em;
    padding-bottom: 8px;
    padding-top: 8px;
}
.product-page-content .form .submit-buttons .link.cancel, .product-page-content .cancel.link {
    line-height: 45px !important;
}
@media only screen and (min-width: 661px) {
.product-page-content .page-title .title.huge {
    font-size: 3.13333em;
}
.product-page-content .page-title .title.huge.subtitled em {
    font-size: 0.66em;
}
}
@media only screen and (min-width: 1001px) {
.product-page-content .page-title .title.huge {
    font-size: 3.33333em;
}
.product-page-content .page-title .title.huge.subtitled em {
    font-size: 0.72em;
}
}
.product-page-content .contact-panels .contact-panel-image {
    border: 0 none;
    height: 170px;
    margin-bottom: 0;
    margin-top: -35px;
    width: auto;
}
.product-page-content .contact-panels .contact-panel-image + p {
    border-top: 1px solid #d2d2cc;
    padding-top: 20px;
}
.product-page-content .large-testimonial {
    border-color: #ffffff;
    border-width: 4px;
    color: #ffffff;
    font-size: 2.14286em;
    margin: 50px auto;
}
@media only screen and (min-width: 661px) {
.product-page-content .large-testimonial {
    font-size: 2.85714em;
}
}
.product-page-content .price-form {
    margin-top: -20px;
    position: relative;
}
.product-page-content .price-form::after {
    clear: both;
    content: "";
    display: table;
}
.product-page-content .price-form .first-step-form::after {
    clear: both;
    content: "";
    display: table;
}
.product-page-content .price-form .first-step-form .grid-4 {
    box-sizing: border-box;
}
.product-page-content .price-form .first-step-form fieldset {
    clear: both;
}
.product-page-content .price-form .radio-picker {
    overflow: hidden;
    padding-bottom: 10px;
    padding-top: 15px;
}
.product-page-content .price-form .radio-picker::after {
    clear: both;
    content: "";
    display: table;
}
.product-page-content .price-form .radio-picker label {
    border: 1px solid #cccccc;
    box-sizing: border-box;
    cursor: pointer;
    float: left;
    height: 45px;
    line-height: 45px;
    text-align: center;
    width: 50%;
}
.product-page-content .price-form .radio-picker label:first-of-type {
    border-radius: 5px 0 0 5px;
    border-right: 0 none;
}
.product-page-content .price-form .radio-picker label:last-of-type {
    border-left: 0 none;
    border-radius: 0 5px 5px 0;
}
.product-page-content .price-form .radio-picker input[type="radio"]:checked + label {
    background-color: #001a73;
    border-color: #001a73;
    color: #ffffff;
}
.product-page-content .price-form fieldset.channels {
    padding-bottom: 0;
}
.product-page-content .price-form fieldset.channels .h2.title {
    margin-bottom: 35px;
}
.product-page-content .price-form .row {
    border-top: 2px solid #f0f0ec;
    margin-left: -20px;
    margin-right: -20px;
    padding: 20px;
    position: relative;
}
.product-page-content .price-form .row.is-active .title {
    font-weight: bold;
}
.product-page-content .price-form .row .collapsible-toggle, .product-page-content .price-form .row dl.collapsible-items dt, dl.collapsible-items .product-page-content .price-form .row dt {
    font-weight: bold;
    margin-bottom: 0;
    z-index: 1;
}
.product-page-content .price-form .row .collapsible {
    padding: 25px;
}
.product-page-content .price-form .row label {
    bottom: auto;
    cursor: pointer;
    left: 0;
    padding: 20px;
    position: absolute;
    right: auto;
    top: -1px;
    z-index: 2;
}
.product-page-content .price-form .up-selling {
    background: #f0f0ec url("/sites/all/themes/developer/img/product-page/information-icon.svg") no-repeat scroll 20px 20px;
    border-radius: 10px 10px 0;
    color: #444444;
    display: none;
    margin-bottom: 20px;
    padding: 75px 20px 20px;
    position: relative;
}
@media only screen and (min-width: 661px) {
.product-page-content .price-form .up-selling {
    background-position: 40px 20px;
    padding-left: 100px;
    padding-top: 20px;
}
}
.product-page-content .pricing-form {
    background-color: transparent;
    border: medium none;
}
.product-page-content .pricing-form.block.form {
    margin-top: 0;
}
.product-page-content .pricing-form .price {
    border-top: 2px solid #001a73;
}
.product-page-content .pricing-form .price::after {
    clear: both;
    content: "";
    display: table;
}
.product-page-content .pricing-form .price p {
    display: block;
    float: left;
    margin-bottom: 0;
    position: relative;
}
.product-page-content .pricing-form .price p:nth-of-type(-n+2) {
    margin-top: 20px;
}
.product-page-content .pricing-form .price p:nth-of-type(3) {
    clear: both;
}
.product-page-content .pricing-form .price p.reach, .product-page-content .pricing-form .price p.total {
    color: #001a73;
    float: right;
    font-weight: bold;
}
.product-page-content .pricing-form .pricing .title {
    margin-bottom: 35px;
}
.product-page-content .pricing-form .pricing .no-channel {
    display: none;
}
.product-page-content .pricing-form .pricing.no-channels .no-channel {
    display: block;
}
.product-page-content .pricing-form .pricing.no-channels .submit-buttons {
    display: none;
}
.product-page-content .pricing-form .submit-buttons {
    margin-bottom: 0;
    margin-top: 35px;
}
.product-page-content .pricing-form .submit.button, .product-page-content .pricing-form .call-me-now-container .chat p.buttons button.submit, .call-me-now-container .chat p.buttons .product-page-content .pricing-form button.submit, .product-page-content .pricing-form .call-me-now-container .whatsapp p.buttons button.submit, .call-me-now-container .whatsapp p.buttons .product-page-content .pricing-form button.submit {
    box-sizing: border-box;
    width: 100%;
}
.product-page-content .pricing-form .channels .channel {
    border-top: 1px solid #f0f0ec;
    margin-top: 30px;
    position: relative;
}
.product-page-content .pricing-form .channels .channel-title {
    font-weight: bold;
    margin-top: 20px;
}
.product-page-content .pricing-form .channels .delete {
    bottom: auto;
    filter: none;
    height: 35px;
    left: auto;
    line-height: 1;
    opacity: 1;
    overflow: hidden;
    padding: 0;
    position: absolute;
    right: 0;
    text-indent: 100%;
    top: 0;
    width: 35px;
}
.product-page-content .pricing-form .channels .delete::before, .product-page-content .pricing-form .channels .delete::after {
    background: #b1b1b1 none repeat scroll 0 0;
    bottom: auto;
    color: #444444;
    content: "";
    height: 2px;
    left: auto;
    position: absolute;
    right: 0;
    text-indent: 0;
    top: 10px;
    transform-origin: center center 0;
    width: 15px;
}
.product-page-content .pricing-form .channels .delete::before {
    transform: rotate(45deg);
}
.product-page-content .pricing-form .channels .delete::after {
    transform: rotate(-45deg);
}
@media only screen and (min-width: 661px) {
.product-page-content .form-row .label {
    width: 24%;
}
.product-page-content .form-row .field {
    margin-left: 24%;
}
}
.product-page-content .channels-form {
    border-bottom-left-radius: 0;
    box-sizing: border-box;
    margin-top: -80px;
    padding-bottom: 40px;
}
.product-page-content .overlay-block-container .overlay-block {
    background: #ed8c00 none repeat scroll 0 0;
}
.popup-form {
    position: relative;
}
.popup-form .h1.title {
    margin-bottom: 20px;
}
.popup-form .button, .popup-form .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .popup-form button, .popup-form .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .popup-form button {
    max-width: 365px;
    width: 80%;
}
.popup-form.form .form-row {
    margin-bottom: 20px;
}
.popup-form.form .form-row:last-child {
    margin-bottom: 0;
}
.popup-form.form .form-row .input {
    max-width: 100%;
}
.popup-form.form .submit-buttons {
    margin: 40px 0 0;
}
.popup-form.form .submit-buttons .button, .popup-form.form .submit-buttons .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .popup-form.form .submit-buttons button, .popup-form.form .submit-buttons .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .popup-form.form .submit-buttons button {
    margin-bottom: 0;
}
.popup-form.form .submit-buttons .input {
    text-align: left;
    width: 100%;
}
.popup-form.form .submit-buttons .action, .popup-form.form .submit-buttons .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .popup-form.form .submit-buttons button, .popup-form.form .submit-buttons .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .popup-form.form .submit-buttons button {
    text-align: left;
}
form fieldset.bordered, .bordered {
    background-color: #ffffff;
    border-radius: 5px 5px 0;
    padding: 20px;
}
form fieldset.bordered.show-border, .bordered.show-border {
    border: 1px solid #b1b1b1;
}
.title + .bordered {
    margin-top: 20px;
}
.page-title + .bordered {
    margin-top: 40px;
}
.rounded-top-iframe {
    border-radius: 10px 10px 0 0;
    overflow: hidden;
}
.oo-wrapper {
    background: #f0f0ec none repeat scroll 0 0;
    margin: 0 10px;
    overflow: hidden;
    padding: 30px 30px 0;
}
.hero-image + .oo-wrapper {
    margin-top: -40px;
}
.rsaquo {
    padding-right: 30px !important;
}
.rsaquo::after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20width%3D%2218%22%20height%3D%2231%22%20viewBox%3D%220%200%2018%2031%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M2.304%2030.48L0%2028.128l12.912-12.912L0%202.304%202.352%200l15.264%2015.216L2.304%2030.48z%22%20fill%3D%22%23ED8C00%22%20fill-rule%3D%22evenodd%22%2F%3E%3C%2Fsvg%3E");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
    content: "";
    display: block;
    height: 11px;
    margin-left: 10px;
    margin-top: -5px;
    position: absolute;
    right: 10px;
    top: 50%;
    width: 6px;
}
.rsaquo:hover::after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20width%3D%2218%22%20height%3D%2231%22%20viewBox%3D%220%200%2018%2031%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M2.304%2030.48L0%2028.128l12.912-12.912L0%202.304%202.352%200l15.264%2015.216L2.304%2030.48z%22%20fill%3D%22%23fff%22%20fill-rule%3D%22evenodd%22%2F%3E%3C%2Fsvg%3E");
}
.oo-wrapper .button:hover, .oo-wrapper .call-me-now-container .chat p.buttons button:hover, .call-me-now-container .chat p.buttons .oo-wrapper button:hover, .oo-wrapper .call-me-now-container .whatsapp p.buttons button:hover, .call-me-now-container .whatsapp p.buttons .oo-wrapper button:hover {
    background-color: #ed8c00 !important;
    border: 1px solid #ed8c00 !important;
}
.oo-padding {
    padding: 20px !important;
    width: 450px !important;
}
.oo-wrapper .comparison .feature {
    font-size: 1em;
}
.oo-2col p {
    line-height: 1.5;
}
.oo-2col h2 {
    margin: 0 0 20px !important;
}
.oo-2col .buttons a {
    margin-bottom: 0 !important;
}
.oo-3col-wrapper {
    border-radius: 10px 10px 0;
    overflow: hidden;
}
.play-button:hover {
    width: 150px !important;
}
.video-playing + .direct-actions {
    display: none;
}
.oo-3col-wrapper .comparison {
    border-radius: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
}
.oo-3col-wrapper h2 {
    padding: 20px;
}
.oo-3col-wrapper .comparison .collapsible-features .buttons {
    margin: 0;
    padding: 0;
}
.oo-3col-wrapper .comparison .collapsible-features .button, .oo-3col-wrapper .comparison .collapsible-features .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .oo-3col-wrapper .comparison .collapsible-features button, .oo-3col-wrapper .comparison .collapsible-features .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .oo-3col-wrapper .comparison .collapsible-features button {
    margin-bottom: 0;
}
.oo-3col-wrapper .comparison .content {
    margin: 0 0 20px;
}
.oo-3col-wrapper > .comparison > .three.equal-height.columns {
    margin-bottom: 0 !important;
}
.oo-3col-wrapper > .comparison .first .content {
    margin-left: 0;
    margin-right: 20px;
}
.oo-3col-wrapper > .comparison .last .content {
    margin-left: 20px;
    margin-right: 0;
}
.oo-3col-wrapper .buttons {
    margin: 0 20px;
}
.oo-3col-wrapper .comparison .feature {
    margin: 0 20px 20px;
}
.oo-3col-wrapper section.feature.row {
    margin: 0 20px 20px;
}
.btn-wrapper {
    margin-bottom: 10px;
}
.column .content, .oo-2col-wrapper {
    border: 1px solid #c8c8c2 !important;
}
@media only screen and (max-width: 660px) {
.oo-wrapper.rounded.bottom {
    border-radius: 0 0 0 10px !important;
    overflow: hidden;
    padding: 20px 20px 10px;
}
.oo-wrapper {
    background: #f0f0ec none repeat scroll 0 0;
    overflow: hidden;
    padding: 20px 20px 0;
}
.oo-flag {
    border-radius: 0 !important;
    box-shadow: none !important;
}
.oo-2col-wrapper {
    background: #fff none repeat scroll 0 0;
    border-radius: 10px 10px 0;
    overflow: hidden;
}
.oo-2col {
    width: 100%;
}
.oo-2col img {
    border-radius: 10px 10px 0 0;
}
.oo-padding {
    width: inherit !important;
}
.oo-3col-wrapper > .comparison .first .content, .oo-3col-wrapper > .comparison .last .content {
    margin-left: 0;
    margin-right: 0;
}
}
@media only screen and (min-width: 661px) {
.oo-wrapper {
    background: #f0f0ec none repeat scroll 0 0;
    overflow: hidden;
    padding: 20px 20px 0;
}
.oo-flag {
    border-radius: 0 !important;
    box-shadow: none !important;
}
.oo-wrapper.rounded.bottom {
    border-radius: 0 0 0 10px !important;
    overflow: hidden;
    padding: 20px 20px 0;
}
.oo-2col-wrapper {
    background: #fff none repeat scroll 0 0;
    border-radius: 10px 10px 0;
    overflow: hidden;
}
.oo-2col-wrapper .buttons {
    bottom: 25px;
    position: absolute;
}
}
@media only screen and (min-width: 661px) and (max-width: 1000px) {
.oo-2col-wrapper .buttons {
    bottom: auto;
    position: relative;
}
}
@media only screen and (min-width: 661px) {
.oo-2col {
    display: inline-block;
    line-height: 0;
    margin: 0;
    padding: 0;
    vertical-align: top;
    width: 580px;
}
.oo-2col img {
    border-radius: 10px 10px 0 0;
}
.oo-padding {
    width: 520px !important;
}
.oo-3col-wrapper .comparison .three .column {
    width: 50%;
}
.oo-3col-wrapper .comparison .three .column:nth-child(3) .content, .oo-3col-wrapper .comparison .three .column:nth-child(5) .content {
    margin-left: 0;
    margin-right: 20px;
}
.oo-3col-wrapper .comparison .three .column:nth-child(4) .content {
    margin-right: 0;
}
.oo-3col-wrapper .comparison .three .column:nth-child(6) .content {
    margin-left: 0;
}
}
@media only screen and (min-width: 1001px) {
.oo-wrapper.rounded.bottom {
    border-radius: 0 0 0 10px !important;
    overflow: hidden;
    padding: 30px 30px 10px;
}
.oo-wrapper {
    padding: 30px 30px 0;
}
.oo-flag {
    border-radius: 10px 10px 0 !important;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2) !important;
}
.oo-2col {
    width: 430px;
}
.oo-padding {
    width: 370px !important;
}
.oo-2col img {
    border-radius: 10px 0 0 10px;
}
.oo-3col-wrapper .comparison .three .column {
    width: 33.33%;
}
.oo-3col-wrapper .comparison .three .column:nth-child(3) .content {
    margin-left: 20px;
    margin-right: 0;
}
.oo-3col-wrapper .comparison .three .column:nth-child(5) .content {
    margin-right: 0;
}
.oo-3col-wrapper .comparison .three .column:nth-child(4) .content {
    margin-right: 20px;
}
.oo-3col-wrapper .comparison .three .column:nth-child(6) .content {
    margin-left: 20px;
}
}
@media only screen and (min-width: 1151px) {
.oo-2col {
    width: 520px;
}
.oo-padding {
    width: 468px !important;
}
oo-2col oo-padding {
    padding: 30px;
    width: 458px;
}
}
.campaign-content {
}
.campaign-content .content {
    margin: 0 auto;
}
.campaign-content .social-column {
    background-color: #f0f0ec !important;
    border: 1px solid #c8c8c2 !important;
    border-radius: 10px 10px 0;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
    display: inline-block;
    margin: 0 auto 20px;
    min-width: 300px;
}
.campaign-content .social-column:hover {
    background-color: #e3e3dc !important;
}
.campaign-content .gutter-sizer {
    width: 0 !important;
}
.campaign-content .social-content-container {
    padding: 20px;
}
.campaign-content .social-post {
    font-size: 0.92857em;
}
.campaign-content .social-content {
    margin-bottom: 10px;
    overflow-wrap: break-word;
}
.campaign-content .social-header {
    margin: 0 !important;
    padding: 0 !important;
}
.campaign-content .social-header a {
    cursor: default;
}
.campaign-content .social-header img {
    border-radius: 10px 10px 0 0;
    height: auto !important;
    overflow: hidden !important;
    width: 100% !important;
}
.campaign-content .social-header {
    background: rgba(0, 0, 0, 0) linear-gradient(135deg, #e45123 0%, #fcba1a 100%) repeat scroll 0 0;
    border-radius: 10px 10px 0 0;
    line-height: 0 !important;
    min-height: 72px;
}
.campaign-content header.direct-actions.block.row img {
    border-radius: 10px 10px 0 0;
    margin: 0 !important;
    padding: 0 !important;
}
.campaign-content .social-user {
    border-top: 1px solid #c8c8c2 !important;
    display: inline-block;
    line-height: 1.1;
    width: 100%;
}
.campaign-content .social-user-name {
    font-weight: bold;
}
.campaign-content .social-user-container {
    display: inline-block;
    position: relative;
    top: 42px !important;
}
.campaign-content .social-user-container a {
    color: #444444 !important;
    text-decoration: none !important;
}
.campaign-content .social-user-image {
    background-color: #fff;
    border: 1px solid #c8c8c2;
    border-radius: 5px 5px 0;
    float: left;
    height: 64px;
    margin: 10px 5px 0 0;
    overflow: hidden;
    width: 64px;
}
.campaign-content .social-user-image img {
    height: 64px;
    width: 64px;
}
.campaign-content .social-share {
    background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAATBJREFUeNqU079LQlEUwPFnWQSSRUYkbYFL7S1BP1YHG9saIqSCQHRpESQIgmgIIt4aUVGbBNqUOQRNotA/4BSIUY1tfg+cB5fHhec98BnOffccfcdjzPd9zyGyOMEMHlGOOxSv4B5Tmh9jdMShwZ5RHMThsA2WsGo5H49qsIgrtLRJOOrBDDawKx1xiw6OsI+k3nnAJ3YwiQYK0mBbi8b0ouS/mNb8BWdoan6BCfxJIg3OjeIgpPhVL9dCz/6VFzRIWd7tW1+pGzVdGeKN5VyafujSLEQ1KOESffzgSQc0L5uGNk6RxjKudaAyTC9mrPKcbBa+NN9CEWua9/VXShpfoGLuQc8olqhiHTm8YTZULFEcZhOfsSlLY3mWcPkv3FnOGnHHBhkcyCfjHfmBAAMAXsA1KMYTOgUAAAAASUVORK5CYII=") no-repeat scroll center center / 16px 16px;
    bottom: 0;
    display: inline-block;
    float: right;
    height: 16px;
    margin: 10px 0 15px;
    position: relative;
    width: 16px;
}
.campaign-content .post-date {
    margin: 0 0 10px;
}
.campaign-content .post-date, .campaign-content .social-user-username {
    color: #989898;
    font-size: 0.78571em;
}
.campaign-content .social-icon {
    display: block;
    height: 32px;
    opacity: 0.8;
    padding: 20px;
    position: absolute;
    right: 0;
    top: 0;
    width: 32px;
}
.campaign-content .twitter {
    background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAB60lEQVRYCe3BTUiTcQDH8d82W0kDg4iE4KEoKrCXg4eSQjKwLl0ixi51yAg6CB062CGD8uCMRKhDKITRKYgKPCTZC5KE7RAFMboVUkFZiWRthM1vjrDc9jz7Py8DL/t8pKqqJUUtuzhMnCaWqdKwGCTDgimuY+kfVpJQKU4SkiucIEuxDKc0jwaSfKFdxdgNdMsFOnByn7fkpVmuYiTJOy8DWpmjvEm2StQR1mKM8Nc1auSIMG8oL81+EtymV4V4wYKnWHLAAUx+kPeYqAoxyn/faCMsG/Thxjh1KkY/hcZpVgkeYDZETKU4QqkUCWq1CGOYvCQkO0SZwM53bnGMLYQ0jyFMxuSEOOVM8Zw7pDF5JHtEJXoJ7p7skeIyrQwQVJ/s8YTKaJc9LlAZTbLHJnIElyUqJ/QT3LCcEeM1QbWpHOp5RRAZVqs8VnCJLH4NyIRtbGYfd8nhXY4GmdCJfzdlxio+488MltzgEL/x47Tc4ii/8OohYblHIym8eMcaecVekowwg9lXtssPYlxhDpNpGuUdNRxnArMP7JBX7OQi73FjlHq5wVrO0sE5rjLMJO785AxhuYXFILO4NcsNLHnFBnr4hMlHulgvv4jQQg8pshSb5hlJWoioEoiwkWbiJIhzkD2sU1XVEvkD/ZxSKXfmLHIAAAAASUVORK5CYII=") no-repeat scroll center center / 32px 32px;
}
.campaign-content .instagram {
    background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAB/5JREFUeNrUWgtMFEcY3juOl8dDQUCRIgiCWAEfQFR8gxaNYlAUg4iPEGLPEGMkNqikFhVNA9WqUSSmBOyDGrAkJFaNxIqWh1QRxON4CAKKR+TE4yUK3PWbdZcsJ6B7gHp/MrnZmZ3d/5/55/u/f/Yod3d3SlP09PSo6OjoJZGRkX7kOjExcVdXV1cRqQcHB89Qq9VyjdKI8owpbL1Bo9ShPOGUWpTHGqUapZIpVeRXJpNlHD16NMjZ2dmAGki4BgiFQmr8+PFCfX19qqWl5WFRUVEKaU9ISNgHA+oYA2apP72o5HJ5YXx8/DoTE5N++gu5FykpKbs2b978TXd3N/XmzRsBhO1Xo6g49U8tAhsbG5+YmJjMW7dunZk8ebJenwGwjq6cOnUqNDw8/Mzr16/HsIpCBNQXJrNnz9515cqVpLFjx9LXIqVSSQUGBrpGRUUlM1r3fi7lsOqKc+fO/VBRUVGPyy6UXsZL9C0tLa327t17cNy4cU7Tp0+PgFvnRUREpIjQQR08ePB73CQeyK0+pWDPXd+zZ8/pwfqnTJlitWPHjh9JfcuWLXHwmr+EGzdudPP29g7k+tvnMgDe8GqofgBJG1s3MDCwk0gkwcKQkJB1nNmnUfRzGQAUVH2gvx+A+Pn5rRdiWWZROirW1tYuxN/HakKWrhhgZmY2hhjQL8L19PSoWAxVMxjb29vbt7SIEaOGUnj3kP14t6Z7671nwMSJE03hVqYiiJGRkQHqJhYWFmNIUEPdzM7Ozny0DHBxcZmGdw3YB12omTNnemkaIMAkE47T14HZbkHpxC63QR+M7lbAFjNsIPHbt2+b8KuPa6tBdFArFIqi4uLi3AcPHjxEvZm4pFgstgB2O3l4ePiA0yxAm+lgRtTV1RVIpdJqEhY4zSJMnp2rq+tSDZh/RVyleCS4ChRO3b59uzdC/qAzbGhoSK1cudIxJycnHmNaR+C9tAEVw3kCqEfF7t27l2HF+imLiElczgLFEkaJNI1Zv36925MnT64O04AuQWtraxZcZupHEDWBBiYLXrx4UY6IKMnPz28ibYQphoWFBWyAzJgxwwd8hV6Ojo4ORXV19cNsSEZGxuXy8vIO0m5ra6uXmZn5M9xrqUql0mbbtAkWL15M4YH8qKFAQAwQtre3q9ra3gXHTZs2uR8+fPgEfNxvqLFYMdnx48cPgBpfJqhDVo5QeOKGmEj+NLWsrOwQHupJCBNngwg4dZZKs7+9SHhegIJEYVYJ4aLi4uJWxMbGphPPIdeYTUVhYeE/TU1NVQTNsDJ2cyCmpqbsSlOY+djQ0NAjAAbK3NycysrKOoz7Zg6ip4rzq+booiR7oJSv412/fv0EZo52KTBCbzS1sX2guok+Pj6TNDWwt7c3BoOMgHHN7L1paWkStv/YsWMhWuyBdmLAXV5wAwXmzp1LwyjcRQw3kjJdPadPnw770JKvXr3aHWPqmTGdAQEBrsymp7Cn/uVpgJwYUMRnxL179y6QPUAkKSlJwrZfvHgx9mP9dtu2bfMJgpBxeXl5Kezzzp49GzHqBhw6dGgNw0OEjY2N9FggWRVcxIjP5oPiF+hl6+l55ebmRq+ov7+/I1kVPgbwTV56kHRUkoqXl5cjaAfZ/BT8/s/6+vouPg/CbKcxJyDmCxcu9Cb1ysrKevbw4KMpOF8DAHV0iDc2Nv6KQS4KkfUuX/grLS2V0SgCAb+i0Qmo1SuXy5WjaQCJAQIGKvXZNnCeVr7PwfguJu+lHB0dxQwP62PDo2WAgD3FQBzrmykHBwcbvgaAF5mzpO7x48dKliuBdYpG0wDCROljl6dPn9ZhFumZX7Vq1TK+BoABzMEP+ywpQy0MJ0yYYMnrQXxR6OTJk+FMUk3JZLKrDJI0I3jZ8Jh9Ql/+Vr/j641Tp041I+2EQpGmUYXR2trabJJcEDlw4MBath3U4VdA60cZAM4Uxo4DuYtn29PT07/TJg4U8KWwQUFB08gLwTYFNTU1fZT4xo0bP8ENREOcKpAzqGDc2kHux6at8/T0tGSiugFYa/mnMEBdUlLyGzkAZo42vgIhq2X7Ghoa7kRFRQUCWfqWw8rKShQSEuJ1+/btX7ipRHR09GL2ntTU1G+14ELaGUAEDHQtJzlxBa0u4fZ3dnbWI7XMKSgouAqYfURoFKe7KSYmJoAdv2bNGie0KbQ1IE+rHBKkbuvWrR6cY3rza9euJXxAkbcw6vcVK1Y4seMWLFgw7uXLl/9pmZHJCa7fwXN8tUmHyIeMnTt3bkhOTs5n20AxJgUGBvrBt+chPtgTwMJqKBB57195J2Xk+J7I8uXL7S9dupSOvTRPy4OMJqLEnWHmpR1Ajz0uLi6GPA6kqCNHjgRjE9cP8920C+WOxCcUpVJZfP78+cj58+fbIvMa8LMV8mQzsNmgqqqqayP05aaRuNBNPH/JCJ5PvUJkvSeVSmWY4XYm/TMCKjkAKr0Qye1G8F3PiQE5qCyjdFOeES7UTemu9Ao1jvB0SrDveoTIgBp01QAEz2YhcDiLc+6iUwKguEkFBASInj9/nqfWPXkD+v01yUep/fv3r9Y17e/fv58ESKYoNzc3OjkBRzmvK8ojgZL6+vq++xLi4eHB5rUGyJL++NKVB3V/BBLpTHFYZF8d7iTIzMzch/uav8SJByFMXbRokXW/nTzQ3238/f0dsrOz40BzH2BgC6E65GvIZyhKQGVNbm5uskQi8RWLxe/p+r8AAwAtKGXfXTWQnQAAAABJRU5ErkJggg==") no-repeat scroll center center / 32px 32px;
}
.campaign-content .pop-image {
    border-radius: 10px 0 0 10px;
    display: inline-block;
    line-height: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
    vertical-align: top;
    width: 60%;
}
.campaign-content .pop-content {
    display: inline-block;
    line-height: 1.5;
    margin: 0 !important;
    padding: 0 !important;
    width: 35%;
}
.campaign-content .pop-content h3 {
    color: #444444;
}
.campaign-content .lightbox-dialog .mfp-content {
    background-color: #fff;
    font-size: 16px;
    line-height: 0;
    max-width: inherit !important;
    overflow: hidden !important;
    padding: 0 !important;
    right: 10px;
    width: 80%;
}
.campaign-content .lightbox-dialog .social-content-container {
    width: 100%;
}
.campaign-content .mfp-fade.mfp-bg {
    opacity: 0;
    transition: all 0.15s ease-out 0s;
}
.campaign-content .mfp-fade.mfp-bg.mfp-ready {
    opacity: 0.8;
}
.campaign-content .mfp-fade.mfp-bg.mfp-removing {
    opacity: 0;
}
.campaign-content .mfp-fade.mfp-wrap .mfp-content {
    opacity: 0;
    transition: all 0.15s ease-out 0s;
}
.campaign-content .mfp-fade.mfp-wrap.mfp-ready .mfp-content {
    opacity: 1;
}
.campaign-content .mfp-fade.mfp-wrap.mfp-removing .mfp-content {
    opacity: 0;
}
.campaign-content .posts-preloader {
    background: transparent url("/sites/all/themes/developer/img/hashtag-page/preloader.gif") no-repeat scroll center center;
    height: 64px;
    margin: 3ex auto 0;
    width: 64px;
}
@media only screen and (max-width: 660px) {
.campaign-content html, .campaign-content body {
    overflow-x: hidden !important;
}
.campaign-content .menu-container {
    z-index: 1;
}
.campaign-content .logo {
    z-index: 2;
}
.campaign-content .content {
    margin: 0;
    max-width: 640px !important;
    overflow: hidden;
}
.campaign-content .social-column {
    max-width: 620px !important;
    overflow: hidden;
    width: 98% !important;
}
.campaign-content .gutter-sizer {
    width: 0 !important;
}
.campaign-content .lightbox-dialog .mfp-content {
    max-width: 640px !important;
}
.campaign-content .lightbox-dialog .social-content-container {
    width: auto;
}
}
@media only screen and (min-width: 661px) {
.campaign-content html, .campaign-content body {
    overflow-x: auto !important;
}
.campaign-content .content {
    max-width: 640px !important;
}
.campaign-content .social-column {
    min-width: inherit !important;
    width: 298px !important;
}
.campaign-content .gutter-sizer {
    width: 20px !important;
}
.campaign-content .lightbox-dialog .mfp-content {
    max-width: 640px !important;
}
.campaign-content .pop-content {
    clear: both !important;
    display: block !important;
    width: 100% !important;
}
.campaign-content .pop-image {
    width: 100% !important;
}
.campaign-content .lightbox-dialog .social-content-container {
    width: auto;
}
.campaign-content .social-header a {
    cursor: pointer;
}
}
@media only screen and (min-width: 1001px) {
.campaign-content .content {
    max-width: 960px !important;
}
.campaign-content .social-column {
    width: 298px !important;
}
.campaign-content .gutter-sizer {
    width: 20px !important;
}
.campaign-content .lightbox-dialog .mfp-content {
    max-width: 960px !important;
}
.campaign-content .pop-content {
    clear: none !important;
    display: inline-block !important;
    float: right;
    width: 40% !important;
}
.campaign-content .pop-image {
    width: 60% !important;
}
.campaign-content .lightbox-dialog .social-content-container {
    margin: 40px auto 0;
    max-width: 315px;
    width: auto;
}
}
@media only screen and (min-width: 1151px) {
.campaign-content .content {
    max-width: 1100px !important;
}
.campaign-content .social-column {
    width: 351px !important;
}
.campaign-content .gutter-sizer {
    width: 20px !important;
}
.campaign-content .lightbox-dialog .mfp-content {
    max-width: 1000px !important;
}
.campaign-content .lightbox-dialog .social-content-container {
    max-width: 350px;
}
}
.swoosh {
    background-color: #ec7320;
    background-image: linear-gradient(to right, #ec7320 0%, #fcba1a 100%);
    border: 0 none;
    display: block;
    height: 6px;
    left: 75px;
    margin: 0;
    overflow: visible;
    padding: 0;
    position: absolute;
    right: 10px;
    top: 60px;
    z-index: 2;
}
.swoosh::before, .swoosh::after {
    background-position: 0 0;
    content: " ";
    display: block;
    float: left;
    height: 6px;
    position: relative;
    width: 6px;
}
.swoosh::after {
    background-position: 0 -6px;
    float: right;
    height: 13px;
    width: 10px;
}
.full-width-header .swoosh {
    bottom: auto;
    left: 0;
    margin-top: 80px;
    right: 0;
    top: auto;
}
.full-width-header .swoosh::before, .full-width-header .swoosh::after {
    display: none;
}
@media only screen and (min-width: 1001px) {
.swoosh {
    bottom: 12px;
    top: auto;
}
.full-width-header .swoosh {
    bottom: auto;
    left: 0;
    margin-top: 3.3em;
    right: 0;
}
.full-width-header .swoosh::before, .full-width-header .swoosh::after {
    display: none;
}
}
.page-title .title, .page-title h1 {
    font-size: 2.85714em;
    line-height: 1;
    margin-bottom: 0.1em;
}
.page-title .title.no-subtitle, .page-title h1.no-subtitle {
    margin-bottom: 20px;
}
.page-title .subtitle {
    color: #ed8c00;
    font-size: 2.14286em;
    line-height: 1.2;
    margin: 0 0 20px;
}
.page-title .title.huge {
    font-size: 3.21429em;
    margin: 10px 0;
}
.page-title .steps {
    float: right;
    font-size: 0.71429em;
    margin: 9px 0 0;
}
.page-title .back-link {
    margin-bottom: 15px;
}
.page-title .back-link a {
    color: #001a73;
    text-decoration: none;
}
.page-title .back-link a::before {
    content: "";
    font-size: 18px;
    vertical-align: middle;
}
.page-title .introduction {
    margin-top: 20px;
}
.page-title .introduction p {
    margin-bottom: 0.5em;
}
.page-title.smaller {
    margin-bottom: 10px;
}
.page-title.pulled-up {
    margin-top: -70px;
}
.page-title .content {
    margin-left: 0;
    margin-right: 0;
}
.container .page-title .content {
    margin-left: 20px;
    margin-right: 20px;
}
.page-title .block .content {
    margin-left: 15px;
    margin-right: 15px;
}
.file {
    line-height: 1.8;
    padding-left: 25px;
    position: relative;
}
li .file {
    color: #444444;
    text-decoration: none;
}
li .file:hover {
    color: #ed8c00;
    text-decoration: underline;
}
li .file::before {
    color: #444444;
}
.file::before {
    color: #444444;
    font-size: 17px;
    left: 0;
    margin-top: -3px;
    position: absolute;
    text-decoration: none;
    width: 25px;
}
.file.pdf::before {
    content: "";
}
.file.openoffice::before {
    content: "";
}
.file.word::before {
    content: "";
}
.file.excel::before, .file.xls::before, .file.xlsx::before {
    content: "";
}
.file.zip::before {
    content: "";
}
.file.powerpoint::before {
    content: "";
}
.links .file {
    padding-left: 25px;
}
.links .file::before {
    height: 1.4em;
    left: 0;
    line-height: 1.5;
    margin-left: 0;
}
.icon {
    color: #ed8c00;
    display: inline-block;
    font-size: 25px;
    height: 25px;
    line-height: 25px;
    overflow: hidden;
    text-decoration: none;
    transition: color 0.1s ease 0s;
    white-space: nowrap;
    width: 25px;
}
.icon::before {
    display: inline-block;
    text-align: center;
    width: 100%;
}
.icon:hover {
    color: #001a73;
}
.icon.large {
    font-size: 30px;
    height: 30px;
    line-height: 30px;
    width: 30px;
}
.icon.rss::before {
    content: "";
}
.icon.facebook::before {
    content: "";
}
.icon.twitter::before {
    content: "";
}
.icon.linkedin::before {
    content: "";
}
.icon.instagram::before {
    content: "";
}
.icon.mail::before {
    content: "";
}
.button.action, .call-me-now-container .chat p.buttons button, .call-me-now-container .whatsapp p.buttons button, .button.drop-down, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call, .call-me-now-container .amn_callButtonContainer .pcac_cml_call, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call, .call-me-now-container .amn_callButtonContainer .amn_cmn_call, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton, .call-me-now-container .pcac_backButtonContainer a, .call-me-now-container .chat .inputpanel .clienttyping button, .call-me-now-container .whatsapp .inputpanel .clienttyping button {
    background-color: #ed8c00;
    border: 1px solid transparent;
    border-radius: 5px 5px 0;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.1;
    padding: 6px 40px 6px 10px;
    position: relative;
    text-decoration: none;
    text-rendering: optimizelegibility;
    transition: background-color 0.1s ease 0s, color 0.1s ease 0s;
    vertical-align: top;
}
.button.action:hover, .call-me-now-container .chat p.buttons button:hover, .call-me-now-container .whatsapp p.buttons button:hover, .button.drop-down:hover, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call:hover, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call:hover, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call:hover, .call-me-now-container .amn_callButtonContainer .pcac_cml_call:hover, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call:hover, .call-me-now-container .amn_callButtonContainer .amn_cmn_call:hover, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton:hover, .call-me-now-container .pcac_backButtonContainer a:hover, .call-me-now-container .chat .inputpanel .clienttyping button:hover, .call-me-now-container .whatsapp .inputpanel .clienttyping button:hover {
    background-color: #001a73;
    color: #ffffff;
}
.button.action::before, .call-me-now-container .chat p.buttons button::before, .call-me-now-container .whatsapp p.buttons button::before, .button.drop-down::before, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call::before, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call::before, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call::before, .call-me-now-container .amn_callButtonContainer .pcac_cml_call::before, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call::before, .call-me-now-container .amn_callButtonContainer .amn_cmn_call::before, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton::before, .call-me-now-container .pcac_backButtonContainer a::before, .call-me-now-container .chat .inputpanel .clienttyping button::before, .call-me-now-container .whatsapp .inputpanel .clienttyping button::before, .button.action::after, .call-me-now-container .chat p.buttons button::after, .call-me-now-container .whatsapp p.buttons button::after, .button.drop-down::after, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call::after, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cml_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .amn_callButtonContainer .amn_cmn_call::after, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton::after, .call-me-now-container .pcac_backButtonContainer a::after, .call-me-now-container .chat .inputpanel .clienttyping button::after, .call-me-now-container .whatsapp .inputpanel .clienttyping button::after {
    font-size: 1.6em;
    left: 0;
    line-height: 1;
    margin-top: -0.5em;
    position: absolute;
    top: 50%;
}
.button.action::after, .call-me-now-container .chat p.buttons button::after, .call-me-now-container .whatsapp p.buttons button::after, .button.drop-down::after, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call::after, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cml_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .amn_callButtonContainer .amn_cmn_call::after, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton::after, .call-me-now-container .pcac_backButtonContainer a::after, .call-me-now-container .chat .inputpanel .clienttyping button::after, .call-me-now-container .whatsapp .inputpanel .clienttyping button::after {
    left: auto;
    margin-left: 5px;
    right: 10px;
}
.button.action::after, .call-me-now-container .chat p.buttons button::after, .call-me-now-container .whatsapp p.buttons button::after, .button.drop-down::after, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call::after, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cml_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .amn_callButtonContainer .amn_cmn_call::after, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton::after, .call-me-now-container .pcac_backButtonContainer a::after, .call-me-now-container .chat .inputpanel .clienttyping button::after, .call-me-now-container .whatsapp .inputpanel .clienttyping button::after, .button.action::before, .call-me-now-container .chat p.buttons button::before, .call-me-now-container .whatsapp p.buttons button::before, .button.drop-down::before, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call::before, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call::before, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call::before, .call-me-now-container .amn_callButtonContainer .pcac_cml_call::before, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call::before, .call-me-now-container .amn_callButtonContainer .amn_cmn_call::before, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton::before, .call-me-now-container .pcac_backButtonContainer a::before, .call-me-now-container .chat .inputpanel .clienttyping button::before, .call-me-now-container .whatsapp .inputpanel .clienttyping button::before {
    transition: inherit;
}
.button.action::after, .call-me-now-container .chat p.buttons button::after, .call-me-now-container .whatsapp p.buttons button::after, .button.drop-down::after, .call-me-now-container .pcac_callButtonContainer .pcac_cml_call::after, .call-me-now-container .pcac_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .pcac_callButtonContainer .amn_cmn_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cml_call::after, .call-me-now-container .amn_callButtonContainer .pcac_cmn_call::after, .call-me-now-container .amn_callButtonContainer .amn_cmn_call::after, .call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton::after, .call-me-now-container .pcac_backButtonContainer a::after, .call-me-now-container .chat .inputpanel .clienttyping button::after, .call-me-now-container .whatsapp .inputpanel .clienttyping button::after {
    content: "";
}
.button, .call-me-now-container .chat p.buttons button, .call-me-now-container .whatsapp p.buttons button {
    background-color: #ed8c00;
    border: 1px solid transparent;
    border-radius: 5px 5px 0;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.1;
    padding: 6px 10px;
    position: relative;
    text-decoration: none;
    text-rendering: optimizelegibility;
    transition: background-color 0.1s ease 0s, color 0.1s ease 0s;
    vertical-align: top;
}
.button:hover, .call-me-now-container .chat p.buttons button:hover, .call-me-now-container .whatsapp p.buttons button:hover {
    background-color: #001a73;
    color: #ffffff;
}
.button.full, .call-me-now-container .chat p.buttons button.full, .call-me-now-container .whatsapp p.buttons button.full {
    display: block;
}
.button.action, .call-me-now-container .chat p.buttons button, .call-me-now-container .whatsapp p.buttons button, .button.drop-down, .call-me-now-container .chat p.buttons button.drop-down, .call-me-now-container .whatsapp p.buttons button.drop-down {
    padding-right: 40px;
}
.button.inverted, .call-me-now-container .chat p.buttons button.inverted, .call-me-now-container .whatsapp p.buttons button.inverted {
    background-color: #ffffff;
    border-color: #ed8c00;
    color: #ed8c00;
}
.button.inverted:hover, .call-me-now-container .chat p.buttons button.inverted:hover, .call-me-now-container .whatsapp p.buttons button.inverted:hover {
    background-color: #001a73;
    border-color: #001a73;
    color: #ffffff;
}
.button.ghost, .call-me-now-container .chat p.buttons button.ghost, .call-me-now-container .whatsapp p.buttons button.ghost {
    background-color: transparent;
}
.button.bordered, .call-me-now-container .chat p.buttons button.bordered, .call-me-now-container .whatsapp p.buttons button.bordered {
    border: 1px solid;
}
.button.link, .call-me-now-container .chat p.buttons button.link, .call-me-now-container .whatsapp p.buttons button.link {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    color: #ed8c00;
    padding: 3px 23px 3px 0;
    white-space: normal;
}
.button.link:hover, .call-me-now-container .chat p.buttons button.link:hover, .call-me-now-container .whatsapp p.buttons button.link:hover, .button.link:focus, .call-me-now-container .chat p.buttons button.link:focus, .call-me-now-container .whatsapp p.buttons button.link:focus {
    background-color: transparent;
    color: #001a73;
}
.button.link::after, .call-me-now-container .chat p.buttons button.link::after, .call-me-now-container .whatsapp p.buttons button.link::after {
    line-height: 0;
    position: relative;
    right: auto;
    vertical-align: middle;
}
.button.previous, .call-me-now-container .chat p.buttons button.previous, .call-me-now-container .whatsapp p.buttons button.previous {
    padding: 8px 10px 8px 25px;
}
.button.previous::before, .call-me-now-container .chat p.buttons button.previous::before, .call-me-now-container .whatsapp p.buttons button.previous::before {
    left: 0;
    line-height: 1;
    margin-right: 5px;
    margin-top: -0.5em;
    position: absolute;
    top: 50%;
}
.button.previous.cancel::before, .call-me-now-container .chat p.buttons button.previous.cancel::before, .call-me-now-container .whatsapp p.buttons button.previous.cancel::before {
    content: "";
}
.button.previous.bottom-margin, .call-me-now-container .chat p.buttons button.previous.bottom-margin, .call-me-now-container .whatsapp p.buttons button.previous.bottom-margin {
    margin-bottom: 15px;
}
.button.exit, .call-me-now-container .chat p.buttons button.exit, .call-me-now-container .whatsapp p.buttons button.exit {
    padding-right: 50px;
}
.button.exit::after, .call-me-now-container .chat p.buttons button.exit::after, .call-me-now-container .whatsapp p.buttons button.exit::after {
    content: "";
    font-size: 24px;
    line-height: 1em;
    margin-top: -0.5em;
    position: absolute;
    right: 5px;
    top: 50%;
}
.button.exit.full, .call-me-now-container .chat p.buttons button.exit.full, .call-me-now-container .whatsapp p.buttons button.exit.full {
    min-height: 26px;
}
.button.square, .call-me-now-container .chat p.buttons button.square, .call-me-now-container .whatsapp p.buttons button.square {
    font-size: 17px;
    height: 83px;
    padding: 6px 10px;
    width: 75px;
}
.button.square::after, .call-me-now-container .chat p.buttons button.square::after, .call-me-now-container .whatsapp p.buttons button.square::after {
    bottom: 5px;
    left: 5px;
    top: auto;
}
.button.submit, .call-me-now-container .chat p.buttons button.submit, .call-me-now-container .whatsapp p.buttons button.submit {
    padding: 0;
}
.button.submit .input, .call-me-now-container .chat p.buttons button.submit .input, .call-me-now-container .whatsapp p.buttons button.submit .input {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    color: #ffffff;
    font-weight: bold;
    padding: 6px 40px 6px 10px;
    position: relative;
    z-index: 1;
}
.form .form-row .button.submit .input, .form .form-row .call-me-now-container .chat p.buttons button.submit .input, .call-me-now-container .chat p.buttons .form .form-row button.submit .input, .form .form-row .call-me-now-container .whatsapp p.buttons button.submit .input, .call-me-now-container .whatsapp p.buttons .form .form-row button.submit .input {
    border: 0 none;
    box-shadow: none;
    color: #ffffff;
    padding: 6px 40px 6px 10px;
}
.button.submit.link .input, .call-me-now-container .chat p.buttons button.submit.link .input, .call-me-now-container .whatsapp p.buttons button.submit.link .input {
    color: #ed8c00;
}
.button.business-label::before, .call-me-now-container .chat p.buttons button.business-label::before, .call-me-now-container .whatsapp p.buttons button.business-label::before {
    margin-top: -0.2em;
    position: static;
}
.button.action::after, .call-me-now-container .chat p.buttons button::after, .call-me-now-container .whatsapp p.buttons button::after {
    content: "";
}
.button.previous::before, .call-me-now-container .chat p.buttons button.previous::before, .call-me-now-container .whatsapp p.buttons button.previous::before {
    content: "";
}
.button.drop-down-toggle::after, .call-me-now-container .chat p.buttons button.drop-down-toggle::after, .call-me-now-container .whatsapp p.buttons button.drop-down-toggle::after {
    content: "";
}
.button.video::after, .call-me-now-container .chat p.buttons button.video::after, .call-me-now-container .whatsapp p.buttons button.video::after {
    background-color: #ffffff;
    border-radius: 100%;
    color: #ed8c00;
    content: "󢖶";
    font-size: 11px;
    height: 17px;
    line-height: 17px;
    margin-top: -8.5px;
    text-align: center;
    text-indent: 3px;
    width: 17px;
}
.button.video:hover::after, .call-me-now-container .chat p.buttons button.video:hover::after, .call-me-now-container .whatsapp p.buttons button.video:hover::after {
    background-color: #ffffff;
    color: #001a73;
}
.button.video.inverted::after, .call-me-now-container .chat p.buttons button.video.inverted::after, .call-me-now-container .whatsapp p.buttons button.video.inverted::after {
    background-color: #ed8c00;
    color: #ffffff;
}
.button.phone, .call-me-now-container .chat p.buttons button.phone, .call-me-now-container .whatsapp p.buttons button.phone, .button.mail, .call-me-now-container .chat p.buttons button.mail, .call-me-now-container .whatsapp p.buttons button.mail {
    padding-left: 1.8em;
}
.button.phone, .call-me-now-container .chat p.buttons button.phone, .call-me-now-container .whatsapp p.buttons button.phone {
    padding-right: 0;
}
.button.phone::before, .call-me-now-container .chat p.buttons button.phone::before, .call-me-now-container .whatsapp p.buttons button.phone::before {
    content: "";
}
.button.mail::before, .call-me-now-container .chat p.buttons button.mail::before, .call-me-now-container .whatsapp p.buttons button.mail::before {
    content: "";
}
.button[disabled], .call-me-now-container .chat p.buttons button[disabled], .call-me-now-container .whatsapp p.buttons button[disabled], .button.loading, .call-me-now-container .chat p.buttons button.loading, .call-me-now-container .whatsapp p.buttons button.loading {
    background-color: #dcdcd7;
    color: #989898;
    pointer-events: none;
}
.button.loading::before, .call-me-now-container .chat p.buttons button.loading::before, .call-me-now-container .whatsapp p.buttons button.loading::before, .button.loading::after, .call-me-now-container .chat p.buttons button.loading::after, .call-me-now-container .whatsapp p.buttons button.loading::after {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/loader.gif") no-repeat scroll center center;
    color: transparent;
}
.button small, .call-me-now-container .chat p.buttons button small, .call-me-now-container .whatsapp p.buttons button small {
    display: block;
    font-size: 0.92308em;
    font-weight: normal;
    margin-top: 3px;
}
.button.bigger, .call-me-now-container .chat p.buttons button.bigger, .call-me-now-container .whatsapp p.buttons button.bigger {
    font-size: 1em;
    line-height: 28px;
    padding-bottom: 5px;
    padding-left: 15px;
    padding-top: 5px;
}
.button.bigger.phone::before, .call-me-now-container .chat p.buttons button.bigger.phone::before, .call-me-now-container .whatsapp p.buttons button.bigger.phone::before {
    font-size: 45px;
    left: -10px;
    position: absolute;
}
.button.bigger.mail::before, .call-me-now-container .chat p.buttons button.bigger.mail::before, .call-me-now-container .whatsapp p.buttons button.bigger.mail::before {
    font-size: 38px;
    left: -7px;
    margin-top: -0.4em;
}
.button.bigger.mail::after, .call-me-now-container .chat p.buttons button.bigger.mail::after, .call-me-now-container .whatsapp p.buttons button.bigger.mail::after {
    font-size: 20px;
    top: 50%;
}
.button.large, .call-me-now-container .chat p.buttons button.large, .call-me-now-container .whatsapp p.buttons button.large {
    font-size: 18px;
    line-height: 30px;
    padding-left: 2.2em;
    padding-right: 0;
}
.button.large.phone::before, .call-me-now-container .chat p.buttons button.large.phone::before, .call-me-now-container .whatsapp p.buttons button.large.phone::before {
    font-size: 45px;
    left: -10px;
    position: absolute;
}
.button.large.mail::before, .call-me-now-container .chat p.buttons button.large.mail::before, .call-me-now-container .whatsapp p.buttons button.large.mail::before {
    font-size: 38px;
    left: -7px;
    margin-top: -0.4em;
}
.button.large.mail::after, .call-me-now-container .chat p.buttons button.large.mail::after, .call-me-now-container .whatsapp p.buttons button.large.mail::after {
    font-size: 20px;
    top: 50%;
}
@media only screen and (min-width: 661px) {
.button.square, .call-me-now-container .chat p.buttons button.square, .call-me-now-container .whatsapp p.buttons button.square {
    width: 70px;
}
}
@media only screen and (min-width: 1001px) {
.button.square, .call-me-now-container .chat p.buttons button.square, .call-me-now-container .whatsapp p.buttons button.square {
    width: 75px;
}
.button.landscape-full, .call-me-now-container .chat p.buttons button.landscape-full, .call-me-now-container .whatsapp p.buttons button.landscape-full {
    display: block;
}
}
@keyframes shootingTextIndent {
0% {
    text-indent: 0;
}
50% {
    color: transparent;
    text-indent: 50%;
}
51% {
    color: inherit;
    text-indent: -100%;
}
100% {
    text-indent: 0;
}
}
@keyframes shootingTextIndent {
0% {
    text-indent: 0;
}
50% {
    color: transparent;
    text-indent: 50%;
}
51% {
    color: inherit;
    text-indent: -100%;
}
100% {
    text-indent: 0;
}
}
@keyframes shootingTextIndent {
0% {
    text-indent: 0;
}
50% {
    color: transparent;
    text-indent: 50%;
}
51% {
    color: inherit;
    text-indent: -100%;
}
100% {
    text-indent: 0;
}
}
.button.action.exit.animated::after, .call-me-now-container .chat p.buttons button.exit.animated::after, .call-me-now-container .whatsapp p.buttons button.exit.animated::after {
    overflow: hidden;
    right: 0;
    width: 1.8em;
}
.button.action.exit.animated:hover::after, .call-me-now-container .chat p.buttons button.exit.animated:hover::after, .call-me-now-container .whatsapp p.buttons button.exit.animated:hover::after {
    animation-direction: normal;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-name: shootingTextIndent;
}
.exit-link {
    position: relative;
}
.exit-link::after {
    content: "";
    font-size: 24px;
    left: 100%;
    margin-left: 0.5em;
    position: absolute;
    text-decoration: none;
    top: -0.4em;
}
.exit-link.normalized {
    color: #444444;
    text-decoration: none;
}
.exit-link.normalized:hover {
    color: #001a73;
    text-decoration: underline;
}
.exit-link.normalized::after {
    color: #001a73;
}
.block {
    border: 1px solid #d2d2cc;
    border-radius: 10px 10px 0;
    margin-bottom: 20px;
    padding: 15px 20px;
    text-rendering: optimizelegibility;
}
.block .content {
    margin-left: 20px;
    margin-right: 20px;
}
.block .title {
    font-size: 1.84615em;
    line-height: 1.1;
    margin: 0 0 0.8em;
}
.block .title.smaller {
    font-size: 1.53846em;
    margin-bottom: 10px;
}
.block .title.larger {
    font-size: 2.30769em;
}
.block .title.section {
    color: #ed8c00;
    font-size: 1.53846em;
}
.block .title.emphasized {
    color: #001a73;
    font-size: 1.30769em;
    line-height: 2;
    margin-bottom: 25px;
}
.block .title.emphasized em {
    font-size: 2.94118em;
    font-style: normal;
    line-height: 1;
    padding-right: 3px;
    vertical-align: top;
}
.block .title.with-icons {
    float: left;
    margin-bottom: 0;
}
.block .title-icons {
    margin: 0 0 10px;
    text-align: right;
}
.block .header-image.hero {
    margin-bottom: 0.5em;
}
.block.outer {
    overflow: hidden;
    padding: 0;
}
.block.regular-font {
    font-size: 1em;
}
.block.inline {
    float: right;
    font-size: 1em;
    margin-bottom: 1em;
}
.block.inline h1 {
    font-size: 1.69231em;
    line-height: 1.2;
}
@media only screen and (min-width: 1001px) {
.block.inline {
    float: none;
    margin: 0;
}
}
.block.simple {
    border: 0 none;
    margin-bottom: 0;
    padding: 0;
}
.block.simple .title {
    margin-bottom: 10px;
}
.block.border-less {
    border: 0 none;
}
.block.full {
    margin-left: 20px;
    margin-right: 20px;
}
@media only screen and (min-width: 661px) {
.block.full {
    left: 20px;
    margin-left: 0;
    margin-right: 0;
    position: relative;
}
}
.block.related .title {
    color: #ed8c00;
    margin-bottom: 15px;
}
.block.image {
    border: 0 none;
    padding: 0;
    position: relative;
}
.block.image > .title {
    left: 20px;
    position: absolute;
    top: 15px;
    z-index: 1;
}
.block.image > .title.section {
    color: #ffffff;
}
.block.image .image {
    border-radius: 10px 10px 0;
    line-height: 0;
    margin: 0 0 10px;
    overflow: hidden;
    position: relative;
}
.block.image .block {
    border-radius: 0 0 0 10px;
}
.block.image.even {
    float: right;
}
.block.bottom-buttons {
    padding-bottom: 88px;
    position: relative;
}
.block.bottom-buttons .buttons {
    bottom: 20px;
    left: 20px;
    position: absolute;
    right: 20px;
}
.block.bottom-buttons .buttons .button, .block.bottom-buttons .call-me-now-container .chat p.buttons button, .call-me-now-container .chat .block.bottom-buttons p.buttons button, .block.bottom-buttons .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp .block.bottom-buttons p.buttons button {
    margin-bottom: 0;
}
.block.home {
    position: relative;
}
.block.home .description {
    margin: 0;
    padding-bottom: 2.5em;
}
.block.home .buttons, .block.home .buttons .button, .block.home .call-me-now-container .chat p.buttons button, .call-me-now-container .chat .block.home p.buttons button, .block.home .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp .block.home p.buttons button {
    margin-bottom: 0;
}
.block.home .buttons.big, .block.home .buttons .button.big, .block.home .call-me-now-container .chat p.buttons button.big, .call-me-now-container .chat .block.home p.buttons button.big, .block.home .call-me-now-container .whatsapp p.buttons button.big, .call-me-now-container .whatsapp .block.home p.buttons button.big {
    width: 100%;
}
@media only screen and (min-width: 661px) {
.block.home {
    min-height: 275px;
}
.block.home .buttons {
    bottom: 15px;
    position: absolute;
}
.block.home .buttons.big {
    width: 100%;
}
.block.home.image {
    margin-bottom: 0;
    min-height: 0;
}
.block.home.image .buttons {
    position: static;
}
}
@media only screen and (min-width: 1001px) {
.block.home {
    min-height: 245px;
}
.block.home.image {
    margin-bottom: 20px;
    min-height: 275px;
}
.block.home.image .buttons {
    position: absolute;
}
}
@media only screen and (min-width: 1151px) {
.block.home {
    min-height: 275px;
}
.block.home.image {
    min-height: 305px;
}
}
.block.calamity {
    border-color: #ed8c00;
    clear: left;
    padding-left: 80px;
    padding-right: 60px;
    position: relative;
}
.block.calamity::before {
    color: #ed8c00;
    content: "";
    font-size: 35px;
    left: 0;
    line-height: 1;
    position: absolute;
    text-align: center;
    top: 15px;
    width: 80px;
}
.block.calamity .title {
    color: #ed8c00;
    margin-bottom: 0.5em;
}
.block.calamity p {
    margin-bottom: 1em;
}
.block.calamity .buttons, .block.calamity .buttons .button, .block.calamity .call-me-now-container .chat p.buttons button, .call-me-now-container .chat .block.calamity p.buttons button, .block.calamity .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp .block.calamity p.buttons button {
    margin-bottom: 0;
}
.block.form {
    margin-top: 30px;
}
.secondary .block.form {
    margin-top: 0;
}
.block.form .title {
    color: #001a73;
}
.block.accented {
    background-color: #f0f0ec;
    border: 0 none;
}
.block.solid {
    background-color: #ed8c00;
}
.block.solid, .block.solid h2, .block.solid .h2, .block.solid h3, .block.solid .h3, .block.solid h4, .block.solid .h4 {
    color: #ffffff;
}
.block footer {
    clear: both;
    width: 100%;
}
@media only screen and (min-width: 661px) {
.block {
    font-size: 0.92857em;
}
.secondary .block {
    margin-left: 20px;
    margin-right: 20px;
}
}
@media only screen and (min-width: 1001px) {
.secondary .block {
    margin-left: 0;
    margin-right: 0;
}
.block.image .positioned {
    left: 20px;
    margin: 0;
    position: absolute;
    top: 20px;
}
.block.image .positioned.bottom {
    bottom: 20px;
    top: auto;
}
.block.image .block {
    border-radius: 10px 10px 0;
    padding: 10px 15px;
}
}
.block.cases {
    background: #f0f0ec none repeat scroll 0 0;
    border-color: #f0f0ec;
    margin-bottom: 40px;
    margin-top: 20px;
    padding-bottom: 0;
}
.block.cases p {
    font-size: 1em;
    max-width: 400px;
}
.block.cases .item {
    border-top: 1px solid #c8c8c2;
    padding-bottom: 25px;
    padding-top: 20px;
}
.block.cases .item .header-image {
    height: 70px;
    line-height: 70px;
}
.block.cases .item .header-image img {
    display: inline-block;
    vertical-align: middle;
}
.block.cases .item h2.title {
    margin-bottom: 0.4em;
}
.block.cases .item p {
    margin-bottom: 0.6em;
    max-width: none;
}
.block.cases .item .button, .block.cases .item .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .block.cases .item button, .block.cases .item .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .block.cases .item button {
    margin-top: 15px;
}
.block.cases .item blockquote.highlighted {
    color: #ed8c00;
}
.block.cases footer {
    border-top: 1px solid #c8c8c2;
    padding-top: 20px;
}
@media only screen and (min-width: 1001px) {
.block.cases.columns div.item {
    border-right: 1px solid #c8c8c2;
    border-top: 0 none;
    padding: 0 20px 0 30px;
}
.block.cases.columns div.item.first {
    padding-left: 10px;
}
.block.cases.columns div.item.last {
    border-right: 0 none;
    padding-right: 10px;
}
.block.cases.columns footer {
    border-top: 0 none;
}
}
.block.cases ul.logos {
    display: block;
    margin: 0;
    padding: 0;
}
.block.cases ul.logos li {
    float: left;
    height: 70px;
    line-height: 70px;
    list-style: outside none none;
    margin: 10px 10px 30px;
    text-align: center;
    width: 156px;
}
.block.cases ul.logos li img {
    display: inline-block;
    max-height: 100%;
    max-width: 100%;
    vertical-align: middle;
}
.direct-actions {
    background-color: #ed8c00;
    background-image: linear-gradient(to right bottom, #e45123, #fcba1a);
    border: 0 none;
    color: #ffffff;
}
.cssgradients .direct-actions.transparent {
    background-color: transparent;
    background-image: linear-gradient(to right bottom, rgba(228, 81, 35, 0.95), rgba(252, 186, 26, 0.95));
}
.direct-actions .title, .direct-actions h1, .direct-actions h2, .direct-actions h3, .secondary .direct-actions .title, .direct-actions a {
    color: inherit;
}
.direct-actions .title.inverted {
    color: #ffffff;
}
.direct-actions .title.subtitled {
    font-size: 2.30769em;
    margin-bottom: 15px;
}
.direct-actions .title.subtitled em {
    color: #001a73;
    display: block;
    font-style: normal;
}
.direct-actions .title.subtitled.smaller {
    font-size: 1.69231em;
}
.direct-actions .title.subtitled.huge em {
    margin-bottom: 0.5em;
    margin-top: 0.3em;
}
.direct-actions .title.subtitled.inverted {
    color: #001a73;
}
.direct-actions .title.subtitled.inverted em {
    color: #ffffff;
}
.direct-actions .buttons p, .direct-actions .buttons .button, .direct-actions .call-me-now-container .chat p.buttons button, .call-me-now-container .chat .direct-actions p.buttons button, .direct-actions .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp .direct-actions p.buttons button {
    margin-bottom: 5px;
}
.direct-actions .button.link, .direct-actions .call-me-now-container .chat p.buttons button.link, .call-me-now-container .chat p.buttons .direct-actions button.link, .direct-actions .call-me-now-container .whatsapp p.buttons button.link, .call-me-now-container .whatsapp p.buttons .direct-actions button.link {
    color: #ffffff;
}
.direct-actions .button.inverted, .direct-actions .call-me-now-container .chat p.buttons button.inverted, .call-me-now-container .chat p.buttons .direct-actions button.inverted, .direct-actions .call-me-now-container .whatsapp p.buttons button.inverted, .call-me-now-container .whatsapp p.buttons .direct-actions button.inverted {
    border: 0 none;
}
.direct-actions .separated {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: rgba(0, 0, 0, 0.2);
    border-image: none;
    border-style: solid;
    border-width: 1px 0 0;
    margin: 20px 0 0;
    overflow: hidden;
    padding-top: 20px;
    position: relative;
}
.direct-actions .separated .title {
    font-size: 1.53846em;
}
.direct-actions .separated::after {
    top: -10px;
    z-index: 0;
}
.direct-actions .links a {
    color: #ffffff;
}
.direct-actions .links a:hover {
    color: #001a73;
}
@media only screen and (min-width: 410px) and (max-width: 1000px) {
.direct-actions .content {
    display: table;
}
.direct-actions .section {
    display: table-cell;
    padding: 0 4%;
    width: 50%;
}
.direct-actions .section.first {
    padding-left: 0;
}
.direct-actions .section.last {
    padding-right: 0;
}
.direct-actions .separated {
    border-left-width: 1px;
    border-top: 0 none;
    padding-left: 15px;
}
.direct-actions .separated::after {
    bottom: 0;
    height: auto;
    left: -10px;
    right: auto;
    top: 0;
    width: 10px;
}
}
.block.overview {
    background-color: #f0f0ec;
    border: 0 none;
    box-shadow: 1px 0 1px 1px rgba(0, 0, 0, 0.1) inset;
}
.block.overview .title {
    font: bold 1em/1.5 Arial,Helvetica,sans-serif;
    margin-top: 0;
}
.block.overview .collapsible-toggle::before, .block.overview dl.collapsible-items dt::before, dl.collapsible-items .block.overview dt::before {
    top: 1px;
}
.block.products {
    background-color: #f0f0ec;
    border: 0 none;
    float: left;
}
.block.products > .title {
    color: #ed8c00;
}
.block.products .media-block {
    background-color: #ffffff;
    box-sizing: border-box;
}
.block.products > .footer {
    clear: both;
}
@media only screen and (min-width: 661px) {
.block.products .media-block {
    float: left;
    margin-right: 1%;
    width: 49%;
}
.block.products .media-block:nth-child(2n+1) {
    margin-right: 0;
}
.block.products .media-block:nth-child(2n+2) {
    clear: left;
}
}
@media only screen and (min-width: 1001px) {
.block.products .media-block {
    width: 23.5%;
}
.block.products .media-block:nth-child(2n+1) {
    margin-right: 1%;
}
.block.products .media-block:nth-child(2n+2) {
    clear: none;
}
.block.products .media-block:nth-child(4n+1) {
    margin-right: 0;
}
.block.products .media-block:nth-child(4n+2) {
    clear: left;
}
}
.media-block {
    font-size: 0.92857em;
    padding: 0 10px;
}
.block .media-block {
    font-size: 1em;
    padding: 0;
}
.media-block.block {
    padding: 0 20px;
}
.media-block .header-image {
    line-height: 100px;
    margin: 3em 0 0;
}
.media-block .header-image img {
    vertical-align: middle;
}
@media only screen and (min-width: 661px) {
.media-block .header-image {
    margin-top: 20px;
}
.media-block .header-image.larger {
    line-height: 130px;
}
}
.media-block .highlighted-content {
    background-color: #ed8c00;
    border-radius: 10px 10px 0;
    color: #ffffff;
    margin: 0;
    overflow: hidden;
    padding: 0 20px;
}
.media-block .highlighted-content.narrow-content {
    padding: 0 10px;
}
.media-block .highlighted-content h2 {
    color: #ffffff;
}
.media-block .highlighted-content .button, .media-block .highlighted-content .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .media-block .highlighted-content button, .media-block .highlighted-content .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .media-block .highlighted-content button {
    color: #ffffff;
}
.media-block .title, .media-block .price-display {
    font-size: 1.38462em;
}
.media-block .title {
    font-size: 1.69231em;
    line-height: 1.1;
    margin: 0.35em 0;
}
.media-block .title.large {
    font-size: 1.92308em;
    margin-bottom: 0.5em;
}
.media-block .description {
    margin-bottom: 0.5em;
}
.media-block .price-display {
    margin-bottom: 0.35em;
}
.media-block .price-display .price-condition {
    color: #444444;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 0.66667em;
    font-style: normal;
}
.media-block .footer {
    padding-bottom: 10px;
}
.media-block .buttons .exit.button, .media-block .call-me-now-container .chat p.buttons button.exit, .call-me-now-container .chat .media-block p.buttons button.exit, .media-block .call-me-now-container .whatsapp p.buttons button.exit, .call-me-now-container .whatsapp .media-block p.buttons button.exit {
    padding-right: 30px;
}
.media-block .buttons .exit.button.link::after, .media-block .call-me-now-container .chat p.buttons button.exit.link::after, .call-me-now-container .chat .media-block p.buttons button.exit.link::after, .media-block .call-me-now-container .whatsapp p.buttons button.exit.link::after, .call-me-now-container .whatsapp .media-block p.buttons button.exit.link::after {
    right: 0;
}
.media-block.left-image .header-image {
    margin-bottom: 10px;
    margin-top: 5px;
}
.media-block.left-image .title {
    font-size: 1.42857em;
    margin: 0 0 0.5em;
}
.media-block.left-image .content {
    margin: 0;
}
.media-block.left-image .content p {
    margin-bottom: 0.5em;
}
.media-block.quote blockquote {
    color: #001a73;
}
.media-block .action.button, .media-block .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .media-block button, .media-block .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .media-block button {
    display: block;
}
@media only screen and (min-width: 661px) {
.media-block {
    padding: 0;
}
.media-block.left-image .header-image {
    float: left;
    margin: 0;
}
.media-block.left-image .content {
    margin-left: 220px;
}
}
.block.overlay-block {
    margin-top: -80px;
}
@media only screen and (min-width: 661px) {
.block.overlay-block {
    margin: 0;
    position: absolute;
    right: 30px;
    top: 30px;
}
}
.index-block {
    font-size: 0.92857em;
    margin-bottom: 10px;
    position: relative;
}
.index-block .header-image {
    line-height: 0;
    margin: 0;
}
.index-block .header-image img {
    border-radius: 10px 10px 0 0;
}
.index-block header {
    position: relative;
    z-index: 1;
}
.index-block header .title {
    bottom: 10px;
    font-size: 1.84615em;
    left: 10px;
    position: absolute;
    right: 10px;
}
.index-block header a {
    background-color: #ed8c00;
    border-radius: 10px 10px 0;
    color: #ffffff;
    display: block;
    line-height: 1.2;
    min-height: 71px;
    padding: 10px 20px;
    text-decoration: none;
    transition: background-color 0.1s ease 0s, color 0.1s ease 0s;
}
.index-block header a:hover {
    background-color: #001a73;
}
.index-block header a::after {
    content: "";
    display: inline-block;
    font-size: 1.5em;
    vertical-align: middle;
}
.index-block .content {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #ffffff;
    border-bottom-left-radius: 10px;
    border-color: #d2d2cc;
    border-image: none;
    border-style: solid;
    border-width: 0 1px 1px;
    margin: 0 0 20px;
    padding: 0 20px;
}
.index-block .content h2 {
    font-size: 1.30769em;
    margin: 0 0 10px;
}
.index-block .button, .index-block .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .index-block button, .index-block .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .index-block button {
    margin-bottom: 0;
}
@media only screen and (min-width: 661px) {
.index-block header .title {
    bottom: auto;
    left: 20px;
    margin-top: -70px;
    width: 160px;
}
.index-block header a {
    min-height: 130px;
}
.index-block .content {
    left: 0;
    min-height: 190px;
    padding: 100px 20px 10px;
    position: relative;
}
}
@media only screen and (min-width: 1001px) {
.index-block .content {
    padding: 25px 20px 0 200px;
}
.index-block .buttons {
    min-height: 3.5em;
}
}
.index-block-height.business-actions {
    margin-bottom: 20px;
}
@media only screen and (min-width: 661px) {
.index-block-height.business-actions {
    min-height: 510px;
}
}
@media only screen and (min-width: 1001px) {
.index-block-height.business-actions {
    min-height: 460px;
}
}
@media only screen and (min-width: 1151px) {
.index-block-height.business-actions {
    min-height: 510px;
}
}
.landing-block {
    clear: both;
    position: relative;
}
.landing-block .picto {
    float: left;
    margin-top: 20px;
    position: relative;
    z-index: 1;
}
.landing-block .content {
    border-bottom: 1px solid #d2d2cc;
    margin: 0;
    padding: 15px 0 40px 70px;
    position: relative;
}
.landing-block .content.with-image .description {
    padding-right: 85px;
}
.landing-block.with-banner .content {
    border-bottom: 0 none;
}
.landing-block .title {
    font-size: 1.71429em;
    line-height: 1.1;
    margin: 0 0 10px;
}
.landing-block .title .button, .landing-block .title .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .landing-block .title button, .landing-block .title .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .landing-block .title button {
    background-color: transparent;
    color: #001a73;
    font: inherit;
    padding: 0 1.5em 0 0;
}
.landing-block .title .button::after, .landing-block .title .call-me-now-container .chat p.buttons button::after, .call-me-now-container .chat p.buttons .landing-block .title button::after, .landing-block .title .call-me-now-container .whatsapp p.buttons button::after, .call-me-now-container .whatsapp p.buttons .landing-block .title button::after {
    font-size: 22px;
    line-height: 1.2;
}
.landing-block h3 {
    margin: 0 0 10px;
}
.landing-block p {
    margin-bottom: 0;
}
.landing-block.clickable .content:hover {
    color: #ed8c00;
    cursor: pointer;
}
.landing-block.clickable .content:hover .title a {
    color: #ed8c00;
}
.landing-block.has-children {
    border-bottom: 1px solid #d2d2cc;
}
.landing-block.has-children .content {
    border-bottom: 0 none;
    padding-bottom: 15px;
}
.landing-block.no-picto .content, .landing-block.no-picto .children {
    padding-left: 0;
}
.landing-block .children {
    margin-top: 10px;
    padding-bottom: 40px;
    padding-left: 70px;
}
.landing-block .hero-image {
    margin: 10px 0;
    padding-left: 0;
    padding-right: 0;
}
.landing-block .hero-image .block {
    padding: 15px 20px;
}
.landing-block .hero-image .block .description {
    margin-bottom: 1em;
}
.landing-block .footer-image {
    bottom: 0;
    line-height: 0;
    position: absolute;
    right: 0;
}
.landing-block .footer-image img {
    max-height: 100px;
}
@media only screen and (min-width: 661px) and (max-width: 1000px) {
.landing-block.share-price .column {
    float: none;
    width: auto;
}
.landing-block.share-price .children {
    margin-top: 5px;
}
}
@media only screen and (min-width: 661px) {
.landing-block {
    clear: none;
}
.landing-block .content {
    margin: 0 20px 0 0;
    min-height: 150px;
}
.landing-block .content.with-image .description {
    padding-right: 105px;
}
.landing-block .children {
    margin: 10px 0 0;
    min-height: 181px;
}
.landing-block .hero-image {
    padding-bottom: 0;
}
.landing-block .hero-image .block {
    border-radius: 0 0 0 10px;
}
.landing-block .footer-image img {
    max-height: 120px;
}
.landing-block.has-children {
    min-height: 413px;
}
.landing-block.has-children .content {
    min-height: 0;
}
.landing-block.even {
    float: right;
}
.landing-block.even .content, .landing-block.even .children {
    margin-right: 0;
}
}
@media only screen and (min-width: 1001px) {
.landing-block .content {
    min-height: 124px;
}
.landing-block .content.with-image {
    padding-right: 130px;
}
.landing-block .content.with-image .description {
    padding-right: 0;
}
.landing-block.has-children {
    min-height: 359px;
}
.landing-block .children {
    min-height: 155px;
}
.landing-block.share-price .children {
    margin-top: 0;
}
.landing-block .hero-image img.hero {
    border-radius: 10px 10px 0 0;
}
.landing-block .hero-image .block {
    position: static;
    width: auto;
}
}
.list {
    margin-bottom: 1em;
}
.list li {
    margin-bottom: 0.5em;
    position: relative;
}
.links li {
    line-height: 1.3;
    margin-bottom: 7px;
}
.links a {
    color: #393939;
    display: block;
    padding-left: 20px;
    position: relative;
    text-decoration: none;
}
.links a::before {
    content: "";
    font-size: 1.3em;
    height: 1em;
    left: -4px;
    margin-top: -0.1em;
    overflow: hidden;
    position: absolute;
}
.links a:hover {
    color: #ed8c00;
    text-decoration: underline;
}
.links.highlighted a {
    color: #ed8c00;
    text-decoration: underline;
}
.links.highlighted a:hover {
    text-decoration: none;
}
.links.column li {
    margin-bottom: 12px;
    margin-right: 20px;
}
.inline li {
    display: inline-block;
    margin-right: 2em;
}
.inline li:last-child {
    margin-right: 0;
}
.inline.narrow li {
    margin-right: 5px;
    vertical-align: top;
}
.inline.narrow li:last-child {
    margin-right: 0;
}
.check-marks li {
    margin-bottom: 1em;
    padding-left: 1.8em;
    position: relative;
}
.check-marks li::before {
    color: #ed8c00;
    content: "";
    font-size: 1.4em;
    left: 0;
    line-height: 1.3;
    position: absolute;
}
dl.date-list .date-display {
    clear: left;
    float: left;
    padding: 0;
    width: 75px;
}
dl.date-list .link {
    margin: 0 0 10px 75px;
}
dl.date-list a {
    color: #444444;
    text-decoration: none;
}
dl.date-list a:hover {
    color: #ed8c00;
    text-decoration: underline;
}
.top-list {
    color: #ed8c00;
    font-size: 1.38462em;
    padding-left: 25px;
}
.top-list li {
    margin: 0;
}
.top-list a {
    color: #444444;
    font: 0.72222em Arial,Helvetica,sans-serif;
    text-decoration: none;
}
.top-list a:hover {
    text-decoration: underline;
}
.clean-list ul {
    list-style-position: inside;
    margin-bottom: 0;
    margin-left: 0;
    margin-top: 10px;
    padding-left: 1em;
    text-indent: -1em;
}
.clean-list li {
    margin-bottom: 0.75em;
}
.clean-list li:last-child {
    margin-bottom: 0;
}
.split-list {
    margin-top: 10px;
}
@media only screen and (min-width: 661px) {
.split-list {
    -moz-column-count: 2;
    -moz-column-gap: 20px;
}
}
.icon-list {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.icon-list li {
    margin-bottom: 0.75em;
}
.icon-list span {
    color: #989898;
}
.pagination {
    margin-bottom: 30px;
    text-align: center;
}
.pagination li {
    display: inline-block;
    margin-right: 4px;
}
.pagination a, .pagination .current {
    border-radius: 3px;
    display: inline-block;
    padding: 2px 5px;
}
.pagination a {
    color: #444444;
    text-decoration: none;
}
.pagination a:hover {
    background-color: #f0f0ec;
}
.pagination .current {
    background-color: #ed8c00;
    color: #ffffff;
}
.pagination li, .pagination a {
    vertical-align: top;
}
.pagination .ellipsis {
    font-size: 0.9em;
    margin-right: 0;
}
.pagination .next a, .pagination .previous a {
    height: 1.5em;
    overflow: hidden;
    width: 1.2em;
}
.pagination .next a::before, .pagination .previous a::before {
    font-size: 1.57143em;
    line-height: 0.95;
}
.pagination .next a::before {
    content: "";
}
.pagination .previous a::before {
    content: "";
}
.fake-select {
    display: inline-block;
    position: relative;
    white-space: nowrap;
}
.fake-select .select-value {
    cursor: pointer;
}
.fake-select .select-list {
    background-color: #ffffff;
    border: 1px solid #d2d2cc;
    border-radius: 4px;
    position: absolute;
    top: 100%;
}
.menu-overlay .fake-select .select-list {
    display: none;
}
.fake-select.is-closed .select-list {
    left: -99999em;
}
.fake-select.is-open .select-list {
    left: 0;
}
.tabs .tab {
    background-color: #dcdcd7;
    border: 0 none;
    border-radius: 10px 10px 0 0;
    display: inline-block;
    font-size: 1.28571em;
    margin-right: 3px;
    overflow: hidden;
    position: relative;
    vertical-align: bottom;
}
.tabs .tab::after {
    bottom: -10px;
    z-index: 0;
}
.tabs .tab a {
    color: #001a73;
    display: block;
    padding: 10px 20px;
    text-decoration: none;
}
.tabs .tab img {
    display: block;
}
.tabs .tab .subtitle {
    color: #81817f;
    display: table;
    font: 0.72222em Arial,Helvetica,sans-serif;
    min-height: 3.5em;
    white-space: normal;
}
.tabs .tab.active a {
    color: #001a73;
}
.tabs .tab.active::after {
    display: none;
}
.tabs .tab.active .subtitle {
    color: #444444;
}
@media only screen and (min-width: 500px) {
.tabs .tab img {
    display: inline-block;
    float: left;
    margin-right: 10px;
}
}
.tab-content, .tab.active {
    background-color: #f0f0ec;
}
.tab-content {
    padding: 20px 0;
}
@media only screen and (min-width: 661px) {
.tabs .tab .subtitle {
    min-height: 0;
}
}
.comparison {
    background-color: #f0f0ec;
    border-radius: 10px 10px 0;
    clear: both;
    margin: 60px 10px 30px;
    padding: 10px 20px;
}
.comparison:first-child {
    margin-top: 0;
}
.comparison .title {
    font-size: 1.71429em;
    margin-bottom: 1em;
}
.comparison .columns {
    margin-bottom: 20px;
}
.comparison .content {
    background-color: #ffffff;
    border: 1px solid #d2d2cc;
    border-radius: 10px 10px 0;
    margin: 10px 0 30px;
}
.comparison .block {
    background-image: none;
    margin: -10px 0 0;
    position: relative;
}
.comparison .block .title {
    margin-top: 0;
}
.comparison .block .title.subtitled {
    font-size: 1.84615em;
}
.comparison .block .title.subtitled em {
    font-size: 0.75em;
}
.comparison .block .buttons {
    margin: 0;
}
.comparison .introduction {
    font-size: 1.23077em;
    line-height: 1.2;
}
.comparison .feature, .comparison .collapsible-features .buttons {
    margin: 0 15px 20px;
}
.comparison .feature {
    border-bottom: 1px solid #d2d2cc;
    font-size: 0.92857em;
}
.comparison .feature:first-child {
    margin-top: 20px;
}
.comparison .feature:last-child {
    border-bottom: 0 none;
}
.comparison .feature .title {
    font-size: 1.38462em;
    margin: 0 0 0.5em;
}
.comparison .has-promo-banner {
    color: #d42b1e;
}
.comparison .buttons {
    margin-bottom: 0;
}
.comparison .toggle {
    border-top: 1px solid #d2d2cc;
    color: #444444;
    display: block;
    margin: 0 20px;
    padding: 5px 0;
    text-decoration: none;
}
.comparison .toggle::before {
    content: "";
    padding-right: 0.5em;
    vertical-align: middle;
}
.comparison .toggle.toggled {
    border-top: 0 none;
}
.comparison .toggle.toggled::before {
    content: "";
}
.comparison li {
    margin-bottom: 0.5em;
}
.comparison .check-marks li {
    margin-bottom: 1em;
}
@media only screen and (max-width: 660px) {
.comparison .row {
    min-height: 0 !important;
}
}
@media only screen and (min-width: 661px) {
.columns > .content {
    padding-left: 0;
    padding-right: 0;
}
.comparison .three .column {
    width: 33.33%;
}
.comparison .content {
    margin-bottom: 0;
}
.comparison .first .content {
    margin-left: 0;
    margin-right: 14px;
}
.comparison .last .content {
    margin-left: 14px;
    margin-right: 0;
}
.comparison .block {
    padding-left: 15px;
    padding-right: 15px;
}
.comparison .block .buttons {
    bottom: 20px;
    left: 15px;
    position: absolute;
    right: 15px;
}
.comparison .block .button, .comparison .block .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .comparison .block button, .comparison .block .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .comparison .block button {
    padding-right: 40px;
}
.comparison .resizing .block .buttons {
    position: static;
}
.comparison .toggle {
    display: none;
}
}
.contact-options {
    border-top: 1px solid #d2d2cc;
    clear: both;
    margin: 30px 10px;
    padding-top: 20px;
}
.contact-options .page-title {
    margin-bottom: 30px;
}
.contact-options .block > .title {
    font-size: 1.42857em;
}
.contact-options .business-hours {
    margin-bottom: 30px;
    padding-left: 15px;
    position: relative;
}
.contact-options .business-hours.open::before, .contact-options .business-hours.closed::before {
    background-color: #00b200;
    border-radius: 100%;
    content: " ";
    display: block;
    height: 10px;
    left: 0;
    position: absolute;
    top: 0.3em;
    width: 10px;
}
.contact-options .business-hours.closed::before {
    background-color: #d52b1e;
}
.contact-options .business-hours p {
    margin-bottom: 10px;
}
.contact-options .option {
    min-height: 60px;
    padding-left: 75px;
    position: relative;
}
.contact-options .option .title {
    font-size: 20px;
    margin-bottom: 3px;
}
.contact-options .option .title .button, .contact-options .option .title .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .contact-options .option .title button, .contact-options .option .title .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .contact-options .option .title button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #001a73;
    font-size: 1em;
    padding-bottom: 0;
    padding-left: 0;
    padding-top: 0;
}
.contact-options .option .title .button.action, .contact-options .option .title .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .contact-options .option .title button, .contact-options .option .title .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .contact-options .option .title button {
    padding-right: 35px;
}
.contact-options .option .title .button.action::after, .contact-options .option .title .call-me-now-container .chat p.buttons button::after, .call-me-now-container .chat p.buttons .contact-options .option .title button::after, .contact-options .option .title .call-me-now-container .whatsapp p.buttons button::after, .call-me-now-container .whatsapp p.buttons .contact-options .option .title button::after {
    font-size: 20px;
}
.contact-options .option .title .button.exit, .contact-options .option .title .call-me-now-container .chat p.buttons button.exit, .call-me-now-container .chat p.buttons .contact-options .option .title button.exit, .contact-options .option .title .call-me-now-container .whatsapp p.buttons button.exit, .call-me-now-container .whatsapp p.buttons .contact-options .option .title button.exit {
    padding-right: 40px;
}
.contact-options .option.disabled {
    opacity: 0.3;
}
.contact-options .option.hidden {
    display: none;
}
.contact-options .option-icon {
    left: 0;
    max-height: 65px;
    max-width: 65px;
    position: absolute;
    top: 0;
}
.form {
    background-color: #f0f0ec;
    border-radius: 10px 10px 0;
    padding: 20px;
}
.form.clean {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    padding: 0;
}
.form.clean .button.clean, .form.clean .call-me-now-container .chat p.buttons button.clean, .call-me-now-container .chat p.buttons .form.clean button.clean, .form.clean .call-me-now-container .whatsapp p.buttons button.clean, .call-me-now-container .whatsapp p.buttons .form.clean button.clean {
    margin-left: 10px;
}
.form.outer {
    padding: 0;
}
.form fieldset {
    border: 0 none;
    margin: 0 0 20px;
    padding: 0;
}
.form legend {
    margin-bottom: 10px;
}
.form h2, .form h3 {
    margin-top: 0;
}
.form dl.summary {
    margin: 0 0 10px;
}
.form dl.summary dd {
    font-weight: bold;
    hyphens: none;
    margin: 0 0 10px;
}
.form .form-row {
    margin-bottom: 15px;
    max-width: 650px;
}
.form .form-subtitle {
    margin-bottom: 20px;
    margin-top: 40px;
}
.form .form-subtitle:first-child {
    margin-top: 0;
}
.form .form-subtitle h3, .form .form-subtitle a {
    margin: 0;
    padding-right: 0;
}
.form a.modify {
    float: right;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
    font-weight: normal;
    margin-top: 0.8em;
    position: relative;
}
.form .label {
    display: block;
    margin-bottom: 0.3em;
}
.form .label.large {
    color: #001a73;
    font-size: 1.53846em;
    line-height: 1.1;
    margin: 0 10px 6px 0;
    width: auto;
}
.form .field {
    display: block;
}
.form .optional {
    color: #989898;
    font-size: 0.85714em;
    padding-left: 5px;
}
.form-text .input, .form input.text, .form .textarea .input, .form .email .input, .form .date .input, .form .media-container .overview .blog-item .bottom-block .comments .input, .media-container .overview .blog-item .bottom-block .form .comments .input, .form .event-container .overview .blog-item .bottom-block .comments .input, .event-container .overview .blog-item .bottom-block .form .comments .input, .form .auteur-container .overview .auteur .bottom-block .comments .input, .auteur-container .overview .auteur .bottom-block .form .comments .input, .form .month .input, .form .time .input, .form .dob .input, .form .select.multiple .input, .form .select .input {
    border: 1px solid #c8c8c2;
    border-radius: 5px;
    color: #444444;
    outline-color: #ffc36e;
}
.form .text .input, .form input.text, .form .textarea .input, .form .email .input, .form .date .input, .form .media-container .overview .blog-item .bottom-block .comments .input, .media-container .overview .blog-item .bottom-block .form .comments .input, .form .event-container .overview .blog-item .bottom-block .comments .input, .event-container .overview .blog-item .bottom-block .form .comments .input, .form .auteur-container .overview .auteur .bottom-block .comments .input, .auteur-container .overview .auteur .bottom-block .form .comments .input, .form .month .input, .form .time .input, .form .dob .input, .form .select.multiple .input {
    box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.1) inset;
    padding: 6px 3%;
    width: 97%;
}
.form .text .input:focus, .form input.text:focus, .form .textarea .input:focus, .form .email .input:focus, .form .date .input:focus, .form .media-container .overview .blog-item .bottom-block .comments .input:focus, .media-container .overview .blog-item .bottom-block .form .comments .input:focus, .form .event-container .overview .blog-item .bottom-block .comments .input:focus, .event-container .overview .blog-item .bottom-block .form .comments .input:focus, .form .auteur-container .overview .auteur .bottom-block .comments .input:focus, .auteur-container .overview .auteur .bottom-block .form .comments .input:focus, .form .month .input:focus, .form .time .input:focus, .form .dob .input:focus, .form .select.multiple .input:focus {
    border-color: #717171;
}
.form .text .input[readonly], .form .text .input[disabled], .form input.text[readonly], .form .textarea .input[readonly], .form .email .input[readonly], .form .date .input[readonly], .form .media-container .overview .blog-item .bottom-block .comments .input[readonly], .media-container .overview .blog-item .bottom-block .form .comments .input[readonly], .form .event-container .overview .blog-item .bottom-block .comments .input[readonly], .event-container .overview .blog-item .bottom-block .form .comments .input[readonly], .form .auteur-container .overview .auteur .bottom-block .comments .input[readonly], .auteur-container .overview .auteur .bottom-block .form .comments .input[readonly], .form .month .input[readonly], .form .time .input[readonly], .form .dob .input[readonly], .form .select.multiple .input[readonly], .form input.text[disabled], .form .textarea .input[disabled], .form .email .input[disabled], .form .date .input[disabled], .form .media-container .overview .blog-item .bottom-block .comments .input[disabled], .media-container .overview .blog-item .bottom-block .form .comments .input[disabled], .form .event-container .overview .blog-item .bottom-block .comments .input[disabled], .event-container .overview .blog-item .bottom-block .form .comments .input[disabled], .form .auteur-container .overview .auteur .bottom-block .comments .input[disabled], .auteur-container .overview .auteur .bottom-block .form .comments .input[disabled], .form .month .input[disabled], .form .time .input[disabled], .form .dob .input[disabled], .form .select.multiple .input[disabled] {
    background-color: #f0f0ec;
    color: #989898;
}
.form span#select-additionSelectBoxItContainer {
    box-shadow: none;
    padding: 0;
}
.form .form-row .input {
    margin-bottom: 10px;
    max-width: 93%;
}
.form .form-row .input.mini {
    width: 2.5em;
}
.form .form-row .input.tiny {
    width: 4em;
}
.form .form-row .input.small {
    width: 30.7%;
}
.form .form-row .input.medium {
    width: 50%;
}
.form .form-row .input.large {
    width: 64%;
}
.form .textarea .input {
    max-width: 100%;
}
.form .date .input, .form .media-container .overview .blog-item .bottom-block .comments .input, .media-container .overview .blog-item .bottom-block .form .comments .input, .form .event-container .overview .blog-item .bottom-block .comments .input, .event-container .overview .blog-item .bottom-block .form .comments .input, .form .auteur-container .overview .auteur .bottom-block .comments .input, .auteur-container .overview .auteur .bottom-block .form .comments .input, .form .month .input, .form .time .input {
    width: 12.5em;
}
.form .dob .input.date, .form .dob .media-container .overview .blog-item .bottom-block .input.comments, .media-container .overview .blog-item .bottom-block .form .dob .input.comments, .form .dob .event-container .overview .blog-item .bottom-block .input.comments, .event-container .overview .blog-item .bottom-block .form .dob .input.comments, .form .dob .auteur-container .overview .auteur .bottom-block .input.comments, .auteur-container .overview .auteur .bottom-block .form .dob .input.comments, .form .dob .input.month {
    width: 2em;
}
.form .dob .input.year {
    width: 4em;
}
.form .select .input {
    max-width: 85%;
    min-width: 150px;
    width: 100%;
}
.form .select .input.selectboxit-container {
    border: 0 none;
}
.form .checkboxes .checkboxes {
    margin-left: 1.5em;
}
.form .checkboxes .input {
    margin-right: 0.3em;
    width: auto !important;
}
.form .checkboxes.single .input {
    float: left;
    margin-top: 0.3em;
}
.form .checkboxes.single .label {
    display: block;
    float: none;
    margin-left: 1.5em;
    max-height: none;
    width: auto;
}
.form .inline .checkboxes li {
    display: inline-block;
    margin: 0;
    padding-right: 20px;
}
.form .inline .checkboxes li:last-child {
    padding-right: 0;
}
.form .notification.error {
    color: #e45123;
}
.form .message {
    border-radius: 3px;
    display: block;
    font-size: 0.92857em;
    line-height: 1.3;
    margin-top: 9px;
    padding: 5px 10px;
    position: relative;
    text-rendering: optimizelegibility;
}
.form .message::after {
    content: " ";
    display: block;
    height: 12px;
    left: 20px;
    position: absolute;
    top: -6px;
    transform: rotate(45deg);
    width: 12px;
}
.form .message.error {
    color: #ffffff;
}
.form .message.error, .form .message.error::after {
    background-color: #e45123;
}
.form .form-row.error .input.error {
    border: 1px solid #e45123;
}
.form .submit-buttons {
    margin-top: 20px;
}
.form .submit-buttons .link {
    color: #444444;
    float: right;
    line-height: 1.9;
}
.form .submit-buttons .button, .form .submit-buttons .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .form .submit-buttons button, .form .submit-buttons .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .form .submit-buttons button {
    float: right;
    margin-left: 30px;
}
.form .submit-buttons .button .input, .form .submit-buttons .call-me-now-container .chat p.buttons button .input, .call-me-now-container .chat p.buttons .form .submit-buttons button .input, .form .submit-buttons .call-me-now-container .whatsapp p.buttons button .input, .call-me-now-container .whatsapp p.buttons .form .submit-buttons button .input {
    margin-bottom: 0;
}
.form.filter-form {
    background: transparent none repeat scroll 0 0;
    border-color: #d2d2cc;
    border-radius: 0;
    border-style: solid;
    border-width: 2px 0 1px;
    margin-top: 0;
    padding: 20px 0 10px;
}
.form.loading-form {
    background-image: url("/sites/all/themes/developer/img/killer-apps/loader.gif");
    background-position: center 70%;
    background-repeat: no-repeat;
    min-height: 60px;
}
.form.spinner {
    position: relative;
}
@media only screen and (min-width: 661px) {
.form .form-row {
    margin-bottom: 10px;
}
.form .form-row.error .label {
    max-height: 1em;
}
.secondary .form .form-row .field, .secondary .form .form-row .message, .narrow-forms .form .form-row .field, .narrow-forms .form .form-row .message, .form .form-row.narrow .field, .form .form-row.narrow .message {
    margin-left: 0;
}
.form .form-row .input {
    margin-bottom: 0;
}
.form .form-row.two-inputs .label {
    display: block;
}
.form .form-row.two-inputs .input {
    float: left;
    margin-right: 2%;
    min-width: 0;
    width: 49%;
}
.form .form-row.two-inputs .input.last {
    margin-right: 0;
}
.form .label {
    float: left;
    padding-bottom: 5px;
    padding-top: 5px;
    width: 35%;
}
.form dl.summary dt {
    box-sizing: border-box;
    clear: left;
    display: block;
    float: left;
    padding-right: 30px;
    width: 35%;
}
.form dl.summary dd {
    margin-left: 35%;
}
.form .optional {
    display: block;
    padding-left: 0;
}
.form .text .input, .form input.text, .form .textarea .input, .form .email .input, .form .date .input, .form .media-container .overview .blog-item .bottom-block .comments .input, .media-container .overview .blog-item .bottom-block .form .comments .input, .form .event-container .overview .blog-item .bottom-block .comments .input, .event-container .overview .blog-item .bottom-block .form .comments .input, .form .auteur-container .overview .auteur .bottom-block .comments .input, .auteur-container .overview .auteur .bottom-block .form .comments .input, .form .month .input, .form .time .input, .form .dob .input, .form .select.multiple .input, .form .date .input, .form .media-container .overview .blog-item .bottom-block .comments .input, .media-container .overview .blog-item .bottom-block .form .comments .input, .form .event-container .overview .blog-item .bottom-block .comments .input, .event-container .overview .blog-item .bottom-block .form .comments .input, .form .auteur-container .overview .auteur .bottom-block .comments .input, .auteur-container .overview .auteur .bottom-block .form .comments .input, .form .month .input, .form .time .input, .form .textarea .input, .form .email .input {
    padding-left: 1.5%;
    padding-right: 1.5%;
}
.form .select .input {
    max-width: 55%;
}
.form .select .large.label + .input {
    vertical-align: sub;
}
.form .field, .form .message {
    margin-left: 35%;
}
.form .message {
    display: inline-block;
}
.secondary .form .label, .narrow-forms .form .label, .form.narrow .label {
    display: inline;
    float: none;
    margin-bottom: 0;
    width: auto;
}
.secondary .form .field, .secondary .form .message, .narrow-forms .form .field, .narrow-forms .form .message, .form.narrow .field, .form.narrow .message {
    margin-left: 0;
}
.secondary .form .optional, .narrow-forms .form .optional, .form.narrow .optional {
    display: inline;
    padding-left: 5px;
}
.secondary .form .message, .narrow-forms .form .message, .form.narrow .message {
    display: block;
}
.secondary .form .text .input, .secondary .form input.text, .secondary .form .textarea .input, .secondary .form .email .input, .secondary .form .date .input, .secondary .form .media-container .overview .blog-item .bottom-block .comments .input, .secondary .media-container .overview .blog-item .bottom-block .form .comments .input, .media-container .overview .blog-item .bottom-block .secondary .form .comments .input, .secondary .form .event-container .overview .blog-item .bottom-block .comments .input, .secondary .event-container .overview .blog-item .bottom-block .form .comments .input, .event-container .overview .blog-item .bottom-block .secondary .form .comments .input, .secondary .form .auteur-container .overview .auteur .bottom-block .comments .input, .secondary .auteur-container .overview .auteur .bottom-block .form .comments .input, .auteur-container .overview .auteur .bottom-block .secondary .form .comments .input, .secondary .form .month .input, .secondary .form .time .input, .secondary .form .dob .input, .secondary .form .select.multiple .input, .secondary .form .date .input, .secondary .form .media-container .overview .blog-item .bottom-block .comments .input, .media-container .overview .blog-item .bottom-block .secondary .form .comments .input, .secondary .form .event-container .overview .blog-item .bottom-block .comments .input, .event-container .overview .blog-item .bottom-block .secondary .form .comments .input, .secondary .form .auteur-container .overview .auteur .bottom-block .comments .input, .auteur-container .overview .auteur .bottom-block .secondary .form .comments .input, .secondary .form .month .input, .secondary .form .time .input, .secondary .form .textarea .input, .secondary .form .email .input, .narrow-forms .form .text .input, .narrow-forms .form input.text, .narrow-forms .form .textarea .input, .narrow-forms .form .email .input, .narrow-forms .form .date .input, .narrow-forms .form .media-container .overview .blog-item .bottom-block .comments .input, .narrow-forms .media-container .overview .blog-item .bottom-block .form .comments .input, .media-container .overview .blog-item .bottom-block .narrow-forms .form .comments .input, .narrow-forms .form .event-container .overview .blog-item .bottom-block .comments .input, .narrow-forms .event-container .overview .blog-item .bottom-block .form .comments .input, .event-container .overview .blog-item .bottom-block .narrow-forms .form .comments .input, .narrow-forms .form .auteur-container .overview .auteur .bottom-block .comments .input, .narrow-forms .auteur-container .overview .auteur .bottom-block .form .comments .input, .auteur-container .overview .auteur .bottom-block .narrow-forms .form .comments .input, .narrow-forms .form .month .input, .narrow-forms .form .time .input, .narrow-forms .form .dob .input, .narrow-forms .form .select.multiple .input, .narrow-forms .form .date .input, .narrow-forms .form .media-container .overview .blog-item .bottom-block .comments .input, .media-container .overview .blog-item .bottom-block .narrow-forms .form .comments .input, .narrow-forms .form .event-container .overview .blog-item .bottom-block .comments .input, .event-container .overview .blog-item .bottom-block .narrow-forms .form .comments .input, .narrow-forms .form .auteur-container .overview .auteur .bottom-block .comments .input, .auteur-container .overview .auteur .bottom-block .narrow-forms .form .comments .input, .narrow-forms .form .month .input, .narrow-forms .form .time .input, .narrow-forms .form .textarea .input, .narrow-forms .form .email .input, .form.narrow .text .input, .form.narrow input.text, .form.narrow .textarea .input, .form.narrow .email .input, .form.narrow .date .input, .form.narrow .media-container .overview .blog-item .bottom-block .comments .input, .media-container .overview .blog-item .bottom-block .form.narrow .comments .input, .form.narrow .event-container .overview .blog-item .bottom-block .comments .input, .event-container .overview .blog-item .bottom-block .form.narrow .comments .input, .form.narrow .auteur-container .overview .auteur .bottom-block .comments .input, .auteur-container .overview .auteur .bottom-block .form.narrow .comments .input, .form.narrow .month .input, .form.narrow .time .input, .form.narrow .dob .input, .form.narrow .select.multiple .input, .form.narrow .date .input, .form.narrow .media-container .overview .blog-item .bottom-block .comments .input, .media-container .overview .blog-item .bottom-block .form.narrow .comments .input, .form.narrow .event-container .overview .blog-item .bottom-block .comments .input, .event-container .overview .blog-item .bottom-block .form.narrow .comments .input, .form.narrow .auteur-container .overview .auteur .bottom-block .comments .input, .auteur-container .overview .auteur .bottom-block .form.narrow .comments .input, .form.narrow .month .input, .form.narrow .time .input, .form.narrow .textarea .input, .form.narrow .email .input {
    padding-left: 3%;
    padding-right: 3%;
}
.secondary .form .select .input, .narrow-forms .form .select .input, .form.narrow .select .input {
    min-width: 80px;
}
.form.filter-form .label {
    padding-right: 20px;
    width: auto;
}
.form.filter-form .field {
    margin-left: 0;
}
}
.js select.input {
    visibility: hidden;
}
.js.loaded select.input {
    visibility: visible;
}
.input-clean {
    border: 1px solid #c8c8c2;
    border-radius: 5px;
    color: #444444;
    outline-color: #ffc36e;
    width: 95%;
}
.input-clean.hidden {
    display: none;
}
.selectboxit-btn {
    max-width: 100%;
    width: 100%;
}
.selectboxit-option-anchor {
    text-decoration: none;
}
.selectboxit-list .selectboxit-focus .selectboxit-option-anchor {
    background: #001a73 none repeat scroll 0 0;
}
.form-row-clean {
    margin: 5px 0;
}
.form-row-clean.hidden {
    display: none;
}
.wizard-menu .title {
    margin-bottom: 12px;
    margin-top: 52px;
}
.wizard-menu li {
    margin-bottom: 10px;
}
.wizard-menu li.inactive {
    color: #cccccc;
}
.conditional-display.hidden {
    display: none;
}
.select-native {
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.1) inset;
    box-sizing: border-box;
    height: 40px;
    overflow: hidden;
    position: relative;
    width: 100%;
}
.select-native .arrow {
    bottom: 0;
    left: auto;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    transform-origin: center center 0;
    transition: all 400ms cubic-bezier(0.55, 0.085, 0.68, 0.53) 0s;
    width: 30px;
    z-index: 1;
}
.select-native .arrow::after {
    bottom: auto;
    content: "";
    display: block;
    font-size: 25px;
    height: 20px;
    left: 0;
    line-height: 24px;
    margin-top: -10px;
    overflow: hidden;
    position: absolute;
    right: auto;
    top: 50%;
    transform-origin: center center 0;
}
.select-native select {
    -moz-appearance: none;
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    display: block;
    height: 40px;
    line-height: 40px;
    outline: medium none;
    padding-left: 10px;
    position: relative;
    width: 120%;
    z-index: 2;
}
.select-native select:focus + .arrow {
    transform: rotate(180deg);
}
div.blog .hero-image {
    margin: 0;
    padding: 0;
}
.hero-image {
    clear: both;
    margin-bottom: 40px;
    padding: 0 10px;
    position: relative;
}
.hero-image::after {
    clear: both;
    content: " ";
    display: block;
}
.hero-image img.hero {
    border-radius: 10px 10px 0 0;
    float: left;
    max-width: 100%;
}
.hero-image .subtitle {
    color: #001a73;
    margin: 30px 0 0 30px;
    max-width: 540px;
}
.content-bar .hero-image {
    padding: 0;
}
.content-bar .hero-image img.hero {
    border-radius: 0;
}
.hero-image .block {
    background-color: #f0f0ec;
    border-radius: 10px 10px 0;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
    clear: both;
    float: none;
    font-size: 1em;
    left: auto;
    margin: 0;
    padding: 15px 0;
    top: auto;
}
.hero-image .block .title, .hero-image .block h3 {
    margin: 0 0 15px;
}
.hero-image .block .title {
    font-size: 1.84615em;
    margin-bottom: 1em;
}
.hero-image .block .title.subtitled {
    margin-bottom: 5px;
}
.hero-image .block .title.larger {
    font-size: 2.30769em;
}
.hero-image .block .buttons {
    margin-top: 1em;
}
.hero-image .block .button, .hero-image .block .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .hero-image .block button, .hero-image .block .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .hero-image .block button {
    margin-bottom: 10px;
}
.hero-image .block .separated {
    border-bottom: 0 none;
}
.hero-image .block .separated::after {
    z-index: 0;
}
.hero-image .block.alternate {
    background-color: #001a73;
    color: #ffffff;
}
.hero-image .block.alternate .title {
    font-size: 1.84615em;
}
@media only screen and (max-width: 1000px) {
.hero-image .block {
    border-radius: 0 0 0 10px;
    width: auto;
}
}
@media only screen and (min-width: 1001px) {
.hero-image img.hero {
    border-radius: 10px 10px 0;
}
.hero-image .block {
    left: 30px;
    margin: 0;
    position: absolute;
    top: 20px;
}
.hero-image .block.bottom {
    bottom: -20px;
    top: auto;
}
.hero-image .block.right {
    left: auto;
    right: 30px;
}
}
.cover-image {
    background: rgba(0, 0, 0, 0) none no-repeat scroll center center / cover ;
    min-height: 300px;
    transform: translate3d(0px, 0px, 0px);
    transition: background-position-y 0.5s ease 0s;
}
.js.bgsizecover .cover-image .image {
    visibility: hidden;
}
.cover-image.align-top {
    background-position: center top;
}
.cover-image.align-bottom {
    background-position: center bottom;
}
.cover-image.align-top-right {
    background-position: right top;
}
@media only screen and (min-width: 661px) {
.cover-image {
    min-height: 400px;
}
}
@media only screen and (min-width: 1001px) {
.cover-image {
    min-height: 575px;
}
}
.cover-video {
    background-size: cover;
    overflow: hidden;
}
.cover-video img {
    float: left;
    height: 100%;
    min-height: 100%;
}
.cover-video .video-js {
    display: block;
    height: 100%;
    left: -999em;
    min-height: 300px;
    position: absolute;
    top: 0;
    z-index: 10;
}
@media only screen and (min-width: 661px) {
.cover-video .video-js {
    min-height: 400px;
}
}
@media only screen and (min-width: 1001px) {
.cover-video .video-js {
    min-height: 550px;
}
}
.cover-video .pause-button, .cover-video .play-button {
    background-color: transparent;
    border: 0.2em solid #ffffff;
    border-radius: 4.28571em;
    color: #ffffff;
    cursor: pointer;
    height: 4.28571em;
    left: 50%;
    line-height: 4.28571em;
    margin-left: -2.14286em;
    margin-top: -2.14286em;
    overflow: hidden;
    position: absolute;
    text-decoration: none;
    text-indent: 4.38571em;
    top: 50%;
    transition: all 0.3s ease 0s, top 0.5s ease 0s;
    white-space: nowrap;
    width: 4.28571em;
    will-change: transform, width, padding-right, border-color, color;
    z-index: 20;
}
.cover-video .play-button::before {
    border-color: transparent transparent transparent #ffffff;
    border-style: solid;
    border-width: 12px 0 12px 18px;
    content: "";
    height: 0;
    left: 2.14286em;
    margin-left: -6px;
    margin-top: -12px;
    position: absolute;
    top: 50%;
    transition: inherit;
    width: 0;
}
.cover-video .play-button:hover {
    border-color: #001a73;
    color: #001a73;
    padding-right: 2.14286em;
    transform: translateX(-33.333%);
    width: 190px;
}
.cover-video .play-button:hover::before {
    border-left-color: #001a73;
}
.cover-video .pause-button {
    display: none;
}
.cover-video .pause-button::before {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: -moz-use-text-color #ffffff;
    border-image: none;
    border-style: none solid;
    border-width: medium 10px;
    content: "";
    height: 36px;
    left: 50%;
    margin-left: -13px;
    margin-top: -17px;
    position: absolute;
    top: 50%;
    transition: inherit;
    width: 6px;
}
.cover-video.video-playing .video-js {
    display: block;
    left: 0;
}
.cover-video.video-playing .play-button {
    opacity: 0;
    top: 100%;
}
.is-ios .cover-video.video-playing .play-button {
    display: none;
}
.cover-video.video-playing + .overlay-block {
    display: none !important;
    opacity: 0 !important;
}
.cover-video.video-playing .pause-button {
    display: block;
    opacity: 0;
}
.is-ios .cover-video.video-playing .pause-button {
    display: none;
}
.cover-video.video-playing:hover .pause-button {
    opacity: 1;
}
.cover-video.video-paused .play-button {
    opacity: 1;
    top: 50%;
}
.cover-video.video-paused:hover .pause-button, .cover-video.video-paused .pause-button {
    opacity: 0 !important;
    top: 100%;
}
@media only screen and (min-width: 661px) {
.cover-video {
    min-height: 400px;
}
}
@media only screen and (min-width: 1001px) {
.cover-video {
    min-height: 540px;
}
}
.collapsible-toggle.bordered, dl.collapsible-items dt.bordered, .collapsible.bordered {
    border-color: #c8c8c2;
    border-style: solid;
    border-width: 0;
}
.collapsible-toggle, dl.collapsible-items dt {
    cursor: pointer;
    padding-left: 25px;
    position: relative;
}
.collapsible-toggle::before, dl.collapsible-items dt::before {
    background-color: #001a73;
    border-radius: 3px;
    color: #ffffff;
    content: "-";
    display: block;
    font: 14px/13px Arial,Helvetica,sans-serif;
    height: 16px;
    left: 0;
    margin-top: 4px;
    position: absolute;
    text-align: center;
    width: 16px;
}
.collapsible-toggle.toggled::before, dl.collapsible-items dt.toggled::before {
    content: "+";
    line-height: 16px;
}
.collapsible-toggle.bordered, dl.collapsible-items dt.bordered {
    border-top-width: 1px;
    margin-bottom: 0;
    padding-bottom: 10px;
    padding-top: 10px;
}
.collapsible-toggle.bordered.toggled, dl.collapsible-items dt.bordered.toggled {
    border-bottom-width: 1px;
}
.collapsible-toggle.bordered.toggling, dl.collapsible-items dt.bordered.toggling {
    border-bottom-width: 0;
}
.collapsible-toggle.toggle-plus-minus::before, dl.collapsible-items dt.toggle-plus-minus::before {
    background-color: #444444;
    bottom: auto;
    content: "";
    height: 2px;
    left: auto;
    margin-top: -1px;
    position: absolute;
    right: 0;
    top: 50%;
    width: 14px;
}
.collapsible-toggle.toggle-plus-minus::after, dl.collapsible-items dt.toggle-plus-minus::after {
    background-color: #444444;
    bottom: auto;
    content: "";
    display: block;
    height: 14px;
    left: auto;
    margin-top: -7px;
    position: absolute;
    right: 6px;
    top: 50%;
    transform: rotate(90deg);
    transform-origin: center center 0;
    transition: all 0.5s ease 0s;
    width: 2px;
}
.collapsible-toggle.toggle-plus-minus.toggled::after, dl.collapsible-items dt.toggle-plus-minus.toggled::after {
    transform: rotate(0deg);
}
.collapsible-toggle ~ .collapsible-toggle.bordered, dl.collapsible-items dt ~ .collapsible-toggle.bordered, dl.collapsible-items .collapsible-toggle ~ dt.bordered, dl.collapsible-items dt ~ dt.bordered {
    border-top: 0 none;
    margin-top: 0;
}
.collapsible {
    overflow: hidden;
    position: relative;
    transform: translateZ(0px);
}
.collapsible.bordered {
    border-bottom-width: 1px;
}
dl.collapsible-items {
    margin-top: 0;
}
dl.collapsible-items dt, dl.collapsible-items dd {
    padding-left: 25px;
}
dl.collapsible-items dt {
    font-weight: bold;
    margin-top: 1em;
    transition: padding 0.5s ease 0s;
}
dl.collapsible-items dt::before {
    background-color: #ed8c00;
    color: #ffffff;
    margin-top: 2px;
}
dl.collapsible-items dt.toggled {
    border-bottom: 1px solid #d2d2cc;
    font-weight: normal;
    padding-bottom: 10px;
}
dl.collapsible-items dt.toggling {
    border-bottom: 0 none;
}
dl.collapsible-items dt:first-child {
    margin-top: 0;
}
dl.collapsible-items dd {
    border-bottom: 1px solid #d2d2cc;
    margin: 0;
    overflow: hidden;
    padding-bottom: 10px;
}
.collapsible-list {
    overflow: hidden;
}
.collapsible-list-toggle a {
    color: #ed8c00;
    padding-left: 20px;
    position: relative;
    text-decoration: underline;
}
.collapsible-list-toggle a::before {
    content: "-";
    font-size: 1.2em;
    left: 4px;
    line-height: 1.5;
    max-height: 1em;
    overflow: hidden;
    position: absolute;
    text-decoration: none;
}
.collapsible-list-toggle a.collapsed::before {
    content: "+";
}
.collapsible-text {
    border-bottom: 1px solid #d2d2cc;
    padding-bottom: 23px;
    transform: translateZ(0px);
}
@media only screen and (max-width: 660px) {
.collapsible-text {
    padding-bottom: 10px;
}
.collapsible-text .collapsible {
    padding-bottom: 12px;
    padding-top: 14px;
}
.collapsible-text .clean-list {
    margin-bottom: 0;
}
}
@media only screen and (max-width: 660px) {
.collapsible-text:first-of-type {
    border-top: 1px solid #d2d2cc;
    margin-top: 30px;
}
}
.collapsible-text .title {
    margin-top: 18px;
    padding-left: 0;
}
@media only screen and (max-width: 660px) {
.collapsible-text .title {
    font-size: 18px;
    margin-top: 11px;
}
}
.collapsible-text .title::before {
    background-color: #001a73;
}
.collapsible-text .title::after {
    background-color: #001a73;
}
@media only screen and (max-width: 660px) {
.collapsible-text.grid-4 {
    margin-left: 0;
    margin-right: 0;
}
}
@media only screen and (min-width: 661px) {
.collapsible-text.no-border {
    border-bottom: 0 none;
}
.collapsible-text .title {
    cursor: default;
}
.collapsible-text .title::before {
    display: none;
}
.collapsible-text .title::after {
    display: none;
}
.collapsible-text .collapsible {
    display: block !important;
    height: auto !important;
}
}
.collapsible-text .collapsible p:last-of-type {
    margin-bottom: 0;
}
@media only screen and (max-width: 660px) {
.table-wrapper {
    margin-bottom: 20px;
    overflow: hidden;
    position: relative;
}
.table-wrapper::after {
    bottom: 20px;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5);
    content: " ";
    position: absolute;
    right: 0;
    top: 0;
    width: 1px;
}
.table-wrapper.scroll-end::after {
    display: none;
}
.table-wrapper table {
    margin-bottom: 0;
}
.table-wrapper td, .table-wrapper th {
    min-height: 1em;
}
.table-wrapper .scrollable-column {
    overflow-x: auto;
}
.table-wrapper .fixed-column {
    box-shadow: 1px 0 10px 0 rgba(0, 0, 0, 0.2);
    float: left;
    min-width: 110px;
    width: 45%;
}
.table-wrapper .fixed-column .fixed {
    padding-left: 0;
    padding-right: 5px;
}
.table-wrapper .scrollable-column {
    margin-left: 45%;
    width: 55%;
}
.table-wrapper .scrollable-column .fixed {
    display: none;
}
}
@media only screen and (min-width: 661px) {
.table-wrapper {
    overflow: visible;
}
.table-wrapper .fixed-column {
    display: none;
}
}
.js .tooltip, .js .tooltipped .icon {
    cursor: pointer;
    display: inline-block;
    font-size: 12px;
    height: 1em;
    line-height: 1;
    overflow: hidden;
    position: relative;
    width: 1em;
}
.js .tooltip::before, .js .tooltipped .icon::before {
    color: #ed8c00;
    content: "";
}
.js .tooltip.light, .js .tooltipped .icon.light {
    font-size: 14px;
}
.js .tooltip.light::before, .js .tooltipped .icon.light::before {
    color: #ffffff;
}
.js .tooltip, .js .tooltipped .icon {
    margin-left: 4px;
}
.js .tooltip-text {
    display: none;
}
.qtip-default {
    background-color: transparent;
    border-color: #ed8c00;
    border-width: 0;
    color: #ffffff;
    font-size: 0.85714em;
    line-height: 1.3;
    max-width: 70%;
}
.qtip-default .qtip-content {
    background-color: #ed8c00;
    border-radius: 10px;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 10px 15px;
}
.qtip-default.light {
    border-color: #ffffff;
    font-size: 0.85714em;
}
.qtip-default.light .qtip-content {
    background-color: #ffffff;
    color: #001a73;
}
.qtip-default h1, .qtip-default h2, .qtip-default h3, .qtip-default h4 {
    color: #ffffff;
}
.qtip-default p:last-child {
    margin-bottom: 0;
}
.qtip-default.indicator .qtip-content {
    background-color: transparent;
    box-shadow: none;
    color: #001a73;
    text-transform: uppercase;
}
@media only screen and (min-width: 661px) {
.qtip-default {
    max-width: 320px;
    width: auto;
}
}
@media only screen and (min-width: 1001px) {
.qtip-default.indicator {
    display: none !important;
}
}
.smart-engage {
    min-height: 120px;
    position: relative;
}
.smart-engage h1.title {
    font-size: 1.8em;
    max-width: 60%;
}
.smart-engage img.person {
    max-width: 110px;
    position: absolute;
    right: 10px;
    top: 1px;
}
.smart-engage a.decline {
    display: none;
}
.smart-engage .close {
    color: #001a73;
    cursor: pointer;
    display: none;
    font-family: Arial,sans-serif;
    font-size: 1.7em;
    position: absolute;
    right: 10px;
    top: 3px;
}
.smart-engage.fold-out {
    background: white none repeat scroll 0 0;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    bottom: 0;
    box-shadow: 3px 4px 22px rgba(0, 0, 0, 0.4);
    margin-bottom: 0;
    min-height: 170px;
    position: fixed;
    right: 25px;
    width: 220px;
    z-index: 10;
}
.smart-engage.fold-out img.person {
    bottom: 0;
    top: auto;
}
.smart-engage.fold-out .close, .smart-engage.fold-out a.decline {
    display: block;
}
.mfp-bg {
    background: #363636 none repeat scroll 0 0;
    opacity: 0.7;
}
.mfp-close-btn-in .mfp-close {
    color: #001a73;
    font-size: 2.6em;
}
.gallery-lightbox .mfp-close {
    filter: none;
    height: 35px;
    line-height: 1;
    opacity: 1;
    overflow: hidden;
    padding: 0;
    right: -10px;
    text-indent: -9999em;
    top: -10px;
    width: 35px;
}
.gallery-lightbox .mfp-close::after {
    color: #444444;
    content: "";
}
.gallery-lightbox .mfp-arrow::before {
    display: none;
}
.gallery-lightbox .mfp-arrow::after {
    border: 0 none;
    content: "";
    font-size: 4em;
    height: auto;
    width: auto;
}
.gallery-lightbox .mfp-arrow.mfp-arrow-right::after {
    content: "";
}
.gallery-lightbox .mfp-figure {
    max-width: 940px;
}
.gallery-lightbox .mfp-figure::after {
    bottom: 50px;
}
.gallery-lightbox .mfp-img {
    padding: 0;
}
.gallery-lightbox .mfp-bottom-bar {
    background-color: #ffffff;
    box-sizing: border-box;
    margin-top: -10px;
    padding: 10px 20px;
}
.gallery-lightbox .mfp-title {
    color: #444444;
}
.gallery-lightbox .mfp-counter {
    right: 20px;
    top: 10px;
}
.lightbox-alert {
    background-color: #ffffff;
    margin: 0 auto;
}
@media only screen and (min-width: 661px) {
.lightbox-alert {
    max-width: 460px;
    width: 100%;
}
}
.lightbox-alert .subtitle {
    color: #ed8c00;
    font-size: 1.28571em;
    margin-top: -1em;
}
.lightbox-alert .popup-content {
    font-size: 1em;
    margin-bottom: 3.5em;
}
.lightbox-alert .buttons {
    text-align: right;
}
.lightbox-alert .buttons .button, .lightbox-alert .call-me-now-container .chat p.buttons button, .call-me-now-container .chat .lightbox-alert p.buttons button, .lightbox-alert .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp .lightbox-alert p.buttons button {
    margin-bottom: 0;
    text-align: left;
}
.lightbox-alert .buttons .button:only-child, .lightbox-alert .call-me-now-container .chat p.buttons button:only-child, .call-me-now-container .chat .lightbox-alert p.buttons button:only-child, .lightbox-alert .call-me-now-container .whatsapp p.buttons button:only-child, .call-me-now-container .whatsapp .lightbox-alert p.buttons button:only-child {
    min-width: 45%;
}
.lightbox-alert .buttons .button:last-child, .lightbox-alert .call-me-now-container .chat p.buttons button:last-child, .call-me-now-container .chat .lightbox-alert p.buttons button:last-child, .lightbox-alert .call-me-now-container .whatsapp p.buttons button:last-child, .call-me-now-container .whatsapp .lightbox-alert p.buttons button:last-child {
    margin-right: 0;
}
.lightbox-dialog .mfp-content {
    background-color: #ffffff;
    border-radius: 10px 10px 0;
    box-shadow: 3px 4px 22px rgba(0, 0, 0, 0.4);
    margin: 0 auto;
    max-width: 350px;
    padding: 15px 20px;
    width: 80%;
}
.lightbox-dialog .mfp-close {
    color: #ed8c00;
    font-size: 1em;
    height: auto;
    width: auto;
}
.lightbox-dialog .title {
    color: #ed8c00;
    margin-bottom: 10px;
}
.lightbox-dialog .button.cancel, .lightbox-dialog .call-me-now-container .chat p.buttons button.cancel, .call-me-now-container .chat p.buttons .lightbox-dialog button.cancel, .lightbox-dialog .call-me-now-container .whatsapp p.buttons button.cancel, .call-me-now-container .whatsapp p.buttons .lightbox-dialog button.cancel {
    font-size: 0.92857em;
    padding: 7px 20px;
}
.lightbox-dialog .button.cancel::before, .lightbox-dialog .call-me-now-container .chat p.buttons button.cancel::before, .call-me-now-container .chat p.buttons .lightbox-dialog button.cancel::before, .lightbox-dialog .call-me-now-container .whatsapp p.buttons button.cancel::before, .call-me-now-container .whatsapp p.buttons .lightbox-dialog button.cancel::before {
    left: -5px;
}
.lightbox-dialog .form-row.checkbox .label {
    padding-left: 20px;
    position: relative;
}
.lightbox-dialog .form-row.checkbox .input {
    left: 0;
    position: absolute;
    top: 0.1em;
}
.lightbox-phonenumbers .mfp-close, .lightbox-socialbox .mfp-close {
    color: #001a73;
    font-size: 2.6em;
    margin-right: 10px;
    position: absolute;
}
.lightbox-phonenumbers h2, .lightbox-socialbox h2 {
    margin-top: 10px;
}
.lightbox-phonenumbers .item h3, .lightbox-socialbox .item h3 {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 1em;
    font-weight: bold;
    margin: 0 0 2px;
    padding: 0;
}
.lightbox-phonenumbers .item p.phonenumber, .lightbox-socialbox .item p.phonenumber {
    color: #001a73;
    font-size: 1.3em;
    margin: 0;
    padding: 0;
}
.lightbox-phonenumbers .item p.phonenumber a, .lightbox-socialbox .item p.phonenumber a {
    color: #001a73;
}
.lightbox-phonenumbers .item.highlighted h3, .lightbox-phonenumbers .item.highlighted p.phonenumber, .lightbox-socialbox .item.highlighted h3, .lightbox-socialbox .item.highlighted p.phonenumber {
    color: #ed8c00;
}
.lightbox-phonenumbers .item.highlighted h3 a, .lightbox-phonenumbers .item.highlighted p.phonenumber a, .lightbox-socialbox .item.highlighted h3 a, .lightbox-socialbox .item.highlighted p.phonenumber a {
    color: #ed8c00;
}
.mfp-wrap .call-me-now-container {
    background: #ffffff none repeat scroll 0 0;
    border-radius: 8px 8px 0;
    box-shadow: 3px 4px 22px rgba(0, 0, 0, 0.4);
    margin: 20px auto;
    max-width: 400px;
    padding: 1px 20px;
    position: relative;
    width: auto;
}
.mfp-wrap .call-me-now-container .item.first {
    border-top-color: transparent;
    margin-top: 20px;
}
.mfp-wrap .call-me-now-container.language-popup {
    max-width: 165px;
}
@media only screen and (min-width: 661px) {
.mfp-wrap .call-me-now-container.language-popup {
    max-width: 500px;
}
}
.call-me-now-input, .call-me-now-select, .call-me-now-container .call-me select, .call-me-now-container .whatsapp select, .call-me-now-textarea, .call-me-now-container .chat .inputpanel .clienttyping textarea, .call-me-now-container .whatsapp .inputpanel .clienttyping textarea, .call-me-now-container .pcac_phoneNumberContainer .pcac_phoneNumber, .call-me-now-container .pccc_inputName, .call-me-now-container .pccc_inputSubject, .call-me-now-container .amn_name, .amn_input {
    border: 1px solid #d2d2cc;
    border-radius: 5px;
    box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.1) inset;
    color: #444444;
    outline-color: #ffc36e;
    padding: 5px 8px;
}
.call-me-now-select, .call-me-now-container .call-me select, .call-me-now-container .whatsapp select {
    padding: 3px 5px;
}
.call-me-now-textarea, .call-me-now-container .chat .inputpanel .clienttyping textarea, .call-me-now-container .whatsapp .inputpanel .clienttyping textarea {
    display: block;
    height: 80px;
    margin-bottom: 10px;
    width: 80%;
}
.amn_inputArea {
    margin-bottom: 0.8em;
}
.call-me-now-container.stored-locations-popup .locations {
    max-height: 500px;
    overflow-x: hidden;
    overflow-y: auto;
}
.call-me-now-container.stored-locations-popup .title {
    margin: 15px 0 0;
}
.call-me-now-container.stored-locations-popup ul {
    margin: 0;
    padding: 0;
}
.call-me-now-container.stored-locations-popup ul li {
    border-top: 1px solid #dddddd;
    list-style: outside none none;
    margin: 0;
    padding-bottom: 15px;
    position: relative;
    width: 100%;
}
.call-me-now-container.stored-locations-popup ul li:first-child {
    border: 0 none;
    margin: 0;
}
.call-me-now-container.stored-locations-popup ul li:first-child div.file-remove {
    top: 0;
}
.call-me-now-container.stored-locations-popup ul li div.file-remove {
    height: 30px;
    position: absolute;
    right: 0;
    top: 10px;
    width: 30px;
    z-index: 2;
}
.call-me-now-container.stored-locations-popup ul li div.file-remove::after {
    color: #ed8c00;
    content: "";
    cursor: pointer;
    font-size: 1.45em;
}
.call-me-now-container .item:first-child {
    border: 0 none;
}
.call-me-now-container .item {
    border-top: 1px solid #dddddd;
    margin-top: 20px;
    min-height: 65px;
}
.call-me-now-container .item.disabled {
    opacity: 0.3;
}
.call-me-now-container .item.hidden {
    display: none;
}
.call-me-now-container .item.first {
    margin-top: 20px;
}
.call-me-now-container .item h2 {
    margin-top: 20px;
}
.call-me-now-container .item p {
    margin-bottom: 0.8em;
}
.call-me-now-container .item .picto {
    padding-top: 20px;
    position: absolute;
}
.call-me-now-container .item .narrow-content {
    margin-left: 80px;
    margin-right: 0;
}
.call-me-now-container .item .narrow-content::after {
    clear: both;
    content: " ";
    display: block;
    font-size: 0;
    height: 0;
    visibility: hidden;
}
@media only screen and (max-width: 660px) {
.call-me-now-container .item .picto {
    display: none;
}
.call-me-now-container .item .narrow-content {
    margin-left: 0;
}
}
.call-me-now-container .item .button, .call-me-now-container .item .chat p.buttons button, .call-me-now-container .chat p.buttons .item button, .call-me-now-container .item .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .item button {
    margin-bottom: 10px;
}
.call-me-now-container .item .form {
    background-color: transparent;
    padding: 0 0 20px;
}
.call-me-now-container .item .form .input.tel {
    max-width: 170px;
}
.call-me-now-container p.pcac_title {
    margin-top: 20px;
    padding: 0;
}
.call-me-now-container .pcac_desc br {
    display: none;
}
.call-me-now-container .pcac_phoneNumberContainer {
    margin: 0 0 1em;
}
.call-me-now-container .pcac_phoneNumberContainer .pcac_phoneNumber_invalid .pcac_phoneNumber {
    border: 1px solid #d52b1e;
}
.call-me-now-container .pcac_dateTimeContainer {
    margin: 0 0 1em;
}
.call-me-now-container .pcac_dateTimeContainer .pcac_dateLabel {
    padding-right: 4px;
}
.call-me-now-container .pcac_dateTimeContainer .pcac_timeLabel {
    padding: 0 4px 0 8px;
}
.call-me-now-container .pcac_dateTimeContainer .pcac_hourMinuteSeparator {
    display: inline-block;
    padding: 0 3px;
}
.call-me-now-container .pcac_callButtonContainer, .call-me-now-container .amn_callButtonContainer {
    float: left;
    margin-bottom: 10px;
    margin-right: 10px;
}
.call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton {
    background-color: #ffffff;
    border-color: #ed8c00;
    color: #ed8c00;
}
.call-me-now-container .pcac_switchTypeContainer .pcac_simpleButton:hover {
    background-color: #001a73;
    border-color: #001a73;
    color: #ffffff;
}
.call-me-now-container span.amn_tooltip {
    display: none;
}
.call-me-now-container .chat p.header, .call-me-now-container .whatsapp p.header {
    margin: 0 0 0.6em;
}
.call-me-now-container .chat p.buttons, .call-me-now-container .whatsapp p.buttons {
    margin: 1em 0 0;
}
.call-me-now-container .chat .chatpanel, .call-me-now-container .whatsapp .chatpanel {
    margin-bottom: 3px;
}
.call-me-now-container .chat .chatpanel .chathistory .chatstatusmessage, .call-me-now-container .whatsapp .chatpanel .chathistory .chatstatusmessage {
    font-style: italic;
}
.call-me-now-container .chat .chatpanel .chathistory .agentname, .call-me-now-container .chat .chatpanel .chathistory .clientname, .call-me-now-container .whatsapp .chatpanel .chathistory .agentname, .call-me-now-container .whatsapp .chatpanel .chathistory .clientname {
    display: block;
    font-weight: bold;
}
.call-me-now-container .chat .inputpanel .agenttyping, .call-me-now-container .whatsapp .inputpanel .agenttyping {
    font-style: italic;
    margin: 0;
    position: absolute;
}
.call-me-now-container .chat .inputpanel .clienttyping, .call-me-now-container .whatsapp .inputpanel .clienttyping {
    padding-top: 1.8em;
}
.call-me-now-container .pccc_labelName, .call-me-now-container .pccc_labelSubject, .call-me-now-container .amn_label {
    display: inline-block;
    min-width: 52px;
    padding-right: 30px;
}
.call-me-now-container.chat-mode .picto {
    margin-left: 10px;
    width: 40px;
}
.call-me-now-container.chat-mode .narrow-content h2 {
    font-size: 18px;
}
.call-me-now-container.chat-mode .narrow-content p, .call-me-now-container.chat-mode .narrow-content div {
    display: none;
}
.call-me-now-container.chat-mode .narrow-content div.pcac_inputComponents {
    display: block;
}
.call-me-now-container.chat-mode .narrow-content div.pcac_inputComponents div.pcac_head {
    display: block;
}
.call-me-now-container.chat-mode .narrow-content div.pcac_inputComponents div.pcac_head p.pcac_title {
    display: block;
}
.call-me-now-container.chat-mode .narrow-content.chat h2 {
    font-size: 24px;
}
.carousel-container {
    padding-left: 30px;
    padding-right: 30px;
    position: relative;
}
.carousel-container .swiper-navigation {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 0 none;
    color: #001a73;
    display: block;
    height: 3em;
    left: -0.8em;
    line-height: 1;
    margin: -2em 0 0 -0.2em;
    outline: medium none;
    position: absolute;
    text-indent: -9999em;
    top: 50%;
    width: 3em;
    z-index: 1;
}
.carousel-container .swiper-navigation::after {
    bottom: 0;
    content: "";
    font-size: 4em;
    left: 0;
    line-height: 0.5;
    position: absolute;
    right: 0;
    text-indent: 0;
    top: 0;
}
.carousel-container .swiper-navigation.next {
    left: auto;
    margin-right: 0.8em;
    right: 0;
}
.carousel-container .swiper-navigation.next::after {
    content: "";
}
.carousel-container .swiper-navigation.swiper-button-disabled {
    opacity: 0;
}
.carousel-container .swiper-navigation.hidden {
    display: none;
}
@media only screen and (min-width: 661px) {
.carousel-container .swiper-navigation {
    left: 0;
}
.carousel-container .swiper-navigation.next {
    right: 0.5em;
}
.carousel-container .swiper-navigation.hidden {
    display: none;
}
}
.swiper-container {
    width: 100%;
}
.swiper-slide {
    height: 100%;
}
.swiper-pagination {
    clear: both;
    text-align: center;
}
.swiper-pagination-switch {
    background-color: #dcdcd7;
    border-radius: 100%;
    display: inline-block;
    height: 10px;
    margin-right: 10px;
    width: 10px;
}
.swiper-visible-switch {
    background-color: #b4b4ae;
}
.carousel-item {
    float: left;
    height: 100%;
    min-width: 160px;
    position: relative;
    width: 160px;
}
.carousel-item .header-image, .carousel-item .title, .carousel-item .description {
    padding-right: 20px;
}
.carousel-item .header-image {
    margin-top: 0;
}
.carousel-item::after {
    content: " ";
    display: block;
    height: 70px;
}
.carousel-item footer {
    bottom: 0;
    position: absolute;
}
.carousel-item footer .buttons {
    margin-bottom: 0;
}
@media only screen and (min-width: 661px) {
.swiper-container {
    width: 540px;
}
.swiper-container .carousel-item {
    min-width: 180px;
    width: 180px;
}
}
@media only screen and (min-width: 1001px) {
.swiper-container {
    width: 860px;
}
.swiper-container .carousel-item {
    min-width: 215px;
    width: 215px;
}
}
@media only screen and (min-width: 1151px) {
.swiper-container {
    width: 1020px;
}
.swiper-container .carousel-item {
    min-width: 204px;
    width: 204px;
}
}
#cookiebar-container {
    background: #f0f0ec none repeat scroll 0 0;
    border-bottom: 1px solid #d2d2cc;
    display: none;
    margin-bottom: 30px;
}
#cookiebar-container #TOL_coverlay {
    display: none !important;
}
#cookiebar-container .cookie_wrapper {
    margin: auto;
}
.full-width-header #cookiebar-container {
    margin-bottom: 0;
}
#TOL_short, #TOL_long {
    padding: 1px 10px;
}
@media only screen and (min-width: 661px) {
#TOL_short, #TOL_long {
    padding-left: 10%;
    padding-right: 10%;
}
}
#TOL_short p, #TOL_long p {
    margin-bottom: 1.3em;
}
#TOL_short .cookie_knoppen table, #TOL_long .cookie_knoppen table {
    width: auto;
}
#TOL_short .cookie_knoppen table tr, #TOL_long .cookie_knoppen table tr {
    border-bottom: 0 none;
}
#TOL_short .cookie_knoppen table td, #TOL_long .cookie_knoppen table td {
    padding: 0 30px 0 0;
}
#TOL_koptekst1, #TOL_koptekst2 {
    margin-top: 20px;
}
#TOL_tekst1 br {
    display: none;
}
#TOL_link1, #TOL_link4 {
    background-color: #ed8c00;
    border: 1px solid transparent;
    border-radius: 5px 5px 0;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.1;
    padding: 6px 10px;
    position: relative;
    text-decoration: none;
    text-rendering: optimizelegibility;
    transition: background-color 0.1s ease 0s, color 0.1s ease 0s;
    vertical-align: top;
}
#TOL_link1:hover, #TOL_link4:hover {
    background-color: #001a73;
    color: #ffffff;
}
html.loaded #cookiebar-container {
    display: block;
}
.js .animate-in-view {
    transition: all 0.5s ease 0s;
}
.js .animate-in-view.animate-fade-in {
    opacity: 0;
}
.js .animate-in-view.animate-fade-in.in-view {
    opacity: 1;
}
.js .animate-in-view.animate-move-up {
    transform: translateY(60px);
}
.js .animate-in-view.animate-move-up.in-view {
    transform: translateY(0px);
}
.business-actions {
    background-color: #f0f0ec;
    border: 0 none;
    border-radius: 10px 10px 0;
    box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.2) inset;
    font-size: 0.92857em;
    padding: 15px 20px;
}
.business-actions .title {
    color: #001a73;
    font-size: 1.84615em;
    margin: 0 0 0.5em;
}
.business-actions .subtitled {
    padding-top: 50px;
    position: relative;
}
.business-actions .subtitled .subtitle {
    border-bottom: 2px solid #878782;
    color: #868681;
    font-size: 1.38462em;
    padding-bottom: 3px;
    position: absolute;
    top: 0;
    width: 100%;
}
.business-actions .header-image {
    margin-bottom: 10px;
}
.business-actions .description {
    margin-bottom: 1em;
}
.business-actions .links li {
    margin: 0;
}
.business-label-line {
    border-bottom: 2px solid #cccccc;
    margin-bottom: 10px;
    padding: 3px 0 15px;
}
.business-label {
    background-color: #001a73;
    color: #ffffff;
    display: inline-block;
    font-size: 11px;
    font-weight: bold;
    line-height: 19px;
    margin-right: 10px;
    padding: 0 5px 1px;
    text-transform: uppercase;
    vertical-align: bottom;

}
.business-label.middle-aligned {
    vertical-align: middle;
}
.unique-selling-proposition .landing-block {
    border-left: 10px solid #ffffff;
    border-right: 10px solid #ffffff;
    margin-bottom: 40px;
    margin-left: 0;
    margin-right: 0;
}
.unique-selling-proposition .landing-block:last-of-type::after {
    display: none;
}
@media only screen and (min-width: 661px) {
.unique-selling-proposition .landing-block::after {
    display: none;
}
.unique-selling-proposition .landing-block:nth-of-type(2n+3) {
    clear: both;
}
.unique-selling-proposition .landing-block:nth-of-type(2n+3)::after {
    border-bottom: 1px solid #d2d2cc;
    top: -50px;
    width: 175%;
}
}
.unique-selling-proposition .landing-block .content {
    background-color: #ffffff;
    border: 0 none;
    margin-right: 0;
    padding-bottom: 55px;
    padding-right: 20px;
    padding-top: 20px;
    position: relative;
    z-index: 1;
}
.unique-selling-proposition .picto {
    bottom: 0;
    left: 0;
    margin-top: 0;
    position: absolute;
    right: auto;
    top: 0;
    width: 60px;
    z-index: 2;
}
@media only screen and (min-width: 1001px) {
.unique-selling-proposition .picto {
    width: 120px;
}
}
.unique-selling-proposition .picto img {
    bottom: auto;
    display: block;
    height: auto;
    left: 50%;
    max-width: 100%;
    position: absolute;
    right: auto;
    top: 25px;
    transform: translateX(-50%);
    width: auto;
}
.unique-selling-proposition .picto + .content {
    padding-left: 80px;
}
@media only screen and (min-width: 1001px) {
.unique-selling-proposition .picto + .content {
    padding-left: 140px;
}
}
.video-playlist {
    background: #f0f0ec none repeat scroll 0 0;
    position: relative;
}
.video-playlist .cover-video {
    min-height: 300px;
}
@media only screen and (min-width: 661px) {
.video-playlist .cover-video {
    min-height: 400px;
}
}
@media only screen and (min-width: 1001px) {
.video-playlist .cover-video {
    min-height: 620px;
}
}
.video-playlist .cover-video .play-button {
    top: 110px;
}
@media only screen and (min-width: 661px) {
.video-playlist .cover-video .play-button {
    top: 160px;
}
}
@media only screen and (min-width: 1001px) {
.video-playlist .cover-video .play-button {
    top: 50%;
}
}
.video-playlist .cover-video + .overlay-block {
    margin-top: -80px;
}
@media only screen and (min-width: 661px) {
.video-playlist .cover-video + .overlay-block {
    float: none;
    margin-left: 10px;
    margin-right: 10px;
    margin-top: -80px;
    position: relative;
    right: auto;
    top: 0;
    width: auto;
}
}
@media only screen and (min-width: 1001px) {
.video-playlist .cover-video + .overlay-block {
    margin: 0;
    position: absolute;
    right: 30px;
    top: 30px;
    width: 300px;
}
}
.video-playlist ul {
    display: block;
    line-height: 0;
    list-style: outside none none;
    margin: 0;
    overflow-x: auto;
    overflow-y: hidden;
    padding: 0;
    text-align: center;
}
.video-playlist li {
    display: block;
    margin: 0;
}
@media only screen and (min-width: 1001px) {
.video-playlist li {
    display: inline-block;
    margin-left: 0.9em;
}
}
.video-playlist li a {
    display: block;
    position: relative;
}
.video-playlist li img {
    border: 3px solid transparent;
    display: block;
    height: 130px;
    margin: 0 auto 20px;
    transition: border-color 0.1s ease 0s;
    width: auto;
}
@media only screen and (min-width: 1001px) {
.video-playlist li img {
    margin: 20px 0;
}
}
.video-playlist li .is-active img, .video-playlist li a:hover img {
    border-color: #ed8c00;
}
.image-call-to-action {
    background: #ffffff none repeat scroll 0 0;
}
.overlay-block-container {
    display: block;
    position: relative;
}
.overlay-block-container .overlay-block {
    background: red none repeat scroll 0 0;
    bottom: 20px;
    top: auto;
}
.simple-comparison {
    padding: 60px 0 40px;
}
.simple-comparison .block {
    background-color: #ffffff;
    border-radius: 5px 5px 0;
}
.simple-comparison .content .title {
    margin: 0 0 2.5em;
}
.simple-comparison .content .button, .simple-comparison .content .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .simple-comparison .content button, .simple-comparison .content .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .simple-comparison .content button {
    margin: 60px 0 0;
}
.simple-comparison.single-product {
    padding: 10px 0;
}
.simple-comparison.single-product .comparison-content {
    background-position: left center;
    background-size: cover;
    border-radius: 5px 5px 0;
    overflow: hidden;
}
@media only screen and (max-width: 660px) {
.simple-comparison.single-product .comparison-content {
    margin-left: 10px;
    margin-right: 10px;
    padding-top: 200px;
}
}
.simple-comparison.single-product .image-container {
    float: left;
    line-height: 0;
}
.simple-comparison.single-product .block {
    border-radius: 0;
    box-sizing: border-box;
    float: right;
    margin: 0;
}
@media only screen and (max-width: 660px) {
.simple-comparison.single-product .block {
    box-sizing: border-box;
    width: 100%;
}
}
.simple-cases {
    margin-bottom: 60px;
}
.simple-cases::after {
    clear: both;
    content: "";
    display: table;
}
.simple-cases .title {
    margin-bottom: 2em;
}
.simple-cases .testimonial {
    font-size: 2em;
    margin-bottom: 1em;
}
body.noscroll {
    height: 100%;
    overflow: hidden;
}
.current-story {
    position: relative;
    transition: max-height 500ms ease 0s;
    z-index: 100;
}
.current-story .overlay-page-header {
    padding-bottom: 20px;
}
.current-story .overlay-wrapper {
    position: relative;
    z-index: 5;
}
@media only screen and (max-width: 1000px) {
.current-story .overlay-wrapper {
    background-color: #fff;
}
}
.current-story.text-not-showing .overlay-wrapper {
    opacity: 0;
}
.current-story.text-not-showing .overlay-wrapper .overlay-page-header {
    opacity: 0;
    transition: opacity 0s ease 0s;
}
.magazine-overlay {
    background-color: #ffffff;
    bottom: 0;
    display: none;
    left: 0;
    opacity: 1;
    overflow-y: scroll;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 100;
}
.magazine-overlay .cover-image {
    background-position: center center;
    height: 100vh;
    min-height: 100vh;
    transition: all 200ms ease 0s;
}
.overlay-wrapper {
    display: none;
    font-size: 1.14286em;
    line-height: 1.625em;
    margin-bottom: 100px;
    margin-top: -30vh;
    position: relative;
    z-index: 5;
}
@media only screen and (min-width: 1001px) {
.overlay-wrapper {
    margin-top: -30vh;
}
}
.overlay-wrapper .page-title {
    background-color: #ffffff;
    font-size: 0.875em;
    opacity: 1;
    padding-top: 20px;
    transition: opacity 0.5s ease 0s;
}
.overlay-wrapper .page-title.no-introduction {
    padding-bottom: 30px;
}
@media only screen and (min-width: 661px) {
.overlay-wrapper .page-title {
    padding-top: 40px;
}
}
@media only screen and (min-width: 1001px) {
.overlay-wrapper .page-title {
    padding-top: 60px;
}
}
.overlay-wrapper .page-title .introduction {
    font-size: 1.42857em;
}
.overlay-wrapper .content {
    margin-left: 20px;
    margin-right: 20px;
}
@media only screen and (min-width: 1001px) {
.overlay-wrapper .content {
    margin-left: 0;
    margin-right: 0;
}
}
.overlay-wrapper blockquote {
    color: #ed8c00;
    font-size: 24px;
    line-height: 30px;
    margin-bottom: 2em;
    margin-top: 2em;
}
@media only screen and (min-width: 1001px) {
.overlay-wrapper blockquote {
    margin-left: -80px;
    margin-right: -80px;
}
}
.overlay-wrapper blockquote cite {
    display: block;
    font-size: 16px;
    font-weight: normal;
    line-height: 26px;
    margin-top: 10px;
}
#magazine-overlay-close {
    background-color: #ed8c00;
    display: none;
    height: 60px;
    overflow: hidden;
    position: fixed;
    right: 0;
    text-indent: 101%;
    top: 0;
    white-space: nowrap;
    width: 60px;
    z-index: 101;
}
#magazine-overlay-close::before, #magazine-overlay-close::after {
    background-color: #ffffff;
    bottom: 50%;
    content: "";
    height: 2px;
    left: 50%;
    margin-left: -20px;
    margin-top: -1px;
    position: absolute;
    right: 50%;
    top: 50%;
    transform-origin: center center 0;
    width: 40px;
}
#magazine-overlay-close::before {
    transform: rotate(45deg);
}
#magazine-overlay-close::after {
    transform: rotate(-45deg);
}
.magazine-swiper-button {
    transform: translateZ(0px);
    transition: all 0.3s ease 0s;
}
.magazine-swiper-button:hover {
    transform: scale(1.1);
}
.slide.image {
    box-sizing: border-box;
    height: 100%;
    position: relative;
    width: 100%;
}
@media only screen and (min-width: 661px) {
.slide.image {
    padding-bottom: 42.45%;
}
.slide.image.text-left, .slide.image.text-right {
    padding-bottom: 0;
}
}
.slide.image .image-container {
    height: 100%;
    position: relative;
    width: 100%;
    z-index: 3;
}
@media only screen and (min-width: 661px) {
.slide.image .image-container {
    padding-bottom: 42.45%;
}
}
.slide.image .responsive-image {
    background: rgba(0, 0, 0, 0) none no-repeat scroll center center / cover ;
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: translate3d(0px, 0px, 0px);
    transition: background-position-y 0.5s ease 0s;
    width: 100%;
    z-index: 2;
}
.slide.image.text-left {
    height: auto;
}
.slide.image.text-left .image-container {
    padding-bottom: 60%;
}
.slide.image.text-right {
    height: auto;
}
.slide.image.text-right .image-container {
    padding-bottom: 60%;
}
@media only screen and (min-width: 661px) {
.slide.image.text-right .responsive-image {
    background-position: right center;
    bottom: 0;
    left: 0;
    position: absolute;
    right: auto;
    top: 40px;
    width: 50%;
}
.slide.image.text-right .image-container {
    padding-bottom: 42.45%;
}
}
@media only screen and (min-width: 661px) and (min-width: 1001px) {
.slide.image.text-right .text .content {
    padding-right: 0;
}
}
@media only screen and (min-width: 661px) {
.slide.image.text-left .responsive-image {
    background-position: left center;
    bottom: 0;
    left: auto;
    position: absolute;
    right: 0;
    top: 40px;
    width: 50%;
}
.slide.image.text-left .image-container {
    padding-bottom: 42.45%;
}
.slide.image.text-left .text {
    bottom: auto;
    left: 0;
    padding-left: 0;
    padding-right: 30%;
    position: absolute;
    right: auto;
    top: 0;
}
.slide.image.text-left .text .content {
    float: right;
}
}
@media only screen and (min-width: 661px) and (min-width: 1001px) {
.slide.image.text-left .text .content {
    padding-left: 0;
}
}
.slide .text {
    background-color: #ed8c00;
    color: #ffffff;
    z-index: 1;
}
.slide .text .content {
    margin: 0;
    padding: 40px 30px;
}
@media only screen and (min-width: 661px) {
.slide .text {
    bottom: auto;
    box-sizing: border-box;
    left: auto;
    padding-left: 30%;
    padding-right: 40px;
    position: absolute;
    right: 0;
    top: 0;
    width: 79%;
}
.slide .text::after {
    clear: both;
    content: "";
    display: table;
}
.slide .text .content {
    float: left;
}
}
@media only screen and (min-width: 661px) and (max-width: 1000px) {
.slide .text .content {
    width: auto;
}
}
@media only screen and (min-width: 661px) {
.slide .text.align-left {
    bottom: auto;
    left: 0;
    position: absolute;
    right: auto;
    top: 0;
}
.slide .text.align-left .content {
    float: right;
}
}
.slide.full-text {
    color: #ffffff;
    height: 100%;
}
.slide.full-text .text {
    padding-left: 0;
}
.magazine-carousel {
    box-sizing: border-box;
    display: block;
    margin-bottom: 70px;
    margin-top: 40px;
    max-height: 600px;
    min-height: 600px;
    position: relative;
}
.magazine-carousel .swiper-slide {
    max-height: 600px;
    min-height: 600px;
}
@media only screen and (min-width: 1001px) {
.magazine-carousel {
    margin-left: -80px;
    margin-right: -80px;
}
}
@media only screen and (max-width: 1000px) {
.magazine-carousel {
    max-height: 400px;
    min-height: 400px;
}
.magazine-carousel .swiper-slide {
    max-height: 400px;
    min-height: 400px;
}
.magazine-carousel .swiper-container {
    bottom: 0;
    cursor: pointer;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
}
}
.magazine-carousel .swiper-container {
    max-width: 100%;
}
.magazine-carousel .swiper-slide.swiper-slide-active .slide .text {
    bottom: 0;
    opacity: 1;
}
.magazine-carousel .slide {
    height: 100%;
    overflow: hidden;
    position: relative;
}
.magazine-carousel .slide .image-container {
    height: 100%;
}
.magazine-carousel .slide .image-container .responsive-image {
    background-position: center center;
    background-size: cover;
    height: 100%;
}
.magazine-carousel .slide .text {
    background-color: transparent;
    background-image: linear-gradient(to bottom, rgba(51, 51, 51, 0), rgba(51, 51, 51, 0.9));
    bottom: -50px;
    box-sizing: border-box;
    left: 0;
    opacity: 0;
    padding-left: 80px;
    padding-right: 80px;
    padding-top: 60px;
    position: absolute;
    right: auto;
    top: auto;
    transition: all 0.8s ease 0s;
    width: 100%;
}
@media only screen and (max-width: 1000px) {
.magazine-carousel .slide .text {
    padding-left: 0;
    padding-right: 0;
}
.magazine-carousel .slide .text h2 {
    margin: 0 auto;
    width: 580px;
}
.magazine-carousel .slide .text p {
    margin: auto;
    width: 580px;
}
}
@media only screen and (max-width: 660px) {
.magazine-carousel .slide .text {
    box-sizing: border-box;
    padding-left: 20px;
    padding-right: 20px;
    width: 100%;
}
.magazine-carousel .slide .text h2, .magazine-carousel .slide .text p {
    width: 100%;
}
}
.magazine-carousel .slide .text h2 {
    color: #fff;
    font-size: 24px;
    line-height: 30px;
    margin-bottom: 3px;
}
.magazine-carousel .slide .text p {
    font-size: 15px;
    line-height: 20px;
    margin-bottom: 20px;
}
.swiper-container-horizontal::before, .swiper-container-horizontal::after {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
    content: " ";
    display: block;
    height: 90%;
    left: -1px;
    opacity: 0;
    position: absolute;
    top: 3%;
    transition: opacity 0.5s ease 0s;
    width: 1px;
}
.swiper-container-horizontal::after {
    left: auto;
    right: 0;
}
.is-sliding .swiper-container-horizontal::before, .is-sliding .swiper-container-horizontal::after {
    opacity: 1;
}
.magazine-swiper-button {
    background-color: #ffffff;
    bottom: auto;
    display: none;
    height: 60px;
    left: auto;
    margin-top: -30px;
    position: absolute;
    right: auto;
    top: 50%;
    width: 60px;
    z-index: 2;
}
@media only screen and (min-width: 1001px) {
.magazine-swiper-button {
    display: block;
}
}
.magazine-swiper-button.swiper-button-prev {
    left: 0;
}
.magazine-swiper-button.swiper-button-next {
    right: 0;
}
.swiper-pagination {
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
}
@media only screen and (min-width: 1001px) {
.magazine-carousel .swiper-pagination, .item-swiper .swiper-pagination {
    opacity: 0;
}
}
.swiper-pagination .swiper-pagination-bullet {
    margin: 0 5px;
}
.swiper-pagination.visible-items-2 .swiper-pagination-bullet-active + .swiper-pagination-bullet, .swiper-pagination.visible-items-3 .swiper-pagination-bullet-active + .swiper-pagination-bullet, .swiper-pagination.visible-items-4 .swiper-pagination-bullet-active + .swiper-pagination-bullet, .swiper-pagination.visible-items-5 .swiper-pagination-bullet-active + .swiper-pagination-bullet {
    background-color: #ed8c00;
    opacity: 1;
}
.swiper-pagination.visible-items-3 .swiper-pagination-bullet-active + .swiper-pagination-bullet + .swiper-pagination-bullet, .swiper-pagination.visible-items-4 .swiper-pagination-bullet-active + .swiper-pagination-bullet + .swiper-pagination-bullet, .swiper-pagination.visible-items-5 .swiper-pagination-bullet-active + .swiper-pagination-bullet + .swiper-pagination-bullet {
    background-color: #ed8c00;
    opacity: 1;
}
.swiper-pagination.visible-items-4 .swiper-pagination-bullet-active + .swiper-pagination-bullet + .swiper-pagination-bullet + .swiper-pagination-bullet, .swiper-pagination.visible-items-5 .swiper-pagination-bullet-active + .swiper-pagination-bullet + .swiper-pagination-bullet + .swiper-pagination-bullet {
    background-color: #ed8c00;
    opacity: 1;
}
.swiper-pagination.visible-items-5 .swiper-pagination-bullet-active + .swiper-pagination-bullet + .swiper-pagination-bullet + .swiper-pagination-bullet + .swiper-pagination-bullet {
    background-color: #ed8c00;
    opacity: 1;
}
.info-box {
    color: #ed8c00;
    margin-top: 20px;
    position: relative;
}
@media only screen and (min-width: 661px) {
.info-box {
    margin-top: 40px;
}
}
@media only screen and (min-width: 1001px) {
.info-box {
    margin-top: 60px;
}
}
.content .info-box {
    margin-top: 0;
}
.info-box.item-swiper {
    margin-bottom: 60px;
}
.info-box.inverted {
    background-color: #ed8c00;
    color: #ffffff;
}
.info-box .box-title {
    color: inherit;
    font-size: 1.125em;
    letter-spacing: 1.5px;
    margin-bottom: 40px;
    margin-top: 0;
    text-transform: uppercase;
}
.info-box .content-color {
    color: inherit;
}
.info-box .swiper-container {
    width: 100%;
}
.info-box .swiper-pagination {
    bottom: -40px;
}
@media only screen and (max-width: 1000px) {
.info-box .portrait-8 {
    margin-left: 20px;
    margin-right: 20px;
    width: 620px;
}
}
@media only screen and (max-width: 660px) {
.info-box .portrait-8 {
    margin-left: 20px;
    margin-right: 20px;
    width: auto;
}
}
.info-box-item {
    color: #ed8c00;
}
.item-swiper .info-box-item {
    padding-right: 20px;
    width: 280px;
}
@media only screen and (min-width: 1001px) {
.item-swiper .info-box-item {
    width: 220px;
}
}
@media only screen and (min-width: 1151px) {
.item-swiper .info-box-item {
    width: 280px;
}
}
.inverted .info-box-item {
    color: #ffffff;
}
.info-box-item .icon {
    height: 125px;
    position: relative;
    width: 100%;
}
.info-box-item .icon .image {
    bottom: auto;
    height: auto;
    left: 0;
    max-height: 115px;
    position: absolute;
    right: auto;
    top: 50%;
    transform: translateY(-50%);
    width: auto;
}
.info-box-item .tiny-margin {
    margin-bottom: 0.5em;
    margin-top: 0.2em;
}
.info-box-item .tiny-margin * {
    margin: 0;
}
.info-box-item .title-size {
    font-size: 1.75em;
    line-height: 1.2em;
    margin-top: 0;
}
.info-box-item .title-size p {
    margin-bottom: 0.8em;
}
.info-box-item .item-title {
    margin-bottom: 25px;
}
.info-box-item .body-size {
    font-size: 1em;
}
.info-box-item .large-body-size {
    font-size: 1.25em;
    line-height: 1.5em;
}
.item-swiper .info-box-item.swiper-slide {
    margin-right: 20px;
}
@media only screen and (max-width: 660px) {
.item-swiper .info-box-item:last-of-type {
    margin-right: 100px;
}
}
@media only screen and (min-width: 1151px) {
.item-swiper .info-box-item:last-of-type {
    margin-right: 0;
}
}
.info-box-item.grid-4 {
    box-sizing: border-box;
    margin: 0 20px 0 0;
    padding-right: 20px;
}
@media only screen and (max-width: 1000px) {
.info-box-item.grid-4:nth-of-type(2n+2) {
    margin-right: 0;
}
}
@media only screen and (min-width: 1001px) {
.info-box-item.grid-4:last-of-type {
    margin-right: 0;
}
}
.info-box-content-only {
    overflow: hidden;
}
.info-box-content-only .content {
    margin-bottom: -1px;
    margin-top: -1px;
    padding: 30px 0;
}
@media only screen and (min-width: 1001px) {
.info-box-content-only .content {
    padding-right: 120px;
}
}
.info-box-content-only .main {
    margin-bottom: 0;
    margin-top: 0;
}
.info-box-content-only .white-out {
    box-shadow: 1000px 0 0 1000px #ffffff;
}
.info-box-padding {
    padding: 1px 0;
}
.trigger-overlay-block {
    display: block;
    margin: 10px 0 20px;
    position: relative;
    text-decoration: none;
}
.trigger-overlay-block .content {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    overflow: hidden;
}
.trigger-overlay-block .cover-image {
    height: 140px;
    margin-bottom: 0;
    min-height: 140px !important;
    padding: 0;
    transition: all 200ms cubic-bezier(0.55, 0.085, 0.68, 0.53) 0s;
}
.trigger-overlay-block .cover-image::after {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: background-color 100ms cubic-bezier(0.55, 0.085, 0.68, 0.53) 0s;
}
.trigger-overlay-block .bordered {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-bottom-left-radius: 10px;
    border-color: -moz-use-text-color #c8c8c2 #c8c8c2;
    border-image: none;
    border-style: none solid solid;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-width: medium 1px 1px;
    padding: 15px 20px 25px;
    position: relative;
    transition: background-color 100ms cubic-bezier(0.55, 0.085, 0.68, 0.53) 0s;
}
.trigger-overlay-block .title {
    margin-bottom: 3px;
    margin-top: 0;
}
.trigger-overlay-block .subtitle {
    font-size: 1.42857em;
    line-height: 1.1em;
    margin-bottom: 0;
}
.trigger-overlay-block .link-arrow {
    position: relative;
}
.trigger-overlay-block .link-arrow::after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20width%3D%2218%22%20height%3D%2231%22%20viewBox%3D%220%200%2018%2031%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M2.304%2030.48L0%2028.128l12.912-12.912L0%202.304%202.352%200l15.264%2015.216L2.304%2030.48z%22%20fill%3D%22%23ED8C00%22%20fill-rule%3D%22evenodd%22%2F%3E%3C%2Fsvg%3E");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
    content: "";
    display: inline-block;
    height: 12px;
    margin-left: 5px;
    width: 8px;
}
.trigger-overlay-block .tag {
    background-color: #ed8c00;
    border-top-right-radius: 5px;
    bottom: auto;
    color: #ffffff;
    height: 20px;
    left: -1px;
    letter-spacing: 1.17px;
    line-height: 20px;
    padding: 9px 20px 11px 50px;
    position: absolute;
    right: auto;
    text-transform: uppercase;
    top: -40px;
}
.trigger-overlay-block .tag .icon {
    bottom: 10px;
    height: 20px;
    left: 20px;
    position: absolute;
    right: auto;
    top: 10px;
    width: 20px;
}
.trigger-overlay-block:hover .subtitle {
    color: #ed8c00;
}
.trigger-overlay-block:hover .cover-image {
    transform: scale(1.05);
}
.trigger-overlay-block:hover .cover-image::after {
    background-color: rgba(0, 0, 0, 0.15);
}
.trigger-overlay-block:hover .bordered {
    background-color: #f0f0ec;
}
.trigger-overlay-block + .trigger-overlay-block {
    margin-top: 0;
}
.show-next-story {
    background-color: #ffffff;
    border-top: 1px solid #c8c8c2;
    cursor: pointer;
    height: 550px;
    margin-top: 30px;
    overflow: hidden;
    padding-top: 85px;
    position: relative;
    transition: all 1000ms ease 0s;
    z-index: 200;
}
.show-next-story .cover-image {
    bottom: 0;
    height: 100%;
    left: 0;
    min-height: 100%;
    position: absolute;
    right: 0;
    top: auto;
    transition: all 1000ms ease 0s, opacity 200ms ease 0s;
}
.show-next-story .overlay-wrapper {
    display: block;
    margin-top: 0;
    opacity: 1;
    padding-top: 550px;
    position: relative;
    transition: all 100ms ease 0s;
    z-index: 5;
}
.show-next-story .overlay-wrapper .main {
    padding-left: 0;
    padding-right: 0;
    position: relative;
    transform: translateZ(0px);
}
.show-next-story .overlay-wrapper .overlay-page-header {
    margin-bottom: 650px;
    margin-top: -665px;
    padding-bottom: 10px;
    padding-top: 30px;
    position: relative;
    transform: translateZ(0px);
    transition: all 500ms ease 0s;
    width: 100%;
    z-index: 5;
}
.show-next-story .overlay-wrapper .overlay-page-header::after {
    background-color: #fff;
    content: " ";
    display: block;
    height: 100%;
    left: -200%;
    position: absolute;
    top: 0;
    width: 500%;
    z-index: -1;
}
@media only screen and (max-width: 660px) {
.show-next-story .overlay-wrapper .overlay-page-header {
    height: 50%;
    margin-left: 0;
    margin-right: 0;
}
}
.show-next-story .overlay-wrapper .overlay-page-header .introduction {
    display: none;
}
.show-next-story .overlay-wrapper .overlay-page-header .grid {
    position: relative;
}
.show-next-story .open-next-story {
    background-color: #ed8c00;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20width%3D%2218%22%20height%3D%2231%22%20viewBox%3D%220%200%2018%2031%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M2.304%2030.48L0%2028.128l12.912-12.912L0%202.304%202.352%200l15.264%2015.216L2.304%2030.48z%22%20fill%3D%22%23ffffff%22%20fill-rule%3D%22evenodd%22%2F%3E%3C%2Fsvg%3E");
    background-position: center center;
    background-repeat: no-repeat;
    bottom: -90px;
    display: block;
    height: 60px;
    left: auto;
    margin-top: 20px;
    opacity: 1;
    overflow: hidden;
    position: absolute;
    right: auto;
    text-indent: 101%;
    top: auto;
    transform: rotate(90deg);
    transition: all 500ms ease 0s;
    white-space: nowrap;
    width: 60px;
}
.show-next-story.move-in-image {
    height: 100vh;
    transition: all 500ms ease 0s;
}
.show-next-story.move-in-image .open-next-story {
    opacity: 0;
    transition: opacity 500ms ease 0s;
}
.show-next-story.move-in-image .overlay-page-header {
    margin-bottom: 100vh;
    opacity: 0;
    transition: opacity 500ms ease 0s;
}
.show-next-story.move-in-image .cover-image {
    height: 100vh;
    min-height: 100vh;
}
.story-loaded.current-story .overlay-wrapper {
    display: block;
}
.story-loaded.current-story .open-next-story {
    display: none;
}
.order-option-search {
    padding-bottom: 20px;
    width: 100%;
}
.order-option-search .form-row {
    margin: 5px 0 5px 20px;
    padding: 0;
}
.order-option-search .form-row .label {
    float: left;
    padding: 5px 0;
    width: 190px;
}
.order-option-search .form-row input[type="text"] {
    border: 1px solid #c0c0bd;
    border-radius: 5px;
    box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.1) inset;
    color: #444444;
    outline-color: #ffc36e;
    padding: 3px;
    width: 175px;
}
.order-options {
    position: relative;
}
.order-options p {
    color: black;
    margin-bottom: 10px;
    margin-top: 10px;
}
.order-options a {
    display: block;
    margin-bottom: 20px;
    text-decoration: none;
}
.order-options .order-option-wrapper {
    position: relative;
}
.order-options .order-option-wrapper span.option-title {
    float: left;
    height: 30px;
    width: 100%;
}
.order-options .order-option-wrapper span.option-title h2 {
    margin-top: 0;
    text-align: left;
}
@media only screen and (min-width: 661px) {
.order-options .order-option-wrapper {
    float: left;
    margin-bottom: 20px;
    margin-left: 20px;
    min-height: 210px;
    width: 240px;
}
}
@media only screen and (min-width: 1001px) {
.order-options .order-option-wrapper {

    float: left;
    margin-bottom: 15px;
    margin-left: 15px;
    width: 150px;
}
}
@media only screen and (min-width: 1001px) {
.order-options .order-option-wrapper {
    width: 140px;
}
}
.apply-buttons {
    border-top: 1px solid #d2d2cc;
}
.apply-buttons::after {
    clear: both;
    content: "";
    display: table;
}
.apply-buttons.simple {
    border-bottom: 1px solid #d2d2cc;
    border-top: 0 none;
    padding-bottom: 15px;
    padding-top: 0;
}
@media only screen and (min-width: 661px) {
.apply-buttons .button, .apply-buttons .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .apply-buttons button, .apply-buttons .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .apply-buttons button {
    box-sizing: border-box;
    float: right;
    margin-right: 0;
}
}
.apply-buttons .mail-row {
    border-bottom: 1px solid #d2d2cc;
    display: block;
    margin-bottom: 20px;
    padding-bottom: 12px;
    padding-top: 12px;
}
.apply-buttons .mail {
    display: inline-block;
    padding-right: 25px;
    position: relative;
}
.apply-buttons .mail::after {
    bottom: auto;
    content: "";
    font-size: 22px;
    left: auto;
    position: absolute;
    right: 0;
    top: -5px;
}
.vacancy-short-description {
    background-color: #ffffff;
    border: 1px solid #c8c8c2;
    border-radius: 10px 10px 0;
    margin-bottom: 30px;
    position: relative;
}
.vacancy-short-description::after {
    bottom: -1px;
}
.vacancy-short-description .offset-background {
    background-color: #f0f0ec;
    border-bottom: 1px solid #d2d2cc;
    border-radius: 10px 10px 0 0;
    padding: 12px 20px 0;
    position: relative;
}
@media only screen and (max-width: 660px) {
.vacancy-short-description .offset-background .title {
    font-size: 1.71429em;
}
}
.vacancy-short-description .fa {
    color: #ed8c00;
}
.vacancy-short-description .range-from-search {
    color: #989898;
}
.vacancy-short-description .icon-list {
    background-color: #f0f0ec;
    border-bottom: 1px solid #d2d2cc;
    margin-bottom: -1px;
    padding-bottom: 12px;
    position: relative;
    z-index: 3;
}
.vacancy-short-description .organisation {
    background-color: #f0f0ec;
    padding: 10px 0;
    position: relative;
    text-align: right;
    z-index: 3;
}
.vacancy-short-description .organisation img {
    height: 100%;
    max-height: 30px;
    width: auto;
}
.vacancy-short-description .organisation::after {
    background-color: #c8c8c2;
    bottom: auto;
    content: "";
    height: 1px;
    left: -20px;
    position: absolute;
    right: -20px;
    top: -1px;
}
.vacancy-short-description .organisation::before {
    background-color: #c8c8c2;
    bottom: -1px;
    content: "";
    height: 1px;
    left: -20px;
    position: absolute;
    right: -20px;
    top: auto;
}
.vacancy-short-description .introduction {
    color: #ed8c00;
    margin-bottom: 22px;
    margin-top: 18px;
    padding: 0 20px;
}
.vacancy-short-description .icon-blocks {
    border-top: 1px solid #c8c8c2;
    overflow: auto;
}
.vacancy-short-description .icon-blocks::after {
    clear: both;
    content: "";
    display: table;
}
.vacancy-short-description .icon-block {
    border-right: 1px solid #c8c8c2;
    box-sizing: border-box;
    float: left;
    font-size: 0.92857em;
    min-height: 150px;
    padding: 70px 10px 0;
    position: relative;
    text-align: center;
    width: 33.3333%;
}
.vacancy-short-description .icon-block::after {
    clear: both;
    content: "";
    display: table;
}
@media only screen and (min-width: 1001px) {
.vacancy-short-description .icon-block {
    min-height: 120px;
}
}
.vacancy-short-description .icon-block:last-of-type {
    border-right: 0 none;
}
.vacancy-short-description .icon-block .image {
    display: block;
    height: 70px;
    margin: -60px auto 0;
    position: relative;
    width: 33%;
}
.vacancy-short-description .icon-block .image img {
    bottom: auto;
    left: 50%;
    position: absolute;
    right: auto;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
}
.vacancy-short-description .icon-block .content {
    display: block;
    padding-bottom: 24px;
}
.vacancy-short-description.no-shadow .offset-background {
    border: medium none;
}
.vacancy-short-description.no-shadow .offset-background::after {
    display: none;
}
.vacancy-short-description.no-shadow .icon-list {
    border: medium none;
    margin-bottom: 0;
}
.switch-order::after {
    clear: both;
    content: "";
    display: table;
}
@media only screen and (max-width: 660px) {
.switch-order {
    display: flex;
    flex-direction: column;
}
}
.switch-order .mobile-order-1 {
    order: 1;
}
.switch-order .mobile-order-2 {
    order: 2;
}
.switch-order .mobile-order-3 {
    order: 3;
}
.testimonial-image {
    border-bottom: 1px solid #d2d2cc;
    min-height: 130px;
    padding: 30px 0;
    position: relative;
}
.testimonial-image .image {
    bottom: auto;
    left: 0;
    margin-right: 20px;
    position: absolute;
    right: auto;
    top: 30px;
    width: 100px;
}
.testimonial-image .testimonial {
    border-width: 3px;
    font-size: 1.28571em;
    margin-bottom: 0 !important;
    margin-left: 120px;
    min-height: 130px;
}
@media only screen and (min-width: 661px) {
.testimonial-image .testimonial {
    font-size: 1.71429em;
}
}
.testimonial-image .testimonial p {
    margin-bottom: 0.7em;
}
.testimonial-image .testimonial cite {
    color: #444444;
    font-size: 0.77778em;
}
@media only screen and (min-width: 661px) {
.testimonial-image .testimonial cite {
    font-size: 0.58333em;
}
}
.testimonial-image::after {
    clear: both;
    content: "";
    display: table;
}
.salary-tool {
    border-bottom: 1px solid #d2d2cc;
    margin-top: 30px;
    padding-bottom: 30px;
}
.salary-tool .form-row .label {
    display: none;
}
.salary-tool .form-row .field {
    margin-left: 0;
}
.salary-tool .form-row .input {
    border-radius: 0;
    box-shadow: 1px 2px 3px 0 rgba(0, 0, 0, 0.15) inset;
    height: 26px;
    max-width: 100%;
}
.salary-tool .submit-buttons {
    margin-bottom: 0;
}
.salary-tool .hidden {
    display: none;
}
.salary-tool .is-open .hidden {
    display: block;
}
.salary-tool .results {
    display: none;
    margin-top: 10px;
}
.salary-tool .form h2 {
    margin-bottom: 25px;
}
.salary-tool .accented {
    font-size: 14px;
    margin-bottom: 10px;
}
.salary-tool .accented h2 {
    margin-bottom: 10px;
    margin-top: 0;
}
.salary-tool .accented .buttons {
    text-align: right;
}
.salary-tool .rights {
    margin-bottom: -7px;
}
.salary-tool .introduction {
    color: #ed8c00;
    margin-bottom: 0;
}
.vacancy-header {
    margin-bottom: 15px;
    min-height: 280px;
}
.vacancy-header .block {
    box-sizing: border-box;
    padding: 8px 20px 150px;
}
@media only screen and (min-width: 1001px) {
.vacancy-header .block {
    padding-bottom: 100px;
}
}
.vacancy-header .block .title {
    margin-bottom: 8px;
    margin-top: 10px;
}
@media only screen and (min-width: 1001px) {
.vacancy-header .block .title {
    margin-top: 0;
}
}
.vacancy-header .block .content {
    margin: 0;
}
.vacancy-header .button, .vacancy-header .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .vacancy-header button, .vacancy-header .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .vacancy-header button {
    bottom: 43px;
    margin-right: 0;
}
@media only screen and (min-width: 1001px) {
.vacancy-header .button, .vacancy-header .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .vacancy-header button, .vacancy-header .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .vacancy-header button {
    bottom: 0;
}
}
.vacancy-header .vacancy {
    bottom: 0;
    height: 50px;
    left: 0;
    position: absolute;
    right: 0;
    text-align: center;
    text-decoration: none;
    top: auto;
}
.vacancy-header .vacancy::after {
    bottom: 14px;
    content: "";
    display: block;
    font-size: 25px;
    height: 25px;
    left: 0;
    position: absolute;
    right: 0;
    top: auto;
}
@media only screen and (min-width: 1001px) {
.vacancy-header .vacancy {
    display: none;
}
}
.vacancy-list {
    position: relative;
}
.vacancy-list .block {
    border-color: #c8c8c2;
    display: block;
    font-size: 14px;
    padding-bottom: 13px;
    padding-top: 20px;
    position: relative;
    text-decoration: none;
}
.vacancy-list .block .button, .vacancy-list .block .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .vacancy-list .block button, .vacancy-list .block .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .vacancy-list .block button {
    bottom: 20px;
    display: none;
    left: auto;
    padding-right: 60px;
    position: absolute;
    right: 20px;
    top: auto;
}
.vacancy-list .block:hover {
    background-color: #f0f0ec;
}
@media only screen and (min-width: 1001px) {
.vacancy-list .block:hover .button, .vacancy-list .block:hover .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .vacancy-list .block:hover button, .vacancy-list .block:hover .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .vacancy-list .block:hover button {
    display: block;
}
}
.vacancy-list .title {
    font-size: 1.28571em;
}
.vacancy-list li {
    color: #444444;
}
.vacancy-list .fa {
    color: #ed8c00;
}
.vacancy-search .form-row label {
    display: none;
}
.vacancy-results {
    opacity: 1;
    transition: opacity 500ms cubic-bezier(0.55, 0.085, 0.68, 0.53) 0s;
}
.vacancy-results.is-loading {
    opacity: 0.2;
}
.filters {
    font-size: 1.07692em;
}
@media only screen and (max-width: 1000px) {
.filters {
    display: none;
}
.filters:target {
    background-color: #f0f0ec;
    bottom: 0;
    display: block;
    left: 0;
    overflow-y: scroll;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 10;
}
.filters .title {
    background-color: #ffffff;
    font-size: 1.71429em;
    height: 52px;
    margin: 0;
    padding: 18px 10px 0;
}
.filters .close {
    bottom: auto;
    display: block;
    height: 20px;
    left: auto;
    overflow: hidden;
    position: absolute;
    right: 10px;
    text-indent: 22px;
    top: 20px;
    width: 20px;
}
.filters .close::before, .filters .close::after {
    background-color: #001a73;
    bottom: auto;
    content: "";
    display: block;
    height: 3px;
    left: 50%;
    position: absolute;
    right: auto;
    top: 50%;
    transform-origin: center center 0;
    width: 26px;
}
.filters .close::after {
    transform: translateY(-50%) translateX(-50%) rotate(45deg);
}
.filters .close::before {
    transform: translateY(-50%) translateX(-50%) rotate(-45deg);
}
.filters .filter-list {
    padding: 10px 10px 100px;
}
.filters .filter-list fieldset {
    background-color: #ffffff;
    border-radius: 5px 5px 0;
    margin-bottom: 10px;
    padding: 12px 20px 2px;
}
.filters .filter-list fieldset:last-child {
    margin-bottom: 0;
}
.filters .filter-list fieldset legend {
    float: left;
    margin: 0 0 19px;
    width: 100%;
}
.filters .filter-list.form .form-row {
    max-width: 100%;
    width: 100%;
}
.filters .filter-list .field {
    margin-left: 0;
}
.filters .filter-list .text .input {
    height: 28px;
    max-width: 100%;
    padding-left: 0;
    padding-right: 0;
    width: 100%;
}
.filters .filter-list li {
    margin-bottom: 10px;
}
.filters .buttons {
    background-color: #ffffff;
    bottom: 0;
    box-shadow: 0 2px 7px rgba(0, 0, 0, 0.5);
    box-sizing: border-box;
    height: 80px;
    left: 0;
    padding: 20px 10px;
    position: fixed;
    right: 0;
    top: auto;
}
.filters .buttons .button, .filters .call-me-now-container .chat p.buttons button, .call-me-now-container .chat .filters p.buttons button, .filters .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp .filters p.buttons button {
    margin-right: 0;
}
}
@media only screen and (min-width: 1001px) {
.filters {
    border-top: 1px solid #c8c8c2;
    padding-top: 21px;
}
.filters .buttons {
    display: none;
}
.filters .title {
    display: none;
}
.filters .range {
    display: none;
}
.filters .filter-list {
    background-color: #ffffff;
    padding: 0;
}
.filters .filter-list .field {
    margin-left: 0;
}
.filters .filter-list li {
    margin-bottom: 10px;
}
}
.filter-group input:disabled + label {
    color: #989898;
}
.location-search {
    border-bottom: 1px solid #c8c8c2;
    margin-bottom: 13px;
    margin-top: 25px;
    padding-right: 87px;
}
@media only screen and (min-width: 1001px) {
.location-search {
    padding-right: 0;
}
}
.location-search .vacancy-list .block.trigger-filter, .location-search .trigger-filter {
    border-radius: 5px 5px 0;
    bottom: 0;
    box-sizing: border-box;
    color: #444444;
    height: 40px;
    left: auto;
    line-height: 36px;
    margin-bottom: 30px;
    padding-bottom: 0;
    padding-top: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 78px;
}
@media only screen and (min-width: 1001px) {
.location-search .vacancy-list .block.trigger-filter, .location-search .trigger-filter {
    display: none;
}
}
.location-search .search-form label {
    display: none;
}
.location-search .input {
    height: 40px;
}
.location-search .submit::after {
    font-size: 20px;
}
.location-search .select-native {
    border-bottom: 0 none #b1b1b1;
    border-color: #b1b1b1;
    border-radius: 0;
    border-right: 0 none #b1b1b1;
    border-top: medium none #b1b1b1;
    bottom: 1px;
    display: none;
    height: 38px;
    left: auto;
    position: absolute;
    right: 40px;
    top: 1px;
    width: 95px;
}
@media only screen and (min-width: 1001px) {
.location-search .select-native {
    display: block;
}
}
.location-search .search-form .submit::after {
    font-size: 22px !important;
    left: 0;
    line-height: 40px;
    margin-right: 0;
    text-align: center;
}
.maps {
    border-top: 1px solid #d2d2cc;
    margin-bottom: 20px;
}
.maps::after {
    clear: both;
    content: "";
    display: table;
}
.maps .google-map {
    background: #d2d2cc none repeat scroll 0 0;
    border-radius: 10px 10px 0;
    display: block;
    height: 180px;
    margin-top: 25px;
    overflow: hidden;
}
@media only screen and (min-width: 1001px) {
.maps .google-map {
    height: 350px;
}
}
.check-me-out {
    font-size: 1em;
    margin-top: 15px;
}
.check-me-out .title {
    color: #ed8c00;
}
.check-me-out p {
    margin-left: 0;
}
.check-me-out .link {
    clear: both;
    font-size: 1.28571em;
    font-weight: normal;
    margin-bottom: 8px;
}
.check-me-out .link::after {
    font-size: 1.14286em;
}
.vacancy-entrance {
    border-radius: 10px 10px 0;
    display: block;
    height: 185px;
    padding-bottom: 100px;
    position: relative;
}
@media only screen and (min-width: 661px) {
.vacancy-entrance {
    height: 425px;
    padding-bottom: 30px;
}
}
.vacancy-entrance::after {
    clear: both;
    content: "";
    display: table;
}
.vacancy-entrance .entrance {
    display: block;
    float: left;
    min-height: 185px;
    position: static;
    width: 50%;
}
@media only screen and (min-width: 661px) {
.vacancy-entrance .entrance {
    min-height: 425px;
}
}
.vacancy-entrance .entrance:first-child {
    border-radius: 10px 0 0 10px;
}
.vacancy-entrance .entrance:last-child {
    border-radius: 0 10px 0 0;
}
.vacancy-entrance .entrance .button, .vacancy-entrance .entrance .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .vacancy-entrance .entrance button, .vacancy-entrance .entrance .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .vacancy-entrance .entrance button {
    bottom: -100px;
    box-sizing: border-box;
    font-family: "PostNL-regular",sans-serif;
    font-size: 1.28571em;
    font-weight: normal;
    left: 10px;
    min-height: 135px;
    position: absolute;
    right: 10px;
    top: auto;
}
@media only screen and (min-width: 661px) {
.vacancy-entrance .entrance .button, .vacancy-entrance .entrance .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .vacancy-entrance .entrance button, .vacancy-entrance .entrance .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .vacancy-entrance .entrance button {
    bottom: -30px;
    font-size: 1.71429em;
    left: 20px;
    min-height: 175px;
    position: absolute;
    right: auto;
    top: auto;
    width: 210px;
}
}
.vacancy-entrance .entrance .button::after, .vacancy-entrance .entrance .call-me-now-container .chat p.buttons button::after, .call-me-now-container .chat p.buttons .vacancy-entrance .entrance button::after, .vacancy-entrance .entrance .call-me-now-container .whatsapp p.buttons button::after, .call-me-now-container .whatsapp p.buttons .vacancy-entrance .entrance button::after {
    content: "";
    display: block;
    font-size: 1.04167em;
    margin-top: 0;
    padding-left: 4px;
    padding-top: 10px;
    position: relative;
}
.animation-test {
    background: #efefef url("/sites/all/themes/developer/img/animation-test/skyline-rotterdam.png") no-repeat scroll center center / cover ;
    height: 300px;
    padding: 100px;
    width: 100%;
}
.animation-test .animation-block {
    position: relative;
}
.animation-test .text-box {
    height: 200px;
    left: 0;
    position: absolute;
    top: 0;
    width: 300px;
}
.animation-test .text-box::before {
    background-color: #ed8c00;
    border-radius: 5px 5px 0;
    bottom: 0;
    content: "";
    display: block;
    height: 30px;
    left: auto;
    position: absolute;
    right: 0;
    top: auto;
    transform: translateX(50%) translateY(50%);
    width: 30px;
}
.animation-test .text-box .content {
    animation: 500ms cubic-bezier(0.55, 0.085, 0.68, 0.53) 1s normal forwards 1 running fade;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 10px 10px 0;
    bottom: 0;
    left: 0;
    margin: 0;
    opacity: 0;
    padding: 20px;
    position: absolute;
    right: 0;
    top: 0;
}
@keyframes fade {
0% {
    opacity: 0;
}
100% {
    opacity: 1;
}
}
.animation-test .text-box .title {
    font-family: Arial,Helvetica,sans-serif;
}
.animation-test .text-box .title .sub-title {
    color: #ed8c00;
}
.animation-test svg {
    bottom: 0;
    height: calc(100% + 5px);
    left: -3px;
    position: absolute;
    right: 0;
    top: -3px;
    width: calc(100% + 5px);
}
.animation-test svg path {
    animation: 1s cubic-bezier(0.55, 0.085, 0.68, 0.53) 0s normal forwards 1 running dash;
    stroke-dasharray: 1000;
}
@keyframes dash {
0% {
    stroke-dashoffset: 1000;
}
100% {
    stroke-dashoffset: 0;
}
}
.app {
    background-color: #f0f0ec;
    border-radius: 10px 10px 0;
    font-size: 0.92857em;
    margin-bottom: 30px;
}
.app .content {
    margin-left: 20px;
    margin-right: 20px;
}
.app.tab-content {
    border-top-left-radius: 0;
}
.app.tab-content .content {
    margin-left: 10px;
    margin-right: 10px;
}
.app .title {
    margin-bottom: 0.5em;
}
.app .description {
    font-size: 1.07692em;
}
.app table {
    font-size: 1em;
}
.app .form.outer {
    margin-bottom: 1em;
}
@media only screen and (min-width: 661px) {
.app.tab-content .content {
    margin-left: 20px;
    margin-right: 20px;
}
}
.killerapp-banner {
    display: none;
    position: absolute;
    right: 40px;
    width: 230px;
}
.killerapp-banner .killer-app header {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
}
.killerapp-banner-loose .columns .column {
    width: 100%;
}
.js .killerapp-banner .killer-app.collapsed .form {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
}
@media only screen and (min-width: 1151px) {
.killerapp-banner-loose {
    display: none;
}
.killerapp-banner {
    display: block;
}
}
@media only screen and (min-width: 1001px) {
.killerapp-banner-loose {
    display: none;
}
.killerapp-banner {
    display: block;
}
}
.killer-app {
    background-color: #ffffff;
    border-color: #c8c8c2;
    border-width: 0 0 1px;
    min-width: 285px;
    padding: 0;
    position: relative;
    z-index: 4;
}
.killer-app::after {
    bottom: -1px;
}
.killer-app header {
    background-color: #ffffff;
    cursor: pointer;
    height: 55px;
    padding-top: 15px;
    transition: height 0.5s ease 0s;
}
.killer-app .icon {
    display: block;
    float: left;
    height: 50px;
    line-height: 50px;
    text-align: center;
    width: 70px;
}
.killer-app.track-trace .title {
    font-family: "PostNL-Regular",sans-serif;
}
.killer-app .title {
    color: #ed8c00;
    font-size: 1.38462em;
    margin: 0;
    padding: 8px 55px 0 70px;
}
.killer-app .title::after {
    content: "";
    font-size: 1.35em;
    position: absolute;
    right: 15px;
    top: 22px;
}
.killer-app .form, .killer-app .result-container {
    background-color: #f0f0ec;
    border-radius: 0 0 0 10px;
    overflow: hidden;
    padding: 0 20px;
    position: relative;
}
.killer-app .form::before, .killer-app .result-container::before {
    background-color: #ffffff;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
    content: " ";
    height: 16px;
    left: 50%;
    margin-left: -8px;
    position: absolute;
    top: -8px;
    transform: rotate(45deg);
    width: 16px;
    z-index: 1;
}
.killer-app .form::after, .killer-app .result-container::after {
    border-radius: 100%;
    box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.2);
    content: " ";
    height: 10px;
    left: 12.5%;
    position: absolute;
    right: 12.5%;
    top: -10px;
}
.killer-app .form, .killer-app .form::before, .killer-app .form::after, .killer-app .result-container, .killer-app .result-container::before, .killer-app .result-container::after {
    transition: background-color 0.5s ease 0s, opacity 0.5s ease 0s;
    z-index: 4;
}
.killer-app .form .form-row, .killer-app .form .result-row, .killer-app .result-container .form-row, .killer-app .result-container .result-row {
    margin-bottom: 0;
    padding: 0 0 20px;
}
.killer-app .form .form-row.first, .killer-app .form .result-row.first, .killer-app .result-container .form-row.first, .killer-app .result-container .result-row.first {
    padding-top: 20px;
}
.killer-app .form .form-row .input, .killer-app .form .result-row .input, .killer-app .result-container .form-row .input, .killer-app .result-container .result-row .input {
    max-width: 93%;
}
.killer-app .form .form-row .input.small-field, .killer-app .form .result-row .input.small-field, .killer-app .result-container .form-row .input.small-field, .killer-app .result-container .result-row .input.small-field {
    max-width: 83%;
}
.killer-app .form .submit-buttons, .killer-app .result-container .submit-buttons {
    padding-bottom: 20px;
}
.killer-app .form .submit-buttons .button, .killer-app .form .submit-buttons .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .killer-app .form .submit-buttons button, .killer-app .form .submit-buttons .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .killer-app .form .submit-buttons button, .killer-app .result-container .submit-buttons .button, .killer-app .result-container .submit-buttons .call-me-now-container .chat p.buttons button, .call-me-now-container .chat p.buttons .killer-app .result-container .submit-buttons button, .killer-app .result-container .submit-buttons .call-me-now-container .whatsapp p.buttons button, .call-me-now-container .whatsapp p.buttons .killer-app .result-container .submit-buttons button {
    margin-left: 0;
}
.killer-app .form .label, .killer-app .result-container .label {
    display: block;
    float: none;
    padding-bottom: 5px;
}
.killer-app .form .label.inline, .killer-app .result-container .label.inline {
    display: inline;
    padding-right: 15px;
}
.killer-app .form .label.package, .killer-app .result-container .label.package {
    background-position: 0 0;
    background-repeat: no-repeat;
    cursor: pointer;
    padding-top: 40px;
    position: absolute;
}
.killer-app .form .label.package-1, .killer-app .result-container .label.package-1 {
    background-image: url("/sites/all/themes/developer/img/pictos/picto-letter-inactive-light.png");
}
.killer-app .form .label.package-0, .killer-app .result-container .label.package-0 {
    background-image: url("/sites/all/themes/developer/img/pictos/picto-package-inactive-light.png");
}
.killer-app .form .label img, .killer-app .result-container .label img {
    display: inline-block;
    position: relative;
    top: 15px;
}
.killer-app .form .label span, .killer-app .result-container .label span {
    display: block;
    padding: 10px 0 0 21px;
}
.killer-app .form .field-half, .killer-app .result-container .field-half {
    float: left;
    width: 50%;
}
.killer-app .result-container {
    display: none;
    padding: 0;
}
.killer-app .result-container .result-row {
    padding: 20px;
}
.killer-app .result-container .result-row p {
    color: #777;
    margin-bottom: 0;
}
.killer-app .result-container .result-row a {
    display: block;
}
.killer-app .result-container .result-row a.back {
    padding-left: 12px;
    position: relative;
    text-decoration: none;
}
.killer-app .result-container .result-row a.back::before {
    content: "";
    font-size: 1.385em;
    left: -3px;
    line-height: 1.25;
    position: absolute;
}
.killer-app .result-container .result-row a.back span {
    text-decoration: underline;
}
.killer-app .result-container .result-row a.wrapper {
    text-decoration: none;
}
.killer-app .result-container .result-row h4 {
    color: #444444;
    margin-bottom: 20px;
    margin-top: 0;
}
.killer-app .result-container .result-row.price-display, .killer-app .result-container .result-row.promo {
    margin-bottom: 0;
}
.killer-app .result-container .result-row.price-display .price, .killer-app .result-container .result-row.promo .price {
    color: #001a73;
}
.killer-app .result-container .result-row.price-display .price::after, .killer-app .result-container .result-row.promo .price::after {
    color: #bbbbbc;
    content: "";
    float: right;
    font-size: 0.8em;
}
.killer-app .result-container .result-row.price-display {
    padding: 0;
}
.killer-app .result-container .result-row.price-display:hover {
    background-color: #e3e3dc;
}
.killer-app .result-container .result-row.price-display > a {
    padding: 20px;
}
.killer-app .result-container .result-row.promoted {
    background-color: #ed8c00;
}
.killer-app .result-container .result-row.promoted h4, .killer-app .result-container .result-row.promoted p, .killer-app .result-container .result-row.promoted li, .killer-app .result-container .result-row.promoted span {
    color: #ffffff;
}
.killer-app .result-container .result-row.promoted .price {
    color: #001a73;
}
.killer-app .result-container .result-row.promoted .price::after {
    color: #ffffff;
}
.killer-app .result-container .result-row.promoted:hover {
    background-color: #de8300;
}
.killer-app .result-container .result-row.promo {
    margin-bottom: 20px;
    padding: 20px 20px 0;
}
.killer-app .result-container .result-row.promo .extra {
    border-bottom: 1px solid #ddd;
    margin: 0 -20px 20px;
    padding: 0 20px 20px;
}
.killer-app .result-container .result-row.promo h4, .killer-app .result-container .result-row.promo p {
    margin-bottom: 0;
}
.killer-app .result-container .result-row.first {
    border-bottom: 1px solid #ddd;
}
.killer-app.result .result-container {
    display: block;
}
.killer-app .radio .input, .killer-app .checkbox .input {
    margin-right: 5px;
}
.killer-app .checkbox .label.inline {
    padding-right: 0;
}
.killer-app .form-row.price-display, .killer-app .result-row.price-display {
    border-bottom: 1px solid #ddd;
    margin-bottom: 10px;
    padding-bottom: 10px;
}
.killer-app .form-row.price-display .label, .killer-app .result-row.price-display .label {
    display: inline;
    padding-right: 10px;
}
.killer-app .form-row.price-display .price, .killer-app .result-row.price-display .price {
    font-size: 2.30769em;
    line-height: 0.5;
}
.killer-app .html p {
    margin-bottom: 10px;
}
.killer-app .html p:last-child {
    margin-bottom: 0;
}
.killer-app .text .input {
    max-width: 97%;
    padding-bottom: 3px;
    padding-top: 3px;
    text-indent: 5px;
}
.killer-app .submit-buttons {
    margin-top: 5px;
    padding-bottom: 15px;
}
.js .killer-app.collapsed {
    box-shadow: none;
    z-index: 1;
}
.js .killer-app.collapsed .title::after {
    transform: rotate(180deg);
}
.no-csstransforms .js .killer-app.collapsed .title::after {
    content: "";
}
.js .killer-app.collapsed .form {
    background-color: #ffffff;
    height: 0;
}
.js .killer-app.collapsed .form::before, .js .killer-app.collapsed .form::after {
    opacity: 0;
}
.js .killer-app.collapsed .tooltip {
    display: none;
}
.killer-app.loading .form {
    background-image: url("/sites/all/themes/developer/img/killer-apps/loader.gif");
    background-position: center 70%;
    background-repeat: no-repeat;
    min-height: 60px;
}
.killerapp-open-wrapper .killer-app {
    margin-bottom: 0;
    position: relative;
}
.killerapp-open-wrapper .killer-app header {
    cursor: default;
}
.killerapp-open-wrapper .killer-app .form::after {
    box-shadow: none;
}
.killer-app.rates-calculator .form .form-row {
    position: relative;
}
.killer-app.rates-calculator .form .form-row input {
    margin-right: 10px;
    margin-top: 10px;
}
.killer-app.rates-calculator .form .form-row.first {
    min-height: 50px;
    padding-top: 20px;
}
.killer-app.rates-calculator .form .form-row.checkbox input {
    margin-top: 3px;
    position: absolute;
}
.killer-app.rates-calculator .form .form-row.checkbox label {
    padding-left: 17px;
}
.killer-app.rates-calculator.result .form {
    height: 0 !important;
    min-height: 0;
}
@media only screen and (min-width: 661px) {
.killer-app {
    box-shadow: -5px 15px 40px 0 rgba(0, 0, 0, 0.5);
    left: 0;
    min-width: 235px;
    position: absolute;
    right: 0;
}
.killer-app.opening, .killer-app.closing {
    z-index: 4 !important;
}
.killer-app header {
    border-radius: 10px 10px 0 0;
    height: 75px;
}
.js .killer-app.collapsed header {
    height: 50px;
}
}
@media only screen and (min-width: 1001px) {
.killer-app {
    border: 0 none;
}
.killer-app.collapsed::before {
    border-right: 1px solid #c8c8c2;
    bottom: 10px;
    content: " ";
    position: absolute;
    right: 0;
    top: 10px;
    z-index: 5;
}
.killer-app.collapsed::after {
    bottom: 20px;
    height: auto;
    left: auto;
    right: 0;
    top: 20px;
    width: 5px;
}
.column:last-child .killer-app::before, .column:last-child .killer-app::after {
    display: none;
}
.killer-app .title {
    padding-right: 0;
}
.killer-app .title::after {
    display: none;
}
.killer-app .form {
    min-height: 80px;
}
}
.killer-apps.columns {
    padding: 0 10px;
}
.killer-apps.columns .killer-app {
    left: 2px;
    right: 2px;
}
.killer-apps.columns .column {
    margin-bottom: 20px;
    padding: 0;
    position: relative;
}
@media only screen and (min-width: 661px) {
.killer-apps.columns {
    padding: 0;
}
.killer-apps.columns .column {
    min-height: 70px;
}
}
@media only screen and (min-width: 1001px) {
.killer-apps.columns .column {
    min-height: 150px;
}
}
.killer-apps.columns.inverted .killer-app .title {
    color: #ffffff;
}
.killer-apps.columns.inverted .killer-app header {
    background-color: #ed8c00;
    color: #ffffff;
}
.killer-apps.columns.inverted .killer-app form {
    background-color: #ffffff;
}
.lookup-app {
    margin-bottom: 40px;
}
.lookup-app .title {
    margin-top: 30px;
}
.lookup-app .tabs {
    min-width: 310px;
}
.lookup-app .tab {
    display: inline-block;
    float: none;
    max-width: 50%;
    vertical-align: bottom;
}
.lookup-app .tab-content, .lookup-app .results {
    border-radius: 0 10px;
}
.lookup-app .tab-content {
    padding-bottom: 0;
    position: relative;
}
.lookup-app .tab-content.with-results {
    box-shadow: 2px 1px 2px rgba(0, 0, 0, 0.1);
    margin-bottom: 0;
}
.lookup-app .tab-content.with-results::before {
    background-color: #f0f0ec;
    border-radius: 3px 0;
    bottom: -15px;
    box-shadow: 2px 1px 2px rgba(0, 0, 0, 0.1);
    content: " ";
    display: block;
    height: 30px;
    left: 50%;
    margin-left: -15px;
    position: absolute;
    transform: rotate(45deg);
    width: 30px;
}
.lookup-app .tab-content .title {
    font-size: 1.28571em;
    margin-top: 0;
}
.lookup-app .tab-content .form {
    background-color: transparent;
}
.lookup-app .results {
    background-color: #ed8c00;
    color: #ffffff;
    margin-top: -10px;
    overflow: hidden;
    padding: 40px 30px 30px;
}
.lookup-app .results .title, .lookup-app .results .result {
    font-size: 1.28571em;
}
.lookup-app .results p {
    margin-bottom: 10px;
}
.lookup-app .results em {
    font-size: 1.33333em;
    font-style: normal;
    line-height: 1;
    padding-right: 3px;
}
.lookup-app .results .suggestions {
    border-top: 1px solid #f5c680;
    padding-top: 10px;
}
.lookup-app .results .suggestions .column {
    margin-bottom: 20px;
}
.app.customer-support {
    display: block;
    overflow: visible;
}
.app.customer-support .collapsible-toggle, .app.customer-support dl.collapsible-items dt, dl.collapsible-items .app.customer-support dt {
    font-size: 1.84615em;
    padding-left: 0;
}
.app.customer-support .collapsible-toggle::before, .app.customer-support dl.collapsible-items dt::before, dl.collapsible-items .app.customer-support dt::before {
    display: none;
}
.app.customer-support .collapsible-toggle::after, .app.customer-support dl.collapsible-items dt::after, dl.collapsible-items .app.customer-support dt::after {
    content: "";
    vertical-align: middle;
}
.app.customer-support .collapsible-toggle.toggled::after, .app.customer-support dl.collapsible-items dt.toggled::after, dl.collapsible-items .app.customer-support dt.toggled::after {
    content: "";
}
@media only screen and (min-width: 661px) {
.app.customer-support {
    clear: both;
    display: table;
    margin: 0;
    width: 100%;
}
.app.customer-support .category-links .description {
    padding-right: 0;
}
}
.lookup-app {
    margin-bottom: 40px;
}
.lookup-app .title {
    margin-top: 30px;
}
.lookup-app .tabs {
    min-width: 310px;
}
.lookup-app .tab {
    display: inline-block;
    float: none;
    max-width: 50%;
    vertical-align: bottom;
}
.lookup-app .tab-content, .lookup-app .results {
    border-radius: 0 10px;
}
.lookup-app .tab-content {
    padding-bottom: 0;
    position: relative;
}
.lookup-app .tab-content.with-results {
    box-shadow: 2px 1px 2px rgba(0, 0, 0, 0.1);
    margin-bottom: 0;
}
.lookup-app .tab-content.with-results::before {
    background-color: #f0f0ec;
    border-radius: 3px 0;
    bottom: -15px;
    box-shadow: 2px 1px 2px rgba(0, 0, 0, 0.1);
    content: " ";
    display: block;
    height: 30px;
    left: 50%;
    margin-left: -15px;
    position: absolute;
    transform: rotate(45deg);
    width: 30px;
}
.lookup-app .tab-content .title {
    font-size: 1.28571em;
    margin-top: 0;
}
.lookup-app .tab-content .form {
    background-color: transparent;
}
.lookup-app .results {
    background-color: #ed8c00;
    color: #ffffff;
    margin-top: -10px;
    overflow: hidden;
    padding: 40px 30px 30px;
}
.lookup-app .results .title, .lookup-app .results .result {
    font-size: 1.28571em;
}
.lookup-app .results p {
    margin-bottom: 10px;
}
.lookup-app .results em {
    font-size: 1.33333em;
    font-style: normal;
    line-height: 1;
    padding-right: 3px;
}
.lookup-app .results .suggestions {
    border-top: 1px solid #f5c680;
    padding-top: 10px;
}
.lookup-app .results .suggestions .column {
    margin-bottom: 20px;
}
#lifeline-header {
    background: #f0f0ec none repeat scroll 0 0;
    border-bottom: medium none #b1b1b1;
    box-shadow: 0 3px 7px #b1b1b1;
    font-family: Arial,sans-serif;
    font-size: 15px;
    min-width: 700px;
    padding: 10px 10px 10px 15px;
    text-align: center;
    width: auto;
}
#lifeline-header .lifeline-header-back {
    color: #ed8c00;
    float: left;
    padding-left: 25px;
    text-decoration: none;
}
#lifeline-header .lifeline-header-back:hover {
    background-position: 0 -36px;
    color: #001a73;
}
#lifeline-header .lifeline-header-title {
    color: #393939;
    margin-left: -50px;
    text-decoration: none;
}
#lifeline-header .lifeline-header-title:hover {
    color: #001a73;
}
#lifeline-header .lifeline-header-close {
    color: #ed8c00;
    cursor: pointer;
    float: right;
    margin-bottom: -5px;
    margin-top: -5px;
    overflow: hidden;
    padding-bottom: 5px;
    padding-top: 5px;
    text-decoration: none;
    text-indent: -999em;
    width: 29px;
}
#lifeline-header .lifeline-header-close:hover {
    background-position: 6px 6px;
    color: #001a73;
}
.sprite-swoosh {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-swoosh.png");
}
.sprite-icons, .no-generatedcontent .main-menu .has-children {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-icons.png");
}
.sprite-header-light {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-header-light.png");
}
.sprite-flags {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-flags.png");
}
.no-generatedcontent body {
    visibility: visible !important;
}
.no-generatedcontent body .menu-overlay {
}
.no-generatedcontent .search-form .submit {
    text-indent: 0;
    width: auto;
}
.no-generatedcontent .columns.spaced .column, .no-generatedcontent .columns.spaced.narrow .column {
    padding: 0;
}
.no-generatedcontent .page-header {
    z-index: 1;
}
.no-generatedcontent .main-navigation {
    margin-left: -50px;
    position: relative;
}
.no-generatedcontent .menu-container {
    left: 0;
    position: absolute;
}
.no-generatedcontent .menu-container .login-options {
    right: -60px;
    top: -50px;
}
.no-generatedcontent .main-menu .has-children {
    background-position: 0 0;
    padding-right: 20px;
}
.no-generatedcontent .main-menu li:hover .has-children {
    background-position: 0 0;
    padding-right: 20px;
}
.no-generatedcontent .main-menu li.login-options a.has-children {
    background-position: 0 0;
}
.no-generatedcontent .breadcrumbs .separator {
    position: static;
}
.no-generatedcontent dl.collapsible-items dt, .no-generatedcontent .no-csstransforms dl.collapsible-items dt {
    background-position: 0 0;
    padding-left: 20px;
}
.no-backgroundsize .direct-actions {
}
.no-rgba.no-opacity body.menu-overlay .menu-overlay {
}
html.no-rgba body {
    visibility: hidden;
}
html.no-rgba.loaded body {
    visibility: visible;
}
html.no-rgba .killer-app .form::before {
    display: none;
}
.links a::before {
    clip: rect(0px, 25px, 1.5em, 0px);
}
.file::before {
    font-size: 16px;
    height: 1.4em;
    overflow: hidden;
}
.list .file::before, .links .file::before {
    font-size: 17px;
}
.links .file::before {
    clip: rect(0px, 25px, 1.25em, 0px);
}
.drop-down {
    border-radius: 0;
}
blockquote.testimonial p::before, blockquote.testimonial p::after {
    font-size: 40px;
}
blockquote.testimonial p::before {
    bottom: -0.7em;
}
.sprite-swoosh {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-swoosh.png");
}
.sprite-icons {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-icons.png");
}
.sprite-header-light, .postnl-header .postnl-header-swoosh::before, .postnl-header .postnl-header-swoosh::after {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-header-light.png");
}
.sprite-flags {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-flags.png");
}
@font-face {
    font-family: "PostNL-Regular";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-regular.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.svg#PostNL-Regular") format("svg");
}
@font-face {
    font-family: "PostNL-Medium";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-medium.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.svg#PostNL-Medium") format("svg");
}
@font-face {
    font-family: "PostNL-Bold";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-bold.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.svg#PostNL-Bold") format("svg");
}
.postnl-header {
    font-family: "PostNL-Regular",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
.postnl-header .postnl-header-title {
    font-family: "PostNL-Medium",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
@font-face {
    font-family: "PostNL-icons";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.svg#PostNL-icons") format("svg");
}
.postnl-header .postnl-header-link::after {
    font-family: "PostNL-icons",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
body {
    margin: 0;
    padding: 0;
}
.postnl-header {
    font-size: 16px;
    line-height: 1.3;
    margin: 0 auto;
    max-width: 940px;
    min-width: 300px;
    padding: 15px 10px 20px;
    position: relative;
}
.postnl-header .postnl-header-links {
    margin: 0;
}
.postnl-header .postnl-header-link {
    color: #ed8c00;
    display: inline-block;
    margin-right: 15px;
    padding-right: 20px;
    position: relative;
    text-decoration: none;
}
.postnl-header .postnl-header-link::after {
    content: "";
    font-size: 1.42857em;
    line-height: 1;
    margin-top: -0.5em;
    position: absolute;
    right: 0;
    top: 50%;
}
.postnl-header .postnl-header-link:hover {
    color: #001a73;
}
.postnl-header .postnl-header-logo {
    float: right;
    margin-top: 35px;
}
.postnl-header .postnl-header-logo img {
    border: 0 none;
    width: 65px;
}
.postnl-header .postnl-header-title {
    color: #001a73;
    font-size: 30px;
    line-height: 1;
    margin: 45px 0 0;
}
.postnl-header .postnl-header-subtitle {
    color: #ed8c00;
    font-size: 18px;
    margin: 0;
}
.postnl-header .postnl-header-swoosh {
    background-color: #ec7320;
    background-image: linear-gradient(to right, #fcba1a 0%, #ec7320 100%);
    border: 0 none;
    display: block;
    height: 6px;
    left: 21px;
    margin: 0;
    overflow: visible;
    padding: 0;
    position: absolute;
    right: 70px;
    top: 50px;
}
.postnl-header .postnl-header-swoosh::before, .postnl-header .postnl-header-swoosh::after {
    background-position: 0 0;
    content: " ";
    display: block;
    position: absolute;
}
.postnl-header .postnl-header-swoosh::before {
    bottom: 0;
    height: 13px;
    right: 100%;
    width: 11px;
}
.postnl-header .postnl-header-swoosh::after {
    background-position: 0 -13px;
    height: 24px;
    left: 100%;
    top: 0;
    width: 45px;
}
@media only screen and (min-width: 480px) {
.postnl-header .postnl-header-logo img {
    width: 80px;
}
.postnl-header .postnl-header-title {
    font-size: 40px;
}
.postnl-header .postnl-header-subtitle {
    font-size: 24px;
}
}
.sprite-swoosh {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-swoosh.png");
}
.sprite-icons {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-icons.png");
}
.sprite-header-light {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-header-light.png");
}
.sprite-flags, .language-switch .language::before, .language-popup .language::before, .language-switch-dep a::before {
    background-image: url("/sites/all/themes/developer/img/sprites/sprite-flags.png");
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
    display: block;
}
audio, canvas, video {
    display: inline-block;
}
audio:not([controls]) {
    display: none;
    height: 0;
}
[hidden], template {
    display: none;
}
html {
    font-family: sans-serif;
}
body {
    margin: 0;
}
a {
    background: transparent none repeat scroll 0 0;
}
a:focus {
    outline: thin dotted;
}
a:active, a:hover {
    outline: 0 none;
}
h1 {
    font-size: 2em;
    margin: 0.67em 0;
}
abbr[title] {
    border-bottom: 1px dotted;
}
b, strong {
    font-weight: bold;
}
dfn {
    font-style: italic;
}
hr {
    box-sizing: content-box;
    height: 0;
}
mark {
    background: #ff0 none repeat scroll 0 0;
    color: #000;
}
code, kbd, pre, samp {
    font-family: monospace,serif;
    font-size: 1em;
}
pre {
    white-space: pre-wrap;
}
q {
    quotes: """ """ "‘" "’";
}
small {
    font-size: 80%;
}
sub, sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}
sup {
    top: -0.5em;
}
sub {
    bottom: -0.25em;
}
img {
    border: 0 none;
}
svg:not(:root) {
    overflow: hidden;
}
figure {
    margin: 0;
}
fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}
legend {
    border: 0 none;
    padding: 0;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: 100%;
    margin: 0;
}
button, input {
    line-height: normal;
}
button, select {
    text-transform: none;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    cursor: pointer;
}
button[disabled], html input[disabled] {
    cursor: default;
}
input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
}
input[type="search"] {
    box-sizing: content-box;
}
button::-moz-focus-inner, input::-moz-focus-inner {
    border: 0 none;
    padding: 0;
}
textarea {
    overflow: auto;
    vertical-align: top;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
@font-face {
    font-family: "PostNL-Regular";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-regular.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.svg#PostNL-Regular") format("svg");
}
@font-face {
    font-family: "PostNL-Medium";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-medium.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.svg#PostNL-Medium") format("svg");
}
@font-face {
    font-family: "PostNL-Bold";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-bold.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.svg#PostNL-Bold") format("svg");
}
.search-suggestions, .business-actions, .business-label {
    text-rendering: optimizelegibility;
}
h3, .h3, .h2 + .h2.subtitle, blockquote, table.rates .title, .content-bar .testimonial, blockquote.testimonial, .main-menu a, .drop-down h2, .global-search label, .search-form .input, .autocomplete-suggestions.large, .business-actions .title, .button.square, .button.large, .page-footer .killer-app-links {
    font-family: "PostNL-Regular",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
h1, .h1, h2, .h2, .search-results .result .title b, .business-actions .subtitled .subtitle {
    font-family: "PostNL-Medium",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
@font-face {
    font-family: "PostNL-icons";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.svg#PostNL-icons") format("svg");
}
.icon::before, .language-switch .select-value::after, .language-switch-dep a::after, .page-header .icon-toggle a::after, .main-menu .has-children::after, .main-menu .login-options .drop-down a::after, .main-menu .menu-toggle::after, .drop-down h2 a::before, .drop-down a::after, .drop-down .items a::before, .search-form .submit::after, .button.action::before, .button.drop-down::before, .button.action::after, .button.drop-down::after, .button.previous::before, .button.exit::after, .button.phone::before, .button.mail::before, .exit-link::after, .page-footer .killer-app-links a::after, .page-footer .items a::after {
    font-family: "PostNL-icons",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
body {
    background-color: #ffffff;
    color: #444444;
    font: 14px/1.5 Arial,Helvetica,sans-serif;
}
.main .search-form label, .page-footer .title {
    color: #001a73;
    font-family: "PostNL-Regular",sans-serif;
    font-size: 1.28571em;
    font-weight: normal;
    line-height: 1.2;
    margin: 1.2em 0 0.18em;
    text-rendering: optimizelegibility;
}
h1, .h1, h2, .h2 {
    color: #001a73;
    line-height: 1.1;
}
h3, .h3 {
    font-size: 1.28571em;
    line-height: 1.2;
    margin: 1.2em 0 0.18em;
}
h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
    color: #001a73;
}
h1, .h1 {
    font-size: 1.85714em;
    margin: 0;
}
h2, .h2 {
    font-size: 1.71429em;
    margin: 30px 0 0.35em;
}
h2.first-title, .h2.first-title {
    margin-top: 0;
}
.h2 + .h2.subtitle {
    color: #ed8c00;
    font-size: 1.28571em;
    margin-bottom: 0.5em;
    margin-top: -0.5em;
    max-width: 90%;
}
h3, .h3 {
    font-size: 1.28571em;
    margin: 1.2em 0 0.18em;
}
h4, .h4, h5, .h5 {
    margin-bottom: 0;
}
p, table, ul, ol, figure {
    margin: 0 0 1.6em;
}
p.offset-bottom-half {
    margin-bottom: 0.8em;
}
ul, ol {
    padding: 0 0 0 2em;
}
h2 + ul, .h2 + ul, h3 + ul, .h3 + ul, h4 + ul .h4 + ul, h2 + ol, .h2 + ol, h3 + ol, .h3 + ol, h4 + ol .h4 + ul, h4 + ul .h4 + ol, h4 + ol .h4 + ol {
    margin-top: 0.5em;
}
a {
    color: #ed8c00;
    text-decoration: underline;
}
a:focus, a:hover {
    color: #001a73;
    outline: medium none;
}
a.link-nostyle {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 0 none;
    color: inherit;
    font-size: inherit;
    text-decoration: inherit;
}
@media only screen and (max-width: 1000px) {
abbr[title] {
    border-bottom: 0 none;
}
abbr[title]::after {
    content: " (" attr(title) ")";
}
}
ins {
    text-decoration: none;
}
blockquote {
    font-size: 1.5em;
    line-height: 1.3;
    margin: 0.5em 0 0;
}
blockquote > p {
    margin: 0 0 1em;
}
blockquote > p::before, blockquote > p::after {
    font-size: 1.38462em;
    margin-top: -3px;
    position: absolute;
}
blockquote > p::before {
    content: """;
    margin-left: -12px;
}
blockquote > p::after {
    content: """;
    margin-left: 3px;
}
cite {
    font-size: 0.92857em;
    font-style: normal;
    font-weight: bold;
}
cite .author-info {
    font-weight: normal;
}
blockquote footer .cite {
    font-size: 0.61905em;
}
.js img.responsive {
    visibility: hidden;
}
.js img.responsive.visible {
    visibility: visible;
}
.main img, .main iframe, .content-container img, .content-container iframe {
    max-width: 100%;
}
table {
    border: 0 none;
    font-size: 0.92857em;
    width: 100%;
}
table strong {
    color: #ed8c00;
}
table ins {
    padding-left: 5px;
    white-space: nowrap;
}
table.underlined tr {
    border-bottom: 1px solid #d2d2cc;
}
table.rates .title {
    color: #001a73;
    display: block;
    font-size: 1.07692em;
}
table.rates strong {
    color: #d42b1e;
}
table.rates tbody th:first-child {
    width: 155px;
}
table.rates.large.underlined {
    border-top: 1px solid #c8c8c2;
}
table.rates.large.underlined tr {
    border-color: #c8c8c2;
}
table.rates.large td, table.rates.large th {
    padding: 13px 10px;
}
table.rates.large th:first-child {
    width: 33%;
}
table.rates.large th p {
    color: #898987;
    margin: 0;
}
table.rates.large thead th, table.rates.large tbody td {
    background-color: #f0e1c9;
    border-right: 2px solid #f0f0ec;
}
table.rates.large thead th:first-child {
    background-color: transparent;
    border-right-width: 0;
}
table.rates.large thead th {
    text-align: center;
}
table.rates.large thead th:first-child {
    font-weight: normal;
    text-align: left;
}
table.rates.large tbody th {
    width: 250px;
}
table.rates.large tbody td {
    text-align: center;
}
table.rates.large .title {
    margin-bottom: 0;
}
@media only screen {
table.rates .title {
    font-size: 1.15385em;
}
}
td, th {
    border: 0 none;
    padding: 5px;
    vertical-align: top;
}
tr {
    border-bottom: 1px solid #d2d2cc;
}
td p, th p {
    margin: 0;
}
th {
    padding-right: 40px;
    text-align: left;
}
tbody th {
    font-weight: normal;
}
figcaption {
    font-style: italic;
    padding: 5px 10px;
}
figure.image {
    background-color: #f0f0ec;
    display: table;
    width: 100px;
}
figure.image img {
    max-width: none;
}
@media only screen and (max-width: 660px) {
figure.image {
    width: 100px;
}
}
figure.rounded {
    border-radius: 5px 5px 0;
    overflow: hidden;
}
.figure img {
    max-width: 100%;
}
.hidden {
    display: none;
}
blockquote.testimonial {
    margin: 0 0 1.5em 20px;
}
.content-bar .testimonial, blockquote.testimonial {
    border-left: 2px solid #ed8c00;
    color: #ed8c00;
    font-size: 1.42857em;
    line-height: 1.2;
    padding: 0 10px 0 18px;
}
.content-bar .testimonial.floats, blockquote.testimonial.floats {
    margin: 0.3em 0 22px 20px;
}
.content-bar .testimonial > p, blockquote.testimonial > p {
    position: relative;
}
.content-bar .testimonial > p::before, .content-bar .testimonial > p::after, blockquote.testimonial > p::before, blockquote.testimonial > p::after {
    font-size: 2.14286em;
    line-height: 0.1;
    margin-left: 0;
    position: relative;
}
.content-bar .testimonial > p::before, blockquote.testimonial > p::before {
    bottom: -0.4em;
    content: """;
    margin-right: 5px;
}
.content-bar .testimonial > p::after, blockquote.testimonial > p::after {
    content: "„";
    margin-left: 5px;
    top: -0.1em;
}
@media only screen and (min-width: 661px) {
.content-bar .testimonial, .content-bar .testimonial.floats, blockquote.testimonial, blockquote.testimonial.floats {
    margin-left: 0;
}
.content-bar .testimonial.floats, blockquote.testimonial.floats {
    width: 45%;
}
.content-bar .testimonial.floats.right, blockquote.testimonial.floats.right {
    margin-left: 40px;
}
}
.no-list li {
    margin: 0;
}
.offset-container {
    position: relative;
}
.placeholder {
    color: #999999 !important;
}
.align-right {
    text-align: right;
}
.floats {
    margin-bottom: 1em;
}
.clears.left {
    clear: left;
}
.clears.right {
    clear: right;
}
.clears.both {
    clear: both;
}
.clickable {
    cursor: pointer;
}
.line {
    display: block;
}
.no-margin {
    margin-bottom: 0;
}
@media only screen and (min-width: 661px) {
.floats {
    margin-top: 1em;
}
.floats.right {
    float: right;
    margin-left: 10px;
}
.floats.left {
    float: left;
    margin-right: 10px;
}
.columns::after {
    clear: both;
    content: " ";
    display: block;
}
.columns .column {
    float: left;
    width: 50%;
}
.columns .column.odd {
    clear: left;
}
.columns.spaced .column {
    box-sizing: border-box;
    padding-left: 20px;
    padding-right: 20px;
}
.columns.spaced .column.odd {
    padding-left: 0;
}
.columns.spaced .column.even {
    padding-right: 0;
}
.columns.spaced .column.first {
    padding-left: 0;
    padding-right: 20px;
}
.columns.spaced .column.last {
    padding-left: 20px;
    padding-right: 0;
}
.columns.spaced.narrow .column {
    padding-left: 10px;
    padding-right: 10px;
}
.columns .columns {
    clear: both;
    overflow: hidden;
}
}
@media only screen and (min-width: 1001px) {
.columns .column.odd {
    clear: none;
}
.columns .column.first {
    clear: left;
}
.columns.three .column {
    width: 33.3%;
}
.columns.four .column {
    width: 25%;
}
.columns.spaced .column, .columns.spaced .column.odd, .columns.spaced .column.even {
    padding-left: 10px;
    padding-right: 10px;
}
.columns.spaced .column.first {
    padding-left: 0;
    padding-right: 20px;
}
.columns.spaced .column.last {
    padding-left: 20px;
    padding-right: 0;
}
.columns.spaced.narrow .column {
    padding-left: 5px;
    padding-right: 5px;
}
.columns.spaced.narrow .column.first {
    padding-left: 0;
    padding-right: 10px;
}
.columns.spaced.narrow .column.last {
    padding-left: 10px;
    padding-right: 0;
}
}
.background-offset {
    background-color: #f0f0ec;
}
.no-list, .main-navigation ol, .drop-down .items, .search-results .results, .page-footer ul, .global-links ul {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.off-screen, .drop-down {
    left: -9999px;
    position: absolute;
}
.cleared::after, .main .single-line-search::after {
    clear: both;
    content: " ";
    display: table;
}
.content-bar::before, .content-bar::after {
    clear: both;
    content: " ";
    display: table;
}
.page-footer .footer-top, .global-links .content-container {
    border-bottom: 1px solid #d2d2cc;
}
.page-footer .footer-top::after, .global-links .content-container::after {
    border-radius: 100%;
    bottom: 0;
    box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.2);
    content: " ";
    display: block;
    height: 10px;
    left: 12.5%;
    position: absolute;
    right: 12.5%;
    z-index: -1;
}
*::-moz-selection {
    background-color: rgba(237, 140, 0, 0.3);
}
.content-container, .page-header {
    clear: both;
    float: none;
    margin-left: auto;
    margin-right: auto;
}
.content-container::after, .page-header::after {
    clear: both;
    content: " ";
    display: block;
}
.content-container > .content, .page-header > .content {
    padding-left: 10px;
    padding-right: 10px;
}
.alternate.content-container, .alternate.page-header {
    background-color: #f0f0ec;
}
.actions.content-container, .actions.page-header {
    background-color: #ed8c00;
    color: #ffffff;
    padding-bottom: 20px;
    padding-top: 10px;
}
.actions.content-container .title, .actions.page-header .title {
    color: #ffffff;
    margin: 0.7em 0;
}
.actions.content-container .button.action, .actions.page-header .button.action {
    background-color: #ed8c00;
    border-color: #ffffff;
    color: #ffffff;
}
@media only screen and (min-width: 661px) {
.content-container, .page-header {
    width: 640px;
}
}
@media only screen and (min-width: 1001px) {
.content-container, .page-header {
    width: 960px;
}
.container-8 {
    width: 640px;
}
.content-container.indented {
    box-sizing: border-box;
    padding-left: 70px;
}
}
@media only screen and (min-width: 1151px) {
.content-container, .page-header {
    width: 1120px;
}
.container-12 {
    width: 960px;
}
.container-8 {
    width: 640px;
}
}
.content-bar .content-bar-content {
    margin-bottom: 60px;
    margin-top: 40px;
}
.content-bar.alternate {
    background-color: #f0f0ec;
}
.content-bar.alternate .content-bar-content {
    margin-bottom: 40px;
    margin-top: 30px;
}
.content-bar.actions {
    background-color: #ed8c00;
    color: #ffffff;
}
.content-bar.actions .title {
    color: #ffffff;
    margin: 0.7em 0;
}
.content-bar.actions .button.action {
    background-color: #ed8c00;
    border-color: #ffffff;
    color: #ffffff;
}
.content-bar.alternate:last-child, .content-bar.actions:last-child {
    margin-bottom: -40px;
}
.icon {
    color: #ed8c00;
    display: inline-block;
    font-size: 25px;
    height: 25px;
    line-height: 25px;
    overflow: hidden;
    text-decoration: none;
    transition: color 0.1s ease 0s;
    white-space: nowrap;
    width: 25px;
}
.icon::before {
    display: inline-block;
    text-align: center;
    width: 100%;
}
.icon:hover {
    color: #001a73;
}
.icon.large {
    font-size: 30px;
    height: 30px;
    line-height: 30px;
    width: 30px;
}
.icon.rss::before {
    content: "";
}
.icon.facebook::before {
    content: "";
}
.icon.twitter::before {
    content: "";
}
.icon.linkedin::before {
    content: "";
}
.icon.instagram::before {
    content: "";
}
.icon.mail::before {
    content: "";
}
.language-switch {
    font-size: 0.92308em;
    margin: 0;
    position: absolute;
    right: 110px;
    top: 20px;
    z-index: 3;
}
.language-switch .select-value::after {
    content: "";
    display: inline-block;
    font-size: 1.5em;
    line-height: 0.5;
    vertical-align: middle;
}
.language-switch .language-select {
    padding: 5px 10px;
}
.language-switch .language-select .language {
    display: block;
    padding: 4px 0;
}
.language-switch .language-select .is-selected {
    display: none;
}
.language-switch .fake-select.is-open .select-value::after {
    content: "";
}
.language-switch .fake-select.is-open .language-select {
    left: auto;
    right: 0;
}
.language-switch .fake-select.is-closed .language-select {
    left: -9999em;
    right: auto;
}
.language-switch .language, .language-popup .language {
    color: #001a73;
    text-decoration: none;
}
.language-switch .language::before, .language-popup .language::before {
    background-position: 0 -24px;
    background-repeat: no-repeat;
    content: " ";
    display: inline-block;
    height: 12px;
    margin-right: 5px;
    vertical-align: text-top;
    width: 19px;
}
.language-switch .nl::before, .language-popup .nl::before {
    background-position: 0 -72px;
}
.language-switch .de::before, .language-popup .de::before {
    background-position: 0 -12px;
}
.language-switch .fr::before, .language-popup .fr::before {
    background-position: 0 -48px;
}
.language-switch .es::before, .language-popup .es::before {
    background-position: 0 -36px;
}
.language-switch .ch::before, .language-switch .zh::before, .language-popup .ch::before, .language-popup .zh::before {
    background-position: 0 0;
}
.language-switch .ru::before, .language-popup .ru::before {
    background-position: 0 -84px;
}
.language-switch .it::before, .language-popup .it::before {
    background-position: 0 -60px;
}
.language-popup .clear {
    clear: both;
}
.language-popup h2.title {
    color: #001a73;
    margin: 15px 0 10px;
}
.language-popup div.description {
    display: none;
    margin: 0;
    padding: 0;
}
@media only screen and (min-width: 661px) {
.language-popup div.description {
    display: block;
}
}
.language-popup div.description-devices {
    margin: 0;
    padding: 0;
}
.language-popup ul {
    float: left;
    margin: 0;
    padding: 5px 0 15px;
    width: 100%;
}
.language-popup ul li {
    float: left;
    list-style: outside none none;
    width: 100%;
}
@media only screen and (min-width: 661px) {
.language-popup ul li {
    width: 50%;
}
}
.language-popup ul li a {
    text-decoration: none;
}
.language-switch-dep {
    background: #ffffff none repeat scroll 0 0;
    bottom: -31px;
    font-size: 0.92308em;
    margin: 0;
    position: absolute;
    right: 25px;
}
.language-switch-dep a {
    color: #001a73;
    text-decoration: none;
}
.language-switch-dep a::before {
    background-position: 0 -24px;
    content: " ";
    display: inline-block;
    height: 12px;
    margin-right: 5px;
    vertical-align: text-top;
    width: 19px;
}
.language-switch-dep a::after {
    content: "";
    display: inline-block;
    font-size: 1em;
    margin-left: 5px;
    vertical-align: middle;
}
.page-header, .page-header .page-header-content {
    position: relative;
}
.page-header a {
    color: #001a73;
    text-decoration: none;
}
.page-header .icon-toggle {
    float: right;
    font-size: 1em;
    margin: 0;
    position: relative;
    z-index: 1;
}
.page-header .icon-toggle a {
    display: block;
    padding: 0;
    text-align: center;
}
.page-header .icon-toggle a::before {
    display: none;
}
.page-header .icon-toggle a::after {
    border-color: transparent;
    border-style: solid;
    border-width: 0 1px 2px;
    bottom: 0;
    display: block;
    font-size: 1.8em;
    left: 0;
    line-height: 45px;
    position: absolute;
    right: 0;
    text-indent: 0;
    top: 0;
}
.page-header .icon-toggle.active {
    background-color: #f0f0ec;
}
.full-width-header .page-header .icon-toggle.active {
    padding-bottom: 8px;
    z-index: 6;
}
.page-header .icon-toggle.active a::after {
    border-bottom: 2px solid #f0f0ec;
}
.logo {
    float: left;
}
.logo img {
    vertical-align: middle;
    width: 70px;
}
.main-navigation {
    min-height: 1px;
}
.main-navigation .icon-toggle {
    z-index: 3;
}
.main-navigation .icon-toggle a::after {
    content: "";
}
.main-navigation .icon-toggle.active a::after {
    border-left-color: #d2d2cc;
}
.main-menu {
    background-color: #f0f0ec;
}
.main-menu a {
    display: block;
    font-size: 1.35714em;
}
.main-menu .last-child > a {
    border-right: 0 none;
}
.main-menu.active, .main-menu.js-hidden {
    position: static;
}
.main-menu .menu-toggle {
    border-left: 1px solid #c9c8c2;
    margin: 0;
    padding-left: 0 !important;
    position: absolute;
    right: 0;
    text-indent: -9999em;
    top: 0;
    width: 50px;
}
.main-menu .menu-toggle::after {
    bottom: 0;
    content: "";
    font-size: 0.88889em;
    left: 0;
    line-height: 50px;
    position: absolute;
    right: 0;
    text-align: center;
    text-indent: 0;
    top: 0;
}
.main-menu .open > .menu-toggle::after {
    content: "";
}
.main-menu p {
    margin: 0;
}
.main-menu .business-actions {
    display: none;
}
.drop-down h2 {
    font-size: inherit;
    margin: 0;
}
.drop-down h2 a::before {
    content: "";
    font-size: 1.3em;
    line-height: 1;
    margin-left: -6px;
}
.drop-down a {
    color: #001a73;
}
.drop-down a:hover {
    color: #001a73;
}
.drop-down a.button::before {
    display: none;
}
.drop-down .items a {
    color: #989898;
}
.drop-down .items a:hover {
    color: #001a73;
}
.drop-down .items a::before {
    content: "";
    font-size: 1.2em;
    margin-left: -0.2em;
    vertical-align: sub;
}
.drop-down .items li .more {
    color: #ed8c00;
}
.drop-down .buttons {
    border-top: 1px solid #d2d2cc;
    margin-top: 1em;
    padding-top: 1em;
}
.drop-down .buttons .button {
    color: #ffffff;
    font: bold 1em/2 Arial,Helvetica,sans-serif;
}
.drop-down .footer {
    border-top: 1px solid #d2d2cc;
    clear: both;
    margin: 0;
}
.global-search .icon-toggle {
    position: absolute;
    right: 50px;
    top: 0;
    z-index: 3;
}
.global-search .icon-toggle a::after {
    content: "";
}
.global-search .icon-toggle.active a::after {
    border-left-color: #d2d2cc;
    border-right-color: #d2d2cc;
}
.global-search p {
    margin: 0;
}
.global-search label {
    color: #001a73;
    font-size: 1.35714em;
}
.global-search .form-row .input {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 1em;
    padding: 4px 8px;
    width: 100%;
}
.global-search .form-row .submit::after {
    line-height: 1.4;
}
.full-width-header .page-header {
    margin-bottom: 7px;
}
@media only screen and (max-width: 1000px) {
.logo, .icon-toggle {
    height: 80px;
    line-height: 80px;
    width: 50px;
}
.logo {
    padding-left: 10px;
    position: relative;
    z-index: 1;
}
.main-menu, .drop-down .items, .drop-down .buttons {
    left: -9999px;
    position: absolute;
}
.main-menu {
    border-top: 1px solid #d2d2cc;
    clear: both;
}
.main-menu a {
    margin-left: 20px;
    margin-right: 50px;
    padding: 11px 0;
}
.main-menu ol {
    border-top: 1px solid #c8c8c2;
    margin-bottom: -1px;
}
.main-menu li {
    border-top: 1px solid #c8c8c2;
    position: relative;
    transition: border-color 0.4s ease 0s;
}
.main-menu li.active a {
    color: #001a73;
}
.main-menu li.open {
    border-top-color: #b1b1b1;
}
.main-menu li.open > .menu-toggle {
    background-color: #001a73;
    color: #ffffff;
}
.main-menu li:first-child {
    border-top: 0 none;
}
.main-menu .footer {
    display: none;
}
.main-menu .columns .column {
    float: none;
    width: auto;
}
.main-menu .columns .column.last.has-business-actions {
    border-top: 0 none;
}
.main-menu .children {
    margin-left: 20px;
}
.main-menu .children a {
    margin-left: 0;
    padding-left: 10px;
}
.main-menu .children, .main-menu .children .children .children {
    background-color: #e5e5de;
}
.main-menu .children .children, .main-menu .children .children .children .children {
    background-color: #f0f0ec;
    margin-left: 0;
    padding-left: 20px;
}
.main-menu .children .children a, .main-menu .children .children .children .children a {
    padding-left: 0;
}
.main-menu .children .children a {
    font-size: 1.21429em;
}
.main-menu .children .children .children {
    padding-left: 0;
}
.main-menu .children .children .children a {
    font-size: 1.07143em;
    padding-left: 10px;
}
.login-options .drop-down a, .login-options .drop-down .more {
    border-top: 1px solid #c8c8c2;
    display: block;
    margin-right: 0;
}
.login-options .drop-down p {
    font-size: 0.78947em;
}
.login-options .drop-down .more {
    padding: 11px 10px;
}
.login-options .drop-down .more::after {
    display: none;
}
.drop-down.active, .drop-down.js-hidden {
    position: static;
}
.drop-down a::before, .drop-down a.more {
    display: none;
}
.global-search .search-form {
    left: -9999px;
    position: absolute;
}
.global-search .search-form.js-hidden {
    position: static;
}
.global-search .search-form.js-hidden, .global-search .search-form.active {
    background-color: #f0f0ec;
    border-top: 1px solid #d2d2cc;
    clear: both;
    position: static;
}
.global-search .form-row {
    margin: 0 20px;
    padding: 10px 2px 25px 0;
}
.global-search label {
    display: block;
    margin-bottom: 15px;
}
body {
    margin-top: 112px;
}
.page-header {
    backface-visibility: hidden;
    background-color: white;
    height: 80px;
    left: 0;
    opacity: 1;
    position: fixed;
    right: 0;
    top: 0;
    transition: height 10ms ease 400ms, opacity 400ms ease-out 0s;
    z-index: 10;
}
.page-header.is-moved-up {
    height: 0;
    opacity: 0;
    overflow: hidden;
}
body.full-width-header {
    margin-top: 0;
}
body.full-width-header .page-header {
    background-color: transparent;
    position: static;
}
.logo {
    background: white none repeat scroll 0 0;
    height: 80px;
    position: absolute;
    width: 100%;
    z-index: 3;
}
.menu-container {
    background-color: #ffffff;
    bottom: 0;
    display: none;
    height: 100%;
    left: 0;
    margin-left: auto;
    margin-right: auto;
    overflow-x: hidden;
    overflow-y: auto;
    position: fixed;
    right: 0;
    width: 100%;
    z-index: 1;
}
.rgba .menu-container {
    background-color: rgba(255, 255, 255, 0.5);
}
}
@media only screen and (max-width: 1000px) and (min-width: 661px) {
.menu-container {
    width: 640px;
}
}
@media only screen and (max-width: 1000px) {
.menu-container .main-menu {
    left: 0;
    padding-top: 80px;
    position: relative;
    right: 0;
    width: 100%;
    z-index: 1;
}
.menu-active body {
    overflow: hidden;
}
.menu-active .page-header {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    height: 100%;
}
.menu-active .page-header .menu-container {
    display: block;
}
.full-width-header .menu-active .page-header .menu-container {
    z-index: 2;
}
}
@media only screen and (min-width: 661px) {
.page-header {
    width: 640px;
}
}
@media only screen and (min-width: 1001px) {
.page-header {
    font-size: 0.92857em;
    margin-bottom: 30px;
    margin-top: 10px;
    width: 960px;
}
.full-width-header .page-header {
    margin-bottom: 0;
    position: static;
}
.logo {
    margin-left: 0;
    margin-top: 32px;
}
.logo img {
    width: 80px;
}
.full-width-header .logo {
    margin-top: 20px;
    position: relative;
    top: -20px;
    z-index: 3;
}
body::after, body .menu-overlay {
    background-color: transparent;
    content: " ";
    display: block;
    left: 0;
    position: fixed;
    top: 0;
    transition: background-color 0.25s ease 0s;
    z-index: 3;
}
.no-rgba.opacity body::after, .no-rgba.opacity body .menu-overlay {
    background-color: #000000;
    opacity: 0.25;
}
body.menu-overlay::after, body.menu-overlay .menu-overlay {
    background-color: rgba(0, 0, 0, 0.25);
    bottom: 0;
    right: 0;
}
body.menu-overlay-faded::after {
    background-color: transparent;
}
body.menu-overlay-faded .menu-overlay {
    display: none;
}
.icon-toggle {
    display: none;
}
.main-navigation {
    margin: 0 10px 0 90px;
    padding-top: 50px;
    position: relative;
}
.menu-overlay .main-navigation {
    z-index: 5;
}
.main-menu {
    display: block !important;
}
.main-menu a {
    font-size: 1.30769em;
}
.main-menu .menu-toggle {
    display: none;
}
.main-menu > li {
    float: left;
    overflow: hidden;
    padding-top: 10px;
}
.main-menu > li > a {
    border-right: 1px solid #d2d2cc;

    line-height: 1.2;
    padding: 0 10px;
    transition: border-right 0s ease 0s, transform 0s ease 0s;
}
.main-menu > li > a:hover, .main-menu > li > a:focus {
    color: #ed8c00;
}
.rgba .menu-overlay .main-menu > li > a {
    border-right-color: #969688;
}
.menu-overlay-faded .main-menu > li > a {
    border-right-color: #d2d2cc;
}
.main-menu > li.active > a {
    color: #ed8c00;
}
.menu-overlay .main-menu > li.active > a {
    color: #b26900;
}
.menu-overlay .main-menu > li.hover > a {
    color: #ed8c00;
}
.no-js .main-menu > li:hover, .main-menu > li.hover {
    overflow: visible;
}
.no-js .main-menu > li:hover > .has-children, .main-menu > li.hover > .has-children {
    background-color: #ffffff;
    border-color: transparent;
    border-radius: 10px 10px 0 0;
    margin: -10px 0 0 -1px;
    padding: 10px 5px 10px 11px;
    position: relative;
    z-index: 10;
}
.no-js .main-menu > li:hover > .has-children::after, .main-menu > li.hover > .has-children::after {
    content: "";
}
.no-js .main-menu > li:hover .drop-down, .main-menu > li.hover .drop-down {
    left: 80px;
    right: 0;
    width: auto;
}
.no-js .main-menu > li:hover .drop-down.four, .no-js .main-menu > li:hover .drop-down.seven, .no-js .main-menu > li:hover .drop-down.eight, .main-menu > li.hover .drop-down.four, .main-menu > li.hover .drop-down.seven, .main-menu > li.hover .drop-down.eight {
    left: -15px;
}
.no-js .main-menu > li:hover .drop-down.no-columns, .main-menu > li.hover .drop-down.no-columns {
    left: auto;
    margin-left: -20px;
    right: auto;
}
.main-menu > li .business-actions {
    display: block;
}
.main-menu .has-children {
    padding-right: 5px;
}
.main-menu .has-children::after {
    content: "";
    vertical-align: middle;
}
.drop-down {
    backface-visibility: hidden;
    background-color: #ffffff;
    border-radius: 10px 10px 0;
    box-shadow: -5px 15px 40px 0 rgba(0, 0, 0, 0.5);
    line-height: 1.2;
    overflow: hidden;
    padding: 0 30px;
    width: 600px;
}
.drop-down.no-columns {
    display: table;
}
.drop-down a, .drop-down a.more, .drop-down a.has-children {
    padding: 5px 20px 8px 0;
}
.drop-down a {
    color: #444444;
    position: relative;
}
.drop-down a:hover, .drop-down a:focus {
    color: #ed8c00;
}
.drop-down a::before {
    left: 0;
    position: absolute;
    top: 0.15em;
}
.drop-down a::after {
    font-size: 1.3em;
    position: relative;
    vertical-align: middle;
}
.drop-down a::after, .drop-down a.has-children::after {
    content: "";
}
.drop-down a.more {
    color: #ed8c00;
}
.drop-down a.more:hover {
    color: #001a73;
}
.drop-down .children a {
    display: none;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 0.92308em;
}
.drop-down .children a.always-visible {
    display: block;
}
.drop-down .column {
    padding: 20px 0 15px;
}
.drop-down .column.highlighted {
    background-color: #ffffff;
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.5);
    width: 55%;
}
.drop-down .column.first {
    clear: left;
}
.drop-down .column > .has-children::after {
    content: "";
    top: -1px;
}
.drop-down .column > a, .drop-down .footer a {
    color: #001a73;
}
.drop-down .column > a:hover, .drop-down .column > a:focus, .drop-down .footer a:hover, .drop-down .footer a:focus {
    color: #ed8c00;
}
.drop-down .footer {
    overflow: hidden;
    padding: 12px 0;
}
.drop-down .footer a {
    display: inline;
    padding: 0;
}
.drop-down .footer a.close-link {
    float: right;
    font-size: 0.9em;
    margin-top: 4px;
}
.drop-down .business-actions {
    font-size: 1em;
    line-height: 1.5;
}
.drop-down .business-actions .title {
    font-size: 1.38462em;
}
.drop-down .business-actions .more {
    display: block;
    font: 1em Arial,Helvetica,sans-serif;
    padding-right: 0;
}
.drop-down .business-actions .more::before {
    display: none;
}
.drop-down .language-switch, .drop-down .language-switch-dep {
    float: right;

    position: static;
}
.drop-down .language-switch a, .drop-down .language-switch-dep a {
    color: #444444;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 1em;
}
.drop-down .language-switch a::before, .drop-down .language-switch-dep a::before {
    position: static;
}
.drop-down .language-switch a::after, .drop-down .language-switch-dep a::after {
    content: "";
    font-size: 1em;
}
.drop-down .language-switch a:hover, .drop-down .language-switch-dep a:hover {
    color: #ed8c00;
}
.main-menu li.login-options {
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1;
}
.main-menu li.login-options a::before {
    display: none;
}
.main-menu li.login-options a.has-children {
    border: 0 none;
    border-radius: 5px 5px 0;
    font: bold 0.92308em/1.8 Arial,Helvetica,sans-serif;
    padding: 2px 40px 2px 10px;
    position: relative;
    transition: background-color 0.25s ease 0s, color 0.25s ease 0s;
    z-index: 1;
}
.main-menu li.login-options a.has-children::after {
    font-size: 20px;
    line-height: 1.2;
    position: absolute;
    right: 10px;
}
.menu-overlay .main-menu li.login-options a.has-children {
    background-color: #b26900;
    color: #bfbfbf;
}
.main-menu li.login-options a.has-children, .menu-overlay-faded .main-menu li.login-options a.has-children {
    background-color: #ed8c00;
    color: #ffffff;
}
.main-menu li.login-options.hover .has-children, .main-menu li.login-options:hover .has-children, .main-menu li.login-options:focus .has-children {
    background-color: #f0f0ec !important;
    border-bottom-left-radius: 0;
    color: #001a73 !important;
    margin: 0;
    padding: 2px 40px 2px 10px;
}
.main-menu li.login-options.hover .has-children::after, .main-menu li.login-options:hover .has-children::after, .main-menu li.login-options:focus .has-children::after {
    content: "";
}
.main-menu li.login-options.hover .drop-down, .main-menu li.login-options:hover .drop-down, .main-menu li.login-options:focus .drop-down {
    left: auto;
    right: 0;
}
.main-menu li.login-options .drop-down {
    background-color: #f0f0ec;
    border-radius: 10px 0 0 10px;
    line-height: 1.5;
    margin-right: 0;
    padding: 20px;
    width: 320px;
}
.main-menu li.login-options .drop-down a {
    background-color: #ffffff;
    border-radius: 5px 5px 0;
    color: #bbbbbc;
    margin-bottom: 10px;
    padding: 4px 10px 7px;
    position: relative;
}
.main-menu li.login-options .drop-down a::after {
    bottom: 0;
    color: #ed8c00;
    content: "";
    font-size: 27px;
    left: auto;
    margin-top: -0.65em;
    position: absolute;
    right: 10px;
    top: 50%;
}
.main-menu li.login-options .drop-down a.more {
    background-color: transparent;
    margin-top: 10px;
}
.main-menu li.login-options .drop-down a.more::after {
    line-height: 30px;
    top: auto;
}
.main-menu li.login-options .drop-down a:hover, .main-menu li.login-options .drop-down a:focus {
    background-color: #ed8c00;
    color: #ffffff;
}
.main-menu li.login-options .drop-down a:hover::after, .main-menu li.login-options .drop-down a:focus::after {
    color: #ffffff;
}
.main-menu li.login-options .drop-down a:hover h2, .main-menu li.login-options .drop-down a:focus h2 {
    color: #ffffff;
}
.main-menu li.login-options h2 {
    color: #ed8c00;
    font-size: 1.07143em;
}
.global-search {
    margin-right: 100px;
    position: absolute;
    right: 10px;
    top: 0;
}
[lang="de"] .global-search {
    margin-right: 108px;
}
[lang="fr"] .global-search {
    margin-right: 125px;
}
[lang="it"] .global-search, [lang="en"] .global-search {
    margin-right: 83px;
}
[lang="es"] .global-search {
    margin-right: 127px;
}
[lang="ch"] .global-search {
    margin-right: 74px;
}
[lang="ru"] .global-search {
    margin-right: 142px;
}
.global-search label {
    display: none;
}
.global-search .form-row {
    margin: 0 10px 0 0;
    width: 270px;
}
.global-search .form-row .input {
    font-family: Arial,Helvetica,sans-serif;
}
.global-search .form-row .submit {
    width: 30px;
}
.language-switch {
    margin-right: 10px;
    right: 100%;
    top: 5px;
}
}
@media only screen and (min-width: 1151px) {
.page-header {
    width: 1120px;
}
}
.search-form .form-row {
    padding-right: 2px;
    position: relative;
}
.search-form .inputs {
    display: block;
    position: relative;
}
.search-form .input {
    -moz-appearance: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #b1b1b1 #dadada #dadada #b1b1b1;
    border-image: none;
    border-radius: 5px;
    border-style: solid;
    border-width: 1px;
    box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.1) inset;
    box-sizing: border-box;
    color: #444444;
    padding: 6px 10px;
    position: relative;
    width: 295px;
}
.search-form .input:focus {
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1) inset, 0 0 5px 1px rgba(237, 140, 0, 0.9);
    outline: medium none;
}
.search-form .submit {
    background: #ed8c00 none repeat scroll 0 0;
    border: 0 none;
    border-radius: 0 5px 5px 0;
    bottom: 0;
    padding: 6px;
    position: absolute;
    right: 0;
    text-indent: -9999em;
    top: 0;
    width: 40px;
}
.search-form .submit::after {
    bottom: 0;
    color: #ffffff;
    content: "";
    font-size: 1.5em;
    line-height: 1.6;
    margin-right: 5px;
    position: absolute;
    right: 0;
    text-indent: 0;
    top: 0;
}
.main .search-form {
    margin-left: 0;
}
.main .search-form label {
    color: #001a73;
    display: block;
    font-size: 1.07143em;
    margin-bottom: 1em;
}
.main .search-form .input {
    font-size: 1.07143em;
    width: 99%;
}
.main .search-form .submit::after {
    font-size: 25px;
    line-height: 38px;
}
.search-suggestions {
    clear: left;
    font-size: 0.92857em;
    line-height: 2;
    margin-bottom: 2em;
}
.search-suggestions p {
    margin-bottom: 0;
}
.search-suggestions .inline li {
    margin-right: 1em;
}
.main .single-line-search {
    margin: 20px 10px 30px;
}
.main .single-line-search.search-form {
    margin-bottom: 0;
    margin-left: 0;
}
.main .single-line-search form {
    float: none;
    margin: 0 auto;
}
.main .single-line-search label {
    padding-right: 5px;
}
@media only screen and (min-width: 661px) {
.main .single-line-search label {
    display: inline;
}
.main .single-line-search .inputs {
    display: inline-block;
}
.main .single-line-search .input {
    width: 395px;
}
}
form.search-form {
    position: relative;
}
.suggestion-results {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #ffffff;
    border-color: #d2d2cc;
    border-image: none;
    border-style: solid;
    border-width: 0 1px 1px;
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
    display: none;
    font-size: 0.92857em;
    margin-left: 0;
    min-width: 170px;
    padding: 0;
    position: absolute;
    top: 69px;
    width: 100%;
    z-index: 5 !important;
}
.suggestion-results.small {
    top: 185px;
}
@media only screen and (min-width: 1001px) {
.suggestion-results {
    border: 1px solid #c8c8c2;
    border-radius: 0 5px;
    position: absolute;
    right: 17px;
    top: 33px;
    width: 395px;
}
.suggestion-results.no-label {
    right: auto;
}
.suggestion-results.small {
    right: auto;
    top: auto;
    width: 382px;
}
}
.suggestion-results ul {
    margin: 0;
    padding: 0;
    position: relative;
    width: 100%;
}
.suggestion-results ul li {
    cursor: pointer;
    font-size: 1em;
    list-style: outside none none;
    margin: 0;
    padding: 3px 15px;
}
.suggestion-results ul li:hover {
    background: #f0f0ec none repeat scroll 0 0;
}
.suggestion-results ul li a {
    color: #444444;
    text-decoration: none;
}
.suggestion-results .suggestions {
    background: #f0f0ec none repeat scroll 0 0;
    border-radius: 0 0 0 5px;
    float: left;
    padding: 10px 0;
    position: relative;
    width: 100%;
}
.suggestion-results .suggestions .suggestion {
    float: left;
    margin: 10px 0;
    position: relative;
    width: 100%;
}
.suggestion-results .suggestions .image-block {
    display: none;
}
@media only screen and (min-width: 1001px) {
.suggestion-results .suggestions .image-block {
    background-position: center center;
    background-size: cover;
    display: block;
    float: left;
    height: 70px;
    margin-left: 20px;
    width: 50px;
}
.suggestion-results .suggestions .image-block img {
    display: none;
}
}
.suggestion-results .suggestions .content {
    margin: 0;
    position: relative;
}
@media only screen and (min-width: 1001px) {
.suggestion-results .suggestions .content {
    left: 65px;
    position: absolute;
    right: 0;
}
}
.suggestion-results .suggestions .title {
    font-size: 1.71429em;
    margin: 0;
    padding: 0 20px 4px;
}
.suggestion-results .suggestions .description {
    height: 18px;
    overflow: hidden;
    padding: 0 20px;
}
.suggestion-results .suggestions .button {
    margin: 2px 20px 0;
}
.autocomplete-suggestions {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #ffffff;
    border-color: #d2d2cc;
    border-image: none;
    border-style: solid;
    border-width: 0 1px 1px;
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
    font-size: 0.92857em;
    margin-left: 5px;
    min-width: 170px;
    padding: 5px 0;
    z-index: 3 !important;
}
.menu-overlay .autocomplete-suggestions {
    display: none !important;
}
.autocomplete-suggestions.large {
    font-size: 1.07143em;
    padding: 10px 0;
}
.autocomplete-suggestion {
    cursor: pointer;
    padding: 3px 15px;
}
.autocomplete-suggestion:hover, .autocomplete-selected {
    background-color: #f0f0ec;
}
.search-push-blocks {
    margin-bottom: 10px;
}
.search-push-blocks .block {
    background-color: #f0f0ec;
    font-size: 0.92857em;
}
.search-push-blocks .block .title {
    font-size: 1.53846em;
}
.search-push-blocks .killer-apps.columns {
    padding: 0;
}
.search-push-blocks .killer-apps.columns .column {
    margin-bottom: 0;
    min-width: 230px;
}
.search-push-blocks .killer-apps.columns .killer-app {
    border: 0 none;
    left: 0;
    min-width: 0;
    right: 0;
}
.search-push-blocks .killer-apps.columns .killer-app::after {
    display: none;
}
.search-push-blocks .killer-app .title {
    font-size: 1.42857em;
}
.search-push-blocks .killer-app .title::after {
    display: none;
}
.search-push-blocks .killer-app.collapsed header, .search-push-blocks .killer-app.collapsed .form[class] {
    background-color: #f0f0ec;
}
.search-push-blocks .killer-app.collapsed .form {
    padding-bottom: 10px;
}
.search-push-blocks .killer-app.collapsed header {
    border-radius: 10px 10px 0;
}
.search-results {
    border-top: 1px solid #babab1;
}
.search-results .results-count {
    color: #444444;
    font: 0.92857em normal Arial,Helvetica,sans-serif;
    margin: 15px 0 30px;
}
.search-results .original-spelling {
    font-size: 0.92857em;
    margin: 0;
    position: relative;
    top: -25px;
}
.search-results .block, .search-results .media-block {
    font-size: 1em;
}
.search-results .block .title, .search-results .media-block .title {
    font-size: 1.5em;
    margin-bottom: 7px;
}
.search-results .block p, .search-results .media-block p {
    margin-bottom: 1em;
}
.search-results .block p.buttons, .search-results .media-block p.buttons {
    margin-bottom: 0;
}
.search-results .results {
    margin-bottom: 20px;
    margin-top: 20px;
}
.search-results .results.with-push-blocks .result:first-child {
    border-top-width: 0;
}
.search-results .original-spelling + .results {
    margin-top: 0;
}
.search-results .result {
    border-bottom: 1px solid #babab1;
    padding: 15px 0;
}
.search-results .result.clickable:hover {
    background-color: #f0f0ec;
}
.search-results .result .title {
    margin-top: 0;
}
.search-results .result a {
    color: #001a73;
    text-decoration: none;
}
.search-results .result a:visited {
    color: #a0a0a0;
}
.search-results .result.push {
    background: #ffffff none repeat scroll 0 0;
    border: 0 none;
    margin-top: -1px;
    padding: 10px 0;
}
.search-results .result.push .block {
    border: 1px solid #babab1;
    margin: 0;
    padding-bottom: 5px;
}
.search-results .result.push .block .title {
    font-size: 1.28571em;
}
.search-results .result.push .block .button {
    color: #ffffff;
}
.search-results .result.push .block .links a:hover {
    text-decoration: underline;
}
.search-results .description {
    margin: 0.5em 0 0.2em;
}
.search-results .url {
    color: #989898;
    font-size: 0.92857em;
    margin-bottom: 0;
}
@media only screen and (min-width: 661px) {
.search-results .result {
    padding-left: 20px;
    padding-right: 20px;
}
}
.business-actions {
    background-color: #f0f0ec;
    border: 0 none;
    border-radius: 10px 10px 0;
    box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.2) inset;
    font-size: 0.92857em;
    padding: 15px 20px;
}
.business-actions .title {
    color: #001a73;
    font-size: 1.84615em;
    margin: 0 0 0.5em;
}
.business-actions .subtitled {
    padding-top: 50px;
    position: relative;
}
.business-actions .subtitled .subtitle {
    border-bottom: 2px solid #878782;
    color: #868681;
    font-size: 1.38462em;
    padding-bottom: 3px;
    position: absolute;
    top: 0;
    width: 100%;
}
.business-actions .header-image {
    margin-bottom: 10px;
}
.business-actions .description {
    margin-bottom: 1em;
}
.business-actions .links li {
    margin: 0;
}
.business-label-line {
    border-bottom: 2px solid #cccccc;
    margin-bottom: 10px;
    padding: 3px 0 15px;
}
.business-label {
    background-color: #001a73;
    color: #ffffff;
    display: inline-block;
    font-size: 11px;
    font-weight: bold;
    line-height: 19px;
    margin-right: 10px;
    padding: 0 5px 1px;
    text-transform: uppercase;
    vertical-align: bottom;
}
.business-label.middle-aligned {
    vertical-align: middle;
}
.button.action, .button.drop-down {
    background-color: #ed8c00;
    border: 1px solid transparent;
    border-radius: 5px 5px 0;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.1;
    padding: 6px 40px 6px 10px;
    position: relative;
    text-decoration: none;
    text-rendering: optimizelegibility;
    transition: background-color 0.1s ease 0s, color 0.1s ease 0s;
    vertical-align: top;
}
.button.action:hover, .button.drop-down:hover {
    background-color: #001a73;
    color: #ffffff;
}
.button.action::before, .button.drop-down::before, .button.action::after, .button.drop-down::after {
    font-size: 1.6em;
    left: 0;
    line-height: 1;
    margin-top: -0.5em;
    position: absolute;
    top: 50%;
}
.button.action::after, .button.drop-down::after {
    left: auto;
    margin-left: 5px;
    right: 10px;
}
.button.action::after, .button.drop-down::after, .button.action::before, .button.drop-down::before {
    transition: inherit;
}
.button.action::after, .button.drop-down::after {
    content: "";
}
.button {
    background-color: #ed8c00;
    border: 1px solid transparent;
    border-radius: 5px 5px 0;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.1;
    padding: 6px 10px;
    position: relative;
    text-decoration: none;
    text-rendering: optimizelegibility;
    transition: background-color 0.1s ease 0s, color 0.1s ease 0s;
    vertical-align: top;
}
.button:hover {
    background-color: #001a73;
    color: #ffffff;
}
.button.full {
    display: block;
}
.button.action, .button.drop-down {
    padding-right: 40px;
}
.button.inverted {
    background-color: #ffffff;
    border-color: #ed8c00;
    color: #ed8c00;
}
.button.inverted:hover {
    background-color: #001a73;
    border-color: #001a73;
    color: #ffffff;
}
.button.ghost {
    background-color: transparent;
}
.button.bordered {
    border: 1px solid;
}
.button.link {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    color: #ed8c00;
    padding: 3px 23px 3px 0;
    white-space: normal;
}
.button.link:hover, .button.link:focus {
    background-color: transparent;
    color: #001a73;
}
.button.link::after {
    line-height: 0;
    position: relative;
    right: auto;
    vertical-align: middle;
}
.button.previous {
    padding: 8px 10px 8px 25px;
}
.button.previous::before {
    left: 0;
    line-height: 1;
    margin-right: 5px;
    margin-top: -0.5em;
    position: absolute;
    top: 50%;
}
.button.previous.cancel::before {
    content: "";
}
.button.previous.bottom-margin {
    margin-bottom: 15px;
}
.button.exit {
    padding-right: 50px;
}
.button.exit::after {
    content: "";
    font-size: 24px;
    line-height: 1em;
    margin-top: -0.5em;
    position: absolute;
    right: 5px;
    top: 50%;
}
.button.exit.full {
    min-height: 26px;
}
.button.square {
    font-size: 17px;
    height: 83px;
    padding: 6px 10px;
    width: 75px;
}
.button.square::after {
    bottom: 5px;
    left: 5px;
    top: auto;
}
.button.submit {
    padding: 0;
}
.button.submit .input {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    color: #ffffff;
    font-weight: bold;
    padding: 6px 40px 6px 10px;
    position: relative;
    z-index: 1;
}
.form .form-row .button.submit .input {
    border: 0 none;
    box-shadow: none;
    color: #ffffff;
    padding: 6px 40px 6px 10px;
}
.button.submit.link .input {
    color: #ed8c00;
}
.button.business-label::before {
    margin-top: -0.2em;
    position: static;
}
.button.action::after {
    content: "";
}
.button.previous::before {
    content: "";
}
.button.drop-down-toggle::after {
    content: "";
}
.button.video::after {
    background-color: #ffffff;
    border-radius: 100%;
    color: #ed8c00;
    content: "󢖶";
    font-size: 11px;
    height: 17px;
    line-height: 17px;
    margin-top: -8.5px;
    text-align: center;
    text-indent: 3px;
    width: 17px;
}
.button.video:hover::after {
    background-color: #ffffff;
    color: #001a73;
}
.button.video.inverted::after {
    background-color: #ed8c00;
    color: #ffffff;
}
.button.phone, .button.mail {
    padding-left: 1.8em;
}
.button.phone {
    padding-right: 0;
}
.button.phone::before {
    content: "";
}
.button.mail::before {
    content: "";
}
.button[disabled], .button.loading {
    background-color: #dcdcd7;
    color: #989898;
    pointer-events: none;
}
.button.loading::before, .button.loading::after {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/loader.gif") no-repeat scroll center center;
    color: transparent;
}
.button small {
    display: block;
    font-size: 0.92308em;
    font-weight: normal;
    margin-top: 3px;
}
.button.bigger {
    font-size: 1em;
    line-height: 28px;
    padding-bottom: 5px;
    padding-left: 15px;
    padding-top: 5px;
}
.button.bigger.phone::before {
    font-size: 45px;
    left: -10px;
    position: absolute;
}
.button.bigger.mail::before {
    font-size: 38px;
    left: -7px;
    margin-top: -0.4em;
}
.button.bigger.mail::after {
    font-size: 20px;
    top: 50%;
}
.button.large {
    font-size: 18px;
    line-height: 30px;
    padding-left: 2.2em;
    padding-right: 0;
}
.button.large.phone::before {
    font-size: 45px;
    left: -10px;
    position: absolute;
}
.button.large.mail::before {
    font-size: 38px;
    left: -7px;
    margin-top: -0.4em;
}
.button.large.mail::after {
    font-size: 20px;
    top: 50%;
}
@media only screen and (min-width: 661px) {
.button.square {
    width: 70px;
}
}
@media only screen and (min-width: 1001px) {
.button.square {
    width: 75px;
}
.button.landscape-full {
    display: block;
}
}
@keyframes shootingTextIndent {
0% {
    text-indent: 0;
}
50% {
    color: transparent;
    text-indent: 50%;
}
51% {
    color: inherit;
    text-indent: -100%;
}
100% {
    text-indent: 0;
}
}
@keyframes shootingTextIndent {
0% {
    text-indent: 0;
}
50% {
    color: transparent;
    text-indent: 50%;
}
51% {
    color: inherit;
    text-indent: -100%;
}
100% {
    text-indent: 0;
}
}
@keyframes shootingTextIndent {
0% {
    text-indent: 0;
}
50% {
    color: transparent;
    text-indent: 50%;
}
51% {
    color: inherit;
    text-indent: -100%;
}
100% {
    text-indent: 0;
}
}
.button.action.exit.animated::after {
    overflow: hidden;
    right: 0;
    width: 1.8em;
}
.button.action.exit.animated:hover::after {
    animation-direction: normal;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-name: shootingTextIndent;
}
.exit-link {
    position: relative;
}
.exit-link::after {
    content: "";
    font-size: 24px;
    left: 100%;
    margin-left: 0.5em;
    position: absolute;
    text-decoration: none;
    top: -0.4em;
}
.exit-link.normalized {
    color: #444444;
    text-decoration: none;
}
.exit-link.normalized:hover {
    color: #001a73;
    text-decoration: underline;
}
.exit-link.normalized::after {
    color: #001a73;
}
.language-selection {
    float: right;
}
.page-footer {
    background-color: #f0f0ec;
    border-top: 1px solid #c8c8c2;
    font-size: 0.92857em;
    margin-top: 40px;
}
.page-footer .content {
    padding-left: 0;
    padding-right: 0;
}
.page-footer .narrow-content {
    margin: 0 10px;
}
.page-footer .footer-top {
    margin: 0 20px;
    padding: 15px 0;
    text-align: right;
}
.page-footer .killer-app-links {
    border-top: 1px solid #c8c8c2;
    color: #001a73;
    font-size: 1.41667em;
    line-height: 1.2;
    margin: 0 10px;
    overflow: hidden;
}
.page-footer .killer-app-links li {
    padding: 10px 0;
}
.page-footer .killer-app-links a {
    color: #ed8c00;
    display: block;
    line-height: 40px;
    position: relative;
}
.page-footer .killer-app-links a::after {
    content: "";
    font-size: 1.3em;
    height: 1.05em;
    margin-top: 2px;
    overflow: hidden;
    position: absolute;
}
.page-footer .killer-app-links a:focus, .page-footer .killer-app-links a:hover {
    color: #001a73;
    text-decoration: none;
}
.page-footer .killer-app-links img {
    margin-right: 10px;
    max-width: 35px;
    vertical-align: middle;
}
.page-footer .footer-navigation {
    border-top: 1px solid #c8c8c2;
    margin: 20px 10px 25px;
}
.page-footer a {
    color: #868681;
    position: relative;
    text-decoration: none;
}
.page-footer a:focus, .page-footer a:hover {
    color: #001a73;
    text-decoration: underline;
}
.page-footer .children a {
    position: static;
}
.page-footer .title {
    display: block;
    font-size: 1.41667em;
    margin: 20px 0 12px;
}
.page-footer .items .item {
    margin: 0 0 10px;
}
.page-footer .items li {
    margin-bottom: 13px;
}
.page-footer .items a::after {
    content: "";
    font-size: 1.3em;
    height: 1em;
    margin-top: -2px;
    overflow: hidden;
    position: absolute;
}
.page-footer .items a.title::after {
    margin-top: -1px;
}
.page-footer .items .childless {
    margin-bottom: 0;
}
.page-footer .items .childless .title {
    margin-bottom: 20px;
}
.page-footer .odd {
    clear: left;
}
.page-footer .odd.childless {
    clear: none;
}
.page-footer .social-media {
    border-top: 1px solid #c8c8c2;
    clear: left;
    line-height: 1;
    margin: 0 10px;
    padding: 20px 0;
}
.page-footer .social-media ul {
    margin-bottom: 0;
}
.page-footer .social-media li {
    display: inline-block;
    margin-bottom: 0;
    margin-right: 10px;
}
.page-footer .social-media .icon::before {
    color: #b4b4ae;
}
.page-footer .social-media .icon::after {
    display: none;
}
.page-footer .social-media .icon:hover::before {
    color: #001a73;
}
.global-links {
    background-color: #ed8c00;
    letter-spacing: 1px;
    margin-bottom: 0;
}
.global-links .content-container {
    padding: 6px 0;
}
.global-links ul {
    margin: 0 10px;
}
.global-links ul li {
    display: inline-block;
    margin-right: 2em;
}
.global-links a {
    color: #ffffff;
}
.page-footer .footer-top, .global-links .content-container {
    border-bottom: 0 none;
    overflow: hidden;
    position: relative;
}
.page-footer .footer-top::after, .global-links .content-container::after {
    bottom: auto;
    top: -10px;
    z-index: 0;
}
@media only screen and (min-width: 661px) {
.page-footer .item {
    float: left;
    width: 50%;
}
.page-footer .title {
    margin-top: 0;
}
.page-footer .killer-app-links li {
    display: block;
    float: left;
    height: 45px;
    margin: 0;
    width: 50%;
}
}
@media only screen and (min-width: 1001px) {
.page-footer .title {
    margin-top: 20px;
}
.page-footer .footer-navigation {
    margin-top: 0;
}
.page-footer .items {
    max-width: 940px;
}
.page-footer .items .item {
    width: 25%;
}
.page-footer .items .childless .title {
    margin-bottom: 0;
}
.page-footer .odd {
    clear: none;
}
.page-footer .killer-app-links li {
    display: inline-block;
    margin-right: 48px;
    white-space: nowrap;
    width: auto;
}
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
    display: block;
}
audio, canvas, video {
    display: inline-block;
}
audio:not([controls]) {
    display: none;
    height: 0;
}
[hidden], template {
    display: none;
}
html {
    font-family: sans-serif;
}
body {
    margin: 0;
}
a {
    background: transparent none repeat scroll 0 0;
}
a:focus {
    outline: thin dotted;
}
a:active, a:hover {
    outline: 0 none;
}
h1 {
    font-size: 2em;
    margin: 0.67em 0;
}
abbr[title] {
    border-bottom: 1px dotted;
}
b, strong {
    font-weight: bold;
}
dfn {
    font-style: italic;
}
hr {
    box-sizing: content-box;
    height: 0;
}
mark {
    background: #ff0 none repeat scroll 0 0;
    color: #000;
}
code, kbd, pre, samp {
    font-family: monospace,serif;
    font-size: 1em;
}
pre {
    white-space: pre-wrap;
}
q {
    quotes: """ """ "‘" "’";
}
small {
    font-size: 80%;
}
sub, sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}
sup {
    top: -0.5em;
}
sub {
    bottom: -0.25em;
}
img {
    border: 0 none;
}
svg:not(:root) {
    overflow: hidden;
}
figure {
    margin: 0;
}
fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}
legend {
    border: 0 none;
    padding: 0;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: 100%;
    margin: 0;
}
button, input {
    line-height: normal;
}
button, select {
    text-transform: none;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    cursor: pointer;
}
button[disabled], html input[disabled] {
    cursor: default;
}
input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
}
input[type="search"] {
    box-sizing: content-box;
}
button::-moz-focus-inner, input::-moz-focus-inner {
    border: 0 none;
    padding: 0;
}
textarea {
    overflow: auto;
    vertical-align: top;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
@font-face {
    font-family: "PostNL-Regular";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-regular.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-regular.svg#PostNL-Regular") format("svg");
}
@font-face {
    font-family: "PostNL-Medium";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-medium.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-medium.svg#PostNL-Medium") format("svg");
}
@font-face {
    font-family: "PostNL-Bold";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl/postnl-bold.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl/postnl-bold.svg#PostNL-Bold") format("svg");
}
.qtip-default {
    text-rendering: optimizelegibility;
}
h3, .h3, .h2 + .h2.subtitle, blockquote, table.rates .title, .content-bar .testimonial, blockquote.testimonial, .button.square, .button.large, .form .label.large {
    font-family: "PostNL-Regular",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
h1, .h1, h2, .h2 {
    font-family: "PostNL-Medium",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
@font-face {
    font-family: "PostNL-icons";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.woff") format("woff"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/postnl-icons/PostNL-icons.svg#PostNL-icons") format("svg");
}
.button.action::before, .button.drop-down::before, .button.action::after, .button.drop-down::after, .button.previous::before, .button.exit::after, .button.phone::before, .button.mail::before, .exit-link::after, .select-native .arrow::after, .js .tooltip::before, .js .tooltipped .icon::before {
    font-family: "PostNL-icons",sans-serif;
    font-weight: normal;
    text-rendering: optimizelegibility;
}
body {
    background-color: #ffffff;
    color: #444444;
    font: 14px/1.5 Arial,Helvetica,sans-serif;
}
.form legend {
    color: #001a73;
    font-family: "PostNL-Regular",sans-serif;
    font-size: 1.28571em;
    font-weight: normal;
    line-height: 1.2;
    margin: 1.2em 0 0.18em;
    text-rendering: optimizelegibility;
}
h1, .h1, h2, .h2 {
    color: #001a73;
    line-height: 1.1;
}
h3, .h3 {
    font-size: 1.28571em;
    line-height: 1.2;
    margin: 1.2em 0 0.18em;
}
h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
    color: #001a73;
}
h1, .h1 {
    font-size: 1.85714em;
    margin: 0;
}
h2, .h2 {
    font-size: 1.71429em;
    margin: 30px 0 0.35em;
}
h2.first-title, .h2.first-title {
    margin-top: 0;
}
.h2 + .h2.subtitle {
    color: #ed8c00;
    font-size: 1.28571em;
    margin-bottom: 0.5em;
    margin-top: -0.5em;
    max-width: 90%;
}
h3, .h3 {
    font-size: 1.28571em;
    margin: 1.2em 0 0.18em;
}
h4, .h4, h5, .h5 {
    margin-bottom: 0;
}
p, table, ul, ol, figure {
    margin: 0 0 1.6em;
}
p.offset-bottom-half {
    margin-bottom: 0.8em;
}
ul, ol {
    padding: 0 0 0 2em;
}
h2 + ul, .h2 + ul, h3 + ul, .h3 + ul, h4 + ul .h4 + ul, h2 + ol, .h2 + ol, h3 + ol, .h3 + ol, h4 + ol .h4 + ul, h4 + ul .h4 + ol, h4 + ol .h4 + ol {
    margin-top: 0.5em;
}
a {
    color: #ed8c00;
    text-decoration: underline;
}
a:focus, a:hover {
    color: #001a73;
    outline: medium none;
}
a.link-nostyle {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 0 none;
    color: inherit;
    font-size: inherit;
    text-decoration: inherit;
}
@media only screen and (max-width: 1000px) {
abbr[title] {
    border-bottom: 0 none;
}
abbr[title]::after {
    content: " (" attr(title) ")";
}
}
ins {
    text-decoration: none;
}
blockquote {
    font-size: 1.5em;
    line-height: 1.3;
    margin: 0.5em 0 0;
}
blockquote > p {
    margin: 0 0 1em;
}
blockquote > p::before, blockquote > p::after {
    font-size: 1.38462em;
    margin-top: -3px;
    position: absolute;
}
blockquote > p::before {
    content: """;
    margin-left: -12px;
}
blockquote > p::after {
    content: """;
    margin-left: 3px;
}
cite {
    font-size: 0.92857em;
    font-style: normal;
    font-weight: bold;
}
cite .author-info {
    font-weight: normal;
}
blockquote footer .cite {
    font-size: 0.61905em;
}
.js img.responsive {
    visibility: hidden;
}
.js img.responsive.visible {
    visibility: visible;
}
.main img, .main iframe, .content-container img, .content-container iframe {
    max-width: 100%;
}
table {
    border: 0 none;
    font-size: 0.92857em;
    width: 100%;
}
table strong {
    color: #ed8c00;
}
table ins {
    padding-left: 5px;
    white-space: nowrap;
}
table.underlined tr {
    border-bottom: 1px solid #d2d2cc;
}
table.rates .title {
    color: #001a73;
    display: block;
    font-size: 1.07692em;
}
table.rates strong {
    color: #d42b1e;
}
table.rates tbody th:first-child {
    width: 155px;
}
table.rates.large.underlined {
    border-top: 1px solid #c8c8c2;
}
table.rates.large.underlined tr {
    border-color: #c8c8c2;
}
table.rates.large td, table.rates.large th {
    padding: 13px 10px;
}
table.rates.large th:first-child {
    width: 33%;
}
table.rates.large th p {
    color: #898987;
    margin: 0;
}
table.rates.large thead th, table.rates.large tbody td {
    background-color: #f0e1c9;
    border-right: 2px solid #f0f0ec;
}
table.rates.large thead th:first-child {
    background-color: transparent;
    border-right-width: 0;
}
table.rates.large thead th {
    text-align: center;
}
table.rates.large thead th:first-child {
    font-weight: normal;
    text-align: left;
}
table.rates.large tbody th {
    width: 250px;
}
table.rates.large tbody td {
    text-align: center;
}
table.rates.large .title {
    margin-bottom: 0;
}
@media only screen {
table.rates .title {
    font-size: 1.15385em;
}
}
td, th {
    border: 0 none;
    padding: 5px;
    vertical-align: top;
}
tr {
    border-bottom: 1px solid #d2d2cc;
}
td p, th p {
    margin: 0;
}
th {
    padding-right: 40px;
    text-align: left;
}
tbody th {
    font-weight: normal;
}
figcaption {
    font-style: italic;
    padding: 5px 10px;
}
figure.image {
    background-color: #f0f0ec;
    display: table;
    width: 100px;
}
figure.image img {
    max-width: none;
}
@media only screen and (max-width: 660px) {
figure.image {
    width: 100px;
}
}
figure.rounded {
    border-radius: 5px 5px 0;
    overflow: hidden;
}
.figure img {
    max-width: 100%;
}
.hidden {
    display: none;
}
blockquote.testimonial {
    margin: 0 0 1.5em 20px;
}
.content-bar .testimonial, blockquote.testimonial {
    border-left: 2px solid #ed8c00;
    color: #ed8c00;
    font-size: 1.42857em;
    line-height: 1.2;
    padding: 0 10px 0 18px;
}
.content-bar .testimonial.floats, blockquote.testimonial.floats {
    margin: 0.3em 0 22px 20px;
}
.content-bar .testimonial > p, blockquote.testimonial > p {
    position: relative;
}
.content-bar .testimonial > p::before, .content-bar .testimonial > p::after, blockquote.testimonial > p::before, blockquote.testimonial > p::after {
    font-size: 2.14286em;
    line-height: 0.1;
    margin-left: 0;
    position: relative;
}
.content-bar .testimonial > p::before, blockquote.testimonial > p::before {
    bottom: -0.4em;
    content: """;
    margin-right: 5px;
}
.content-bar .testimonial > p::after, blockquote.testimonial > p::after {
    content: "„";
    margin-left: 5px;
    top: -0.1em;
}
@media only screen and (min-width: 661px) {
.content-bar .testimonial, .content-bar .testimonial.floats, blockquote.testimonial, blockquote.testimonial.floats {
    margin-left: 0;
}
.content-bar .testimonial.floats, blockquote.testimonial.floats {
    width: 45%;
}
.content-bar .testimonial.floats.right, blockquote.testimonial.floats.right {
    margin-left: 40px;
}
}
.no-list li {
    margin: 0;
}
.offset-container {
    position: relative;
}
.placeholder {
    color: #999999 !important;
}
.align-right {
    text-align: right;
}
.floats {
    margin-bottom: 1em;
}
.clears.left {
    clear: left;
}
.clears.right {
    clear: right;
}
.clears.both {
    clear: both;
}
.clickable {
    cursor: pointer;
}
.line {
    display: block;
}
.no-margin {
    margin-bottom: 0;
}
@media only screen and (min-width: 661px) {
.floats {
    margin-top: 1em;
}
.floats.right {
    float: right;
    margin-left: 10px;
}
.floats.left {
    float: left;
    margin-right: 10px;
}
.columns::after {
    clear: both;
    content: " ";
    display: block;
}
.columns .column {
    float: left;
    width: 50%;
}
.columns .column.odd {
    clear: left;
}
.columns.spaced .column {
    box-sizing: border-box;
    padding-left: 20px;
    padding-right: 20px;
}
.columns.spaced .column.odd {
    padding-left: 0;
}
.columns.spaced .column.even {
    padding-right: 0;
}
.columns.spaced .column.first {
    padding-left: 0;
    padding-right: 20px;
}
.columns.spaced .column.last {
    padding-left: 20px;
    padding-right: 0;
}
.columns.spaced.narrow .column {
    padding-left: 10px;
    padding-right: 10px;
}
.columns .columns {
    clear: both;
    overflow: hidden;
}
}
@media only screen and (min-width: 1001px) {
.columns .column.odd {
    clear: none;
}
.columns .column.first {
    clear: left;
}
.columns.three .column {
    width: 33.3%;
}
.columns.four .column {
    width: 25%;
}
.columns.spaced .column, .columns.spaced .column.odd, .columns.spaced .column.even {
    padding-left: 10px;
    padding-right: 10px;
}
.columns.spaced .column.first {
    padding-left: 0;
    padding-right: 20px;
}
.columns.spaced .column.last {
    padding-left: 20px;
    padding-right: 0;
}
.columns.spaced.narrow .column {
    padding-left: 5px;
    padding-right: 5px;
}
.columns.spaced.narrow .column.first {
    padding-left: 0;
    padding-right: 10px;
}
.columns.spaced.narrow .column.last {
    padding-left: 10px;
    padding-right: 0;
}
}
.background-offset {
    background-color: #f0f0ec;
}
.no-list, .form .checkboxes {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.off-screen {
    left: -9999px;
    position: absolute;
}
.cleared::after, .form dl.summary dd::after, .form .form-row::after, .form .submit-buttons::after {
    clear: both;
    content: " ";
    display: table;
}
*::-moz-selection {
    background-color: rgba(237, 140, 0, 0.3);
}
.form .message.error *::-moz-selection, .qtip-default *::-moz-selection {
    background-color: rgba(255, 255, 255, 0.3);
}
.button.action, .button.drop-down {
    background-color: #ed8c00;
    border: 1px solid transparent;
    border-radius: 5px 5px 0;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.1;
    padding: 6px 40px 6px 10px;
    position: relative;
    text-decoration: none;
    text-rendering: optimizelegibility;
    transition: background-color 0.1s ease 0s, color 0.1s ease 0s;
    vertical-align: top;
}
.button.action:hover, .button.drop-down:hover {
    background-color: #001a73;
    color: #ffffff;
}
.button.action::before, .button.drop-down::before, .button.action::after, .button.drop-down::after {
    font-size: 20px;
    left: 0;
    line-height: 1;
    margin-top: -0.5em;
    position: absolute;
    top: 50%;
}
.button.action::after, .button.drop-down::after {
    left: auto;
    margin-left: 5px;
    right: 10px;
}
.button.action::after, .button.drop-down::after, .button.action::before, .button.drop-down::before {
    transition: inherit;
}
.button.action::after, .button.drop-down::after {
    content: "";
}
.button {
    background-color: #ed8c00;
    border: 1px solid transparent;
    border-radius: 5px 5px 0;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.1;
    padding: 6px 10px;
    position: relative;
    text-decoration: none;
    text-rendering: optimizelegibility;
    transition: background-color 0.1s ease 0s, color 0.1s ease 0s;
    vertical-align: top;
}
.button:hover {
    background-color: #001a73;
    color: #ffffff;
}
.button.full {
    display: block;
}
.button.action, .button.drop-down {
    padding-right: 40px;
}
.button.inverted {
    background-color: #ffffff;
    border-color: #ed8c00;
    color: #ed8c00;
}
.button.inverted:hover {
    background-color: #001a73;
    border-color: #001a73;
    color: #ffffff;
}
.button.ghost {
    background-color: transparent;
}
.button.bordered {
    border: 1px solid;
}
.button.link {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    color: #ed8c00;
    padding: 3px 23px 3px 0;
    white-space: normal;
}
.button.link:hover, .button.link:focus {
    background-color: transparent;
    color: #001a73;
}
.button.link::after {
    line-height: 0;
    position: relative;
    right: auto;
    vertical-align: middle;
}
.button.previous {
    padding: 8px 10px 8px 25px;
}
.button.previous::before {
    left: 0;
    line-height: 1;
    margin-right: 5px;
    margin-top: -0.5em;
    position: absolute;
    top: 50%;
}
.button.previous.cancel::before {
    content: "";
}
.button.previous.bottom-margin {
    margin-bottom: 15px;
}
.button.exit {
    padding-right: 50px;
}
.button.exit::after {
    content: "";
    font-size: 24px;
    line-height: 1em;
    margin-top: -0.5em;
    position: absolute;
    right: 5px;
    top: 50%;
}
.button.exit.full {
    min-height: 26px;
}
.button.square {
    font-size: 17px;
    height: 83px;
    padding: 6px 10px;
    width: 75px;
}
.button.square::after {
    bottom: 5px;
    left: 5px;
    top: auto;
}
.button.submit {
    padding: 0;
}
.button.submit .input {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    color: #ffffff;
    font-weight: bold;
    padding: 6px 40px 6px 10px;
    position: relative;
    z-index: 1;
}
.form .form-row .button.submit .input {
    border: 0 none;
    box-shadow: none;
    color: #ffffff;
    padding: 6px 40px 6px 10px;
}
.button.submit.link .input {
    color: #ed8c00;
}
.button.business-label::before {
    margin-top: -0.2em;
    position: static;
}
.button.action::after {
    content: "";
}
.button.previous::before {
    content: "";
}
.button.drop-down-toggle::after {
    content: "";
}
.button.video::after {
    background-color: #ffffff;
    border-radius: 100%;
    color: #ed8c00;
    content: "󢖶";
    font-size: 11px;
    height: 17px;
    line-height: 17px;
    margin-top: -8.5px;
    text-align: center;
    text-indent: 3px;
    width: 17px;
}
.button.video:hover::after {
    background-color: #ffffff;
    color: #001a73;
}
.button.video.inverted::after {
    background-color: #ed8c00;
    color: #ffffff;
}
.button.phone, .button.mail {
    padding-left: 1.8em;
}
.button.phone {
    padding-right: 0;
}
.button.phone::before {
    content: "";
}
.button.mail::before {
    content: "";
}
.button[disabled], .button.loading {
    background-color: #dcdcd7;
    color: #989898;
    pointer-events: none;
}
.button.loading::before, .button.loading::after {
    background: rgba(0, 0, 0, 0) url("/sites/all/themes/developer/img/loader.gif") no-repeat scroll center center;
    color: transparent;
}
.button small {
    display: block;
    font-size: 0.92308em;
    font-weight: normal;
    margin-top: 3px;
}
.button.bigger {
    font-size: 1em;
    line-height: 28px;
    padding-bottom: 5px;
    padding-left: 15px;
    padding-top: 5px;
}
.button.bigger.phone::before {
    font-size: 45px;
    left: -10px;
    position: absolute;
}
.button.bigger.mail::before {
    font-size: 38px;
    left: -7px;
    margin-top: -0.4em;
}
.button.bigger.mail::after {
    font-size: 20px;
    top: 50%;
}
.button.large {
    font-size: 18px;
    line-height: 30px;
    padding-left: 2.2em;
    padding-right: 0;
}
.button.large.phone::before {
    font-size: 45px;
    left: -10px;
    position: absolute;
}
.button.large.mail::before {
    font-size: 38px;
    left: -7px;
    margin-top: -0.4em;
}
.button.large.mail::after {
    font-size: 20px;
    top: 50%;
}
@media only screen and (min-width: 661px) {
.button.square {
    width: 70px;
}
}
@media only screen and (min-width: 1001px) {
.button.square {
    width: 75px;
}
.button.landscape-full {
    display: block;
}
}
@keyframes shootingTextIndent {
0% {
    text-indent: 0;
}
50% {
    color: transparent;
    text-indent: 50%;
}
51% {
    color: inherit;
    text-indent: -100%;
}
100% {
    text-indent: 0;
}
}
@keyframes shootingTextIndent {
0% {
    text-indent: 0;
}
50% {
    color: transparent;
    text-indent: 50%;
}
51% {
    color: inherit;
    text-indent: -100%;
}
100% {
    text-indent: 0;
}
}
@keyframes shootingTextIndent {
0% {
    text-indent: 0;
}
50% {
    color: transparent;
    text-indent: 50%;
}
51% {
    color: inherit;
    text-indent: -100%;
}
100% {
    text-indent: 0;
}
}
.button.action.exit.animated::after {
    overflow: hidden;
    right: 0;
    width: 1.8em;
}
.button.action.exit.animated:hover::after {
    animation-direction: normal;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-name: shootingTextIndent;
}
.exit-link {
    position: relative;
}
.exit-link::after {
    content: "";
    font-size: 24px;
    left: 100%;
    margin-left: 0.5em;
    position: absolute;
    text-decoration: none;
    top: -0.4em;
}
.exit-link.normalized {
    color: #444444;
    text-decoration: none;
}
.exit-link.normalized:hover {
    color: #001a73;
    text-decoration: underline;
}
.exit-link.normalized::after {
    color: #001a73;
}
.form {
    background-color: #f0f0ec;
    border-radius: 10px 10px 0;
    padding: 20px;
}
.form.clean {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    padding: 0;
}
.form.clean .button.clean {
    margin-left: 10px;
}
.form.outer {
    padding: 0;
}
.form fieldset {
    border: 0 none;
    margin: 0 0 20px;
    padding: 0;
}
.form legend {
    margin-bottom: 10px;
}
.form h2, .form h3 {
    margin-top: 0;
}
.form dl.summary {
    margin: 0 0 10px;
}
.form dl.summary dd {
    font-weight: bold;
    hyphens: none;
    margin: 0 0 10px;
}
.form .form-row {
    margin-bottom: 15px;
    max-width: 650px;
}
.form .form-subtitle {
    margin-bottom: 20px;
    margin-top: 40px;
}
.form .form-subtitle:first-child {
    margin-top: 0;
}
.form .form-subtitle h3, .form .form-subtitle a {
    margin: 0;
    padding-right: 0;
}
.form a.modify {
    float: right;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
    font-weight: normal;
    margin-top: 0.8em;
    position: relative;
}
.form .label {
    display: block;
    margin-bottom: 0.3em;
}
.form .label.large {
    color: #001a73;
    font-size: 1.53846em;
    line-height: 1.1;
    margin: 0 10px 6px 0;
    width: auto;
}
.form .field {
    display: block;
}
.form .optional {
    color: #989898;
    font-size: 0.85714em;
    padding-left: 5px;
}
.form .text .input, .form input.text, .form .textarea .input, .form .email .input, .form .date .input, .form .month .input, .form .time .input, .form .dob .input, .form .select.multiple .input, .form .select .input {
    border: 1px solid #c8c8c2;
    border-radius: 5px;
    color: #444444;
    outline-color: #ffc36e;
}
.form .text .input, .form input.text, .form .textarea .input, .form .email .input, .form .date .input, .form .month .input, .form .time .input, .form .dob .input, .form .select.multiple .input {
    box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.1) inset;
    padding: 6px 3%;
    width: 97%;
}
.form .text .input:focus, .form input.text:focus, .form .textarea .input:focus, .form .email .input:focus, .form .date .input:focus, .form .month .input:focus, .form .time .input:focus, .form .dob .input:focus, .form .select.multiple .input:focus {
    border-color: #717171;
}
.form .text .input[readonly], .form .text .input[disabled], .form input.text[readonly], .form .textarea .input[readonly], .form .email .input[readonly], .form .date .input[readonly], .form .month .input[readonly], .form .time .input[readonly], .form .dob .input[readonly], .form .select.multiple .input[readonly], .form input.text[disabled], .form .textarea .input[disabled], .form .email .input[disabled], .form .date .input[disabled], .form .month .input[disabled], .form .time .input[disabled], .form .dob .input[disabled], .form .select.multiple .input[disabled] {
    background-color: #f0f0ec;
    color: #989898;
}
.form span#select-additionSelectBoxItContainer {
    box-shadow: none;
    padding: 0;
}
.form .form-row .input {
    margin-bottom: 10px;
    max-width: 93%;
}
.form .form-row .input.mini {
    width: 2.5em;
}
.form .form-row .input.tiny {
    width: 4em;
}
.form .form-row .input.small {
    width: 30.7%;
}
.form .form-row .input.medium {
    width: 50%;
}
.form .form-row .input.large {
    width: 64%;
}
.form .textarea .input {
    max-width: 100%;
}
.form .date .input, .form .month .input, .form .time .input {
    width: 12.5em;
}
.form .dob .input.date, .form .dob .input.month {
    width: 2em;
}
.form .dob .input.year {
    width: 4em;
}
.form .select .input {
    max-width: 85%;
    min-width: 150px;
    width: 100%;
}
.form .select .input.selectboxit-container {
    border: 0 none;
}
.form .checkboxes .checkboxes {
    margin-left: 1.5em;
}
.form .checkboxes .input {
    margin-right: 0.3em;
    width: auto !important;
}
.form .checkboxes.single .input {
    float: left;
    margin-top: 0.3em;
}
.form .checkboxes.single .label {
    display: block;
    float: none;
    margin-left: 1.5em;
    max-height: none;
    width: auto;
}
.form .inline .checkboxes li {
    display: inline-block;
    margin: 0;
    padding-right: 20px;
}
.form .inline .checkboxes li:last-child {
    padding-right: 0;
}
.form .notification.error {
    color: #e45123;
}
.form .message {
    border-radius: 3px;
    display: block;
    font-size: 0.92857em;
    line-height: 1.3;
    margin-top: 9px;
    padding: 5px 10px;
    position: relative;
    text-rendering: optimizelegibility;
}
.form .message::after {
    content: " ";
    display: block;
    height: 12px;
    left: 20px;
    position: absolute;
    top: -6px;
    transform: rotate(45deg);
    width: 12px;
}
.form .message.error {
    color: #ffffff;
}
.form .message.error, .form .message.error::after {
    background-color: #e45123;
}
.form .form-row.error .input.error {
    border: 1px solid #e45123;
}
.form .submit-buttons {
    margin-top: 20px;
}
.form .submit-buttons .link {
    color: #444444;
    float: right;
    line-height: 1.9;
}
.form .submit-buttons .button {
    float: right;
    margin-left: 30px;
}
.form .submit-buttons .button .input {
    margin-bottom: 0;
}
.form.filter-form {
    background: transparent none repeat scroll 0 0;
    border-color: #d2d2cc;
    border-radius: 0;
    border-style: solid;
    border-width: 2px 0 1px;
    margin-top: 0;
    padding: 20px 0 10px;
}
.form.loading-form {
    background-image: url("/sites/all/themes/developer/img/killer-apps/loader.gif");
    background-position: center 70%;
    background-repeat: no-repeat;
    min-height: 60px;
}
.form.spinner {
    position: relative;
}
@media only screen and (min-width: 661px) {
.form .form-row {
    margin-bottom: 10px;
}
.form .form-row.error .label {
    max-height: 1em;
}
.secondary .form .form-row .field, .secondary .form .form-row .message, .narrow-forms .form .form-row .field, .narrow-forms .form .form-row .message, .form .form-row.narrow .field, .form .form-row.narrow .message {
    margin-left: 0;
}
.form .form-row .input {
    margin-bottom: 0;
}
.form .form-row.two-inputs .label {
    display: block;
}
.form .form-row.two-inputs .input {
    float: left;
    margin-right: 2%;
    min-width: 0;
    width: 49%;
}
.form .form-row.two-inputs .input.last {
    margin-right: 0;
}
.form .label {
    float: left;
    padding-bottom: 5px;
    padding-top: 5px;
    width: 35%;
}
.form dl.summary dt {
    box-sizing: border-box;
    clear: left;
    display: block;
    float: left;
    padding-right: 30px;
    width: 35%;
}
.form dl.summary dd {
    margin-left: 35%;
}
.form .optional {
    display: block;
    padding-left: 0;
}
.form .text .input, .form input.text, .form .textarea .input, .form .email .input, .form .date .input, .form .month .input, .form .time .input, .form .dob .input, .form .select.multiple .input, .form .date .input, .form .month .input, .form .time .input, .form .textarea .input, .form .email .input {
    padding-left: 1.5%;
    padding-right: 1.5%;
}
.form .select .input {
    max-width: 55%;
}
.form .select .large.label + .input {
    vertical-align: sub;
}
.form .field, .form .message {
    margin-left: 35%;
}
.form .message {
    display: inline-block;
}
.secondary .form .label, .narrow-forms .form .label, .form.narrow .label {
    display: inline;
    float: none;
    margin-bottom: 0;
    width: auto;
}
.secondary .form .field, .secondary .form .message, .narrow-forms .form .field, .narrow-forms .form .message, .form.narrow .field, .form.narrow .message {
    margin-left: 0;
}
.secondary .form .optional, .narrow-forms .form .optional, .form.narrow .optional {
    display: inline;
    padding-left: 5px;
}
.secondary .form .message, .narrow-forms .form .message, .form.narrow .message {
    display: block;
}
.secondary .form .text .input, .secondary .form input.text, .secondary .form .textarea .input, .secondary .form .email .input, .secondary .form .date .input, .secondary .form .month .input, .secondary .form .time .input, .secondary .form .dob .input, .secondary .form .select.multiple .input, .secondary .form .date .input, .secondary .form .month .input, .secondary .form .time .input, .secondary .form .textarea .input, .secondary .form .email .input, .narrow-forms .form .text .input, .narrow-forms .form input.text, .narrow-forms .form .textarea .input, .narrow-forms .form .email .input, .narrow-forms .form .date .input, .narrow-forms .form .month .input, .narrow-forms .form .time .input, .narrow-forms .form .dob .input, .narrow-forms .form .select.multiple .input, .narrow-forms .form .date .input, .narrow-forms .form .month .input, .narrow-forms .form .time .input, .narrow-forms .form .textarea .input, .narrow-forms .form .email .input, .form.narrow .text .input, .form.narrow input.text, .form.narrow .textarea .input, .form.narrow .email .input, .form.narrow .date .input, .form.narrow .month .input, .form.narrow .time .input, .form.narrow .dob .input, .form.narrow .select.multiple .input, .form.narrow .date .input, .form.narrow .month .input, .form.narrow .time .input, .form.narrow .textarea .input, .form.narrow .email .input {
    padding-left: 3%;
    padding-right: 3%;
}
.secondary .form .select .input, .narrow-forms .form .select .input, .form.narrow .select .input {
    min-width: 80px;
}
.form.filter-form .label {
    padding-right: 20px;
    width: auto;
}
.form.filter-form .field {
    margin-left: 0;
}
}
.js select.input {
    visibility: hidden;
}
.js.loaded select.input {
    visibility: visible;
}
.input-clean {
    border: 1px solid #c8c8c2;
    border-radius: 5px;
    color: #444444;
    outline-color: #ffc36e;
    width: 95%;
}
.input-clean.hidden {
    display: none;
}
.selectboxit-btn {
    max-width: 100%;
    width: 100%;
}
.selectboxit-option-anchor {
    text-decoration: none;
}
.selectboxit-list .selectboxit-focus .selectboxit-option-anchor {
    background: #001a73 none repeat scroll 0 0;
}
.form-row-clean {
    margin: 5px 0;
}
.form-row-clean.hidden {
    display: none;
}
.wizard-menu .title {
    margin-bottom: 12px;
    margin-top: 52px;
}
.wizard-menu li {
    margin-bottom: 10px;
}
.wizard-menu li.inactive {
    color: #cccccc;
}
.conditional-display.hidden {
    display: none;
}
.select-native {
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.1) inset;
    box-sizing: border-box;
    height: 40px;
    overflow: hidden;
    position: relative;
    width: 100%;
}
.select-native .arrow {
    bottom: 0;
    left: auto;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    transform-origin: center center 0;
    transition: all 400ms cubic-bezier(0.55, 0.085, 0.68, 0.53) 0s;
    width: 30px;
    z-index: 1;
}
.select-native .arrow::after {
    bottom: auto;
    content: "";
    display: block;
    font-size: 25px;
    height: 20px;
    left: 0;
    line-height: 24px;
    margin-top: -10px;
    overflow: hidden;
    position: absolute;
    right: auto;
    top: 50%;
    transform-origin: center center 0;
}
.select-native select {
    -moz-appearance: none;
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    display: block;
    height: 40px;
    line-height: 40px;
    outline: medium none;
    padding-left: 10px;
    position: relative;
    width: 120%;
    z-index: 2;
}
.select-native select:focus + .arrow {
    transform: rotate(180deg);
}
.js .tooltip, .js .tooltipped .icon {
    cursor: pointer;
    display: inline-block;
    font-size: 12px;
    height: 1em;
    line-height: 1;
    overflow: hidden;
    position: relative;
    width: 1em;
}
.js .tooltip::before, .js .tooltipped .icon::before {
    color: #ed8c00;
    content: "";
}
.js .tooltip.light, .js .tooltipped .icon.light {
    font-size: 14px;
}
.js .tooltip.light::before, .js .tooltipped .icon.light::before {
    color: #ffffff;
}
.js .tooltip, .js .tooltipped .icon {
    margin-left: 4px;
}
.js .tooltip-text {
    display: none;
}
.qtip-default {
    background-color: transparent;
    border-color: #ed8c00;
    border-width: 0;
    color: #ffffff;
    font-size: 0.85714em;
    line-height: 1.3;
    max-width: 70%;
}
.qtip-default .qtip-content {
    background-color: #ed8c00;
    border-radius: 10px;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 10px 15px;
}
.qtip-default.light {
    border-color: #ffffff;
    font-size: 0.85714em;
}
.qtip-default.light .qtip-content {
    background-color: #ffffff;
    color: #001a73;
}
.qtip-default h1, .qtip-default h2, .qtip-default h3, .qtip-default h4 {
    color: #ffffff;
}
.qtip-default p:last-child {
    margin-bottom: 0;
}
.qtip-default.indicator .qtip-content {
    background-color: transparent;
    box-shadow: none;
    color: #001a73;
    text-transform: uppercase;
}
@media only screen and (min-width: 661px) {
.qtip-default {
    max-width: 320px;
    width: auto;
}
}
@media only screen and (min-width: 1001px) {
.qtip-default.indicator {
    display: none !important;
}
}
@font-face {
    font-family: "FontAwesome";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/css/vendor/fonts/font-awesome/fontawesome-webfont.eot?#iefix&v=4.5.0") format("embedded-opentype"), url("/sites/all/themes/developer/css/vendor/fonts/font-awesome/fontawesome-webfont.woff2?v=4.5.0") format("woff2"), url("/sites/all/themes/developer/css/vendor/fonts/font-awesome/fontawesome-webfont.woff?v=4.5.0") format("woff"), url("/sites/all/themes/developer/css/vendor/fonts/font-awesome/fontawesome-webfont.ttf?v=4.5.0") format("truetype"), url("/sites/all/themes/developer/css/vendor/fonts/font-awesome/fontawesome-webfont.svg?v=4.5.0#fontawesomeregular") format("svg");
}
.fa {
    display: inline-block;
    font-family: FontAwesome;
    font-feature-settings: normal;
    font-kerning: auto;
    font-language-override: normal;
    font-size: inherit;
    font-size-adjust: none;
    font-stretch: normal;
    font-style: normal;
    font-synthesis: weight style;
    font-variant: normal;
    font-weight: normal;
    line-height: 1;
    text-rendering: auto;
}
.fa-lg {
    font-size: 1.33333em;
    line-height: 0.75em;
    vertical-align: -15%;
}
.fa-2x {
    font-size: 2em;
}
.fa-3x {
    font-size: 3em;
}
.fa-4x {
    font-size: 4em;
}
.fa-5x {
    font-size: 5em;
}
.fa-fw {
    text-align: center;
    width: 1.28571em;
}
.fa-ul {
    list-style-type: none;
    margin-left: 2.14286em;
    padding-left: 0;
}
.fa-ul > li {
    position: relative;
}
.fa-li {
    left: -2.14286em;
    position: absolute;
    text-align: center;
    top: 0.14286em;
    width: 2.14286em;
}
.fa-li.fa-lg {
    left: -1.85714em;
}
.fa-border {
    border: 0.08em solid #eee;
    border-radius: 0.1em;
    padding: 0.2em 0.25em 0.15em;
}
.fa-pull-left {
    float: left;
}
.fa-pull-right {
    float: right;
}
.fa.fa-pull-left {
    margin-right: 0.3em;
}
.fa.fa-pull-right {
    margin-left: 0.3em;
}
.pull-right {
    float: right;
}
.pull-left {
    float: left;
}
.fa.pull-left {
    margin-right: 0.3em;
}
.fa.pull-right {
    margin-left: 0.3em;
}
.fa-spin {
    animation: 2s linear 0s normal none infinite running fa-spin;
}
.fa-pulse {
    animation: 1s steps(8) 0s normal none infinite running fa-spin;
}
@keyframes fa-spin {
0% {
    transform: rotate(0deg);
}
100% {
    transform: rotate(359deg);
}
}
@keyframes fa-spin {
0% {
    transform: rotate(0deg);
}
100% {
    transform: rotate(359deg);
}
}
.fa-rotate-90 {
    transform: rotate(90deg);
}
.fa-rotate-180 {
    transform: rotate(180deg);
}
.fa-rotate-270 {
    transform: rotate(270deg);
}
.fa-flip-horizontal {
    transform: scale(-1, 1);
}
.fa-flip-vertical {
    transform: scale(1, -1);
}
:root .fa-rotate-90, *:root .fa-rotate-180, *:root .fa-rotate-270, *:root .fa-flip-horizontal, *:root .fa-flip-vertical {
    filter: none;
}
.fa-stack {
    display: inline-block;
    height: 2em;
    line-height: 2em;
    position: relative;
    vertical-align: middle;
    width: 2em;
}
.fa-stack-1x, .fa-stack-2x {
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%;
}
.fa-stack-1x {
    line-height: inherit;
}
.fa-stack-2x {
    font-size: 2em;
}
.fa-inverse {
    color: #fff;
}
.fa-glass::before {
    content: "";
}
.fa-music::before {
    content: "";
}
.fa-search::before {
    content: "";
}
.fa-envelope-o::before {
    content: "";
}
.fa-heart::before {
    content: "";
}
.fa-star::before {
    content: "";
}
.fa-star-o::before {
    content: "";
}
.fa-user::before {
    content: "";
}
.fa-film::before {
    content: "";
}
.fa-th-large::before {
    content: "";
}
.fa-th::before {
    content: "";
}
.fa-th-list::before {
    content: "";
}
.fa-check::before {
    content: "";
}
.fa-remove::before, .fa-close::before, .fa-times::before {
    content: "";
}
.fa-search-plus::before {
    content: "";
}
.fa-search-minus::before {
    content: "";
}
.fa-power-off::before {
    content: "";
}
.fa-signal::before {
    content: "";
}
.fa-gear::before, .fa-cog::before {
    content: "";
}
.fa-trash-o::before {
    content: "";
}
.fa-home::before {
    content: "";
}
.fa-file-o::before {
    content: "";

}
.fa-clock-o::before {
    content: "";
}
.fa-road::before {
    content: "";
}
.fa-download::before {
    content: "";
}
.fa-arrow-circle-o-down::before {
    content: "";
}
.fa-arrow-circle-o-up::before {
    content: "";
}
.fa-inbox::before {
    content: "";
}
.fa-play-circle-o::before {
    content: "";
}
.fa-rotate-right::before, .fa-repeat::before {
    content: "";
}
.fa-refresh::before {
    content: "";
}
.fa-list-alt::before {
    content: "";
}
.fa-lock::before {
    content: "";
}
.fa-flag::before {
    content: "";
}
.fa-headphones::before {
    content: "";
}
.fa-volume-off::before {
    content: "";
}
.fa-volume-down::before {
    content: "";
}
.fa-volume-up::before {
    content: "";
}
.fa-qrcode::before {
    content: "";
}
.fa-barcode::before {
    content: "";
}
.fa-tag::before {
    content: "";
}
.fa-tags::before {
    content: "";
}
.fa-book::before {
    content: "";
}
.fa-bookmark::before {
    content: "";
}
.fa-print::before {
    content: "";
}
.fa-camera::before {
    content: "";
}
.fa-font::before {
    content: "";
}
.fa-bold::before {
    content: "";
}
.fa-italic::before {
    content: "";
}
.fa-text-height::before {
    content: "";
}
.fa-text-width::before {
    content: "";
}
.fa-align-left::before {
    content: "";
}
.fa-align-center::before {
    content: "";
}
.fa-align-right::before {
    content: "";
}
.fa-align-justify::before {
    content: "";
}
.fa-list::before {
    content: "";
}
.fa-dedent::before, .fa-outdent::before {
    content: "";
}
.fa-indent::before {
    content: "";
}
.fa-video-camera::before {
    content: "";
}
.fa-photo::before, .fa-image::before, .fa-picture-o::before {
    content: "";
}
.fa-pencil::before {
    content: "";
}
.fa-map-marker::before {
    content: "";
}
.fa-adjust::before {
    content: "";
}
.fa-tint::before {
    content: "";
}
.fa-edit::before, .fa-pencil-square-o::before {
    content: "";
}
.fa-share-square-o::before {
    content: "";
}
.fa-check-square-o::before {
    content: "";
}
.fa-arrows::before {
    content: "";
}
.fa-step-backward::before {
    content: "";
}
.fa-fast-backward::before {
    content: "";
}
.fa-backward::before {
    content: "";
}
.fa-play::before {
    content: "";
}
.fa-pause::before {
    content: "";
}
.fa-stop::before {
    content: "";
}
.fa-forward::before {
    content: "";
}
.fa-fast-forward::before {
    content: "";
}
.fa-step-forward::before {
    content: "";
}
.fa-eject::before {
    content: "";
}
.fa-chevron-left::before {
    content: "";
}
.fa-chevron-right::before {
    content: "";
}
.fa-plus-circle::before {
    content: "";
}
.fa-minus-circle::before {
    content: "";
}
.fa-times-circle::before {
    content: "";
}
.fa-check-circle::before {
    content: "";
}
.fa-question-circle::before {
    content: "";
}
.fa-info-circle::before {
    content: "";
}
.fa-crosshairs::before {
    content: "";
}
.fa-times-circle-o::before {
    content: "";
}
.fa-check-circle-o::before {
    content: "";
}
.fa-ban::before {
    content: "";
}
.fa-arrow-left::before {
    content: "";
}
.fa-arrow-right::before {
    content: "";
}
.fa-arrow-up::before {
    content: "";
}
.fa-arrow-down::before {
    content: "";
}
.fa-mail-forward::before, .fa-share::before {
    content: "";
}
.fa-expand::before {
    content: "";
}
.fa-compress::before {
    content: "";
}
.fa-plus::before {
    content: "";
}
.fa-minus::before {
    content: "";
}
.fa-asterisk::before {
    content: "";
}
.fa-exclamation-circle::before {
    content: "";
}
.fa-gift::before {
    content: "";
}
.fa-leaf::before {
    content: "";
}
.fa-fire::before {
    content: "";
}
.fa-eye::before {
    content: "";
}
.fa-eye-slash::before {
    content: "";
}
.fa-warning::before, .fa-exclamation-triangle::before {
    content: "";
}
.fa-plane::before {
    content: "";
}
.fa-calendar::before {
    content: "";
}
.fa-random::before {
    content: "";
}
.fa-comment::before {
    content: "";
}
.fa-magnet::before {
    content: "";
}
.fa-chevron-up::before {
    content: "";
}
.fa-chevron-down::before {
    content: "";
}
.fa-retweet::before {
    content: "";
}
.fa-shopping-cart::before {
    content: "";
}
.fa-folder::before {
    content: "";
}
.fa-folder-open::before {
    content: "";
}
.fa-arrows-v::before {
    content: "";
}
.fa-arrows-h::before {
    content: "";
}
.fa-bar-chart-o::before, .fa-bar-chart::before {
    content: "";
}
.fa-twitter-square::before {
    content: "";
}
.fa-facebook-square::before {
    content: "";
}
.fa-camera-retro::before {
    content: "";
}
.fa-key::before {
    content: "";
}
.fa-gears::before, .fa-cogs::before {
    content: "";
}
.fa-comments::before {
    content: "";
}
.fa-thumbs-o-up::before {
    content: "";
}
.fa-thumbs-o-down::before {
    content: "";
}
.fa-star-half::before {
    content: "";
}
.fa-heart-o::before {
    content: "";
}
.fa-sign-out::before {
    content: "";
}
.fa-linkedin-square::before {
    content: "";
}
.fa-thumb-tack::before {
    content: "";
}
.fa-external-link::before {
    content: "";
}
.fa-sign-in::before {
    content: "";
}
.fa-trophy::before {
    content: "";
}
.fa-github-square::before {
    content: "";
}
.fa-upload::before {
    content: "";
}
.fa-lemon-o::before {
    content: "";
}
.fa-phone::before {
    content: "";
}
.fa-square-o::before {
    content: "";
}
.fa-bookmark-o::before {
    content: "";
}
.fa-phone-square::before {
    content: "";
}
.fa-twitter::before {
    content: "";
}
.fa-facebook-f::before, .fa-facebook::before {
    content: "";
}
.fa-github::before {
    content: "";
}
.fa-unlock::before {
    content: "";
}
.fa-credit-card::before {
    content: "";
}
.fa-feed::before, .fa-rss::before {
    content: "";
}
.fa-hdd-o::before {
    content: "";
}
.fa-bullhorn::before {
    content: "";
}
.fa-bell::before {
    content: "";
}
.fa-certificate::before {
    content: "";
}
.fa-hand-o-right::before {
    content: "";
}
.fa-hand-o-left::before {
    content: "";
}
.fa-hand-o-up::before {
    content: "";
}
.fa-hand-o-down::before {
    content: "";
}
.fa-arrow-circle-left::before {
    content: "";
}
.fa-arrow-circle-right::before {
    content: "";
}
.fa-arrow-circle-up::before {
    content: "";
}
.fa-arrow-circle-down::before {
    content: "";
}
.fa-globe::before {
    content: "";
}
.fa-wrench::before {
    content: "";
}
.fa-tasks::before {
    content: "";
}
.fa-filter::before {
    content: "";
}
.fa-briefcase::before {
    content: "";
}
.fa-arrows-alt::before {
    content: "";
}
.fa-group::before, .fa-users::before {
    content: "";
}
.fa-chain::before, .fa-link::before {
    content: "";
}
.fa-cloud::before {
    content: "";
}
.fa-flask::before {
    content: "";
}
.fa-cut::before, .fa-scissors::before {
    content: "";
}
.fa-copy::before, .fa-files-o::before {
    content: "";
}
.fa-paperclip::before {
    content: "";
}
.fa-save::before, .fa-floppy-o::before {
    content: "";
}
.fa-square::before {
    content: "";
}
.fa-navicon::before, .fa-reorder::before, .fa-bars::before {
    content: "";
}
.fa-list-ul::before {
    content: "";
}
.fa-list-ol::before {
    content: "";
}
.fa-strikethrough::before {
    content: "";
}
.fa-underline::before {
    content: "";
}
.fa-table::before {
    content: "";
}
.fa-magic::before {
    content: "";
}
.fa-truck::before {
    content: "";
}
.fa-pinterest::before {
    content: "";
}
.fa-pinterest-square::before {
    content: "";
}
.fa-google-plus-square::before {
    content: "";
}
.fa-google-plus::before {
    content: "";
}
.fa-money::before {
    content: "";
}
.fa-caret-down::before {
    content: "";
}
.fa-caret-up::before {
    content: "";
}
.fa-caret-left::before {
    content: "";
}
.fa-caret-right::before {
    content: "";
}
.fa-columns::before {
    content: "";
}
.fa-unsorted::before, .fa-sort::before {
    content: "";
}
.fa-sort-down::before, .fa-sort-desc::before {
    content: "";
}
.fa-sort-up::before, .fa-sort-asc::before {
    content: "";
}
.fa-envelope::before {
    content: "";
}
.fa-linkedin::before {
    content: "";
}
.fa-rotate-left::before, .fa-undo::before {
    content: "";
}
.fa-legal::before, .fa-gavel::before {
    content: "";
}
.fa-dashboard::before, .fa-tachometer::before {
    content: "";
}
.fa-comment-o::before {
    content: "";
}
.fa-comments-o::before {
    content: "";
}
.fa-flash::before, .fa-bolt::before {
    content: "";
}
.fa-sitemap::before {
    content: "";
}
.fa-umbrella::before {
    content: "";
}
.fa-paste::before, .fa-clipboard::before {
    content: "";
}
.fa-lightbulb-o::before {
    content: "";
}
.fa-exchange::before {
    content: "";
}
.fa-cloud-download::before {
    content: "";
}
.fa-cloud-upload::before {
    content: "";
}
.fa-user-md::before {
    content: "";
}
.fa-stethoscope::before {
    content: "";
}
.fa-suitcase::before {
    content: "";
}
.fa-bell-o::before {
    content: "";
}
.fa-coffee::before {
    content: "";
}
.fa-cutlery::before {
    content: "";
}
.fa-file-text-o::before {
    content: "";
}
.fa-building-o::before {
    content: "";
}
.fa-hospital-o::before {
    content: "";
}
.fa-ambulance::before {
    content: "";
}
.fa-medkit::before {
    content: "";
}
.fa-fighter-jet::before {
    content: "";
}
.fa-beer::before {
    content: "";
}
.fa-h-square::before {
    content: "";
}
.fa-plus-square::before {
    content: "";
}
.fa-angle-double-left::before {
    content: "";
}
.fa-angle-double-right::before {
    content: "";
}
.fa-angle-double-up::before {
    content: "";
}
.fa-angle-double-down::before {
    content: "";
}
.fa-angle-left::before {
    content: "";
}
.fa-angle-right::before {
    content: "";
}
.fa-angle-up::before {
    content: "";
}
.fa-angle-down::before {
    content: "";
}
.fa-desktop::before {
    content: "";
}
.fa-laptop::before {
    content: "";
}
.fa-tablet::before {
    content: "";
}
.fa-mobile-phone::before, .fa-mobile::before {
    content: "";
}
.fa-circle-o::before {
    content: "";
}
.fa-quote-left::before {
    content: "";
}
.fa-quote-right::before {
    content: "";
}
.fa-spinner::before {
    content: "";
}
.fa-circle::before {
    content: "";
}
.fa-mail-reply::before, .fa-reply::before {
    content: "";
}
.fa-github-alt::before {
    content: "";
}
.fa-folder-o::before {
    content: "";
}
.fa-folder-open-o::before {
    content: "";
}
.fa-smile-o::before {
    content: "";
}
.fa-frown-o::before {
    content: "";
}
.fa-meh-o::before {
    content: "";
}
.fa-gamepad::before {
    content: "";
}
.fa-keyboard-o::before {
    content: "";
}
.fa-flag-o::before {
    content: "";
}
.fa-flag-checkered::before {
    content: "";
}
.fa-terminal::before {
    content: "";
}
.fa-code::before {
    content: "";
}
.fa-mail-reply-all::before, .fa-reply-all::before {
    content: "";
}
.fa-star-half-empty::before, .fa-star-half-full::before, .fa-star-half-o::before {
    content: "";
}
.fa-location-arrow::before {
    content: "";
}
.fa-crop::before {
    content: "";
}
.fa-code-fork::before {
    content: "";
}
.fa-unlink::before, .fa-chain-broken::before {
    content: "";
}
.fa-question::before {
    content: "";
}
.fa-info::before {
    content: "";
}
.fa-exclamation::before {
    content: "";
}
.fa-superscript::before {
    content: "";
}
.fa-subscript::before {
    content: "";
}
.fa-eraser::before {
    content: "";
}
.fa-puzzle-piece::before {
    content: "";
}
.fa-microphone::before {
    content: "";
}
.fa-microphone-slash::before {
    content: "";
}
.fa-shield::before {
    content: "";
}
.fa-calendar-o::before {
    content: "";
}
.fa-fire-extinguisher::before {
    content: "";
}
.fa-rocket::before {
    content: "";
}
.fa-maxcdn::before {
    content: "";
}
.fa-chevron-circle-left::before {
    content: "";
}
.fa-chevron-circle-right::before {
    content: "";
}
.fa-chevron-circle-up::before {
    content: "";
}
.fa-chevron-circle-down::before {
    content: "";
}
.fa-html5::before {
    content: "";
}
.fa-css3::before {
    content: "";
}
.fa-anchor::before {
    content: "";
}
.fa-unlock-alt::before {
    content: "";
}
.fa-bullseye::before {
    content: "";
}
.fa-ellipsis-h::before {
    content: "";
}
.fa-ellipsis-v::before {
    content: "";
}
.fa-rss-square::before {
    content: "";
}
.fa-play-circle::before {
    content: "";
}
.fa-ticket::before {
    content: "";
}
.fa-minus-square::before {
    content: "";
}
.fa-minus-square-o::before {
    content: "";
}
.fa-level-up::before {
    content: "";
}
.fa-level-down::before {
    content: "";
}
.fa-check-square::before {
    content: "";
}
.fa-pencil-square::before {
    content: "";
}
.fa-external-link-square::before {
    content: "";
}
.fa-share-square::before {
    content: "";
}
.fa-compass::before {
    content: "";
}
.fa-toggle-down::before, .fa-caret-square-o-down::before {
    content: "";
}
.fa-toggle-up::before, .fa-caret-square-o-up::before {
    content: "";
}
.fa-toggle-right::before, .fa-caret-square-o-right::before {
    content: "";
}
.fa-euro::before, .fa-eur::before {
    content: "";
}
.fa-gbp::before {
    content: "";
}
.fa-dollar::before, .fa-usd::before {
    content: "";
}
.fa-rupee::before, .fa-inr::before {
    content: "";
}
.fa-cny::before, .fa-rmb::before, .fa-yen::before, .fa-jpy::before {
    content: "";
}
.fa-ruble::before, .fa-rouble::before, .fa-rub::before {
    content: "";
}
.fa-won::before, .fa-krw::before {
    content: "";
}
.fa-bitcoin::before, .fa-btc::before {
    content: "";
}
.fa-file::before {
    content: "";
}
.fa-file-text::before {
    content: "";
}
.fa-sort-alpha-asc::before {
    content: "";
}
.fa-sort-alpha-desc::before {
    content: "";
}
.fa-sort-amount-asc::before {
    content: "";
}
.fa-sort-amount-desc::before {
    content: "";
}
.fa-sort-numeric-asc::before {
    content: "";
}
.fa-sort-numeric-desc::before {
    content: "";
}
.fa-thumbs-up::before {
    content: "";
}
.fa-thumbs-down::before {
    content: "";
}
.fa-youtube-square::before {
    content: "";
}
.fa-youtube::before {
    content: "";
}
.fa-xing::before {
    content: "";
}
.fa-xing-square::before {
    content: "";
}
.fa-youtube-play::before {
    content: "";
}
.fa-dropbox::before {
    content: "";
}
.fa-stack-overflow::before {
    content: "";
}
.fa-instagram::before {
    content: "";
}
.fa-flickr::before {
    content: "";
}
.fa-adn::before {
    content: "";
}
.fa-bitbucket::before {
    content: "";
}
.fa-bitbucket-square::before {
    content: "";
}
.fa-tumblr::before {
    content: "";
}
.fa-tumblr-square::before {
    content: "";
}
.fa-long-arrow-down::before {
    content: "";
}
.fa-long-arrow-up::before {
    content: "";
}
.fa-long-arrow-left::before {
    content: "";
}
.fa-long-arrow-right::before {
    content: "";
}
.fa-apple::before {
    content: "";
}
.fa-windows::before {
    content: "";
}
.fa-android::before {
    content: "";
}
.fa-linux::before {
    content: "";
}
.fa-dribbble::before {
    content: "";
}
.fa-skype::before {
    content: "";
}
.fa-foursquare::before {
    content: "";
}
.fa-trello::before {
    content: "";
}
.fa-female::before {
    content: "";
}
.fa-male::before {
    content: "";
}
.fa-gittip::before, .fa-gratipay::before {
    content: "";
}
.fa-sun-o::before {
    content: "";
}
.fa-moon-o::before {
    content: "";
}
.fa-archive::before {
    content: "";
}
.fa-bug::before {
    content: "";
}
.fa-vk::before {
    content: "";
}
.fa-weibo::before {
    content: "";
}
.fa-renren::before {
    content: "";
}
.fa-pagelines::before {
    content: "";
}
.fa-stack-exchange::before {
    content: "";
}
.fa-arrow-circle-o-right::before {
    content: "";
}
.fa-arrow-circle-o-left::before {
    content: "";
}
.fa-toggle-left::before, .fa-caret-square-o-left::before {
    content: "";
}
.fa-dot-circle-o::before {
    content: "";
}
.fa-wheelchair::before {
    content: "";
}
.fa-vimeo-square::before {
    content: "";
}
.fa-turkish-lira::before, .fa-try::before {
    content: "";
}
.fa-plus-square-o::before {
    content: "";
}
.fa-space-shuttle::before {
    content: "";
}
.fa-slack::before {
    content: "";
}
.fa-envelope-square::before {
    content: "";
}
.fa-wordpress::before {
    content: "";
}
.fa-openid::before {
    content: "";
}
.fa-institution::before, .fa-bank::before, .fa-university::before {
    content: "";
}
.fa-mortar-board::before, .fa-graduation-cap::before {
    content: "";
}
.fa-yahoo::before {
    content: "";
}
.fa-google::before {
    content: "";
}
.fa-reddit::before {
    content: "";
}
.fa-reddit-square::before {
    content: "";
}
.fa-stumbleupon-circle::before {
    content: "";
}
.fa-stumbleupon::before {
    content: "";
}
.fa-delicious::before {
    content: "";
}
.fa-digg::before {
    content: "";
}
.fa-pied-piper::before {
    content: "";
}
.fa-pied-piper-alt::before {
    content: "";
}
.fa-drupal::before {
    content: "";
}
.fa-joomla::before {
    content: "";
}
.fa-language::before {
    content: "";
}
.fa-fax::before {
    content: "";
}
.fa-building::before {
    content: "";
}
.fa-child::before {
    content: "";
}
.fa-paw::before {
    content: "";
}
.fa-spoon::before {
    content: "";
}
.fa-cube::before {
    content: "";
}
.fa-cubes::before {
    content: "";
}
.fa-behance::before {
    content: "";
}
.fa-behance-square::before {
    content: "";
}
.fa-steam::before {
    content: "";
}
.fa-steam-square::before {
    content: "";
}
.fa-recycle::before {
    content: "";
}
.fa-automobile::before, .fa-car::before {
    content: "";
}
.fa-cab::before, .fa-taxi::before {
    content: "";
}
.fa-tree::before {
    content: "";
}
.fa-spotify::before {
    content: "";
}
.fa-deviantart::before {
    content: "";
}
.fa-soundcloud::before {
    content: "";
}
.fa-database::before {
    content: "";
}
.fa-file-pdf-o::before {
    content: "";
}
.fa-file-word-o::before {
    content: "";
}
.fa-file-excel-o::before {
    content: "";
}
.fa-file-powerpoint-o::before {
    content: "";
}
.fa-file-photo-o::before, .fa-file-picture-o::before, .fa-file-image-o::before {
    content: "";
}
.fa-file-zip-o::before, .fa-file-archive-o::before {
    content: "";
}
.fa-file-sound-o::before, .fa-file-audio-o::before {
    content: "";
}
.fa-file-movie-o::before, .fa-file-video-o::before {
    content: "";
}
.fa-file-code-o::before {
    content: "";
}
.fa-vine::before {
    content: "";
}
.fa-codepen::before {
    content: "";
}
.fa-jsfiddle::before {
    content: "";
}
.fa-life-bouy::before, .fa-life-buoy::before, .fa-life-saver::before, .fa-support::before, .fa-life-ring::before {
    content: "";
}
.fa-circle-o-notch::before {
    content: "";
}
.fa-ra::before, .fa-rebel::before {
    content: "";
}
.fa-ge::before, .fa-empire::before {
    content: "";
}
.fa-git-square::before {
    content: "";
}
.fa-git::before {
    content: "";
}
.fa-y-combinator-square::before, .fa-yc-square::before, .fa-hacker-news::before {
    content: "";
}
.fa-tencent-weibo::before {
    content: "";
}
.fa-qq::before {
    content: "";
}
.fa-wechat::before, .fa-weixin::before {
    content: "";
}
.fa-send::before, .fa-paper-plane::before {
    content: "";
}
.fa-send-o::before, .fa-paper-plane-o::before {
    content: "";
}
.fa-history::before {
    content: "";
}
.fa-circle-thin::before {
    content: "";
}
.fa-header::before {
    content: "";
}
.fa-paragraph::before {
    content: "";
}
.fa-sliders::before {
    content: "";
}
.fa-share-alt::before {
    content: "";
}
.fa-share-alt-square::before {
    content: "";
}
.fa-bomb::before {
    content: "";
}
.fa-soccer-ball-o::before, .fa-futbol-o::before {
    content: "";
}
.fa-tty::before {
    content: "";
}
.fa-binoculars::before {
    content: "";
}
.fa-plug::before {
    content: "";
}
.fa-slideshare::before {
    content: "";
}
.fa-twitch::before {
    content: "";
}
.fa-yelp::before {
    content: "";
}
.fa-newspaper-o::before {
    content: "";
}
.fa-wifi::before {
    content: "";
}
.fa-calculator::before {
    content: "";
}
.fa-paypal::before {
    content: "";
}
.fa-google-wallet::before {
    content: "";
}
.fa-cc-visa::before {
    content: "";
}
.fa-cc-mastercard::before {
    content: "";
}
.fa-cc-discover::before {
    content: "";
}
.fa-cc-amex::before {
    content: "";
}
.fa-cc-paypal::before {
    content: "";
}
.fa-cc-stripe::before {
    content: "";
}
.fa-bell-slash::before {
    content: "";
}
.fa-bell-slash-o::before {
    content: "";
}
.fa-trash::before {
    content: "";
}
.fa-copyright::before {
    content: "";
}
.fa-at::before {
    content: "";
}
.fa-eyedropper::before {
    content: "";
}
.fa-paint-brush::before {
    content: "";
}
.fa-birthday-cake::before {
    content: "";
}
.fa-area-chart::before {
    content: "";
}
.fa-pie-chart::before {
    content: "";
}
.fa-line-chart::before {
    content: "";
}
.fa-lastfm::before {
    content: "";
}
.fa-lastfm-square::before {
    content: "";
}
.fa-toggle-off::before {
    content: "";
}
.fa-toggle-on::before {
    content: "";
}
.fa-bicycle::before {
    content: "";
}
.fa-bus::before {
    content: "";
}
.fa-ioxhost::before {
    content: "";
}
.fa-angellist::before {
    content: "";
}
.fa-cc::before {
    content: "";
}
.fa-shekel::before, .fa-sheqel::before, .fa-ils::before {
    content: "";
}
.fa-meanpath::before {
    content: "";
}
.fa-buysellads::before {
    content: "";
}
.fa-connectdevelop::before {
    content: "";
}
.fa-dashcube::before {
    content: "";
}
.fa-forumbee::before {
    content: "";
}
.fa-leanpub::before {
    content: "";
}
.fa-sellsy::before {
    content: "";
}
.fa-shirtsinbulk::before {
    content: "";
}
.fa-simplybuilt::before {
    content: "";
}
.fa-skyatlas::before {
    content: "";
}
.fa-cart-plus::before {
    content: "";
}
.fa-cart-arrow-down::before {
    content: "";
}
.fa-diamond::before {
    content: "";
}
.fa-ship::before {
    content: "";
}
.fa-user-secret::before {
    content: "";
}
.fa-motorcycle::before {
    content: "";
}
.fa-street-view::before {
    content: "";
}
.fa-heartbeat::before {
    content: "";
}
.fa-venus::before {
    content: "";
}
.fa-mars::before {
    content: "";
}
.fa-mercury::before {
    content: "";
}
.fa-intersex::before, .fa-transgender::before {
    content: "";
}
.fa-transgender-alt::before {
    content: "";
}
.fa-venus-double::before {
    content: "";
}
.fa-mars-double::before {
    content: "";
}
.fa-venus-mars::before {
    content: "";
}
.fa-mars-stroke::before {
    content: "";
}
.fa-mars-stroke-v::before {
    content: "";
}
.fa-mars-stroke-h::before {
    content: "";
}
.fa-neuter::before {
    content: "";
}
.fa-genderless::before {
    content: "";
}
.fa-facebook-official::before {
    content: "";
}
.fa-pinterest-p::before {
    content: "";
}
.fa-whatsapp::before {
    content: "";
}
.fa-server::before {
    content: "";
}
.fa-user-plus::before {
    content: "";
}
.fa-user-times::before {
    content: "";
}
.fa-hotel::before, .fa-bed::before {
    content: "";
}
.fa-viacoin::before {
    content: "";
}
.fa-train::before {
    content: "";
}
.fa-subway::before {
    content: "";
}
.fa-medium::before {
    content: "";
}
.fa-yc::before, .fa-y-combinator::before {
    content: "";
}
.fa-optin-monster::before {
    content: "";
}
.fa-opencart::before {
    content: "";
}
.fa-expeditedssl::before {
    content: "";
}
.fa-battery-4::before, .fa-battery-full::before {
    content: "";
}
.fa-battery-3::before, .fa-battery-three-quarters::before {
    content: "";
}
.fa-battery-2::before, .fa-battery-half::before {
    content: "";
}
.fa-battery-1::before, .fa-battery-quarter::before {
    content: "";
}
.fa-battery-0::before, .fa-battery-empty::before {
    content: "";
}
.fa-mouse-pointer::before {
    content: "";
}
.fa-i-cursor::before {
    content: "";
}
.fa-object-group::before {
    content: "";
}
.fa-object-ungroup::before {
    content: "";
}
.fa-sticky-note::before {
    content: "";
}
.fa-sticky-note-o::before {
    content: "";
}
.fa-cc-jcb::before {
    content: "";
}
.fa-cc-diners-club::before {
    content: "";
}
.fa-clone::before {
    content: "";
}
.fa-balance-scale::before {
    content: "";
}
.fa-hourglass-o::before {
    content: "";
}
.fa-hourglass-1::before, .fa-hourglass-start::before {
    content: "";
}
.fa-hourglass-2::before, .fa-hourglass-half::before {
    content: "";
}
.fa-hourglass-3::before, .fa-hourglass-end::before {
    content: "";
}
.fa-hourglass::before {
    content: "";
}
.fa-hand-grab-o::before, .fa-hand-rock-o::before {
    content: "";
}
.fa-hand-stop-o::before, .fa-hand-paper-o::before {
    content: "";
}
.fa-hand-scissors-o::before {
    content: "";
}
.fa-hand-lizard-o::before {
    content: "";
}
.fa-hand-spock-o::before {
    content: "";
}
.fa-hand-pointer-o::before {
    content: "";
}
.fa-hand-peace-o::before {
    content: "";
}
.fa-trademark::before {
    content: "";
}
.fa-registered::before {
    content: "";
}
.fa-creative-commons::before {
    content: "";
}
.fa-gg::before {
    content: "";
}
.fa-gg-circle::before {
    content: "";
}
.fa-tripadvisor::before {
    content: "";
}
.fa-odnoklassniki::before {
    content: "";
}
.fa-odnoklassniki-square::before {
    content: "";
}
.fa-get-pocket::before {
    content: "";
}
.fa-wikipedia-w::before {
    content: "";
}
.fa-safari::before {
    content: "";
}
.fa-chrome::before {
    content: "";
}
.fa-firefox::before {
    content: "";
}
.fa-opera::before {
    content: "";
}
.fa-internet-explorer::before {
    content: "";
}
.fa-tv::before, .fa-television::before {
    content: "";
}
.fa-contao::before {
    content: "";
}
.fa-500px::before {
    content: "";
}
.fa-amazon::before {
    content: "";
}
.fa-calendar-plus-o::before {
    content: "";
}
.fa-calendar-minus-o::before {
    content: "";
}
.fa-calendar-times-o::before {
    content: "";
}
.fa-calendar-check-o::before {
    content: "";
}
.fa-industry::before {
    content: "";
}
.fa-map-pin::before {
    content: "";
}
.fa-map-signs::before {
    content: "";
}
.fa-map-o::before {
    content: "";
}
.fa-map::before {
    content: "";
}
.fa-commenting::before {
    content: "";
}
.fa-commenting-o::before {
    content: "";
}
.fa-houzz::before {
    content: "";
}
.fa-vimeo::before {
    content: "";
}
.fa-black-tie::before {
    content: "";
}
.fa-fonticons::before {
    content: "";
}
.fa-reddit-alien::before {
    content: "";
}
.fa-edge::before {
    content: "";
}
.fa-credit-card-alt::before {
    content: "";
}
.fa-codiepie::before {
    content: "";
}
.fa-modx::before {
    content: "";
}
.fa-fort-awesome::before {
    content: "";
}
.fa-usb::before {
    content: "";
}
.fa-product-hunt::before {
    content: "";
}
.fa-mixcloud::before {
    content: "";
}
.fa-scribd::before {
    content: "";
}
.fa-pause-circle::before {
    content: "";
}
.fa-pause-circle-o::before {
    content: "";
}
.fa-stop-circle::before {
    content: "";
}
.fa-stop-circle-o::before {
    content: "";
}
.fa-shopping-bag::before {
    content: "";
}
.fa-shopping-basket::before {
    content: "";
}
.fa-hashtag::before {
    content: "";
}
.fa-bluetooth::before {
    content: "";
}
.fa-bluetooth-b::before {
    content: "";
}
.fa-percent::before {
    content: "";
}
.vjs-default-skin {
    color: #cccccc;
}
@font-face {
    font-family: "VideoJS";
    font-style: normal;
    font-weight: normal;
    src: url("/sites/all/themes/developer/fonts/video-js/vjs.eot?#iefix") format("embedded-opentype"), url("/sites/all/themes/developer/fonts/video-js/vjs.woff") format("woff"), url("/sites/all/themes/developer/fonts/video-js/vjs.ttf") format("truetype"), url("/sites/all/themes/developer/fonts/video-js/vjs.svg#icomoon") format("svg");
}
.vjs-default-skin .vjs-slider {
    background-color: rgba(51, 51, 51, 0.9);
    cursor: pointer;
    outline: 0 none;
    padding: 0;
    position: relative;
}
.vjs-default-skin .vjs-slider:focus {
    box-shadow: 0 0 2em #fff;
}
.vjs-default-skin .vjs-slider-handle {
    left: 0;
    position: absolute;
    top: 0;
}
.vjs-default-skin .vjs-slider-handle::before {
    content: "";
    font-family: VideoJS,sans-serif;
    font-size: 1em;
    left: 0;
    line-height: 1;
    position: absolute;
    text-align: center;
    text-shadow: 0 0 1em #fff;
    top: 0;
    transform: rotate(-45deg);
}
.vjs-default-skin .vjs-control-bar {
    background-color: rgba(7, 20, 30, 0.7);
    bottom: 0;
    display: none;
    height: 3em;
    left: 0;
    position: absolute;
    right: 0;
}
.vjs-default-skin.vjs-has-started .vjs-control-bar {
    display: block;
    opacity: 1;
    transition: visibility 0.1s ease 0s, opacity 0.1s ease 0s;
    visibility: visible;
}
.vjs-default-skin.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
    display: block;
    opacity: 0;
    transition: visibility 1s ease 0s, opacity 1s ease 0s;
    visibility: hidden;
}
.vjs-default-skin.vjs-controls-disabled .vjs-control-bar {
    display: none;
}
.vjs-default-skin.vjs-using-native-controls .vjs-control-bar {
    display: none;
}
.vjs-default-skin.vjs-error .vjs-control-bar {
    display: none;
}
.vjs-audio.vjs-default-skin.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
    opacity: 1;
    visibility: visible;
}
.vjs-default-skin .vjs-control {
    float: left;
    height: 3em;
    margin: 0;
    outline: medium none;
    padding: 0;
    position: relative;
    text-align: center;
    width: 4em;
}
.vjs-default-skin .vjs-control::before {
    font-family: VideoJS,sans-serif;
    font-size: 1.5em;
    height: 100%;
    left: 0;
    line-height: 2;
    position: absolute;
    text-align: center;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    top: 0;
    width: 100%;
}
.vjs-default-skin .vjs-control:focus::before, .vjs-default-skin .vjs-control:hover::before {
    text-shadow: 0 0 1em white;
}
.vjs-default-skin .vjs-control:focus {
}
.vjs-default-skin .vjs-control-text {
    border: 0 none;
    clip: rect(0px, 0px, 0px, 0px);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}
.vjs-default-skin .vjs-play-control {
    cursor: pointer;
    width: 5em;
}
.vjs-default-skin .vjs-play-control::before {
    content: "";
}
.vjs-default-skin.vjs-playing .vjs-play-control::before {
    content: "";
}
.vjs-default-skin .vjs-playback-rate .vjs-playback-rate-value {
    font-size: 1.5em;
    height: 100%;
    left: 0;
    line-height: 2;
    position: absolute;
    text-align: center;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    top: 0;
    width: 100%;
}
.vjs-default-skin .vjs-playback-rate.vjs-menu-button .vjs-menu .vjs-menu-content {
    left: -2em;
    list-style: outside none none;
    width: 4em;
}
.vjs-default-skin .vjs-mute-control, .vjs-default-skin .vjs-volume-menu-button {
    cursor: pointer;
    float: right;
}
.vjs-default-skin .vjs-mute-control::before, .vjs-default-skin .vjs-volume-menu-button::before {
    content: "";
}
.vjs-default-skin .vjs-mute-control.vjs-vol-0::before, .vjs-default-skin .vjs-volume-menu-button.vjs-vol-0::before {
    content: "";
}
.vjs-default-skin .vjs-mute-control.vjs-vol-1::before, .vjs-default-skin .vjs-volume-menu-button.vjs-vol-1::before {
    content: "";
}
.vjs-default-skin .vjs-mute-control.vjs-vol-2::before, .vjs-default-skin .vjs-volume-menu-button.vjs-vol-2::before {
    content: "";
}
.vjs-default-skin .vjs-volume-control {
    float: right;
    width: 5em;
}
.vjs-default-skin .vjs-volume-bar {
    height: 0.6em;
    margin: 1.1em auto 0;
    width: 5em;
}
.vjs-default-skin .vjs-volume-level {
    background: #66a8cc url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAAP0lEQVQIHWWMAQoAIAgDR/QJ/Ub//04+w7ZICBwcOg5FZi5iBB82AGzixEglJrd4TVK5XUJpskSTEvpdFzX9AB2pGziSQcvAAAAAAElFTkSuQmCC") repeat scroll -50% 0;
    height: 0.5em;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
.vjs-default-skin .vjs-volume-bar .vjs-volume-handle {
    height: 0.5em;
    left: 4.5em;
    width: 0.5em;
}
.vjs-default-skin .vjs-volume-handle::before {
    font-size: 0.9em;
    height: 1em;
    left: -0.2em;
    top: -0.2em;
    width: 1em;
}
.vjs-default-skin .vjs-volume-menu-button .vjs-menu {
    border-top-color: transparent;
    display: block;
    height: 0;
    width: 0;
}
.vjs-default-skin .vjs-volume-menu-button .vjs-menu .vjs-menu-content {
    height: 0;
    width: 0;
}
.vjs-default-skin .vjs-volume-menu-button:hover .vjs-menu, .vjs-default-skin .vjs-volume-menu-button .vjs-menu.vjs-lock-showing {
    border-top-color: rgba(7, 40, 50, 0.5);
}
.vjs-default-skin .vjs-volume-menu-button:hover .vjs-menu .vjs-menu-content, .vjs-default-skin .vjs-volume-menu-button .vjs-menu.vjs-lock-showing .vjs-menu-content {
    height: 2.9em;
    width: 10em;
}
.vjs-default-skin .vjs-progress-control {
    font-size: 0.3em;
    height: 1em;
    left: 0;
    position: absolute;
    right: 0;
    top: -1em;
    transition: all 0.4s ease 0s;
    width: auto;
}
.vjs-default-skin:hover .vjs-progress-control {
    font-size: 0.9em;
    transition: all 0.2s ease 0s;
}
.vjs-default-skin .vjs-progress-holder {
    height: 100%;
}
.vjs-default-skin .vjs-progress-holder .vjs-play-progress, .vjs-default-skin .vjs-progress-holder .vjs-load-progress, .vjs-default-skin .vjs-progress-holder .vjs-load-progress div {
    display: block;
    height: 100%;
    left: 0;
    margin: 0;
    padding: 0;
    position: absolute;
    top: 0;
    width: 0;
}
.vjs-default-skin .vjs-play-progress {
    background: #66a8cc url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAAP0lEQVQIHWWMAQoAIAgDR/QJ/Ub//04+w7ZICBwcOg5FZi5iBB82AGzixEglJrd4TVK5XUJpskSTEvpdFzX9AB2pGziSQcvAAAAAAElFTkSuQmCC") repeat scroll -50% 0;
}
.vjs-default-skin .vjs-load-progress {
    background: rgba(255, 255, 255, 0.2) none repeat scroll 0 0;
}
.vjs-default-skin .vjs-load-progress div {
    background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0;
}
.vjs-default-skin .vjs-seek-handle {
    height: 100%;
    width: 1.5em;
}
.vjs-default-skin .vjs-seek-handle::before {
    padding-top: 0.1em;
}
.vjs-default-skin.vjs-live .vjs-time-controls, .vjs-default-skin.vjs-live .vjs-time-divider, .vjs-default-skin.vjs-live .vjs-progress-control {
    display: none;
}
.vjs-default-skin.vjs-live .vjs-live-display {
    display: block;
}
.vjs-default-skin .vjs-live-display {
    display: none;
    font-size: 1em;
    line-height: 3em;
}
.vjs-default-skin .vjs-time-controls {
    font-size: 1em;
    line-height: 3em;
}
.vjs-default-skin .vjs-current-time {
    float: left;
}
.vjs-default-skin .vjs-duration {
    float: left;
}
.vjs-default-skin .vjs-remaining-time {
    display: none;
    float: left;
}
.vjs-time-divider {
    float: left;
    line-height: 3em;
}
.vjs-default-skin .vjs-fullscreen-control {
    cursor: pointer;
    float: right;
    width: 3.8em;
}
.vjs-default-skin .vjs-fullscreen-control::before {
    content: "";
}
.vjs-default-skin.vjs-fullscreen .vjs-fullscreen-control::before {
    content: "";
}
.vjs-default-skin .vjs-big-play-button {
    background-color: rgba(7, 20, 30, 0.7);
    border: 0.1em solid #3b4249;
    border-radius: 0.8em;
    box-shadow: 0 0 1em rgba(255, 255, 255, 0.25);
    cursor: pointer;
    display: block;
    font-size: 3em;
    height: 2.6em;
    left: 0.5em;
    opacity: 1;
    position: absolute;
    text-align: center;
    top: 0.5em;
    transition: all 0.4s ease 0s;
    vertical-align: middle;
    width: 4em;
    z-index: 2;
}
.vjs-default-skin.vjs-big-play-centered .vjs-big-play-button {
    left: 50%;
    margin-left: -2.1em;
    margin-top: -1.4em;
    top: 50%;
}
.vjs-default-skin.vjs-controls-disabled .vjs-big-play-button {
    display: none;
}
.vjs-default-skin.vjs-has-started .vjs-big-play-button {
    display: none;
}
.vjs-default-skin.vjs-using-native-controls .vjs-big-play-button {
    display: none;
}
.vjs-default-skin:hover .vjs-big-play-button, .vjs-default-skin .vjs-big-play-button:focus {
    background-color: rgba(50, 50, 50, 0.75);
    border-color: #fff;
    box-shadow: 0 0 3em #fff;
    outline: 0 none;
    transition: all 0s ease 0s;
}
.vjs-default-skin .vjs-big-play-button::before {
    content: "";
    font-family: VideoJS;
    height: 100%;
    left: 0;
    line-height: 2.6em;
    position: absolute;
    text-align: center;
    text-shadow: 0.05em 0.05em 0.1em #000;
    width: 100%;
}
.vjs-error .vjs-big-play-button {
    display: none;
}
.vjs-error-display {
    display: none;
}
.vjs-error .vjs-error-display {
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
.vjs-error .vjs-error-display::before {
    color: #666666;
    content: "X";
    font-family: Arial;
    font-size: 4em;
    left: 0;
    line-height: 1;
    margin-top: -0.5em;
    position: absolute;
    text-align: center;
    text-shadow: 0.05em 0.05em 0.1em #000;
    top: 50%;
    vertical-align: middle;
    width: 100%;
}
.vjs-error-display div {
    background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
    bottom: 1em;
    font-size: 1.4em;
    left: 0;
    padding: 3px;
    position: absolute;
    right: 0;
    text-align: center;
}
.vjs-error-display a, .vjs-error-display a:visited {
    color: #f4a460;
}
.vjs-loading-spinner {
    display: none;
    font-size: 4em;
    height: 1em;
    left: 50%;
    line-height: 1;
    margin-left: -0.5em;
    margin-top: -0.5em;
    opacity: 0.75;
    position: absolute;
    top: 50%;
    width: 1em;
}
.vjs-waiting .vjs-loading-spinner, .vjs-seeking .vjs-loading-spinner {
    animation: 1.5s linear 0s normal none infinite running spin;
    display: block;
}
.vjs-error .vjs-loading-spinner {
    animation: 0s ease 0s normal none 1 running none;
    display: none;
}
.vjs-default-skin .vjs-loading-spinner::before {
    content: "";
    font-family: VideoJS;
    height: 1em;
    left: 0;
    position: absolute;
    text-align: center;
    text-shadow: 0 0 0.1em #000;
    top: 0;
    width: 1em;
}
@keyframes spin {
0% {
    transform: rotate(0deg);
}
100% {
    transform: rotate(359deg);
}
}
@keyframes spin {
0% {
    transform: rotate(0deg);
}
100% {
    transform: rotate(359deg);
}
}
@keyframes spin {
0% {
    transform: rotate(0deg);
}
100% {
    transform: rotate(359deg);
}
}
.vjs-default-skin .vjs-menu-button {
    cursor: pointer;
    float: right;
}
.vjs-default-skin .vjs-menu {
    border-left: 2em solid transparent;
    border-right: 2em solid transparent;
    border-top: 1.55em solid rgba(7, 40, 50, 0.5);
    bottom: 0;
    display: none;
    height: 0;
    left: 0;
    margin-bottom: 3em;
    position: absolute;
    width: 0;
}
.vjs-default-skin .vjs-menu-button .vjs-menu .vjs-menu-content {
    background-color: rgba(7, 20, 30, 0.7);
    bottom: 1.5em;
    box-shadow: -0.2em -0.2em 0.3em rgba(255, 255, 255, 0.2);
    display: block;
    left: -5em;
    margin: 0;
    max-height: 15em;
    overflow: auto;
    padding: 0;
    position: absolute;
    width: 10em;
}
.vjs-default-skin .vjs-menu-button:hover .vjs-control-content .vjs-menu, .vjs-default-skin .vjs-control-content .vjs-menu.vjs-lock-showing {
    display: block;
}
.vjs-default-skin.vjs-scrubbing .vjs-menu-button:hover .vjs-control-content .vjs-menu {
    display: none;
}
.vjs-default-skin .vjs-menu-button ul li {
    font-size: 1.2em;
    line-height: 1.4em;
    list-style: outside none none;
    margin: 0;
    padding: 0.3em 0;
    text-align: center;
    text-transform: lowercase;
}
.vjs-default-skin .vjs-menu-button ul li.vjs-selected {
    background-color: #000;
}
.vjs-default-skin .vjs-menu-button ul li:focus, .vjs-default-skin .vjs-menu-button ul li:hover, .vjs-default-skin .vjs-menu-button ul li.vjs-selected:focus, .vjs-default-skin .vjs-menu-button ul li.vjs-selected:hover {
    background-color: rgba(255, 255, 255, 0.75);
    box-shadow: 0 0 1em white;
    color: #111;
    outline: 0 none;
}
.vjs-default-skin .vjs-menu-button ul li.vjs-menu-title {
    cursor: default;
    font-size: 1em;
    font-weight: bold;
    line-height: 2em;
    margin: 0 0 0.3em;
    padding: 0;
    text-align: center;
    text-transform: uppercase;
}
.vjs-default-skin .vjs-subtitles-button::before {
    content: "";
}
.vjs-default-skin .vjs-captions-button::before {
    content: "";
}
.vjs-default-skin .vjs-chapters-button::before {
    content: "";
}
.vjs-default-skin .vjs-chapters-button.vjs-menu-button .vjs-menu .vjs-menu-content {
    left: -12em;
    width: 24em;
}
.vjs-default-skin .vjs-captions-button:focus .vjs-control-content::before, .vjs-default-skin .vjs-captions-button:hover .vjs-control-content::before {
    box-shadow: 0 0 1em white;
}
.video-js {
    -moz-user-select: none;
    background-color: #000;
    font-family: Arial,sans-serif;
    font-size: 10px;
    font-style: normal;
    font-weight: normal;
    padding: 0;
    position: relative;
    vertical-align: middle;
}
.video-js .vjs-tech {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
.video-js:-moz-full-screen {
    position: absolute;
}
body.vjs-full-window {
    height: 100%;
    margin: 0;
    overflow-y: auto;
    padding: 0;
}
.video-js.vjs-fullscreen {
    bottom: 0;
    height: 100% !important;
    left: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    top: 0;
    width: 100% !important;
    z-index: 1000;
}
.video-js.vjs-fullscreen.vjs-user-inactive {
    cursor: none;
}
.vjs-poster {
    background-color: #000000;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: contain;
    bottom: 0;
    cursor: pointer;
    left: 0;
    margin: 0;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
}
.vjs-poster img {
    display: block;
    margin: 0 auto;
    max-height: 100%;
    padding: 0;
    width: 100%;
}
.video-js.vjs-has-started .vjs-poster {
    display: none;
}
.video-js.vjs-audio.vjs-has-started .vjs-poster {
    display: block;
}
.video-js.vjs-controls-disabled .vjs-poster {
    display: none;
}
.video-js.vjs-using-native-controls .vjs-poster {
    display: none;
}
.video-js .vjs-text-track-display {
    bottom: 3em;
    left: 0;
    pointer-events: none;
    position: absolute;
    right: 0;
    top: 0;
}
.vjs-caption-settings {
    background-color: #000;
    color: #fff;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    height: 15em;
    margin: 0 auto;
    opacity: 0.75;
    padding: 0.5em;
    position: relative;
    top: 1em;
    width: 40em;
}
.vjs-caption-settings .vjs-tracksettings {
    bottom: 2em;
    left: 0;
    overflow: auto;
    position: absolute;
    right: 0;
    top: 0;
}
.vjs-caption-settings .vjs-tracksettings-colors, .vjs-caption-settings .vjs-tracksettings-font {
    float: left;
}
.vjs-caption-settings .vjs-tracksettings-colors::after, .vjs-caption-settings .vjs-tracksettings-font::after, .vjs-caption-settings .vjs-tracksettings-controls::after {
    clear: both;
}
.vjs-caption-settings .vjs-tracksettings-controls {
    bottom: 1em;
    position: absolute;
    right: 1em;
}
.vjs-caption-settings .vjs-tracksetting {
    margin: 5px;
    min-height: 40px;
    padding: 3px;
}
.vjs-caption-settings .vjs-tracksetting label {
    display: block;
    margin-bottom: 5px;
    width: 100px;
}
.vjs-caption-settings .vjs-tracksetting span {
    display: inline;
    margin-left: 5px;
}
.vjs-caption-settings .vjs-tracksetting > div {
    margin-bottom: 5px;
    min-height: 20px;
}
.vjs-caption-settings .vjs-tracksetting > div:last-child {
    margin-bottom: 0;
    min-height: 0;
    padding-bottom: 0;
}
.vjs-caption-settings label > input {
    margin-right: 10px;
}
.vjs-caption-settings input[type="button"] {
    height: 40px;
    width: 40px;
}
.vjs-hidden {
    display: none !important;
}
.vjs-lock-showing {
    display: block !important;
    opacity: 1;
    visibility: visible;
}
.vjs-no-js {
    background-color: #333;
    color: #ccc;
    font-family: Arial,sans-serif;
    font-size: 1.8em;
    height: 15em;
    margin: 0 auto;
    padding: 2em;
    text-align: center;
    width: 30em;
}
.vjs-no-js a, .vjs-no-js a:visited {
    color: #f4a460;
}
pre, code, kbd, samp {
    border-left: 2px solid #c8c8c2;
    color: #444;
    display: block;
    font-size: 0.9em;
    padding: 0.25em 2em 1.75em;
}
article ul, article ul li {
    list-style-type: disc;
}
.main-menu {
    background-color: transparent;
    float: right;
}
.developers-site-slogan {
    color: #444;
    font-size: 1.30769em;
    font-weight: bold;
    margin-left: 10px;
    padding-top: 8px;
    text-indent: 0.6em;
}
.inline-block {
    display: inline-block;
}
.messages {
    border-radius: 10px 10px 0;
    margin-bottom: 20px;
}
#messages {
    padding: 0 10px 10px;
}
.feed-icons {
    display: inline-block;
    float: right;
}
.contextual-links-region {
    position: initial;
}
.contextual-links-wrapper {
    clear: none;
    float: right;
}
.js img.responsive {
    visibility: visible;
}
html.js fieldset.collapsed {
    height: 1.5em;
}
.global-links {
    color: #fff;
}
li a.active {
    color: #ed8c00;
}
nav.tabs ul.tabs.primary {
    float: left;
    margin: 10px 0;
    width: 99%;
}
ul.tabs li {
    padding: 0 2px;
}
ul.primary li a {
    border-radius: 5px 5px 0 0;
    display: inline-block;
    margin-bottom: -1px;
    padding: 5px 1em;
}
ul.node-links {
    display: inline-block;
    margin: 1em;
}
.main-menu > li > a {
    line-height: inherit;
}
.search-form .submit {
    width: 32px;
}
.main .search-form .submit {
    width: 40px;
}
.search-form .submit::after {
    font-size: 1.4em;
    line-height: 1.4;
    margin-right: 7px;
}
label {
    font-weight: inherit;
}
.form ul.checkboxes.field {
    display: inline-block;
    margin-left: 1.5em;
    min-width: 25em;
}
.form ul.checkboxes.field li {
    overflow: hidden;
}
.form ul.checkboxes.field li label {
    min-width: 75%;
    width: auto;
}
.form ul.checkboxes.field li input {
    min-width: 2em;
}
article.block.calamity {
    border-color: #444;
}
article.block.calamity a, article.block.calamity .title, article.block.calamity::before {
    color: #444;
}
article.block.calamity.status {
    border-color: #223bab;
}
article.block.calamity.status a, article.block.calamity.status .title, article.block.calamity.status::before {
    color: #223bab;
}
article.block.calamity.warning {
    border-color: #ed8c00;
}
article.block.calamity.warning a, article.block.calamity.warning .title, article.block.calamity.warning::before {
    color: #ed8c00;
}
article.block.calamity.error {
    border-color: #d52b1e;
}
article.block.calamity.error a, article.block.calamity.error .title, article.block.calamity.error::before {
    color: #d52b1e;
}
.api-menu {
    border-bottom: 1px solid #d2d2cc;
    border-top: 1px solid #d2d2cc;
    clear: both;
    display: block;
    list-style: outside none none;
    margin: 0 0 1.5em;
    overflow: hidden;
    padding: 10px 0;
}
.api-menu > li {
    float: left;
    overflow: hidden;
    padding-right: 2em;
}
.api-menu > li > a {
    color: #001a73;
    font-family: "PostNL-Regular",sans-serif;
    font-size: 1.3em;
    font-weight: normal;
    line-height: 1.2;
    padding: 0 10px;
    text-rendering: optimizelegibility;
    transition: border-right 0s ease 0s, transform 0s ease 0s;
}
.api-menu > li > a.active {
    color: #ed8c00;
}
#login form, #login .form {
    padding: 0;
}
#login .form ul {
    margin: 24px 12px;
    padding: 0;
}
#login .form .form-row {
    margin: 0 0 10px;
}
#login .form .field, #login .form .label {
    display: block;
    float: none;
    margin: 0;
    width: 100%;
}
article ol.toc-node-numbers {
    display: none;
}
article.taxonomy-term img.picto {
    max-width: 60px;
}
.search-form .form-type-textfield {
    margin-bottom: 0;
    margin-top: 0;
}
.search-form .input {
    padding: 2px 10px;
}
.search-form .submit {
    width: 32px;
}
.search-form .submit::after {
    font-size: 18px;
    line-height: 1.4;
    margin-right: 7px;
}
.swagger-ui-wrap.placeholder {
    background-color: #98c600;
    background-image: url("/sites/all/themes/developer/images/swagger-placeholder.png");
    background-position: 50% 25px;
    background-repeat: no-repeat;
    background-size: 70px 70px;
    clear: both;
    display: block;
    float: none;
    height: auto;
    min-height: 150px;
    min-width: 150px;
    width: 100%;
}
.swagger-ui-wrap.placeholder::before {
    color: #fff;
    content: "API documentation widget";
    display: inline-block;
    font-family: monospace;
    font-weight: normal;
    margin: 105px auto 0;
    text-align: center;
    text-shadow: 0 1px 1px #6d9a00;
    width: 100%;
}
.swagger-ui-wrap ul, .swagger-ui-wrap ul li {
    list-style-type: none;
}
.swagger-ui-wrap li.active {
    font-weight: inherit;
}
.faq-answer > div > label, .faq-answer > div > a {
    display: none;
}
.view-api-details > div > div > div > div > label, .view-api-details > div > div > div > div > a {
    display: none;
}
.form-item .field .input, .form-item .form-text {
    border: 1px solid #c8c8c2;
    border-radius: 5px;
    color: #444444;
    outline-color: #ffc36e;
    width: 50%;
}
#user-login, #user-register-form {
    margin: 1em;
    position: relative;
}
#apigee-sso-signin-block {
    border-left: 1px solid #aaa;
    position: absolute;
    right: 0;
    top: 1.5em;
    width: 32%;
}
#apigee-sso-signin-block ul.federated-buttons {
    list-style: outside none none;
    margin: 0 0 0 2em;
}
#apigee-sso-signin-block ul.federated-buttons li {
    margin: 0;
    padding: 0.25em 0;
}
#login input {
    width: 385px !important;
}
#edit-submit-google {
    background-image: none;
    height: 34px;
}

  </style>
</body>
</html>
