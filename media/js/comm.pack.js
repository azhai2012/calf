/*
 *  author:azhai
 *  date :2010-11-20 22:00
 *  descrption: public javascript DOM
 */

var Comm = function(json) {
    this.json = json;

    if (typeof(Comm._init) == "undefined" || json === null) {
        Comm.prototype.serName = function(jsons) {
            this.json = jsons;
        };
        Comm.prototype.getJson = function() {
            return this.json;
        };
        Comm.prototype.getDOM = function() {
            var data = this.json;

            var id = data['id'];
            var attr = data['attr'];
            var type = data['type'];
            var css = data['css'];
            var content = data['content'];
            var js = data['js'];
            var content = data['content'];
            var __ajax = data['ajax'];
            var _loadingid = data['loadingid'];
            var result = '';
            var _attr = '';
            var _hardpoint = null;

            var getHardpoint = function() {
                if (!this._hardpoint) {
                    var c, b = document.getElementsByTagName('head');
                    if (b.length) {
                        c = b[0];
                    } else {c = document.body;}
                    this._hardpoint = c;
                }
                return this._hardpoint;
            };

            var head = getHardpoint();

            var ajaxobj = function() {

                $.ajax({
                    type: "get",
                    url: __ajax,
                    beforeSend: function(XMLHttpRequest) {
                        $(".pop_content_load").css("width", "200px").css("height", "40px").html('<div style="margin-top:15px;margin-left:20px;"><h2 style="border:0;">加载中....</h2></div>').show();
                    },
                    success: function(data, textStatus) {
                        $(".pop_content_load").hide();
                        $('.pop_content').html(data);
                    },
                    complete: function(XMLHttpRequest, textStatus) {

},
                    error: function() {
                        // 请求出错处理
                    }
                });
            };

            switch (type) {
            case 'div':
                {
                    if (attr != null && attr != "") {
                        var style = attr["style"];
                        var _classname = attr["class"];
                        if (style != "" && style != null) _attr = _attr + 'style="' + style + '"';
                        if (_classname != "" && _classname != null) _attr = _attr + 'class="' + _classname + '"';
                    }
                    result = '<div id="' + id + '" ' + _attr + '>' + content + '</div>';
                    document.write(result);

                };
                break;
            case "js":
                {
                    for (var i = 0; i < js.length; i++) {
                        var script = document.createElement('script');
                        script.src = js[i];
                        script.type = "text/javascript";
                        script.async = true;
                        script.onload = script.onreadystatechange = function() {   
                            if (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete') {
                            	 head.appendChild(script);
                              }
                            }   
                        }
                       

                };
                break;
            case "css":
                {

                    for (var j = 0; j < css.length; j++) {
                        var d = document.createElement('link');
                        d.href = css[j];
                        d.rel = "stylesheet";
                        d.type = "text/css";
                        d.media = "all";
                        /*
					 * // d.onerror = d.onload = alert("error");
					 * d.onreadystatechange = function() { if (this.readyState ==
					 * "complete" || this.readyState == "loaded") alert("ok"); };
					 */
                        head.appendChild(d);
                    }
                };
                break;
                // ajax
            case "dialog":
                {
                    var w01 = content['width'];
                    var h01 = content['height'];
                    var t01 = content['top'];
                    var bH = $(document).height();
                    var bW = $(document).width();

                    $("#fullbg").css({
                        width: bW,
                        height: bH,
                        display: "block"
                    });
                    $("." + id).css("display", "block").css("left", (bW / 2 - (parseInt(w01) / 2)) + "px").css("top", t01 + "px").css("width", w01 + "px");
                    // .css("height",h01+"px");
                    $('.' + id).show();
                    ajaxobj();
                }

                break;

                // ajax
            case "ajax":
                {
                    $.ajax({
                        type:
                        "get",
                        url: __ajax,
                        beforeSend: function(XMLHttpRequest) {
                            $(".selectItem").addClass("loading");
                        },
                        success: function(data, textStatus) {
                            $('#' + id).html(data);
                        },
                        complete: function(XMLHttpRequest, textStatus) {
                            $(".selectItem").removeClass("loading");
                        },
                        error: function() {
                            // 请求出错处理
                        }
                    });

                }

                break;

            default:
                {

                    if (typeof(content) == "string") {
                        var obj = document.getElementById(id);
                        obj.innerHTML = content;

                    } else {
                        for (var r in content) {
                            var rid = document.getElementById(r);
                            rid.innerHTML = content[r];
                        }
                    }
                };
            };
        };
    };

    Comm._init = true;
};

var Azhai = {
    onMsg: function(msg) {
        alert(msg);
    },
    onPages: function(myjson) {
        var v = new Comm(myjson);
        return v.getDOM();
    }
}