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
	<link rel="stylesheet" type="text/css" href="/media/css/flexigrid.css">
	<!--[if lte IE 8]> 
	<![endif]-->
	<!--[if IE 8]> 
	<![endif]-->
	<script src="/media/js/jquery-1.6.4.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/media/js/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
	<script src="/media/js/jquery.flexigrid.js" type="text/javascript" charset="utf-8"></script>
	<script src="/media/js/jquery.wysiwyg.js" type="text/javascript" charset="utf-8"></script>

	<link rel="stylesheet" href="/media/js/jquery.wysiwyg.css" type="text/css" media="screen" charset="utf-8" />
	<style type="text/css" media="screen">
		#container{ width:600px; }
		textarea{ width:500px; height:300px; }
	</style>
</head>
<body>
	
	<table id="flex1" style="display:none"></table>
	<script type="text/javascript">
	$("#flex1").flexigrid({
		url: '/testajax',
		dataType: 'json',
		colModel : [
			{display: 'ISO', name : 'iso', width : 40, sortable : true, align: 'center'},
			{display: '名称', name : 'name', width : 180, sortable : true, align: 'left'},
			{display: 'Printable Name', name : 'printable_name', width : 120, sortable : true, align: 'left'},
			{display: 'ISO3', name : 'iso3', width : 130, sortable : true, align: 'left', hide: true},
			{display: 'Number Code', name : 'numcode', width : 80, sortable : true, align: 'right'}
			],
		searchitems : [
			{display: 'ISO', name : 'iso'},
			{display: '名称', name : 'name', isdefault: true}
			],
		sortname: "iso",
		sortorder: "asc",
		usepager: true,
		title: 'lists',
		useRp: true,
		rp: 15,
		showTableToggleBtn: true,
		width: 700,
		//onSubmit: addFormData,
		height: 500,
	});

	//This function adds paramaters to the post of flexigrid. You can add a verification as well by return to false if you don't want flexigrid to submit			
	function addFormData(){
		//passing a form object to serializeArray will get the valid data from all the objects, but, if the you pass a non-form object, you have to specify the input elements that the data will come from
		var dt = $('#sform').serializeArray();
		$("#flex1").flexOptions({params: dt});
		return true;
	}
	
	var array_data = {"page":1,"total":239,"rows":[{"id":"ZW","cell":{"name":"Zimbabwe","iso":"ZW","printable_name":"Zimbabwe","iso3":"ZWE","numcode":"716"}}]};
	
        function getdata(){
	  $('#flex1').flexAddData(array_data); 
	  return false;
        }
 

	</script>
	
        <div><a href="#" onclick="getdata();">click me</a></div> 
	
	<!-- <div id="container">
		<textarea id="editor"></textarea>
	</div> -->
</body>
</html>