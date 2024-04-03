<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads_models extends CI_Model {
    
    public function getcity() {
        $this->load->database();
        $q = $this->db->get('city');
        return $q->result_array();
    }
    public function adsdatabase($data){
        $this->load->database();
         $this->db->insert('Ads_place', $data);

    // Check if the insertion was successful
    if ($this->db->affected_rows() > 0) {
        // Insertion successful, return true or any other meaningful response
        return true;
    } else {
        // Insertion failed, return false or handle the error accordingly
        return false;
    }
    }
    
     public function sleepplace($city_id) {
             $this->load->database();
    
        // Your database update logic here
        $data = array(
            'status' => 0
        );
        $this->db->where('id', $city_id);
        $this->db->update('Ads_place', $data);
    }
    
    public function getads(){
    $this->load->database();
    $this->db->select('Ads_place.*, city.City_filter');
    $this->db->from('Ads_place');
    $this->db->join('city', 'Ads_place.place_id = city.id', 'left');
    $q = $this->db->get();
    return $q->result_array();
    }
    


}
