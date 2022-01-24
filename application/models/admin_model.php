<?php
class admin_model extends MY_Model {
	public function __construct() {
		parent::__construct();
	}
    public function staff_signin($gmail,$password) {    
        $this->db->where('gmail',$gmail);
        $this->db->where('password',$password);
        $this->db->where('deleted','0');
        return $this->db->get('staff')->result_array();
    }
}