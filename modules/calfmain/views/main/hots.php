<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-26 
 * @copyright 2011 
 *
 */
?>
<?php foreach ($array_data as $key => $value): ?>
<h1 id="hpt"><a href="#"><?php echo $value['title']; ?></a></h1>
  <div id="hpc" class="clearfix" > <!-- begin hpc -->
     <div class="left"> <!-- begin left -->
      <div id="lt"></div>  
        <div id="lc">
        	<h1><a href="#"><img src="<?php echo $value['lists']['left']['img']; ?>" class="nw240"/></a></h1>
	            <div><b>功能主治：</b></div>
	             <div><?php echo $value['lists']['left']['info']; ?></div>
        </div>
     </div>  <!-- end left -->
      <div class="right clearfix">  <!-- begin right -->
        <div class="rc clearfix" style="width:545px;float:left">  <!-- begin rc -->
             <?php foreach ($value['lists']['right'] as $sub_key => $sub_value): ?>
	      <div class="rc<?php echo $sub_key+1; ?> clearfix">
    	      <h1><?php echo $sub_value['title']; ?></h1>
               <ul>
	         <?php foreach ($sub_value['lists'] as $sub_sub_key => $sub_sub_value): ?>
                   <li>
                      <a href="#"><img src="<?php echo $sub_sub_value['img']; ?>" alt=""></a>
                      <span class="productName"><?php echo $sub_sub_value['name'] ?></span>
                      <span class="productPrice"><ins><?php echo $sub_sub_value['price']; ?></ins>/<del><?php echo $sub_sub_value['def_price']; ?></del></span>
                      <span class="productInfo"><?php echo $sub_sub_value['info']; ?></span>
                    </li>
                 <?php endforeach; ?>
               </ul>
             </div>
             <?php endforeach; ?>
         </div> <!-- end rc -->
        <div class="ph" style="float:left"> <!-- begin ph -->
            <div class="pt">销售排行榜</div>
            <div class="pc1 clearfix">
              <ul>
	        <?php $p= count($value['lists']['ranking'])-1; ?>
	          <?php foreach ($value['lists']['ranking'] as $sub_key => $sub_value): ?>
		  <?php  $tmp=''; if ($sub_key==0) $tmp='first'; ?>
        	  <?php  if ($sub_key==1) $tmp='secord'; ?>
		  <?php  if ($sub_key==2) $tmp='third'; ?>
		  <?php  if ($sub_key==$p) $tmp='last'; ?> 
	          <li class="<?php echo $tmp; ?>"><b title="<?php echo $sub_value['name']; ?>"></b><?php echo $sub_key+1; ?><a href="#"><?php echo $sub_value['name']; ?></a></li>
	        <?php endforeach; ?>
              </ul>
            </div>
        </div> <!-- end ph -->



     </div> <!-- end right -->
 </div> <!-- end hpc -->
<?php endforeach; ?>

