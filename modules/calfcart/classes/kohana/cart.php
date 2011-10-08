<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Cart {
	
	private $_id;
	private $_data = array();
	private $_template = NULL;
	private $_template_one = NULL;
	private $_template_two = NULL;
	private $_template_recommend = NULL;
	private $_cart_db;
	
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Cart($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = (!empty($id))?$id:'1';
       $this->_data = $data;
       $this->_template = View::factory('cart/content'); 
       $this->_template_one = View::factory('cart/stepone');
       $this->_template_two = View::factory('cart/steptwo');
       $this->_template_three = View::factory('cart/stepthree');
       $this->_template_recommend = View::factory('cart/recommend');
       $this->_cart_db = Calfdb_Cart::factory($this->_id,$this->_data);
        
      
	}
	
    /**
     * @description: 
     * @author azhai
     * @date 20 September, 2011
     * @params 
     */    
   	public function get_cart_content(){
		
		$this->_template->step_id = $this->_id;
		$id='';
		if ($this->_id==1) $id='一';
		if ($this->_id==2) $id='二';
		if ($this->_id==3) $id='三';
		
		$this->_template->id = $id;
		$this->_template->get_cart_content_step_one = $this->get_cart_content_step_one();
		$this->_template->get_cart_content_step_two = $this->get_cart_content_step_two();
		$this->_template->get_cart_content_step_three = $this->get_cart_content_step_three();
		
		$result=$this->_template;
		
		return $result;
		
	}
	
	/**
	 * @description: 
	 * @author azhai
	 * @date 20 September, 2011
	 * @params 
	 */
	public function get_cart_content_step_one(){
		// @todo 增加购物车的功能-读取数据。
		
		$this->_template_one->array_data = $this->_cart_db->get_cart_one_data_array();
		$this->_template_one->get_cart_recommend_list = $this->get_cart_recommend_content();
		$result=$this->_template_one;
		return $result;
		
		
	}
	
    /**
     * undocumented function
     *
     * @return void
     * @author zhai bob
     */
    function get_cart_recommend_content(){
		
		$this->_template_recommend->array_data = $this->_cart_db->get_cart_recommend_data_array();
		return $this->_template_recommend;
	}
	
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author zhai bob
	 */
    public function get_cart_content_step_two(){
	
		$this->_template_two->array_data = $this->_cart_db->get_cart_two_data_array();
		 
		return $this->_template_two;
		
		
	}
	
    public function get_cart_content_step_three(){
	    $this->_template_three->array_data = $this->_cart_db->get_cart_three_data_array();
		return $this->_template_three;
		
	}
	
	
	
	
}
