<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_models extends CI_Model {

    
     public function marketplaceuser() {
       $this->load->database();
       $q1 = $this->db->get('merket_place_user');
       return $q1->result_array(); 
         
     }
}
