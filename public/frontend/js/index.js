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
        if (swiper.activeIndex == 12) {
            $('.page-end').hide()
        }

    },
    onSlidePrevEnd: function(swiper) {
        if (swiper.activeIndex == 11) {
            $('.page-end').show()
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
    bgAudio.src = 'media/bg.mp3';
    bgAudio.loop = 'loop'
    bgAudio.load();

document.addEventListener("WeixinJSBridgeReady", function() {
    bgAudio.play();
});

bgAudio.addEventListener("loadedmetadata", function() {
    bgAudio.play();
    loadImages(function() {
        new Promise(function (resolve) {
            mySwiper.slideNext();
            resolve()
        }).then(function () {
            mySwiper.removeSlide(0);
        })
    });
})

bgAudio.addEventListener("loadstart", function() {
    $('.js-load-bar').text('90%');
})


function loadImages(callback) {
    callback = callback ? callback : function() {};
    var imagesLoad = new common.imgload();
    imagesLoad.file = ['../../frontend/images/arrow-down.png', '../../frontend/images/arrow-right.png', '../../frontend/images/back-btn.png', '../../frontend/images/bg.png', '../../frontend/images/bg2.png', '../../frontend/images/btn-nav.png', '../../frontend/images/btn-tel.png', '../../frontend/images/font1-1_01.png', '../../frontend/images/font1-1_02.png', '../../frontend/images/font1-1_03.png', '../../frontend/images/font1-1_04.png', '../../frontend/images/font1-1_05.png', '../../frontend/images/font1-1_06.png', '../../frontend/images/font1-1_07.png', '../../frontend/images/font1-2.png', '../../frontend/images/font2-1.png', '../../frontend/images/font2-2.png', '../../frontend/images/font3-2.png', '../../frontend/images/font3-3_01.png', '../../frontend/images/font3-3_02.png', '../../frontend/images/font3-3_03.png', '../../frontend/images/font3-3_04.png', '../../frontend/images/font4-1.png', '../../frontend/images/font4-2_01.png', '../../frontend/images/font4-2_02.png', '../../frontend/images/font4-2_03.png', '../../frontend/images/font4-2_04.png', '../../frontend/images/font5-1.png', '../../frontend/images/font5-2_01.png', '../../frontend/images/font5-2_02.png', '../../frontend/images/font5-2_03.png', '../../frontend/images/font5-2_04.png', '../../frontend/images/font6-1.png', '../../frontend/images/font6-2_01.png', '../../frontend/images/font6-2_02.png', '../../frontend/images/font6-2_03.png', '../../frontend/images/font6-2_04.png', '../../frontend/images/font7-1.png', '../../frontend/images/font7-2_01.png', '../../frontend/images/font7-2_02.png', '../../frontend/images/font7-2_03.png', '../../frontend/images/font7-2_04.png', '../../frontend/images/font8-1.png', '../../frontend/images/font8-2_01.png', '../../frontend/images/font8-2_02.png', '../../frontend/images/font8-2_03.png', '../../frontend/images/font8-2_04.png', '../../frontend/images/font9-1.png', '../../frontend/images/font9-2_01.png', '../../frontend/images/font9-2_02.png', '../../frontend/images/font9-2_03.png', '../../frontend/images/font9-2_04.png', '../../frontend/images/font10-1.png', '../../frontend/images/font10-2_01.png', '../../frontend/images/font10-2_02.png', '../../frontend/images/font10-2_03.png', '../../frontend/images/font10-2_04.png', '../../frontend/images/font11-1.png', '../../frontend/images/font11-2_01.png', '../../frontend/images/font11-2_02.png', '../../frontend/images/font11-2_03.png', '../../frontend/images/font11-2_04.png', '../../frontend/images/font12-1.png', '../../frontend/images/font12-2_01.png', '../../frontend/images/font12-2_02.png', '../../frontend/images/font12-2_03.png', '../../frontend/images/font12-3_01.png', '../../frontend/images/font12-3_02.png',  '../../frontend/images/font13-1_01.png', '../../frontend/images/font13-1_02.png', '../../frontend/images/font13-1_03.png', '../../frontend/images/font-tip.png', '../../frontend/images/img1-1.png', '../../frontend/images/img1-2.png', '../../frontend/images/img1-3.png', '../../frontend/images/img2-1.png', '../../frontend/images/img2-2_01.png', '../../frontend/images/img2-2_02.png', '../../frontend/images/img2-2_03.png', '../../frontend/images/img2-2_04.png', '../../frontend/images/img2-2_05.png', '../../frontend/images/img2-2_01_dark.png', '../../frontend/images/img2-2_02_dark.png', '../../frontend/images/img2-2_03_dark.png', '../../frontend/images/img2-2_04_dark.png', '../../frontend/images/img2-2_05_dark.png', '../../frontend/images/img3-1.png', '../../frontend/images/img4-1.png', '../../frontend/images/img5-1.png', '../../frontend/images/img6-1.png', '../../frontend/images/img7-1.png', '../../frontend/images/img8-1.png', '../../frontend/images/img9-1.png', '../../frontend/images/img10-1.png', '../../frontend/images/img11-1.png', '../../frontend/images/img12-1.png', '../../frontend/images/img13-1.png', '../../frontend/images/img13-2.png', '../../frontend/images/img14-1.png', '../../frontend/images/img15-1.png', '../../frontend/images/img16-1.png', '../../frontend/images/imgUrl.png', '../../frontend/images/img-cloud.png', '../../frontend/images/line.png', '../../frontend/images/loading.png', '../../frontend/images/logo.png', '../../frontend/images/s-logo.png', '../../frontend/images/s-tip.png', '../../frontend/images/tip-1.png', '../../frontend/images/tip-2.png', '../../frontend/images/tip-3.png', '../../frontend/images/tip-4.png', '../../frontend/images/tip13.png'];
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


$(document).ready(function(){

    $('.page2 .img-list>img').click(function() {
        var pageNum = $(this).data('page');
        var index = $(this).data('index');
        $(this).attr('src', 'images/img2-2_' + index + '.png');
        setTimeout(() => {
            mySwiper.slideTo(pageNum);
        }, 500)
        setTimeout(() => {
            $(this).attr('src', 'images/img2-2_' + index + '_dark.png');
        }, 600)
    })

    $('.page12 .font12-2>img').click(function() {
        var index = $(this).data('index');
        var page = $(this).data('page');
        $('.page-end>div').hide();
        $('.house').scrollLeft(0);
        setTimeout(() => {
            $('.page-end').show();
            $('.house-hide').show();
            $('.house' + index).show();
            mySwiper.slideTo(page);
        }, 100)
    })

    $('.back-btn').click(function() {
        mySwiper.slideTo(1);
    })

    $('.back-btn-fixed').click(function() {
        mySwiper.slideTo(11);
        $('.house-hide').hide();
        $('.arrow-right').show();
    })


    $('.page-end').scroll(function() {
        var scroL = $(this).scrollLeft();
        var viewL = $(window).width();
        if(scroL > 1.9 * viewL){
            $('.arrow-right').hide();
        }

    });

})
