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
	
        
</head>
<body>
    
      <form action="/testajax" method="post" accept-charset="utf-8" enctype="multipart/form-data" encoding="multipart/form-data">
	 <label for="file">Filename:</label>
   	  <input type="file" name="image" id="file" /> 
	 <br />
	  <input type="submit" name="submit" value="Submit" />
      </form>

</body>
</html>