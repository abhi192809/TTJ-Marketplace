<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_models extends CI_Model {
    
    public function SeeAlldestination() {
        $this->load->database();
        $query = $this->db->get('city');
        return $query->result_array();
    }
    public function Cityidget($value) {
        $this->load->database();
         $this->db->select('Country_id,City_filter');
        $query = $this->db->get_where('city', array('Country_id' => $value));
        return $query->result_array();
    }
}
