<style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap');
        body {
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            width: 100%;
            /* height: 100vh; */
            padding: 0px;
            margin: 0px;
            /* display: flex; */
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background: hsl(210, 46%, 95%);
            background-color: whitesmoke;
        }
        .fw-5 {font-weight: 500;}
        .fw-7 {font-weight: 700;}
        main {width: 800px;box-sizing: border-box;border-radius: 8px;background: white;box-shadow: 0px 0px 14px #80808047;margin-left: 23%;margin-top: 2%;margin-bottom: 2%;}
        .card10 {display: flex;flex-direction: row;width: 100%;}
        .card10 .card10-left {width: 40%;}
        .card10 .card10-left .card10-img {width: 100%;height: 310px;position: relative;}
        .card10 .card10-left .card10-img::before {content: "";background: url(https://rvs-article-preview-component.netlify.app/images/drawers.jpg);width: 100%;height: 100%;background-repeat: no-repeat;background-size: cover;display: block;border-radius: 8px 0px 0px 8px;}
        .card10 .card10-left .card10-img img {width: 100%;}
        .card10 .card10-right {width: 60%;display: flex;flex-direction: column;padding: 40px;box-sizing: border-box;}
        .card10 .card10-right .card10-title {font-size: 20px;color: hsl(214, 17%, 51%);}
        .card10 .card10-right .card10-text {font-size: 14px;color: hsl(212, 23%, 69%);margin-top: 20px;}
        .card10 .card10-right .card10-right-body {display: flex;margin-top: 26px;}
        .card10 .card10-right .card10-right-body .card10-rb-1 {flex-grow: 1;}
        .card10 .card10-right .card10-right-body .card10-rb-1 img {width: 45px;border-radius: 50%;}
        .card10 .card10-right .card10-right-body .card10-rb-2 {flex-grow: 7;display: flex;flex-direction: column;justify-content: center;row-gap: 3px;}
        .card10 .card10-right .card10-right-body .card10-rb-2 .card10-rb-2-title {color: hsl(214, 17%, 51%);}
        .card10 .card10-right .card10-right-body .card10-rb-2 .card10-rb-2-text {color: hsl(212, 23%, 69%);}
        .card10 .card10-right .card10-right-body .card10-rb-3 {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share.svg) hsl(210, 46%, 95%);
            width: 35px;
            height: 35px;
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
            border-radius: 50%;
            cursor: pointer;
        }
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner:hover {
            background: url(https://rvs-article-preview-component.netlify.app/images/icon-share-white.svg) hsl(217, 19%, 35%);
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
        }
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner-before {
            position: absolute;
            width: 275px;
            height: 55px;
            background: hsl(217, 19%, 35%);
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            color: white;
            box-sizing: border-box;
            align-items: center;
            top: -80px;
            left: -110px;
            opacity: 0;
            justify-content: center;
            padding: 0px 20px;
            z-index: 2;
        }
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner-before::after {
            content: "";
            position: absolute;
            top: 40px;
            left: 50%;
            width: 40px;
            height: 40px;
            background: hsl(217, 19%, 35%);
            transform: translate(-50%, -50%) rotate(45deg);
            z-index: -1;
        }
        .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner:hover + .card10-rb-3-inner-before {
            opacity: 1;
        }
        .before-1 {flex-grow: 2;letter-spacing: 7px;color: hsl(212, 23%, 69%);display: flex;justify-content: center;}
        .before-2 {flex-grow: 1;}
        .before-3 {flex-grow: 1;}
        .before-4 {flex-grow: 1;}

        @media screen and (max-width: 850px) {
            body {
                height: 100%;
                /* margin: 70px auto; */
            }
            main {
                width: 95%;
                margin-top: 5%;
                margin-left: 2%;
                margin-right: 2%;
            }
            .card10 {
                flex-direction: column;
            }
            .card10 .card10-left {
                width: 100%;
            }
            .card10 .card10-right {
                width: 100%;
                padding: 40px 25px 20px;
            }
            .card10 .card10-left .card10-img {
                height: 210px;
            }
            .card10 .card10-left .card10-img::before {
                border-radius: 8px 8px 0px 0px;
            }
            .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner-before {
                top: -3px;
                left: -235px;
                width: 230px;
            }
            .card10 .card10-right .card10-right-body .card10-rb-3 .card10-rb-3-inner-before::after {
                content: unset;
            }
        }</style>
<body>
<main id="about">
        <div class="card10">
            <div class="card10-left">
                <div class="card10-img"></div>
            </div>
            <div class="card10-right">
                <div class="card10-title fw-7">Shift the overall look and feel by adding these wonderful touches to furniture in your home</div>
                <div class="card10-text fw-5">To be a Notable Engineering College Recognized for Academics, Innovation and the Societal Relevance and Impact of its Pursuits.</div>
                <div class="card10-right-body">
                    <div class="card10-rb-1">
                        <img src="https://rvs-article-preview-component.netlify.app/images/avatar-michelle.jpg" alt="">
                    </div>
                    <div class="card10-rb-2">
                        <div class="card10-rb-2-title fw-7">Michelle Appleton</div>
                        <div class="card10-rb-2-text fw-5">28 Jun 2020</div>
                    </div>
                    <div class="card10-rb-3">
                        <div class="card10-rb-3-inner"></div>
                        <div class="card10-rb-3-inner-before">
                            <div class="before-1">SHARE</div>
                            <div class="before-2"><img src="https://rvs-article-preview-component.netlify.app/images/icon-facebook.svg" alt=""></div>
                            <div class="before-3"><img src="https://rvs-article-preview-component.netlify.app/images/icon-twitter.svg" alt=""></div>
                            <div class="before-4"><img src="https://rvs-article-preview-component.netlify.app/images/icon-pinterest.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>