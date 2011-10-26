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
	   $(function() {
	   
		  $('#uploadform').ajaxUpload({
		       target:'/testajax',
		       handleJsonResponse:function(json){
			    $('#status').append('<div><input type="checkbox" value="'+json.filename+'" id="files" name="attach" checked >'+json.file.name+'(<i>'+json.file.type+'</i>)'+Math.round(json.file.size/1024)+'KB </div>');
			},
		       beforeSubmit: function(form,iframe){$('#loading').html('loading...');},
		       afterSubmit: function(form,iframe){$('#loading').html('');}
		  });
	 
 	   });
	</script>
        
</head>
<body>
    
 
    	<div id="uploadform">
	    
        </div>
        <div id="status"></div> 

   
</body>
</html>