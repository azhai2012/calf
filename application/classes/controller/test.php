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
		          'login'=>array('name'='azhai'),
		          'mod' =>array('name'=>'home'),
		          'lists'=>array(
			    array('id' =>'home-link','name'=>'主页','url'=>'admin/home','action'=>'home'), 
		            array('id' =>'product-link','name'=>'商品区','url'=>'admin/product','action'=>'product'), 
			    array('id' =>'tuan-link','name'=>'团购','url'=>'admin/tuan','action'=>'tuan'), 
			    array('id' =>'hots-link','name'=>'展会','url'=>'admin/hots','action'=>'hots'), 
		 	    array('id' =>'discounts-link','name'=>'促销区','url'=>'admin/discounts','action'=>'discounts'), 
		 	    array('id' =>'community-link','name'=>'社区','url'=>'admin/community','action'=>'community'), 
		          ),
		         );

                  print_r($array_data);
	           // $template = View::factory('admin/header');
	           // $template->array_data = $array_data;
		  //echo $template;
                  
	
		$id='2222';
		$data=array('mod'=>'order');
	//	$hots  = Admin::factory($id,$data);
	//	$_array_data =  $hots->get_header_content();
		
	//	$result=$_array_data;
	//	echo $result;
                
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