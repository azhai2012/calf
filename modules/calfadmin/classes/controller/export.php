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

	           $as->getColumnDimension('A')->setWidth(20);
	           $as->getColumnDimension('B')->setWidth(50);
	           $as->getColumnDimension('C')->setWidth(12);
	           $as->getColumnDimension('D')->setWidth(10);

	           $order_db = Calfdb_Admin::instance('Product','');
	           $array_data= $order_db->get_export_admin_product_info_array_data();
                   $data=array(); 
                   
                   foreach ($array_data['rows'] as $key => $value) {
     
                      $data[] =$value;
        
                   }                
                  // print_r($data);

	           $columns = array('id'=>'编号',
		      'active_date'=>'启用日期',
	              'category'=>'商品属性','certificateNo'=>'批准文号','create_date'=>'创建日期',
	              'display_name'=>'显示商品','factory'=>'生产企业',
	              'general_name'=>'通用商品名称','general_price'=>'国批价',
	              'group'=>'包装','is_active'=>'启用','middle_group'=>'中包装',
	              'name'=>'商品名称','norm'=>'规格',
	              'product_type'=>'剂型','unit'=>'单位','update_date'=>'更新日期','uses'=>'功能主治'
	           ); 
                  
                   //print_r($columns);

	           $ws->set_data($data,$columns,true);
		   $ws->send(array('name'=>'商品明细表','format'=>$id));
		
        }

	public function after(){
		$this->response->body($this->template);
	}

} // End Welcome


