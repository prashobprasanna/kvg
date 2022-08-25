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
        <div><img src="images/banner/hostel.jpg" class="img-responsive"></div>
    </section>

    >
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


                        <!-- <li> <a href="#activities" data-toggle="tab"> Activities </a> </li> -->
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
                                                left: -20px;
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
                                                                <img src="admin-kvgce/photos/faculty/hostel/one.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4></h4>
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
                                                                <img src="admin-kvgce/photos/faculty/hostel/two.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4></h4>
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
                                                                <img src="admin-kvgce/photos/faculty/hostel/three.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4></h4>
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
                                    <div class="facility-box">
                                        <img src="images/department/hostel/one.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/hostel/two.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/hostel/three.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/hostel/four.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <img src="images/department/hostel/five.jpg">
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