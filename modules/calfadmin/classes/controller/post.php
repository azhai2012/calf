<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-22 
 * @copyright 2011 
 *
 */

class Controller_Post extends Controller {
    
     private $_id;
     private $_data;
     private $template;
     private $_sk;
	
     public function before() {
	         $this->_sk= array_key_exists('sk', $_GET) ? $_GET['sk'] : '';
	         $this->_id='';
	         $this->_data=array();
     }	
	
     public function action_product() {	
	
	$product_db = Calfdb_Admin::execute('Product',$this->_id,$this->_data);
        $rows = $product_db->get_admin_product_manager_array_data();
	
	
	$page = isset($_POST['page']) ? $_POST['page'] : 1;
	$rp = isset($_POST['rp']) ? $_POST['rp'] : 10;
	$sortname = isset($_POST['sortname']) ? $_POST['sortname'] : 'display_name';
	$sortorder = isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
	$query = isset($_POST['query']) ? $_POST['query'] : false;
	$qtype = isset($_POST['qtype']) ? $_POST['qtype'] : false;

	//***
	if($qtype && $query){
			$query = strtolower(trim($query));
			foreach($rows AS $key => $row){
				if(strpos(strtolower($row[$qtype]),$query) === false){
					unset($rows[$key]);
				}
			}
		}
		//Make PHP handle the sorting
		$sortArray = array();
		foreach($rows AS $key => $row){
			$sortArray[$key] = $row[$sortname];
		}
		$sortMethod = SORT_ASC;
		if($sortorder == 'desc'){
			$sortMethod = SORT_DESC;
		}
		array_multisort($sortArray, $sortMethod, $rows);

	$total = count($rows);
	//*****
   	$rows = array_slice($rows,($page-1)*$rp,$rp);

	$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
	
	foreach($rows AS $row){
		//If cell's elements have named keys, they must match column names
		//Only cell's with named keys and matching columns are order independent.
		$entry = array('id'=>$row['id'],
				'display_name'=>$row['display_name'],
				'unit'=>$row['unit'],
				'create_date'=>$row['create_date'],
				'active_date'=>$row['active_date'],
				'is_active'=>$row['is_active']
		);
		$jsonData['rows'][] = $entry;
	}

 	 
           $this->template = json_encode($jsonData);
     }

     public function after() {
		$this->response->body($this->template);
     }
}