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
        <div><img src="images/banner/lib.jpg" class="img-responsive"></div>
    </section>

    <section class="home-facts-bg">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head">HEAD OF DEPARTMENT<span></span></h2>
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
                            <img src="images/department/library/librarian.jpg">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" style="font-size: 30px;">MR. SEETHARAMA P B</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">

                                    <div class="stats-title">B.A, M.L.I.Sc, M.Phil</div>
                                </div>
                            </div>
                            <p class="text">
                                <strong> library@kvgengg.com &nbsp;&nbsp;&nbsp;08257-235065</strong>
                            </p>
                            <ul class="stats1">
                                <li>
                                    <blockquote>
                                        A student is successful if the knowledge imparted in the engineering education and
                                        the
                                        skills developed by him can be effectively utilized in his life after his education
                                        and
                                        is able to contribute to the society and the socio-economic development of the
                                        country.
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
                        <li class="active"> <a href="#abouts" data-toggle="tab"> About </a> </li>
                        <li> <a href="#Faculty" data-toggle="tab"> Faculty </a> </li>
                        <li> <a href="#Facility" data-toggle="tab">Facility </a> </li>

                        <li> <a href="#ebook" data-toggle="tab">E-Resource </a> </li>
                        <li> <a href="#activity" data-toggle="tab"> Gallery </a> </li>
                        <!-- <li> <a href="#research-centre" data-toggle="tab"> Research Centre </a> </li> -->



                        <!--<li> <a href="#tab_default_9" data-toggle="tab" class="thbada"> Best Practices</a> </li>-->
                    </ul>




                    <div class="tab-content margin-tops">

                        <div class="tab-pane fade team active in" id="abouts">

                            <div class="col-md-12">


                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Vision </a> </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                <p>"Library aims to be best among engineering college libraries in the country. Library intends to incorporate the latest technology and adopt user friendly approach towards students and faculty. Library intends to offer comprehensive services related to dissemination of knowledge." </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Mission </a> </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <p>
                                                                    The Library's mission is to provide comprehensive resources and services in support of the research, teaching, and learning needs of the faculty and students of the institute and provides an efficient dissemination of knowledge.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--- END COL -->
                                        </div>
                                        <!--- END ROW -->
                                    </div>
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
                                                                <img src="images/department/library/harinakshi.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mrs. Hemalatha</h4>
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
                                                                <img src="images/department/library/hemalatha.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mrs. Bhavya </h4>
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
                                    <ul class="list">
                                        <li> Digital Library</li>
                                        <li>Book Bank</li>
                                        <li>Photocopy, Scanning, Printing and Spiral Binding</li>
                                        <li>Book Reservation</li>
                                        <li> Overnight Issue of Reference Books</li>
                                        <li>General Reading Rooms for Group Study, Personal Books/Electronic Gadgets</li>
                                        <li>Wi-Fi & Bar Code Technology</li>
                                        <li>CCTV Surveillance System</li>
                                        <li>Audio-Visual Room</li>
                                        <li>Fire Extinguisher</li>
                                        <li>Self & E-learning Facility</li>
                                        <li>User Award</li>
                                        <li>Digital Repository</li>
                                    </ul>

                                </div>



                            </div>
                        </div>


                        <div class="tab-pane fade" id="ebook">
                            <div class="row">
                                <div class="col-md-12">
                                    <article>
                                        <h4>E-Resources subscribed through VTU Library Consortia-2019</h4>

                                        <p>The central library provides online access to more than 1680 full text journals and bibliographic databases, 25000 electronic books and other open access resources. All these resources are IP authenticated.</p>
                                        <br /><br />
                                        <h4>E-Resource (Licensed) </h4>

                                        <table class="rwd-table">
                                            <tr style="background: linear-gradient(to bottom, #174980 0%,#11345a 100%);">
                                                <th style="color: #fff;">Sl.No</th>
                                                <th style="color: #fff;">Online Databases</th>
                                                <th style="color: #fff;">Number of Journals accessible</th>
                                                <th style="color: #fff;">URL Links</th>
                                            </tr>

                                            <tr style="background: #dedede;">
                                                <th colspan="4">E-Journals</th>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Springer Nature (ME, CV, CS, EC, ME and allied branches)</td>
                                                <td>690</td>
                                                <td><a href="http://link.springer.com/">http://link.springer.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Accucoms (ICE)Institute of Civil Engineers, UK (Civil Journals)</td>
                                                <td> 31</td>
                                                <td><a href="https://www.icevirtuallibrary.com">https://www.icevirtuallibrary.com</a></td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Elsevier – Science Direct (Engineering + Computer Science)</td>
                                                <td>304</td>
                                                <td><a href="https://www.sciencedirect.com/">https://www.sciencedirect.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Taylor & Francis (Engineering + Architecture)</td>
                                                <td>536</td>
                                                <td><a href="http://www.tandfonline.com/">http://www.tandfonline.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Emerald (Management)</td>
                                                <td>120</td>
                                                <td><a href="https://www.emeraldinsight.com/">https://www.emeraldinsight.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <th>Total E-Journals (FT)</th>
                                                <th>1681</th>
                                                <td></td>
                                            </tr>
                                            <tr style="background: #dedede;">
                                                <th colspan="4">E-Books Perpetual Access</th>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td>Packt (Professional)</td>
                                                <td>5000</td>
                                                <td><a href="https://www.packtpub.com/">https://www.packtpub.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>07</td>
                                                <td>Taylor & Francis (Engineering and allied branches)</td>
                                                <td>5720</td>
                                                <td><a href="https://www.taylorfrancis.com/">https://www.taylorfrancis.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>08</td>
                                                <td>McGraw Hill Express (Subscription model for four years)</td>
                                                <td> 505</td>
                                                <td><a href="http://mcgrawhilleducation.pdn.ipublishcentral.com/">http://mcgrawhilleducation.pdn.ipublishcentral.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>09</td>
                                                <td>Elsevier SD (Engineering )</td>
                                                <td> 436</td>
                                                <td><a href="https://ebooks.elsevier.com/">https://ebooks.elsevier.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>10 </td>
                                                <td>New Age International (Reference + text)</td>
                                                <td> 220</td>
                                                <td><a href="https://digital.elib4u.com/">https://digital.elib4u.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Springer Nature</td>
                                                <td>12966</td>
                                                <td><a href="http://link.springer.com/">http://link.springer.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <th>Total number of E-Books</th>
                                                <th>24847</th>
                                                <td></td>
                                            </tr>
                                            <tr style="background: #dedede;">
                                                <th colspan="4">TECHNOLOGY PLATFORM</th>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Knimbus (e-Library + Remote access + Mobile App) Platform</td>
                                                <td></td>
                                                <td><a href="https://www.new.knimbus.com/">https://www.new.knimbus.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>NetAnalytiks Platform-Writing Assistive Tool</td>
                                                <td></td>
                                                <td><a href="https://sententia.online/signin">https://sententia.online/signin</a></td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Turnitin (Plagiarism Software Online Tool)</td>
                                                <td></td>
                                                <td><a href="http://www.turnitin.com">www.turnitin.com</a></td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>DELNET, </td>
                                                <td></td>
                                                <td><a href="http://www.delnet.nic.in">http:www.delnet.nic.in</a></td>
                                            </tr>
                                            <tr>
                                                <td>16 </td>
                                                <td>KVGCE Digital Library</td>
                                                <td></td>
                                                <td><a href="">192.168.2.250 </a></td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>KVGCE EPAC</td>
                                                <td></td>
                                                <td><a href="http://192.168.1.251/epac/epac_selorg.asp">http://192.168.1.251/epac/epac_selorg.asp</a></td>
                                            </tr>

                                        </table>

                                        <div class="clearfix"></div><br /><br />

                                        <h4>Open Access E-Resource</h4>
                                        <table class="rwd-table">
                                            <tr style="background: linear-gradient(to bottom, #174980 0%,#11345a 100%);">
                                                <th style="color: #fff;">Sl.No</th>
                                                <th style="color: #fff;">E-Resources</th>
                                                <th style="color: #fff;">URL Links</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>US Patent Online</td>
                                                <td><a href="http://www.freepatentsonline.com/search.html">http://www.freepatentsonline.com/search.html</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>US Patents</td>
                                                <td><a href="https://www.uspto.gov/">https://www.uspto.gov/</a></td>
                                            </tr>
                                            <tr>
                                                <td>3 </td>
                                                <td>European Patent Office</td>
                                                <td><a href="http://www.uni-mysore.ac.in/www.european-patent-office.org">http://www.uni-mysore.ac.in/www.european-patent-office.org</a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Information Gateways</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>National Digital Library</td>
                                                <td><a href="https://ndl.iitkgp.ac.in/">https://ndl.iitkgp.ac.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>infomine</td>
                                                <td><a href="http://infomine.ucr.edu/">http://infomine.ucr.edu/</a></td>
                                            </tr>
                                            <tr>
                                                <td>7 </td>
                                                <td>Intute</td>
                                                <td><a href="https://www.jisc.ac.uk/website/legacy/intute">https://www.jisc.ac.uk/website/legacy/intute</a></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Internet Public Library</td>
                                                <td><a href="http://www.ipl.org/">http://www.ipl.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Sakshat</td>
                                                <td><a href="http://www.sakshat.ac.in/">http://www.sakshat.ac.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Massive open online course</td>
                                                <td><a href="http://mooc.org/">http://mooc.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Indian Patent Office</td>
                                                <td><a href="http://www.ipindia.nic.in/">http://www.ipindia.nic.in/</a></td>
                                            </tr>
                                            <tr style="background: #dedede;">
                                                <th colspan="3">Environmental Resources</th>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Envirolink</td>
                                                <td><a href="http://www.envirolink.org/">http://www.envirolink.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Worldwide science</td>
                                                <td><a href="https://worldwidescience.org/">https://worldwidescience.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr style="background: #dedede;">
                                                <th colspan="3">Open Access Journals and Books</th>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Directory of Open Access Journals</td>
                                                <td><a href="https://www.doabooks.org/">https://www.doabooks.org/</a></td>
                                            </tr>
                                            <tr style="background: #dedede;">
                                                <th colspan="3">E-Thesis and Dissertations</th>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Network Digital Library of Theses and dissertations</td>
                                                <td><a href="http://www.ndltd.org/">http://www.ndltd.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Open Access Theses and Dissertations</td>
                                                <td><a href="https://oatd.org/">https://oatd.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Vidyanidhi</td>
                                                <td><a href="http://www.vidyanidhi.org.in/">http://www.vidyanidhi.org.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>18 </td>
                                                <td>MGU Ph.D Theses Archives</td>
                                                <td><a href="http://www.mgutheses.org/">http://www.mgutheses.org/</a></td>
                                            </tr>
                                            <tr style="background: #dedede;">
                                                <th colspan="3">Open Courseware</th>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>JHSPH Open Courseware</td>
                                                <td><a href="http://ocw.jhsph.edu/">http://ocw.jhsph.edu/</a></td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>MIT Open Courseware</td>
                                                <td><a href="https://ocw.mit.edu/index.htm">https://ocw.mit.edu/index.htm</a></td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Free Online Courses</td>
                                                <td><a href="https://swayam.gov.in/">https://swayam.gov.in/</a></td>
                                            </tr>
                                            <tr style="background: #dedede;">
                                                <th colspan="3">Open Access Institutional Repositories and Directories</th>
                                            </tr>
                                            <tr>
                                                <td>22 </td>
                                                <td>Directory of Open Access Directories</td>
                                                <td><a href="http://www.opendoar.org/">http://www.opendoar.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>Analytical Science Digital Library (NISCAIR)</td>
                                                <td><a href="http://www.asdlib.org/aboutASDL.php">http://www.asdlib.org/aboutASDL.php</a></td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>Ashoka Trust for Research in Ecology and Environment</td>
                                                <td><a href="http://eprints.atree.org/">http://eprints.atree.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>25 </td>
                                                <td>Cochin University of Science and Technology</td>
                                                <td><a href="https://dyuthi.cusat.ac.in/xmlui/">https://dyuthi.cusat.ac.in/xmlui/</a></td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>Guru Gobind Indraprasta University</td>
                                                <td><a href="http://dspace.ipu.ernet.in:8080/jspui/">http://dspace.ipu.ernet.in:8080/jspui/</a></td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>Indian Institute of Technology, Bombay</td>
                                                <td><a href="http://dspace.library.iitb.ac.in/jspui/">http://dspace.library.iitb.ac.in/jspui/</a></td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>Indian Institute of Technology, Ropar</td>
                                                <td><a href="http://dspace.iitrpr.ac.in:8080/xmlui/">http://dspace.iitrpr.ac.in:8080/xmlui/</a></td>
                                            </tr>
                                            <tr>
                                                <td>29</td>
                                                <td>Indian Institute of Astrophysics</td>
                                                <td><a href="http://prints.iiap.res.in/">http://prints.iiap.res.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>Indian Institute of Management Kozhikode</td>
                                                <td><a href="http://dspace.iimk.ac.in/">http://dspace.iimk.ac.in/</a></td>
                                            </tr>
                                            <tr>
                                                <td>31 </td>
                                                <td>Indian Institute of Science (Bangalore) </td>
                                                <td><a href="http://eprints.iisc.ernet.in/">http://eprints.iisc.ernet.in/</a></td>
                                            </tr>
                                            <tr style="background: #dedede;">
                                                <th colspan="3">Blogs: Academic and Scientfic</th>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>PLoS Blogs: Science and medicine</td>
                                                <td><a href="http://blogs.plos.org/">http://blogs.plos.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>The Language of Bad Physics</td>
                                                <td><a href="http://blogs.plos.org/badphysics/">http://blogs.plos.org/badphysics/</a></td>
                                            </tr>
                                            <tr>
                                                <td>34</td>
                                                <td>Personal Genome Project</td>
                                                <td><a href="http://www.personalgenomes.org/">http://www.personalgenomes.org/</a></td>
                                            </tr>
                                            <tr style="background: #dedede;">
                                                <th colspan="3">E-Books (Free) </th>
                                            </tr>
                                            <tr>
                                                <td>35</td>
                                                <td>Digital Library of Information Science and Technology (DLIST)</td>
                                                <td><a href="http://arizona.openrepository.com/arizona/handle/10150/105067">http://arizona.openrepository.com/arizona/handle/10150/105067</a></td>
                                            </tr>
                                            <tr>
                                                <td>36</td>
                                                <td>Directory of Open Access Books</td>
                                                <td><a href="http://www.doabooks.org/">http://www.doabooks.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>37</td>
                                                <td>Ebook4free.net</td>
                                                <td><a href="http://www.ebooks4free.net">http://www.ebooks4free.net</a></td>
                                            </tr>
                                            <tr>
                                                <td>38</td>
                                                <td>Free Books.org</td>
                                                <td><a href="http://www.free-books.org/">http://www.free-books.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>39</td>
                                                <td>Free Fiction Books</td>
                                                <td><a href="http://www.freefictionbooks.org/">http://www.freefictionbooks.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>40 </td>
                                                <td>Project Gutenberg</td>
                                                <td><a href="http://www.gutenberg.org/">http://www.gutenberg.org/</a></td>
                                            </tr>
                                            <tr>
                                                <td>41</td>
                                                <td>PDF Drive </td>
                                                <td><a href="https://www.pdfdrive.net/">https://www.pdfdrive.net/</a></td>
                                            </tr>
                                            <tr>
                                                <td>42</td>
                                                <td>Indian Academy of Science (ias) </td>
                                                <td><a href="http://www.ias.ac.in/">http://www.ias.ac.in/</a></td>
                                            </tr>
                                        </table>
                                    </article>
                                    <article>
                                        <table class="rwd-table">
                                            <tr style="background: linear-gradient(to bottom, #174980 0%,#11345a 100%);">
                                                <th style="color:#fff">SI.No</th>
                                                <th style="color:#fff">Branches</th>
                                                <th style="color:#fff">Total Volumes</th>
                                                <th style="color:#fff">Total Titles</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Electronics and Communication Engineering</td>
                                                <td>12446</td>
                                                <td>4633</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Mechanical Engineering</td>
                                                <td>8272</td>
                                                <td>3659</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Electrical and electronics Engineering</td>
                                                <td>5908</td>
                                                <td>2441</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Civil Engineering </td>
                                                <td>5659</td>
                                                <td>2953</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Computer Science and IT </td>
                                                <td>14978</td>
                                                <td> 4719</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>M.B.A</td>
                                                <td>6896</td>
                                                <td>6405</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td> Science</td>
                                                <td>6774</td>
                                                <td>2690</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <th>TOTAL BOOKS/TITLE</th>
                                                <th>60933</th>
                                                <th>27500</th>
                                            </tr>
                                        </table>

                                        <div class="clearfix"></div> <br />

                                        <h4 style="line-height: 30px; text-align: left">
                                            <b>Total Books : </b> 60,933
                                            <br /> <b>Reference Books :</b> 22,610
                                            <br /> <b>Lending Books :</b> 38,323
                                        </h4>
                                    </article>
                                    <a onclick="location.href = 'http://www.interlinepublishing.com/store-203/books.php?allbook=all';">
                                        <h2>D-Bookstore</h2>
                                    </a>

                                </div>



                            </div>
                        </div>

                        <div class="tab-pane fade" id="activity">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/library/eight.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/library/one.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/library/two.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/library/four.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/library/five.jpg">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/library/six.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/library/six.jpg">
                                    </div>
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