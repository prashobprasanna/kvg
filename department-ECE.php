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
        <div><img src="images/banner/ec.jpg" class="img-responsive"></div>
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


        <p>Electronics & Communication</p>
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
                        border-left: 5px solid #969696;
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
                            <img src="admin-kvgce/photos/faculty/ece/kusuma.jpg" style="width:600px; margin-bottom: 20px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" id="som" style="font-size:larger;">Dr. KUSUMADHAR S</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">

                                    <div class="stats-title">B.E.,M.Tech.,Ph.D, MISTE</div>
                                </div>
                            </div>
                            <p class="text">
                                <strong> echod.kvgce@gmail.com &nbsp;&nbsp;&nbsp;08257-231141 Ext: 5136</strong>
                            </p>
                            <ul class="stats1">
                                <li>
                                    <blockquote>
                                        <p style="text-align: justify;"><span id="dots1"></span><span id="more1"> A student is successful if the knowledge imparted in the engineering education and
                                                the
                                                skills developed by him can be effectively utilized in his life after his education
                                                and
                                                is able to contribute to the society and the socio-economic development of the
                                                country.</span></p>
                                        <button onclick="myreadmoreFunction()" id="myBtn1">MORE</button>
                                    </blockquote>
                                </li>
                            </ul>
                            <!-- <div class="links1"> -->
                            <!-- <button class="follow">Follow</button> -->
                            <!-- <a href="profile/ec/Dr. Kusumadhara S.pdf" target="_blank"> <button class="view">View Profile</button></a>
                            </div> -->
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
                        <!-- <li> <a href="#Placements" data-toggle="tab"> Placements</a> </li> -->
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
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Department of Electronics & Communication Engineering was established in
                                                            the year 1986 with a vision “To Create Innovative, Ethical and Sociable Electronics
                                                            and Communication Engineers”, in the field of technical education and research.
                                                            The department has well-qualified, self-motivated, experienced, and committed
                                                            teaching talent whose main focus is on Teaching-Learning with the right balance
                                                            in research. Throughout its sparkling history of 36 years, the department of E&CE
                                                            has been known for its exceptionally strong Under-Graduate and Post Graduate
                                                            training programs.
                                                        </p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Department offers 4 years of Undergraduate (UG) program in B.E and
                                                            two years of Post Graduate (PG) program in M. Tech. with a specialization in
                                                            Digital Electronics and Communication. The UG program was started in 1986,
                                                            right from the inception of the college and the PG program was started in the year
                                                            2004. The current student intake for the UG program is 60 and for the PG program
                                                            is 18. In addition, the department has a VTU-recognized research center that
                                                            offers high-quality research programs at the doctoral level. Presently 6 scholars
                                                            are pursuing their Ph.D. degrees in the research center.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department has thirteen well-qualified and dedicated faculty
                                                            members- 4 doctorates and 9 M.Tech. degree holders- with an average experience
                                                            of sixteen years- who are serving in the department. Since its inception, the
                                                            department has achieved three university ranks in UG and six ranks in PG
                                                            programs.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order to foster the technical and leadership qualities in students , the
                                                            department has a student association namely ENCEA. Under its banner; students
                                                            organize various technical seminars, workshops and invited lectures exclusively
                                                            for the students. The resource persons are from industry, academic institutions
                                                            and R&D centers. This helps the students to be exposed to the emerging and stateof-the-art technological developments in the E&CE arena. National Conference
                                                            “E- Congregation” is organized every year for the students. The departmental
                                                            newsletter ‘Abhivyakthi' is brought out in every semester.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department has adequate infrastructure and well-equipped laboratories.
                                                            The laboratory facilities include a sufficient number of personal computers with
                                                            LAN connectivity, internet facility, software packages and hardware are
                                                            regularly being upgraded with time. Department is equipped with LCD projectors
                                                            for lecture delivery, seminars and demonstration purpose in addition to an ICTenabled classroom. A separate mini-project laboratory has been established for
                                                            the academic year 2022-23. Currently, MOU has been signed with the company
                                                            Takshila Institute of VLSI Technologies, Bengaluru.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Staff members are provided with separate faculty chambers and cabins.
                                                            Wi-fi hotspots have been provided in classrooms, laboratories and faculty cabins.
                                                            In addition to Central Library; Departmental Library has more than 1400 volumes
                                                            with 378 titles, which includes academic, competitive related books and thesis
                                                            reports of B.E, M.Tech, and Ph.D. that can be accessed by students as well as
                                                            faculties.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The curriculum and syllabi for the programs offered in the department are
                                                            currently designed as per the National Education Policy (NEP-2020). The
                                                            curriculum is designed to balance the depth of knowledge acquired through
                                                            specialization and the breadth of knowledge gained through exploration and is
                                                            ready to provide quality technical courses on par with IIT and NITs. The
                                                            undergraduate degree courses offered by the department provide a
                                                            comprehensive foundation in the core topics of ECE coupled with areas of
                                                            interdisciplinary specialization relevant to emerging engineering challenges. </p>
                                                       
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
                                                                <p>"To create Innovative, Ethical and Sociable Electronics and Communication Engineers" </p>
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
                                                                    <li><b>M1: </b>Implement Academic Process through University Syllabus and Identified Curriculum Gaps</li>
                                                                    <li><b>M2: </b>Provide platforms for Teambuilding, Leadership Skills in students community through Motivation and Communication</li>
                                                                    <li><b>M3: </b>Build Ethical and Leadership skills through Interactions with the outside world</li>
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
                                                                    <li><b>PEO 1: </b>Engage in designing, manufacturing, testing, operating and/or maintaining systems in the field of electronics and communication engineering and allied engineering industries
                                                                    </li>
                                                                    <li><b>PEO 2: </b>Solve problems of social relevance by applying the knowledge of electronics and communication engineering, and/or pursuing higher education and research</li>
                                                                    <li><b>PEO 3: </b>Work effectively as individuals and as team members, engage in lifelong learning and adapt to changing professional and societal needs</li>

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

                                                                    <li><b>PSO1 : </b>Specify, design, build and test analog, digital and embedded systems for signal processing</li>
                                                                    <li><b>PSO2 : </b>Understand and architect wired and wireless analog and digital communication systems as per specifications, and determine their performance
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
                                                                <li>Adequate infrastructure & Well-Equipped Laboratories</li>
                                                            <li>Well-qualified, self-motivated, experienced and dedicated faculties.</li>
                                                            <li>Highest campus placement from elite core and software companies.</li>
                                                            <li>VTU Research Centre [Ph.D.]</li>
                                                            <li>Department Association ENCEA (Electronics and Communication
                                                                Engineering Association)</li>
                                                            <li>Karnataka State Council for Science & Technology (KSCST) and VTU
                                                                funded UG projects.</li>
                                                            <li>o Department Library with more than 1400 Books</li>
                                                            <li>Industrial Projects & Internships</li>
                                                            <li>MoU with companies</li>
                                                            <li>“Amara Kannada Sahithya Vedike”- a forum to encourage the students
                                                                and staff to involve in activities relevant to Kannada literature</li>


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
                                                <h2>Teaching Staff</h2><br>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/kusuma1.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. KUSUMADHARA S</h4>
                                                                <h5 style="color:white">Professor & HOD</h5>
                                                                <h5 style="color:white">B.E,M.Tech,Ph.d,MISTE</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/Dr. Kusumadhara S.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/savitha.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. Savitha M</h4>
                                                                <h5 style="color:white">Associate Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech,Ph.d,MISTE</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/savitha m.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/anil.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Anil B V</h4>
                                                                <h6 style="color:white">Date of Join : 04-07-2005</h6>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/Anil B V.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/bhagya.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Dr. Bhagya H K</h4>
                                                                <h5 style="color:white">Associate Professor</h5>
                                                                <h5 style="color:white">M.Tech,Ph.d,MISTE</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/Bhagya H K.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/vijay.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Vijaya Kumar K</h4>
                                                                <h5 style="color:white">Associate Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech,MISTE</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/Vijay kumar.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/rekha.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Rekha A A</h4>
                                                                <h5 style="color:white">Associate Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <!-- <a href="profile/ec/savitha m.pdf"><i class="fab fa-creative-commons-by"></i></a> -->


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/jaga.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Jagadeesh M </h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/Jagadeesh.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/rekha m b.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Rekha M B</h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href=""><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/aruna.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Aruna P G</h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.Tech,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/Aruna PG.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/lokesh.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Lokesh P C</h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/Lokesh P C.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/sathyajith.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Sathyajith M</h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/Satyjith.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/ece/adarsha.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Prof. Adarsha D</h4>
                                                                <h5 style="color:white">Assistant Professor</h5>
                                                                <h5 style="color:white">B.E,M.Tech</h5>
                                                                <div class="social-links">

                                                                    <a href="profile/ec/Adarsha.pdf"><i class="fab fa-creative-commons-by"></i></a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                                <h2>Technical & Supporting Staff</h2>
                                                <br>
                                                <div class="row" style="align-items:center">


                                                    <!-- <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/civil/mujeeb.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mr. Ananda M</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="profile/civil/Mr. Ananda  M.pdf" target="_blank"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="member">
                                                            <div class="member-img">
                                                                <img src="admin-kvgce/photos/faculty/civil/mujeeb.jpg" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="member-info">
                                                                <h4>Mrs. Dhanyashree N P</h4>
                                                                <span></span>
                                                                <div class="social-links">
                                                                    <a href="profile/civil/Miss. DHANYASHRI N P.pdf" target="_blank"><i class="fab fa-creative-commons-by"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <!-- <div class="col-lg-3 col-md-6">
                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="member-img">
                                <img src="admin-kvgce/photos/faculty/sonia mam.JPG"
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
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="member-img">
                                <img src="admin-kvgce/photos/faculty/bhavya mam.JPG"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Prof. Bhavya P S</h4>
                                <span>ISO Developer</span>
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
                </div> -->
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
                                        <p>ElectronicDevices and Instrumentation Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Digital System Design Lab </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Microcontroller Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Analog Circuit Lab.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>HDL Lab </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Digital Signal Processing Lab </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Embedded System Lab
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Communication Lab </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Computer Network Lab </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>VLSI Lab </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Project Lab </p>
                                    </div>
                                </div>
                            </div>>
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="facility-box">
                                        <p>Mentor Graphics</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Xilinx</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Microwind</p>
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>MATLAB </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Code Composer Studio </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>ARM Cortex/ Keil/ Flash Magic </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Multisim </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="facility-box">
                                        <p>Smart Classrooms</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Department Library</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Department Seminar Hall</p>
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Co-curricular and Extracurricular activities through </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Departmental Association (ENCEA) </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Funded Projects </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>NSS and YRC unit </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="facility-box">
                                        <p>Internet and Wi-Fi facility </p>
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
                                <!-- <table id="customers">
                                    <tr>
                                        <th>SL.NO</th>
                                        <th>Name</th>
                                        <th>Company</th>
                                      
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>MAHIMA KAMATH N</td>
                                        <td>SLK SOFTWARE</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ABHILASH K GEORGE</td>
                                        <td>ROBOSFT TECHNOLOGY</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>PRAKASH NAYAK P</td>
                                        <td>ROBOSFT TECHNOLOGY & CHEGG INDIA PVT. LTD.</td>
                                      
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>VINEETH K H</td>
                                        <td>TECHNOLOGICS GLOBAL PVT. LTD. & LAURUS INFOSYSTEMS (India) PVT. LTD</td>
                                     

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>SAGAR GOPAL NAIK</td>
                                        <td>INFOSYS & CHEGG INDIA PVT. LTD.</td>
                                     

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>SUJITH RAI M</td>
                                        <td>CHEGG INDIA PVT. LTD. & EPIANCE SOFTWARE PVT. LTD.</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>AHMED RAZA</td>
                                        <td>DIYA SYSTEMS & NTT DATA</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>BHAVISHA K H</td>
                                        <td>SANESQUARE TECHNOLOGY PVT. LTD. & NTT DATA</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>DEEKSHA AMIN</td>
                                        <td>Jspider & DXC TECHNOLOGY</td>
                                      
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>GAGANA</td>
                                        <td>QSPIDERS</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>JAHNAVI J</td>
                                        <td>Jspider & DXC TECHNOLOGY</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>JASMITHA P S</td>
                                        <td>QSPIDERS</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>KAVYASHREE K P</td>
                                        <td>QSPIDERS</td>
                                       
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>NAMRATHA S</td>
                                        <td>QSPIDERS & Alchemy</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>NIREEKSHA M J</td>
                                        <td>QSPIDERS & NTT DATA</td>
                                      
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>SHAILESH M S</td>
                                        <td>SANESQUARE TECHNOLOGY & L&T Technology Servive</td>
                                     
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td>SHREEJA RAI M</td>
                                        <td>QSPIDERS & INFOSYS</td>
                                       
                                    </tr>

                                    <tr>
                                        <td>18</td>
                                        <td>PRUTHVI K</td>
                                        <td>INFOSYS</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>19</td>
                                        <td>SNEHA A G</td>
                                        <td>QSPIDERS</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>20/td>
                                        <td>SPOORTHI B G</td>
                                        <td>QSPIDERS & Informatica Business Solutions Pvt. Ltd.</td>
                                    
                                    </tr>

                                    <tr>
                                        <td>21</td>
                                        <td>THRUPTHI K K</td>
                                        <td>World Line Global</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td>VINOD ISHWAR PATGAR</td>
                                        <td>QSPIDERS & Chegg India Pvt. Ltd. & NTT DATA & L&T Technology Servive</td>
                                     
                                    </tr>

                                    <tr>
                                        <td>23</td>
                                        <td>K. R SHISHIR KRISHNA</td>
                                        <td>NTT DATA</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>ABDUL SABAD A G</td>
                                        <td>NTT DATA</td>
                                  
                                    </tr>

                                    <tr>
                                        <td>25</td>
                                        <td>LAKSHMI D K</td>
                                        <td>NTT DATA & ARIS GLOBAL</td>
                                     
                                    </tr>

                                    <tr>
                                        <td>26</td>
                                        <td>Krithika Shagrith AS</td>
                                        <td>Harman Connected Services</td>
                                    
                                    </tr>

                                    <tr>
                                        <td>27</td>
                                        <td>Raveesha N</td>
                                        <td>CHEGG INDIA PVT. LTD.</td>
                                     
                                    </tr>

                                    <tr>
                                        <td>28</td>
                                        <td>YAJNESH N U </td>
                                        <td>INFOSYS & CAPGEMINI.</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>29</td>
                                        <td>SINCHANA A </td>
                                        <td>TATA CNSULTANCY SERVICES</td>
                                      
                                    </tr>
                                </table> -->
                            </div>

                        </div>

                        <div class="tab-pane fade" id="activities">

                            <div class="department-activities-box">
                                <div class="department-activities">
                                    <h2>Department of Electronics and Communication Engineering Association celebrated “KANNADA RAJYOTSAVA” on 1st of November 2021. Ceremony was presided by Mr. Krishnananda.A, Head of the Department, MBA. Students of 7th semester and 5th semester were present on that occasion.</h2>
                                    <div class="department-activities-img gallery">
                                        <table>
                                            <tr>
                                                <td><img src="images/ecact.jpg" class="img-responsive" style="max-width:350px"></td>
                                                <td><img src="images/ecact2.jpg" class="img-responsive" style="max-width:350px"></td>
                                            </tr>
                                        </table>
                                    </div>


                                </div>
                            </div>


                            <div class="department-activities-box">
                                <div class="department-activities">
                                    <h2>On 17th November 2021, final year and pre-final year students were scheduled for a technical talk on “Overview of image and video analytics with industrial case studies” by Dr. Harikrishna Rai, Staff technical product manager GE Health care services, Bengaluru. </h2>
                                    <div class="department-activities-img gallery">
                                        <table>
                                            <tr>

                                                <td><img src="images/ecact3.jpg" class="img-responsive" style="max-width:350px"></td>
                                            </tr>
                                        </table>
                                    </div>


                                </div>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="internship">
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

                                <h2>2021</h2>
                                <table id="customers">
                                    <tr>

                                        <th>Company Name</th>
                                        <th>Location</th>
                                    </tr>
                                    <tr>

                                        <td>Vitvara technologies</td>
                                        <td>Manglore</td>
                                    </tr>

                                    <tr>

                                        <td> Tycon Innovative Technologies </td>
                                        <td>Mysore</td>
                                    </tr>


                                </table>
                                <h2>2022</h2>
                                <table id="customers">
                                    <tr>

                                        <th>Company Name</th>
                                        <th>Location</th>
                                    </tr>
                                    <tr>

                                        <td>Vivattana technologies</td>
                                        <td>Banglore</td>
                                    </tr>
                                    <tr>

                                        <td> Bionic Engineers</td>
                                        <td>Manglore</td>
                                    </tr>

                                    <tr>

                                        <td> Mictro Embedded solutions </td>
                                        <td>Manglore</td>
                                    </tr>

                                    <tr>

                                        <td> Vi Solutions </td>
                                        <td>Manglore</td>
                                    </tr>




                                    <tr>

                                        <td> Tycon Innovative Technologies </td>
                                        <td>Mysore</td>
                                    </tr>
                                    <tr>

                                        <td> VivattVitvara ana Technologies </td>
                                        <td>Manglore</td>
                                    </tr>

                                    <tr>

                                        <td> Saitech Integarated Solutions </td>
                                        <td>Mysore</td>
                                    </tr>

                                    <tr>

                                        <td>Emertxe Information Technologies </td>
                                        <td>Mysore</td>
                                    </tr>
                                    <tr>

                                        <td> Contrives </td>
                                        <td>Mysore</td>
                                    </tr>
                                    <tr>

                                        <td> EI systems </td>
                                        <td>Banglore</td>
                                    </tr>
                                </table>


                            </div>
                        </div>





                        <div class="tab-pane fade" id="newsletter">
                            <div class="row">
                            <div class="col-md-2">
                                    <a href="images/department/ec/Abhivyakthi 2019-20 (1).pdf" target="_blank"><button style="background-color:#2FA4E7;padding:8px;border-radius:8px;color:white;border:#006199;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Abhivyakthi 2019-20 (1)</button>
                                    <!-- <h4> Newsletter 2018 - 2019</h4> -->
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="images/department/ec/ABHIVYAKTHI 2019-20(2).pdf" target="_blank"><button style="background-color:#2FA4E7;padding:8px;border-radius:8px;color:white;border:#006199;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Abhivyakthi 2019-20 (2)</button>
                                        <!-- <h4> Newsletter 2019 - 2020</h4> -->
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="images/department/ec/abhivyakthi 2020-21(1).pdf" target="_blank"><button style="background-color:#2FA4E7;padding:8px;border-radius:8px;color:white;border:#006199;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Abhivyakthi 2020-21(1)</button>
                                        <!-- <h4> Newsletter 2020 - 2021</h4> -->
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a href="images/department/ec/Abhivyakthi 2020-21(2).pdf" target="_blank"><button style="background-color:#2FA4E7;padding:8px;border-radius:8px;color:white;border:#006199;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Abhivyakthi 2020-21(2)</button>
                                        <!-- <h4> Newsletter 2020 - 2021</h4> -->
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