<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emagazine_model extends CI_Model {

    public function  MagazineSection_upload() {
        $this->load->database();
         $this->db->order_by('id', 'DESC');
        $query = $this->db->get('MagazineSection_upload'); 
        return $query->result_array();
    }
}