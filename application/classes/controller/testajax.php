<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Testajax extends Controller {


	private  $template='';
	
    public function before(){
		$this->template= View::factory('testajax');
	}
	
    
    
	public function action_index()
	{	
		parent::before();
			  $t=''; 
		   if ($_POST){

		  	            $array = Validation::factory($_FILES);
		                    $array->rule('image', 'Upload::type', array(':value', array('jpg', 'png', 'gif')));
				    $filename ='';
				    $result='0';	
				    $filepath = $array['image']; 
				    if ($array->check())
				    {
					$uid= uniqid(); 
				        $filename = $uid.'.'.strtolower(pathinfo($filepath['name'], PATHINFO_EXTENSION));
				        Upload::save($array['image'],$filename,'./media/upload',777); 
				        $result='1';
				    }
				    else
				       $result='-1';  
				        $array = array('status'=>$result,'file'=> $filepath,'filename'=>$filename,'uid'=>$uid);
					$this->template=  json_encode($array);

               }
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome