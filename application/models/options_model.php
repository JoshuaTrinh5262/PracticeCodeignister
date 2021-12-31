<?php
class options_model extends MY_Model {
	public function __construct() {
		parent::__construct();	
	}
	public function get() {
        return $this->db->get('options')->result_array();
    }
}