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
	
	


	public function action_index()
	{	
		parent::before();
	        
		
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
			    array('id'=>12339,'img'=>'/media/images/s04.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
			    array('id'=>12330,'img'=>'/media/images/d02.jpg','alt'=>'联合利华','name'=>'六神旗舰店',),
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
			
	         print_r($array_data);		
	
                  
	
		$id='2222';
		$data=array('mod'=>'order');
		$hots  = Shops::factory($id,$data);
		$_array_data =  $hots->get_shops_content();
		
//		$result=$_array_data;
//		echo $result;
                
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