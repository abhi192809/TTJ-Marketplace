<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadexel_model extends CI_Model {

      public function processFile($data) {
        $this->db->insert('TTJ_Travmart_Event_Exel', $data);

        return ($this->db->affected_rows() > 0) ? true : false;
    }
    public function UploadExel(){
         $Q1 = $this->db->get('TTJ_Travmart_Event_Exel');
         
         return $Q1->result_array(); 
    }
}
?>
