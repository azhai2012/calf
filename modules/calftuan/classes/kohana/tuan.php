<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Tuan {

    private $_id;
    private $_data = array();
    private $_calfdb;
    private $_template_content = NULL;
    private $_template_left = NULL;
	private $_template_right = NULL;


    public static function factory($id, array $data = NULL) {
        return new Kohana_Tuan($id, $data);
    }

    function __construct($id, array $data = NULL) {
        $this->_id = $id;
        $this->_data = $data;
        $this->_calfdb = Calfdb_Tuan::factory($this->_id,$this->_data);
        $this->_template_content = View::factory('tuan/content');
        $this->_template_left = View::factory('tuan/left');
        $this->_template_right = View::factory('tuan/right');
    }

    public function get_tuan_content() {
        $this->_template_content->get_tuan_left_content= $this->get_tuan_left_content();
       	$this->_template_content->get_tuan_right_content= $this->get_tuan_right_content();
        return $this->_template_content;
    }
    
    private function get_tuan_right_content(){
	    $this->_template_right->array_data = $this->_calfdb->get_tuan_right_content();
        return $this->_template_right;
    }
   
    private function get_tuan_left_content(){
        $this->_template_left->array_data = $this->_calfdb->get_tuan_left_content();
        return $this->_template_left;
    }
    
    

}
