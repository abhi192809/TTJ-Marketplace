<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_models extends CI_Model {
    
    public function getcity() {
        $this->load->database();
        $q = $this->db->get('country');
        return $q->result_array();
    }
    public function getplace() {
        $this->load->database();
        $q = $this->db->set('City_filter');
        $q = $this->db->get('city');
        return $q->result_array();
    }
}
