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
	        $db = MangoDB::instance('default');
	        /*
	 	$array_data= array(
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>0), 
			  array('id' =>12137,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>12138,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>0), 
			  array('id' =>12139,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>0), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'A阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'B阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'C阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 
			  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','active_date'=>'2011-01-01','is_active'=>1), 

			);
	 
	foreach ($array_data as $key => $value) {
		# code...
		$db->save('products',$value);  
	}    */
	     //   $array_data = array(array('a'=>1),array('a'=>2),array('a'=>3),);
	   //     $db->save('products',$array_data);  
               // $array_data = $db->find('products');

               // print_r($array_data);

      	$p = array('page'=>1,'prepage'=>10,'sortname'=>'display_name','sortorder'=>'desc','query'=>'a','qtype'=>'display_name');

	$product_db = Calfdb_Admin::execute('Product','',$p);
	$array_data = $product_db->get_admin_product_manager_array_data();
        print_r($array_data);
              foreach ($array_data['rows'] as $id => $value) {
                	# code...
                       echo $value['display_name'];
                   
	                
	              //  for ($i=0; $i <count($value)-1 ; $i++) { 
	                	# code...
	                //      echo $value[$i]['a'];
	               // }
                     
                     //echo count($value);
                    //echo  $value['_id'];
                    //echo  $id.':'.$value[0]['a'];

                     
                   
                       
                }
                 
                //echo $db;
                // echo $db->count('user');
               
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