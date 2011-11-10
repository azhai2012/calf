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
		$this->template= View::factory('admin/import');
                $this->_id = $this->request->param('id');
		$this->_action = $this->request->action();
	
	}


	public function action_product()
	{	
		 parent::before();
                 $ws =Excel::instance(array(
	                     'author'       => 'Kohana-PHPExcel',
	                     'title'        => 'Report',
	                     'subject'      => 'Subject',
	                     'description'  => 'Description',
	                     'show_header'   => TRUE,
	           ));
                  $t = Arr::get($_POST,'d','');
	          $array_data =  $ws->read_one("./media/upload/".$this->_id.".".$t);
		  $db = MangoDB::instance('default');   
		  $this->template->db_data = $db-> find_one('products',array(),array('_id'=>0));
		  $this->template->array_data = $array_data['rows'][1];
		  
        }

	public function after(){
		$this->response->body($this->template);
	}

}
