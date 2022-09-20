<!DOCTYPE html>
<html lang="en">

<body>
    <header>
        <?php
        include('navbar.php');
        ?>
    </header>

    <section class="inner-banner wow fadeIn" data-wow-delay=".2s" style="padding:0">
        <div><img src="admin-kvgce/photos/dept slider/CS&E-placed students.JPG" class="img-responsive"></div>
    </section>

    <section class="home-facts-bg">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head" style="color: black;">Training & Placement Officer<span></span></h2>
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
                            <img src="admin-kvgce/photos/faculty/ece/anil.jpg" style="width:600px; margin-bottom: 20px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" id="som" style="font-size:larger;"> PROF. ANIL B.V</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">

                                    <div class="stats-title"></div>
                                </div>
                            </div>
                            <p class="text">
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
                                        <button onclick="myreadmoreFunction()" id="myBtn1" style="background-color:transparent;border:0px;">READ MORE</button>
                                    </blockquote>
                                </li>
                            </ul>
                            <div class="links1">

                                <a href="profile/ec/Anil B V.pdf" target="_blank"> <button class="view">View Profile</button></a>
                            </div>
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

    <!-- about and faculty -->


    <div class="container">

        <!--our-quality-shadow-->
        <div class="clearfix"></div>
        <div class="tabbable-panel margin-tops4 ">
            <div class="tabbable-line">
                <ul class="nav nav-tabs tabtop  tabsetting">
                    <li class="active"> <a href="#abouts" data-toggle="tab"> About </a> </li>
                    <li> <a href="#Faculty" data-toggle="tab"> Faculty </a> </li>
                    <!-- <li> <a href="#Facility" data-toggle="tab">Facility </a> </li> -->
                    <li> <a href="#Placements" data-toggle="tab"> Placements</a> </li>
                </ul>

                <div class="tab-content margin-tops">
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

                        .shd {
                            padding: 15px 20px;
                            width: 97.5%;
                        }
                    </style>

                    <div class="tab-pane fade team active in" id="abouts">

                        <div class="col-md-12">
                            <h1 style="margin: 0 0 15px; font-size: 26px; border-bottom: 2px solid #07294d; padding-bottom: 10px; text-align: left;">About<br /><span style="font-weight: 500; text-align: left; font-size: 32px; color: #ffc600;"> Placement Cell </span></h1>
                            <section class="inner-page-bg" style="padding:0; height:fit-content;"> <br>
                                <div class="container inner-page shd" style=" border:3px solid rgb(59, 13, 0); border-radius:18px; margin-left:0%;">

                                    <div class="conainer">

                                        <hr>
                                        <div class="data_more_less">
                                            <div class="data_more_less_inner" data-height="300" data-increase-by="400">
                                                <div class="data_more_less_body" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:15px;">
                                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Training and Placement Cell was an integral part of our Institution with
                                                        objectives of preparing
                                                        students as competent technocrats. Students are professionally developed to meet the unfolding
                                                        dynamic environment through quality training to bring excellence on Personality development,
                                                        Communication Skills, Industry to Institute Convergence expert interaction sessions, Aptitude tests,
                                                        Confidence Grooming Sessions, Group Discussion and Mock Interview Sessions, Public Sector
                                                        Competitive Exams Training, Technical Training and Industry Internship Programs. Due to this
                                                        students are well equipped to manage working norms set by the Industry. We impart state of the art
                                                        training to students to make them competent and inspired engineers.
                                                    </p>
                                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Training is imparted by Internal
                                                        Faculties and External Professional vendors as part of pre placement training. Eminent engineers and
                                                        personalities are invited to deliver lectures and hold seminars on emerging fields, with a view to
                                                        bring out the technical expertise within the students. We are working more closely than ever before
                                                        to mold the generations of students to make a resounding global impact. Many books are available in
                                                        the library to help students prepare for interviews. Efforts are on to improve the communication,
                                                        group discussion and presentation skills of the students. English Language lab was established to
                                                        robust the communication skills which is pre requisite in the corporate world.</p>
                                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reputed companies visit our institute regularly for placements. To enhance job opportunities to our
                                                        students combined campus pool will be organized with 20 Engineering colleges in the Mangalore
                                                        region. College has tie up with Infosys, TCS and other companies to keep the students abreast for
                                                        latest technologies.</p>
                                                </div>
                                            </div>

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

                        <div class="container" style="float:left;">



                            <div class="col-md-12"><br>
                                <h1 style="margin: 0 0 15px; font-size: 26px; border-bottom: 2px solid #07294d; padding-bottom: 10px; text-align: left;"><br /> <span style="font-weight: 500; text-align: left; font-size: 32px; color: #ffc600;">Career Guidance and Higher Education:</span></h1>
                                <section class="inner-page-bg" style="padding:0; height:fit-content;"> <br>
                                    <div class="container inner-page shd" style=" border:3px solid rgb(59, 13, 0); border-radius:18px;margin-left:0%;">

                                        <div class="conainer">

                                            <hr style="width:fit-content">
                                            <div class="data_more_less">
                                                <div class="data_more_less_inner" data-height="300" data-increase-by="400">
                                                    <div class="data_more_less_body" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:15px;">
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Training and Placement Cell is also the centre for providing inputs on
                                                            career opportunities for
                                                            higher studies. Career Guidance Cell which functions on shaping the desire of students towards their
                                                            specific goal either Employment or Higher studies. Guidance/Mentoring pertains to Higher Study and
                                                            different Employment opportunities other than engineering also provided based on the requirement by
                                                            the students. The Department has set up all the required facilities for the conduction of the
                                                            recruitment process such as Seminar hall for company presentations, Group Discussion rooms,
                                                            interview Cabins ,discussion rooms, Board Room and full-fledged computer labs with dedicated
                                                            internet connectivity for conducting Online test.
                                                        </p>
                                                    </div>
                                                </div>

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


                                <style>
                                    .panel-group {
                                        background: #fff0 none repeat scroll 0 0;
                                        border-radius: 3px;
                                        margin-bottom: 0;
                                        box-shadow: none;
                                        padding: 30px;
                                    }
                                </style>


                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default" style="border-radius: 20px;">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Vision </a> </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <p>"To enrich students’ capability for gaining, sustaining, and growing with industrial employment through adequate training for the acquisition of requisite skills </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default" style="border-radius: 20px;">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Mission </a> </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p>
                                                            To provide every student ample opportunity
                                                        </p>
                                                        <ul type="list">
                                                            <li>In training / internship to be industry ready </li>
                                                            <li>For placement to work in the industry of their choice</li>
                                                            <li>To be placed through the collaborative involvement of stakeholders </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>


                        <style>
                            .responstable {
                                border-radius: 18px;
                            }
                        </style>


                    </div>
                    <br><br><br><br>


                    <div class="tab-pane fade" id="Faculty">

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
                                            margin-right: 6%;
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
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="member">
                                                        <div class="member-img">
                                                            <img src="admin-kvgce/photos/faculty/ece/rekha.jpg" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="member-info">
                                                            <h4>PROF. Rekha A A.</h4>
                                                            <div class="social-links">
                                                                <!-- <a href="profile"><i class="fab fa-creative-commons-by"></i></a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6">
                                                    <div class="member">
                                                        <div class="member-img">
                                                            <img src="admin-kvgce/photos/faculty/ece/apoorva.jpg" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="member-info">
                                                            <h4>PROF. Apoorva B</h4>
                                                            <div class="social-links">
                                                                <!-- <a href="profile"><i class="fab fa-creative-commons-by"></i></a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6">
                                                    <div class="member">
                                                        <div class="member-img">
                                                            <img src="admin-kvgce/photos/faculty/BP-sir.jpg" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="member-info">
                                                            <h4>Prof. Balapradeep K N</h4>
                                                            <div class="social-links">
                                                                <!-- <a href="profile"><i class="fab fa-creative-commons-by"></i></a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6">
                                                    <div class="member">
                                                        <div class="member-img">
                                                            <img src="admin-kvgce/photos/faculty/jyothimani-mam.jpg" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="member-info">
                                                            <h4>Dr.Jothimani K </h4>
                                                            <div class="social-links">
                                                                <!-- <a href="profile"><i class="fab fa-creative-commons-by"></i></a> -->
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
                                                            <h4>Prof. Adarsh D</h4>
                                                            <div class="social-links">
                                                                <!-- <a href="profile"><i class="fab fa-creative-commons-by"></i></a> -->
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
                                                            <h4>Prof. Sathyajith K</h4>
                                                            <div class="social-links">
                                                                <!-- <a href="profile"><i class="fab fa-creative-commons-by"></i></a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-3 col-md-6">
                                                    <div class="member">
                                                        <div class="member-img">
                                                            <img src="admin-kvgce/photos/faculty/civil/krishnaraj.jpg" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="member-info">
                                                            <h4>Prof. Krishnaraj M.V</h4>
                                                            <div class="social-links">
                                                                <!-- <a href="profile"><i class="fab fa-creative-commons-by"></i></a> -->
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
                                                            <h4>Prof.Prashanth K </h4>
                                                            <div class="social-links">
                                                                <!-- <a href="profile"><i class="fab fa-creative-commons-by"></i></a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="align-items:center">



                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="tab-pane fade" id="Placements">
                        <h3>Group Photo of Placed students(2022)</h3>
                        <div class="row">

                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/CS&E-placed-students.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/CV-placed-students.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/E&CE-placed-students.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/GROUP-PHOTO-2022.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/ME-placed-students.jpg">
                                </div>
                            </div>
                        </div>

                        <h3>Comapny wise placement photos</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/1.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/3.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/7.jpg">
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div>
                                    <img src="images/placement/2.jpg" style="width:50%">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/4.jpg" style="width:50%">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/5.jpg" style="width:50%">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="images/placement/6.jpg" style="width:50%">
                                </div>
                            </div> -->

                        </div>
                        <h3>Computer Science & Engineering</h3>
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

                        

                        <div class="row">
                        <table id="customers">
                                    <caption> <h2>Electronics & Communication Engineering Placement 2021-22 </h2></caption>
                                    <tr>
                                        <th>SL.NO</th>
                                        <th>Name</th>
                                        <th>Company</th>
                                      
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>SHREEVARA P S</td>
                                        <td>Wipro/INFOSYS/SIGNDESK/EMERTXE</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>SHREEKANTH A P </td>
                                        <td>Tata Consultancy Services</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>YASHWITH  K G</td>
                                        <td>SSI PEOPLE/ Qspider</td>
                                      
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>BINDYA B</td>
                                        <td>PALLE TECHNOLOGY/ NTT DATA/Accord /Continental</td>
                                     

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>SACHIN K C</td>
                                        <td>Talentpace/EMERTEX </td>
                                     

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>PALLAVI K S </td>
                                        <td>Capgemini/Infosys</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>MANASVI A. R</td>
                                        <td>BYJU’S</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>KISHAN K S</td>
                                        <td>EMERTEX</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>BHAGYALAKSHMI S</td>
                                        <td>EMERTEX /Qspiders/Accord/Continental</td>
                                      
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>ANUPRIYA A K</td>
                                        <td>EMERTEX</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>CHETHAN K S T S</td>
                                        <td>EMERTEX</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>POORVITHA K M</td>
                                        <td>EMERTEX</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>PRITHVIRAJ K S</td>
                                        <td>EMERTEX/ TAP Academy</td>
                                       
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>VEENASHREE P B</td>
                                        <td>INFOSYS</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>KAVYA T T</td>
                                        <td>Global Quest Technologies</td>
                                      
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>SANDEEP CHAVAN</td>
                                        <td>Qspiders</td>
                                     
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td>JAYAVANTH R DEVADIGA</td>
                                        <td>Qspiders/Brigosha</td>
                                       
                                    </tr>

                                    <tr>
                                        <td>18</td>
                                        <td>VYBHAVI MK</td>
                                        <td>QSPIDERS</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>19</td>
                                        <td>REKHA M B</td>
                                        <td>QSPIDERS</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td>NIDA FATHIMA</td>
                                        <td>QSPIDERS</td>
                                    
                                    </tr>

                                    <tr>
                                        <td>21</td>
                                        <td>AKASH M</td>
                                        <td>Pentagon Space</td>
                                      
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td>SHRIYA BK</td>
                                        <td>Skolar</td>
                                     
                                    </tr>

                                    <tr>
                                        <td>23</td>
                                        <td>RAJANI</td>
                                        <td>Robosoft Teachnologies </td>
                                     
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>DEEPIKA P Y</td>
                                        <td>Kodnest</td>
                                  
                                    </tr>

                                    <tr>
                                        <td>25</td>
                                        <td>POOJA G</td>
                                        <td>Kodnest</td>
                                     
                                    </tr>

                                   

                                  
                                </table>
                        </div>



                    </div>
                    <br>
                    <br>
                    

                    <style>
                        .panel-group {
                            background: #fff0 none repeat scroll 0 0;
                            border-radius: 3px;
                            margin-bottom: 0;
                            box-shadow: none;
                            padding: 30px;
                        }
                    </style>






                </div>
            </div>
        </div>
    </div>
    </section>




    <!-- about and faculty end -->
    <?php include('footer.php') ?>

</body>

</html>