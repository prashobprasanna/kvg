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
        background-color: whitesmoke;
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


    <main id="about">
        <div class="card7">
            <div class="card7-left">
                <div class="card7-img"></div>
            </div>
            <div class="card7-right">

                <h3 class="subheadWhite head" style="color:black;padding:0%;">KVG College of Engineering<span></span></h3>
                <!-- <div class="card7-title fw-7" style="color:black;font-size:16px;text-align:center;">LATE DR. KURUNJI VENKATRAMANA GOWDA</div> -->
                <div class="card7-text fw-5" style="color:#3A3B3C; padding:0%;">"KVG College of Engineering is one of the most reputed engineering colleges in Karnataka, India. The engineering college, started in 1986, was one of the first private sector initiatives in technical education in Dakshina Kannada District. Popularly known as KVGCE, it is located in Kurunjibhag, Sullia, Dakshina Kannada. K.V.G. College of Engineering sponsored by Academy of Liberal Education (R) Sullia D.K. and is one of the largest mega educational complexes in India."</div>
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
            background-color: whitesmoke;
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
        <main id="vm">
            <div class="card8">
                <!-- <div class="card8-left">
                <div class="card8-img"></div>
            </div> -->
                <center>
                    <div class="card8-right">
                        <center>
                            <h3 class="subheadWhite head" style="color:#3A3B3C;padding:0%;"> VISION<span></span></h3>
                            <!-- <div class="card8-title fw-7" style="color:black;" id="bomb">VISION</div> -->
                            <div class="card8-text fw-5" style="color:#3A3B3C;">"To be a Notable Engineering College Recognized for Academics, Innovation and the Societal Relevance and Impact of its Pursuits."</div>
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
                        </center>
                    </div>
                </center>
            </div>
            </div>
        </main>




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
                background-color: whitesmoke;
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

            .card9 {
                display: flex;
                flex-direction: row;
                width: 100%;
            }

            .card9 .card9-left {
                width: 40%;
            }

            .card9 .card9-left .card9-img {
                width: 100%;
                height: 310px;
                position: relative;
            }

            .card9 .card9-left .card9-img::before {
                content: "";
                background: url(admin-kvgce/photos/aboutkvgce/3.png);
                width: 100%;
                height: 100%;
                background-repeat: no-repeat;
                background-size: cover;
                display: block;
                border-radius: 8px 0px 0px 8px;
            }

            .card9 .card9-left .card9-img img {
                width: 100%;
            }

            .card9 .card9-right {
                width: 60%;
                display: flex;
                flex-direction: column;
                padding: 40px;
                box-sizing: border-box;
            }

            .card9 .card9-right .card9-title {
                font-size: 20px;
                color: hsl(214, 17%, 51%);
            }

            .card9 .card9-right .card9-text {
                font-size: 14px;
                color: hsl(212, 23%, 69%);
                margin-top: 20px;
            }

            .card9 .card9-right .card9-right-body {
                display: flex;
                margin-top: 26px;
            }

            .card9 .card9-right .card9-right-body .card9-rb-1 {
                flex-grow: 1;
            }

            .card9 .card9-right .card9-right-body .card9-rb-1 img {
                width: 45px;
                border-radius: 50%;
            }

            .card9 .card9-right .card9-right-body .card9-rb-2 {
                flex-grow: 7;
                display: flex;
                flex-direction: column;
                justify-content: center;
                row-gap: 3px;
            }

            .card9 .card9-right .card9-right-body .card9-rb-2 .card9-rb-2-title {
                color: hsl(214, 17%, 51%);
            }

            .card9 .card9-right .card9-right-body .card9-rb-2 .card9-rb-2-text {
                color: hsl(212, 23%, 69%);
            }

            .card9 .card9-right .card9-right-body .card9-rb-3 {
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            @media(max-width:767px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px767/3.png);
                }

                #bomb {
                    text-align: center;
                }
            }

            @media(max-width:600px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px600/4.png);
                }
            }

            @media(max-width:550px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px550/3.png);
                }
            }

            @media(max-width:500px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px500/3.png);
                }
            }

            @media(max-width:450px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px450/3.png);
                }
            }

            @media(max-width:400px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px400/3.png);
                }
            }

            @media(max-width:350px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px350/3.png);
                }
            }

            @media(max-width:315px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px315/3.png);
                }
            }

            @media(max-width:300px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px300/3.png);
                }
            }

            @media(max-width:275px) {
                .card9 .card9-left .card9-img::before {
                    background: url(admin-kvgce/photos/aboutkvgce/px275/3.png);
                }
            }

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

            .card9 .card9-right .card9-right-body .card9-rb-3 .card9-rb-3-inner:hover+.card9-rb-3-inner-before {
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
            }
        </style>

        <body>
            <main id="vm">
                <div class="card9">
                    <!-- <div class="card9-left">
                <div class="card9-img"></div>
            </div> -->
                    <center>
                        <div class="card9-right">
                            <center>
                                <h3 class="subheadWhite head" style="color: #3A3B3C;padding:0%;">MISSION<span></span></h3>
                                <!-- <div class="card9-title fw-7" style="color:black;" id="bomb">DR. UJWAL U J</div> -->
                                <div class="card9-text fw-5" style="color:#3A3B3C;">
                                    <ul>
                                        <li><strong>M1.</strong> "Educate our Students Committed to the Service and Ethical Application of Science and Technology."</li>
                                        <li><strong>M2.</strong> "Provide Resources to our Faculty and Student to Enhance Engineering Knowledge through Industry - Institute Interactions."</li>
                                        <li><strong>M3.</strong> "Practice Diversity and Inclusion amongst our Stakeholders through Rural and Societal Outreach."</li>
                                    </ul>
                                </div>
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
                            </center>
                        </div>
                    </center>
                </div>
                </div>
            </main>

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
                    background-color: whitesmoke;
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
                    background: url(admin-kvgce/photos/aboutkvgce/4.png);
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
                        background: url(admin-kvgce/photos/aboutkvgce/px767/4.png);
                    }
                }

                @media(max-width:600px) {
                    .card10 .card10-left .card10-img::before {
                        background: url(admin-kvgce/photos/aboutkvgce/px600/4.png);
                    }
                }

                @media(max-width:550px) {
                    .card10 .card10-left .card10-img::before {
                        background: url(admin-kvgce/photos/aboutkvgce/px550/4.png);
                    }
                }

                @media(max-width:500px) {
                    .card10 .card10-left .card10-img::before {
                        background: url(admin-kvgce/photos/aboutkvgce/px500/4.png);
                    }
                }

                @media(max-width:450px) {
                    .card10 .card10-left .card10-img::before {
                        background: url(admin-kvgce/photos/aboutkvgce/px450/4.png);
                    }
                }

                @media(max-width:400px) {
                    .card10 .card10-left .card10-img::before {
                        background: url(admin-kvgce/photos/aboutkvgce/px400/4.png);
                    }
                }

                @media(max-width:350px) {
                    .card10 .card10-left .card10-img::before {
                        background: url(admin-kvgce/photos/aboutkvgce/px350/4.png);
                    }
                }

                @media(max-width:315px) {
                    .card10 .card10-left .card10-img::before {
                        background: url(admin-kvgce/photos/aboutkvgce/px315/4.png);
                    }
                }

                @media(max-width:300px) {
                    .card10 .card10-left .card10-img::before {
                        background: url(admin-kvgce/photos/aboutkvgce/px300/4.png);
                    }
                }

                @media(max-width:275px) {
                    .card10 .card10-left .card10-img::before {
                        background: url(admin-kvgce/photos/aboutkvgce/px275/4.png);
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

                @media screen and (min-width:850px) {
                    .qltyplcy {
                        margin-left: 42%;
                        margin-right: 58%;
                    }
                }
            </style>

            <body>



                <main id="qp">
                    <div class="card10">
                        <!-- <div class="card10-left">
                <div class="card10-img"></div>
            </div> -->
                        <center>
                            <div class="card10-right qltyplcy">
                                <center>
                                    <h3 class="subheadWhite head" style="color: #3A3B3C;padding:0%;">QUALITY POLICY<span></span></h3>
                                    <!-- <div class="card10-title fw-7" style="color:black" id="bomb">DR. SURESHA V</div> -->
                                    <div class="card10-text fw-5" style="color:#3A3B3C;">"We are committed to impart quality education with strong ethics."</div>
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
                                </center>
                            </div>
                        </center>
                    </div>
                </main>
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
                        background-color: whitesmoke;
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
                            background: url(admin-kvgce/photos/px767/1.png);
                        }
                    }

                    @media(max-width:600px) {
                        .card7 .card7-left .card7-img::before {
                            background: url(admin-kvgce/photos/px600/1.png);
                        }
                    }

                    @media(max-width:550px) {
                        .card7 .card7-left .card7-img::before {
                            background: url(admin-kvgce/photos/px550/1.png);
                        }
                    }

                    @media(max-width:500px) {
                        .card7 .card7-left .card7-img::before {
                            background: url(admin-kvgce/photos/px500/1.png);
                        }
                    }

                    @media(max-width:450px) {
                        .card7 .card7-left .card7-img::before {
                            background: url(admin-kvgce/photos/px450/1.png);
                        }
                    }

                    @media(max-width:400px) {
                        .card7 .card7-left .card7-img::before {
                            background: url(admin-kvgce/photos/px400/1.png);
                        }
                    }

                    @media(max-width:350px) {
                        .card7 .card7-left .card7-img::before {
                            background: url(admin-kvgce/photos/px350/1.png);
                        }
                    }

                    @media(max-width:315px) {
                        .card7 .card7-left .card7-img::before {
                            background: url(admin-kvgce/photos/px315/1.png);
                        }
                    }

                    @media(max-width:300px) {
                        .card7 .card7-left .card7-img::before {
                            background: url(admin-kvgce/photos/px300/1.png);
                        }
                    }

                    @media(max-width:275px) {
                        .card7 .card7-left .card7-img::before {
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
                        #more {
                            display: none;
                        }
                    </style>

                    <main id="president">
                        <div class="card7">
                            <div class="card7-left">
                                <div class="card7-img"></div>
                            </div>
                            <div class="card7-right">

                                <h3 class="subheadWhite head" style="color:#3A3B3C;padding:0%;"> Founder President<span></span></h3>
                                <div class="card7-title fw-7" style="color:black;font-size:16px;text-align:center;">LATE Dr. KURUNJI VENKATRAMANA GOWDA</div>
                                <div class="card7-text fw-5" style="color:#3A3B3C;">
                                    <p style="text-align: justify;">Guided by the basic philosophy “JNANAM SARVATHRA SADHANAM” and with an aim of building Sullia as a world class learning centre<span id="dots">...</span><span id="more">, Dr. KURUNJI VENKATRAMANA GOWDA, Founder President, Academy of Liberal Education has converted tiny village into a modern learning center of the country. Powered by the visionary leadership today AOLE® is a conglomerate with more than fifty educational institutions. Born as, one of the millions became one in millions. He is BHAGEERATHA who brought JNANA GANGA to this small town and made Sullia a VIDYA KASHI. <br> &nbsp;&nbsp;&nbsp;&nbsp;Dr. KVG is a man of many dimensions. He is an Educationist, a social reformer, a philosopher, a great preacher an able administrator. Above all a great philanthropist. All these have made him a Living Legend. He is the source of inspiration to all of us. His ideals and way of working are to be imbibed in everybody’s life. He has a dream of making our country modern and strong by spreading intellectual spirituality. We at KVG College of Engineering share his dream of making our BHARATH MAHAAN.</span></p>
                                    <button onclick="myFunction()" id="myBtn"><strong> Read more</strong></button>
                                </div>


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
                            background-color: whitesmoke;
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
                            background: url(admin-kvgce/photos/gen_secretary2.png);
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
                                background: url(admin-kvgce/photos/px767/2.png);
                            }
                        }

                        @media(max-width:600px) {
                            .card8 .card8-left .card8-img::before {
                                background: url(admin-kvgce/photos/px600/2.png);
                            }
                        }

                        @media(max-width:550px) {
                            .card8 .card8-left .card8-img::before {
                                background: url(admin-kvgce/photos/px550/2.png);
                            }
                        }

                        @media(max-width:500px) {
                            .card8 .card8-left .card8-img::before {
                                background: url(admin-kvgce/photos/px500/2.png);
                            }
                        }

                        @media(max-width:450px) {
                            .card8 .card8-left .card8-img::before {
                                background: url(admin-kvgce/photos/px450/2.png);
                            }
                        }

                        @media(max-width:400px) {
                            .card8 .card8-left .card8-img::before {
                                background: url(admin-kvgce/photos/px400/2.png);
                            }
                        }

                        @media(max-width:350px) {
                            .card8 .card8-left .card8-img::before {
                                background: url(admin-kvgce/photos/px350/2.png);
                            }
                        }

                        @media(max-width:315px) {
                            .card8 .card8-left .card8-img::before {
                                background: url(admin-kvgce/photos/px315/2.png);
                            }
                        }

                        @media(max-width:300px) {
                            .card8 .card8-left .card8-img::before {
                                background: url(admin-kvgce/photos/px300/2.png);
                            }
                        }

                        @media(max-width:275px) {
                            .card8 .card8-left .card8-img::before {
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
                    <style>
                        #more1 {
                            display: none;
                        }
                    </style>

                    <body>
                        <!-- <main id="secretary">
                <div class="card8">
                    <div class="card8-left">
                        <div class="card8-img"></div>
                    </div>
                    <div class="card8-right">
                        <h3 class="subheadWhite head" style="color:#3A3B3C;padding:0%;"> General Secretary<span></span></h3>
                        <div class="card8-title fw-7" style="color:black;" id="bomb">Dr. RENUKA PRASAD K V</div>
                        <div class="card8-text fw-5" style="color:#3A3B3C;"><p>KVGCE imparts training for students to make them competent, motivated Engineers and Scientists. The Institute not only celebrates freedom of thought, cultivates vision and encourages growth, but also inculcates human values and concern for the environment<span id="dots1">...</span><span id="more1">. Since its establishment, the institute has played a vital role in providing the technical manpower and know-how to the country and in pursuit of research. With this, I invite you to experience the environment at KVGCE that is a unique blend of traditions and modernity and is evolving continuously. <br>&nbsp;&nbsp;&nbsp;&nbsp; We offer numerous courses in Engineering, Sciences, Management and Humanities. The alumni of the institute have done exceedingly well in all spheres of life at both national and international level and brought name and fame for themselves as well as to their Alma Mater. The institution takes pride in their achievements. I invite you to visit to KVGCE Sullia and spend some time in person at the sprawling campus at Sullia.</span></p>
<button onclick="myFunction1()" id="myBtn1"><strong> Read more</strong></button></div>
                        <div class="card8-right-body">
                             <div class="card8-rb-1">
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
                    </div> 
                        </div>
                    </div>
                </div>
            </main> -->

                        <script>
                            function myFunction1() {
                                var dots1 = document.getElementById("dots1");
                                var moreText = document.getElementById("more1");
                                var btnText = document.getElementById("myBtn1");

                                if (dots1.style.display === "none") {
                                    dots1.style.display = "inline";
                                    btnText.innerHTML = "Read more";
                                    moreText.style.display = "none";
                                } else {
                                    dots1.style.display = "none";
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
                                background-color: whitesmoke;
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

                            .card9 {
                                display: flex;
                                flex-direction: row;
                                width: 100%;
                            }

                            .card9 .card9-left {
                                width: 40%;
                            }

                            .card9 .card9-left .card9-img {
                                width: 100%;
                                height: 310px;
                                position: relative;
                            }

                            .card9 .card9-left .card9-img::before {
                                content: "";
                                background: url(admin-kvgce/photos/ujwalsir2.png);
                                width: 100%;
                                height: 100%;
                                background-repeat: no-repeat;
                                background-size: cover;
                                display: block;
                                border-radius: 8px 0px 0px 8px;
                            }

                            .card9 .card9-left .card9-img img {
                                width: 100%;
                            }

                            .card9 .card9-right {
                                width: 60%;
                                display: flex;
                                flex-direction: column;
                                padding: 40px;
                                box-sizing: border-box;
                            }

                            .card9 .card9-right .card9-title {
                                font-size: 20px;
                                color: hsl(214, 17%, 51%);
                            }

                            .card9 .card9-right .card9-text {
                                font-size: 14px;
                                color: hsl(212, 23%, 69%);
                                margin-top: 20px;
                            }

                            .card9 .card9-right .card9-right-body {
                                display: flex;
                                margin-top: 26px;
                            }

                            .card9 .card9-right .card9-right-body .card9-rb-1 {
                                flex-grow: 1;
                            }

                            .card9 .card9-right .card9-right-body .card9-rb-1 img {
                                width: 45px;
                                border-radius: 50%;
                            }

                            .card9 .card9-right .card9-right-body .card9-rb-2 {
                                flex-grow: 7;
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                row-gap: 3px;
                            }

                            .card9 .card9-right .card9-right-body .card9-rb-2 .card9-rb-2-title {
                                color: hsl(214, 17%, 51%);
                            }

                            .card9 .card9-right .card9-right-body .card9-rb-2 .card9-rb-2-text {
                                color: hsl(212, 23%, 69%);
                            }

                            .card9 .card9-right .card9-right-body .card9-rb-3 {
                                flex-grow: 1;
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                position: relative;
                            }

                            @media(max-width:767px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px767/3.png);
                                }

                                #bomb {
                                    text-align: center;
                                }
                            }

                            @media(max-width:600px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px600/3.png);
                                }
                            }

                            @media(max-width:550px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px550/3.png);
                                }
                            }

                            @media(max-width:500px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px500/3.png);
                                }
                            }

                            @media(max-width:450px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px450/3.png);
                                }
                            }

                            @media(max-width:400px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px400/3.png);
                                }
                            }

                            @media(max-width:350px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px350/3.png);
                                }
                            }

                            @media(max-width:315px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px315/3.png);
                                }
                            }

                            @media(max-width:300px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px300/3.png);
                                }
                            }

                            @media(max-width:275px) {
                                .card9 .card9-left .card9-img::before {
                                    background: url(admin-kvgce/photos/px275/3.png);
                                }
                            }

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

                            .card9 .card9-right .card9-right-body .card9-rb-3 .card9-rb-3-inner:hover+.card9-rb-3-inner-before {
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
                            }
                        </style>
                        <style>
                            #moreuj {
                                display: none;
                            }
                        </style>
                        <main id="ceo">
                            <div class="card9">
                                <div class="card9-left">
                                    <div class="card9-img"></div>
                                </div>
                                <div class="card9-right">
                                    <h3 class="subheadWhite head" style="color: #3A3B3C;padding:0%;">Chief Executive Officer<span></span></h3>
                                    <div class="card9-title fw-7" style="color:black;" id="bomb">Dr. UJWAL U J</div>
                                    <div class="card9-text fw-5" style="color:#3A3B3C;">
                                        <p> KVG College of Engineering focuses on addressing the needs of students fromcurricular, co-curricular and extra-curricular point of view. It is the innateprinciple of our institution that every single student must realize her or his goal to be a robust and effective part of <span id="dotsuj">...</span><span id="moreuj">the world to solve real world problems and tobe an asset to the society<br>&nbsp;&nbsp;&nbsp;&nbsp;Uniqueness of our education system relies in trainingthe students to identify target, setting distinct points in the travel path towards thetarget, and to make them feel the sense of fulfilment at the target. Our resultshave been remarkable in this endeavour. By providing good standard ofinfrastructure, excellent team of teaching faculty and technical supporting staffand team of training and placement KVG College of Engineering has been thevibrant campus.
                                                <br>&nbsp;&nbsp;&nbsp;&nbsp;The campus environment is diverse with academic reverberationof the students who enjoy learner centered classes. Outstanding placementrecords are due to the imparted quality trainings at various phases which equipthe students to be industry ready. If drive and determination are your cup, then KVG College of Engineering fulfils your dream to be an engineer of calibre.
                                            </span></p>


                                        <button onclick="myFunctionuj()" id="myBtnuj"><strong> Read more</strong></button>
                                    </div>
                                    <p><a href="profile/CEO SIR PROFILE (1).pdf" target="_blank" style="color: #3A3B3C;">View Profile</a></p>

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
                                background-color: whitesmoke;
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