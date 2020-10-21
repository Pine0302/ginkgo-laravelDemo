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
<div class="page13-hide">
    <img src="../../frontend/images/tip13.png" class="tip13">
    <img src="../../frontend/images/img13-2.png" class="img13-2">
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
        <div class="swiper-slide page2 stop-swiping">
            <img src="../../frontend/images/font2-1.png" class="font2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
            <img src="../../frontend/images/img2-1.png" class="img2-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
            <div class="img-list">
                <img src="../../frontend/images/img2-2_01.png" class="img2-2_01 ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.3s" data-page="2">
                <img src="../../frontend/images/img2-2_02.png" class="img2-2_02 ani" swiper-animate-effect="slideInLeft" swiper-animate-duration=".8s" swiper-animate-delay="0.6s" data-page="2">
                <img src="../../frontend/images/img2-2_03.png" class="img2-2_03 ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="0.9s" data-page="2">
                <img src="../../frontend/images/img2-2_04.png" class="img2-2_04 ani" swiper-animate-effect="slideInLeft" swiper-animate-duration=".8s" swiper-animate-delay="1.2s" data-page="2">
                <img src="../../frontend/images/img2-2_05.png" class="img2-2_05 ani" swiper-animate-effect="slideInRight" swiper-animate-duration=".8s" swiper-animate-delay="1.5s" data-page="3">
            </div>
        </div>
        <div class="swiper-slide page3 stop-swiping">
            <img src="../../frontend/images/tip.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
            <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
            <img src="../../frontend/images/img3-1.png" class="img3-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s" swiper-animate-delay="0.3s">
            <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="slideInLeft" swiper-animate-duration=".8s" swiper-animate-delay="0.6s">
            <img src="../../frontend/images/font3-2.png" class="font3-2 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.9s">
            <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1s">
            <div class="font3-3">
                <img src="../../frontend/images/font3-3_01.png" class="font3-3_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                <img src="../../frontend/images/font3-3_02.png" class="font3-3_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
                <img src="../../frontend/images/font3-3_03.png" class="font3-3_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.8s">
                <img src="../../frontend/images/font3-3_04.png" class="font3-3_04 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="2.1s">
            </div>
        </div>
        <div class="swiper-slide page12 stop-swiping">
            <img src="../../frontend/images/back-btn.png" class="back-btn" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
            <img src="../../frontend/images/img12-1.png" class="img12-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
            <img src="../../frontend/images/font12-1.png" class="font12-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
            <div class="font12-2">
                <img src="../../frontend/images/font12-2_01.png" class="font12-2_01 ani" swiper-animate-effect="zoomIn" swiper-animate-duration=".5s" swiper-animate-delay="0.3s" data-page="4">
                <img src="../../frontend/images/font12-2_02.png" class="font12-2_02 ani" swiper-animate-effect="zoomIn" swiper-animate-duration=".5s" swiper-animate-delay="0.6s" data-page="4">
                <img src="../../frontend/images/font12-2_03.png" class="font12-2_03 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.9s" data-page="4">
            </div>
            <div class="font12-3">
                <img src="../../frontend/images/font12-3_01.png" class="font12-3_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.2s">
                <img src="../../frontend/images/font12-3_02.png" class="font12-3_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="1.5s">
            </div>
            <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
        </div>

        <div class="swiper-slide page13 stop-swiping">
            <div class="inner">
                <img src="../../frontend/images/img13-1.png" class="img13-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">

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
                title: '',
                desc: '',
                link: '',
                imgUrl: '',
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
