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
		if (!in_array($value, $array['values']) || empty($value) )
		{
		  //$array = array_values($array);
	  	  array_push($array['values'],$value);
	  	  $array['count']= count($array['values']);
	  	  $array['msg']='';
	  	  if (!empty($value))
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
		$result= $this->session->get($this->product_compare);
		$array = (isset($result))? $result :array('values'=>array(),'count'=>'0','msg'=>'');
		$array['msg']='';
		$this->session->set($this->product_compare,$array);
		$r=$this->session->get($this->product_compare);
		return $result;
		
	}
	
	public function get_shelf_close_product_compare(){
		
		$this->session->set($this->product_compare,array('values'=>array(),'count'=>'0','msg'=>''));
		return '';
			
	} 
	
	public function get_shelf_product_compare_list(){
		

		$array= array(
		  array('id'=>'001','pics'=>'#01','names'=>'云南白药创可贴(轻巧透气型)','prices'=>17.5,'uses'=>'创可贴','approvenumber'=>'国药准字Z10980015','manufacturer'=>'云南白药集团股份有限公司-贴膏类','specification'=>'1盒装','category'=>'中成药'),
		  array('id'=>'002','pics'=>'#02','names'=>'云南白药创可贴','prices'=>10.8,'uses'=>'创可贴','approvenumber'=>'国药准字Z20070316','manufacturer'=>'云南白药集团无锡药业有限公司','specification'=>'1盒装','category'=>'中成药'),
		  array('id'=>'003','pics'=>'#03','names'=>'云南白药酊','prices'=>32.0,'uses'=>'创可贴','approvenumber'=>'国药准字Z53021238','manufacturer'=>'云南白药集团股份有限公司-贴膏类','specification'=>'1盒装','category'=>'中成药'),
		  array('id'=>'004','pics'=>'#04','names'=>'云南白药膏','prices'=>10.2,'uses'=>'创可贴','approvenumber'=>'国药准字Z53020792','manufacturer'=>'云南白药集团无锡药业有限公司-贴膏类','specification'=>'1盒装','category'=>'中成药'),
		  array('id'=>'005','pics'=>'#05','names'=>'云南白药膏','prices'=>23.5,'uses'=>'创可贴','approvenumber'=>'国药准字Z20073015','manufacturer'=>'云南白药集团股份有限公司-贴膏类','specification'=>'1盒装','category'=>'中成药')
		);
		
		$count= count($array);
		$result = '
		<table cellspacing="0" id="CompareTable" summary="商品对比">
		<tbody>
		 <tr class="toolbar">
		  <th scope="col"><a href="#">全部移除</a></th>';

		$tmp='';
		for($i=0;$i<$count;$i++){
			$value= $array[$i]['id'];
		   	  $tmp.='<th scope="col"><a href="'. $value.'">移除</a></th>';
		}  
		 
		$result.=$tmp.'</tr>
		<tr class="gray">
		  <th scope="row" abbr="图片">图片</th>';

		$tmp='';
		 for($i=0;$i<$count;$i++){
		 	$value= $array[$i]['pics'];
		   	  $tmp.='<td class="picname"><a href="#"><img src="'. $value.'"></a></td>';
		 }
		 
	   $result.=$tmp.'
	   </tr>
	   <tr class="gray">
			<th scope="row" abbr="名称">名称</th>';
	    
	   $tmp=''; 
	    for($i=0;$i<$count;$i++){
		   $value= $array[$i]['names'];
	   		$tmp .='<td class="picname"><a href="#" target="_blank">"'.$value.'"</a></td>';
	     }
	     	
	   $result.=$tmp.'
	    </tr>
       	<tr class="gray">
			<th scope="row" abbr="价格">价格</th>';

	   $tmp='';
	    for($i=0;$i<$count;$i++){
		   $value= $array[$i]['prices'];
	       $tmp .='<td> 单价 <span class="price">'.$value.'</span></td>';
	
	    }
		
	   $result.=$tmp.'</tr>
		<tr>
						<td colspan="6" class="seperator">&nbsp;</td>
		</tr>
		<tr>
		    <th scope="row" abbr="功能主治">功能主治</th>';
	   
	   $tmp='';
	   for($i=0;$i<$count;$i++){
	   $value= $array[$i]['uses'];
	   		$tmp.='<td>'.$value.'</td>';
	 
	   }
			
		 $result.=$tmp.'</tr>
		<tr>
		    <th scope="row" abbr="批准文号">批准文号</th>';
		 $tmp='';
		 for($i=0;$i<$count;$i++){
		 	$value= $array[$i]['approvenumber'];
		 		$tmp .='<td>'.$value.'</td>';
			 } 
		 
		 $result.=$tmp.'</tr>
		<tr>
		  <th scope="row" abbr="生产企业">生产企业</th>';
		 $tmp='';
		 for($i=0;$i<$count;$i++){
		     $value= $array[$i]['manufacturer'];
		 		$tmp .='<td>'.$value.'</td>';
		 	
		  } 
			
		$result.=$tmp.'</tr>
		<tr>
		    <th scope="row" abbr="规格">规格</th>';
		$tmp='';
		for($i=0;$i<$count;$i++){
			$value= $array[$i]['specification'];
				$tmp .='<td>'.$value.'</td>';
			
		}
		
		
		$result.=$tmp.'</tr>
		<tr>
		    <th scope="row" abbr="剂型">剂型</th>';
        $tmp='';   
	      for($i=0;$i<$count;$i++){
			$value= $array[$i]['category'];
				$tmp .='<td>'.$value.'</td>';
			
		}
		
		$result.=$tmp.'</tr>
	  	  <tr class="toolbar">
		   <th scope="col"><a href="#">全部移除</a></th>
		  ';
		$tmp='';
		 for($i=0;$i<$count;$i++){
		     $value= $array[$i]['id'];
		   	  $tmp .= '<th scope="col"><a href="'.$value.'">移除</a></th>';
		  
		 }  
		 
	 	 $result.=$tmp.'</tr>   
	     </tbody>
	    </table>
		';
		
		
		
		return $result;
		
		
	}
	
	public function get_shelf_product_compare(){
		$result='';
		$this->write_product_compare();
		$data = $this->read_product_compare();
		if ($data['count']>0)
		{
            if (!empty($data['msg'])) $result.='<script>alert(\'对比列表中已存在该商品！\');</script>';
	   	    $result.=' <div id="compare" class="compare" style="right: 0px; display: block; top: 220px; position: fixed; ">
	    	   <div class="mt"><h5>商品比较</h5>
	    	     <div class="extra" onclick="Compare.clear()"></div></div>
	    	     <div class="comPro">
	    	     <ul class="mc" id="comProlist"> ';
	   	    
			foreach ($data['values'] as $key=>$val){
				$result.='<li id="check_'.$val.'">
	    	         <a title="删除" class="close" onclick="reduceCompare('.$val.')"></a>'.$val.'
	    	       </li>
	             ';
			}
			$result.=' </ul>
	    	     <div class="mb">
	    	       <input type="button" value="对比所选商品" class="btn" id="compareImg" onclick="Compare.openCompare()">
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
