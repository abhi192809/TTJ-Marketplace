<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteAccommodation_models extends CI_Model {
    
    public function Accommodation_Delete($q) {
        $this->load->database();
        $q = $this->db->get('country');
        return $q->result_array();
    }

}
