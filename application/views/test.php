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
	<meta name="description" content=""/>
	<!--[if lte IE 8]> 
	<![endif]-->
	<!--[if IE 8]> 
	<![endif]-->
	<script src="/media/js/jquery-1.6.4.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/media/js//jquery.wysiwyg.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
	//<![CDATA[

	$(function() {
	   $('#editor').wysiwyg({autoGrow:true, controls:"bold,italic,|,undo,redo"});
	});

	//]]>
	</script>
	<link rel="stylesheet" href="/media/js/jquery.wysiwyg.css" type="text/css" media="screen" charset="utf-8" />
	<style type="text/css" media="screen">
		#container{ width:600px; }
		textarea{ width:500px; height:300px; }
	</style>
</head>
<body>
	<div id="container">
		<textarea id="editor"></textarea>
	</div>
</body>
</html>