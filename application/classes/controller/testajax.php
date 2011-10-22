<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Testajax extends Controller {


	private  $template='';
	
    public function before(){
		$this->template= View::factory('testajax');
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
		
	/*	$k= $_POST['json'];
		$k = preg_replace("/'([a-zA-Z0-9_]+?)':/" , "\"$1\":", $k);
		//$log = Log::instance();
		$o= json_decode($k);
		$d= $o->pageIndex;
		$e= $o->pageSize;
		$k= array('d'=>$d,'e'=>$e);
		//$log->add(7,$e);
         */

	   //$this->template= '{"page":1,"total":239,"rows":[{"id":"ZW","cell":["ZW","Zimbabwe","Zimbabwe","ZWE","716"]},{"id":"ZM","cell":["ZM","Zambia","Zambia","ZMB","894"]},{"id":"YE","cell":["YE","Yemen","Yemen","YEM","887"]},{"id":"EH","cell":["EH","Western Sahara","Western Sahara","ESH","732"]},{"id":"WF","cell":["WF","Wallis and Futuna","Wallis and Futuna","WLF","876"]},{"id":"VI","cell":["VI","Virgin Islands, U.s.","Virgin Islands, U.s.","VIR","850"]},{"id":"VG","cell":["VG","Virgin Islands, British","Virgin Islands, British","VGB","92"]},{"id":"VN","cell":["VN","Viet Nam","Viet Nam","VNM","704"]},{"id":"VE","cell":["VE","Venezuela","Venezuela","VEN","862"]},{"id":"VU","cell":["VU","Vanuatu","Vanuatu","VUT","548"]}]}';//json_encode($k);
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome