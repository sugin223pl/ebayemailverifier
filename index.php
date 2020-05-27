<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'Extract.php';

use App\Extract;

//Extract::prepare();

flush();
ob_flush();
?>
<!DOCTYPE html>
<html lang="en"><head> <meta charset="utf-8">  <title>Domain Default page</title>   <meta name="copyright" content="Copyright 1999-2020. Plesk International GmbH. All rights reserved."> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="viewport" content="width=device-width,initial-scale=1"> <link rel="shortcut icon" href="https://assets.plesk.com/static/default-website-content/public/favicon-1db747.ico"> <link rel="preload" href="https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-regular-b4d2c4.woff2" as="font" type="font/woff2" crossorigin=""> <style>/* Copyright 1999-2020. Plesk International GmbH. All rights reserved. */

@font-face {
    font-family: "Lato";
    font-display: swap;
    font-style: normal;
    font-weight: 400;
    src: local('Lato Regular'), local('Lato-Regular'), url(https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-regular-b4d2c4.woff2) format("woff2"),
    url(https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-regular-b8ee54.woff) format("woff");
}

@font-face {
    font-family: "Lato";
    font-display: swap;
    font-style: normal;
    font-weight: 700;
    src: local('Lato Bold'), local('Lato-Bold'), url(https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-700-1efbd3.woff2) format("woff2"),
    url(https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-700-874b8e.woff) format("woff");
}

html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    box-sizing: border-box;
    height: 100%;
    font-size: 10px;
    -webkit-tap-highlight-color: transparent;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

body {
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-width: 320px;
    min-height: 100vh;
    font-size: 14px;
    line-height: 1.714em;
    font-family: "Lato", sans-serif;
    color: #222;
    word-wrap: break-word;
    background-color: #f3f3f3;
    height: 100%;
}

a {
    color: #53bce6;
    text-decoration: none;
    cursor: pointer;
    background-color: transparent;
}

a:active,
a:hover {
    outline: none;
}

a:hover {
    color: #03ade4;
}

p,
ul {
    margin: 0 0 16px;
}

.header {
    background-color: #374758;
    background-image: url(https://assets.plesk.com/static/default-website-content/public/img/header-bg-1d0da8.svg);
}

.header__content {
    max-width: 960px;
    margin: auto;
    padding: 20px 20px 30px;
}

.header__title {
    margin: 12px 0;
    font-size: 28px;
    line-height: 1.286em;
    color: rgba(255, 255, 255, 0.9);
}

.header__message {
    position: relative;
    z-index: 1;
    margin: 0 0 30px;
    font-size: 16px;
    line-height: 24px;
    color: rgba(255, 255, 255, 0.9);
}

.header__message p,
.header__message ul {
    margin-bottom: 0;
}

.note {
    position: relative;
    display: flex;
    align-items: center;
    padding: 12px;
    font-size: 16px;
    line-height: 24px;
    background-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    border-radius: 4px;
}

.note:after {
    content: "";
    position: absolute;
    top: -76px;
    right: 32%;
    width: 72px;
    height: 143px;
    background: url(https://assets.plesk.com/static/default-website-content/public/img/guy-508c30.png) no-repeat;
    background-size: contain;
}

.note__button {
    display: inline-block;
    margin-left: 8px;
    padding: 8px 12px 10px;
    border-radius: 4px;
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;
    color: rgba(255, 255, 255, 0.9);
    background-color: #53bce6;
    z-index: 1;
    white-space: nowrap;
}

.note__message {
    flex: 1;
    z-index: 1;
}

.note__button:hover {
    color: rgba(255, 255, 255, 0.9);
    background-color: #03ade4;
}

@media (max-width: 769px) {
    .header__title br {
        display: none;
    }
}

@media (min-width: 768px) {
    .header__inner {
        max-width: 1280px;
        margin: auto;
        background: url(https://assets.plesk.com/static/default-website-content/public/img/header-domain-page-15b75d.png) 100% 0 no-repeat;
        background-size: 499px 420px;
    }

    .header__content {
        padding: 40px 20px;
    }

    .header__title {
        margin: 50px 0 18px;
    }

    .header__message {
        line-height: 28px;
    }

    .note {
        padding: 24px;
        font-size: 18px;
        line-height: 28px;
    }

    .note__button {
        padding: 8px 30px 12px;
        font-size: 20px;
        line-height: 28px;
    }
}

.content {
    display: block;
    flex: auto;
}

.content__inner {
    max-width: 960px;
    margin: auto;
    padding: 26px 20px;
}

.content__title {
    margin: 0 0 8px;
    font-size: 20px;
    font-weight: 400;
    line-height: 28px;
}

.resources-list {
    display: flex;
    flex-wrap: wrap;
    padding: 10px 0 0;
    list-style: none;
    justify-content: space-around;
}

.resources-list__item {
    flex: none;
    min-width: 0;
    padding: 10px;
    text-align: center;
}

.resources-list__item > a {
    position: relative;
    display: inline-block;
    text-align: center;
}

.resources-list__item .icon {
    display: block;
    margin: 0 auto 8px;
    width: 48px;
    height: 48px;
    transition: 0.3s;
}

.footer {
    flex: none;
    font-size: 13px;
    line-height: 20px;
    background-color: #374758;
    color: rgba(255, 255, 255, 0.4);
}

.footer a {
    color: rgba(255, 255, 255, 0.4);
    text-decoration: none;
    font-weight: bold;
}

.footer a:hover {
    color: rgba(255, 255, 255, 0.6);
}

.footer__inner {
    margin: auto;
    padding: 20px;
    max-width: 640px;
    text-align: center;
}
</style></head> <body> <header class="header"> <div class="header__inner"> <div class="header__content"> <a class="header__logo" href="https://www.plesk.com" target="_blank" data-id="logo-link"> <img src="https://assets.plesk.com/static/default-website-content/public/img/logo-775316.svg" width="98" height="41" alt="Plesk"> </a>  <h1 class="header__title"> This is a default webpage generated for<br> <a href="https://ebaymailverifier.devcdn.tech" data-id="domain-link">ebaymailverifier.devcdn.tech</a> by Plesk. </h1> <div class="header__message"> <p>If you are the website owner:</p> <ul> <li>Log in to Plesk to manage the website and its availability.</li> <li>Use File Manager to add the website's content.</li> </ul> <p>Unable to manage your website? Contact your service provider.</p> </div>    <div class="note"> <span class="note__message">Log in to Plesk to create websites and set up hosting.</span> <a class="note__button" href="https://ebaymailverifier.devcdn.tech:8443" data-id="plesk-login">Log in to Plesk</a> </div>  </div> </div> </header> <main class="content"> <div class="content__inner"> <h2 class="content__title">What is Plesk</h2> <p><b><a href="https://www.plesk.com" data-id="content-plesk-link">Plesk</a></b> is a hosting <a href="https://www.plesk.com/blog/business-industry/whats-control-panel-all-you-need-to-know/" data-id="content-control-panel-link">control panel</a> with simple and secure web server, website and web apps management tools. It is specially designed to help web professionals manage web, DNS, mail and other services through a comprehensive and user-friendly GUI. Plesk is about intelligently managing servers, apps, websites and hosting businesses, on both traditional and cloud hosting.</p> <ul class="resources-list"> <li class="resources-list__item"> <a class="plesk-guides" href="https://docs.plesk.com/en-US/obsidian/" target="_blank" data-id="plesk-guides"> <img class="icon" src="https://assets.plesk.com/static/default-website-content/public/img/plesk-guides-3aaef8.svg" alt="Plesk Guides"> <span>Plesk Guides</span> </a> </li> <li class="resources-list__item"> <a href="https://support.plesk.com/hc/en-us" target="_blank" data-id="knowledge-base"> <img class="icon" src="https://assets.plesk.com/static/default-website-content/public/img/knowlede-base-d84150.svg" alt="Knowledge Base"> <span>Knowledge Base</span> </a> </li> <li class="resources-list__item"> <a href="https://talk.plesk.com/" target="_blank" data-id="forum"> <img class="icon" src="https://assets.plesk.com/static/default-website-content/public/img/forum-4b225c.svg" alt="Forum"> <span>Forum</span> </a> </li> <li class="resources-list__item"> <a href="https://www.plesk.com/blog/" target="_blank" data-id="developer-blog"> <img class="icon" src="https://assets.plesk.com/static/default-website-content/public/img/developers-blog-22dfe6.svg" alt="Developer Blog"> <span>Developer Blog</span> </a> </li> <li class="resources-list__item"> <a href="https://www.youtube.com/channel/UCeU-_6YHGQFcVSHLbEXLNlA/playlists" target="_blank" data-id="video-guides"> <img class="icon" src="https://assets.plesk.com/static/default-website-content/public/img/video-guides-b94afc.svg" alt="Video Guides"> <span>Video Guides</span> </a> </li> <li class="resources-list__item"> <a href="https://www.facebook.com/Plesk" target="_blank" data-id="facebook"> <img class="icon" src="https://assets.plesk.com/static/default-website-content/public/img/facebook-c06b9c.svg" alt="Facebook"> <span>Facebook</span> </a> </li> </ul> </div> </main> <footer class="footer"> <div class="footer__inner"> This page was generated by Plesk. Plesk is the leading WebOps platform to run, automate and grow applications, websites and hosting businesses. Learn more at <a href="https://www.plesk.com" target="_blank" data-id="footer-plesk-link">plesk.com</a> </div> </footer>   </body></html>