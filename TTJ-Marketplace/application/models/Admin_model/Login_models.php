<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_models extends CI_Model {
    
    public function verify_user($username, $password) {
        $this->load->database();
        $this->db->where('Email', $username);
        $query = $this->db->get('merket_place_user');
        $user = $query->row_array();
    
        // Verify the password using MD5
        if (!empty($user) && $user['Password'] === md5($password)) {
            return $user;
        } else {
            return array(); // Return an empty array if verification fails
        }
    }

}
?>
