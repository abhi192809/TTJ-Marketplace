<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PreRegistration_models extends CI_Model {
    
    public function checkEmailExists($email) {
         $this->load->database();
        $query = $this->db->get_where('pre_registration', array('Email' => $email));
        return $query->num_rows() > 0;
    }

    public function insertRegistration($data) {
         $this->load->database();
        $this->db->insert('pre_registration', $data);
    }
    
}
