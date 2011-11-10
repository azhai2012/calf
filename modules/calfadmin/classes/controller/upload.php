<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-11-10 
 * @copyright 2011 
 *
 */
class Controller_Upload extends Controller {


        private  $template='';
        private $_id;
        private $_action;

        public function before(){
		$this->template= '';//View::factory('admin/content');
                $this->_id = $this->request->param('id');
                $this->_action = $this->request->action();
	 
	}


	public function action_image()
	{	
		parent::before();
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
		     
                 }
	        $array = array('status'=>$result,'file'=> $filepath,'filename'=>$filename,'uid'=>$uid);
		$this->template= json_encode($array);

        }

 	public function action_file()
	{	
		parent::before();
		if ($_POST){
		  
  	            $array = Validation::factory($_FILES);
                    $array->rule('file', "Upload::not_empty", array(array('xls','xlsx')));
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
		     
                 }
	         $log->write();    
	        $array = array('status'=>$result,'file'=> $filepath,'filename'=>$filename,'uid'=>$uid);
		$this->template= json_encode($array);

        }

	public function after(){
		$this->response->body($this->template);
	}

} // End Welcome
