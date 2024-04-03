<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Model extends CI_Model {

     public function insertEmployee($data) {
        // Insert data into the 'employees' table (adjust the table name as needed)
        $this->db->insert('Attendance_employs', $data);
    }
}