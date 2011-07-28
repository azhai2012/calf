 $(document).ready(function(){        
        $('#a_invoice,#invoice_bar_close').click(function(){
        	if ($('#invoice_bar_close').html()== "展开"){
        		$('#invoice_bar_close').removeClass().addClass('open');
        		$('#span_invoice').show(); 
        		$('#invoice_bar_close').html('隐藏');
        	}
        	else{
        		$('#invoice_bar_close').removeClass().addClass('close');
        		$('#span_invoice').hide(); 
    		    $('#invoice_bar_close').html('展开');
        	}
        })
        
        $('#span_coupon_tips,#coupon_close_bar').click(function(){
        	if ($('#coupon_close_bar').html()== "展开"){
        		$('#coupon_close_bar').removeClass().addClass('open');
        		$('#span_gift').show(); 
        		$('#coupon_close_bar').html('隐藏');
        	}
        	else{
        		$('#span_gift').hide(); 
    		    $('#coupon_close_bar').html('展开');
    		    $('#coupon_close_bar').removeClass().addClass('close');
        	}
        })
        
    });
