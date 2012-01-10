<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2012-01-10 
 * @copyright 2012 
 *
 */
class Kohana_Calfdb_Crm_Customer extends Kohana_Calfdb_Crm  {

        private $_id ;
        private $_data = array();
        private $_db;

   	function __construct($id,array $data=NULL){

		$this->_id = $id;
		$this->_data= $data;
	        $this->_db = parent::_calgdb();

	}  

        /**
        * 
        */
        public function get_crm_customer_manager_array_data() {
            // TODO :
	    $params= $this->_data;
	    $qtype = $params['qtype'];
	    $query =$params['query'];

	    if ($query) 
	    switch ($qtype){
	       case 'is_active': $query = array($qtype =>$query); break;
	       case 'id': $query = array($qtype => (int)$query); break;
	       default: $query = array('$or'=>array(array($qtype => new MongoRegex("/^$query/i")),array('name_code' => new MongoRegex("/^$query/i"))));
            }
            else $query=array();

	    $limit = array('sortorder'=>$params['sortorder'],'sortname'=>$params['sortname'],'limit'=>$params['prepage'],'skip'=>$params['page']);
   	    $array_data =array(
	                       'total'=>$this->_db->count('crm.customers',$query),
                               'rows'=>$this->_db->find_limit('crm.customers',$query,array(),$limit)
                               );
            return $array_data;
        }
}
