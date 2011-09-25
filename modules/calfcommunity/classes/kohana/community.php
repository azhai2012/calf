<?php  defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Community {

    private $_id;
    private $_data = array();
    private $_CaldDB;

    public static function factory($id, array $data = NULL) {
        return new Kohana_Community($id, $data);
    }

    function __construct($id, array $data = NULL) {
        $this->_id = $id;
        $this->_data = $data;
        $this->_CaldDB = Calfdb_Community::factory($this->_id,$this->_data);
    }

    public function get_community_content() {

        $template = View::factory('community/content'); 
        $template->get_community_left_content = $this->get_community_left_content();
        $template->get_community_right_content = $this->get_community_right_content();
        return $template;
    }

    private function get_community_left_content() {
      
       	$array_data = $this->_CaldDB->get_community_left_content();
	    
        $template = View::factory('community/left');
        $template->array_data = $array_data; 
 
        return $template;
    }

     private function get_community_right_content() {
        $array_data =$this->_CaldDB->get_community_right_content(); 
	$template = View::factory('community/right'); 
	$template->array_data = $array_data;		
        return $template;
    }
    
    
}
