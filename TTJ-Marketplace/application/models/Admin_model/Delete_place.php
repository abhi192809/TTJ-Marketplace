<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_place extends CI_Model {
    
    public function deleteplace($data){
      $this->load->database(); //Assuming this initializes the database connection
      $this->db->where('id', $data);  // Specifies the condition for deletion (where id = $data)
      $q1 = $this->db->delete('city');  // Executes the delete query on the 'city' table
    }
}
