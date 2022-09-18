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
        <div><img src="images/banner/Slider3.jpg" class="img-responsive"></div>
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


</style>
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
                         <main id="secretary">
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
                          <!--   <div class="card8-rb-1">
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
                                       <?php include('footer.php') ?>




</body>

<!-- Mirrored from www.sjec.ac.in/department-computer-science.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Apr 2022 12:11:44 GMT -->

</html>
