<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-16 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Cms_ModManager extends Kohana_Calfdb_Cms  {
  	
        private $_id ;
        private $_data = array();
        private $_db;

   	function __construct($id,array $data=NULL){
	       
		$this->_id = $id;
		$this->_data= $data;
	        $this->_db = parent::_calgdb();
	      
	}  
 
              
	public function set_cms_mods_info(){
            switch ($this->_id){
	        case "add":    return $this->add_mods(); break;
	        case "modity": return $this->modity_mods(); break; 
	        case "delete": return $this->delete_mods(); break; 		
            }
        }

        public function get_cms_mods_home_array_data(){
	  	 $data = array(
		          array('id'=>1,'lists'=>array(
			      array('name'=>'area','display_name'=>'展区管理','icon'=>'/media/images/home1.gif','description'=>'主页显示的展区设置'),
		              array('name'=>'product','display_name'=>'展区商品管理','icon'=>'/media/images/home2.gif','description'=>'主页显示的展区的商品设置'),
		             ),
	                   ),
			 array('id'=>2,'lists'=>array(
			      array('name'=>'ads','display_name'=>'广告管理','icon'=>'/media/images/home3.gif','description'=>'主页显示的广告设置'),
		              array('name'=>'info','display_name'=>'信息管理','icon'=>'/media/images/home4.gif','description'=>'主页显示的其他信息设置'),
	                     ),
	                   ),
		       );
	     return  $data;
        }

        /**
        * 
        */
        public function get_cms_mods_manager_array_data() {
            // TODO :
	    $params= $this->_data;
	    $qtype = $params['qtype'];
	    $query =$params['query'];
	  
	    if ($query) 
	    switch ($qtype){
	       case 'is_active': $query = array($qtype =>$query); break;
	       case 'id': $query = array($qtype => (int)$query); break;
	       case 'flag': $query = array($qtype => $query); break;
	
	       default: $query = array($qtype => new MongoRegex("/^$query/i"));
            }
            else $query=array();

	    $limit = array('sortorder'=>$params['sortorder'],'sortname'=>$params['sortname'],'limit'=>$params['prepage'],'skip'=>$params['page']);
   	    $array_data =array(
	                       'total'=>$this->_db->count('cms_mods',$query),
                               'rows'=>$this->_db->find_limit('cms_mods',$query,array(),$limit)
                               );
             
            return $array_data;
        }

       
       /**
        * 删除商品
        */
        private function delete_mods() {
            // TODO :
            $params = $this->_data;
            $ary=array("id"=>(int)$params['id']);
            $return =$this->_db->remove('cms_mods',$ary);
            return  $return;
        } 

        /**
        * 检查商品是否存在
        */
        private function check_mods_id($id) {
            // TODO :
            $array_data = $this->_db->find_One('cms_mods',$id);
            return $array_data;
        }

        /**
         * 增加商品
         */
        private function add_mods(){
	      $params = $this->_data;
	      $id= array("id"=>(int)$params['id']);   

	      if ($this->check_product_id($id)) 
	         return "-1";     
                
 
               $return =$this->_db->insert('cms_mods',$ary);
               return  $return;

        } 

 
        /**
         *  修改信息
         */
        private function modity_mods(){
	    return  $return;
        }

}

