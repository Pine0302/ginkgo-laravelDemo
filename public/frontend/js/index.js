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

var bgAudio = new Audio();
    bgAudio.src = '../../frontend/media/bg.mp3';
    bgAudio.loop = 'loop'
    bgAudio.load();

document.addEventListener("WeixinJSBridgeReady", function() {
    bgAudio.play();
});

bgAudio.addEventListener("loadedmetadata", function() {
    bgAudio.play();
    loadImages(function() {
        new Promise(function (resolve) {
            setTimeout(() => {
                mySwiper.slideNext();
                resolve()
            }, 1000)
        }).then(function () {
            setTimeout(() => {
                mySwiper.removeSlide(0);
            }, 800)
        })
    });
})

bgAudio.addEventListener("loadstart", function() {
    // $('.js-load-bar').text('90%');
})

function loadImages(callback) {
    callback = callback ? callback : function() {};
    var imagesLoad = new common.imgload();
    imagesLoad.file = ['../../frontend/images/answer-bg.png', '../../frontend/images/arrow.png', '../../frontend/images/arrow-down.png', '../../frontend/images/bg.png', '../../frontend/images/bg2.png', '../../frontend/images/bg3.png', '../../frontend/images/code.png', '../../frontend/images/font1-1_01.png', '../../frontend/images/font1-1_02.png', '../../frontend/images/font1-2.png','../../frontend/images/font1-3.png', '../../frontend/images/font8-1.png', '../../frontend/images/font8-2.png', '../../frontend/images/font9-1_01.png', '../../frontend/images/font9-1_02.png', '../../frontend/images/font9-2.png', '../../frontend/images/font9-3.png', '../../frontend/images/get-btn.png', '../../frontend/images/line.png', '../../frontend/images/loading.png', '../../frontend/images/logo.png', '../../frontend/images/next-btn.png', '../../frontend/images/s-logo.png', '../../frontend/images/tip.png', '../../frontend/images/w-line.png', '../../frontend/images/w-tip.png'];
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

// 题目配置信息
const subjectConfig = {
    '03': {
        multiple: false,
        optionList: [{
            value: '男'
        }, {
            value: '女'
        }]
    },
    '05': {
        multiple: false,
        optionList: [{
            value: '杭州'
        }, {
            value: '上海'
        }, {
            value: '德清'
        }, {
            value: '浙江省内其他'
        }, {
            value: '浙江省外'
        }]
    },
    '06': {
        multiple: false,
        optionList: [{
            value: '是'
        }, {
            value: '否'
        }]
    },
    '07': {
        multiple: false,
        optionList: [{
            value: '公务员'
        }, {
            value: '事业单位'
        }, {
            value: '企业单位'
        }, {
            value: '商业贸易'
        }, {
            value: '制造业'
        }, {
            value: '个体私营'
        }, {
            value: '金融（保险、银行等）'
        }, {
            value: '教育系统'
        }, {
            value: '医疗系统'
        }, {
            value: '退休其他'
        }]
    },
    '08': {
        multiple: false,
        optionList: [{
            value: '1次'
        }, {
            value: '2次'
        }, {
            value: '3次'
        }, {
            value: '4次'
        }, {
            value: '5次'
        }, {
            value: '5次以上'
        }]
    },
    '09': {
        multiple: false,
        optionList: [{
            value: '独自一人出行'
        }, {
            value: '夫妻二人出行'
        }, {
            value: '夫妻带孩子出行'
        }, {
            value: '夫妻带父母和孩子出行'
        }]
    },
    '10': {
        multiple: true,
        optionList: [{
            value: '报刊杂志'
        }, {
            value: '广播电视'
        }, {
            value: '网页广告'
        }, {
            value: '手机朋友圈或APP'
        }, {
            value: '亲朋好友介绍'
        }, {
            value: '户外广告'
        }, {
            value: '销售中介'
        }, {
            value: '机场',
        }, {
            value: '其他（请注明）',
            hasRemark: true
        }]
    },
    '11': {
        multiple: true,
        optionList: [{
            value: '开发商品牌'
        }, {
            value: '养老居住'
        }, {
            value: '度假旅游配套'
        }, {
            value: '总价'
        }, {
            value: '物业服务品牌及费用'
        }, {
            value: '生活配套'
        }, {
            value: '升值潜力'
        }, {
            value: '投资回报'
        }, {
            value: '产品户型'
        }, {
            value: '自然环境'
        }, {
            value: '其他（请注明）',
            hasRemark: true
        }]
    },
    '12': {
        multiple: false,
        optionList: [{
            value: 'Villa'
        }, {
            value: '一房公寓'
        }, {
            value: '两房公寓'
        }, {
            value: 'loft公寓'
        }, {
            value: '叠墅'
        }]
    },
    '13': {
        multiple: false,
        optionList: [{
            value: '40㎡-60㎡（公寓类产品）'
        }, {
            value: '61㎡-80㎡（公寓类产品）'
        }, {
            value: '81㎡-100㎡（公寓类产品）'
        }, {
            value: '101㎡以上（公寓类产品）'
        }, {
            value: '100㎡以下（叠墅及Villa类产品）'
        }, {
            value: '101-130㎡（叠墅及Villa类产品）'
        }, {
            value: '131-150㎡（叠墅及Villa类产品）'
        }, {
            value: '151-180㎡（叠墅及Villa类产品）'
        }, {
            value: '180㎡以上（叠墅及Villa类产品）'
        }]
    },
    '14': {
        multiple: false,
        optionList: [{
            value: '赠送面积'
        }, {
            value: '大客厅'
        }, {
            value: '房间朝向'
        }, {
            value: '卧室数量'
        }, {
            value: '层高'
        }]
    },
    '15': {
        multiple: false,
        optionList: [{
            value: '有，主卧客厅必须朝阳'
        }, {
            value: '有，主卧、客厅朝景观面优先考虑'
        }, {
            value: '无所谓'
        }]
    },
    '16': {
        multiple: false,
        optionList: [{
            value: '100万以下（公寓类产品）'
        }, {
            value: '100万-200万（公寓类产品）'
        }, {
            value: '200万-300万（公寓类产品）'
        }, {
            value: '300万以上（公寓类产品）'
        }, {
            value: '300万以下（叠墅Villa类产品）'
        }, {
            value: '300万-400万（叠墅Villa类产品）'
        }, {
            value: '400万-500万（叠墅Villa类产品）'
        }, {
            value: '500万以上（叠墅Villa类产品）'
        }]
    },
    '17': {
        multiple: true,
        optionList: [{
            value: '共享厨房、客厅'
        }, {
            value: '业主食堂'
        }, {
            value: '生活超市'
        }, {
            value: '咖啡吧'
        }, {
            value: '阅览室/书吧/文创空间'
        }, {
            value: '静音酒吧'
        }, {
            value: '亲子乐园'
        }, {
            value: '药房'
        }, {
            value: '干洗店'
        }, {
            value: '托管服务（给予投资回报）'
        }, {
            value: '其他（请注明）',
            hasRemark: true
        }]
    },
    '18': {
        multiple: false,
        optionList: [{
            value: '精装修（硬装）'
        }, {
            value: '软装定制'
        }, {
            value: '全装全配'
        }, {
            value: '其它'
        }]
    },
    '19': {
        multiple: false,
        optionList: [{
            value: '现代简约'
        }, {
            value: '现代轻奢'
        }, {
            value: '现代中式'
        }, {
            value: '侘寂风'
        }, {
            value: '北欧风'
        }, {
            value: '日式风'
        }, {
            value: '混搭风'
        }]
    },
    '20': {
        multiple: true,
        optionList: [{
            value: '酒店式托管服务'
        }, {
            value: '出行叫车服务'
        }, {
            value: '旅游线路定制服务'
        }, {
            value: '管家式服务'
        }, {
            value: '宠物服务'
        }, {
            value: '分时度假'
        }, {
            value: '智能化服务'
        }, {
            value: '无所谓'
        }, {
            value: '其他（请注明）',
            hasRemark: true
        }]
    },
    '21': {
        multiple: false,
        optionList: [{
            value: '固定收益回报率（即每年固定给予百分比回报）'
        }, {
            value: '按实际收益分成（即交房后根据经营情况按比例给予回报）'
        }, {
            value: '固定收益+实际收益分成（即交付前给予固定回报，交付后根据经营情况按比例给予回报）'
        }, {
            value: '其他（请注明）',
            hasRemark: true
        }]
    },
    '22': {
        multiple: false,
        optionList: [{
            value: '能'
        }, {
            value: '不能'
        }]
    },
    '23': {
        multiple: false,
        optionList: [{
            value: '会'
        }, {
            value: '不会'
        }, {
            value: '自己先来考察后再邀请一起过来'
        }]
    }
}

let currentValue = '';
let currentKey = '';
let currentRemark = '';
let phoneReg = /(^1[3|4|5|6|7|8|9]\d{9}$)|(^09\d{8}$)/;
let finalData = {};

$(document).ready(function(){

    // 点击select触发
    $('.select').click(function(){
        currentKey = $(this).data('key');
        currentValue = $(this).data('value');
        currentRemark = $(this).data('remark');
        var dataConfig = subjectConfig[currentKey];

        var value = dataConfig.multiple ? JSON.parse(currentValue || '[]') : [currentValue];
        var list = dataConfig.optionList.map(data => `<li data-multiple=${dataConfig.multiple} data-value=${data.value} class="${value.includes(data.value) ? 'choose' : ''}" data-remark=${data.hasRemark}>
            <i class="circle"></i>
            <span><span>${data.value}</span></span>
        </li>`).join('');

        var html = `<div>
            <h3>${dataConfig.multiple ? '多选题' : '单选题'}</h3>
            <ul>${list}</ul>
            ${currentRemark ? `<input class="remark" value="${currentRemark}"/>` : `<input class="remark none"/>`}
        </div>`;
        $('.popover .content').html(html);

        setTimeout(() => {
            $('.popover').show();
        }, 20)
    });

    // 点击蒙层关闭select选择层
    $('.popover .cover').click(function(){
        if ($(this).siblings('.content').find('input')) {
            var remark = $(this).siblings('.content').find('input').val();
            if (remark != undefined && remark) {
                let selectClass = '.select-' + currentKey + ' .select';
                $(selectClass).data('remark', remark);
            }
        }
        $('.popover').hide();
    });

    // 点击选项
    $(".popover .content").on("click","ul li",function(){
        var multiple = $(this).data('multiple');
        var value = $(this).data('value');
        var remark = $(this).data('remark');
        var choose = $(this).hasClass('choose');
        if (multiple) {
            currentValue = JSON.parse(currentValue || '[]');
            if (choose) {
                currentValue = currentValue.filter(item => item != value);
                $(this).removeClass('choose');
                if (remark == true) {
                    $(this).parents('.content').find('input').hide();
                }
            } else {
                currentValue.push(value);
                $(this).addClass('choose');
                if (remark == true) {
                    $(this).parents('.content').find('input').show();
                }
            }

            let selectClass = '.select-' + currentKey + ' .select';
            if (!currentValue.length) {
                $(selectClass).addClass('placeholder');
                $(selectClass).html('请选择');
            } else {
                $(selectClass).removeClass('placeholder');
                $(selectClass).html(currentValue.join('，'));
            }

            currentValue = JSON.stringify(currentValue);
            $(selectClass).data('value', currentValue);
        } else {
            if (!choose) {
                currentValue = value;
                $(this).addClass('choose');
                $(this).siblings().removeClass('choose');
                let selectClass = '.select-' + currentKey + ' .select'
                $(selectClass).removeClass('placeholder');
                $(selectClass).html(currentValue);
                $(selectClass).data('value', currentValue);
            }
        }
    });

    // 点击下一页
    $('.subject-form .next-btn').click(function(){
        var submit = $(this).data('submit');
        var hasError = false;
        var inputList = $(this).parent().find('input');
        inputList.map((index, input) => {
            var value = $(input).val();
            var id = $(input).data('id');
            if (!value) {
                hasError = true;
                $(input).addClass('error');
            } else {
                if(id === 'mobile' && !phoneReg.test(value)){
                    hasError = true;
                    $(input).addClass('error');
                    return;
                }
                $(input).removeClass('error');
            }
            finalData[id] = value;
        });

        var selectList = $(this).parent().find('.select');
        selectList.map((index, select) => {
            var key = $(select).data('key');
            var value = $(select).data('value');
            var remark = $(select).data('remark');
            var id = $(select).data('id');
            if (!value) {
                hasError = true;
                $(select).addClass('error');
            } else {
                $(select).removeClass('error');
            }

            if(remark) {
                value = JSON.parse(value || '[]').filter(item => item !='其他（请注明）');
                value.push(`其他（请注明）：${remark}`);
                finalData[id] = (value || []).join(',');
            } else {
                if (subjectConfig[key].multiple) {
                    finalData[id] = JSON.parse(value || '[]').join(',');
                } else {
                    finalData[id] = value;
                }
            }
        });

        if (!hasError && submit != false) {
            mySwiper.slideNext();
        }
    })

    // 最后一步提交
    $('#final-next-btn').click(function(){
        $.ajax({
            type:"POST",
            url:"http://fast.pinecc.cn/question",
            data: finalData,
            success:function(res){
                if (res.status == 1) {
                    mySwiper.slideNext();
                } else {
                    alert(res.msg);
                }
            },
            error:function(){
                alert("error");
            }
        })
    })

    // 领取福利
    $('.get-btn').click(function(){
        mySwiper.slideNext();
    })

})


