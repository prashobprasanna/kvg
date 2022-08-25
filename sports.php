<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sjec.ac.in/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Apr 2022 12:11:43 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->



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
        <div><img src="images/banner/sports.jpg" class="img-responsive"></div>
    </section>

    <section class="home-facts-bg">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head">Head of Department<span></span></h2>
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
                <center>
                    <div class="card1">
                        <div class="img">
                            <img src="admin-kvgce/photos/faculty/sports/bhasker.jpg" style="padding:0;width:900px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" style="font-size: 20px;">Mr. Bhaskar S Belegadde</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">

                                    <div class="stats-title"></div>
                                </div>
                            </div>
                            <p class="text">
                                <strong> BA, M.PEd, M.Phil, M.A,.(PhD)</strong>
                            </p>
                            <ul class="stats1" style="text-align:justify" <li>
                                <blockquote>
                                    It is important to distinguish between an "active sports" - a sport that a person exercises for her/his health, fun and recreation.

                                    Sport is all forms competitive physical activity which, through casual or organised participation, aim to use, maintain or improve physical fitness and provide entertainment to participants. Hundreds of sports exist, from those requiring only two participants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals.
                                </blockquote>
                                </li>
                            </ul>
                            <div class="links1">
                                <!-- <button class="follow">Follow</button> -->
                                <button class="view">MORE</button>
                            </div>
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section>

    <section class="home-content-top inner-page-bg pad90">
        <div class="container">

            <!--our-quality-shadow-->
            <div class="clearfix"></div>
            <div class="tabbable-panel margin-tops4 ">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs tabtop  tabsetting">
                        <li class="active"> <a href="#abouts" data-toggle="tab"> Activities </a> </li>

                        <li> <a href="#Facility" data-toggle="tab">Gallery </a> </li>


                        <!-- <li> <a href="#activities" data-toggle="tab"> Activities </a> </li> -->
                        <!-- <li> <a href="#research-centre" data-toggle="tab"> Research Centre </a> </li> -->



                        <!--<li> <a href="#tab_default_9" data-toggle="tab" class="thbada"> Best Practices</a> </li>-->
                    </ul>




                    <div class="tab-content margin-tops">

                        <div class="tab-pane fade team active in" id="abouts">

                            <div class="col-md-12">
                                <section class="inner-page-bg" style="padding:0; height:fit-content;"> <br>
                                    <div class="container inner-page shd" style=" border:3px solid rgb(59, 13, 0); border-radius:18px">
                                        <!-- About Computer Science -->
                                        <div class="conainer">
                                            <!-- <strong><h1 style="font-family:Helvetica, Arial, sans-serif;">About :</h1></strong> -->
                                            <hr>
                                            <div class="data_more_less">
                                                <div class="data_more_less_inner" data-height="300" data-increase-by="400">
                                                    <div class="data_more_less_body" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:15px;">

                                                        <ul class="list">
                                                            <li> Vikyath P.G. 3rd sem. Mechanical Engineering selected Boxing VTU team on
                                                                26-11-2021.
                                                            </li>
                                                            <li> Kabaddi team participated in Mangaluru Zone on 14th and 15th December 2021 at SVITM, Bantkal, Udupi.</li>
                                                            <li> Our college team participated in VTU zone and inter zone Volley ball on 29th & 30th November 2021 at VCET, Puttur.</li>
                                                            <li> Our Football team participated in Mangaluru zone on 27th and 28th December at Yenapoya I.T, Moodbidri .</li>
                                                            <li> Girls Kabaddi team Secured 1st place in Zonal level tournament at B.I.T.E., Davanagere from 13th and 14th December 2021.</li>
                                                            <li> Girls Kabaddi team Secured 2nd place in Inter Zonal level tournament at K.S.I.T, Bengaluru from 16th and 17th December 2021.
                                                                Varsha U.V.(MBA), Shreya K.D.(MBA), Neha (MBA), Ramya K.(E&C), Veenashree P.B. (E&C), Rajani (E&C), Pooja G. (E&C), Poornima G.K.(CS&E), Savitha B.(E&C), Vasundara Devi M. (E&C) & S. Jeenitha (CS&E)
                                                            </li>
                                                            <li> Varsha U.V.(MBA) and Poornima G.K.(CS&E) selected for VTU Kabaddi team. Played inter-university tournament from 22nd to 26th of February 2022 at Alagappa University, Tamilnadu.</li>
                                                            <li> Mr. Bhaskar S. Belegadde appointed as VTU Yogasana team selection committee member on 18th and 19th December 2021.</li>
                                                            <li> And also appointed as VTU cross country team selection committee member on 26th and 27th February 2022.</li>
                                                            <li> Tishan, 1st Year CS&E scored 6th place in VTU Cross country held at VKIT, Kumbalgodu, Bengaluru on 26th and 27th February 2022 and he Selected for All India VTU team.</li>
                                                            <li> Darshan T.M, 1st Year E&C played 50th Senior men national championship at Sirsa, Hariyana on 20th to 24th March 2022. </li>
                                                            <li> Vikyath P.G. participated in VTU team, tournament at Dr. Ram Manohar Lohia Avadh University, from 20th & 23rd April 2022.</li>
                                                            <li>Organized college athletic meet on 23-04-2022. Dr. Renuka Prasad K.V, General Secretary, AOLE(R) inaugurated the athletic meet and Mr. Rajesh Bollaje, Alumni of our college and played VTU Kabaddi team was Chief Guest of the function.
                                                                Mr. Likhith K.P, 8th sem. Mechanical and Ms. Kavya D.K, 1st sem. MBA became the individual champion in Men and Women section respectively.
                                                            </li>
                                                            <li> V8 Flood light cricket tournament conducted on 07-05-2022 at K V G play ground. Innuagrated by Dr. Renuka Prasad K V, General Secretary AOLE(R), Sullia, Vice president rajya vokkaligara sangha. V8 winners are MBA Managers, runners E & C Vikings.</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="#" class="action_more" style="border-radius: 18px;"><button type="button" class="btn btn-outline-primary">Read More</button></a>
                                                <a href="#" class="action_less" style="border-radius: 18px;"><button type="button" class="btn btn-outline-primary">Read Less</button></a>
                                            </div>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                            <script>
                                                function actionMoreLess() {
                                                    var boxOuter = ".data_more_less",
                                                        boxInner = ".data_more_less_inner",
                                                        boxBody = ".data_more_less_body",
                                                        showMore = $(".action_more"),
                                                        showLess = $(".action_less");
                                                    $(boxInner).each(function() {
                                                        var $this = $(this),
                                                            bodyDataH = $this.find(boxBody).height();
                                                        $this.css("max-height", $this.data("height"));
                                                        var $thisH = $this.height();
                                                        if (bodyDataH > $thisH) {
                                                            $this.closest(boxOuter).removeClass("action_disabled");
                                                        } else {
                                                            $this.closest(boxOuter).addClass("action_disabled");
                                                        }
                                                    })
                                                    showMore.click(function(e) {
                                                        e.preventDefault();
                                                        var $this = $(this),
                                                            boxInnerH = $this.closest(boxOuter).find(boxInner).height(),
                                                            boxInnerUpdate = boxInnerH + $this.closest(boxOuter).find(boxInner).data("increase-by"),
                                                            boxBodyH = $this.closest(boxOuter).find(boxBody).height();
                                                        setTimeout(function() {
                                                            if (boxBodyH > boxInnerUpdate) {
                                                                $this.closest(boxOuter).removeClass("less_active").find(boxInner).css("max-height", boxInnerUpdate);
                                                            } else {
                                                                $this.closest(boxOuter).addClass("less_active").find(boxInner).css("max-height", "none");
                                                            }
                                                        }, 10);
                                                    });
                                                    showLess.click(function() {
                                                        $(this).closest(boxOuter).removeClass("less_active").find(boxInner).css("max-height", $(this).closest(boxOuter).find(boxInner).data("height"));
                                                        return false;
                                                    });
                                                }
                                                actionMoreLess();
                                            </script>
                                        </div>
                                        <!-- Stats -->

                                    </div>
                                    <br>
                                </section>



                            </div>


                            <style>
                                .responstable {
                                    border-radius: 18px;
                                }
                            </style>


                        </div>

                        <div class="tab-pane  fade " id="Faculty">
                            <!-- <ul class="nav nav-tabs tabtop tabsetting">
                                    <li class="active">
                                        <a href="#teaching-faculty" data-toggle="tab">Teaching Faculty</a>
                                    </li>
                                    <li>
                                        <a href="#research-faculty" data-toggle="tab">Research Centre Faculty</a>
                                    </li>
                                    <li>
                                        <a href="#technical-faculty" data-toggle="tab">Technical & Supporting Staff</a>
                                    </li>
                                </ul>-->
                            <div class="tab-content faculty-tab-content responsive">
                                <!-- teaching staff starts-->
                                <div class="tab-pane active fade in" id="teaching-faculty">
                                    <div class="row">
                                        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

                                        <style>
                                            #team {
                                                padding: 60px 0;
                                                text-align: center;
                                                background-color: #d1d1d1;
                                                color: #145889;
                                            }

                                            #team h2 {
                                                position: relative;
                                                padding: 0px 0px 15px;
                                            }

                                            #team p {
                                                font-size: 15px;
                                                font-style: italic;
                                                padding: 0px;
                                                margin: 25px 0px 40px;
                                            }

                                            #team h2::after {
                                                content: '';
                                                border-bottom: 2px solid #fff;
                                                position: absolute;
                                                bottom: 0px;
                                                right: 0px;
                                                left: 0px;
                                                width: 90px;
                                                margin: 0 auto;
                                                display: block;
                                            }

                                            #team .member {
                                                margin-bottom: 20px;
                                                position: relative;
                                                overflow: hidden;
                                                background-color: #ffffff;
                                                padding: 10px;
                                                border-radius: 15px 0px 15px 0px;
                                                box-shadow: 0px 1px 6px 0px rgba(0, 0, 0, 0.4);
                                            }

                                            #team .member .member-info {
                                                display: block;
                                                position: absolute;
                                                bottom: 0px;
                                                left: -200px;
                                                transition: 0.4s;
                                                padding: 15px 0;
                                                background: rgba(0, 0, 0, 0.4);
                                            }

                                            #team .member:hover .member-info {
                                                left: 0px;
                                                right: 0px;
                                            }

                                            #team .member h4 {
                                                font-weight: 700;
                                                margin-bottom: 2px;
                                                font-size: 18px;
                                                color: #fff;
                                            }

                                            #team .member span {
                                                font-style: italic;
                                                display: block;
                                                font-size: 13px;
                                            }

                                            #team .member .social-links {
                                                margin-top: 15px;
                                            }

                                            #team .member .social-links a {
                                                transition: none;
                                                color: #fff;
                                            }

                                            #team .member .social-links a:hover {
                                                color: #ffc107;
                                            }

                                            #team .member .social-links i {
                                                font-size: 18px;
                                                margin: 0 2px;
                                            }

                                            .col-lg-3 {
                                                float: left;
                                                margin-left: 6.5%;
                                            }
                                        </style>
                                        <section id="team">
                                            <div class="container">
                                                <!-- <div class="row justify-content-center">
                    <div class="col-md-6">
                      <h2>Meet Our Team</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text</p>
                    </div>
                </div> -->
                                                <div class="row" style="align-items:center">
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="images/department/library/gangadhara.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mr. Gangadhara N</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="images/department/library/harinakshi.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mrs. Harinakshi A</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="images/department/library/jagadeesh.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mr. Jagadeesh K R</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="images/department/library/hemalatha.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mrs. Hemalatha </h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="tab-pane fade" id="Facility">
                            <div class="row">

                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/one.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/two.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/four.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/five.jpg">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/six.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/seven.jpg">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/eight.jpg">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/nine.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/ten.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="images/sports/GALLARY/eleven.jpg">
                                    </div>
                                </div>

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

<!-- Mirrored from www.sjec.ac.in/department-computer-science.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Apr 2022 12:11:44 GMT -->

</html>