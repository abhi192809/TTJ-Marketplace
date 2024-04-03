<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manu_model extends CI_Model {
    
    public function merket_place_user() {
        $this->load->database();
        $q1 = $this->db->get('merket_place_user');
        return $q1->result_array();  
    }

    public function merket_manu() {
        $this->load->database();
        $q2 = $this->db->get('merket_manu');
        return $q2->result_array();  
    }
    
     public function insertPremition($menuId, $userId) {
         $this->load->database();
        $data = array(
            'market_manu_id' => $menuId,
            'market_place_user_id' => $userId
        );
        $this->db->insert('merket_place_manu_premition', $data);
    }
    
      public function Manu_get_all_row($user_Id) {
        $this->load->database();
        $this->db->where('market_place_user_id', $user_Id);
        $q2 = $this->db->get('merket_place_manu_premition');
        return $q2->result_array();
    }
    
    public function Manu_get_all_array($data_manu){
         $this->load->database();
         $this->db->where('id',$data_manu);
        $q2 = $this->db->get('merket_manu');
        return $q2->result_array();  
    }
    
}
?>
