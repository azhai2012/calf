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
<h1 id="hpt"><a href="#"><?php echo $array_data['lists']['title']; ?></a></h1>
  <div id="hpc" class="clearfix" > <!-- begin hpc -->
     <div class="left"> <!-- begin left -->
      <div id="lt"></div>  
        <div id="lc">
        	<h1><a href="#"><img src="<?php echo $array_data['left']['img']; ?>" class="nw240"/></a></h1>
	            <div><b>功能主治：</b></div>
	             <div><?php echo $array_data['lists']['left']['info']; ?></div>
        </div>
     </div>  <!-- end left -->
      <div class="right">  <!-- begin right -->
        <div class="rc">  <!-- begin rc -->
             <?php foreach ($array_data['rc'] as $sub_key => $sub_value): ?>
	      <div class="rc1 clearfix">
    	      <h1><?php echo $sub_value['title']; ?></h1>
               <ul>
	         <?php foreach ($sub_value['lists'] as $sub_sub_key => $sub_sub_value): ?>
                   <li>
                      <a href="#"><img src="<?php echo $sub_sub_value['img']; ?>" alt=""></a>
                      <span class="productName"><?php echo $sub_sub_value['name'] ?></span>
                      <span class="productPrice"><ins><?php echo $sub_sub_value['price']; ?></ins>/<del><?php echo $sub_sub_value['def_value']; ?></del></span>
                      <span class="productInfo"><?php echo $sub_sub_value['info']; ?></span>
                    </li>
                 <?php endforeach; ?>
               </ul>
             </div>
             <?php endforeach; ?>
        </div> <!-- end rc -->

        <div class="ph"> <!-- begin ph -->
            <div class="pt">销售排行榜</div>
            <div class="pc">
              <ul>
	        <?php $p= count($array_data['lists']['right']['ranking']); ?>
	          <?php foreach ($array_data['lists']['right']['ranking'] as $key => $value): ?>
		  <?php  $tmp=''; if ($key==0) $tmp='frist'; ?>
        	  <?php  if ($key==1) $tmp='frist'; ?>
		  <?php  if ($key==2) $tmp='secord'; ?>
		  <?php  if ($key==3) $tmp='third'; ?>
		  <?php  if ($key==$p) $tmp='last'; ?> 
	          <li class="<?php echo $tmp; ?>"><b title="<?php echo $value['name'] ?>"></b><span>1</span><a href="#"><?php echo $value['name']; ?></a></li>
	        <?php endforeach; ?>
              </ul>
            </div>
        </div> <!-- end ph -->

     </div> <!-- end right -->
 </div> <!-- end hpc -->

