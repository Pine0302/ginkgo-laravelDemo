<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>银杏汇</title>
    <meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale =1, target-densitydpi=device-dpi">
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
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide page0 stop-swiping">
            <div id="loading">
                <div class="inner">
                    <img src="/../frontend/images/loading.png">
                    <div class="bar js-load-bar">
                        3%
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide page1 stop-swiping">
            <div class="content">
                <img src="../../frontend/images/logo.png" class="logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                <img src="../../frontend/images/font1-1.png" class="font1-1 ani" swiper-animate-effect="slideInDown" swiper-animate-duration=".8s">
                <img src="../../frontend/images/font1-2.png" class="font1-2 ani" swiper-animate-effect="slideInDown" swiper-animate-duration=".8s">
                <img src="../../frontend/images/font1-3.png" class="font1-3 ani" swiper-animate-effect="zoomIn" swiper-animate-duration=".8s">
                <img src="../../frontend/images/font-tip.png" class="font-tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <img src="../../frontend/images/s-tip.png" class="s-tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".8s">
                <div class="btn-panel ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
                    <img src="../../frontend/images/btn1.png" class="btn btn1" data-value="1">
                    <img src="../../frontend/images/btn2.png" class="btn btn2" data-value="2">
                </div>
            </div>
        </div>
        <div class="swiper-slide page2 stop-swiping">
            <div class="head-panel">
                <img src="../../frontend/images/logo.png" class="logo">
                <img src="../../frontend/images/font2-1.png" class="font2-1">
                <img src="../../frontend/images/font2-2.png" class="font2-2">
            </div>
            <div class="content">
                <div class="form-panel">
                    <div class="input-box">
                        <input class="input1" type="text" placeholder="姓名" id="name"/>
                        <input class="input2" type="tel" placeholder="手机号" id="mobile"/>
                        <input class="input3" type="text" placeholder="预约时间"/>
                        <input class="input4" type="text" placeholder="随行人员数量"/>
                    </div>

                    <div class="input-box">
                        <input type="datetime-local" class="input3 date-input1" id="dates"/>
                        <select class="input4 select1" id="num">
                            <option disabled="" selected="" style="display:none;" value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6 </option>
                        </select>
                        <img src="../../frontend/images/submit-btn.png" class="submit-btn">
                    </div>
                </div>
            </div>

            <div class="content2">
                <div class="form-panel">
                    <div class="input-box">
                        <input class="input1" type="text" placeholder="姓名" id="name2"/>
                        <input class="input2" type="tel" placeholder="手机号" id="mobile2"/>

                        <input class="input5" type="text" placeholder="预约日期"/>
                        <input class="input6" type="text" placeholder="预约到访时间"/>
                        <input class="input7" type="text" placeholder="随行人员数量"/>
                    </div>


                    <div class="input-box">
                        <input type="date" class="input5 date-input2" id="dates2"/>
                        <input type="datetime-local" class="input6 date-input3" id="dates3"/>
                        <select class="input7 select2" id="num">
                            <option disabled="" selected="" style="display:none;" value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6 </option>
                        </select>
                        <img src="../../frontend/images/submit-btn.png" class="submit-btn">
                    </div>
                </div>
            </div>
            <img src="../../frontend/images/back-btn.png" class="back-btn">
        </div>
    </div>
</div>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script type="text/javascript" src="../../frontend/js/index.js"></script>
<script>
    $.ajax({
        type: "GET",
        url: "http://ginkgo.pinecc.cn/jssdk",
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
                title: '德圣银杏汇',
                desc: '恭迎阁下预约品鉴',
                link: 'http://ginkgo.pinecc.cn/',
                imgUrl: 'http://ginkgo.pinecc.cn/images/imgUrl.jpg',
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
