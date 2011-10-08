<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-27 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Shops {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Shops($id,$data);

	}

  
	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
	}
	
	
	/**
	* get shops content
	*/
	public function get_shops_content() {
	    // TODO : [shops] set shops content data
	   	$array_data = array(
		   'recommend'=>array(
			 'title'=> '热门推荐品牌',
			 'lists'=>array(
			    array('id'=>12334,'img'=>'/media/images/s3.png','name'=>'六神旗舰店',),
			    array('id'=>12334,'img'=>'/media/images/s04.jpg','name'=>'六神旗舰店',),
			    array('id'=>12334,'img'=>'/media/images/s4.jpg','name'=>'六神旗舰店',),
			    array('id'=>12334,'img'=>'/media/images/s04.jpg','name'=>'六神旗舰店',),
			    array('id'=>12334,'img'=>'/media/images/s3.png','name'=>'六神旗舰店',),
			    array('id'=>12334,'img'=>'/media/images/s04.jpg','name'=>'六神旗舰店',),
			    array('id'=>12334,'img'=>'/media/images/s4.jpg','name'=>'六神旗舰店',),
			    array('id'=>12334,'img'=>'/media/images/s3.png','name'=>'六神旗舰店',),
			  ),
			),

		 'join'=>array(
			 'title'=> '本月最新入驻品牌',
			 'lists'=>array(
			    array('id'=>12334,'img'=>'/media/images/d01.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12335,'img'=>'/media/images/d02.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12336,'img'=>'/media/images/d04.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12337,'img'=>'/media/images/d03.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12338,'img'=>'/media/images/d01.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12339,'img'=>'/media/images/d04.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12330,'img'=>'/media/images/d02.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12331,'img'=>'/media/images/d03.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12331,'img'=>'/media/images/d03.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12331,'img'=>'/media/images/d03.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			  ),
			),

	 	'ranking'=>array(
			 'title'=> '月销售排行',
			 'lists'=>array(
				    array('id'=>12334,'count'=>'823234','name'=>'韩都衣舍',),
				    array('id'=>12335,'count'=>'656566','name'=>'城市服务',),
				    array('id'=>12336,'count'=>'523234','name'=>'真维斯',),
				    array('id'=>12337,'count'=>'423234','name'=>'GAINREEL',),
				    array('id'=>12338,'count'=>'323234','name'=>'七匹狼',),
				    array('id'=>12339,'count'=>'223234','name'=>'李宁',),
				    array('id'=>12330,'count'=>'123234','name'=>'诺基亚',),
				    array('id'=>12331,'count'=>'93234','name'=>'相宜本草',),
				  ),
			),		
		 );
		
	    return $array_data;
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

	function __destruct(){

		//$this->session->destroy();
	}

	function __toString(){

		$data = serialize($this->_data);
		$data = base64_encode($data);
		return $data;

	}

}

