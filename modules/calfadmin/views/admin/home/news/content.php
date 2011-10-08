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
<div id="news-content">
   <div id="admin-header">
       管理
       <h1>News - 新闻管理 </h1>
   </div>
    <div id="news-list">
       <table class="download">
    <tbody><tr>
      <th>编号</th>
      <th width="300px">新闻标题</th>
      <th>发布日期</th>
      <th>状态</th>
      <th>操作</th>
  </tr>
  <tr>
    <td>1</td>
    <td><a href="#">庆十一活动热烈</a></td>
    <td>2011-10-01</td>
    <td>激活</td>
    <td>编辑 | 删除</td>
  </tr>
  <tr>
    <td>2</td>
    <td><a href="#">庆十一活动热烈</a></td>
    <td>2011-10-01</td>
    <td>激活</td>
    <td>编辑 | 删除</td>
  </tr>
    <td>3</td>
    <td><a href="#">庆十一活动热烈</a></td>
    <td>2011-10-01</td>
    <td>激活</td>
    <td>编辑 | 删除</td>
  </tr>
  <tr>
    <td>4</td>
    <td><a href="#">庆十一活动热烈</a></td>
    <td>2011-10-01</td>
    <td>激活</td>
    <td>编辑 | 删除</td>
  </tr>
  <tr><td colspan="5"><a href="javascript:vold();" id="notice-insert">添加</a></td></tr>
  </tbody>
    </table>
    
    <table class="notice-sumtable-expando">
	<tbody>
	  <tr><td style="width:80px;">新闻标题：</td><td><input style="width:250px;" name="newstitle" id="newstitle" value="" /></td></tr>
  	  <tr><td>新闻副标题：</td><td><input style="width:250px;" name="newssubtitle" id="newsubstitle" value="" /></td></tr>
	  <tr><td style="vertical-align:top" >新闻内容：</td><td>
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