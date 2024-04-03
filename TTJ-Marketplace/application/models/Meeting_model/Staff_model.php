<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {

    
    public function Staff() {
        
    $query = $this->db->get('Marketplace_User_Master');
    return $query->result();
    
    }
    
    public function save_employee_data($data) {
        // Insert data into your database table
        $this->db->insert('Merket_place_employees', $data);

        // Return true if the insertion was successful, otherwise false
        return $this->db->affected_rows() > 0;
    }
    
    public function employee_data_login($employee,$password,$Type){
        $data =[
              'username'=>$employee,
              'password' =>$password,
              'Type' =>$Type,
            ];
        $this->db->insert('Merket_place_Login', $data);
         return $this->db->affected_rows() > 0;
    }


}
