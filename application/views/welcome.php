<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
<head>
<title>hhyy</title> 
<meta http-equiv="pragma"   content="no-cache" />   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="robots" content="noindex,nofollow" />
<link rel="shortcut icon" href="/media/images/favicon.ico" />
 <link href="/media/css/apps.css" rel="stylesheet" type="text/css" media="all" />
  <script type="text/javascript" src="/media/js/comm.js"></script>
 <script type="text/javascript" src="/media/js/apps.js"></script>
 <script type="text/javascript" src="/media/js/jquery-1.4.4.min.js"></script>
 <script type="text/javascript" src="/media/js/jquery.checktree.js"></script>
 <script type="text/javascript" src="/media/js/calendar_az.js"></script>


</head>
<body class="home">
<div id="blueBar"></div>
 <div id="allContainer" > 
     <!-- begin allcontainer-->

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
            <a style="padding-right:35px" href="/home?id=<?php echo $info['id']; ?>">欢迎您：<?php echo $info['id']; ?> </a>
            <a href="/logout">注销</a>
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
      
      <div id="contentcourve"> </div>
     
      <div class="clearfix" id="footcontainer" >   
         <div class="lfloat">徐州淮海药业有限公司 &copy 2010</div>    
         <div class="rfloat">
         <ul>
           <li><a href="#">关于</a>.</li>
           <li><a href="/">首页</a>.</li>
           <li><a href="#">帮助中心</a>.</li>
           
         </ul>
         </div>
      </div> 
      </div>
    </div>
  </div>
 </div> <!-- end allcontainer  -->
 
</body>

 <?php echo $menus;?>
 <?php echo $contentcol;?>
 <?php echo $css; ?>
</html>
