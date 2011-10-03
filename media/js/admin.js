$(function(){ 
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
var Admins = {
	   
		onMsg:function(msg) {
			alert(msg);
		},
		Init:function(){
			 $("#side-nav").css({position:"absolute",left:0});
		     content = $("#doc-content");
		     devdocNav = $("#devdoc-nav");
	      	 sidenav=$('#side-nav');
			 $("#side-nav").resizable({handles: "e", resize: function(e, ui){
		     	 Admins.resizeWidth();
				}
			  });
			 this.defHeight();
		

			 var cookiePath = "";
			  if (location.href.indexOf("/index") != -1) {
			    cookiePath = "index_";
			  } else if (location.href.indexOf("/guide/") != -1) {
			    cookiePath = "guide_";
			  } else if (location.href.indexOf("/sdk/") != -1) {
			    cookiePath = "sdk_";
			  } else if ((location.href.indexOf("/resources/") != -1) || 
			             (location.href.indexOf("/training/") != -1)) {
			    cookiePath = "resources_";
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
	
		restoreWidth:function(navWidth) {
		 	
		  var windowWidth = $(window).width() + "px";
		  content.css({marginLeft:parseInt(navWidth) + 6 + "px"}); //account for 6px-wide handle-bar

		  if (isIE6) {
		    content.css({width:parseInt(windowWidth) - parseInt(navWidth) - 6 + "px"}); // necessary in order for scrollbars to be visible
		  }
		  $('#side-nav').css({width:navWidth});
		},
		restoreHeight:function(packageHeight) {
		  var windowHeight = ($(window).height() - 100);
		  sidenav.css({height:windowHeight + "px"});
		  content.css({height:windowHeight + "px"});
		  devdocNav.css({height:sidenav.css("height")});
		},	
		resizeWidth:function(){
			
			  if (sidenav.length) {
			    var sidenavWidth = sidenav.css("width");
			  } else {
			    var sidenavWidth = 0;
			  }
              
			  content.css({marginLeft:parseInt(sidenavWidth) + 6 + "px"}); //account for 6px-wide handle-bar
              
			  if (isIE6) {
			    content.css({width:parseInt(windowWidth) - parseInt(sidenavWidth) - 6 + "px"}); // necessary in order to for scrollbars to be visible
			  }
			
		 	if (sidenav.length) { // Must check if the nav exists because IE6 calls resizeWidth() from resizeAll() for all pages
			    var basePath = this.getBaseUri(location.pathname);
			    var section = basePath.substring(1,basePath.indexOf("/",1));
			    this.writeCookie("width", sidenavWidth, section, null);
			  }
		},	
		resizeHeight:function() {
		  var docContent = $("#doc-content");
          // Get the window height and always resize the doc-content and side-nav divs
		  var windowHeight = ($(window).height() - 100);
		 
		  docContent.css({height:windowHeight + "px"});
		  $("#side-nav").css({height:windowHeight + "px"});

		  var href = location.href;
		
		  // If in the reference docs, also resize the "swapper", "classes-nav", and "nav-tree"  divs
		  if ($("#devdoc-nav").length) {
		    $("#devdoc-nav").css({height:sidenav.css("height")});
		  }
      	 
		},
		defHeight:function(){
				var h = $(window).height()-100;
				  $('#doc-content').css({"height":h+"px"}); 
				  $('#devdoc-nav').css({"height":h+"px"});
				  $('#side-nav').css({"height":h+"px"});	
		},
		getHeight:function(){
		   $(window).resize(function(){
			  var h = $(this).height()-100;
			  $('#doc-content').css({"height":h+"px"}); 
			  $('#devdoc-nav').css({"height":h+"px"});
			  $('#side-nav').css({"height":h+"px"});

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
		    date.setTime(date.getTime()+(10*365*24*60*60*1000)); // default expiration is one week
		    expiration = date.toGMTString();
		  }
		  document.cookie = cookie_namespace + section + cookie + "=" + val + "; expires=" + expiration+"; path=/";
		},
		getBaseUri:function(uri) {
		  var intlUrl = (uri.substring(0,6) == "/intl/");
		  if (intlUrl) {
		    base = uri.substring(uri.indexOf('intl/')+5,uri.length);
		    base = base.substring(base.indexOf('/')+1, base.length);
		      //alert("intl, returning base url: /" + base);
		    return ("/" + base);
		  } else {
		      //alert("not intl, returning uri as found.");
		    return uri;
		  }
		},
		EditCms:function(){
			var titlename=  $('#title').val();
			
			$.ajax({
				type : "get",
				url : "/ajax?sk=adcedit&fl="+titlename,
				beforeSend : function(XMLHttpRequest) {
				},
				success : function(data, textStatus) {
	                 alert(data);   
				},
				complete : function(XMLHttpRequest, textStatus) {
					
				},
				error : function() {
					// 请求出错处理
				}
			});
			
		},
		
};





 