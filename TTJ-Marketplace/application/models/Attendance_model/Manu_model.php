<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manu_model extends CI_Model {
    
    public function merket_place_user() {
        $this->load->database();
        $q1 = $this->db->get('Attendance_login');
        return $q1->result_array();  
    }

    public function Attendance_manu() {
        $this->load->database();
        $q2 = $this->db->get('Attendance_manu');
        return $q2->result_array();  
    }
    
     public function insertPremition($menuId, $userId) {
         $this->load->database();
        $data = array(
            'Attendance_manu_id' => $menuId,
            'Attendance_login_id' => $userId
        );
        $this->db->insert('Attendance_manu_permition', $data);
    }
    
      public function Manu_get_all_row($user_Id) {
        $this->load->database();
        $this->db->where('Attendance_login_id', $user_Id);
        $q2 = $this->db->get('Attendance_manu_permition');
        return $q2->result_array();
    }
    
    public function Manu_get_all_array($data_manu){
         $this->load->database();
         $this->db->where('id',$data_manu);
        $q2 = $this->db->get('Attendance_manu');
        return $q2->result_array();  
    }
    
}
?>
