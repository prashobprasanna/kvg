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
        <div><img src="images/banner/cs.jpg" class="img-responsive"></div>
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
            z-index: 979;
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
                z-index: 979;
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
                z-index: 979;
            }
        }
    </style>
    <div class="poco">


        <p> Computer Science & Engineering</p>
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
                            <img src="admin-kvgce/photos/faculty/ujwal sir.JPG" style="width:600px; margin-bottom: 20px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" id="som">DR. UJWAL U J</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">

                                    <div class="stats-title"> M.Tech., MISTE, Ph.D.</div>
                                </div>
                            </div>
                            <p class="text">
                                <strong>ujwalu@yahoo.com &nbsp;&nbsp;&nbsp;08257-231141 Ext: 5136</strong>
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
                                                country.</span></p>
                                        <button onclick="myreadmoreFunction()" id="myBtn1">READ MORE</button>
                                    </blockquote>
                                </li>
                            </ul>
                            <!-- <div class="links1"> -->
                            <!-- <button class="follow">Follow</button> -->

                            <!-- <button class="view">MORE</button> -->

                            <!-- <a href="profile/cs/Dr_Ujwal.pdf" target="_blank"><button class="view">Veiw Profile</button></a> -->


                            <!-- </div> -->
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
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department aims at the development of outstanding Computer Science Professionals with
                                                            strong
                                                            ethics & societal concern. The intention of the department lies in providing
                                                            high-quality
                                                            educational services and highly- qualified graduates to serve the community with
                                                            research and
                                                            technical expertise. Our students follow high-caliber education programs in computer
                                                            science to
                                                            fulfill the requirements of quality. The department comprises a distinguished group of
                                                            faculty
                                                            members. Our passionate and exceptionally skilled faculties are pleased to help our
                                                            students achieve
                                                            their full potential. The students of the department get exposure to good companies
                                                            through
                                                            placements .There is an ample chance to become an ace entrepreneur and also pursue
                                                            higher learning
                                                        </p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department was established in 1991 with an initial intake of 60 students for
                                                            undergraduate
                                                            programme. The present intake is 120 seats. The department has always been on a high
                                                            growth path and
                                                            to keep pace with the current technological trends, the department has started an
                                                            M.Tech(CSE)
                                                            programme in the year 2012 with an intake of 24 seats.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Research Centre, Department of Computer Science & Engineering started in the year
                                                            2010 under VTU,
                                                            Belagavi. The
                                                            research areas of the center cover machine learning, cloud computing, big data
                                                            analytics, wireless
                                                            networks, image
                                                            processing etc. there are 5 registered guides and 15 research scholars working in the
                                                            research
                                                            centre.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department also has 5 state of art laboratories with the best in class facilities for
                                                            the
                                                            students to carry out
                                                            their laboratory activities and project works using both proprietary software. Apart
                                                            from that, the
                                                            department also has
                                                            a centralized computer centre connected with 200 Mbps internet to meet the browsing
                                                            requirement of
                                                            students. The
                                                            department of computer science and engineering is responsible for the maintenance of
                                                            Software &
                                                            Hardware of the
                                                            computers in the college.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department is led by an eminent professor and backed by 24 dedicated faculty members, the
                                                            department
                                                            has well qualified,
                                                            experienced and committed faculty to provide quality industry tuned education to the
                                                            students and
                                                            most of them are
                                                            members of professional bodies like ISTE, CSI.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A few of the major areas of research interest that the faculties and students propose are
                                                            Artificial
                                                            intelligence,
                                                            Internet of Things, Web Application development, Cloud Computing, Networking, Image
                                                            Processing,
                                                            Database, Software
                                                            Engineering and Data mining.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department will always work in close lines with the latest trends and development of
                                                            most of the
                                                            renowned companies.
                                                            This communication expedites the process of joint research, funded projects from the
                                                            companies and
                                                            provides a very good
                                                            opportunity to learn the latest trends in the industry. The department also organizes
                                                            technical
                                                            talks by resource
                                                            persons from industries in every semester. Also the students are given an opportunity to
                                                            go for
                                                            industrial visits,
                                                            wherein they come to know the real world scenario of the companies and try to understand
                                                            the work
                                                            environment.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department has several MoUs with various industries. The main purpose of these MoUs
                                                            is to fulfill
                                                            the gap between
                                                            academics and the actual industry scheme.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department also caters a cutting edge computational facility to the students. The
                                                            department
                                                            produces top-class
                                                            graduates who are asked for both academia and best state of art Corporates.</p>
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
                                                                <p>"To Produce qualified Computer Science & Engineering graduates with human values
                                                                    and ethical Skills" </p>
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
                                                                    <li>Impart students with strong fundamental concepts, analytical capability,
                                                                        programming and problem solving skills.</li>
                                                                    <li>Encourage an ambience of education through faculty training, self learning,
                                                                        sound academic practices and Industry related endeavors.</li>
                                                                    <li>Imbibe environment Conciseness, social awareness and responsibility in
                                                                        students to serve the society.</li>
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
                                                                    <li>Apply Engineering Basics Analyze Engineering Challenges through application
                                                                        of mathematical and Algorithmic principles for real life technology
                                                                        projects.
                                                                    </li>
                                                                    <li>Engineering Skills and techniques Apply skills like Analyzing, Designing,
                                                                        Implementing and Testing of Major and Minor Projects</li>
                                                                    <li>Individual and Team Work Exhibit collaborative abilities in the engineering
                                                                        projects like Communication Skill, work as individual or in a team with a
                                                                        sense of Social Responsibility</li>
                                                                    <li>Life Long Learning Initiate technological and skills required for
                                                                        comprehensive contribution as experts in the Chosen Profession.</li>
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
                                                                    By the end of the undergraduate programme in CSE, graduates will be able to:
                                                                    <li>Engineering Knowledge: To apply the knowledge of mathematics, science,
                                                                        engineering fundamentals, and an engineering specialization to the solution
                                                                        of complex engineering problems</li>
                                                                    <li>Problem Analysis: Identify, formulate, review research literature, and
                                                                        analyze complex Engineering problems reaching substantiated conclusions
                                                                        using first principles of mathematics, natural sciences, and engineering
                                                                        sciences.</li>
                                                                    <li>Design/Development of Solutions: Design solutions for complex engineering
                                                                        problems and design system components or processes that meet the specified
                                                                        needs with appropriate considerations for the public health and safety, and
                                                                        the cultural, societal, and environmental considerations</li>
                                                                    <li>Use research-based knowledge and research methods including design of
                                                                        experiments, analysis and interpretation of data, and synthesis of the
                                                                        information to provide valid conclusions.</li>
                                                                    <li>Create, select, and apply appropriate techniques, resources, and modern
                                                                        engineering and IT tools including prediction and modeling to complex
                                                                        engineering activities with an understanding of the limitations.</li>
                                                                    <li>Apply reasoning informed by the contextual knowledge to assess societal,
                                                                        health, safety, legal and cultural issues and the consequent
                                                                        responsibilities relevant to the professional engineering practice.</li>
                                                                    <li>Understand the impact of the professional engineering solutions in societal
                                                                        and environmental contexts, and demonstrate the knowledge of, and need for
                                                                        sustainable development.</li>
                                                                    <li>Apply ethical principles and commit to professional ethics and
                                                                        responsibilities
                                                                        and norms of the engineering practice.</li>
                                                                    <li>Function effectively as an individual, and as a member or leader in diverse
                                                                        teams, and in multidisciplinary settings.</li>
                                                                    <li>Communicate effectively on complex engineering activities with the
                                                                        engineering
                                                                        community and with society at large, such as, being able to comprehend and
                                                                        write
                                                                        effective reports and design documentation, make effective presentations,
                                                                        give and receive clear instructions.</li>
                                                                    <li>Demonstrate knowledge and understanding of the engineering and management
                                                                        principles
                                                                        and apply these to one’s own work, as a member and leader in a team, to
                                                                        manage projects
                                                                        and in multidisciplinary environments.</li>
                                                                    <li>Recognize the need for, and have the preparation and ability to engage in
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
                                                                    By the end of the undergraduate programme in CSE, graduates will be able to:
                                                                    <li>PROBLEM SOLVING SKILLS Specify, design, build and test analog, digital and
                                                                        embedded systems for signal processing</li>
                                                                    <li>PROFESSIONAL SKILLSUnderstand and architect wired and wireless analog and
                                                                        digital communication systems as per specifications, and determine their
                                                                        performance</li>
                                                                    <li>ETHICS AND CAREER DEVELOPMENTExhibit skills required for a successful career
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
                                                                    <li> Experienced and dedicated faculty members</li>
                                                                    <li> Recognized research Centre (VTU-Ph.D)</li>
                                                                    <li> Well equipped laboratories with more than 150 computers</li>
                                                                    <li>Separate department library with more than 700 books</li>
                                                                    <li>Department association CENSA (Computer Engineering Students Association)</li>
                                                                    <li>Wi-Fi Internet connection for students and faculties with 200Mbps</li>
                                                                    <li>Classrooms with Power Point Projector</li>


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
                        <div class="tab-pane fade" id="Faculty">
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

                                                <div class="row" style="align-items:center">
                                                    <h2>Teaching</h2><br>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ujwal sir.JPG" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. Ujwal U J</h4>
                                                                <h5 style="color:white">Professor</h5>
                                                                <h5 style="color:white">MCA,Ph.D</h5>
                                                                <div class="social-links">

                                                                    <a href="profile\cs\Dr_Ujwal.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/smitha-mam.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. Smitha M L</h4>
                                                                <h5 style="color:white">Associate Proffessor</h5>
                                                                <h5 style="color:white">MCA, Ph.D</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/Faculty_Smitha.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/savitha-mam.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. Savitha C K</h4>
                                                                <h5 style="color:white">Associate Professor</h5>
                                                                <h5 style="color:white">MCA, Ph.D</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/Savitha_Faculty.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/prajna-mam.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. Prajna M R</h4>
                                                                <h5 style="color:white">Associate Professor</h5>
                                                                <h5 style="color:white">M.Tech, Ph.D</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/Faculty_Prajna.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">

                                                                <img src="admin-kvgce/photos/faculty/Bhagyajyothi-K-L-mam.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Bhagyajyothi K L</h4>
                                                                <h5 style="color:white">Associate Proffessor</h5>
                                                                <h5 style="color:white">MCA, Ph.D</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/Bhagya_faculty.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/divya-mam.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Divya A K</h4>
                                                                <h5 style="color:white">Associate Proffessor</h5>
                                                                <h5 style="color:white">M.Tech, (Ph.D)</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/DIVYA AK.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/jyothimani-mam.jpg"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. Jothimani K </h4>
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

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/BP-sir.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Balapradeep K N</h4>
                                                                <h5 style="color:white">Associate Proffessor</h5>
                                                                <h5 style="color:white">M.Tech, (Ph.D)</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/Faculty_Balapradeep.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/kishore-kumar-sir.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Kishore Kumar K</h4>
                                                                <h5 style="color:white">Associate Proffessor</h5>
                                                                <h5 style="color:white">M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/Faculty_Kishor.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/venkatesh-sir.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Venkatesh U C</h4>
                                                                <h5 style="color:white">Associate Proffessor</h5>
                                                                <h5 style="color:white">M.Tech, (Ph.D)</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/Facultyvenktesh.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/sindhu-mam.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Sindhu Venkatesh</h4>
                                                                <h5 style="color:white">Associate Proffessor</h5>
                                                                <h5 style="color:white">M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/Sindhu Venkatesh.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/yashaswini mam.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Yashaswini K L</h4>
                                                                <h5 style="color:white">Associate Proffessor</h5>
                                                                <h5 style="color:white">M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/Faculty_Yashaswini (1).pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/bhavya-mam.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Bhavya P S</h4>
                                                                <h5 style="color:white">Associate Proffessor</h5>
                                                                <h5 style="color:white">M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/cs/bhavya_faculty_profile.pdf"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2>Non Teaching</h2>
                                                <br>
                                                <div class="row" style="align-items:center">



                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="profile/cs/non teaching/ganesh.JPG" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mr.Ganesh</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="profile/cs"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="profile/cs/non teaching/harish.JPG" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mr.Harish</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="profile/cs"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="profile\cs\non teaching\lokesh.JPG" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mr.Lokesh</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="profile/cs"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="profile\cs\non teaching\murali.JPG" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mr.Murali</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="profile/cs"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="profile\cs\non teaching\rekha.JPG" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mrs.Rekha M V</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="profile/cs"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="profile\cs\non teaching\theerthram.JPG" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mr.Theertharam</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="profile/cs"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="profile\cs\non teaching\vinay.JPG" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mr.Vinay Kumar S</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="profile/cs"><i class="fab fa-creative-commons-by"></i></a>
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
                                        <p>‘C’ Programming Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Data Structures Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Electronics Circuits And Logic Design Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Design and Analysis of Algorithms Lab .</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Microprocessors Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Database Applications Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>System Software And Operating Systems Lab.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Computer Graphics Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Unix System Programming And Compuware Design Lab./</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Networks Lab</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Web Programming Lab</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Project Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Computer Graphics Lab.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Placements">
                            <div class="row">
                                <style>
                                    #customers {
                                        font-family: Arial, Helvetica, sans-serif;
                                        border-collapse: collapse;
                                        width: 100%;
                                    }

                                    #customers td,
                                    #customers th {
                                        border: 1px solid #ddd;
                                        padding: 8px;
                                    }

                                    #customers tr:nth-child(even) {
                                        background-color: #f2f2f2;
                                    }

                                    #customers tr:hover {
                                        background-color: #ddd;
                                    }

                                    #customers th {
                                        padding-top: 12px;
                                        padding-bottom: 12px;
                                        text-align: left;
                                        background-color: #04AA6D;
                                        color: white;
                                    }
                                </style>
                                <table id="customers">
                                    <tr>
                                        <th>SL.NO</th>
                                        <th>Name</th>
                                        <th>Company</th>


                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ashwini H K</td>
                                        <td>Tata Consultancy Services, Infosys,IBM </td>


                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Akash D R</td>

                                        <td>Tata Consultancy Services, Wipfli,ChipSync </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Shwetha A</td>
                                        <td>Tata Consultancy Services </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Vyshna V</td>
                                        <td>Tata Consultancy Services </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Raksha M</td>
                                        <td>Sasken </td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nikhil A L</td>
                                        <td>Infosys, SignDesk </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Ajna H M</td>
                                        <td>Talentpace, Cognitive clouds, Palle Technologies, Capgemini </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Ambika P</td>
                                        <td>Cognitive clouds, Teachnook, Accord Glogal Technological Solution</td>

                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Chandana B</td>
                                        <td>Capgemini, Robosoft Technologies, Teachnook, Accord Glogal Technological Solution </td>

                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Smitha Bantwal</td>
                                        <td>Global Quest Technologies, Teachnook</td>

                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>Nishmitha M N</td>
                                        <td>Global Quest Technologies, Teachnook, Pentagon Space, Brigosha Technologies</td>

                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Apoorva P R</td>

                                        <td>Palle Technologies, Code Craft Technologies, Accord Glogal Technological Solution </td>

                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>Harshith Rai Y N</td>
                                        <td>Palle Technologies</td>

                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>Krishna Shravan</td>
                                        <td>Palle Technologies, Wipfli</td>

                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>Manoj S G</td>
                                        <td>Palle Technologies, Capgemini</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Kedar S P</td>
                                        <td>Palle Technologies, Capgemini</td>
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td>Sushmitha N V</td>
                                        <td>Palle Technologies, Wipfli, Accord Glogal Technological Solution</td>
                                    </tr>

                                    <tr>
                                        <td>18</td>
                                        <td>Arshriya R N</td>
                                        <td>Accord Glogal Technological Solution, QSpiders</td>

                                    </tr>

                                    <tr>
                                        <td>19</td>
                                        <td>Nidhi T S</td>
                                        <td>QSpiders</td>

                                    </tr>

                                    <tr>
                                        <td>20/td>
                                        <td>Nithish N Devadiga</td>
                                        <td>QSpiders</td>
                                    </tr>

                                    <tr>
                                        <td>21</td>
                                        <td>Pavan B B</td>
                                        <td>QSpiders</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td>Prajna T N</td>
                                        <td>QSpiders</td>
                                    </tr>

                                    <tr>
                                        <td>23</td>
                                        <td>Yashaswini</td>
                                        <td>QSpiders</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Shreya M C</td>
                                        <td>QSpiders,Code Craft Technologies,Capgemini</td>
                                    </tr>

                                    <tr>
                                        <td>25</td>
                                        <td>Dhanya P R</td>
                                        <td>QSpiders, Teachnook, Skolar, Wipfli, Accord Glogal Technological Solution</td>
                                    </tr>

                                    <tr>
                                        <td>26</td>
                                        <td>Namrutha K R</td>
                                        <td>QSpiders,Teachnook</td>
                                    </tr>

                                    <tr>
                                        <td>27</td>
                                        <td>Nishmitha KV</td>
                                        <td>Teachnook,Continental</td>

                                    </tr>

                                    <tr>
                                        <td>28</td>
                                        <td>Prashanthi K G </td>
                                        <td>QSpiders, Teachnook</td>

                                    </tr>

                                    <tr>
                                        <td>29</td>
                                        <td>Shreya A </td>
                                        <td>Teachnook, Capgemini</td>

                                    </tr>

                                    <tr>
                                        <td>29</td>
                                        <td>Shamitha J Rai </td>
                                        <td>Skolar</td>

                                    </tr>

                                    <tr>
                                        <td>30</td>
                                        <td>Faiza M B</td>
                                        <td>Skolar</td>

                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Darshan B</td>
                                        <td>Wipfli</td>

                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Mahammad Sinan B H</td>
                                        <td>Wipfli</td>

                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>Preethika M P</td>
                                        <td>Wipfli</td>

                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Priya C R</td>
                                        <td>Wipfli,ChipSync</td>

                                    </tr>

                                    <tr>
                                        <td>35</td>
                                        <td>Druva K N</td>
                                        <td>KodNest</td>

                                    </tr>

                                    <tr>
                                        <td>36</td>
                                        <td>Harinandan Praveen</td>
                                        <td>KodNest</td>

                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Abdul Basheer M</td>
                                        <td>KodNest</td>

                                    </tr>

                                    <tr>
                                        <td>38</td>
                                        <td>Madhura A K</td>
                                        <td>KodNest</td>

                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>Madhura U S</td>
                                        <td>KodNest</td>

                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>Sahana</td>
                                        <td>TAP Academy</td>

                                    </tr>
                                    <tr>
                                        <td>41</td>
                                        <td>Sahana</td>
                                        <td>TAP Academy</td>

                                    </tr>

                                </table>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="activities">

                            <div class="department-activities-box">
                                <div class="department-activities">
                                    <h2>CENSA has organized cultural event “ERROR” Compile-Run-Have Fun on 1st January 2022</h2>
                                    <div class="department-activities-img gallery">
                                        <img src="images/newsandevents/act1.png" class="img-responsive" style="max-width:350px">
                                    </div>
                                    <span style="font-size: 12pt; line-height: 107%; font-family: " times="" new="" roman",="" serif;"="">CENSA has organized cultural event “ERROR” Compile-Run-Have Fun on 1st January 2022.</span> </p>
                                </div>
                            </div>

                            <div class="department-activities-box">
                                <div class="department-activities">
                                    <h2> CS&E Department has organized a Webinar on “Intellectual Property
                                        Rights” on 27th May, 2021.</h2>
                                    <div class="department-activities-img gallery">
                                        <img src="images/newsandevents/act1.png" class="img-responsive" style="max-width:350px">
                                    </div>
                                    <span style="font-size: 12pt; line-height: 107%; font-family: " times="" new="" roman",="" serif;"="">Dr. G B Krishnappa, Deen R & D, Professor,
                                        Department of Mechanical Engineering, VVCE, Mysuru engaged as
                                        resource person..</span> </p>
                                </div>
                            </div>

                            <div class="department-activities-box">
                                <div class="department-activities">
                                    <h2>CS&E Department has organized a Webinar on “Employability Skills for

                                        the Future” on 19th Jun, 2021.</h2>
                                    <div class="department-activities-img gallery">
                                        <img src="images/newsandevents/act1.png" class="img-responsive" style="max-width:350px">
                                    </div>
                                    <span style="font-size: 12pt; line-height: 107%; font-family: " times="" new="" roman",="" serif;"="">Mr. Venkatesh Neelam, Deputy Manager-
                                        HR, Volvo engaged as resource person.</span> </p>
                                </div>
                            </div>

                            <div class="department-activities-box">
                                <div class="department-activities">
                                    <h2>CS&E Department has organized a Webinar on “Understanding
                                        Entrepreneurship and Startup Ecosystem” on 1st July, 2021.</h2>
                                    <div class="department-activities-img gallery">
                                        <img src="images/newsandevents/act1.png" class="img-responsive" style="max-width:350px">
                                    </div>
                                    <span style="font-size: 12pt; line-height: 107%; font-family: " times="" new="" roman",="" serif;"="">Mr. Vijay
                                        D R, Founder and Director, Herowin Technologies Private Limited,
                                        Mysuru engaged as resource person..</span> </p>
                                </div>
                            </div>

                            <div class="department-activities-box">
                                <div class="department-activities">
                                    <h2>CS&E Department has organized a Skill Development Program on
                                        “Application Development using Android Studio” for 6th semester CS&E
                                        students on 23rd and 24th August, 2021.</h2>
                                    <div class="department-activities-img gallery">
                                        <img src="images/newsandevents/act1.png" class="img-responsive" style="max-width:350px">
                                    </div>
                                    <span style="font-size: 12pt; line-height: 107%; font-family: " times="" new="" roman",="" serif;"="">Mr. Nithin Kumar, Assistant
                                        Professor, Dept.of CSE, VVCE, Mysuru and Mrs. Usha C S, Assistant
                                        Professor, Dept.of CSE, VVCE, Mysuru were engaged as resource
                                        person.</span> </p>
                                </div>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="internship">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Following is the list of companies which carried the internship program for the year 2020-21</h4>
                                    <div class="panel-body">
                                        <p>
                                        <ul class="list">
                                            <li> Experienced and dedicated faculty members</li>
                                            <li> Recognized research Centre (VTU-Ph.D)</li>
                                            <li> Well equipped laboratories with more than 150 computers</li>
                                            <li>Separate department library with more than 700 books</li>
                                            <li>Department association CENSA (Computer Engineering Students Association)</li>
                                            <li>Wi-Fi Internet connection for students and faculties with 200Mbps</li>
                                            <li>Classrooms with Power Point Projector</li>


                                        </ul>
                                        </p>
                                    </div>


                                    <h4>Following is the list of companies which carried the internship program for the year 2021-22</h4>
                                    <div class="panel-body">
                                        <p>
                                        <ul class="list">
                                            <li>Compsoft Technologies,Bangalore</li>
                                            <li> Runshaw Technologies Put. Ltd, Bangalore</li>
                                            <li>Thaniya Technologies, Karkala, Karnataka</li>
                                            <li> BIONIC ENGINEERS,Bangalore</li>
                                            <li> Vivarttana Technologies,Bangalore</li>
                                            <li> ICS Solutions, Bangalore</li>
                                            <li> e-Brain Softech Private Limited,Bangalore</li>



                                        </ul>
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>





                        <div class="tab-pane fade" id="newsletter">
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="images/department/cs/News Letter - 18-29.pdf" target="_blank"><img src="images/department/download1.gif" class=" img-circle img-responsive">
                                        <h4> Newsletter 2018 - 2019</h4>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="images/department/cs/cs&e newsletter 19-20(2).pdf" target="_blank"><img src="images/department/download1.gif" class=" img-circle img-responsive">
                                        <h4> Newsletter 2019 - 2020</h4>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="images/department/cs/cs&e newsletter 20-21(1).pdf" target="_blank"><img src="images/department/download1.gif" class=" img-circle img-responsive">
                                        <h4> Newsletter 2020 - 2021</h4>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="images/department/cs/cs&e newsletter 20-21(2).pdf" target="_blank"><img src="images/department/download1.gif" class=" img-circle img-responsive">
                                        <h4> Newsletter 2020 - 2021</h4>
                                    </a>
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