<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
<head>
 <script type="text/javascript" src="/media/js/comm.js"></script>
</head>
<body class="home">
<div id="blueBar"></div>
 <div id="allContainer" > <!-- begin allcontainer  -->
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
       <ul class="navside" id="navside">
        
       </ul>
     
     </div>
     <div id="contentcol">
      <div> </div>
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
<?php echo $css; ?>
</html>
