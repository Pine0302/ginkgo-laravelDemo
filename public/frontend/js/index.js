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
    imagesLoad.file = ['./images/arrow-down.png', './images/arrow-right.png', './images/back-btn.png', './images/bg.png', './images/bg2.png', './images/font1-1_01.png', './images/font1-1_02.png', './images/font1-1_03.png', './images/font1-1_04.png', './images/font1-1_05.png', './images/font1-1_06.png', './images/font1-1_07.png', './images/font1-2.png', './images/font2-1.png', './images/font2-2.png', './images/font3-2.png', './images/font3-3_01.png', './images/font3-3_02.png', './images/font3-3_03.png', './images/font3-3_04.png', './images/font12-1.png', './images/font12-2_01.png', './images/font12-2_02.png', './images/font12-2_03.png', './images/font12-3_01.png', './images/font12-3_02.png', './images/font-tip.png', './images/img1-1.png', './images/img1-2.png', './images/img1-3.png', './images/img2-1.png', './images/img2-2_01.png', './images/img2-2_02.png', './images/img2-2_03.png', './images/img2-2_04.png', './images/img2-2_05.png', './images/img3-1.png', './images/img3-2.png', './images/img12-1.png', './images/img13-1.png', './images/line.png', './images/loading.png', './images/logo.png', './images/s-logo.png', './images/s-tip.png', './images/tip.png', './images/tip13.png'];
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
        mySwiper.slideTo(pageNum);
    })

    $('.page12 .font12-2>img').click(function() {
        var pageNum = $(this).data('page');
        mySwiper.slideTo(pageNum);
        $('.page13-hide').show();
    })

    $('.back-btn').click(function() {
        mySwiper.slideTo(1);
    })

    $('.back-btn-fixed').click(function() {
        mySwiper.slideTo(3);
        $('.page13-hide').hide();
    })


    $('.page13').scroll(function() {
        var scroL = $('.page13').scrollLeft();
        var viewL = $(window).width();
        if(scroL > 1.5 * viewL){
            $('.arrow-right').hide();
        }
 
    });
    
})
