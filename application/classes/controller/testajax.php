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
		  	  $log = Log::instance();
		          $username = Arr::get($_POST, 'username');
		          $log->add(Log::INFO,$username);	 
		//	if ($_POST){
			  $log->add(Log::INFO,'begin');	 

		          $array = Validation::factory($_FILES);
		          $array->rule('image', 'Upload::type', array(':value', array('jpg', 'png', 'gif')));
		          $filename ='';
		          $result='0';	 
			  if ($array->check())
			  {
			          // Upload is valid, save it
			
			 	  $filename = uniqid().'.'.strtolower(pathinfo($array['image']['name'], PATHINFO_EXTENSION));
			          
			          Upload::$default_directory='./media/upload';
			          Upload::save($array['image'],$filename); 
			          $result='1';
		
			   }
			   else
			      $result='-1';  
			  $log->add(Log::INFO,'end');  

	          //      }

	                  $log->write();
              
	 $this->template='1';
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome