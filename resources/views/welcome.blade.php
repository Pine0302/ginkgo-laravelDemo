<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>大家</title>
    <meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale =3, target-densitydpi=device-dpi">
    <link rel="stylesheet" href="../../frontend/css/swiper-3.3.1.min.css">
    <link rel="stylesheet" href="../../frontend/css/effect.css">
    <link rel="stylesheet" href="../../frontend/css/index.css">
    <script type="text/javascript" src="../../frontend/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="../../frontend/js/swiper-3.3.1.jquery.min.js"></script>
    <script type="text/javascript" src="../../frontend/js/swiper.animate1.0.2.min.js"></script>
    <script type="text/javascript" src="../../frontend/js/common.js"></script>
    <script>
        var deviceWidth = Math.min(750, window.innerWidth);
        document.documentElement.style.fontSize = parseInt(deviceWidth / 7.5) + "px"
    </script>
</head>

<body>
    <!-- <div class="audio-btn play">
        <img src="../../frontend/images/musicon.png">
    </div> -->
    <div class="house-hide">
        <img src="../../frontend/images/img13-2.png" class="house-right-img">
        <img src="../../frontend/images/back-btn.png" class="back-btn-fixed">
        <img src="../../frontend/images/arrow-right.png" class="arrow-right">
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide page0 stop-swiping">
                <div id="loading">
                    <div class="inner">
                        <img src="../../frontend/images/loading.png">
                        <div class="bar js-load-bar">
                            3%
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide page1">
                <img src="../../frontend/images/img1-1.png" class="img1-1">
                <img src="../../frontend/images/s-logo.png" class="s-logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
                <img src="../../frontend/images/logo.png" class="logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
                <div class="font1-1">
                    <img src="../../frontend/images/font1-1_01.png" class="font1-1_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
                    <img src="../../frontend/images/font1-1_02.png" class="font1-1_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
                    <img src="../../frontend/images/font1-1_03.png" class="font1-1_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.9s">
                    <img src="../../frontend/images/font1-1_04.png" class="font1-1_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font1-1_05.png" class="font1-1_05 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font1-1_06.png" class="font1-1_06 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                    <img src="../../frontend/images/font1-1_07.png" class="font1-1_07 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="2.1s">
                </div>
                <div class="img1-2 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s"  swiper-animate-delay="0.6s">
                    <img src="../../frontend/images/img1-2.png" class="img1-2 ani infinite" swiper-animate-effect="moveRight" swiper-animate-duration="15s">
                </div>
                <img src="../../frontend/images/img1-3.png" class="img1-3 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/font1-2.png" class="font1-2 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.8s">
                <img src="../../frontend/images/s-tip.png" class="s-tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.8s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page2">
                <img src="../../frontend/images/font2-1.png" class="font2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <div class="img-list">
                    <img src="../../frontend/images/img2-2_01_dark.png" class="img2-2_01 ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.3s" data-page="2" data-index="01">
                    <img src="../../frontend/images/img2-2_02_dark.png" class="img2-2_02 ani" swiper-animate-effect="slideInLeft" swiper-animate-duration=".8s" swiper-animate-delay="0.6s" data-page="4" data-index="02">
                    <img src="../../frontend/images/img2-2_03_dark.png" class="img2-2_03 ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.9s" data-page="6" data-index="03">
                    <img src="../../frontend/images/img2-2_04_dark.png" class="img2-2_04 ani" swiper-animate-effect="slideInLeft" swiper-animate-duration=".8s" swiper-animate-delay="1.2s" data-page="10" data-index="04">
                    <img src="../../frontend/images/img2-2_05_dark.png" class="img2-2_05 ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="1.5s" data-page="11" data-index="05">
                </div>
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page3 page-down">
                <img src="../../frontend/images/tip-1.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img3-1.png" class="img3-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font3-2.png" class="font3-2 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.9s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1s">
                <div class="font3-3 font-list">
                    <img src="../../frontend/images/font3-3_01.png" class="font3-3_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font3-3_02.png" class="font3-3_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font3-3_03.png" class="font3-3_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                    <img src="../../frontend/images/font3-3_04.png" class="font3-3_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="2.1s">
                </div>
                <img src="../../frontend/images/img-cloud.png" class="img-cloud ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".6s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page4 page-up">
                <img src="../../frontend/images/tip-1.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font4-1.png" class="font4-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.7s">
                <div class="font4-2 font-list">
                    <img src="../../frontend/images/font4-2_01.png" class="font4-2_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".9s">
                    <img src="../../frontend/images/font4-2_02.png" class="font4-2_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font4-2_03.png" class="font4-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font4-2_04.png" class="font4-2_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                </div>
                <img src="../../frontend/images/img4-1.png" class="img4-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.9s">
                <img src="../../frontend/images/img-cloud.png" class="img-cloud ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".6s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page5 page-down">
                <img src="../../frontend/images/tip-2.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img5-1.png" class="img5-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font5-1.png" class="font5-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.9s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1s">
                <div class="font5-2 font-list">
                    <img src="../../frontend/images/font5-2_01.png" class="font5-2_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font5-2_02.png" class="font5-2_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font5-2_03.png" class="font5-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                    <img src="../../frontend/images/font5-2_04.png" class="font5-2_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="2.1s">
                </div>
                <img src="../../frontend/images/img-cloud.png" class="img-cloud ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".6s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page6 page-up">
                <img src="../../frontend/images/tip-2.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font6-1.png" class="font6-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".7s">
                <div class="font6-2 font-list">
                    <img src="../../frontend/images/font6-2_01.png" class="font6-2_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".9s">
                    <img src="../../frontend/images/font6-2_02.png" class="font6-2_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font6-2_03.png" class="font6-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font6-2_04.png" class="font6-2_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                </div>
                <img src="../../frontend/images/img6-1.png" class="img6-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.9s">
                <img src="../../frontend/images/img-cloud.png" class="img-cloud ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".6s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page7 page-down">
                <img src="../../frontend/images/tip-3.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img7-1.png" class="img7-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font7-1.png" class="font7-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.9s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1s">
                <div class="font7-2 font-list">
                    <img src="../../frontend/images/font7-2_01.png" class="font7-2_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font7-2_02.png" class="font7-2_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font7-2_03.png" class="font7-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                    <img src="../../frontend/images/font7-2_04.png" class="font7-2_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="2.1s">
                </div>
                <img src="../../frontend/images/img-cloud.png" class="img-cloud ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".6s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page8 page-up">
                <img src="../../frontend/images/tip-3.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font8-1.png" class="font8-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".7s">
                <div class="font8-2 font-list">
                    <img src="../../frontend/images/font8-2_01.png" class="font8-2_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".9s">
                    <img src="../../frontend/images/font8-2_02.png" class="font8-2_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font8-2_03.png" class="font8-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font8-2_04.png" class="font8-2_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                </div>
                <img src="../../frontend/images/img8-1.png" class="img8-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.8s">
                <img src="../../frontend/images/img-cloud.png" class="img-cloud ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".6s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page9 page-down">
                <img src="../../frontend/images/tip-3.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img9-1.png" class="img9-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font9-1.png" class="font9-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.9s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1s">
                <div class="font9-2 font-list">
                    <img src="../../frontend/images/font9-2_01.png" class="font9-2_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font9-2_02.png" class="font9-2_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font9-2_03.png" class="font9-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                    <img src="../../frontend/images/font9-2_04.png" class="font9-2_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="2.1s">
                </div>
                <img src="../../frontend/images/img-cloud.png" class="img-cloud ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".6s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page10 page-up">
                <img src="../../frontend/images/tip-3.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font10-1.png" class="font10-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".7s">
                <div class="font10-2 font-list">
                    <img src="../../frontend/images/font10-2_01.png" class="font10-2_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".9s">
                    <img src="../../frontend/images/font10-2_02.png" class="font10-2_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font10-2_03.png" class="font10-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font10-2_04.png" class="font10-2_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                </div>
                <img src="../../frontend/images/img10-1.png" class="img10-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.9s">
                <img src="../../frontend/images/img-cloud.png" class="img-cloud ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".6s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page11 page-up">
                <img src="../../frontend/images/tip-4.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font11-1.png" class="font11-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".7s">
                <div class="font11-2 font-list">
                    <img src="../../frontend/images/font11-2_01.png" class="font11-2_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".9s">
                    <img src="../../frontend/images/font11-2_02.png" class="font11-2_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font11-2_03.png" class="font11-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font11-2_04.png" class="font11-2_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                </div>
                <img src="../../frontend/images/img11-1.png" class="img11-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.9s">
                <img src="../../frontend/images/img-cloud.png" class="img-cloud ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay=".6s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
            </div>
            <div class="swiper-slide page12">
                <img src="../../frontend/images/img12-1.png" class="img12-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/font12-1.png" class="font12-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <div class="font12-2">
                    <img src="../../frontend/images/font12-2_01.png" class="font12-2_01 ani" swiper-animate-effect="zoomIn" swiper-animate-duration=".5s" swiper-animate-delay="0.3s" data-page="13" data-index="1">
                    <img src="../../frontend/images/font12-2_02.png" class="font12-2_02 ani" swiper-animate-effect="zoomIn" swiper-animate-duration=".5s" swiper-animate-delay="0.6s" data-page="14" data-index="2">
                    <img src="../../frontend/images/font12-2_03.png" class="font12-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.9s" data-page="15" data-index="3">
                </div>
                <div class="font12-3">
                    <img src="../../frontend/images/font12-3_01.png" class="font12-3_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font12-3_02.png" class="font12-3_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                </div>
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
            </div>

            <div class="swiper-slide page13">
                <img src="../../frontend/images/img12-1.png" class="img12-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/img13-1.png" class="img13-1 ani" swiper-animate-effect="zoomIn" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
                <div class="btn-group">
                    <a href="https://www.amap.com/place/B0FFGQ991E">
                        <img src="../../frontend/images/btn-nav.png" class="btn-nav ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
                    </a>
                    <a href="tel:88990088">
                        <img src="../../frontend/images/btn-tel.png" class="btn-tel ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
                    </a>
                </div>
                <div class="font13-1">
                    <img src="../../frontend/images/font13-1_01.png" class="font13-1_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.9s">
                    <img src="../../frontend/images/font13-1_02.png" class="font13-1_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                    <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                    <img src="../../frontend/images/font13-1_03.png" class="font13-1_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                </div>
            </div>

            <div class="swiper-slide page-end house stop-swiping">
                <div class="page14 house1" data-index="1">
                    <div class="inner">
                        <img src="../../frontend/images/img14-1.png" class="main-img ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                    </div>
                </div>
                <div class="page15 house2 stop-swiping" data-index="2">
                    <div class="inner">
                        <img src="../../frontend/images/img15-1.png" class="main-img ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                    </div>
                </div>
                <div class="page16 house3 stop-swiping" data-index="3">
                    <div class="inner">
                        <img src="../../frontend/images/img16-1.png" class="main-img ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script type="text/javascript" src="../../frontend/js/index.js"></script>
    <script>
        $.ajax({
            type: "GET",
            url: "",
            data: {
                url: window.location.href
            },
            dataType: "json",
            success: function(data) {
                wx.config({
                    debug: false,
                    appId: data.appId,
                    timestamp: data.timestamp,
                    nonceStr: data.nonceStr,
                    signature: data.signature,
                    jsApiList: [
                        'checkJsApi',
                        'onMenuShareTimeline',
                        'onMenuShareAppMessage',
                        'startRecord',
                        'stopRecord',
                        'onVoiceRecordEnd',
                        'playVoice',
                        'onVoicePlayEnd',
                        'pauseVoice',
                        'stopVoice',
                        'uploadVoice',
                        'downloadVoice',
                        'onMenuShareTimeline',
                        'onMenuShareAppMessage',
                        'onMenuShareQQ',
                        'onMenuShareWeibo',
                        'hideMenuItems',
                        'showMenuItems'
                    ]
                });

                var shareData = {
                    title: '大家湛景满园',
                    desc: '稽山下 二环里 宋韵美学著品',
                    link: 'http://wls.pinecc.cn/',
                    imgUrl: 'http://wls.pinecc.cn/../../frontend/images/imgUrl.jpg',
                    trigger: function (res) {
                        //alert('用户点击');
                    },
                    success: function (res) {
                        window.location.href=""
                    },
                    cancel: function (res) {
                        alert('已取消');return;
                    },
                    fail: function (res) {
                        alert(JSON.stringify(res));
                    }
                };

                wx.ready(function(){
                    wx.onMenuShareAppMessage(shareData);
                    wx.onMenuShareTimeline(shareData);
                });
            },
            error: function(data) {
            }
        })

    </script>
</body>

</html>