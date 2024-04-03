<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate_model extends CI_Model {
    public function insert_certificate($data) {
        // Insert data into your database
        // Modify this based on your database structure
        $this->db->insert('TTJ_Travmart_Event_Certificate', $data);

        return $this->db->insert_id(); // Return the inserted record ID
    }
}
?>
