<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {

 public function insert_nature_of_business($natureOfBusiness) {
        $data = array(
            'Nature_of_Business' => $natureOfBusiness
        );
        return $this->db->insert('Merket_place_Nature_of_Business_Master', $data);
    }

    public function update_nature_of_business($id, $updatedNatureOfBusiness) {
        $data = array(
            'Nature_of_Business' => $updatedNatureOfBusiness
        );
        $this->db->where('id', $id);
        return $this->db->update('Merket_place_Nature_of_Business_Master', $data);
    }
    
    public function Merket_place_Nature_of_Business_Master() {
        $query = $this->db->get('Merket_place_Nature_of_Business_Master');
        return $query->result();
    }
    
    
    public function Merket_place_Business_Category_Master() {
        $query = $this->db->get('Merket_place_Business_Category_Master');
        return $query->result();
    }
    
    
    public function delete_nature_of_business($id) {
        $this->db->where('id', $id);
        return $this->db->delete('Merket_place_Nature_of_Business_Master');
    }
    
    
    public function insert_Business_Category($Business_Category){
        $data = array(
            'Business_Category' => $Business_Category
        );
        return $this->db->insert('Merket_place_Business_Category_Master', $data);
     
    }

   public function update_Business_Category($id, $updatedBusiness_Category){
        $data = array(
            'Business_Category' => $updatedBusiness_Category
        );
        
        $this->db->where('id', $id);
        return $this->db->update('Merket_place_Business_Category_Master', $data);
   }

   public function delete_Business_Category($id) {
        $this->db->where('id', $id);
        return $this->db->delete('Merket_place_Business_Category_Master');
    }
    
    
   public function  Merket_place_Enquary_Master(){
        $query = $this->db->get('Merket_place_Enquary_Master');
        return $query->result();
   }
   
   
   public function insert_Enquary($insert_Enquary){
            $data = array(
            'Enquary' => $insert_Enquary
        );
        return $this->db->insert('Merket_place_Enquary_Master', $data);
   
   }
   
   public function update_Enquary($id, $updatedEnquary){
         $data = array(
            'Enquary' => $updatedEnquary
        );
        
        $this->db->where('id', $id);
        return $this->db->update('Merket_place_Enquary_Master', $data);
   
   }
   
   public function delete_Enquary($id){
        $this->db->where('id', $id);
        return $this->db->delete('Merket_place_Enquary_Master');
   }
    
    
    public function insert_company($data) {
        return $this->db->insert('Market_place_Companies', $data);
    }
    
    public function Market_place_Companies_Master(){
        
        $query = $this->db->get('Market_place_Companies');
        if($query->num_rows() > 0){
        return $query->result();
        }else{
         return  NULL;
        }
    }
 public function Get_company_Master($id){
    $this->db->where('id', $id);
    $query = $this->db->get('Market_place_Companies');
    if($query->num_rows() > 0){
        return $query->row_array(); // Return a single row as an associative array
    } else {
        return NULL;
    }
}
 public function update_company($id, $data) {
        // Update company details in the database
        $this->db->where('id', $id);
        $this->db->update('Market_place_Companies', $data);
        // Check if the update was successful
        return $this->db->affected_rows() > 0;
    }
    
    
    public function delete_item($id) {
        // Perform the deletion of the item with the given ID
        $this->db->where('id', $id);
        $result = $this->db->delete('Market_place_Companies'); // Replace 'your_table_name' with your actual table name
        return $result;
    }
    
}
