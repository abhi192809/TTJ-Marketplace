<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addplace_models extends CI_Model {

    public function insertCity($data) {
        $this->load->database();
        $this->db->insert('city', $data);
        return $this->db->insert_id(); // Return the ID of the inserted record
    }
}
