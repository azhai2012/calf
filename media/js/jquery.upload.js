$.fn.ajaxUpload = function(options) {
    var settings = {
	    upbtn:'upload', 
        handleJsonResponse: function(json){},
        beforeValidate: function(form,iframe){},
        isValid: function(input,form){
            return true
        },
        beforeSubmit: function(form,iframe){},
        afterSubmit: function(form,iframe){},
        onComplete: function(form,iframe){},
        eval: function(expression){
            $.globalEval('var r = ' + expression +';');
            return r;
        },
        iframeParams: 'style="display:none;" width="0" height="0"',
        target :''
    };
    if (options) {
        $.extend( settings, options );
    }

    this.each(function(sequence){
        var action = settings.target;
        var random = Math.round(Math.random() * 999999 + sequence);
        var iframeName = 'upload_' + random;
        var formId = 'form_upload_' + random;
        $('body').append('<iframe name="' + iframeName + '" id="' + iframeName + '" src="" '+settings.iframeParams+'></iframe>');

        var form = '<form id="'+ formId +'" class="upload"/>';
	
        $(this).wrap(form);
        form = $('#' + formId);
   		var a01=' <input id="tmp" name="tmp" type="hidden"/>';		
		var a02=' <input id="file" name="image" type="file"/>';	
		 	
		
		form.append(a01);
	    form.append(a02);
		
		if (settings.upbtn)
		{ 
		  var a03=' <input type="button" name="img_upt_btn" value="上传" id="'+settings.upbtn+'"><span id="loading"></spam>';
		  form.append(a03);
        } 

        form.attr({
            method: 'post',
            target: iframeName,
            enctype: 'multipart/form-data',
            encoding: 'multipart/form-data',
            action: action
        });
      
      


        var iframe = $('#' + iframeName);
        var frameIndex = (window.frames.length -1);
        iframe.load(function(){
            var response = window.frames[frameIndex].document.body.innerHTML;
            response = response.trim();
            if (response.length > 0){
                var json = {};
                try {
                    json = eval('(' + response +')');
                } catch (e) {
                    try {
                        settings.eval('(' + response +')');
                    } catch(e) {
                        if (response.match(/^[{\[](.*?)[}\]]$/) !== null) {
                            alert('Please set another eval function.');
                        } else {
                          // alert('上传失败.');
                        }
                    }
                }
                settings.handleJsonResponse(json);
                settings.onComplete(form,iframe);
            }
        });

         

        //$(this).change(function(){
         $('#'+settings.upbtn).click(function(){
            var form = $(this).parent('form');           
            settings.beforeValidate(form,iframe);
            if (settings.isValid($(this),form)) {
                settings.beforeSubmit(form,iframe);
                form.submit();
                settings.afterSubmit(form,iframe);
            }
        });

    });
}