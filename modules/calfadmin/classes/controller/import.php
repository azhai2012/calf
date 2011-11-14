<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-11-10 
 * @copyright 2011 
 *
 */
class Controller_Import extends Controller {


        private  $template='';
        private $_id;
        private $_action;
 


        public function before(){
	        $this->_id = $this->request->param('id');
		$this->_action = $this->request->action();

	}


	public function action_product()
	{	
		 parent::before();
		
		 $at = Arr::get($_POST,'action');
  	         if ($at==='quick')
		 {
		    set_time_limit(0);	
			
  		    $ws =Excel::instance(array(
	                     'author'       => 'Kohana-PHPExcel',
	                     'title'        => 'Report',
	                     'subject'      => 'Subject',
	                     'description'  => 'Description',
	                     'show_header'   => TRUE,
	             ));
                    $t = Arr::get($_POST,'d','');
                    $filename ="./media/upload/".$this->_id.".".$t;
	            $array_data =  $ws->read( $filename);
		    $array_data = $array_data['rows'];
		    
		    $column = $array_data[1];
		    $ary = array();
		    $_ary = array();
		    foreach ($array_data as $key => $value) {
		    	if ($key>1)
		        {
			   foreach ($value as $subkey => $subvalue) {
			    if (!empty($column[$subkey])) 	
			     $ary[$column[$subkey]]= $subvalue;
			   }
			   $_ary[] = $ary;
		        }
		    }
		  
		    $calfdb =  Calfdb_Admin::instance('Product',$this->_id, $_ary); 
		    $this->template= $calfdb->set_import_admin_product_info_array_data();
		    unlink($filename); 
		 }
		 else
		 {
		    $this->template= View::factory('admin/product/product/import');		
	            $ws =Excel::instance(array(
                        'author'       => 'Kohana-PHPExcel',
                        'title'        => 'Report',
                        'subject'      => 'Subject',
                        'description'  => 'Description',
                        'show_header'   => TRUE,
                     ));
                     $t = Arr::get($_POST,'d','xls');
		     $array_data =  $ws->read_one("./media/upload/".$this->_id.".".$t);
		     $db = MangoDB::instance('default');   
	             $this->template->db_data = $db->find_one('products',array(),array('_id'=>0));
		     $this->template->array_data = $array_data['rows'][1];	
	 	  } 	 
	         

		  
        }

	public function after(){
		$this->response->body($this->template);
	}

}
