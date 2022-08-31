<!DOCTYPE html>
<html lang="en">





<body>
    <!-- Google Tag Manager (noscript)Digitall Marketig college may 6th 2020 -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVNRLTG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <?php
        include('navbar.php');
        ?>
    </header>

    <section class="inner-banner wow fadeIn" data-wow-delay=".2s" style="padding:0">
        <div><img src="images/banner/about.jpg" class="img-responsive"></div>
    </section>
<!-- 
    <section class="home-facts-bg" id="president">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head"> Founder President<span></span></h2> -->
                <style>
                    .data_more_less_inner {
                        overflow: hidden;
                        margin-bottom: 20px;
                        position: relative;
                    }

                    .action_less {
                        display: none;
                    }

                    .less_active .action_less {
                        display: inline-block;
                    }

                    .less_active .action_more {
                        display: none;
                    }

                    .data_more_less:not(.less_active):not(.action_disabled) .data_more_less_inner:after {
                        content: '';
                        display: block;
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
                        background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
                        background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#ffffff',
                                GradientType=0);
                        height: 80px;
                    }

                    .data_more_less.action_disabled .more_less_action {
                        display: none;
                    }

                    h1 {
                        margin-bottom: 0px;
                    }

                    .btn {
                        color: rgb(0, 0, 0);
                        text-decoration: none;
                        border: 1px solid rgb(0, 0, 0);
                        border-radius: 18px;
                        padding: 7px 15px;
                    }

                    .btn:hover {
                        background: rgb(92, 92, 92);
                        color: rgb(255, 255, 255);
                    }




                    /* stat */



                    @import url('https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@100;300;700&display=swap');

                    ul {
                        list-style: none;
                    }

                    body {
                        min-height: 100vh;
                        background-color: #f7f8fc;
                    }

                    .section {
                        min-height: 50vh;
                        margin: 0 30px;
                    }

                    .container1 {
                        padding-left: 25px;
                        padding-right: 25px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        height: fit-content;
                        font-family: 'Anek Bangla', sans-serif;
                        font-weight: bold;
                    }

                    .card {
                        /* background-color: rgb(255, 187, 30); */
                        background-image: linear-gradient(to right bottom, rgb(0, 10, 114), #4c449d);
                        padding: 3rem 3.5rem;
                        border-radius: 15px;
                        display: flex;
                        flex-wrap: wrap;
                        position: relative;
                        max-width: 500px;
                        border: 3px solid black;
                        border-radius: 8px;
                        /* z-index: 0; */
                    }

                    .card::before {
                        content: '';
                        position: absolute;
                        top: -15px;
                        left: 1px;
                        width: 101%;
                        height: 110%;
                        background-image: linear-gradient(to right bottom, #4c449d, rgb(0, 10, 114));
                        z-index: -1;
                        border-radius: 15px;
                        transform: rotate(-8deg);
                        box-shadow: 0 0 45px 5px rgba(0, 0, 0, .2);
                        border: 3px solid black;
                        border-radius: 8px;
                    }

                    .card li {
                        width: 50%;
                        margin: 15px 0;
                    }

                    .card li p {
                        display: flex;
                    }

                    .card li h3 {
                        display: inline-block;
                        font-size: 2rem;
                        color: rgb(255, 255, 255);
                        vertical-align: top;
                        margin-right: 5px;
                        line-height: 1.2;
                    }

                    .card li .fa {
                        font-size: 18px;
                    }

                    .card li span {
                        color: #ffffff;
                        font-weight: bold;
                        font-size: 14px;
                    }


                    .clr-up {
                        color: green;
                    }

                    .clr-down {
                        color: red;
                    }

                    @media screen and (max-width: 500px) {
                        .card::before {
                            top: -10px;
                            left: -2px;
                        }

                        .card li {
                            width: 100%;
                        }

                        .card li:not(:first-of-type) {
                            margin-top: 15px;
                        }
                    }




                    /* HOD Card */

                    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700&display=swap');

                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                    }

                    body {
                        font-family: 'Poppins', sans-serif;
                        align-items: center;
                        justify-content: center;
                        background-color: #ADE5F9;
                        min-height: 100vh;
                    }

                    -->img {
                        max-width: 100%;
                        display: block;
                    }

                    ul {
                        list-style: none;
                    }

                    /* Utilities */
                    .card1::after,
                    .card1 img {
                        border-radius: 2%;
                    }

                    .card1,
                    .stats1 {
                        display: flex;
                    }

                    .card1 {
                        padding: 2.5rem 2rem;
                        border-radius: 10px;
                        background-image: linear-gradient(to right bottom, rgb(0, 174, 255), #ffd786);
                        max-width: 90%;
                        box-shadow: 0 0 30px rgba(0, 0, 0, .15);
                        margin: 1rem;
                        position: relative;
                        transform-style: preserve-3d;
                        overflow: hidden;
                        justify-content: center;
                    }

                    .card1::before,
                    .card1::after {
                        content: '';
                        position: absolute;
                        z-index: -1;
                    }

                    .card1::before {
                        width: 100%;
                        height: 100%;
                        border: 1px solid #FFF;
                        border-radius: 10px;
                        top: -.7rem;
                        left: -.7rem;
                    }

                    .card1::after {
                        height: 15rem;
                        width: 15rem;
                        background-color: #4172f5aa;
                        top: -8rem;
                        right: -8rem;
                        box-shadow: 2rem 6rem 0 -3rem #FFF
                    }

                    .card1 img {
                        float: left;
                        width: 90rem;
                        min-width: 40px;
                        box-shadow: 0 0 0 5px #FFF;
                    }

                    .infos {
                        margin-left: 1.5rem;
                    }

                    .name {
                        margin-bottom: 1rem;
                    }

                    .name h2 {
                        font-size: 1.3rem;
                    }

                    .name h4 {
                        font-size: .8rem;
                        color: #333
                    }

                    .text {
                        font-size: .9rem;
                        margin-bottom: 1rem;
                    }

                    .stats1 {
                        margin-bottom: 1rem;
                    }

                    .stats1 li {
                        min-width: 5rem;
                    }

                    .stats1 li h3 {
                        font-size: .99rem;
                    }

                    .stats1 li h4 {
                        font-size: .75rem;
                    }

                    .links1 button {
                        font-family: 'Poppins', sans-serif;
                        min-width: 120px;
                        padding: .5rem;
                        border: 1px solid #222;
                        border-radius: 5px;
                        font-weight: bold;
                        cursor: pointer;
                        transition: all .25s linear;
                    }

                    .links1 .follow,
                    .links1 .view:hover {
                        background-color: #222;
                        color: #FFF;
                    }

                    .links1 .view,
                    .links1 .follow:hover {
                        background-color: transparent;
                        color: #222;
                    }

                    @media screen and (max-width: 450px) {
                        .card1 {
                            display: block;
                        }

                        .infos {
                            margin-left: 0;
                            margin-top: 1.5rem;
                        }

                        .links1 button {
                            min-width: 100px;
                        }
                    }
                </style>
                <style>
                    /* #myBtn1 {display: none;} */
                    #myBtn2 {
                        display: none;
                    }

                    #som {
                        font-size: 25px;
                    }

                    @media (max-width:767px) {
                        #som {
                            font-size: 14px;
                        }

                        /* #nobq{display: none;} */
                        #more2 {
                            display: none;
                        }

                        #myBtn2 {
                            display: inline;
                        }

                        #h3f {
                            font-size: 16px;
                            font-weight: solid;

                        }
                    }
                </style>
                <style>
                    /* #myBtn1 {display: none;} */
                    #myBtn1 {
                        display: none;
                    }

                    #som {
                        font-size: 25px;
                    }

                    @media (max-width:767px) {
                        #som {
                            font-size: 14px;
                        }

                        /* #nobq{display: none;} */
                        #more1 {
                            display: none;
                        }

                        #myBtn1 {
                            display: inline;
                        }

                        #h3f {
                            font-size: 16px;
                            font-weight: solid;

                        }
                    }
                </style>
                <style>
                    /* #myBtn1 {display: none;} */
                    #myBtn3 {
                        display: none;
                    }

                    #som {
                        font-size: 25px;
                    }

                    @media (max-width:767px) {
                        #som {
                            font-size: 14px;
                        }

                        /* #nobq{display: none;} */
                        #more3 {
                            display: none;
                        }

                        #myBtn3 {
                            display: inline;
                        }

                        #h3f {
                            font-size: 16px;
                            font-weight: solid;

                        }
                    }
                </style>
                <style>
                    /* #myBtn1 {display: none;} */
                    #myBtn4 {
                        display: none;
                    }

                    #som {
                        font-size: 25px;
                    }

                    @media (max-width:767px) {
                        #som {
                            font-size: 14px;
                        }

                        /* #nobq{display: none;} */
                        #more4 {
                            display: none;
                        }

                        #myBtn4 {
                            display: inline;
                        }

                        #h3f {
                            font-size: 16px;
                            font-weight: solid;

                        }
                    }
                </style>
                <!-- <center>
                    <div class="card1">
                        <div>
                            <img src="admin-kvgce/photos/kurunji.jpg">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname " id="som"> LATE DR. KURUNJI VENKATRAMANA GOWDA</div>
                                </strong> -->
                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 stats-col">
                                
                                <div class="stats-title"> M.Tech., Ph.D.</div>
                            </div> -->
                            <!-- </div> -->
                            <!-- <p class="text">
                            <strong> ukskvgce@gmail.com &nbsp;&nbsp;&nbsp;08257-231141 Ext: 5137</strong>
                        </p> -->
                            <!-- <ul class="stats1">
                                <li>
                                    <blockquote>
                                        <p style="text-align: justify;"><span id="dots1"></span><span id="more1"> "It takes a lot of courage to release the familiar and seemingly secure, to embrace the new. But there is no real security in what is no longer meaningful. There is more security in the adventurous and exciting, for in movement there is life, and in change there is power." </span></p>
                                        <button onclick="myreadmoreFunction()" id="myBtn1">READ MORE</button>
                                    </blockquote>

                                </li>
                            </ul>
                            <div class="links1"> -->
                                <!-- <button class="follow">Follow</button> -->
                                <!-- <button class="view">MORE</button> -->
                            <!-- </div>
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section>

    <section class="home-facts-bg" id="secretary">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head"> General Secretary<span></span></h2>
                <style>

                </style>
                <center>
                    <div class="card1">
                        <div class="img">
                            <img src="admin-kvgce/photos/gen_secretary1.jpg" style="width: 400px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" style="font-size: 25px;">DR. K V RENUKA PRASAD</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">


                                </div>
                            </div>

                            <ul class="stats1">
                                <li>
                                    <blockquote>
                                        <p style="text-align: justify;"><span id="dots2"></span><span id="more2"> "Dreams pass into the reality of action. From the actions stems the dream again; and this interdependence produces the highest form of living." </span></p>
                                        <button onclick="myreadmoreFunction1()" id="myBtn2">READ MORE</button>
                                    </blockquote>
                                    </blockquote>
                                </li>
                            </ul>
                            <div class="links1"> -->
                                <!-- <button class="follow">Follow</button> -->
                                <!-- <button class="view">MORE</button> -->
                            <!-- </div>
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section> -->





    <!-- <section class="home-facts-bg" id="ceo">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head"> Chief Executive Officer<span></span></h2>
                <style>

                </style>
                <center>
                    <div class="card1">
                        <div class="img">
                            <img src="admin-kvgce/photos/ujwal-sir1.jpg">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" style="font-size: 25px;">DR. UJWAL U J</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">


                                </div>
                            </div>

                            <ul class="stats1">
                                <li>
                                    <blockquote>
                                        <p style="text-align: justify;"><span id="dots2"></span><span id="more2"> "KVG College of Engineering focuses on addressing the needs of students fromcurricular, co-curricular and extra-curricular point of view. It is the innateprinciple of our institution that every single student must realize her or his goalto be a robust and effective part of the world to solve real world problems and tobe an asset to the society" </span></p>
                                        <button onclick="myreadmoreFunction1()" id="myBtn2">READ MORE</button>
                                    </blockquote>
                                    </blockquote>
                                </li>
                            </ul>
                            <div class="links1"> -->
                                <!-- <button class="follow">Follow</button> -->
                                <!-- <button class="view">MORE</button> -->
                            <!-- </div>
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section>

    <section class="home-facts-bg" id="prin">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head"> Principal<span></span></h2>
                <style>

                </style>
                <center>
                    <div class="card1">
                        <div class="img">
                            <img src="admin-kvgce/photos/suresh.jpg" style="width: 250px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" style="font-size: 25px;">DR. SURESHA V</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">


                                </div>
                            </div>

                            <ul class="stats1">
                                <li>
                                    <blockquote>
                                        <p style="text-align: justify;"><span id="dots2"></span><span id="more2"> " Do not go where the path may lead, go instead where there is no path and leave trail." </span></p>
                                        <button onclick="myreadmoreFunction1()" id="myBtn2">READ MORE</button>
                                    </blockquote>
                                    </blockquote>
                                </li>
                            </ul>
                            <div class="links1"> -->
                                <!-- <button class="follow">Follow</button> -->
                                <!-- <button class="view">MORE</button> -->
                            <!-- </div>
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section> -->




    <!-- <script>
        function myreadmoreFunction() {
            var dots = document.getElementById("dots1");
            var moreText = document.getElementById("more1");
            var btnText = document.getElementById("myBtn1");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myreadmoreFunction1() {
            var dots = document.getElementById("dots2");
            var moreText = document.getElementById("more2");
            var btnText = document.getElementById("myBtn2");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myreadmoreFunction2() {
            var dots = document.getElementById("dots3");
            var moreText = document.getElementById("more3");
            var btnText = document.getElementById("myBtn3");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myreadmoreFunction3() {
            var dots = document.getElementById("dots4");
            var moreText = document.getElementById("more4");
            var btnText = document.getElementById("myBtn4");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script> -->

    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap');
        body {
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            width: 100%;
            /* height: 100vh; */
            padding: 0px;
            margin: 0px;
            /* display: flex; */
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background: hsl(210, 46%, 95%);
            background-color: whitesmoke;
        }
        .fw-5 {font-weight: 500;}
        .fw-7 {font-weight: 700;}
        main {width: 800px;box-sizing: border-box;border-radius: 8px;background: white;box-shadow: 0px 0px 14px #80808047;margin-left: 23%;margin-top: 2%;margin-bottom: 2%;}
        .card7 {display: flex;flex-direction: row;width: 100%;}
        .card7 .card7-left {width: 40%;}
        .card7 .card7-left .card7-img {width: 100%;height: 310px;position: relative;}
        .card7 .card7-left .card7-img::before {content: "";background: url(admin-kvgce/photos/kurunji1.png);width: 100%;height: 100%;background-repeat: no-repeat;background-size: cover;display: block;border-radius: 8px 0px 0px 8px;}
        .card7 .card7-left .card7-img img {width: 100%;}
        .card7 .card7-right {width: 60%;display: flex;flex-direction: column;padding: 40px;box-sizing: border-box;}
        .card7 .card7-right .card7-title {font-size: 20px;color: hsl(214, 17%, 51%);}
        .card7 .card7-right .card7-text {font-size: 14px;color: hsl(212, 23%, 69%);margin-top: 20px;}
        .card7 .card7-right .card7-right-body {display: flex;margin-top: 26px;}
        .card7 .card7-right .card7-right-body .card7-rb-1 {flex-grow: 1;}
        .card7 .card7-right .card7-right-body .card7-rb-1 img {width: 45px;border-radius: 50%;}
        .card7 .card7-right .card7-right-body .card7-rb-2 {flex-grow: 7;display: flex;flex-direction: column;justify-content: center;row-gap: 3px;}
        .card7 .card7-right .card7-right-body .card7-rb-2 .card7-rb-2-title {color: hsl(214, 17%, 51%);}
        .card7 .card7-right .card7-right-body .card7-rb-2 .card7-rb-2-text {color: hsl(212, 23%, 69%);}
        .card7 .card7-right .card7-right-body .card7-rb-3 {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        @media(max-width:767px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px767/1.png);
    }
}
@media(max-width:600px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px600/1.png);
    }
}
@media(max-width:550px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px550/1.png);
    }
}
@media(max-width:500px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px500/1.png);
    }
}
@media(max-width:450px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px450/1.png);
    }
}
@media(max-width:400px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px400/1.png);
    }
}
@media(max-width:350px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px350/1.png);
    }
}
@media(max-width:315px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px315/1.png);
    }
}
@media(max-width:300px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px300/1.png);
    }
}
@media(max-width:275px){
    .card7 .card7-left .card7-img::before{
        background: url(admin-kvgce/photos/px275/1.png);
    }
}
   
   
        .card7 .card7-right .card7-right-body .card7-rb-3 .card7-rb-3-inner {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share.svg) hsl(210, 46%, 95%);
            width: 35px;
            height: 35px;
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
            border-radius: 50%;
            cursor: pointer;
        }
        .card7 .card7-right .card7-right-body .card7-rb-3 .card7-rb-3-inner:hover {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share-white.svg) hsl(217, 19%, 35%);
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
        }
        .card7 .card7-right .card7-right-body .card7-rb-3 .card7-rb-3-inner-before {
            position: absolute;
            width: 275px;
            height: 55px;
            background: hsl(217, 19%, 35%);
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            color: white;
            box-sizing: border-box;
            align-items: center;
            top: -80px;
            left: -110px;
            opacity: 0;
            justify-content: center;
            padding: 0px 20px;
            z-index: 2;
        }
        .card7 .card7-right .card7-right-body .card7-rb-3 .card7-rb-3-inner-before::after {
            content: "";
            position: absolute;
            top: 40px;
            left: 50%;
            width: 40px;
            height: 40px;
            background: hsl(217, 19%, 35%);
            transform: translate(-50%, -50%) rotate(45deg);
            z-index: -1;
        }
        .card7 .card7-right .card7-right-body .card7-rb-3 .card7-rb-3-inner:hover + .card7-rb-3-inner-before {
            opacity: 1;
        }
        .before-1 {flex-grow: 2;letter-spacing: 7px;color: hsl(212, 23%, 69%);display: flex;justify-content: center;}
        .before-2 {flex-grow: 1;}
        .before-3 {flex-grow: 1;}
        .before-4 {flex-grow: 1;}

        @media screen and (max-width: 850px) {
            body {
                height: 100%;
                /* margin: 70px auto; */
            }
            main {
                width: 95%;
                margin-top: 5%;
                margin-left: 2%;
                margin-right: 2%;
            }
            .card7 {
                flex-direction: column;
            }
            .card7 .card7-left {
                width: 100%;
            }
            .card7 .card7-right {
                width: 100%;
                padding: 40px 25px 20px;
            }
            .card7 .card7-left .card7-img {
                height: 210px;
            }
            .card7 .card7-left .card7-img::before {
                border-radius: 8px 8px 0px 0px;
            }
            .card7 .card7-right .card7-right-body .card7-rb-3 .card7-rb-3-inner-before {
                top: -3px;
                left: -235px;
                width: 230px;
            }
            .card7 .card7-right .card7-right-body .card7-rb-3 .card7-rb-3-inner-before::after {
                content: unset;
            }
        }</style>
<body>
    

<main id="president">
        <div class="card7">
            <div class="card7-left">
                <div class="card7-img"></div>
            </div>
            <div class="card7-right">
                
            <h3 class="subheadWhite head" style="color:#3A3B3C;padding:0%;"> Founder President<span></span></h3>
                <div class="card7-title fw-7" style="color:black;font-size:16px;text-align:center;">LATE DR. KURUNJI VENKATRAMANA GOWDA</div>
                <div class="card7-text fw-5" style="color:#3A3B3C;">"It takes a lot of courage to release the familiar and seemingly secure, to embrace the new. But there is no real security in what is no longer meaningful. There is more security in the adventurous and exciting, for in movement there is life, and in change there is power."</div>
                <!-- <div class="card7-right-body"> -->
                    
                    <!-- <div class="card7-rb-2">
                        <div class="card7-rb-2-title fw-7">Michelle Appleton</div>
                        <div class="card7-rb-2-text fw-5">28 Jun 2020</div>
                    </div> -->
                    <!-- <div class="card7-rb-3">
                        <div class="card7-rb-3-inner"></div>
                        <div class="card7-rb-3-inner-before">
                            <div class="before-1">SHARE</div>
                            <div class="before-2"><img src="https://rvs-article-preview-component.netlify.app/images/icon-facebook.svg" alt=""></div>
                            <div class="before-3"><img src="https://rvs-article-preview-component.netlify.app/images/icon-twitter.svg" alt=""></div>
                            <div class="before-4"><img src="https://rvs-article-preview-component.netlify.app/images/icon-pinterest.svg" alt=""></div>
                        </div>
                    </div> -->
                <!-- </div> -->
            </div>
        </div>
    </main>



    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap');
        body {
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            width: 100%;
            /* height: 100vh; */
            padding: 0px;
            margin: 0px;
            /* display: flex; */
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background: hsl(210, 46%, 95%);
            background-color: whitesmoke;
        }
        .fw-5 {font-weight: 500;}
        .fw-7 {font-weight: 700;}
        main {width: 800px;box-sizing: border-box;border-radius: 8px;background: white;box-shadow: 0px 0px 14px #80808047;margin-left: 23%;margin-top: 2%;margin-bottom: 2%;}
        .card8 {display: flex;flex-direction: row;width: 100%;}
        .card8 .card8-left {width: 40%;}
        .card8 .card8-left .card8-img {width: 100%;height: 310px;position: relative;}
        .card8 .card8-left .card8-img::before {content: "";background: url(admin-kvgce/photos/gen_secretary2.png);width: 100%;height: 100%;background-repeat: no-repeat;background-size: cover;display: block;border-radius: 8px 0px 0px 8px;}
        .card8 .card8-left .card8-img img {width: 100%;}
        .card8 .card8-right {width: 60%;display: flex;flex-direction: column;padding: 40px;box-sizing: border-box;}
        .card8 .card8-right .card8-title {font-size: 20px;color: hsl(214, 17%, 51%);}
        .card8 .card8-right .card8-text {font-size: 14px;color: hsl(212, 23%, 69%);margin-top: 20px;}
        .card8 .card8-right .card8-right-body {display: flex;margin-top: 26px;}
        .card8 .card8-right .card8-right-body .card8-rb-1 {flex-grow: 1;}
        .card8 .card8-right .card8-right-body .card8-rb-1 img {width: 45px;border-radius: 50%;}
        .card8 .card8-right .card8-right-body .card8-rb-2 {flex-grow: 7;display: flex;flex-direction: column;justify-content: center;row-gap: 3px;}
        .card8 .card8-right .card8-right-body .card8-rb-2 .card8-rb-2-title {color: hsl(214, 17%, 51%);}
        .card8 .card8-right .card8-right-body .card8-rb-2 .card8-rb-2-text {color: hsl(212, 23%, 69%);}
        .card8 .card8-right .card8-right-body .card8-rb-3 {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        @media(max-width:767px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px767/2.png);
    }
} 
@media(max-width:600px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px600/2.png);
    }
} 
@media(max-width:550px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px550/2.png);
    }
} 
@media(max-width:500px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px500/2.png);
    }
} 
@media(max-width:450px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px450/2.png);
    }
}
  @media(max-width:400px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px400/2.png);
    }
}
@media(max-width:350px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px350/2.png);
    }
}
@media(max-width:315px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px315/2.png);
    }
}
@media(max-width:300px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px300/2.png);
    }
}
@media(max-width:275px){
    .card8 .card8-left .card8-img::before{
        background: url(admin-kvgce/photos/px275/2.png);
    }
}
        .card8 .card8-right .card8-right-body .card8-rb-3 .card8-rb-3-inner {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share.svg) hsl(210, 46%, 95%);
            width: 35px;
            height: 35px;
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
            border-radius: 50%;
            cursor: pointer;
        }
        .card8 .card8-right .card8-right-body .card8-rb-3 .card8-rb-3-inner:hover {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share-white.svg) hsl(217, 19%, 35%);
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
        }
        .card8 .card8-right .card8-right-body .card8-rb-3 .card8-rb-3-inner-before {
            position: absolute;
            width: 275px;
            height: 55px;
            background: hsl(217, 19%, 35%);
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            color: white;
            box-sizing: border-box;
            align-items: center;
            top: -80px;
            left: -110px;
            opacity: 0;
            justify-content: center;
            padding: 0px 20px;
            z-index: 2;
        }
        .card8 .card8-right .card8-right-body .card8-rb-3 .card8-rb-3-inner-before::after {
            content: "";
            position: absolute;
            top: 40px;
            left: 50%;
            width: 40px;
            height: 40px;
            background: hsl(217, 19%, 35%);
            transform: translate(-50%, -50%) rotate(45deg);
            z-index: -1;
        }
        .card8 .card8-right .card8-right-body .card8-rb-3 .card8-rb-3-inner:hover + .card8-rb-3-inner-before {
            opacity: 1;
        }
        .before-1 {flex-grow: 2;letter-spacing: 7px;color: hsl(212, 23%, 69%);display: flex;justify-content: center;}
        .before-2 {flex-grow: 1;}
        .before-3 {flex-grow: 1;}
        .before-4 {flex-grow: 1;}

        @media screen and (max-width: 850px) {
            body {
                height: 100%;
                /* margin: 70px auto; */
            }
            main {
                width: 95%;
                margin-top: 5%;
                margin-left: 2%;
                margin-right: 2%;
            }
            .card8 {
                flex-direction: column;
            }
            .card8 .card8-left {
                width: 100%;
            }
            .card8 .card8-right {
                width: 100%;
                padding: 40px 25px 20px;
            }
            .card8 .card8-left .card8-img {
                height: 210px;
            }
            .card8 .card8-left .card8-img::before {
                border-radius: 8px 8px 0px 0px;
            }
            .card8 .card8-right .card8-right-body .card8-rb-3 .card8-rb-3-inner-before {
                top: -3px;
                left: -235px;
                width: 230px;
            }
            .card8 .card8-right .card8-right-body .card8-rb-3 .card8-rb-3-inner-before::after {
                content: unset;
            }
        }</style>
<body>
<main id="secretary">
        <div class="card8">
            <div class="card8-left">
                <div class="card8-img"></div>
            </div>
            <div class="card8-right">
            <h3 class="subheadWhite head" style="color:#3A3B3C;padding:0%;"> General Secretary<span></span></h3>
                <div class="card8-title fw-7" style="color:black;" id="bomb">DR. RENUKA PRASAD K V</div>
                <div class="card8-text fw-5" style="color:#3A3B3C;">"Dreams pass into the reality of action. From the actions stems the dream again; and this interdependence produces the highest form of living."</div>
                <div class="card8-right-body">
                    <!-- <div class="card8-rb-1">
                        <img src="https://rvs-article-preview-component.netlify.app/images/avatar-michelle.jpg" alt="">
                    </div>
                    <div class="card8-rb-2">
                        <div class="card8-rb-2-title fw-7">Michelle Appleton</div>
                        <div class="card8-rb-2-text fw-5">28 Jun 2020</div>
                    </div> -->
                    <!-- <div class="card8-rb-3">
                        <div class="card8-rb-3-inner"></div>
                        <div class="card8-rb-3-inner-before">
                            <div class="before-1">SHARE</div>
                            <div class="before-2"><img src="https://rvs-article-preview-component.netlify.app/images/icon-facebook.svg" alt=""></div>
                            <div class="before-3"><img src="https://rvs-article-preview-component.netlify.app/images/icon-twitter.svg" alt=""></div>
                            <div class="before-4"><img src="https://rvs-article-preview-component.netlify.app/images/icon-pinterest.svg" alt=""></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </main>




    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap');
        body {
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            width: 100%;
            /* height: 100vh; */
            padding: 0px;
            margin: 0px;
            /* display: flex; */
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background: hsl(210, 46%, 95%);
            background-color: whitesmoke;
        }
        .fw-5 {font-weight: 500;}
        .fw-7 {font-weight: 700;}
        main {width: 800px;box-sizing: border-box;border-radius: 8px;background: white;box-shadow: 0px 0px 14px #80808047;margin-left: 23%;margin-top: 2%;margin-bottom: 2%;}
        .card9 {display: flex;flex-direction: row;width: 100%;}
        .card9 .card9-left {width: 40%;}
        .card9 .card9-left .card9-img {width: 100%;height: 310px;position: relative;}
        .card9 .card9-left .card9-img::before {content: "";background: url(admin-kvgce/photos/ujwalsir2.png);width: 100%;height: 100%;background-repeat: no-repeat;background-size: cover;display: block;border-radius: 8px 0px 0px 8px;}
        .card9 .card9-left .card9-img img {width: 100%;}
        .card9 .card9-right {width: 60%;display: flex;flex-direction: column;padding: 40px;box-sizing: border-box;}
        .card9 .card9-right .card9-title {font-size: 20px;color: hsl(214, 17%, 51%);}
        .card9 .card9-right .card9-text {font-size: 14px;color: hsl(212, 23%, 69%);margin-top: 20px;}
        .card9 .card9-right .card9-right-body {display: flex;margin-top: 26px;}
        .card9 .card9-right .card9-right-body .card9-rb-1 {flex-grow: 1;}
        .card9 .card9-right .card9-right-body .card9-rb-1 img {width: 45px;border-radius: 50%;}
        .card9 .card9-right .card9-right-body .card9-rb-2 {flex-grow: 7;display: flex;flex-direction: column;justify-content: center;row-gap: 3px;}
        .card9 .card9-right .card9-right-body .card9-rb-2 .card9-rb-2-title {color: hsl(214, 17%, 51%);}
        .card9 .card9-right .card9-right-body .card9-rb-2 .card9-rb-2-text {color: hsl(212, 23%, 69%);}
        .card9 .card9-right .card9-right-body .card9-rb-3 {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }
@media(max-width:767px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px767/3.png);
    }
    #bomb{
        text-align: center;
    }
}
@media(max-width:600px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px600/3.png);
    }}
@media(max-width:550px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px550/3.png);
    }}
@media(max-width:500px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px500/3.png);
    }}
@media(max-width:450px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px450/3.png);
    }}
@media(max-width:400px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px400/3.png);
    }}
    @media(max-width:350px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px350/3.png);
    }}
    @media(max-width:315px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px315/3.png);
    }}
    @media(max-width:300px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px300/3.png);
    }}
    @media(max-width:275px){
    .card9 .card9-left .card9-img::before{
        background: url(admin-kvgce/photos/px275/3.png);
    }}
        .card9 .card9-right .card9-right-body .card9-rb-3 .card9-rb-3-inner {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share.svg) hsl(210, 46%, 95%);
            width: 35px;
            height: 35px;
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
            border-radius: 50%;
            cursor: pointer;
        }
        .card9 .card9-right .card9-right-body .card9-rb-3 .card9-rb-3-inner:hover {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share-white.svg) hsl(217, 19%, 35%);
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
        }
        .card9 .card9-right .card9-right-body .card9-rb-3 .card9-rb-3-inner-before {
            position: absolute;
            width: 275px;
            height: 55px;
            background: hsl(217, 19%, 35%);
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            color: white;
            box-sizing: border-box;
            align-items: center;
            top: -80px;
            left: -110px;
            opacity: 0;
            justify-content: center;
            padding: 0px 20px;
            z-index: 2;
        }
        .card9 .card9-right .card9-right-body .card9-rb-3 .card9-rb-3-inner-before::after {
            content: "";
            position: absolute;
            top: 40px;
            left: 50%;
            width: 40px;
            height: 40px;
            background: hsl(217, 19%, 35%);
            transform: translate(-50%, -50%) rotate(45deg);
            z-index: -1;
        }
        .card9 .card9-right .card9-right-body .card9-rb-3 .card9-rb-3-inner:hover + .card9-rb-3-inner-before {
            opacity: 1;
        }
        .before-1 {flex-grow: 2;letter-spacing: 7px;color: hsl(212, 23%, 69%);display: flex;justify-content: center;}
        .before-2 {flex-grow: 1;}
        .before-3 {flex-grow: 1;}
        .before-4 {flex-grow: 1;}

        @media screen and (max-width: 850px) {
            body {
                height: 100%;
                /* margin: 70px auto; */
            }
            main {
                width: 95%;
                margin-top: 5%;
                margin-left: 2%;
                margin-right: 2%;
            }
            .card9 {
                flex-direction: column;
            }
            .card9 .card9-left {
                width: 100%;
            }
            .card9 .card9-right {
                width: 100%;
                padding: 40px 25px 20px;
            }
            .card9 .card9-left .card9-img {
                height: 210px;
            }
            .card9 .card9-left .card9-img::before {
                border-radius: 8px 8px 0px 0px;
            }
            .card9 .card9-right .card9-right-body .card9-rb-3 .card9-rb-3-inner-before {
                top: -3px;
                left: -235px;
                width: 230px;
            }
            .card9 .card9-right .card9-right-body .card9-rb-3 .card9-rb-3-inner-before::after {
                content: unset;
            }
        }</style>
<body>
<main id="ceo">
        <div class="card9">
            <div class="card9-left">
                <div class="card9-img"></div>
            </div>
            <div class="card9-right">
            <h3 class="subheadWhite head" style="color: #3A3B3C;padding:0%;">Chief Executive Officer<span></span></h3>
                <div class="card9-title fw-7" style="color:black;" id="bomb">DR. UJWAL U J</div>
                <div class="card9-text fw-5" style="color:#3A3B3C;">"KVG College of Engineering focuses on addressing the needs of students fromcurricular, co-curricular and extra-curricular point of view. It is the innateprinciple of our institution that every single student must realize her or his goalto be a robust and effective part of the world to solve real world problems and tobe an asset to the society"</div>
                <div class="card9-right-body">
                    <!-- <div class="card9-rb-1">
                        <img src="https://rvs-article-preview-component.netlify.app/images/avatar-michelle.jpg" alt="">
                    </div> -->
                    <!-- <div class="card9-rb-2">
                        <div class="card9-rb-2-title fw-7">Michelle Appleton</div>
                        <div class="card9-rb-2-text fw-5">28 Jun 2020</div>
                    </div> -->
                    <!-- <div class="card9-rb-3">
                        <div class="card9-rb-3-inner"></div>
                        <div class="card9-rb-3-inner-before">
                            <div class="before-1">SHARE</div>
                            <div class="before-2"><img src="https://rvs-article-preview-component.netlify.app/images/icon-facebook.svg" alt=""></div>
                            <div class="before-3"><img src="https://rvs-article-preview-component.netlify.app/images/icon-twitter.svg" alt=""></div>
                            <div class="before-4"><img src="https://rvs-article-preview-component.netlify.app/images/icon-pinterest.svg" alt=""></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </main>

    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap');
        body {
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            width: 100%;
            /* height: 100vh; */
            padding: 0px;
            margin: 0px;
            /* display: flex; */
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background: hsl(210, 46%, 95%);
            background-color: whitesmoke;
        }
        .fw-5 {font-weight: 500;}
        .fw-7 {font-weight: 700;}
        main {width: 800px;box-sizing: border-box;border-radius: 8px;background: white;box-shadow: 0px 0px 14px #80808047;margin-left: 23%;margin-top: 2%;margin-bottom: 2%;}
        .card10 {display: flex;flex-direction: row;width: 100%;}
        .card10 .card10-left {width: 40%;}
        .card10 .card10-left .card10-img {width: 100%;height: 310px;position: relative;}
        .card10 .card10-left .card10-img::before {content: "";background: url(admin-kvgce/photos/suresh2.png);width: 100%;height: 100%;background-repeat: no-repeat;background-size: cover;display: block;border-radius: 8px 0px 0px 8px;}
        .card10 .card10-left .card10-img img {width: 100%;}
        .card10 .card10-right {width: 60%;display: flex;flex-direction: column;padding: 40px;box-sizing: border-box;}
        .card10 .card10-right .card10-title {font-size: 20px;color: hsl(214, 17%, 51%);}
        .card10 .card10-right .card10-text {font-size: 14px;color: hsl(212, 23%, 69%);margin-top: 20px;}
        .card10 .card10-right .card10-right-body {display: flex;margin-top: 26px;}
        .card10 .card10-right .card10-right-body .card10-rb-1 {flex-grow: 1;}
        .card10 .card10-right .card10-right-body .card10-rb-1 img {width: 45px;border-radius: 50%;}
        .card10 .card10-right .card10-right-body .card10-rb-2 {flex-grow: 7;display: flex;flex-direction: column;justify-content: center;row-gap: 3px;}
        .card10 .card10-right .card10-right-body .card10-rb-2 .card10-rb-2-title {color: hsl(214, 17%, 51%);}
        .card10 .card10-right .card10-right-body .card10-rb-2 .card10-rb-2-text {color: hsl(212, 23%, 69%);}
        .card10 .card10-right .card10-right-body .card10-rb-3 {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        @media(max-width:767px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px767/4.png);
    }
}
@media(max-width:600px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px600/4.png);
    }
}
@media(max-width:550px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px550/4.png);
    }
}
@media(max-width:500px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px500/4.png);
    }
}
@media(max-width:450px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px450/4.png);
    }
}
@media(max-width:400px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px400/4.png);
    }
}
@media(max-width:350px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px350/4.png);
    }
} 
@media(max-width:315px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px315/4.png);
    }
} 
@media(max-width:300px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px300/4.png);
    }
} 
@media(max-width:275px){
    .card10 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px275/4.png);
    }
}
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share.svg) hsl(210, 46%, 95%);
            width: 35px;
            height: 35px;
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
            border-radius: 50%;
            cursor: pointer;
        }
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner:hover {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share-white.svg) hsl(217, 19%, 35%);
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
        }
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner-before {
            position: absolute;
            width: 275px;
            height: 55px;
            background: hsl(217, 19%, 35%);
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            color: white;
            box-sizing: border-box;
            align-items: center;
            top: -80px;
            left: -110px;
            opacity: 0;
            justify-content: center;
            padding: 0px 20px;
            z-index: 2;
        }
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner-before::after {
            content: "";
            position: absolute;
            top: 40px;
            left: 50%;
            width: 40px;
            height: 40px;
            background: hsl(217, 19%, 35%);
            transform: translate(-50%, -50%) rotate(45deg);
            z-index: -1;
        }
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner:hover + .card10-rb-3-inner-before {
            opacity: 1;
        }
        .before-1 {flex-grow: 2;letter-spacing: 7px;color: hsl(212, 23%, 69%);display: flex;justify-content: center;}
        .before-2 {flex-grow: 1;}
        .before-3 {flex-grow: 1;}
        .before-4 {flex-grow: 1;}

        @media screen and (max-width: 850px) {
            body {
                height: 100%;
                /* margin: 70px auto; */
            }
            main {
                width: 95%;
                margin-top: 5%;
                margin-left: 2%;
                margin-right: 2%;
            }
            .card10 {
                flex-direction: column;
            }
            .card10 .card10-left {
                width: 100%;
            }
            .card10 .card10-right {
                width: 100%;
                padding: 40px 25px 20px;
            }
            .card10 .card10-left .card10-img {
                height: 210px;
            }
            .card10 .card10-left .card10-img::before {
                border-radius: 8px 8px 0px 0px;
            }
            .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner-before {
                top: -3px;
                left: -235px;
                width: 230px;
            }
            .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner-before::after {
                content: unset;
            }
        }
        @media ( max-width: 767px ) { 
    .card9 .card10-left .card10-img::before{
        background: url(admin-kvgce/photos/px767/4.png);
    }
}
</style>
<body>
<main id="princi">
        <div class="card10">
            <div class="card10-left">
                <div class="card10-img"></div>
            </div>
            <div class="card10-right">
            <h3 class="subheadWhite head" style="color: #3A3B3C;padding:0%;"> Principal<span></span></h3>
                <div class="card10-title fw-7" style="color:black" id="bomb">DR. SURESHA V</div>
                <div class="card10-text fw-5" style="color:#3A3B3C;">" Do not go where the path may lead, go instead where there is no path and leave trail."  The traditional industrial economy which has served so well for decades is now being replaced by a new knowledge based economy Growth and job creation is in the knowledge intensive sectors. India is in the process of becoming an economic super power and there is a growing demand for engineering and management graduates.</div>
                <!-- <div class="card10-right-body"> -->
                    <!-- <div class="card10-rb-1">
                        <img src="https://rvs-article-preview-component.netlify.app/images/avatar-michelle.jpg" alt="">
                    </div>
                    <div class="card10-rb-2">
                        <div class="card10-rb-2-title fw-7">Michelle Appleton</div>
                        <div class="card10-rb-2-text fw-5">28 Jun 2020</div>
                    </div>
                    <div class="card10-rb-3">
                        <div class="card10-rb-3-inner"></div>
                        <div class="card10-rb-3-inner-before">
                            <div class="before-1">SHARE</div>
                            <div class="before-2"><img src="https://rvs-article-preview-component.netlify.app/images/icon-facebook.svg" alt=""></div>
                            <div class="before-3"><img src="https://rvs-article-preview-component.netlify.app/images/icon-twitter.svg" alt=""></div>
                            <div class="before-4"><img src="https://rvs-article-preview-component.netlify.app/images/icon-pinterest.svg" alt=""></div>
                        </div>
                    </div> -->
                <!-- </div> -->
            </div>
        </div>
    </main>

    <!-- footer> -->

    <?php include('footer.php') ?>



    
</body>

<!-- Mirrored from www.sjec.ac.in/department-computer-science.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Apr 2022 12:11:44 GMT -->

</html>