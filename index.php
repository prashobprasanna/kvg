<!DOCTYPE html>
<html lang="en">




<body>
    <!-- Google Tag Manager (noscript)Digitall Marketig college may 6th 2020 -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVNRLTG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>

        <?php
        include('navbar copy 2.php');
        ?>
    </header>
    <section class="slider wow fadeIn" data-wow-delay=".2s">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                <!-- <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                <li data-target="#carousel-example-generic" data-slide-to="9"></li> -->

            </ol>
            <style>
                .carousel {
                    margin-top: 81px;
                }

                @media(max-width:767px) {
                    .carousel {
                        margin-top: 0px;
                    }
                }
            </style>



            <div class="carousel-inner">




                <div class="item active slide1"><img data-src="admin-kvgce\images\banner\11.jpg" src="admin-kvgce/images/banner/11.jpg">
                    <!-- <div class="carousel-caption carousel-caption-1">
                    </div> -->
                </div>





                <div class="item slide4"> <img data-src="admin-kvgce/images/banner/2.jpg" src="admin-kvgce/images/banner/2.jpg">
                    <!-- <div class="carousel-caption carousel-caption-1">
                    </div> -->
                </div>




                <div class="item   slide3"> <img data-src="admin-kvgce/images/banner/3.jpg" src="admin-kvgce/images/banner/3.jpg">
                    <!-- <div class="carousel-caption carousel-caption-1">
                    </div> -->
                </div>




                <div class="item   slide5"> <img data-src="admin-sjec/photos/slider/58.jpg" src="admin-kvgce/images/banner/5.jpg">
                    <!-- <div class="carousel-caption carousel-caption-1">
                    </div> -->
                </div>


                <div class="item   slide6"> <img data-src="admin-kvgce/photos/slider/42.jpg" src="admin-kvgce/images/banner/6.jpg">
                    <!-- <div class="carousel-caption carousel-caption-1">
                    </div> -->
                </div>

                <div class="item   slide7"> <img data-src="admin-kvgce/photos/slider/35.jpg" src="admin-kvgce/images/banner/9.jpg">
                    <!-- <div class="carousel-caption carousel-caption-1">
                    </div> -->
                </div>


            </div>


            <style>
                .box {
                    width: 40%;
                    margin: 0 auto;
                    background: rgba(255, 255, 255, 0.2);
                    padding: 35px;
                    border: 2px solid #fff;
                    border-radius: 20px/50px;
                    background-clip: padding-box;
                    text-align: center;
                }

                .button {
                    font-size: 1em;
                    padding: 10px;
                    color: #fff;
                    border: 2px solid #06D85F;
                    border-radius: 20px/50px;
                    text-decoration: none;
                    cursor: pointer;
                    transition: all 0.3s ease-out;
                }

                .button:hover {
                    background: #06D85F;
                }

                .overlay {
                    position: fixed;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    background: rgba(0, 0, 0, 0.7);
                    transition: opacity 500ms;
                    visibility: hidden;
                    opacity: 0;
                }

                .overlay:target {
                    visibility: visible;
                    opacity: 1;
                }

                .popup {
                    margin: 70px auto;
                    padding: 20px;
                    background: #fff;
                    border-radius: 5px;
                    width: 30%;
                    position: relative;
                    transition: all 5s ease-in-out;
                }

                .popup h2 {
                    margin-top: 0;
                    color: #333;
                    font-family: Tahoma, Arial, sans-serif;
                }

                .popup .close {
                    position: absolute;
                    top: 20px;
                    right: 30px;
                    transition: all 200ms;
                    font-size: 30px;
                    font-weight: bold;
                    text-decoration: none;
                    color: #333;
                }

                .popup .close:hover {
                    color: #06D85F;
                }

                .popup .content {
                    max-height: 30%;
                    overflow: auto;
                }

                @media screen and (max-width: 700px) {
                    .box {
                        width: 70%;
                    }

                    .popup {
                        width: 70%;
                    }
                }
            </style>


            <div id="popup1" class="overlay" style="z-index: 99999; position: fixed;">
                <div class="popup" style="top:30%; z-index: 999999;float: left;">
                    <center>
                        <div style="background-color: #005049;
                border: none;
                color: white;
                padding: 20px;
                padding-left: 15%;
                padding-right: 15%;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px; border-radius: 50px;"><strong>Student Corner</strong> </div>
                    </center>
                    <a class="close" href="#">&times;</a>

                    <button style="background-color: #02ad9f;
                        border: none;
                        color: white;
                        padding: 10px;
                        margin: 4px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;width:100%; border-radius: 2px">KVG Hostel</button>


                    <button style="background-color: #02ad9f;
                         border: none;
                         color: white;
                         padding: 10px;
                         margin: 4px;
                         text-align: center;
                         text-decoration: none;
                         display: inline-block;
                         font-size: 16px;width:100%; border-radius: 2px">Exam Notifications</button>
                    <button style="background-color: #02ad9f;
                    border: none;
                    color: white;
                    padding: 10px;
                    margin: 4px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;width:100%; border-radius: 2px">Students Info</button>
                    <button style="background-color: #02ad9f;
                    border: none;
                    color: white;
                    padding: 10px;
                    margin: 4px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;width:100%; border-radius: 2px">New Admission</button>

                </div>
            </div>


        </div>
        <a id="menu-toggle" href="#popup1" class="hidde-xs">
            <div class="parent">
                <span onclick="fireCredit()"><i class="fa fa-bell"></i></span>
            </div>
        </a>


    </section>

    <!--Copy this into your website or website generator, in the HTML section.-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <style>
        .news-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-content: space-between;
        }

        .article-container {
            text-decoration: none;
            color: black;
            display: flex;
            flex-direction: column;
            width: 28vw;
            /* Increase this value if you want more articles per row, decrease if you want less*/
            min-width: 150px;
            max-width: 700px;
            box-shadow: 2px 2px 25px 2px rgba(0, 0, 0, 0.9);
            margin: 20px;
            transition: 0.3s;
            font-size: 14px;
            font-family: 'Lora', serif;
        }

        @media only screen and (max-width: 850px) {
            .article-container {
                width: 90vw;
            }
        }

        .article-container:hover {
            transform: scale(1.02);
            box-shadow: 2px 2px 25px 2px rgba(139, 139, 139, 0.89);

        }

        .article-image {
            width: 100%;
            max-height: 100%;
        }

        .article-title {
            padding: 10px;
        }

        @media (max-width:767px) {
            #nw {
                font-size: 30px;
            }
        }
    </style> -->




    <!-- dept sec  -->
    <br><br><br>


    <!-- <div class="name">
        <strong>
            <div class="header-fullname" style="font-size: 30px;text-align: center;">
                News & Events</div>
        </strong>

    </div>
    <div class="tab-content margin-tops">

        <div class="tab-pane fade team active in" id="abouts">

            <div class="col-md-12">


                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingSix">
                                            <h4 class="panel-title" id="nw" style="text-align: justify;"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">TISHAN A M. participated in Agniveer 3Km road race(madikeri) </a> </h4>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                            <div class="panel-body">
                                                <p style="text-align: justify;">
                                                    Our proud First year CS student TISHAN A M. participated in Agniveer 3Km road race(madikeri)on
                                                    7-08-2022. won the ( 2nd place) silver medal. Out of 106 participants
                                                </p>
                                                <img src='images/newsandevents/tishan.jpeg' style="width: 50%;height: 50%;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title" id="nw" style="text-align: justify;"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Farewell 2022 was organized on 21st July 2022 </a> </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p style="text-align: justify;">
                                                    "Great is the art of beginning,but
                                                    greater is the art of ending" K V G C E organized FAREWELL-2022 for final year outgoing students
                                                    of 2022 batch was conducted in the college auditorium on 21st July 2022.The function was presided by
                                                    general secretary of A O L E(R) Dr Renukaprasad K V and Mr
                                                    .Sadashiva M B ,former district governor ,Lions international was
                                                    the chief guest of the function,along with the C E O of K V G C E Dr
                                                    Ujwal U J, Principal Dr Suresha V & Vice-prinipal Dr shreedhar K
                                                    shared the dais
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title" id="nw" style="text-align: justify;"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">" Project expo 2022 was conducted in
                                                    the college on 15th July 2022</a> </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <p style="text-align: justify;">
                                                    Here K V G C E is providing platform for students to showcase their
                                                    talent Presenting "EXPO-2K22" The student project exhibition.
                                                    The program was presided by CEO of KVGCE Dr Ujwal U J & the program
                                                    was initiated by Dr Yashodha Ramachandra,Principal KVG AJPUC Sullia,
                                                    with lighting the lamp.
                                                </p>
                                                <img src="images/newsandevents/expo1.jpeg" width="30%">
                                                <img src="images/newsandevents/expo2.jpeg" width="30%">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne" style="max-height: 0.1%;">
                                            <h4 class="panel-title" id="nw"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Annual day celebration @ KVGCE
                                                    "ADVITI-2022" </a> </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p style="text-align: justify;">"KVGCE celebrated its annual day program
                                                    in KVG Commuity hall,Amarashreebag Sullia.The function was presided
                                                    by general secretary of A O L E(R) Dr Renukaprasad K V and Mr
                                                    .Bhojaraja vamanjoor,actor Thulu and Kannada industry was the chief
                                                    guest of the function. </p>
                                                <p> As a guest of honour general council members of KVGCE Sullia
                                                    Mr Nithyananda Mundodi,Mr Somashekhar Koingaje & Mr Snathosh Jaake
                                                    shared the dais.</p>
                                                <p> Along with the C E O of K V G C E Dr Ujwal U J, Principal Dr Suresha
                                                    V , Vice-prinipal Dr shreedhar K ,VTU Special officer Dr Shivakumar
                                                    H R & Dean academic Dr Umashankar K S also shared the dais" </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title" id="nw" style="text-align: justify;"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> The NSS unit celebrated World
                                                    environmental day in college on 16-06-2022, </a> </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

                                        </div>
                                    </div>




                                </div>
                            </div> -->
    <!--- END COL -->
    <!-- </div> -->
    <!--- END ROW -->
    <!-- </div>
                </section> -->


    <!-- </div> -->


    <!-- <style>
                .responstable {
                    border-radius: 18px;
                }
            </style>


        </div> -->
















    <!-- </div> -->



    <!-- social media -->
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <style>
        /* Code By Webdevtrick ( https://webdevtrick.com ) */
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
        @import url(https://weloveiconfonts.com/api/?family=entypo);
        @import url(https://icongr.am/entypo/instagram.svg?size=78&color=currentColor);


        [class^="entypo-"]:before {
            font-family: 'entypo', sans-serif;
        }

        /* body {
  background: #e6e6e6; */
        /* } */
        #social-sidebar {
            left: 0;
            position: fixed;
            top: 30%;
            z-index: 989898;
            /* opacity: 0.7; */
        }

        @media (max-width:767px) {
            #social-sidebar {
                left: 0;
                position: fixed;
                top: 35%;
                z-index: 989898;
                opacity: 0.7;
            }
        }

        #social-sidebar li:first-child a {
            border-top-right-radius: 5px;
        }

        #social-sidebar li:last-child a {
            border-bottom-right-radius: 5px;
        }

        #social-sidebar a {
            background: rgba(0, 0, 0, 0.637);
            color: #fff;
            text-decoration: none;
            display: block;
            height: 50px;
            width: 50px;
            font-size: 24px;
            line-height: 50px;
            position: relative;
            text-align: center;
            cursor: pointer;
        }

        #social-sidebar a:hover span {
            left: 120%;
            opacity: 1;
        }

        #social-sidebar a span {
            font: 12px "Open Sans", sans-serif;
            text-transform: uppercase;
            border-radius: 3px;
            line-height: 24px;
            left: -100%;
            margin-top: -16px;
            opacity: 0;
            padding: 4px 8px;
            position: absolute;
            transition: opacity .3s, left .4s;
            top: 50%;
            z-index: -1;
        }

        #social-sidebar a span:before {
            content: "";
            display: block;
            height: 8px;
            width: 8px;
            left: -4px;
            margin-top: -4px;
            position: absolute;
            top: 50%;
            transform: rotate(45deg);
        }

        #social-sidebar a[class*="twitter"]:hover,
        #social-sidebar a[class*="twitter"] span,
        #social-sidebar a[class*="twitter"] span:before {
            background: #00aced;
        }

        #social-sidebar a[class*="facebook"]:hover,
        #social-sidebar a[class*="facebook"] span,
        #social-sidebar a[class*="facebook"] span:before {
            background: #3B5998;
        }

        #social-sidebar a[class*="gplus"]:hover,
        #social-sidebar a[class*="gplus"] span,
        #social-sidebar a[class*="gplus"] span:before {
            background: #E34429;
        }

        #social-sidebar a[class*="dribbble"]:hover,
        #social-sidebar a[class*="dribbble"] span,
        #social-sidebar a[class*="dribbble"] span:before {
            background: #ea4c89;
        }

        #social-sidebar a[class*="dropbox"]:hover,
        #social-sidebar a[class*="dropbox"] span,
        #social-sidebar a[class*="dropbox"] span:before {
            background: #8DC5F2;
        }

        #social-sidebar a[class*="github"]:hover,
        #social-sidebar a[class*="github"] span,
        #social-sidebar a[class*="github"] span:before {
            background: #9C7A5B;
        }

        #social-sidebar a[class*="instagrem"]:hover,
        #social-sidebar a[class*="instagrem"] span,
        #social-sidebar a[class*="instagrem"] span:before {
            background: #f62782;
        }
    </style>

    <ul id="social-sidebar">
        <li>
            <a class="entypo-twitter"><span>Tweeter</span></a>
        </li>

        <li>
            <a class="entypo-facebook" href="https://www.facebook.com/KVG-College-of-Engineering-105686592193925/?ref=page_internal" target="_blank"><span>Facebook</span></a>
        </li>

        <li>
            <a href="https://www.instagram.com/p/Cf5jQe2p1Bb/?utm_source=ig_web_button_share_sheet" class="entypo-instagrem" target="_blank"><span>instagram</span></a>
        </li>

    </ul>


    <!-- <-- puthiyath-->

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Open Sans";
        }

        body {
            background-color: lightblue;
        }

        .content-wrapper {
            margin: 0 auto;
            max-width: 1200px;
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            padding: 0.8rem;
        }

        .news-card {
            border: 0px solid aqua;
            margin: 0.5rem;
            position: relative;
            height: 12rem;
            overflow: hidden;
            border-radius: 0.5rem;
            flex: 1;
            min-width: 290px;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
        }

        @media (min-width: 900px) {

            .news-card {
                height: 20rem
            }
        }

        .news-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.7) 80%);
            ;
            z-index: 0;
        }

        .news-card__card-link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            /*     background: rgba(255,0,0,.5); */
        }

        .news-card__image {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform 3s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            position: relative;
            z-index: -1;
        }

        .news-card__text-wrapper {
            position: absolute;
            bottom: 0rem;
            padding: 1rem;
            color: white;
            /*     background-color: rgba(0, 0, 0, 0.4); */
            transition: background-color 1.5s ease;
        }

        .news-card__title {
            text-align: center;
            transition: color 1s ease;
            margin-bottom: .5rem;
        }

        .news-card__post-name {
            font-size: .7rem;
            margin-bottom: .5rem;
            padding-left: 5px;
            color: #CCC;
        }

        .news-card__details-wrapper {
            max-height: 0;
            opacity: 0;
            transition: max-height 1.5s ease, opacity 1s ease;
        }

        @media (min-width: 900px) {
            .news-card:hover .news-card__details-wrapper {
                max-height: 20rem;
                opacity: 1;
            }

            .news-card:hover .news-card__text-wrapper {
                background-color: rgba(0, 0, 0, 0.6);
            }

            .news-card:hover .news-card__title {
                text-align: center;
                color: yellow;
            }

            .news-card:hover .news-card__image {
                transform: scale(1.2);
                z-index: -1;
            }
        }

        .news-card__excerpt {
            font-weight: 300;
        }

        .news-card__read-more {
            background: black;
            color: #bbb;
            display: block;
            padding: 0.4rem 0.6rem;
            border-radius: 0.3rem;
            margin-top: 1rem;
            border: 1px solid #444;
            font-size: 0.8rem;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            text-decoration: none;
            width: 7rem;
            margin-left: auto;
            position: relative;
            z-index: 5;
        }

        .news-card__read-more i {
            position: relative;
            left: 0.2rem;
            color: #888;
            transition: left 0.5s ease, color 0.6s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .news-card__read-more:hover i {
            left: 0.2rem;
            color: yellow;
        }
    </style>


    <div class="content-wrapper">

        <div class="news-card">
            <a href="department-computer-science.php" class="news-card__card-link"></a>
            <img src="admin-kvgce/photos/slider/Highest-Paid-Programming-Languages-in-2019.jpg" alt="" class="news-card__image">
            <div class="news-card__text-wrapper">
                <h3 class="news-card__title">Computer Science & Engineering</h3>
                <!-- <div class="news-card__post-name">Tag Body</div> -->


            </div>
        </div>

        <div class="news-card">
            <a href="department-computer-science.php" class="news-card__card-link"></a>
            <img src="admin-kvgce/photos/slider/Ethical-Problem-of-Artificial-Intelligence-4.jpg" alt="" class="news-card__image">
            <div class="news-card__text-wrapper">
                <h3 class="news-card__title">Computer Science Engineering(AI & ML)</h3>


            </div>
        </div>

        <div class="news-card">
            <a href="department-ECE.php" class="news-card__card-link"></a>
            <img src="admin-kvgce/photos/slider/c3.jpg" alt="" class="news-card__image">
            <div class="news-card__text-wrapper">
                <h3 class="news-card__title">Electronics & Communication Engineering</h3>

            </div>
        </div>

        <div class="news-card">
            <a href="department-mech.php" class="news-card__card-link"></a>
            <img src="admin-kvgce/photos/slider/eng_1200x768.webp" alt="" class="news-card__image">
            <div class="news-card__text-wrapper">
                <h3 class="news-card__title">Mechanical Engineering</h3>

            </div>
        </div>

        <div class="news-card">
            <a href="department-civil.php" class="news-card__card-link"></a>
            <img src="admin-kvgce/photos/slider/Civil-Engineerng.jpg" alt="" class="news-card__image">
            <div class="news-card__text-wrapper">
                <h3 class="news-card__title">Civil Engineering</h3>

            </div>
        </div>



    </div>

    <!-- puthiyath close -->

    <br><br>

    <!-- news -->

    <style class="u-style">
        .u-section-2 .u-sheet-1 {
            min-height: 500px
        }

        .u-section-2 .u-slider-1 {
            width: 1140px;
            margin-top: 63px;
            margin-bottom: 60px;
            min-height: 375px
        }

        .u-section-2 .u-carousel-indicators-1 {
            position: absolute;
            bottom: 10px
        }

        .u-section-2 .u-container1-layout-1 {
            padding: 30px 60px
        }

        .u-section-2 .u-shape-1 {
            width: 272px;
            height: 272px;
            background-image: none;
            margin: 0 auto 0 0
        }

        .u-section-2 .u-image-1 {
            width: 276px;
            height: 276px;
            margin: -236px auto 0 38px
        }

        .u-section-2 .u-text-1 {
            font-size: 3rem;
            margin: -276px 0 0 375px
        }

        .u-section-2 .u-text-2 {
            margin: 20px 0 0 375px
        }

        .u-section-2 .u-btn-1 {
            margin: 20px auto 0 284px;
            padding: 10px 76px 10px 75px
        }

        .u-section-2 .u-container1-layout-2 {
            padding: 30px 60px
        }

        .u-section-2 .u-shape-2 {
            width: 272px;
            height: 272px;
            background-image: none;
            margin: 0 auto 0 0
        }

        .u-section-2 .u-image-2 {
            width: 276px;
            height: 276px;
            margin: -236px auto 0 38px
        }

        .u-section-2 .u-text-3 {
            font-size: 3rem;
            margin: -276px 0 0 377px
        }

        .u-section-2 .u-text-4 {
            margin: 20px 0 0 377px
        }

        .u-section-2 .u-btn-2 {
            margin: 20px auto 0 284px;
            padding: 10px 76px 10px 75px
        }

        .u-section-2 .u-carousel-control-1 {
            width: 50px;
            height: 50px
        }

        .u-section-2 .u-carousel-control-2 {
            width: 50px;
            height: 50px;
            left: auto;
            position: absolute;
            right: 0
        }

        @media (max-width: 1199px) {
            .u-section-2 .u-sheet-1 {
                min-height: 430px
            }

            .u-section-2 .u-slider-1 {
                width: 940px
            }

            .u-section-2 .u-text-1 {
                width: auto;
                margin-left: 350px
            }

            .u-section-2 .u-text-2 {
                width: auto;
                margin-left: 350px
            }

            .u-section-2 .u-btn-1 {
                margin-left: 261px
            }

            .u-section-2 .u-text-3 {
                width: auto;
                margin-left: 350px
            }

            .u-section-2 .u-text-4 {
                width: auto;
                margin-left: 350px
            }

            .u-section-2 .u-btn-2 {
                margin-left: 272px
            }
        }

        @media (max-width: 991px) {
            .u-section-2 .u-sheet-1 {
                min-height: 353px
            }

            .u-section-2 .u-slider-1 {
                width: 720px
            }

            .u-section-2 .u-container1-layout-1 {
                padding-left: 55px
            }

            .u-section-2 .u-text-1 {
                margin-left: 334px;
                font-size: 2.25rem
            }

            .u-section-2 .u-text-2 {
                margin-left: 334px
            }

            .u-section-2 .u-btn-1 {
                margin-left: 101px
            }

            .u-section-2 .u-text-3 {
                margin-left: 334px;
                font-size: 2.25rem
            }

            .u-section-2 .u-text-4 {
                margin-left: 334px
            }

            .u-section-2 .u-btn-2 {
                margin-left: 112px
            }
        }

        @media (max-width: 767px) {
            .u-section-2 .u-sheet-1 {
                min-height: 760px
            }

            .u-section-2 .u-slider-1 {
                min-height: 635px;
                height: auto;
                width: auto
            }

            .u-section-2 .u-container1-layout-1 {
                padding-left: 10px;
                padding-right: 10px
            }

            .u-section-2 .u-text-1 {
                margin-top: 36px;
                margin-left: 50px
            }

            .u-section-2 .u-text-2 {
                margin-left: 50px
            }

            .u-section-2 .u-btn-1 {
                margin-left: 0
            }

            .u-section-2 .u-container1-layout-2 {
                padding-left: 10px;
                padding-right: 10px
            }

            .u-section-2 .u-text-3 {
                margin-top: 20px;
                margin-left: 50px
            }

            .u-section-2 .u-text-4 {
                margin-left: 50px
            }

            .u-section-2 .u-btn-2 {
                margin-left: 0
            }
        }

        @media (max-width: 575px) {
            .u-section-2 .u-sheet-1 {
                min-height: 578px
            }

            .u-section-2 .u-text-1 {
                margin-left: 0;
                font-size: 1.5rem
            }

            .u-section-2 .u-text-2 {
                margin-left: 0
            }

            .u-section-2 .u-text-3 {
                margin-left: 0;
                font-size: 1.5rem
            }

            .u-section-2 .u-text-4 {
                margin-left: 0
            }
        }
    </style>


    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="css/nicepage.css" media="screen">


    </head>

    <body>

        <section class="u-clearfix u-section-2" id="sec-96fa">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div id="carousel-cbd7" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
                    <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                        <li data-u-target="#carousel-cbd7" class="u-grey-30" data-u-slide-to="0"></li>
                        <li data-u-target="#carousel-cbd7" class="u-grey-30" data-u-slide-to="1"></li>
                        <li data-u-target="#carousel-cbd7" class="u-grey-30" data-u-slide-to="2"></li>
                    </ol>
                    <div class="u-carousel-inner" role="listbox">
                        <div class="active u-active u-carousel-item u-container1-style u-slide">
                            <div class="u-container1-layout u-valign-top u-container1-layout-1">
                                <div class="u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
                                <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/2289b709ea7f564db3a0f67e/Untitled-5.jpg?version=" alt="" class="u-image u-image-default u-image-1" data-image-width="720" data-image-height="1080">
                                <h2 class="u-text u-text-1">Elite&nbsp;Personal Training&nbsp;Studio‎</h2>
                                <p class="u-text u-text-palette-5-dark-1 u-text-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                <a href="https://nicepage.com" class="u-btn u-button-style u-btn-1">Read More</a>
                            </div>
                        </div>
                        <div class="u-carousel-item u-container1-style u-slide">
                            <div class="u-container1-layout u-valign-top u-container1-layout-2">
                                <div class="u-palette-1-base u-shape u-shape-rectangle u-shape-2"></div>
                                <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/50131c00883351249f31cb44/action-activity-adult-attack-260447.jpg?version=" alt="" class="u-image u-image-default u-image-2" data-image-width="1600" data-image-height="1067">
                                <h2 class="u-text u-text-3">Elite&nbsp;Personal Training&nbsp;Studio‎</h2>
                                <p class="u-text u-text-palette-5-dark-1 u-text-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                <a href="https://nicepage.com" class="u-btn u-button-style u-btn-2">Read More</a>
                            </div>
                        </div>
                        <div class="u-carousel-item u-container1-style u-slide">
                            <div class="u-container1-layout u-valign-top u-container1-layout-2">
                                <div class="u-palette-1-base u-shape u-shape-rectangle u-shape-2"></div>
                                <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/50131c00883351249f31cb44/action-activity-adult-attack-260447.jpg?version=" alt="" class="u-image u-image-default u-image-2" data-image-width="1600" data-image-height="1067">
                                <h2 class="u-text u-text-3">Elite&nbsp;Personal Training&nbsp;Studio‎</h2>
                                <p class="u-text u-text-palette-5-dark-1 u-text-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                <a href="https://nicepage.com" class="u-btn u-button-style u-btn-2">Read More</a>
                            </div>
                        </div>
                    </div>

                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-spacing-5 u-text-palette-1-base u-carousel-control-1" href="#carousel-cbd7" role="button" data-u-slide="prev">
                        <span aria-hidden="true">
                            <svg viewBox="0 0 477.175 477.175">
                                <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
                            </svg>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-spacing-5 u-text-palette-1-base u-carousel-control-2" href="#carousel-cbd7" role="button" data-u-slide="next">
                        <span aria-hidden="true">
                            <svg viewBox="0 0 477.175 477.175">
                                <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path>
                            </svg>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>







        <!-- end news -->

        <!-- fews word  -->
        <section class="home-facts-bg">
            <div class="container">
                <div class="col-md-12">
                    <h2 class="subheadWhite head">KVG College of Engineering<span></span></h2>
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

                        < !-- body {
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
                            width: 150rem;
                            min-width: 80px;
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
                        #myBtn1 {
                            display: none;
                        }

                        @media (max-width:767px) {

                            /* #nobq{display: none;} */
                            #more1 {
                                display: none;
                            }

                            #myBtn1 {
                                display: inline;
                            }
                        }
                    </style>
                    <center>
                        <div class="card1">
                            <div class="img">
                                <img src="images/KVGCE-Logo.png" style="margin-bottom: 50px">
                            </div>
                            <div class="infos">
                                <div class="name">

                                    <strong>
                                        <div class="header-fullname" style="font-size: 20px;">A Few Words
                                            About the KVG college of engineering sullia</div>
                                    </strong>

                                </div>

                                <ul class="stats1">
                                    <li>
                                        <blockquote id="nobq">
                                            <p style="text-align: justify;"><span id="dots1"></span><span id="more1"> "KVG
                                                    College of Engineering is one of the most reputed engineering colleges
                                                    in Karnataka, India. The engineering college, started in 1986, was one
                                                    of the first private sector initiatives in technical education in
                                                    Dakshina Kannada District.
                                                    Popularly known as KVGCE, it is located in Kurunjibhag, Sullia, Dakshina
                                                    Kannada. K.V.G. College of Engineering sponsored by Academy of Liberal
                                                    Education (R) Sullia D.K. and is one of the largest mega educational
                                                    complexes in India."</span></p>
                                            <button onclick="myreadmoreFunction()" id="myBtn1">Read more...</button>
                    </center>
                    </blockquote>
                    <center>


                        </li>
                        </ul>


                </div>
            </div>
            </div>
            </center>

            </div>
            </div>
            <script>
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
        </section>








        <!-- few word1 -->
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
                background: url(https://rvs-article-preview-component.netlify.app/images/drawers.jpg);
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
        <!-- <body>
<main id="about">
        <div class="card7">
            <div class="card7-left">
                <div class="card7-img"></div>
            </div>
            <div class="card7-right">
                <div class="card7-title fw-7">Shift the overall look and feel by adding these wonderful touches to furniture in your home</div>
                <div class="card7-text fw-5">To be a Notable Engineering College Recognized for Academics, Innovation and the Societal Relevance and Impact of its Pursuits.</div>
                <div class="card7-right-body">
                    <div class="card7-rb-1">
                        <img src="images/KVGCE-Logo.png" alt="">
                    </div>
                    <div class="card7-rb-2">
                        <div class="card7-rb-2-title fw-7">Michelle Appleton</div>
                        <div class="card7-rb-2-text fw-5">28 Jun 2020</div>
                    </div>
                    <div class="card7-rb-3">
                        <div class="card7-rb-3-inner"></div>
                        <div class="card7-rb-3-inner-before">
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

        <!-- few word1 end -->
        <!-- gallery1 -->
        <div class="imageContainer">
            <style>
                .imageContainer>img:hover {
                    width: 500px;
                    height: 200px;
                }
            </style>
            <div class="row">

                <style>
                    .row {
                        display: flex;
                        flex-wrap: wrap;
                        padding: 0 4px;
                    }

                    /* Create four equal columns that sits next to each other */
                    .column {
                        flex: 25%;
                        max-width: 25%;
                        padding: 0 4px;
                    }

                    .column img {
                        margin-top: 8px;
                        vertical-align: middle;
                        width: 100%;
                    }

                    /* Responsive layout - makes a two column-layout instead of four columns */
                    @media screen and (max-width: 800px) {
                        .column {
                            flex: 50%;
                            max-width: 50%;
                        }
                    }

                    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
                    @media screen and (max-width: 600px) {
                        .column {
                            flex: 100%;
                            max-width: 100%;
                        }
                    }
                </style>



                <div class="column">


                    <img src="images/department/cs/wifli.jpg">


                    <img src="images/department/cs/lib.jpg">

                    <img src="images/department/cs/group1.jpg">

                    <img src="images/department/cs/1styesar.jpg">
                </div>
                <div class="column">
                    <img src="images/department/cs/1year2.jpg">


                    <img src="images/department/cs/civil1.jpg">

                    <img src="images/department/cs/civil2.jpg">



                    <img src="images/department/cs/placement.jpg">
                </div>
                <div class="column">

                    <img src="images/department/cs/ec1.jpg">

                    <img src="images/department/cs/mba1.jpg">

                    <img src="images/department/cs/placement2.jpg">

                    <img src="images/department/cs/campus.jpg">

                </div>
                <div class="column">

                    <img src="images/department/cs/mba2.jpg">

                    <img src="images/department/cs/management.jpg">


                    <img src="images/department/cs/first1.jpg">

                    <img src="images/department/cs/first2.jpg">

                    <img src="images/department/cs/first3.jpg">
                </div>
            </div>

        </div>
        <script>
            let item2s = document.querySelectorAll(".item2"),
                viewer23 = document.querySelector(".viewer23 img");
            document.querySelector(".viewer23 .close23").onclick = () => {
                document.querySelector("body").classList.toggle("overlay23ed");
            };
            item2s.forEach((item2) => {
                item2.onclick = () => {
                    let content = item2.querySelector(".img img");
                    viewer23.setAttribute("src", content.getAttribute("src"));
                    document.querySelector(".viewer23 .alt1").innerHTML = item2.querySelector(
                        ".title2"
                    ).innerHTML;
                    document.querySelector("body").classList.toggle("overlay23ed");
                };
            });

            ["load", "scroll"].forEach((eventName) => {
                window.addEventListener(eventName, (event) => {
                    document.querySelectorAll(".fluid-container1").forEach((item2) => {
                        if (isScrolledIntoView(item2)) {
                            item2.classList.add("inScreen");
                        } else {
                            item2.classList.remove("inScreen");
                        }
                    });
                });
            });

            function isScrolledIntoView(el) {
                let rect = el.getBoundingClientRect();
                let elemTop = rect.top;
                let elemBottom = rect.bottom;
                let isVisible = elemTop >= -300 && elemBottom <= screen.height + 300;
                return isVisible;
            }
        </script>


        <!-- endgallery1 -->
        <br><br>
        <!-- logo slider begin -->

        <style>
            /*Logo carousel*/

            #clients {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            #clients .clients-wrap {
                display: block;
                width: 100%;
                margin: 0 auto;
                overflow: hidden;
            }

            #clients .clients-wrap ul {
                display: block;
                list-style: none;
                position: relative;
                margin-left: auto;
                margin-right: auto;
            }

            #clients .clients-wrap ul li {
                display: block;
                float: left;
                position: relative;
                width: 220px;
                height: 100px;
                line-height: 100px;
                text-align: center;
            }

            #clients .clients-wrap ul li img {
                vertical-align: middle;
                max-width: 100%;
                max-height: 100%;
                -webkit-transition: 0 linear left;
                -moz-transition: 0 linear left;
                transition: 0 linear left;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=65)";
                filter: alpha(opacity=65);
                opacity: 1.0;
            }

            #clients .clients-wrap ul li img:hover {
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=75)";
                filter: alpha(opacity=75);
                opacity: 0.75;
            }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <div id="clients">
            <div class="clients-wrap">
                <ul id="clients-list" class="clearfix">
                    <li>
                        <img src="images/Clients/Ample.gif" alt="Black Ace">
                    </li>
                    <li>
                        <img src="images/Clients/Bosch.png" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Global Edge.jpg" alt="Custom Aire">
                    </li>
                    <li>
                        <img src="images/Clients/HP.jpg" alt="First State Bank">
                    </li>
                    <!-- <li>
                    <img src="images/Clients/Huawei.jpg" alt="Dakota Molding">
                </li> -->
                    <li>
                        <img src="images/Clients/IBM.jpg" alt="Dakota Peat">
                    </li>
                    <li>
                        <img src="images/Clients/Indian Army.gif" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Infosys.jpg" alt="Eastbay Campground">
                    </li>
                    <li>
                        <img src="images/Clients/JSW.jpg" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Larsen Toubro.jpg" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Magna Infotech.gif" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Mindtree.png" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/MU Sigma.jpg" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Neo Bytes.jpg" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Quinnox.png" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Robosoft.jpeg" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Sankalp.gif" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Sasken.png" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/SLK Software.jpg" alt="First State Bank">
                    </li>
                    <li>
                        <img src="images/Clients/Tech Jini.png" alt="First State Bank">
                    </li>
                </ul>
            </div>
        </div>
        <script>
            $(function() {
                // vars for clients list carousel
                // http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
                var $clientcarousel = $('#clients-list');
                var clients = $clientcarousel.children().length;
                var clientwidth = (clients * 220); // 140px width for each client item 
                $clientcarousel.css('width', clientwidth);

                var rotating = true;
                var clientspeed = 0;
                var seeclients = setInterval(rotateClients, clientspeed);

                $(document).on({
                    mouseenter: function() {
                        rotating = true; // turn off rotation when hovering
                    },
                    mouseleave: function() {
                        rotating = true;
                    }
                }, '#clients');

                function rotateClients() {
                    if (rotating != false) {
                        var $first = $('#clients-list li:first');
                        $first.animate({
                            'margin-left': '-220px'
                        }, 2000, function() {
                            $first.remove().css({
                                'margin-left': '0px'
                            });
                            $('#clients-list li:last').after($first);
                        });
                    }
                }
            });
        </script>

        <!-- logo slider end -->
        <br>








        <script>
            // Get the elements with class="column"
            var elements = document.getElementsByClassName("column");

            // Declare a loop variable
            var i;

            // // Full-width images
            // function one() {
            //     for (i = 0; i < elements.length; i++) {
            //     elements[i].style.msFlex = "100%";  // IE10
            //     elements[i].style.flex = "100%";
            //   }
            // }

            // // Two images side by side
            //     function two() {
            //         for (i = 0; i < elements.length; i++) {
            //     elements[i].style.msFlex = "50%";  // IE10
            //     elements[i].style.flex = "50%";
            //   }
            //     }
            // Four images side by side
            function four() {
                for (i = 0; i < elements.length; i++) {
                    elements[i].style.msFlex = "25%"; // IE10
                    elements[i].style.flex = "25%";
                }
            }

            // Add active class to the current button (highlight it)
            var header = document.getElementById("myHeader");
            var btns = header.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script>



        </div>
        </div>
        </section>


        <section class="pn_reviews my-5">
            <?php include 'testi.php'; ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center pb-5">Testimonials</h1>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="pn_testimonial_box mt-4">
                            <p class="text-justify">KVG college of engineering, Sullia provides a blend of learning, enjoyment & extracurricular activities. As a student I had an effervescent life during my 4 years of campus. My sincere heartfelt gratitude to Training and Placement Department for their efforts in importing quality technical and aptitude training which made me to grab job apportiunities in TCS, Infosys and IBM.
                            </p>

                            <div class="row pt-3">
                                <div class="col-md-6 pn_review_profile"><img src="images/testimonials/ashwitha.jpg" class="border-radius-12 float-right" alt="client image" /> <span> </span> </div>
                                <div class="col-md-6 pn_review_rating d-flex justify-content-end"> Ashwini H K &nbsp; <img class="image-radius aligncenter" src="https://desklib.com/static/src/assets/images/v2/star_rating.svg" alt="client stars image" /> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="pn_testimonial_box mt-4">
                            <p class="text-justify">Its gives me an immense pleasure to say that I am a proud alumina of KVG college of engineering, Sullia. I graduated back in 2017. I couldn’t be happier about my way the carrier path is progressing. I am over big share gratitude to this institution. I am really thankful and grateful to each and every faculty who has helped me and nurtured me to be what I am today. Just as a same goes one cannot clap without two hands
                            </p>
                            <div class="row pt-3">
                                <div class="col-md-6 pn_review_profile"><img src="images/testimonials/arpitha.jpg" class="border-radius-12 float-right" alt="client image" /> <span> </span> </div>
                                <div class="col-md-6 pn_review_rating d-flex justify-content-end"> Arpitha K S &nbsp; <img class="image-radius aligncenter" src="https://desklib.com/static/src/assets/images/v2/star_rating.svg" alt="client stars image" /> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="pn_testimonial_box mt-4">
                            <p class="text-justify">My overall experience has been amazing, and the college is having a good infrastructure. It has provided me with a number of opportunities to grow and explore my skills. I have always found a positive and healthy environment and the faculties were highly supportive. My heartfelt gratitude to Training and Placement cell for their immense support which made me to get placed in Talentpace,Cognitive Clouds and Capgemimi.
                            </p>
                            <div class="row pt-3">
                                <div class="col-md-6 pn_review_profile"><img src="images/testimonials/ajna.jpg" class="border-radius-12 float-right" alt="client image" /> <span> </span> </div>
                                <div class="col-md-6 pn_review_rating d-flex justify-content-end"> Ajna H M &nbsp; <img class="image-radius aligncenter" src="https://desklib.com/static/src/assets/images/v2/star_rating.svg" alt="stars image" /> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer> -->

        <?php include('footer.php') ?>

        <!-- endfooter -->



    </body>


</html>