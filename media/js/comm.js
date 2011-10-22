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
                	var b = true; 
                    for (var i = 0; i < js.length; i++) {
                        var script = document.createElement('script');
                        script.src = js[i];
                        script.type = "text/javascript";
                        script.async = true;
                        
                        if (b === true)  
                        head.appendChild(script);
                       
                        script.onload = script.onreadystatechange = function() {  
                        if (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete') {
                            b = true;  
                        }
                        else
                           b =false;
                    
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
	newGuid:function(){
	    function a(){
		   return((1+Math.random())*65536|0).toString(16).substring(1)
	    }
	   return a()+a()+"-"+a()+"-"+a()+"-"+a()+"-"+a()+a()+a()
    },	
    showDialog:function(a,b,c,d){
			c||(c=800);
			d||(d=600);
			return window.showModalDialog(a,
			b,"scroll:0;status:0;help:0;resizable:1;dialogWidth:"+c+"px;dialogHeight:"+d+"px;")
	},   
    callMethod:function(a,b,c,d,e){
    	var f;
		if(e==void 0||e==null)e=!0;
		$.ajax({
			type:"POST",
			url:a,
			async:e,
			data:b==null||b==void 0?"json="+"{}":"json="+b,
			beforeSend: function(XMLHttpRequest) {
			
		    },
			success:function(a){
		        f=eval("("+a+")");
				c(f)
			}
			,error:function(a){
			
				try{
					if(a.status==401||a.status==302) alert("\u7b49\u5f85\u64cd\u4f5c\u8d85\u65f6\uff0c\u60a8\u9700\u8981\u91cd\u65b0\u767b\u5f55"),window.top.location=top.location.href;
					else if(d)if(typeof a.responseText!="string"){
						var b=eval("("+a.responseText+
						")");
						d(b)
					}
					else d(a)
				}
				catch(c){
					alert('error');
				}
			}
		})
	},
	callMethod1:function(a,b,c){
    	var f= eval("("+b+")");
		if(c==void 0||c==null)c=false;
		for (var i=0;i<f.length;i++){
		  var m=f[i];	
		  $.ajax({
			type:"POST",
			url:a,
			async:c,
			data:"sk="+m,
			beforeSend: function(XMLHttpRequest) {
				 $('#'+m).html('Loading 。。。 。。。');
		    },
			success:function(data){
				
			    $('#'+m).html(data);
			}
			,error:function(a){
			
				try{
					if(a.status==401||a.status==302) alert("\u7b49\u5f85\u64cd\u4f5c\u8d85\u65f6\uff0c\u60a8\u9700\u8981\u91cd\u65b0\u767b\u5f55"),window.top.location=top.location.href;
				}
				catch(c){
					alert('error');
				}
			}
		 })
	   }
	},
	callMethod2:function(a,b,c){

    	var f= eval("("+b+")");
		if(c==void 0||c==null)c=false;
		for (var i=0;i<f.length;i++){
		  var m=f[i];	
		  $.ajax({
			type:"POST",
			url:a,
			async:c,
			data:"sk="+m,
			beforeSend: function(XMLHttpRequest) {
                   $('#'+m).html('Loading 。。。 。。。');
		    },
			success:function(data){
				$('#'+m).html(data);
			}
			,error:function(a){
			
				try{
					if(a.status==401||a.status==302) alert("\u7b49\u5f85\u64cd\u4f5c\u8d85\u65f6\uff0c\u60a8\u9700\u8981\u91cd\u65b0\u767b\u5f55"),window.top.location=top.location.href;
				}
				catch(c){
					alert('error');
				}
			}
		 })
	   }
	},
    onPages: function(myjson) {
        var v = new Comm(myjson);
        return v.getDOM();
    }
}