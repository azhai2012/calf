<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-01 
 * @copyright 2011 
 *
 */
class Controller_Export extends Controller {


        private  $template='';
        private $_id;

        public function before(){
		$this->template= '';//View::factory('admin/content');
                $this->_id = $this->request->param('id');
	}


	public function action_product()
	{	
		parent::before();
		
		$action = $this->request->action();
		$id= $this->request->param('id'); 
		$ws =Excel::instance(array(
	                     'author'       => 'Kohana-PHPExcel',
	                     'title'        => 'Report',
	                     'subject'      => 'Subject',
	                     'description'  => 'Description',
	                     'show_header'   => TRUE,
	                   
	           ));

	           $ws->set_active_sheet(0);
	           $as = $ws->get_active_sheet();
	           $as->setTitle('商品明细表');

	           $as->getDefaultStyle()->getFont()->setSize(9);

	           //$as->getColumnDimension('A')->setWidth(20);
	           //$as->getColumnDimension('B')->setWidth(50);
	           //$as->getColumnDimension('C')->setWidth(12);
	           //$as->getColumnDimension('D')->setWidth(10);

	           $order_db = Calfdb_Admin::instance('Product','');
	           $array_data= $order_db->get_export_admin_product_info_array_data();
                   $data=array(); 
                   
                   foreach ($array_data['rows'] as $key => $value) {
                      
                      $data[] = $value;
        
                   }                

                   $columns=array();
                   $array_data = $order_db->get_export_one_admin_product_info_array_data();
                   $i=0;
                   foreach ($array_data['rows'] as $key => $value) {
	               $c1 = PHPExcel_Cell::stringFromColumnIndex($i);
	               $as->getColumnDimension($c1)->setAutoSize(true);
                       $columns[$key]= $key;
                       $i++;	
                   }
    

	           $ws->set_data($data,$columns,true);
		   $ws->send(array('name'=>'商品明细表','format'=>$id));
		
        }

	public function after(){
		$this->response->body($this->template);
	}

} // End Welcome


