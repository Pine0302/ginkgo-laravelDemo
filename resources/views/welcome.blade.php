<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>大家群聊项目</title>
    <meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale = 1, target-densitydpi=device-dpi">
    <link rel="stylesheet" href="../../frontend/css/swiper-3.3.1.min.css">
    <link rel="stylesheet" href="../../frontend/css/effect.css">
    <link rel="stylesheet" href="../../frontend/css/index.css">
    <script type="text/javascript" src="../../frontend/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="../../frontend/js/swiper-3.3.1.jquery.min.js"></script>
    <script type="text/javascript" src="../../frontend/js/swiper.animate1.0.2.min.js"></script>
   {{-- <script type="text/javascript" src="../../frontend/js/common.js"></script>--}}
    <script>
        var deviceWidth = Math.min(750, window.innerWidth);
        document.documentElement.style.fontSize = parseInt(deviceWidth / 7.5) + "px"
    </script>
</head>

<body>


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
            link: "{{$url}}", // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: 'http://dajia.pinecc.cn/img.png', // 分享图标
         //   imgUrl: 'http://fast.pinecc.cn/frontend/images/imgUrl.png', // 分享图标
            success: function () {
                // 设置成功

            },
            error: function(data) {

            }
        });
        wx.updateTimelineShareData({
            title: '绿城•莫干山郡安里', // 分享标题
            link: "{{$url}}", // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: 'http://fast.pinecc.cn/frontend/images/img.jpeg', // 分享图标
         //   imgUrl: 'http://fast.pinecc.cn/frontend/images/imgUrl.png', // 分享图标
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
