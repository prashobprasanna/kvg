<!DOCTYPE html>
<html lang="en">
<?php
include('navbar.php');
?>
<section class="inner-banner wow fadeIn" data-wow-delay=".2s" style="padding:0">
    <div><img src="images/banner/Slider3.jpg" class="img-responsive"></div>
</section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap');

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
        background-color: white;
    }

    .fw-5 {
        font-weight: 500;
    }

    .fw-7 {
        font-weight: 700;
    }

    main {
        width: 800px;
        box-sizing: border-box;
        border-radius: 8px;
        background: white;
        box-shadow: 0px 0px 14px #80808047;
        margin-left: 23%;
        margin-top: 2%;
        margin-bottom: 2%;
    }

    .card7 {
        display: flex;
        flex-direction: row;
        width: 100%;
    }

    .card7 .card7-left {
        width: 40%;
    }

    .card7 .card7-left .card7-img {
        width: 100%;
        height: 310px;
        position: relative;
    }

    .card7 .card7-left .card7-img::before {
        content: "";
        background: url(admin-kvgce/photos/aboutkvgce/1.png);
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        display: block;
        border-radius: 8px 0px 0px 8px;
    }

    .card7 .card7-left .card7-img img {
        width: 100%;
    }

    .card7 .card7-right {
        width: 60%;
        display: flex;
        flex-direction: column;
        padding: 40px;
        box-sizing: border-box;
    }

    .card7 .card7-right .card7-title {
        font-size: 20px;
        color: hsl(214, 17%, 51%);
    }

    .card7 .card7-right .card7-text {
        font-size: 14px;
        color: hsl(212, 23%, 69%);
        margin-top: 20px;
    }

    .card7 .card7-right .card7-right-body {
        display: flex;
        margin-top: 26px;
    }

    .card7 .card7-right .card7-right-body .card7-rb-1 {
        flex-grow: 1;
    }

    .card7 .card7-right .card7-right-body .card7-rb-1 img {
        width: 45px;
        border-radius: 50%;
    }

    .card7 .card7-right .card7-right-body .card7-rb-2 {
        flex-grow: 7;
        display: flex;
        flex-direction: column;
        justify-content: center;
        row-gap: 3px;
    }

    .card7 .card7-right .card7-right-body .card7-rb-2 .card7-rb-2-title {
        color: hsl(214, 17%, 51%);
    }

    .card7 .card7-right .card7-right-body .card7-rb-2 .card7-rb-2-text {
        color: hsl(212, 23%, 69%);
    }

    .card7 .card7-right .card7-right-body .card7-rb-3 {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    @media(max-width:767px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px767/1.png);
        }
    }

    @media(max-width:600px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px600/1.png);
        }
    }

    @media(max-width:550px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px550/1.png);
        }
    }

    @media(max-width:500px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px500/1.png);
        }
    }

    @media(max-width:450px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px450/1.png);
        }
    }

    @media(max-width:400px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px400/1.png);
        }
    }

    @media(max-width:350px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px350/1.png);
        }
    }

    @media(max-width:315px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px315/1.png);
        }
    }

    px @media(max-width:300px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px300/1.png);
        }
    }

    @media(max-width:275px) {
        .card7 .card7-left .card7-img::before {
            background: url(admin-kvgce/photos/aboutkvgce/px275/1.png);
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

    .card7 .card7-right .card7-right-body .card7-rb-3 .card7-rb-3-inner:hover+.card7-rb-3-inner-before {
        opacity: 1;
    }

    .before-1 {
        flex-grow: 2;
        letter-spacing: 7px;
        color: hsl(212, 23%, 69%);
        display: flex;
        justify-content: center;
    }

    .before-2 {
        flex-grow: 1;
    }

    .before-3 {
        flex-grow: 1;
    }

    .before-4 {
        flex-grow: 1;
    }

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
    }
</style>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap');

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
            background-color: white;
        }

        .fw-5 {
            font-weight: 500;
        }

        .fw-7 {
            font-weight: 700;
        }

        main {
            width: 800px;
            box-sizing: border-box;
            border-radius: 8px;
            background: white;
            box-shadow: 0px 0px 14px #80808047;
            margin-left: 23%;
            margin-top: 2%;
            margin-bottom: 2%;
        }

        .card8 {
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .card8 .card8-left {
            width: 40%;
        }

        .card8 .card8-left .card8-img {
            width: 100%;
            height: 310px;
            position: relative;
        }

        .card8 .card8-left .card8-img::before {
            content: "";
            background: url(admin-kvgce/photos/aboutkvgce/2.png);
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            display: block;
            border-radius: 8px 0px 0px 8px;
        }

        .card8 .card8-left .card8-img img {
            width: 100%;
        }

        .card8 .card8-right {
            width: 60%;
            display: flex;
            flex-direction: column;
            padding: 40px;
            box-sizing: border-box;
        }

        .card8 .card8-right .card8-title {
            font-size: 20px;
            color: hsl(214, 17%, 51%);
        }

        .card8 .card8-right .card8-text {
            font-size: 14px;
            color: hsl(212, 23%, 69%);
            margin-top: 20px;
        }

        .card8 .card8-right .card8-right-body {
            display: flex;
            margin-top: 26px;
        }

        .card8 .card8-right .card8-right-body .card8-rb-1 {
            flex-grow: 1;
        }

        .card8 .card8-right .card8-right-body .card8-rb-1 img {
            width: 45px;
            border-radius: 50%;
        }

        .card8 .card8-right .card8-right-body .card8-rb-2 {
            flex-grow: 7;
            display: flex;
            flex-direction: column;
            justify-content: center;
            row-gap: 3px;
        }

        .card8 .card8-right .card8-right-body .card8-rb-2 .card8-rb-2-title {
            color: hsl(214, 17%, 51%);
        }

        .card8 .card8-right .card8-right-body .card8-rb-2 .card8-rb-2-text {
            color: hsl(212, 23%, 69%);
        }

        .card8 .card8-right .card8-right-body .card8-rb-3 {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        @media(max-width:767px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px767/2.png);
            }
        }

        @media(max-width:600px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px600/2.png);
            }
        }

        @media(max-width:550px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px550/2.png);
            }
        }

        @media(max-width:500px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px500/2.png);
            }
        }

        @media(max-width:450px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px450/2.png);
            }
        }

        @media(max-width:400px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px400/2.png);
            }
        }

        @media(max-width:350px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px350/2.png);
            }
        }

        @media(max-width:315px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px315/2.png);
            }
        }

        @media(max-width:300px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px300/2.png);
            }
        }

        @media(max-width:275px) {
            .card8 .card8-left .card8-img::before {
                background: url(admin-kvgce/photos/aboutkvgce/px275/2.png);
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

        .card8 .card8-right .card8-right-body .card8-rb-3 .card8-rb-3-inner:hover+.card8-rb-3-inner-before {
            opacity: 1;
        }

        .before-1 {
            flex-grow: 2;
            letter-spacing: 7px;
            color: hsl(212, 23%, 69%);
            display: flex;
            justify-content: center;
        }

        .before-2 {
            flex-grow: 1;
        }

        .before-3 {
            flex-grow: 1;
        }

        .before-4 {
            flex-grow: 1;
        }

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
        }
    </style>

    <body>

        <div class="container">
            <center>
                <h2 class="head1">ABOUT <span class="head2">US</span></h2>
            </center>
            <hr>
        </div>


        <section id="about">
            <div class="container">
                <div class="card7-text fw-5" style="color:#3A3B3C; padding:0%; font-size:large;"> "KVG College of Engineering is one of the most reputed engineering colleges in Karnataka, India. The engineering college, started in 1986, was one of the first private sector initiatives in technical education in Dakshina Kannada District. Popularly known as KVGCE, it is located in Kurunjibhag, Sullia, Dakshina Kannada. K.V.G. College of Engineering sponsored by Academy of Liberal Education (R) Sullia D.K. and is one of the largest mega educational complexes in India." </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <br><br><br>


        <section id="mission">
            <div class="container">
                <div class="row">

                    <div class="col-sm-5">
                        <div class="row box" style="margin: auto !IMPORTANT;">
                            <div class="col-sm-3">
                                <center>
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </center>
                            </div>
                            <div class="col-sm-9">
                                <h3>Vision</h3>
                                <div class="card8-text fw-5" style="color:#3A3B3C;">"To be a Notable Engineering College Recognized for Academics, Innovation and the Societal Relevance and Impact of its Pursuits."</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="row box" style="margin: auto !IMPORTANT;">
                            <div class="col-sm-3">
                                <center>
                                    <i class="fa fa-rocket" aria-hidden="true"></i>
                                </center>
                            </div>
                            <div class="col-sm-9">
                                <h3>Mission</h3>
                                <ul class="svc">
                                    <div class="card9-text fw-5" style="color:#3A3B3C;">
                                        <ul>
                                            <li><strong>M1.</strong> "Educate our Students Committed to the Service and Ethical Application of Science and Technology."</li>
                                            <li><strong>M2.</strong> "Provide Resources to our Faculty and Student to Enhance Engineering Knowledge through Industry - Institute Interactions."</li>
                                            <li><strong>M3.</strong> "Practice Diversity and Inclusion amongst our Stakeholders through Rural and Societal Outreach."</li>
                                        </ul>
                                    </div>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5" style="margin-left: 27%;">
                        <br><br>
                        <div class="row box" style="margin: auto !IMPORTANT;">
                            <br><br>
                            <div class="col-sm-3">
                                <center>
                                    <i class="fa fa-cube" aria-hidden="true"></i>
                                </center>
                            </div>
                            <div class="col-sm-9">
                                <h3>QUALITY POLICY</h3>
                                <div class="card10-text fw-5" style="color:#3A3B3C;">"We are committed to impart quality education with strong ethics."</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style type="text/css">
                #mission i {
                    font-size: 80px;
                    color: #23c1d7;
                    text-shadow: 1px 1px 5px #3a3a3a;
                    text-shadow: 20px 16px 8px #cccccc;
                    margin-top: 15px;
                }

                #mission .box {
                    padding: 10px;
                    box-shadow: -1px 5px 13px #cecece;
                    min-height: 240px;
                }
            </style>
        </section>


        <div class="clearfix"></div>

        <section id="founder" class="bshadow"><br><br>
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="head1 pull-right"><span class="head2">FOUNDER</span> PRESIDENT</h2>
                        <div class="clearfix"></div><br>
                    </div>
                    <div class="clearfix"></div><br>
                    <div class="col-sm-4">
                        <img src="admin-kvgce/founder.png" class="img-responsive">
                    </div>
                    <div class="col-sm-8" style="font-size: 18px; font-size: 15px; letter-spacing: 1px; line-height: 1.9;">
                        <p>LATE Dr. KURUNJI VENKATRAMANA GOWDA Guided by the basic philosophy “JNANAM SARVATHRA SADHANAM” and with an aim of building Sullia as a world class learning centre, Dr. KURUNJI VENKATRAMANA GOWDA, Founder President, Academy of Liberal Education has converted tiny village into a modern learning center of the country. Powered by the visionary leadership today AOLE® is a conglomerate with more than fifty educational institutions. Born as, one of the millions became one in millions. He is BHAGEERATHA who brought JNANA GANGA to this small town and made Sullia a VIDYA KASHI. <br> &nbsp;&nbsp;&nbsp;&nbsp;Dr. KVG is a man of many dimensions. He is an Educationist, a social reformer, a philosopher, a great preacher an able administrator. Above all a great philanthropist. All these have made him a Living Legend. He is the source of inspiration to all of us. His ideals and way of working are to be imbibed in everybody’s life. He has a dream of making our country modern and strong by spreading intellectual spirituality. We at KVG College of Engineering share his dream of making our BHARATH MAHAAN.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div><br><br>
        </section>

        <div class="clearfix"></div><br>



        <script>
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

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
            function myFunctionuj() {
                var dotsuj = document.getElementById("dotsuj");
                var moreText = document.getElementById("moreuj");
                var btnText = document.getElementById("myBtnuj");

                if (dotsuj.style.display === "none") {
                    dotsuj.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dotsuj.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap');

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
                background-color: white;
            }

            .fw-5 {
                font-weight: 500;
            }

            .fw-7 {
                font-weight: 700;
            }

            main {
                width: 800px;
                box-sizing: border-box;
                border-radius: 8px;
                background: white;
                box-shadow: 0px 0px 14px #80808047;
                margin-left: 23%;
                margin-top: 2%;
                margin-bottom: 2%;
            }

            .card10 {
                display: flex;
                flex-direction: row;
                width: 100%;
            }

            .card10 .card10-left {
                width: 40%;
            }

            .card10 .card10-left .card10-img {
                width: 100%;
                height: 310px;
                position: relative;
            }

            .card10 .card10-left .card10-img::before {
                content: "";
                background: url(admin-kvgce/photos/suresh2.png);
                width: 100%;
                height: 100%;
                background-repeat: no-repeat;
                background-size: cover;
                display: block;
                border-radius: 8px 0px 0px 8px;
            }

            .card10 .card10-left .card10-img img {
                width: 100%;
            }

            .card10 .card10-right {
                width: 60%;
                display: flex;
                flex-direction: column;
                padding: 40px;
                box-sizing: border-box;
            }

            .card10 .card10-right .card10-title {
                font-size: 20px;
                color: hsl(214, 17%, 51%);
            }

            .card10 .card10-right .card10-text {
                font-size: 14px;
                color: hsl(212, 23%, 69%);
                margin-top: 20px;
            }

            .card10 .card10-right .card10-right-body {
                display: flex;
                margin-top: 26px;
            }

            .card10 .card10-right .card10-right-body .card10-rb-1 {
                flex-grow: 1;
            }

            .card10 .card10-right .card10-right-body .card10-rb-1 img {
                width: 45px;
                border-radius: 50%;
            }

            .card10 .card10-right .card10-right-body .card10-rb-2 {
                flex-grow: 7;
                display: flex;
                flex-direction: column;
                justify-content: center;
                row-gap: 3px;
            }

            .card10 .card10-right .card10-right-body .card10-rb-2 .card10-rb-2-title {
                color: hsl(214, 17%, 51%);
            }

            .card10 .card10-right .card10-right-body .card10-rb-2 .card10-rb-2-text {
                color: hsl(212, 23%, 69%);
            }

            .card10 .card10-right .card10-right-body .card10-rb-3 {
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            @media(max-width:767px) {
                .card10 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px767/4.png);
                }
            }

            @media(max-width:600px) {
                .card10 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px600/4.png);
                }
            }

            @media(max-width:550px) {
                .card10 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px550/4.png);
                }
            }

            @media(max-width:500px) {
                .card10 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px500/4.png);
                }
            }

            @media(max-width:450px) {
                .card10 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px450/4.png);
                }
            }

            @media(max-width:400px) {
                .card10 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px400/4.png);
                }
            }

            @media(max-width:350px) {
                .card10 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px350/4.png);
                }
            }

            @media(max-width:315px) {
                .card10 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px315/4.png);
                }
            }

            @media(max-width:300px) {
                .card10 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px300/4.png);
                }
            }

            @media(max-width:275px) {
                .card10 .card10-left .card10-img::before {
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

            .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner:hover+.card10-rb-3-inner-before {
                opacity: 1;
            }

            .before-1 {
                flex-grow: 2;
                letter-spacing: 7px;
                color: hsl(212, 23%, 69%);
                display: flex;
                justify-content: center;
            }

            .before-2 {
                flex-grow: 1;
            }

            .before-3 {
                flex-grow: 1;
            }

            .before-4 {
                flex-grow: 1;
            }

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

            @media (max-width: 767px) {
                .card9 .card10-left .card10-img::before {
                    background: url(admin-kvgce/photos/px767/4.png);
                }
            }
        </style>

        <?php
        include('footer.php');
        ?>

</html>