<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-02 
 * @copyright 2011 
 *
 */
?>
<div id="header">
      <div id="headerLeft"  class="clearfix">
	<img src="/media/images/logo.jpg" width="100" height="50"  /> 
        <ul id="header-tabs" class="<?php echo $array_data['mod']['name']; ?>">
	  <?php foreach ($array_data['lists'] as $key => $value): ?>
	    <li id="<?php echo $value['id']; ?>"><a href="<?php echo $value['url']; ?>"><span><?php echo $value['name']; ?></span></a></li>
	  <?php endforeach; ?>	 
       </ul>
      </div> <!-- headerLeft -->
      <div id="headerRight">
           登录名：<?php echo $array_data['login']['name']; ?>  <a href="/admin/repsw">更改口令</a>
      </div><!-- headerRight -->
 </div><!-- header -->