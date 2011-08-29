<?php defined('SYSPATH') or die('No direct script access.');

/*
 * 功能：公共类库（memcache , session ） 
 * 
 * 
 * 
 */

class Kohana_Msc {
	
	protected $session;

	
	protected $memcache;
	
	private  $product_compare='product_compare';
	
	private  $product_id='product_id';
	
	private $_data = array();
	
	public static function factory(array $data = NULL){
		
		return new Kohana_Msc($data);
		
	}
	
	function  __get($name){
	   if(isset($this->$name)){ 
          return $this->$name;
	   }else { 
          return NULL; 
       } 
	}
	
	function __set($name,$value){
		
		$this->$name = $value;
	}
	
	
	function __construct(array $data=NULL){
		
		
		$this->_data = $data;
		if (isset($this->_data))
		{
	  	   $id = array_key_exists('id', $this->_data)?$this->_data['id']: '';
		   
		   if (!empty($id))
		      $this->session = Session::instance(NULL,$id);
		   else
		      $this->session = Session::instance();
		}
		else 
		   $this->session = Session::instance();
		
	}
	
	
	/*
	 * 功能：将比对的商品写入会话中。 
	 * 
	 */
	public function write_product_compare(){
		
		$array =  $this->read_product_compare(); 
		$array = (isset($array))? $array :array('values'=>array(),'count'=>'0','msg'=>'');
		$value = $this->_data[$this->product_compare][$this->product_id];
		if (!in_array($value, $array['values']))
		{
		  //$array = array_values($array);
	  	  array_push($array['values'],$value);
	  	  $array['count']= count($array['values']);
	  	  $array['msg']='';
  	   
	  	  $this->session->set($this->product_compare, $array);
	  	 }
		 else
		 {
			$array['msg']="已存在该商品。";
			$this->session->set($this->product_compare, $array);
		 }
		return $array;
	}
	
	/*
	 * 功能：读出需要对比的商品列表
	 * 
	 */
	public function read_product_compare(){
		return $this->session->get($this->product_compare);
	}
	
	
	public function get_shelf_product_compare(){
		$result='';
		$data = $this->read_product_compare();
		if ($data['count']>0)
		{
			$result= '
	    	<div id="compare" class="compare" style="right: 0px; display: block; top: 220px; position: fixed; ">
	    	   <div class="mt"><h5>商品比较</h5>
	    	     <div class="extra" onclick="clearCompare()"></div></div>
	    	     <div class="comPro">
	    	     <ul class="mc" id="comProlist">
	    	     ';
			 
			foreach ($data['values'] as $key=>$val){
				$result.='<li id="check_'.$val.'">
	    	         <a title="删除" class="close" onclick="reduceCompare('.$val.')"></a>'.$val.'
	    	       </li>
	             ';
			}
			$result.=' </ul>
	    	     <div class="mb">
	    	       <input type="button" value="对比所选商品" class="btn" id="compareImg" onclick="openCompare()">
	    	     </div>
	    	    </div>
	    	  </div>
	    	';
		}
		return $result;
	}
	
	public function set($key,$value){
		
		return $this->session->set($key, $value);
	}
	
	public function get($key){
		return $this->session->get($key);
	}
	
	public function get_once($key){
		
		return $this->session->get_once($key);
	}
	
	public function delete($key){
		return $this->session->delete($key);
	}
	
	function __destruct(){
		
		//$this->session->destroy();
	}
	
	function __toString(){
		
		$data = serialize($this->_data);
		$data = base64_encode($data);
		return $data;
		
	}

	
	
}
