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
		
		$_array_data= Calfdb::factory('1',NULL)->product_views_data_array();
		$array_data = $_array_data['product_info'];
	
		$array_images_data = $_array_data['product_imgs'];
		
		$right_template = View::factory('product/right');
		
		$right_template->name  = $array_data['name'];
		$right_template->uses  = $array_data['uses'];
		$right_template->price = $array_data['price'];
		$right_template->pname = $array_data['pname'];
		$right_template->spec  = $array_data['spec'];
		$right_template->unit  = $array_data['unit'];
		$right_template->group = $array_data['group'];
		$right_template->lsno  = $array_data['lsno'];
		$right_template->big_image = $array_images_data[0]['big_image'];
		$right_template->array_images_data = $array_images_data;
		$right_template->get_product_discount_context = '';//$this->get_product_discount_context();
		$right_template->get_product_info_content ='';// $this->get_product_info_content();
		$right_template->get_procduct_posts_context = '';//$this->get_procduct_posts_context();
		$result=$right_template;
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