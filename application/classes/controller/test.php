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
		
		$array_data = array( array(
		        'title'=>'热销商品',
			'lists'=>array( 
			        'left' =>array('img'=>'/media/images/h01.jpg','info'=>'皮肤过敏 消化不良 感冒流感 止咳祛痰 退烧止痛药 咽喉肿痛',),
		   	        'right' =>array(
			 	      'rc'=> array(
					     array('title'=>'化学制剂',
				                'lists'=>array(
					                    array('id'=>12323,'img'=>'/media/images/T1tpmeXetqXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                            array('id'=>12323,'img'=>'/media/images/T1momdXiNsXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          ),),
					     array('title'=>'中成药',
				                'lists'=>array(
				                          array('id'=>12323,'img'=>'/media/images/T1cG9eXXxjXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/T17mKgXjViXXXXXXXX-373-262.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                        ), ),
					  array('title'=>'外用药',
				                'lists'=>array(
				                          array('id'=>12323,'img'=>'/media/images/T1a.5dXbJrXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/T1VHGeXc0dXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                        ), ),
					  array('title'=>'器械',
				                'lists'=>array(
				                          array('id'=>12323,'img'=>'/media/images/T1TE1dXcBrXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/T1WoqdXg4sXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                        ),),),),
				'ranking'=>array(
					array('id'=>22133,'name'=>'碧生源常润茶'),
					array('id'=>22133,'name'=>'碧生源常润茶'),
					array('id'=>22133,'name'=>'碧生源常润茶'),
					array('id'=>22133,'name'=>'碧生源常润茶'),
					array('id'=>22133,'name'=>'碧生源常润茶'),
					array('id'=>22133,'name'=>'碧生源常润茶'),
					array('id'=>22133,'name'=>'碧生源常润茶'),
					array('id'=>22133,'name'=>'碧生源常润茶'),
					array('id'=>22133,'name'=>'碧生源常润茶'),
				),),),);

                print_r($array_data); 
 
		$id='2222';
		$data=array('mod'=>'order');
		$hots  = Main::factory($id,$data);
		$_array_data =  $hots->get_content_hot_products();
		
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