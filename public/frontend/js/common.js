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
