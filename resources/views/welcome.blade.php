<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>绿城·郡安里</title>
    <meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale = 1, target-densitydpi=device-dpi">
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
    <img src="images/musicon.png">
</div> -->
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
            <img src="../../frontend/images/s-logo.png" class="s-logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
            <img src="../../frontend/images/logo.png" class="logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
            <div class="font1-1">
                <img src="../../frontend/images/font1-1_01.png" class="font1-1_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/font1-1_02.png" class="font1-1_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
            </div>
            <div class="font1-2-box">
                <img src="../../frontend/images/font1-2.png" class="font1-2 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/tip.png" class="tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/line.png" class="line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
            </div>
            <img src="../../frontend/images/font1-3.png" class="font1-3 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
            <img src="../../frontend/images/arrow.png" class="mini-arrow ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s">
        </div>

        <div class="swiper-slide page2 stop-swiping">
            <div class="subject-form">
                <div class="item">
                    <h3>
                        <span class="num">01</span>
                        <span class="title">您的姓名</span>
                    </h3>
                    <input data-id="name"/>
                </div>
                <div class="item">
                    <h3>
                        <span class="num">02</span>
                        <span class="title">联系方式</span>
                    </h3>
                    <input data-id="mobile" type="tel"/>
                </div>
                <div class="item select-03">
                    <h3>
                        <span class="num">03</span>
                        <span class="title">您的性别</span>
                    </h3>
                    <div class="select placeholder" data-key="03" data-id="sex">请选择</div>
                </div>
                <div class="item select-04">
                    <h3>
                        <span class="num">04</span>
                        <span class="title">您的年龄</span>
                    </h3>
                    <input data-id="age" type="tel"/>
                </div>
                <img src="../../frontend/images/next-btn.png" class="next-btn">
            </div>
        </div>

        <div class="swiper-slide page3 stop-swiping">
            <div class="subject-form">
                <div class="item select-05">
                    <h3>
                        <span class="num">05</span>
                        <span class="title">您的居住区域是</span>
                    </h3>
                    <div class="select placeholder" data-key="05" data-id="area">请选择</div>
                </div>
                <div class="item select-06">
                    <h3>
                        <span class="num">06</span>
                        <span class="title">是否蓝绿城老业主</span>
                    </h3>
                    <div class="select placeholder" data-key="06" data-id="isold">请选择</div>
                </div>
                <div class="item select-07">
                    <h3>
                        <span class="num">07</span>
                        <span class="title">您从事的行业是</span>
                    </h3>
                    <div class="select placeholder" data-key="07" data-id="trade">请选择</div>
                </div>
                <div class="item select-08">
                    <h3>
                        <span class="num">08</span>
                        <span class="title">您每年平均旅游的频次是多少</span>
                    </h3>
                    <div class="select placeholder" data-key="08" data-id="percentage">请选择</div>
                </div>
                <img src="../../frontend/images/next-btn.png" class="next-btn">
            </div>
        </div>

        <div class="swiper-slide page4 stop-swiping">
            <div class="subject-form">
                <div class="item select-09">
                    <h3>
                        <span class="num">09</span>
                        <span class="title">您一般和谁一起度假</span>
                    </h3>
                    <div class="select placeholder" data-key="09" data-id="with_who">请选择</div>
                </div>
                <div class="item select-10">
                    <h3>
                        <span class="num">10</span>
                        <span class="title">您获知度假物业的主要信息渠道是</span>
                    </h3>
                    <div class="select placeholder" data-key="10" data-id="info_method">请选择</div>
                </div>
                <div class="item select-11">
                    <h3>
                        <span class="num">11</span>
                        <span class="title">郡安里项目位于莫干山主景区内，假设您购买本项目，您最关注哪些因素</span>
                    </h3>
                    <div class="select placeholder" data-key="11" data-id="concern_factor">请选择</div>
                </div>
                <div class="item select-12">
                    <h3>
                        <span class="num">12</span>
                        <span class="title">假设您购买郡安里项目，您比较倾向的产品类型</span>
                    </h3>
                    <div class="select placeholder" data-key="12" data-id="product_type">请选择</div>
                </div>
                <img src="../../frontend/images/next-btn.png" class="next-btn">
            </div>
        </div>

        <div class="swiper-slide page5 stop-swiping">
            <div class="subject-form">
                <div class="item select-13">
                    <h3>
                        <span class="num">13</span>
                        <span class="title">郡安里正在做高端度假公寓的产品设计，假设您购买本项目，您会接受多少面积段的公寓产品呢</span>
                    </h3>
                    <div class="select placeholder" data-key="13" data-id="area_size">请选择</div>
                </div>
                <div class="item select-14">
                    <h3>
                        <span class="num">14</span>
                        <span class="title">若购买本项目您对于户型选择上，更注重哪些方面</span>
                    </h3>
                    <div class="select placeholder" data-key="14" data-id="house_type">请选择</div>
                </div>
                <div class="item select-15">
                    <h3>
                        <span class="num">15</span>
                        <span class="title">您对于房间朝向有没有特殊需求</span>
                    </h3>
                    <div class="select placeholder" data-key="15" data-id="house_face">请选择</div>
                </div>
                <img src="../../frontend/images/next-btn.png" class="next-btn">
            </div>
        </div>

        <div class="swiper-slide page6 stop-swiping">
            <div class="subject-form">
                <div class="item select-16">
                    <h3>
                        <span class="num">16</span>
                        <span class="title">如果您购买我们郡安里的产品，您可能接受的总价范围是</span>
                    </h3>
                    <div class="select placeholder" data-key="16" data-id="total_price">请选择</div>
                </div>
                <div class="item select-17">
                    <h3>
                        <span class="num">17</span>
                        <span class="title">对度假型文旅项目园区公共空间生活配套，您认为最需要的是</span>
                    </h3>
                    <div class="select placeholder" data-key="17" data-id="public_space">请选择</div>
                </div>
                <div class="item select-18">
                    <h3>
                        <span class="num">18</span>
                        <span class="title">您希望入住的度假产品装修情况是</span>
                    </h3>
                    <div class="select placeholder" data-key="18" data-id="renovation">请选择</div>
                </div>
                <div class="item select-19">
                    <h3>
                        <span class="num">19</span>
                        <span class="title">精装修风格您希望是</span>
                    </h3>
                    <div class="select placeholder" data-key="19" data-id="renovation_style">请选择</div>
                </div>
                <img src="../../frontend/images/next-btn.png" class="next-btn">
            </div>
        </div>

        <div class="swiper-slide page7 stop-swiping">
            <div class="subject-form">
                <div class="item select-20">
                    <h3>
                        <span class="num">20</span>
                        <span class="title">在物业服务配套方面，您比较重视以下哪种服务</span>
                    </h3>
                    <div class="select placeholder" data-key="20" data-id="service_type">请选择</div>
                </div>
                <div class="item select-21">
                    <h3>
                        <span class="num">21</span>
                        <span class="title">关于产品托管服务，您更倾向与哪种收益方式</span>
                    </h3>
                    <div class="select placeholder" data-key="21" data-id="profit_type">请选择</div>
                </div>
                <div class="item select-22">
                    <h3>
                        <span class="num">22</span>
                        <span class="title">若购买本项目产品，您是否能接受50%首付款，按揭最多十年政策</span>
                    </h3>
                    <div class="select placeholder" data-key="22" data-id="morgage_5010">请选择</div>
                </div>
                <div class="item select-23">
                    <h3>
                        <span class="num">23</span>
                        <span class="title">您会推荐您的亲朋好友来郡安里，一起分享这种美好的度假生活吗</span>
                    </h3>
                    <div class="select placeholder" data-key="23" data-id="recomend">请选择</div>
                </div>
                <img src="../../frontend/images/next-btn.png" class="next-btn" data-submit="false" id="final-next-btn">
            </div>
        </div>

        <div class="swiper-slide page8 stop-swiping">
            <img src="../../frontend/images/font8-1.png" class="font8-1 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
            <img src="../../frontend/images/font8-2.png" class="font8-2 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s" swiper-animate-delay="0.3s">
            <img src="../../frontend/images/get-btn.png" class="get-btn ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
            <div class="tip-box">
                <img src="../../frontend/images/w-tip.png" class="w-tip">
                <img src="../../frontend/images/w-line.png" class="w-line">
            </div>
        </div>

        <div class="swiper-slide page9 stop-swiping">
            <img src="../../frontend/images/s-logo.png" class="s-logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
            <img src="../../frontend/images/logo.png" class="logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
            <div class="font9-1">
                <img src="../../frontend/images/font9-1_01.png" class="font9-1_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/font9-1_02.png" class="font9-1_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/w-line.png" class="w-line ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/w-tip.png" class="w-tip ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
            </div>
            <img src="../../frontend/images/font9-2.png" class="font9-2 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
            <div class="font9-3-box">
                <img src="../../frontend/images/code.png" class="code ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
                <img src="../../frontend/images/font9-3.png" class="font9-3 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
            </div>
        </div>

        <div class="swiper-slide page9 stop-swiping">
            <img src="../../frontend/images/s-logo.png" class="s-logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
            <img src="../../frontend/images/logo.png" class="logo ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".3s">
            <div class="font9-1">
                <img src="../../frontend/images/font9-1_01.png" class="font9-1_01 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
                <img src="../../frontend/images/font9-1_02.png" class="font9-1_02 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.3s">
            </div>
            <img src="../../frontend/images/font9-2.png" class="font9-2 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
            <img src="../../frontend/images/font9-3.png" class="font9-3 ani" swiper-animate-effect="showOpacity" swiper-animate-duration=".5s" swiper-animate-delay="0.6s">
        </div>
    </div>
</div>
<div class="popover">
    <div class="cover"></div>
    <div class="content">
        <!-- <h3>单选题</h3>
        <ul>
            <li class="choose">
                <i class="circle"></i>
                <span>上海</span>
            </li>
            <li>
                <i class="circle"></i>
                <span>浙江</span>
            </li>
        </ul> -->
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
