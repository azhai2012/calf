<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
<head>
<title>hhyy</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="robots" content="noindex,nofollow" />
<link rel="shortcut icon" href="/media/images/favicon.ico" >
 <link href="/media/css/apps.css" rel="stylesheet" type="text/css" media="all">
 <script>
 function updatecaptcha(){
	 var obj = document.getElementById('captcha'); 
	 obj.src='/captcha/default?'+Math.random();
 }
 
 </script>
</head>
<body class="home" >
 
  <div id="content"  > <!-- begin content -->
  <div style="background:#3B5998;height:80px;width:100%">
      <div style="width:980px;margin-left:auto;margin-right:auto;">
         <div style="padding-top:20px;padding-left:80px;font-size:36px;color:#fff;font-weight:bold;" >hhey.cn</div>
      </div>
    </div>
    <div id="mainContainer" class="loginbg clearfix"> <!-- begin main -->
    
      <div id="logincontent" >
         <div id="login-left">
           <div class="bgdiv">
           </div>
           <div  style="text-align:center;margin-left:auto;margin-right:auto;font-size:24px" >
              <?php echo $descripts; ?> 
           </div>
         </div>
         <div id="login-right" style="border:1px #fff solid">
          <form id="StaticForm" action="/login" method="post">
          <div style="padding-bottom:30px;font-size:18px;padding-left:20px">请输入账号名开始登录</div>
		   <div class="field clearfix">
			  <label>账户名</label>
			  <span id="ptandard">
			  <input type="text" name="lusername" id="lusername" class="login-text" title="输入账户名称" value="" maxlength="32" tabindex="1">
			  </span>
		  </div>
		  <div class="field clearfix">
			<label>密　码</label>
			<span id="ptandard">
				<input type="password" name="lpassword" id="lpassword" class="login-text" maxlength="20" tabindex="2">				
			</span>
		  </div>
		  <div class="field clearfix">
			<label>验证码</label>
			<span id="ptandard">
				<input type="text" name="lcaptcha" id="lcaptcha" class="login-text" maxlength="20" tabindex="3" />
			</span>
				
		  </div>
		  
		  <div style="margin:5px 0 0 80px;">
				<?php 
				  $captcha = Captcha::instance(); 
				  echo $captcha->render();
				?>
			   <div style="padding-top:10px;"><a href="javascript:void(0);" onclick="updatecaptcha()" >看不清楚？</a></div>
		  </div>
	
		  <div class="submit">
			<div style="padding:12px 0 0 50px;clear:both;height:26px!important;">
			   <input type="submit" class="submitbtn" style="font:bold 16px Verdana;height:26px;" value="登 录" id="btlogin" name="btlogin" tabindex="4">
			</div>
		    <div style="padding:10px 50px;margin-top:20px;border-top:1px #fff solid;width:165px;height:10px;">
		       <a href="#">公告信息</a>  <a style="padding-left:30px" href="#">登录帮助</a>
		    </div>
		   </div>
  	    </form>
       <?php echo $info;?>
       </div>
       
     </div>  
    
    </div> <!-- end main -->
  
  </div> <!-- end content  -->   
   <div style="margin-left:auto;margin-right:auto;width:981px;"><div style="padding-top:10px;font-size:14px;text-align:center;margin-left:auto;margin-right:auto;"><span style="padding-right:30px;"><a href="http://www.hhey.cn">公司首页</a></span> 徐州淮海药业有限公司 &copy 2010 </div></div>  
</body>

</html>
