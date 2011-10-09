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
<div id="notice-content">
   <div id="admin-header">
       管理
       <h1>Notices - 公告管理</h1>
   </div>
<div class="notice-sumtable">

  <table class="notice-sumtable-expando">
	<thead>
	    <tr><th>公告标题</th><th>发布日期</th><th>状态</th><th>操作</th></tr>	
	</thead> 
        <tbody>
	 <?php $array_data = array(
		  array('id'=>1,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'N'), 
	          array('id'=>2,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>3,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>4,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>5,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>6,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>7,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		
		); ?>
	 <?php foreach ($array_data as $key => $value): ?>
	     <?php $altcolor= (($key % 2)==0) ? "":"alt-color";   ?>    
            <tr class="<?php echo $altcolor; ?> api apilevel-1">
          
              <td class="notice-linkcol " width="500px"><a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a></td>
              <td class="notice-descrcol" width="80px"> <?php echo $value['create_date']; ?></td>
              <td class="notice-active" width="80px"> <a href="#"><?php echo ($value['is_active']=='Y')?'激活':'-'; ?></a></td>
              <td class="notice-edit" width="80px"> <a href="#">编辑</a>  | <a href="#">删除</a></td>
          </tr>
          <?php endforeach; ?>
          <tr><td colspan=4><a href="javascript:void();" id="notice-insert" onclick="Notice.showAdd();">添加</a></td></tr> 
       </tbody>
     </table>
    </div>
        
        <div class="notice-add" style="display:none">
       	<table class="notice-sumtable-expando">
	<tbody>
	  <tr><td style="width:80px;">公告标题：</td><td><input style="width:250px;" name="newstitle" id="newstitle" value="" /></td></tr>
  	  <tr><td>公告副标题：</td><td><input style="width:250px;" name="newssubtitle" id="newsubstitle" value="" /></td></tr>
	  <tr><td style="vertical-align:top" >公告内容：</td><td>
	  <script type="text/javascript"> Notice.addArea();</script>
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