/*
 *  author:azhai
 *  date :2010-11-20 22:00
 *  descrption: public javascript DOM
 */

function onContent(f) {
	alert(f);
	var a = onContent, b = navigator.userAgent, d = document, w = window, c = "onContent", e = "addEventListener", o = "opera", r = "readyState", s = "<scr"
			.concat("ipt defer src='//:' on", r, "change='if(this.", r,
					"==\"complete\"){this.parentNode.removeChild(this);", c,
					".", c, "()}'></scr", "ipt>");
	a[c] = (function(o) {
		return function() {
			a[c] = function() {
			};
			for (a = arguments.callee; !a.done; a.done = 1)
				f(o ? o() : o)
		}
	})(a[c]);
	if (d[e])
		d[e]("DOMContentLoaded", a[c], false);
	if (/WebKit|Khtml/i.test(b) || (w[o] && parseInt(w[o].version()) < 9))
		(function() {
			/ loaded | complete /.test(d[r]) ? a[c]() : setTimeout(
					arguments.callee, 1)
		})();
	else if (/MSIE/i.test(b))
		d.write(s);
};

var Comm = function(json) {
	this.json = json;

	if (typeof (Comm._init) == "undefined" || json === null) {
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
					} else
						c = document.body;
					this._hardpoint = c;
				}
				return this._hardpoint;
			};

			var head = getHardpoint();
			
			var ajaxobj=function(){
			
				$.ajax({
					type : "get",
					url : __ajax,
					beforeSend : function(XMLHttpRequest) {
						$(".selectItem").addClass("loading");
					},
					success : function(data, textStatus) {
						$('.pop_content').html(data);
					},
					complete : function(XMLHttpRequest, textStatus) {
						$(".selectItem").removeClass("loading");
					},
					error : function() {
						// 请求出错处理
					}
				});
	    	} 

			switch (type) {
			case 'div': {
				if (attr != null && attr != "") {
					var style = attr["style"];
					var _classname = attr["class"];
					if (style != "" && style != null)
						_attr = _attr + 'style="' + style + '"';
					if (_classname != "" && _classname != null)
						_attr = _attr + 'class="' + _classname + '"';
				}
				result = '<div id="' + id + '" ' + _attr + '>' + content
						+ '</div>';
				document.write(result);

			}
				;
				break;
			case "js": {
				for ( var i = 0; i < js.length; i++) {
					var script = document.createElement('script');
					script.src = js[i];
					script.type = "text/javascript";
					script.async = true;
					head.appendChild(script);

				}

			}
				;
				break;
			case "css": {

				for ( var j = 0; j < css.length; j++) {
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
			}
				;
				break;
				// ajax
			case "dialog": {
				    var w01 = content['width'];
				    var h01 = content['height'];
				    var t01 = content['top'];
				    var bH  = $(document).height();
		            var bW  = $(document).width();
		            
		            $("#fullbg").css({ width: bW, height: bH, display: "block" });
		            $("."+id).css("display", "block")
		            .css("left",(bW/2-(parseInt(w01)/2))+"px")
		            .css("top",parseInt(t01)+"px")
		            .css("width",w01)
		            .css("height",h01);
		            $('.'+id).show();
		            ajaxobj();
			}

				break;	
				
			// ajax
			case "ajax": {
				$.ajax({
					type : "get",
					url : __ajax,
					beforeSend : function(XMLHttpRequest) {
						$(".selectItem").addClass("loading");
					},
					success : function(data, textStatus) {
						 $('#'+id).html(data);
					},
					complete : function(XMLHttpRequest, textStatus) {
						$(".selectItem").removeClass("loading");
					},
					error : function() {
						// 请求出错处理
					}
				});

			}

				break;

			default: {

				if (typeof (content) == "string") {
					var obj = document.getElementById(id);
					obj.innerHTML = content;

				} else {
					for ( var r in content) {
						var rid = document.getElementById(r);
						rid.innerHTML = content[r];
					}
				}
			}
				;
			}
		};
	}

	Comm._init = true;
}

var Azhai = {
	onMsg : function(msg) {
		alert(msg);
	},
	onPages : function(myjson) {
		var v = new Comm(myjson);
		return v.getDOM();
	}
}
