<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

     public function insertlogindata($data) {
        $this->db->insert(' Attendance_login', $data);
    }
     public function Data_from($username, $password) {
        $this->db->where('User_name', $username);
        $this->db->where('Password', $password);
        $this->db->where('on_or_off', 'on');
        $query = $this->db->get('Attendance_login');

        if ($query->num_rows() == 1) {
        // Return the user data including 'id'
        return array('result' => true, 'user_data' => $query->row_array());
    } else {
        return array('result' => false);
    }
    }
    public function Logintime($data) {
        $this->db->where('Name', $data['Name']);
        $this->db->where('Date', $data['Date']);
        $query = $this->db->get('Attendance_time');

        if ($query->num_rows() == 0) {
            // If no entry exists for the same user on the same day, insert the data
            $this->db->insert('Attendance_time', $data);
            return true; // Indicate successful insertion
        }

        return false; // Entry already exists, no insertion performed
    }
}