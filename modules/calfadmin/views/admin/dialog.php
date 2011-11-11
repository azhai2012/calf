<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-11-10 
 * @copyright 2011 
 *
 */
?>
  <h2 class="dialog_title" id="title_dialog_0"><span><?php if (isset($dialog_title))  echo $dialog_title; ?></span></h2>
  <div class="dialog_content"> 
     <div class="dialog_body"><?php echo $dialog_body; ?></div>
     <div class="dialog_buttons clearfix ">
          <div class="dialog_buttons_msg"><?php if (isset($dialog_buttons_msg)) echo $dialog_buttons_msg;  ?></div>
          <div>
	   <label class="uiButton uiButtonConfirm"><input type="button" name="send" id="send" value="<?php echo __('send'); ?>"></label>
	   <label class="uiButton"><input type="button" name="cancel" onclick="javascript:Products.CloseDialog();" value="<?php echo __('cancel'); ?>"></label>
          </div>
      </div>
     <div class="dialog_footer"><?php if (isset($dialog_footer)) echo $dialog_footer;  ?></div>
   </div> <!-- end dialog_content -->

