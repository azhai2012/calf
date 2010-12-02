
function getMeetInfo(id){
	var _id = (id==='')?'':id; 
	var mtname = $('#meetname').val();
	var dec=$('#description').val();
	var bt= $('#start_time_intl_field').val();
	var et= $('#stop_time_intl_field').val();	
	if (mtname=='') result=[-1,"展会名称不能为空！"];
	else
	  result= _id+';'+mtname+';'+dec+';'+bt+';'+et;
	
	return result;
}

function deleteMeetName(id){
	if (confirm('您确定要删除该条记录？'))
	{
	  $.ajax({
		type : "get",
		url : "/ajax?sk=meetdel&fl="+id,
		beforeSend : function(XMLHttpRequest) {
			$('#td'+id+' .selectdel').toggleClass("showloading");
		},
		success : function(data, textStatus) {
			if (data === "1")
			   $('#row'+id).hide();
		},
		complete : function(XMLHttpRequest, textStatus) {
			location.reload(); 
		},
		error : function() {
			// 请求出错处理
		}
	 });
   }
}



function EditMeetName(id){
	
	var ids = getMeetInfo(id);
	
	if (ids[0]===-1){
		$('.info').html('');
    	$('.info').removeClass("showinfo");
    	$('.info').addClass("showinfo")
    	.addClass("error")
    	.html('<span><i class="calfimage spritemap_aanaup iconerror"></i>'+ids[1]+'</span>');
    }
    else
	if (confirm('您确定要修改该条记录？'))
	{
		
	  $.ajax({
		type : "get",
		url : "/ajax?sk=meetedit&fl="+ids,
		data : "",
		beforeSend : function(XMLHttpRequest) {
			$('.info').removeClass("showinfo");
			$('.info').html('');
    	},
		success : function(data, textStatus) {
     
		      if (data==='1')
			  {
		        $('.info').removeClass("warning");   
			    $('.info').addClass("showinfo")
				.addClass("success")
				.html('<span><i class="calfimage spritemap_aanaup iconsuccess"></i>保存完毕</span>');
			  }
		      location.href="/home?sk=meet"; 
		},
		complete : function(XMLHttpRequest, textStatus) {
			
		},
		error : function() {
			$('.info').addClass("showinfo").addClass("error")
			.html('<span><i class="calfimage spritemap_aanaup iconerror"></i>保存有错误，请检查！</span>');
		}
	 });
   }
}

function AddMeetName(){
	
	var ids= getMeetInfo('');
	
	if (ids[0]===-1){
		$('.info').html('');
    	$('.info').removeClass("showinfo");
    	$('.info').addClass("showinfo")
    	.addClass("error")
    	.html('<span><i class="calfimage spritemap_aanaup iconerror"></i>'+ids[1]+'</span>');
    }
    else
	if (confirm('您确定要增加该条记录？'))
	{
      
	  $.ajax({
		type : "get",
		url : "/ajax?sk=meetadd&fl="+ids,
		data : "",
		beforeSend : function(XMLHttpRequest) {
			$('.info').removeClass("showinfo");
			$('.info').html('');
    	},
		success : function(data, textStatus) {	     
		  if (data === '1') {	
			  
			//$('.info').addClass("showinfo")
			//.addClass("success")
			//.html('<span><i class="calfimage spritemap_aanaup iconsuccess"></i>保存完毕</span>');
			 location.href="/home?sk=meet"; 
		  }
		  
		},
		complete : function(XMLHttpRequest, textStatus) {
			
			if (textStatus==='success'){
				 location.href="/home?sk=meet"; 
				
			}
		},
		error : function() {
			$('.info').addClass("showinfo").addClass("error")
			.html('<span><i class="calfimage spritemap_aanaup iconerror"></i>保存有错误，请检查！</span>');
		}
	 });
   }
		
    	
}