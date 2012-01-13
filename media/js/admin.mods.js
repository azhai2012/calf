var Mods={
	addArea:function(a){ $('#description').wysiwyg({autoGrow:true, controls:"bold,italic,|,undo,redo"});},
	getGrid:function(){
	  		$('#flexgrid').flexigrid({
					url: '/post/mods/list',
					dataType: 'json',
					colModel : [
						{display: '编号', name : 'id', width : 40, sortable : true, align: 'center'},
						{display: '模块', name : 'mod', width : 180, sortable : true, align: 'left'},
						{display: '模块名称', name : 'mod_name', width : 180, sortable : true, align: 'left'},
				        {display: '状态', name : 'is_active', width : 80, sortable : true, align: 'right'}
						],
					searchitems : [
						{display: '编号', name : 'id'},
						{display: '模块名称', name : 'mod_name', isdefault: true},
						{display: '状态', name : 'is_active'},					
						],
					sortname: "id",
					sortorder: "asc",
					usepager: true,
					title:'模块列表',
					useRp: true,
					rp: 15,
					showTableToggleBtn: true,
					hideOnSubmit:false,
					//hideBody:true,
					pagestat: '共 {total} 个记录',
					outof:'/',
					nomsg:'没有查找到相关内容', 
					width: 'auto',
					height: 375,  
					dbclick:{
						ondbclick:function(){
							var select = $(this).parent().find('#mod div').html();
							 Mods.ShowOperating(select); 
						}
					}, 
				  	buttons:[
				     {name:'编辑选择',bimage:'/media/images/modify.gif',onpress:function(){Mods.OpenMods()}},
					 {name:'删除',bimage:'/media/images/delete.gif',onpress:function(){Mods.RowDelete()}},
					],
				     			
				});
	    },
	    Showdialogs:function (ajaxpath,divwidth){
	       Azhai.onPages({"id":"dragDiv","type":"dialog","ajax":ajaxpath,
	            "content":{"div":"hello","top":"47","width":divwidth}});    
	    },
	    CloseDialog:function(){
            $('.dragDiv').hide();
            $('.pop_content').html('');
            $('.overlay','#dialog').remove();
        },
		setBodyHeight:function(){
		  var body_h= $('#body-right-content').height();
		  $('#body-right-content').height(body_h+150);
		},
        ShowOperating:function(action){
	        $('.flexigrid').hide();
			$('#grid_operating').show();
		    $.ajax({
			   type : 'post',
			   url : '/post/getmods',
			   data : '&action='+action,
			   beforeSend : function(XMLHttpRequest) {$('.loading').show();},
			   success : function(data, textStatus) {$('#grid_operating').html(data);Mods.setBodyHeight();},
			   complete : function(XMLHttpRequest, textStatus) {$('.loading').remove();},
			   error : function() {}
			});
	    },
	   	OpenMods:function(){
		  	$("#flexgrid tbody tr.trSelected:first td[abbr=mod] div").each(function(){
			   var action = $(this).html();       
			   Mods.ShowOperating(action); 
			});
		},
		
	 
};

 
