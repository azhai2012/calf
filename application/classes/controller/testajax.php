<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Testajax extends Controller {


	private  $template='';
	
    public function before(){
		//$this->template= View::factory('test');
	}
	
    
    
	public function action_index()
	{	
		parent::before();
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
		
		$k= $_POST['json'];
		$k = preg_replace("/'([a-zA-Z0-9_]+?)':/" , "\"$1\":", $k);
		//$log = Log::instance();
		$o= json_decode($k);
		$d= $o->pageIndex;
		$e= $o->pageSize;
		$k= array('d'=>$d,'e'=>$e);
		//$log->add(7,$e);
      
	    $this->template= json_encode($k);
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome