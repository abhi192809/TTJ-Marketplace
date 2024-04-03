<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_models extends CI_Model {
    
    public function get_all_mail() {
        $this->load->database();
        $q = $this->db->get('led');
        return $q->result_array();
    }
    public function get_filter_mail($search_value) {
        $this->load->database();
        $this->db->like('mail', $search_value, 'after');
        $q = $this->db->get('led');

        return array('mail' => $q->result_array());
    }
}
