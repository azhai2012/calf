
$(document).ready(function(){ 
   Admins.Init();
   Admins.getHeight();	  
	
});

var cookie_namespace = 'Calf_Admin';
var isIE6 = false;
var content;
var resizePackagesNav;
var classesNav;
var devdocNav;
var sidenav;
var resizeheight=26;
var Admins = {	   
		Init:function(){
			 $("#side-nav").css({position:"absolute",left:0});
		     content = $("#doc-content");
		     devdocNav = $("#devdoc-nav");
		     adminheader = $("#a-header");
	      	 sidenav=$('#side-nav');
			 $("#side-nav").resizable({handles: "e", resize: function(e, ui){
		     	 Admins.resizeWidth();
				}
			  });
			 this.defHeight();
		

			 var cookiePath = "";
			  if (location.href.indexOf("/admin") != -1) {
			    cookiePath = "admin_";
			  }
		
			 var cookieWidth = this.readCookie(cookiePath+'width');
			 var cookieHeight = this.readCookie(cookiePath+'height');
		 	 if (cookieWidth) {
			    	this.restoreWidth(cookieWidth);
			    } else if ($("#side-nav").length) {
				      this.resizeWidth();
			    }
			if (cookieHeight) {
				      this.restoreHeight(cookieHeight);
				    } else {
				      this.resizeHeight();
		     }
			
		},	
		toggle:function(obj, slide) {
		  var ul = $("ul:first", obj);
		  var li = ul.parent();
		  if (li.hasClass("closed")) {
		    if (slide) {
		      ul.slideDown("fast");
		    } else {
		      ul.show();
		    }
		    li.removeClass("closed");
		    li.addClass("open");
		    $(".toggle-img", li).attr("title", "hide pages");
		  } else {
		    ul.slideUp("fast");
		    li.removeClass("open");
		    li.addClass("closed");
		    $(".toggle-img", li).attr("title", "show pages");
		  }
		},
		restoreWidth:function(navWidth) {		 	
		  content.css({marginLeft:parseInt(navWidth)  + "px"}); 
		  adminheader.css({marginLeft:parseInt(navWidth)  + "px"}); 
		  if (isIE6) {
		    content.css({width:parseInt(windowWidth) - parseInt(navWidth) + "px"}); 
		    adminheader.css({width:parseInt(windowWidth) - parseInt(navWidth) + "px"}); 
		  }
		  $('#side-nav').css({width:navWidth});
		},
		restoreHeight:function(packageHeight) {
		  var windowHeight = ($(window).height() - resizeheight);
		  sidenav.css({height:windowHeight + "px"});
		  content.css({height:windowHeight + "px"});
		  adminheader.css({height:windowHeight + "px"});
		  devdocNav.css({height:sidenav.css("height")});
		},	
		resizeWidth:function(){			
			  if (sidenav.length) {
			    var sidenavWidth = sidenav.css("width");
			  } else {
			    var sidenavWidth = 0;
			  }
              content.css({marginLeft:parseInt(sidenavWidth) + "px"});
              adminheader.css({marginLeft:parseInt(sidenavWidth) + "px"});
			  
			  if (isIE6) {
			    content.css({width:parseInt(windowWidth) - parseInt(sidenavWidth) + "px"});
			 	adminheader.css({width:parseInt(windowWidth) - parseInt(sidenavWidth) + "px"});
			 }
			
		 	if (sidenav.length) { 
			    var basePath = this.getBaseUri(location.pathname);
			    var section = basePath.substring(1,basePath.indexOf("/",1));
			    this.writeCookie("width", sidenavWidth, section, null);
			  }
		},	
		resizeHeight:function() {
		  var docContent = $("#doc-content");
    	  var windowHeight = ($(window).height() - resizeheight);
		 
		  docContent.css({height:windowHeight + "px"});
		  $("#side-nav").css({height:windowHeight + "px"});

		  var href = location.href;
		
		  if ($("#devdoc-nav").length) {
		    $("#devdoc-nav").css({height:sidenav.css("height")});
		  }
      	 
		},
		defHeight:function(){
				var h = $(window).height()-resizeheight;
				  $('#doc-content,#devdoc-nav,#side-nav').css({"height":h+150+"px"}); 
		},
		getHeight:function(){
		   $(window).resize(function(){
			  var h = $(this).height()-resizeheight;
			  $('#doc-content,#devdoc-nav,#side-nav').css({"height":h+"px"}); 
			 
			});
		}, 
		
		readCookie:function(cookie) {
		  var myCookie = cookie_namespace+"_"+cookie+"=";
	      if (document.cookie) {
		    var index = document.cookie.indexOf(myCookie);
		    if (index != -1) {
		      var valStart = index + myCookie.length;
		      var valEnd = document.cookie.indexOf(";", valStart);
		      if (valEnd == -1) {
		        valEnd = document.cookie.length;
		      }
		      var val = document.cookie.substring(valStart, valEnd);
		      return val;
		    }
		  }
		  return 0;
		},
		writeCookie:function(cookie, val, section, expiration) {
		  if (val==undefined) return;
		  section = section == null ? "_" : "_"+section+"_";
		  if (expiration == null) {
		    var date = new Date();
		    date.setTime(date.getTime()+(10*365*24*60*60*1000)); // one week
		    expiration = date.toGMTString();
		  }
		  document.cookie = cookie_namespace + section + cookie + "=" + val + "; expires=" + expiration+"; path=/";
		},
		getBaseUri:function(uri) {		
		  var intlUrl = (uri.substring(0,6) == "/admin");
		  if (intlUrl) {
		    base = uri+'/index'
		    return base;
		  } else {
		    return uri;
		  }
		},
		Select:function(obj){
		    $('.toggle-list div, #devdoc-nav-sample-list li div').each(function(){
			    $(this).removeClass();
		    });	
		    var action = $('#action').val(); 
		    var id=$(obj).attr("id");
		    $(obj).parent().addClass('selected');
		    $(obj).parent().append('<span class="loading"></span>'); 
		    var u= '/home/'+action+'?sk='+id; 
		    this.ajaxMod(u,function(o){
			  var d= eval('('+o+')');
			  $('#a-header').html(d.nav);
			  $('#doc-content').html(d.content);
			});
		}, 
		ajaxMod:function(uri,callback,datatype,params,method){
			var dt = (!arguments[2]) ? "html": datatype;
			var d = (!arguments[3]) ? "": params;
			var m = (!arguments[4]) ? method: 'post';
	
			$.ajax({
				type : method,
				dataType: dt,
				url : uri,
				data : d,
				beforeSend : function(XMLHttpRequest) {
					$('.loading').show(); 
				},
				success : function(data, textStatus) {
	               callback(data); 
				},
				complete : function(XMLHttpRequest, textStatus) {
				  	$('.loading').remove(); 
				},
				error : function() {
					// 请求出错处理
				}
			});
		},
	
};

var Notice = {
	showAdd:function(){$('.notice-add').show();},
	addArea:function(a){ $('#newscontent').wysiwyg({autoGrow:true, controls:"bold,italic,|,undo,redo"});
	},
};

var News = {
	showAdd:function(){$('.news-add').show();},
	addArea:function(a){$('#newscontent').wysiwyg({autoGrow:true, controls:"bold,italic,|,undo,redo"});}
};






 