<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marketplace_models extends CI_Model {
    
    public function getCountry($searchTerm) {
        $this->load->database();
        $this->db->select('id, name');
        $this->db->from('country');
        $this->db->like('name', $searchTerm, 'after');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array(); // Return an empty array if no results found
        }
    }

    public function getCities($searchTerm, $countryId) {
          $this->load->database();
        $this->db->select('id, Country_id, City_filter');
        $this->db->from('city');
        $this->db->where('Country_id', $countryId);
        $this->db->like('City_filter', $searchTerm, 'after');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array(); // Return an empty array if no results found
        }
    }
    public function insert_mail($email){
         $this->load->database();
         $user_ip = $this->input->ip_address();
         $hashed_ip = md5($user_ip);
         $this->db->insert('led', array('mail' => $email,'ip' =>$hashed_ip));
        
         
    }
    
}
