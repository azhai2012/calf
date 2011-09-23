<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-23 
 * @copyright 2011 
 *
 */
?>
<?php foreach ($array_data as $key => $value): ?>
<?php $values = $value['values'];
      $count = (int)count($values)-4;
      $isactive = ($value['isactive'] == 1) ? 'active' : 'notactive';
?>
<div class="abc-a"> <!-- begin abc-a -->
  <div class="<?php echo $isactive; ?>"></div>
  <h3><a name="brandK"><?php echo $value['name']; ?></a></h3>
   <?php if ($value['isactive'] == 1):?>
     <div class="title"> <!-- begin title -->
        <p><?php echo __('参展供货商').':'.$count.__('家'); ?></p>
        <p><?php echo __('开始日期').':'.$value['date_begin'].'--'.__('结束日期').':'.$value['date_end'];?></p>
     </div>   <!-- end title -->
        <div class="hots_lists"> <!-- begin hots_lists -->
	     <ul class="abc-height150px">
         <?php for ($i = 0; $i < 5; $i++):?>
	        <li><a href="<?php echo $values[$i]['url']; ?>" >
                    <img src="<?php echo $values[$i]['img']; ?>" alt="<?php echo $values[$i]['name']; ?>">
                    <p><?php echo $values[$i]['name']; ?> ( <span class="ff6600"><?php echo $values[$i]['counts']; ?></span>款)</p>
                 </a>
             </li> 
           <?php endfor; ?>         
           </ul>  
          <ul class="brandfontlist">	      
            <?php for ($i = 5; $i < $count; $i++):?>  
	         <li><a href="<?php echo $values[$i]['url']; ?>">
                 <p><?php echo $values[$i]['name']; ?>( <span class="ff6600"><?php echo $values[$i]['counts']; ?></span>款)</p>
                 </a>
             </li>
	             <?php endfor; ?> 
	        </ul> 
          
         </div> <!-- end hots_lists -->
          
         <div class="status">*提示：本场目前参加家数：1000 家 , 截至目前共订购：2030056.00元</div>

         <?php else: ?>
            <div class="title"><p>预计开始日期：<?php echo $value['date_begin']; ?> -- 结束日期：<?php echo $value['date_end']; ?></p></div>                          
            <ul class="abc-height150px">
               <li><div style="width:680px;font-size:30px;color:#ddd;height:150px;text-align:center;line-height:150px;">惊喜连连,敬请期待！</div><div class="clearfix"></div></li>
            </ul> 
      <?php endif; ?> 
     
      
      </div>  <!-- end abc-a  -->
  <?php endforeach;?>