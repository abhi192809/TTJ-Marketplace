<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

public function Get_User_data() {
    $this->db->select('ME.*, ML.username, ML.Type,ML.password'); // Fixed the typo in the select clause
    $this->db->from('Merket_place_employees ME');
    $this->db->join('Merket_place_Login ML', 'ME.email = ML.username', 'inner');
    $query = $this->db->get();
    return $query->result();
}


 
}
