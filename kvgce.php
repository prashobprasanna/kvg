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
        <div><img src="images/banner/aboutusImage.jpg" class="img-responsive"></div>
    </section>
    <br>
    <section id="president">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head" style="color:#4c449d ;"> ABOUT US<span></span></h2>
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
                    #myBtn2 {
                        display: none;
                    }

                    #som {
                        font-size: 25px;
                    }

                    @media (max-width:767px) {
                        #som {
                            font-size: 14px;
                        }

                        /* #nobq{display: none;} */
                        #more2 {
                            display: none;
                        }

                        #myBtn2 {
                            display: inline;
                        }

                        #h3f {
                            font-size: 16px;
                            font-weight: solid;

                        }
                    }
                </style>
                <style>
                    /* #myBtn1 {display: none;} */
                    #myBtn1 {
                        display: none;
                    }

                    #som {
                        font-size: 25px;
                    }

                    @media (max-width:767px) {
                        #som {
                            font-size: 14px;
                        }

                        /* #nobq{display: none;} */
                        #more1 {
                            display: none;
                        }

                        #myBtn1 {
                            display: inline;
                        }

                        #h3f {
                            font-size: 16px;
                            font-weight: solid;

                        }
                    }
                </style>
                <style>
                    /* #myBtn1 {display: none;} */
                    #myBtn3 {
                        display: none;
                    }

                    #som {
                        font-size: 25px;
                    }

                    @media (max-width:767px) {
                        #som {
                            font-size: 14px;
                        }

                        /* #nobq{display: none;} */
                        #more3 {
                            display: none;
                        }

                        #myBtn3 {
                            display: inline;
                        }

                        #h3f {
                            font-size: 16px;
                            font-weight: solid;

                        }
                    }
                </style>
                <style>
                    /* #myBtn1 {display: none;} */
                    #myBtn4 {
                        display: none;
                    }

                    #som {
                        font-size: 25px;
                    }

                    @media (max-width:767px) {
                        #som {
                            font-size: 14px;
                        }

                        /* #nobq{display: none;} */
                        #more4 {
                            display: none;
                        }

                        #myBtn4 {
                            display: inline;
                        }

                        #h3f {
                            font-size: 16px;
                            font-weight: solid;

                        }
                    }
                </style>
                <center>
                    <div class="card1">

                        <div class="infos">
                            <div class="name">
                                <!-- <strong><div class="header-fullname " id="som"> LATE DR. KURUNJI VENKATRAMANA GOWDA</div></strong> -->
                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 stats-col">
                                
                                <div class="stats-title"> M.Tech., Ph.D.</div>
                            </div> -->
                            </div>
                            <!-- <p class="text">
                            <strong> ukskvgce@gmail.com &nbsp;&nbsp;&nbsp;08257-231141 Ext: 5137</strong>
                        </p> -->
                            <ul class="stats1">
                                <li>

                                    <p style="text-align: justify;"><span id="dots1"></span><span id="more1"> K.V.G. College of Engineering sponsored by Academy of Liberal Education (R) Sullia D.K. is located in Kurunjibhag and is one of the largest mega educational complexes in India.

                                            The campus is offering Diploma, Graduate and Post Graduate Programmes in Engineering, Management, Medicine, Dental, Ayurvedic, Nursing, Polytechnic, ITI, Law, Science, Commerce, Arts etc. All these various streams in one single campus has made "Kurunjibhag" a unique place for learning in India. </span></p>

                                    <p style="text-align: justify;"><span id="dots1"></span><span id="more1"></span>
                                        KVG College of Engineering is amongst top few reputed engineering colleges in Karnataka State, India, established in 1986. KVG is one of the first private sector initiatives in technical education in Southern Karnataka State located in Kurunjibhag, Sullia, Dakshina Kannada and is affiliated to Visvesvaraya Technological University (VTU), Belgaum. KVGCE is approved by All India Council for Technical Education AICTE (New Delhi) & has ISO 9001-2000 certification.
                                    </p>
                                    <p style="text-align: justify;"><span id="dots1"></span><span id="more1"></span>>
                                        KVGCE has an impeccable & diverse Academy of Liberal Education ® lead by Founder & Chairman Dr Kurunji Venkatramana Gowda & Active General Secretary Dr K V Renuka Prasad. Society is well supported by able leaders on the ground. Principal Dr N.A Jnanesh & Vice Principal Dr. Shivakumar H R, who have a Team of learned & experienced Heads of Dept (HODs) & Faculty /Support staff members. College prides in offering a Professionally fulfilling & fun-filled environment that supports faculty /staff to deliver the very best teaching cum support to students plus valued contributions to Research & Development. KVG Group is amongst the best in Faculty retention & Student drop-out.
                                    </p>
                                    <p style="text-align: justify;"><span id="dots1"></span><span id="more1"></span>>
                                        KVGCE is further modernizing its sprawling campus with State-of Art Classroom Facilities, Laboratories, Research Infrastructure & overall extra curricular activities. KVGCE is pursuing this modernization in line with its objective of providing Industry-Ready Engineers/ Managers while fostering Industry-lead research & Inter-Institution/ Intra-Institution collaboration.
                                    </p>

                                </li>
                            </ul>

                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section>

    <section class="home-facts-bg" id="secretary">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head"> VISION<span></span></h2>
                <style>

                </style>
                <center>
                    <div class="card1">
                        <div class="img">
                            <img src="admin-kvgce/photos/gen_secretary.jpg" style="width:600px; margin-bottom: 20px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" style="font-size: 25px;">DR. K V RENUKA PRASAD</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">


                                </div>
                            </div>

                            <ul class="stats1">
                                <li>
                                    <blockquote>
                                        <p style="text-align: justify;"><span id="dots2"></span><span id="more2"> "Dreams pass into the reality of action. From the actions stems the dream again; and this interdependence produces the highest form of living." </span></p>
                                        <button onclick="myreadmoreFunction1()" id="myBtn2">READ MORE</button>
                                    </blockquote>
                                    </blockquote>
                                </li>
                            </ul>
                            <div class="links1">
                                <!-- <button class="follow">Follow</button> -->
                                <!-- <button class="view">MORE</button> -->
                            </div>
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section>
    <section class="home-facts-bg" id="ceo">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head"> Chief Executive Officer<span></span></h2>
                <style>

                </style>
                <center>
                    <div class="card1">
                        <div class="img">
                            <img src="admin-kvgce/photos/faculty/ujwal sir.JPG" style="width:600px; margin-bottom: 20px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" style="font-size: 30px;">DR. UJWAL U J</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">

                                    <!-- <div class="stats-title"> M.Tech., Ph.D.</div> -->
                                </div>
                            </div>

                            <ul class="stats1">
                                <li>
                                    <blockquote>
                                        <p style="text-align: justify;"><span id="dots3"></span><span id="more3"> "KVG College of Engineering focuses on addressing the needs of students fromcurricular, co-curricular and extra-curricular point of view. It is the innateprinciple of our institution that every single student must realize her or his goalto be a robust and effective part of the world to solve real world problems and tobe an asset to the society"</span></p>
                                        <button onclick="myreadmoreFunction2()" id="myBtn3">READ MORE</button>
                                    </blockquote>
                                    </blockquote>
                                </li>
                            </ul>
                            <div class="links1">
                                <!-- <button class="follow">Follow</button> -->
                                <!-- <button class="view">MORE</button> -->
                            </div>
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section>
    <section class="home-facts-bg" id="princi">
        <div class="container">
            <div class="col-md-12">
                <h2 class="subheadWhite head"> Principal<span></span></h2>
                <style>

                </style>
                <center>
                    <div class="card1">
                        <div class="img">
                            <img src="admin-kvgce/photos/suresh.jpg" style="width:600px; margin-bottom: 20px;">
                        </div>
                        <div class="infos">
                            <div class="name">
                                <strong>
                                    <div class="header-fullname" style="font-size: 25px;">DR. SURESHA V</div>
                                </strong>
                                <div class="col-md-12 col-sm-12 col-xs-12 stats-col">


                                </div>
                            </div>
                            <p class="text">
                                <strong> ukskvgce@gmail.com &nbsp;&nbsp;&nbsp;08257-231141 Ext: 5137</strong>
                            </p>
                            <ul class="stats1">
                                <li>
                                    <blockquote>
                                        <p style="text-align: justify;"><span id="dots4"></span><span id="more4"> "Do not go where the path may lead, go instead where there is no path and leave trail."</span></p>
                                        <button onclick="myreadmoreFunction3()" id="myBtn4">MORE</button>
                                    </blockquote>
                                    </blockquote>
                                </li>
                            </ul>
                            <div class="links1">
                                <!-- <button class="follow">Follow</button> -->
                                <!-- <button class="view">MORE</button> -->
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
    <script>
        function myreadmoreFunction1() {
            var dots = document.getElementById("dots2");
            var moreText = document.getElementById("more2");
            var btnText = document.getElementById("myBtn2");

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
    <script>
        function myreadmoreFunction2() {
            var dots = document.getElementById("dots3");
            var moreText = document.getElementById("more3");
            var btnText = document.getElementById("myBtn3");

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
    <script>
        function myreadmoreFunction3() {
            var dots = document.getElementById("dots4");
            var moreText = document.getElementById("more4");
            var btnText = document.getElementById("myBtn4");

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
    <!-- footer> -->
    <?php include('footer.php') ?>



    
</body>

<!-- Mirrored from www.sjec.ac.in/department-computer-science.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Apr 2022 12:11:44 GMT -->

</html>