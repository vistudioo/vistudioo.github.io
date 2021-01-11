<!-- ПЕРЕД НАЧАЛОМ РАБОТЫ, вам необходимо зайти в файл конфига и прописать ТОКЕН и UID вашего потока, а так же - цены -->
<?php
require_once 'module/config.php';
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K8CG5QB');</script>
<!-- End Google Tag Manager -->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width">

    <title>Magic TRACKS - гибкая и яркая гоночная трасса</title>
    <meta name="description"
        content="Гоночная трасса Magic TRACKS - это трасса любой формы, хит 2017 года, 56 деталей и машинка в комплекте!" />
    <meta name="keywords" content="игрушка трасса, гибкая трасса, игрушка для ребенка" />

    <link rel="shortcut icon" href="favicon.html" tppabs="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.html" tppabs="favicon.png" type="image/x-icon">



    <script type="text/javascript">
        var day = new Date,
            month = new Array(12);
        month[0] = "января", month[1] = "февраля", month[2] = "марта", month[3] = "апреля", month[4] = "мая", month[5] =
            "июня", month[6] = "июля", month[7] = "августа", month[8] = "сентября", month[9] = "октября", month[10] =
            "ноября", month[11] = "декабря";
        var month2 = new Array(12);
        month2[0] = "Январь", month2[1] = "Февраль", month2[2] = "Март", month2[3] = "Апрель", month2[4] = "Май",
            month2[5] = "Июнь", month2[6] = "Июль", month2[7] = "Август", month2[8] = "Сентябрь", month2[9] = "Октябрь",
            month2[10] = "Ноябрь", month2[11] = "Декабрь";
    </script>

    <style>
        #phone+div {
            margin-top: 50px;
        }

        #phone {
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            background-color: #333333;
            color: white;
            font-size: 22px;
            text-align: center;
            z-index: 1000;
            padding: 13px;
        }

        #phone p {
            font-family: Arial;
        }

        #phone #number {
            font-weight: 700;
        }

        @media screen and (max-width: 468px) {
            #phone+div {
                margin-top: 74px;
            }
        }
    </style>

    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8CG5QB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <style type="text/css">
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            font-family: 'm700', Verdana, sans-serif;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-weight: 400;
            background: #fff;
            color: #222;
            font-size: 17px;
            line-height: 24px;
            position: relative;
        }

        ol,
        ul {
            list-style: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        img {
            max-width: 100%;
        }

        .upp {
            text-transform: uppercase;
        }

        .center {
            text-align: center;
        }

        .white {
            color: #fff;
        }

        h1,
        h2,
        h3 {
            font-family: 'm900';
            letter-spacing: 1px;
        }

        input::-webkit-input-placeholder {
            color: #666;
        }

        input::-moz-placeholder {
            color: #666;
        }

        .section {
            width: 960px;
            padding: 40px 10px;
            margin: 0 auto;
            position: relative;
            box-sizing: border-box;
        }

        h2.title {
            text-align: center;
            font-size: 55px;
            line-height: 65px;
            padding-bottom: 40px;
            font-family: 'm700';
        }

        .b1 {
            background: url(img/pattern1.png)
                /*tpa=http://track.officiall.biz.ua/l/img/pattern1.png*/
                center top repeat;
            height: 648px;
        }

        .b1 h1 {
            font-size: 36px;
            line-height: 46px;
            color: #fff;
            text-align: center;
        }

        .b1 h2 {
            color: #132c7b;
            font-size: 60px;
            line-height: 80px;
            text-align: right;
            margin: 0 35px 20px 0;
        }

        .b1 .left {
            float: left;
            width: 599px;
            height: 463px;
            background: url(img/b1-min.png)
                /*tpa=http://track.officiall.biz.ua/l/img/b1-min.png*/
                center top no-repeat;
            position: relative;
        }

        .b1 .sale {
            position: absolute;
            top: -40px;
            left: 270px;
        }

        .sale {
            width: 130px;
            height: 130px;
            box-sizing: border-box;
            text-transform: uppercase;
            text-align: center;
            padding-top: 27px;
            border-radius: 65px;
            color: #fff;
            background: #ff9100;
            font-size: 22px;
            line-height: 35px;
        }

        .sale span {
            font-size: 40px;
        }

        .b1 .right {
            width: 330px;
            float: right;
        }

        .b1 ul {}

        .b1 ul li {
            background: url(img/li.png)
                /*tpa=http://track.officiall.biz.ua/l/img/li.png*/
                left 2px no-repeat;
            padding: 0 0 10px 28px;
            color: #fff;
        }

        .price {
            text-align: center;
        }

        .b1 .price {
            margin: 32px 0;
        }

        .price div {
            display: inline-block;
            color: #fff;
            font-size: 34px;
            padding: 0 10px;
        }

        .price .old {
            text-decoration: line-through;
        }

        .price .new {
            color: #beff00;
            font-size: 42px;
        }

        .button-m {
            display: block;
            width: 300px;
            height: 64px;
            margin: 0 auto;
            text-shadow: 0 1px 1px #b76e05;
            text-transform: uppercase;
            font-family: 'm900';
            font-size: 19px;
            text-align: center;
            line-height: 66px;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 35px;
            border-bottom: 4px solid #ea6004;
            background: linear-gradient(to top, #ff9100, #f8b900);
            letter-spacing: 1px;
        }

        .button-m:hover {
            border-bottom: 4px solid #ff6f10;
            background: linear-gradient(to top, #ff970d, #ffc20f);
        }

        .button-m:active {
            border-bottom: 4px solid #e88400;
            background: linear-gradient(to top, #e88400, #e8ad00)
        }

        .b2 {
            background: url(img/pattern2.png)
                /*tpa=http://track.officiall.biz.ua/l/img/pattern2.png*/
                center top repeat;
        }

        .b2 h2 {
            color: #ffee2c;
        }

        .b2 ul {
            text-align: center;
            margin-top: 10px;
        }

        .b2 ul li {
            width: 33%;
            display: inline-block;
            box-sizing: border-box;
            padding: 0 20px;
        }

        .b2 ul li p {
            padding: 20px 0;
            font-size: 18px;
        }

        .b3 h2 {
            color: #445690;
        }

        .b3 h2 span {
            font-family: 'm900';
            font-size: 60px;
            color: #f1126b;
        }

        .fotorama {
            float: left;
        }

        .fotorama__stage {
            margin-bottom: 5px;
        }

        .b3 p {
            font-family: 'm500';
            margin: 0 0 30px 370px;
            font-size: 24px;
            line-height: 40px;
        }

        .b4 {
            background: url(img/pattern3.png)
                /*tpa=http://track.officiall.biz.ua/l/img/pattern3.png*/
                center top repeat;
        }

        .b4 h2 {
            padding: 0;
        }

        .b4 h2 span {
            font-family: 'm900';
            font-size: 60px;
            color: #ffee2c;
        }

        .b5 ul {
            padding-top: 30px;
            background: url(img/img1.jpg)
                /*tpa=http://track.officiall.biz.ua/l/img/img1.jpg*/
                right bottom no-repeat;
        }

        .b5 ul li {
            background: url(img/li1.png)
                /*tpa=http://track.officiall.biz.ua/l/img/li1.png*/
                left 4px no-repeat;
            padding: 5px 0 30px 42px;
            font-size: 24px;
            line-height: 32px;
            width: 500px;
        }

        .b6 {
            background: url(img/pattern2.png)
                /*tpa=http://track.officiall.biz.ua/l/img/pattern2.png*/
                center top repeat;
        }

        .b6 h2 span {
            font-family: 'm900';
            font-size: 60px;
            color: #ffee2c;
        }

        .video-container {
            margin: 0 auto 20px;
            position: relative;
            width: 640px;
            height: 360px;
            overflow: hidden;
            background: #000;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .b6 p {
            color: #fff;
            text-align: center;
            font-family: 'm500';
            margin: 0 auto;
            width: 640px;
            font-size: 22px;
            line-height: 40px;
        }

        .b6 .price {
            float: right;
            margin: 32px 0;
        }

        form {
            clear: both;
        }

        form input {
            outline: none;
            position: relative;
            width: 300px;
            padding: 0 20px;
            box-sizing: border-box;
            height: 65px;
            margin: 0 auto 15px;
            font-size: 18px;
            text-align: center;
            line-height: 65px;
            border: none;
            text-decoration: none;
            border-radius: 35px;
            box-shadow: inset 0 3px 0 #5285e1;
        }

        .b6 form input,
        form button {
            display: inline-block;
            margin: 0 5px;
        }

        form {
            margin-bottom: 30px;
        }

        form button {
            outline: none;
            width: 300px;
            height: 70px;
            margin: 0 auto;
            text-shadow: 0 1px 1px #b76e05;
            text-transform: uppercase;
            font-family: 'm900';
            font-size: 19px;
            text-align: center;
            line-height: 68px;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 35px;
            border-bottom: 4px solid #ea6004;
            background: linear-gradient(to top, #ff9100, #f8b900);
            letter-spacing: 1px;
        }

        form button:hover {
            border-bottom: 4px solid #ff6f10;
            background: linear-gradient(to top, #ff970d, #ffc20f);
        }

        form button:active {
            border-bottom: 4px solid #e88400;
            background: linear-gradient(to top, #e88400, #e8ad00)
        }

        .b7 h2 {
            color: #0b3581;
        }

        .b7 ul {
            text-align: center;
        }

        .b7 ul li {
            width: 33%;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            padding: 0 20px;
        }

        .b7 ul li h3 {
            font-family: 'm500';
            padding: 10px 0;
            font-size: 22px;
        }

        .b7 ul li h3 span {
            font-family: 'm700';
            font-size: 16px;
        }

        .b7 ul li p {
            font-family: 'm500';
        }

        .b8 ul {
            margin-top: 30px;
            text-align: center;
        }

        .b8 ul li {
            width: 235px;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            padding: 0 15px 25px;
        }

        .b8 ul li p {
            font-family: 'm500';
            font-size: 14px;
            line-height: 22px;
        }

        .b9 h2 {
            color: #0b3581;
        }

        .b9 ul {
            text-align: center;
        }

        .b9 ul li {
            width: 235px;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            padding: 0 25px 25px;
        }

        .b9 ul li p {
            padding-top: 25px;
        }

        .b10 {
            background: url(img/b10.jpg)
                /*tpa=http://track.officiall.biz.ua/l/img/b10.jpg*/
                center top no-repeat;
            height: 669px;
        }

        .b10 h1 {
            margin-top: -10px;
            font-size: 50px;
            line-height: 55px;
            color: #fff;
            text-align: center;
        }

        .b10 h2 {
            color: #132c7b;
            font-size: 60px;
            line-height: 60px;
            text-align: right;
            margin: 0 35px 20px 0;
        }

        .b10 .sale {
            position: absolute;
            top: 190px;
            left: 340px;
        }

        .b11 {
            background: url(img/pattern2.png)
                /*tpa=http://track.officiall.biz.ua/l/img/pattern2.png*/
                center top repeat;
            overflow: hidden;
        }

        .b11 h2.title {
            font-size: 40px;
        }

        .end {
            width: 300px;
            text-align: center;
        }

        .b11 .centers {
            width: 620px;
            margin: 0 auto;
        }

        .b11 .left {
            width: 300px;
            margin-right: 20px;
            float: left;
        }

        .b11 form {
            clear: none;
            width: 300px;
            float: left;
        }

        .b11 form input,
        form button {
            display: inline-block;
            margin: 0 0 10px;
        }

        .b12 h2 {
            color: #0b3581;
        }

        .b12 h3 {
            color: white;
            margin-top: 15px;
            font-size: 22px;
        }

        .b12 ul {
            text-align: center;
        }

        .b12 ul li {
            width: 305px;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            padding: 0 15px 25px;
        }

        .b12 ul li p {
            color: white;
            padding-top: 15px;
        }

        @media only screen and (max-width:959px) {
            .section {
                width: 640px;
                padding: 30px 10px
            }

            h2.title,
            .b11 h2.title {
                font-size: 34px;
                line-height: 44px;
                padding-bottom: 20px;
            }

            h2.title span {
                font-size: 38px;
            }

            .price div {
                font-size: 34px;
            }

            .price .new {
                font-size: 40px;
            }

            .b1 {
                height: 680px;
            }

            .b1 h1 {
                text-align: right;
            }

            .b1 h2 {
                font-size: 47px;
                line-height: 57px;
                margin: 0 0 20px 0;
            }

            .b1 .left {
                margin-top: -40px;
                width: 308px;
                height: 412px;
                background: url(img/b1-2-min.png)
                    /*tpa=http://track.officiall.biz.ua/l/img/b1-2-min.png*/
                    center top no-repeat;
            }

            .b1 .sale {
                top: -90px;
                left: 70px;
            }

            .b1 .right {
                margin-left: -35px;
            }

            .fotorama {
                float: none;
                margin: 0 auto 20px;
                width: 300px;
            }

            .b3 p {
                margin: 0 0 30px 0;
                font-size: 20px;
                line-height: 30px;
            }

            .b4 h2 {
                padding: 0;
            }

            .b5 ul {
                padding: 0px 0 460px;
                background: url(img/img1.jpg)
                    /*tpa=http://track.officiall.biz.ua/l/img/img1.jpg*/
                    center bottom no-repeat;
            }

            .b5 ul li {
                background: url(img/li1.png)
                    /*tpa=http://track.officiall.biz.ua/l/img/li1.png*/
                    left 4px no-repeat;
                padding: 5px 0 20px 42px;
                font-size: 20px;
                line-height: 30px;
                width: 500px;
                margin: 0 auto;
            }

            .video-container {
                width: 620px;
                height: 320px;
            }

            .b6 p {
                width: 620px;
                font-size: 22px;
                line-height: 30px;
            }

            .b6 .price {
                float: none;
                margin: 20px auto;
            }

            .b6 form input,
            form button {
                display: block;
                margin: 0 auto 15px;
            }

            .b7 ul li {
                width: 100%;
                padding: 0 20px 25px;
            }

            .b10 {
                background: url(img/b10-2.jpg)
                    /*tpa=http://track.officiall.biz.ua/l/img/b10-2.jpg*/
                    center top no-repeat;
                height: 661px;
            }

            .b10 h1 {
                text-align: center;
                font-size: 36px;
                margin: 0;
            }

            .b10 h2 {
                text-align: center;
                font-size: 47px;
                line-height: 57px;
                margin: 0 0 20px 0;
            }
        }

        @media only screen and (max-width:639px) {
            .section {
                width: 320px;
                padding: 20px 10px;
            }

            .price div {
                font-size: 30px;
            }

            .price .new {
                font-size: 36px;
            }

            h2.title,
            .b11 h2.title {
                font-size: 24px;
                line-height: 32px;
                padding-bottom: 20px;
            }

            h2.title span {
                font-size: 26px;
            }

            .b1 {
                height: 1000px;
            }

            .b1 h1 {
                text-align: center;
                font-size: 22px;
                line-height: 28px;
            }

            .b1 h2 {
                text-align: center;
                font-size: 37px;
                line-height: 47px;
                margin: 0 0 20px 0;
                padding: 0;
            }

            .b1 .left {
                float: none;
                margin: 0px auto;
                width: 238px;
                height: 317px;
                background: url(img/b1-3-min.png)
                    /*tpa=http://track.officiall.biz.ua/l/img/b1-3-min.png*/
                    center top no-repeat;
            }

            .b1 .sale {
                top: 175px;
                left: -35px;
            }

            .b1 .right {
                margin-left: 0;
                width: 300px;
            }

            .b2 ul li {
                width: 300px;
                margin-bottom: 15px;
            }

            .b3 p {
                margin: 0 0 20px 0;
                font-size: 18px;
                line-height: 24px;
            }

            .b4 h2 {
                padding: 0;
            }

            .b5 ul {
                padding: 0px 0 340px;
                background-size: 300px;
            }

            .b5 ul li {
                font-size: 18px;
                line-height: 26px;
                width: 300px;
            }

            .video-container {
                width: 300px;
                height: 160px;
            }

            .b6 p {
                width: 300px;
                font-size: 16px;
                line-height: 24px;
            }

            .b8 ul li,
            .b9 ul li {
                width: 300px;
                padding: 0 0 20px;
            }

            .b8 ul li img,
            .b9 ul li img {
                float: left;
                width: 80px;
            }

            .b8 ul li p,
            .b9 ul li p {
                text-align: left;
                padding-top: 18px;
                margin-left: 95px;
            }

            .b10 {
                background: url(img/b10-3.jpg)
                    /*tpa=http://track.officiall.biz.ua/l/img/b10-3.jpg*/
                    center top no-repeat;
                height: 669px;
            }

            .b10 h1 {
                font-size: 22px;
                line-height: 28px;
            }

            .b10 h2 {
                text-align: center;
                font-size: 37px;
                line-height: 47px;
                margin: 0 0 20px 0;
            }

            .b10 .sale {
                top: 355px;
                left: 100px;
            }

            .b11 .centers {
                width: 300px;
                margin: 0 auto;
            }

            .b11 .price {
                margin-bottom: 15px;
            }
        }
    </style>
    <div id="phone">
        <p>Есть вопросы? <a href="#form" class="button-m"
                style="height:22px; width:200px; display:inline-block;line-height: 17px;font-size:14px;padding-top:10px;">Мы
                Вам перезвоним!</a></p>
    </div>

    <div class="b1">
        <div class="section">
            <h1 class="m700 upp">Гнущийся и светящийся гоночный трек</h1>
            <h2>Magic TRACKS</h2>
            <div class="left">
                <div class="sale">
                    Скидка <span>53%</span>
                </div>
            </div>
            <div class="right">
                <ul>
                    <li>Качественные элементы трека</li>
                    <li><span style="color:red;">220</span> разноцветных деталей трассы</li>
                    <li>Длина трека <span style="color:red;">3 метра</span></li>
                    <li>Длительная работа от батарейки</li>
                    <li>Все детали трека отлично гнутся</li>
                    <li>Детали светятся в темноте</li>
                    <li>Гоночные машинки оснащены яркими светодиодами</li>
                </ul>
                <div class="price">
                    <div class="old"><?=$oldprice?> грн.</div>
                    <div class="new"><?=$price?> грн.</div>
                </div>
                <a href="#form" class="button-m">заказать со скидкой</a>
            </div>
        </div>
    </div>

    <div class="b2">
        <div class="section">
            <h2 class="title">Вы хотите чтобы ваш ребёнок...</h2>
            <ul class="white">
                <li>
                    <img src="img/b2_1.png">
                    <p>Развивал воображение и конструкторские навыки?</p>
                </li>
                <li>
                    <img src="img/b2_2.png">
                    <p>Нашел себе увлекательное занятие на несколько часов?</p>
                </li>
                <li>
                    <img src="img/b2_3.png">
                    <p>Развивал моторику своих рук и весело проводил время?</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="b3">
        <div class="section">
            <h2 class="title">Что такое <span>Magic TRACKS?</span></h2>
            <div class="fotorama" data-nav="thumbs">
                <img src="img/s1.jpg">
                <img src="img/s2.jpg">
                <img src="img/s3.jpg">
                <img src="img/s4.jpg">
            </div>
            <p>Magic TRACKS— это большая круговая трасса, по которой ездят маленькие машинки со светящимися фарами.
                Машинки стремительно мчатся вперед, огибая множество различных преград и резких поворотов.</p>
            <p>Ваш малыш сможет самостоятельно собирать треки, по которым будут ездить машинки, а все детали из набора
                состыкуются с другими треками серии Magic TRACKS.</p>
        </div>
    </div>

    <div class="b4">
        <div class="section">
            <h2 class="title white">Светящаяся трасса<br><span>Magic TRACKS</span></h2>
        </div>
    </div>
    <div class="b5">
        <div class="section">
            <ul class="m500">
                <li>Трасса искривляется в любом направлении</li>
                <li>Соберите свою собственную трассу за считанные секунды</li>
                <li>Детали светятся в темноте</li>
                <li>Гоночные машинки оснащены яркими светодиодами</li>
                <li>Легко сворачивается для хранения</li>
            </ul>
        </div>
    </div>
    <div class="b12">
        <div class="section" style="padding-top: 0;">
            <ul>
                <li style="padding-bottom: 0;">
                    <img src="img/magic1.jpg">
                </li>
                <li style="padding-bottom: 0;">
                    <img src="img/magic2.jpg">
                </li>
                <li style="padding-bottom: 0;">
                    <img src="img/magic3.jpg">
                </li>
            </ul>
        </div>
    </div>
    <div class="b6"
        style="background: url(img/pattern3.png) center top repeat;">
        <div class="section">
            <h2 class="title white">Видеообзор набора<br><span>Magic TRACKS</span></h2>
            <div class="shadow video-container">
                <div class="youtube" id="AIO_7nRwwfY"></div>
            </div>
            <p>Набор Magic TRACKS сделан из полностью безопасных материалов. Набор рассчитан на детей от 3-х лет и
                старше. Все детали набора сделаны из высококлассного прочного пластика, который увеличивает их срок
                службы.</p>
        </div>
    </div>
    <div class="b11" id="form">
        <div class="section">
            <h2 class="title upp white" style="line-height: normal; padding-bottom: 0;">
                только с <script type="text/javascript">
                    var newDt = new Date();
                    newDt.setDate(newDt.getDate() - 2);
                    var newDt2 = new Date();
                    newDt2.setDate(newDt2.getDate() + 0);
                    document.writeln(newDt.getDate() + " по ");
                    document.write(newDt2.getDate() + " " + month[day.getMonth()]);
                </script> скидка 53%
            </h2>
            <h2 class="title upp white" style="line-height: normal; margin-top: 10px;">
                <span style="color: #ffee2c;">осталось всего 5 штук по акции</span>
            </h2>
            <div class="centers">
                <div class="left">
                    <div class="end">
                        <p class="white" style="margin-bottom: 5px;">До конца акции осталось:</p>
                        <div class="countbox"></div>
                    </div>
                    <div class="price" style="margin-top: 20px;">
                        <div class="old"><?=$oldprice?> грн.</div>
                        <div class="new"><?=$price?> грн.</div>
                    </div>
                </div>
                <form action="order.php" method="post">
                    <input name="name" required type="text" placeholder="Введите имя">
                    <input name="phone" class="phone" required type="text" placeholder="Введите телефон">
                    <button name="submit">Заказать со скидкой</button>
                    <p style="text-align: center; font-size: 13px; color: white; line-height: 18px;">Оплата при
                        получении.<br>Ожидайте звонка нашего менеджера.</p>
                </form>
            </div>
        </div>
    </div>
    <div class="b7">
        <div class="section">
            <h2 class="title">Отзывы наших покупателей</h2>
            <ul>
                <li>
                    <img src="img/o1.jpg">
                    <h3>Кристина<br>Сидельниченко<br> <span>г.Херсон</span></h3>
                    <p>Очень долго искали сыну эту трассу и наконец купили. Очень крутая игрушка для ребятишек. Были
                        крайне удивлены, когда и дочка заинтересовалась этой игрой. По долгу пропадают, можно спокойно
                        заниматься своими делами.</p>
                </li>
                <li>
                    <img src="img/o2.jpg">
                    <h3>Маргарита<br>Степаненко<br> <span>г.Киев</span></h3>
                    <p>Покупала внуку на день рождение в этом интернет-магазине. Понравилось обслуживание и быстра
                        доставка до нашего города. Теперь каждый день наш внучок играет в эту игру! Спасибо большое!</p>
                </li>
                <li>
                    <img src="img/o3.jpg">
                    <h3>Татьяна<br>Маркова<br> <span>г.Днепр</span></h3>
                    <p>Ребенок увидел со мной на сайте видео и упрашивал до победного. Купили – радости было море!
                        Теперь все свободное время проводит за этой игрой. И даже папа иногда присоединяется :)</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="b6"
        style="background: url(img/pattern4.png) center top repeat;">
        <div class="section">
            <h2 class="title" style="color: white;">Что можно собрать из<br><span>Magic TRACKS</span></h2>
            <div class="shadow video-container">
                <div class="youtube" id="JveO0zhUwwI"></div>
            </div>
        </div>
    </div>
    <div class="b4">
        <div class="section">
            <h2 class="title white">Преимущества набора<br><span>Magic TRACKS</span></h2>
        </div>
    </div>
    <div class="b8">
        <div class="section">
            <ul>
                <li>
                    <img src="img/p1.jpg">
                    <p>Яркий презентабельный внешний вид</p>
                </li>
                <li>
                    <img src="img/p2.jpg">
                    <p>Высококласные прочные материалы</p>
                </li>
                <li>
                    <img src="img/p3.jpg">
                    <p>Совершенствует мелкую моторику рук</p>
                </li>
                <li>
                    <img src="img/p4.jpg">
                    <p>Развивает пространственное мышление ребёнка</p>
                </li>
                <li>
                    <img src="img/p5.jpg">
                    <p>Взрослые могут присоединится к игре и весело проводить время</p>
                </li>
                <li>
                    <img src="img/p6.jpg">
                    <p>Несколько наборов могут быть соединены вместе, что подарит больше эмоций</p>
                </li>
                <li>
                    <img src="img/p7.jpg">
                    <p>Яркие и приятные на ощупь детали повысят интерес к изучению всего нового</p>
                </li>
                <li>
                    <img src="img/p8.jpg">
                    <p>В игровом процессе могут участвовать несколько детей, что повысит коммуникабельность ребёнка</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="b4"
        style="background: url(img/pattern2.png) center top repeat;">
        <div class="section">
            <h2 class="title white">Более 1600 счастливых покупателей уже приобрели <span>Magic TRACKS</span> в нашем
                интернет-магазине!</h2>
        </div>
    </div>


    <div class="b9"
        style="background: url(img/pattern4.png) center top repeat;">
        <div class="section">
            <h2 class="title" style="color: white;">Как мы работаем?</h2>
            <ul>
                <li>
                    <img src="img/k1.jpg"
                        style="border-radius: 50%;">
                    <p style="color: white;">Вы оставляете заявку на сайте</p>
                </li>
                <li>
                    <img src="img/k2.jpg"
                        style="border-radius: 50%;">
                    <p style="color: white;">Наш специалист свяжется с вами</p>
                </li>
                <li>
                    <img src="img/k3.jpg"
                        style="border-radius: 50%;">
                    <p style="color: white;">Мы высылаем вам посылку</p>
                </li>
                <li>
                    <img src="img/k4.jpg"
                        style="border-radius: 50%;">
                    <p style="color: white;">Вы проверяете и оплачиваете товар</p>
                </li>
            </ul>
        </div>
    </div>




    <div class="b9">
        <div class="section">
            <h2 class="title">Доставка и оплата</h2>
            <p style="font-size: 16px; font-family: 'm500';">
                Мы отправим Ваш товар Новой Почтой уже сегодня! Заказ дойдёт до Вас быстро и без единой царапинки.
                Доставка займет 1-2 дня(в зависимости от удаленности Вашего региона). В момент отправки, каждому заказу
                присваивается номер. По номеру можно отследить доставку посылки на сайте Новой Почты.
                <!-- Через 2 дня после отправки посылки, мы вышлем номер Вашей посылки смс сообщением на Ваш телефон. -->
                <br><br>Получить и оплатить заказ можно в почтовом отделении, индекс которого был указан при оформлении
                заказа. Уведомление о доставке заказа придет по Вашему адресу. Если уведомление Вам не поступило, то
                через 10 дней сходите на почту самостоятельно. Скорее всего Ваша посылка уже ждёт Вас на почте. Для
                получения заказа на почте возьмите с собой паспорт. Срок хранения заказа в почтовом отделении составляет
                1 месяц с момента поступления. Просим Вас своевременно получить пришедший заказ.
            </p>
        </div>
    </div>


    <div class="b12"
        style="background: url(img/pattern4.png) center top repeat;">
        <div class="section">
            <h2 class="title" style="color: white;">Тройная гарантия</h2>
            <ul>
                <li>
                    <img src="img/g1.png" >
                    <h3>Качественный товар</h3>
                    <p>Мы всегда проверяем товар перед отправкой. Все товары закупаются только у проверенных поставщиков
                        которые так же следят за качеством.</p>
                </li>
                <li>
                    <img src="img/g2.png" >
                    <h3>Возврат денег</h3>
                    <p>Наша компания соблюдает не только законы Украины но и человеческие отношения, при возникновении
                        споров и претензий со стороны покупателя, наша компания решит проблему в самые короткие сроки.
                    </p>
                </li>
                <li>
                    <img src="img/g3.png" >
                    <h3>Оплата при получении</h3>
                    <p>При заказе на нашем сайте мы не требуем предоплату за товар или за доставку. Оплата происходит
                        при получении в пункте самовывоза, на почте, при передаче заказа курьером.</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="b11">
        <div class="section">
            <h2 class="title upp white" style="line-height: normal; padding-bottom: 0;">
                Только с <script type="text/javascript">
                    var newDt = new Date();
                    newDt.setDate(newDt.getDate() - 2);
                    var newDt2 = new Date();
                    newDt2.setDate(newDt2.getDate() + 0);
                    document.writeln(newDt.getDate() + " по ");
                    document.write(newDt2.getDate() + " " + month[day.getMonth()]);
                </script> скидка 53%
            </h2>
            <h2 class="title upp white" style="line-height: normal; margin-top: 10px;">
                <span style="color: #ffee2c;">осталось всего 5 штук по акции</span>
            </h2>
            <div class="centers">
                <div class="left">
                    <div class="end">
                        <p class="white" style="margin-bottom: 5px;">До конца акции осталось:</p>
                        <div class="countbox"></div>
                    </div>
                    <div class="price" style="margin-top: 20px;">
                        <div class="old"><?=$oldprice?> грн.</div>
                        <div class="new"><?=$price?> грн.</div>
                    </div>
                </div>
                <form action="order.php" method="post">
                    <input name="name" required type="text" placeholder="Введите имя">
                    <input name="phone" class="phone" required type="text" placeholder="Введите телефон">
                    <button name="submit">Заказать со скидкой</button>
                    <p style="text-align: center; font-size: 13px; color: white; line-height: 18px;">Оплата при
                        получении.<br>Ожидайте звонка нашего менеджера.</p>
                </form>
            </div>
        </div>
    </div>


    <div class="b12">
        <div class="section center">
            <p style="font-size: 13px; line-height: 18px;">© ООО "Торгснаб" - ОГРН 1147746227408
                Адрес: 127282, г. Киев, ул. Широкая 12а, офис 118 </p>
            <p><a target="_blank" style="color: #444; text-decoration: none; font-size: 13px;" href="politics.html"
                    tppabs="tmpl/politics.html" target="_blank">Политика конфиденциальности</a></p>
        </div>
    </div>



    <script src="js/maskedinput.js"></script>
    <link rel="stylesheet" href="css/main.html"  type="text/css" />
    <link rel="stylesheet" href="css/fonts.css" type="text/css" />
    <link href="css/fotorama.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/timer.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i&amp;subset=cyrillic" rel="stylesheet">

    <script type="text/javascript" src="js/count.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/youtube.js"></script>
    <script src="js/fotorama.js"></script>
    <script src="js/mask_input.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&amp;subset=cyrillic" rel="stylesheet">
</body>
</html>


