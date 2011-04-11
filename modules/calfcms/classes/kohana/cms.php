<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 *  展会模块
 *  2011-03-06 
 * 
 */

class Kohana_Cms  {
	
	public $_name;
	public $_data=array();
	
    public static function factory($name,array $data = NULL)
	{
		return new Kohana_Cms($name,$data);
	}
	
	public function __construct($name,array $data = NULL)
	{
       $this->_name = $name;
       $this->_data = $data; 
	}

	public function __toString()
	{

	}

	public function __get($key)
	{
	  return isset($this->$key) ? $this->$key : NULL;
	}

	public function __set($key, $value)
	{
	   $this->key = $value;
	}
	
	
	/*
	 * 获取菜单项
	 */
	
	public function get_menus($data = ''){

		$mods = '';
		
		switch ($this->_name) {
			
			
		    case "cms":{
				$mods = $this->ajax_get_setting_cms_list();
			}break;
			
			case "uptload":{
				$mods = $this->uptload();
			}break;
			
		    case "cmsnews":{
		    	$mods = $this->ajax_get_setting_cms_news_list();
		    }break;

			case "cmsnewsadd":{
				$mods = $this->ajax_get_setting_cms_news_add();
			}break;

			case "cmsnewsmodify":{
				//$mods = $this->ajax_get_setting_cms_view($data);
			}break;
			
		}
		
		return $mods;
		
	}
	
	public function uptload(){

		$status = array();
		$error = "";
		$msg = "";
		$obj = '';
        $nicupload_allowed_extensions = array('jpg','jpeg','png','gif','bmp');
		$picfilepath = Kohana::config('settings')->newspicuploadpath;
        $fileElementName = 'nicImage';
		$file = $_FILES['nicImage'];
		$ext = strtolower(substr(strrchr($file['name'], '.'), 1));   
		
		if(!empty($file['error']))
		{
			switch($file['error'])
			{

				case '1':
					$error = '上传文件超过了php.ini 中upload_max_filesize选项的值';
					break;
				case '2':
					$error = '上传文件超过了HTML表单中MAX_FILE_SIZE选项指定的值';
					break;
				case '3':
					$error = '文件只被部分上传';
					break;
				case '4':
					$error = '没有文件被上传.';
					break;

				case '6':
					$error = 'Missing a temporary folder';
					break;
				case '7':
					$error = 'Failed to write file to disk';
					break;
				case '8':
					$error = 'File upload stopped by extension';
					break;
				case '999':
				default:
					$error = '图片类型不对';
			}
			$status['error']=$error;
			
		}elseif(empty($file['tmp_name']) || $file['tmp_name'] == 'none')
		{
			$error = '没有文件上传..';
			$status['error']=$error;
			
		}elseif(!in_array($ext, $nicupload_allowed_extensions))
		{
			$error = '请上传图片格式的文件';
			$status['error']=$error;
		
		}else
		{
			
			$status['done']=1;
			
			$filename= $file['name'];
			$tmp=explode(".",$filename);
			$filename =$tmp[0].".".end($tmp);
			
			$filepath=rtrim($picfilepath, '/').'/'.$filename;
			
			$tmpFileName = $file['tmp_name'];
			
		    $msg .= '"FileName":"'. $filename .'","FileSize":"'. @filesize($tmpFileName).'"';
			$status['width']=@filesize($tmpFileName);
			$status['url']=$filepath;
		    
		    
			$return = move_uploaded_file($tmpFileName, $filepath);		 
			
			@unlink($file);
		   
			
		}
		
		$script = '
               try {
               '.(($_SERVER['REQUEST_METHOD']=='POST') ? 'top.' : '').'nicUploadButton.statusCb('.json_encode($status).');
                 } catch(e) { alert(e.message); }
               ';	
		
		return '<script>'.$script.'</script>';
	}
	
	
	public function ajax_get_setting_cms_list(){
		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=cmsnewsadd"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新建展会</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusz">';
		$result .='</i><span>内容管理</span></h3>';
		$result .='<table class="list"><thead><tr>内容列表</tr></thead>';
		$result .='<tbody>';
		$result .='<tr><td><div></div></td></tr></tbody></table>';
	    return $result;
	}
	
	public function ajax_get_setting_cms_news_add(){
		$result ='<div class="roles">';
		$result .='<div class="contextual"></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusz">';
		$result .='</i><span>新闻管理 - 新增 </span></h3>';
	  
		//$modules= DB::query(Database::SELECT,"select * from meets",TRUE)->as_object()->execute();

		$result .='<table class="list"><thead><tr><th></th><th></th></tr></thead>';
		$result .='<tbody>';
	    $result .='<tr><td style="width:80px;">新闻标题：</td><td><input style="width:250px;" name="newstitle" id="newstitle" value="" /></td></tr>'; 
		$result .='<tr><td>新闻副标题：</td><td><input style="width:250px;" name="newssubtitle" id="newsubstitle" value="" /></td></tr>'; 
		$result .='<tr><td style="vertical-align:top" >新闻内容：</td><td>
		            <script type="text/javascript"> Cms.addArea();</script>
		            <textarea style="width:588px;" rows="20" cols="69"  name="newscontent" id="newscontent" value="" /></td>
		          </tr>'; 
		$result .='</tbody>';
		$result .='</table></div>';
		$result .=' <div style="padding-top:20px;" class="dialog_buttons ">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Cms.AddNews();" value="保存">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="">
    	             </label>
    	            </div>';
		return $result;
	} 
	
	public function ajax_get_setting_cms_news_list(){
		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=cmsnewsadd"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新建新闻</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusz">';
		$result .='</i><span>新闻管理</span></h3>';
	  
		//$modules= DB::query(Database::SELECT,"select * from meets",TRUE)->as_object()->execute();

		$result .='<table class="list"><thead><tr><th>新闻类型</th><th>收录日期</th><th>标题</th><th></th></tr></thead>';
		$result .='<tbody>';
		/*$i=0;
		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$checklock = ($value->active == 'N')?'icon-lock':'';
			$result.= '<tr id="row'.$value->id.'" class="" >';
			$result.= '<td style="width:200px" class="'.$mod.'"><span><a href="/home?sk=meetedit&fl='.$value->id.'">'.$value->meet_name.'</span></td>';
			$result.= '<td style="width:100px" class="'.$mod.'"><span><span>'.$value->meet_begin_at.'</span></td>';
			$result.= '<td style="width:100px" class="'.$mod.'"><span><span>'.$value->meet_end_at.'</span></td>';
			$result.= '<td class="'.$mod.'"><span><span>'.$value->meet_description.'</span></td>';
			$result.= '<td class="'.$mod.'"><span><span>'.$value->rs.'</span></td>';
			$result.= '<td id="td'.$value->id.'" class="'.$mod.' buttons" >';
		    $result.= ($checklock==='')?'
		                       <a href="javascript:deleteMeetName('.$value->id.');">
                                 <span style="top:4px;" class="leftimg">
			                        <i class="img calfimage icon-del"></i>
			                     </span>
			                     <span>删除</span>':'
			                     
			                     <a href="javascript:void(0);">
                                 <span style="top:4px;" class="leftimg" title="已锁定无法删除">
			                        <i class="img calfimage icon-lock"></i>
			                     </span>
			          </td>';
			$result.= '</tr>';
			$i++;
		}*/
		$result .='</tbody>';
		$result .='</table>';
		return $result;
	}


	 

}
