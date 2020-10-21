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
    imagesLoad.file = ['../../frontend/images/arrow-down.png', '../../frontend/images/arrow-right.png', '../../frontend/images/back-btn.png', '../../frontend/images/bg.png', '../../frontend/images/bg2.png', '../../frontend/images/font1-1_01.png', '../../frontend/images/font1-1_02.png', '../../frontend/images/font1-1_03.png', '../../frontend/images/font1-1_04.png', '../../frontend/images/font1-1_05.png', '../../frontend/images/font1-1_06.png', '../../frontend/images/font1-1_07.png', '../../frontend/images/font1-2.png', '../../frontend/images/font2-1.png', '../../frontend/images/font2-2.png', '../../frontend/images/font3-2.png', '../../frontend/images/font3-3_01.png', '../../frontend/images/font3-3_02.png', '../../frontend/images/font3-3_03.png', '../../frontend/images/font3-3_04.png', '../../frontend/images/font12-1.png', '../../frontend/images/font12-2_01.png', '../../frontend/images/font12-2_02.png', '../../frontend/images/font12-2_03.png', '../../frontend/images/font12-3_01.png', '../../frontend/images/font12-3_02.png', '../../frontend/images/font-tip.png', '../../frontend/images/img1-1.png', '../../frontend/images/img1-2.png', '../../frontend/images/img1-3.png', '../../frontend/images/img2-1.png', '../../frontend/images/img2-2_01.png', '../../frontend/images/img2-2_02.png', '../../frontend/images/img2-2_03.png', '../../frontend/images/img2-2_04.png', '../../frontend/images/img2-2_05.png', '../../frontend/images/img3-1.png', '../../frontend/images/img3-2.png', '../../frontend/images/img12-1.png', '../../frontend/images/img13-1.png', '../../frontend/images/line.png', '../../frontend/images/loading.png', '../../frontend/images/logo.png', '../../frontend/images/s-logo.png', '../../frontend/images/s-tip.png', '../../frontend/images/tip.png', '../../frontend/images/tip13.png'];
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
