<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Admin_Cms {

	
	
	
    function ajax_set_admin_cms($array,$type="update"){
		$result='';
		$array = explode(';',$array);
		switch ($type)
		{
			case "update":
			{	
		       		
			
			} 
			break; 	
		}
		return json_encode($result);
	}
	
     function ajax_get_admin_cms_view($id=0){

		$result  ='<div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		
		$htmlhead = (object)Kohana::config('cms')->html_head;
		
		$result .='</i><span><a href="/?sk=adc">自定义属性</a> <span class="ss"> >></span>设计<span class="adc"></span> </span></h3>
		           <div class="info"></div>
		           <div class="topbox">
		           <b> HTML头信息 </b>
		           <div><label style="margin-right:25px"><span>默认标题：</span><span class="required">*</span></label><input name="title" id="title" value="'.$htmlhead->title.'" /></div>
		           <div><label style="margin-right:25px"><span>标题前缀：</span><span class="required">&nbsp;</span></label><input name="titlepre" id= "titlepre" value="'.$htmlhead->titlepre.'" /></div>
		           <div><label style="margin-right:25px"><span>标题后缀：</span><span class="required">&nbsp;</span></label><input name="titleend" id= "titleend" value="'.$htmlhead->titleend.'" /></div>
	               <div><label style="margin-right:25px"><span>默认描述：</span><span class="required">&nbsp;</span></label><input name="comments" id= "comments" value="'.$htmlhead->comments.'" /></div>';
		$result .='</div>';
		
		$htmltop = (object)Kohana::config('cms')->html_top;
		
		$result .='<div class="topbox">
		           <b> HTML页眉 </b>
		           <div><label style="margin-right:5px"><span>Logo图片源：</span><span class="required">*</span></label><input name="logopath" id="logopath" value="'.$htmltop->logopath.'" /></div>
		           <div><label><span>Logo替代文字：</span><span class="required">&nbsp;</span></label><input name="logotitle" id= "logotitle" value="'.$htmltop->logotitle.'" /></div>
		           <div><label style="margin-right:25px"><span>欢迎文字：</span><span class="required">&nbsp;</span></label><input name="welcome" id= "welcome" value="'.$htmltop->welcome.'" /></div>';
	    $result .='</div>';
	    
	    $htmlfooter = (object)Kohana::config('cms')->html_footer;
		
		$result .='<div class="topbox">
		           <b> HTML页脚 </b>
		           <div><label style="float:left"><span>版权信息</span><span class="required">*</span></label>
		               <textarea style="margin-left:33px;" cols="80" rows="3" name="copyright" id="copyright" value="">'.$htmlfooter->copyright.'</textarea></div>
		           <div><label style="float:left"><span>自定义HTML：</span><span class="required">&nbsp;</span></label>
		              <textarea cols="80" rows="3"  name="customerHTML" id= "customerHTML" value="">'.$htmlfooter->customerHTML.' </textarea>
		           </div>';
	    $result .='</div>';
	    
		$result .='<div class="btn">
	               <input name="commit" type="button" value="保存" onclick="Admins.EditCms()"  />
	    </div></div>';
		return $result;
	}


	 

}
