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
        <div><img src="images/banner/gallery.jpg" class="img-responsive"></div>
    </section>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap");

        html,
        body {
            /* margin: 0;
        padding: 0;
        background: #fafafa;
        font-family: "Reem Kufi", sans-serif;
        letter-spacing: 0.2px;
        height: 100vh;
        width: 100vw;
        background-color: var(--bg-1);
        position: relative;
        scroll-behavior: smooth; */
        }

        :root {
            --col-1: #c8ddef;
            --col-2: #ff3729fc;
            --bg-1: white;
        }

        .material-symbols-rounded {
            font-family: "Material Symbols Rounded";
            font-weight: normal;
            font-style: normal;
            font-size: 18px;
            /* Preferred icon size */
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;

            vertical-align: middle;
            /* Support for all WebKit browsers. */
            -webkit-font-smoothing: antialiased;
            /* Support for Safari and Chrome. */
            text-rendering: optimizeLegibility;

            /* Support for Firefox. */
            -moz-osx-font-smoothing: grayscale;

            /* Support for IE. */
            font-feature-settings: "liga";
        }

        section {
            width: 100%;
            box-sizing: border-box;
            padding: 2em;
        }

        .gallery {
            width: 100%;
            box-sizing: border-box;
        }

        .gallery .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .gallery .row .col {
            max-width: 24.999%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .gallery .row .col .fluid-container {
            width: 99.9999%;
            float: left;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding-left: 10px;
            padding-right: 10px;
            margin: 15px 0;
            user-select: none;
            transition: all 0.2s ease;
            display: block;
        }

        .gallery .row .col .fluid-container {
            display: block;
        }

        .gallery .row .col .fluid-container.selected {
            width: 99.99%;
            max-width: 49.99%;
        }

        @media screen and (max-width: 767px) {
            .gallery .row .col .fluid-container {
                width: 99.99%;
            }

            .gallery .row .col {
                max-width: 49.999%;
            }
        }

        .gallery .row .col .fluid-container .item {
            border-radius: 16px;
            overflow: hidden;
            cursor: zoom-in;
            opacity: 0;
            transition: all 0.4s ease-in-out;
        }

        .gallery .row .col .fluid-container.inScreen .item {
            opacity: 1;
        }

        .gallery .row .col .fluid-container .item .img img {
            border-radius: 16px;
            width: 100%;
            transition: transform 0.2s ease-in-out;
        }

        .gallery .row .col .fluid-container .item .img {
            border-radius: 16px;
            position: relative;
            overflow: hidden;
        }

        .gallery .row .col .fluid-container .item .img:hover img {
            transform: scale(1.2);
        }

        .gallery .row .col .fluid-container .item .img:before {
            content: "Open ";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: rgba(57, 57, 57, 0.385);
            color: #fafafa;
            font-size: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
            z-index: 1;
        }

        .gallery .row .col .fluid-container .item .img:hover:before {
            opacity: 1;
        }

        .gallery .row .col .fluid-container .item .info {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.2em;
            box-sizing: border-box;
            transform: scale(0.9);
            opacity: 0;
            transition: all 0.3s ease-in-out;
        }

        .gallery .row .col .fluid-container .item:hover .info {
            transform: scale(1);
            opacity: 1;
        }

        .gallery .row .col .fluid-container .item .info .title {
            flex: 1;
            text-align: center;
        }

        .overlayed {
            overflow: hidden !important;
        }

        .overlay {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 999;
            background-color: rgba(38, 38, 38, 0.544);
            display: none;
        }

        .overlayed .overlay {
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease-in-out;
        }

        .overlay .viewer {
            box-sizing: border-box;
            user-select: none;
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-direction: column;
            padding: 60px;
        }

        .overlay .viewer div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay .viewer div:first-child {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .overlay .viewer img {
            max-height: 80vh;
            max-width: 80vw;
            border-radius: 8px;
        }

        .alt {
            flex: 1;
            color: white;
        }

        .close {
            float: right;
            right: 0;
            border: none;
            height: 44px;
            aspect-ratio: 1;
            border-radius: 100%;
            margin: 10px;
            transition: all 0.3s ease;
            color: #000;
            opacity: 1;
        }

        .close:hover {
            background-color: #fafafa;
            transform: scale(1.1);
            color: #000;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>


    <section class="gallery">
        <div class="row">
            <h2>
                Gallery
            </h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/sports/GALLARY/eight.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/wifli.jpg">

                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/1year2.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/campus.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/civil2.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/placement.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/ec1.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/mba1.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/campus.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>


                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/sports/GALLARY/ten.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/sports/GALLARY/two.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/civil1.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/first1.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/first2.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/first3.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/department/cs/mba2.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>

                <div class="fluid-container">
                    <div class="item">
                        <div class="img">
                            <img src="images/sports/GALLARY/11.jpg">
                        </div>
                        <div class="info"><span class="title"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overlay">
        <div class="viewer">
            <div>
                <div class="alt"> </div>
                <button class="close"><span class="material-symbols-rounded">close</span></button>
            </div>
            <div><img></div>
        </div>
    </div>

    <script>
        let items = document.querySelectorAll(".item"),
            viewer = document.querySelector(".viewer img");
        document.querySelector(".viewer .close").onclick = () => {
            document.querySelector("body").classList.toggle("overlayed");
        };
        items.forEach((item) => {
            item.onclick = () => {
                let content = item.querySelector(".img img");
                viewer.setAttribute("src", content.getAttribute("src"));
                document.querySelector(".viewer .alt").innerHTML = item.querySelector(
                    ".title"
                ).innerHTML;
                document.querySelector("body").classList.toggle("overlayed");
            };
        });

        ["load", "scroll"].forEach((eventName) => {
            window.addEventListener(eventName, (event) => {
                document.querySelectorAll(".fluid-container").forEach((item) => {
                    if (isScrolledIntoView(item)) {
                        item.classList.add("inScreen");
                    } else {
                        item.classList.remove("inScreen");
                    }
                });
            });
        });

        function isScrolledIntoView(el) {
            let rect = el.getBoundingClientRect();
            let elemTop = rect.top;
            let elemBottom = rect.bottom;
            let isVisible = elemTop >= -300 && elemBottom <= screen.height + 300;
            return isVisible;
        }
    </script>
    <?php include('footer.php') ?>


    <!-- endfooter -->
    
</body>


</html>