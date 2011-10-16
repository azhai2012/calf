<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-05 
 * @copyright 2011 
 *
 */
?>
<div id="adv-content">
   <div id="admin-header">
       管理
       <h1>Advertising - 广告管理 </h1>
   </div>
    <div id="adv-list">
    <table class="download">
    <tbody><tr>
      <th>栏目编号</th>
      <th>栏目标题</th>
      <th>栏目内容</th>
      <th>状态</th>
      <th>操作</th>
  </tr>

  
  
  
  <?php foreach($array_data as $key => $value): ?>
  <tr>
    <td><?php echo $value['id']; ?></td>
    <td><?php echo $value['name']; ?></td>
    <td><?php echo $value['content']; ?></td>
    <td><?php echo ($value['isactive']==1)?'激活':'未激活'; ?></td>
    <td>编辑 | 删除</td>
  </tr>
  <?php endforeach; ?>
  <tr><td colspan="5"><a href="javascript:vold();" id="notice-insert">添加</a></td></tr>
  </tbody>
    </table>
    
    <table class="notice-sumtable-expando" style="display:none">
	<tbody> 
	  <tr><td style="width:80px;">栏目：</td><td><input style="width:250px;" name="newstitle" id="newstitle" value="" /></td></tr>
  	  <tr><td style="vertical-align:top" >栏目内容：</td><td>
	  <script type="text/javascript"> Notice.addArea();Notice.showAdd();</script>
	  <textarea style="width:588px;" rows="20" cols="69"  name="newscontent" id="newscontent" value="" /></td>
           </tr> 
           <tr><td></td><td><div class="dialog_buttons ">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Admin.AddNotice();" value="保存">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="">
    	             </label>
    	 </div></td></tr>
  	  </tbody>
    </table>  
    </div> 
    
</div>