<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DowanloadCertificate_model extends CI_Model {
    
    public function Getdata(){
        $this->db->distinct();
        $this->db->select('company_name');
        $query = $this->db->get('TTJ_Travmart_Event_Certificate');
        return $query->result_array(); 
    }


    public function find_certificate($name, $company_name) {
        // Modify the table name and field names based on your database structure
        $this->db->from('TTJ_Travmart_Event_Certificate'); // Adjust table name
        $this->db->where('name', $name);
        $this->db->where('company_name', $company_name);

        $query = $this->db->get();
        return $query->row_array(); // Return the first row found
        
    }
}
?>
