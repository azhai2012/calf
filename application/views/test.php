<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
<head>
<title>hhyy</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="robots" content="noindex,nofollow" />
<link rel="shortcut icon" href="/media/images/favicon.ico" />
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.1&services=true"></script>

</head>
<body>
 
  <div id="content"  > <!-- begin content -->
    <?php echo $test; ?>
  
  </div> <!-- end content  -->   
<div style="width:520px;height:340px;border:1px solid gray" id="container"></div>
</body>

</html>

<script type="text/javascript">

alert(1);

var map = new BMap.Map("container");
map.addControl(new BMap.NavigationControl());  


//编写自定义函数,创建标注
function addMarker(point, index, atitle){
	map.centerAndZoom(point, 20);  
	var myIcon = new BMap.Icon("http://api.map.baidu.com/img/markers.png", new BMap.Size(23, 25), {
    offset: new BMap.Size(10, 10),                  // 指定定位位置
    imageOffset: new BMap.Size(0, 0 - index * 25)   // 设置图片偏移
  });
  var marker = new BMap.Marker(point, {icon: myIcon});
  var opts = {
		  width : 250,     // 信息窗口宽度
		  height: 100,     // 信息窗口高度
		  title : atitle  // 信息窗口标题
		}

   var infoWindow = new BMap.InfoWindow("World", opts);  // 创建信息窗口对象
   marker.addEventListener("click", function(){          
   this.openInfoWindow(infoWindow);  
   });


  map.addOverlay(marker);

}

  
  
  var myary={"zb":[{"title":"a1","x":119.91861,"y":31.77992},{"title":"a2","x":119.91659,"y":31.77914}]};

  for (var i = 0; i < myary.zb.length; i++) {
      var j= myary.zb[i].x;  
      var k= myary.zb[i].y;  
      var point = new BMap.Point(j,k);
      addMarker(point,i,myary.zb[i].title);

    }
  
  

 
</script>
