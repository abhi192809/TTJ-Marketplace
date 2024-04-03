<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends CI_Model {
    
    public function get_cities(){
      $this->db->order_by('id', 'DESC');
      $quary =  $this->db->get("Merket_Place_cities");
      return $quary->result();
        
    }


    public function get_lead(){
     $this->db->order_by('id', 'DESC');
      $quary =  $this->db->get("Merket_Place_lead_form_data");
      return $quary->result();
        
    }
    
    public function get_seller(){
     $this->db->order_by('SellerID', 'DESC');
      $quary =  $this->db->get("Merket_place_Sellers");
      return $quary->result();
        
    }
     
    
    public function insert_lead_data($data){

    $query = $this->db->insert("Merket_Place_lead_form_data", $data);
       if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
   public function Approved_Entry_give($data) {
    $this->db->where('id', $data['id']);
    $this->db->update('Merket_Place_lead_form_data', $data);
    
    if ($this->db->affected_rows() > 0) {
        return true; // Return true if update was successful
    } else {
        return false; // Return false if update failed
    }
}


    
}
