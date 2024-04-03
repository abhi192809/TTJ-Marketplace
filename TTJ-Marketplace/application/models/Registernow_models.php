<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registernow_models extends CI_Model {
    
    public function submit_Registernow() {
         $this->load->database();
         $query = $this->db->get_where('TTJ_Travmart_Event', array('Active' => 1));
        return $query->result_array();
    }
    public function insert_data($table_name,$data) {
        $this->load->database();
        $this->db->insert($table_name, $data);
        return $this->db->affected_rows() > 0;
    }
}
