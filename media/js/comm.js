/*
 *  author:azhai
 *  date :2010-11-20
 *  descrption: public javascript DOM
 */

var Comm = function(json) {
	this.json = json;

	if (typeof (Comm._init) == "undefined" || json === null) {
		Comm.prototype.serName = function(jsons) {
			this.json = jsons;
		};
		Comm.prototype.getJson = function() {
			return this.json;
		};
		Comm.prototype.getDiv = function() {
			var data = this.json;
			var id = data['id'];
			var attr = data['attr'];
			var type = data['type'];
			var css = data['css'];
			var js = data['js'];
			var content = data['content'];
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
			           // d.onerror = d.onload = alert("error");
			            d.onreadystatechange = function() {
			                if (this.readyState == "complete" || this.readyState == "loaded") alert("ok");
			            };
			     */   
					head.appendChild(d);
				}
			}
				;
				break;
			default: {
				if (typeof(content) == "string"){
				var obj = document.getElementById(id);
				obj.innerHTML = content;
				}
				else 
				{
					for (var r in content){
						var rid= document.getElementById(r);
						rid.innerHTML= content[r];
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
	onPages : function(myjson) {
		var v = new Comm(myjson);
		return v.getDiv();
	}
}
