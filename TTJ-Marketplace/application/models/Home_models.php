<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_models extends CI_Model {

    public function Calendar_model() {
        $this->load->database();
        $query = $this->db->get('calendar'); 
        return $query->result_array();
    }
    public function Services_model() {
        $this->load->database();
        $query = $this->db->get('our_services'); 
        return $query->result_array();
    }
    public function getTestimonials($table) {
        $this->load->database();
        $query = $this->db->get($table);
        return $query->result_array();
    }
    
}