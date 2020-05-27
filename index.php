<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Domain Default page</title>
        <meta name="copyright" content="Copyright 1999-2020. Plesk International GmbH. All rights reserved." />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="shortcut icon" href="https://assets.plesk.com/static/default-website-content/public/favicon-1db747.ico" />
        <link rel="preload" href="https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-regular-b4d2c4.woff2" as="font" type="font/woff2" crossorigin="" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <style>
            @font-face{font-family:Lato;font-display:swap;font-style:normal;font-weight:400;src:local('Lato Regular'),local('Lato-Regular'),url(https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-regular-b4d2c4.woff2) format("woff2"),url(https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-regular-b8ee54.woff) format("woff")}@font-face{font-family:Lato;font-display:swap;font-style:normal;font-weight:700;src:local('Lato Bold'),local('Lato-Bold'),url(https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-700-1efbd3.woff2) format("woff2"),url(https://assets.plesk.com/static/default-website-content/public/fonts/lato-v16-latin-700-874b8e.woff) format("woff")}html{line-height:1.15;-webkit-text-size-adjust:100%;box-sizing:border-box;height:100%;font-size:10px;-webkit-tap-highlight-color:transparent;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased}body{margin:0;display:flex;flex-direction:column;justify-content:space-between;min-width:320px;min-height:100vh;font-size:14px;line-height:1.714em;font-family:Lato,sans-serif;color:#222;word-wrap:break-word;background-color:#f3f3f3;height:100%}a{color:#53bce6;text-decoration:none;cursor:pointer;background-color:transparent}a:active,a:hover{outline:0}a:hover{color:#03ade4}p,ul{margin:0 0 16px}.header{background-color:#374758;background-image:url(https://assets.plesk.com/static/default-website-content/public/img/header-bg-1d0da8.svg)}.header__content{max-width:960px;margin:auto;}.header__title{margin:12px 0;font-size:28px;line-height:1.286em;color:rgba(255,255,255,.9)}.header__message{position:relative;z-index:1;margin:0 0 30px;font-size:16px;line-height:24px;color:rgba(255,255,255,.9)}.header__message p,.header__message ul{margin-bottom:0}.note{position:relative;display:flex;align-items:center;padding:12px;font-size:16px;line-height:24px;background-color:rgba(255,255,255,.9);box-shadow:0 4px 8px rgba(0,0,0,.4);border-radius:4px}.note:after{content:"";position:absolute;top:-76px;right:32%;width:72px;height:143px;background:url(https://assets.plesk.com/static/default-website-content/public/img/guy-508c30.png) no-repeat;background-size:contain}.note__button{display:inline-block;margin-left:8px;padding:8px 12px 10px;border-radius:4px;font-weight:700;font-size:16px;line-height:20px;color:rgba(255,255,255,.9);background-color:#53bce6;z-index:1;white-space:nowrap}.note__message{flex:1;z-index:1}.note__button:hover{color:rgba(255,255,255,.9);background-color:#03ade4}@media (max-width:769px){.header__title br{display:none}}@media (min-width:768px){.header__inner{max-width:1280px;margin:auto;background:url(https://assets.plesk.com/static/default-website-content/public/img/header-domain-page-15b75d.png) 100% 0 no-repeat;background-size:499px 420px}.header__content{}.header__title{margin:50px 0 18px}.header__message{line-height:28px}.note{padding:24px;font-size:18px;line-height:28px}.note__button{padding:8px 30px 12px;font-size:20px;line-height:28px}}.content{display:block;flex:auto}.content__inner{max-width:960px;margin:auto;padding:26px 20px}.content__title{margin:0 0 8px;font-size:20px;font-weight:400;line-height:28px}.resources-list{display:flex;flex-wrap:wrap;padding:10px 0 0;list-style:none;justify-content:space-around}.resources-list__item{flex:none;min-width:0;padding:10px;text-align:center}.resources-list__item>a{position:relative;display:inline-block;text-align:center}.resources-list__item .icon{display:block;margin:0 auto 8px;width:48px;height:48px;transition:.3s}.footer{flex:none;font-size:13px;line-height:20px;background-color:#374758;color:rgba(255,255,255,.4)}.footer a{color:rgba(255,255,255,.4);text-decoration:none;font-weight:700}.footer a:hover{color:rgba(255,255,255,.6)}.footer__inner{margin:auto;padding:20px;max-width:640px;text-align:center}


                .grid-container {
  display: grid;
  grid-template-columns: 50% 50%;
  grid-template-rows: 1fr;
  gap: 1px 1px;
  grid-template-areas: "left right";
}

.left { grid-area: left; }

.right { grid-area: right; }

        
        </style>
    </head>
    <body>
        <header class="header">
            <div class="header__inner">
                <div class="header__content">
                    <a class="header__logo" href="https://www.plesk.com" target="_blank" data-id="logo-link">
                        <img src="https://i.dlpng.com/static/png/1235523-ebay-transparent-image-ebay-png-600_200_preview.png" style="width: 220px; height: auto;" />
                    </a>
                    
                </div>
            </div>
        </header>
        <main class="content">
            <div class="content__inner">
            <div class="grid-container">
                <div class="left">
                    <h2 class="content__title">What is Plesk <small>counter</small> <small id="counter">0</small></h2>
                    <p>
                        <textarea id="w3review" name="w3review" rows="30" style="width:250px;"></textarea>
                        <br>
                        <button>Submit</button>
                    </p>

                </div>
                <div class="right">
                    <h2 class="content__title">Rewsponse</h2>
                    <p id="response">
                        nimic
                    </p>
                </div>
            </div>

                
                <p>
                
                </p>
                
            </div>
        </main>

        <footer class="footer">
            <div class="footer__inner">
                This page was generated by Plesk. Plesk is the leading WebOps platform to run, automate and grow applications, websites and hosting businesses. Learn more at
                <a href="https://www.plesk.com" target="_blank" data-id="footer-plesk-link">plesk.com</a>
            </div>
        </footer>
<script>

const check = async (email) => {
    try {
        const response = await axios.post('/get.php', {
            email: email
        }).then(function (response) {
            let rsp = response.data;
            $('#counter').html(rsp.counter);
            $('#response').append('<div>' + rsp.response + ' --- ' + rsp.counter + '</div>' + "\n");
            console.log(rsp)
        });
    } catch (error) {
        console.log(error)
  }
}
$('button').click(function(){
    $('#response').empty();
    var arrayOfLines = $('#w3review').val().split('\n');
        $.each(arrayOfLines, function(index, item) {
            var email = item.trim();
            check(email);
        });
});
</script>
    </body>
</html>