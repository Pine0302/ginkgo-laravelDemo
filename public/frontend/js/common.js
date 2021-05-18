var common;
(function (common) {
    /*
    * @文件预加载
    * @param [object] file [即将进行预加载的文件集合]
    * @param [function] start [开始的回调事件]
    * */
    var imgload = (function () {
        function imgload() {
            this.file = [];
            this.startFn = function () { };
            this.callbackFn = function () { };
            this.bar = 0;
        }
        imgload.prototype.start = function () {
            var self = this;
            self.startFn();
            self.loop();
        };
        ;
        imgload.prototype.loop = function () {
            var self = this;
            if (self.bar == self.file.length)
                return false;
            var img = new Image();
            var f = self.file[self.bar];
            img.src = f;
            img.onload = complete;
            img.onerror = complete;
            function complete(res) {
                img = null;
                self.bar += 1;
                var result = Math.round(self.bar / self.file.length * 100) + '%';
                console.log(result)
                self.callbackFn(result);
                self.loop();
            }
            ;
        };
        ;
        return imgload;
    }());
    common.imgload = imgload;
    ;
})(common || (common = {}));
;

function commonFlake(data, num){
    var flakeURl = data.flakeURl
　　
    var container = data.container,
       visualWidth = data.visualWidth || container.width(),
       visualHeight = data.visualHeight || container.height();
　　　　　　
    function getImagesName() {
        return flakeURl[[Math.floor(Math.random() * flakeURl.length)]];
    }
    function createBox() {
        var url = getImagesName();
        return $('<div class="leaf" />').css({
            'width': data.width || '.3rem',
            'height': data.height || '.3rem',
            'position': 'absolute',
            'backgroundSize': 'cover',
            'zIndex': 1001,
            'top':data.top || '-.5rem',
            'backgroundImage': 'url(' + url + ')'
        })
    }
    
    for (let i = 0; i < num; i++) {
        // 开始
        setTimeout(function() {
            var startPositionLeft = Math.random() * 375,
                startOpacity    = 1,
                endPositionTop  = (visualHeight / 2) + 300,
                endPositionLeft = startPositionLeft - 1 + Math.random() * 50,
                duration        = (visualHeight / 2) * 8 + Math.random() * 30;
            var randomStart =1;
            var $flake = createBox();

            // 设计起点位置
            $flake.css({
                left: startPositionLeft,
                opacity : randomStart
            });

            // 加入到容器
            data.$flakeContainer.append($flake);

            // 开始执行动画
            $flake.animate({
                top: endPositionTop,
                left: endPositionLeft
            }, duration, 'swing', function() {
                $(this).animate({
                    opacity:0
                },500,function(){
                    $(this).remove()
                }) //结束后删除
            });
            
        }, (data.time || 200) * i);
    }
}
