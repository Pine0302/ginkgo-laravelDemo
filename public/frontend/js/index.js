$(window).resize(function() {
    var deviceWidth = Math.min(750, window.innerWidth);
    document.documentElement.style.fontSize = parseInt(deviceWidth / 7.5) + "px"
});

var mySwiper = new Swiper('.swiper-container', {
    autoplay: false, //可选选项，自动滑动
    direction: 'vertical',
    effect: 'fade',
    noSwiping: true,
    lazyLoading: true,
    noSwipingClass: 'stop-swiping',
    roundLengths : true,
    onSlideNextEnd: function(swiper) {

    },
    onSlidePrevEnd: function(swiper) {

    },
    onInit: function(swiper) { //Swiper2.x的初始化是onFirstInit
        swiperAnimateCache(swiper); //隐藏动画元素
        swiperAnimate(swiper); //初始化完成开始动画
    },
    onSlideChangeEnd: function(swiper) {
        swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
    },
})

loadImages(function() {
    new Promise(function (resolve) {
        mySwiper.slideNext();
        resolve()
    }).then(function () {
        mySwiper.removeSlide(0);
    })
});

function loadImages(callback) {
    callback = callback ? callback : function() {};
    var imagesLoad = new common.imgload();
    imagesLoad.file = ['./frontend/images/back-btn.png', './frontend/images/bg.png', './frontend/images/btn1.png', './frontend/images/btn2.png',
                       './frontend/images/font1-1.png','./frontend/images/font1-2.png','./frontend/images/font1-3.png','./frontend/images/font2-1.png',
                        './frontend/images/font2-2.png','./frontend/images/font-tip.png','./frontend/images/loading.png','./frontend/images/logo.png',
                        './frontend/images/s-bg.png','./frontend/images/s-tip.png','./frontend/images/submit-btn.png','./frontend/images/imgUrl.jpg'];
    imagesLoad.callbackFn = function(res) {
        $('.js-load-bar').text(res);
        if (res == '100%') return callback();
    };
    imagesLoad.start();
};


//alert样式
window.alert = function(name) {
    var iframe = document.createElement("IFRAME");
    iframe.style.display = "none";
    iframe.setAttribute("src", 'data:text/plain,');
    document.documentElement.appendChild(iframe);
    window.frames[0].window.alert(name);
    iframe.parentNode.removeChild(iframe);
}


function onSubmit() {
    var name = $("#name").val();
    var mobile = $("#mobile").val();
    var dates = $("#dates").val();
    var num=$(".select1 option:selected").text();
    var phoneReg = /(^1[3|4|5|6|7|8|9]\d{9}$)|(^09\d{8}$)/;
    if((!name=="")&&(!mobile=="")&&(!dates=="")&&(!num=="")){
        if(!phoneReg.test(mobile)){
            alert("请输入有效的手机号码")
        }else{
            $.ajax({
                type:"POST",
                url:"http://ginkgo.pinecc.cn/user",
                data:{
                    name, mobile, dates, num
                },
                success:function(){
                    alert('预约成功！');
                    $("#name").val("");
                    $("#mobile").val("");
                    $("#dates").val("");
                    $(".input3").attr('placeholder','预约时间');
                },
                error:function(){
                    alert("error");
                }
            })
        }
    }else{
        alert("用户信息不能为空，请检查！");
    }
}

function onSubmitVisit() {
    var name = $("#name2").val();
    var mobile = $("#mobile2").val();
    var dates = $("#dates2").val();
    var dates_visit = $("#dates3").val();
    var num=$(".select2 option:selected").text();
    var phoneReg = /(^1[3|4|5|6|7|8|9]\d{9}$)|(^09\d{8}$)/;
    if((!name=="")&&(!mobile=="")&&(!dates=="")&&(!dates_visit=="")&&(!num=="")){
        if(!phoneReg.test(mobile)){
            alert("请输入有效的手机号码")
        }else{
            $.ajax({
                type:"POST",
                url:"http://ginkgo.pinecc.cn/user_visit",
                data:{
                    name, mobile, dates, num, dates_visit,
                },
                success:function(){
                    alert('预约成功！');
                    $("#name2").val("");
                    $("#mobile2").val("");
                    $("#dates2").val("");
                    $("#dates3").val("");
                    $(".input5").attr('placeholder','预约日期');
                    $(".input6").attr('placeholder','预约到访时间');
                },
                error:function(){
                    alert("error");
                }
            })
        }
    }else{
        alert("用户信息不能为空，请检查！");
    }
}

var type = '';
$(document).ready(function(){

    $('.back-btn').click(function() {
        mySwiper.slidePrev();
        $('.page2 .content').css('display', 'none');
        $('.page2 .content2').css('display', 'none');
    })

    $(".btn-panel .btn").click(function() {
        var value = $(this).data('value');
        type = value;
        if (value == 1) {
            mySwiper.slideNext();
            $('.page2 .content2').css('display', 'block');
            setTimeout(() => {
                $(".input5").attr('placeholder','');
                var nowDate = new Date();
                var year = nowDate.getFullYear();
                var month = nowDate.getMonth() + 1;
                if (month < 10) {
                    month = '0' + month
                }
                var day = nowDate.getDate();
                var str = year + '-' + month + '-' + day
                $("#dates2").val(str);
            }, 500)

        } else {
            mySwiper.slideNext();
            $('.page2 .content').css('display', 'block');
        }
    })

    $(".submit-btn").click(function () {
        if (type == 1) {
            onSubmitVisit();
        } else {
            onSubmit();
        }

    });


    $(".select1").click(function () {
        $(".input4").attr('placeholder','');
    })

    $(".select2").click(function () {
        $(".input7").attr('placeholder','');
    })

    $(".date-input1").click(function () {
        $(".input3").attr('placeholder','');
    })

    $(".date-input2").click(function () {
        $(".input5").attr('placeholder','');
    })

    $(".date-input3").click(function () {
        $(".input6").attr('placeholder','');
    })
})
