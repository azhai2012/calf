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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="keywords" content="<%= keywords %>"/>
	<link rel="shortcut icon" href="/media/images/favicon.ico" /> 
	<meta name="description" content=""/>
	<link rel="stylesheet" type="text/css" href="/media/css/flexigrid.css">
	<!--[if lte IE 8]> 
	<![endif]-->
	<!--[if IE 8]> 
	<![endif]-->
	<script src="/media/js/jquery-1.6.4.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/media/js/jquery.upload.js" type="text/javascript" charset="utf-8"></script>
      	<script type="text/javascript" charset="utf-8">
            $(function(){
	       $('#uploadform').ajaxUpload({
		       target:'/upload',
		       handleJsonResponse:function(json){
			    if (json.file.name){
			      $('#status').append('<div><input type="checkbox" value="'+json.filename+'" id="files" name="attach" checked >'+json.file.name+'  ( <i>'+json.file.type+'</i> )  '+Math.round(json.file.size/1024)+'KB </div>');
		              
		            }
			},
		       beforeSubmit: function(form,iframe){$('#loading').html('loading...');},
		       afterSubmit: function(form,iframe){$('#loading').html('');$('#file',form).val('');}
		 });
		
		addUploadButton();
		 
	        		
	  });
	
	   function addUploadButton(editor){
		    CKEDITOR.on('dialogDefinition', function( ev ){
		        var dialogName = ev.data.name;
		        var dialogDefinition = ev.data.definition;
		        if ( dialogName == 'image' ){
		            var infoTab = dialogDefinition.getContents( 'info' );
		            infoTab.add({
		                type : 'button',
		                id : 'upload_image',
		                align : 'center',
		                label : 'upload',
		                onClick : function( evt ){
		                    var thisDialog = this.getDialog();
		                    var txtUrlObj = thisDialog.getContentElement('info', 'txtUrl');
		                    var txtUrlId = txtUrlObj.getInputElement().$.id;
		                    addUploadImage(txtUrlId);
		                }
		            }, 'browse'); //place front of the browser button
		        }
		    });
		}

		function addUploadImage(theURLElementId){
		    var uploadUrl = "/admin/ckeditor"; //这是我自己的处理文件/图片上传的页面URL
		    var imgUrl = window.showModalDialog(uploadUrl,'1'); 
		    var urlObj = document.getElementById(theURLElementId);
		    urlObj.value = imgUrl;
		    urlObj.fireEvent("onchange"); //触发url文本框的onchange事件，以便预览图片
		}
	
	
        </script>
        
</head>
<body>


  <div id="uploadform"> </div> <div id="status"></div> 
		<p>
			<label for="editor1">
				Editor 1:</label>
				
				
		</p>
		<p>
		<?php
			// Include the CKEditor class.
			//include_once "media/ckeditor/ckeditor.php";
			// The initial value to be displayed in the editor.
			$initialValue = '<p>This is some <strong>sample text</strong>.</p>';
			// Create a class instance.
			$CKEditor = CKEditor::instance()->editor("editor1");
		?>
			<input type="submit" value="Submit"/>
		</p>

</body>
</html>