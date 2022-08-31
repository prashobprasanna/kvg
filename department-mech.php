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
        <div><img src="images/banner/mech2.jpg" class="img-responsive"></div>
    </section>
    <style>
        div.poco {

            position: fixed;
            top: 15%;
            padding: 5px;
            height: fit-content;
            /* padding-top: 0%; */
            padding-bottom: 0%;
            background-color: #000000;
            color: white;
            font-size: large;
            /* border: 2px solid #4CAF50; */
            z-index: 999;
        }

        @media (max-width:500px) {
            div.poco {
                position: fixed;
                top: 15%;
                padding: 5px;
                height: fit-content;
                /* padding-top: 0%; */
                padding-bottom: 0%;
                background-color: #000000;
                color: white;
                font-size: small;
                /* border: 2px solid #4CAF50; */
                z-index: 999;
            }
        }

        @media (max-width:300px) {
            div.poco {
                position: fixed;
                top: 15%;
                padding: 5px;
                height: fit-content;
                /* padding-top: 0%; */
                padding-bottom: 0%;
                background-color: #000000;
                color: white;
                font-size: smaller;
                /* border: 2px solid #4CAF50; */
                z-index: 999;
            }
        }
    </style>
    <div class="poco">


        <p>Mechanical Engineering</p>
    </div>
    <section class="home-facts-bg">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head" style="color: black;">HEAD OF DEPARTMENT<span></span></h2>
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

                    img {
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
                        background-image: linear-gradient(to right bottom, rgb(255 255 255), #ffffff);
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
                        box-shadow: 2rem 6rem 0 -3rem #c3daff;
                        border-radius: 50%;
                    }

                    .card1 img {
                        float: left;
                        width: 100%;
                        min-width: 80px;
                        box-shadow: 0 0 0 5px #FFF;
                    }

                    .infos {
                        margin-left: 1.5rem;
                    }

                    .name {
                        font-size: large;
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
                        font-size: 1.5rem;
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
                            <img src="admin-kvgce/photos/faculty/mech/umashanker.jpg" style="width:600px; margin-bottom: 20px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" id="som" style="font-size:larger;">DR. UMASHANKAR K S</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">

                                    <div class="stats-title"> M.Tech., Ph.D.</div>
                                </div>
                            </div>
                            <p class="text">
                                <strong>ukskvgce@gmail.com &nbsp;&nbsp;&nbsp;08257-231141 Ext: 5137</strong>
                            </p>
                            <ul class="stats1">
                                <li>
                                    <blockquote>
                                        <p style="text-align: justify;"><span id="dots1"></span><span id="more1">
                                                A student is successful if the knowledge imparted in the engineering education and
                                                the
                                                skills developed by him can be effectively utilized in his life after his education
                                                and
                                                is able to contribute to the society and the socio-economic development of the
                                                country.
                                            </span></p>
                                        <button onclick="myreadmoreFunction()" id="myBtn1">READ MORE</button>
                                    </blockquote>
                                </li>
                            </ul>
                            <!-- <div class="links1">
                                <button class="follow">Follow</button> -->
                            <!-- <button class="view">View Profile</button>
                            </div>  -->
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section>
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
                        <li> <a href="#Placements" data-toggle="tab"> Placements</a> </li>
                        <!-- <li> <a href="#Placements" data-toggle="tab"> Placements</a> </li> -->
                        <li> <a href="#activities" data-toggle="tab"> Activities </a> </li>
                        <li> <a href="#internship" data-toggle="tab"> Internship </a> </li>
                        <li> <a href="#newsletter" data-toggle="tab"> Newsletter </a> </li>

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
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mechanical engineering is at the forefront of developing new technologies for a number of industries. It is the broadest of all engineering disciplines, encompassing areas such as energy, fluid mechanics, dynamics, combustion, vibration, design, manufacturing processes, systems modeling and simulation, mechatronics, robotics, mechanics of material, rapid prototyping and composites. It is one of the oldest branches of engineering, dating back to when the first wheels were put to practical use by mounting them on an axle to make a cart. Throughout recorded history, people have been inventing and building increasingly more sophisticated devices and machines in order to improve the conditions of life. Many of the machines encounter every day such as cars, appliances, tools and climate control systems — were made possible by mechanical engineers.
                                                        </p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Department of Mechanical Engineering at K V G College of Engineering was established in the year 1986. Since the inception of the Mechanical Engineering course, it is continuing to provide excellent facilities for education with a dedicated faculty of highly qualified and experience members. Keeping itself up to date with the latest development and trends in the field, the laboratories and workshops are well equipped with modern machines and equipments to provide the best of teaching-learning environment to the students. The Department is equipped with the needed and adequate infrastructure to nurture the students as knowledgeable professionals. With the intake of 120 students for the Bachelor of Engineering and 18 for Master of Technology in Product Design and Manufacturing program, the objective is served.</p>

                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department is considered to be the leading department in the college. Over the years students of this branch bagged several ranks in the university level both in UG and PG programs and brought laurels to the college. Dr. Umashankar K S is heading the department with 03 Professors, 06 Associate Professors and 19 Assistant Professors. Apart from the teaching, the department is actively engaged in research in the areas Mechanical Engineering, 8 research scholars are pursuing their PhD degree. The faculty members have published technical papers in national and international seminars and reputed journals. The department extends its service to the small scale industries and society.</p>

                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department brings out newsletter “Mech Bulletin” in every semester. The department has a separate library with more than 1000 books, which includes text books, reference books which are prescribed by the university and also books on latest technological advancements.</p>


                                                        <ul>


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
                                                                <p>"To produce Mechanical Engineers with Ethical, Innovative, Scientific and Engineering Knowledge." </p>
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
                                                                <ul class="list">
                                                                    <li><B>ME 01: </B>Impart Education in the ﬁeld of Mechanical Engineering and Allied Sciences through Teaching- Learning Process.</li>
                                                                    <li><B>ME 02: </B>Implement thriving environment for interaction with Industry for Enriching Knowledge in Mechanical Engineering.</li>
                                                                    <li><B>ME 03: </B>Encourage our Students to practice interpersonal Skills and Ethics through Social Outreach.</li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree">
                                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Programme Educational Objectives (PEOs)</a> </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                <p>
                                                                <ul class="list">
                                                                    <li><b>PE 01: </b>Proficiency in the field of mechanical engineering and allied sciences and to apply them in effective design, analysis and development of product and process.
                                                                    </li>
                                                                    <li><b>PE 02: </b>Motivation to pursue research and challenging projects in various avenues of Mechanical Engineering.</li>
                                                                    <li><b>PE 03: </b>Imbibe communication, teamwork and leadership skills along with persistence and perseverance to solve challenging problems in the physical world.</li>
                                                                    <li><b>PE 04: </b>Commitment towards social and ethical responsibilities with fervor for lifelong learning.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFour">
                                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Programme Outcomes (POs)</a> </h4>
                                                        </div>
                                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                            <div class="panel-body">
                                                                <p>
                                                                <ul class="list">

                                                                    <li><b>PO1: </b>Engineering Knowledge: To apply the knowledge of mathematics, science,
                                                                        engineering fundamentals, and an engineering specialization to the solution
                                                                        of complex engineering problems</li>
                                                                    <li><b>PO2: </b>Problem Analysis: Identify, formulate, review research literature, and
                                                                        analyze complex Engineering problems reaching substantiated conclusions
                                                                        using first principles of mathematics, natural sciences, and engineering
                                                                        sciences.</li>
                                                                    <li><b>PO3: </b>Design/Development of Solutions: Design solutions for complex engineering
                                                                        problems and design system components or processes that meet the specified
                                                                        needs with appropriate considerations for the public health and safety, and
                                                                        the cultural, societal, and environmental considerations</li>
                                                                    <li><b>PO4: </b>Use research-based knowledge and research methods including design of
                                                                        experiments, analysis and interpretation of data, and synthesis of the
                                                                        information to provide valid conclusions.</li>
                                                                    <li><b>PO5: </b>Create, select, and apply appropriate techniques, resources, and modern
                                                                        engineering and IT tools including prediction and modeling to complex
                                                                        engineering activities with an understanding of the limitations.</li>
                                                                    <li><b>PO6: </b>Apply reasoning informed by the contextual knowledge to assess societal,
                                                                        health, safety, legal and cultural issues and the consequent
                                                                        responsibilities relevant to the professional engineering practice.</li>
                                                                    <li><b>PO7: </b>Understand the impact of the professional engineering solutions in societal
                                                                        and environmental contexts, and demonstrate the knowledge of, and need for
                                                                        sustainable development.</li>
                                                                    <li><b>PO8: </b>Apply ethical principles and commit to professional ethics and
                                                                        responsibilities
                                                                        and norms of the engineering practice.</li>
                                                                    <li><b>PO9: </b>Function effectively as an individual, and as a member or leader in diverse
                                                                        teams, and in multidisciplinary settings.</li>
                                                                    <li><b>PO10: </b>Communicate effectively on complex engineering activities with the
                                                                        engineering
                                                                        community and with society at large, such as, being able to comprehend and
                                                                        write
                                                                        effective reports and design documentation, make effective presentations,
                                                                        give and receive clear instructions.</li>
                                                                    <li><b>PO11: </b>Demonstrate knowledge and understanding of the engineering and management
                                                                        principles
                                                                        and apply these to one’s own work, as a member and leader in a team, to
                                                                        manage projects
                                                                        and in multidisciplinary environments.</li>
                                                                    <li><b>PO12: </b>Recognize the need for, and have the preparation and ability to engage in
                                                                        independent and life-long learning in the broadest context of technological
                                                                        change.</li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFive">
                                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Programme Specific Outcomes(PSOs) </a> </h4>
                                                        </div>
                                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                            <div class="panel-body">
                                                                <p>
                                                                <ul class="list">

                                                                    <li><b>PSO1: </b>PROBLEM SOLVING SKILLS Specify, design, build and test analog, digital and
                                                                        embedded systems for signal processing</li>
                                                                    <li><b>PSO2: </b>PROFESSIONAL SKILLSUnderstand and architect wired and wireless analog and
                                                                        digital communication systems as per specifications, and determine their
                                                                        performance</li>
                                                                    <li><b>PSO3: </b>ETHICS AND CAREER DEVELOPMENTExhibit skills required for a successful career
                                                                        in the industry based on principles of software project management,
                                                                        teamwork, ethical practices, develop the spirit of free enterprise and
                                                                        provide innovative ideas towards analysis.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingSix">
                                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseFive"> Salient Features </a> </h4>
                                                        </div>
                                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                                            <div class="panel-body">
                                                                <p>
                                                                <ul class="list">
                                                                    <li>Experienced and Qualified Faculty members</li>
                                                                    <li>Recognized as research centre to offer Ph.D and M.Sc in Engineering</li>
                                                                    <li>Separate department Library with more than 500 books</li>
                                                                    <li>Regular academic related activities like technical talk/Workshops etc. by experts</li>
                                                                    <li>Regular co-curricular activities to students-Mesmerize/dynamech</li>
                                                                    <li>Wi-Fi internet connections to the students/faculty</li>
                                                                    <li>Well equipped teaching aids in class rooms and labs-Projectors/models/audio systems</li>

                                                                </ul>
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
                        <br><br><br><br>
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
                                                left: 0px;
                                                transition: 0.4s;
                                                padding: 15px 0;
                                                background: rgba(0, 0, 0, 0.4);
                                                border-top-right-radius: 8px;
                                                padding-right: 6%;
                                            }

                                            #team .member:hover .member-info {
                                                left: 0px;
                                                right: 0px;
                                                border-radius: 8px;
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
                                                <h2>Teaching</h2>
                                                <br>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/mech/umashanker1.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. UMASHANKAR K S</h4>
                                                                <h5 style="color:white">Professor & HOD </h5>
                                                                <h5 style="color:white">B.E,M.Tech,Ph.D</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/mech/sunil.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/mech/sunil.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. Sunil Kumar M</h4>
                                                                <h5 style="color:white">Associate Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech,Ph.D</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/mech/sunil.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/mech/yuvaraj.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Yuvaraj K B</h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech,(Ph.D)</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/mech/yuvaraj.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/mech/sudheer.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Sudeer K V</h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/mech/sudheer.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/mech/hitesh.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Hitesh M S</h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/mech/hitesh.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/mech/prashanth.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Prashanth K </h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/mech/prashanth.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/mech/abhijna.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Abhijna B B </h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/mech/abhijna.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                                <h2>Non Teaching</h2>
                                                <br>
                                                <div class="row" style="align-items:center">



                                                    <!-- <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/sonia-mam.jpg"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Sonia Peal K P</h4>
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
                                                    </div> -->

                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="tab-pane fade" id="Facility">

                        </div>

                        <div class="tab-pane fade" id="Placements">
















                        </div>

                        <div class="tab-pane fade" id="activities">



                        </div>

                        <div class="tab-pane fade" id="internship">
                            <div class="row">


                            </div>
                        </div>





                        <div class="tab-pane fade" id="newsletter">
                            <div class="row">

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