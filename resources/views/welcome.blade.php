<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>大家湛景满园</title>
    <meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale = 1, target-densitydpi=device-dpi">
    <link rel="stylesheet" href="../../frontend/css/swiper-3.3.1.min.css">
    <link rel="stylesheet" href="../../frontend/css/effect.css">
    <link rel="stylesheet" href="../../frontend/css/index.css">
    <script type="text/javascript" src="../../frontend/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="../../frontend/js/swiper-3.3.1.jquery.min.js"></script>
    <script type="text/javascript" src="../../frontend/js/swiper.animate1.0.2.min.js"></script>
   <script type="text/javascript" src="../../frontend/js/common.js"></script>
   <script type="text/javascript" src="../../frontend/js/html2canvas.js"></script>
    <script>
        var deviceWidth = Math.min(750, window.innerWidth);
        document.documentElement.style.fontSize = parseInt(deviceWidth / 7.5) + "px"
    </script>
</head>

<body>

    <div class="page3-extra">
        <img src="../../frontend/images/img3-1.png" class="img3-1">
        <img src="../../frontend/images/arrow-up.png" class="arrow-up">
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
                <img src="../../frontend/images/logo.png" class="logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
                <div class="font">
                    <div class="time" id="time"></div>
                    <div class="date" id="date"></div>
                </div>
                <img src="../../frontend/images/notice.png" class="notice ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.6s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/arrow-down.png" class="arrow">
                <div class="tip">向上滑动解锁屏幕</div>
                <img src="../../frontend/images/photo.png" class="photo">
            </div>
            <div class="swiper-slide page2 stop-swiping">
                <img src="../../frontend/images/logo.png" class="logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
                <img src="../../frontend/images/font2-1.png" class="font2-1 ani" swiper-animate-effect="zoomIn" swiper-animate-duration=".3s">
                <div class="font2-2">
                    <img src="../../frontend/images/font2-2_01.png" class="font2-2_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s" swiper-animate-delay="0.6s">
                    <img src="../../frontend/images/font2-2_02.png" class="font2-2_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s" swiper-animate-delay="0.8s">
                </div>
                <div class="font2-3 ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1.2s" swiper-animate-delay="1s">
                    <img src="../../frontend/images/font2-3.png" class="ani infinite" swiper-animate-effect="scaleInBig" swiper-animate-duration="2s" swiper-animate-delay="0.1s">
                </div>
                <img src="../../frontend/images/tip.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
            </div>
            <div class="swiper-slide page3 stop-swiping">
                <div class="content" id="content">
                    <div class="font3-1">
                        <img src="../../frontend/images/font3-1_01.png" class="font3-1_01" data-time="300">
                        <img src="../../frontend/images/font3-1_02.png" class="font3-1_02" data-time="300">
                        <img src="../../frontend/images/font3-1_03.png" class="font3-1_03" data-time="300">
                        <img src="../../frontend/images/font3-1_04.png" class="font3-1_04" data-time="300">
                        <img src="../../frontend/images/font3-1_05.png" class="font3-1_05" data-time="300">
                        <img src="../../frontend/images/font3-1_06.png" class="font3-1_06" data-time="300">
                        <img src="../../frontend/images/font3-1_07.png" class="font3-1_07" data-time="300">
                        <img src="../../frontend/images/font3-1_08.png" class="font3-1_08" data-time="300">
                        <img src="../../frontend/images/font3-1_09.png" class="font3-1_09" data-time="300">
                        <img src="../../frontend/images/font3-1_10.png" class="font3-1_10" data-time="300">
                        <img src="../../frontend/images/font3-1_11.png" class="font3-1_11" data-time="300">
                        <img src="../../frontend/images/font3-1_12.png" class="font3-1_12" data-time="300">
                        <img src="../../frontend/images/font3-1_13.png" class="font3-1_13" data-time="300">
                        <img src="../../frontend/images/font3-1_14.png" class="font3-1_14" data-time="300">
                        <img src="../../frontend/images/font3-1_15.png" class="font3-1_15" data-time="300">
                    </div>
                    <div class="font3-2">
                        <img src="../../frontend/images/font3-2_01.png" class="font3-2_01">
                        <img src="../../frontend/images/font3-2_02.png" class="font3-2_02">
                        <img src="../../frontend/images/font3-2_03.png" class="font3-2_03">
                        <img src="../../frontend/images/font3-2_04.png" class="font3-2_04">
                        <img src="../../frontend/images/font3-2_05.png" class="font3-2_05">
                        <img src="../../frontend/images/font3-2_06.png" class="font3-2_06">
                        <img src="../../frontend/images/font3-2_07.png" class="font3-2_07">
                        <img src="../../frontend/images/font3-2_08.png" class="font3-2_08">
                        <img src="../../frontend/images/font3-2_09.png" class="font3-2_09">
                        <img src="../../frontend/images/font3-2_10.png" class="font3-2_10">
                        <img src="../../frontend/images/font3-2_11.png" class="font3-2_11">
                        <img src="../../frontend/images/font3-2_12.png" class="font3-2_12">
                    </div>
                    <div class="font3-3">
                        <img src="../../frontend/images/font3-3_01.png" class="font3-3_01">
                        <img src="../../frontend/images/font3-3_02.png" class="font3-3_02">
                        <img src="../../frontend/images/font3-3_03.png" class="font3-3_03">
                        <img src="../../frontend/images/font3-3_04.png" class="font3-3_04">
                        <img src="../../frontend/images/font3-3_05.png" class="font3-3_05">
                        <img src="../../frontend/images/font3-3_06.png" class="font3-3_06">
                    </div>
                    <div class="font3-4">
                        <img src="../../frontend/images/font3-4_01.png" class="font3-4_01">
                        <img src="../../frontend/images/font3-4_02.png" class="font3-4_02">
                        <img src="../../frontend/images/font3-4_03.png" class="font3-4_03">
                    </div>
                    <div class="font3-4_04">
                        <img src="../../frontend/images/font3-4_04.png" data-play="1">
                    </div>
                    <div class="font3-5">
                        <img src="../../frontend/images/font3-5_01.png" class="font3-5_01">
                        <img src="../../frontend/images/font3-5_02.png" class="font3-5_02">
                        <img src="../../frontend/images/font3-5_03.png" class="font3-5_03">
                        <img src="../../frontend/images/font3-5_04.png" class="font3-5_04">
                        <img src="../../frontend/images/font3-5_05.png" class="font3-5_05">
                    </div>
                    <div class="font3-6">
                        <img src="../../frontend/images/font3-6.png">
                    </div>
                </div>
            </div>
            <div class="swiper-slide page4">
                <div class="content">
                    <img src="../../frontend/images/logo.png" class="logo">
                    <!-- <img src="../../frontend/images/s-logo.png" class="s-logo"> -->
                    <div class="font4-1">
                        <p>长按页面，保留截图</p>
                        <p>即可前往大家湛景·满园园来生活馆</p>
                        <p>领取表白惊喜礼一份，敬请期待！</p>
                    </div>
                    <div class="font4-2">谢谢你，在绍兴，传递家的圆满</div>
                    <div class="font">
                        <p id="value"></p>
                        <p class="tip"> ——— 微信用户 </p>
                    </div>
                </div>
                <img src="../../frontend/images/message1.png" class="message1 ani" swiper-animate-effect="slideInRightMsgSingle" swiper-animate-duration="3s" swiper-animate-delay="0.1s">
                <img src="../../frontend/images/message-list.png" class="message-list ani infinite" swiper-animate-effect="slideInRightMsg" swiper-animate-duration="19s" swiper-animate-delay="0.1s">
                <div class="input-box">
                    <input type="text" id="message" placeholder="点击写留言  说说你对#大家绍兴#的心里话" type="search">
                    <div class="send-btn" id="send-btn">发送</div>
                </div>
                <img id="toImg">
            </div>
        </div>
    </div>


<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.6.0.js"></script>
<script type="text/javascript" src="../../frontend/js/index.js"></script>
<script>


    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: "{{ $appId }}", // 必填，公众号的唯一标识
        timestamp: {{$timestamp}}, // 必填，生成签名的时间戳
        nonceStr: "{{$nonceStr}}", // 必填，生成签名的随机串
        signature: "{{$signature}}",// 必填，签名
        jsApiList: ['updateAppMessageShareData','updateTimelineShareData','checkJsApi',
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
            'showMenuItems'] // 必填，需要使用的JS接口列表
    });
    wx.ready(function () {   //需在用户可能点击分享按钮前就先调用
        wx.updateAppMessageShareData({
            title: 'ENJOY SHAOXING|绍兴媒体为大家建了一个群', // 分享标题
            desc: '参与群聊，戳！', // 分享描述
            link: "https://dajia.pinecc.cn/home", // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: 'https://dajia.pinecc.cn/frontend/images/imgUrl.png', // 分享图标
            success: function () {
                // 设置成功

            },
            error: function(data) {

            }
        });
        wx.updateTimelineShareData({
            title: 'ENJOY SHAOXING|绍兴媒体为大家建了一个群', // 分享标题
            desc: '参与群聊，戳！', // 分享描述
            link: "https://dajia.pinecc.cn/home", // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: 'https://dajia.pinecc.cn/frontend/images/imgUrl.png', // 分享图标
            success: function () {
                // 设置成功

            },
            error: function(data) {

            }
        })
    });

   /* $.ajax({
        type: "GET",
        url: "",
        data: {
            url: window.location.href
        },
        dataType: "json",
        success: function(data) {
            wx.config({
                debug: true,
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
    console.log(123);*/

</script>
</body>

</html>
