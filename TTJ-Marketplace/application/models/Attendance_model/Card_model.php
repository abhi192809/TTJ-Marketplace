<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card_model extends CI_Model {
   
    public function TTJ_Travmart_Card(){
        $this->db->order_by('id', 'DESC'); 
       $data = $this->db->get('TTJ_Travmart_Card');
        return $data->result_array();
    }
     public function insertFormData($data) {
        $this->db->insert('TTJ_Travmart_Card', $data);
    }
      public function updateCardData($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('TTJ_Travmart_Card', $data); // Replace with your actual table name
    }
       public function magazineactive($id, $data){
        $this->db->where('id', $id);
        $result = $this->db->update('TTJ_Travmart_Card', $data);
    
        if ($result) {
            // Database update was successful
            return 1;
        } else {
            // Database update failed
            // You might want to log the error or handle it in some way
            return 0;
        }
    }
    
       public function magazineunactive($id, $data){
        $this->db->where('id', $id);
        $result = $this->db->update('TTJ_Travmart_Card', $data);
    
        if ($result) {
            // Database update was successful
            return 1;
        } else {
            // Database update failed
            // You might want to log the error or handle it in some way
            return 0;
        }
    }
    
    public function TTJ_Travmart_Card_dowaload() {
    $this->db->where('magazine', '1');
    $data = $this->db->get('TTJ_Travmart_Card');
    return $data->result_array();
}

   
}