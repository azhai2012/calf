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
						url : '/import/product/'+json.uid,
						data : '&d='+t[1],
						beforeSend : function(XMLHttpRequest) {
						    $('#showtb').html('正在加载中...');
						},
						success : function(data, textStatus) {			
						   $('#showtb').html(data);  	 
			              		},
						complete : function(XMLHttpRequest, textStatus) {
							
						},
						error : function() {
							// 请求出错处理
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
  <div id="showtb" style="overflow:auto;height:250px;width:100%"></div>
</div>