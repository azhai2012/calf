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
  <input type="hidden" name="action" value="<?php echo $action; ?>" id="action">	 
  <div class="g-unit g-frist" id="side-nav" style="position: absolute; left: 0px; width: 200px; height: 545px; ">
  	<div id="devdoc-nav" style="height:10px;" ><ul>
	 	<ul>
		  <li>
		    <h2><span>功能区</span>
		    </h2>
		    <ul>
			<?php foreach ($array_data as $key => $value):  ?>
		         <li class="toggle-list closed"> 
			     <?php $is_selected = ((int)$value['id']===(int)$selected)?'selected':'';  ?> 
		             <div class="<?php echo $is_selected; ?>">
			       <?php if (!isset($value['lists'])): ?>
			        <a href="javascript:void(0);" id="<?php echo $value['mod_name'] ?>" onclick="Admins.Select(this);return false;">
		                   <span><?php echo $value['name']; ?></span>
		                   
		                </a>
		                <?php else: ?> 
			           <a href="javascript:void(0);" onclick="Admins.toggle(this.parentNode.parentNode, true); return false;">
				    <span><?php echo $value['name']; ?></span>
				   
				    </a>
		                 <a class="toggle-img" href="#" title="show pages" onclick="Admins.toggle(this.parentNode.parentNode, true); return false;"></a>
		                <?php endif; ?>
		             </div> 
		             <?php if (isset($value['lists'])): ?> 
		             <ul id="devdoc-nav-sample-list" style="display:none">
			        <?php foreach ($value['lists'] as $sub_key => $sub_value): ?>
		                <li>
			          <div class="<?php echo $is_selected; ?>"> 
			         <a href="javascript:void(0);" id="<?php echo $sub_value['mod_name'] ?>"  onclick="Admins.Select(this);return false;">
		                 <span><?php echo $sub_value['name']; ?></span>
		                 </a>
		                  
		                 </div>
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
   
   <div class="g-unit" id="doc-content" style="margin-left: 200px; height: 99px; "><a name="top"></a>
       <?php echo $mod_content; ?>
   </div> <!-- doc-content -->
   <div class="clearfix"></div>
</div> <!-- body-content -->
