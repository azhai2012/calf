<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
<head>
<title>hhyy</title> 
<meta http-equiv="Cache-Control"   content="max-age=367200" />   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="robots" content="noindex,nofollow" />
<link rel="shortcut icon" href="/media/images/favicon.ico" />
<link href="/media/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <script type="text/javascript" src="/media/js/comm.js"></script>
 <script type="text/javascript" src="/media/js/apps.js"></script>
 <script type="text/javascript" src="/media/js/jquery-1.6.4.min.js"></script>
 <script type="text/javascript" src="/media/js/jquery.bxSlider.min.js"></script>
 <script type="text/javascript" src="/media/js/jquery.idTabs.min.js"></script>
  
 <script type="text/javascript">
    $(document).ready(function(){        
        $('#slider').bxSlider({
            mode: 'fade',
            captions: true,
            auto: true,
            controls: false,
            randomStart: true,
            pager: true  
        });
    });
</script>
</head>
<body style="margin:0;padding:0" class="home">
 <!-- begin main header -->
 
 <div id="mainheader"  >
    <div id="headertop"> </div>
    <div id="headcontent" class="clearfix"></div>
  </div> 
 <!-- end main header -->
 
 <!-- begin menus -->
 <div id="menus" ></div>
 <!-- end menus -->
 
 <!-- begin main content -->
  <div id="maincontent" class="clearfix" > 
    <div id="maincontentcol" class="clearfix"></div>
  </div>
 <!-- end content -->
 
 <!-- begin main pagefoot -->  
 <div class="clearfix"></div> 
 <div id="mainpagefoot" class="clearfix"  ></div>
 <!-- end main pagefoot --> 
     
</body>

 <?php echo $menus;?>
 <?php echo $css; ?>
 <?php echo $callmethod;?>
 
</html>
