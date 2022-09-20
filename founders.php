<!DOCTYPE html>
<html lang="en">

<body>
<?php  include('navbar.php');
        ?>
        <section class="inner-banner wow fadeIn" data-wow-delay=".2s" style="padding:0">
    <div><img src="images/banner/Slider3.jpg" class="img-responsive"></div>
</section>

<style>
                    /* #myBtn1 {display: none;} */
                    #myBtnfd {
                        display: none;
                    }

                    @media (max-width:767px) {

                        /* #nobq{display: none;} */
                        #morefd {
                            display: none;
                        }

                        #myBtnfd {
                            display: inline;
                        }
                    }
                </style>
                <style>
                    .gombo{
    text-align: right;
/* font-size:20px */
}
@media (max-width:767px){
.gombo{
    text-align: center;
font-size:20px
}
.pico{
    padding:30px;
    text-align: justify;
}
}
                </style>
<section id="founder" class="bshadow"><br><br>
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
            <h3 class="subheadWhite head" style="color: #3A3B3C;padding:0%;">FOUNDER PRESIDENT<span></span></h3>
                <h3 class="head1 gombo" ><strong>LATE Dr. KURUNJI VENKATRAMANA GOWDA</strong></h3>
                <div class="clearfix"></div><br>
            </div>
            <div class="clearfix"></div><br>
            <div class="col-sm-4">
                <img src="admin-kvgce/founder.png" class="img-responsive">
            </div>
            <div class="col-sm-8" style="font-size: 18px; font-size: 15px; letter-spacing: 1px; line-height: 1.9;">
                <p class="pico">Guided by the basic philosophy “JNANAM SARVATHRA SADHANAM” and with an aim of building Sullia as a world class learning centre, Dr. KURUNJI VENKATRAMANA GOWDA, Founder President, Academy of Liberal Education has converted tiny village into a modern learning center of the country<span id="dotsfd">...</span><span id="morefd">. Powered by the visionary leadership today AOLE® is a conglomerate with more than fifty educational institutions. Born as, one of the millions became one in millions. He is BHAGEERATHA who brought JNANA GANGA to this small town and made Sullia a VIDYA KASHI. <br> &nbsp;&nbsp;&nbsp;&nbsp;Dr. KVG is a man of many dimensions. He is an Educationist, a social reformer, a philosopher, a great preacher an able administrator. Above all a great philanthropist. All these have made him a Living Legend. He is the source of inspiration to all of us. His ideals and way of working are to be imbibed in everybody’s life. He has a dream of making our country modern and strong by spreading intellectual spirituality. We at KVG College of Engineering share his dream of making our BHARATH MAHAAN.</span></p>
<button onclick="myFunctionfd()" id="myBtnfd" style="margin-left:8%"><strong> Read more</strong></button>
            </div>
        </div>
    </div>
    <div class="clearfix"></div><br><br>
</section>
<script>
                  function myFunctionfd() {
                      var dotsfd = document.getElementById("dotsfd");
                      var moreText = document.getElementById("morefd");
                      var btnText = document.getElementById("myBtnfd");

                      if (dotsfd.style.display === "none") {
                          dotsfd.style.display = "inline";
                          btnText.innerHTML = "Read more";
                          moreText.style.display = "none";
                      } else {
                          dotsfd.style.display = "none";
                          btnText.innerHTML = "Read less";
                          moreText.style.display = "inline";
                      }
                  }
              </script>
<hr style="border-top: 3px double #8c8b8b; background-color:white;padding:0%;width:80%;">
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
                <style>
                    .gog{
                        float:right;
                    }
                    .gos{
                        float:left;
                    }
                    @media (max-width:767px){
                        .gog{
                        float:center;
                    }
                    .gos{
                        float:center;
                        
                    }
                    .pogo{
                        padding:30px;
    text-align: justify;
                    }

                    }
                </style>
<section id="gs" class="bshadow"><br><br>
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
            <h3 class="subheadWhite head" style="color: #3A3B3C;padding:0%;">GENERAL SECRETARY<span></span></h3>
                <h3 class="head1 pull-left gombo" ><strong>Dr. RENUKA PRASAD K V</strong></h3>
                <div class="clearfix"></div><br>
            </div>
            <div class="clearfix"></div><br>
            <div class="col-sm-4 gog" >
                <img src="admin-kvgce/photos/founders/rp2.jpg" class="img-responsive" width="75%">
            </div>
            <div class="col-sm-8 gos" style="font-size: 18px; font-size: 15px; letter-spacing: 1px; line-height: 1.9;">
            <p class="pogo">KVGCE imparts training for students to make them competent, motivated Engineers and Scientists. The Institute not only celebrates freedom of thought, cultivates vision and encourages growth, but also inculcates human values and concern for the environment<span id="dots1">...</span><span id="more1">. Since its establishment, the institute has played a vital role in providing the technical manpower and know-how to the country and in pursuit of research. With this, I invite you to experience the environment at KVGCE that is a unique blend of traditions and modernity and is evolving continuously. <br>&nbsp;&nbsp;&nbsp;&nbsp; We offer numerous courses in Engineering, Sciences, Management and Humanities. The alumni of the institute have done exceedingly well in all spheres of life at both national and international level and brought name and fame for themselves as well as to their Alma Mater. The institution takes pride in their achievements. I invite you to visit to KVGCE Sullia and spend some time in person at the sprawling campus at Sullia.</span></p>
<button onclick="myFunction1()" id="myBtn1" style="margin-left:8%"><strong> Read more</strong></button>
            </div>
        </div>
    </div>
    <div class="clearfix"></div><br><br>
</section>
<script>
                  function myFunction1() {
                      var dots1 = document.getElementById("dots1");
                      var moreText = document.getElementById("more1");
                      var btnText = document.getElementById("myBtn1");

                      if (dots1.style.display === "none") {
                          dots1.style.display = "inline";
                          btnText.innerHTML = "Read more";
                          moreText.style.display = "none";
                      } else {
                          dots1.style.display = "none";
                          btnText.innerHTML = "Read less";
                          moreText.style.display = "inline";
                      }
                  }
              </script>
<hr style="border-top: 3px double #8c8b8b; background-color:white;padding:0%;width:80%;">
<style>
                    /* #myBtn1 {display: none;} */
                    #myBtnuj {
                        display: none;
                    }

                    @media (max-width:767px) {

                        /* #nobq{display: none;} */
                        #moreuj {
                            display: none;
                        }

                        #myBtnuj {
                            display: inline;
                        }
                    }
                </style>
 <style>
@media (max-width:767px){
.gombo1{
    text-align: center;
font-size:20px
}

}
                </style>
                <style>
                    /* .gog{
                        float:right;
                    }
                    .gos{
                        float:left;
                    } */
                    @media (max-width:767px){
                        .gogi{
                            
  margin-left: auto;
  margin-right: auto;
  width: 75%;
                    }
                    .gosi{
                        float:center;
                        
                    }
                    .pogoi{
                        padding:30px;
    text-align: justify;
                    }

                    }
                </style>
<section id="ceo" class="bshadow"><br><br>
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
            <h3 class="subheadWhite head " style="color: #3A3B3C;padding:0%;">CHIEF EXECUTIVE OFFICER<span></span></h3>
                <h3 class="head1 pull-right " ><strong>Dr. UJWAL U J</strong> </h3>
                <div class="clearfix"></div><br>
            </div>
            <div class="clearfix"></div><br>
            <div class="col-sm-4 gogi" >
                <img src="admin-kvgce/photos/founders/ujwalsir1.JPG" class="img-responsive gogi" width="75%">
            </div>
            <div class="col-sm-8 gosi" style="font-size: 18px; font-size: 15px; letter-spacing: 1px; line-height: 1.9;">
            <p class="pogoi"> KVG College of Engineering focuses on addressing the needs of students fromcurricular, co-curricular and extra-curricular point of view. It is the innateprinciple of our institution that every single student must realize her or his goal to be a robust and effective part of <span id="dotsuj">...</span><span id="moreuj">the world to solve real world problems and tobe an asset to the society<br>&nbsp;&nbsp;&nbsp;&nbsp;Uniqueness of our education system relies in trainingthe students to identify target, setting distinct points in the travel path towards thetarget, and to make them feel the sense of fulfilment at the target. Our resultshave been remarkable in this endeavour. By providing good standard ofinfrastructure, excellent team of teaching faculty and technical supporting staffand team of training and placement KVG College of Engineering has been thevibrant campus. 
<br>&nbsp;&nbsp;&nbsp;&nbsp;The campus environment is diverse with academic reverberationof the students who enjoy learner centered classes. Outstanding placementrecords are due to the imparted quality trainings at various phases which equipthe students to be industry ready. If drive and determination are your cup, then KVG College of Engineering fulfils your dream to be an engineer of calibre.
</span></p>
<button onclick="myFunctionuj()" id="myBtnuj" style="margin-left:8%"><strong> Read more</strong></button>
<br><br>
            </div><a href="profile/CEO SIR PROFILE (1).pdf" class="card9-link fw-5" style="color:#3A3B3C;"><button style="border-radius:5px;background-color:rgb(30 131 215 / 80%);color:white;padding:8px;margin-left:35%">View Profile</button> </a>
        </div>
    </div>
    <div class="clearfix"></div><br><br>
</section>
<script>
function myFunctionuj() {
var dotsuj = document.getElementById("dotsuj");
var moreText = document.getElementById("moreuj");
var btnText = document.getElementById("myBtnuj");

if (dotsuj.style.display === "none") {
dotsuj.style.display = "inline";
btnText.innerHTML = "Read more"; 
moreText.style.display = "none";
} else {
dotsuj.style.display = "none";
btnText.innerHTML = "Read less"; 
moreText.style.display = "inline";
}
}
</script>


<?php include('footer.php') ?> 
</body>
</html>