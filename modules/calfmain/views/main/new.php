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
<h1 id="npt"><a href="#">新品上架</a></h1>
  <div id="npc" class="clearfix" > <!-- begin npc -->
     <div class="left"> <!-- begin left -->
         <div id="lt"></div>
         <div id="lc">
            <h1><a href="#"><img src="<?php echo $array_data['left']['img']; ?>" class="nw240"/></a></h1>
            <div><b>功能主治：</b></div>
             <div><?php echo $array_data['left']['info']; ?></div>
         </div>
     </div> <!-- end left -->
     <div class="right"> <!-- begin right -->
          <div class="rc">
	    <?php foreach ($array_data['right'] as $key => $value): ?>
              <div class="rc1 clearfix">
                <h1> <?php echo $value['date']; ?></h1>
                <ul>
	           <?php foreach ($value['lists'] as $sub_key => $sub_value): ?>
                     <li>
                       <a href="/product?id=<?php echo $sub_value['id']; ?>"><img src="<?php echo $sub_value['img']; ?>" alt=""></a>
                       <span class="productName"><?php echo $sub_value['name'] ?></span>
                       <span class="productPrice"><ins><?php echo $sub_value['price']; ?></ins>/<del><?php echo $sub_value['def_price']; ?></del></span>
                       <span class="productInfo"><?php echo $sub_value['info']; ?></span>
                     </li>
                   <?php endforeach; ?>
                </ul>
              </div>
            <?php endforeach; ?>
     </div> <!-- end right -->
    
  </div> <!-- end npc -->