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
        <div><img src="images/banner/admission.jpg" class="img-responsive"></div>
    </section>

    <section id="president">
        <div class="container">
            <div class="col-md-12">
                <br>
                <h2 class="subheadWhite head" style="color: #04192e"> Contact Person<span></span></h2>
                <style>
                    /* body,
html {
    height: 100%;
    font-family: 'Arial';
    font-size: 14px;
}


.conainer {
    width: 1000px;
    margin: 100px auto;
} */

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
                <div class="card1">

                    <div class="infos">
                        <div class="name">
                            <strong>
                                <div class="header-fullname" style="font-size: 25px;">Prof. Balapradeep</div>
                            </strong>
                            <div class="header-fullname" style="font-size: 15px;">office@kvgengg.com</div>
                            <div class="header-fullname" style="font-size: 15px;">Ph:(09257) 231141, 9742172852, 9448725573</div>
                            <div class="header-fullname" style="font-size: 15px;">KVG College of Engineering
                                Kurunjibhag, Sullia, D.K.
                                Karnataka State - 574327</div></strong>




                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="secretary">
        <div class="container">
            <div class="col-md-12">
                <br>
                <h2 class="subheadWhite head" style="color: #04192e"> Admission Procedure <span></span></h2>
                <style>

                </style>
                <div class="card1">

                    <div class="infos">
                        <div class="name">

                            <div class="col-md-12 col-sm-12 col-xs-12 stats-col">


                            </div>
                        </div>

                        <p style="text-align: justify;"> In the admission procedure, allotment of seats and fees structure for all the seats, our College strictly adheres the order of the Government of Karnataka amended from time to time and prevalent at the date of admission . As per the order of the Government of Karnataka, the allotment and distribution of the seats are as follows:</p>

                        <ul class="list">



                            <li> 45% of the seats are filled by the Government of Karnataka through Common Entrance Test (CET).</li>


                            <li> 55% of the seats are filled by Management.</li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="ceo">
        <div class="container">
            <div class="col-md-12">
                <br>
                <h2 class="subheadWhite head" style="color: #04192e"> Admission through CET<span></span></h2>
                <style>

                </style>
                <div class="card1">

                    <div class="infos">
                        <p style="text-align: justify;"> The Government of Karnataka conducts Common Entrance Test (CET) through Karnataka Examination Authority. This entrance exam is a gateway to get engineering seats in Government quota. The CET conducts the examination in for four subjects namely Physics, Chemistry, Biology and Mathematics. Candidates who want to get admission in Engineering courses appear for Physics, Chemistry and Mathematics exams. As per the CET ranking students can select the college at the time of CET counseling.
                        </p>
                        <p>For more information:<a href="kea.kar.nic.in">Click Here</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="princi">
        <div class="container">
            <div class="col-md-12">
                <br>
                <h2 class="subheadWhite head" style="color: #04192e"> Admission through Management<span></span></h2>
                <style>

                </style>
                <div class="card1">

                    <div class="infos">
                        <p style="text-align: justify;">Selections will be made in accordance with the Government regulations prevailing at the time of admission. Successful candidates will have to get themselves admitted immediately depending on the seat availability.</p>
                        </p>
                        <p>Instuctions: Applicants applying under Management quota are requested to read the rules & regulations carefully before filling up the application. Application is a key part of the admission process. Incomplete or false information will adversely affect. After scrutiny of application form, prospective candidates will be invited for a personal counseling.</p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="pro">
        <div class="container">
            <div class="col-md-12">
                <br>
                <h2 class="subheadWhite head" style="color: #04192e"> Documents Required at the time of Admission For Booking<span></span></h2>
                <style>

                </style>
                <div class="card1">

                    <ul class="list">
                        <li>10th standard marks card for proof of date of birth - Original + 3 attested photocopies.</li>

                        <li>12th standard/ equivalent marks card - Original + 3 attested photocopies.</li>
                        <li> Transfer certificate from the institution last attended - Original + 3 attested photocopies.</li>
                        <li> Migration Certificate from the University/Board last studied(for students other than from Karnataka PU Board, CBSE and ICSE) - Original + 3 photocopies.</li>
                        <li> Conduct Certificate from the institution last attended – Original only.</li>
                        <li> Medical Certificate for ascertaining the blood group.</li>
                        <li> Passport Size Photographs with red background - 10 numbers.</li>
                        <li>Caste cum Income Certificate (for CET and Karnataka Management Students).</li>
                        <li>Seven years study certificate (for CET students only).</li>
                        <li>A copy of the students’ account details ( if availing for scholarship offered by various Govt. bodies and private organizations )
                            Photocopy of Aadhar card-2 numbers.</li>
                    </ul>

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