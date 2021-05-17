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
        if (swiper.activeIndex === 3) {
            getMessage();
            setTimeout(getImage, 500);
        }
        if (swiper.activeIndex === 2) {
            document.title = '在线唠“家”吃瓜小分队'
            $('.page3-extra .arrow-up').hide();
            $('.page3-extra').show();
            showMessage();
            $('.page3').addClass('stop-swiping');
        } else {
            document.title = '大家湛景满园'
            $('.page3-extra').hide();
            hideMessage();
        }
    },
    onSlidePrevEnd: function(swiper) {
        if (swiper.activeIndex === 3) {
            getMessage();
            setTimeout(getImage, 500);
        }
        if (swiper.activeIndex === 2) {
            document.title = '在线唠“家”吃瓜小分队'
            $('.page3-extra .arrow-up').hide();
            $('.page3-extra').show();
            showMessage();
            $('.page3').addClass('stop-swiping');
        } else {
            document.title = '大家湛景满园'
            $('.page3-extra').hide();
            hideMessage();
        }
    },
    onInit: function(swiper) { //Swiper2.x的初始化是onFirstInit
        swiperAnimateCache(swiper); //隐藏动画元素 
        swiperAnimate(swiper); //初始化完成开始动画
    },
    onSlideChangeEnd: function(swiper) {
        swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
    },
})

var bgAudio = new Audio();
    bgAudio.src = '../../frontend/media/bg.mp3';
    bgAudio.loop = 'loop'
    bgAudio.load();

var bgAudio2 = new Audio();
    bgAudio2.src = '../../frontend/media/bgAudio.mp3';
    bgAudio2.load();

var bgAudio3 = new Audio();
    bgAudio3.src = '../../frontend/media/bgWx.mp3';
    bgAudio3.load();

document.addEventListener("WeixinJSBridgeReady", function() {
    bgAudio.play();
    bgAudio2.play();
    bgAudio2.pause();
    bgAudio3.play();
    bgAudio3.pause();
});

loadImages(function() {
    new Promise(function (resolve) {
        mySwiper.slideNext();
        bgAudio3.play();
        resolve()
    }).then(function () {
        mySwiper.removeSlide(0);
    })
});

// bgAudio.addEventListener("loadedmetadata", function() {
//     $('.js-load-bar').text('99%');
//     bgAudio.play();
//     loadImages(function() {
//         new Promise(function (resolve) {
//             mySwiper.slideNext();
//             $('.audio-btn').show()
//                resolve()
//         }).then(function () {
//             mySwiper.removeSlide(0);
//         })
//     });
// })

// bgAudio.addEventListener("loadstart", function() {
//     $('.js-load-bar').text('90%');
// })

function loadImages(callback) {
    callback = callback ? callback : function() {};
    var imagesLoad = new common.imgload();
    imagesLoad.file = ['../../frontend/images/arrow-down.png', '../../frontend/images/arrow-up.png', '../../frontend/images/bg1.png', '../../frontend/images/bg2.png', '../../frontend/images/bg3.png', '../../frontend/images/bg4.png', '../../frontend/images/bg5.png', '../../frontend/images/font2-1.png', '../../frontend/images/font2-2_01.png', '../../frontend/images/font2-2_02.png', '../../frontend/images/font2-3.png', '../../frontend/images/font3-1_01.png', '../../frontend/images/font3-1_01.png', '../../frontend/images/font3-1_01.png', '../../frontend/images/font3-1_01.png', '../../frontend/images/font3-1_01.png', '../../frontend/images/font3-1_01.png', '../../frontend/images/font3-1_02.png', '../../frontend/images/font3-1_03.png', '../../frontend/images/font3-1_04.png', '../../frontend/images/font3-1_05.png', '../../frontend/images/font3-1_06.png', '../../frontend/images/font3-1_07.png', '../../frontend/images/font3-1_08.png', '../../frontend/images/font3-1_09.png', '../../frontend/images/font3-1_10.png', '../../frontend/images/font3-1_11.png', '../../frontend/images/font3-1_12.png', '../../frontend/images/font3-1_13.png', '../../frontend/images/font3-1_14.png', '../../frontend/images/font3-1_15.png', '../../frontend/images/font3-2_01.png', '../../frontend/images/font3-2_02.png', '../../frontend/images/font3-2_03.png', '../../frontend/images/font3-2_04.png', '../../frontend/images/font3-2_05.png', '../../frontend/images/font3-2_06.png', '../../frontend/images/font3-2_07.png', '../../frontend/images/font3-2_08.png', '../../frontend/images/font3-2_09.png', '../../frontend/images/font3-2_10.png', '../../frontend/images/font3-2_11.png', '../../frontend/images/font3-2_12.png', '../../frontend/images/font3-3_01.png', '../../frontend/images/font3-3_02.png', '../../frontend/images/font3-3_03.png', '../../frontend/images/font3-3_04.png', '../../frontend/images/font3-3_05.png', '../../frontend/images/font3-3_06.png', '../../frontend/images/font3-4_01.png', '../../frontend/images/font3-4_02.png', '../../frontend/images/font3-4_03.png', '../../frontend/images/font3-4_04.png', '../../frontend/images/font3-5_01.png', '../../frontend/images/font3-5_02.png', '../../frontend/images/font3-5_03.png', '../../frontend/images/font3-5_04.png', '../../frontend/images/font3-5_05.png', '../../frontend/images/font3-6.png', '../../frontend/images/font4-1.png', '../../frontend/images/font4-2.png', '../../frontend/images/font5-1.png', '../../frontend/images/font5-2.png', '../../frontend/images/font5-3.png', '../../frontend/images/img3-1.png', '../../frontend/images/loading.png', '../../frontend/images/logo.png', '../../frontend/images/logo2.png', '../../frontend/images/message-list.png', '../../frontend/images/message1.png', '../../frontend/images/notice.png', '../../frontend/images/photo.png', '../../frontend/images/tip.png'];
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

const dayList = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"]

$(document).ready(function(){
    let currentDate = new Date();
    $('#time').html(`${currentDate.getHours()}:${currentDate.getMinutes() < 10 ? '0' + currentDate.getMinutes() : currentDate.getMinutes()}`);
    $('#date').html(`${currentDate.getMonth() + 1}月${currentDate.getDate()}日${dayList[currentDate.getDay()]}`);
})

$('.font2-3, .notice').click(function(){
    mySwiper.slideNext();
})

// 发送
$('#send-btn').click(function(){
    let value = $('#message').val();
    if (value) {
        $('#value').html(value);
        $('#message').val('');
        $('.page4 .font').show();

        let imgList = $('.page4 .content img')
        for (let i = 0; i < imgList.length; i++) {
            imgList[0].setAttribute("crossOrigin", 'Anonymous')
        }
        getImage();

        $.ajax({
            type: "POST",
            url: "https://dajia.pinecc.cn/collectChat",
            data: {
                message: value
            },
            dataType: "json",
            success: function(data) {
            },
            error: function() {
            }
        })
    }
})

// 获取消息
function getMessage() {
    $.ajax({
        type: "POST",
        url: "https://dajia.pinecc.cn/showAllMessages",
        dataType: "json",
        success: function(data) {
            if (data.msg = 'success') {
                let list = data.list || [];
            }
        },
        error: function() {
        }
    })
}

// 出现消息
function showMessage() {
    var imgList = $('.page3 .content img');
    for(let i = 0; i < imgList.length; i++) {
        setTimeout(() => {
            $(imgList[i]).show();
            if ($(imgList[i]).data('play')) {
                bgAudio2.play();
            }
            
            var div = document.getElementById('content');
            div.scrollTop = div.scrollHeight;
            if (i === imgList.length - 1) {
                setTimeout(() => {
                    $('.page3-extra .arrow-up').show();
                }, 500)
                $('.page3').removeClass('stop-swiping');
            }
        }, $(imgList[i]).data('time') ? i * $(imgList[i]).data('time') : (14 * 300 + (i - 14) * 1200))
    }
}

// 隐藏消息
function hideMessage() {
    $('#content').show();
    var imgList = $('.page3 .content img');
    for(let i = 0; i < imgList.length; i++) {
        $(imgList[i]).hide();
    }
}

// 生成图片
function getImage() {
    //要转换为图片的dom对象
    var element = document.querySelector('.page4 .content');
    //要显示图片的img标签
    var image = document.querySelector('#toImg');
    html2image(element, image);
}

function html2image(source, image) {
    html2canvas(source, { allowTaint: true, useCORS: true }).then(function(canvas) {
        var imageData = canvas.toDataURL();
        image.src = imageData;
    });

}