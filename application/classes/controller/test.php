<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {


	private  $template='';
	
    public function before(){
		$this->template= View::factory('test');

    }
	
    function getUtf8($_str){
		$modcomm=new Model_Comm();
		return $modcomm->utf8Escape($_str);
	}
	
    function getTable( $uid ){
        //$ext =  substr(md5($uid),0,2);
        //return "user_".$ext;
        return "user_" . sprintf( "%04d", ($uid >> 20) );
    }
	
 public function error($message){
	$this->response->status(404);
}


	public function action_index()
	{	
		parent::before();
		
		
		return $this->error('');
	        
	//	$action = $this->request->action();
	//	echo $action; 
	
		
	
		/*
		$id=1;
		$data=array('mod'=>'order');
		$hots  = Admin_Notice::factory($id,$data);
		$_array_data =  $hots->get_body_content();
		
		$result=$_array_data;
		echo $result;
                
		//$data = Msc::factory();
	
		//echo $data->get_shelf_product_compare_list();
                
                
		
	    /*
		$ary = $data->get('azhai');
		
		if (!isset($ary))
		$ary = array();
		$b= 'c';
		
		if (!in_array($b, $ary))
		{
	   	    $ary = array_values($ary);
			$ary[]=$b; 
  	   	    $data->set('azhai',$ary);
		}
		
		
		print_r($ary);
		//$session= Session::instance()->set('azhai', array('hello azhai','hi','How are you?'));
		
		//print_r($session->get('azhai'));
      //  print_r($data->get_once('azhai'));
		
		
       // $modules= Kohana::modules();
       // print_r($modules);
	   // echo $this->getUtf8('大小');
	   /*echo $this->getTable('a').'<br>';
	   echo $this->getTable('b').'<br>';
	   echo $this->getTable('c').'<br>';
	   
		
	   for($i=0;$i<10000;$i++)
	   {
		echo $i.'   '.$this->getTable($i).'<br>';
	   }
	   */
		//print_r($_POST);
		//$this->template='';
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome