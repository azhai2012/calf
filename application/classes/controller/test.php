<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {


	private  $template='';
        public function before(){
		$this->template= View::factory('test');

	}

	public function action_index()
	{	
		parent::before();

                $info = array('yp'=>'lhm','cd'=>'ah');

                $resultdb= Mssql::query(Database::SELECT,"
                   exec sql2k5_pages
                   @tblname='az_kcbs',
                   @fldname='ypbh',
                   @pagesize=20,
                   @pageindex=0,
                   @strwhere=' (ypmc like :yp or ypdm like :yp) and (cdmc like :cd or cddm like :cd)'
                 ")
                 ->param(':yp',"''%".$info['yp']."%''")
		 ->param(':cd',"''%".$info['cd']."%''");
                
                 echo Kohana::debug((string)$result);

	        $resultdb=$resultdb->as_object()->execute();

                print_r($resultdb);

		$this->template->test='';
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome