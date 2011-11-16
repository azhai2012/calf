<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-11-10 
 * @copyright 2011 
 *
 */
class Controller_Dialog extends Controller {


        private  $template='';
        private $_id;
        private $_action;
  

        public function before(){
		$this->template= View::factory('admin/dialog');
               	$this->_action = $this->request->action();
		$this->_id= $this->request->param('id');
	}


	public function action_product()
	{	
		parent::before();
		$tmplate= View::factory('admin/product/product/dialog');
		$this->template->dialog_title = ucwords($this->_action).'-- 导入商品数据'; 
		$this->template->dialog_body =  $tmplate;
        }

	public function after(){
		$this->response->body($this->template);
	}

} // End Welcome