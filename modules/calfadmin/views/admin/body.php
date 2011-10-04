<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-03 
 * @copyright 2011 
 *
 */
?>
<div class="section" id="body-content">
  <div class="g-unit g-frist" id="side-nav" style="position: absolute; left: 0px; width: 200px; height: 545px; ">
  	<div id="devdoc-nav" style="height:10px;" ><ul>
	 	<ul>
		  <li>
		    <h2><span>功能区</span>
		    </h2>
		    <ul>
			<?php foreach ($array_data as $key => $value):  ?>
		         <li class="toggle-list closed <?php echo ($value['id']==$selected)?'selected':''; ?>">
		             <div><a href="<?php echo $value['url']; ?>">
		                <span><?php echo $value['name']; ?></span>
		                </a><a class="toggle-img" href="#" title="show pages" onclick="Admins.toggle(this.parentNode.parentNode, true); return false;"></a>
		             </div> 
		             <?php if (isset($value['lists'])): ?> 
		             <ul id="devdoc-nav-sample-list" style="display:none">
			        <?php foreach ($value['lists'] as $sub_key => $sub_value): ?>
		                <li><a href="<?php echo $sub_value['url']; ?>">
		                 <span><?php echo $sub_value['name']; ?></span>
		                 </a>
		                </li>
		                <?php endforeach; ?>
		             </ul>
		             <?php endif; ?>
		          </li>
		         <?php endforeach; ?>
		    </ul>
		  </li>
		</ul>
        </div> <!-- devdoc-nav --> 
       
    </div> <!-- side-nav -->	  
   
   <div class="g-unit" id="doc-content" style="margin-left: 220px; height: 99px; "><a name="top"></a>
       <?php echo $mod_content; ?>
   </div> <!-- doc-content -->
   <div class="clearfix"></div>
</div> <!-- body-content -->