<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updateplace_models extends CI_Model {

    public function updateplace($last_segment) {
        $this->load->database();

        // Convert $last_segment to lowercase
        $last_segment_lower = strtolower($last_segment);
        $q1 = $this->db->get_where('city', array('City_filter' => $last_segment_lower));
        return $q1->result_array(); 
    }
    
     public function updateCity($last_segment,$data_hidden) {
        $this->load->database();
       $this->db->where('City_filter', $data_hidden); // Assuming 'City_filter' is the column to match
        $q1 = $this->db->update('city',$last_segment);
        
        // Check if the update was successful
        if ($q1) {
            // Update successful, you can return a success message or any other data
            return array('status' => 'success', 'message' => 'Record updated successfully');
        } else {
            // Update failed, you can return an error message or handle it as needed
            return array('status' => 'error', 'message' => 'Failed to update record');
        }
    }
}
