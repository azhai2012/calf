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
<script type="text/javascript" charset="utf-8">
 $(function(){
       $('#uploadform1').ajaxUpload({
	       upbtn:false,
	       target:'/upload/file',
	       handleJsonResponse:function(json){
		     var t = json.filename.split('.'); 
                     $.ajax({
				type : 'post',
				url : '/import/product/'+t[0],
				data : '&d='+t[1],
				beforeSend : function(XMLHttpRequest) {
				    $('#showtb').html('正在加载中...');
				},
				success : function(data, textStatus) {

			           $('#fname').val(json.filename);		 		
				   var stas = '<div style="padding:20px;">上传文件名：( <b>{0}</b> ) <br/> 已准备好，请点击“确定”，开始导入数据！</div>';
				   $('#showtb').html(stas.replace('{0}',json.file.name)); 
				   $('#send').click(function(){
				       if (confirm('是否导入要上传的数据？')){	 
				          Products.QuickImport();
				       }	 
				   });
				    	 
	              		},
				complete : function(XMLHttpRequest, textStatus) {
			
				},
				error : function(XMLHttpRequest, textStatus) {
		 
				}
			});
	       },
	       beforeSubmit: function(form,iframe){$('#loading').html('loading...');},
	       afterSubmit: function(form,iframe){$('#loading').html('');$('#file',form).val('');}
	 });
	 
	$('.upload').append('<input style="margin-left:10px;height:27px;" type="button" name="a" onclick="javascript: $(\'.upload\').submit();" id="upload" value="上传文件" />');
   });
</script>
	
<div style="height:300px;margin:10px;">
  <div id="uploadform1"></div>
  <input type="hidden" value="" name="fname" id="fname" />
  <div id="showtb" style="overflow:auto;height:250px;width:100%"></div>
</div>