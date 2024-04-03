<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_models extends CI_Model {

    public function Calendar_model() {
        $this->load->database();
        $query = $this->db->get('calendar'); 
        return $query->result_array();
    }
}