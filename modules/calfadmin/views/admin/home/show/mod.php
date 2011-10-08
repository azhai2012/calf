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
<div id="show-content">
   <div id="admin-header">
       管理
       <h1>Shows - 页面展示管理 - 模块管理</h1>
   </div>
    <div id="mod-list">
             <table class="download">
    <tbody><tr>
      <th>模块编号</th>
      <th>模块标题</th>
      <th width="300px">模块语句</th>
      <th>状态</th>
      <th>操作</th>
  </tr>
   <tr>
    <td>112</td>
    <td>新品区</td>
    <td><code>select * from tablename</code></td>
    <td>激活</td>
    <td>编辑 | 删除</td>
  </tr>
  <tr>
    <td>112</td>
    <td>保健品区</td>
    <td><code>select * from tablename</code></td>
    <td>激活</td>
    <td>编辑 | 删除</td>
  </tr>
  <tr>
  <td>112</td>
    <td>器械区</td>
    <td><code>select * from tablename</code></td>
    <td>激活</td>
    <td>编辑 | 删除</td>
  </tr>
  </tbody>
    </table>
        
    <table class="notice-sumtable-expando">
	<tbody>
	  <tr><td style="width:80px;">模块标题：</td><td><input style="width:250px;" name="newstitle" id="newstitle" value="" /></td></tr>
  	  <tr><td style="vertical-align:top" >模块语句：</td><td>
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