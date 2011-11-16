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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script src="/media/js/jquery-1.6.4.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/media/js/jquery.upload.js" type="text/javascript" charset="utf-8"></script>
      	<script type="text/javascript" charset="utf-8">
            $(function(){ 
	       $('#uploadform').ajaxUpload({
		       target:'/upload/ckeditor',
		       handleJsonResponse:function(json){
			    if (json.file.name){
			      $('#button1').attr('reVal',json.path + json.filename);
			      $('#preview').html('<img width=200 height=200 src="'+json.path+json.filename +'"/ >');	
			     // $('#status').append('<div><input type="checkbox" value="'+json.filename+'" id="files" name="attach" checked >'+json.file.name+'  ( <i>'+json.file.type+'</i> )  '+Math.round(json.file.size/1024)+'KB </div>');
		              
		            }
			},
		       beforeSubmit: function(form,iframe){$('#loading').html('loading...');},
		       afterSubmit: function(form,iframe){$('#loading').html('');$('#file',form).val('');}
		 });
	        		
	  });
	
          function saveimg(p){
	     window.returnValue=$(p).attr('reVal');  
             window.close();
          }
	
        </script>
        
</head>
<body>

  <div id="uploadform"> </div> <div id="status"></div>
  <div id="preview"></div> 
  <input id="button1" type="button" value="保存并退出" reVal="" name=button1 onclick="saveimg(this);" />  	
	
</body>
</html>