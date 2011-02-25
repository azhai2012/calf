var Custs = {
		onMsg:function(msg) {
			alert(msg);
		},
        FormatNumber:function (srcStr,nAfterDot){
               
                  var resultStr,nTen;
                  srcStr = ""+srcStr+"";
                  strLen = srcStr.length;
                  dotPos = srcStr.indexOf(".",0);
                  if (dotPos == -1){
                      resultStr = srcStr+".";
                      for (i=0;i<nAfterDot;i++){
                          resultStr = resultStr+"0";
                      }
                     return resultStr;
                  }else{
                     if ((strLen - dotPos - 1) >= nAfterDot){
                          nAfter = dotPos + nAfterDot + 1;
                          nTen =1;
                         for(j=0;j<nAfterDot;j++){
                             nTen = nTen*10;
                         }
                          resultStr = Math.round(parseFloat(srcStr)*nTen)/nTen;
                          return resultStr;
                  }else{
                       resultStr = srcStr;
                       for (i=0;i<(nAfterDot - strLen + dotPos + 1);i++){
                            resultStr = resultStr+"0";
                       }
                     return resultStr;
                    }
                   }
                 },
            FindCart:function(){
            	var bdate = $('#start_time_intl_field').val();
            	var edate = $('#end_time_intl_field').val();
                location.href="/home?sk=custorder&fl="+bdate+","+edate;
                
            },     
	  	    SubmitCart:function(){
			var total= $('.total').html();
			if (total === '￥：0.00') {alert('没有内容可以提交！');return;}
			if (confirm('您确定要提交该订单？'))
			 {  
				$.ajax({
					  type : "post",
					  url : "/ajax?sk=custtmptocart",
					  data: "",
					  beforeSend : function(XMLHttpRequest) {
					
				  	  },
					  success : function(data, textStatus) {
						// alert(data);
						 $('.info').addClass('showinfo success').html('成功提交订单，请等待发货。'); 
						  $("#cartlist tbody tr").each(function(i){
							 $(this).remove();
						  });
						  Custs.ArrangeCartList();
					  },
					  complete : function(XMLHttpRequest, textStatus) {
				 		// alert(textStatus);
					  },
					  error : function() {
						
						// 请求出错处理
					 }
				 });
		    }
		},
		ArrangeCartList:function(){
			var amount=0; 
			$("#cartlist tbody tr").each(function(i){
				   $(this).children('td:first').html(i+1);
				   amount =amount+ parseFloat($(this).children('.amount').html());
				   
		    }); 

			if (amount===0)
			  {$("#cartlist tbody").append('<tr><td align="center" style="font-size:14px;" colspan=8 >暂时没有记录！</td><td></td></tr>');}
			
			 $('.total').html('￥：'+Custs.FormatNumber(amount,2));
		},
		DeltmpCart:function(obj){
		  if (confirm('您确定要删除该记录？'))
		  {  
			  var meetid= obj.split('|')[0];	
			  var pid= obj.split('|')[1];  
			  var supid= obj.split('|')[2];  

			  $.ajax({
				  type : "post",
				  url : "/ajax?sk=custdeltmpcart&fl="+meetid,
				  data: "&supid="+supid+"&pid="+pid,
				  beforeSend : function(XMLHttpRequest) {
				
			  	  },
				  success : function(data, textStatus) {

				      $('#t'+pid).remove();
				      Custs.ArrangeCartList();
					// v.html(data);
				  },
				  complete : function(XMLHttpRequest, textStatus) {
			 		// alert(textStatus);
				  },
				  error : function() {
					
					// 请求出错处理
				 }
			 });	
		   }
		},
		UpdtmpCart:function(obj){
		   var meetid= obj.split('|')[0];	
		   var pid= obj.split('|')[1];
		   var supid= obj.split('|')[2];
		   var num = $('#num'+pid).val();
		   var price = $('#price'+pid).html();
		   var amount= parseFloat(num)*parseFloat(price);
		   var vv = Math.pow(10,2);
		   
		   $('#amout'+pid).html(Math.round(amount*vv)/vv);	
		    amount=0;
	
		   $("#cartlist tbody tr").each(function(i){
			   amount =amount+ parseFloat($(this).children('.amount').html());
	       
			   
		   });
		   var total= Math.round(amount*vv)/vv;
		   $('.total').html('￥：'+Custs.FormatNumber(total,2));
		   
		   $.ajax({
				  type : "post",
				  url : "/ajax?sk=custupdtmpcart&fl="+meetid,
				  data: "&supid="+supid+"&pid="+pid+"&num="+num,
				  beforeSend : function(XMLHttpRequest) {
				
			  	  },
				  success : function(data, textStatus) {
					 // alert(data.msg);
					// v.html(data);
				  },
				  complete : function(XMLHttpRequest, textStatus) {
			 		// alert(textStatus);
				  },
				  error : function() {
					
					// 请求出错处理
				 }
			 });
		   
		},
		Showdialogs:function (ajaxpath,divwidth){
	           Azhai.onPages({"id":"dragDiv","type":"dialog","ajax":ajaxpath,
	            "content":{"div":"hello","top":"47","width":divwidth}});    
	    },
	    closedialog:function (){
            $("#fullbg").hide();
            $(".dragDiv").hide();
        },
		AddRopose:function(a){
			Custs.Showdialogs("/ajax?sk=addropose&fl="+a,"600");
		},
		SubmitRopose:function(){
			var countent = $('#roposecontnet').val();
			if (countent==='') 
			{	
				alert('请输入内容');
				return ;
			
			}
			$.ajax({
				  type : "post",
				  url : "/ajax?sk=custaddropose",
				  data: "&content="+countent,
				  beforeSend : function(XMLHttpRequest) {
					 $('#msg').html('正在提交..');
			  	  },
				  success : function(data, textStatus) {
						var ss =eval('('+data+')');
				
					if (ss.msg===1)		 
						{
					  	  Custs.closedialog(); 
					  	  location.href="/home?sk=custropose";
						}
				  },
				  complete : function(XMLHttpRequest, textStatus) {
			 		// alert(textStatus);
				  },
				  error : function() {
					
					// 请求出错处理
				 }
			 });	
		},
		AddToTmpCart:function(obj){
			
			 if (confirm('您确定要增加该记录？'))
			 {   
				 var meetid = obj.split(',')[0];
				 var pid = obj.split(',')[1];
				 var num = $('#num'+pid).val();
				 var supid = $('#supid').val();
				 var price = $('#price'+pid).html();
	
				 $.ajax({
						  type : "post",
						  url : "/ajax?sk=custaddtotmpcart&fl="+meetid,
						  data: "&supid="+supid+"&pid="+pid+"&num="+num+"&price="+price,
						  beforeSend : function(XMLHttpRequest) {
							$('#msg'+pid).html('正在提交..');
					  	  },
						  success : function(data, textStatus) {
							  
							  $('#msg'+pid).html('成功提交');
							 // alert(data.msg);
							// v.html(data);
						  },
						  complete : function(XMLHttpRequest, textStatus) {
					 		// alert(textStatus);
						  },
						  error : function() {
							
							// 请求出错处理
						 }
					 });
				 
			 }
		}
}




 