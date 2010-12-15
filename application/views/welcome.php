<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
<head>
<title>hhyy</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="robots" content="noindex,nofollow" />
<link rel="shortcut icon" href="/media/images/favicon.ico" >
 <script type="text/javascript" src="/media/js/comm.js"></script>
 <script type="text/javascript" src="/media/js/apps.js"></script>
 <script type="text/javascript" src="/media/js/jquery-1.4.4.min.js"></script>
 <script type="text/javascript" src="/media/js/calendar_az.js"></script>

 <link href="/media/css/apps.css" rel="stylesheet" type="text/css" media="all">
</head>
<body class="home">
<div id="blueBar"></div>
 <div id="allContainer" > <!-- begin allcontainer  -->
  <h1 id="pageLogo"><a href="/" title="首页"></a></h1>

 <div id="content"> <!-- begin content -->
     
    <div id="pageheader" class="clearfix">
     
     <div class="clearfix" id="headnav" >
        <div class="lfloat">
        </div>
        <div class="rfloat">
          <ul>
          <?php foreach ($rfloat as $key => $value):?>
          <li><a href="<?php echo $value['url'];?>"><?php echo $value['name']; ?></a></li> 
          <?php endforeach;?>
          </ul>
        </div>
     </div>
 
    <div id="mainContainer">
     <div id="leftcol">
        <div class="clearfix" style="margin-bottom:20px;">
        <div class="">
            <a href="/home?id=100001653757270">欢迎您： Bob Azhai</a>
        </div>
        </div>
    
       <ul class="navside" id="navside">
         
       </ul>
     
     </div>
     <div id="contentcol">
       
    </div>
     <div id="fullbg"></div>
     <div class="dragDiv">
        <div class="pop_content">
        <div class="pop_content_load">
        </div>
        </div>
    </div> 
  </div> <!-- end content -->
  <div id="pagefoot"  >
      <div id="contentcourve"></div>
      <div class="clearfix" id="footcontainer" >         
      </div>
  </div>
 </div> <!-- end allcontainer  -->
</body>

 <?php echo $menus;?>
 <?php echo $contentcol;?>
 <?php echo $css; ?>
</html>
