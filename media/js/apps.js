/* calf - project management software
   Copyright (C) 2010  */

var fileFieldCount = 1;

function addFileField() {
    if (fileFieldCount >= 10) return false
    fileFieldCount++;
    var f = document.createElement("input");
    f.type = "file";
    f.name = "attachments[" + fileFieldCount + "][file]";
    f.size = 30;
    var d = document.createElement("input");
    d.type = "text";
    d.name = "attachments[" + fileFieldCount + "][description]";
    d.size = 60;
    var dLabel = new Element('label');
    dLabel.addClassName('inline');
    // Pulls the languge value used for Optional Description
    dLabel.update($('attachment_description_label_content').innerHTML)
    
    p = document.getElementById("attachments_fields");
    p.appendChild(document.createElement("br"));
    p.appendChild(f);
    p.appendChild(dLabel);
    dLabel.appendChild(d);

}

function showTab(name) {
    var f = $$('div#content .tab-content');
    for(var i=0; i<f.length; i++){
        Element.hide(f[i]);
    }
    var f = $$('div.tabs a');
    for(var i=0; i<f.length; i++){
        Element.removeClassName(f[i], "selected");
    }
    Element.show('tab-content-' + name);
    Element.addClassName('tab-' + name, "selected");
    return false;
}

function moveTabRight(el) {
    var lis = Element.up(el, 'div.tabs').down('ul').childElements();
    var tabsWidth = 0;
    var i;
    for (i=0; i<lis.length; i++) {
        if (lis[i].visible()) {
            tabsWidth += lis[i].getWidth() + 6;
        }
    }
    if (tabsWidth < Element.up(el, 'div.tabs').getWidth() - 60) {
        return;
    }
    i=0;
    while (i<lis.length && !lis[i].visible()) {
        i++;
    }
    lis[i].hide();
}

function moveTabLeft(el) {
    var lis = Element.up(el, 'div.tabs').down('ul').childElements();
    var i = 0;
    while (i<lis.length && !lis[i].visible()) {
        i++;
    }
    if (i>0) {
        lis[i-1].show();
    }
}


function getAddSubRoles(){
	  var _result='';
	  $(".boxitem ul input").each(function(a,b,c){
      if ($(this).attr("checked")==true) 
      	_result +=$(this).val()+'|'; 
	  });
	   _result = _result.replace(/(^\|*)|(\|*$)/g, "");
	  return _result;    
}   


function getAddModRoles(){
	  var _result='';
	  $(".boxitem .modparent").each(function(a,b,c){
      if ($(this).attr("checked")==true) 
      	_result += $(this).val()+'|'; 
	  });
	   _result = _result.replace(/(^\|*)|(\|*$)/g, "");
	  return _result;    
 }


function getAddRoles(){
	
	 var objs = document.getElementsByTagName("input");
     var objname = document.getElementById("rolename");
	 var objdescription = document.getElementById("description");
	 var str = ';'+objname.value+';'+objdescription.value+';';
     var result ='';
     var modstr = getAddModRoles();
     var submods = getAddSubRoles();
	 if (objname.value === '') 
		 result=[-1,'角色名称不能为空']; 
	 else if (modstr==='')
		 result=[-1,'权限内容不能为空'];
	 else if (submods==='')
         result=[-1,'必须选择，权限所属的操作权限。'];
     else
	     result = str+submods+';'+modstr;
	 
	 return result;
}

function getEditRoles(){
	 var objs = document.getElementsByTagName("input");
	 var objid = document.getElementById("id");
	 var objname = document.getElementById("rolename");
	 var objdescription = document.getElementById("description");
	 var str = objid.value+';'+objname.value+';'+objdescription.value+';';
	 var checkstrs='';
	 var result='';
	 var modstr = getAddModRoles();
     var submods = getAddSubRoles();
	 if (objname.value === '') 
		 result=[-1,'角色名称不能为空']; 
	 else if (modstr==='')
		 result=[-1,'权限内容不能为空'];
	 else if (submods==='')
         result=[-1,'必须选择，权限所属的操作权限。'];
     else
	     result = str+submods+';'+modstr;
	 return result;
}

function clearrolename(){
	 
	 var objs = document.getElementsByTagName("input");
     
	 var objname = document.getElementById("rolename");
	 objname.value='';
	 var objdescription = document.getElementById("description");
	 objdescription.value='';
	 for(var i=0; i<objs.length; i++) {
	    if(objs[i].type.toLowerCase() == "checkbox" )
	       if (objs[i].checked === true)
	    	   objs[i].checked=false; 
	   }
}

function EditRoleName(){
	
	var ids = getEditRoles();
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
		url : "/ajax?sk=adredit&fl="+ids,
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
		      location.href="/?sk=adr"; 
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


function Addrolename(){
	
	var ids = getAddRoles();
	
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
		url : "/ajax?sk=adradd&fl="+ids,
		data : "",
		beforeSend : function(XMLHttpRequest) {
			$('.info').removeClass("showinfo");
			$('.info').html('');
    	},
		success : function(data, textStatus) {	     
		  if (data === '1') {	
			$('.info').addClass("showinfo")
			.addClass("success")
			.html('<span><i class="calfimage spritemap_aanaup iconsuccess"></i>保存完毕</span>');
			 clearrolename(); 
		  }
		  
		},
		complete : function(XMLHttpRequest, textStatus) {
			
			if (textStatus==='success'){
				$('.info').addClass("showinfo")
				.addClass("success")
				.html('<span><i class="calfimage spritemap_aanaup iconsuccess"></i>保存完毕</span>');
				 clearrolename(); 
			}
		},
		error : function() {
			$('.info').addClass("showinfo").addClass("error")
			.html('<span><i class="calfimage spritemap_aanaup iconerror"></i>保存有错误，请检查！</span>');
		}
	 });
   }
}

function deleterolename(id){
	if (confirm('您确定要删除该条记录？'))
	{
	  $.ajax({
		type : "get",
		url : "/ajax?sk=adrdel&fl="+id,
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


function checkAll(checked) {
	 var objs = document.getElementsByTagName("input");
	 for(var i=0; i<objs.length; i++) {
	    if(objs[i].type.toLowerCase() == "checkbox" )
	       objs[i].checked = checked;
	   }
}


function randomKey(size) {
    var chars = new Array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    var key = '';
    for (i = 0; i < size; i++) {
    key += chars[Math.floor(Math.random() * chars.length)];
    }
    return key;
}

function checkHideRole(obj){

   if ($("#"+obj.id).attr("checked")==true) 
      $("."+obj.id+"-ul").toggleClass("hidesubrole");
   else
	 $("."+obj.id+"-ul").toggleClass("hidesubrole");
     		 
}

$(document).ready(function(){
 //todo
})



